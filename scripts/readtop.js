//��cookie��ȡ�û���¼��Ϣ
var jieqiUserInfo = new  Array(); //�û���Ϣ����
jieqiUserInfo['jieqiUserId'] = 0; //�û�ID
jieqiUserInfo['jieqiUserUname'] = ''; //�û��˺�
jieqiUserInfo['jieqiUserUname_un'] = ''; //UNICODE������û��˺�
jieqiUserInfo['jieqiUserName'] = ''; //�û������ǳƣ�
jieqiUserInfo['jieqiUserName_un'] = ''; //UNICODE������û������ǳƣ�
jieqiUserInfo['jieqiUserGroup'] = 0; //�û���ID
jieqiUserInfo['jieqiUserGroupName'] = ''; //�û���
jieqiUserInfo['jieqiUserGroupName_un'] = ''; //UNICODE������û���
jieqiUserInfo['jieqiUserVip'] = 0; //VIP�ȼ� 
jieqiUserInfo['jieqiUserHonorId'] = 0; //ͷ��ID
jieqiUserInfo['jieqiUserHonor'] = ''; //ͷ��
jieqiUserInfo['jieqiUserHonor_un'] = ''; //UNICODE�����ͷ��
jieqiUserInfo['jieqiNewMessage'] = 0; //����Ϣ������Ĭ�� 0 
jieqiUserInfo['jieqiUserPassword'] = ''; //�û����루MD5���ֵ��

//��ȡCOOKIE��������ֵ������
if(document.cookie.indexOf('jieqiUserInfo') >= 0){
	var cookieInfo = get_cookie_value('jieqiUserInfo');
	start = 0;
	offset = cookieInfo.indexOf(',', start); 
	while(offset > 0){
		tmpval = cookieInfo.substring(start, offset);
		tmpidx = tmpval.indexOf('=');
		if(tmpidx > 0){
           tmpname = tmpval.substring(0, tmpidx);
		   tmpval = tmpval.substring(tmpidx+1, tmpval.length);
		   jieqiUserInfo[tmpname] = tmpval;
		}
		start = offset+1;
		if(offset < cookieInfo.length){
		  offset = cookieInfo.indexOf(',', start); 
		  if(offset == -1) offset =  cookieInfo.length;
		}else{
          offset = -1;
		}
	}
}

//��ȡCOOKIE����
function get_cookie_value(Name) {
	var search = Name + "=";
	var returnvalue = ""; 
	if (document.cookie.length > 0) {
		offset = document.cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = document.cookie.indexOf(";", offset);
			if (end == -1) end = document.cookie.length;
			returnvalue = unescape(document.cookie.substring(offset, end));
		}
	}
	return returnvalue; 
}
var htmlstr = '';
if(jieqiUserInfo['jieqiUserId'] > 0 && document.cookie.indexOf('PHPSESSID') != -1){
   htmlstr += '<span>'+jieqiUserInfo['jieqiUserName_un']+'��</span>\
	<a href="/message.php?box=inbox">��Ϣ</a>\
	<a href="/userdetail.php">��Ա</a>\
	<a href="/modules/article/bookcase.php">���</a>\
	<a href="/logout.php">�˳�</a>';
}else{
  var jumpurl = "";
  if(location.href.indexOf("jumpurl") == -1){
    jumpurl = location.href;
  }
  htmlstr += '<a class="hot" href="/login.php" onclick="openDialog(\'/login.php?ajax_gets=jieqi_contents\', false);stopEvent();">��¼</a>\
		<a class="hot" href="/register.php" onclick="openDialog(\'/register.php?ajax_gets=jieqi_contents\', false);stopEvent();">ע��</a>\
		<a href="/api/qq/login.php">QQ��¼</a>\
		<a href="/api/weibo/login.php">΢����¼</a>';
  
}
document.write(htmlstr);