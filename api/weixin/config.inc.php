<?php
//΢�ŵ�¼�ӿڲ�������
//δ����΢�ŵ�¼�ӿ��˺ŵģ��뵽 http://open.weixin.qq.com/ �ύ����

$apiOrder = 2; //�ӿ���ţ������޸�
$apiName = 'weixin'; //�ӿ����������޸�
$apiTitle = '΢��'; //�ӿڱ��⣬�����޸�

$apiConfigs[$apiName] = array(); //��ʼ���������飬�����޸�

$apiConfigs[$apiName]['appid'] = 'wx297596f965591fdb';  //Ӧ��ID������ʵ�������ֵ�޸�

$apiConfigs[$apiName]['appkey'] = '6e09e5271bde272df3806f9e27dc053d';  //�ӿ���Կ������ʵ�������ֵ�޸�

//$apiConfigs[$apiName]['callback'] = JIEQI_LOCAL_URL.'/api/'.$apiName.'/loginback.php';  //��¼�󷵻صı�վ��ַ�������޸�

$apiConfigs[$apiName]['callback'] = 'http://m.888yanqing.com/api/weixin/loginback.php';  //��¼�󷵻صı�վ��ַ�������޸�

$apiConfigs[$apiName]['scope'] = 'snsapi_login'; //������Ȩ��Щapi�ӿڣ���Ӣ�Ķ��ŷָ�

?>