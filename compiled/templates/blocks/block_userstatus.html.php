<?php
echo '      <dl>
       <dt class="img"><img src="'.jieqi_geturl('system','avatar',$this->_tpl_vars['jieqi_userid'],'s',$this->_tpl_vars['jieqi_avatar']).'" onerror="javascript:this.src=\'/images/noavatars.jpg\'"><span class="mask"></span></dt>
	   <div class="infor_box">

       <dd>'.$this->_tpl_vars['jieqi_username'].'
       </dd>
       <dd><a class="vip'.$this->_tpl_vars['jieqi_vip_img'].' vs" title="VIP0级会员" href="#"></a></dd>
       <dd><a class="rk1 rks" title="'.$this->_tpl_vars['jieqi_honor'].'级" href="#"></a></dd>
	   </div>
      </dl>
    </div>
    <dl class="assets">
     <dd><em>余额：</em>'.$this->_tpl_vars['jieqi_egold'].$this->_tpl_vars['jieqi_egoldname'].'<a href="/pay/" target="_blank" class="recharge2">充值</a></dd>
     <dd><em>月票：</em>'.$this->_tpl_vars['vipvotemoney'].' 张</dd>
     <dd><em>包月：</em>';
if($this->_tpl_vars['overtime'] == 0){
echo '尚未包月';
}elseif($this->_tpl_vars['overtime'] < $this->_tpl_vars['time']){
echo '已经到期';
}else{
echo date('Y-m-d',$this->_tpl_vars['overtime']).' 到期';
}
echo '
	 <a id="a_monthlybuy" href="javascript:;" onclick="openDialog(\''.$this->_tpl_vars['jieqi_modules']['article']['url'].'/monthlybuy.php?id='.$this->_tpl_vars['jieqi_userid'].'&ajax_gets=jieqi_contents\', false);" class="recharge2">开通</a></dd>
    </dl>';
?>