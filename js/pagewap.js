var GPage = new PageLoad();
var HOST_URL = 'http://' + document.domain + '/';
HOST_URL = HOST_URL.replace(/3gwap|m/,'www');
var ContentTag = 'jieqi_contents';//���ݿ�

// jquery1.7.2.min.js ������
$(function() {
	jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
		$(tab_conbox).find("li").hide();
		$(tab_conbox).find(".st").find("li").show();		
		$(tabtit).find("li:first").addClass("thistab").show(); 
		$(tab_conbox).find("li:first").show();
		$('#tabs12 li').show();
	 
		$(tabtit).find("li").bind(shijian,function(){
		  $(this).addClass("thistab").siblings("li").removeClass("thistab"); 
			var activeindex = $(tabtit).find("li").index(this);
			$(tab_conbox).children().eq(activeindex).show().siblings().hide();
			return false;
		}); 
	
	};
	/*���÷������£�*/
	$.jqtab("#tabs","#tab_conbox","click");
	
	//$.jqtab("#tabs1","#tab_conbox1","mouseenter");
	
	//$.jqtab("#tabs2","#tab_conbox2","mouseenter");
	
	$.jqtab("#tabs3","#tab_conbox3","mouseenter");
	
	//$.jqtab("#tabs4","#tab_conbox4","mouseenter");
	
	$.jqtab("#tabs5","#tab_conbox5","mouseenter");
	
	$.jqtab("#tabs6","#tab_conbox6","mouseenter");
	
	$.jqtab("#tabs7","#tab_conbox7","mouseenter");
	
	$.jqtab("#tabs8","#tab_conbox8","mouseenter");
	
	$.jqtab("#tabs9","#tab_conbox9","mouseenter");
	
	$.jqtab("#tabs10","#tab_conbox10","mouseenter");
	
	$.jqtab("#tabs11","#tab_con11","click");
	
	$.jqtab("#tabs12","#tab_con12","click");
	//���õ��
	$("[ajaxclick]").live('click',function(e){
		e.preventDefault();
		var retruemsg = $(this).attr("retruemsg");
		var confirm_msg = $(this).attr("confirm");
		var targetid = $(this).attr("targetid");
		if(confirm_msg){
		     if(!confirm(confirm_msg)) return false;
		}
		var i = layer.load(0);
		if(!targetid) var targetid = 'content';
		GPage.getJson(this.href,function(data){
			layer.close(i);
		    if(data.status=='OK'){
				if(retruemsg!='false' &&  retruemsg) layer.msg(data.msg, 1, 1);
				GPage.loadpage(targetid, data.jumpurl, true,false);
			}else{
				layer.alert(data.msg, 8, !1);
			}
		});
	});	
	//post�����ύajax
	$("[ajaxpost]").bind('valid.form',function(e){
		e.preventDefault();
		var retruemsg = $(this).attr("retruemsg");
		var formid = $(this).attr("id");
		var formaction = $(this).attr("action");
		var i = layer.load(0);
		GPage.postForm(formid, formaction,function(data){
			layer.close(i);
			if(data.status=='OK'){
				if(retruemsg!='false' &&  retruemsg) layer.msg(data.msg, 1, 1);
				jumpurl(data.jumpurl,0);
			}else{
				layer.alert(data.msg, 8, !1);
			}
		});
	});
	//post�����ύ������֤
	$("[ajaxsubmit]").bind('submit',function(e){
		e.preventDefault();
		var retruemsg = $(this).attr("retruemsg");
		var formid = $(this).attr("id");
		var formaction = $(this).attr("action");
		var i = layer.load(0);
		GPage.postForm(formid, formaction,function(data){
			layer.close(i);
			if(data.status=='OK'){
				if(retruemsg!='false' &&  retruemsg) layer.msg(data.msg, 1, 1);
				jumpurl(data.jumpurl,0);
			}else{
				layer.alert(data.msg, 8, !1);
			}
		});
	});
	//ɾ��ajax�ύ
	/*$("[delajax]").live('submit', function(e){
		e.preventDefault();
		var formid = $(this).attr("id");
		var confirm_msg = $(this).attr("confirm");
		var formaction = $(this).attr("action");
		var targetid = $(this).attr("targetid");
		if(!targetid) var targetid = 'content';
		var checkform = document.getElementById(formid);
		var checknum = 0;
		for (var i=0; i < checkform.elements.length; i++){
		 if (checkform.elements[i].name == 'checkid[]' && checkform.elements[i].checked == true) checknum++; 
		}
		if(checknum == 0){
				layer.msg('����ѡ��Ҫ��������Ŀ!',2,{type:3,shade:false});
		}else{
			$.layer({
				shade : [1], //����ʾ����
				area : ['auto','auto'],
				title:'ȷ������',
				dialog : {
					msg:confirm_msg,
					btns : 2, 
					type : 4,
					btn : ['ȷ��','ȡ��'],
					yes : function(){
						var i = layer.load(0);
						GPage.postForm(formid, formaction,function(data){
							layer.close(i);
							if(data.status=='OK'){
								$.ajaxSetup ({ cache: false });
								layer.msg(data.msg,1,{type:1,shade:false},function(){
									$('#'+targetid).load(location.href+ ' #'+targetid+'>*');
								});
							}else{
								layer.alert(data.msg, 8, !1);
							}
						});
					},
					no : function(){
						layer.closeAll();
						checkform.reset();
					}
				}
			});
		}
	});*/
	//��ʾ�û���Ϣ��
	$("[ajaxhover]").live({mouseenter:function(){
											   
			if((layer.index-1)>0) layer.close(layer.index-1);
			var uid = $(this).attr("uid");
			var _this = this;
			$('<div id="jia_'+uid+'" style="display:none;"></div>').appendTo($('body'));
			$("#jia_"+uid).load(HOST_URL+"user/popuser?uid="+uid+'&date='+Math.random()+" #content>*",function(){
				 layer.tips($("#jia_"+uid).html(), _this, {
					guide: 1,
					closeBtn: false,
					style: ['width:356px; padding:0;', 'gray']
				});
			});
		},mouseleave:function(){
			var uid = $(this).attr("uid");
			$("#jia_"+uid).remove();
			
			var start = setTimeout(function(){
				layer.close(layer.index);
			}, 50);
			
			$('.pop3').mouseenter(function(){
				clearTimeout(start);
			});
			$('.pop3').mouseleave(function(){
				layer.closeTips();
			});
		}
	});
	//ģ̬�� 
	var tipFn=function(){
		var tip,_init,
			isIos=!!navigator.userAgent.match(/iPhone|iPad|iPod/i);
			//����ȷ�Ͽ�
		function confirmFn(config){
				var tpl='<div class="cfShadow"><div class="confirmBox">\
						 <div class="title">'+config.title+'</div>\
						 <div class="con">'+config.con+'</div>\
						 <div class="bn">\
						 <span class="no">'+(config.noTxt||'ȡ��')+'</span><span class="ok">'+(config.okTxt||'ȷ��')+'</span>\
						 </div>\
						 </div></div>';
				var o=this;

				this.target= $(config.tpl||tpl);
				this.ok=config.ok;
				this.no=config.no;

				if(!config.title) this.target.find('.title').remove();

				this.target.appendTo($(document.body)).on('touchstart touchmove touchend click',function(e){

					e.stopPropagation();
					return false;

				}).delegate('.bn>span','touchend',function() {

					if($(this).hasClass('ok')){
						o.ok();
					}else if($(this).hasClass('no')){
						o.no();
					}

					o.remove();

				}).find('.confirmBox').css({

					marginTop:(window.innerHeight-o.target.find('.confirmBox').height())/2

				})
		}
		confirmFn.prototype.ok=function(){};
		confirmFn.prototype.no=function(){};
		confirmFn.prototype.remove=function(){this.target.remove()};

		return{
			init:function() {
				if(_init)return;
				_init=true;
				tip=$('<span style="position:fixed;padding:10px;background-color:rgba(0,0,0,.8);color:#fff;border-radius:3px;top:50%;left:50%;text-align:center;z-index:-1;visibility:hidden;'+(isIos?'-webkit-transition:opacity .5s ease-out':'')+'"></span>');
				$(document.body).append(tip);
				this._isShown=false;
			},
			show:function(s,interval) {
				this._tid&&clearTimeout(this._tid);
				tip.text(s).css({
					visibility:'visible',
					opacity:1,
					margin:-tip.height()/2+"px 0 0 -"+tip.width()/2+"px",
					zIndex:2000
				});

				if(interval)
					this._tid=setTimeout(function() {
						tipFn.hide();
					},interval);

				this._isShown=true;
			},
			hide:function() {
				if(!this._isShown)return;
				this._isShown=false;
				this._tid&&clearTimeout(this._tid);
				if(isIos){
					tip.css({
						opacity:0,
						zIndex:-1
					});
				} else {
					tip.css({
						visibility:'hidden',
						zIndex:-1
					});
				}
			},
			confirm:function(config){
				return new confirmFn(config);
			}
		};
	}();
	tipFn.init();
	$("form[ajaxform]").live('submit',function(event){
		if(this.J_search_suggest.value=='������������������ʼ����') this.J_search_suggest.value='';
		if(this.J_search_suggest){
			var path = window.location.pathname;
			if(path.indexOf("search") > 0 )
			{
				location.href=this.action+'/'+encodeURIComponent(this.J_search_suggest.value);
			}else{
				window.open(this.action+'/'+encodeURIComponent(this.J_search_suggest.value));
			}
		}
	});
	$("#J_search_suggest").on('focus',function(event){
		 if(this.value==$("#J_search_suggest").attr('data-placeholder')) this.value='';
	});
	$("#J_search_suggest").on('blur',function(event){
		 if(this.value=='') this.value=$("#J_search_suggest").attr('data-placeholder');
	});
	if($("#J_search_suggest").val()=='') $("#J_search_suggest").val($("#J_search_suggest").attr('data-placeholder'));
	//��ҳͼ���л�
	$("div.qh dl").each(function(){
		var con = $(this);
		var img = con.find("dd.im");
		var txt = con.find("dd.tt");
		con.find("dd.tt").each(function(){
			$(this).bind("mouseover",function(){
				var index = $(this).index(txt);
				img.hide();
				txt.show();
				$(this).prev().show();
				$(this).hide();
			});
		});
	});
/*// ���й���
function AutoScroll(obj){
	
$(obj).find("ul:first").animate({
marginTop:"-25px"
},500,function(){
$(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
});
}
$(function(){
setInterval('AutoScroll("#scrollDiv")',5000);
});*/
//���й���
	//����Ӧ��@Mr.Think
	var _wrap=$('div.trend');//�����������
	var _ddnum=_wrap.find('div').length;
	
	if(_ddnum < 0)return;
	
	var _interval=3000;//���������϶ʱ��
	var _moving;//��Ҫ����Ķ���
	_wrap.hover(function(){
		clearInterval(_moving);//������ڹ���������ʱ,ֹͣ����
	},function(){
		_moving=setInterval(function(){
			var _field=_wrap.find('div:first');//�˱������ɷ����ں�����ʼ����li:firstȡֵ�Ǳ仯��
			var _h=_field.height();//ȡ��ÿ�ι����߶�
			_field.animate({marginTop:-_h+'px'},600,function(){//ͨ��ȡ��marginֵ�����ص�һ��
				_field.css('marginTop',0).appendTo(_wrap);//���غ󣬽����е�marginֵ���㣬�����뵽���ʵ���޷����
			})
		},_interval)//�������ʱ��ȡ����_interval
	}).trigger('mouseleave');//��������ʱ��ģ��ִ��mouseleave�����Զ�����
	//֧��CSS3	
	if (window.PIE) {
        $('.rounded').each(function() {
            PIE.attach(this);
        });
    }
	//�õ�Ƭ
	var sWidth = $("#focus").width(); //��ȡ����ͼ�Ŀ�ȣ���ʾ�����
	var len = $("#focus ul li").length; //��ȡ����ͼ����
	var index = 0;
	var picTimer;
	
	//���´���������ְ�ť�Ͱ�ť��İ�͸������
	var btn = "<div class='btnBg'></div><div class='bbtn'>";
	for(var i=0; i < len; i++) {
		btn += "<span>" + (i+1) + "</span>";
	}
	btn += "</div>"
	$("#focus").append(btn);
	$("#focus .btnBg").css("opacity",0.5);
	
	//Ϊ���ְ�ť�����껬���¼�������ʾ��Ӧ������
	$("#focus .bbtn span").mouseenter(function() {
		index = $("#focus .bbtn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseenter");
	
	//����Ϊ���ҹ�����������liԪ�ض�����ͬһ�����󸡶�������������Ҫ�������ΧulԪ�صĿ��
	$("#focus ul").css("width",sWidth * (len + 1));
	
	//��껬��ĳli�е�ĳdiv�������ͬ��divԪ�ص�͸���ȣ�����li�ı���Ϊ��ɫ�����Ի��б䰵��Ч��
	$("#focus ul li div").hover(function() {
		$(this).siblings().css("opacity",0.7);
	},function() {
		$("#focus ul li div").css("opacity",1);
	});
	
	//��껬�Ͻ���ͼʱֹͣ�Զ����ţ�����ʱ��ʼ�Զ�����
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			if(index == len) { //�������ֵ����liԪ�ظ�����˵�����һ��ͼ������ϣ�������Ҫ��ʾ��һ��ͼ��������showFirPic()��Ȼ������ֵ����
				showFirPic();
				index = 0;
			} else { //�������ֵ������liԪ�ظ���������ͨ״̬�л�������showPics()
				showPics(index);
			}
			index++;
		},3000); //��3000�����Զ����ŵļ������λ������
	}).trigger("mouseleave");
	
	//��ʾͼƬ���������ݽ��յ�indexֵ��ʾ��Ӧ������
	function showPics(index) { //��ͨ�л�
		var nowLeft = -index*sWidth; //����indexֵ����ulԪ�ص�leftֵ
		$("#focus ul").stop(true,false).animate({"left":nowLeft},500); //ͨ��animate()����ulԪ�ع������������position
		$("#focus .bbtn span").removeClass("on").eq(index).addClass("on"); //Ϊ��ǰ�İ�ť�л���ѡ�е�Ч��
	}
	
	function showFirPic() { //���һ��ͼ�Զ��л�����һ��ͼʱר��
		$("#focus ul").append($("#focus ul li:first").clone());
		var nowLeft = -len*sWidth; //ͨ��liԪ�ظ�������ulԪ�ص�leftֵ��Ҳ�������һ��liԪ�ص��ұ�
		$("#focus ul").stop(true,false).animate({"left":nowLeft},500,function() {
			//ͨ��callback���ڶ����������ulԪ�����¶�λ����㣬Ȼ��ɾ�����һ�����ƹ�ȥ��Ԫ��
			$("#focus ul").css("left","0");
			$("#focus ul li:last").remove();
		}); 
		$("#focus .bbtn span").removeClass("on").eq(0).addClass("on"); //Ϊ��һ����ť���ѡ�е�Ч��
	}
	//���ػص�����
	$("#back-to-top").hide();
	//����������ʱ����
	$(window).scroll(function(){
	  if($(window).scrollTop()>100){
		$("#back-to-top").fadeIn(1500);
	  }else{
		$("#back-to-top").fadeOut(1500);
	  }
	});
	//�������ת���Ӻ󣬻ص�ҳ�涥��λ��
	$("#back-to-top").click(function(){
	  $('body,html').animate({scrollTop:0},1000);
	  return false;
    });
    //�������ת���Ӻ󣬻ص�ҳ�涥��λ��
    $("#backtt").click(function(){
        	$('body,html').animate({scrollTop:0},1000);
        	return false;
    });
});

//ͷ������
function loadheader(vip){
	if(getUserId()>0)
	{       
		try{
			if(vip){
				var gurl = urlParams('http://'+window.location.host+"/login/viplogined", 'ajax_request=1');
			}else{
				var gurl = urlParams('http://'+window.location.host+"/login/logined", 'ajax_request=1');
			}
			
			if(gurl.indexOf("ajax_gets")=='-1') gurl = urlParams(gurl, 'ajax_gets='+ContentTag);
			gurl = urlParams(gurl, 'date='+Math.random());

			GPage.getJson(gurl,function(data){
				$(".logon").html(data);
			});
		}catch(error){
		}
	}
}
function adtest(url){
	location.href=url;
}
function getUserId(){
	var jieqiUserInfo = get_cookie_value("jieqiUserInfo");
	var jieqiUserId = 0;
	if(jieqiUserInfo!="")
	{
		try{
			 start = 0;
			 offset = jieqiUserInfo.indexOf(',', start);
			 
			 while(offset > 0){
				tmpval = jieqiUserInfo.substring(start, offset);
				tmpidx = tmpval.indexOf('=');
				if(tmpidx > 0){
				   tmpname = tmpval.substring(0, tmpidx);
				   tmpval = tmpval.substring(tmpidx+1, tmpval.length);
				   if(tmpname == 'jieqiUserId'){
					   jieqiUserId = tmpval;
					   break;
				   }
				}
				start = offset+1;
				if(offset < jieqiUserInfo.length){
				  offset = jieqiUserInfo.indexOf(',', start); 
				  if(offset == -1) offset =  jieqiUserInfo.length;
				}else{
				  offset = -1;
				}
			 }
		}catch(error){
		
		}
	}
	return jieqiUserId;
}

function get_cookie_value(Name) { 
  var returnvalue = ""; 
  var strCookie=document.cookie;
	//����cookie�и�Ϊ�����/ֵ�� 
	var arrCookie=strCookie.split("; ");
	var userId; 
	//����cookie���飬����ÿ��cookie�� 
	for(var i=0;i<arrCookie.length;i++){ 
	  var arr=arrCookie[i].split("="); 
	  //�ҵ�����ΪuserId��cookie������������ֵ 
	  if(arr[0] === Name){
		  returnvalue=unescape(arr[1]); 
	    break; 
	  } 
	}
  return returnvalue; 
}

function huodong(url,id,target){
	if(getUserId()<1){
	 	userLogin(id);
	}else{
		GPage.loadpage(target,url);
	}
}


function otherlogin(url){
		var pagei = $.layer({
			type:2,
			shade : [0.6 , '#000' , true],
			border : [10 , 0.3 , '#000', true],
			area: ['920px', '510px'],
			title: false,
			closeBtn: [0,true],
			iframe:{src: url}
		});
}

/*function userLogin(id){
	if(HOST_URL == "http://3gwap.shuhai.com/") HOST_URL = 'http://www.shuhai.com/';
	var host = window.location.host,
		pathname = window.location.pathname;
	var pagei = layer.open({
	    type: 1, //1����ҳ���
	    content: '<div class="padbar bg-e">'
	             +'<header class="head-navbar head-navbar0">'
	             +'<div class="col-x-4"><a href="javascript:;" class="i-back"><img src='+HOST_URL+'themes/3gwap/images/i-back.png></a></div>'
	             +'<div class="col-x-4"><h2>�û���¼</h2></div>'
	             +'<div class="col-x-2"><a href="/" class="i-home"><img src='+HOST_URL+'themes/3gwap/images/i-home.png></a></div>'
				 +'</header>'
				 +'<section class="signbox signbox0">'
				 +'<form action=http://'+host+'/login id="loginFo" method="post">'
				 +'<div class="row cardbox">'
				 +'<div class="row form-group">'
				 +'<div class="col-x-2"><label class="i-user"></label></div>'
				 +'<div class="col-x-10"><input class="inp-t" name="username" type="text" placeholder="�û���"></div>'
				 +'</div>'
				 +'<div class="col-x-12"></div>'
				 +'<div class="row form-group">'
				 +'<div class="col-x-2"><label class="i-sn"></label></div>'
				 +'<div class="col-x-10"><input class="inp-t" name="password" type="password" placeholder="����"></div>'
				 +'</div>'
				 +'<div class="col-x-12"></div>'
				 +'<div class="row form-group">'
				 +'<div class="col-x-2"><label class="i-sn"></label></div>'
				 +'<div class="col-x-4"><input class="inp-t" name="checkcode" type="text" placeholder="��֤��"></div>'
                 +'<img src='+HOST_URL+'checkcode.php class="col-xs-4" id="checkcode" style="height:45px;padding-top:5px;" alt="��֤��" />'
                 +'</div>'
                 +'</div>'
				 +'<div class="row0 auto clearfix">'
				 +'<div class="col-x-6"><label class="n"><input name="usecookie" type="checkbox" value="1" checked="checked"> �Զ���¼ </label></div>'
				 +'<div class="col-x-4 pull-right"><a href="/getpass" target="_blank" class="text-right f-blue2">��������?</a></div>'
				 +'</div>'
				 +'<div class="row0 form-group2 auto px0">'
				 +'<input name="" type="submit" class="btn0 btn-block btnblue" value="�� ¼">'
				 +'</div>'
				 +'<div class="row0 form-group2 auto px0">'
				 +'<a href="/register" target="_blank" class="btn0 btn-block btngreen">ע��</a>'
				 +'</div>'
				 +'<div class="row0 form-group2 auto px0">'
				 +'<a href="javascript:;" id="qqlogin" class="btn0 btn-block btnorg">QQ��¼</a>'
				 +'</div>'
				 +'<input type="hidden" name="formjs"  id="jumpurl" value="1">'
				 +'<input type="hidden" name="host" value='+host+'>'
				 +'</form>'
				 +'</section>'
				 +'</div>',	     
	    style: 'position:absolute;top:0;left:0;width:101%;height:100%;font-size:1.5em;',
	    success: function(olayer){
	      $(".i-back").click(function(){
	    	layer.close(pagei);     	
	      });
	      if(pathname.indexOf("read") > -1){
	    	$(".layermchild").css("font-size","0.8em");
	      }
	      
	      $("#checkcode").click(function(){
	    	$(this).attr("src",HOST_URL+"checkcode.php?rand="+Math.random());
	      });
	      $("#qqlogin").click(function(){
	    	  location.href="/qqlogin/?jumpurl="+"";
	      });
	      $("#loginFo").on("submit",function(e){
	    	e.preventDefault();
	     	e.stopPropagation();
	     	var action = $(this).attr('action');
	     	$.ajax({
	     	  type : 'POST',
	     	  url : urlParams(action,'ajax_request=1&date'+Math.random()),
	          data: $('#loginFo').serialize(),
	          dataType : 'json',   
	          success : function(json){
	            if(json.status == 'OK'){
	            	if(pathname.indexOf("read") > -1){
	            		jumpurl(json.jumpurl);
	            	}else{
	            		$(".layermcont .i-back").click();
	  	                $("#"+id).click();
	            	}
	            }else{
	              layer.open({content: json.msg,style: 'border:none; background-color:black; color:#fff;',time: 2});           	
	            }	            	   
	          }            
	        });
	      });
	    }
	});
}*/

function userLogin(id){
	  
//	if(HOST_URL == "http://3gwap.shuhai.com/") HOST_URL = 'http://www.shuhai.com/';
//	var css = getShowCheckCode();
	var host = window.location.host,
		pathname = window.location.pathname;
	var hosts = window.location.href;
	var hl = '';
/*	
	 if(css){
		 hl='<li class="yzm">'
         +'<span class="i-yzm"></span>'
         +'<input placeholder="��֤��" name="checkcode" class="inp-t" aria-required="true"/>'
         +'<img alt="��֤��" id="checkcode" src='+HOST_URL+'checkcode.php>'
         +'</li>' 
     }else{
    	 hl='<li class="yzm" id="code_div" style="display: none;">'
         +'<span class="i-yzm"></span>'
         +'<input placeholder="��֤��" name="checkcode" class="inp-t" aria-required="true"/>'
         +'<img alt="��֤��" id="checkcode" src='+HOST_URL+'checkcode.php>'
         +'</li>' 
     }
	 */
	var pagei = layer.open({
	    type: 1, //1����ҳ���
	    content: '<div class="container">'
	             +'<div class="mod block form">'
	             +'<div class="hd"><h4>�û���½</h4></div>'
	             +'<form action="http://'+host+'/login.php?do=submit&jumpurl='+hosts+'" method="post" name="frmlogin" id="frmlogin" class="form-horizontal">'
	             +'<div class="bd">'
	             +'<div class="item-label">�û���</div>'
	             +'<div class="item-control">'
	             +'<input type="text" maxlength="60" size="28" class="text" name="username" value="">'
	             +'</div>'
	             +'</div>'
	             +'<div class="item">'
	             +'<div class="item-label">����</div>'
	             +'<div class="item-control">'
	             +'<input type="password" maxlength="60" size="28" class="text" name="password" value="">'
	             +'</div>'
	             +'</div>'
	             +'<div class="item">'
	             +'<label for="keeplogin"><input name="usecookie" type="checkbox" checked="checked" /> ��ס��</label>'
	             +'</div>'
	             +'<div class="ft fcc">'
	             +'<input type="hidden" name="act" value="login">'
	             +'<input type="submit" value="������½" class="btn btn-auto btn-blue">'
	             +'</div>'
	             +'<div class="ft fcc"><a class="btn btn-auto btn-blue" href="/register.php">ע��</a></div>'
	             +'<div class="ft fcc"><a class="btn btn-auto btn-blue" href="{?$jieqi_url?}/api/qq/login.php">QQ��½</a></div>'
	             +'<div class="ft fcc"><a class="btn btn-auto btn-blue" href="{?$jieqi_url?}/api/weibo/login.php">����΢����½</a></div>'
	             +'</form>'
	             +'</div>'
	             +'</div>',
		style: 'positon:static;display:block;height:100%;',
		success: function(olayer){
        $('#frmlogin').on('submit', function(e){
		e.preventDefault();
		 var tips = layer.open({type: 2,content: '������'});
				GPage.postForm('frmlogin', $("#frmlogin").attr("action"),
			   function(data){
					if(data.status=='OK'){
					    layer.close(tips);
						$.ajaxSetup ({ cache: false });
						jumpurl(data.jumpurl);
					}else{
					    layer.close(tips);
		                openMsg(data.msg);
					}
			   });
//			}
		});
	}
	});

}

function PageLoad() {
    this.MyMethod = null;//AJAX����URL�ص���������ת����
	
	this.getJson = function(url, myFun)
	{  
		$.ajax({
			type : "GET",
			url : urlParams(url,'ajax_request=1&ajax=1&date='+Math.random()),
			dataType : "jsonp",
			jsonp: 'CALLBACK',
			success : function(json){
				if(isExitsFunction(myFun)) myFun(json);
				else{
					this.MyMethod = myFun;
					if(this.MyMethod!=null){
					   this.MyMethod(json);
					}
				}
			}
		});	
	}

	this.postForm = function(form, url, myFun)
	{
		$.ajax({
				type : "POST",
				url : urlParams(url,'ajax_request=1&ajax=1&date'+Math.random()),
				data: $('#'+form).serialize(),
				dataType : "jsonp",
				jsonp: 'CALLBACK',
				success : function(json){
					if(isExitsFunction(myFun)) myFun(json);
					else{
						this.MyMethod = myFun;
						if(this.MyMethod!=null){
						   this.MyMethod(json);
						}
					}
				},
				error: function(XMLHttpRequest,textStatus,errorThrown){
					alert(XMLHttpRequest.status);
                    alert(XMLHttpRequest.readyState);
                    alert(textStatus);
				}
		});	
	}
	
	this.buychapter = function(url)
	{   
		GPage.getJson(url,
			function(data){
			    if(data.status=='OK'){
			    	layer.open({
					    content: data.msg,
					    style: 'border:none; background-color:black; color:#fff;',
					    time: 2
					}); 
					GPage.loadpage('content', vurl, true);
				}else{
					layer.open({
					    title: '��ʾ',
					    content: data.msg
					});
				}
			}
		);
	}
	
	
	this.addbook = function(url, id, obj)
	{  
		 if(getUserId()<1){   
		     userLogin(id); 
		 }else{
			GPage.getJson(url,function(data){
			    if(data.status=='OK'){
					if (id == "vip") {
						loadheader('vip');
						layer.msg(data.msg, 1, 1);
					}else if(id=='delete'){
							$.ajaxSetup ({ cache: false });
					        layer.close(tips);
                            jumpurl(data.jumpurl);
					}else{
						if (id=='display_type'){
							loadheader();
							$('#add_gz').hide();
							$('#cancel_gz').show();
						}else if(id=='display'){
							$('#cancel_gz').hide();
							$('#add_gz').show();
						}else if(id=='dianzan'){
							var num = $(obj).text();
							var iLen = num.length;
							var num = parseInt(num.substring(1,iLen-1))+1;
							$(obj).text('('+num+')');
						}else if(id=='delete'){
							$.ajaxSetup ({ cache: false });
					        layer.close(tips);
                            jumpurl(data.jumpurl);
						}else{
							layer.open({
							    content: data.msg,
							    style: 'border:none; background-color:black; color:#fff;',
							    time: 2
							});
						}
					}
					
				}else{
					layer.open({
					    content: data.msg,
					    style: 'border:none; background-color:black; color:#fff;',
					    time: 2
					}); 
				}
			});
		}
	}
	
	this.loadpage = function(tag,url,date,showloading){
	   if(url.indexOf("ajax_gets")=='-1') gurl = urlParams(url,'ajax_gets='+ContentTag);
	   GPage.getJson(gurl,function(date){
	     $("#"+tag).html(date);
	   });
	}
}

function urlParams(url, params){
	 var vrul = url;
     if(url.indexOf("?")!='-1') {
    	 vrul = url+'&'+params;
     }else{
    	 vrul = url+'?'+params;
     }
     return vrul;
     
}

function jumpurl(url, count) {    
    if(count <1 ) location.href=url;    
	window.setTimeout(function(){    
		count--;    
		if(count > 0) {    
			 if($('#jumpnum')) $('#jumpnum').attr('innerHTML', count);    
			 jumpurl(url, count);    
		} else {    
			 location.href=url;    
		}    
	 }, 1000);    
}    
//�Ƿ����ָ������ 
function isExitsFunction(funcName) {
    try {
        if (typeof(eval(funcName)) == "function") {
            return true;
        }
    } catch(e) {}
    return false;
}
//�Ƿ����ָ������ 
function isExitsVariable(variableName) {
    try {
        if (typeof(variableName) == "undefined") {
            return false;
        } else {
            return true;
        }
    } catch(e) {}
    return false;
}

function confirmurl(url,message)
{
	if(confirm(message)) jumpurl(url,1);
}

function confirmform(form,message)
{
	if(confirm(message)) form.submit();
}


function checkall(fieldid)
{
	if(fieldid==null)
	{
		if($('#checkbox').attr('checked')==false)
		{
			$('input[type=checkbox]').attr('checked',true);
		}
		else
		{
			$('input[type=checkbox]').attr('checked',false);
		}
	}
	else
	{
		var fieldids = '#'+fieldid;
		var inputfieldids = 'input[boxid='+fieldid+']';
		if($(fieldids).attr('checked')==false)
		{
			$(inputfieldids).attr('checked',true);
		}
		else
		{
			$(inputfieldids).attr('checked',false);
		}
	}
}

function addLoad(abelId,ContainerId,issearch,maxpage){
  $('#'+abelId).live('click',function(event){
    event.stopPropagation();
    event.preventDefault();
    var loadurl = this.href,
    	urlarr = loadurl.split('?');
    loadurl = urlarr[0];
    if(issearch && issearch === 'search'){
	  loadurl = decodeURI(loadurl);
	  var start = loadurl.lastIndexOf("/"),
	  	  page = parseInt(loadurl.substring(start+1));
	  page = page + 1;
      loadurl = loadurl.substring(0, start+1);
      loadurl = loadurl+page;
    }else{
    	var start = loadurl.lastIndexOf("_"),
            end = loadurl.lastIndexOf("."),
            page = parseInt(loadurl.substring(start+1, end));
        page = page + 1;
        loadurl = loadurl.substring(0, start+1);
        loadurl = loadurl+page+".html";
    }
    
    if(urlarr[1])
    {
    	loadurl = loadurl + "?"+urlarr[1];
    }
    this.href = loadurl;
    var tips = layer.open({
        type: 2,
        content: '�����С���'
    });
    
    GPage.getJson(urlParams(loadurl,'ajax_gets='+ContentTag),function(data){
	  if($.trim(data) != "")
	  {	  
	      if(page == maxpage)  
	      {
	    	 $('#'+ContainerId).html($('#'+ContainerId).html()+data);
			 history.replaceState({},'', loadurl);
			 $('#cont').html("<a href='javascript:;' class='card_btn_long'>�ף����һҳ�</a>");
		  }else if (page < maxpage){
			  $('#'+ContainerId).html($('#'+ContainerId).html()+data);
			  history.replaceState({},'', loadurl);
			  $('#cont').html("<a href='" +loadurl+ "' class='card_btn_long' id='"+abelId+"'>�鿴����...</a>");
		  }else{
			  $('#cont').html("<a href='javascript:;' class='card_btn_long' >�ף����һҳ�</a>");
		  }
	      layer.close(tips);
	  }else{
		  $('#cont').html("<a href='javascript:;' class='card_btn_long'>�ף����һҳ�</a>");
		  layer.close(tips);
	  }
    });
  });
}

function addSortLoad(abelId,ContainerId,issearch,maxpage,clickid){
	
  $('#'+clickid).on('click',function(e){
    e.stopPropagation();
    e.preventDefault();
    var loadurl = this.href;
    if(issearch && issearch === 'search'){
	  var loadnurl = decodeURI(loadurl),
	  	  start = loadnurl.lastIndexOf("/"),
	  	  page = parseInt(loadnurl.substring(start+1));
    }
    
    GPage.getJson(urlParams(loadurl,'ajax_gets='+ContentTag),function(data){
    	
      if($.trim(data) != "")
  	  {	  
  		  $('#'+ContainerId).html(data);
  		  $('#cont').children('a').attr('href',loadurl);
  		  history.replaceState({},'', loadurl);
  		  if(page == maxpage)
	      {
  			 $('#cont').children('a').text('�鿴����...');
		     $('#'+abelId).attr("disabled",true);
		  }else if(page < maxpage && $('#cont').children('a').text() == '�ף����һҳ�'){
			 $('#cont').children('a').text('�鿴����...');
		  }
  	  }else{
  		  $('#'+abelId).text("�ף����һҳ�");
  		  $('#'+abelId).attr("disabled",true);
  	  }
    });
  });
}
//�ƶ��浯�����½��ע�����
function openMsg(msg){
  layer.open({
    content: msg,
    style: 'border:none; background-color:black; color:#fff;',
    time: 2
  }); 
}
//�ƶ��浯�����½��ע�����
function openMsgs(msg){
  layer.open({
    content: msg,
    style: 'border:none; background-color:black; color:#fff;',
    time: 20
  }); 
}
/**
 * ͬ����ȡ�Ƿ���Ҫ��֤���½
 * 2015-5-7 add chengyuan
 * @returns bool
 */
function getShowCheckCode(){
	//����֧��ͬ��ajax����������ָ����ǰ��ͬ��ajax
	var state = false;
	$.ajax({
		type : "GET",
		url : urlParams('http://'+window.location.host+'/login/ccs','ajax_request=1&date='+Math.random()),
		dataType : "jsonp",
		async: false,//����ͬ����֧�֣�bug
		jsonp: 'CALLBACK',
		success : function(json){
			state = json.msg == 'true' ? true : false;
		}
	});	
	return state;
}
