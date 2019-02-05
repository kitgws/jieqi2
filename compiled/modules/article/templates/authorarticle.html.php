<?php
echo '<!DOCTYPE html>
<html>
    <head>
    <meta charset="'.$this->_tpl_vars['jieqi_charset'].'">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="applicable-device" content="mobile" />
    <title>'.$this->_tpl_vars['author'].'的全部作品-'.$this->_tpl_vars['jieqi_sitename'].'</title>
    <meta name="keywords" content="'.$this->_tpl_vars['author'].'全部小说,'.$this->_tpl_vars['author'].'最新作品,'.$this->_tpl_vars['author'].'新书,'.$this->_tpl_vars['author'].'首发,'.$this->_tpl_vars['author'].'吧,'.$this->_tpl_vars['author'].'作品最新节更新">
    <meta name="description" content="'.$this->_tpl_vars['jieqi_sitename'].'提供作家'.$this->_tpl_vars['author'].'全部小说,'.$this->_tpl_vars['author'].'最新作品在线阅读,'.$this->_tpl_vars['author'].'作品免费阅读。">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base.css">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge.css">
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
#pagelink {
	text-align: center;background:#fff;
}
#pagelink a {
	margin: 0px 3px 0px 3px;
	display: none;
}
#pagelink input {
	width: auto;
}
</style>
</head>
    <body>
    <div class="header top-half">
      <div class="inner"><span class="pull-left"><a href="javascript:window.history.back();"><i class="icon-home"></i>返回</a></span>
        <h2>'.$this->_tpl_vars['author'].'作品</h2>
      </div>
    </div>
    <!--作者书籍列表 begin-->
    <div class="search-result hot-box mar-top bor-top">
      <div class="entry" id="html_box">';
if (empty($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = array();
elseif (!is_array($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = (array)$this->_tpl_vars['articlerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['articlerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['articlerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['articlerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
        <div class="item"><a href="'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['url_articleinfo'].'"><img src="'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['url_image'].'" class="avatar">
        <div class="body"><span class="t">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articlename'].'</span><span class="author">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['author'].'</span><span class="btn">立即阅读</span>
          <p>'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['intro'].'</p>
        </div>
        </a>
		</div>';
}
echo '
      </div>
    </div>
    <!--作者书籍列表 end-->
'.$this->_tpl_vars['url_jumppage'].'
<div class="return-top" id="icon-top" style="display: none;"><a href="javascript:;"><i class="icon-top"></i></a></div>
<div class="backdrop bh_wxlogin_lay" style="display: none;"></div>
<script type="text/javascript">
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
	

	
	
	//滚动条在Y轴上的滚动距离
 
function getScrollTop(){
　　var scrollTop = 0, bodyScrollTop = 0, documentScrollTop = 0;
　　if(document.body){
　　　　bodyScrollTop = document.body.scrollTop;
　　}
　　if(document.documentElement){
　　　　documentScrollTop = document.documentElement.scrollTop;
　　}
　　scrollTop = (bodyScrollTop - documentScrollTop > 0) ? bodyScrollTop : documentScrollTop;
　　return scrollTop;
}
 
//文档的总高度
 
function getScrollHeight(){
　　var scrollHeight = 0, bodyScrollHeight = 0, documentScrollHeight = 0;
　　if(document.body){
　　　　bodyScrollHeight = document.body.scrollHeight;
　　}
　　if(document.documentElement){
　　　　documentScrollHeight = document.documentElement.scrollHeight;
　　}
　　scrollHeight = (bodyScrollHeight - documentScrollHeight > 0) ? bodyScrollHeight : documentScrollHeight;
　　return scrollHeight;
}
 
//浏览器视口的高度
 
function getWindowHeight(){
　　var windowHeight = 0;
　　if(document.compatMode == "CSS1Compat"){
　　　　windowHeight = document.documentElement.clientHeight;
　　}else{
　　　　windowHeight = document.body.clientHeight;
　　}
　　return windowHeight;
}
 
window.onscroll = function(){
　　if(getScrollTop() + getWindowHeight() == getScrollHeight()){
　　　//　alert("已经到最底部了！!");
	  //ajax加载页码
	  
	  
	  var next = $(".next").attr("href");
	  if(next != ""){
		  $.ajax({
			type:\'post\',
			url:next, 
			success:function(msg){
				$(".backdrop.bh_wxlogin_lay").show().append("<i class=\'loading-icon\'><svg class=\'loading-svg-animate\' version=\'1.1\' id=\'loader-1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' x=\'0px\' y=\'0px\' width=\'50\' height=\'50\' viewBox=\'0 0 50 50\' style=\'enable-background:new 0 0 50 50;\' xml:space=\'preserve\'><path fill=\'#fff\' d=\'M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z\'><animateTransform attributeType=\'xml\' attributeName=\'transform\' type=\'rotate\' from=\'0 25 25\' to=\'360 25 25\' dur=\'0.6s\' repeatCount=\'indefinite\'></path></svg></i>");
				$("body").attr("style","position:fixed;top:0;left:0;");
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#yema").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$(".backdrop.bh_wxlogin_lay").hide();
                $(".backdrop.bh_wxlogin_lay i").remove();
				$("body").removeAttr("style");
			}
			 });
		  
	  }else{
		  $(".prev").text("加载").show();
		  $(".next").text("完成").show();
	  };
	  
　　};
};
		
</script>
</body>
</html>';
?>