<?php
	
	include('../public/api_header.php');
	header("Content-type: text/html; charset=gbk"); 
	
	/*	�Ƽ���������
	 *	������url:/userpage.php?id=param
	 *	������ͷ��url:/avatar.php?uid=param&size=2
	 *	����url:/modules/article/articleinfo.php?id=param
	 *	����/��������url:/modules/article/reviewshow.php?rid=param
	 *	
	 *	������(url),������ͷ��,����,����,����,�ظ�(����url),����(�鼮url)
	 *  jieqi_article_reviews:posterid  =>	jieqi_system_users:uid
	 *	jieqi_article_reviews:ownerid	=>	jieqi_article_article:articleid 
	 *	jieqi_article_reviews:topicid	=>	jieqi_article_replies:topicid
	*/
	
	$poster_img_url =  "http://www.yuedufang.com/avatar.php?uid=";;
	$poster_img_width = '';
	$poster_img_height = '';
	
	$user_page_url = "http://www.yuedufang.com/userpage.php?id=";
	$article_info_url = "http://www.yuedufang.com/modules/article/articleinfo.php?id=";
	
	$reviews_show_url = "http://www.yuedufang.com/modules/article/reviewshow.php?rid=";
	
	$sql = 'select r.posterid,r.poster,r.topicid,from_unixtime(r.posttime,"%Y-%m-%d") as posttime,j.articlename,j.articleid,rep.posttext 
	from jieqi_article_reviews as r 
	inner join jieqi_article_article as j 
	inner join jieqi_article_replies as rep
	where 
	r.ownerid = j.articleid and r.topicid = rep.topicid';
	$result = mysql_query($sql,$con);
	
	while($row = mysql_fetch_array($result)){
		echo '<img src="' . $poster_img_url . $row['posterid']. '&size=2" width="' . $poster_img_width . '" height="' . $poster_img_height .'" />';
		echo '<a href="' . $user_page_url . $row['posterid'] . '">'. $row['poster'] . '</a> ';
		echo '<a href="' . $article_info_url . $row['articleid'] . '">��'. $row['articlename'] . '��</a>';
		echo '[' . $row['posttime'] . ']';
		echo '<a href="' . $reviews_show_url . $row['topicid'] . '">[�ظ�]</a>';
		echo '<a href="' . $article_info_url . $row['articleid'] . '">[����]</a>';
		echo '</br>';
		echo substr($row['posttext'],0,100);
		echo '</br>';
	}
	
	include('../public/api_footer.php');
?>