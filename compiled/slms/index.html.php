<?php
echo '<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
<meta content="telephone=no" name="format-detection" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="applicable-device" content="mobile" />
<title>С˵_С˵���а�_���С˵����_�ÿ���С˵��-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
<meta name="Keywords" content="С˵�����С˵���ÿ���С˵��С˵���أ�����С˵�����С˵����" />
<meta name="Description" content="'.$this->_tpl_vars['jieqi_pagetitle'].'�ṩ�����������С˵�����Ķ������ء�'.$this->_tpl_vars['jieqi_pagetitle'].'��������С˵������С˵����ԽС˵������С˵������С˵���ȣ�С˵�����Ķ���ѡ'.$this->_tpl_vars['jieqi_pagetitle'].'��" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/index/base.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/index/recharge.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/public.js"></script>
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
</style>
</head>
<body>
<!--header begin-->
<div class="header">
  <div class="inner">
    <div class="logo"><img src="//cj.qirexiaoshuo.com/static/newtheme/assets/images/logo.png"></div>
    <div class="entry">
      <ul>
        <li><a href="'.$this->_tpl_vars['jieqi_url'].'/ns/">��Ƶ</a></li>
        <li><a href="javascript:;" class="active"  >ŮƵ</a></li>
      </ul>
    </div>
    <div class="sear"><a onclick="show_ser_box();"><i class="icon-ss"></i></a></div>
    <!--���� begin-->
    <div class="search" id="show_ser_box" style="display: none;">
      <div class="cs-box">
        <button type="button" class="btn" id="show_cleare_btn" onclick="hide_ser_box();">ȡ��</button>
        <button type="button" class="btn" id="show_sear_btn" onclick="key_search_href();" style="display: none;">����</button>
        <div class="field">
          <input type="text" name="keyword" id="search_keyword" maxlength="18" placeholder="" onkeyup="keyup_search(this,\'top\')">
          <div class="action"><a href="javascript:;"  style="display: none;" id="closeid" onclick="close_clear();"><i class="icon-close"></i></a></div>
        </div>
      </div>
    </div>
  <!--���� end--></div>
</div>
<!--header end-->
<div class="search-result" id="page_html" style="position: fixed; top: 0; left: 0; z-index: 50; width: 100%; padding-bottom: 0;"></div>
<!--single-media begin-->
<div class="media" id="single-media">
  <div  ><a href="javascript:;"><img src="https://p.qirexiaoshuo.com/uploads/slide/201801/31/slide201801311514172532.jpg" /></a></div>
  <div style=\'display:none;\' ><a href="javascript:;"><img src="https://p.qirexiaoshuo.com/uploads/slide/201801/31/slide201801311514487107.jpg" /></a></div>
  <div style=\'display:none;\' ><a href="javascript:;"><img src="https://p.qirexiaoshuo.com/uploads/slide/201801/31/slide201801311515136185.jpg" /></a></div>
</div>
<!--single-media end--><!--record begin-->
<div class="record" id="jilu"><a href="/jilu.php" class="title">�Ķ���¼</a>
  <div class="entry"><a id="info" href="javascript:;"><span></span>
    <p></p>
  </a><i class="icon-arrow"></i></div>
</div>
<!--record end--><!--classify begin-->
<div class="classify">
  <ul>
    <li><a href="/modules/article/articlefilter.php"><i class="icon-fl"></i>����</a></li>
    <li><a href="'.$this->_tpl_vars['jieqi_url'].'/top"><i class="icon-ranking"></i>����</a></li>
    <li><a href="'.$this->_tpl_vars['jieqi_url'].'/baoyue"><i class="icon-vip"></i>����</a></li>
    <li><a href="'.$this->_tpl_vars['jieqi_url'].'/mianfei"><i class="icon-free"></i>���</a></li>
  </ul>
</div>
<!--classify end--><!--�����Ƽ� begin-->
<div class="recommend bor-top">
  <div class="title">
    <h3>�����Ƽ�</h3>
  <span class="dot"><!--<a href="#" class="active"></a>--></span></div>
  <div class="entry"  id="edit_box">
    <ul style="display: block; " id="recommend_box" >
		'.$this->_tpl_vars['jieqi_pageblocks']['2']['content'].'
    </ul>
  </div>
</div>
<!--�����Ƽ� end--><!-- ��ƪС˵ begin -->
<div class="recommend hot-box bor-top">
  <div class="title">
    <h3>��ƪС˵</h3>
  <a href="javascript:;">����<i class="icon-arrow"></i></a></div>
  <div class="entry">
	  '.$this->_tpl_vars['jieqi_pageblocks']['3']['content'].'
  </div>
</div>
<!-- ��ƪС˵ end --><!-- ����С˵ begin -->
<div class="recommend hot-box bor-top">
  <div class="title">
    <h3>����С˵</h3>
  <a href="javascript:;">����<i class="icon-arrow"></i></a></div>
  <div class="entry">
	 '.$this->_tpl_vars['jieqi_pageblocks']['4']['content'].'
  </div>
</div>
<!-- ����С˵ end --><!--�����Ƽ� begin-->
<div class="recommend hot-box new-book bor-top">
  <div class="title">
    <h3>�����Ƽ�</h3>
  <a href="javascript:;">����<i class="icon-arrow"></i></a></div>
  <div class="entry">
    <div class="book">
      <ul>
		 '.$this->_tpl_vars['jieqi_pageblocks']['5']['content'].'  
      </ul>
    </div>
	     '.$this->_tpl_vars['jieqi_pageblocks']['6']['content'].'   
  </div>
</div>
<!--�����Ƽ� end--><!--��ʱ��� begin-->
<div class="recommend free bor-top">
  <div class="title">
    <h3>��ʱ���</h3>
  <span class="time" id="downdate_box" startdate="2018/03/15 07:00:00" ><!--����ʱ: 3��--><!--<i class="num">08</i>--><!--<small>:</small>--><!--<i class="num">40</i>--><!--<small>:</small>--><!--<i class="num">03</i>--></span></div>
  <div class="entry">
    <ul>
		'.$this->_tpl_vars['jieqi_pageblocks']['7']['content'].' 
    </ul>
  </div>
</div>
<!--��ʱ��� end--><!--����ϲ�� begin-->
<div class="recommend like bor-top">
  <div class="title">
    <h3>����ϲ��</h3>
  <a id="dj" href="javascript:;"><i class="icon-change"></i>��һ��</a></div>
  <div class="entry" id="slms_book">
    <ul>
	 '.$this->_tpl_vars['jieqi_pageblocks']['8']['content'].' 
    </ul>
	<ul>
	 '.$this->_tpl_vars['jieqi_pageblocks']['9']['content'].' 
    </ul>
	<ul>
	 '.$this->_tpl_vars['jieqi_pageblocks']['10']['content'].' 
    </ul>
  </div>
</div>
<!--����ϲ�� end--><!--�����鵥 begin-->
<div class="sellwell bor-top">
  <div class="title">
    <h3>�����鵥</h3>
  <!--<a href="#">����<i class="icon-arrow"></i></a>--></div>
  <div class="entry">
    <ul>
     '.$this->_tpl_vars['jieqi_pageblocks']['11']['content'].' 
    </ul>
  </div>
</div>
<!--�����鵥 end-->
<div class="copyright bor-top mar-foot"><span><a href="/">��ҳ</a><small></small><a href="javascript:;">��ֵ</a><small></small><a href="javascript:;">�ͻ���</a><small></small><a href="/Rank/copyright">������ϵ</a></span>
  <p>@2018 '.$this->_tpl_vars['jieqi_pagetitle'].'</p>
  <p>****��Ϣ�Ƽ����޹�˾</p>
  <p>*ICP��*******��-*</p>
</div>
<div class="footer" id="footer_nav">
  <ul>
    <li><a href="/modules/article/bookcase.php"><i class="icon-book"></i>���</a></li>
    <li><a href="/" class="active"><i class="icon-choice"></i>��ѡ</a></li>
    <li><a href="/userdetail.php"><i class="icon-my"></i>�ҵ�</a></li>
  </ul>
</div>

<script> 
	$(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "0";
    })
</script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/slick.min.js"></script>
	
	<script type="text/javascript">  
	
	(function($) {
            $(document).ready(function() {
                $(\'#single-media\').slick({
                    arrows: false, // �������ҿ��Ƽ�ͷ
                    dots: true, // ���ü�����
                    autoplay: true, // �����Զ�����
                    autoplaySpeed: 4000 //�Զ�����ʱ����
                });

                $(\'#recommend_box\').slick({
                    arrows: false, // �������ҿ��Ƽ�ͷ
                    dots: true, // ���ü�����
                    autoplay: true, // �����Զ�����
                    slidesToShow: 3,
                    slidesToScroll: 3
                });

              
                setInterval(function(){GetRTime("downdate_box")},1000);  // ����ʱ
//                recommend_lh(5000);  // �����Ƽ�

                $("#single-media div").show();
                $("#recommend_box li").show();
                //�س��Զ��ύ
                $(\'#search_keyword\').keyup(function(event){
                    var key_v = $(\'#search_keyword\').val();
                    if(key_v == \'\'){
                        bh_msg_tips("��������������");
                        return false;
                    }
                    if(event.keyCode===13){
                        key_search_href();
                    }
                });

            });
        })(jQuery)
    </script>  

	<script type="text/javascript">    /*��ֹiframe�ٳ�*/
 var i = 0;
	$("#slms_book ul").eq(1).css("display","none");
	$("#slms_book ul").eq(2).css("display","none");
	$("#dj").click(function(){
		i++;
		if(i>=3)
	    i=0;
		if(i==0){$("#slms_book ul").eq(0).css("display","block").siblings().css("display","none");}else if(i==1){
			$("#slms_book ul").eq(1).css("display","block").siblings().css("display","none");}else if(i==2){
			$("#slms_book ul").eq(2).css("display","block").siblings().css("display","none");}
		
	});
    
//�Ķ���¼

//$.cookie(\'img\',img, { expires: 30, path: \'/\' });//д��cookie
	//$.cookie(\'bookid\',bookid, { expires: 30, path: \'/\' });
	//$.cookie(\'chid\',chid, { expires: 30, path: \'/\' });
	//$.cookie(\'boonmen\',boonmen, { expires: 30, path: \'/\' });		
var img = decodeURIComponent($.cookie(\'img\'));
var bookid = $.cookie(\'bookid\');
var chid = $.cookie(\'chid\');
var boonmen = decodeURIComponent($.cookie(\'boonmen\'));
var sort = decodeURIComponent($.cookie(\'sort\'));
var ming = decodeURIComponent($.cookie(\'ming\'));

	//alert(img);
		if(img != "undefined"){
		  $("#info").attr("href","/modules/article/reader.php?aid="+bookid+"&cid="+chid);
		  $("#jilu p").text(boonmen);
		  $("#jilu span").text(ming);
		}else{
			 $("#jilu").remove();
		}
		
</script>
</body>
</html>';
?>