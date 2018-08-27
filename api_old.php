<?php
/*************
直接返回whattomine的数据信息
*/

header('Access-Control-Allow-Origin:*');
$params = $_GET; //card=1
// var_dump($params);die;
require_once('sqlite3.php');
$sqlite = new SQLite('dataBase/income.db');
if(!is_array($params) || !count($params)){
    echo json_encode([]);
    exit;
}
$coinInfo = [];

$cardRewardInfo = json_decode(file_get_contents('coins_cell_reward_json.txt'),true);//获取所有显卡币种实时产量
//根据显卡信息获取数据
foreach ($params as $card => $num) {
     if(isset($cardRewardInfo[$card])){//判断显卡信息是否存在
         $cardInfo = $cardRewardInfo[$card];
         foreach ($cardInfo as $symbol => $cInfo) {
             $estimated_rewards24 = $cInfo['estimated_rewards24'];
             $estimated_rewards = $cInfo['estimated_rewards'];
             if(!isset($coinInfo[$symbol])){//将多个显卡所支持的币种合在一起
                 $coinInfo[$symbol] = $cInfo;
                 $coinInfo[$symbol]['estimated_rewards24'] = $estimated_rewards24 * (int)$num;
                 $coinInfo[$symbol]['estimated_rewards'] = $estimated_rewards * (int)$num;
             }else{
                 $coinInfo[$symbol]['estimated_rewards24'] = bcadd($coinInfo[$symbol]['estimated_rewards24'],$estimated_rewards24 * (int)$num,5);
                 $coinInfo[$symbol]['estimated_rewards'] = bcadd($coinInfo[$symbol]['estimated_rewards'],$estimated_rewards * (int)$num,5);
             }
         }
     }
}
//获取所有的币种
$miner_coins = $sqlite->getlist('select * from coin');
$minerCoins = [];
foreach ($miner_coins as $k => $c) {
    $minerCoins[$c['symbol']] = $c;
}
foreach ($coinInfo as $k => &$mc) {
    if(isset($minerCoins[$k])){
        $mc['img_url'] = $minerCoins[$k]['img_url'];
        if(empty($minerCoins[$k]['img_url'])){
            $mc['img_url'] = $minerCoins[$k]['img_upload'];
        }
    }

    if($k == 'NICEHASH' && isset($minerCoins['BTC'])){
        $mc['img_url'] = $minerCoins['BTC']['img_url'];
        if(empty($minerCoins['BTC']['img_url'])){
            $mc['img_url'] = $minerCoins['BTC']['img_upload'];
        }
    }
}
echo json_encode(array_values($coinInfo));
 ?>
