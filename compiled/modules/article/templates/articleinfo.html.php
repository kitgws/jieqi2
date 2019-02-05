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
    <title>'.$this->_tpl_vars['articlename'].'</title>
    <meta name="Keywords" content="{$articlename}, {$author}��{$articlename}�����֣�,��������Ҳ��ϲȫ�������Ķ�,ӯ��" />
    <meta name="Description" content="����С˵Ϊ����ṩ{$author}��{$articlename}�����½������Ķ���{$articlename}ȫ���Ķ��޹�浯�����ֻ����߿�С˵��ѡ����С˵" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/index/base.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/index/recharge.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/public.js"></script>
    <style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
		body{background-color:#fff;}
		#slmsdsd{background:#fff;}
		#slmsds{margin:2px 10px 2px 10px;position: relative;z-index:1;background:#fff;}
		#slms_ds_top{width:100%;height:30px;line-height:30px;position:relative;}
		#slms_ds_top i{border-left:3px solid #ff730b;display:list-item; position:absolute;left:0px;height:25px;top:2.5px;border-radius:5px;}
		#slms_ds_top p{position:absolute;left:8px;font-size:16px;font-weight:bold;}
		#slms_ds_top span{font-size:12px;font-weight:100;margin-left:5px;color:#606060;}
		#slms_ds_top a{position:absolute;right:0px;font-size:16px;border:1px solid #ff730b;border-radius:10px;padding:0px 3px 0px 3px;overflow:hidden;background-color:#F7F7F7;color:#ff730b;}
		#slms_ds_bottom{width:100%;}
		#slms_ds_bottom ul{width:100%;height:125px;border:0px;}
		#slms_ds_bottom ul li{width:30%;height:120px;float:left;margin-left:2%;}
		.touxiang{width:80%;margin:0 auto;overflow:hidden;}
		.slmsimg{width:60%;height:50px;margin:0 auto;margin-top:10px;position:relative;}
		.slmsimg img{width:50px;height:50px;border:1px solid #ccc; border-radius:100%;margin:0 auto;}
		.touxiang p{margin:0 auto;text-align:center;margin-top:0px;}
		.mingzi{font-size:14px;color:#9F9F9F;}
		.shuliang{font-size:16px;font-weight:400;color:#e7bc29;}
		i{list-style-type:none;}
		.touxie{display:list-item;width:14px;height:14px;position:absolute;left:50%;top:-5px;margin-left:-7px;}
		.touxie.s1{background:url(../../slms/images/1.png);background-size:100%;}
		.touxie.s2{background:url(../../slms/images/2.png);background-size:100%;}
		.touxie.s3{background:url(../../slms/images/3.png);background-size:100%;}
		#wurends{display:block; width:100%;height:80px;text-align:center;}
		#wurends p{font-size:14px;margin-top:10px;}
		#wurends a{font-size:16px;font-weight:500;}
		.reward.inner.entry li{width:25%;}
		.dsbd{height:70px;position:relative;text-align: center;}
		.dsbdimg{width:40px;height:40px; position:absolute;border:1px solid #ccc;border-radius:100%;position:absolute;left:50%;margin-left:-20px;}
		.dsbdimg img{width:100%;height:100%;}
		.dsmbtext{display:block;width:100%; position:absolute;bottom:0px;text-align:center;}
		.djds{border:1px solid #ff730b;}
		#dangqian{display:block; width:100%;height:20px;position: relative;}
		.dqyy{position:absolute;left:0px;}
		.xsb{position:absolute;right:0px;}
		#dsshu{display:none;}
		#wurends{display:none;}
		#jilu{font-size:14px !important;color:#ff730b !important;margin-left:3px !important;text-align:center;}
		#xiaoxi{position:fixed;width:200px;left:50%;top:50%;margin-left:-100px; text-align:center; background-color:black;color:aliceblue;border-radius:10px;opacity:0.8;font-size:16px;padding-top:2px;padding-bottom:2px;display:none;z-index:999;}
	    #xiaoxi p{margin-top:2px;margin-bottom:2px;}
		#dssb{width:260px;height:120px;position:fixed;left:50%;margin-left:-130px;top:50%;margin-top:-60px;background:#fff;text-align:center;border-radius:10px;overflow:hidden;z-index:999;display:none;}
		#dssbtop h2{height:35px;margin-top:10px;}
		#dssbtop p{display:list-item;list-style-type:none;font-size:13px;height:20px;color:#787878;}
		#dssbbootom{width:100%;height:50px;position:relative;}
		#dssbbootom a{display:list-item;list-style-type:none;width:129.5px;line-height:40px;position:absolute;bottom:0px;font-size:16px;border-top:1px solid #f2f2f2;}
		#dssbbootom a:first-child{color:#808080;border-right:1px solid #f2f2f2;}
		#dssbbootom a:nth-child(2){color:rgba(34,71,215,1.00);right:0px;}
		#zhezhao{position:fixed;left:0;top:0;right:0;bottom:0;background:rgba(0,0,0,0.60);z-index:998;display:none;}
</style>
</head>
    <body>
    <div class="none-drift top-half header">
      <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>��ҳ</a></span>
        <h2>�鼮����</h2>
        <div class="sear"><a onclick="show_ser_box();"><i class="icon-ss"></i></a></div>
        <!--���� begin-->
        <div class="search" id="show_ser_box" style="display: none;">
          <div class="cs-box">
            <button type="button" class="btn" id="show_cleare_btn" onclick="hide_ser_box();">ȡ��</button>
            <button type="button" class="btn" id="show_sear_btn" onclick="key_search_href();" style="display: none;">����</button>
            <div class="field">
              <input type="text" name="keyword" id="search_keyword" maxlength="18" placeholder="��������������" onkeyup="keyup_search(this,\'top\')">
              <div class="action"><a href="javascript:;"  style="display: none;" id="closeid" onclick="close_clear();"><i class="icon-close"></i></a></div>
            </div>
          </div>
        </div>
      <!--���� end--></div>
    </div>
    <!-- �鼮���� begin -->
    <div class="book-details" data-booksc="';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '0';
}else{
echo $this->_tpl_vars['uid'];
}
echo '">
      <div class="inner">
        <div class="entry"><img src="'.$this->_tpl_vars['url_simage'].'" class="avatar" alt="'.$this->_tpl_vars['articlename'].'">
          <div class="body">
            <h1>'.$this->_tpl_vars['articlename'].'</h1>
            <p id="zz">���ߣ�'.$this->_tpl_vars['author'].'</p>
            <p>���ͣ�'.$this->_tpl_vars['sort'];
if($this->_tpl_vars['sort'] == ""){
echo '��������';
}
echo '| <i class="green">'.$this->_tpl_vars['fullflag'].'</i></p>
            <p class="gray">'.$this->_tpl_vars['allvisit'].'���������ڿ�</p>
          </div>
          <div class="label">';
if($this->_tpl_vars['sort'] != ""){
echo '<a href="javascript:;" class="red">'.$this->_tpl_vars['sort'].'</a>';
}else{
echo '<a href="javascript:;" class="red">��������</a>';
}
echo ' ';
if($this->_tpl_vars['type'] != ""){
echo ' <a href="javascript:;" class="green">'.$this->_tpl_vars['type'].'</a>';
}
echo '</div>
        </div>
      </div>
      <div class="item">
        <ul>
          <li><a href="'.jieqi_geturl('article','article',$this->_tpl_vars['articleid'],'read').'" class="orange">��ʼ�Ķ�</a></li>
			';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<li><a id="zhushu" href="/login.php" class="blue">��Ҫ׷��</a></li>';
}else{
echo '<li><a id="zhushu" href="javascript:;" data-ul="'.$this->_tpl_vars['url_bookcase'].'" class="blue">��Ҫ׷��</a></li>';
}
echo '
        </ul>
        <p class="bh_book_title_show">'.truncate($this->_tpl_vars['intro'],'150','...').'<a class="javascript:;" onclick="bh_book_title_show();"><i class="icon-open"></i></a></p>
        <p class="bh_book_title_hide" style="display: none;">'.$this->_tpl_vars['intro'].'<a class="javascript:;" onclick="bh_book_title_hide();"><i class="icon-shrink"></i></a></p>
      </div>
      <div class="update"><a href="'.$this->_tpl_vars['url_index'].'" style="display:inline-block; padding: 0 0 0 15px; float: left;">
      <h3>Ŀ¼</h3>
      </a> ';
if($this->_tpl_vars['isvip_n'] > 0){
echo '
		  <a href="'.$this->_tpl_vars['url_vipchapter'].'" style="float: left;padding: 0 15px 0 0;width: 80%;">
		  <span class="pull-left">������£�'.$this->_tpl_vars['vipchapter'].'</span><span class="pull-right">'.date('Y-m-d h:i',$this->_tpl_vars['lastupdate']).'<i class="icon-more"></i></span></a>
		  ';
}else{
echo '
		  <a href="'.$this->_tpl_vars['url_lastchapter'].'" style="float: left;padding: 0 15px 0 0;width: 80%;">
		  <span class="pull-left">������£�'.$this->_tpl_vars['lastchapter'].'</span><span class="pull-right">'.date('Y-m-d h:i',$this->_tpl_vars['lastupdate']).'<i class="icon-more"></i></span></a>';
}
echo '
		</div>
    </div>
    <!-- �鼮���� end -->
	<div id="slmsdsd">
		<div id="slmsds">
			<div id="slms_ds_top">
				<i></i><p>���ͼ�¼<span>(���յ�����'.$this->_tpl_vars['rosenum'].'��)</span></p><a class="ds" href="javascript:;">��Ҫ����</a>
			</div>
		    <div id="slms_ds_bottom">
			  <ul>
				  '.$this->_tpl_vars['jieqi_pageblocks']['1']['content'].'  
				</ul>
              <div id="wurends" href="javascript:;">
				   <p>�����˴���Ŷ��</p>
                     <a class="ds" href="javascript:;"><h3>Ϊ���߼��Ͱɣ�</h3></a>
				</div>
			 <div id="jilu" data-ul="/modules/article/donate.php?id='.$this->_tpl_vars['articleid'].'">�鿴����></div>
			</div>
		</div>
	</div>
	<!--���� begin-->
    <div class="net-friend bor-top">
      <div class="title"><span class="pull-left">
      <h3>��������</h3>����
        <span id="pls">'.$this->_tpl_vars['reviewsnum'].'</span>������ </span><span class="pull-right"><a href="/modules/article/reviews.php?aid='.$this->_tpl_vars['articleid'].'"><i class="icon-write"></i>д����</a></span></div>
      <div class="entry" id="html_box">
		  '.$this->_tpl_vars['jieqi_pageblocks']['7']['content'].'
		</div>
      <div class="check"><a href="/modules/article/reviews.php?aid='.$this->_tpl_vars['articleid'].'">�鿴��������</a></div>
    </div>
    <!--���� end--><!--ϲ���ⲿ����˻�ϲ�� begin-->
    <div class="recommend like book-like bor-top">
      <div class="title">
        <h3>ϲ���ⲿ����˻�ϲ��</h3>
      <a id="dj" href="javascript:;"><i class="icon-change"></i>��һ��</a></div>
      <div class="entry">
        '.$this->_tpl_vars['jieqi_pageblocks']['9']['content'].'
		'.$this->_tpl_vars['jieqi_pageblocks']['10']['content'].'
		'.$this->_tpl_vars['jieqi_pageblocks']['11']['content'].'
      </div>
    </div>
    <!--ϲ���ⲿ����˻�ϲ�� end--><!--����������Ʒ begin-->
    <div class="recommend other-works bor-top">
      <div class="title">
        <h3>����������Ʒ</h3>
      </div>
      <div class="entry">
        <ul id="qita">
          '.$this->_tpl_vars['jieqi_pageblocks']['0']['content'].'
        </ul>
      </div>
      <div class="check"><a href="/modules/article/authorarticle.php?author='.$this->_tpl_vars['author'].'">�鿴ȫ����Ʒ</a></div>
    </div>
    <!--����������Ʒ end--><!--ͼ�������Ϣ begin-->
    <div class="recommend book-relevant bor-top">
      <div class="title">
        <h3>ͼ�������Ϣ</h3>
      <span><a href="javascript:;" onclick="toggle_book_info()" >չ��<i class="icon-open"></i></a></span></div>
      <div class="entry" id="book_rele_info" style="display: none;">
        <p>��Ȩ��Դ��<i class="blue">����С˵Դ��</i></p>
        <p>���������������Ȩ������С˵�ṩ����Ȩ�����ʹ</p>
        <p>�á����������С�������������Ϣ���뼰ʱ��֪�ͷ���</p>
      </div>
    </div>
    <!--ͼ�������Ϣ end--><!--login begin-->
   <div class="backdrop bh_dashang" style="display: none;"></div>
<form action="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/gifts.php?do=submit" method="post" id="formgift" name="formgift" target="_blank">
  <div class="item2p reward bh_dashang" style="display: none;">
	  <div class="inner"><div class="title">���͸�</div>
		  <div class="close"><a href="javascript:;"></a></div>
		  <div class="entry" id="bh_dashang_box">
			  <ul>
				  <li class="dsbd"><a>
					  <p class="dsbdimg a djds"><img src="/slms/images/ds/1.png" alt="õ��" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">100���</p>
					  </a>
				  </li>
				  <li class="dsbd"><a>
					  <p class="dsbdimg b"><img src="/slms/images/ds/2.png" alt="����" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">388���</p>
					  </a>
				  </li>
				  <li class="dsbd"><a>
					  <p class="dsbdimg c"><img src="/slms/images/ds/3.png" alt="õ��" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">588���</p>
					  </a>
				  </li>
				  <li class="dsbd"><a>
					  <p class="dsbdimg d"><img src="/slms/images/ds/1.png" alt="õ��" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">888���</p>
					  </a>
				  </li>
			  </ul>
				  
		  </div>
		   <div id="dsshu"><input type="radio" id="rid" name="rid" checked="checked" value="2"></div>
		  <div class="field">
			  <input type="number" class="form-control" style="display:none;" placeholder="����" name="count" value="1" />
			  <input type="hidden" name="act" value="post" />'.$this->_tpl_vars['jieqi_token_input'].'
		      <input type="hidden" name="id" value="'.$this->_tpl_vars['articleid'].'" />
			  <p id="dangqian"><span class="dqyy">��ǰӵ��</span><span class="xsb"><span id="shubi">'.$this->_tpl_vars['jieqi_egold'].'</span>���</span></p></div>
		     ';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<div class="btn" id="dsdl"><a href="javascript:;">ȷ��</a></div>';
}else{
echo '<div class="btn" id="qdds"><a href="javascript:;">ȷ��</a></div>';
}
echo ' 
	  </div>
  </div>
	  </form>
	<!--login end-->

<div id="xiaoxi"><p>���ͳɹ���</p></div>
<i id="zhezhao"></i>
<div id="dssb">
	<div id="dssbtop">
	  <h2>�������㣬�޷�����</h2>
	  <p>������ֵ���ٽ��д���</p>
	</div>
	<div id="dssbbootom">
	  <a href="javascript:;">ȡ��</a>
	  <a href="/modules/pay/buyegold.php">������ֵ</a>
	</div>
</div>
    <script>   
	$(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "0";
    })
</script>
		
	<script type="text/javascript">    /*��ֹiframe�ٳ�*/
 var i = 0;
	$(".slms_book").eq(1).css("display","none");
	$(".slms_book").eq(2).css("display","none");
	$("#dj").click(function(){
		i++;
		if(i>=3)
	    i=0;
		if(i==0){$(".slms_book").eq(0).css("display","block").siblings().css("display","none");}else if(i==1){
			$(".slms_book").eq(1).css("display","block").siblings().css("display","none");}else if(i==2){
			$(".slms_book").eq(2).css("display","block").siblings().css("display","none");}
	});
    var shoucang = $(".book-details").attr("data-booksc");
	var bookming = "'.$this->_tpl_vars['articlename'].'";
		if(shoucang != "0"){
			$.ajax({
			type:\'post\',
			url:"/modules/article/bookcase.php", 
			success:function(msg){
				var fanhuiuif = $(msg).find("#book_shelf_box").html().indexOf(bookming);
				if(fanhuiuif != -1){
					//$("#readJoinSJ").removeAttr("href").removeAttr("id").text("�������");
					$("#zhushu").removeAttr("href").addClass("gray").text("�������");
				}
			}
			 });
		};
		
		$(".ds").click(function(){
			//alert("1");
			$(".backdrop.bh_dashang").show(100);
			$(".item2p.reward.bh_dashang").show(100);
			
			
		});
		
		$(".close").click(function(){
			$(".backdrop.bh_dashang").hide();
			$(".item2p.reward.bh_dashang").hide();
		});
		
	//���˴���ʱ���
		var dsrs = $("#slms_ds_bottom ul li").length;
		if(dsrs == 0){$("#wurends").show();$("#slms_ds_bottom ul").hide();}
		
		
		//����js
		
		$(".dsbdimg.a").click(function(){//��һ��
			$(this).addClass("djds");
			$(".dsbdimg.b").removeClass("djds");
			$(".dsbdimg.c").removeClass("djds");
			$(".dsbdimg.d").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'2\'>");
		});
		$(".dsbdimg.b").click(function(){//�ڶ���
			$(this).addClass("djds");
			$(".dsbdimg.a").removeClass("djds");
			$(".dsbdimg.c").removeClass("djds");
			$(".dsbdimg.d").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'3\'>");
		});
		$(".dsbdimg.c").click(function(){//������
			$(this).addClass("djds");
			$(".dsbdimg.b").removeClass("djds");
			$(".dsbdimg.a").removeClass("djds");
			$(".dsbdimg.d").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'4\'>");
		});
		$(".dsbdimg.d").click(function(){//������
			$(this).addClass("djds");
			$(".dsbdimg.b").removeClass("djds");
			$(".dsbdimg.c").removeClass("djds");
			$(".dsbdimg.a").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'5\'>");
		});
		
		
		
		//ȷ�����ͣ��ύ��
		$("#qdds").click(function(){
	  var dataa = $(\'#formgift\').serialize();
	  var shubi = $("#shubi").text();
			if(shubi == "1"){
				$("#zhezhao").show();
				$("#dssb").show();
				$(".backdrop.bh_dashang").hide();
				$(".item2p.reward.bh_dashang").hide();  
			}else{
					$.ajax({
					contentType: "application/x-www-form-urlencoded; charset=gbk", 
					type:\'post\',
					url:"/modules/article/gifts.php?do=submit",
					data:dataa,
					success:function(msg){
					var fanhui = $(msg).find("#ajax").text();
					var shuanma = encodeURIComponent(fanhui);
						if(fanhui == "������ɣ���л����֧�֣�"){
							$(".backdrop.bh_dashang").hide();
							$(".item2p.reward.bh_dashang").hide();
						    $("#xiaoxi").show();
							$("#xiaoxi p").text("���ͳɹ�����л����֧�֣�");
							ref = setInterval(function(){
							 location.reload();
							},2000);
						   }else if(fanhui == "�Բ���������Ҳ��㣡"){
							$("#zhezhao").show();
				            $("#dssb").show();
							$(".backdrop.bh_dashang").hide();
							$(".item2p.reward.bh_dashang").hide();
						   }else{  
						    $(".backdrop.bh_dashang").hide();
							$(".item2p.reward.bh_dashang").hide();
						    $("#xiaoxi").show();
							$("#xiaoxi p").text(fanhui);
							ref = setInterval(function(){
							$("#xiaoxi").hide();
							clearInterval(ref);
							},2000);
						   }
				    }
				    });
			}
	});	
		
//ȷ�����ͣ�û�е�½�����
		$("#dsdl").click(function(){window.location.href = "/login.php";});
		
		
//׷��
		$("#zhushu").click(function(){
			var bd = $(this).attr("data-ul");
			$.ajax({
			type:\'post\',
			url:bd, 
			success:function(msg){
			var fanhui = $(msg).find("#ajax").text();
				$("#xiaoxi").show();
				$("#xiaoxi p").text(fanhui);
				ref = setInterval(function(){
				$("#xiaoxi").hide();
				clearInterval(ref);
				},2000);
				if(fanhui == "��ϲ������С˵�Ѿ�������ܣ�"){$("#zhushu").removeAttr("href").addClass("gray").text("�������");}
			}
			 });
			
		});

$("#jilu").click(function(){
	window.location.href = $(this).attr("data-ul");
});
		
var qt = $("#qita li").length;
if(qt == 1){
	$(".recommend.other-works.bor-top").remove();
};

		
		
//ȡ������
$("#dssbbootom a").click(function(){
	$("#dssb").hide();
	$("#zhezhao").hide();
});

//����ϵͳ����
$.ajax({
			type:\'post\',
			url:\'/slms/infodo.php?bookid='.$this->_tpl_vars['articleid'].'\', 
			success:function(msg){
			var fanhui = $(msg).find("#chaping").text();
			  if(fanhui == ""){$("#pls").text("0");}else{$("#pls").text(fanhui);};
			}
	});
;</script>
		
		
</body>
</html>';
?>