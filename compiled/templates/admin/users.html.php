<?php
echo '<form name="frmquery" method="post" action="'.$this->_tpl_vars['jieqi_url'].'/admin/users.php">
<table class="grid" width="100%" align="center">
  <tr align="center">
	<td>
	<a href="'.$this->_tpl_vars['jieqi_url'].'/admin/users.php">全部会员</a>';
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
	echo ' | <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/users.php?groupid='.$this->_tpl_vars['grouprows'][$this->_tpl_vars['i']['key']]['groupid'].'">'.$this->_tpl_vars['grouprows'][$this->_tpl_vars['i']['key']]['groupname'].'</a>';
}
echo '
	 | <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/users.php?isvip=1" class="hot">VIP会员</a>
	 | <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/users.php?monthly=1" class="hot">包月会员</a>
	</td>
  </tr>
  <tr>
    <td align="right">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="hide">
      <tr>
        <td width="30%">会员数：'.$this->_tpl_vars['rowcount'].'</td>
        <td width="70%" align="right">
		关键字：
        <input name="keyword" type="text" class="text" id="keyword" size="20" maxlength="50">
		<input name="keytype" type="radio" value="name" checked="checked" />昵称 
		<input name="keytype" type="radio" value="uname" />用户名 
		<input name="keytype" type="radio" value="email" />Email 
		&nbsp;&nbsp;
        <input type="submit" name="Submit" value="搜 索" class="button">&nbsp;&nbsp;
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</form>
<br />
<form action="" method="post" name="checkform" id="checkform">
<table class="grid" width="100%" align="center">
<caption>用户列表</caption>
  <tr align="center" class="head">
    <td width="15%">昵称(用户名)</td>
	<td width="14%">Email</td>
	<td width="12%">最后登录</td>
	<td width="10%">最后IP</td>
    <td width="7%">等级</td>
    <td width="7%">积分</td>
    <td width="7%">'.$this->_tpl_vars['egoldname'].'</td>
	<td width="8%">VIP状态</td>
    <td width="20%">操作</td>
  </tr>
  ';
if (empty($this->_tpl_vars['userrows'])) $this->_tpl_vars['userrows'] = array();
elseif (!is_array($this->_tpl_vars['userrows'])) $this->_tpl_vars['userrows'] = (array)$this->_tpl_vars['userrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['userrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['userrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['userrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['userrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['userrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['uid'],'info').'" target="_blank">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['name'].' <span class="gray">('.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['uname'].')</span></a></td>
	<td><a href="mailto:'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['email'].'">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['email'].'</a></td>
	<td align="center">'.date('Y-m-d H:i',$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['lastlogin']).'</td>
    <td>';
if($this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['setting']['lastip'] != ''){
echo $this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['setting']['lastip'];
}else{
echo $this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['setting']['regip'];
}
echo '</td>
    <td>'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['group'].'</td>
    <td align="center">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['score'].'</td>
    <td align="center">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['egold'].'</td>
	<td align="center">';
if($this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['monthly'] > 0){
echo '包月:'.date('Y-m-d',$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['overtime']);
}elseif($this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['isvip'] > 0){
echo 'VIP会员';
}else{
echo '免费会员';
}
echo '</td>
    <td align="center"><a href="'.$this->_tpl_vars['jieqi_url'].'/admin/usermanage.php?id='.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['uid'].'">管理会员</a> | <a href="'.$this->_tpl_vars['jieqi_url'].'/admin/personmanage.php?id='.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['uid'].'">联系信息</a>';
if($this->_tpl_vars['jieqi_modules']['pay']['publish'] > 0){
echo ' | <a href="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/admin/changeegold.php?uid='.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['uid'].'">手工充值</a>';
}
echo '</td>
  </tr>
  ';
}
echo '
</table>
</form>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>

';
?>