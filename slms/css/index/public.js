/**
 * wzb 2017-1-6
 */
var cid = 0;
var sort = 0;
var bid = 0;
var p = 1;

$(function () {
    // 客服帮助
    $('#faq-box .item .question').click(function() {
        var item_p = $(this).parents(".item");
        item_p.toggleClass("active");
        window.scrollTo(0,document.body.scrollHeight);
    })
})


//Ajax 请求 json post
function AjaxJson(url,data,successFunc,errorFunc){
    var data = data || "{}";
    successFunc = successFunc || null;
    errorFunc = errorFunc || null;
    if(!url || url==='#')
        return false;

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        dataType: 'json',
        success: function(data) {
            try{ successFunc(data); }catch(e){}
        },
        error: function(xhr, type) {
            try{ errorFunc(data); }catch(e){}
            console.log("页面动态加载不成功，请与管理员联系");
        },
    })
    //阻止冒泡
    return false;
}

// 页面提示信息
function bh_msg_tips(msg){
    var oMask = document.createElement("div");
    oMask.id = "bh_msg_lay";
    oMask.style.position="fixed";
    oMask.style.left="0";
    oMask.style.top="70%";
    oMask.style.zIndex="100";
    oMask.style.textAlign="center";
    oMask.style.width="100%";
    oMask.innerHTML =  "<span style='background: rgba(0, 0, 0, 0.65);color: #fff;padding: 10px 15px;border-radius: 3px; font-size: 14px;'>" + msg + "</span>";
    document.body.appendChild(oMask);
    setTimeout(function(){$("#bh_msg_lay").remove();},2000);
}


/**
 * 实时动态强制更改用户录入
 * @Author wzb 2017-1-6
 **/
function amount(obj){
    //响应鼠标事件，允许左右方向键移动
    event = window.event || event;
    if (event.keyCode == 37 | event.keyCode == 39) {
        return;
    }
    var obj_va = obj.value;
    var re=/[^\d.]/g;
    var re1=/^\./g;
    var re2=/^0/g;
    if(re.test(obj_va) || re1.test(obj_va) || re2.test(obj_va)){
        bh_msg_tips('请输入正确的金额');
    }

    var t = obj.value.charAt(0);
    obj.value = obj.value.replace(/[^\d.]/g, "");
    obj.value = obj.value.replace(/^\./g, "");
    obj.value = obj.value.replace(/^0/g, "");
    obj.value = obj.value.replace(/\.{2,}/g, ".");
    obj.value = obj.value.replace(".", "$#$").replace(/\./g, "").replace("$#$", ".");
    obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/,'$1$2.$3');
}


/**********************************
 * return top
 **********************************/
// 页面加载执行
window.onload = function() {
    return_top();
}

function return_top(){
    var obtn = document.getElementById('icon-top');
    try{
        //获取页面可视区的高度
        // <!doctype html> 必须要有值clientHeight才有用
        var clientHeight = document.documentElement.clientHeight;
        var timer = null;
        var isTop = true;
        var osTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (osTop >= clientHeight) {
            obtn.style.display = "block";
        } else {
            obtn.style.display = "none";
        };
        // 滚动条滚动时触发
        window.onscroll = function() {
            var osTop = document.documentElement.scrollTop || document.body.scrollTop;
            if (osTop >= (clientHeight/2)) {
                obtn.style.display = "block";
            } else {
                obtn.style.display = "none";
            };
            if (!isTop) {
                clearInterval(timer);
            };
            isTop = false;
        }
        obtn.onclick = function() {
            document.documentElement.scrollTop = document.body.scrollTop = 0;
            ////设置定时器
            //timer = setInterval(function() {
            //    //获取滚动条距离顶部的高度
            //    var osTop = document.documentElement.scrollTop || document.body.scrollTop;
            //    var ispeed = Math.floor(-osTop / 6);
            //    document.documentElement.scrollTop = document.body.scrollTop = osTop + ispeed;
            //
            //    isTop = true;
            //    if (osTop == 0) {
            //        clearInterval(timer);
            //    }
            //}, 200);
        }
    }catch(e){ return false; }

}
// 去除url 里的 .html
function delAspExtension(str){
    var reg = /\.html$/;
    return str.replace(reg,'');
}
// 首页 猜你想
function get_other_books(bid){
    var url = "/Index/ajax_rand_book";
    var data = {bid:bid,limit:6}
    AjaxJson(url,data,function(data){
        if(data.status*1 == 1){
            $("#other_book").html(data.data);
        }else{
            bh_msg_tips(data.info);
        }
    })
}
// 倒计时
function GetRTime(dateid){
    var startdate = document.getElementById(dateid).getAttribute("startdate");
    var EndTime= new Date(startdate);
    var NowTime = new Date();
    var t =EndTime.getTime() - NowTime.getTime();
    var d=0;
    var h=0;
    var m=0;
    var s=0;
    if(t>=0){
        d=Math.floor(t/1000/60/60/24);
        h=Math.floor(t/1000/60/60%24);
        m=Math.floor(t/1000/60%60);
        s=Math.floor(t/1000%60);
    }
    if(d>0){
        var timehtml = "倒计时: "+d +"天 <i class='num'>"+h+"</i> <small>:</small> <i class='num'>"+m+"</i> <small>:</small> <i class='num'>"+s+"</i>";
    }else{
        var timehtml = "倒计时: <i class='num'>"+h+"</i> <small>:</small> <i class='num'>"+m+"</i> <small>:</small> <i class='num'>"+s+"</i>";
    }
    document.getElementById(dateid).innerHTML = timehtml;
}

// 首页主编推荐轮换
var on_recommend = 'no';
var ul_le = 0;
function recommend_lh(time){
    if(on_recommend == 'no'){  // 初始化
        // 去除空的ul
        $("#recommend_box .entry ul").each(function () {
            var li_len = $(this).find('li').length;
            if(li_len<1){
                $(this).remove();
            }
        });
        ul_le = $("#recommend_box .entry").find('ul').length;
        var lihtml = "<a class='active'></a>";
        for(var i=1;i<ul_le;i++){
            lihtml+= "<a></a>";
        }
        $("#recommend_box .dot").html(lihtml);
        on_recommend = 1;
    }else { // 轮换
        $("#recommend_box .entry ul").hide();
        $("#recommend_box .dot a").removeClass('active');

        $("#recommend_box .entry ul").eq(on_recommend).show();
        $("#recommend_box .dot a").eq(on_recommend).addClass('active');
        on_recommend++;
        if(on_recommend>=ul_le){
            on_recommend = 0;
        }
    }
    if(ul_le > 1){
        setTimeout(function(){recommend_lh(time)},time);
    }
}

// 搜索页搜索
function key_search_list(){
    var key_v = $('#search_keyword').val();
    if(key_v == ''){
        return false;
    }
    var url = "/Book/ajax_search";
    var data = {key:key_v,p:1}
    $("#bhloading").show();
    AjaxJson(url,data,function(data){
        if(data.status*1 == 1){
            $('#page_html').html(data.data);
            $('#show_cleare_btn').show();
            $('#show_sear_btn').hide();
        }else{
            bh_msg_tips(data.info);
        }
        $("#bhloading").hide();
    })
}

// 实时搜索
function keyup_search(obj,type){
    $('#show_cleare_btn').hide();
    $('#show_sear_btn').show();
    $('#closeid').show();
    return false;
    var key_v = $(obj).val();
    if( parseInt(key_v.length) >0  ){
        $("#page_html").empty();
        var url = "/Book/auto_search";
        var data = {key:key_v,type:type}
        AjaxJson(url,data,function(data){
            if(data.status*1 == 1){
                if(data.data != ''){
                    $("#page_html").html(data.data);
                    $('#show_cleare_btn').hide();
                    $('#show_sear_btn').show();
                }
            }
        })
    }
}

// 清除输入框的文字
function close_clear(){
    $('#closeid').hide();
    $('#search_keyword').val('');
    $('#show_cleare_btn').show();
    $('#show_sear_btn').hide();
}

//首页显示搜索框
function show_ser_box(){
    $("#show_ser_box").show();
}
//首页隐藏搜索框
function hide_ser_box(){
    $("#show_ser_box").hide();
    $("#search_keyword").val("");
    close_clear();
}
//首页点击搜索跳转到搜索页面
// 搜索页搜索
function key_search_href() {
    var key_v = $('#search_keyword').val();
    if (key_v == '') {
        return false;
    }
    hide_ser_box();
    window.location.href = "/Book/search?key="+key_v;
}

// 列表分页获取
var autoready=1;
function list_page(url,data,no,id){
    $(window).bind("scroll", function (event) {
        //滚动条到网页头部的 高度，兼容ie,ff,chrome
        var top = document.documentElement.scrollTop + document.body.scrollTop;
        var textheight = $(document).height();  //网页的高度
        // 网页高度-top-当前窗口高度
        if (textheight - top - $(window).height() <= 60){
            if(autoready==1) {
                autoready=0;
//              window.scrollTo(0,document.body.scrollHeight);
                // 请求分页数据
                get_page_data(url,data,no,id);
            }
        }
    });
}
// 请求分页数据
function get_page_data(url,data,no,id){
    var box_id = id || '#html_box';
    p = data['p'];
    $("#bhloading").show();
    AjaxJson(url,data,function(res){
        if(res.status*1 == 1){
            p++;
            $(box_id).append(res.data);
            data['p'] = p;
            autoready=1;
        }else{
            if(no != 'no'){
                bh_msg_tips(res.info);
            }
        }
        $("#bhloading").hide();
    })
}


// 书籍详情页 显示和隐藏图书相关信息
function toggle_book_info(obj){
    if($('#book_rele_info').is(':hidden')){
        $(obj).html("收起<i class='icon-retract'></i>");
    }else{
        $(obj).html("展开<i class='icon-open'></i>");
    }
    $('#book_rele_info').toggle();
    window.scrollTo(0,document.body.scrollHeight);
}

// 书籍详情页 显示书籍简介
function bh_book_title_show(){
    $(".bh_book_title_show").hide();
    $(".bh_book_title_hide").show();
}
// 书籍详情页 隐藏书籍简介
function bh_book_title_hide(){
    $(".bh_book_title_show").show();
    $(".bh_book_title_hide").hide();
}

// 书籍详情页 其他在作品换一换
function get_other_books_info(bid){
    var url = "/BookInfo/ajax_rand_list_book";
    var data = {bid:bid}
    AjaxJson(url,data,function(data){
        if(data.status*1 == 1){
            $("#other_book").html(data.data);
        }else{
            bh_msg_tips(data.info);
        }
    })
}

// 加入和移除书架
var is_on_book = 0;
function user_add_book_shelf(obj){
    if(is_on_book == 1 || bid<1){
        return false;
    }
    is_on_book = 1;
    var book_shelfurl = "/BookInfo/ajax_add_books";
    var book_shelfdata = {bid:bid,cid:cid,sort:sort}
    AjaxJson(book_shelfurl,book_shelfdata,function(res){
        is_on_book = 0
        if(res.status*1 == 1){
            $(obj).toggleClass("gray");
            var is_gray_ = $(obj).hasClass("gray");
            if(is_gray_){
                $(obj).html("已追书");
            }else{
                $(obj).html("我要追书");
            }
        }else{
            bh_msg_tips(res.info);
        }
    })
};

// 加入和移除书架
function oneadd_userbook_shelf(obj){
    if(is_on_book == 1 || bid<1){
        return false;
    }
    is_on_book = 1;
    var userbookurl = "/Comment/add_user_book_shelf";
    var userbookdata = {bid:bid,cid:cid,sort:sort}
    AjaxJson(userbookurl,userbookdata,function(res){
        is_on_book = 0
    })
};

//切换自动解锁付费购买小说章节
function switchAutoBuy(){
    var autoPay = $("#autopay").val();
    if(parseInt(autoPay)*1 == 1){
        autoPay = 0;
    }else{
        autoPay = 1;
    }
    var autobuy_url = "/My/switchAutoBuy";
    var autobuy_data = {autoPay:autoPay};
    AjaxJson(autobuy_url,autobuy_data,function(res){
        if(res.status*1 == 1){
            $("#autopay").val(autoPay)
            $("#autopay_box").toggleClass("active");
        }else{
            bh_msg_tips(res.info);
        }
    })
}

// 选择星星
function choice_star_box(index){
    $("#star_box li a").removeClass("active");
    for (var i= 0;i<index;i++){
        $("#star_box li a").eq(i).addClass("active");
    }
    star = index;
}
// 发表评论
var star = 0;
var pid = 0;
function publist_comment(){
    if(parseInt(uid)*1 < 1){
        show_login(); //  未登陆
    }
    if(parseInt(bid)*1 < 1){
        bh_msg_tips("无法发表评论");
    }
    var comment_mess = $("#comment_mess").val();
    if(!comment_mess){
        bh_msg_tips("请填写留言内容");
    }
    var publist_url = "/Comment/add_comment";
    var publist_data = {bid:bid,mess:comment_mess,star:star,pid:pid};
    AjaxJson(publist_url,publist_data,function(res){
        if(res.status*1 == 1){
             window.location.href = res.data;
        }else {
            bh_msg_tips(res.info);
        }

    })
}

// 回复评论
function replay_comment(pid,bid){
    if(parseInt(uid)*1 < 1){
        show_login(); //  未登陆
    }
    if(parseInt(bid)*1 < 1 || parseInt(pid)*1 < 1){
        bh_msg_tips("无法发表评论");
    }
    var replay_mess = $("#replay_mess").val();
    if(!replay_mess){
        bh_msg_tips("请填写回复内容");
    }
    var publist_url = "/Comment/add_comment";
    var publist_data = {bid:bid,mess:replay_mess,star:5,pid:pid};
    AjaxJson(publist_url,publist_data,function(res){
        if(res.status*1 == 1){
            bh_msg_tips("回复成功");
            $("#html_box").empty();
            var data = {p:1,pid:pid};
            get_page_data(url,data,'no');
        }else {
            bh_msg_tips(res.info);
        }
    })
}

// 评论点赞
function comment_dianzan(obj,id){
    if(parseInt(id)*1<1){
        bh_msg_tips("点赞失败");
    }
    if(parseInt(uid)*1 < 1){
        show_login(); //  未登陆
    }
    var old_zan = $(obj).find("span").html();
    var dianzan_url = "/Comment/ajax_comment_dianzan";
    var dianzan_data = {id:id};
    AjaxJson(dianzan_url,dianzan_data,function(res){
        if(res.status*1 == 1){
            old_zan++;
            $(obj).find("span").html(old_zan);
        }else{
            bh_msg_tips(res.info);
        }
    })
}

// 首页切换男频女频
function bh_qiesexv(obj,sexv){
    var qiesexv_url = "/Comment/ajax_qiesexv";
    var qiesexv_data = {sexv:sexv};
    AjaxJson(qiesexv_url,qiesexv_data,function(res){
		window.location.href="/?tq=1";
    })
}

//Ajax 请求 json post
function AjaxJsonP(url,data,successFunc,errorFunc){
    var data = data || "{}";
    successFunc = successFunc || null;
    errorFunc = errorFunc || null;
    if(!url || url==='#')
        return false;

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        dataType: 'jsonp',
        success: function(data) {
            try{ successFunc(data); }catch(e){}
        },
        error: function(xhr, type) {
            try{ errorFunc(data); }catch(e){}
            console.log("页面动态加载不成功，请与管理员联系");
        },
    })
    //阻止冒泡
    return false;
}

// 记录pv 和uv
function tj_pv_uv(uid,channel,user){
    var tj_pv_uv_url = "//uv.qirexiaoshuo.com/Index/record_pvuv";
    var tj_pv_uv_data = {uid:uid,channel:channel,user:user};
    AjaxJsonP(tj_pv_uv_url,tj_pv_uv_data)
}


