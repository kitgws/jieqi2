<?php
	
	include('../public/api_header.php');
	header("Content-type: text/html; charset=gbk"); 
	
	/*	?AE1/4??¨¦AE?1|??
	 *	¡¤¡é¡À¨ª??url:/userpage.php?id=param
	 *	¡¤¡é¡À¨ª???¡¤??url:/avatar.php?uid=param&size=2
	 *	?¨¦??url:/modules/article/articleinfo.php?id=param
	 *	?¡Â??/AE???????url:/modules/article/reviewshow.php?rid=param
	 *	
	 *	¡¤¡é¡À¨ª??(url),¡¤¡é¡À¨ª???¡¤??,?¨¦??,????,??AE?,¡·???(AE???url),AE???(?¨¦1/4(R)url)
	 *  jieqi_article_reviews:posterid  =>	jieqi_system_users:uid
	 *	jieqi_article_reviews:ownerid	=>	jieqi_article_article:articleid 
	 *	jieqi_article_reviews:topicid	=>	jieqi_article_replies:topicid
	*/
	
	$poster_img_url =  "http://www.yuedufang.com/avatar.php?uid=";;
	$poster_img_width = '70';
	$poster_img_height = '70';
	
	$user_page_url = "http://www.yuedufang.com/userpage.php?id=";
	$article_info_url = "http://www.yuedufang.com/modules/article/articleinfo.php?id=";
	
	$reviews_show_url = "http://www.yuedufang.com/modules/article/reviewshow.php?rid=";
	
	$sql = 'select r.posterid,r.poster,r.topicid,from_unixtime(r.posttime,"%Y-%m-%d") as posttime,j.articlename,j.articleid,rep.posttext 
	from jieqi_article_reviews as r 
	inner join jieqi_article_article as j 
	inner join jieqi_article_replies as rep
	where 
	r.ownerid = j.articleid and r.topicid = rep.topicid and is_recommend = 1 group by r.topicid order by r.topicid desc limit 0,6  ';
	$result = mysql_query($sql,$con);
	
	while($row = mysql_fetch_array($result)){
		//echo '<img src="' . $poster_img_url . $row['posterid']. '&size=2" width="' . $poster_img_width . '" height="' . $poster_img_height .'" />';
//		echo '<a href="' . $user_page_url . $row['posterid'] . '">'. $row['poster'] . '</a> ';
//		echo '<a href="' . $article_info_url . $row['articleid'] . '">??'. $row['articlename'] . '?¡¤</a>';
//		echo '[' . $row['posttime'] . ']';
//		echo '<a href="' . $reviews_show_url . $row['topicid'] . '">[¡·???]</a>';
//		echo '<a href="' . $article_info_url . $row['articleid'] . '">[AE???]</a>';
//		echo '</br>';
//		echo substr($row['posttext'],0,100);
//		echo '</br>';
		
		echo '<li>';
		echo '<div class="reviews_container">';
		echo '<div class="reviews_imgs">';
		echo '<a href="' . $user_page_url . $row['posterid'] . '" target="_blank">'. '<img src="' . $poster_img_url . $row['posterid']. '&size=2" width="' . $poster_img_width . '" height="' . $poster_img_height .'" />' . '</a> ';
		echo '<div class="reviews_imgs_a">'.'<a href="' . $user_page_url . $row['posterid'] . '">'. $row['poster'] . '</a> '. '</div>';
		echo '</div>';
		echo '<div class="reviews_contents">';
		echo '<div class="contents_title"><p>ÆÀ:';
		echo '<a href="' . $article_info_url . $row['articleid'] . '">¡¶'. $row['articlename'] . '¡·</a>';
		echo '</p></div>';
		echo '<div class="content">' . mb_substr($row['posttext'],0,38,'gbk') . '</div>';
		echo '<div class="reviews_bottom">';
		echo '<div class="reviews_pinglun">';
		echo '<a href="' . $reviews_show_url . $row['topicid'] . '">[ÍÂ²ÛÆÀÂÛ]</a>';
		echo '</div></div></div>';
		
	
	}
	
	include('../public/api_footer.php');
?>