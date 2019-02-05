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
    <meta name="Keywords" content="{$articlename}, {$author}，{$articlename}（大结局）,余生无你也欢喜全文在线阅读,盈袖" />
    <meta name="Description" content="深蓝小说为大家提供{$author}的{$articlename}最新章节在线阅读，{$articlename}全文阅读无广告弹窗，手机在线看小说就选深蓝小说" />
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
      <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>首页</a></span>
        <h2>书籍详情</h2>
        <div class="sear"><a onclick="show_ser_box();"><i class="icon-ss"></i></a></div>
        <!--搜索 begin-->
        <div class="search" id="show_ser_box" style="display: none;">
          <div class="cs-box">
            <button type="button" class="btn" id="show_cleare_btn" onclick="hide_ser_box();">取消</button>
            <button type="button" class="btn" id="show_sear_btn" onclick="key_search_href();" style="display: none;">搜索</button>
            <div class="field">
              <input type="text" name="keyword" id="search_keyword" maxlength="18" placeholder="请输入搜索内容" onkeyup="keyup_search(this,\'top\')">
              <div class="action"><a href="javascript:;"  style="display: none;" id="closeid" onclick="close_clear();"><i class="icon-close"></i></a></div>
            </div>
          </div>
        </div>
      <!--搜索 end--></div>
    </div>
    <!-- 书籍详情 begin -->
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
            <p id="zz">作者：'.$this->_tpl_vars['author'].'</p>
            <p>类型：'.$this->_tpl_vars['sort'];
if($this->_tpl_vars['sort'] == ""){
echo '其他类型';
}
echo '| <i class="green">'.$this->_tpl_vars['fullflag'].'</i></p>
            <p class="gray">'.$this->_tpl_vars['allvisit'].'名书友正在看</p>
          </div>
          <div class="label">';
if($this->_tpl_vars['sort'] != ""){
echo '<a href="javascript:;" class="red">'.$this->_tpl_vars['sort'].'</a>';
}else{
echo '<a href="javascript:;" class="red">其他类型</a>';
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
          <li><a href="'.jieqi_geturl('article','article',$this->_tpl_vars['articleid'],'read').'" class="orange">开始阅读</a></li>
			';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<li><a id="zhushu" href="/login.php" class="blue">我要追书</a></li>';
}else{
echo '<li><a id="zhushu" href="javascript:;" data-ul="'.$this->_tpl_vars['url_bookcase'].'" class="blue">我要追书</a></li>';
}
echo '
        </ul>
        <p class="bh_book_title_show">'.truncate($this->_tpl_vars['intro'],'150','...').'<a class="javascript:;" onclick="bh_book_title_show();"><i class="icon-open"></i></a></p>
        <p class="bh_book_title_hide" style="display: none;">'.$this->_tpl_vars['intro'].'<a class="javascript:;" onclick="bh_book_title_hide();"><i class="icon-shrink"></i></a></p>
      </div>
      <div class="update"><a href="'.$this->_tpl_vars['url_index'].'" style="display:inline-block; padding: 0 0 0 15px; float: left;">
      <h3>目录</h3>
      </a> ';
if($this->_tpl_vars['isvip_n'] > 0){
echo '
		  <a href="'.$this->_tpl_vars['url_vipchapter'].'" style="float: left;padding: 0 15px 0 0;width: 80%;">
		  <span class="pull-left">最近更新：'.$this->_tpl_vars['vipchapter'].'</span><span class="pull-right">'.date('Y-m-d h:i',$this->_tpl_vars['lastupdate']).'<i class="icon-more"></i></span></a>
		  ';
}else{
echo '
		  <a href="'.$this->_tpl_vars['url_lastchapter'].'" style="float: left;padding: 0 15px 0 0;width: 80%;">
		  <span class="pull-left">最近更新：'.$this->_tpl_vars['lastchapter'].'</span><span class="pull-right">'.date('Y-m-d h:i',$this->_tpl_vars['lastupdate']).'<i class="icon-more"></i></span></a>';
}
echo '
		</div>
    </div>
    <!-- 书籍详情 end -->
	<div id="slmsdsd">
		<div id="slmsds">
			<div id="slms_ds_top">
				<i></i><p>打赏记录<span>(已收到打赏'.$this->_tpl_vars['rosenum'].'次)</span></p><a class="ds" href="javascript:;">我要打赏</a>
			</div>
		    <div id="slms_ds_bottom">
			  <ul>
				  '.$this->_tpl_vars['jieqi_pageblocks']['1']['content'].'  
				</ul>
              <div id="wurends" href="javascript:;">
				   <p>暂无人打赏哦！</p>
                     <a class="ds" href="javascript:;"><h3>为作者加油吧？</h3></a>
				</div>
			 <div id="jilu" data-ul="/modules/article/donate.php?id='.$this->_tpl_vars['articleid'].'">查看更多></div>
			</div>
		</div>
	</div>
	<!--评论 begin-->
    <div class="net-friend bor-top">
      <div class="title"><span class="pull-left">
      <h3>网友评论</h3>已有
        <span id="pls">'.$this->_tpl_vars['reviewsnum'].'</span>人评论 </span><span class="pull-right"><a href="/modules/article/reviews.php?aid='.$this->_tpl_vars['articleid'].'"><i class="icon-write"></i>写评论</a></span></div>
      <div class="entry" id="html_box">
		  '.$this->_tpl_vars['jieqi_pageblocks']['7']['content'].'
		</div>
      <div class="check"><a href="/modules/article/reviews.php?aid='.$this->_tpl_vars['articleid'].'">查看更多评论</a></div>
    </div>
    <!--评论 end--><!--喜欢这部书的人还喜欢 begin-->
    <div class="recommend like book-like bor-top">
      <div class="title">
        <h3>喜欢这部书的人还喜欢</h3>
      <a id="dj" href="javascript:;"><i class="icon-change"></i>换一批</a></div>
      <div class="entry">
        '.$this->_tpl_vars['jieqi_pageblocks']['9']['content'].'
		'.$this->_tpl_vars['jieqi_pageblocks']['10']['content'].'
		'.$this->_tpl_vars['jieqi_pageblocks']['11']['content'].'
      </div>
    </div>
    <!--喜欢这部书的人还喜欢 end--><!--作者其它作品 begin-->
    <div class="recommend other-works bor-top">
      <div class="title">
        <h3>作者其它作品</h3>
      </div>
      <div class="entry">
        <ul id="qita">
          '.$this->_tpl_vars['jieqi_pageblocks']['0']['content'].'
        </ul>
      </div>
      <div class="check"><a href="/modules/article/authorarticle.php?author='.$this->_tpl_vars['author'].'">查看全部作品</a></div>
    </div>
    <!--作者其它作品 end--><!--图书相关信息 begin-->
    <div class="recommend book-relevant bor-top">
      <div class="title">
        <h3>图书相关信息</h3>
      <span><a href="javascript:;" onclick="toggle_book_info()" >展开<i class="icon-open"></i></a></span></div>
      <div class="entry" id="book_rele_info" style="display: none;">
        <p>版权来源：<i class="blue">深蓝小说源码</i></p>
        <p>免责声明：本书版权由奇热小说提供，授权本软件使</p>
        <p>用、制作、发行、若包括不良信息，请及时告知客服！</p>
      </div>
    </div>
    <!--图书相关信息 end--><!--login begin-->
   <div class="backdrop bh_dashang" style="display: none;"></div>
<form action="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/gifts.php?do=submit" method="post" id="formgift" name="formgift" target="_blank">
  <div class="item2p reward bh_dashang" style="display: none;">
	  <div class="inner"><div class="title">打赏给</div>
		  <div class="close"><a href="javascript:;"></a></div>
		  <div class="entry" id="bh_dashang_box">
			  <ul>
				  <li class="dsbd"><a>
					  <p class="dsbdimg a djds"><img src="/slms/images/ds/1.png" alt="玫瑰" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">100书币</p>
					  </a>
				  </li>
				  <li class="dsbd"><a>
					  <p class="dsbdimg b"><img src="/slms/images/ds/2.png" alt="汉堡" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">388书币</p>
					  </a>
				  </li>
				  <li class="dsbd"><a>
					  <p class="dsbdimg c"><img src="/slms/images/ds/3.png" alt="玫瑰" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">588书币</p>
					  </a>
				  </li>
				  <li class="dsbd"><a>
					  <p class="dsbdimg d"><img src="/slms/images/ds/1.png" alt="玫瑰" /><i class="icon-check"></i></p>
					  <p class="dsmbtext">888书币</p>
					  </a>
				  </li>
			  </ul>
				  
		  </div>
		   <div id="dsshu"><input type="radio" id="rid" name="rid" checked="checked" value="2"></div>
		  <div class="field">
			  <input type="number" class="form-control" style="display:none;" placeholder="数量" name="count" value="1" />
			  <input type="hidden" name="act" value="post" />'.$this->_tpl_vars['jieqi_token_input'].'
		      <input type="hidden" name="id" value="'.$this->_tpl_vars['articleid'].'" />
			  <p id="dangqian"><span class="dqyy">当前拥有</span><span class="xsb"><span id="shubi">'.$this->_tpl_vars['jieqi_egold'].'</span>书币</span></p></div>
		     ';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<div class="btn" id="dsdl"><a href="javascript:;">确定</a></div>';
}else{
echo '<div class="btn" id="qdds"><a href="javascript:;">确定</a></div>';
}
echo ' 
	  </div>
  </div>
	  </form>
	<!--login end-->

<div id="xiaoxi"><p>打赏成功！</p></div>
<i id="zhezhao"></i>
<div id="dssb">
	<div id="dssbtop">
	  <h2>您的余额不足，无法打赏</h2>
	  <p>请您充值后再进行打赏</p>
	</div>
	<div id="dssbbootom">
	  <a href="javascript:;">取消</a>
	  <a href="/modules/pay/buyegold.php">立即充值</a>
	</div>
</div>
    <script>   
	$(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "0";
    })
</script>
		
	<script type="text/javascript">    /*防止iframe劫持*/
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
					//$("#readJoinSJ").removeAttr("href").removeAttr("id").text("已在书架");
					$("#zhushu").removeAttr("href").addClass("gray").text("已在书架");
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
		
	//无人打赏时输出
		var dsrs = $("#slms_ds_bottom ul li").length;
		if(dsrs == 0){$("#wurends").show();$("#slms_ds_bottom ul").hide();}
		
		
		//打赏js
		
		$(".dsbdimg.a").click(function(){//第一项
			$(this).addClass("djds");
			$(".dsbdimg.b").removeClass("djds");
			$(".dsbdimg.c").removeClass("djds");
			$(".dsbdimg.d").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'2\'>");
		});
		$(".dsbdimg.b").click(function(){//第二项
			$(this).addClass("djds");
			$(".dsbdimg.a").removeClass("djds");
			$(".dsbdimg.c").removeClass("djds");
			$(".dsbdimg.d").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'3\'>");
		});
		$(".dsbdimg.c").click(function(){//第三项
			$(this).addClass("djds");
			$(".dsbdimg.b").removeClass("djds");
			$(".dsbdimg.a").removeClass("djds");
			$(".dsbdimg.d").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'4\'>");
		});
		$(".dsbdimg.d").click(function(){//第四项
			$(this).addClass("djds");
			$(".dsbdimg.b").removeClass("djds");
			$(".dsbdimg.c").removeClass("djds");
			$(".dsbdimg.a").removeClass("djds");
			$("#dsshu").html("<input type=\'radio\' id=\'rid\' name=\'rid\' checked=\'checked\' value=\'5\'>");
		});
		
		
		
		//确定打赏，提交表单
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
						if(fanhui == "处理完成，感谢您的支持！"){
							$(".backdrop.bh_dashang").hide();
							$(".item2p.reward.bh_dashang").hide();
						    $("#xiaoxi").show();
							$("#xiaoxi p").text("打赏成功，感谢您的支持！");
							ref = setInterval(function(){
							 location.reload();
							},2000);
						   }else if(fanhui == "对不起，您的书币不足！"){
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
		
//确定打赏，没有登陆的情况
		$("#dsdl").click(function(){window.location.href = "/login.php";});
		
		
//追书
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
				if(fanhui == "恭喜您，该小说已经加入书架！"){$("#zhushu").removeAttr("href").addClass("gray").text("已在书架");}
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

		
		
//取消打赏
$("#dssbbootom a").click(function(){
	$("#dssb").hide();
	$("#zhezhao").hide();
});

//评论系统数量
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