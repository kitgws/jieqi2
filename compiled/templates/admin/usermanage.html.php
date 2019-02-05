<?php
echo '<script type="text/javascript">
function jieqiFormValidate_usermanage(){
  if(document.usermanage.groupid.value == ""){
    alert("请输入等级");
    document.usermanage.groupid.focus();
    return false;
  }
}
</script>
<form name="usermanage" id="usermanage" action="'.$this->_tpl_vars['jieqi_url'].'/admin/usermanage.php?do=submit" method="post" onsubmit="return jieqiFormValidate_usermanage();">
<table width="100%" class="grid" cellspacing="1" align="center">
<caption>用户管理</caption>
<tr valign="middle" align="left">
  <td class="tdl" width="25%">用户名：</td>
  <td class="tdr" width="75%">'.$this->_tpl_vars['username'].' ('.$this->_tpl_vars['nickname'].')</td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">密码：</td>
  <td class="tdr"><input type="password" class="text" name="pass" size="25" value="" /> <span class="hot">（不修改密码请留空）</span></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">确认密码：<span class="hot">(必填)</span></td>
  <td class="tdr"><input type="password" class="text" name="repass" size="25" value="" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">等级：</td>
  <td class="tdr">
  <select class="select"  size="1" name="groupid">
  ';
if (empty($this->_tpl_vars['grouprows'])) $this->_tpl_vars['grouprows'] = array();
elseif (!is_array($this->_tpl_vars['grouprows'])) $this->_tpl_vars['grouprows'] = (array)$this->_tpl_vars['grouprows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['grouprows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['grouprows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['grouprows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['grouprows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['grouprows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <option value="'.$this->_tpl_vars['i']['key'].'"';
if($this->_tpl_vars['i']['key'] == $this->_tpl_vars['uservals']['groupid']){
echo ' selected="selected"';
}
echo '>'.$this->_tpl_vars['grouprows'][$this->_tpl_vars['i']['key']].'</option>
  ';
}
echo '
  </select>
  </td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">经验值：</td>
  <td class="tdr"><input type="text" class="text" name="experience" size="25" value="'.$this->_tpl_vars['uservals']['experience'].'" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">积分：</td>
  <td class="tdr"><input type="text" class="text" name="score" size="25" value="'.$this->_tpl_vars['uservals']['score'].'" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">月票：</td>
  <td class="tdr"><input type="text" class="text" name="vipvote" size="25" value="'.$this->_tpl_vars['uservals']['setting']['gift']['vipvote'].'" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">鲜花：</td>
  <td class="tdr"><input type="text" class="text" name="flower" size="25" value="'.$this->_tpl_vars['uservals']['setting']['gift']['flower'].'" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">鸡蛋：</td>
  <td class="tdr"><input type="text" class="text" name="egg" size="25" value="'.$this->_tpl_vars['uservals']['setting']['gift']['egg'].'" /></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">VIP类型：</td>
  <td class="tdr">
  <input type="radio" class="radio" name="isvip" value="0"';
if($this->_tpl_vars['uservals']['isvip'] == 0){
echo ' checked="checked"';
}
echo ' />非VIP会员
  <input type="radio" class="radio" name="isvip" value="1"';
if($this->_tpl_vars['uservals']['isvip'] > 0){
echo ' checked="checked"';
}
echo ' />VIP会员
  </td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">'.$this->_tpl_vars['egoldname'].'：</td>
  <td class="tdr">'.$this->_tpl_vars['uservals']['egold'];
if($this->_tpl_vars['jieqi_modules']['pay']['publish'] > 0){
echo ' &nbsp; [<a href="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/admin/changeegold.php?uid='.$this->_tpl_vars['uservals']['uid'].'">手工充值</a>]';
}
echo '</td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">删除用户：</td>
  <td class="tdr"><input type="radio" class="radio" name="deluser" value="0" checked="checked" />否
<input type="radio" class="radio" name="deluser" value="1" />是
</td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">修改理由：</td>
  <td class="tdr"><textarea class="textarea" name="reason" rows="6" cols="60"></textarea></td>
</tr>
<tr valign="middle" align="left">
  <td class="tdl">&nbsp;
  <input type="hidden" name="act" value="update" />'.$this->_tpl_vars['jieqi_token_input'].'
  <input type="hidden" name="id" id="id" value="'.$this->_tpl_vars['uservals']['uid'].'" />
  </td>
  <td class="tdr"><input type="submit" class="button" name="submit" value="保存修改" /></td>
</tr>
</table>
</form>';
?>