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
    <title>'.$this->_tpl_vars['name'].'�ĸ�������-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/ranking.css" />
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign_1.css" />
    <script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery.cookie.js"></script>
    <style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
#zhezhao{position:fixed;left:0;top:0;right:0;bottom:0;background:rgba(0,0,0,0.60);z-index:998;}
		#xiaoxi{position:fixed;width:200px;left:50%;top:50%;margin-left:-100px; text-align:center; background-color:black;color:aliceblue;border-radius:10px;opacity:0.8;font-size:16px;padding-top:2px;padding-bottom:2px;z-index:999;}
	    #xiaoxi p{margin-top:2px;margin-bottom:2px;}
</style>
</head>
    <body>
    <div class="wrapper">
      <div class="wrapper mar-foot"><!--ͷ�� begin-->
        <div class="uf-header clearfix"><img src="'.$this->_tpl_vars['jieqi_url'].'/slms/images/uf-bg.gif" class="bg">
          <div class="center">
            <div class="user">
              <div class="avatar"><img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['uid'],'l',$this->_tpl_vars['avatar']).'"></div>
              <div class="text">'.$this->_tpl_vars['name'].'<i>ID: '.$this->_tpl_vars['uid'].'  '.$this->_tpl_vars['badges'].'</i></div>
              <div class="sign-btn" id="sign_btn"><a href="javascript:;" class="current" style="background-color:firebrick;">ǩ��</a></div>
            </div>
          </div>
        </div>
        <!--ͷ�� end-->
        <div class="u-balance mb-10"><a href="javascript:;"><strong>'.$this->_tpl_vars['jieqi_egold'].'</strong>'.$this->_tpl_vars['egoldname'].'</a><a href="javascript:;"><strong id="bookvoucher_num">'.$this->_tpl_vars['score'].'</strong>��ǰ����</a></div>
        <!--�б� begin-->
        <div class="uf-box clearfix">
          <div class="item"><a href="/modules/pay/buyegold.php" class="has-arrow"><i class="icon-recharge"></i>'.$this->_tpl_vars['egoldname'].'��ֵ
            <div class="pull-right"><span class="typo-orange">����ȯ<em class="dot"></em></span></div>
            </a></div>
			
			<div class="item"><a href="/modules/pay/paylog.php" class="has-arrow"><i class="icon-recharge"></i>��ֵ��¼
            <div class="pull-right"><span class="typo-orange">�鿴��¼<em class="dot"></em></span></div>
            </a></div>
			
          <div class="item  mb-10">';
if($this->_tpl_vars['isvip'] <= 0){
echo '
			  <a href="javascript:;" class="has-arrow"><i class="icon-vip"></i>��ͨVIP
            <div class="pull-right"><span class="typo-orange">�����ʡǮ</span></div>
            </a>';
}else{
echo '
			<a href="javascript:;" class="has-arrow"><i class="icon-vip"></i>VIP����ֵ
            <div class="pull-right"><span class="typo-orange">'.$this->_tpl_vars['credit'].'</span></div>
            </a>';
}
echo '
		  </div>
          <div class="item"><a href="javascript:;" class="has-arrow"><i class="icon-money-time"></i>�ҵ��Ż�ȯ
            <div class="pull-right"><span class="typo-orange">';
if($this->_tpl_vars['uservals']['setting']['gift']['vipvote'] == ""){
echo '0';
}else{
echo $this->_tpl_vars['uservals']['setting']['gift']['vipvote'];
}
echo '��</span></div>
            </a></div>
          <div class="item"><a href="/kefu" class="has-arrow"><i class="icon-help"></i>�ͷ�����</a></div>
          <div class="item"><a href="/zuojia.php" class="has-arrow"><i class="icon-author"></i>��Ϊ����</a></div>
          <div class="item"  ><a href="https://m.slms.cc/app" class="has-arrow"><i class="icon-downapp"></i>�ֻ�APP��װ
            <div class="pull-right"><span class="typo-orange">�����</span></div>
            </a></div>
          <div class="item" id="slmsgm" data-gm="0"><a href="javascript:;" class="ne"><i class="icon-cart"></i>�Զ����򸶷��½�</a>
            <div class="pull-right"><a href="javascript:;" id="autopay_box" class="rw ">
            <div class="box">
              <div class="circle"></div>
            </div>
            <input type="radio" name="autopay" id="autopay" value="0" checked="">
            </a></div>
          </div>
        </div>
        <!--�б� end--></div>
    </div>

<!--֧������ -->
<div class="footer" id="footer_nav">
  <ul>
    <li><a href="/modules/article/bookcase.php"><i class="icon-book"></i>���</a></li>
    <li><a href="/"><i class="icon-choice"></i>��ѡ</a></li>
    <li><a href="javascript:;" class="active"><i class="icon-my"></i>�ҵ�</a></li>
  </ul>
    </div>
<!--֧������ -->
<div id="bh_sign_lay_new"></div>
 <script type="text/javascript">
	 var slmssize = $.cookie(\'slmsgm\');
	     if(slmssize==""){}else if(slmssize==0){
			 $("#autopay_box").attr("class","rw");
			 $("#slmsgm").attr("data-gm","0");
		 }else if(slmssize==1){
			 $("#autopay_box").attr("class","rw active");
			 $("#slmsgm").attr("data-gm","1");
		 }
	 
	 
	 $("#slmsgm").click(function(){
		 var gm = $(this).attr("data-gm");
		 if(gm==0){
			  $.cookie(\'slmsgm\', "1", { expires: 30, path: \'/\' });
			  $("#autopay_box").attr("class","rw active");
			  $(this).attr("data-gm","1");
		 }else{
			 $.cookie(\'slmsgm\', "0", { expires: 30, path: \'/\' });
			 $("#autopay_box").attr("class","rw");
			 $(this).attr("data-gm","0");
		 }
	 });
	 
	 
	 
	 
	 
	 //ǩ����
	
$.ajax({
			type:\'post\',
			url:"/user/signin.php", 
			success:function(msg){
				var fanhuiuif = $(msg).find("#ajax").text();
				if(fanhuiuif == "������Ѿ�ǩ�����ˣ�������������"){
					$(".current").css("background","#dcdcdc").text("��ǩ��");
				}else if(fanhuiuif == ""){
				}else{
					$(".current").css("background","#dcdcdc").text("��ǩ��");
					$("body").append("<i id=\\"zhezhao\\"></i><div id=\'xiaoxi\'><p>"+fanhuiuif+"</p></div>");
						ref = setInterval(function(){
							$("#xiaoxi").remove();
							$("#zhezhao").remove();
							clearInterval(ref);
							},3000);	
					
				}
			}
			 })
	 
	 
	 
	 
	 
	 
	
 </script>

</body>
</html>';
?>