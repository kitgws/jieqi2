<?php
echo '<form name="frmsearch" method="get" action="'.$this->_tpl_vars['url_forum'].'">
<table class="grid" width="100%" align="center">
    <tr>
        <td>�ؼ��֣�
            <input name="keyword" type="text" id="keyword" class="text" size="15" maxlength="50"> <input name="keytype" type="radio" class="radio" value="0" checked="checked">��������
            <input type="radio" name="keytype" class="radio" value="1">�������� 
		    <input type="radio" name="keytype" class="radio" value="2">���ӷ�������
            <input type="submit" name="btnsearch" class="button" value="�� ��">
			&nbsp;&nbsp;&nbsp;<a href="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/forumdels.php" class="radio">ȫ������</a>
            &nbsp;&nbsp;<small style="color:red;font-size:12px;">ע��</small>�����ӷ������ڸ�ʽ��2009-09-15
        </td>
		<td></td>
    </tr>
</table>
</form>
<br />
<form name="frmsearch" method="get" action="'.$this->_tpl_vars['url_forum'].'">
<table class="grid" width="100%" align="center">
<caption>'.$this->_tpl_vars['forumtitle'].'</caption>
  <tr align="center">
    <th width="5%"><input type="checkbox" id="checkall" name="checkall" value="checkall" onclick="for (var i=0;i<this.form.elements.length;i++){ if (this.form.elements[i].name != \'checkkall\') this.form.elements[i].checked = form.checkall.checked; }"></th>
    <th width="42%">��������</th>
    <th width="15%">��������</th>
    <th width="10%">�������</th>
	<th width="10%">�ظ�����</th>
    <th width="18%">����ʱ��</th>
  </tr>
  ';
if (empty($this->_tpl_vars['forumrows'])) $this->_tpl_vars['forumrows'] = array();
elseif (!is_array($this->_tpl_vars['forumrows'])) $this->_tpl_vars['forumrows'] = (array)$this->_tpl_vars['forumrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['forumrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['forumrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['forumrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['forumrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['forumrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td align="center"><input type="checkbox" id="checkid[]" name="checkid[]" value="'.$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['topicid'].'"></td>
    <td align="left"><a href="'.jieqi_geturl('forum','showtopic',$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['topicid'],'1',$this->_tpl_vars['page']).'" 
	target="_blank">'.$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['title'].'</a></td>
	<td align="left"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['posterid']).'" target="_blank">'.$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['poster'].' </a></td>
    <td align="center">'.$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['views'].'</td>
	<td align="center">'.$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['replies'].'</td>
    <td align="center">'.date('Y-m-d H:i:s',$this->_tpl_vars['forumrows'][$this->_tpl_vars['i']['key']]['posttime']).'</td>
  </tr>
  ';
}
echo '
  <tr>
    <td colspan="6" align="left">
		<input type="button" name="allcheck" value="ȫ��ѡ��" class="button" onclick="for (var i=0;i<this.form.elements.length;i++){ if (this.form.elements[i].type == \'checkbox\') this.form.elements[i].checked = true; }" />
		<input type="button" name="nocheck" value="ȫ��ȡ��" class="button" onclick="for (var i=0;i<this.form.elements.length;i++){ if (this.form.elements[i].type == \'checkbox\') this.form.elements[i].checked = false; }" />
		<input type="submit" name="delcheck" value="����ɾ��ѡ�м�¼" class="button" onclick="if(confirm(\'ȷʵҪɾ��ѡ�м�¼ô��\')){ this.form.act.value=\'1\';this.form.submit();}else{return false;}" />
		<input name="keywordurl" type="hidden" id="keywordurl" value="'.$this->_tpl_vars['keywordurl'].'">
		<input name="keytypeurl" type="hidden" id="keytypeurl" value="'.$this->_tpl_vars['keytypeurl'].'">
		<input name="act" type="hidden" id="act" value="0" />
	</td>
  </tr>
</table>
</form>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>
';
?>