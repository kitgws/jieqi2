<?php
echo '<!doctype html>
<html lang="zh-cmn-Hans">
<head>
<title>��½-'.$this->_tpl_vars['jieqi_pagetitle'].'</title>
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
	.add_login_post.slmsdl{    display: block;
    background: #21a7ee;
    color: #fff;
    border: none;
    font-size: 1.33rem;
    text-align: center;
    padding: 1rem;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;}
</style>
</head>
<body>
<!--������--><!--ע��ҳ��-->
<section class="reg newlogin">
  <div class="container"><!--            <form class="form" action="" method="post">-->
    <h2><a href="'.$this->_tpl_vars['jieqi_url'].'"><img src="'.$this->_tpl_vars['jieqi_url'].'/slms/images/llogo.png" alt="'.$this->_tpl_vars['jieqi_pagetitle'].'"></a></h2>
    <ul><form action="'.$this->_tpl_vars['url_login'].'" method="post" name="frmlogin" id="frmlogin" class="form-horizontal">
      <li class="newli">
        <input type="text" placeholder="�������˺�" name="username" class="user_name" maxlength="20" />
      </li>
      <li class="newli li2">
        <input type="password" placeholder="����������" name="password" class="input_password user_password" maxlength="20" />
      <b class="eye"></b></li>
      <li>
        <p class="tips">*�ʺų���4-20���ַ�������Ӣ��/����/�»���</p>
      </li>
      <li>
        <p class="tips">*���볤��4-20���ַ�������Ӣ��/����</p>
      </li>
		<input type="hidden" name="usecookie" type="checkbox" checked="checked" />
		<input type="hidden" name="act" value="login">
		
      <li><input class="add_login_post slmsdl" type="submit" value="��½'.$this->_tpl_vars['jieqi_pagetitle'].'" style="width:100%;height:100%;"></li>
      <li class="lostpsd"><span class="rems">
		<a href="/register.php">ע���˺�</a></span>
	    <a href="javascript:;" class="fr">��������?</a>
	  </li>
      <li class="otlog"><em></em>�罻�˺ŵ�¼<em></em></li>
      <li class="ot_login"><a href="/api/weixin/login.php" class="wechat"></a>
		  <a href="/api/qq/login.php" class="qq"></a>
		  <a href="/api/weibo/login.php" class="weibo"></a>
	</li>
	 </form>
    </ul>
  <!--            </form>--></div>
  <div class="footer"></div>
</section>

<script type="text/javascript"> 
	
</script>

</body>

</html>';
?>