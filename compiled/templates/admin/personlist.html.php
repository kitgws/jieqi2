<?php
echo '<form name="frmquery" method="post" action="'.$this->_tpl_vars['jieqi_url'].'/admin/personlist.php">
<table class="grid" width="100%" align="center">
    <td align="right">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="hide">
      <tr>
        <td width="30%" valign="middle">��ϵ������'.$this->_tpl_vars['rowcount'].'</td>
        <td width="70%" align="right" valign="middle">
		�ؼ��֣�
        <input name="keyword" type="text" class="text" id="keyword" size="20" maxlength="50">
		<input name="keytype" type="radio" value="realname" checked="checked" />���� 
		<input name="keytype" type="radio" value="idcard" />���֤�� 
		<input name="keytype" type="radio" value="mobilephone" />�ֻ����� 
		<input name="keytype" type="radio" value="telephone" />�绰���� 
		&nbsp;&nbsp;
        <input type="submit" name="Submit" value="�� ��" class="button">&nbsp;&nbsp;
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</form>
<br />

<table class="grid" width="100%" align="center">
<caption>��ϵ���б�</caption>
  <tr align="center" class="head">
    <td width="15%" valign="middle">����</td>
	<td width="5%" valign="middle">�Ա�</td>
	<td width="30%" valign="middle">֤������</td>
	<td width="15%" valign="middle">�ֻ�</td>
    <td width="15%" valign="middle">�绰</td>
    <td width="20%" valign="middle">����</td>
  </tr>
  ';
if (empty($this->_tpl_vars['personsrows'])) $this->_tpl_vars['personsrows'] = array();
elseif (!is_array($this->_tpl_vars['personsrows'])) $this->_tpl_vars['personsrows'] = (array)$this->_tpl_vars['personsrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['personsrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['personsrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['personsrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['personsrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['personsrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr valign="middle">
    <td><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['uid'],'info').'" target="_blank">'.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['realname'].'</a></td>
	<td align="center">'.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['gender'].'</td>
	<td>'.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['idcardtype'].'��'.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['idcard'].'</td>
    <td>'.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['mobilephone'].'</td>
    <td>'.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['telephone'].'</td>
    <td align="center"> <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/personinfo.php?id='.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['uid'].'">��ϸ</a> | <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/personmanage.php?id='.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['uid'].'">�޸�</a> |<a href="'.$this->_tpl_vars['jieqi_url'].'/admin/usermanage.php?id='.$this->_tpl_vars['personsrows'][$this->_tpl_vars['i']['key']]['uid'].'">�˺�</a></td>
  </tr>
  ';
}
echo '
</table>

<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>';
?>