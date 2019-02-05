<?php
if (empty($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = array();
elseif (!is_array($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = (array)$this->_tpl_vars['articlerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['articlerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['articlerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['articlerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['i']['order'] == 1){
echo '<li><em class="first">1</em>'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articlename'].'<i class="author">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['author'].'</i></li>
			  ';
}elseif($this->_tpl_vars['i']['order'] == 2){
echo '<li><em class="second">2</em>'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articlename'].'<i class="author">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['author'].'</i></li>
			  ';
}elseif($this->_tpl_vars['i']['order'] == 3){
echo '<li><em class="third">3</em>'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articlename'].'<i class="author">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['author'].'</i></li>';
}
}

?>