<?php
header("Content-type: text/html; charset=utf-8"); 
#[加载配置文件]
require_once("./config.php");
#[加载函数库]
require_once("./function.php");
#[加载数据库]
require_once("./mysql.php");
$DB = new DB_SQL($dbHost,$dbUser,$dbPass);
$DB->Connect($dbData);
?>