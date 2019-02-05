<?php
if (empty($this->_tpl_vars['creditrows'])) $this->_tpl_vars['creditrows'] = array();
elseif (!is_array($this->_tpl_vars['creditrows'])) $this->_tpl_vars['creditrows'] = (array)$this->_tpl_vars['creditrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['creditrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['creditrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['creditrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['creditrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['creditrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['i']['order'] == 1){
echo '  
<li>
					<a href="/modules/article/donate.php?id='.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['articleid'].'" class="touxiang">
					  <div class="slmsimg"><img src="'.$this->_tpl_vars['jieqi_url'].'/avatar.php?uid='.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['uid'].'&size=s" /><i class="touxie s1"></i></div>
					  <p class="mingzi">'.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['uname'].'</p>
					  <p class="shuliang">'.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['point'].' È±“</p>
					</a>
				  </li>
';
}elseif($this->_tpl_vars['i']['order'] == 2){
echo '
			      <li>
					<a href="/modules/article/donate.php?id='.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['articleid'].'" class="touxiang">
					 <div class="slmsimg"><img src="'.$this->_tpl_vars['jieqi_url'].'/avatar.php?uid='.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['uid'].'&size=s" /><i class="touxie s2"></i></div>
					  <p class="mingzi">'.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['uname'].'</p>
					  <p class="shuliang">'.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['point'].' È±“</p>
					</a>
				  </li>
';
}elseif($this->_tpl_vars['i']['order'] == 3){
echo '
				  <li>
					<a href="/modules/article/donate.php?id='.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['articleid'].'" class="touxiang">
					 <div class="slmsimg"><img src="'.$this->_tpl_vars['jieqi_url'].'/avatar.php?uid='.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['uid'].'&size=s" /><i class="touxie s3"></i></div>
					  <p class="mingzi">'.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['uname'].'</p>
					  <p class="shuliang">'.$this->_tpl_vars['creditrows'][$this->_tpl_vars['i']['key']]['point'].' È±“</p>
					</a>
				  </li>
';
}
}

?>