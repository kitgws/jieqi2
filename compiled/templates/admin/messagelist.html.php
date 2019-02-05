<?php
echo '<script type="text/javascript">
//显示消息
function showmsg(id){
	var msg = document.getElementById(id);
	if(msg.style.display == \'none\') msg.style.display=\'\';
	else msg.style.display = \'none\';
}
//删除
function act_delete(url){
	var o = getTarget();
	var param = {
		method: \'POST\', 
		onReturn: function(){
			$_(o.parentNode.parentNode).remove();
		}
	}
	if(confirm(\'确实要删除该记录么？\')) Ajax.Tip(url, param);
	return false;
}
</script>
<form name="frmquery" method="post" action="'.$this->_tpl_vars['jieqi_url'].'/admin/messagelist.php">
<table class="grid" width="100%" align="center">
    <tr>
        <td align="right">关键字：
            <input name="keyword" type="text" class="text" id="keyword" size="20" maxlength="50">
			<input name="keytype" type="radio" value="fromname" checked="checked" />发件人
			<input name="keytype" type="radio" value="toname" />收件人
			<input name="keytype" type="radio" value="title" />标题
            <input type="submit" name="Submit" value="搜 索" class="button">&nbsp;&nbsp;<a href="'.$this->_tpl_vars['jieqi_url'].'/admin/messagelist.php">显示全部</a>&nbsp;&nbsp;</td>
    </tr>
</table>
</form>
<br />
<form action="'.$this->_tpl_vars['jieqi_url'].'/admin/messagelist.php" method="post" name="checkform">
<table class="grid" width="100%" align="center">
<caption>站内短消息列表</caption>
  <tr>
    <th width="5%"><input type="checkbox" name="checkall" value="checkall" onclick="for (var i=0;i<this.form.elements.length;i++){ if (this.form.elements[i].name != \'checkkall\') this.form.elements[i].checked = this.form.checkall.checked; }"></th>
    <th width="15%">发件人</th>
    <th width="15%">收件人</th>
    <th width="40%">标题</th>
    <th width="15%">日期</th>
    <th width="10%">操作</th>
  </tr>
  <tbody id="jieqi_page_contents">
';
if (empty($this->_tpl_vars['messagerows'])) $this->_tpl_vars['messagerows'] = array();
elseif (!is_array($this->_tpl_vars['messagerows'])) $this->_tpl_vars['messagerows'] = (array)$this->_tpl_vars['messagerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['messagerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['messagerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['messagerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['messagerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['messagerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr>
    <td align="center" valign="top"><input type="checkbox" name="id[]" value="'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['messageid'].'"></td>
    <td valign="top">';
if($this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['fromid'] > 0){
echo '<a href="'.jieqi_geturl('system','user',$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['fromid'],'info').'" target="_blank">'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['fromname'].'</a>';
}else{
echo '<span class="hot">网站管理员</span>';
}
echo '</td>
    <td valign="top">';
if($this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['toid'] > 0){
echo '<a href="'.jieqi_geturl('system','user',$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['toid'],'info').'" target="_blank">'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['toname'].'</a>';
}else{
echo '<span class="hot">网站管理员</span>';
}
echo '</td>
    <td valign="top"><a href="javascript:showmsg(\'msgc_'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['messageid'].'\')">'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['title'].'</a>
	<div id="msgc_'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['messageid'].'" style="display:none;padding:3px;width:100%;">
	'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['content'].'	</div>
	</td>
    <td valign="top">'.date('Y-m-d',$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['postdate']).'</td>
    <td valign="top"><a id="act_delete_'.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['messageid'].'" href="javascript:;" onclick="act_delete(\''.$this->_tpl_vars['jieqi_url'].'/admin/messagelist.php?id='.$this->_tpl_vars['messagerows'][$this->_tpl_vars['i']['key']]['messageid'].'&act=delete'.$this->_tpl_vars['jieqi_token_url'].'\');">删除</a></td>
  </tr>
';
}
echo '
  </tbody>
  <tr>
    <td colspan="6" class="foot">
		<input type="button" name="selectall" value="全部选中" class="button" onclick="for (var i=0;i<this.form.elements.length;i++){ this.form.elements[i].checked = true; }" />&nbsp;&nbsp;
		<input type="button" name="cancelall" value="全部取消" class="button" onclick="for (var i=0;i<this.form.elements.length;i++){ this.form.elements[i].checked = false; }" />&nbsp;&nbsp;
		<input type="button" name="act_remove" value="删除选中记录" class="button" onclick="if(confirm(\'确实要删除选中记录么？\')) this.form.submit();" />
		<input type="hidden" name="act" value="delete">'.$this->_tpl_vars['jieqi_token_input'].'
	</td>
  </tr>
</table>
</form>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>';
?>