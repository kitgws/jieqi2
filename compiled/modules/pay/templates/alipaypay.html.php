<?php
echo '
<div id="content"><link href="/sink/css/user.css" type="text/css" rel="stylesheet">

<!--wrap begin-->
<div class="wrap2">
  <script type="text/javascript">
$(function(){

  var ss = \'userhub\'+\'_\'+\'\';
  if(ss == \'userhub_inbox\' || ss == \'userhub_outbox\' || ss == \'userhub_draft\' || ss == \'userhub_toSysView\' || ss == \'userhub_messagedetail\'){
      $(\'#userhub_newmessage\').parent("dl.list_menu").show();
	  $(\'#userhub_newmessage\').children("a").addClass("focus");
  }
  if(ss == \'chapter_cmView\'){
      $(\'#article_masterPage\').parent("dl.list_menu").show();
	  $(\'#article_masterPage\').children("a").addClass("focus");
  }
//  if(\'\' == \'upaView\'){
//      $(\'#userhub_usereditView\').parent("dl.list_menu").show();
//	  $(\'#userhub_usereditView\').children("a").addClass("focus");
//  }
  if(\'\' == \'hotcomment\'){
      $(\'#userhub_comment\').parent("dl.list_menu").show();
	  $(\'#userhub_comment\').children("a").addClass("focus");
  }
  if(\'\' == \'uservip\'){
      $(\'#userhub_usermember\').parent("dl.list_menu").show();
	  $(\'#userhub_usermember\').children("a").addClass("focus");
  }
  if(\'\' == \'moderatorView\'){
      $(\'#userhub_review_view\').parent("dl.list_menu").show();
	  $(\'#userhub_review_view\').children("a").addClass("focus");
  }
  $(\'#\'+ss).parent("dl.list_menu").show();
  $(\'#\'+ss).children("a").addClass("focus");
  $("li#row em").click(function(){
  $(this).parent().parent().children("dl.list_menu").toggle(300);
  });
});

</script>
<!--sidebar2 begin-->
  <div class="sidebar2 fl bg4 fix">

		    <div class="user2 f_blue fix">
'.$this->_tpl_vars['jieqi_pageblocks']['3']['content'].'

	'.$this->_tpl_vars['jieqi_pageblocks']['2']['content'].'
  <div class="kf"></div>
  </div>

<script type="text/javascript">
function frmpay_validate(){
	var checked = false;
	var egolds = document.getElementsByName(\'egold\');
	for (var i=0; i<egolds.length; i++) {
		checked = checked || egolds[i].checked;
	}
	if(!checked){
		alert("请选择您要的充值金额");
		return false;
	}
	showMask();
	displayDialog(document.getElementById(\'paydialog\').innerHTML);
}

function check_radio(){
	var o = getTarget();
	$_(o).subTag(\'input\')[0].checked = true;
}

</script>
 <div class="article3 fr bg5">
    <div class="tabox">
	    <div class="t2">
   <h2>用户充值</h2>
   <ul class="tabs62">
	<li class="thistab"><a href="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/buyegold.php?t=alipaypay">支付宝</a></li>
	<li><a href="">网上银行</a></li>
	<li><a href="">手机卡</a></li>
   </ul>
  </div>


<form name="frmpay" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/alipay.php">
<table class="grid" width="100%" align="center">
  <tr>
    <td style="font-size:14px;line-height:200%;padding:20px;">
	<strong>请选择充值金额：</strong><br />
	<div style="width:100%;clear:both;margin-bottom:10px;">
	<ul>
	  <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="50000" checked="checked"> 500元(50000币)</li>
    <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="30000"> 300元(30000币)</li>
	  <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="20000">200元(20000币)</li>
	  <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="10000"> 100元(10000币)</li>
	  <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="5000"> 50元(5000币)</li>
	  <li style="line-height:250%;float:left;width:50%;"><input type="radio" name="egold" value="2000"> 20元(2000币)</li>
	</ul>
	<div class="cb"></div>
	</div>
	<input type="submit" name="Submit" value="进入下一步" class="button" >
    <input type="hidden" name="action" value="pay">
	<input type="hidden" name="uid" value="'.$this->_tpl_vars['jieqi_userid'].'">
	<input type="hidden" name="sessid" value="'.$this->_tpl_vars['jieqi_sessid'].'">
	<input type="hidden" name="siteid" value="'.$this->_tpl_vars['siteid'].'">
	<input type="hidden" name="sign" value="'.$this->_tpl_vars['sign'].'">
    </td>
  </tr>
</table>
</form>

<div class="textbox">
<strong>说明：</strong><br />
1、支付宝充值，兑换比例：<span class="hot">1</span>元=<span class="hot">100</span>'.$this->_tpl_vars['egoldname'].'<br />
2、本接口除了支持支付宝帐户余额支付，还可以在下一步选择网上银行支付及储蓄卡和信用卡快捷支付。<br />
</div>

</div>
</div>
';
?>