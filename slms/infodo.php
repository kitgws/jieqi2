<!doctype html>
<html>
<head>
<meta charset="gbk">
<title>����Դ�����ݶ�ȡϵͳ</title>
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
	
//��ȡ���ݿ��ļ�
include_once("../configs/define.php");
//���ݿ��ַ
$slmsul = constant("JIEQI_DB_HOST");
//���ݿ��˺�
$slmsroot = constant("JIEQI_DB_USER");
//���ݿ��˺�
$slmsmima = constant("JIEQI_DB_PASS");
//���ݿ��˺�
$slmsdb = constant("JIEQI_DB_NAME");
//��վ����
$slmsmingc = constant("JIEQI_SITE_NAME");

$bookid=$_GET['bookid'];
$uid = $_GET['uid'];
$pingfen = $_GET['pingfen'];

echo("<h2 style='text-align:center;'>".$slmsmingc."</h2>");
echo("<hr/>");


   if(is_numeric($bookid) != 1){
	   echo("<div id=\"shuchu\">bookid��������</div>");
   }else{
	 //   echo("<div id=\"shuchu\">��ֵ��ȷ�����Բ�ѯ�����ˣ�</div>");
	   
//�ӷ��������ٲ�ѯownerid�ֶε���������
$con = mysql_connect($slmsul, $slmsroot,$slmsmima);
if (!$con)
  {
  die('����ʧ��: ' . mysql_error());
  }
$db_selected = mysql_select_db($slmsdb,$con);    
$sql = "SELECT count(*) FROM jieqi_article_reviews WHERE ownerid=".$bookid." GROUP BY ownerid";
	$result = mysql_query($sql,$con);
//print_r(mysql_fetch_row($result));
  
while($row=mysql_fetch_row($result))
{
	echo " <p style='color:red'>����������<span id=\"chaping\">{$row[0]}</span></p>";
};   

	   
//�ر����ݿ�����	   
mysql_close($con);
	    
   };
	

?>	
	
</body>
</html>