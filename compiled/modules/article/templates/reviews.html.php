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
<title>发布评论-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/public.js"></script>
<style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
	.publish .btn input{width:100%;height: 45px;margin:0 auto;line-height:45px;background-color: #ff730b;border-radius: 45px;color: #fff;text-align:center;font-size: 1.6rem;}
	#htmlreview{background:#fff;}
	#htmlreview li{width:95%;margin:0 auto;border-top:1px solid #ccc;background:#fff;}
	#pagelink{height:30px;background:#fff;margin-top:1px;margin-bottom:1px;line-height:30px;text-align: center;}
	#pagelink a{margin-left:5px;margin-right:5px;}
	#pagelink input{border:1px solid #ccc;height:15px;text-align:center;}
	#htmlreview strong{font-size:15px;}
	#htmlreview p{font-size:15px;}
	#xiaoxi{position:fixed;width:200px;left:50%;top:50%;margin-left:-100px;margin-top:-100px; text-align:center; background-color:black;color:aliceblue;border-radius:10px;opacity:0.8;font-size:16px;padding-top:2px;padding-bottom:2px;display:none;}
	#xiaoxi p{margin-top:2px;margin-bottom:2px;}
</style>
</head>
<body>
<div class="header top-half">
  <div class="inner"><span class="pull-left"><a href="javascript:window.history.back();"><i class="icon-home"></i>返回</a></span>
    <h2>发表评论</h2>
  </div>
</div>
<div class="publish mar-top bor-top">
	<form name="frmreview" id="frmreview" method="post" action="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/reviews.php?aid='.$this->_tpl_vars['articleid'].'">
  <div class="entry">
    <div class="row clearfix">
      <div class="text">评分</div>
      <ul id="star_box">
        <li><a href="javascript:;" onclick="choice_star_box(1);" class="active"><i class="icon-star"></i></a></li>
        <li><a href="javascript:;" onclick="choice_star_box(2);" class=""><i class="icon-star"></i></a></li>
        <li><a href="javascript:;" onclick="choice_star_box(3);" class=""><i class="icon-star"></i></a></li>
        <li><a href="javascript:;" onclick="choice_star_box(4);" class=""><i class="icon-star"></i></a></li>
        <li><a href="javascript:;" onclick="choice_star_box(5);" class=""><i class="icon-star"></i></a></li>
      </ul>
      <div class="small">(必填)</div>
    </div>
    <div class="area">
      <textarea name="pcontent" cols="" rows="" id="comment_mess" class="textarea" placeholder="打分并说明您的看法...(300字以内)"></textarea>
	  <input type="hidden" name="act" id="act" value="newpost" />'.$this->_tpl_vars['jieqi_token_input'].'
      <div class="br"><span class="total">500</span></div>
    </div>
    <div class="row clearfix">
      <div class="book clearfix" id="slms_img"><img src="'.$this->_tpl_vars['jieqi_url'].'/slms/images/notimg.gif" width="36" height="48" />
        <div class="body">
          <div class="title" id="slms_ming"></div>
          <div class="text" id="slms_zuozhe"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="btn">';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<a href="/login.php">发表</a>';
}else{
echo '
	  <input type="button" name="Submit" class="button" value=" 发表 " style="margin:0 auto;" >';
}
echo '</div>
</form>
</div>
	
<ul id="htmlreview">
';
if (empty($this->_tpl_vars['reviewrows'])) $this->_tpl_vars['reviewrows'] = array();
elseif (!is_array($this->_tpl_vars['reviewrows'])) $this->_tpl_vars['reviewrows'] = (array)$this->_tpl_vars['reviewrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['reviewrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['reviewrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['reviewrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['reviewrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['reviewrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
<li>
  <a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/reviewshow.php?rid='.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'">
        <span>
            <strong>'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['poster'].'：</strong>
            <i></i>
            <em>'.date('m-d H:i',$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replytime']).'</em>
			
        </span>
        <br>
        <p>'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['title'].'</p>
		<div style="clear:both;color:#3c97dd;text-align:right" onclick="showReply('.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].',this)">回应('.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replies'].')</div>
		<div class="well" id="__comment_'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'" style="clear: both; display: none;">

</div>
</a>
</li>
';
}
echo '
</ul>

<div id="xiaoxi"><p>打赏成功！</p></div>
	<!--页码-->
	'.$this->_tpl_vars['url_jumppage'].'
	<!--页码end-->
<script type="text/javascript" src="/../scripts/common.js"></script>
<script type="text/javascript">   
	 $(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "69208153";
    });
	
	var aid = "'.$this->_tpl_vars['articleid'].'";
	
	$.ajax({
			type:\'post\',
			url:"/modules/article/articleinfo.php?id="+aid, 
			success:function(msg){
			var fanhuiuiimg = $(msg).find(".entry img").attr("src");
			 $("#slms_img img").attr("src",fanhuiuiimg);
			 $("#slms_ming").text($(msg).find("h1").text());
			 $("#slms_zuozhe").text($(msg).find("#zz").text());
			}
			});
	
	
	$(".button").click(function(){
		 var dataa = $(\'#frmreview\').serialize();
		$.ajax({
			contentType: "application/x-www-form-urlencoded; charset=gbk", 
			type:\'post\',
			url:$("#frmreview").attr("action"),
			data:dataa,
			success:function(msg){
				var fanhui = $(msg).find("#ajax").text();
				if(fanhui == ""){
					$("#xiaoxi").show();
					$("#xiaoxi p").text("评书成功，感谢您的支持！");
					ref = setInterval(function(){
                     location.reload();
                    },2000);
				}else{
					$("#xiaoxi").show();
					$("#xiaoxi p").text(fanhui);
					ref = setInterval(function(){
                     $("#xiaoxi").hide();
					 clearInterval(ref);
                    },2000);
				};
			}
		
		});
	});
	
	
</script>
</body>
</html>';
?>