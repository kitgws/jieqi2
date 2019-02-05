<?php

define('JIEQI_MODULE_NAME', 'article');
require_once '../../global.php';
/*
if (2.2 <= floatval(JIEQI_VERSION)) {
	$_REQUEST['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
}
*/
if (empty($_REQUEST['id']) || !is_numeric($_REQUEST['id'])) {
	jieqi_printfail(LANG_ERROR_PARAMETER);
}

jieqi_checklogin();
$_REQUEST['id'] = intval($_REQUEST['id']);
jieqi_loadlang('vote', JIEQI_MODULE_NAME);
include_once JIEQI_ROOT_PATH . '/class/users.php';
$users_handler = &JieqiUsersHandler::getInstance('JieqiUsersHandler');
$jieqiUsers = $users_handler->get($_SESSION['jieqiUserId']);

if (!$jieqiUsers) {
	jieqi_printfail(LANG_NO_USER);
}

$userset = jieqi_unserialize($jieqiUsers->getVar('setting', 'n'));
$today = date('Y-m-d');
jieqi_getconfigs(JIEQI_MODULE_NAME, 'configs');
jieqi_getconfigs('article', 'action', 'jieqiAction');
jieqi_getconfigs('system', 'honors');
jieqi_getconfigs(JIEQI_MODULE_NAME, 'right');
if (isset($_REQUEST['num']) && !empty($_REQUEST['num']) && is_numeric($_REQUEST['num']) && (0 < intval($_REQUEST['num']))) {
	$addnum = intval($_REQUEST['num']);
}
else {
	$addnum = 1;
}

if ($addnum < 1) {
	$addnum = 1;
}

$maxvote = $jieqiConfigs['article']['dayvotes'];
$honorid = jieqi_gethonorid($_SESSION['jieqiUserScore'], $jieqiHonors);
if ($honorid && isset($jieqiRight['article']['dayvotes']['honors'][$honorid]) && is_numeric($jieqiRight['article']['dayvotes']['honors'][$honorid])) {
	$maxvote = intval($jieqiRight['article']['dayvotes']['honors'][$honorid]);
}

$voted = 0;
if (isset($userset['polldate']) && ($userset['polldate'] == $today)) {
	$voted = intval($userset['pollnum']);
}

if ($maxvote < ($voted + $addnum)) {
	jieqi_printfail(sprintf($jieqiLang['article']['vote_times_limit'], $maxvote));
}

include_once $jieqiModules['article']['path'] . '/class/article.php';
$article_handler = &JieqiArticleHandler::getInstance('JieqiArticleHandler');
$article = $article_handler->get($_REQUEST['id']);

if (!$article) {
	jieqi_printfail($jieqiLang['article']['article_not_exists']);
}

if (is_numeric($jieqiConfigs['article']['voteminsize']) && ($article->getVar('size') < intval($jieqiConfigs['article']['voteminsize']))) {
	jieqi_printfail(sprintf($jieqiLang['article']['vote_min_articlesize'], $jieqiConfigs['article']['voteminsize']));
}

include_once JIEQI_ROOT_PATH . '/include/funstat.php';
$lasttime = $article->getVar('lastvote', 'n');
$addorup = jieqi_visit_addorup($lasttime);
$dayvote = ($addorup['day'] ? $addnum : $article->getVar('dayvote', 'n') + $addnum);
$weekvote = ($addorup['week'] ? $addnum : $article->getVar('weekvote', 'n') + $addnum);
$monthvote = ($addorup['month'] ? $addnum : $article->getVar('monthvote', 'n') + $addnum);
$allvote = $article->getVar('allvote', 'n') + $addnum;
$criteria = new CriteriaCompo(new Criteria('articleid', $_REQUEST['id']));
$article_handler->updatefields(array('lastvote' => JIEQI_NOW_TIME, 'dayvote' => $dayvote, 'weekvote' => $weekvote, 'monthvote' => $monthvote, 'allvote' => $allvote), $criteria);
$taskmodule = 'article';
$taskname = 'poll';
jieqi_getconfigs('system', 'tasks', 'jieqiTasks');
if (!empty($jieqiTasks[$taskmodule][$taskname]['score']) && empty($_SESSION['jieqiUserSet']['tasks'][$taskmodule][$taskname])) {
	$userset['tasks'][$taskmodule][$taskname] = 1;
	$jieqiUsers->setVar('score', intval($jieqiUsers->getVar('score', 'n')) + intval($jieqiTasks[$taskmodule][$taskname]['score']));
}

if (isset($userset['polldate']) && ($userset['polldate'] == $today)) {
	$userset['pollnum'] = (int) $userset['pollnum'] + $addnum;
}
else {
	$userset['polldate'] = $today;
	$userset['pollnum'] = $addnum;
}

$jieqiUsers->setVar('setting', serialize($userset));
$jieqiUsers->saveToSession();
$users_handler->insert($jieqiUsers);
include_once $jieqiModules['article']['path'] . '/include/funaction.php';
$actions = array('actname' => 'poll', 'actnum' => $addnum);
jieqi_article_actiondo($actions, $article);
jieqi_msgwin(LANG_DO_SUCCESS, sprintf($jieqiLang['article']['vote_success'], $maxvote, $userset['pollnum']));

?>
