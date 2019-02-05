<?php
//zend53   
//Decode by www.dephp.cn  QQ 2859470
?>
<?php
jieqi_includedb();
class JieqiBlocks extends JieqiObjectData
{
	public function JieqiBlocks()
	{
		$this->initVar("bid", JIEQI_TYPE_INT, 0, "���", false, 8);
		$this->initVar("blockname", JIEQI_TYPE_TXTBOX, "", "��������", true, 50);
		$this->initVar("modname", JIEQI_TYPE_TXTBOX, "", "ģ������", true, 50);
		$this->initVar("filename", JIEQI_TYPE_TXTBOX, "", "�ļ�����", false, 50);
		$this->initVar("classname", JIEQI_TYPE_TXTBOX, "", "������", true, 50);
		$this->initVar("side", JIEQI_TYPE_INT, 0, "����λ��", false, 3);
		$this->initVar("title", JIEQI_TYPE_TXTAREA, "", "�������", false, NULL);
		$this->initVar("description", JIEQI_TYPE_TXTAREA, "", "��������", false, NULL);
		$this->initVar("content", JIEQI_TYPE_TXTAREA, "", "��������", false, NULL);
		$this->initVar("vars", JIEQI_TYPE_TXTBOX, "", "�������", false, 255);
		$this->initVar("template", JIEQI_TYPE_TXTBOX, "", "ģ���ļ�����", false, 50);
		$this->initVar("cachetime", JIEQI_TYPE_INT, 0, "����ʱ��", false, 11);
		$this->initVar("contenttype", JIEQI_TYPE_INT, 0, "��������", false, 3);
		$this->initVar("weight", JIEQI_TYPE_INT, 0, "����˳��", false, 8);
		$this->initVar("showstatus", JIEQI_TYPE_INT, 0, "��ʾ״̬", false, 1);
		$this->initVar("custom", JIEQI_TYPE_INT, 0, "�Ƿ��Զ�������", false, 1);
		$this->initVar("canedit", JIEQI_TYPE_INT, 0, "�ɷ�༭", false, 1);
		$this->initVar("publish", JIEQI_TYPE_INT, 0, "�Ƿ񼤻�", false, 1);
		$this->initVar("hasvars", JIEQI_TYPE_INT, 0, "�Ƿ�֧�ֲ���", false, 1);
	}
}

class JieqiBlocksHandler extends JieqiObjectHandler
{
	public $sideary = array();
	public $contentary = array();

	public function JieqiBlocksHandler($db = "")
	{
		$this->JieqiObjectHandler($db);
		$this->basename = "blocks";
		$this->autoid = "bid";
		$this->dbname = "system_blocks_wap";
		$this->sideary = array(JIEQI_SIDEBLOCK_CUSTOM => "�Զ���", JIEQI_SIDEBLOCK_LEFT => "���", JIEQI_SIDEBLOCK_RIGHT => "�ұ�", JIEQI_CENTERBLOCK_LEFT => "����", JIEQI_CENTERBLOCK_RIGHT => "����", JIEQI_CENTERBLOCK_TOP => "����", JIEQI_CENTERBLOCK_MIDDLE => "����", JIEQI_CENTERBLOCK_BOTTOM => "����", JIEQI_TOPBLOCK_ALL => "����", JIEQI_BOTTOMBLOCK_ALL => "�ײ�", JIEQI_NAVBLOCK_LEFT => "����");
		$this->contentary = array(JIEQI_CONTENT_TXT => "���ı�", JIEQI_CONTENT_HTML => "��HTML", JIEQI_CONTENT_JS => "��JAVASCRIPT", JIEQI_CONTENT_MIX => "HTML��SCRIPT���", JIEQI_CONTENT_PHP => "PHP����");
	}

	public function getSideary()
	{
		return $this->sideary;
	}

	public function getSide($side)
	{
		if (isset($this->sideary[$side])) {
			return $this->sideary[$side];
		}
		else {
			return "����";
		}
	}

	public function getShowlist($type)
	{
		$ret = array();

		foreach ($this->showary as $k => $v ) {
			if (0 < ($type & $k)) {
				$ret[] = $k;
			}
		}

		return $ret;
	}

	public function getPublish($type)
	{
		if ($type == 3) {
			return "����ʾ";
		}
		else if ($type == 1) {
			return "��½ǰ��ʾ";
		}
		else if ($type == 2) {
			return "��½����ʾ";
		}
		else {
			return "����ʾ";
		}
	}

	public function getContentary($custom = true)
	{
		return $this->contentary;
	}

	public function getContenttype($type)
	{
		if (isset($this->contentary[$type])) {
			return $this->contentary[$type];
		}
		else {
			return "δ֪";
		}
	}

	public function saveContent($bid, $modname, $contenttype, &$content)
	{
		global $jieqiCache;
		$ret = false;
		if ((0 < strlen($bid)) && (0 < strlen($modname))) {
			$val = "";
			$fname = "";

			switch ($contenttype) {
			case JIEQI_CONTENT_TXT:
				$val = jieqi_htmlstr($content);
				$fname = ".html";
				break;

			case JIEQI_CONTENT_HTML:
				$val = $content;
				$fname = ".html";
				break;

			case JIEQI_CONTENT_JS:
				$val = $content;
				$fname = ".html";
				break;

			case JIEQI_CONTENT_MIX:
				$val = $content;
				$fname = ".html";
				break;
			}

			if (0 < strlen($fname)) {
				$cache_file = JIEQI_CACHE_PATH;
				if ((0 < strlen($modname)) && ($modname != "system")) {
					$cache_file .= "/modules/" . $modname;
				}

				if (is_numeric($bid)) {
					$cache_file .= "/templates/blocks/block_custom" . $bid . $fname;
				}
				else {
					$cache_file .= "/templates/blocks/" . $bid . ".html";
				}

				if ($fname != ".php") {
					$jieqiCache->set($cache_file, $val);
				}
				else {
					jieqi_checkdir(dirname($cache_file), true);
					jieqi_writefile($cache_file, $val);
				}

				$ret = true;
			}
		}

		return $ret;
	}
}



?>
