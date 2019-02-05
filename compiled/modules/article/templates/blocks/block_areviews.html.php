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
  <a href="javascript:void(0)">
        <span>
            <strong>'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['poster'].'：</strong>
            <i></i>
            <em>'.date('m-d H:i',$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replytime']).'</em>
			
        </span>
        <br>
        '.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['posttext'].'
		<div style="clear:both;color:#3c97dd;text-align:right" onclick="showReply('.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].',this)">回应('.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['replies'].')</div>
		<div class="well" id="__comment_'.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'" style="clear: both; display: none;">
	<div class="comments comments-level-2">
        <ul>
		<script type="text/javascript" src="'.$this->_tpl_vars['jieqi_url'].'/modules/article/reviewshows.php?rid='.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'"></script>
		</ul>
        <div class="form column-2 ">
            <form name="frmreviews" id="frmreviews" method="post" action="'.$this->_tpl_vars['article_dynamic_url'].'/reviewshow.php?tid='.$this->_tpl_vars['reviewrows'][$this->_tpl_vars['i']['key']]['topicid'].'&aid='.$this->_tpl_vars['articleid'].'">
                <table class="tablebtn" style="border-width:1px;">
					<tbody><tr>
						<td>
						<input type="text" name="pcontent" id="pcontent" value=""  placeholder="我也来评一句">
                            
						</td>
						<td width="70">
						<input type="hidden" name="act" value="newpost" />'.$this->_tpl_vars['jieqi_token_input'].'
							<input type="submit" name="Submit" class="btn btn-auto btn-blue vm"value="回应">
						</td>
					</tr>
				</tbody></table>


                
            </form>
 </div>
</div>
</div>
</a>
</li>
';
}

?>