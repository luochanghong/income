<?php
//获取所有的币列表
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require_once('sqlite3.php');
$sqlite = new SQLite('dataBase/income.db');
// $coinList = $sqlite->getlist('select * from coin where is_del=0 order by id DESC');
$coinList = $sqlite->getlist('select * from coin order by id DESC');
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>收益管理</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="referrer" content="no-referrer">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <link href="dataTables/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
    </head>
    <style>
		.table{
			table-layout: fixed;
		}
		body{
		    overflow:scroll;
		    overflow-x:hidden;
		}
        table.dataTable.no-footer {
            border-bottom: 0px ;
        }
        .table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 1px solid #ddd;
        }
    </style>
    <body style="overflow-y: scroll;">
		<div class="nav navbar-nav">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
            	  <ul class="nav navbar-nav">
                    <li class='active'><a href="manger.php">币管理</a></li>
                 </ul>
                 <ul class="nav navbar-nav">
                   <li><a href="manger.php">显卡管理</a></li>
                </ul>
              </div>
            </nav>
        </div>
		<div class="container content" style="margin-top:60px" id="content">
            <div class="col-lg-2 pull-right">
                <select class="form-control miner-coin-select" width="120">
                    <option value="0">miner</option>
                    <option value="1">全部</option>
                </select>
            </div>
            <table  id="dataTables" class="table table-hover">
              <thead>
                  <th width="40px">序号</th>
                  <th width="40px">符号</th>
                  <th width="80px">图标</th>
                  <th width="80px">算法</th>
                  <th>测试算力/单位</th>
                  <th>理论产量(符号)</th>
                  <!-- <th>理论产量(BTC)</th> -->
                  <th>币价(cny)</th>
                  <th>涨幅</th>
                  <th width="60px">来源</th>
                  <th>操作</th>
              </thead>
              <tbody class="miner-coin-list">
              <?php
                foreach ($coinList as $k => $coin) {
                ?>
                    <tr data-del="<?php echo $coin['is_del'] ?>" <?php if($coin['is_hand_reward']){ echo 'style="background-color:#f5f0d7"';} ?>>
                        <td><?php echo $k+1 ?></td>
                        <td><?php echo $coin['symbol'] ?></td>
                        <td class="coin-img"
                        <?php
                        if(!empty($coin['img_url'])){
                            echo 'data-img-url="'.$coin['img_url'].'"';
                            // echo '<img width="40" height="40" src="'.$coin['img_url'].'" >';
                        }elseif(!empty($coin['img_upload'])){
                            echo 'data-img-url="'.$coin['img_upload'].'"';
                            // echo '<img width="40" height="40" src="'.$coin['img_upload'].'" >';
                        }else{
                            echo 'data-img-url=""';
                        }
                         ?>
                         >
                            --
                        </td>
                        <td><?php echo $coin['algo'] ?></td>
                        <td><?php
                            if(empty($coin['text_speed'])){
                                echo "--";
                            }else{
                                echo $coin['text_speed'];
                            }
                            if(empty($coin['unit'])){
                                echo "--";
                            }else{
                                echo $coin['unit'];
                            }
                          ?>
                      </td>
                        <td <?php if($coin['is_hand_reward']){ echo 'style="background-color:#f5f0d7"';} ?>><?php
                            if(empty($coin['estimated_rewards'])){
                                echo '--';
                            }else{
                                echo $coin['estimated_rewards'];
                            }

                         ?></td>
                         <!-- <td><?php
                         if(empty($coin['btc_revenue'])){
                             echo '--';
                         }else{
                             echo $coin['btc_revenue'];
                         }
                          ?></td> -->
                        <td <?php if($coin['is_hand_price']){ echo 'style="background-color:#f5f0d7"';} ?>><?php
                        if(empty($coin['cny'])){
                            echo '--';
                        }else{
                            echo $coin['cny'];
                        }
                         ?></td>
                         <td><?php echo $coin['change_1h'] ?></td>

                         <td><?php
                         if(empty($coin['source'])){
                             echo '--';
                         }else{
                             echo $coin['source'];
                         }
                          ?></td>
                        <td>
                            <div class="btn-group">
    							<a class="btn btn-xs btn-warning" href="manger_edit.php?id=<?php echo $coin['id'] ?>">
    								<i class="fa fa-edit"></i> 编辑
    							</a>
    	                        <button class="btn btn-xs btn-info btn-del" data-id="<?php echo $coin['id']?>" data-is-del="<?php echo $coin['is_del']?>">
    								<i class="fa fa-<?php if($coin['is_del']){echo 'unlock';}else{ echo 'lock';} ?>" aria-hidden="true"></i> <?php if($coin['is_del']){echo '启用';}else{ echo '禁用';} ?>
    							</button>
                        </td>
                    </tr>
              <?php
                }
                ?>
              </tbody>
            </table>
            <div class="pull-right">
				<div class="panel panel-button">
					<div class="btn-group">
						<a href="manger_add.php" class="btn btn-info"> 添加币种
						</a>
					</div>
				</div>
			</div>
		</div>
    </body>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="dataTables/js/jquery.dataTables.min.js"></script>
    <script>
        $(function(){
            init();
            $('.btn-del').on('click',function(){
                let res = confirm('确定?');
                if(res){
                    let obj = $(this);
                    //删除数据
                    $.ajax({
                        url:'manger_coin_del.php',
                        dataType:'json',
                        type: 'POST',
                        data: {
                            'id': $(obj).data('id'),
                            'is_del': $(obj).data('isDel'),
                        },
                        success: function(result) {
                            //result= JSON.parse(result);
                            // alter()
                            if(result.status){
                                let isDel = $(obj).data('isDel')?0:1;
                                let str = '';
                                if($(obj).data('isDel')){
                                    str = '<i class="fa fa-lock" aria-hidden="true"></i> 禁用';
                                }else{
                                    str = '<i class="fa fa-unlock" aria-hidden="true"></i> 启用';
                                }
                                $(obj).data('isDel',isDel);
                                $(obj).html(str);
                            }
                        },
                        error: function(){

                        },
                    });
                }
            });
        })
    </script>
    <script>
    $(function(){
        $('#dataTables').dataTable({
            "paging":   false,
            searching : false,
            bLengthChange: false,
            bInfo: false,
            "columnDefs": [
                { "orderable": false, "targets": [1,2,8,9] }
            ]
        });
        //初始化币种选择事件
        $('.miner-coin-select').on('change',function(){
            // alert()
            let obj = $(this);
            if(obj.val() == 1){
                //全选
                $('.miner-coin-list tr').show();
            }else{
                $('.miner-coin-list tr').each(function(){
                    if($(this).data('del') == 0){
                        $(this).show()
                    }else{
                        $(this).hide()
                    }
                })
            }
            rewriteTdKey()
        })
        rewriteTdKey()//表格序号编辑

        loadCoinImg();
    })

    function init(){
        $('.miner-coin-list tr').each(function(){
            if($(this).data('del') == 0){
                $(this).show()
            }else{
                $(this).hide()
            }
        })
    }
    function rewriteTdKey(){
        //获取页面显示的tr从新编号
        $('.miner-coin-list tr:visible').each(function(i,item){
            let td = $(item).find('td:first');
            $(td).html(i+1);
        })
    }

    function loadCoinImg(){
        $('.miner-coin-list .coin-img').each(function(i,item){
            let imgUrl = $(item).data('imgUrl');
            if(imgUrl){
                let imgHtml = '<img width="40" height="40" src="'+imgUrl+'" >';
                $(item).html(imgHtml);
            }
        })
    }
    </script>
</html>
