<?php
echo '
<script type="text/javascript">
function frmnewarticle_validate(){
  if(document.frmnewarticle.sortid.value == "0"){
    alert("���������");
    document.frmnewarticle.sortid.focus();
    return false;
  }
  if(document.frmnewarticle.articlename.value == ""){
    alert("������С˵����");
    document.frmnewarticle.articlename.focus();
    return false;
  }
}
</script>
<div class="container">
	<div class="mod block form">
		<div class="hd">
			<h4>��������</h4>
		</div>
<form name="frmnewarticle" id="frmnewarticle" action="'.$this->_tpl_vars['url_newarticle'].'" method="post" onsubmit="return frmnewarticle_validate();" enctype="multipart/form-data">
<div class="mail-zc">

 <div class="phone-name">  
   <h3>��� </h3>  
  
  <select class="select" size="1" onchange="showtypes(this)" name="sortid" id="sortid">
  <option value="0">��ѡ�����</option>
  ';
if (empty($this->_tpl_vars['sortrows'])) $this->_tpl_vars['sortrows'] = array();
elseif (!is_array($this->_tpl_vars['sortrows'])) $this->_tpl_vars['sortrows'] = (array)$this->_tpl_vars['sortrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['sortrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['sortrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['sortrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['sortrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['sortrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <option value="'.$this->_tpl_vars['i']['key'].'">'.$this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['caption'].'</option>
  ';
}
echo '
  </select>
  <span id="typeselect" name="typeselect" style="display: none;"></span>
  <script type="text/javascript">
  function showtypes(obj){
    var typeselect=document.getElementById(\'typeselect\');
    typeselect.innerHTML=\'\';
    ';
if (empty($this->_tpl_vars['sortrows'])) $this->_tpl_vars['sortrows'] = array();
elseif (!is_array($this->_tpl_vars['sortrows'])) $this->_tpl_vars['sortrows'] = (array)$this->_tpl_vars['sortrows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['sortrows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['sortrows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['sortrows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['sortrows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['sortrows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
	  ';
if($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types'] != ''){
echo '
	  if(obj.options[obj.selectedIndex].value == '.$this->_tpl_vars['i']['key'].') typeselect.innerHTML=\'<select class="select" size="1" name="typeid" id="typeid">';
if (empty($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types'])) $this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types'] = array();
elseif (!is_array($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types'])) $this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types'] = (array)$this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types'];
$this->_tpl_vars['j']=array();
$this->_tpl_vars['j']['columns'] = 1;
$this->_tpl_vars['j']['count'] = count($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types']);
$this->_tpl_vars['j']['addrows'] = count($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types']) % $this->_tpl_vars['j']['columns'] == 0 ? 0 : $this->_tpl_vars['j']['columns'] - count($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types']) % $this->_tpl_vars['j']['columns'];
$this->_tpl_vars['j']['loops'] = $this->_tpl_vars['j']['count'] + $this->_tpl_vars['j']['addrows'];
reset($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types']);
for($this->_tpl_vars['j']['index'] = 0; $this->_tpl_vars['j']['index'] < $this->_tpl_vars['j']['loops']; $this->_tpl_vars['j']['index']++){
	$this->_tpl_vars['j']['order'] = $this->_tpl_vars['j']['index'] + 1;
	$this->_tpl_vars['j']['row'] = ceil($this->_tpl_vars['j']['order'] / $this->_tpl_vars['j']['columns']);
	$this->_tpl_vars['j']['column'] = $this->_tpl_vars['j']['order'] % $this->_tpl_vars['j']['columns'];
	if($this->_tpl_vars['j']['column'] == 0) $this->_tpl_vars['j']['column'] = $this->_tpl_vars['j']['columns'];
	if($this->_tpl_vars['j']['index'] < $this->_tpl_vars['j']['count']){
		list($this->_tpl_vars['j']['key'], $this->_tpl_vars['j']['value']) = each($this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types']);
		$this->_tpl_vars['j']['append'] = 0;
	}else{
		$this->_tpl_vars['j']['key'] = '';
		$this->_tpl_vars['j']['value'] = '';
		$this->_tpl_vars['j']['append'] = 1;
	}
	echo '<option value="'.$this->_tpl_vars['j']['key'].'">'.$this->_tpl_vars['sortrows'][$this->_tpl_vars['i']['key']]['types'][$this->_tpl_vars['j']['key']].'</option>';
}
echo '</select>\';
	  ';
}
echo '
    ';
}
echo '
  }
  </script>
 
</div>
 <div class="phone-name">  
  <h3>С˵���� </h3>  
  <input type="text" class="text" name="articlename" id="articlename" size="30" maxlength="50" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['jieqi_modules']['article']['url'].'/articlecheck.php?articlename=\'+this.value, {outid:\'anamemsg\', tipid:\'anamemsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="anamemsg"></span>
</div>
 <div class="phone-name">  
  <h3>������ </h3>  
  <input type="text" class="text" name="backupname" id="backupname" size="30" maxlength="100" value="" /> <span>һ�仰���</span></td>
</div>
 <div class="phone-name">  
  <h3>��ǩ </h3>  
<input type="text" class="text" name="keywords" id="tagwords" size="60" maxlength="100" value=""/><span>�����ǩ��Ӣ�Ŀո�ָ�</span>
</div>
 <div class="phone-name">  
  <h3>����Ա </h3>  
  <input type="text" class="text" name="agent" id="agent" size="30" maxlength="30" value="" /> <span>����ָ��һ����վ�����û���Ϊ����Ա</span></td>
</div>
';
if($this->_tpl_vars['allowtrans'] > 0){
echo '
 <div class="phone-name">  
  <h3>���� </h3>  
  <input type="text" class="text" name="author" id="author" size="30" maxlength="30" value="" /> <span>�����Լ���Ʒ������</span></td>
</div>
 <div class="phone-name">  
  <h3>������Ȩ </h3>  
  
  ';
if (empty($this->_tpl_vars['authorflag']['items'])) $this->_tpl_vars['authorflag']['items'] = array();
elseif (!is_array($this->_tpl_vars['authorflag']['items'])) $this->_tpl_vars['authorflag']['items'] = (array)$this->_tpl_vars['authorflag']['items'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['authorflag']['items']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['authorflag']['items']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['authorflag']['items']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['authorflag']['items']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['authorflag']['items']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <input type="radio" class="radio" name="authorflag" value="'.$this->_tpl_vars['i']['key'].'" ';
if($this->_tpl_vars['i']['key'] == $this->_tpl_vars['authorflag']['default']){
echo 'checked="checked" ';
}
echo '/>'.$this->_tpl_vars['authorflag']['items'][$this->_tpl_vars['i']['key']].' 
  ';
}
echo '
</td>
</div>
';
}
echo '
 <div class="phone-name">  
  <h3>��Ȩ���� </h3>  
  
  ';
if (empty($this->_tpl_vars['permission']['items'])) $this->_tpl_vars['permission']['items'] = array();
elseif (!is_array($this->_tpl_vars['permission']['items'])) $this->_tpl_vars['permission']['items'] = (array)$this->_tpl_vars['permission']['items'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['permission']['items']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['permission']['items']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['permission']['items']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['permission']['items']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['permission']['items']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <input type="radio" class="radio" name="permission" value="'.$this->_tpl_vars['i']['key'].'" ';
if($this->_tpl_vars['i']['key'] == $this->_tpl_vars['permission']['default']){
echo 'checked="checked" ';
}
echo '/>'.$this->_tpl_vars['permission']['items'][$this->_tpl_vars['i']['key']].' 
  ';
}
echo '
</td>
</div>
 <div class="phone-name">  
  <h3>�׷�״̬ </h3>  
  
  ';
if (empty($this->_tpl_vars['firstflag']['items'])) $this->_tpl_vars['firstflag']['items'] = array();
elseif (!is_array($this->_tpl_vars['firstflag']['items'])) $this->_tpl_vars['firstflag']['items'] = (array)$this->_tpl_vars['firstflag']['items'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['firstflag']['items']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['firstflag']['items']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['firstflag']['items']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['firstflag']['items']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['firstflag']['items']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <input type="radio" class="radio" name="firstflag" value="'.$this->_tpl_vars['i']['key'].'" ';
if($this->_tpl_vars['i']['key'] == $this->_tpl_vars['firstflag']['default']){
echo 'checked="checked" ';
}
echo '/>'.$this->_tpl_vars['firstflag']['items'][$this->_tpl_vars['i']['key']].' 
  ';
}
echo '
</td>
</div>
';
if($this->_tpl_vars['ismanager'] > 0){
echo '
  ';
if(count($this->_tpl_vars['customsites']) > 0){
echo '
 <div class="phone-name">  
  <h3>��Դ��վ </h3>  
  
  <select class="select" size="1" name="siteid">
  <option value="0" selected="selected">��վԭ��</option>
  ';
if (empty($this->_tpl_vars['customsites'])) $this->_tpl_vars['customsites'] = array();
elseif (!is_array($this->_tpl_vars['customsites'])) $this->_tpl_vars['customsites'] = (array)$this->_tpl_vars['customsites'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['customsites']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['customsites']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['customsites']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['customsites']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['customsites']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
  <option value="'.$this->_tpl_vars['i']['key'].'">'.$this->_tpl_vars['customsites'][$this->_tpl_vars['i']['key']]['name'].'</option>
  ';
}
echo '
  </select>
 
</div>
  ';
}
}
echo '
 <div class="phone-name">  
  <h3>���ݼ�� </h3>  
  <textarea class="textarea" name="intro" id="intro" rows="6" cols="60"></textarea></td>
</div>
 <div class="phone-name">  
  <h3>���鹫�� </h3>  
  <textarea class="textarea" name="notice" id="notice" rows="6" cols="60"></textarea></td>
</div>
 <div class="phone-name">  
  <h3>����Сͼ </h3>  
  <input type="file" class="text" size="30" name="articlespic" id="articlespic" /> <span>ͼƬ��ʽ��.jpg</span></td>
</div>
 <div class="phone-name">  
  <h3>�����ͼ </h3>  
  <input type="file" class="text" size="30" name="articlelpic" id="articlelpic" /> <span>ͼƬ��ʽ��.jpg</span></td>
</div>
 <div class="ft">
  <h3>&nbsp;<input type="hidden" name="act" value="newarticle" />'.$this->_tpl_vars['jieqi_token_input'].'
  <input type="submit" class="btn btn-auto btn-blue" name="submit" value="�� ��" /></td>
</div>
</div>
</form>
	</div>
</div>
<script type="text/javascript">
$(function(){
		$(\'#frmnewarticle\').on(\'submit\', function(e){
		e.preventDefault();
		 var tips = layer.open({type: 2,content: \'������\'});
				GPage.postForm(\'frmnewarticle\', $("#frmnewarticle").attr("action"),
			   function(data){
					if(data.status==\'OK\'){
                        $.ajaxSetup ({ cache: false });
					    layer.close(tips);
                        jumpurl(data.jumpurl);
					}else{
					    layer.close(tips);
		                openMsgs(data.msg);
					}
			   });
//			}
		});
});
</script> ';
?>