<?php
//zend53   
//Decode by www.dephp.cn  QQ 2859470
?>
<?php

define("JIEQI_MODULE_NAME", "article");
define("JIEQI_CHARSET_CONVERT", "1");
define("JIEQI_CHAR_SET", "utf8");
define("JIEQI_PAGE_ROWS", "15");
include_once ("../../../global.php");
header("Content-type: text/xml");
jieqi_loadlang("list", JIEQI_MODULE_NAME);
jieqi_getconfigs("article", "configs");
jieqi_getconfigs("article", "sort");
jieqi_getconfigs("article", "top");
$jieqiTset["jieqi_page_template"] = $jieqiModules["article"]["path"] . "/api/articlelist.xml";
include_once (JIEQI_ROOT_PATH . "/header.php");
$jieqiPset = jieqi_get_pageset();
if (empty($_REQUEST["sort"]) || !isset($jieqiTop["article"][$_REQUEST["sort"]])) {
	$_REQUEST["sort"] = "";

	foreach ($jieqiTop["article"] as $k => $v ) {
		if ($_REQUEST["sort"] == "") {
			$_REQUEST["sort"] = $k;
		}

		if (0 < $v["default"]) {
			$_REQUEST["sort"] = $k;
			break;
		}
	}
}

if (empty($_REQUEST["class"]) || !is_numeric($_REQUEST["class"]) || !isset($jieqiSort["article"][$_REQUEST["class"]])) {
	$_REQUEST["class"] = 0;
}

$article_static_url = (empty($jieqiConfigs["article"]["staticurl"]) ? $jieqiModules["article"]["url"] : $jieqiConfigs["article"]["staticurl"]);
$article_dynamic_url = (empty($jieqiConfigs["article"]["dynamicurl"]) ? $jieqiModules["article"]["url"] : $jieqiConfigs["article"]["dynamicurl"]);
$jieqiTpl->assign("article_static_url", $article_static_url);
$jieqiTpl->assign("article_dynamic_url", $article_dynamic_url);
include_once ($jieqiModules["article"]["path"] . "/include/funarticle.php");
$jieqiTpl->assign("page", $jieqiPset["page"]);
include_once ($jieqiModules["article"]["path"] . "/class/article.php");
$article_handler = &JieqiArticleHandler::getInstance("JieqiArticleHandler");
$topsql = " WHERE display = 0 AND size > 0 AND sourceid = 0 AND isvip >0";
$classinfo = "";
if (!empty($_REQUEST["class"]) && is_numeric($_REQUEST["class"])) {
	$topsql .= " AND sortid = " . $_REQUEST["class"];
	$classinfo .= " - " . $jieqiSort["article"][$_REQUEST["class"]]["caption"];
}
else {
	$_REQUEST["class"] = 0;
}

$tmpvar = explode("-", date("Y-m-d", JIEQI_NOW_TIME));
$daystart = mktime(0, 0, 0, (int) $tmpvar[1], (int) $tmpvar[2], (int) $tmpvar[0]);
$monthstart = mktime(0, 0, 0, (int) $tmpvar[1], 1, (int) $tmpvar[0]);
$tmpvar = date("w", JIEQI_NOW_TIME);

if ($tmpvar == 0) {
	$tmpvar = 7;
}

$weekstart = $daystart;

if (1 < $tmpvar) {
	$weekstart -= ($tmpvar - 1) * 86400;
}

$jieqiTpl->assign("articletitle", $jieqiTop["article"][$_REQUEST["sort"]]["caption"] . $classinfo);
$repfrom = array("<{\$daystart}>", "<{\$weekstart}>", "<{\$monthstart}>");
$repto = array($daystart, $weekstart, $monthstart);

if ($jieqiTop["article"][$_REQUEST["sort"]]["where"] != "") {
	$topsql .= " AND " . str_replace($repfrom, $repto, $jieqiTop["article"][$_REQUEST["sort"]]["where"]);
}

if ($jieqiTop["article"][$_REQUEST["sort"]]["order"] != "") {
	$topsql .= " ORDER BY " . $jieqiTop["article"][$_REQUEST["sort"]]["sort"] . " " . $jieqiTop["article"][$_REQUEST["sort"]]["order"];
}
$topsql .= " LIMIT " . intval($jieqiPset["start"]) . ", " . intval($jieqiPset["rows"]);
$topsql = "SELECT * FROM " . jieqi_dbprefix("article_article") . $topsql;
$article_handler->execute($topsql);
$articlerows = array();
$k = 0;

while ($v = $article_handler->getObject()) {
	$articlerows[$k] = jieqi_article_vars($v);
	$k++;
}

$jieqiTpl->assign_by_ref("articlerows", $articlerows);
include_once (JIEQI_ROOT_PATH . "/footer.php");

?>
