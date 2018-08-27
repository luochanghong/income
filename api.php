<?php
header('Access-Control-Allow-Origin:*');
$params = $_GET; //card=1
require_once('sqlite3.php');
require_once('service/whattominel_config.php');
require_once('service/Coin.php');
$sqlite = new SQLite('dataBase/income.db');
$coinObj = new Coin();
if(!is_array($params) || !count($params)){
    echo json_encode([]);
    exit;
}
// //去除算法中的括号（
// function fixAlgo($algo){
//     return strtolower(str_replace([' (',')','('],'',$algo));
// }
$param_key = array_keys($params);
$minerAlgo = [
    "phi1612"=> 0,
    "zhash"=> 0,
    "cnheavy"=> 0,
    "neoscrypt"=> 0,
    "lyra2rev2"=> 0,
    "phi2"=> 0,
    "timetravel10"=> 0,
    "equihash"=> 0,
    "ethash"=> 0,
    "cryptonightv7"=> 0,
    "x16r"=> 0,
    "lyra2z"=> 0,
    "xevan"=> 0,
    "tensority" =>0,
    "equihashaion"=>0,
    "sha256" => 0,
    "x13" => 0,
    "x17" => 0,
];//支持的算力基本算力
foreach ($param_key as $card) {
    if(isset($CARDSPEEDINFO[strtolower($card)])){//检测显卡是否支持
        foreach ($CARDSPEEDINFO[strtolower($card)] as $algo => $v) {
            if(isset($minerAlgo[$algo])){
                $minerAlgo[$algo] = $minerAlgo[$algo] + $v*$params[$card];
            }
        }
    }
}
//获取币种信息得到币种的单位信息
$filterCoins = [
    'xsh'=>'XSH(X17)',
    'xsh'=>'XSH(Lyra2v2)',
    'xvglyra2rev2'=>'XVG(Lyra2v2)',
    'xvgx17'=>'XVG(X17)',
    'xvgblake2s'=>'XVG(Blake2s)',
];
$coins = $sqlite->getlist('select * from coin where is_del=0');
$userCoin = [];

foreach ($coins as $k => $c) {
    $algo = $coinObj->fixAlgo($c['algo']);
    if(isset($minerAlgo[$algo])){
        $coinName = strtolower($c['symbol'].$algo);
        $symbol = isset($filterCoins[$coinName])?$filterCoins[$coinName]:$c['symbol'];
        //获取币种的单位产量
        $rewardInfo = $coinObj->getCoinBaseRewardsAndUnit($c);
        $estimated_rewards_btc = $rewardInfo['btc_revenue'];
        $speed = $minerAlgo[$algo];
        if($c['symbol'] == 'BTC'){
            //var_dump($rewardInfo);
            $ethCoin =$sqlite->getlist('select * from coin where symbol="ETH"');
            if(count($ethCoin)){
                $rewardInfo = $coinObj->getCoinBaseRewardsAndUnit($ethCoin[0]);
                $algo = $coinObj->fixAlgo($ethCoin[0]['algo']);
            }
        }

        $img_url = $c['img_upload'];
        if(empty($img_url)){
            $img_url = $c['img_url'];
        }
        $estimated_rewards24 = bcmul($rewardInfo['estimated_rewards'],$minerAlgo[$algo],5);
        // $estimated_rewards24 = bcmul($rewardInfo['estimated_rewards'],$algoSpeed[$algo],5);
        if($c['symbol'] == 'BTC'){
            $estimated_rewards24 = bcmul($rewardInfo['btc_revenue'],$minerAlgo[$algo],5);
            $speed = bcdiv($estimated_rewards24,$estimated_rewards_btc);
        }
        $cny = empty($c['cny'])?"":$c['cny'];
        $coin = [
            'symbol' => $symbol,
            "block_time" => empty($c['block_time'])?"":$c['block_time'],
            "last_block" => empty($c['last_block'])?"":$c['last_block'],
            "nethash" => empty($c['nethash'])?"":$c['nethash'],
            "exchange_rate_vol" =>empty($c['exchange_rate_vol'])?"":$c['exchange_rate_vol'],
            "block_reward" => $c['block_reward'],
            "estimated_rewards24" => "",
            "estimated_rewards" => $estimated_rewards24,
            "algo" => $c['algo'],
            "difficulty" => empty($c['difficulty'])?"":$c['difficulty'],
            "change_1h" => empty($c['change_1h'])?"":$c['change_1h'],
            "usd" => empty($c['usd'])?"":$c['usd'],
            "cny" => $cny,
            'unit' => $rewardInfo['unit'],
            'speed' => $speed,
            'img_url'=>$img_url,
            'income' =>  bcmul($estimated_rewards24,$cny,5),
        ];
        $userCoin[] = $coin;
    }
}


echo json_encode($coinObj->arraySequence($userCoin,'income'));
