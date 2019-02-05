<!doctype html>
<html>
<head>
<meta charset="gbk">
<title>深蓝源码数据读取系统</title>
</head>
<style type="text/css">
	p{text-align:center;}
	#zhongpin{color:aquamarine}
</style>
<body>
<?php	
/*	echo "
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200">id</td>
    <td width="200">bookid</td>
    <td width="200">uid</td>
    <td width="200" >pinglun</td>
  </tr>";
	*/

header('Content-Type:text/html;charset=gbk');
	
//获取数据库文件
include_once("../configs/define.php");
//数据库地址
$slmsul = constant("JIEQI_DB_HOST");
//数据库账号
$slmsroot = constant("JIEQI_DB_USER");
//数据库账号
$slmsmima = constant("JIEQI_DB_PASS");
//数据库账号
$slmsdb = constant("JIEQI_DB_NAME");
//网站名称
$slmsmingc = constant("JIEQI_SITE_NAME");

$bookid=$_GET['bookid'];
$uid = $_GET['uid'];
$pingfen = $_GET['pingfen'];

echo("<h2 style='text-align:center;'>".$slmsmingc."</h2>");
echo("<hr/>");


   if(is_numeric($bookid) != 1){
	   echo("<div id=\"shuchu\">bookid参数错误</div>");
   }else{
	 //   echo("<div id=\"shuchu\">数值正确，可以查询数据了！</div>");
	   
//从分组里面再查询ownerid字段的详情内容
$con = mysql_connect($slmsul, $slmsroot,$slmsmima);
if (!$con)
  {
  die('连接失败: ' . mysql_error());
  }
$db_selected = mysql_select_db($slmsdb,$con);    
$sql = "SELECT count(*) FROM jieqi_article_reviews WHERE ownerid=".$bookid." GROUP BY ownerid";
	$result = mysql_query($sql,$con);
//print_r(mysql_fetch_row($result));
  
while($row=mysql_fetch_row($result))
{
	echo " <p style='color:red'>文章评论数<span id=\"chaping\">{$row[0]}</span></p>";
};   

	   
//关闭数据库链接	   
mysql_close($con);
	    
   };
	

?>	
	
</body>
</html>