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
<title>回复区-'.$this->_tpl_vars['articlename'].'-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="dns-prefetch" href="//m.qirexiaoshuo.com" />
<link rel="dns-prefetch" href="//cj.qirexiaoshuo.com" />
<link rel="canonical" href="//m.qirexiaoshuo.com/comment/list_replay/" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css" />
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
	#pagelink{height:30px;background:#fff;margin-top:1px;margin-bottom:1px;line-height:30px;text-align: center;}
	#pagelink a{margin-left:5px;margin-right:5px;}
	#pagelink input{border:1px solid #ccc;height:15px;text-align:center;}
	#slmstj {
    width: 20%;
    float: right;
    height: 34px;
    line-height: 34px;
    text-align: center;
    background: #ff730b;
    color: #fff;
    border-radius: 5px;
    margin-top: 8px;
    font-size: 1.5rem;
}
</style>
</head>
<body>
<div class="header top-half">
  <div class="inner"><span class="pull-left"><a href="javascript:window.history.back();"><i class="icon-home"></i>返回</a></span>
    <h2>&nbsp;</h2>
  </div>
</div>
<!--主评论-->
<div class="net-friend bor-foot mar-top">
	';
if (empty($this->_tpl_vars['replyrows'])) $this->_tpl_vars['replyrows'] = array();
elseif (!is_array($this->_tpl_vars['replyrows'])) $this->_tpl_vars['replyrows'] = (array)$this->_tpl_vars['replyrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['replyrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['replyrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['replyrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['replyrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['replyrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <div class="entry" style="border-top:1px solid #ccc;">
    <div class="item"><a href="javascript:;"><img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posterid'],'s').'" class="avatar"></a>
      <div class="body">
        <div class="t">'.$this->_tpl_vars['replyrows'][$this->_tpl_vars['i']['key']]['username'].'</div>
        <div class="txt"><a href="javascript:;">'.$this->_tpl_vars['replyrows'][$this->_tpl_vars['i']['key']]['posttext'].'</a></div>
        <div class="foot"><span class="time"></span><span class="function"><a href="javascript:;"  ><i class="icon-praise"></i>0</a></span></div>
      </div>
    </div>
  </div>
	';
}
echo '
</div>
	<!--页码-->
	'.$this->_tpl_vars['url_jumppage'].'
	<!--页码end-->
<!--主评论 end--><!--回复 begin-->
<div class="net-friend whole-reply mar-foot bor-foot">
  <div class="title">
    <h3 data-shu="$i[\'order\']">全部回复('.$this->_tpl_vars['i']['order'].')</h3>
  </div>
  <div class="entry" id="html_box"></div>
</div>
<div class="send-out">
 <form class="form-base" name="frmreview" id="frmreview" method="post" action="'.$this->_tpl_vars['article_dynamic_url'].'/reviewshow.php?tid='.$this->_tpl_vars['topicid'].'&aid='.$this->_tpl_vars['articleid'].'" onsubmit="return frmpost_validate();" enctype="multipart/form-data"> 
	<input style="display:none;" type="text" class="text" name="ptitle" placeholder="标题" maxlength="100"> 
    <input type="text" name="pcontent" id="replay_mess" placeholder="输入2~200个字">
	<input type="hidden" name="act" id="act" value="newpost" />'.$this->_tpl_vars['jieqi_token_input'].'
	';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<a id="slmstja" href="/login.php">发布</a>';
}else{
echo '
	   <input class="button" type="submit" name="Submit" id="slmstj" value="发表"/>';
}
echo '
  </form>
</div>
<!--回复 end-->
<div class="return-top" id="icon-top" style="display: none;"><a href="javascript:;"><i class="icon-top"></i></a></div>
<!--login begin-->
<div class="backdrop bh_wxlogin_lay" style="display: none;"></div>
<div class="modal bh_wxlogin_lay" style="margin-top: -114px; display: none;">
  <div class="inner clearfix">
    <div class="wechat-login-box">
      <div class="head">
        <div class="title">您还未登陆哦！</div>
      </div>
      <div class="body mt-10 clearfix"><a href="" class="btn qq mt-10">QQ一键登录</a></div>
    </div>
    <div class="bottom"> 登录有问题？<a href="/my/kefu.html">联系客服</a></div>
    <div class="pull-action"><a onclick="hide_login();"><i class="icon-close"></i></a></div>
  </div>
</div>
<!--login end--><!-- 选择充值书币数额面板 -->
<div class="backdrop bh_recharge_box" style="display: none;"></div>
<div class="item2p recharge_sc bh_recharge_box" style="display: none;">
  <div class="inner">
    <div class="title"><strong>请选择充值金额</strong>
      <p class="read">首充翻倍送书币</p>
    </div>
    <div class="close"><a href="javascript:;" onclick="hide_recharge_box();coupon_lay();"></a></div>
    <div class="entry">
      <ul>
        <li><a onclick="switchCoins(this,50)" class="active" ><i class="chong-icon-check"></i><span class="jine">50元</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">500书币 +300书劵</span><i class="reward">(多送30元)</i></div>
          </a></li>
        <li><a onclick="switchCoins(this,30)"  ><span class="jine">30元</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">300书币 </span><i class="reward">(多送0元)</i></div>
          </a></li>
        <li><a onclick="switchCoins(this,100)"  ><i class="chong-icon-check"></i><span class="jine">100元</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">1000书币 +800书劵</span><i class="reward">(多送80元)</i></div>
          </a></li>
        <li><a onclick="switchCoins(this,200)"  ><i class="chong-icon-check"></i><span class="jine">200元</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">2000书币 +2000书劵</span><i class="reward">(多送200元)</i></div>
          </a></li>
      </ul>
    </div>
    <div class="btn"><a href="javascript:;" onclick="show_choice_pay();">立即充值</a></div>
  </div>
  <input type="hidden" value="50" id="coinmoney">
</div>
<!-- 选择充值书币数额面板 --><!-- 支付浮层 -->
<div class="backdrop choice_pay_box" style="display: none;"></div>
<div class="item2p choice-pay choice_pay_box" style="display: none;">
  <div class="inner">
    <div class="title"><strong>选择支付方式</strong></div>
    <div class="close"><a href="javascript:;" onclick="hide_choice_pay();"></a></div>
    <div class="entry">
      <ul>
        <!--<li><a href="#"><i class="icon-ios"></i>苹果支付</a></li>-->
        <li id="now_wx"   ><a href="javascript:;" onclick="apiPay_now_fun();"><i class="icon-wechat"></i>微信支付</a></li>
        <li><a href="javascript:;" onclick="apiPay_zfb_fun();"><i class="icon-alipay"></i>支付宝支付</a></li>
      </ul>
    </div>
  </div>
</div>
<input type="hidden" id="pay_typeproid" value="2" />
<!--支付浮层 --><!-- 打赏 begin -->
<div class="backdrop bh_dashang" style="display: none;"></div>
<div class="item2p reward bh_dashang" style="display: none;">
  <div class="inner">
    <div class="title"> 打赏给</div>
    <div class="close"><a href="javascript:;" onclick="bh_hide_das_fun();"></a></div>
    <div class="entry" id="bh_dashang_box">
      <ul>
        <li><a get_money="1.88" class="active">1.88元<i class="icon-check"></i></a></li>
        <li><a get_money="6.88" >6.88元<i class="icon-check"></i></a></li>
        <li><a get_money="8.88">8.88元<i class="icon-check"></i></a></li>
      </ul>
    </div>
    <div class="field">
      <input type="text" name="money" id="dasmoney" placeholder="输入打赏金额" value="1.88">
      <label class="label">打赏TA</label>
      <span class="unit">元</span></div>
    <div class="btn"><a href="javascript:;" onclick="apiPay_zfb_fun(3);">支付宝支付</a></div>
  </div>
</div>
<!-- 打赏 end --><script>    $(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "69208153";
    });
</script>
	
	
	
</body>
</html>';
?>