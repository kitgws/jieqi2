<?php
echo '
<table class="grid" width="100%" align="center">
    <tr>
      <td>
	  <form name="frmsearch" method="get" action="'.$this->_tpl_vars['obook_dynamic_url'].'/admin/mreport.php">
	  ������<input name="obookname" type="text" size="20" maxlength="60" class="text" value="'.$this->_tpl_vars['_request']['obookname'].'">
	  &nbsp; ���ߣ�<input name="author" type="text" size="20" maxlength="30" class="text" value="'.$this->_tpl_vars['_request']['author'].'">
	  &nbsp; �·ݣ�<input name="reportmonth" type="text" class="text" size="10" maxlength="10" value="'.$this->_tpl_vars['_request']['reportmonth'].'">
	  &nbsp; <input type="submit" name="Submit" value="��  ��" class="button">
	  �·ݸ�ʽ��201205
	  </form>
	  </td>
	  <form name="frmsearch" method="post" action="'.$this->_tpl_vars['obook_dynamic_url'].'/admin/mreport.php">
	  <td rowspan="2" align="right">
	  ѡ��ƽ̨��
	  <select name="sites">
	      ';
if (empty($this->_tpl_vars['customsites'])) $this->_tpl_vars['customsites'] = array();
elseif (!is_array($this->_tpl_vars['customsites'])) $this->_tpl_vars['customsites'] = (array)$this->_tpl_vars['customsites'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['customsites']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['customsites']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['customsites']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['customsites']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['customsites']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <option value="'.$this->_tpl_vars['i']['key'].'">'.$this->_tpl_vars['customsites'][$this->_tpl_vars['i']['key']]['name'].'</option>
  ';
}
echo '
	  </select>
	  ѡ�����£�
	  <select name="ryear">
	  ';
if (empty($this->_tpl_vars['ryearrows'])) $this->_tpl_vars['ryearrows'] = array();
elseif (!is_array($this->_tpl_vars['ryearrows'])) $this->_tpl_vars['ryearrows'] = (array)$this->_tpl_vars['ryearrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['ryearrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['ryearrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['ryearrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['ryearrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['ryearrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
	  <option value="'.$this->_tpl_vars['ryearrows'][$this->_tpl_vars['i']['key']].'"';
if($this->_tpl_vars['ryearrows'][$this->_tpl_vars['i']['key']] == $this->_tpl_vars['dyear']){
echo ' selected="selected"';
}
echo '>'.$this->_tpl_vars['ryearrows'][$this->_tpl_vars['i']['key']].'��</option>
	  ';
}
echo '
	  </select>
	  <select name="rmonth">
	  ';
if (empty($this->_tpl_vars['rmonthrows'])) $this->_tpl_vars['rmonthrows'] = array();
elseif (!is_array($this->_tpl_vars['rmonthrows'])) $this->_tpl_vars['rmonthrows'] = (array)$this->_tpl_vars['rmonthrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['rmonthrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['rmonthrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['rmonthrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['rmonthrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['rmonthrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
	  <option value="'.$this->_tpl_vars['rmonthrows'][$this->_tpl_vars['i']['key']].'"';
if($this->_tpl_vars['rmonthrows'][$this->_tpl_vars['i']['key']] == $this->_tpl_vars['dmonth']){
echo ' selected="selected"';
}
echo '>'.$this->_tpl_vars['rmonthrows'][$this->_tpl_vars['i']['key']].'��</option>
	  ';
}
echo '
	  </select>
	  <input type="hidden" name="act" value="make" />'.$this->_tpl_vars['jieqi_token_input'].'
	  <input type="submit" name="btnsearch" class="button" value="�����±���">
	  <p class="hot">ע�⣺ֻ�����ɱ���֮ǰ�ı���������ݽ϶࣬������ɺ������ĵȴ���</p>
	  </form>
	  </td>
    </tr>
	<tr>
		<td>
		�ܼ�¼����'.$this->_tpl_vars['mreportstat']['cot'].'�� �ܶ��ģ�'.intval($this->_tpl_vars['mreportstat']['sumegold']).'�� �ܴ��ͣ�'.intval($this->_tpl_vars['mreportstat']['sumtip']).'�� �����룺'.intval($this->_tpl_vars['mreportstat']['sumemoney']).'
		</td>
	</tr>
</table>


<table class="grid" width="100%" align="center">
<caption>
������ƽ̨����ͳ��
</caption>
  <tr align="center">
    <th width="15%">ͳ���·�</th>
    <th width="25%">����������</th>
    <th width="15%">����</th>
    <th width="15%">�ܶ���</th>
	<th width="15%">�ܴ���</th>
    <th width="15%">������</th>
  </tr>
  <tbody id="jieqi_page_contents">
  ';
if (empty($this->_tpl_vars['mreportrows'])) $this->_tpl_vars['mreportrows'] = array();
elseif (!is_array($this->_tpl_vars['mreportrows'])) $this->_tpl_vars['mreportrows'] = (array)$this->_tpl_vars['mreportrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['mreportrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['mreportrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['mreportrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['mreportrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['mreportrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td align="center">'.$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['reportmonth'].'</td>
    <td><a href="'.jieqi_geturl('article','article',$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['articleid'],'info').'" target="_blank">'.$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['obookname'].'</a></td>
    <td>';
if($this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['authorid'] == 0){
echo $this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['author'];
}else{
echo '<a href="'.$this->_tpl_vars['jieqi_url'].'/admin/personmanage.php?id='.$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['authorid'].'" target="_blank">'.$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['author'].'</a>';
}
echo '</td>
    <td align="center">'.$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['sumegold'].'</td>
	<td align="center">'.$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['sumtip'].'</td>
    <td align="center">'.$this->_tpl_vars['mreportrows'][$this->_tpl_vars['i']['key']]['sumemoney'].'</td>
  </tr>
  ';
}
echo '
  </tbody>
</table>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>';
?>