<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta content="webkit" name="renderer">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="referrer" content="no-referrer">
		<link type="favicon" rel="shortcut icon" href="favicon.ico" />
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>收益计算</title>
	</head>
<body>
	<div class="top">
		<img src="img/logo.png">
	</div>
	<div class="main">
		<div class="tab">
			<span class="active">本机数据</span>
			<span>自定义</span>
		</div>
		<p class="line"></p>
		<div class="tabInfo">
			<div class="active activeInfo">
				<h5>我的设备</h5>
				<div class="listOne miner_card_info">
					<p>
						<span>280x</span><input type="text" value='0' class="280x" name="card_280x" readonly="readonly">
					</p>
					<p>
						<span>380</span><input type="text" value='0' class="380x" name="card_380" readonly="readonly">
					</p>
					<p>
						<span>fury</span><input type="text" value='0' class="fury" name="card_fury" readonly="readonly">
					</p>
					<p>
						<span>470</span><input type="text" value='0' class="470" name="card_470" readonly="readonly">
					</p>
					<p>
						<span>480</span><input type="text" value='0' class="480" name="card_480" readonly="readonly">
					</p>
					<p>
						<span>570</span><input type="text" value='0' class="570" name="card_570" readonly="readonly">
					</p>
					<p>
						<span>580</span><input type="text" value='0' class="580" name="card_580" readonly="readonly">
					</p>
					<p class="noRight">
						<span>vega56</span><input type="text" value='0' class="vega56" name="card_vega56" readonly="readonly">
					</p>
					<p>
						<span>vega64</span><input type="text" value='0' class="vega64" name="card_vega64" readonly="readonly">
					</p>
					<p>
						<span>750ti</span><input type="text" value='0' class="750ti" name="card_750ti" readonly="readonly">
					</p>
					<p>
						<span>1050ti</span><input type="text" value='0' class="1050ti" name="card_1050ti" readonly="readonly">
					</p>
					<p>
						<span>1060</span><input type="text" value='0' class="1060" name="card_1060" readonly="readonly">
					</p>
					<p>
						<span>1070</span><input type="text" value='0' class="1070" name="card_1070" readonly="readonly">
					</p>
					<p>
						<span>1070ti</span><input type="text" value='0' class="1070ti" name="card_1070ti" readonly="readonly">
					</p>
					<p>
						<span>1080</span><input type="text" value='0' class="1080" name="card_1080" readonly="readonly">
					</p>
					<p class=noRight>
						<span>1080ti</span><input type="text" value='0' class="1080ti" name="card_1080ti" readonly="readonly">
					</p>
				</div>
				<h5>算力数据</h5>
				<div class="row rowBotton firstInput" style="margin-bottom: 10px">
				  <div class="col-4">
					<div class="row">
					  <div class="col-6">
						<div class="ck-button">
						  <label>
							<input type="checkbox"  value="true" hidden="hidden" checked="checked" />
							<span class="btn btn-default" data-toggle="popover" data-placement="bottom">Ethash</span></label>
						</div>
						<div class="input-group input-group-sm mb-2">
						  <input class="form-control" readonly id="miner_eth_hr" type="text" value="0.00"/>
						  <div class="input-group-append">
							<span class="input-group-text">Mh/s</span></div>
						</div>
					  </div>
					  <div class="col-6">
						<div class="ck-button">
						  <label>
							<input type="checkbox" value="true" readonly hidden="hidden" checked="checked" />
							<span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Zhash</span></label>
						</div>
						<div class="input-group input-group-sm mb-2">
						  <input class="form-control" type="text" readonly value="0.00" id="miner_zh_hr" />
						  <div class="input-group-append">
							<span class="input-group-text">h/s</span></div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="col-4">
			        <div class="row">
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">PHI1612</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_phi_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">Mh/s</span></div>
			            </div>
			          </div>
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">CNHeavy</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_cnh_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">h/s</span></div>
			            </div>
			          </div>
			        </div>
			      </div>
				  <div class="col-4">
			        <div class="row">
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">CryptoNightV7</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_cn7_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">h/s</span></div>
			            </div>
			          </div>
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Equihash</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_eq_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">h/s</span></div>
			            </div>
			          </div>
			        </div>
			      </div>
			      <div class="col-4">
			        <div class="row">
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox"  value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Lyra2REv2</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly  id="miner_lrev2_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">kh/s</span></div>
			            </div>
			          </div>
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">NeoScrypt</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_ns_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">kh/s</span></div>
			            </div>
			          </div>
			        </div>
			      </div>
			      <div class="col-4">
			        <div class="row">
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox"  value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">TimeTravel10</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_tt10_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">Mh/s</span></div>
			            </div>
			          </div>
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">X16R</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_x16r_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">Mh/s</span></div>
			            </div>
			          </div>
			        </div>
			      </div>
			      <div class="col-4">
			        <div class="row">
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Lyra2z</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_l2z_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">Mh/s</span></div>
			            </div>
			          </div>
			          <div class="col-6">
			            <div class="ck-button">
			              <label>
			                <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			                <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">PHI2</span></label>
			            </div>
			            <div class="input-group input-group-sm mb-2">
			              <input class="form-control" type="text" value="0.00" readonly id="miner_phi2_hr" />
			              <div class="input-group-append">
			                <span class="input-group-text">Mh/s</span></div>
			            </div>
			          </div>
			        </div>
			      </div>
				  <div class="col-4">
			  	  <div class="row">
			  		<div class="col-6">
			  		  <div class="ck-button">
			  			<label>
			  			  <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			  			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Tensority</span></label>
			  		  </div>
			  		  <div class="input-group input-group-sm mb-2">
			  			<input class="form-control" type="text" value="0.00" readonly  id="miner_tensority_hr" />
			  			<div class="input-group-append">
			  			  <span class="input-group-text">h/s</span></div>
			  		  </div>
			  		</div>
			  	  </div>
			  	</div>
			  	<div class="col-4">
			  	  <div class="row">
			  		<div class="col-6">
			  		  <div class="ck-button">
			  			<label>
			  			   <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			  			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Sha256</span></label>
			  		  </div>
			  		  <div class="input-group input-group-sm mb-2">
			  			<input class="form-control" type="text" value="0.00" readonly id="miner_sha256_hr" />
			  			<div class="input-group-append">
			  			  <span class="input-group-text">Gh/s</span></div>
			  		  </div>
			  		</div>
			  	  </div>
			  	</div>
			  	<div class="col-4">
			  	  <div class="row">
			  		<div class="col-6">
			  		  <div class="ck-button">
			  			<label>
			  			  <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			  			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">X13</span></label>
			  		  </div>
			  		  <div class="input-group input-group-sm mb-2">
			  			<input class="form-control" type="text" value="0.00" readonly id="miner_x13_hr" />
			  			<div class="input-group-append">
			  			  <span class="input-group-text">Mh/s</span></div>
			  		  </div>
			  		</div>
			  	  </div>
			  	</div>
			  	<div class="col-4">
			  	  <div class="row">
			  		<div class="col-6">
			  		  <div class="ck-button">
			  			<label>
			  			  <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			  			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">X17</span></label>
			  		  </div>
			  		  <div class="input-group input-group-sm mb-2">
			  			<input class="form-control" type="text" value="0.00" readonly id="miner_x17_hr" />
			  			<div class="input-group-append">
			  			  <span class="input-group-text">Mh/s</span></div>
			  		  </div>
			  		</div>
			  	  </div>
			  	</div>
			  	<div class="col-4">
			  	  <div class="row">
			  		<div class="col-6">
			  		  <div class="ck-button">
			  			<label>
			  			 <input type="checkbox" value="true" hidden="hidden" checked="checked" />
			  			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">EquihashAion</span></label>
			  		  </div>
			  		  <div class="input-group input-group-sm mb-2">
			  			<input class="form-control" type="text" value="0.00" readonly id="miner_equihash-aion_hr" />
			  			<div class="input-group-append">
			  			  <span class="input-group-text">sol/s</span>
					  	</div>
			  		  </div>
			  		</div>
			  	  </div>
			  	</div>
				</div>
				<h5>收益排行</h5>
				<table class="table table-sm table-hover table-vcenter">
				   <thead>
				    <tr>
					<th>排行</th>
				     <th>图标</th>
				     <th>币种<br>(算法)</th>
				     <!-- <th>爆块时间<br />爆块产量<br />当前高度</th> -->
				     <th>
				      	本地算力
				  	 </th>
				     <!-- <th>
				      当前难度每天收益<br>平均难度每天收益
				  	</th> -->
					 <th>
					 平均难度每天收益
				 	</th>
					<th>
				      币价
				     </th>
				     <!-- <th>24h交易量<br />(coinmarketcap)</th> -->
				     <th>1h涨幅</th>
				     <th>24h收益</th>
				    </tr>
				   </thead>
				   <tbody>
				    <tr>
				     <td colspan="10">
				       <div style="text-align:center;line-height: 50px;">数据加载中...</div>
				     </td>
				    </tr>
				   </tbody>
				  </table>
	 </div>
<div class="activeInfo">
	  <form class="new_factor" id="new_factor" action="/coins" accept-charset="UTF-8" method="get">
  <input name="utf8" type="hidden" value="&#x2713;" />
  <div class="row rowTop nextTop">
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_280x">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_280x" id="adapt_q_280x" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_280x" id="adapt_280x" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true" style>280x</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_380">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_380" id="adapt_q_380" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_380" id="adapt_380" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true" style>380</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_fury">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_fury" id="adapt_q_fury" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_fury" id="adapt_fury" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true" style="">Fury</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_470">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_470" id="adapt_q_470" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_470" id="adapt_470" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">470</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_480">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_480" id="adapt_q_480" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_480" id="adapt_480" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">480</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_570">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_570" id="adapt_q_570" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_570" id="adapt_570" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">570</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_580">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_580" id="adapt_q_580" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_580" id="adapt_580" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">580</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_vega56">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_vega56" id="adapt_q_vega56" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_vega56" id="adapt_vega56" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-trigger="hover" data-html="true">Vega56</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_vega64">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_vega64" id="adapt_q_vega64" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-amd">
                <input type="checkbox" name="adapt_vega64" id="adapt_vega64" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">Vega64</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_750Ti">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_750Ti" id="adapt_q_750Ti" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-nv">
                <input type="checkbox" name="adapt_750Ti" id="adapt_750Ti" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">750Ti</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_1050Ti">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_1050Ti" id="adapt_q_1050Ti" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-nv">
                <input type="checkbox" name="adapt_1050Ti" id="adapt_1050Ti" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">1050Ti</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_10606">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_10606" id="adapt_q_10606" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-nv">
                <input type="checkbox" name="adapt_10606" id="adapt_10606" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">1060</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_1070">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_1070" id="adapt_q_1070" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-nv">
                <input type="checkbox" name="adapt_1070" id="adapt_1070" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">1070</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_1070Ti">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_1070Ti" id="adapt_q_1070Ti" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-nv">
                <input type="checkbox" name="adapt_1070Ti" id="adapt_1070Ti" value="true" class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover"  data-placement="bottom" data-trigger="hover" data-html="true">1070Ti</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-6">
          <label for="adapt_1080">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_1080" id="adapt_q_1080" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-nv">
                <input type="checkbox" name="adapt_1080" id="adapt_1080" value="true"  class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">1080</span></div>
            </div>
          </label>
        </div>
        <div class="col-6">
          <label for="adapt_1080Ti">
            <div class="input-group input-group-sm mb-2">
              <input type="text" name="adapt_q_1080Ti" id="adapt_q_1080Ti" value="0" class="form-control adapt-quantity" />
              <div class="input-group-append hash-adapt ck-button-nv">
                <input type="checkbox" name="adapt_1080Ti" id="adapt_1080Ti" value="true"  class="adapt" />
                <span class="btn btn-outline-secondary" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true">1080Ti</span></div>
            </div>
          </label>
        </div>
      </div>
    </div>
  </div>
  <h5>算力数据</h5>
  <div class="row rowBotton nextInput" style="margin-bottom: 10px">
    <div class="col-4">
      <div class="row">
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="eth" id="eth" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom">Ethash</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[eth_hr]" id="factor_eth_hr" />
            <div class="input-group-append">
              <span class="input-group-text">Mh/s</span></div>
          </div>
        </div>
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="zh" id="zh" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Zhash</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[zh_hr]" id="factor_zh_hr" />
            <div class="input-group-append">
              <span class="input-group-text">h/s</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="phi" id="phi" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">PHI1612</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[phi_hr]" id="factor_phi_hr" />
            <div class="input-group-append">
              <span class="input-group-text">Mh/s</span></div>
          </div>
        </div>
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="cnh" id="cnh" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">CNHeavy</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[cnh_hr]" id="factor_cnh_hr" />
            <div class="input-group-append">
              <span class="input-group-text">h/s</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="cn7" id="cn7" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">CryptoNightV7</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[cn7_hr]" id="factor_cn7_hr" />
            <div class="input-group-append">
              <span class="input-group-text">h/s</span></div>
          </div>
        </div>
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="eq" id="eq" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Equihash</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[eq_hr]" id="factor_eq_hr" />
            <div class="input-group-append">
              <span class="input-group-text">h/s</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="lre" id="lre" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Lyra2REv2</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[lrev2_hr]" id="factor_lrev2_hr" />
            <div class="input-group-append">
              <span class="input-group-text">kh/s</span></div>
          </div>
        </div>
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="ns" id="ns" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">NeoScrypt</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[ns_hr]" id="factor_ns_hr" />
            <div class="input-group-append">
              <span class="input-group-text">kh/s</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="tt10" id="tt10" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">TimeTravel10</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[tt10_hr]" id="factor_tt10_hr" />
            <div class="input-group-append">
              <span class="input-group-text">Mh/s</span></div>
          </div>
        </div>
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="x16r" id="x16r" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">X16R</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[x16r_hr]" id="factor_x16r_hr" />
            <div class="input-group-append">
              <span class="input-group-text">Mh/s</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="l2z" id="l2z" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Lyra2z</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[l2z_hr]" id="factor_l2z_hr" />
            <div class="input-group-append">
              <span class="input-group-text">Mh/s</span></div>
          </div>
        </div>
        <div class="col-6">
          <div class="ck-button">
            <label>
              <input type="checkbox" name="phi2" id="phi2" value="true" hidden="hidden"/>
              <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">PHI2</span></label>
          </div>
          <div class="input-group input-group-sm mb-2">
            <input class="form-control" type="text" value="0.00" name="factor[phi2_hr]" id="factor_phi2_hr" />
            <div class="input-group-append">
              <span class="input-group-text">Mh/s</span></div>
          </div>
        </div>
      </div>
    </div>
	<!--以下是新增算法---------->
	<div class="col-4">
	  <div class="row">
		<div class="col-6">
		  <div class="ck-button">
			<label>
			  <input type="checkbox" name="tensority" id="tensority" value="true" hidden="hidden"/>
			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Tensority</span></label>
		  </div>
		  <div class="input-group input-group-sm mb-2">
			<input class="form-control" type="text" value="0.00" name="factor[tensority_hr]" id="factor_tensority_hr" />
			<div class="input-group-append">
			  <span class="input-group-text">h/s</span></div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-4">
	  <div class="row">
		<div class="col-6">
		  <div class="ck-button">
			<label>
			  <input type="checkbox" name="sha256" id="sha256" value="true" hidden="hidden"/>
			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">Sha256</span></label>
		  </div>
		  <div class="input-group input-group-sm mb-2">
			<input class="form-control" type="text" value="0.00" name="factor[sha256_hr]" id="factor_sha256_hr" />
			<div class="input-group-append">
			  <span class="input-group-text">Gh/s</span></div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-4">
	  <div class="row">
		<div class="col-6">
		  <div class="ck-button">
			<label>
			  <input type="checkbox" name="x13" id="x13" value="true" hidden="hidden"/>
			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">X13</span></label>
		  </div>
		  <div class="input-group input-group-sm mb-2">
			<input class="form-control" type="text" value="0.00" name="factor[x13_hr]" id="factor_x13_hr" />
			<div class="input-group-append">
			  <span class="input-group-text">Mh/s</span></div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-4">
	  <div class="row">
		<div class="col-6">
		  <div class="ck-button">
			<label>
			  <input type="checkbox" name="x17" id="x17" value="true" hidden="hidden"/>
			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">X17</span></label>
		  </div>
		  <div class="input-group input-group-sm mb-2">
			<input class="form-control" type="text" value="0.00" name="factor[x17_hr]" id="factor_x17_hr" />
			<div class="input-group-append">
			  <span class="input-group-text">Mh/s</span></div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-4">
	  <div class="row">
		<div class="col-6">
		  <div class="ck-button">
			<label>
			  <input type="checkbox" name="equihashaion" id="equihashaion" value="true" hidden="hidden"/>
			  <span class="btn btn-default" data-toggle="popover" data-placement="bottom" data-trigger="hover">EquihashAion</span></label>
		  </div>
		  <div class="input-group input-group-sm mb-2">
			<input class="form-control" type="text" value="0.00" name="factor[equihashaion_hr]" id="factor_equihashaion_hr" />
			<div class="input-group-append">
			  <span class="input-group-text">sol/s</span></div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</form>
<div class="new_pic">
	<img src="img/pic.png" />
	<span>计算</span>
</div>
<h5>收益排行</h5>
<table class="table table-sm table-hover table-vcenter" id="dataTables" >
   <thead>
    <tr>
		<th>排行</th>
     <th>图标</th>
     <th>币种<br>(算法)</th>
     <!-- <th>爆块时间<br />爆块产量<br />当前高度</th> -->
	 <th>本地算力</th>
     <!-- <th>
      全网难度<br/>
      全网算力
	 </th> -->
     <th>
      <!-- 当前难度每天收益<br> -->
	  平均难度每天收益
	 </th>
     <th>
      币价
     </th>
     <th>1h涨幅</th>
     <th>24h收益</th>
    </tr>
   </thead>
   <tbody>
    <tr >
     <td colspan="10">
       <div style="text-align:center;line-height: 50px;" class="dataHtmlTwo">数据加载中...</div>
     </td>
    </tr>
   </tbody>
  </table>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> -->
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/income_speed.js"></script>
</body>
</html>
