<?php
//���а���������
$jieqiTop['article']['allvisit'] = array('caption'=>'�����', 'description'=>'', 'where'=>'', 'sort'=>'allvisit', 'order'=>'DESC', 'default'=>1, 'publish' => '1');
$jieqiTop['article']['monthvisit'] = array('caption'=>'�µ����', 'description'=>'', 'where'=>'lastvisit >= <{$monthstart}>', 'sort'=>'monthvisit', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['weekvisit'] = array('caption'=>'�ܵ����', 'description'=>'', 'where'=>'lastvisit >= <{$weekstart}>', 'sort'=>'weekvisit', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['dayvisit'] = array('caption'=>'�յ����', 'description'=>'', 'where'=>'lastvisit >= <{$daystart}>', 'sort'=>'dayvisit', 'order'=>'DESC', 'default'=>0, 'publish' => '0');

$jieqiTop['article']['allvote'] = array('caption'=>'������', 'description'=>'', 'where'=>'', 'sort'=>'allvote', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['monthvote'] = array('caption'=>'���Ƽ���', 'description'=>'', 'where'=>'lastvote >= <{$monthstart}>', 'sort'=>'monthvote', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['weekvote'] = array('caption'=>'���Ƽ���', 'description'=>'', 'where'=>'lastvote >= <{$weekstart}>', 'sort'=>'weekvote', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['dayvote'] = array('caption'=>'���Ƽ���', 'description'=>'', 'where'=>'lastvote >= <{$daystart}>', 'sort'=>'dayvote', 'order'=>'DESC', 'default'=>0, 'publish' => '0');

$jieqiTop['article']['allvipvote'] = array('caption'=>'����Ʊ��', 'description'=>'', 'where'=>'', 'sort'=>'allvipvote', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['monthvipvote'] = array('caption'=>'����Ʊ��', 'description'=>'', 'where'=>'lastvipvote >= <{$monthstart}>', 'sort'=>'monthvipvote', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['previpvote'] = array('caption'=>'������Ʊ��', 'description'=>'', 'where'=>'', 'sort'=>'previpvote', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['weekvipvote'] = array('caption'=>'����Ʊ��', 'description'=>'', 'where'=>'lastvipvote >= <{$weekstart}>', 'sort'=>'weekvipvote', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['dayvipvote'] = array('caption'=>'����Ʊ��', 'description'=>'', 'where'=>'lastvipvote >= <{$daystart}>', 'sort'=>'dayvipvote', 'order'=>'DESC', 'default'=>0, 'publish' => '0');


$jieqiTop['article']['allflower'] = array('caption'=>'���Ͱ�', 'description'=>'', 'where'=>'', 'sort'=>'allflower', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['monthflower'] = array('caption'=>'���ʻ���', 'description'=>'', 'where'=>'lastflower >= <{$monthstart}>', 'sort'=>'monthflower', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['weekflower'] = array('caption'=>'���ʻ���', 'description'=>'', 'where'=>'lastflower >= <{$weekstart}>', 'sort'=>'weekflower', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['dayflower'] = array('caption'=>'���ʻ���', 'description'=>'', 'where'=>'lastflower >= <{$daystart}>', 'sort'=>'dayflower', 'order'=>'DESC', 'default'=>0, 'publish' => '0');


$jieqiTop['article']['allegg'] = array('caption'=>'�ܼ�����', 'description'=>'', 'where'=>'', 'sort'=>'allegg', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['monthegg'] = array('caption'=>'�¼�����', 'description'=>'', 'where'=>'lastegg >= <{$monthstart}>', 'sort'=>'monthegg', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['weekegg'] = array('caption'=>'�ܼ�����', 'description'=>'', 'where'=>'lastegg >= <{$weekstart}>', 'sort'=>'weekegg', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['dayegg'] = array('caption'=>'�ռ�����', 'description'=>'', 'where'=>'lastegg >= <{$daystart}>', 'sort'=>'dayegg', 'order'=>'DESC', 'default'=>0, 'publish' => '0');

$jieqiTop['article']['monthsize'] = array('caption'=>'���ڸ���', 'description'=>'', 'where'=>'lastupdate >= <{$monthstart}>', 'sort'=>'monthsize', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['weeksize'] = array('caption'=>'���ڸ���', 'description'=>'', 'where'=>'lastupdate >= <{$weekstart}>', 'sort'=>'weeksize', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['daysize'] = array('caption'=>'���ڸ���', 'description'=>'', 'where'=>'lastupdate >= <{$daystart}>', 'sort'=>'daysize', 'order'=>'DESC', 'default'=>0, 'publish' => '0');

$jieqiTop['article']['lastupdate'] = array('caption'=>'�������', 'description'=>'', 'where'=>'', 'sort'=>'lastupdate', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['postdate'] = array('caption'=>'�������', 'description'=>'', 'where'=>'', 'sort'=>'postdate', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['signtime'] = array('caption'=>'�����ϼ�', 'description'=>'', 'where'=>'vipid > 0', 'sort'=>'signtime', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['goodnum'] = array('caption'=>'�����', 'description'=>'', 'where'=>'', 'sort'=>'goodnum', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['size'] = array('caption'=>'������', 'description'=>'', 'where'=>'', 'sort'=>'size', 'order'=>'DESC', 'default'=>0, 'publish' => '1');
$jieqiTop['article']['toptime'] = array('caption'=>'��վ�Ƽ�', 'description'=>'', 'where'=>'', 'sort'=>'toptime', 'order'=>'DESC', 'default'=>0, 'publish' => '0');
$jieqiTop['article']['newhot'] = array('caption'=>'����Ǳ����', 'description'=>'', 'where'=>'postdate >= '.(time() - 2592000), 'sort'=>'allvisit', 'order'=>'DESC', 'default'=>0, 'publish' => '1');

?>