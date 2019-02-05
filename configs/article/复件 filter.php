<?php
//过滤条件设置

//排序方式
$jieqiFilter['article']['order'] = array(
	'weekvisit' => array('caption'=>'周点击', 'order'=>'weekvisit DESC', 'limit'=>'lastvisit >= <{$weekstart}>'),
	'monthvisit' => array('caption'=>'月点击', 'order'=>'monthvisit DESC', 'limit'=>'lastvisit >= <{$monthstart}>'),
	'allvisit' => array('caption'=>'总点击', 'order'=>'allvisit DESC'),
	'weekvote' => array('caption'=>'周推荐', 'order'=>'weekvote DESC', 'limit'=>'lastvote >= <{$weekstart}>'),
	'monthvote' => array('caption'=>'月推荐', 'order'=>'monthvote DESC', 'limit'=>'lastvote >= <{$monthstart}>'),
	'allvote' => array('caption'=>'总推荐', 'order'=>'allvote DESC'),
//	'weekflower' => array('caption'=>'周鲜花', 'order'=>'weekflower DESC', 'limit'=>'lastflower >= <{$weekstart}>'),
//	'monthflower' => array('caption'=>'月鲜花', 'order'=>'monthflower DESC', 'limit'=>'lastflower >= <{$monthstart}>'),
//	'allflower' => array('caption'=>'总鲜花', 'order'=>'allflower DESC'),
//	'weekvipvote' => array('caption'=>'周月票', 'order'=>'weekvipvote DESC', 'limit'=>'lastvipvote >= <{$weekstart}>'),
//	'monthvipvote' => array('caption'=>'月月票', 'order'=>'monthvipvote DESC', 'limit'=>'lastvipvote >= <{$monthstart}>'),
	'allvipvote' => array('caption'=>'总月票', 'order'=>'allvipvote DESC'),
//	'newhot' => array('caption'=>'新书榜', 'order'=>'allvisit DESC', 'limit'=>'postdate >= '.(time() - 2592000)),
	'redrose' => array('caption'=>'魔法币榜', 'order'=>'redrose DESC'),
    'yellowrose' => array('caption'=>'红玫瑰榜', 'order'=>'yellowrose DESC'),
	'bluerose' => array('caption'=>'葡萄酒榜', 'order'=>'bluerose DESC'),
	'whiterose' => array('caption'=>'巧克力榜', 'order'=>'whiterose DESC'),
	'greenrose' => array('caption'=>'水晶鞋榜', 'order'=>'greenrose DESC'),
	'blackrose' => array('caption'=>'南瓜马车榜', 'order'=>'blackrose DESC'),
	'size' => array('caption'=>'字数', 'order'=>'size DESC'),
	'goodnum' => array('caption'=>'收藏数', 'order'=>'goodnum DESC'),
	'lastupdate' => array('caption'=>'更新时间', 'order'=>'lastupdate DESC'),
	'postdate' => array('caption'=>'入库时间', 'order'=>'postdate DESC'),
	'toptime' => array('caption'=>'编辑推荐', 'order'=>'toptime DESC')
);

//字数限制(注意：size 在数据库是字节数，是实际字数的2倍)
$jieqiFilter['article']['size'] = array(
	1 => array('caption'=>'30万以下', 'limit'=>'size < 600000'),
	2 => array('caption'=>'30-50万', 'limit'=>'size >= 600000 AND size < 1000000'),
	3 => array('caption'=>'50-100万', 'limit'=>'size >= 1000000 AND size < 2000000'),
	4 => array('caption'=>'100-200万', 'limit'=>'size >= 2000000 AND size < 4000000'),
	5 => array('caption'=>'200万以上', 'limit'=>'size >= 4000000')
);

//更新时间
$jieqiFilter['article']['update'] = array(
	1 => array('caption'=>'三日内', 'days'=>3),
	2 => array('caption'=>'七日内', 'days'=>7),
	3 => array('caption'=>'半月内', 'days'=>15),
	4 => array('caption'=>'一月内', 'days'=>30)
);

//所属频道
$jieqiFilter['article']['rgroup'] = array(
	1 => array('caption'=>'男生', 'limit'=>'rgroup = 0'),
	2 => array('caption'=>'女生', 'limit'=>'rgroup = 1')
);

//是否原创
$jieqiFilter['article']['original'] = array(
	1 => array('caption'=>'原创', 'limit'=>'authorid > 0'),
	2 => array('caption'=>'转载', 'limit'=>'authorid = 0'),
);

//写作进度
$jieqiFilter['article']['isfull'] = array(
	1 => array('caption'=>'新书上传', 'limit'=>'progress = 0'),
	2 => array('caption'=>'情节展开', 'limit'=>'progress = 1'),
	3 => array('caption'=>'精彩纷呈', 'limit'=>'progress = 2'),
	4 => array('caption'=>'接近尾声', 'limit'=>'progress = 3'),
	5 => array('caption'=>'已经完本', 'limit'=>'progress = 4')
);

//VIP选项
$jieqiFilter['article']['isvip'] = array(
	1 => array('caption'=>'免费作品', 'limit'=>'isvip = 0'),
	2 => array('caption'=>'VIP作品', 'limit'=>'isvip > 0'),
	3 => array('caption'=>'签约作品', 'limit'=>'issign > 0'),
	//4 => array('caption'=>'只看包月作品', 'limit'=>'isvip > 0 AND monthly > 0')
);

?>