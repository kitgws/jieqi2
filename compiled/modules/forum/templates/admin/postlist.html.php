<?php
echo '<form name="frmsearch" method="get" action="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/postlist.php">
<table class="grid" width="100%" align="center">
    <tr>
      <td>
	  <span class="fr">[<a href="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/postlist.php"';
if($this->_tpl_vars['display'] === ''){
echo ' class="hot"';
}
echo '>全部</a>] &nbsp;&nbsp; [<a href="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/postlist.php?display=0"';
if($this->_tpl_vars['display'] === 0){
echo ' class="hot"';
}
echo '>已审</a>] &nbsp;&nbsp; [<a href="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/postlist.php?display=1"';
if($this->_tpl_vars['display'] === 1){
echo ' class="hot"';
}
echo '>待审</a>]&nbsp;</span>
        发表人：
            <input name="keyword" type="text" id="keyword" class="text" size="0" maxlength="50">
            <input type="hidden" name="keytype" class="radio" value="1">
            <input type="submit" name="btnsearch" class="button" value="搜 索">
	  </td>
    </tr>
</table>
</form>
<form name="frmsearch" method="get" action="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/postlist.php">
<table class="grid" width="100%" align="center">
  <tr>
    <td width="5%" class="head">&nbsp;</td>
    <td width="45%" class="head">主题</td>
    <td width="15%" class="head">发表人</td>
    <td width="20%" class="head">发表时间</td>
	  <td width="15%" class="head">操作</td>
  </tr>
  ';
if (empty($this->_tpl_vars['postrows'])) $this->_tpl_vars['postrows'] = array();
elseif (!is_array($this->_tpl_vars['postrows'])) $this->_tpl_vars['postrows'] = (array)$this->_tpl_vars['postrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['postrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['postrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['postrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['postrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['postrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
  	<td class="topic" align="center"><input type="checkbox" id="checkid[]" name="checkid[]" value="'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['postid'].'"></td>
    <td class="topic">';
if($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['istopic'] > 0){
echo '<span class="hot">主题：</span>';
}else{
echo '<span class="hot">回复：</span>';
}
echo '<a href="'.jieqi_geturl('forum','showtopic',$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['topicid']).'" target="_blank"';
if($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['display_n'] == 1){
echo ' class="note"';
}
echo '>'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['title'].'</a></td>
    <td class="topic"><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['posterid']).'" target="_blank">'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['poster'].'</a></td>
    <td class="topic" align="center">'.date('Y-m-d H:i:s',$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['posttime']).'</td>
	<td class="topic" align="center">
	<a id="act_delete_'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['postid'].'" href="javascript:;" onclick="if(confirm(\'确实要删除该帖子么？\')) Ajax.Tip(\''.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/postlist.php?tid='.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['topicid'].'&pid='.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['postid'].'&istopic='.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['istopic'].'&display='.$this->_tpl_vars['display'].'&act=delete'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">删除</a>
	';
if($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['display_n'] == 1){
echo ' | <a id="act_audit_'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['postid'].'" href="javascript:;" onclick="Ajax.Tip(\''.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/admin/postlist.php?tid='.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['topicid'].'&pid='.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['postid'].'&istipic='.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['istopic'].'&display='.$this->_tpl_vars['display'].'&act=audit'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">审核</a>';
}
echo '
	</td>
  </tr>
  <tr>
    <td colspan="5">
		<div style="padding:3px;border:0;height:150px;width:100%;overflow-y:scroll;">
      ';
if (empty($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages'])) $this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages'] = array();
elseif (!is_array($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages'])) $this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages'] = (array)$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages'];
$this->_tpl_vars['m']=array();
$this->_tpl_vars['m']['columns'] = 1;
$this->_tpl_vars['m']['count'] = count($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages']);
$this->_tpl_vars['m']['addrows'] = count($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages']) % $this->_tpl_vars['m']['columns'] == 0 ? 0 : $this->_tpl_vars['m']['columns'] - count($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages']) % $this->_tpl_vars['m']['columns'];
$this->_tpl_vars['m']['loops'] = $this->_tpl_vars['m']['count'] + $this->_tpl_vars['m']['addrows'];
reset($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages']);
for($this->_tpl_vars['m']['index'] = 0; $this->_tpl_vars['m']['index'] < $this->_tpl_vars['m']['loops']; $this->_tpl_vars['m']['index']++){
	$this->_tpl_vars['m']['order'] = $this->_tpl_vars['m']['index'] + 1;
	$this->_tpl_vars['m']['row'] = ceil($this->_tpl_vars['m']['order'] / $this->_tpl_vars['m']['columns']);
	$this->_tpl_vars['m']['column'] = $this->_tpl_vars['m']['order'] % $this->_tpl_vars['m']['columns'];
	if($this->_tpl_vars['m']['column'] == 0) $this->_tpl_vars['m']['column'] = $this->_tpl_vars['m']['columns'];
	if($this->_tpl_vars['m']['index'] < $this->_tpl_vars['m']['count']){
		list($this->_tpl_vars['m']['key'], $this->_tpl_vars['m']['value']) = each($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages']);
		$this->_tpl_vars['m']['append'] = 0;
	}else{
		$this->_tpl_vars['m']['key'] = '';
		$this->_tpl_vars['m']['value'] = '';
		$this->_tpl_vars['m']['append'] = 1;
	}
	echo '
    <img src="'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages'][$this->_tpl_vars['m']['key']]['url'].'" border="0" onload="imgResize(this);" onmouseover="imgMenu(this);" onclick="imgDialog(\''.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachimages'][$this->_tpl_vars['m']['key']]['url'].'\', this);"><br /><br />
    ';
}
echo '
    ';
if (empty($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'])) $this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'] = array();
elseif (!is_array($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'])) $this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'] = (array)$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'];
$this->_tpl_vars['n']=array();
$this->_tpl_vars['n']['columns'] = 1;
$this->_tpl_vars['n']['count'] = count($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles']);
$this->_tpl_vars['n']['addrows'] = count($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles']) % $this->_tpl_vars['n']['columns'] == 0 ? 0 : $this->_tpl_vars['n']['columns'] - count($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles']) % $this->_tpl_vars['n']['columns'];
$this->_tpl_vars['n']['loops'] = $this->_tpl_vars['n']['count'] + $this->_tpl_vars['n']['addrows'];
reset($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles']);
for($this->_tpl_vars['n']['index'] = 0; $this->_tpl_vars['n']['index'] < $this->_tpl_vars['n']['loops']; $this->_tpl_vars['n']['index']++){
	$this->_tpl_vars['n']['order'] = $this->_tpl_vars['n']['index'] + 1;
	$this->_tpl_vars['n']['row'] = ceil($this->_tpl_vars['n']['order'] / $this->_tpl_vars['n']['columns']);
	$this->_tpl_vars['n']['column'] = $this->_tpl_vars['n']['order'] % $this->_tpl_vars['n']['columns'];
	if($this->_tpl_vars['n']['column'] == 0) $this->_tpl_vars['n']['column'] = $this->_tpl_vars['n']['columns'];
	if($this->_tpl_vars['n']['index'] < $this->_tpl_vars['n']['count']){
		list($this->_tpl_vars['n']['key'], $this->_tpl_vars['n']['value']) = each($this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles']);
		$this->_tpl_vars['n']['append'] = 0;
	}else{
		$this->_tpl_vars['n']['key'] = '';
		$this->_tpl_vars['n']['value'] = '';
		$this->_tpl_vars['n']['append'] = 1;
	}
	echo '
    <img src="'.$this->_tpl_vars['jieqi_modules']['forum']['url'].'/images/attach.gif" border="0" /><strong>附件:</strong><a href="'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'][$this->_tpl_vars['n']['key']]['url'].'">'.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'][$this->_tpl_vars['n']['key']]['name'].'</a>('.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['attachfiles'][$this->_tpl_vars['n']['key']]['size_k'].'K)<br /><br />
    ';
}
echo '
      '.$this->_tpl_vars['postrows'][$this->_tpl_vars['i']['key']]['posttext'].'
    </div>
	  </td>
  </tr>
  ';
}
echo '
  <tr>
    <td align="center"><input type="checkbox" id="checkall" name="checkall" value="checkall" onclick="for (var i=0;i<this.form.elements.length;i++){ if (this.form.elements[i].name != \'checkkall\') this.form.elements[i].checked = this.form.checkall.checked; }"></td>
    <td colspan="4">
      <input type="submit" name="batchdelete" value="批量删除" class="button" onclick="if(confirm(\'确实要删除选中记录么？\')){this.form.act.value=\'delete\'; this.form.submit();}"> &nbsp;
      <input type="submit" name="batchaudit" value="批量审核" class="button" onclick="if(confirm(\'确实要批量审核通过么？\')){this.form.act.value=\'audit\'; this.form.submit();}">
      <input name="act" type="hidden" value="">'.$this->_tpl_vars['jieqi_token_input'].'
      <input name="display" type="hidden" value="'.$this->_tpl_vars['display'].'">
    </td>
  </tr>
</table>
</form>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>';
?>