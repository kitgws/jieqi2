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
    <title>���-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
    <meta name="Keywords" content="����С˵�Ƽ�,�ÿ���С˵," />
    <meta name="Description" content="'.$this->_tpl_vars['jieqi_pagetitle'].'����Ƽ�������Ʒ�ÿ�������С˵,��ԽС˵,У԰����С˵,�ܲú���С˵,����С˵,����С˵,����С˵,��ʷ����С˵,�ƻ�С˵,�ֲ�С˵��,ȫ���޹�浯�������Ķ����ֻ����߿�С˵��ѡ'.$this->_tpl_vars['jieqi_pagetitle'].'��" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
    <link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/base_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/recharge_3.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/vip_sign.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/public.js"></script>
<script type="text/javascript" src="/../scripts/common.js"></script>
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
    <!-- bookshelf begin -->
    <div class="bookshelf ">
      <ul>
        <li><a href="javascript:;" class="active">�ҵ����</a></li>
        <li><a href="/jilu.php">����Ķ�</a></li>
      </ul>
    </div>
    <!-- bookshelf end --><!--����鼮 begin-->
    <div class="search-result manage hot-box mar-foot">
      <div class="record-box"><span class="pull-left">��'.$this->_tpl_vars['nowbookcase'].'����ܼ�¼</span><span class="pull-right">
		  <a id="guanli" href="javascript:;" class="hide_edit_shelf">����</a>
		  <a id="wancheng" href="javascript:;" class="edit_shelf" style="display: none;">���</a></span></div>
      <div class="entry" id="book_shelf_box"><!--����Ƽ� begin--><!--����Ƽ� end--><!--������鼮 begin-->
		<form action="" method="post" name="checkform" id="checkform" onsubmit="return check_confirm();">
		';
if (empty($this->_tpl_vars['bookcaserows'])) $this->_tpl_vars['bookcaserows'] = array();
elseif (!is_array($this->_tpl_vars['bookcaserows'])) $this->_tpl_vars['bookcaserows'] = (array)$this->_tpl_vars['bookcaserows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['bookcaserows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['bookcaserows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['bookcaserows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['bookcaserows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['bookcaserows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
        <div class="item" id="shelf'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['caseid'].'">
		<a href="'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['url_index'].'">
		<img src="http://mf.slms.cc:888/files/article/image'.subdirectory($this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['articleid']).'/'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['articleid'].'/'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['articleid'].'s.jpg" class="avatar" onerror="this.src=\'/slms/images/tihuan.svg\'">
        <div class="body"><span class="t">'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['articlename'].'</span><!--<span class="author">�ƴ�����</span>-->
		<span class="author"><!--0/730��-->���ͣ�'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['sort'].'/'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['type'].'</span>
          <p>�����½ڣ�</p>
			';
if($this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['viptime'] > $this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['freetime']){
echo '
          <p>'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['vipchapter'].'</p>';
}else{
echo '<p>'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['lastchapter'].'</p>';
}
echo '
        </div>
        <div class="btn hide_edit_shelf">�����Ķ�</div>
			';
if($this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['hasnew'] == 1){
echo '
		<div class="recom"><i class="icon-tj"><img style="width: 100%;" src="'.$this->_tpl_vars['jieqi_url'].'/slms/images/zhengzaikan.png"></i></div>
			';
}
echo '
          </a>
          <div class="delete edit_shelf" style="display: none;"><a href="javascript:;" id="act_delete_'.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['caseid'].'" onclick="act_delete(\''.$this->_tpl_vars['jieqi_modules']['article']['url'].'/bookcase.php?bid='.$this->_tpl_vars['bookcaserows'][$this->_tpl_vars['i']['key']]['caseid'].'&act=delete'.$this->_tpl_vars['jieqi_token_url'].'\');">ɾ��</a></div>
        </div>
		 ';
}
echo '
		  </form>
      <!--������鼮 end-->
	</div>
    </div>
    <!--����鼮 end-->
    <div class="footer" id="footer_nav">
      <ul>
        <li><a href="javascript:;" class="active"><i class="icon-book"></i>���</a></li>
        <li><a href="/"><i class="icon-choice"></i>��ѡ</a></li>
        <li><a href="/userdetail.php"><i class="icon-my"></i>�ҵ�</a></li>
      </ul>
    </div>
   <script src="/sink/js/require.js"></script>
	<script type="text/javascript">
	   	$("#guanli").click(function(){
			$(this).hide();
			$("#wancheng").show();
			$(".delete.edit_shelf").show();
			$(".btn.hide_edit_shelf").hide();
		});
		$("#wancheng").click(function(){
			$(this).hide();
			$("#guanli").show();
			$(".delete.edit_shelf").hide();
			$(".btn.hide_edit_shelf").show();
		});
		
		function check_confirm(){
	var checkform = document.getElementById(\'checkform\');
	var checknum = 0;
	for (var i=0; i < checkform.elements.length; i++){
	 if (checkform.elements[i].name == \'checkid[]\' && checkform.elements[i].checked == true) checknum++; 
	}
	if(checknum == 0){
		alert(\'����ѡ��Ҫ��������Ŀ��\');
		return false;
	}
	var newclassid = document.getElementById(\'newclassid\');
	if(newclassid.value == -1){
		if(confirm(\'ȷʵҪ��ѡ����Ŀ�Ƴ����ô��\')) return true;
		else return false;
	}else{
		return true;
	}
}
//ɾ��
function act_delete(url){
	var o = getTarget();
	var param = {
		method: \'POST\', 
		onReturn: function(){
			$_(o.parentNode.parentNode).remove();
		}
	}
	if(confirm(\'ȷʵҪ�������Ƴ����ô��\')) Ajax.Tip(url, param);
	return false;
	
}
	</script>
</body>
</html>';
?>