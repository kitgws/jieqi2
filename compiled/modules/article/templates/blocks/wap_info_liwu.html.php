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
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> ���� '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'�� <span style="color:red">���</span><br />
        <span>����ร���������ĺ�����ϣ�ף����������س���</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'yellowrose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> ���� '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'�� <span style="color:red">��ʯ</span><br />
        <span>��ʯһ�������棬Ը���Ĺ������������棡</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'bluerose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> ���� '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'�� <span style="color:red">��</span><br />
        <span>���ߴ�����̫�ÿ��ˣ�������ȥ�ϳ�</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'whiterose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> ���� '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'�� <span style="color:red">Ѿ��</span><br />
        <span>�͸��������Ѿ�ߣ�������˲����˼Ȫӿ��</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'greenrose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> ���� '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'�� <span style="color:red">��ۡ</span><br />
        <span>лл���ߴ�����������ǵ�������룬�λõĸ�ۡ���ϣ�</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}elseif($this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actname'] == 'blackrose'){
echo '
	<li><p><span style="color:#f60">'.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['uname'].'</span> ���� '.$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['actnum'].'ö <span style="color:red">��ӡ</span><br />
        <span>����С˵����������һö��ӡ�������˸ҵ���</span>
        </p>
        <p style="text-align:right;color:#999">'.date('Y-m-d H:i:s',$this->_tpl_vars['actlogrows'][$this->_tpl_vars['i']['key']]['addtime']).'</p>
';
}
}

?>