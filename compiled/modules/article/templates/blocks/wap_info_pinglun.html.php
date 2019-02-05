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
	echo '
				<li class="">
				<a href="javascript:void(0)"><span>
					<strong> ';
if($this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posterid'] > 0){
echo $this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['poster'];
}else{
echo '游客';
}
echo '：</strong>
					<i></i>
					<em>'.date('Y-m-d H:i:s',$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replytime']).'</em>
		        	</span>
				<br>
				<!--h3>';
if($this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['istop'] == 1){
echo '<span class="top">[置顶]</span>';
}
if($this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['isgood'] == 1){
echo '<span class="top">[精华]</span>';
}
echo ' '.truncate($this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posttext'],'50','..').'</h3-->
				'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posttext'].'
				<div style="clear:both;color:#3c97dd;text-align:right" onclick="showReply('.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].',this)">回应('.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replies'].')</div>
				<div class="well" id="__comment_'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'" style="display:none;clear:both;"></div>
				</a>
				</li>';
}
echo '
				<li class="g_btn"><a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/reviews.php?aid='.$this->_tpl_vars['articleid'].'&type=all">更多评论...</a></li>';
?>