function initMid(){    byId("jslist1").click(function(){byId("jslistli1").show();byId("jslistli2").hide();byId("jslist1").attr("class","item active");byId("jslist2").attr("class","item")});    byId("jslist2").click(function(){byId("jslistli2").show();byId("jslistli1").hide();byId("jslist2").attr("class","item active");byId("jslist1").attr("class","item")});    byId("jsFav").click(function(){Open(4)});	byId("jsTou").click(function(){Open(5)});    byId("jsyuepiao").click(function(){Open(1)});    byId("jsdashang").click(function(){Open(2)});    byId("jszan").click(function(){Open(3)});    getReadHistory();}function BookHit(type,idname,remove){		//alert(IsLogin);        if (!IsLogin) {            showLoginLayer();        }else{			$("#"+idname).text("操作中..").css("opacity","0.3");			var bookId = $("#"+idname).data("bookid");            $.post("/book/hit/", { id: bookId, type: type,remove:remove },                   function (data, textStatus) {                       if (data.success) {						   var msg="谢谢您，已成功投了1票！";						   if(type==26){							msg = "感谢您关注本书！";							var _v =$("#jsshoucang").text();							$("#jsshoucang").text(parseInt(_v)+1);							$("#"+idname).text("已收藏").css("opacity","1");						   }if(type==22){							msg = "感谢您推荐本书！";							var _v =$("#jsstoujian").text();							$("#jsstoujian").text(parseInt(_v)+1);							if(data.add>=data.tickets){								msg="感谢您投了本书1票，你今天推荐票已用完！";								$("#"+idname).text("我要推荐").css("opacity","1");							}else{								msg="感谢您投了本书1票，你今天还有"+(data.tickets-data.add)+"张推荐票！";								$("#"+idname).text("我要推荐").css("opacity","1");							}						   }else if(type==79){								$("#"+idname).toggleClass("open");								if($("#"+idname).data("open")>=1){									msg = "已经关闭自动订阅功能！";									$("#"+idname).data("open",0);									$("#"+idname).text("").css("opacity","1");								}else{									msg = "已经开启自动订阅功能！";									$("#"+idname).data("open",1);									$("#"+idname).text("").css("opacity","1");								}						   }						   layer.tips(msg, $("#"+idname), {                               time: 3,                               maxWidth:250                            });                       } else {							var msg = data.message;														if(type==26){								msg = "您已经收藏了！";								$("#"+idname).text("已收藏").css("opacity","1");							}else if(type==22){								msg = "推荐票已用完了，请明天再来投票！";								$("#"+idname).text("我要推荐").css("opacity","1");							}                            layer.tips(msg, $("#"+idname), {                               time: 1,                               maxWidth:250                            });														                       }                   }, "json");        }    }
function Open(i)
{	//alert(IsLogin);	if(!IsLogin){		showLoginLayer();		return false;	}	
    //if(i==-1){byId("box").hide();return;}
    //if(i>0 && $$.IsLogin()==false){Open(0);return;}
    
    var _url;
    if(i==0)//登录
    {
        _url = "/fhome/login/";
        byId("boxtxt").load(_url);
        byId("boxtxt").html(byId("boxtxt").html().replace("{backurl}","http://"+document.domain+"/fhome/m_login_bak.htm?result="));
    }
    else if(i==1) //月票
        _url = "/fhome/m_yuepiao.htm";
    else if(i==2) //红包
        _url = "/fhome/m_redpack.htm";
    else if (i==3) //赞
    {
        if(byId("jszan").html().indexOf("点赞")<0)
            return;
        byId("jszan").html("操作中..").attr("style","opacity:0.3");				return;
	    _url = "http://"+document.domain+"/fhome/m_support.htm?";
	    _url = "http://apiin.timeread.com/gift_novel/api_sendsupport.ashx?novelid="+bookinfo.novelid+"&url="+escape(_url);
    }
    else if(i==4) //收藏
    {
        if(byId("jsFav").html()!="加入收藏")
            return;
        byId("jsFav").html("操作中..").attr("style","opacity:0.3");		BookHit(26,"jsFav",0);		return;
	    _url = "http://"+document.domain+"/login.php?";
	    _url = "/modules/article/addbookcase.php?bid="+bookinfo.novelid+"&cid=0&url="+escape(_url);
    }else if(i==5) //投票    {        if(byId("jsTou").html()!="我要推荐")            return;		BookHit(22,"jsTou",0);		return;	    _url = "http://"+document.domain+"/fhome/m_addfav.htm?";	    _url = "http://apiin.timeread.com/user/store/add/?nid="+bookinfo.novelid+"&cid=0&url="+escape(_url);    }
    else
        return;
        
    if(i==1 || i==2)
    {
        $$.ajax(_url,function(x){
            byId("boxtxt").html(x.replace("{novelid}",bookinfo.novelid).replace("{bookname}",bookinfo.bookname).replace("{authorid}",bookinfo.authorid).replace("{authorname}",bookinfo.authorname));        });
    }
    else if(i==3||i==4)
    {
        $$.hideLoad(_url);
        return;
    }
    
    //需要浮框的
    byId("box").attr("style","opacity:1;bottom:40%").show();
    byId("boxmask").height("180px");
    
}function initBottom(){    try    {    byId("jsyuepnum").html(mnGiftInfo.AllYuePiao);    byId("jsdasnum").html(mnGiftInfo.AllRedPack);    byId("jszannum").html(mnGiftInfo.AllSupport);    byId("jsdianji").html(mnGiftInfo.AllHits);    byId("jsshoucang").html(mnGiftInfo.AllStore);    }catch(E){}}var jsSqChapterID="";
function getReadHistory()
{
	var _history = $$.getCookie("ReadHistory","");
	if(_history=="")
		return;
	 var _json = eval(unescape(_history));
	 if(_json==null)
	    return;
    for(j=0;j<_json.length;j++)
	{
	    if(_json[j].novelid==bookinfo.novelid)
		{
		    if(_json[j].chapterid=="")
		        return;
		    jsSqChapterID = _json[j].chapterid;    
		    byId("htmldianjiyuedu").html("继续阅读").href("/book/"+bookinfo.novelid+"/"+jsSqChapterID);
		    byId("jshisLink").html("<a href='/book/"+bookinfo.novelid+"/"+jsSqChapterID+"'>"+_json[j].title + "</a>")
		    byId("jshisDiv").show();
			return;
        }//if
	}//for	    
}//getReadHistory


function setShuqianLight()
{
    if(jsSqChapterID=="")return;
    var _obj=G("ch"+jsSqChapterID);
    _obj.parentNode.style.display="block";
    _obj.innerHTML+="<em></em>";
    _obj.className="act";
}

function plsubmit(){    if(byId("cmtcontent").value()=="")    {        byId("cmtcontent").textareaWarm();        return;    }    G("myform").submit();}