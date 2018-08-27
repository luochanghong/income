<?php
header('Access-Control-Allow-Origin:*');
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
// require_once('common.php');
require_once('service/whattominel_config.php');
require_once('service/Whattominel.php');
require_once('service/Coinmarketcap.php');
require_once('sqlite3.php');
function fixCoinInfo($whattomineInfo,$coinmarkInfo){
    foreach ($whattomineInfo as $k => &$info) {
        if(isset($coinmarkInfo[$info['symbol']]) || $info['symbol'] == 'NICEHASH'){
            if($info['symbol'] == 'NICEHASH' && isset($coinmarkInfo['BTC'])){
                //echo "合并信息成功".PHP_EOL;
                $info['change_1h'] = trim($coinmarkInfo['BTC']['change_1h']);
                $info['usd'] = trim($coinmarkInfo['BTC']['usd']);
                $info['cny'] = trim($coinmarkInfo['BTC']['cny']);
            }else{
                //echo "合并信息成功".PHP_EOL;
                $info['change_1h'] = trim($coinmarkInfo[$info['symbol']]['change_1h']);
                $info['usd'] = trim($coinmarkInfo[$info['symbol']]['usd']);
                $info['cny'] = trim($coinmarkInfo[$info['symbol']]['cny']);
            }
        }
    }

    return $whattomineInfo;
}
$sqlite = new SQLite('dataBase/income.db');
//死循环1小时更新一次
while (true) {
    echo date('Y-m-d H:i:s');
    $coinmarkInfo = (new Coinmarketcap())->getCoinPrice();
    $coinInfo = [];
    $whattominel = new Whattominel();
    foreach ($WHATTOMINEL_CARD_INFO as $card => $getata) {
        $whattomineData =$whattominel->getCardCoinInfo($getata);
        if(count($whattomineData)){
            $coinInfo[$card] = fixCoinInfo($whattomineData, $coinmarkInfo);
        }else{
            echo "whanttomine 抓取显卡数据信息被拒绝成功".$card.PHP_EOL;
        }
    }
    if(count($coinInfo)){
        $myfile = fopen('coins_cell_reward_json.txt', "w") or die("Unable to open file!  coins_cell_reward_json.txt");
        fwrite($myfile, json_encode($coinInfo));
        fclose($myfile);
    }
    /***************以上获取whattomine单卡收益币种当时的产量*********************/

    /***************下面用来更新币的信息*********************/
    // $sqlite = new SQLite('dataBase/income.db');
    // $coins = $sqlite->getlist('select * from coin where is_del=0');
    $coins = $sqlite->getlist('select * from coin ');
    foreach ($coins as $k => $coin) {
        $param = '';
        if(is_array($coinmarkInfo) && isset($coinmarkInfo[$coin['symbol']])){
            $c = $coinmarkInfo[$coin['symbol']];
            if($coin['symbol'] != 'BTF'){
                $param .='usd="'.$c['usd'].'",cny="'.$c['cny'].'",';
            }
            $param .='change_1h="'.$c['change_1h'].'",change_24="'.$c['change_24'].'",change_7d="'.$c['change_7d'].'"';
            // $param .='usd="'.$c['usd'].'",cny="'.$c['cny'].'",change_1h="'.$c['change_1h'].'",change_24="'.$c['change_24'].'",change_7d="'.$c['change_7d'].'"';
        }
        if($coin['whattominel_coin_id'] && $coin['is_del'] == 0){
            $whattimineCoinInfo = $whattominel->getCoinInfoRewards($coin['whattominel_coin_id'],$coin['text_speed']);
            // var_dump($whattimineCoinInfo);die;
            if(count($whattimineCoinInfo)){
                $param .= ',estimated_rewards="'.$whattimineCoinInfo['estimated_rewards'].'",btc_revenue="'.$whattimineCoinInfo['btc_revenue'].'",block_time="'.$whattimineCoinInfo['block_time'].'",
                last_block="'.$whattimineCoinInfo['last_block'].'",nethash="'.$whattimineCoinInfo['nethash'].'",exchange_rate_vol="'.$whattimineCoinInfo['exchange_rate_vol'].'",block_reward="'.$whattimineCoinInfo['block_reward'].'",
                difficulty="'.$whattimineCoinInfo['difficulty'].'"';
                //$re = $sqlite->exec('update coin set estimated_rewards="'.$whattimineCoinInfo['estimated_rewards'].'",btc_revenue="'.$whattimineCoinInfo['btc_revenue'].'"'.$param.' WHERE id='.$coin['id']);
            }else{
                echo "whanttomine 抓取币24小时产量被拒绝:".$coin['symbol'].PHP_EOL;
            }
        }
        if($param){
          $re = $sqlite->exec('update coin set '.trim($param,',').' WHERE id='.$coin['id']);
        }
    }
    echo '----------------------本次数据抓取结束--------------------------------------'.PHP_EOL;
    sleep(3600);
}

echo json_encode(['status'=>true]);
?>
