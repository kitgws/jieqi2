<?php
echo '<div style="padding-left:10px">
';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo '

<form name="frmlogin" method="post" action="'.$this->_tpl_vars['jieqi_user_url'].'/login.php">
<ul class="ulrow">
<li>�û�����<input type="text" class="text" size="10" maxlength="30" style="width:80px" name="username" onKeyPress="javascript: if (event.keyCode==32) return false;" ></li>
<li>�ܡ��룺<input type="password" class="text" size="10" maxlength="30" style="width:80px" name="password"></li>
';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
<li><div>��֤�룺<input type="text" class="text" size="4" maxlength="8" style="width:40px;" name="checkcode" onfocus="if($_(\'login_imgccode\').style.display == \'none\'){$_(\'login_imgccode\').src = \''.$this->_tpl_vars['jieqi_url'].'/checkcode.php\';$_(\'login_imgccode\').style.display = \'\';}" title="�����ʾ��֤��"><img id="login_imgccode" src="" style="cursor:pointer;vertical-align:middle;margin-left:3px;display:none;" onclick="this.src=\''.$this->_tpl_vars['jieqi_url'].'/checkcode.php?rand=\'+Math.random();" title="���ˢ����֤��"></div></li>
';
}
echo '
<li>��Ч�ڣ�<select name="usecookie" class="select">
              <option value="0">���������</option>
              <option value="86400">����һ��</option>
			  <option value="2592000">����һ��</option>
			  <option value="315360000">����һ��</option>
            </select></li>
<li><input type="submit" class="button" value="��¼" name="submit">
<input type="hidden" name="act" value="login">
<input type="hidden" name="jumpreferer" value="1"></li>
<li><a href="'.$this->_tpl_vars['jieqi_user_url'].'/register.php">���û�ע��</a> &nbsp;&nbsp;<a href="'.$this->_tpl_vars['jieqi_url'].'/getpass.php">�������룿</a></li>
</ul>
</form>

';
}else{
echo '

<ul class="ulrow">
  <li style="float:left; margin-top:14px;"><img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['jieqi_userid'],'s',$this->_tpl_vars['jieqi_avatar']).'" class="avatars" alt="'.$this->_tpl_vars['jieqi_username'].'"></li>
  <li><strong>'.$this->_tpl_vars['jieqi_username'].'</strong></li>
  ';
if($this->_tpl_vars['jieqi_modules']['badge']['publish'] > 0){
echo '
    ';
if($this->_tpl_vars['jieqi_group_imageurl'] != ""){
echo '<li><img src="'.$this->_tpl_vars['jieqi_group_imageurl'].'" border="0" title="'.$this->_tpl_vars['jieqi_groupname'].'"></li>';
}
echo '
    ';
if($this->_tpl_vars['jieqi_honor_imageurl'] != ""){
echo '<li><img src="'.$this->_tpl_vars['jieqi_honor_imageurl'].'" border="0" title="'.$this->_tpl_vars['jieqi_honor'].'"></li>';
}
echo '
    ';
if(count($this->_tpl_vars['jieqi_badgerows']) > 0){
echo '<li>';
}
echo '
    ';
if (empty($this->_tpl_vars['jieqi_badgerows'])) $this->_tpl_vars['jieqi_badgerows'] = array();
elseif (!is_array($this->_tpl_vars['jieqi_badgerows'])) $this->_tpl_vars['jieqi_badgerows'] = (array)$this->_tpl_vars['jieqi_badgerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['jieqi_badgerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['jieqi_badgerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['jieqi_badgerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['jieqi_badgerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['jieqi_badgerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
      <img src="'.$this->_tpl_vars['jieqi_badgerows'][$this->_tpl_vars['i']['key']]['imageurl'].'" border="0" alt="'.$this->_tpl_vars['jieqi_badgerows'][$this->_tpl_vars['i']['key']]['caption'].'">
    ';
}
echo '
    ';
if(count($this->_tpl_vars['jieqi_badgerows']) > 0){
echo '</li>';
}
echo '
  ';
}else{
echo '
    <li>'.$this->_tpl_vars['jieqi_groupname'].'</li>
    <li>'.$this->_tpl_vars['jieqi_honor'].'</li>
  ';
}
echo '
</ul>
<ul class="ulcenter">
  <li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_url'].'/userdetail.php" class="userinfo">�ҵĵ���</a></li>
  <li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_url'].'/message.php?box=inbox" class="message">�� �� Ϣ</a></li>
  <li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_url'].'/myfriends.php" class="friend">�ҵĺ���</a></li>
  <li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_url'].'/ptopics.php?oid=self"  class="parlor">�� �� ��</a></li>
  <li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/bookcase.php" class="bookcase">�ҵ����</a></li>
  ';
if($this->_tpl_vars['jieqi_modules']['obook']['publish']==1){
echo '<li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_modules']['obook']['url'].'/buylist.php" class="buylog">���ļ�¼</a></li>';
}
echo '
  ';
if($this->_tpl_vars['jieqi_modules']['pay']['publish']==1){
echo '<li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/buyegold.php" class="buyegold">�ʻ���ֵ</a></li>';
}
echo '
  <li style="width:50%;float:left;"><a href="'.$this->_tpl_vars['jieqi_user_url'].'/logout.php" class="logout">�˳���¼</a></li>
</ul>
<div class="cb"></div>

';
}
echo '
</div>';
?>