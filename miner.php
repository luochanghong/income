<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require_once('sqlite3.php');
$sqlite = new SQLite('dataBase/income.db');
$status = true;
$msg = '';
/*
*获取币的基本收益
*/
function getCoinBaseRewardsAndUnit($coin){
    $info = getBaseInfo();
    if(!is_array($coin)){
        return $info;
    }
    if(empty($coin['unit']) || empty($coin['estimated_rewards']) && empty($coin['btc_revenue']) || !$coin['text_speed']){//信息不完整的没有想好怎么处理
    }else{
        $rateInfo =fixCoinUnit($coin['unit']);
        $cell = bcmul($coin['text_speed'],$rateInfo['rate']);//保留整数,多少份基础值
        $info['unit'] =$rateInfo['unit'];
        $info['estimated_rewards'] = rtrim(rtrim(bcdiv($coin['estimated_rewards'],$cell,22),0),'.');
        $info['btc_revenue'] = rtrim(rtrim(bcdiv($coin['btc_revenue'],$cell,22),0),'.');
    }

    return $info;
}

function getBaseInfo(){
    return ['estimated_rewards'=>0,'btc_revenue'=>0,'unit'=>'h/s'];
}

/*
*单位量级计算
*　不支持的单位返回h/s
*/
function fixCoinUnit($unit){
    $unit = strtolower($unit);
    $hu = ['h/s' => pow(10,0),'kh/s' => pow(10,3),'mh/s' => pow(10,6),'gh/s' => pow(10,9),'th/s' => pow(10,12)];
    $su = ['sol/s' => pow(10,0),'ksol/s' => pow(10,3),'msol/s' => pow(10,6),'gsol/s' => pow(10,9),'tsol/s' => pow(10,12)];
    if(!isset($hu[$unit]) && !isset($su[$unit])){
        // $msg = '不支持的币单位:'.$unit.PHP_EOL;
        return ['rate'=>1,'unit'=>$unit];
    }
    if(isset($su[$unit])){
        return ['rate'=>$su[$unit],'unit'=>'sol/s'];
    }

    return ['rate'=>$hu[$unit],'unit'=>'h/s'];
}

//获取所有的币信息
$coins = $sqlite->getlist('select * from coin where is_del=0');
function fixAlgo($algo){
    return str_replace([' (',')','(','-'],'',$algo);
}
//映射币种信息
$filterCoins = [
    'xsh'=>'XSH(X17)',
    'xsh'=>'XSH(Lyra2v2)',
    'xvglyra2rev2'=>'XVG(Lyra2v2)',
    'xvgx17'=>'XVG(X17)',
    'xvgblake2s'=>'XVG(Blake2s)',
];

/********接口返回数据处理********/

$minerCoins = [];
foreach ($coins as $k => $c) {
    $info = getCoinBaseRewardsAndUnit($c);
    $coinName = strtolower($c['symbol'].fixAlgo($c['algo']));
    $symbol = isset($filterCoins[$coinName])?$filterCoins[$coinName]:$c['symbol'];
    $minerCoins[$symbol] = [
        'symbol'=> $symbol,
        'unit'=> $info['unit'],
        'algo'=> $c['algo'],
        'estimated_rewards'=> $info['estimated_rewards'],
        'btc_revenue'=> $info['btc_revenue'],
        'cny'=> empty($c['cny'])?"0.000000":$c['cny'],
        'usd'=> empty($c['usd'])?"0.000000":$c['usd'],
    ];
}

// echo json_encode([
//     'status' => $status,
//     'msg' => $msg,
//     'data'=>$minerCoins,
// ]);
echo json_encode($minerCoins);
 ?>
