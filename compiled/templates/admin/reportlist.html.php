<?php
echo '<script type="text/javascript">
//ɾ��
function act_delete(url){
	var o = getTarget();
	var param = {
		method: \'POST\', 
		onReturn: function(){
			$_(o.parentNode.parentNode).remove();
		}
	}
	if(confirm(\'ȷʵҪɾ���ü�¼ô��\')) Ajax.Tip(url, param);
	return false;
}
</script>
<form name="frmreportlist" method="post" action="'.$this->_tpl_vars['jieqi_url'].'/admin/reportlist.php">
<table class="grid" width="100%" align="center">
    <tr>
        <td align="right">�ؼ��֣�
            <input name="keyword" type="text" class="text" id="keyword" size="20" maxlength="50">
			<input name="keytype" type="radio" value="reportname" checked="checked" />�ύ��
			<input name="keytype" type="radio" value="authname" />������
			<input name="keytype" type="radio" value="reporttitle" />����
            <input type="submit" name="Submit" value="�� ��" class="button">&nbsp;&nbsp;<a href="'.$this->_tpl_vars['jieqi_url'].'/admin/reportlist.php">��ʾȫ��</a>&nbsp;&nbsp;</td>
    </tr>
</table>
</form>
<br />
<form action="'.$this->_tpl_vars['jieqi_url'].'/admin/reportlist.php" method="post" name="checkform" id="checkform">
<table class="grid" width="100%" align="center">
<caption>
�û��ύ��Ϣ�б�
</caption>
  <tr>
    <th width="5%"><input type="checkbox" id="checkall" name="checkall" value="checkall" onclick="for (var i=0;i<this.form.elements.length;i++){ if (this.form.elements[i].name != \'checkkall\') this.form.elements[i].checked = this.form.checkall.checked; }"></th>
    <th width="13%">�ύ��</th>
    <th width="15%">��������</th>
    <th width="40%">����</th>
    <th width="10%">����</th>
	<th width="5%">״̬</th>
    <th width="12%">����</th>
  </tr>
';
if (empty($this->_tpl_vars['reportrows'])) $this->_tpl_vars['reportrows'] = array();
elseif (!is_array($this->_tpl_vars['reportrows'])) $this->_tpl_vars['reportrows'] = (array)$this->_tpl_vars['reportrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['reportrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['reportrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['reportrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['reportrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['reportrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td align="center" valign="top"><input type="checkbox" id="checkid[]" name="checkid[]" value="'.$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reportid'].'"></td>
    <td valign="top"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reportuid']).'" target="_blank">'.$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reportname'].'</a></td>
    <td valign="top">'.$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['typename'].'</td>
    <td valign="top"><a href="'.$this->_tpl_vars['jieqi_url'].'/admin/reportdetail.php?id='.$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reportid'].'">'.$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reporttitle'].'</a>
	</td>
    <td valign="top" align="center">'.date('Y-m-d',$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reporttime']).'</td>
	<td valign="top" align="center">';
if($this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['authflag'] == 0){
echo '<span class="hot">δ��</span>';
}else{
echo '����';
}
echo '</td>
    <td valign="top" align="center"><a id="act_delete_'.$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reportid'].'" href="javascript:;" onclick="act_delete(\''.$this->_tpl_vars['jieqi_url'].'/admin/reportlist.php?checkid[]='.$this->_tpl_vars['reportrows'][$this->_tpl_vars['i']['key']]['reportid'].'&act=delete'.$this->_tpl_vars['jieqi_token_url'].'\');">ɾ��</a></td>
  </tr>
';
}
echo '
  <tr>
    <td colspan="7" class="foot">
	<input type="button" name="allcheck" value="ȫ��ѡ��" class="button" onclick="for (var i=0;i<this.form.elements.length;i++){ this.form.elements[i].checked = true; }">&nbsp;&nbsp;
	<input type="button" name="nocheck" value="ȫ��ȡ��" class="button" onclick="for (var i=0;i<this.form.elements.length;i++){ this.form.elements[i].checked = false; }">&nbsp;&nbsp;
	<input type="button" name="delcheck" value="ɾ��ѡ�м�¼" class="button" onclick="if(confirm(\'ȷʵҪɾ��ѡ�м�¼ô��\')) this.form.submit();">&nbsp;&nbsp;
	<input name="act" type="hidden" value="delete">'.$this->_tpl_vars['jieqi_token_input'].'
	</td>
  </tr>
</table>
</form>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>

';
?>