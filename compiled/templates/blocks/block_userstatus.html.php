<?php
echo '      <dl>
       <dt class="img"><img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['jieqi_userid'],'s',$this->_tpl_vars['jieqi_avatar']).'" onerror="javascript:this.src=\'/images/noavatars.jpg\'"><span class="mask"></span></dt>
	   <div class="infor_box">

       <dd>'.$this->_tpl_vars['jieqi_username'].'
       </dd>
       <dd><a class="vip'.$this->_tpl_vars['jieqi_vip_img'].' vs" title="VIP0����Ա" href="#"></a></dd>
       <dd><a class="rk1 rks" title="'.$this->_tpl_vars['jieqi_honor'].'��" href="#"></a></dd>
	   </div>
      </dl>
    </div>
    <dl class="assets">
     <dd><em>��</em>'.$this->_tpl_vars['jieqi_egold'].$this->_tpl_vars['jieqi_egoldname'].'<a href="/pay/" target="_blank" class="recharge2">��ֵ</a></dd>
     <dd><em>��Ʊ��</em>'.$this->_tpl_vars['vipvotemoney'].' ��</dd>
     <dd><em>���£�</em>';
if($this->_tpl_vars['overtime'] == 0){
echo '��δ����';
}elseif($this->_tpl_vars['overtime'] < $this->_tpl_vars['time']){
echo '�Ѿ�����';
}else{
echo date('Y-m-d',$this->_tpl_vars['overtime']).' ����';
}
echo '
	 <a id="a_monthlybuy" href="javascript:;" onclick="openDialog(\''.$this->_tpl_vars['jieqi_modules']['article']['url'].'/monthlybuy.php?id='.$this->_tpl_vars['jieqi_userid'].'&ajax_gets=jieqi_contents\', false);" class="recharge2">��ͨ</a></dd>
    </dl>';
?>