var host="www.1.com"   //域名
var jsSize="";	//全局字号
var jsBG="";	//全局背景

//在页面最后要执行的代码，主要为了尽快降低卡顿
function initBottom()
{
    //getReadSet();
    $("#jsBack").click(function(){history.back()});
	$("#helpdiv").click(function(){$(this).hide()});

	//呼出页面设置
	$("#goSet").click(function(){
	    $("#jsuser,#box").hide();
	    $("#config").slideToggle(100);
    });

	//呼出用户信息
	$("#goCenter").click(function(){showUserInfo()});

	//上翻页区
	$("#jsfirst").click(function(){
	    $("#box").hide();
		window.scrollTo(0,document.body.scrollTop-document.documentElement.clientHeight+15);
	});	
	
	//下翻页区
	$("#jslast").click(function(){
	    $("#box").hide();
		if((document.body.scrollTop+document.documentElement.clientHeight) >= document.body.scrollHeight)
		{
		    if($("#htmlxiazhang").attr("href")!= undefined)
		        window.location.href= $("#htmlxiazhang").attr("href");
		}
		else
			window.scrollTo(0,document.body.scrollTop+document.documentElement.clientHeight-15);
	});	

	$("#font14").click(function(){setSize(14)});
	$("#font16").click(function(){setSize(16)});
	$("#font18").click(function(){setSize(18)});
	$("#font20").click(function(){setSize(20)});
	$("#font22").click(function(){setSize(22)});


	$("#backStyle1").click(function(){setBg("day-bg")});
	$("#backStyle2").click(function(){setBg("night-bg")});
	$("#backStyle3").click(function(){setBg("pink")});
	$("#backStyle4").click(function(){setBg("eyeshield-bg")});
	$("#backStyle5").click(function(){setBg("youth-bg")});

    //打赏
	$("#dashang").click(function(){dashang()});//$


	//书签
	$("#jsshuqian").click(function(){addShuqian()});
	
	//预加载
	$.get($("#htmlxiazhang").attr("href"));

}//initBottom();


//获取cookie，合适 名=值类型的
function getCookie(key){
	if (document.cookie.length>0){
        var k_start = document.cookie.indexOf(key + "=");
        if(k_start == -1)
            return "";
        k_start = k_start + key.length+1 
        var k_end = document.cookie.indexOf(";",k_start);
        if(k_end == -1) k_end = document.cookie.length;
        return unescape(document.cookie.substring(k_start,k_end));
    }//if
    return ""
}

//写cookies
function SetCookie(n,v){
    var Then = new Date(2050,1,1); 
    document.cookie = n+"="+v+";expires="+ Then.toGMTString()+";domain="+host+";path=/";
}//setCookie


//阅读设置 start
//读设置
function getReadSet()
{
	var _readset = getCookie("ReadSet");
	if(_readset=="")//没有cookie
	{
		jsSize="16";
		jsBG="day-bg";
		$("#helpdiv").show();
		setReadSet(jsSize,jsBG);
		return;
	}
	var o = eval("(" + unescape(_readset) + ")");	//给全局变量赋值
	setSize(o.sz);
	setBg(o.bg);
}

//写设置
function setReadSet(size,bg)
{
	var _jstr="{\"sz\":\""+size+"\",\"bg\":\""+bg+"\",\"help\":\"1\"}";
	SetCookie("ReadSet",_jstr);
}

//设字号
function setSize(x)
{
	$("#htmlmain").removeClass().addClass("content"+x);
	if(jsSize!=x)
	{
		jsSize=x;
		for(var i=14;i<=22;i=i+2)
		{
			$("#font"+i).removeClass("click");
		}
		setReadSet(x,jsBG)
	}
	$("#font"+x).addClass("click");
	
//	if(IsLoginIn()==true){
//		changeReadStyle(x,"");		
//	}

}
//设背景
function setBg(x)
{
	$("#read").removeClass().addClass(x);
	if(jsBG!=x)
	{
		jsBG=x;
		setReadSet(jsSize,x);
		if(IsLoginIn()==true){
		changeReadStyle("",x);		
	}
	}
}
//阅读设置 end


function fromlinksite()
{
    var _ref=document.referrer;
    var _siteurls=["book.2345.com"];
    for(i=0;i<_siteurls.length;i++)
    {
        if(_ref.indexOf(_siteurls[i])>0)
        {
            document.cookie="fromdomain=wap."+_siteurls[i]+";domain="+host+";path=/";break;
        }
    }
}
fromlinksite();


//读取带键值的cookie
function getCookiesWithKey(key,c_name){
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
        for(var i=0;i<cookies.length;i++){
            if(cookies[i].split("=")[0] == c_name)
            {
                return cookies[i].split("=")[1];
            }//if
        }//for
    }//if
return ""
}