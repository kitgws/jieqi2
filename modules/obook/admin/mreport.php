<?php
//zend53   
//Decode by www.dephp.cn  QQ 2859470
?>
<?php

function jieqi_excel_addrow($row, $sheet)
{
	static $excel_roworder = 1;
	$k = 1;

	foreach ($row as $v ) {
		$cellcode = jieqi_excel_colcode($k) . $excel_roworder;
		$sheet->setCellValue($cellcode, iconv("GBK", "UTF-8//IGNORE", $v));
		$sheet->getStyle($cellcode)->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		$sheet->getStyle($cellcode)->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		$sheet->getStyle($cellcode)->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		$sheet->getStyle($cellcode)->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		if ($excel_roworder == 1) {
			$sheet->getStyle($cellcode)->getFont()->setBold(true);
			$sheet->getStyle($cellcode)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		}

		$k++;
	}

	$excel_roworder++;
}

function jieqi_excel_setwidth($row, $sheet)
{
	$k = 1;

	foreach ($row as $v ) {
		$sheet->getColumnDimension(jieqi_excel_colcode($k))->setWidth(intval($v));
		$k++;
	}
}

function jieqi_excel_colcode($k)
{
	$ret = "";
	$k = intval($k);

	if (0 < $k) {
		while (26 < $k) {
			$ret = chr(64 + ($k % 26)) . $ret;
			$k = floor($k / 26);
		}

		$ret = chr(64 + $k) . $ret;
	}

	return $ret;
}

define("JIEQI_MODULE_NAME", "article");
require_once ("../../../global.php");
jieqi_getconfigs(JIEQI_MODULE_NAME, "power");
jieqi_checkpower($jieqiPower["article"]["manageallarticle"], $jieqiUsersStatus, $jieqiUsersGroup, false, true);
jieqi_getconfigs("article", "configs");
jieqi_getconfigs("article", "sort");
jieqi_getconfigs("system", "sites", "jieqiSites");
jieqi_getconfigs("article", "option", "jieqiOption");
jieqi_getconfigs("article", "export", "jieqiExport");

	$jieqiTset["jieqi_contents_template"] = $jieqiModules["obook"]["path"] . "/templates/admin/mreport.html";
	include_once (JIEQI_ROOT_PATH . "/admin/header.php");
	

	if (2 <= floatval(JIEQI_VERSION)) {
		$customsites = array();

		foreach ($jieqiSites as $k => $v ) {
			if (!empty($v["custom"])) {
				$customsites[$k] = $v;
			}
		}

		$jieqiTpl->assign("customsites", jieqi_funtoarray("jieqi_htmlstr", $customsites));
		$jieqiTpl->assign("customsitenum", count($customsites));
		$jieqiTpl->assign("jieqisites", jieqi_funtoarray("jieqi_htmlstr", $jieqiSites));
	}
	$date = date('Y年m月d日 H时',time());
    $dyear = date('Y',time());//今年
	$emonth = date('m',time());//本月
	if($emonth == 1){
	$dmonth = 12;
	}else{
	$dmonth = $emonth - 1;	
	}
	$rmonthrows = array(); 
	$q = 0; 
	for ($a = 0; $a < 12; $a++) { 
	$rmonthrows[$q]=$a+1; 
	$q++; 
	} 
    foreach ($rmonthrows as $k => $v ) {
				$rmonthrows[$k] = $v;
		}
	$jieqiTpl->assign("rmonthrows", jieqi_funtoarray("jieqi_htmlstr", $rmonthrows));
	
	$ryearrows = array(); 
	$j = 0; 
	for ($i = $dyear - 10; $i < $dyear; $i++) { 
	$ryearrows[$j]=$i+1; 
	$j++; 
	} 
    foreach ($ryearrows as $k => $v ) {
				$ryearrows[$k] = $v;
		}
	$jieqiTpl->assign("ryearrows", jieqi_funtoarray("jieqi_htmlstr", $ryearrows));
	
	
	
	
	
	
	$jieqiTpl->assign("dyear", $dyear);
	$jieqiTpl->assign("dmonth", $dmonth);
	$jieqiTpl->setCaching(0);
	include_once (JIEQI_ROOT_PATH . "/admin/footer.php");
?>
