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
    <title>'.$this->_tpl_vars['chaptername'].'-�½ڹ���-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
    <meta name="Keywords" content="{$articlename}, {$author}��{$articlename}�����֣�,��������Ҳ��ϲȫ�������Ķ�,ӯ��" />
    <meta name="Description" content="����С˵Ϊ����ṩ{$author}��{$articlename}�����½������Ķ���{$articlename}ȫ���Ķ��޹�浯�����ֻ����߿�С˵��ѡ����С˵" />
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
		.item{position:relative;height:30px;font-size:15px;}
		.item-label{position:absolute;left:10px;}
		.item-control{position:absolute;left:90px;}
		#xuanze{width:16px;height:16px;float:left;}
		.btn.btn-auto.btn-blue{display:block;margin:0 auto;width:80%;height:40px;font-size:15px;font-weight:bold;margin-top:10px;background-color:#ff730b;border:1px solid;border-radius:20px;color:aliceblue;}
</style>
</head>
<body>

<div class="none-drift top-half header">
      <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>��ҳ</a></span>
        <h2>�½ڹ���</h2>
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


<div class="book-details" data-booksc="'.$this->_tpl_vars['uid'].'">
<div class="container">
	<div class="mod block form">
<form name="frmbuychapter" id="frmbuychapter" method="post" action="'.$this->_tpl_vars['url_buychapter'].'" class="form-horizontal">
<div class="bd">
	            <div class="item">
					<div class="item-label">�鼮���ƣ�</div>
					<div class="item-control">��'.$this->_tpl_vars['obookname'].'��</div>
				</div>
				<div class="item">
					<div class="item-label">�½����ƣ�</div>
					<div class="item-control">'.$this->_tpl_vars['chaptername'].'</div>
				</div>
				<div class="item">
					<div class="item-label">
                    �۸�</div>
					<div class="item-control">'.$this->_tpl_vars['saleprice'].$this->_tpl_vars['egoldname'].'</div>
				</div>
				<div class="item">
					<div class="item-label">�����û���</div>
					<div class="item-control">'.$this->_tpl_vars['username'].'</div>
				</div>
				<div class="item">
					<div class="item-label">������</div>
					<div class="item-control">'.$this->_tpl_vars['useremoney'].$this->_tpl_vars['egoldname'].'</div>
				</div>
				<div class="item">
					<div class="item-label">����ѡ�</div>
					<div class="item-control"><input id="xuanze" type="checkbox" name="autobuy" value="1"> <span title="ѡ���Զ����ģ���������VIP�½��ڵ���Ķ�ʱ�Զ����򣬲���Ҫÿ�ι�������Ķ���">�Զ����ı�������VIP�½�</span></div>
			</div>
	<div class="ft">
	  <input type="hidden" name="act" value="buy">'.$this->_tpl_vars['jieqi_token_input'].'
      <input type="hidden" name="cid" value="'.$this->_tpl_vars['cid'].'">
	  <input type="submit" class="btn btn-auto btn-blue" value="ȷ �� �� �� �� �� ��" name="submit">
	  </div>
</form>
</div>
</div>


</div>
<script type="text/javascript">

</script> 
</body>
</html>';
?>