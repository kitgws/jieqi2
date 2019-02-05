<?php
require 'config.php';
 $code       = $_GET['code'];
 if(empty($code)){
 	if(empty($code))header('Location:/wap');
 }
 $appid      = "wxf4a794ac7caecb3c";
 $appsecret  = "d4fca9e75d555668a40f245536496491";
 //2、获取网页授权的access_token、openid
  $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code";
$datastr=  file_get_contents($url);
$dataArr =json_decode($datastr,true);
//获取用户详细信息
if (!empty($dataArr)) {
	$access_token = $dataArr['access_token'];
	$openid       = $dataArr['openid']; 
	$url          = "https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
	$datastr      =  file_get_contents($url);
	$userinfo     =json_decode($datastr,true);
	if (!empty($userinfo)) {
		//入库
		update_users($userinfo,$dataArr);
	}else{
		header('Location:/wap');
	}
	
}else{
	header('Location:/wap');
}


function update_users($userinfo,$dataArr)
{
	//没有就库
	$find_sql  = "select * from jieqi_system_users where unionid = '".$dataArr['unionid']."' limit 1 ";
	$res       = mysql_query($find_sql);
	$user      = mysql_fetch_assoc($res);
	if(!empty($user)){
		//已存在 TODO
		header('Location:/wap');
	}else{
		$email = time()."@qq.com";
		//插入一条信息
		$insert_sql = " insert into jieqi_system_users (`uname`,`name`,`email`,`openid`,`unionid`)values('{$userinfo['nickname']}','{$userinfo['nickname']}','$email','{$dataArr['openid']}','{$dataArr['unionid']}')";
		$res = mysql_query($insert_sql);
		header('Location:/wap');
	}
}