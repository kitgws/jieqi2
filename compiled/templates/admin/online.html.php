<?php
echo '<form name="frmquery" method="post" action="'.$this->_tpl_vars['jieqi_url'].'/admin/online.php">
<table class="grid" width="100%" align="center">
    <tr>
        <td><table width="100%"  border="0" cellspacing="0" cellpadding="0" class="hide">
          <tr>
            <td width="30%" valign="middle">����������'.$this->_tpl_vars['rowcount'].'</td>
            <td width="70%" align="right" valign="middle">�û����ƣ�
            <input name="username" type="text" class="text" id="username" size="20" maxlength="30">
            <input type="submit" name="Submit" value="�� ��" class="button">&nbsp;&nbsp;</td>
          </tr>
        </table></td>
    </tr>
</table>
</form>
<br />
<table class="grid" width="100%" align="center">
<caption>�û��б�</caption>
  <tr align="center" class="head">
    <td width="20%" valign="middle">�û���</td>
    <td width="10%" valign="middle">��½ʱ��</td>
    <td width="15%" valign="middle">�ȼ�</td>
    <td width="15%" valign="middle">IP</td>
    <td width="25%" valign="middle">��·</td>
    <td width="15%" valign="middle">����</td>
  </tr>
  ';
if (empty($this->_tpl_vars['userrows'])) $this->_tpl_vars['userrows'] = array();
elseif (!is_array($this->_tpl_vars['userrows'])) $this->_tpl_vars['userrows'] = (array)$this->_tpl_vars['userrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['userrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['userrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['userrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['userrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['userrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <tr valign="middle">
    <td><a href="'.jieqi_geturl('system','user',$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['uid'],'info').'" target="_blank">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['name'].'</a></td>
    <td align="center">'.date('m-d H:i:s',$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['logintime']).'</td>
    <td align="center">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['group'].'</td>
    <td align="center">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['ip'].'</td>
    <td align="left">'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['location'].'</td>
    <td align="center"><a id="act_delete_'.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['sid'].'" href="javascript:;" onclick="Ajax.Tip(\''.$this->_tpl_vars['jieqi_url'].'/admin/online.php?sid='.$this->_tpl_vars['userrows'][$this->_tpl_vars['i']['key']]['sid'].'&act=del'.$this->_tpl_vars['jieqi_token_url'].'\', {method: \'POST\'});">ǿ������</a></td>
  </tr>
  ';
}
echo '
</table>
<div class="pages">'.$this->_tpl_vars['url_jumppage'].'</div>

';
?>