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
function uploadFile($file){
    $fileName = $file['name'];
    // $uploadPath = 'img';
    if(!$fileName){
        return '';
    }
    $result=move_uploaded_file($file["tmp_name"],'img/'.$fileName);

    if($result){
        return 'img/'.$fileName;
    }
    return '';
}
$sqlite = new SQLite('dataBase/income.db');
$id = GetPost('id');
$coin =$sqlite->getlist('select * from coin where id='.$id)[0];
if (isset($_POST["submit"]) && $_POST["submit"]) {
    $unit = GetPost('unit');
    $symbol = GetPost('symbol');
    $text_speed = GetPost('text_speed');
    $algo = GetPost('algo');
    $id = GetPost('id');
    $cny = GetPost('cny');
    $img_url = GetPost('img_url');
    $estimated_rewards = GetPost('estimated_rewards');
    $btc_revenue = GetPost('btc_revenue');
    // $is_hand_price = GetPost('is_hand_price');
    $is_hand_reward = GetPost('is_hand_reward');
    $change_1h = GetPost('change_1h');
    $description = GetPost('description');
    //检测是否有文件上传
    // $img_upload = GetPost('img_upload');
    $param = '';
    $img_upload = uploadFile($_FILES['img_upload']);
    if($img_upload){
        $param = ',img_upload ="'.$img_upload.'"';
    }
    $re = $sqlite->exec('update coin set unit="'.$unit.'",symbol="'.$symbol.'",text_speed="'.$text_speed.'",algo="'.$algo.'",estimated_rewards="'.$estimated_rewards.'",cny="'.$cny.'",
    btc_revenue="'.$btc_revenue.'",is_hand_reward="'.$is_hand_reward.'",change_1h="'.$change_1h.'",description="'.$description.'",img_url="'.$img_url.'"'.$param.' WHERE id='.$id);
    header('Location:manger.php');
    exit;
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>收益管理</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    </head>
    <style>
		.table{
			table-layout: fixed;
		}
		body{
		    overflow:scroll;
		    overflow-x:hidden;
		}
    </style>
    <body style="overflow-y: scroll;">
		<div class="nav navbar-nav">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
            	  <ul class="nav navbar-nav">
                    <li class='active'><a href="manger.php"><i class="fa fa-bitcoin hidden-sm"></i> 币管理</a></li>
                 </ul>
              </div>
            </nav>
        </div>
		<div class="container content" style="margin-top:60px" id="content">
            <h3 ><a href="manger.php">币管理</a>/编辑</h3>
            <form action="manger_edit.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" class="form-control" value="<?php echo $id;?>" name="id" >
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>符号:</label>
                             <input type="text" class="form-control" value="<?php echo $coin['symbol']?>" name="symbol" placeholder="symbol">
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>测试大小:</label>
                             <input type="number" min="1" class="form-control" value="<?php echo $coin['text_speed']?>" name="text_speed" placeholder="text_speed">
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>单位:</label>
                             <input type="text" class="form-control" value="<?php echo $coin['unit']?>" name="unit" placeholder="unit">
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>算法:</label>
                             <input type="text" class="form-control" value="<?php echo $coin['algo']?>" name="algo" placeholder="algo">
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>币价(cny):</label>
                             <input type="text" class="form-control" value="<?php echo $coin['cny']?>" name="cny" placeholder="cny">
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>平均难度每天产量(symbol):</label>
                             <input type="text" class="form-control" value="<?php echo $coin['estimated_rewards']?>" name="estimated_rewards" placeholder="estimated_rewards">
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>平均难度每天产量(btc):</label>
                             <input type="text" class="form-control" value="<?php echo $coin['btc_revenue']?>" name="btc_revenue" placeholder="btc_revenue">
                         </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>涨幅(change_1h):</label>
                             <input type="text" class="form-control" value="<?php echo $coin['change_1h']?>" name="change_1h" placeholder="change_1h">
                         </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>币图标(url):</label>
                             <input type="text" class="form-control" value="<?php echo $coin['img_url']?>" name="img_url" placeholder="img_url">
                         </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputFile">币图标上传</label>
                            <input type="file" name="img_upload" id="exampleInputFile">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-3">
                        <div class="form-group">
                            <label>手动录入币价:</label>
                            <select class="form-control" name="is_hand_price">
                                <option value="0" <?php if(!$coin['is_hand_price']){echo 'selected';} ?>>否</option>
                                <option value="1" <?php if($coin['is_hand_price']){echo 'selected';} ?>>是</option>
                            </select>
                         </div>
                    </div> -->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>手动录入:</label>
                            <select class="form-control" name="is_hand_reward">
                                <option value="0" <?php if(!$coin['is_hand_reward']){echo 'selected';} ?>>否</option>
                                <option value="1" <?php if($coin['is_hand_reward']){echo 'selected';} ?>>是</option>
                            </select>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>手动录入信息:</label>
                            <textarea  class="form-control" name="description" rows="3" cols="20"><?php echo $coin['description']?></textarea>
                         </div>
                    </div>
                </div>
                <div class="text-center" style="margin-top:30px;">
                    <div class="panel panel-button">
                        <div class="btn-group">
                            <input type="submit" class="btn btn-primary btn-sm" name="submit" value="保存">
                            <a href="manger.php" class="btn btn-default btn-sm"> 返回
                            </a>
                        </div>
                    </div>
                </div>
            </form>
		</div>
    </body>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
