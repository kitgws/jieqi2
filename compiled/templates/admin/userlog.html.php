<?php
echo '<form name="frmsearch" method="get" action="'.$this->_tpl_vars['jieqi_url'].'/admin/userlog.php">
<table class="grid" width="100%" align="center">
    <tr>
        <td>�ؼ��֣�
            <input name="keyword" type="text" id="keyword" class="text" size="0" maxlength="50"> <input name="keytype" type="radio" class="radio" value="0" checked="checked">
            ������Ա
            <input type="radio" name="keytype" class="radio" value="1">
            �������� &nbsp;&nbsp;
            <input type="submit" name="btnsearch" class="button" value="�� ��">         
        </td>
    </tr>
</table>
</form>
<br />
<table class="grid" width="100%" align="center">
<caption>�û�������¼</caption>
  <tr align="center" valign="middle">
    <th width="12%">����</th>
    <th width="12%">ʱ��</th>
    <th width="14%">�����û�</th>
    <th width="14%">��������</th>
    <th width="20%">����ԭ��</th>
    <th width="28%">��������</th>
  </tr>
  ';
if (empty($this->_tpl_vars['logrows'])) $this->_tpl_vars['logrows'] = array();
elseif (!is_array($this->_tpl_vars['logrows'])) $this->_tpl_vars['logrows'] = (array)$this->_tpl_vars['logrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['logrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['logrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['logrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['logrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['logrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr valign="middle">
    <td align="center">'.date('Y-m-d',$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['logtime']).'</td>
    <td align="center">'.date('H:i:s',$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['logtime']).'</td>
    <td align="center"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['fromid']).'" target="_blank">'.$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['fromname'].'</a></td>
    <td align="center"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['toid']).'" target="_blank">'.$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['toname'].'</a></td>
    <td align="left">'.$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['reason'].'</td>
    <td align="left">'.$this->_tpl_vars['logrows'][$this->_tpl_vars['i']['key']]['chginfo'].'</td>
  </tr>
  ';
}
echo '
</table>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>
<br /><br />
';
?>