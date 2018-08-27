<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require_once('sqlite3.php');
require_once('service/Coin.php');
// $sqlite = new SQLite();
$sqlite = new SQLite('dataBase/income.db');
$coinObj = new Coin();
//获取所有的币信息
$coins = $sqlite->getlist('select * from coin where is_del=0');
function fixAlgo($algo){
    return str_replace([' (',')','('],'',$algo);
}
$filterCoins = [
    'xsh'=>'XSH(X17)',
    'xsh'=>'XSH(Lyra2v2)	',
    'xvglyra2rev2'=>'XVG(Lyra2v2)',
    'xvgx17'=>'XVG(X17)',
    'xvgblake2s'=>'XVG(Blake2s)',
];
$minerCoins = [];
//映射信息

foreach ($coins as $k => $c) {
    $info = $coinObj->getCoinBaseRewardsAndUnit($c);
    $coinName = strtolower($c['symbol'].fixAlgo($c['algo']));
    $symbol = isset($filterCoins[$coinName])?$filterCoins[$coinName]:$c['symbol'];
    $minerCoins[$symbol] = [
        'symbol'=> $symbol,
        'unit'=> $info['unit'],
        'algo'=> $c['algo'],
        'estimated_rewards'=> $info['estimated_rewards'],
        'btc_revenue'=> $info['btc_revenue'],
        'cny'=> empty($c['cny'])?"":$c['cny'],
        'usd'=> empty($c['usd'])?"":$c['usd'],
    ];
}
echo json_encode($minerCoins);
 ?>
