<?php
echo '<script type="text/javascript">
function frmchangeegold_validate(){
  if(typeof(document.frmchangeegold.egold) != "undefined"){
    if(document.frmchangeegold.egold.value == "" ){
      alert("������'.$this->_tpl_vars['egoldname'].'��ֵ");
	  document.frmchangeegold.egold.focus();
	  return false;
    }
  }
}
</script>
<form name="frmchangeegold" id="frmchangeegold" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/admin/changeegold.php?do=submit" method="post" onsubmit="return frmchangeegold_validate();">
<table width="80%" class="grid" cellspacing="1" align="center">
<caption>�ֹ���ֵ'.$this->_tpl_vars['egoldname'].'</caption>
<tr valign="middle" align="left">
  <td class="tdl" width="25%">�û�����</td>
  <td class="tdr"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['uid']).'">'.$this->_tpl_vars['uname'].'</a> (ID: '.$this->_tpl_vars['uid'].')</td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">����'.$this->_tpl_vars['egoldname'].'��</td>
  <td class="tdr">'.$this->_tpl_vars['egold'].'</td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">����'.$this->_tpl_vars['egoldname'].'��</td>
  <td class="tdr"><input type="text" class="text" name="egold" id="egold" size="10" maxlength="11" value="" /> <span class="hot"> �����������磺12 Ϊ����12��'.$this->_tpl_vars['egoldname'].'��-8 Ϊ�۳�8��'.$this->_tpl_vars['egoldname'].'</span></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">֧����</td>
  <td class="tdr"><input type="text" class="text" name="money" id="money" size="10" maxlength="11" value="" /> Ԫ <span class="hot">�û�����'.$this->_tpl_vars['egoldname'].'����������������������</span></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">��ע��</td>
  <td class="tdr"><input type="text" class="text" name="note" id="note" size="50" value="" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">&nbsp;
  <input type="hidden" name="act" value="update" />'.$this->_tpl_vars['jieqi_token_input'].'
  <input type="hidden" name="uid" value="'.$this->_tpl_vars['uid'].'" />
  </td>
  <td class="tdr"><input type="submit" class="button" name="submit" value="�� ��" /></td>
</tr>
</table>
</form>';
?>