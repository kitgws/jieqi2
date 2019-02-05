$(document).ready(function(){
	var date = new Date();
	var timestamp = Date.parse(new Date());
	date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
	
	//hoverЧ��
	$('.select').parent().each(function (){
		$(this).mouseover(function (){
	
			$(this).children(".select").show() ;
		}) ;
	});	
	
	$('.select').parent().each(function (){
		$(this).mouseout(function (){
			$(this).children(".select").hide() ;
		}) ;
	});
	
	//�Զ�����
	var autoScroll = (function() {
			var top;
			var timer;
			var actualTop;
			function startTimer() {
				timer = setInterval(scroll, 40);
				try {
					if (document.selection) {
						document.selection.empty();
					} else {
						var selection = document.getSelection();
						selection.removeAllRanges();
					}
				} catch(e) {}
			}
			function scroll() {
				top = document.documentElement.scrollTop || document.body.scrollTop;
				if($.cookie('screen')!=null){
					top = top+parseInt($.cookie('screen'));
				}
				
				window.scroll(0, top);
				actualTop = document.documentElement.scrollTop || document.body.scrollTop;
				if (top != actualTop) {
					stopTimer();
				}
			}
			function stopTimer() {
				clearInterval(timer);
			}
			return {
				start: startTimer,
				stop: stopTimer
			};
		})();
		jQuery(document).dblclick(autoScroll.start);
		jQuery(document).mousedown(autoScroll.stop);
	
	//����
	$('#screen').click(function (){
		var selected = $('#screen').parent().parent().children(".select") ;
		selected.show() ;

	});
	$('#screen1').click(function (){
		var selected = $('#screen').parent().parent().children(".select") ;
		selected.show() ;

	});
	
	$('#screen').parent().parent().children('.select').children('p').each(function(){
		$(this).click(function(){
			
			$('#screen').val($(this).html()) ;
			$('#screen').parent().parent().children('.select').hide() ;
		 	var val = $('#screen').val() ;
			$.cookie('screen', val , { path: '/',expires: date});
			autoScroll.start() ;

		});	
	});
	//���� end
	
	//����ɫ�ı�
	$('#background').click(function (){
		var selected = $('#background').parent().parent().children(".select") ;
		selected.show() ;

	});
	$('#background1').click(function (){
		var selected = $('#background1').parent().parent().children(".select") ;
		selected.show() ;

	});

	$('#background').parent().parent().children('.select').children('p').each(function(){
		$(this).click(function(){
			$('#background').val($(this).html()) ;
			$('#background').parent().parent().children('.select').hide() ;
			
			$(".read-main").removeClass($('#background2').val());
//		 	$("body").removeClass($('#background2').val());
//			$("body").removeClass("bg_blue");
//			$("body").attr('style' , '') ;
			$(".read-main").val($(this).attr('class')) ;
			
			$(".read-main").addClass($(this).attr('class'));
//		 	$("body").addClass($(this).attr('class'));
		});	
	});

	//����ɫ�ı� end	
	
	//���ִ�С
	$('#fontSize').click(function (){
		var selected = $('#fontSize').parent().parent().children(".select") ;
		selected.show() ;

	});
	$('#fontSize1').click(function (){
		var selected = $('#fontSize1').parent().parent().children(".select") ;
		selected.show() ;

	});
	
	$('#fontSize').parent().parent().children('.select').children('p').each(function(){
		$(this).click(function(){
			$('#fontSize').val($(this).html()) ;
			$('#fontSize').parent().parent().children('.select').hide() ;
			
			$("#readcon").removeClass($('#fontSize2').val());
			$("#readcon").removeClass("fon_size");
			$('#fontSize2').val($(this).attr('class')) ;
			$("#readcon").addClass($(this).attr('class'));

		});	
	});	
	//���ִ�С end 

	//����
//	$('#fontFamily').click(function (){
//		var selected = $('#fontFamily').parent().parent().children(".select") ;
//		selected.show() ;
//
//	});
//	$('#fontFamily1').click(function (){
//		var selected = $('#fontFamily1').parent().parent().children(".select") ;
//		selected.show() ;
//
//	});
//	
//	$('#fontFamily').parent().parent().children('.select').children('p').each(function(){
//		$(this).click(function(){
//			$('#fontFamily').val($(this).html()) ;
//			$('#fontFamily').parent().parent().children('.select').hide() ;
//			
//			$("#readcon").removeClass($('#fontFamily2').val());
//			$('#fontFamily2').val($(this).attr('class')) ;
//			$("#readcon").addClass($(this).attr('class'));
//
//		});	
//	});	
	//���� end 
	
	//������ɫ�ı�
	$('#fontColor').click(function (){
		var selected = $('#fontColor').parent().parent().children(".select") ;
		selected.show() ;

	});
	$('#fontColor1').click(function (){
		var selected = $('#fontColor1').parent().parent().children(".select") ;
		selected.show() ;

	});
	
	$('#fontColor').parent().parent().children('.select').children('p').each(function(){
		$(this).click(function(){
			$('#fontColor').val($(this).html()) ;
			$('#fontColor').parent().parent().children('.select').hide() ;
			$("#readcon").removeClass($('#fontColor2').val());
			$('#fontColor2').val($(this).attr('class')) ;
			$("#readcon").addClass($(this).attr('class'));

		});	
	});

	//������ɫ�ı� end
	
	//���水ť , �ָ���ť
	$("li.select p").click(function (){
		$.cookie('screen', $('#screen').val(), { path: '/',expires: date});
		$.cookie('background', $('#background2').val() , { path: '/',expires: date});
		$.cookie('fontSize', $('#fontSize2').val() , { path: '/',expires: date});
		$.cookie('fontColor', $('#fontColor2').val() , { path: '/',expires: date});
//		$.cookie('fontFamily', $('#fontFamily2').val() , { path: '/',expires: date});
	}) ;
	$("#recoveryButton").click(function (){
		$('body').removeClass($.cookie('background')) ;
		$('body').removeClass($('#background2').val()) ;
		$('body').addClass('bg_blue');
		$('.read').removeClass($('#background2').val()) ;
		$('.read').removeClass($.cookie('background')) ;
		
		$('body').attr('style' , 'background:#E5F2F7') ;
		
		$('.read').attr('style' , 'background:#F2F8FB') ;
		
		

		$('#readcon').removeClass($('#fontSize2').val()) ;
		$('#readcon').removeClass($.cookie('fontSize')) ;
		$('#readcon').addClass("fon_size");
		$('#readcon').removeClass($('#fontColor2').val()) 
		$('#readcon').removeClass($.cookie('fontColor')) ;
//		$('#readcon').removeClass($('#fontFamily2').val()) ;
//		$('#readcon').removeClass($.cookie('fontFamily')) ;
		
		$.cookie('background', '' , { path: '/',expires: date});
		$.cookie('fontSize', '' , { path: '/',expires: date});
		$.cookie('fontColor', '' , { path: '/',expires: date});
//		$.cookie('fontFamily', '' , { path: '/',expires: date});
		$('#screen').val('����') ;
		$('#background').val('�Ķ���ɫ') ;
		$('#fontColor').val('����ɫ��') ;
//		$('#fontFamily').val('����') ;
		$('#fontSize').val('�����С') ;		
		
	}) ;
	//���水ť , �ָ���ť end 
	
 	//���¶�cookie
		//����
		if($.cookie('screen')!=null&&$.cookie('screen')!=''){
			$('#screen').val($.cookie('screen')) ;
			
		}else{
			$('#screen').val('����') ;
		}
	
		//���� end	
		
		//���ִ�С 
		if($.cookie('fontSize')!=null&&$.cookie('fontSize')!=''){
			$("#readcon").removeClass('fon_size');
			$("#readcon").addClass($.cookie('fontSize'));
			size=$.cookie('fontSize').replace('fon_',""); 
			size += 'px' ;
			$('#fontSize').val(size) ;
			$('#fontSize2').val($.cookie('fontSize')) ;
		}
		
		//���ִ�С end
		
		//����
		if($.cookie('background')!=null&&$.cookie('background')!=''){
			var bg_val = '�Ķ���ɫ' ;
			if($.cookie('background')=='bg_lan') bg_val = '����' ;
			if($.cookie('background')=='bg_huang') bg_val = '����' ;
			if($.cookie('background')=='bg_lv') bg_val = '����' ;
			
			if($.cookie('background')=='bg_fen') bg_val = '���' ;
			if($.cookie('background')=='bg_bai') bg_val = '��ɫ' ;
			if($.cookie('background')=='bg_hui') bg_val = '��ɫ' ;
			$('#background2').val($.cookie('background')) ;
			$('#background').val(bg_val) ;
			
			$("body").addClass($.cookie('background'));
			$(".read-main").addClass($.cookie('background'));
		}
		//���� end
		//������ɫ
		if($.cookie('fontColor')!=null&&$.cookie('fontColor')!=''){
			var zt_val = '����ɫ��' ;
			if($.cookie('fontColor')=='z_hei') zt_val = 'Ĭ�Ϻ�' ;
			if($.cookie('fontColor')=='z_red') zt_val = '��ɫ' ;
			if($.cookie('fontColor')=='z_lan') zt_val = '��ɫ' ;
			
			if($.cookie('fontColor')=='z_lv') zt_val = '��ɫ' ;
			if($.cookie('fontColor')=='z_hui') zt_val = '��ɫ' ;
	
			$('#fontColor2').val($.cookie('fontColor')) ;
			$('#fontColor').val(zt_val) ;
	
			  
			$("#readcon").addClass($.cookie('fontColor'));
		}
		//������ɫ end
		
		//���� 
//		if($.cookie('fontFamily')!=null&&$.cookie('fontFamily')!=''){
//
//			var fa_val = '����' ;
//			if($.cookie('fontFamily')=='fam_song') fa_val = '����' ;
//			if($.cookie('fontFamily')=='fam_hei') fa_val = '����' ;
//			if($.cookie('fontFamily')=='fam_kai') fa_val = '����' ;
//
//	
//			$('#fontFamily2').val($.cookie('fontFamily')) ;
//			$('#fontFamily').val(fa_val) ;
//	
//			  
//			$("#readcon").addClass($.cookie('fontFamily'));
//		}		
		
	//���� end
});
