<?php
//zend53   
//Decode by www.dephp.cn  QQ 2859470
?>
<?php

define("JIEQI_MODULE_NAME", "article");
define("JIEQI_CHARSET_CONVERT", "1");
define("JIEQI_CHAR_SET", "utf8");
include_once ("../../../global.php");
if (empty($_REQUEST["id"]) || !is_numeric($_REQUEST["id"])) {
	jieqi_printfail(LANG_ERROR_PARAMETER);
}
header("Content-type: text/xml");
$_REQUEST["id"] = intval($_REQUEST["id"]);
include_once (JIEQI_ROOT_PATH . "/header.php");
jieqi_getconfigs(JIEQI_MODULE_NAME, "configs");
$jieqiTset["jieqi_page_template"] = $jieqiModules["article"]["path"] . "/api/articleinfo.xml";
jieqi_loadlang("article", JIEQI_MODULE_NAME);
include_once ($jieqiModules["article"]["path"] . "/class/article.php");
$article_handler = &JieqiArticleHandler::getInstance("JieqiArticleHandler");
$article = $article_handler->get($_REQUEST["id"]);

if (!$article) {
	jieqi_printfail($jieqiLang["article"]["article_not_exists"]);
}
else {
	if ((($article->getVar("display") != 0) || ($article->getVar("sourceid") != 0)) && ($jieqiUsersStatus != JIEQI_GROUP_ADMIN)) {
		jieqi_printfail($jieqiLang["article"]["article_not_audit"]);
	}
	else {
		jieqi_getconfigs(JIEQI_MODULE_NAME, "sort");
		$article_static_url = (empty($jieqiConfigs["article"]["staticurl"]) ? $jieqiModules["article"]["url"] : $jieqiConfigs["article"]["staticurl"]);
		$article_dynamic_url = (empty($jieqiConfigs["article"]["dynamicurl"]) ? $jieqiModules["article"]["url"] : $jieqiConfigs["article"]["dynamicurl"]);
		$jieqiTpl->assign("article_static_url", $article_static_url);
		$jieqiTpl->assign("article_dynamic_url", $article_dynamic_url);
		$jieqiTpl->assign("makezip", $jieqiConfigs["article"]["makezip"]);
		$jieqiTpl->assign("makejar", $jieqiConfigs["article"]["makejar"]);
		$jieqiTpl->assign("makeumd", $jieqiConfigs["article"]["makeumd"]);
		$jieqiTpl->assign("maketxtfull", $jieqiConfigs["article"]["maketxtfull"]);
		$jieqiTpl->assign("maketxt", $jieqiConfigs["article"]["maketxt"]);
		$jieqiTpl->assign("articlename", $article->getVar("articlename"));
		$keywords = $article->getVar("keywords", "n");
		$jieqiTpl->assign("keywords", jieqi_htmlstr($keywords));
		include_once (JIEQI_ROOT_PATH . "/include/funtag.php");
		$tags = jieqi_tag_clean($keywords);
		$tagrows = array();

		foreach ($tags as $k => $v ) {
			$tagrows[$k]["tagname"] = jieqi_htmlstr($v);
			$tagrows[$k]["tagencode"] = (empty($charset_convert_out) ? urlencode($v) : urlencode($charset_convert_out($v)));
		}

		$jieqiTpl->assign_by_ref("tagrows", $tagrows);
		$jieqiTpl->assign("postdate", date(JIEQI_DATE_FORMAT, $article->getVar("postdate")));
		$jieqiTpl->assign("lastupdate", date(JIEQI_DATE_FORMAT, $article->getVar("lastupdate")));
		$jieqiTpl->assign("posttime", $article->getVar("postdate"));
		$jieqiTpl->assign("lastuptime", $article->getVar("lastupdate"));
		$jieqiTpl->assign("authorid", $article->getVar("authorid"));
		$jieqiTpl->assign("author", $article->getVar("author"));
		$jieqiTpl->assign("agentid", $article->getVar("agentid"));
		$jieqiTpl->assign("agent", $article->getVar("agent"));
		$jieqiTpl->assign("sortid", $article->getVar("sortid"));
		$_REQUEST["class"] = $article->getVar("sortid");
		$_REQUEST["sortid"] = $article->getVar("sortid");
		$jieqiTpl->assign("sort", $jieqiSort["article"][$article->getVar("sortid")]["caption"]);
		$preg_from = array("/((https?|ftp):\/\/|www\.)[a-z0-9\/\-_+=.~!%@?#%&;:$\©¦]+(\.gif|\.jpg|\.jpeg|\.png|\.bmp)/isU");
		$preg_to = array("<img src=\"\\0\" border=\"0\">");
		$jieqiTpl->assign("intro", preg_replace($preg_from, $preg_to, $article->getVar("intro")));
		$jieqiTpl->assign("notice", preg_replace($preg_from, $preg_to, $article->getVar("notice")));
		$jieqiTpl->assign("imgflag", $article->getVar("imgflag", "n"));
		$url_simage = jieqi_geturl("article", "cover", $article->getVar("articleid"), "s", $article->getVar("imgflag", "n"));

		if (!empty($url_simage)) {
			$jieqiTpl->assign("hasimage", 1);
		}
		else {
			$jieqiTpl->assign("hasimage", 0);
		}

		$jieqiTpl->assign("url_simage", $url_simage);
		$jieqiTpl->assign("url_limage", jieqi_geturl("article", "cover", $article->getVar("articleid"), "l", $article->getVar("imgflag", "n")));
		$lastchapter = $article->getVar("lastchapter");

		if ($lastchapter != "") {
			if ($article->getVar("lastvolume") != "") {
				$lastchapter = $article->getVar("lastvolume") . " " . $lastchapter;
			}

			$jieqiTpl->assign("url_lastchapter", jieqi_geturl("article", "chapter", $article->getVar("lastchapterid"), $article->getVar("articleid")));
		}
		else {
			$jieqiTpl->assign("url_lastchapter", "");
		}

		$jieqiTpl->assign("lastchapter", $lastchapter);
		$jieqiTpl->assign("size", $article->getVar("size"));
		$jieqiTpl->assign("size_c", ceil($article->getVar("size") / 2));
		$jieqiTpl->assign("size_k", ceil($article->getVar("size") / 2000));
		$jieqiTpl->assign("size_w", round($article->getVar("size") / 20000, 1));
		$lastvisit = intval($article->getVar("lastvisit"));
		$lastvote = intval($article->getVar("lastvote"));
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

		$jieqiTpl->assign("lastvisit", $lastvisit);
		$jieqiTpl->assign("lastvote", $lastvote);

		if ($daystart <= $lastvisit) {
			$jieqiTpl->assign("dayvisit", $article->getVar("dayvisit"));
		}
		else {
			$jieqiTpl->assign("dayvisit", 0);
		}

		if ($weekstart <= $lastvisit) {
			$jieqiTpl->assign("weekvisit", $article->getVar("weekvisit"));
		}
		else {
			$jieqiTpl->assign("weekvisit", 0);
		}

		if ($monthstart <= $lastvisit) {
			$jieqiTpl->assign("monthvisit", $article->getVar("monthvisit"));
			$jieqiTpl->assign("mouthvisit", $article->getVar("monthvisit"));
		}
		else {
			$jieqiTpl->assign("monthvisit", 0);
			$jieqiTpl->assign("mouthvisit", 0);
		}

		$jieqiTpl->assign("allvisit", $article->getVar("allvisit"));

		if ($daystart <= $lastvote) {
			$jieqiTpl->assign("dayvote", $article->getVar("dayvote"));
		}
		else {
			$jieqiTpl->assign("dayvote", 0);
		}

		if ($weekstart <= $lastvote) {
			$jieqiTpl->assign("weekvote", $article->getVar("weekvote"));
		}
		else {
			$jieqiTpl->assign("weekvote", 0);
		}

		if ($monthstart <= $lastvote) {
			$jieqiTpl->assign("monthvote", $article->getVar("monthvote"));
			$jieqiTpl->assign("mouthvote", $article->getVar("monthvote"));
		}
		else {
			$jieqiTpl->assign("monthvote", $article->getVar("monthvote"));
			$jieqiTpl->assign("mouthvote", $article->getVar("monthvote"));
		}

		$jieqiTpl->assign("allvote", $article->getVar("allvote"));
		$jieqiTpl->assign("goodnum", $article->getVar("goodnum"));
		$jieqiTpl->assign("reviewsnum", $article->getVar("reviewsnum"));
		$ratenum = intval($article->getVar("ratenum"));
		$ratesum = intval($article->getVar("ratesum"));
		$rateavg = (0 < $ratenum ? $ratesum / $ratenum : 0);
		$jieqiTpl->assign("ratenum", $ratenum);
		$jieqiTpl->assign("ratesum", $ratesum);
		if (empty($jieqiConfigs["article"]["maxrates"]) || !is_numeric($jieqiConfigs["article"]["maxrates"])) {
			$jieqiConfigs["article"]["maxrates"] = 10;
		}

		$jieqiTpl->assign("ratemax", intval($jieqiConfigs["article"]["maxrates"]));
		$jieqiTpl->assign("rateavg", sprintf("%0.1f", $rateavg));
		$jieqiTpl->assign("rateavg_i", floor($rateavg));
		$jieqiTpl->assign("rateavg_d", (round($rateavg, 1) * 10) % 10);
		jieqi_getconfigs("article", "option", "jieqiOption");
		$tmpvar = $article->getVar("fullflag");

		if (isset($jieqiOption["article"]["fullflag"]["items"][$tmpvar])) {
			$jieqiTpl->assign("fullflag", $jieqiOption["article"]["fullflag"]["items"][$tmpvar]);
		}
		else {
			$jieqiTpl->assign("fullflag", $jieqiOption["article"]["fullflag"]["items"][$jieqiOption["article"]["fullflag"]["default"]]);
		}

		$tmpvar = $article->getVar("permission");

		if (isset($jieqiOption["article"]["permission"]["items"][$tmpvar])) {
			$jieqiTpl->assign("permission", $jieqiOption["article"]["permission"]["items"][$tmpvar]);
		}
		else {
			$jieqiTpl->assign("permission", $jieqiOption["article"]["permission"]["items"][$jieqiOption["article"]["permission"]["default"]]);
		}

		$tmpvar = $article->getVar("firstflag");

		if (isset($jieqiOption["article"]["firstflag"]["items"][$tmpvar])) {
			$jieqiTpl->assign("firstflag", $jieqiOption["article"]["firstflag"]["items"][$tmpvar]);
		}
		else {
			$jieqiTpl->assign("firstflag", $jieqiOption["article"]["firstflag"]["items"][$jieqiOption["article"]["firstflag"]["default"]]);
		}

		$jieqiTpl->assign("articleid", $article->getVar("articleid"));
		$jieqiTpl->assign("lastchapterid", $article->getVar("lastchapterid"));
		$jieqiTpl->assign("isvip", $article->getVar("isvip"));

		if (0 < $article->getVar("chapters", "n")) {
			$jieqiTpl->assign("url_read", jieqi_geturl("article", "article", $article->getVar("articleid"), "index"));
			$jieqiTpl->assign("url_fullpage", jieqi_geturl("article", "article", $article->getVar("articleid"), "full"));
		}
		else {
			$jieqiTpl->assign("url_read", "#");
			$jieqiTpl->assign("url_fullpage", "#");
		}

		$jieqiTpl->assign("url_bookcase", $article_dynamic_url . "/addbookcase.php?bid=" . $article->getVar("articleid"));
		$jieqiTpl->assign("url_uservote", $article_dynamic_url . "/uservote.php?id=" . $article->getVar("articleid"));

		if (0 < $article->getVar("authorid")) {
			$jieqiTpl->assign("url_authorpage", $article_dynamic_url . "/authorpage.php?id=" . $article->getVar("authorid"));
		}
		else {
			$jieqiTpl->assign("url_authorpage", "#");
		}

		$jieqiTpl->assign("url_authorarticle", $article_dynamic_url . "/authorarticle.php?author=" . urlencode($article->getVar("author", "n")));
		$articletype = intval($article->getVar("articletype"));

		if (0 < ($articletype & 1)) {
			$hasebook = 1;
		}
		else {
			$hasebook = 0;
		}

		if (0 < ($articletype & 2)) {
			$hasobook = 1;
		}
		else {
			$hasobook = 0;
		}

		if (0 < ($articletype & 4)) {
			$hastbook = 1;
		}
		else {
			$hastbook = 0;
		}

		if ($hasobook == 1) {
			include_once ($jieqiModules["obook"]["path"] . "/class/obook.php");
			$obook_handler = &JieqiObookHandler::getInstance("JieqiObookHandler");
			$criteria = new CriteriaCompo();
			$criteria->add(new Criteria("articleid", $article->getVar("articleid"), "="));
			$obook_handler->queryObjects($criteria);
			$obook = $obook_handler->getObject();
			if (is_object($obook) && ($obook->getVar("display") == 0) && (0 < $obook->getVar("size"))) {
				$jieqiTpl->assign("obook_obookid", $obook->getVar("obookid"));
				$jieqiTpl->assign("obook_lastvolume", $obook->getVar("lastvolume"));
				$jieqiTpl->assign("obook_lastvolumeid", $obook->getVar("lastvolumeid"));
				$jieqiTpl->assign("obook_lastchapter", $obook->getVar("lastchapter"));
				$jieqiTpl->assign("obook_lastchapterid", $obook->getVar("lastchapterid"));
				$jieqiTpl->assign("obook_lastupdate", date(JIEQI_DATE_FORMAT, $obook->getVar("lastupdate")));
				$jieqiTpl->assign("obook_lastuptime", $obook->getVar("lastupdate"));
				$jieqiTpl->assign("obook_size", $obook->getVar("size"));
				$jieqiTpl->assign("obook_publishid", $obook->getVar("publishid"));
			}
			else {
				$hasobook = 0;
			}
		}

		$jieqiTpl->assign("articletype", $articletype);
		$jieqiTpl->assign("hasebook", $hasebook);
		$jieqiTpl->assign("hasobook", $hasobook);
		$jieqiTpl->assign("hastbook", $hastbook);
	}
}

include_once (JIEQI_ROOT_PATH . "/footer.php");

?>
