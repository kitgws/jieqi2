<?php
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
<meta content="zh-cn" http-equiv="Content-Language"/>
<meta name="keywords" content="'.$this->_tpl_vars['meta_keywords'].'">
<meta name="description" content="'.$this->_tpl_vars['meta_description'].'">
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset='.$this->_tpl_vars['jieqi_charset'].'"/>
<meta name="format-detection" content="telephone=no"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="-1"/>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=1"/>
<meta name="format-detection" content="telephone=no"/>
<link rel="stylesheet" type="text/css" href="/wap/css/fs.css" media="all"/>
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css">
<script src="/wap/js/jquery.min.js"></script>
<script type="text/javascript" src="/wap/js/fs.js"></script>
<script type="text/javascript" src="/wap/layer.m.js"></script>
<script type="text/javascript" src="/wap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/wap/js/pagewap.js"></script>
<script type="text/javascript" src="/scripts/common.js"></script>
<style type="text/css">
	.mod.block.tab{margin-top:60px;}
	.mod.block.tab{margin-left:10px;margin-right:10px;}
	.hd.c3.paytype{width:100%;border-bottom:1px solid #fff;}
	.item.slmsxz{display:block;width:50%;}
	.item.slmsxz a{display:block; width:100%;height:100%;text-align: center;}
	.item.slmsxz.wx.active{background:#039702;}
	.item.slmsxz.zfb.active{background:#00aaef;}
	.block.tab .hd.c3 .item{width:50%;border-radius:5px;}
	.block.tab .hd.c3 .item:nth-child(2){width:50%;}
	#zfbbd{border-top:1px solid #f2f2f2}
</style>
</head>
<body>
<div class="container">
	
	<div class="header top-half">
      <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>首页</a></span>
        <h2>充值专区</h2>
      </div>
    </div>
	
	
	<div class="mod block tab">
<div class="hd c3 paytype">			
	        <span class="item slmsxz wx active" id="weixin"><a style="display:block;" href="javascript:qie(0)">微信充值</a></span>
			<span class="item slmsxz zfb" id="zhifubao"><a style="display:block;" href="javascript:qie(1)">支付宝</a></span>
	</div>


		<div style="background-color:#fff;padding-bottom:5px">
			<div class="chargeexchange"><br>
				<form id="form">
					<div class="weui_cells" style="display: none;">
						<div style="background:#F9F8F7;display: none;"> </div>
							<div class="weui_cell" style="border: none;">
								<div class="weui_cell_hd"><label class="weui_label"></label></div>
								<div class="weui_cell_bd weui_cell_primary">
									<input class="weui_input" type="hidden" id="username" name="username" placeholder="'.$this->_tpl_vars['jieqi_username'].'" value="'.$this->_tpl_vars['jieqi_username'].'"/>
								</div>
							</div>
						</div>
						<div class="weui_cell">
							<div class="weui_cell_bd weui_cell_primary">
								<ul id="price">
									<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="50000" class="price radio"> 500元(50000币)</li>
									<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="20000" class="price radio"> 200元(20000币)</li>
									<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="10000" class="price radio"> 100元(10000币)</li>
									<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="5000" class="price radio"> 50元(5000币)</li>
									<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="3000" class="price radio"> 30元(3000币)</li>
									<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="2000" class="price radio"> 20元(2000币)</li>
								</ul>
							</div>
						</div>

					<div style=" margin:auto;">
						<div id="tj" class="weui_btn weui_btn_primary" style="background-color:#039702;">立即充值</div>
					</div>
				</form>
			</div>
			<div class="chargeexchange" style="display: none;"><br>
				<form name="frmalipay" id="zfbbd" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/alipay.php">
					<table class="tablebtn" align="center" style="background:#fff;border:none;">
						<tbody>
							<tr>
								<td>
									<ul id="price" class="slmszfb">
										<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="50000" class="price radio"> 500元(50000币)</li>
										<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="20000" class="price radio"> 200元(20000币)</li>
										<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="10000" class="price radio"> 100元(10000币)</li>
										<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="5000" class="price radio"> 50元(5000币)</li>
										<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="3000" class="price radio"> 30元(3000币)</li>
										<li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="2000" class="price radio"> 20元(2000币)</li>
									</ul>
								</td>
								<tr></tr>
								<td width="70">
									<input type="hidden" name="action" value="bankpay">
									<input type="submit" name="Submit" class="weui_btn weui_btn_primary" style="background:#00aaef;" value="下一步">
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
	<h1 class="page-title">提示：平台支持充值方式：支付宝、微信充值</h1>
	<div class="paytypetext">
			<div class="payfortips">
				<p>
					充值提示:
				</p>
				<ul class="payTips">
					<li>充值比例：1元=100'.$this->_tpl_vars['egoldname'].'，最低充值20元。</li>
					<li>网站建议您在充值过程中不要关闭网页，每个步骤都按相应提示操作，系统会自动跳动回您最后阅读的章节。</li>
					<li>'.$this->_tpl_vars['egoldname'].'未及时到账的，超过十分钟以后，请您联系网站下方提供的客服。</li>
				</ul>
			</div>
		</div>
</div>


<div id="dialog_alert1" class="weui_dialog_alert" style="display:none;">
    <div class="weui_mask"></div>
        <div class="weui_dialog">
            <div class="weui_dialog_hd"><strong class="weui_dialog_title">信息提示</strong></div>
            <div class="weui_dialog_bd"></div>
            <div class="weui_dialog_ft">
                <a href="#" class="weui_btn_dialog primary">确定</a>
            </div>
        </div>
    </div>
    <div id="dialog_alert2" class="weui_dialog_confirm" style="display:none;">
        <div class="weui_mask"></div>
        <div class="weui_dialog">
            <div class="weui_dialog_hd"><strong class="weui_dialog_title">信息提示</strong></div>
            <div class="weui_dialog_bd"></div>
            <div class="weui_dialog_ft">
                <a href="#" class="weui_btn_dialog default">取消</a>
                <a href="#" class="weui_btn_dialog primary">确定</a>
            </div>
        </div>
    </div>
    <div id="loadingToast" class="weui_loading_toast" style="display:none;">
        <div class="weui_mask_transparent"></div>
        <div class="weui_toast">
            <div class="weui_loading">
                <!-- :) -->
                <div class="weui_loading_leaf weui_loading_leaf_0"></div>
                <div class="weui_loading_leaf weui_loading_leaf_1"></div>
                <div class="weui_loading_leaf weui_loading_leaf_2"></div>
                <div class="weui_loading_leaf weui_loading_leaf_3"></div>
                <div class="weui_loading_leaf weui_loading_leaf_4"></div>
                <div class="weui_loading_leaf weui_loading_leaf_5"></div>
                <div class="weui_loading_leaf weui_loading_leaf_6"></div>
                <div class="weui_loading_leaf weui_loading_leaf_7"></div>
                <div class="weui_loading_leaf weui_loading_leaf_8"></div>
                <div class="weui_loading_leaf weui_loading_leaf_9"></div>
                <div class="weui_loading_leaf weui_loading_leaf_10"></div>
                <div class="weui_loading_leaf weui_loading_leaf_11"></div>
            </div>
            <p class="weui_toast_content">数据加载中</p>
        </div>
    </div>

    <div id="toast" style="display: none;">
        <div class="weui_mask_transparent"></div>
        <div class="weui_toast">
            <i class="weui_icon_toast"></i>
            <p class="weui_toast_content">请稍等</p>
        </div>
    </div>

<script src="/weixin/Js/jquery.min.js"></script>
<script src="/weixin/Js/public.js"></script>
<link rel="stylesheet" href="/weixin/Css/public.css" media="screen">
<link rel="stylesheet" href="/weixin/Css/weui.min.css" media="screen">

<script>
	$(function(){
	$(".item").eq(0).addClass("active");
		$("#tj").click(function(){
			if(!$(this).hasClass("weui_btn_disabled")){
				$(\'#tj\').addClass("weui_btn_disabled");
				$(\'#loadingToast\').show();
				username=$(\'#username\').val();
				price=$(\'.price:checked\').val();

				$.post("/weixin/ajax.php?act=add",{username:username,price:price},function(data){
					str=data.split(":");
					$(\'#loadingToast\').hide();
					if(str[0]==\'success\'){
						$(\'#toast\').show(function(){});
						to_url(str[1]);
					}else{

						$(\'.weui_dialog_bd\').html(str[1]);
						$(\'.weui_dialog_alert\').show();
						$("#tj").removeClass("weui_btn_disabled");
					}
				});
			}
		});
	});
   </script>
   <style>
   	.active a{
   	color:#fff !important;
   	}
   </style>
   <script type="text/javascript">

   		function qie(a){
   			$(\'.chargeexchange\').css(\'display\',\'none\');
   			$(\'.chargeexchange\').eq(a).css(\'display\',\'block\');
   			$(".container .mod .paytype .item").removeClass("active")
   			$(".container .mod .paytype .item").eq(a).addClass("active")
   		}
   		$(".item").removeClass("active");
	   //先点击一次表单，不运行空提交
	   $("#price input").eq(5).click();
	   $(".slmszfb input").eq(5).click();
	   
   </script>
</body>
</html>';
?>