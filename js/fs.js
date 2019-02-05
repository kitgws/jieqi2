var _HQuery;
function byId(id){_HQuery = new doHQuery(id);return _HQuery;}
var $$ = new doHQuery();
function G(o){return document.getElementById(o)}
function GS(o){return G(o).style}

function doHQuery(id)
{
	/*****	对象操作	********************************************/
	var objs = new Array();
	var objss = new Array();
	var ids=new Array();
	if(id!=null)
	{
		ids=id.split(",");
		for(o in ids){
			if(isObj(ids[o])==true)
			{
				objs[o]=G(ids[o]);
				objss[o]=G(ids[o]).style;
			}
		}//for
	}//if
	this.hasObj = function(x){return isObj(x)}
	this.hasValue = function(x){return (typeof(x)=="undefined")?false:true;}

	/*****	页面元素/样式等基本操作	********************************************/
	this.html		=function(x)	{if(x==null)return objs[0].innerHTML;else{for(o in objs){objs[o].innerHTML=x;}}return this;}
	this.value		=function(x)	{if(x==null)return objs[0].value;else{for(o in objs){objs[o].value=x;}}return this;}
	this.href		=function(x)	{if(x==null)return objs[0].href;else{for(o in objs){objs[o].href=x;}}return this;}
	this.addValue	=function(x)	{for(o in objs){objs[o].value+=x;}return this;}
	this.show		=function()		{for(o in objs){objss[o].display="block"}return this;}
	this.hide		=function()		{for(o in objs){objss[o].display="none"}return this;}
	this.toggle		=function()		{for(o in objs){objss[o].display=(objss[o].display!="none")?"none":"block";}return this;}
	this.showByBool	=function(x)	{for(o in objs){objss[o].display=(x==true)?"block":"none";}return this;}
	this.click		=function(x)	{for(o in objs){objs[o].onclick=function(){doFun(x)}}return this;}
	this.focus		=function(x)	{for(o in objs){objs[o].onfocus=function(){doFun(x)}}return this;}
	this.blur		=function(x)	{for(o in objs){objs[o].onblur=function(){doFun(x)}}return this;}
	this.keydown	=function(x)	{for(o in objs){objs[o].onkeydown=function(){doFun(x)}}return this;}
	this.keypress	=function(x)	{for(o in objs){objs[o].onkeypress=function(){doFun(x)}}return this;}
	this.keyup		=function(x)	{for(o in objs){objs[o].onkeyup=function(){doFun(x)}}return this;}
	this.mousedown	=function(x)	{for(o in objs){objs[o].onmousedown=function(){doFun(x)}}return this;}
	this.mouseenter	=function(x)	{for(o in objs){objs[o].onmouseenter=function(){doFun(x)}}return this;}
	this.mouseleave	=function(x)	{for(o in objs){objs[o].onmouseleave=function(){doFun(x)}}return this;}
	this.mousemove	=function(x)	{for(o in objs){objs[o].onmousemove=function(){doFun(x)}}return this;}
	this.mouseout	=function(x)	{for(o in objs){objs[o].onmouseout=function(){doFun(x)}}return this;}
	this.mouseover	=function(x)	{for(o in objs){objs[o].onmouseover=function(){doFun(x)}}return this;}
	this.mouseup	=function(x)	{for(o in objs){objs[o].onmouseup=function(){doFun(x)}}return this;}
	this.submit		=function(x)	{for(o in objs){objs[o].onsubmit=function(){doFun(x)}}return this;}
	this.css		=function(x,y)	{for(o in ids){setTimeout("document.getElementById('"+ids[o]+"').style."+x+"='"+y+"'",0);}return this;}
	this.addClass	=function(x)	{for(o in objs){objs[o].className=x}return this;}
	this.removeClass=function(x)	{for(o in objs){objs[o].className=objs[o].className.replace(x,"")}return this;}
	this.top		=function(x)	{for(o in objs){objss[o].top=x}return this;}
	this.left		=function(x)	{for(o in objs){objss[o].left=x}return this;}
	this.height		=function(x)	{for(o in objs){objss[o].height=x}return this;}
	this.width		=function(x)	{for(o in objs){objss[o].width=x}return this;}
	this.margintop	=function(x)	{for(o in objs){objss[o].marginTop=x}return this;}
	this.marginleft	=function(x)	{for(o in objs){objss[o].marginLeft=x}return this;}
	this.position	=function(x)	{for(o in objs){objss[o].position=x}return this;}

	this.attr		=function(x,y)	{
						if(y==null){return (objs[0]==null)?"":objs[0].getAttribute(x);}
						for(o in objs){objs[o].setAttribute(x,y)}
						return this;
					 }//fun 设置或返回匹配元素的属性和值。
	this.removeAttr	=function(x)	{for(o in objs){objs[o].setAttribute(x,"")}return this;}//从所有匹配的元素中移除指定的属性。


	/*****	Ajax/其他页面调用	********************************************/
	this.load =function(url){
		var xmlhttp = AjaxHttp();
		xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 1){
			if(id!=null)
				objs[0].innerHTML = "正在努力加载中...";
		}
		else if(xmlhttp.readyState == 4) 
		{ 
			if(xmlhttp.status<400){
				if(id==null)
					xmlhttp.responseText;
				else
					objs[0].innerHTML = xmlhttp.responseText;
			}//if
		}//if
		}//function
		xmlhttp.open("GET",url,true);
		xmlhttp.setRequestHeader("Content-type", "text/html;charset=utf-8");
		xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}//load
	
	this.ajax =function(url,f){
		var xmlhttp = AjaxHttp();
		xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4) 
		{ 
			if(xmlhttp.status<400){
				f(xmlhttp.responseText);

			}//if
		}//if
		}//function
		xmlhttp.open("GET",url,true);
		xmlhttp.setRequestHeader("Content-type", "text/html;charset=utf-8");
		xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}//load

	this.ajaxSend=function(url){this.load(url)};
	this.getScript=function(x){document.write("<script src='"+x+"'></script>")}
	this.hideLoad=function(x){G("actionframe").src=x;}//隐藏的iframe的调用
	this.src=function(x){for(o in objs){objs[o].src=x}}//给href或iframe的src属性赋值
	
	/*****	cookie操作	********************************************/
	//写cookies
	this.setCookie=function(n,v,d,p){
		if(p==null)p="/"
		var Then = new Date(2015,1,1); 
		document.cookie = n+"=" + v + ";expires="+ Then.toGMTString() + ";domain="+d+";path="+p;
	}//setCookie

	//读取带键值的cookie
	this.getCookie=function(key,c_name){
		if (document.cookie.length>0){
        var k_start = document.cookie.indexOf(key + "=");
        if(k_start == -1)
            return "";
        k_start = k_start + key.length+1 
        var k_end = document.cookie.indexOf(";",k_start);
        if(k_end == -1) k_end = document.cookie.length;
        var cookiesWithKey = unescape(document.cookie.substring(k_start,k_end));
        if(c_name=="")return cookiesWithKey;
        var cookies = cookiesWithKey.split("&");
        for(var c=0;c<cookies.length;c++){
            if(cookies[c].split("=")[0] == c_name)
            {
                return cookies[c].split("=")[1];
            }//if
        }//for
    }//if
	return ""
	}

	/*****	timeread业务	********************************************/
	this.bookmarkit=function(){window.external.addFavorite('http://www.timeread.com','红袖添香-最具影响力的文学网站');}

	//判断是否登陆
	this.IsLogin=function(){var u = this.getCookie("account","username");return (u==null || u=="")?false:true;}

	//登陆
	this.LoginIn=function(){
		var u = escape(top.location.href);
		u ="http://login.sns.timeread.com/comlogin.aspx?url="+u;
		doFun("top.window.location='"+u+"'");
	}
	this.LoginOut=function(){
		var u=escape(top.location.href);
		u ="http://login.sns.timeread.com/comloginout.aspx?url="+u;
		doFun("top.window.location='"+u+"'");
	}
	this.addFav=function(aid,bid,backurl){this.hideLoad("http://user.api.timeread.com/store/addfavv2.ashx?aid="+aid+"&bid="+bid+"&url="+escape(backurl))}

	//从cookie中获取用户名
	this.getUserName=function(){
		var _jsusername = unescape(this.getCookie("account","username")); //获取并显示用户名。兼容中文。
		_jsusername = _jsusername.match(/^[\u4e00-\u9fa5,0-9,a-z,A-Z,_,\,,\.,\!,@,#,byId,%,^,&, ,\*]*byId/g);
		if (_jsusername==null)_jsusername="";
		return _jsusername;
	}
	//从cookie中获取用户id
	this.getUserID=function(){
		return this.getCookie("account","id");
	}

	//判断是否Vip用户
	this.IsVipUser=function(){var x = this.getCookie("account","OpenKey");
		if(x==null || x=="" || x.length<10)
			return 0;
		else
			return x.substr(8,1);
	}

	//获取时阅币
	this.getUserPoint=function(){var x = this.getCookie("account","Gold");
		if(x==null || x=="" || x<0)
			return 0;
		else
			return x;
	}

	//最近阅读纪录
	this.getReadHistory=function(){
		var _history = this.getCookie("ReadHistory","");
		if(_history=="")
			return null;
		_history=unescape(_history);
		return eval(_history);
	}

	//对象闪烁，一般用户没有填写内容或填写错误的文本框
	this.textareaWarm=function(){
			textareaWarm(id);
			return this;
	}


	//m站头部
	this.initMHeader=function()
	{
		if($$.IsLogin())
		{
			var _name = $$.getUserName();
			byId("jsusername").html(_name).click(function(){
				var _html = '<div id="centerInp1">会员帐号：'+_name+'<a id="jsloginout" href="/Fhome/logout/">退出</a></div>';
//				if($$.getUserPoint()>0)
					_html += '<div id="centerInp1">粉 币：<b id="jsPointBox">'+$$.getUserPoint()+'</b> &nbsp;<a onclick="location.reload();">刷新</a></div>';
				_html +='<div class="btn"><!--<a class="btn2" href="/Fhome/charge/">充值</a>--><a class="btn2" href="/Fhome/my">我的藏书架</a></div>';
				G("jsuser").innerHTML=_html;
				GS("jsuser").display=(GS("jsuser").display=="none")?"block":"none";
			});
		}
		else //未登录
		{
			byId("jsunlogin").show();
			byId("jslogined,jsmybook").hide();
			byId("jsLinkLogin").click(function(){
				alert("#")
				_url = "/fhome/login/";
				byId("boxtxt").load(_url);
				//需要浮框的
				byId("box").attr("style","opacity:1;bottom:40%").show();
				byId("boxmask").height("180px");
				return;
				var _html = '<form method="post" action="http://login.timeread.com/login.aspx" target="_top">'+
					'<p><input name="UserLoginName" type="text" placeholder="用户名"/></p>'+
					'<p><input name="Password" type="password" placeholder="密码" /></p>'+
					'<p><input type="submit" value=" 登 录 " /></p>'+
					'<p style="margin-top:10px"><a href="http://login.timeread.com/forgetpwd.aspx">忘记密码</a> &nbsp;'+
					'<a href="http://login.timeread.com/api/qqlogin.aspx"><img src="http://img.timeread.com/images/logo/qqlogin.png">QQ登陆</a> &nbsp;'+
					'<a href="http://login.timeread.com/reg.aspx?url='+window.location.href+'">没有帐号？注册一下</a> &nbsp;&nbsp;<a onclick="byId(\'jsuser\').hide()">取消</a></p>'+
					'<input type="hidden" name="action" value="login" /><input type="hidden" name="url" value="'+window.location.href+'" />'+
					'</form>';
				G("jsuser").innerHTML=_html;
				GS("jsuser").display=(GS("jsuser").display=="none")?"block":"none";
			});
		}
	}


	//判断浏览器类型 
	this.getOs=function(){ 
    var _nav = navigator.userAgent;
    if(_nav.indexOf("MSIE")>0)return "MSIE"; 
    else if(_nav.indexOf("Firefox")>0)return "Firefox"; 
    else if(_nav.indexOf("Safari")>0)return "Safari"; 
    else if(_nav.indexOf("Camino")>0)return "Camino"; 
    else if(_nav.indexOf("Gecko/")>0)return "Gecko"; 
    else return "MSIE"; 
	}

	//IE版本
	this.GetIEVersion=function(){
    var v=navigator.userAgent;
    if(v.indexOf("MSIE 6.0")>0)v=6;
    else if(v.indexOf("MSIE 7.0")>0)v=7
    else if(v.indexOf("MSIE 8.0")>0)v=8;
    else if(v.indexOf("MSIE 9.0")>0)v=9;
    return v;
	}

	/*****	私有方法	********************************************/
	function doFun(x){setTimeout(x,0)}
	function AjaxHttp(){var obj;try { obj = new XMLHttpRequest(); }catch(e) {var AjList = ["MSXML2.XMLHTTP","MSXML.XMLHTTP","Microsoft.XMLHTTP"];for(var a=0;a < AjList.length;a++) {try{obj = new ActiveXObject(AjList[a]);break;}catch(e){}}}return obj;}
	function isObj(x){
		if (G(x))
			return (typeof(G(x))=="undefined")?false:true;
	    else
		    return false;
	}//fun

	/****	关于弹窗		********************************************/
	/*调用：
	$$.winframeUrl="给这里赋值，要在浮窗里显示的地址";
	$$.Show();  //标准大小的浮窗调这个就行，宽高不用再赋值
	$$.ShowSize();  //特殊大小的浮窗调这个,但是要先给宽高（$$.winframeHeight = "320";$$.winframeWidth = "520";）
	*/
	this.winframeHeight = "320";
    this.winframeWidth = "520";
	this.winframeTop = "200";
	this.winframeUrl = "";
	this.winframeScrolling="no";
    
	this.winframeShow=function()
	{
		this.winframeHeight = "320";
	    this.winframeWidth = "520";
		this.winframeTop = "200";
		this.scrolling = "no";
		this.winframeShowSize();
	}
    this.winframeShowSize = function()
	{
		if ($$.getOs()=="MSIE")
		{
			if($$.GetIEVersion()==6)
			{
				byId("jsifrm").top(eval(document.documentElement.scrollTop) + eval(this.winframeTop)).position("absolute");
				byId("jsallscreen").height(document.body.scrollHeight);
			}
			else{
				byId("jsifrm").position("fixed").top(this.winframeTop+"px");
			}
		}
		else 
		{
			byId("jsifrm").top(this.winframeTop + "px").position("fixed");  
			G("jsifrm").style.innerHTML="table";
		}
		byId("jsifrm").left((document.body.clientWidth - this.winframeWidth)/2 + "px");
		byId("jsifrm,jsallscreen").show();
		byId("jsifrm").html("<iframe width='"+this.winframeWidth+"px' height='"+this.winframeHeight+"px' marginwidth='0' marginheight='0' scrolling='"+this.winframeScrolling+"' border='0' frameborder='0' id='jsiframeonclass' ></iframe>");
		G("jsiframeonclass").src= this.winframeUrl;
	}//.show
    this.winframeHidden = function()
	{
	    byId("jsifrm,jsallscreen").hide();
	}//.hidden
	this.winframeHiddenV2 = function()
	{
		byId("jsallscreen").hide();
		HiddenV2Run(320);
	}//.hidden


}//doHQuery

function HiddenV2Run(i)
{
	try{
		if(i<0)
		{
			GS("jsifrm").display=GS("jsallscreen").display="none";
			return;
		}
		GS("jsiframeonclass").height=i+"px";
		i=i-10;
		setTimeout("HiddenV2Run("+i+")",5);
	}catch(e){
		GS("jsifrm").display=GS("jsallscreen").display="none";
	}
}

//没有内容的警告
var _HQWarmCnt = 0;
var _HQWarmRGB = 255;
function textareaWarm(id)
{
	var _ids=id.split(",");
    _HQWarmCnt++;
    if((_HQWarmCnt>12) & (_HQWarmCnt<25))
        _HQWarmRGB = _HQWarmRGB+10;
    else if(_HQWarmCnt>37)
        _HQWarmRGB = _HQWarmRGB+10;
    else
        _HQWarmRGB=_HQWarmRGB-10;
    try{    
		for(o in _ids){GS(_ids[o]).backgroundColor="rgb(255,"+_HQWarmRGB+","+_HQWarmRGB+")"; }
    }catch(e) {}
    if (_HQWarmCnt<75)
        setTimeout("textareaWarm('"+id+"')",20);
	else
	{
		_HQWarmCnt = 0;
		_HQWarmRGB = 255;
	}
}

function showLoginLayer() {
        _url = "/fhome/login/";
        $("#boxtxt").load(_url);
        //需要浮框的
        $("#box").attr("style","opacity:1;top:5%").show();
        $("#boxmask").height("200px");
    }
function showBindLayer() {
        _url = "/fhome/bind/";
        $("#boxtxt").load(_url);
        //需要浮框的
        $("#box").attr("style","opacity:1;top:5%").show();
        $("#boxmask").height("220px");
    }

$(function () {

    $(".json").click(function () {
        var me = $(this), url = me.attr("href");
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            error: function () { alert('请求异常！'); },
            success: function (result) {
                if (result.success) {
                    //bootbox.alert("操作成功");
                    //window.location.reload();
					alert("感谢您的签到，您获得"+result.gold+"个果币！");
                } else {
					if(result.message=="用户未登录"){
						showLoginLayer();
						return;
					}
                    alert(result.message);

                }
            }

        });
        return false;
    })

})