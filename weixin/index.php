<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>在线充值</title>
    <meta name="keywords" content="{$Think.config.site.keyword}">
    <meta name="description" content="{$Think.config.site.description}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" href="favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="Css/public.css" media="screen">
    <link rel="stylesheet" href="Css/weui.min.css" media="screen">
	<script src="Js/jquery.min.js"></script>
    <script src="Js/public.js"></script>
	 <script>
	$(function(){
		$("#tj").click(function(){
			if(!$(this).hasClass("weui_btn_disabled")){
				$('#tj').addClass("weui_btn_disabled");
				$('#loadingToast').show();
				username=$('#username').val();
				price=$('.price:checked').val();
				$.post("ajax.php?act=add",{username:username,price:price},function(data){
					str=data.split(":");
					$('#loadingToast').hide();
					if(str[0]=='success'){
						$('#toast').show(function(){
							to_url(str[1]);
						});
					}else{
						$('.weui_dialog_bd').html(str[1]);
						$('.weui_dialog_alert').show();
						$("#tj").removeClass("weui_btn_disabled");
					}
				});
			}
		});
	});
   </script>
    <style>

    </style>
</head>
<body>
    {?include file="sink/header.html"?}
    <header>在线充值</header>
    <div class="bd">
    	<form id="form">
        <div class="weui_cells_title">用户信息</div>
        <div class="weui_cells">
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="weui_label">账号</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" id="username" name="username" placeholder="输入您的账号"/>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="weui_label">金额</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <ul id="price">
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="50000" class="price radio"> 50000言情币（500元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="20000" class="price radio"> 20000言情币（200元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="10000" class="price radio"> 10000言情币（100元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="5000" class="price radio"> 5000 言情币（50元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="2000" class="price radio"> 2000 言情币（20元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="1000" class="price radio"> 1000 言情币（10元）</li>
                    
                </ul>
                </div>
            </div>
        </div>
        <div style=" padding:50px 15px;margin:auto;">
            <div id="tj" class="weui_btn weui_btn_primary" style="background-color:#00aaef;">立即充值</div>
        </div>
        
        </form>




        <form id="form" method="post" action="">
<a target="_blank" href=""><img src="/imagesd/342x120.png" width="342" height="120"></a><table class="grid" width="100%" align="center">
  <caption>支付宝充值</caption>
  
    
    <input class="weui_input" type="text" id="username" name="username" placeholder="输入您的账号"/>
  <tbody><tr>
    <td style="font-size:14px;line-height:200%;padding:20px;">
    <strong>请选择您要的充值金额：</strong><br>
    <div style="width:100%;clear:both;margin-bottom:10px;">
    <ul>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="50000" class="radio"> 50000言情币（500元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="20000" class="radio"> 20000言情币（200元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="10000" class="radio"> 10000言情币（100元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="5000" class="radio"> 5000 言情币（50元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="2000" class="radio"> 2000 言情币（20元）</li>
      <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="price" value="1000" class="radio"> 1000 言情币（10元）</li>
    </ul>
    <div class="cb"></div>
    </div>
    <div class="weui_btn weui_btn_primary" style="background-color:#00aaef;">立即充值</div>
    <input type="submit" value="提交">
    
    </td>
  </tr>
</tbody></table>
</form>
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
            <p class="weui_toast_content">请稍后</p>
        </div>
    </div>
</body>
</html>