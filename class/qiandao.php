<?php 


jieqi_includedb();
//�û���
class JieqiQiandao extends JieqiObjectData
{
	//��������
	function JieqiQiandao()
	{
		$this->JieqiObjectData();
		$this->initVar('id', JIEQI_TYPE_INT, 0, '���', false, 11);
		$this->initVar('totalsign', JIEQI_TYPE_INT, 0, 'ǩ������', true, 11);
		$this->initVar('dates', JIEQI_TYPE_TXTBOX, '', 'ǩ������', false, 550);
		$this->initVar('time', JIEQI_TYPE_INT, 0, '���һ��ǩ��ʱ��', false, 11);
		$this->initVar('uid', JIEQI_TYPE_INT, 0, '�û�ID', false, 11);
        $this->initVar('uname', JIEQI_TYPE_TXTBOX, '', '�û���', false, 30);
	}
}

//------------------------------------------------------------------------
//------------------------------------------------------------------------

//���ݾ��
class JieqiQiandaoHandler extends JieqiObjectHandler
{
	function JieqiQiandaoHandler($db='')
	{
	    $this->JieqiObjectHandler($db);
	    $this->basename='qiandao';
	    $this->autoid='id';	
	    $this->dbname='system_qiandao';
	}
}

?>