<?php
echo '<br />
<div class="tc">
<form name="frmdblogin" method="post" action="'.$this->_tpl_vars['url_dblogin'].'">
<table class="grid" width="500" align="center">
   <caption>���ݿ��˺���֤</caption>
   <tr>
     <td align="right">˵����</td>
	 <td>���ݿ������ع�����Ҫ��֤��վ�����ݿ��û��������룡</td>
   </tr>
   <tr>
     <td align="right">���ݿ��û�����</td>
	 <td><input type="text" class="text" size="20" maxlength="50" style="width:120px" name="dbuser"></td>
   </tr>
   <tr>
     <td align="right">���ݿ����룺</td>
	 <td><input type="password" class="text" size="20" maxlength="50" style="width:120px" name="dbpass"></td>
   </tr>
   ';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
   <tr>
     <td align="right">��֤�룺</td>
     <td><input type="text" class="text" size="8" maxlength="8" name="checkcode">&nbsp;<img src="'.$this->_tpl_vars['url_checkcode'].'" style="cursor:pointer;" onclick="this.src=\''.$this->_tpl_vars['url_checkcode'].'?rand=\'+Math.random();"></td>
   </tr>
   ';
}
echo '
   <tr>
     <td>&nbsp;<input type="hidden" name="act" value="login">'.$this->_tpl_vars['jieqi_token_input'].'</td>
	 <td><input type="submit" class="button" value="&nbsp;��&nbsp;��&nbsp;" name="submit"></td>
   </tr>
  </table>
</form>
</div>
<br /><br />';
?>