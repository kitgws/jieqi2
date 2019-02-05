<?php
//������������

//����ʽ
$jieqiFilter['article']['order'] = array(
	'weekvisit' => array('caption'=>'�ܵ��', 'order'=>'weekvisit DESC', 'limit'=>'lastvisit >= <{$weekstart}>'),
	'monthvisit' => array('caption'=>'�µ��', 'order'=>'monthvisit DESC', 'limit'=>'lastvisit >= <{$monthstart}>'),
	'allvisit' => array('caption'=>'�ܵ��', 'order'=>'allvisit DESC'),
	'weekvote' => array('caption'=>'���Ƽ�', 'order'=>'weekvote DESC', 'limit'=>'lastvote >= <{$weekstart}>'),
	'monthvote' => array('caption'=>'���Ƽ�', 'order'=>'monthvote DESC', 'limit'=>'lastvote >= <{$monthstart}>'),
	'allvote' => array('caption'=>'���Ƽ�', 'order'=>'allvote DESC'),
//	'weekflower' => array('caption'=>'���ʻ�', 'order'=>'weekflower DESC', 'limit'=>'lastflower >= <{$weekstart}>'),
//	'monthflower' => array('caption'=>'���ʻ�', 'order'=>'monthflower DESC', 'limit'=>'lastflower >= <{$monthstart}>'),
//	'allflower' => array('caption'=>'���ʻ�', 'order'=>'allflower DESC'),
//	'weekvipvote' => array('caption'=>'����Ʊ', 'order'=>'weekvipvote DESC', 'limit'=>'lastvipvote >= <{$weekstart}>'),
//	'monthvipvote' => array('caption'=>'����Ʊ', 'order'=>'monthvipvote DESC', 'limit'=>'lastvipvote >= <{$monthstart}>'),
	'allvipvote' => array('caption'=>'����Ʊ', 'order'=>'allvipvote DESC'),
//	'newhot' => array('caption'=>'�����', 'order'=>'allvisit DESC', 'limit'=>'postdate >= '.(time() - 2592000)),
	'redrose' => array('caption'=>'ħ���Ұ�', 'order'=>'redrose DESC'),
    'yellowrose' => array('caption'=>'��õ���', 'order'=>'yellowrose DESC'),
	'bluerose' => array('caption'=>'���Ѿư�', 'order'=>'bluerose DESC'),
	'whiterose' => array('caption'=>'�ɿ�����', 'order'=>'whiterose DESC'),
	'greenrose' => array('caption'=>'ˮ��Ь��', 'order'=>'greenrose DESC'),
	'blackrose' => array('caption'=>'�Ϲ�����', 'order'=>'blackrose DESC'),
	'size' => array('caption'=>'����', 'order'=>'size DESC'),
	'goodnum' => array('caption'=>'�ղ���', 'order'=>'goodnum DESC'),
	'lastupdate' => array('caption'=>'����ʱ��', 'order'=>'lastupdate DESC'),
	'postdate' => array('caption'=>'���ʱ��', 'order'=>'postdate DESC'),
	'toptime' => array('caption'=>'�༭�Ƽ�', 'order'=>'toptime DESC')
);

//��������(ע�⣺size �����ݿ����ֽ�������ʵ��������2��)
$jieqiFilter['article']['size'] = array(
	1 => array('caption'=>'30������', 'limit'=>'size < 600000'),
	2 => array('caption'=>'30-50��', 'limit'=>'size >= 600000 AND size < 1000000'),
	3 => array('caption'=>'50-100��', 'limit'=>'size >= 1000000 AND size < 2000000'),
	4 => array('caption'=>'100-200��', 'limit'=>'size >= 2000000 AND size < 4000000'),
	5 => array('caption'=>'200������', 'limit'=>'size >= 4000000')
);

//����ʱ��
$jieqiFilter['article']['update'] = array(
	1 => array('caption'=>'������', 'days'=>3),
	2 => array('caption'=>'������', 'days'=>7),
	3 => array('caption'=>'������', 'days'=>15),
	4 => array('caption'=>'һ����', 'days'=>30)
);

//����Ƶ��
$jieqiFilter['article']['rgroup'] = array(
	1 => array('caption'=>'����', 'limit'=>'rgroup = 0'),
	2 => array('caption'=>'Ů��', 'limit'=>'rgroup = 1')
);

//�Ƿ�ԭ��
$jieqiFilter['article']['original'] = array(
	1 => array('caption'=>'ԭ��', 'limit'=>'authorid > 0'),
	2 => array('caption'=>'ת��', 'limit'=>'authorid = 0'),
);

//д������
$jieqiFilter['article']['isfull'] = array(
	1 => array('caption'=>'�����ϴ�', 'limit'=>'progress = 0'),
	2 => array('caption'=>'���չ��', 'limit'=>'progress = 1'),
	3 => array('caption'=>'���ʷ׳�', 'limit'=>'progress = 2'),
	4 => array('caption'=>'�ӽ�β��', 'limit'=>'progress = 3'),
	5 => array('caption'=>'�Ѿ��걾', 'limit'=>'progress = 4')
);

//VIPѡ��
$jieqiFilter['article']['isvip'] = array(
	1 => array('caption'=>'�����Ʒ', 'limit'=>'isvip = 0'),
	2 => array('caption'=>'VIP��Ʒ', 'limit'=>'isvip > 0'),
	3 => array('caption'=>'ǩԼ��Ʒ', 'limit'=>'issign > 0'),
	//4 => array('caption'=>'ֻ��������Ʒ', 'limit'=>'isvip > 0 AND monthly > 0')
);

?>