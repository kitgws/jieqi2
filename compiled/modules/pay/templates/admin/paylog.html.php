<?php
echo '<form name="frmsearch" method="get" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/admin/paylog.php">
<table class="grid" width="100%" align="center">
    <tr>
        <td>������<select class="select"  size="1" name="keytype">
		<option value="buyname"';
if($this->_tpl_vars['_request']['keytype'] == 'buyname'){
echo ' selected="selected"';
}
echo '>�û���</option>
		<option value="payid"';
if($this->_tpl_vars['_request']['keytype'] == 'payid'){
echo ' selected="selected"';
}
echo '>�������</option>
		</select>
		�ؼ��֣� <input name="keyword" type="text" class="text" size="15" maxlength="50" value="'.$this->_tpl_vars['_request']['keyword'].'">
		״̬��<select class="select"  size="1" name="payflag">
		<option value="all"';
if($this->_tpl_vars['_request']['payflag'] == 'all'){
echo ' selected="selected"';
}
echo '>ȫ��</option>
		<option value="success"';
if($this->_tpl_vars['_request']['payflag'] == 'success'){
echo ' selected="selected"';
}
echo '>�ѳɹ�</option>
		<option value="failure"';
if($this->_tpl_vars['_request']['payflag'] == 'failure'){
echo ' selected="selected"';
}
echo '>δ�ɹ�</option>
		</select>
		�������ڣ�<input name="datestart" type="text" class="text" size="10" maxlength="10" value="'.$this->_tpl_vars['_request']['datestart'].'">-<input name="dateend" type="text" class="text" size="10" maxlength="10" value="'.$this->_tpl_vars['_request']['dateend'].'">
        <input type="submit" name="btnsearch" class="button" value="�� ��">      
		���ڸ�ʽ��2012-05-06
        </td>
    </tr>
	<tr>
		<td>
		�ܼ�¼����'.$this->_tpl_vars['paylogstat']['cot'].'�� ��'.$this->_tpl_vars['egoldname'].'��'.$this->_tpl_vars['paylogstat']['sumegold'].'
		</td>
	</tr>
</table>
</form>
<table class="grid" width="100%" align="center" style="margin-top:10px;">
  <caption>���߳�ֵ��¼</caption>
  <tr align="center" valign="middle">
    <th width="10%">���</th>
    <th width="15%">����ʱ��</th>
    <th width="15%">�û���</th>
    <th width="10%">�������</th>
    <th width="15%">֧����ʽ</th>
    <th width="15%">����״̬</th>
    <th width="20%">����</th>
  </tr>
  ';
if (empty($this->_tpl_vars['paylogrows'])) $this->_tpl_vars['paylogrows'] = array();
elseif (!is_array($this->_tpl_vars['paylogrows'])) $this->_tpl_vars['paylogrows'] = (array)$this->_tpl_vars['paylogrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['paylogrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['paylogrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['paylogrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['paylogrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['paylogrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr valign="middle">
    <td align="center">'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['payid'].'</td>
    <td align="center">'.date('Y-m-d H:i:s',$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['buytime']).'</td>
    <td align="center"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['buyid']).'" target="_blank">'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['buyname'].'</a></td>
    <td align="center">'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['egold'].'</td>
    <td align="center">'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['paytype'].'</td>
    <td align="center">'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['payflag'].'</td>
    <td align="center">
	';
if($this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['payflag_n'] == 0){
echo '
	<a id="act_confirm_'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['payid'].'" href="javascript:;" onclick="if(confirm(\'ȷʵҪ�ֹ�ȷ�ϸö���ô��\')) Ajax.Tip(\''.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/admin/paylog.php?id='.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['payid'].'&act=confirm'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">�ֹ�����</a> | 
	<a id="act_del_'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['payid'].'" href="javascript:;" onclick="if(confirm(\'ȷʵҪɾ��ô��\')) Ajax.Tip(\''.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/admin/paylog.php?id='.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['payid'].'&act=del'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">ɾ��</a>
	';
}else{
echo '
	'.$this->_tpl_vars['paylogrows'][$this->_tpl_vars['i']['key']]['note'].'
	';
}
echo '
	</td>
  </tr>
  ';
}
echo '
</table>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>
';
?>