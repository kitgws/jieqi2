<?php
echo '<br />
<table class="grid" width="600" align="center">
  <caption>
  <a href="javascript:;" onclick="openDialog(\''.$this->_tpl_vars['jieqi_url'].'/newmessage.php?receiver='.urlencode($this->_tpl_vars['name']).'&ajax_gets=jieqi_contents\', false);">������Ϣ</a> | <a id="addfriends" href="javascript:;" onclick="Ajax.Tip(\''.$this->_tpl_vars['jieqi_url'].'/addfriends.php?id='.$this->_tpl_vars['uid'].'&act=add'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">��Ϊ����</a> | <a href="'.$this->_tpl_vars['jieqi_url'].'/ptopics.php?oid='.$this->_tpl_vars['uid'].'">�����</a>
  </caption>
  <tr>
    <th colspan="3">������Ϣ</th>
  </tr>
  <tr align="left">
    <td width="100" class="tdl">�û�ID��</td>
    <td width="280" class="tdr">'.$this->_tpl_vars['uid'].'</td>
    <td width="214" rowspan="7" class="tdr" align="center">
	<img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['uid'],'l',$this->_tpl_vars['avatar']).'" class="avatar" alt="ͷ��"><br />
	';
if($this->_tpl_vars['jieqi_modules']['badge']['publish'] > 0){
echo '
	<br />
    ';
if($this->_tpl_vars['url_group'] != ""){
echo '<img src="'.$this->_tpl_vars['url_group'].'" border="0" title="'.$this->_tpl_vars['jieqi_groupname'].'"><br />';
}
echo '
	';
if($this->_tpl_vars['url_honor'] != ""){
echo '<img src="'.$this->_tpl_vars['url_honor'].'" border="0" title="'.$this->_tpl_vars['jieqi_honor'].'"><br />';
}
echo '
    ';
if (empty($this->_tpl_vars['badgerows'])) $this->_tpl_vars['badgerows'] = array();
elseif (!is_array($this->_tpl_vars['badgerows'])) $this->_tpl_vars['badgerows'] = (array)$this->_tpl_vars['badgerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['badgerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['badgerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['badgerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['badgerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['badgerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '<img src="'.$this->_tpl_vars['badgerows'][$this->_tpl_vars['i']['key']]['imageurl'].'" border="0" title="'.$this->_tpl_vars['badgerows'][$this->_tpl_vars['i']['key']]['caption'].'">';
}
echo '
    ';
}
echo '
	</td>
  </tr>
  <tr align="left">
    <td class="tdl">�û�����</td>
    <td class="tdr">'.$this->_tpl_vars['uname'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">�ǳƣ�</td>
    <td class="tdr">'.$this->_tpl_vars['name'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">�ȼ���</td>
    <td class="tdr">'.$this->_tpl_vars['group'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">ͷ�Σ�</td>
    <td class="tdr">'.$this->_tpl_vars['honor'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">�Ա�</td>
    <td class="tdr">'.$this->_tpl_vars['sex'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">��վ/΢����</td>
    <td class="tdr"><a href="'.$this->_tpl_vars['url'].'" target="_blank">'.$this->_tpl_vars['url'].'</a></td>
  </tr>
  ';
if($this->_tpl_vars['ismaster'] == 1){
echo '
  <tr align="left">
    <td class="tdl">Email��</td>
    <td colspan="2" class="tdr"><a href="mailto:'.$this->_tpl_vars['email'].'">'.$this->_tpl_vars['email'].'</a></td>
  </tr>
  <tr align="left">
    <td class="tdl">QQ��</td>
    <td colspan="2" class="tdr">'.$this->_tpl_vars['qq'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">MSN��</td>
    <td colspan="2" class="tdr"><a href="mailto:'.$this->_tpl_vars['msn'].'">'.$this->_tpl_vars['msn'].'</a></td>
  </tr>
  ';
}
echo '
  <tr>
    <th colspan="3">�������</th>
  </tr>
  <tr align="left">
    <td class="tdl">ע�����ڣ�</td>
    <td colspan="2" class="tdr">'.date('Y-m-d',$this->_tpl_vars['regdate']).'</td>
  </tr>
  <tr align="left">
    <td class="tdl">����ֵ��</td>
    <td colspan="2" class="tdr">'.$this->_tpl_vars['credit'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">����ֵ��</td>
    <td colspan="2" class="tdr">'.$this->_tpl_vars['experience'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">���л��֣�</td>
    <td colspan="2" class="tdr">'.$this->_tpl_vars['score'].'</td>
  </tr>
  ';
if($this->_tpl_vars['ismaster'] == 1){
echo '
  <tr>
    <th colspan="3">VIP��Ϣ</th>
  </tr>
  <tr align="left">
    <td class="tdl">VIP���ͣ�</td>
    <td colspan="2" class="tdr">';
if($this->_tpl_vars['isvip'] <= 0){
echo '��vip��Ա';
}else{
echo 'VIP��Ա';
}
echo '</td>
  </tr>
  <tr align="left">
    <td class="tdl">'.$this->_tpl_vars['egoldname'].'</td>
    <td colspan="2" class="tdr">'.$this->_tpl_vars['egold'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">����¼��</td>
    <td colspan="2" class="tdr">'.date('Y-m-d H:i',$this->_tpl_vars['lastlogin']).' (IP��';
if($this->_tpl_vars['setting']['lastip'] != ''){
echo $this->_tpl_vars['setting']['lastip'];
}else{
echo $this->_tpl_vars['setting']['regip'];
}
echo ')</td>
  </tr>
  ';
}
echo '
  <tr>
    <th colspan="3">������Ϣ</th>
  </tr>
  <tr align="left">
    <td class="tdl">�û�ǩ����</td>
    <td colspan="2" class="tdr">'.$this->_tpl_vars['sign'].'</td>
  </tr>
  <tr align="left">
    <td class="tdl">���˼�飺</td>
    <td colspan="2" class="tdr">'.$this->_tpl_vars['intro'].'</td>
  </tr>
</table>
<br />
';
?>