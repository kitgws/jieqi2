//@Description:  �麣ŮƵ����Ч��
//@Author:       tanjing 
//@Update:       tanjing(2014-12-31 10:10)
//@modify:       tanjing(2015-01-18)  

//���㶥����¼�󵼺��л�
$(function(){
   $("#jq_topmenu li").hover(function(){
	$(this).addClass("hover").find("div.jq_hidebox").show();
},function(){
	$(this).removeClass("hover").find(".jq_hidebox").hide();
   });
});

// jquery1.7.2.min.js ������1
$(function() {	
	//�����page.js��jQuery.jqtab���𿪡��ṹ��һ����ŮƵר��
	jQuery.jqtabmm = function(tabtit,tab_conbox,shijian) {
		$(tab_conbox).find("div").hide();
		$(tabtit).find("li:first").addClass("thistab"); 
		$(tab_conbox).find("div:first").show();
	
		$(tabtit).find("li").bind(shijian,function(){
		  $(this).addClass("thistab").siblings("li").removeClass("thistab"); 
			var activeindex = $(tabtit).find("li").index(this);
			$(tab_conbox).children().eq(activeindex).show().siblings().hide();
			return false;
		});
	
	};
	$.jqtabmm("#tabs111","#tab_conbox111","mouseenter");//����Ƽ���ע��
	/*���÷������£�*/
/*	$.jqtab("#tabs","#tab_conbox","click");	
	$.jqtab("#tabs1","#tab_conbox1","mouseenter");
	$.jqtab("#tabs2","#tab_conbox2","mouseenter");
	$.jqtab("#tabs3","#tab_conbox3","mouseenter");
	$.jqtab("#tabs4","#tab_conbox4","mouseenter");	
 	$.jqtab("#tabs5","#tab_conbox5","mouseenter");		
	$.jqtab("#tabs6","#tab_conbox6","mouseenter");	
	$.jqtab("#tabs7","#tab_conbox7","mouseenter");	
	$.jqtab("#tabs8","#tab_conbox8","mouseenter");	
	$.jqtab("#tabs9","#tab_conbox9","mouseenter");	
	$.jqtab("#tabs10","#tab_conbox10","mouseenter");	
	$.jqtab("#tabs11","#tab_con11","click");	
	$.jqtab("#tabs12","#tab_con12","click");*/
	
});
// jquery1.7.2.min.js ������2
/*$(function() {			   
	jQuery.jqtab2 = function(tabtit,tab_conbox,shijian) {		
		$(tab_conbox).find("li").hide();
//		$(tab_conbox).find(".st").find("li").show();		
		$(tabtit).find("li:first").addClass("thistab").show(); 
		$(tab_conbox).find("li:first").show();
//		$('#tabs12 li').show();
	
		$(tabtit).find("li").bind(shijian,function(){
		  $(this).addClass("thistab").siblings("li").removeClass("thistab"); 
			var activeindex = $(tabtit).find("li").index(this);
			$(tab_conbox).children().eq(activeindex).show().siblings().hide();
			return false;
		});
	
	};
	���÷������£�
	$.jqtab2("#tabs0","#tab_conbox0","click");	
	$.jqtab2("#tabs11","#tab_conbox11","mouseenter");	
	$.jqtab2("#tabs22","#tab_conbox22","mouseenter");	
	$.jqtab2("#tabs33","#tab_conbox33","mouseenter");	

});*/

//��ҳͼ���л�
//$("div.qh dl").each(function(){
//		var con = $(this);
//		var img = con.find("dd.im");
//		var txt = con.find("dd.tt");
//		con.find("dd.tt").each(function(){
//			$(this).bind("mouseover",function(){
//				var index = $(this).index(txt);
//				img.hide();
//				txt.show();
//				$(this).prev().show();//alert("1");
//				$(this).hide();
//			});
//		});
//});

//��ҳͼ���л�
$(function(){
 $("div.qh dl").each(function(){
		var con = $(this);
		var img = con.find("dd.im");
		var txt = con.find("dd.tt");
		con.find("dd.tt").each(function(){
			$(this).bind("mouseover",function(){
				var index = $(this).index(txt);
				img.hide();
				txt.show();
				$(this).prev().show();//alert("1");
				$(this).hide();
			});
		});
  });
});

// ���й���
function AutoScroll(obj){
$(obj).find("ul:first").animate({
marginTop:"-25px"
},500,function(){
$(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
});
}
$(function(){
setInterval('AutoScroll("#scrollDiv")',5000)
});
//���й���
$(function(){
	//����Ӧ��@Mr.Think
	var _wrap=$('dl.mulitline');//�����������
	var _interval=3000;//���������϶ʱ��
	var _moving;//��Ҫ����Ķ���
	_wrap.hover(function(){
		clearInterval(_moving);//������ڹ���������ʱ,ֹͣ����
	},function(){
		_moving=setInterval(function(){
			var _field=_wrap.find('dd:first');//�˱������ɷ����ں�����ʼ����li:firstȡֵ�Ǳ仯��
			var _h=_field.height();//ȡ��ÿ�ι����߶�
			_field.animate({marginTop:-_h+'px'},600,function(){//ͨ��ȡ��marginֵ�����ص�һ��
				_field.css('marginTop',0).appendTo(_wrap);//���غ󣬽����е�marginֵ���㣬�����뵽���ʵ���޷����
			})
		},_interval)//�������ʱ��ȡ����_interval
	}).trigger('mouseleave');//��������ʱ��ģ��ִ��mouseleave�����Զ�����
});

//֧��CSS3
$(function() {
    if (window.PIE) {
        $('.rounded').each(function() {
            PIE.attach(this);
        });
    }
});

//�õ�Ƭ
//$(function() {
//	var sWidth = $("#focus").width(); //��ȡ����ͼ�Ŀ�ȣ���ʾ�����
//	var len = $("#focus ul li").length; //��ȡ����ͼ����
//	var index = 0;
//	var picTimer;
//	
//	//���´���������ְ�ť�Ͱ�ť��İ�͸������
//	var btn = "<div class='btnBg'></div><div class='bbtn'>";
//	for(var i=0; i < len; i++) {
//		btn += "<span>" + (i+1) + "</span>";
//	}
//	btn += "</div>"
//	$("#focus").append(btn);
//	$("#focus .btnBg").css("opacity",0.5);
//	
//	//Ϊ���ְ�ť�����껬���¼�������ʾ��Ӧ������
//	$("#focus .bbtn span").mouseenter(function() {
//		index = $("#focus .bbtn span").index(this);
//		showPics(index);
//	}).eq(0).trigger("mouseenter");
//	
//	//����Ϊ���ҹ�����������liԪ�ض�����ͬһ�����󸡶�������������Ҫ�������ΧulԪ�صĿ��
//	$("#focus ul").css("width",sWidth * (len + 1));
//	
//	//��껬��ĳli�е�ĳdiv�������ͬ��divԪ�ص�͸���ȣ�����li�ı���Ϊ��ɫ�����Ի��б䰵��Ч��
//	$("#focus ul li div").hover(function() {
//		$(this).siblings().css("opacity",0.7);
//	},function() {
//		$("#focus ul li div").css("opacity",1);
//	});
//	
//	//��껬�Ͻ���ͼʱֹͣ�Զ����ţ�����ʱ��ʼ�Զ�����
//	$("#focus").hover(function() {
//		clearInterval(picTimer);
//	},function() {
//		picTimer = setInterval(function() {
//			if(index == len) { //�������ֵ����liԪ�ظ�����˵�����һ��ͼ������ϣ�������Ҫ��ʾ��һ��ͼ��������showFirPic()��Ȼ������ֵ����
//				showFirPic();
//				index = 0;
//			} else { //�������ֵ������liԪ�ظ���������ͨ״̬�л�������showPics()
//				showPics(index);
//			}
//			index++;
//		},3000); //��3000�����Զ����ŵļ������λ������
//	}).trigger("mouseleave");
//	
//	//��ʾͼƬ���������ݽ��յ�indexֵ��ʾ��Ӧ������
//	function showPics(index) { //��ͨ�л�
//		var nowLeft = -index*sWidth; //����indexֵ����ulԪ�ص�leftֵ
//		$("#focus ul").stop(true,false).animate({"left":nowLeft},500); //ͨ��animate()����ulԪ�ع������������position
//		$("#focus .bbtn span").removeClass("on").eq(index).addClass("on"); //Ϊ��ǰ�İ�ť�л���ѡ�е�Ч��
//	}
//	
//	function showFirPic() { //���һ��ͼ�Զ��л�����һ��ͼʱר��
//		$("#focus ul").append($("#focus ul li:first").clone());
//		var nowLeft = -len*sWidth; //ͨ��liԪ�ظ�������ulԪ�ص�leftֵ��Ҳ�������һ��liԪ�ص��ұ�
//		$("#focus ul").stop(true,false).animate({"left":nowLeft},500,function() {
//			//ͨ��callback���ڶ����������ulԪ�����¶�λ����㣬Ȼ��ɾ�����һ�����ƹ�ȥ��Ԫ��
//			$("#focus ul").css("left","0");
//			$("#focus ul li:last").remove();
//		}); 
//		$("#focus .bbtn span").removeClass("on").eq(0).addClass("on"); //Ϊ��һ����ť���ѡ�е�Ч��
//	}
//});
//
//
//$(document).ready(function(){alert("1231313");
//     $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true); 
//});


