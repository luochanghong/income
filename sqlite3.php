<?php
/***
//应用举例
require_once('cls_sqlite.php');
//创建实例
$DB=new SQLite('blog.db'); //这个数据库文件名字任意
//创建数据库表。
$DB->query("create table test(id integer primary key,title varchar(50))");
//接下来添加数据
$DB->query("insert into test(title) values('泡菜')");
$DB->query("insert into test(title) values('蓝雨')");
$DB->query("insert into test(title) values('Ajan')");
$DB->query("insert into test(title) values('傲雪蓝天')");
//读取数据
print_r($DB->getlist('select * from test order by id desc'));
//更新数据
$DB->query('update test set title = "三大" where id = 9');
***/

class SQLite
{
    // public function __construct()
    // {
    //     try {
    //         $this->connection=new PDO('sqlite:dataBase/income.db');
    //         $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     } catch (PDOException $e) {
    //         exit('error!'. $e->getMessage());
    //     }
    // }

    function __construct($file) {
        try {
            $this->connection=new PDO('sqlite:'.$file);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            exit('error!'. $e->getMessage());
        }
    }


    public function __destruct()
    {
        $this->connection=null;
    }

    public function exec($sql)
    {
        $ret = false;
        try {
            $ret = $this->connection->exec($sql);
        } catch (PDOException $e) {
            echo 'Connection exec failed: ' . $e->getMessage();
        }
        return $ret;
    }

    //直接运行SQL，可用于更新、删除数据
    public function query($sql)
    {
        $ret = $this->connection->query($sql);
        if ($ret) {
            $ret->setFetchMode(PDO::FETCH_ASSOC);
        }
        return $ret;
    }

    //取得记录列表
    public function getlist($sql)
    {
        $recordlist=array();
        foreach ($this->query($sql) as $rstmp) {
            $recordlist[] = $rstmp;
        }
        return $recordlist;
    }


    public function fetch($sql)
    {
        return $this->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchall($sql)
    {
        return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function allcount($sql)
    {
        return count($this->fetchall($sql));
    }

    public function lastid()
    {
        return $this->connection->lastInsertId();
    }
}
