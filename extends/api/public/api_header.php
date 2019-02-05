<?php
	include('../../class/json.php');
	include('../../../configs/define.php');
	$con = mysql_connect(JIEQI_DB_HOST,JIEQI_DB_USER,JIEQI_DB_PASS);
	mysql_query("set names gbk");
	if (!$con){
	  die('Could not connect: ' . mysql_error());
	 }
	mysql_select_db(JIEQI_DB_NAME, $con);
?>