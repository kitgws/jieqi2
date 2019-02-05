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
<script src="/wap/js/jquery.min.js"></script>
<script type="text/javascript" src="/wap/js/fs.js"></script>
<script type="text/javascript" src="/wap/layer.m.js"></script>
<script type="text/javascript" src="/wap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/wap/js/pagewap.js"></script>
<script type="text/javascript" src="/scripts/common.js"></script>
</head>
<body ';
if($this->_tpl_vars['articleid'] > 0){
echo 'class="cover"';
}
echo ' oncopy="return false" onpaste="return false">
<header style="display:none;"></header>
<div class="header">
	<a href="/" class="logo"><img src="/wap/img/logo.png"/></a>
	<div class="top">
		<div class="nav">
			<a href="/">首页</a>
			<a href="/modules/article/articlefilter.php">书库</a>
			<a href="/Top">排行</a>
			<a href="/modules/pay/buyegold.php">充值</a>
			<a href="/yue.php">包月</a>
		</div>
	</div>
	<div class="bottom logined">';
if($this->_tpl_vars['jieqi_userid'] ==0){
echo '
		<div class="accounts" id="jsunlogin">
		<a href="/modules/article/bookcase.php">我的收藏</a>
		   <span class="divide">|</span>
			<a class="my-name" href="/login.php">登录</a>
			<a class="sign" href="javascript:;" onclick="GPage.addbook(\'/user/signin.php\');" id="addbook">签到</a>
		</div>';
}else{
echo '
		<div class="accounts" id="jsunlogin">
			<a class="my-name" onclick=\'$("#jsuser").slideToggle(100);\'>'.$this->_tpl_vars['jieqi_username'].'</a>
			<a class="sign" href="javascript:;" onclick="GPage.addbook(\'/user/signin.php\');" id="addbook">签到</a>
		</div>
		';
}
echo '
	</div>';
if($this->_tpl_vars['jieqi_userid'] ==0){
echo '
	<div id="jsuser">
		<div class="container">
		</div>
	</div>';
}else{
echo '
	<div id="jsuser">
		<div class="container">
			<div id="jsLogined" class="mod block" style="margin: 0 10px 0px;">
				<div class="bd" style="margin:0 10px;font-size:12px;line-height:20px">
					['.$this->_tpl_vars['jieqi_honor'].']
					<span id="jsusername">'.$this->_tpl_vars['jieqi_username'].'</span> 您好！
					<br/>可用'.$this->_tpl_vars['egoldname'].':'.$this->_tpl_vars['egold'].' ，当前积分：'.$this->_tpl_vars['jieqi_score'].'
					<br/>';
if($this->_tpl_vars['overtime'] == 0){
echo '尚未包月';
}elseif($this->_tpl_vars['overtime'] < $this->_tpl_vars['time']){
echo '已经到期';
}else{
echo date('Y-m-d',$this->_tpl_vars['overtime']).' 到期';
}
echo '  【<a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/monthlybuy.php?id='.$this->_tpl_vars['uid'].'">开通</a>】
				</div>
				<div class="bd" style="margin:10px 10px 0">
					<table class="accountbtn">
					<tr>
						<td>
							<a href="/useredit.php">设置</a>
						</td>
						<td>
							<a href="/modules/pay/paylog.php">财务</a>
						</td>

					<td>
							<a href="/personedit.php">实名认证</a>
						</td>
					</tr>
					</table>
				</div>
				<div class="bd" style="margin:10px 10px 0">
					<table class="accountbtn">
					<tr>
						<td>
							<a href="/modules/pay/buyegold.php">充值</a>
						</td>
						<td>
							 ';
if($this->_tpl_vars['jieqi_groupid'] >= 6 ||$this->_tpl_vars['jieqi_groupid'] ==2){
echo '<a href="/modules/article/myarticle.php">作家中心</a>
                             ';
}else{
echo ' <a href="/modules/article/applywriter.php">申请作者</a>
							';
}
echo '
						</td>
					<td>
							<a href="/logout.php" onclick="return confirm(\'您确定要退出嘛？\')">退出</a>
						</td>
					</tr>
					</table>
				</div>
			</div>
		</div>
	</div>';
}
echo '
</div>
';
if($this->_tpl_vars['jieqi_contents'] != ""){
echo $this->_tpl_vars['jieqi_contents'];
}
echo '
<div class="footer">
	<style type="text/css">
			.footer{
				position: relative;
			}
			.weixin_dibu{
				position: absolute;
				width:30%;
				padding-bottom: 5px;
				overflow: hidden;
				right: 0.5em;
				top: 1em;
			}
			.weixin_dibu img{
				width:100%;
				height:100%;
				max-width: 120px;
				max-height: 120px;
			}
		</style>
		<div class="weixin_dibu">
			<img src="/wap/img/weixin.png"/>
		</div>
	<div class="section nav">
		<p>
			<a href="/">首页</a>
			<a href="/modules/article/articlefilter.php">书库</a>
			<a href="/Top">排行</a>
			<a href="/modules/pay/buyegold.php">充值</a>
			<a href="/modules/article/bookcase.php">我的收藏</a>
		</p>
	</div>
	<div class="section kefu">
		<h4>联系客服</h4>
		<p>
			在线时间:周一到周日9:00-24:00 <br/>电 话：13606913177<br/>Ｑ Ｑ：2762987495<br/>邮 箱：banquan888@qq.com<br/>微信二维码：888言情
		</p>
	</div>
	<div class="section copyright">
		<p>
			Copyright 2015 '.$this->_tpl_vars['jieqi_host'].' All rights reserved.
		</p>
	</div>
</div>
<div id="box">
	<div id="boxtxt"></div>
	<div id="boxmask"></div>
</div>
</body>
</html>
';
?>