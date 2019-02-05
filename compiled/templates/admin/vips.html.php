<?php
echo '<table class="grid" width="100%" align="center">
  <caption>VIP等级管理</caption>
  <tr align="center">
    <th width="50">序号</th>
    <th width="150">VIP等级名称</th>
    <th width="140">最小消费数量</th>
	<th width="140">最大消费数量</th>
	 <th width="140">充值额外赠送虚拟币</th>
	<th width="140">充值额外赠送积分</th>
	<th width="140">订阅打折</th>
    <th width="100">操作</th>
  </tr>
  ';
if (empty($this->_tpl_vars['vips'])) $this->_tpl_vars['vips'] = array();
elseif (!is_array($this->_tpl_vars['vips'])) $this->_tpl_vars['vips'] = (array)$this->_tpl_vars['vips'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['vips']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['vips']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['vips']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['vips']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['vips']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td align="center">'.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['vipid'].'</td>
    <td align="center">'.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['caption'].'</td>
    <td align="left">'.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['minegold'].'</td>
	<td align="left">'.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['maxegold'].'</td>
	<td align="left">'.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['extraegold'].'%</td>
	<td align="left">'.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['extradiv'].'</td>
	<td align="left">'.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['viptype'].'</td>
    <td align="center"><a href="'.$this->_tpl_vars['jieqi_url'].'/admin/vips.php?id='.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['vipid'].'&action=edit">编辑</a><a href="javascript:if(confirm(\'确实要删除该头衔么？\')) document.location=\''.$this->_tpl_vars['jieqi_url'].'/admin/vips.php?id='.$this->_tpl_vars['vips'][$this->_tpl_vars['i']['key']]['vipid'].'&action=delete\';">删除</a></td>
  </tr>
  ';
}
echo '
  <tr>
    <td colspan="8" class="foot">&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">'.$this->_tpl_vars['form_addvip'].'</td>
  </tr>
</table>
';
?>