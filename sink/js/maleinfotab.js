$('.b_nyinfomenu ul li').click(
	function(){
		$(this).addClass('ny_choose').siblings().removeClass('ny_choose');
		$('.b_nyinfomain').children().hide().eq($(this).parent().children().index(this)).show();
	}
);
$('.b_nybox02_lboxmenu ul li').click(
	function(){
		$(this).addClass('ny_choose2').siblings().removeClass('ny_choose2');
		$('.b_nybox02_lboxmain').children().hide().eq($(this).parent().children().index(this)).show();
	}
);
$('.b_nybox03_lmaintab ul li').mouseover(
	function(){
		$(this).addClass('ny_choose3').siblings().removeClass('ny_choose3');
		$('.b_nybox03_lmaincon').children().hide().eq($(this).parent().children().index(this)).show();
	}
);
$("a[class='author']").click(
	function(){
		$(this).parent().parent().find('.author').html('Õ¹¿ª>>>').eq($(this).parent().parent().find('.author').index(this)).html('');
		$('.newbox01rightall .new2011330boxcaa').css('height','70px').eq($(this).parent().parent().find('.author').index(this)).css('height','auto');
	}
);
$('.newinforzk a').click(
	function(){
		$('.newbox01rightall .new2011330boxcaa').hide().eq($(this).parent().parent().find('.ahthor').index(this)).show();
	}
);