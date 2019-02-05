<?php
if (empty($this->_tpl_vars['reviewrows'])) $this->_tpl_vars['reviewrows'] = array();
elseif (!is_array($this->_tpl_vars['reviewrows'])) $this->_tpl_vars['reviewrows'] = (array)$this->_tpl_vars['reviewrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['reviewrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['reviewrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['reviewrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['reviewrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['reviewrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '<div class="item"><a href="javascript:;"><img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posterid'],'s').'" class="avatar"></a><div class="body"><div class="t">';
if($this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posterid'] > 0){
echo $this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['poster'];
}else{
echo 'сн©м';
}
echo '</div><div class="txt"><a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/reviewshow.php?rid='.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'">'.truncate($this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posttext'],'120','...').'</a></div><div class="foot"><span class="time">'.date('Y-m-d H:i:s',$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replytime']).'</span><span class="function"><a href="javascript:;"><i class="icon-praise"></i><span>0</span></a><a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/reviewshow.php?rid='.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'"><i class="icon-review"></i>'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replies'].'</a></span></div><div class="star"><i class="icon-xing"></i><i class="icon-xing"></i><i class="icon-xing"></i><i class="icon-xing"></i><i class="icon-xing"></i></div></div></div>';
}

?>