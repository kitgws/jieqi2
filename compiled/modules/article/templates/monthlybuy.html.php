<?php
echo '<?xml version="1.0" encoding="gb2312"?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>购买包月-账务中心-'.$this->_tpl_vars['jieqi_sitename'].'-手机版</title>
		<meta name="keywords" content="账务中心-'.$this->_tpl_vars['jieqi_sitename'].'-手机版">
		<meta name="description" content="账务中心-'.$this->_tpl_vars['jieqi_sitename'].'-手机版">
	<meta http-equiv="Content-Type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="-1" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
		<meta name="format-detection" content="telephone=no" />
		<link rel="shortcut  icon" href="'.$this->_tpl_vars['jieqi_url'].'/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/bybase.css?bust=201712251515" media="all" />
		<link rel="stylesheet" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/byswiper.min.css?1" media="all" />
		<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
		<style>
.topup .block {
	background: #fff;
	margin: 0;
}
.topup h1 {
	padding-bottom: 0;
	FONT-SIZE: 0.875em;
}
.topup .mod {
	margin: 0;
	padding: 10px 15px;
}
.topup .choose-list {
	border-bottom: none;
	margin-bottom: 0;
}
.topup .choose-list .other-sum .inputValue.active {
	background: #fd6e0e;
	color: #fff;
}
.topup .choose-list .choose-item .input {
	width: 100%;
}
.topup .choose-list .sum-item li {
	width: 47%;
}
.topup .choose-list .choose-item .input {
	width: 47%;
}
.topup .choose-list .sum-item li:nth-child(2n) {
	margin-right: 0;
}
.topup .choose-list .sum-item li:nth-child(2n-1) {
	margin-right: 5%;
}
</style>
		</head>
		<body class="topup">
<div class="head_sty02">
          <div class="top">
    <div class="header_btn">
		<a href="javascript:;" onclick="javascript:history.go(-1)"><span class="back_icon"></span></a> 
		<a href="/"><span class="home_icon"></span></a> </div>
    <p class="header_title">购买包月</p>
  </div>
        </div>
<div class="container" style="padding-top:0;">
          <div class="top-alert"> </div>
          <div class="my-pocket" >
    <div class="mod"> <em>账户：</em>'.$this->_tpl_vars['jieqi_username'].'（用户Id：'.$this->_tpl_vars['uid'].'）<br />
              <em>余额：</em><span class="count">'.$this->_tpl_vars['egold'].'</span> '.$this->_tpl_vars['egoldname'].' <br/>
		    ';
if($this->_tpl_vars['overtime'] == 0){
echo ' <em>包月状态：</em><span class="count">尚未包月</span>';
}else{
echo '<em>包月状态：</em><span class="count">'.date('Y-m-d',$this->_tpl_vars['overtime']).'</span> 到期';
}
echo '</div>
			  
  </div>
          <div class="mod">
    <h1>请选择包月方式：</h1>
  </div>

          <div class="block">
    <div class="mod">
              <div class="choose-bottom choose-bank">
        <ul class="choose-list">
                  <!--微信 -->
                  <li class="choose-item choose-weixin">
             <form name="frmlogin" method="post" action="'.$this->_tpl_vars['url_login'].'">
                      <div class="sum-list">
                <ul class="sum-item">
				';
if (empty($this->_tpl_vars['jieqimonthly']['article']['options'])) $this->_tpl_vars['jieqimonthly']['article']['options'] = array();
elseif (!is_array($this->_tpl_vars['jieqimonthly']['article']['options'])) $this->_tpl_vars['jieqimonthly']['article']['options'] = (array)$this->_tpl_vars['jieqimonthly']['article']['options'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['jieqimonthly']['article']['options']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['jieqimonthly']['article']['options']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['jieqimonthly']['article']['options']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['jieqimonthly']['article']['options']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['jieqimonthly']['article']['options']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '	
				 ';
if($this->_tpl_vars['i']['order'] == 1){
echo '
                  <li class="active" data-type="7" data-value="'.$this->_tpl_vars['i']['key'].'">'.$this->_tpl_vars['i']['key'].'个月
                    <samll style="font-size:12px;">('.$this->_tpl_vars['jieqimonthly']['article']['options'][$this->_tpl_vars['i']['key']].$this->_tpl_vars['egoldname'].')</samll>
                  </li>
					';
}else{
echo '
					<li data-type="7" data-value="'.$this->_tpl_vars['i']['key'].'">'.$this->_tpl_vars['i']['key'].'个月
                    <samll style="font-size:12px;">('.$this->_tpl_vars['jieqimonthly']['article']['options'][$this->_tpl_vars['i']['key']].$this->_tpl_vars['egoldname'].')</samll>
                    </li>
					';
}
echo '
                ';
}
echo '  
                        </ul>
              </div>
				 <div id="vim" style="display:none;"></div>
              <div class="choose-refer">
                <p class="exchange">包月： <span class="brown">0</span>'.$this->_tpl_vars['egoldname'].'</p>
				<input type="hidden" name="act" value="buy">'.$this->_tpl_vars['jieqi_token_input'].'
                <input type="submit" class="btn btn-auto btn-brown " name="submit" value="确认购买"/>
              </div>
              </form>
          </li>
     </ul>
      </div>
              <div class="other-link">
   <!--     <div class="bd" style="text-align: center;"> <a href="" >交易记录查询</a> <span class="divide">|</span> <a href="">充值订单查询</a> </div>  -->
      </div>
            </div>
  </div>
        </div>

			
<script type="text/javascript">
  $(".sum-item li").click(function(){
	 var i = 0;
	  i=$(this).index();
	  if(i == 0){
		  $("#vim").html("<input type=\'radio\' class=\'radio\' name=\'buytype\'checked=\'checked\' value=\'1\' />");
		  $(this).attr("class","active").siblings().removeClass("active");
		  $(".exchange").html("已选套餐："+$(this).text());
	  }else if(i == 1){
		  $("#vim").html("<input type=\'radio\' class=\'radio\' name=\'buytype\'checked=\'checked\' value=\'3\' />");
		  $(this).attr("class","active").siblings().removeClass("active");
		  $(".exchange").html("已选套餐："+$(this).text());
	  }else if(i == 2){
		  $("#vim").html("<input type=\'radio\' class=\'radio\' name=\'buytype\'checked=\'checked\' value=\'6\' />");
		  $(this).attr("class","active").siblings().removeClass("active");
		  $(".exchange").html("已选套餐："+$(this).text());
	  }else if(i == 3){
		  $("#vim").html("<input type=\'radio\' class=\'radio\' name=\'buytype\'checked=\'checked\' value=\'12\' />");
		  $(this).attr("class","active").siblings().removeClass("active");
		  $(".exchange").html("已选套餐："+$(this).text());
	  }
  });

</script>			
</body>
</html>
';
?>