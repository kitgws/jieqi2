var host="www.1.com"   //����
var jsSize="";	//ȫ���ֺ�
var jsBG="";	//ȫ�ֱ���

//��ҳ�����Ҫִ�еĴ��룬��ҪΪ�˾��콵�Ϳ���
function initBottom()
{
    //getReadSet();
    $("#jsBack").click(function(){history.back()});
	$("#helpdiv").click(function(){$(this).hide()});

	//����ҳ������
	$("#goSet").click(function(){
	    $("#jsuser,#box").hide();
	    $("#config").slideToggle(100);
    });

	//�����û���Ϣ
	$("#goCenter").click(function(){showUserInfo()});

	//�Ϸ�ҳ��
	$("#jsfirst").click(function(){
	    $("#box").hide();
		window.scrollTo(0,document.body.scrollTop-document.documentElement.clientHeight+15);
	});	
	
	//�·�ҳ��
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

    //����
	$("#dashang").click(function(){dashang()});//$


	//��ǩ
	$("#jsshuqian").click(function(){addShuqian()});
	
	//Ԥ����
	$.get($("#htmlxiazhang").attr("href"));

}//initBottom();


//��ȡcookie������ ��=ֵ���͵�
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

//дcookies
function SetCookie(n,v){
    var Then = new Date(2050,1,1); 
    document.cookie = n+"="+v+";expires="+ Then.toGMTString()+";domain="+host+";path=/";
}//setCookie


//�Ķ����� start
//������
function getReadSet()
{
	var _readset = getCookie("ReadSet");
	if(_readset=="")//û��cookie
	{
		jsSize="16";
		jsBG="day-bg";
		$("#helpdiv").show();
		setReadSet(jsSize,jsBG);
		return;
	}
	var o = eval("(" + unescape(_readset) + ")");	//��ȫ�ֱ�����ֵ
	setSize(o.sz);
	setBg(o.bg);
}

//д����
function setReadSet(size,bg)
{
	var _jstr="{\"sz\":\""+size+"\",\"bg\":\""+bg+"\",\"help\":\"1\"}";
	SetCookie("ReadSet",_jstr);
}

//���ֺ�
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
//�豳��
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
//�Ķ����� end


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


//��ȡ����ֵ��cookie
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