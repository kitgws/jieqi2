<?php
echo '<table class="grid" width="100%" align="center">
  <caption>�û������</caption>
  <tr align="center">
    <th width="10%">���</th>
    <th width="20%">����</th>
    <th width="50%">����</th>
    <th width="20%">����</th>
  </tr>
  ';
if (empty($this->_tpl_vars['groups'])) $this->_tpl_vars['groups'] = array();
elseif (!is_array($this->_tpl_vars['groups'])) $this->_tpl_vars['groups'] = (array)$this->_tpl_vars['groups'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['groups']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['groups']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['groups']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['groups']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['groups']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td align="center">'.$this->_tpl_vars['groups'][$this->_tpl_vars['i']['key']]['groupid'].'</td>
    <td align="center">'.$this->_tpl_vars['groups'][$this->_tpl_vars['i']['key']]['name'].'</td>
    <td align="left">'.$this->_tpl_vars['groups'][$this->_tpl_vars['i']['key']]['description'].'</td>
    <td align="center"><a href="'.$this->_tpl_vars['jieqi_url'].'/admin/groups.php?id='.$this->_tpl_vars['groups'][$this->_tpl_vars['i']['key']]['groupid'].'&act=edit">�༭</a>';
if($this->_tpl_vars['groups'][$this->_tpl_vars['i']['key']]['grouptype'] == 0){
echo '  <a id="act_delete_'.$this->_tpl_vars['groups'][$this->_tpl_vars['i']['key']]['groupid'].'" href="javascript:;" onclick="if(confirm(\'ȷʵҪɾ�����û���ô��\')) Ajax.Tip(\''.$this->_tpl_vars['jieqi_url'].'/admin/groups.php?id='.$this->_tpl_vars['groups'][$this->_tpl_vars['i']['key']]['groupid'].'&act=delete'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">ɾ��</a>';
}
echo '</td>
  </tr>
  ';
}
echo '
  <tr>
    <td colspan="4" class="foot">&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">'.$this->_tpl_vars['form_addgroup'].'</td>
  </tr>
</table>
';
?>