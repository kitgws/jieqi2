<?php
echo '<form name="frmsearch" method="get" action="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/topiclist.php">
<table class="grid" width="100%" align="center">
    <tr>
      <td>
	  <span class="fr">[<a href="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/topiclist.php?type=all">全部主题</a>] &nbsp;&nbsp; [<a href="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/topiclist.php?type=good">精华主题</a>]&nbsp;</span>
        关键字：
            <input name="keyword" type="text" id="keyword" class="text" size="0" maxlength="50">
            <input type="radio" name="keytype" class="radio" value="1" checked="checked">
            帖子发表人 &nbsp;&nbsp;
			<input type="radio" name="keytype" class="radio" value="2">
            主题&nbsp;&nbsp;
            <input type="submit" name="btnsearch" class="button" value="搜 索">
	  </td>
    </tr>
</table>
</form>

<form name="frmsearch" method="get" action="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/topiclist.php">
<table class="grid" width="100%" align="center">
  <tr align="center">
  	<td width="5%" class="title">&nbsp;</th>
    <td width="40%" class="title">主题</td>
    <td width="11%" class="title">所属版块</td>
    <td width="11%" class="title">点击/回复</td>
    <td width="11%" class="title">发表人</td>
    <td width="16%" class="title">发表时间</td>
	  <td width="6%" class="title">操作</td>
  </tr>
  ';
if (empty($this->_tpl_vars['topicrows'])) $this->_tpl_vars['topicrows'] = array();
elseif (!is_array($this->_tpl_vars['topicrows'])) $this->_tpl_vars['topicrows'] = (array)$this->_tpl_vars['topicrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['topicrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['topicrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['topicrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['topicrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['topicrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
  	<td align="center"><input type="checkbox" id="checkid[]" name="checkid[]" value="'.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['topicid'].'"></td>
    <td>';
if($this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['istop'] == 1){
echo '<span class="hot">[顶]</span>';
}
if($this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['isgood'] == 1){
echo '<span class="hot">[精]</span>';
}
echo '<a href="'.jieqi_geturl('forum','showtopic',$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['topicid']).'" target="_blank"';
if($this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['display_n'] == 1){
echo ' class="note"';
}
echo '>'.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['title'].'</a></td>
    <td><a href="'.jieqi_geturl('forum','topiclist','1',$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['forumid']).'" target="_blank">'.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['forumname'].'</a></td>
    <td align="center">'.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['views'].'/'.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['replies'].'</td>
    <td><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['posterid']).'" target="_blank">'.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['poster'].'</a></td>
    <td align="center">'.date('Y-m-d H:i:s',$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['posttime']).'</td>
	<td align="center"><a id="act_delete_'.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['topicid'].'" href="javascript:;" onclick="if(confirm(\'确实要删除该主题么？\')) Ajax.Tip(\''.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/topiclist.php?tid='.$this->_tpl_vars['topicrows'][$this->_tpl_vars['i']['key']]['topicid'].'&act=delete'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">删除</a></td>
  </tr>
  ';
}
echo '
   <tr>
    <td align="center"><input type="checkbox" id="checkall" name="checkall" value="checkall" onclick="for (var i=0;i<this.form.elements.length;i++){ if (this.form.elements[i].name != \'checkkall\') this.form.elements[i].checked = this.form.checkall.checked; }"></td>
    <td colspan="6">
	<input type="submit" name="Submit" value="批量删除" class="button">
	<input name="act" type="hidden" value="delete">'.$this->_tpl_vars['jieqi_token_input'].'
	</td>
  </tr>
</table>
</form>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>';
?>