<?php
echo '
<?xml version="1.0" encoding="'.$this->_tpl_vars['jieqi_charset'].'"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="shortcut  icon" href="https://w.heiyan.com/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/jlbase.css" media="all" />
<link rel="stylesheet" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/jlswiper.min.css?1" media="all" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<title>'.$this->_tpl_vars['articlename'].'打赏记录-'.$this->_tpl_vars['jieqi_sitename'].'</title>
<style>
#content.error {
	border: 1px solid red;
}
#count.error {
	border: 1px solid red;
}
	.header_title{color:#fd700d;}
</style>
</head>
<body class="donate_body">
<div class="head_sty02">
  <div class="top">
    <div class="header_btn"> <span class="back_icon"></span><span class="home_icon"></span> </div>
    <p class="header_title">『'.$this->_tpl_vars['articlename'].'』的打赏记录</p>
  </div>
</div>
<div class="container" style="padding:0;">

  <div class="error alert-error"></div>
  
  <div class="block comments donate-list">
    <div class="bd">
      <ul id="template-ul">  
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
	if($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'redrose'||$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'yellowrose'||$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'greenrose'||$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'bluerose'||$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'whiterose'||$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'blackrose'){
if($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'redrose'){
echo '
		  <li class="column-2" data-role="item" data-feed-storage="true" data-feed-id="" data-feed-type="22">
          <div class="right">
            <div class="head-icon"> <a href="javascript:;" title="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'"> <img alt="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'" src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'],'l',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['avatar']).'"> </a> </div>
            <h3 style="padding-top:0"> <a href="javascript:;" class="name">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</a> <span>为作品捧场了<em class="count">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'把</em></span> <img src="/slms/images/ds/1.png" width="24" height="24" /> </h3>
            <p class="summary">赠言: 鲜花送上，祝作者早日成神</p>
            <div class="controls"> <span class="time">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</span> </div>
          </div>
        </li>
											';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'yellowrose'){
echo '
		<li class="column-2" data-role="item" data-feed-storage="true" data-feed-id="" data-feed-type="22">
          <div class="right">
            <div class="head-icon"> <a href="javascript:;" title="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'"> <img alt="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'" src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'],'l',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['avatar']).'"> </a> </div>
            <h3 style="padding-top:0"> <a href="javascript:;" class="name">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</a> <span>为作品捧场了<em class="count">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'个</em></span> <img src="/slms/images/ds/2.png" width="24" height="24" /> </h3>
            <p class="summary">赠言: 汉堡一个，祝作者每天饱饱</p>
            <div class="controls"> <span class="time">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</span> </div>
          </div>
        </li>
											';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'greenrose'){
echo '
		 <li class="column-2" data-role="item" data-feed-storage="true" data-feed-id="" data-feed-type="22">
          <div class="right">
            <div class="head-icon"> <a href="javascript:;" title="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'"> <img alt="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'" src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'],'l',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['avatar']).'"> </a> </div>
            <h3 style="padding-top:0"> <a href="javascript:;" class="name">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</a> <span>为作品捧场了<em class="count">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'把</em></span> <img src="/slms/images/ds/3.png" width="24" height="24" /> </h3>
            <p class="summary">赠言: 支持作者风流倜傥，玉树临风</p>
            <div class="controls"> <span class="time">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</span> </div>
          </div>
        </li>
		  ';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'bluerose'){
echo '
		  <li class="column-2" data-role="item" data-feed-storage="true" data-feed-id="" data-feed-type="22">
          <div class="right">
            <div class="head-icon"> <a href="javascript:;" title="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'"> <img alt="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'" src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'],'l',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['avatar']).'"> </a> </div>
            <h3 style="padding-top:0"> <a href="javascript:;" class="name">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</a> <span>为作品捧场了<em class="count">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'朵</em></span> <img src="/slms/images/ds/3.png" width="24" height="24" /> </h3>
            <p class="summary">赠言: 支持作者文质彬彬</p>
            <div class="controls"> <span class="time">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</span> </div>
          </div>
        </li>
		  ';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'whiterose'){
echo '
		  <li class="column-2" data-role="item" data-feed-storage="true" data-feed-id="" data-feed-type="22">
          <div class="right">
            <div class="head-icon"> <a href="javascript:;" title="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'"> <img alt="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'" src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'],'l',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['avatar']).'"> </a> </div>
            <h3 style="padding-top:0"> <a href="javascript:;" class="name">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</a> <span>为作品捧场了<em class="count">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'把</em></span> <img src="/slms/images/ds/4.png" width="24" height="24" /> </h3>
            <p class="summary">赠言:支持作者文质彬彬，君子如玉</p>
            <div class="controls"> <span class="time">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</span> </div>
          </div>
        </li>
		  ';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'blackrose'){
echo '
		  <li class="column-2" data-role="item" data-feed-storage="true" data-feed-id="" data-feed-type="22">
          <div class="right">
            <div class="head-icon"> <a href="javascript:;" title="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'"> <img alt="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'" src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'],'l',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['avatar']).'"> </a> </div>
            <h3 style="padding-top:0"> <a href="javascript:;" class="name">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</a> <span>为作品捧场了<em class="count">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'把</em></span> <img src="/slms/images/ds/6.png" width="24" height="24" /> </h3>
            <p class="summary">赠言: 支持作者风流倜傥，玉树临风</p>
            <div class="controls"> <span class="time">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</span> </div>
          </div>
        </li>
											';
}
echo '
		    	                		</li>
										';
}
echo '
									';
}
echo '  

      </ul>
	  
	  
	  '.$this->_tpl_vars['url_jumppage'].'
    </div>
    <div class="loading-slider"><p>'.$this->_tpl_vars['jieqi_sitename'].'&copy;版权所有</p><p>2015-2018</p></div>
  </div>
</div>
 
<script type="text/javascript">

	$(".back_icon").click(function(){
		history.go(-1)
	});
	$(".home_icon").click(function(){
		window.location.href="/";
	});
	
	
	
	
	
</script>

</body>
</html>
';
?>