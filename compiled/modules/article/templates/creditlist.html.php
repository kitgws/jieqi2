<?php
echo '
<!DOCTYPE html>
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
<title>粉丝榜-'.$this->_tpl_vars['articlename'].'-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="dns-prefetch" href="//m.qirexiaoshuo.com" />
<link rel="dns-prefetch" href="//cj.qirexiaoshuo.com" />
<link rel="canonical" href="//m.qirexiaoshuo.com/comment/list_replay/" />
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
	#pagelink{height:30px;background:#fff;margin-top:1px;margin-bottom:1px;line-height:30px;text-align: center;}
	#pagelink a{margin-left:5px;margin-right:5px;}
	#pagelink input{border:1px solid #ccc;height:15px;text-align:center;}
	.net-friend.bor-foot.mar-top{margin-top:55px;}
	.slmsfs{margin-left:10px;margin-right:10px;;border:1px solid red;height:60px;position:relative;}
	.img{width:40px;height:40px;border-radius:100%;line-height:60px;position: absolute;left:0px;top:10px;}
	.shuoming{display:block;height:60px;position:absolute;left:50px;}
	.shuoming h3{height:28px;border:1px solid #ccc;}
	.shuliang{display:block; height:28px;border:1px solid rgba(24,151,35,1.00);position:relative;width:200px;}
	.shuliang span{display:list-item; position:absolute;left:0px;top:5px;left:20px; border:1px solid red;width:16px;height:16px;}
	.shuliang img{position:absolute;left:30px;width:100%;height:100%;}
</style>
</head>
<body>
<div class="header top-half">
  <div class="inner"><span class="pull-left"><a href="javascript:window.history.back();"><i class="icon-home"></i>返回</a></span>
    <h2>粉丝榜</h2>
  </div>
</div>
<!--主评论-->
<div class="net-friend bor-foot mar-top">
	';
if (empty($this->_tpl_vars['replyrows'])) $this->_tpl_vars['replyrows'] = array();
elseif (!is_array($this->_tpl_vars['replyrows'])) $this->_tpl_vars['replyrows'] = (array)$this->_tpl_vars['replyrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['replyrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['replyrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['replyrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['replyrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['replyrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <div class="entry" style="border-top:1px solid #ccc;">
    <div class="item"><a href="javascript:;"><img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posterid'],'s').'" class="avatar"></a>
      <div class="body">
        <div class="t">'.$this->_tpl_vars['replyrows'][$this->_tpl_vars['i']['key']]['username'].'</div>
        <div class="txt"><a href="javascript:;">'.$this->_tpl_vars['replyrows'][$this->_tpl_vars['i']['key']]['posttext'].'</a></div>
        <div class="foot"><span class="time"></span><span class="function"><a href="javascript:;"  ><i class="icon-praise"></i>0</a></span></div>
      </div>
    </div>
  </div>
	';
}
echo '
	
	
	
	<div class="slmsfs">
		<img class="img" src="https://m.slms.cc/avatar.php?uid=5&size=s" alt="头像" />
	    <div class="shuoming">
			<h3>老徐</h3>
			<div class="shuliang">赠送：<span><img src="https://m.slms.cc/avatar.php?uid=5&size=s" /></span> X 个礼物给作者</div>
		</div>
		
	
	</div>
	
	
</div>
	'.jieqi_get_block(array('bid'=>'0', 'blockname'=>'打赏记录', 'module'=>'article', 'filename'=>'block_actlog', 'classname'=>'BlockArticleActlog', 'side'=>'-1', 'title'=>'打赏记录', 'vars'=>'addtime,all,0,$articleid,', 'template'=>'block_actlog.html', 'contenttype'=>'4', 'custom'=>'0', 'publish'=>'3', 'hasvars'=>'1'), 1).'

	
	
	<!--页码-->
	'.$this->_tpl_vars['url_jumppage'].'
	<!--页码end-->

<script>    $(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "69208153";
    });
</script>
	
	
	
</body>
</html>';
?>