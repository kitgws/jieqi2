<?php
include_once("./global.php");
if($_GET['act']=='getstatus'){
	$sql="select * from ".$paylong." where buytime='".$_GET['out_trade_no']."'";
	$msg=$DB->GetOne($sql);
	if($msg['payflag']==1){
		echo "ok";
	}
}
if($_GET['act']=='add'){
	if($_POST["username"]==''){
		echo "error:请先登录！";
		exit;
	}
	if($_POST["price"]==''){
		echo "error:请选择金额";
		exit;
	}
	// if($_POST["price"]<'2000'){
	// 	echo "error:最低充值2000言情币！";
	// 	exit;
	// }
	$sql="select * from ".$prefix." where name='".$_POST['username']."'";
	$user=$DB->GetOne($sql);
	if(intval($user['uid'])==0){
		echo "error:用户不存在！";
		exit;
	}
	$out_trade_no=time();
	//写入订单记录
	$table=$paylong;
	$d['siteid']=0;
	$d['buytime']=$out_trade_no;
	$d['buyname']=$_POST["username"];
	$d['egold']=$_POST["price"];
	$d['money']=$_POST["price"];
	$d['buyid']=$user['uid'];
	$d['paytype']="微信";
	$DB->a_insert($table,$d);
	echo "success:/weixin/pay.php?buytime=".$out_trade_no;
	exit;
}
?>