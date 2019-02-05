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
<title>小说分类-免费小说-VIP小说_小说排行榜_好看的小说网-'.$this->_tpl_vars['jieqi_sitename'].'</title>
<meta name="Keywords" content="小说，免费小说，好看的小说，小说下载，言情小说，免费小说下载">
<meta name="Description" content="'.$this->_tpl_vars['jieqi_sitename'].'vip小说在线阅读，这里有好看的玄幻小说,武侠小说,穿越小说,都市小说,历史军事小说,校园言情小说,总裁豪门小说,科幻小说,恐怖小说等，在线阅读全文无广告弹窗，手机在线看小说就选'.$this->_tpl_vars['jieqi_sitename'].'。">
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css">
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/zepto.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/global.min.js"></script>
<style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
#pagelink {display:none;
	text-align: center;
}
#pagelink a {
	margin: 0px 3px 0px 3px;
	display: none;
}
#pagelink input {
	width: auto;
}
.loading-icon {
	width: 3rem;
	height: 3rem;
	position: fixed;
	z-index: 999;
	left: 50%;
	top: 50%;
	margin-left: -1.5rem;
	margin-top: -1.5rem;
}
.loading-icon svg {
	width: 100%;
	height: 100%;
}
.slmsns{color:#E712F4;}
.backdrop.bh_wxlogin_lay{filter:alpha(opacity=50);  /*支持 IE 浏览器*/
-moz-opacity:0.50; /*支持 FireFox 浏览器*/
opacity:0.50;  /*支持 Chrome, Opera, Safari 等浏览器*/}
.backdrop.bh_wxlogin_lay i{background-color:rgba(0,0,0,0.74);border:1px solid #fff;border-radius:10px;}
#jiazaigengduo{width:100%;height:35px;border-top:1px solid #ccc;margin-top:10px;text-align:center;background:#fc992f;margin-bottom:5px;}
#jiazaigengduo a{display:list-item; width:100%;height:100$; color:aliceblue;list-style-type:none;font-size:15px;line-height:35px;}
</style>
</head>
<body>
<div class="header top-half">
  <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>首页</a></span>
    <h2>'.$this->_tpl_vars['jieqi_sitename'].'</h2>
  </div>
</div>
<div class="classify-box mar-top bor-foot" id="cate_option">
  <div class="entry">
    <h3 id="lb" data-lb="';
if (empty($this->_tpl_vars['rgrouprows'])) $this->_tpl_vars['rgrouprows'] = array();
elseif (!is_array($this->_tpl_vars['rgrouprows'])) $this->_tpl_vars['rgrouprows'] = (array)$this->_tpl_vars['rgrouprows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['rgrouprows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['rgrouprows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['rgrouprows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['rgrouprows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['rgrouprows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['selected'] > 0){
echo $this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'];
}
}
echo '">类别</h3>
    <ul>
		';
if (empty($this->_tpl_vars['rgrouprows'])) $this->_tpl_vars['rgrouprows'] = array();
elseif (!is_array($this->_tpl_vars['rgrouprows'])) $this->_tpl_vars['rgrouprows'] = (array)$this->_tpl_vars['rgrouprows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['rgrouprows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['rgrouprows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['rgrouprows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['rgrouprows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['rgrouprows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['selected'] > 0){
echo '
       <li><a href="'.$this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['url'].'" type="sex" val="0" class="active">'.$this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}else{
echo '
		';
if($this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'] == "不限"){
echo '<li><a href="/modules/article/articlefilter.php" type="sex" val="0">'.$this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}
echo '
		';
if($this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'] == "男生"){
echo '<li><a href="/modules/article/articlefilter.php?rgroup=1" type="sex" val="2" class="">'.$this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}
echo '
		';
if($this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'] == "女生"){
echo '<li><a href="/modules/article/articlefilter.php?rgroup=2" type="sex" val="2" class="">'.$this->_tpl_vars['rgrouprows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}
echo '
        ';
}
}
echo '
    </ul>
  </div>
  <div class="entry classifying" id="cate_box">
    <h3>分类</h3>
    <ul class="lbxz">
		';
if (empty($this->_tpl_vars['sortidrows'])) $this->_tpl_vars['sortidrows'] = array();
elseif (!is_array($this->_tpl_vars['sortidrows'])) $this->_tpl_vars['sortidrows'] = (array)$this->_tpl_vars['sortidrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['sortidrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['sortidrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['sortidrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['sortidrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['sortidrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['group'] == $this->_tpl_vars['rgroup']){
if($this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['selected'] > 0){
echo '
      <li style="display: inline-block;"><a href="'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['url'].'" type="tid" val="all" class="active">'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}else{
echo ' <li style="display: inline-block;"><a href="'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['url'].'" type="tid" val="3" class="">'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}
echo '
		';
}elseif($this->_tpl_vars['rgroup'] == ''){
if($this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['selected'] > 0){
echo '
		 <li style="display: inline-block;"><a href="'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['url'].'" type="tid" val="all" class="active">'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}else{
echo '<li style="display: inline-block;"><a href="'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['url'].'" type="tid" val="3" class="">'.$this->_tpl_vars['sortidrows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>
		';
}
}
}
echo '
    </ul>
    <span><a id="shouqi" href="javascript:;">收起<i class="icon-retract"></i></a></span></div>
  <div class="entry">
	  
	  <h3>状态</h3>
    <ul>
		';
if (empty($this->_tpl_vars['isfullrows'])) $this->_tpl_vars['isfullrows'] = array();
elseif (!is_array($this->_tpl_vars['isfullrows'])) $this->_tpl_vars['isfullrows'] = (array)$this->_tpl_vars['isfullrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['isfullrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['isfullrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['isfullrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['isfullrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['isfullrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['isfullrows'][$this->_tpl_vars['i']['key']]['selected'] > 0){
echo '<li><a href="'.$this->_tpl_vars['isfullrows'][$this->_tpl_vars['i']['key']]['url'].'" type="end" val="all" class="active">'.$this->_tpl_vars['isfullrows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}else{
echo '<li><a href="'.$this->_tpl_vars['isfullrows'][$this->_tpl_vars['i']['key']]['url'].'" type="end" val="0" class="">'.$this->_tpl_vars['isfullrows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}
}
echo '
    </ul>
  </div>
  <div class="entry">
    <h3>属性</h3>
    <ul>
		';
if (empty($this->_tpl_vars['isviprows'])) $this->_tpl_vars['isviprows'] = array();
elseif (!is_array($this->_tpl_vars['isviprows'])) $this->_tpl_vars['isviprows'] = (array)$this->_tpl_vars['isviprows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['isviprows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['isviprows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['isviprows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['isviprows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['isviprows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['isviprows'][$this->_tpl_vars['i']['key']]['selected'] > 0){
echo '
      <li><a href="'.$this->_tpl_vars['isviprows'][$this->_tpl_vars['i']['key']]['url'].'" class="active">'.$this->_tpl_vars['isviprows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}else{
echo '<li><a href="'.$this->_tpl_vars['isviprows'][$this->_tpl_vars['i']['key']]['url'].'">'.$this->_tpl_vars['isviprows'][$this->_tpl_vars['i']['key']]['name'].'</a></li>';
}
}
echo '
    </ul>
  </div>
</div>
<!--VIP新书推荐 end--><!--VIP 列表 begin-->
<div class="search-result hot-box bor-top">
  <div class="entry" id="html_box"> ';
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
      </a></div>
    ';
}
echo ' </div>
  '.$this->_tpl_vars['url_jumppage'].' </div>
<!--VIP 列表 end-->
	<div class="backdrop bh_wxlogin_lay" style="display: none;"></div>
<div class="return-top" id="icon-top" style="display: none;"><a href="javascript:;"><i class="icon-top"></i></a></div>
<div id="jiazaigengduo"><a href="javascript:;">加载更多∨</a></div>
<script type="text/javascript">
var autoready=1;
    $(window).bind("scroll", function (event) {
        //滚动条到网页头部的 高度，兼容ie,ff,chrome
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();  //网页的高度
        // 网页高度-top-当前窗口高度
        if (textheight - top - $(window).height() <= 60){
            if(autoready==1) {
                autoready=0;
	  $("#jiazaigengduo a").text("加载中……");
	  var next = $(".next").attr("href");
	  if(next != ""){
		  $.ajax({
			type:\'post\',
			url:next, 
			success:function(msg){
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#pagelink").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$("#jiazaigengduo a").text("加载更多∨");
				autoready=1;
			}
			 });
		  
	  }else{
		   $("#jiazaigengduo a").text("已经全部加载");
		   $("#jiazaigengduo").css("background","#ccc");
	  };
	  
　　};
}});
	
			
			
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

//判断男生女生输出
	var lb = $("#lb").attr("data-lb");
	var sl = $(".lbxz li").length;
	//alert(sl);
	if(lb == "男生"){
		$(".lbxz li").eq(18).nextAll().remove();
	}else if(lb == "女生"){
		$(".lbxz li").eq(19).prevAll().remove();
		$(".lbxz").before("");
	}else{
		$(".lbxz li").eq(18).nextAll().remove();
	}
	
	$("#shouqi").click(function(){
		var ifs = $(this).text();
		if(ifs == "收起"){
		$(".lbxz li").eq(3).nextAll().hide();
		$(this).html("<a href=\'javascript:;\'>展开<i class=\'icon-open\'></i></a>");
		}else{
		$(".lbxz li").eq(3).nextAll().show();
		$(this).html("<a href=\'javascript:;\'>收起<i class=\'icon-retract\'></i></a>");
		}
	});
	
	$(".lbxz li").eq(3).nextAll().hide();
	$("#shouqi").html("<a href=\'javascript:;\'>展开<i class=\'icon-open\'></i></a>");
	
	
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