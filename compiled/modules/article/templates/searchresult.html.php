<?php
echo '<!DOCTYPE html>
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
<title>'.$this->_tpl_vars['searchkey'].'���������-'.$this->_tpl_vars['jieqi_sitename'].'</title>
<meta name="keywords" content="'.$this->_tpl_vars['searchkey'].'ȫ��С˵,'.$this->_tpl_vars['searchkey'].'������Ʒ,'.$this->_tpl_vars['searchkey'].'����,'.$this->_tpl_vars['searchkey'].'�׷�,'.$this->_tpl_vars['searchkey'].'��,'.$this->_tpl_vars['searchkey'].'��Ʒ���½ڸ���">
<meta name="description" content="'.$this->_tpl_vars['jieqi_sitename'].'�ṩ����'.$this->_tpl_vars['searchkey'].'ȫ��С˵,'.$this->_tpl_vars['searchkey'].'������Ʒ�����Ķ�,'.$this->_tpl_vars['searchkey'].'��Ʒ����Ķ���">
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base.css">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge.css">
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css">
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
#pagelink {
	text-align: center;
	background: #fff;line-height100px !important;border-bottom:1px solid #dcdcdc;border-top:1px solid #dcdcdc;font-size:15px;padding-bottom:10px;padding-top:10px;
}
#pagelink a {
	margin: 0px 3px 0px 3px;
}
#pagelink input {
	width: auto;
}
.backdrop.bh_wxlogin_lay{filter:alpha(opacity=50);  /*֧�� IE �����*/
-moz-opacity:0.50; /*֧�� FireFox �����*/
opacity:0.50;  /*֧�� Chrome, Opera, Safari �������*/}
.backdrop.bh_wxlogin_lay i{background-color:rgba(0,0,0,0.74);border:1px solid #fff;border-radius:10px;}
</style>
</head>
<body>
<div class="header">
  <div class="inner">
    <div class="search">
      <div class="cs-box">
        <button type="button" class="btn" onclick="javascript:window.history.back();" id="show_cleare_btn">ȡ��</button>
        <button type="button" class="btn" id="show_sear_btn" style="display: none;">����</button>
        <div class="field bh_se_box">
          <input type="text" name="keyword" id="search_keyword" maxlength="18" value="'.$this->_tpl_vars['searchkey'].'" onkeyup="keyup_search(this);" placeholder="">
          <div class="action"><a onclick="close_clear();"><i class="icon-close"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="search-result" id="page_html">
  <div class="hot-box">
    <div class="title">������<i class="green">'.$this->_tpl_vars['searchkey'].'</i>���������<i class="green">'.$this->_tpl_vars['allresults'].'</i>��</div>
    <div class="entry" id="slms">
      ';
if (empty($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = array();
elseif (!is_array($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = (array)$this->_tpl_vars['articlerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['articlerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['articlerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['articlerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
        <div class="item"><a href="'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['url_articleinfo'].'"><img src="'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['url_image'].'" class="avatar">
        <div class="body"><span class="t">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articlename'].'</span><span class="author">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['author'].'</span><span class="btn">�����Ķ�</span>
          <p>'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['intro'].'</p>
        </div>
        </a>
		</div>';
}
echo '
    </div>
  </div>
</div>
	
	
'.$this->_tpl_vars['url_jumppage'].'
<div class="return-top" id="icon-top" style="display: none;"><a href="javascript:;"><i class="icon-top"></i></a></div>
<div class="backdrop bh_wxlogin_lay" style="display: none;"></div>
<script type="text/javascript">
//ץȡ�ؼ���
 function keyLight(id, key, bgColor){
   var oDiv = document.getElementById("slms"),
       oChilds  = oDiv.childNodes,
       bgColor = bgColor || "red",
       sKey = "<span style=\'color: "+bgColor+";\'>"+key+"</span>",
       rStr = new RegExp(key, "g");
  for(var i =0; i<oChilds.length-1; i++){
    if(oChilds[i].nodeType == 3 && /\\s/.test(oChilds[i].nodeValue)){  //ɾ���հ׵Ľڵ�
       oChilds[i].parentNode.removeChild(oChilds[i]);
     }
      oChilds[i].innerHTML = oChilds[i].innerHTML.replace(rStr,sKey);  //�滻key
  }
 }
 
 var key1 = keyLight(\'result\', \''.$this->_tpl_vars['searchkey'].'\');
 var key2 = keyLight(\'result\', \''.truncate($this->_tpl_vars['searchkey'],'2','').'\', \'red\');



//	alert(zong);
$(window).scroll(function(){
var topheight = $(".header").height();
var topxheight = $("#cate_option").height();
var zong = topheight + topxheight;
if($(window).scrollTop() >= topheight){
$("#icon-top").fadeIn(200); // ��ʼ����
} else{
$("#icon-top").fadeOut(200); // ���С�ڵ��� 200 ����
}
});
	
  $("#icon-top").click(function() {
      $("html,body").animate({scrollTop:0}, 500);
  }); 	
	
	// �б���ҳ��ȡ

var autoready=0;
    $(window).bind("scroll", function (event) {
        //����������ҳͷ���� �߶ȣ�����ie,ff,chrome
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();  //��ҳ�ĸ߶�
        // ��ҳ�߶�-top-��ǰ���ڸ߶�
        if (textheight - top - $(window).height() <= 60){
            if(autoready==1) {
                autoready=0;
	                     var next = $(".next").attr("href");
						  if(next != ""){
							  $(".backdrop.bh_wxlogin_lay").show().append("<i class=\'loading-icon\'><svg class=\'loading-svg-animate\' version=\'1.1\' id=\'loader-1\' xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' x=\'0px\' y=\'0px\' width=\'50\' height=\'50\' viewBox=\'0 0 50 50\' style=\'enable-background:new 0 0 50 50;\' xml:space=\'preserve\'><path fill=\'#fff\' d=\'M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z\'><animateTransform attributeType=\'xml\' attributeName=\'transform\' type=\'rotate\' from=\'0 25 25\' to=\'360 25 25\' dur=\'0.6s\' repeatCount=\'indefinite\'></path></svg></i>");
							  $.ajax({
								type:\'post\',
								url:next, 
								success:function(msg){
									$("body").attr("style","position:fixed;top:0;left:0;");
									var fanhuiuif = $(msg).find(".entry").html();
									var fanhuiyema = $(msg).find("#pagelink").html();
									$("#yema").html(fanhuiyema);
									$(".entry").append(fanhuiuif);
									$(".backdrop.bh_wxlogin_lay").hide();
									$(".backdrop.bh_wxlogin_lay i").remove();
									$("body").removeAttr("style");
									 autoready=1;
								}
								 });

						  }else{
							  $(".prev").text("����").show();
							  $(".next").text("���").show();
						  };
            }
        }
    });




</script>
</body>
</html>';
?>