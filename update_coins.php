<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require_once('service/Whattominel.php');
require_once('sqlite3.php');
$whattominel = new Whattominel();
$whattominel_coins = $whattominel->getAllCoins();//获取所有whattominel支持的币种
// $sqlite = new SQLite();
$sqlite = new SQLite('dataBase/income.db');
if(count($whattominel_coins)){
    //更新或插入表数据
    foreach ($whattominel_coins as $k => $coin) {
        //检测表数据是否存在
        $sql = 'select * from coin where symbol="'.$coin['symbol'].'" and algo="'.$coin['algo'].'"';
        $res = $sqlite->getlist($sql);
        if(!count($res)){
            //插入新的币种信息
            $insertSql = (new Whattominel())->getBaseInsertCoinInfoSql($coin);
            // echo $insertSql;die;
            $sqlite->exec($insertSql);
        }
    }
}
echo '更新成功';
?>
