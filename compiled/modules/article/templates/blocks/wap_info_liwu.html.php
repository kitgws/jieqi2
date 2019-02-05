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
	if($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'redrose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> 送来 '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'个 <span style="color:red">红包</span><br />
        <span>多更多福气。满满的红包送上，祝大大早日立地成神！</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'yellowrose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> 送来 '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'颗 <span style="color:red">宝石</span><br />
        <span>宝石一颗永留存，愿大大的故事能永世长存！</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'bluerose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> 送来 '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'辆 <span style="color:red">马车</span><br />
        <span>作者大大的文太好看了，坐着马车去赶场</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'whiterose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> 送来 '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'个 <span style="color:red">丫鬟</span><br />
        <span>送给大大随身丫鬟，保管您瞬间文思泉涌！</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'greenrose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> 送来 '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'座 <span style="color:red">府邸</span><br />
        <span>谢谢作者大大满足了我们的最初幻想，梦幻的府邸送上！</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'blackrose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> 送来 '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'枚 <span style="color:red">金印</span><br />
        <span>大大的小说精彩至极，一枚金印在手无人敢挡！</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}
}

?>