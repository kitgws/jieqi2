<?php
echo '<html>
<head>
<meta http-equiv="content-type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'" />
<title>'.$this->_tpl_vars['title'].'</title>
<link rel="stylesheet" type="text/css" media="all" href="'.$this->_tpl_vars['jieqi_url'].'/sink/css/common.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/scripts/common.js"></script>
			</head>
<body>
<div style="width:100%; text-align:center; padding-top:150px;">
  <div style="margin:auto; width:350px;">
    <div class="block">
      <div class="blocktitle">'.$this->_tpl_vars['title'].'</div>
      <div class="blockcontent">
	    <div style="padding:10px">'.$this->_tpl_vars['content'].'</div>
	    <div style="width:100%; text-align: right; line-height:200%; padding-right:10px;">[<a href="javascript:if(navigator.userAgent.indexOf(\'Firefox\')==-1){window.opener=null;window.open(\'\',\'_self\');window.close();}else{var opened=window.open(\'about:blank\',\'_self\');opened.close();}">�رձ�����</a>]</div>
	  </div>
	  <div class="blocknote">��Ȩ����&copy; <a href="'.$this->_tpl_vars['jieqi_url'].'/">'.$this->_tpl_vars['jieqi_sitename'].'</a></div>
	</div>
  </div>
</div>
</body>
</html>';
?>