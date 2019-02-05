<?php
echo '
<script type="text/javascript">
function jieqiFormValidate_useredit(){
  if(document.useredit.email.value == ""){
    alert("请输入Email");
    document.useredit.email.focus();
    return false;
  }
}
</script>
<div class="container">
	<div class="mod block form">
		<div class="hd">
			<h4>用户设置</h4>
		</div>
		<form name="useredit" id="useredit" action="'.$this->_tpl_vars['jieqi_url'].'/useredit.php?do=submit" method="post" onsubmit="return jieqiFormValidate_useredit();" class="form-horizontal">
			<div class="bd">
				<div class="item">
					<div class="item-label">
						用户名
					</div>
					<div class="item-control">'.$this->_tpl_vars['username'].'</div>
				</div>
				<div class="item">
					<div class="item-label">
						昵  称
					</div>
					<div class="item-control">
						<input type="text" maxlength="60" size="28" class="text" name="nickname" id="nickname" value="'.$this->_tpl_vars['nickname'].'">
					</div>
				</div>
				<div class="item">
					<div class="item-label">
						Email
					</div>
					<div class="item-control">
						';
if($this->_tpl_vars['verify']['email'] > 0){
echo $this->_tpl_vars['email'];
}else{
echo '<input type="text" maxlength="60" size="28" class="text" name="email" id="email" value="'.$this->_tpl_vars['email'].'">';
}
echo '&nbsp;<input type="checkbox" class="checkbox" name="showset_email" value="1"';
if($this->_tpl_vars['showset']['email'] > 0){
echo ' checked="checked"';
}
echo ' />公开邮箱
					</div>
				</div>
				<div class="item">
					<div class="item-label">
						性　别
					</div>
					<div class="item-control">
						<input type="radio" name="sex" value="1"';
if($this->_tpl_vars['sex'] == 1){
echo ' checked';
}
echo '> 男
						<input type="radio" name="sex" value="2"';
if($this->_tpl_vars['sex'] == 2){
echo ' checked';
}
echo '> 女
						<input type="radio" name="sex" value="0"';
if($this->_tpl_vars['sex'] == 0){
echo ' checked';
}
echo '> 保密
					</div>
				</div>
				<div class="item">
					<div class="item-label">
						Ｑ　Ｑ
					</div>
					<div class="item-control">
						<input type="text" maxlength="60" size="28" class="text" name="qq" id="qq" value="'.$this->_tpl_vars['qq'].'">
					</div>
				</div>
				<div class="item">
					<div class="item-label">
						网站/微博
					</div>
					<div class="item-control">
						<input type="text" maxlength="60" size="28" class="text" name="url" id="url" value="'.$this->_tpl_vars['url'].'">
					</div>
				</div>
			</div>
			<div class="ft"><input type="hidden" name="act" value="update" />'.$this->_tpl_vars['jieqi_token_input'].'<input type="submit" name="submit" value="保存设置" class="btn btn-auto btn-blue">
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
$(function(){
		$(\'#useredit\').on(\'submit\', function(e){
		e.preventDefault();
		 var tips = layer.open({type: 2,content: \'加载中\'});
				GPage.postForm(\'useredit\', $("#useredit").attr("action"),
			   function(data){
					if(data.status==\'OK\'){
                        $.ajaxSetup ({ cache: false });
					    layer.close(tips);
                        openMsg(data.msg);
					}else{
					    layer.close(tips);
		                openMsg(data.msg);
					}
			   });
//			}
		});
});
</script>';
?>