<?php
echo '<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="applicable-device" content="mobile" />
    <title>ϵͳ��ʾ-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
    <meta name="Keywords" content="'.$this->_tpl_vars['jieqi_pagetitle'].'ϵͳ��ʾ" />
    <meta name="Description" content="����С˵Ϊ����ṩ{$author}��{$articlename}�����½������Ķ���{$articlename}ȫ���Ķ��޹�浯�����ֻ����߿�С˵��ѡ����С˵" />
    <link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="dns-prefetch" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="canonical" href="'.$this->_tpl_vars['jieqi_url'].'" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/index/base.css" />
<link rel="stylesheet" type="text/css" href="'.$this->_tpl_vars['jieqi_url'].'/slms/index/recharge.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/public.js"></script>
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/scripts/common.js"></script>
<style type="text/css">
	.blocknote{text-align:center;margin-top:10px;}
	.blocktitle.item{text-align:center;font-size:15px;font-weight:bold;color:deeppink;}
	.blockcontent{font-size:15px;}
	.blockcontent a{color:dodgerblue;}
	#fanhui{border:1px solid;border-radius:20px;padding-left:10px;padding-right:10px;}
</style>
</head>
<body>

<div class="none-drift top-half header">
      <div class="inner"><span class="pull-left"><a href="/"><i class="icon-home"></i>��ҳ</a></span>
        <h2>ϵͳ��ʾ</h2>
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
  <div class="">
    <div class="block">
      <div class="blocktitle item">���ִ���</div>
      <div class="blockcontent">
	    <div style="padding:10px">����ԭ��<p id="ajax" class="item">'.$this->_tpl_vars['errorinfo'].'</p>
	     <p class="item">'.$this->_tpl_vars['debuginfo'].'�� <a id="fanhui" href="javascript:history.back(1)">�� ��</a> ������</p></div>
	  </div>
	  <div class="blocknote">��Ȩ����&copy; <a href="'.$this->_tpl_vars['jieqi_url'].'/">'.$this->_tpl_vars['jieqi_sitename'].'</a></div>
	</div>
  </div>
  
  
</div>
</body>
</html>';
?>