<?php
	session_start();
	$uid = $_SESSION['jieqiUserId'];
	include('../class/json.php');
	include('../../configs/define.php');
	$con = mysql_connect(JIEQI_DB_HOST,JIEQI_DB_USER,JIEQI_DB_PASS);
	mysql_query("set names gbk");
	if (!$con){
	  die('Could not connect: ' . mysql_error());
	 }
	mysql_select_db(JIEQI_DB_NAME, $con);
	$result = mysql_query("SELECT * FROM jieqi_system_persons where uid = $uid");
	$row = mysql_fetch_assoc($result);
	//realname gender mobilephone idcardtype idcard
	if(strlen($row['realname']) < 1 || strlen($row['gender']) < 1 ||  strlen($row['mobilephone']) < 1 || strlen($row['idcardtype']) < 1 || strlen($row['idcard']) < 1){
		api_json('','false');
	 }else{
		 api_json('','true');
	 }
	mysql_close($con);
?>
