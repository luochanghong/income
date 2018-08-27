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
//表单提交添加币种
if (isset($_POST["submit"]) && $_POST["submit"]) {
    $param = [
        'symbol' => GetPost('symbol'),
        'algo' => GetPost('algo'),
        'text_speed' => GetPost('text_speed'),
        'unit' => GetPost('unit'),
        'estimated_rewards' => GetPost('estimated_rewards'),
        'btc_revenue' => GetPost('btc_revenue'),
        'cny' => GetPost('cny'),
        'source' => 'aiminer',
    ];

    $filed = array_keys($param);
    $value = array_map(function($v){
        return '"'.$v.'"';
    },array_values($param));
    $sql =  'insert into coin ('.implode(',', $filed).') VALUES ('.implode(',', $value).')';
    $sqlite->exec($sql);
    header('Location:manger.php');
    exit;
}

 ?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>币地址管理</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    </head>
	<body style="overflow-y: scroll;">
		<div class="nav navbar-nav">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
				  <ul class="nav navbar-nav">
			          <li class="active">
				          <a href="index.php">
				              币管理
				          </a>
				      </li>
				  </ul>
			  </div>
			</nav>
        </div>
		<div class="container content" id="content">
			<h3 style="margin-top:60px">
			    币管理/添加
			</h3>
			<div class="panel panel-info">
			    <div class="panel-heading">
			        <i class="fa fa-plus"></i> 币基本信息
			    </div>
			    <div class="panel-body">
					<form action="manger_add.php" method="post">
						<div class="row">
			                <div class="col-lg-6">
								<div class="form-group">
								    <label>符号</label>
								    <input type="text" class="form-control" value="" name="symbol" required placeholder="symbol">
								 </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
								    <label>算法</label>
								    <input type="text" class="form-control" value="" name="algo" placeholder="algo">
								 </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
								    <label>测试算力</label>
								    <input type="number" min="1" class="form-control" value="1000" name="text_speed" placeholder="1000">
								 </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
								    <label>单位</label>
								    <input type="text" class="form-control" value="" name="unit" required placeholder="unit">
								 </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
								    <label>理论产量</label>
								    <input type="text" class="form-control" value="" name="estimated_rewards" placeholder="estimated_rewards">
								 </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
								    <label>理论产量(BTC)</label>
								    <input type="text" class="form-control" value="" name="btc_revenue" placeholder="btc_revenue">
								 </div>
							</div>
                            <div class="col-lg-6">
								<div class="form-group">
								    <label>币价(cny)</label>
								    <input type="text" class="form-control" value="" name="cny" placeholder="cny">
								 </div>
							</div>
						</div>
						<div class="pull-right">
							<div class="panel panel-button">
							    <div class="btn-group">
							        <input type="submit" name="submit" class="btn btn-primary" value="保存">
							        <a href="manger.php" class="btn btn-default"> 返回
							        </a>
							    </div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
