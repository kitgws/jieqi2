<?php
echo '<script type="text/javascript">
function frmnewmessage_validate(){
  if(typeof(document.frmnewmessage.receiver) != "undefined"){
    if(document.frmnewmessage.receiver.value == "" ){
      alert("�������ռ���");
	  document.frmnewmessage.receiver.focus();
	  return false;
    }
  }
  if(document.frmnewmessage.title.value == ""){
    alert("���������");
	window.document.frmnewmessage.title.focus();
	return false;
  }
}
</script>
<form name="frmnewmessage" id="frmnewmessage" action="'.$this->_tpl_vars['jieqi_url'].'/admin/newmessage.php?do=submit" method="post" onsubmit="return frmnewmessage_validate();">
<table width="100%" class="grid" cellspacing="1" align="center">
<caption>д����Ϣ</caption>
<tr valign="middle" align="left">
  <td class="tdl" width="25%">�ռ��ˣ�</td>
  <td class="tdr" width="75%"><input type="text" class="text" name="receiver" size="30" value="'.$this->_tpl_vars['receiver'].'" /></td>
</tr>
  <tr valign="middle" align="left">
  <td class="tdl">���⣺</td>
  <td class="tdr"><input type="text" class="text" name="title" size="30" value="'.$this->_tpl_vars['title'].'" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">���ݣ�</td>
  <td class="tdr"><textarea class="textarea" name="content" rows="12" cols="60">'.$this->_tpl_vars['content'].'</textarea></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">&nbsp;</td>
  <td class="tdr">
    <input type="submit" class="button" name="submit" value="�� ��" />
	<input type="hidden" name="act" value="add" />'.$this->_tpl_vars['jieqi_token_input'].'
  </td>
</tr>
</table>
</form>';
?>