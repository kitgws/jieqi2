<?php

define('JIEQI_MODULE_NAME', 'article');

if (!defined('JIEQI_GLOBAL_INCLUDE')) {
	include_once '../../global.php';
}

if (isset($_REQUEST['id'])) {
	$_REQUEST['id'] = intval($_REQUEST['id']);
}

if (isset($_REQUEST['acode']) && !preg_match('/^[a-z0-9_]+$/i', $_REQUEST['acode'])) {
	$_REQUEST['acode'] = '';
}

if ((empty($_REQUEST['id']) || !is_numeric($_REQUEST['id'])) && empty($_REQUEST['acode'])) {
	jieqi_printfail(LANG_ERROR_PARAMETER);
}

include_once JIEQI_ROOT_PATH . '/header.php';
jieqi_getconfigs(JIEQI_MODULE_NAME, 'configs');
$jieqiTset['jieqi_contents_template'] = $jieqiModules['article']['path'] . '/templates/articleinfo.html';
if (empty($_REQUEST['id']) && !empty($_REQUEST['acode'])) {
	$jieqiTset['jieqi_contents_cacheid'] = $_REQUEST['acode'];
}
else {
	$jieqiTset['jieqi_contents_cacheid'] = $_REQUEST['id'];
}

$content_used_cache = false;

if (JIEQI_USE_CACHE) {
	$jieqiTpl->setCaching(1);
	$jieqiTpl->setCachType(1);

	if ($jieqiTpl->is_cached($jieqiTset['jieqi_contents_template'], $jieqiTset['jieqi_contents_cacheid'], NULL, NULL, NULL, false)) {
		$content_used_cache = true;
	}
}
else {
	$jieqiTpl->setCaching(0);
}

if (!$content_used_cache) {
	jieqi_loadlang('article', JIEQI_MODULE_NAME);
	include_once $jieqiModules['article']['path'] . '/class/article.php';
	$article_handler = &JieqiArticleHandler::getInstance('JieqiArticleHandler');
	if (empty($_REQUEST['id']) && !empty($_REQUEST['acode'])) {
		$article = $article_handler->get($_REQUEST['acode'], 'articlecode');
	}
	else {
		$article = $article_handler->get($_REQUEST['id']);
	}

	if (!$article) {
		jieqi_printfail($jieqiLang['article']['article_not_exists']);
	}
	else if ($article->getVar('display') != 0) {
		jieqi_getconfigs(JIEQI_MODULE_NAME, 'power');

		if (!jieqi_checkpower($jieqiPower['article']['manageallarticle'], $jieqiUsersStatus, $jieqiUsersGroup, true)) {
			if ($article->getVar('display') == 1) {
				jieqi_printfail($jieqiLang['article']['article_not_audit']);
			}
			else {
				jieqi_printfail($jieqiLang['article']['article_not_exists']);
			}
		}
	}

	$_REQUEST['id'] = intval($article->getVar('articleid', 'n'));

	if ($article->getVar('display') != 0) {
		$jieqiTpl->setCaching(0);
		$jieqiConfigs['article']['makehtml'] = 0;
	}

	$_REQUEST['class'] = $article->getVar('sortid');
	$_REQUEST['sortid'] = $article->getVar('sortid');
	jieqi_getconfigs('article', 'sort', 'jieqiSort');
	jieqi_getconfigs('article', 'option', 'jieqiOption');
	$article_static_url = (empty($jieqiConfigs['article']['staticurl']) ? $jieqiModules['article']['url'] : $jieqiConfigs['article']['staticurl']);
	$article_dynamic_url = (empty($jieqiConfigs['article']['dynamicurl']) ? $jieqiModules['article']['url'] : $jieqiConfigs['article']['dynamicurl']);
	$jieqiTpl->assign('article_static_url', $article_static_url);
	$jieqiTpl->assign('article_dynamic_url', $article_dynamic_url);
	$jieqiTpl->assign('makefull', $jieqiConfigs['article']['makefull']);
	$jieqiTpl->assign('makezip', $jieqiConfigs['article']['makezip']);
	$jieqiTpl->assign('makejar', $jieqiConfigs['article']['makejar']);
	$jieqiTpl->assign('makeumd', $jieqiConfigs['article']['makeumd']);
	$jieqiTpl->assign('maketxtfull', $jieqiConfigs['article']['maketxtfull']);
	$jieqiTpl->assign('maketxt', $jieqiConfigs['article']['maketxt']);
	$jieqiTpl->assign('ratemax', intval($jieqiConfigs['article']['maxrates']));
	//道具
	$jieqiTpl->assign('redroses', intval($jieqiConfigs['article']['redrose']));
	$jieqiTpl->assign('yellowroses', intval($jieqiConfigs['article']['yellowrose']));
	$jieqiTpl->assign('blueroses', intval($jieqiConfigs['article']['bluerose']));
	$jieqiTpl->assign('whiteroses', intval($jieqiConfigs['article']['whiterose']));
	$jieqiTpl->assign('blackroses', intval($jieqiConfigs['article']['blackrose']));
    $jieqiTpl->assign('greenroses', intval($jieqiConfigs['article']['greenrose']));
    $jieqiTpl->assign('eglodname', JIEQI_EGOLD_NAME);


	
	include_once $jieqiModules['article']['path'] . '/include/funarticle.php';
	$articlevals = jieqi_article_vars($article, true);
	$jieqiTpl->assign_by_ref('articlevals', $articlevals);

	foreach ($articlevals as $k => $v) {
		$jieqiTpl->assign($k, $articlevals[$k]);
	}

	if (2 <= floatval(JIEQI_VERSION)) {
		$keywords = $article->getVar('keywords', 'n');
		include_once JIEQI_ROOT_PATH . '/include/funtag.php';
		$tags = jieqi_tag_clean($keywords);
		$tagrows = array();

		foreach ($tags as $k => $v) {
			$tagrows[$k]['tagname'] = jieqi_htmlstr($v);
			$tagrows[$k]['tagencode'] = empty($charset_convert_out) ? urlencode($v) : urlencode($charset_convert_out($v));
		}

		$jieqiTpl->assign_by_ref('tagrows', $tagrows);
	}

	$setting = jieqi_unserialize($article->getVar('setting', 'n'));

	if (0 < $jieqiConfigs['article']['eachlinknum']) {
		$eachlinkrows = array();
		$eachlinkcount = 0;

		if (!empty($setting['eachlink']['ids'])) {
			foreach ($setting['eachlink']['ids'] as $k => $v) {
				$eachlinkrows[$eachlinkcount]['articleid'] = $v;
				$eachlinkrows[$eachlinkcount]['articlename'] = jieqi_htmlstr($setting['eachlink']['names'][$k]);
				$eachlinkrows[$eachlinkcount]['articlesubdir'] = jieqi_getsubdir($v);
				$tmpvar = (isset($setting['eachlink']['codes'][$k]) ? $setting['eachlink']['codes'][$k] : '');
				$eachlinkrows[$eachlinkcount]['url_articleinfo'] = jieqi_geturl('article', 'article', $v, 'info', $tmpvar);
				$eachlinkcount++;
			}
		}

		$jieqiTpl->assign('eachlinknum', $jieqiConfigs['article']['eachlinknum']);
		$jieqiTpl->assign('eachlinkcount', $eachlinkcount);
		$jieqiTpl->assign_by_ref('eachlinkrows', $eachlinkrows);
	}
	else {
		$jieqiTpl->assign('eachlinknum', 0);
		$jieqiTpl->assign('eachlinkcount', 0);
	}

	$showvote = 0;
	$jieqiConfigs['article']['articlevote'] = intval($jieqiConfigs['article']['articlevote']);
	if ((0 < $jieqiConfigs['article']['articlevote']) && isset($setting['avoteid']) && (0 < $setting['avoteid'])) {
		include_once $jieqiModules['article']['path'] . '/class/avote.php';
		$avote_handler = &JieqiAvoteHandler::getInstance('JieqiAvoteHandler');
		$avote = $avote_handler->get($setting['avoteid']);

		if (is_object($avote)) {
			$jieqiTpl->assign('voteid', $avote->getVar('voteid'));
			$jieqiTpl->assign('votetitle', $avote->getVar('title'));
			$jieqiTpl->assign('mulselect', $avote->getVar('mulselect'));
			$useitem = $avote->getVar('useitem', 'n');
			$voteitemrows = array();
			$i = 1;

			for (; $i <= $useitem; $i++) {
				$voteitemrows[$i - 1]['id'] = $i;
				$voteitemrows[$i - 1]['item'] = $avote->getVar('item' . $i);
			}

			$jieqiTpl->assign_by_ref('voteitemrows', $voteitemrows);
			$showvote = 1;
		}
	}

	$jieqiTpl->assign('showvote', $showvote);

	if (!isset($jieqiConfigs['system'])) {
		jieqi_getconfigs('system', 'configs');
	}

	$jieqiTpl->assign('postcheckcode', $jieqiConfigs['system']['postcheckcode']);
}

if (!isset($jieqiConfigs['article']['visitstatnum']) || !empty($jieqiConfigs['article']['visitstatnum'])) {
	include_once $jieqiModules['article']['path'] . '/articlevisit.php';
}

include_once JIEQI_ROOT_PATH . '/footer.php';

?>
