<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require_once('sqlite3.php');
function GetPost($key, $defValue = "")
{
    if (isset($_GET[$key])) {
        return trim($_GET[$key]);
    }
    if (isset($_POST[$key])) {
        return trim($_POST[$key]);
    }
    return trim($defValue);
}
$sqlite = new SQLite('dataBase/income.db');

$is_del = GetPost('is_del')?0:1;
$re = $sqlite->exec('update coin set is_del='.$is_del.' WHERE id='.GetPost('id'));

if(!$re){
    echo json_encode(['status'=>false]);
}
echo json_encode(['status'=>true]);
?>
