<?php
echo '<!doctype html>
<html lang="zh-cmn-Hans">
<head>
<title>ע��-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
<meta charset="'.$this->_tpl_vars['jieqi_charset'].'" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="Baiduspider" content="noarchive">
<meta name="keywords" content="С˵�Ķ���,����С˵,����С˵,�Ŵ�С˵,С˵��,С˵����" />
<meta name="description" content="'.$this->_tpl_vars['jieqi_pagetitle'].',���ºÿ���С˵����Ķ������ص�С˵��վ,�ṩ�����������С˵����������С˵,����С˵,����С˵,��ԽС˵,����С˵,��ʷС˵,����С˵,�����,����С˵,����С˵,ĩ��С˵,У԰С˵��һϵ�����С˵�Ķ���վ��" />
<meta name="renderer" content="webkit">
<meta name ="viewport" content ="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-title" content="'.$this->_tpl_vars['jieqi_pagetitle'].'">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="baidu-site-verification" content="4a8ExyTvbS" />
<meta name="wap-font-scale" content="no">
<link type="text/css"  rel="stylesheet" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/9kbase.css" />
<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/slms/js/jquery-1.11.1.min.js"></script>
<link type="text/css"  rel="stylesheet" href="'.$this->_tpl_vars['jieqi_url'].'/slms/css/9kreglogin.css" />
<style type="text/css">
body,td,th {
	font-family: "Heiti SC", "Microsoft YaHei", Helvetica, Tahoma, Arial, sans-serif;
}
	#slmszc input{display: block;background: #21a7ee;color: #fff;border: none;font-size: 1.33rem;text-align: center;padding: 1rem;width:100%;height:100%;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;}
</style>
</head>
<body>
<!--������--><!--ע��ҳ��-->
<section class="reg newpsd">
  <div class="container"><!--            <form class="form" action="" method="post">-->
    <h2><a href="'.$this->_tpl_vars['jieqi_url'].'"><img src="'.$this->_tpl_vars['jieqi_url'].'/slms/images/llogo.png" alt="'.$this->_tpl_vars['jieqi_pagetitle'].'"></a></h2>
    <ul><form name="frmregister" id="frmregister" action="'.$this->_tpl_vars['form_action'].'?do=submit" method="post" class="form-horizontal">
		<input value="37987" type="hidden" name="ID">
      <li class="newli">
       <input type="text" maxlength="60" size="28" class="text" name="username" value="" placeholder="�û���">
      </li>
      <li class="newli">
        <input type="password" maxlength="60" size="28" class="text" name="password" value="" placeholder="����">
      <b class="eye"></b></li>
	 <li class="newli">
       <input type="password" maxlength="60" size="28" class="text" name="repassword" value="" placeholder="ȷ������">
      <b class="eye"></b></li>
	<li class="newli">
        <input type="text" maxlength="60" size="28" class="text" name="email" placeholder="����">
      <b class="eye"></b></li>
      <li>
        <p class="tips"></p>
      </li>
		<!--
	<li class="newli"><span class="left  ">
        <input  type="tel" autocomplete="off" placeholder="��������֤��" class="bindPhone_input" maxlength="6" />
        </span><span class="right fr">
        <button  class="bindPhone_time" data-s="">��ȡ��֤��</button>
      </span></li>
		-->
      <li class="xieyi" >
        <input type="checkbox" checked disabled />
      <a href="javascript:;" target="_blank">�����Ķ���ͬ����ط����������˽����</a></li>
		<input type="hidden" name="act" value="newuser" />
		
      <li id="slmszc"><input type="submit" value="����ע��" class="btn btn-auto btn-blue"></li>
      <li class="lostpsd"><a href="/login.php" >�������˺ŵ�¼</a></li>
	<li class="otlog"><em></em>�罻�˺ŵ�¼<em></em></li>
      <li class="ot_login"><a href="/api/weixin/login.php" class="wechat"></a>
		  <a href="/api/qq/login.php" class="qq"></a>
		  <a href="/api/weibo/login.php" class="weibo"></a>
	</li>
		</form>
    </ul>
  <!--            </form>--></div>
</section>
<!--ע��ҳ�� end-->
	

</body>
</html>';
?>