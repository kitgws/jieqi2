<?php
echo '
<div style="width:100%;padding:20px 0px;text-align:center;min-height:360px">

<div class="jieqiNote" style="margin:15px auto;display:none">����QQ��<span class="hot"><strong>'.$this->_tpl_vars['api_nickname'].'</strong></span>����ã�<br />ʹ�ñ�վ��Ա���ܣ������ѡ���½��˺Ż���ʹ�����е��˺���QQ��¼���а󶨣�</div>
<div id="tab1" style="margin:auto; width:60%; padding:20px;">
     <div class="tablist" style="display:none">
         <ul>
             <li><a href="javascript:void(0)" onclick="selecttab(this)" class="selected">�����˺���Ϣ</a></li>
             <li><a href="javascript:void(0)" onclick="selecttab(this)">�����˺ţ����ҵ��˺�</a></li>
         </ul>
     </div>
     <div class="tabcontent">
         <div class="tabvalue">

<form name="frmbindnew" id="frmbindnew" action="'.$this->_tpl_vars['jieqi_user_url'].'/api/'.$this->_tpl_vars['apiname'].'/bind.php?do=submit" method="post">
<table class="grid" width="100%" align="center" style="height:200px">
<caption style="  height: 2.5em;
  line-height: 2.5em;
  background: #F9F8F7;
  border-left: 1px solid #F9F8F7;
  border-right: 1px solid #F9F8F7;
  border-top: 1px solid #F9F8F7;
  font-weight: bold;
  _font-size: 18px;
  color: #D00D54;
  text-align: left;
  padding-left: 10px;">'.$this->_tpl_vars['apititle'].'��¼�ɹ����Ƿ�󶨱�վ</caption>
<tr  style="display:none">
  <!--<td class="tdl" width="25%">�û���<span class="hot">(����)</span></td>-->
  <td class="tdr" width="75%"><input type="text" class="text" name="username" size="25" style="width:160px" value="'.$this->_tpl_vars['api_nickname'].'" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=u&username=\'+this.value, {outid:\'usermsg\', tipid:\'usermsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="usermsg"></span>
  <br /><span style="line-height:150%;color:gray;">���ڱ�վ��¼����ʾ���û���</span>
  </td>
</tr>
<tr style="display:none">
  <!--<td class="tdl">Email<span class="hot">(����)</span></td>-->
  <td class="tdr"><input id="email" type="text" class="text" name="email" size="25" style="width:160px" value="@yanqing.com" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=m&email=\'+this.value, {outid:\'mailmsg\', tipid:\'mailmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="mailmsg"></span></td>
</tr>
<tr  style="display:none">
  <!--<td class="tdl">��վ����</td>-->
  <td class="tdr"><input type="password" class="text" name="password" size="25" style="width:160px" value="" /> <span id="passmsg"></span>
  <br /><span style="line-height:150%;color:gray;">ֱ���ñ�վ�û�����¼ʱ�����õ����룬�������'.$this->_tpl_vars['apititle'].'��¼���ɲ��衣</span>
  </td>
</tr>
<tr  style="display:none">
  <!--<td class="tdl">ȷ������</td>-->
  <td class="tdr"><input type="password" class="text" name="repassword" size="25" style="width:160px" value="" /> <span id="repassmsg"></span>
  <br /><span style="line-height:150%;color:gray;">�ظ������������롣</span>
  </td>
</tr>

<tr>
  <input type="hidden" name="act" value="bindnew" />
  <td style="display:block;text-align:center;padding:50px 0;" class="tdr" align="center"><input style="padding:10px 30px;background:#d00d54;border:none;color:#fff;border-radius: 5px;" type="submit" class="button" name="submit" value="ȷ��"/></td>
</tr>
</table>

</form>
         </div>
         <div class="tabvalue" style="display:none">

<form name="frmbindold" id="frmbindold" action="'.$this->_tpl_vars['jieqi_user_url'].'/api/'.$this->_tpl_vars['apiname'].'/bind.php?do=submit" method="post">
<table class="grid" width="100%" align="center">
<caption>'.$this->_tpl_vars['apititle'].'��¼�ɹ�������վ�����˺Ű�</caption>
<tr>
  <td class="tdl" width="25%">�û���</td>
  <td class="tdr" width="75%"><input type="text" class="text" size="20" style="width:120px" name="username" onKeyPress="javascript: if (event.keyCode == 32 || event.which == 32) return false;">
  </td>
</tr>
<tr>
  <td class="tdl">�ܡ���</td>
  <td class="tdr"><input type="password" class="text" size="20" style="width:120px" name="password"></td>
</tr>
<tr>
  <td class="tdl">&nbsp;<input type="hidden" name="act" value="bindold" /></td>
  <td class="tdr"><input type="submit" class="button" name="submit" value="ȷ�ϰ�" /> <a href="'.$this->_tpl_vars['jieqi_url'].'/">�Ժ���˵������ȥ���飡</a></td>
</tr>
</table>
</form>
         </div>
     </div>
</div>
</div>
<script type="text/javascript">

    var str="'.$this->_tpl_vars['qq_user_info']['figureurl'].'"
	var sstr=str.substring(38)
	var email = document.getElementById(\'email\');
	email.setAttribute(\'value\',sstr.substring(3,20)+"@yanqing.com");
	

</script> ';
?>