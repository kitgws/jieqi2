<?php
//zend53   
//Decode by www.dephp.cn  QQ 2859470
?>
<?php
jieqi_includedb();
class JieqiConfigs extends JieqiObjectData
{
	public function JieqiConfigs()
	{
		$this->initVar("cid", JIEQI_TYPE_INT, 0, "���", false, 8);
		$this->initVar("modname", JIEQI_TYPE_TXTBOX, "", "ģ������", true, 50);
		$this->initVar("cname", JIEQI_TYPE_TXTBOX, "", "��������", true, 50);
		$this->initVar("ctitle", JIEQI_TYPE_TXTBOX, "", "���ñ���", false, 50);
		$this->initVar("cvalue", JIEQI_TYPE_TXTAREA, "", "����ֵ", false, NULL);
		$this->initVar("cdescription", JIEQI_TYPE_TXTAREA, "", "��������", false, NULL);
		$this->initVar("cdefine", JIEQI_TYPE_INT, 0, "�Ƿ���", false, 1);
		$this->initVar("ctype", JIEQI_TYPE_INT, 0, "��������", false, 1);
		$this->initVar("options", JIEQI_TYPE_TXTAREA, "", "����ѡ��", false, NULL);
	}
}

class JieqiConfigsHandler extends JieqiObjectHandler
{
	public function JieqiConfigsHandler($db = "")
	{
		$this->JieqiObjectHandler($db);
		$this->basename = "configs";
		$this->autoid = "cid";
		$this->dbname = "system_configs_wap";
	}
}



?>
