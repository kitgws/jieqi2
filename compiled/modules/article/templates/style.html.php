<?php
echo '
<!DOCTYPE html>
<html>
    <head>
    <meta charset="'.$this->_tpl_vars['jieqi_charset'].'">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="designWidth=750, width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
    <meta content="telephone=no" name="format-detection" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="applicable-device" content="mobile" />
    <title>'.$this->_tpl_vars['chaptername'].'</title>
    <meta name="Keywords" content="'.$this->_tpl_vars['articlename'].','.$this->_tpl_vars['chaptername'].','.$this->_tpl_vars['articlename'].'全文在线阅读,'.$this->_tpl_vars['author'].'" />
    <meta name="Description" content="'.$this->_tpl_vars['jieqi_sitename'].'为大家提供'.$this->_tpl_vars['author'].'的'.$this->_tpl_vars['articlename'].'最新章节在线阅读，'.$this->_tpl_vars['articlename'].'全文阅读无广告弹窗，手机在线看小说就选'.$this->_tpl_vars['jieqi_sitename'].'。" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/index/s0911.css" />
    <style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.hide_bh_prevnext {
	display: none;
}
#read_conent_box br {
	display: none;
}
#read_conent_box {
	line-height: 1.3em;
	margin-top: -1em;
	letter-spacing:2px;
}
.jine{width:50px;height:50px;border-radius:100%;margin-top:2px;overflow:hidden;}	
		.jine img{width:100%;height:100%;}
		#dsshu{display:none;}
		#zhezhao{position:fixed;left:0;top:0;right:0;bottom:0;background:rgba(0,0,0,0.60);z-index:998;}
		#xiaoxi{position:fixed;width:200px;left:50%;top:50%;margin-left:-100px; text-align:center; background-color:black;color:aliceblue;border-radius:10px;opacity:0.8;font-size:16px;padding-top:2px;padding-bottom:2px;z-index:999;}
	    #xiaoxi p{margin-top:2px;margin-bottom:2px;}
</style>
    <link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/index/vip_sign_read.css" />
    <script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/css/index/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery.cookie.js"></script>
    <script type="text/javascript">        !function (a, b) { function c() { var b = f.getBoundingClientRect().width; b / i > 540 && (b = 540 * i); var c = b / 10; f.style.fontSize = c + "px", k.rem = a.rem = c } var d, e = a.document, f = e.documentElement, g = e.querySelector(\'meta[name="viewport"]\'), h = e.querySelector(\'meta[name="flexible"]\'), i = 0, j = 0, k = b.flexible || (b.flexible = {}); if (g) { console.warn("将根据已有的meta标签来设置缩放比例"); var l = g.getAttribute("content").match(/initial\\-scale=([\\d\\.]+)/); l && (j = parseFloat(l[1]), i = parseInt(1 / j)) } else if (h) { var m = h.getAttribute("content"); if (m) { var n = m.match(/initial\\-dpr=([\\d\\.]+)/), o = m.match(/maximum\\-dpr=([\\d\\.]+)/); n && (i = parseFloat(n[1]), j = parseFloat((1 / i).toFixed(2))), o && (i = parseFloat(o[1]), j = parseFloat((1 / i).toFixed(2))) } } if (!i && !j) { var p = (a.navigator.appVersion.match(/android/gi), a.navigator.appVersion.match(/iphone/gi)), q = a.devicePixelRatio; i = p ? q >= 3 && (!i || i >= 3) ? 3 : q >= 2 && (!i || i >= 2) ? 2 : 1 : 1, j = 1 / i } if (f.setAttribute("data-dpr", i), !g) if (g = e.createElement("meta"), g.setAttribute("name", "viewport"), g.setAttribute("content", "initial-scale=" + 1 + ", maximum-scale=" + 1 + ", minimum-scale=" + 1 + ", user-scalable=no"), f.firstElementChild) f.firstElementChild.appendChild(g); else { var r = e.createElement("div"); r.appendChild(g), e.write(r.innerHTML) } a.addEventListener("resize", function () { clearTimeout(d), d = setTimeout(c, 300) }, !1), a.addEventListener("pageshow", function (a) { a.persisted && (clearTimeout(d), d = setTimeout(c, 300)) }, !1), "complete" === e.readyState ? e.body.style.fontSize = 12 * i + "px" : e.addEventListener("DOMContentLoaded", function () { e.body.style.fontSize = 12 * i + "px" }, !1), c(), k.dpr = a.dpr = i, k.refreshRem = c, k.rem2px = function (a) { var b = parseFloat(a) * this.rem; return "string" == typeof a && a.match(/rem$/) && (b += "px"), b }, k.px2rem = function (a) { var b = parseFloat(a) / this.rem; return "string" == typeof a && a.match(/px$/) && (b += "rem"), b } }(window, window.lib || (window.lib = {}));
    </script>
    </head>
    <body class="gray-mode">
<article class="article-box clearfix">
      <header class="header clearfix">
    <h1 class="title" id="booktext" data-bookid="'.$this->_tpl_vars['articleid'].'" data-chid="'.$this->_tpl_vars['chapterid'].'" data-image="'.$this->_tpl_vars['url_image'].'">'.$this->_tpl_vars['chaptername'].'</h1>
    <div class="book-info"><a href="'.$this->_tpl_vars['url_articleinfo'].'"><img src="'.$this->_tpl_vars['url_image'].'" alt="'.$this->_tpl_vars['articlename'].'">
      <div class="text">'.$this->_tpl_vars['articlename'].'</div>
      </a></div>
  </header>
      <div class="entry" id="read_conent_box"> '.str_replace('&nbsp;&nbsp;&nbsp;&nbsp;','&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$this->_tpl_vars['jieqi_content']).' </div>
      <aside class="row feif_unlock">
    <div class="col"><a href="'.$this->_tpl_vars['url_previous'].'" class="btn">上一章</a></div>
    <div class="col"><a href="javascript:;" class="dir"><i class="icon-dir"></i></a></div>
    <div class="col"><a href="'.$this->_tpl_vars['url_next'].'" class="btn">下一章</a></div>
  </aside>
      <aside class="bar feif_unlock"><a href="javascript:;" class="btn slmsapp"><i class="icon-xz"></i>安装APP，阅读更方便、省流量！</a></aside>
    </article>
<section class="news-box clearfix feif_unlock">
      <ul class="list clearfix" id="read_list">
	'.jieqi_get_block(array('bid'=>'0', 'blockname'=>'免费专区', 'module'=>'article', 'filename'=>'block_articlelist', 'classname'=>'BlockArticleArticlelist', 'side'=>'-1', 'title'=>'免费专区', 'vars'=>'allvisit,3,0,0,0,0,2', 'template'=>'slms_style_list.html', 'contenttype'=>'4', 'custom'=>'0', 'publish'=>'3', 'hasvars'=>'1'), 1).'
  </ul>
  </section>
<!--设置 begin-->
<div class="backdrop" id="bh_seting_lay" style="display: none;">
      <div class="modal">
    <div class="inner clearfix">
          <div class="settings-box">
        <div class="head hls1-bottom clearfix">
              <div class="title">设置</div>
            </div>
        <div class="list clearfix">
              <div class="item hls1-bottom"><a href="javascript:;" ><i class="icon-font-size"></i> 字体大小</a></div>
              <div class="item hls1-bottom"><a href="javascript:;"><i class="icon-bg-color"></i> 背景颜色</a></div>
              ';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '
              <div class="item hls1-bottom" data-sj="0"><a href="/login.php"><i class="icon-books"></i> 放入书架</a></div>
              <div class="item hls1-bottom"><a href="/login.php"> <i class="icon-directory"></i> 打赏</a></div>
              ';
}else{
echo '
              <div class="item hls1-bottom" data-sj="'.$this->_tpl_vars['url_bookcase'].'"><a href="javascript:;"><i class="icon-books"></i> 放入书架</a></div>
              <div class="item hls1-bottom ds"><a href="javascript:;"> <i class="icon-directory"></i> 打赏</a></div>
              ';
}
echo '
              <div class="item hls1-bottom"><a href="'.$this->_tpl_vars['url_index'].'"> <i class="icon-directory"></i> 返回目录</a></div>
			  <div class="item hls1-bottom"><a href="/"> <i class="icon-directory"></i> 返回首页</a></div>
              <div class="item" id="app"><a href="javascript:;"><i class="icon-download"></i> 离线阅读</a></div>
            </div>
      </div>
          <div class="pull-action" id="gbd"><a><i class="icon-close"></i></a></div>
        </div>
  </div>
    </div>
<!--设置 end--><!--设置字体 begin-->
<div class="backdrop" id="bh_font_lay" style="display:none;" >
      <div class="modal">
    <div class="inner clearfix">
          <div class="settings-box">
        <div class="head clearfix">
              <div class="title">设置</div>
            </div>
        <div class="row">
              <div class="col"><a href="javascript:;" id="read_font_4" class="">小</a></div>
              <div class="col"><a href="javascript:;" id="read_font_48" class="active">中</a></div>
              <div class="col"><a href="javascript:;" id="read_font_55" class="">大</a></div>
            </div>
      </div>
          <div class="pull-action" id="size"><a><i class="icon-close"></i></a></div>
        </div>
  </div>
    </div>
<!--设置字体 end--><!--设置背景 begin-->
<div class="backdrop" id="bh_back_lay" style="display: none;">
      <div class="modal">
    <div class="inner clearfix">
          <div class="settings-box">
        <div class="head clearfix">
              <div class="title">背景颜色</div>
            </div>
        <div class="row">
              <div class="col"><a href="javascript:;" id="back_gray-mode" class="active">默认</a></div>
              <div class="col"><a href="javascript:;" id="back_yellow-mode" class="">舒适</a></div>
              <div class="col"><a href="javascript:;" id="back_black-mode" class="">夜晚</a></div>
            </div>
      </div>
          <div class="pull-action" id="color"><a><i class="icon-close"></i></a></div>
        </div>
  </div>
    </div>
<div class="backdrop" id="bh_down_lay" style="display: none;">
      <div class="modal">
    <div class="inner clearfix">
          <div class="settings-box">
        <div class="thead"> 离线下载本书 <br />
              请先下载'.$this->_tpl_vars['jieqi_sitename'].'客户端 </div>
        <div class="group">
              <div class="col"><a href="javascript:;" class="btn primary">去下载</a></div>
              <div class="col" id="bxz"><a href="javascript:;" class="btn clean">暂不下载</a></div>
            </div>
      </div>
          <div class="pull-action" id="gbapp"><a><i class="icon-close"></i></a></div>
        </div>
  </div>
    </div>
<div class="backdrop bh_wxlogin_lay" style="display: none;"></div>
<div class="backdrop" id="sign_lay_new" style="display:none;">
      <div class="item2p new-signer">
    <div class="inner n-check-inner">
          <div class="n-tl">签到成功</div>
          <div class="n-txt">
        <div class="coupon-num"><b id="sign_num_new">+1</b>书券</div>
        <div class="n-prompt">已连签到<i>1</i>天，明天签到领取<i id="sign_num_to_new">1</i>书券</div>
        <!--
        <div class="row">
          <div class="col active ">
            <div class="box">
              <div class="text">+1</div>
            </div>
            <div class="day">今天</div>
          </div>
          <div class="col  ">
            <div class="box">
              <div class="text">+1</div>
            </div>
            <div class="day">2天</div>
          </div>
          <div class="col  ">
            <div class="box">
              <div class="text">+4</div>
              <div class="combo c2x2">2*2</div>
            </div>
            <div class="day">3天</div>
          </div>
          <div class="col  ">
            <div class="box">
              <div class="text">+2</div>
            </div>
            <div class="day">4天</div>
          </div>
          <div class="col  ">
            <div class="box">
              <div class="text">+2</div>
            </div>
            <div class="day">5天</div>
          </div>
          <div class="col  ">
            <div class="box">
              <div class="text">+2</div>
            </div>
            <div class="day">6天</div>
          </div>
          <div class="col  ">
            <div class="box">
              <div class="text">+6</div>
              <div class="combo c2x2">3*2</div>
            </div>
            <div class="day">7天</div>
          </div>
        </div>
		  -->
        <div class="okay-btn"><a href="javascript:;" onclick="$(\'#sign_lay_new\').hide();">好的，明日再来</a></div>
      </div>
        </div>
  </div>
    </div>
		
<form action="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/gifts.php?do=submit" method="post" id="formgift" name="formgift" target="_blank">		
<div class="backdrop bh_recharge_box" style="display:none;"></div>
<div class="item2p recharge_sc bh_recharge_box" style="display:none;">
      <div class="inner">
    <div class="title"><strong>请选择打赏金额</strong>
          <p class="read">当前拥有<span id="shubi">'.$this->_tpl_vars['jieqi_egold'].'</span>书币</p>
        </div>
    <div class="close"><a href="javascript:;" onclick="hide_recharge_box();coupon_lay();"></a></div>
    <div class="entry">
          <ul id="dsbdul">
        <li><a class="dsbdimg a active"><span class="jine"><img src="/slms/images/ds/1.png" alt="玫瑰" /></span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">100书币 = 100粉丝值</span><i class="reward">(玫瑰 x 1)</i></div>
          </a></li>
        <li><a class="dsbdimg b"><span class="jine"><img src="/slms/images/ds/2.png" alt="汉堡" /></span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">388书币 = 388粉丝值</span><i class="reward">(汉堡 x 1)</i></div>
          </a></li>
        <li><a class="dsbdimg c"><span class="jine"><img src="/slms/images/ds/3.png" alt="紫魅" /></span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">588书币 = 588粉丝值</span><i class="reward">(紫魅 x 1)</i></div>
          </a></li>
        <li><a class="dsbdimg d"><span class="jine"><img src="/slms/images/ds/1.png" alt="玫瑰" /></span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">888书币 = 888粉丝值</span><i class="reward">(砖石 x 1)</i></div>
          </a></li>
      </ul>
		 <div id="dsshu"><input type="radio" id="rid" name="rid" checked="checked" value="2"></div>
		<div><input type="number" class="form-control" style="display:none;" placeholder="数量" name="count" value="1" />
        <input type="hidden" name="act" value="post" />'.$this->_tpl_vars['jieqi_token_input'].'
        <input type="hidden" name="id" value="'.$this->_tpl_vars['articleid'].'" /></div>
        </div>
		  ';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '
      <div class="btn" id="qdds" data-dsid="0"><a href="javascript:;">确定打赏</a></div>
		  ';
}else{
echo '
		<div class="btn" id="qdds" data-dsid="1"><a href="javascript:;">确定打赏</a></div>
		  ';
}
echo '
  </div>
      
    </div>
</form>		
		
		
		
<script type="text/javascript">
    
	//读取cookie
	var slmssize = decodeURIComponent($.cookie(\'font\'));
	if(slmssize == "font-size: 0.4rem;"){//字体小
		$("#read_conent_box").attr("style",slmssize);
		$("#read_font_4").addClass("active");
		$("#read_font_48").removeClass("active");
		$("#read_font_55").removeClass("active");
	}else if(slmssize == "font-size: 0.48rem;"){//字体中
		$("#read_conent_box").attr("style",slmssize);
		$("#read_font_4").removeClass("active");
		$("#read_font_48").addClass("active");
		$("#read_font_55").removeClass("active");
	}else if(slmssize == "font-size: 0.55rem;"){//字体大
		$("#read_conent_box").attr("style",slmssize);
		$("#read_font_4").removeClass("active");
		$("#read_font_48").removeClass("active");
		$("#read_font_55").addClass("active");
	};
	//读取颜色cookie
	var slmscolor = decodeURIComponent($.cookie(\'color\'));
	    if(slmscolor == "gray-mode"){//默认
			$("body").attr("class",slmscolor);
			$("#back_gray-mode").addClass("active");
		    $("#back_yellow-mode").removeClass("active");
		    $("#back_black-mode").removeClass("active");
		}else if(slmscolor == "yellow-mode"){//舒适
			$("body").attr("class",slmscolor);
			$("#back_gray-mode").removeClass("active");
		    $("#back_yellow-mode").addClass("active");
		    $("#back_black-mode").removeClass("active");
		}else if(slmscolor == "black-mode"){//夜间
			$("body").attr("class",slmscolor);
			$("#back_gray-mode").removeClass("active");
		    $("#back_yellow-mode").removeClass("active");
		    $("#back_black-mode").addClass("active");
		};
	
	$(".dir").click(function(){
		$("#bh_seting_lay").show(100);
	});
	
	$("#gbd").click(function(){
		$("#bh_seting_lay").hide(100);
	});
    $(".item.hls1-bottom").eq(0).click(function(){
		var i = 0;
		$(this).show(100);
		//显示字体选项
		$("#bh_font_lay").show(100);
		//隐藏设置列表
		$("#bh_seting_lay").hide(100);
	});
	//关闭字体设置项
	$("#size").click(function(){
		 $("#bh_font_lay").eq(0).hide(100);
	});
	
	//设置字体大小并写入cookie
	    //字体小
	$("#read_font_4").click(function(){
		$("#read_conent_box").css("font-size","0.4rem");
		var sizedx = encodeURIComponent($("#read_conent_box").attr("style"));
		$.cookie(\'font\',sizedx, { expires: 30, path: \'/\' });//写入cookie
		$(this).addClass("active");
		$("#read_font_48").removeClass("active");
		$("#read_font_55").removeClass("active");
	});
	   //字体中
	   $("#read_font_48").click(function(){
		$("#read_conent_box").css("font-size","0.48rem");
		var sizedx = encodeURIComponent($("#read_conent_box").attr("style"));
		$.cookie(\'font\',sizedx, { expires: 30, path: \'/\' });//写入cookie
		$("#read_font_4").removeClass("active");
		$("#read_font_48").addClass("active");
		$("#read_font_55").removeClass("active");
	});
	  //字体大
	   $("#read_font_55").click(function(){
		$("#read_conent_box").css("font-size","0.55rem");
		var sizedx = encodeURIComponent($("#read_conent_box").attr("style"));
		$.cookie(\'font\',sizedx, { expires: 30, path: \'/\' });//写入cookie
		$("#read_font_4").removeClass("active");
		$("#read_font_48").removeClass("active");
		$("#read_font_55").addClass("active");
	});
	
	//显示颜色设置
	 $(".item.hls1-bottom").eq(1).click(function(){
		 $(this).show(100);
		//显示字体选项
		$("#bh_back_lay").show(100);
		//隐藏设置列表
		$("#bh_seting_lay").hide(100);
	 });
	
	//默认设置演示
	$("#back_gray-mode").click(function(){
		$("body").attr("class","gray-mode");
		var colordx = encodeURIComponent($("body").attr("class"));
		$.cookie(\'color\',colordx, { expires: 30, path: \'/\' });//写入cookie
		$("#back_gray-mode").addClass("active");
		$("#back_yellow-mode").removeClass("active");
		$("#back_black-mode").removeClass("active");
	});
	//舒适设置演示
	$("#back_yellow-mode").click(function(){
		$("body").attr("class","yellow-mode");
		var colordx = encodeURIComponent($("body").attr("class"));
		$.cookie(\'color\',colordx, { expires: 30, path: \'/\' });//写入cookie
		$("#back_gray-mode").removeClass("active");
		$("#back_yellow-mode").addClass("active");
		$("#back_black-mode").removeClass("active");
	});
	//舒适设置演示
	$("#back_black-mode").click(function(){
		$("body").attr("class","black-mode");
		var colordx = encodeURIComponent($("body").attr("class"));
		$.cookie(\'color\',colordx, { expires: 30, path: \'/\' });//写入cookie
		$("#back_gray-mode").removeClass("active");
		$("#back_yellow-mode").removeClass("active");
		$("#back_black-mode").addClass("active");
	});
	//隐藏颜色设置
	$("#color").click(function(){
		$("#bh_back_lay").hide(100);
	});
	
	//加入书架
	$(".item.hls1-bottom").eq(2).click(function(){
		var sj = $(this).attr("data-sj");
		if(sj != "0"){
		$.ajax({
			type:\'post\',
			url:sj, 
			success:function(msg){
				var fanhuiuif = $(msg).find("#ajax").text();
			//alert(fanhuiuif);
				$("#bh_seting_lay").hide();
				$("body").append("<i id=\\"zhezhao\\"></i><div id=\'xiaoxi\'><p>"+fanhuiuif+"</p></div>");
						ref = setInterval(function(){
							$("#xiaoxi").remove();
							$("#zhezhao").remove();
							clearInterval(ref);
							},2000);
			}
			 });};
	});
	
	var sj = $(this).attr("data-sj");
	//离线阅读
	$("#app").click(function(){
		$("#bh_down_lay").show(100);
		//隐藏设置列表
		$("#bh_seting_lay").hide(100);
	});
	//下载app
	$(".btn.slmsapp").click(function(){
		$("#bh_down_lay").show(100);
		//隐藏设置列表
		$("#bh_seting_lay").hide(100);
	});
	
	
	//隐藏离线阅读
	$("#gbapp").click(function(){
		$("#bh_down_lay").hide(100);
	});
	$("#bxz").click(function(){
		$("#bh_down_lay").hide(100);
	});
	

//签到项
	
$.ajax({
			type:\'post\',
			url:"/user/signin.php", 
			success:function(msg){
				var fanhuiuif = $(msg).find("#ajax").text();
				var suzi = parseInt(fanhuiuif.replace(/[^0-9]/ig,""));
				if(fanhuiuif == "你今天已经签到过了，请明天再来！"){
				}else if(fanhuiuif == ""){
				}else{
					$("#sign_lay_new").show();
					$(".n-prompt").html(fanhuiuif);
					$("#sign_num_new").text(suzi);
				}
			}
			 })
	
	
	
	//打赏部分
	
	$(".ds").click(function(){
			//alert("1");
			$(".bh_recharge_box").show(100);
			$("#bh_seting_lay").hide(100);
			
		});
		
		$(".close").click(function(){
			$(".bh_recharge_box").hide();
		});
	
	
	//打赏js
		$(".dsbdimg.a").click(function(){//第一项
			$(this).addClass("active");
			$(".dsbdimg.b").removeClass("active");
			$(".dsbdimg.c").removeClass("active");
			$(".dsbdimg.d").removeClass("active");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'2\'>");
		});
		$(".dsbdimg.b").click(function(){//第二项
			$(this).addClass("active");
			$(".dsbdimg.a").removeClass("active");
			$(".dsbdimg.c").removeClass("active");
			$(".dsbdimg.d").removeClass("active");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'3\'>");
		});
		$(".dsbdimg.c").click(function(){//第三项
			$(this).addClass("active");
			$(".dsbdimg.b").removeClass("active");
			$(".dsbdimg.a").removeClass("active");
			$(".dsbdimg.d").removeClass("active");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'4\'>");
		});
		$(".dsbdimg.d").click(function(){//第四项
			$(this).addClass("active");
			$(".dsbdimg.b").removeClass("active");
			$(".dsbdimg.c").removeClass("active");
			$(".dsbdimg.a").removeClass("active");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'5\'>");
		});
		
		
		
		//确定打赏，提交表单
	
	
		$("#qdds").click(function(){
	 var dssid = $("#qdds").attr("data-dsid");	
			if(dssid == "0"){
				window.location.href = "/login.php";
			}else{
			 var dsid = $("#shubi").text();
			if(dsid == "0"){
				alert("抱歉！您的余额不足，请充值");
				window.location.href = "/modules/pay/buyegold.php";
			}else{
			var dataa = $(\'#formgift\').serialize();
		    $.ajax({
			contentType: "application/x-www-form-urlencoded; charset=gbk", 
			type:\'post\',
			url:"/modules/article/gifts.php?do=submit",
			data:dataa,
			success:function(msg){
				var fanhui = $(msg).find("#ajax").text();
				$(".bh_recharge_box").hide();
				$("body").append("<i id=\\"zhezhao\\"></i><div id=\'xiaoxi\'><p>"+fanhui+"</p></div>");
						ref = setInterval(function(){
							$("#xiaoxi").remove();
							$("#zhezhao").remove();
							clearInterval(ref);
							},3000);
				
				
			}
		});}
				
			}
	});	
	
	
	
	var img = encodeURIComponent($("#booktext").attr("data-image"));
	var bookid = $("#booktext").attr("data-bookid");
	var chid = $("#booktext").attr("data-chid");
	var boonmen = encodeURIComponent($("#booktext").text());
	var sort = encodeURIComponent("'.$this->_tpl_vars['sort'].'");
	var ming = encodeURIComponent("'.$this->_tpl_vars['articlename'].'");
	//$.cookie(\'img\',img, { expires: 30, path: \'/\' });//写入cookie
	//$.cookie(\'bookid\',bookid, { expires: 30, path: \'/\' });
	//$.cookie(\'chid\',chid, { expires: 30, path: \'/\' });
	//$.cookie(\'boonmen\',boonmen, { expires: 30, path: \'/\' });
var img1 = decodeURIComponent($.cookie(\'img\'));
var bookid1 = $.cookie(\'bookid\');
var chid1 = $.cookie(\'chid\');
var boonmen1 = decodeURIComponent($.cookie(\'boonmen\'));
var imgif = $("#booktext").attr("data-image");	
	if(img1 == "undefined"){
	  $.cookie(\'img\',img, { expires: 30, path: \'/\' });//写入cookie
	  $.cookie(\'bookid\',bookid, { expires: 30, path: \'/\' });
	  $.cookie(\'chid\',chid, { expires: 30, path: \'/\' });
	  $.cookie(\'boonmen\',boonmen, { expires: 30, path: \'/\' });
	  $.cookie(\'sort\',sort, { expires: 30, path: \'/\' });
	  $.cookie(\'ming\',ming, { expires: 30, path: \'/\' });
	}else if(img1 == imgif){
	  $.cookie(\'img\',img, { expires: 30, path: \'/\' });//写入cookie
	  $.cookie(\'bookid\',bookid, { expires: 30, path: \'/\' });
	  $.cookie(\'chid\',chid, { expires: 30, path: \'/\' });
	  $.cookie(\'boonmen\',boonmen, { expires: 30, path: \'/\' });
	  $.cookie(\'sort\',sort, { expires: 30, path: \'/\' });
	  $.cookie(\'ming\',ming, { expires: 30, path: \'/\' });
	}else{
		  //把第一项写入第二项
		  $.cookie(\'img2\',$.cookie(\'img\'), { expires: 30, path: \'/\' });//写入cookie
		  $.cookie(\'bookid2\',$.cookie(\'bookid\'), { expires: 30, path: \'/\' });
		  $.cookie(\'chid2\',$.cookie(\'chid\'), { expires: 30, path: \'/\' });
		  $.cookie(\'boonmen2\',$.cookie(\'boonmen\'), { expires: 30, path: \'/\' });
		  $.cookie(\'sort2\',$.cookie(\'sort\'), { expires: 30, path: \'/\' });
		  $.cookie(\'ming2\',$.cookie(\'ming\'), { expires: 30, path: \'/\' });
		  //写入新的第一项
		  $.cookie(\'img\',img, { expires: 30, path: \'/\' });//写入cookie
		  $.cookie(\'bookid\',bookid, { expires: 30, path: \'/\' });
		  $.cookie(\'chid\',chid, { expires: 30, path: \'/\' });
		  $.cookie(\'boonmen\',boonmen, { expires: 30, path: \'/\' });
		  $.cookie(\'sort\',sort, { expires: 30, path: \'/\' });
		  $.cookie(\'ming\',ming, { expires: 30, path: \'/\' });
	};
	
	
</script>
</body>
</html>';
?>