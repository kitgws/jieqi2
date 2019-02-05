<?php
if (empty($this->_tpl_vars['actlogrows'])) $this->_tpl_vars['actlogrows'] = array();
elseif (!is_array($this->_tpl_vars['actlogrows'])) $this->_tpl_vars['actlogrows'] = (array)$this->_tpl_vars['actlogrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['actlogrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['actlogrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['actlogrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['actlogrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['actlogrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
<dd><span class="name"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'],'info').'" ajaxhover="true" uid="'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uid'].'" target="_blank">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</a></span>
        		<p class="data">
        			';
if($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'tip'){
echo '
        				<span class="nm">打赏</span>'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].' '.$this->_tpl_vars['egoldname'];
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'hurry'){
echo '<span class="nm">催更</span>'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].' '.$this->_tpl_vars['egoldname'];
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'vipvote'){
echo '<span class="nm"> 赠送</span> '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].' 张月票';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'poll'){
echo '<span class="nm">赠送</span> '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].' 张推荐票';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'bookcase'){
echo '<span class="nm">收藏</span>1次';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'flower'){
echo '<span class="nm">赠送</span>'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'朵鲜花';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'vipvote'){
echo '<span class="nm">赠送</span>'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'张月票';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'buychapter'){
echo '<span class="nm">订阅</span>1章';
}
echo '
        			
        		</p>
        	</dd>';
}
echo '

';
?>