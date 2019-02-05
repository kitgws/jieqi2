<?php
if (empty($this->_tpl_vars['replyrows'])) $this->_tpl_vars['replyrows'] = array();
elseif (!is_array($this->_tpl_vars['replyrows'])) $this->_tpl_vars['replyrows'] = (array)$this->_tpl_vars['replyrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['replyrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['replyrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['replyrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['replyrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['replyrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	if($this->_tpl_vars['i']['order'] > 1){
echo 'document.writeln("<li style=\\"padding:8px 8px;\\">");
document.writeln("'.$this->_tpl_vars['replyrows'][$this->_tpl_vars['i']['key']]['username'].'£º");
document.writeln("<span style=\\"color:#999;\\">");
document.writeln("'.date('Y-m-d H:i:s',$this->_tpl_vars['replyrows'][$this->_tpl_vars['i']['key']]['posttime']).'");
document.writeln("</span><br>");
document.writeln("'.$this->_tpl_vars['replyrows'][$this->_tpl_vars['i']['key']]['posttext'].'");
document.writeln("</li>");';
}
}

?>