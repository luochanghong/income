<?php
/*************
参数格式 参数不区分大小写
    Ethash=250Mh/s
    PHI1612=250h/s
    TimeTravel10 = 11.00Mh/s
*/
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
//获取币种信息得到币种的单位信息
$filterCoins = [
    'xsh'=>'XSH(X17)',
    'xsh'=>'XSH(Lyra2v2)',
    'xvglyra2rev2'=>'XVG(Lyra2v2)',
    'xvgx17'=>'XVG(X17)',
    'xvgblake2s'=>'XVG(Blake2s)',
];
$algoSpeed = $coinObj->formatAlgoParam($params); //将传过来的参数格式化
$coins = $sqlite->getlist('select * from coin where is_del=0');
$userCoin = [];
foreach ($coins as $k => $c) {
    $algo = $coinObj->fixAlgo($c['algo']);
    if(isset($algoSpeed[$algo])){
        //获取币种的单位产量
        $rewardInfo = $coinObj->getCoinBaseRewardsAndUnit($c);
        $estimated_rewards_btc = $rewardInfo['btc_revenue']; //获取btc产量
        if($c['symbol'] == 'BTC'){
            //var_dump($rewardInfo);
            $ethCoin =$sqlite->getlist('select * from coin where symbol="ETH"');
            if(count($ethCoin)){
                $rewardInfo = $coinObj->getCoinBaseRewardsAndUnit($ethCoin[0]);
                $algo = $coinObj->fixAlgo($ethCoin[0]['algo']);
            }
        }
        $coinName = strtolower($c['symbol'].$algo);
        $img_url = $c['img_upload'];
        if(empty($img_url)){
            $img_url = $c['img_url'];
        }
        $estimated_rewards24 = bcmul($rewardInfo['estimated_rewards'],$algoSpeed[$algo],5);
        $speed = $algoSpeed[$algo];
        if($c['symbol'] == 'BTC'){
            $estimated_rewards24 = bcmul($rewardInfo['btc_revenue'],$algoSpeed[$algo],5);
            $speed = bcdiv($estimated_rewards24,$estimated_rewards_btc);
        }
        $cny = empty($c['cny'])?"":$c['cny'];
        $coin = [
            'symbol' => isset($filterCoins[$coinName])?$filterCoins[$coinName]:$c['symbol'],
            "block_time" => empty($c['block_time'])?"":$c['block_time'],
            "last_block" => empty($c['last_block'])?"":$c['last_block'],
            "nethash" => empty($c['nethash'])?"":$c['nethash'],
            "exchange_rate_vol" => empty($c['exchange_rate_vol'])?"":$c['exchange_rate_vol'],
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
            'base_income' => $rewardInfo['estimated_rewards'],
        ];
        $userCoin[] = $coin;
    }
}
echo json_encode($coinObj->arraySequence($userCoin,'income'));
?>
