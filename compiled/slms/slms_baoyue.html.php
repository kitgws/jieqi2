<?php
echo '<!DOCTYPE html>
<html style="font-size: 74.52px;">
    <head>
    <meta charset="'.$this->_tpl_vars['jieqi_charset'].'">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="applicable-device" content="mobile">
    <title>����ר��-VIPС˵_С˵���а�_�ÿ���С˵��-'.$this->_tpl_vars['jieqi_sitename'].'</title>
    <meta name="Keywords" content="С˵�����С˵���ÿ���С˵��С˵���أ�����С˵�����С˵����">
    <meta name="Description" content="'.$this->_tpl_vars['jieqi_sitename'].'vipС˵�����Ķ��������кÿ�������С˵,����С˵,��ԽС˵,����С˵,��ʷ����С˵,У԰����С˵,�ܲú���С˵,�ƻ�С˵,�ֲ�С˵�ȣ������Ķ�ȫ���޹�浯�����ֻ����߿�С˵��ѡ'.$this->_tpl_vars['jieqi_sitename'].'��">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css">
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css">
		<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
    <style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
		#yema a{margin:0px 3px 0px 3px;display:none;}
		#yema input{width:auto;}
		.loading-icon{width:3rem;height:3rem;position:fixed;z-index:999; left:50%;top:50%;margin-left:-1.5rem;margin-top:-1.5rem;}
		.loading-icon svg{width:100%;height:100%;}
		#yema{text-align: center;}
</style>
</head>
    <body>
		
    <div class="header top-half">
      <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>��ҳ</a></span>
        <h2>����ר��</h2>
      </div>
    </div>
    <!--��ͨVIP begin-->
		';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '
    <div class="open-vip mar-top ">
      <div class="entry"><span class="pull-left"><i class="icon-vip"></i></span><span class="pull-right">
      <h3>��ͨ���»�Ա</h3>
      <p>����ר���鼮����������Ķ�</p>
      <p>����ǰ����鼮����8���Ż�</p>
      </span></div>
      <div class="btn"><a href="/login.php">������ͨ</a></div>
    </div>
		';
}else{
echo '
		<div class="open-vip mar-top ">
		';
if($this->_tpl_vars['overtime'] == 0){
echo '
      <div class="entry"><span class="pull-left"><i class="icon-vip"></i></span><span class="pull-right">
      <h3>��ͨ���»�Ա</h3>
      <p>����ר���鼮����������Ķ�</p>
      <p>����ǰ����鼮����8���Ż�</p>
      </span></div>
      <div class="btn"><a href="/modules/article/monthlybuy.php?id='.$this->_tpl_vars['uid'].'">������ͨ</a></div>
			';
}else{
echo '
		<div class="entry"><span class="pull-left"><i class="icon-vip"></i></span><span class="pull-right">
      <h3>���Ļ�Ա<span>'.$this->_tpl_vars['jieqi_username'].'</span></h3>
      <p>����ʱ�䣺'.date('Y-m-d',$this->_tpl_vars['overtime']).'</p>
      <p>��������ѹۿ�����ͼ��Ŷ��</p>
      </span></div>
      <div class="btn"><a href="/modules/article/monthlybuy.php?id='.$this->_tpl_vars['uid'].'">����</a></div>';
}
echo '
    </div>
		';
}
echo '
		
    <!--��ͨVIP end--><!--VIP�����Ƽ� begin-->
    <div class="recommend bor-top">
      <div class="title">
        <h3>���������Ƽ�</h3>
      </div>
      <div class="entry">
        <ul>
'.jieqi_get_block(array('bid'=>'0', 'blockname'=>'���������Ƽ�', 'module'=>'article', 'filename'=>'block_articlelist', 'classname'=>'BlockArticleArticlelist', 'side'=>'-1', 'title'=>'���������Ƽ�', 'vars'=>'allvisit,3,0,0,0,0,3', 'template'=>'slms_baoyue.html', 'contenttype'=>'4', 'custom'=>'0', 'publish'=>'3', 'hasvars'=>'1'), 1).'
        </ul>
      </div>
    </div>
	
<!--VIP�����Ƽ� end--><!--VIP �б� begin-->
    <div class="search-result hot-box bor-top">
      <div class="entry" id="html_box">
		 
      </div>
		<div id="yema">'.$this->_tpl_vars['url_jumppage'].'</div>
    </div>
    <!--VIP �б� end-->
    <div class="backdrop bh_wxlogin_lay" style="display: none;">
		<script type="text/javascript">
	$(".backdrop.bh_wxlogin_lay").append("<i class=\'loading-icon\'><svg class=\'loading-svg-animate\' version=\'1.1\' id=\'loader-1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' x=\'0px\' y=\'0px\' width=\'50\' height=\'50\' viewBox=\'0 0 50 50\' style=\'enable-background:new 0 0 50 50;\' xml:space=\'preserve\'><path fill=\'#fff\' d=\'M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z\'><animateTransform attributeType=\'xml\' attributeName=\'transform\' type=\'rotate\' from=\'0 25 25\' to=\'360 25 25\' dur=\'0.6s\' repeatCount=\'indefinite\'></path></svg></i>");	
var autoready=1;
    $(window).bind("scroll", function (event) {
        //����������ҳͷ���� �߶ȣ�����ie,ff,chrome
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();  //��ҳ�ĸ߶�
        // ��ҳ�߶�-top-��ǰ���ڸ߶�
        if (textheight - top - $(window).height() <= 60){
            if(autoready==1) {
                autoready=0;
		$(".backdrop.bh_wxlogin_lay").show();
	  var next = $(".next").attr("href");
	  if(next != ""){
		  $.ajax({
			type:\'post\',
			url:next, 
			success:function(msg){
				$("body").attr("style","position:fixed;top:0;left:0;");
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#yema").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$(".backdrop.bh_wxlogin_lay").hide();
                $(".backdrop.bh_wxlogin_lay i").hide();
				$("body").removeAttr("style");
				autoready=1;
			}
			 });
		  
	  }else{
		  $(".prev").text("����").show();
		  $(".next").text("���").show();
		  $(".backdrop.bh_wxlogin_lay").hide();
          $(".backdrop.bh_wxlogin_lay i").hide();
		  $("body").removeAttr("style");
	  };
	  
����};
}});
	
			
			
	//��ʱ���
  var starttime = new Date("2018/11/20");
  setInterval(function () {
    var nowtime = new Date();
    var time = starttime - nowtime;
    var day = parseInt(time / 1000 / 60 / 60 / 24);
    var hour = parseInt(time / 1000 / 60 / 60 % 24);
    var minute = parseInt(time / 1000 / 60 % 60);
    var seconds = parseInt(time / 1000 % 60);
 //   $(\'.timespan\').html(day + "��" + hour + "Сʱ" + minute + "����" + seconds + "��");
		if(day <= 0){
			$(".num").text("00");
			$(".entry").hide();
		}else{
		$(\'#tian\').text(day);
		$(\'#shi\').text(hour);
		$(\'#fen\').text(minute);
		$(\'#miao\').text(seconds);
		}

  }, 1000);

			
			
	//��ȡ��������
			
	$.ajax({
			type:\'post\',
			url:"/modules/article/articlefilter.php?isvip=4&order=lastupdate&page=1", 
			success:function(msg){
				$(".backdrop.bh_wxlogin_lay").show();
				var fanhuiuif = $(msg).find("#html_box").html();
				var fanhuiyema = $(msg).find("#pagelink").html();
				$("#yema").html(fanhuiyema);
				$("#html_box").append(fanhuiuif);
				$(".backdrop.bh_wxlogin_lay").hide();
                $(".backdrop.bh_wxlogin_lay i").hide();
				$("body").removeAttr("style");
			}
			 });
			
			
			
			
		</script>
		
</body>
</html>';
?>