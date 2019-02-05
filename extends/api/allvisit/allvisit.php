<?php

	if(!isset($_GET['articleid'])||!isset($_GET['number'])){
			exit;
	}
	include('../public/api_header.php');
	
	//小说点击量+1
	$articleid = $_GET['articleid'];
	$number = $_GET['number'];

	$allvisit_sql = "select allvisit from jieqi_article_article  where articleid = $articleid";
	$allvisit_result = mysql_query($allvisit_sql,$con);
	$allvisit_row = mysql_fetch_row($allvisit_result);
	$allvisit = $allvisit_row[0];
	$allvisit = $allvisit + 1;
	$allvisit_update_sql = "update jieqi_article_article set allvisit = $allvisit where articleid = $articleid";
	mysql_query($allvisit_update_sql,$con);
	echo $allvisit;

?>