<?php
echo '<form action="'.$this->_tpl_vars['jieqi_url'].'/admin/blockfiles.php?module='.urlencode($this->_tpl_vars['module']).'&filename='.urlencode($this->_tpl_vars['filename']).'" method="post">
<table class="grid" width="95%" align="center">
  <caption>
  ��'.$this->_tpl_vars['blockfile']['caption'].'���������ù���  &nbsp; [<a href="'.$this->_tpl_vars['jieqi_url'].'/admin/blockfiles.php?act=files">�������������ļ��б�</a>]
  </caption>
  <tr>
    <td align="center">��������</td>
	<td align="center">����ģ��</td>
	<td align="center">��ʾλ��</td>
	<td align="center">���</td>
	<td align="center">�������</td>
    <td align="center">����</td>
  </tr>
';
if (empty($this->_tpl_vars['blocks'])) $this->_tpl_vars['blocks'] = array();
elseif (!is_array($this->_tpl_vars['blocks'])) $this->_tpl_vars['blocks'] = (array)$this->_tpl_vars['blocks'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['blocks']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['blocks']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['blocks']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['blocks']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['blocks']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td align="center">'.$this->_tpl_vars['blocks'][$this->_tpl_vars['i']['key']]['blockname'].'</td>
	<td align="center">'.$this->_tpl_vars['blocks'][$this->_tpl_vars['i']['key']]['modname'].'</td>
	<td align="center">'.$this->_tpl_vars['blocks'][$this->_tpl_vars['i']['key']]['sidename'].'</td>
<td align="center"><input class="text" type="text" name="key['.$this->_tpl_vars['i']['key'].']" id="key['.$this->_tpl_vars['i']['key'].']" size="4" value="'.$this->_tpl_vars['i']['key'].'" maxlength="8"></td>
<td align="center">';
if($this->_tpl_vars['blocks'][$this->_tpl_vars['i']['key']]['hasvars'] > 0){
echo '<input class="text" type="text" name="vars['.$this->_tpl_vars['i']['key'].']" id="vars['.$this->_tpl_vars['i']['key'].']" value="'.$this->_tpl_vars['blocks'][$this->_tpl_vars['i']['key']]['vars'].'" size="30">';
}else{
echo '�޲���';
}
echo '</td>
    <td align="center"> <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/blockfiles.php?act=edit&module='.urlencode($this->_tpl_vars['module']).'&filename='.urlencode($this->_tpl_vars['filename']).'&key='.urlencode($this->_tpl_vars['i']['key']).'">�޸Ĳ���</a> | <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/blockupdate.php?module='.urlencode($this->_tpl_vars['module']).'&filename='.urlencode($this->_tpl_vars['filename']).'&key='.$this->_tpl_vars['i']['key'].'" target="_blank">ˢ�»���</a></td>
  </tr>
';
}
echo '
 <tr>
    <td colspan="8" align="center">
	  <input type="hidden" name="act" value="updatelist" />'.$this->_tpl_vars['jieqi_token_input'].'
      <input class="button" type="submit" name="Submit" value="�������²�������">
	  <p>˵�������Ϊ���������������ͬ���鲻���ظ���ģ���е���һ������������ &#123;&#63;$jieqi_pageblocks[\'XXX\'][\'content\']&#63;&#125; ����������� &#123;&#63;$jieqi_pageblocks[\'XXX\'][\'title\']&#63;&#125;�������XXX���ǡ���š���ֵ��</p>
    </td>
  </tr>
</table>
</form>';
?>