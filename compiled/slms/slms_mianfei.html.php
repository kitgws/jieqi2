<?php
echo '<!DOCTYPE html>
<html style="font-size: 74.52px;">
    <head>
    <meta charset="'.$this->_tpl_vars['jieqi_charset'].'">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="applicable-device" content="mobile">
    <title>免费专区-免费小说_小说排行榜_好看的小说网-'.$this->_tpl_vars['jieqi_sitename'].'</title>
    <meta name="Keywords" content="小说，免费小说，好看的小说，小说下载，言情小说，免费小说下载">
    <meta name="Description" content="'.$this->_tpl_vars['jieqi_sitename'].'vip小说在线阅读，这里有好看的玄幻小说,武侠小说,穿越小说,都市小说,历史军事小说,校园言情小说,总裁豪门小说,科幻小说,恐怖小说等，在线阅读全文无广告弹窗，手机在线看小说就选'.$this->_tpl_vars['jieqi_sitename'].'。">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css">
		<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
    <style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
		#yema a{margin:0px 3px 0px 3px;display:none;}
		#yema input{width:auto;}
		.loading-icon{width:3rem;height:3rem;position:fixed;z-index:999; left:50%;top:50%;margin-left:-1.5rem;margin-top:-1.5rem;}
		.loading-icon svg{width:100%;height:100%;}
		#yema{text-align: center;}
		.backdrop.bh_wxlogin_lay{filter:alpha(opacity=50);  /*支持 IE 浏览器*/
-moz-opacity:0.50; /*支持 FireFox 浏览器*/
opacity:0.50;  /*支持 Chrome, Opera, Safari 等浏览器*/}
.backdrop.bh_wxlogin_lay i{background-color:rgba(0,0,0,0.80);border:1px solid #fff;border-radius:10px;}
</style>
</head>
    <body>
		
    <div class="header top-half">
      <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>首页</a></span>
        <h2>包月专区</h2>
      </div>
    </div>
    <!--免费专区 begin-->
	<div class="header top-half"><div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>首页</a></span><h2>免费专区</h2></div></div>
	<div class="recommend free bor-top mar-top"><div class="title"><h3>限时免费</h3><span class="time" id="downdate_box" startdate="2018/03/21 07:00:00">倒计时:<i class="num" id="tian">0</i> <small>:</small> <i class="num" id="shi">0</i> <small>:</small> <i class="num" id="fen">0</i> <small>:</small> <i class="num" id="miao">0</i></span></div><div class="entry"><ul>
	'.jieqi_get_block(array('bid'=>'0', 'blockname'=>'免费专区', 'module'=>'article', 'filename'=>'block_articlelist', 'classname'=>'BlockArticleArticlelist', 'side'=>'-1', 'title'=>'免费专区', 'vars'=>'allvisit,3,0,0,0,0,2', 'template'=>'slms_baoyue.html', 'contenttype'=>'4', 'custom'=>'0', 'publish'=>'3', 'hasvars'=>'1'), 1).'
</ul></div></div>
		
    <!--免费专区 end-->
	
<!--VIP新书推荐 end--><!--VIP 列表 begin-->
    <div class="search-result hot-box bor-top">
      <div class="entry" id="html_box">
		 
      </div>
		<div id="yema">'.$this->_tpl_vars['url_jumppage'].'</div>
    </div>
    <!--VIP 列表 end-->
		<div class="backdrop bh_wxlogin_lay" id="jiazai" style="display: none;"></div>
		<div class="return-top" id="icon-top" style="display: none;"><a href="javascript:;"><i class="icon-top"></i></a></div>
		<script type="text/javascript">
		
		//滚动条在Y轴上的滚动距离
  $("#jiazai").append("<i class=\'loading-icon\'><svg class=\'loading-svg-animate\' version=\'1.1\' id=\'loader-1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' x=\'0px\' y=\'0px\' width=\'50\' height=\'50\' viewBox=\'0 0 50 50\' style=\'enable-background:new 0 0 50 50;\' xml:space=\'preserve\'><path fill=\'#fff\' d=\'M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z\'><animateTransform attributeType=\'xml\' attributeName=\'transform\' type=\'rotate\' from=\'0 25 25\' to=\'360 25 25\' dur=\'0.6s\' repeatCount=\'indefinite\'></path></svg></i>");
			
var autoready=1;
    $(window).bind("scroll", function (event) {
        //滚动条到网页头部的 高度，兼容ie,ff,chrome
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();  //网页的高度
        // 网页高度-top-当前窗口高度
        if (textheight - top - $(window).height() <= 60){
            if(autoready==1) {
                autoready=0;
　　　//　alert("已经到最底部了！!");
	  //ajax加载页码

	  var next = $(".next").attr("href");
	  if(next != ""){
		  $("#jiazai").css("display","block");
		  $.ajax({
			type:\'post\',
			url:next, 
			success:function(msg){
				$("body").attr("style","position:fixed;top:0;left:0;");
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#yema").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$("body").removeAttr("style");
				$(".backdrop.bh_wxlogin_lay").hide();
				autoready=1;
			}
			 });
		  
	  }else{
	      $("body").removeAttr("style");
		  $(".backdrop.bh_wxlogin_lay").hide();
		  $(".prev").text("加载").show();
		  $(".next").text("完成").show();
	  };
	  
　　};
};
	});
			
			
	//限时免费
  var starttime = new Date("2018/11/20");
  setInterval(function () {
    var nowtime = new Date();
    var time = starttime - nowtime;
    var day = parseInt(time / 1000 / 60 / 60 / 24);
    var hour = parseInt(time / 1000 / 60 / 60 % 24);
    var minute = parseInt(time / 1000 / 60 % 60);
    var seconds = parseInt(time / 1000 % 60);
 //   $(\'.timespan\').html(day + "天" + hour + "小时" + minute + "分钟" + seconds + "秒");
		if(day <= 0){
			$(".num").text("00");
			$(".entry").hide();
		}else{
		$(\'#tian\').text(day);
		$(\'#shi\').text(hour);
		$(\'#fen\').text(minute);
		$(\'#miao\').text(seconds);
		}

  }, 1000);

			
			
	//获取主端数据
			
	$.ajax({
			type:\'post\',
			url:"/modules/article/articlefilter.php?isvip=1&order=lastupdate&page=1", 
			success:function(msg){
				$("#jiazai").css("display","block");
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#yema").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$(".backdrop.bh_wxlogin_lay").hide();
				$("body").removeAttr("style");
			}
			 });
			
			
//回到顶部
//	alert(zong);
$(window).scroll(function(){
var topheight = $(".header.top-half").height();
var topxheight = $("#cate_option").height();
var zong = topheight + topxheight;
if($(window).scrollTop() >= zong){
$("#icon-top").fadeIn(200); // 开始淡入
} else{
$("#icon-top").fadeOut(200); // 如果小于等于 200 淡出
}
});
	
  $("#icon-top").click(function() {
      $("html,body").animate({scrollTop:0}, 500);
  }); 	

		</script>
		
</body>
</html>';
?>