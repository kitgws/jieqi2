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
<title>�ظ���-'.$this->_tpl_vars['articlename'].'-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
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
  <div class="inner"><span class="pull-left"><a href="javascript:window.history.back();"><i class="icon-home"></i>����</a></span>
    <h2>&nbsp;</h2>
  </div>
</div>
<!--������-->
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
	<!--ҳ��-->
	'.$this->_tpl_vars['url_jumppage'].'
	<!--ҳ��end-->
<!--������ end--><!--�ظ� begin-->
<div class="net-friend whole-reply mar-foot bor-foot">
  <div class="title">
    <h3 data-shu="$i[\'order\']">ȫ���ظ�('.$this->_tpl_vars['i']['order'].')</h3>
  </div>
  <div class="entry" id="html_box"></div>
</div>
<div class="send-out">
 <form class="form-base" name="frmreview" id="frmreview" method="post" action="'.$this->_tpl_vars['article_dynamic_url'].'/reviewshow.php?tid='.$this->_tpl_vars['topicid'].'&aid='.$this->_tpl_vars['articleid'].'" onsubmit="return frmpost_validate();" enctype="multipart/form-data"> 
	<input style="display:none;" type="text" class="text" name="ptitle" placeholder="����" maxlength="100"> 
    <input type="text" name="pcontent" id="replay_mess" placeholder="����2~200����">
	<input type="hidden" name="act" id="act" value="newpost" />'.$this->_tpl_vars['jieqi_token_input'].'
	';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '<a id="slmstja" href="/login.php">����</a>';
}else{
echo '
	   <input class="button" type="submit" name="Submit" id="slmstj" value="����"/>';
}
echo '
  </form>
</div>
<!--�ظ� end-->
<div class="return-top" id="icon-top" style="display: none;"><a href="javascript:;"><i class="icon-top"></i></a></div>
<!--login begin-->
<div class="backdrop bh_wxlogin_lay" style="display: none;"></div>
<div class="modal bh_wxlogin_lay" style="margin-top: -114px; display: none;">
  <div class="inner clearfix">
    <div class="wechat-login-box">
      <div class="head">
        <div class="title">����δ��½Ŷ��</div>
      </div>
      <div class="body mt-10 clearfix"><a href="" class="btn qq mt-10">QQһ����¼</a></div>
    </div>
    <div class="bottom"> ��¼�����⣿<a href="/my/kefu.html">��ϵ�ͷ�</a></div>
    <div class="pull-action"><a onclick="hide_login();"><i class="icon-close"></i></a></div>
  </div>
</div>
<!--login end--><!-- ѡ���ֵ���������� -->
<div class="backdrop bh_recharge_box" style="display: none;"></div>
<div class="item2p recharge_sc bh_recharge_box" style="display: none;">
  <div class="inner">
    <div class="title"><strong>��ѡ���ֵ���</strong>
      <p class="read">�׳䷭�������</p>
    </div>
    <div class="close"><a href="javascript:;" onclick="hide_recharge_box();coupon_lay();"></a></div>
    <div class="entry">
      <ul>
        <li><a onclick="switchCoins(this,50)" class="active" ><i class="chong-icon-check"></i><span class="jine">50Ԫ</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">500��� +300�鄻</span><i class="reward">(����30Ԫ)</i></div>
          </a></li>
        <li><a onclick="switchCoins(this,30)"  ><span class="jine">30Ԫ</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">300��� </span><i class="reward">(����0Ԫ)</i></div>
          </a></li>
        <li><a onclick="switchCoins(this,100)"  ><i class="chong-icon-check"></i><span class="jine">100Ԫ</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">1000��� +800�鄻</span><i class="reward">(����80Ԫ)</i></div>
          </a></li>
        <li><a onclick="switchCoins(this,200)"  ><i class="chong-icon-check"></i><span class="jine">200Ԫ</span><i class="cz-xian"></i>
          <div class="rt"><span class="tip">2000��� +2000�鄻</span><i class="reward">(����200Ԫ)</i></div>
          </a></li>
      </ul>
    </div>
    <div class="btn"><a href="javascript:;" onclick="show_choice_pay();">������ֵ</a></div>
  </div>
  <input type="hidden" value="50" id="coinmoney">
</div>
<!-- ѡ���ֵ���������� --><!-- ֧������ -->
<div class="backdrop choice_pay_box" style="display: none;"></div>
<div class="item2p choice-pay choice_pay_box" style="display: none;">
  <div class="inner">
    <div class="title"><strong>ѡ��֧����ʽ</strong></div>
    <div class="close"><a href="javascript:;" onclick="hide_choice_pay();"></a></div>
    <div class="entry">
      <ul>
        <!--<li><a href="#"><i class="icon-ios"></i>ƻ��֧��</a></li>-->
        <li id="now_wx"   ><a href="javascript:;" onclick="apiPay_now_fun();"><i class="icon-wechat"></i>΢��֧��</a></li>
        <li><a href="javascript:;" onclick="apiPay_zfb_fun();"><i class="icon-alipay"></i>֧����֧��</a></li>
      </ul>
    </div>
  </div>
</div>
<input type="hidden" id="pay_typeproid" value="2" />
<!--֧������ --><!-- ���� begin -->
<div class="backdrop bh_dashang" style="display: none;"></div>
<div class="item2p reward bh_dashang" style="display: none;">
  <div class="inner">
    <div class="title"> ���͸�</div>
    <div class="close"><a href="javascript:;" onclick="bh_hide_das_fun();"></a></div>
    <div class="entry" id="bh_dashang_box">
      <ul>
        <li><a get_money="1.88" class="active">1.88Ԫ<i class="icon-check"></i></a></li>
        <li><a get_money="6.88" >6.88Ԫ<i class="icon-check"></i></a></li>
        <li><a get_money="8.88">8.88Ԫ<i class="icon-check"></i></a></li>
      </ul>
    </div>
    <div class="field">
      <input type="text" name="money" id="dasmoney" placeholder="������ͽ��" value="1.88">
      <label class="label">����TA</label>
      <span class="unit">Ԫ</span></div>
    <div class="btn"><a href="javascript:;" onclick="apiPay_zfb_fun(3);">֧����֧��</a></div>
  </div>
</div>
<!-- ���� end --><script>    $(function(){
        var fontSize=$(window).width()/25;
        $("html").css("font-size",fontSize);
        uid = "69208153";
    });
</script>
	
	
	
</body>
</html>';
?>