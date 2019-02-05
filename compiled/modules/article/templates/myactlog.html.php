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
<title>打赏记录-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/ranking.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign_1.css" />
<style>
body {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
	.text.weiqueren{color:darkgray !important;}
	#pagelink{line-height:50px;margin-left:0px;margin-right:0px;text-align: center;font-size:15px;background:#fff;border-top:1px solid #dcdcdc;border-bottom:1px solid #dcdcdc;}
	#pagelink a{padding:0px 10px 0px 10px;}
	#pagestats kbd{line-height:50px;font:15px; padding:0px 10px 0px 10px;margin-top:-5px;}
	#pagestats kbd input{height:18px;margin-top:-5px;}
	.btn.small.btn-blue{background:#f98700;margin-left:5px;color:aliceblue;}
</style>
</head>
<body>
<div class="wrapper"><!--头部 begin -->
  <div class="wx_header">
    <div class="wx_nav_box1">
      <div class="wx_home1"><a href="/userdetail.php"><i class="back_icos"></i><em>返回</em></a></div>
      <a href="javascript:;" class="logo">充值记录</a></div>
  </div>
  <!--头部 end -->
  <div class="record-box mt-10">
    <div class="title">
      <ul>
        <li><a href="/modules/pay/paylog.php">充值记录</a></li>
        <li><a href="javascript:;" class="current">打赏记录</a></li>
      </ul>
    </div>
    <div class="list" id="bh_sign_list_box">
<!--	<a href="javascript:;" class="rule-links">书券获取&amp;使用规则</a>	 -->
		
		';
if (empty($this->_tpl_vars['actlogrows'])) $this->_tpl_vars['actlogrows'] = array();
elseif (!is_array($this->_tpl_vars['actlogrows'])) $this->_tpl_vars['actlogrows'] = (array)$this->_tpl_vars['actlogrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['actlogrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['actlogrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['actlogrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['actlogrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['actlogrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
		<div class="item clearfix">
        <div class="body"><span class="typo-red">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['articlename'].'</span></div>
        <div class="pull-right">
          <div class="text">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'].'×'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'</div>
          <div class="date">日期:'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</div>
        </div>
      </div>
	  ';
}
echo '
    </div>
  </div>
	'.$this->_tpl_vars['url_jumppage'].'
</div>
</body>
</html>';
?>