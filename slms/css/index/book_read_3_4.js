/**
 * 书籍阅读页 3.0 版
 * @Author wzb 2017/9/23.
 */
var couponsecond = 0;
$(function(){
	
	// 显示优惠卷窗口
	var qrxs_coupon_show = localStorage.getItem('qrxs_coupon_show');  
	if(qrxs_coupon_show == 'is_show_coupon'){
		$('#coupon_lay').show();
	}
	
	// 显示倒计时优惠窗口
	var qrxs_coupon_use = localStorage.getItem("qrxs_coupon_use");
	console.log(qrxs_coupon_use)
	console.log(couponsecond)
	if(couponsecond > 0){
		$('#coupon_lay').hide();
		GetRTimeCoupon(couponsecond);
		$('#coupon_count_down_lay').show(); 
	}

})

// 阅读页 特别推荐
function read_book_list(read_url,read_data){
    AjaxJson(read_url,read_data,function(data){
        if(data.data != ''){
            $('#read_list').html(data.data).show();
        }
    });
} 

// 自动解锁选择
function wap_auto_buy_func(obj){
    $(obj).toggleClass('active');
    var is_ac = $(obj).hasClass('active');
    if(is_ac){
        wap_auto_buy = 0;
    }else{
        wap_auto_buy = 1;
    }
    console.log(wap_auto_buy)
}


// 解锁本章
function show_bh_echarge_book(type){
    if(parseInt(uid)*1 < 1 ){
        show_login();
        return false;
    }
	$('#bh_lock_one').hide();
    var re_book_data = {bid:bid,cid:cid,wap_auto_buy:wap_auto_buy};
    AjaxJson(re_book_url,re_book_data,function(data){
        if(data.status*1 == 1){
			var decrypted = CryptoJS.AES.decrypt(data.data,key,{iv:iv,padding:CryptoJS.pad.ZeroPadding});
			decrypted = decrypted.toString(CryptoJS.enc.Utf8);
			$('#read_conent_box').html(decrypted)
            //$('#read_conent_box').html(data.data); 
			$("#unlock_box,.read_lock_lay").hide();
            //$(".feif_unlock").css({'display':'block!important'}); 
            //$(".feif_unlock").show();
            $(".feif_unlock").removeClass('feif_unlock');
			return false;
        }
		if(data.status*1 == -2){
			$("#unlock_box,.read_lock_lay").hide();
            $(".feif_unlock").removeClass('feif_unlock');
			return false;
		}
        if(data.status*1 == -3){
            show_recharge_box(); //显示书币选择
        }else{
            bh_msg_tips(data.info);
        }
    });
}


// 解锁短篇小说全本（书币）
var ison_shore = 0;
function show_shore_echarge_book(){
    if(parseInt(uid)*1 < 1 ){
        show_login();
        return false;
    }
	if(parseInt(ison_shore) == 1){
		return false;
	}
	ison_shore = 1;
	var shore_book_url =  "/BookInfo/unlock_shore_book";
    var shore_book_data = {bid:bid,cid:cid};
    AjaxJson(shore_book_url,shore_book_data,function(data){
		ison_shore = 0;
        if(data.status*1 == 1){
			var decrypted = CryptoJS.AES.decrypt(data.data,key,{iv:iv,padding:CryptoJS.pad.ZeroPadding});
			decrypted = decrypted.toString(CryptoJS.enc.Utf8);
			$('#read_conent_box').html(decrypted)
            //$('#read_conent_box').html(data.data); 
			$("#unlock_box,.read_lock_lay").hide();
            //$(".feif_unlock").show();
            $(".feif_unlock").removeClass('feif_unlock');
			return false;
        }
        if(data.status*1 == -3){
            show_recharge_box(); //显示书币选择
        }else{
            bh_msg_tips(data.info);
        }
    });
}


// 记录用户阅读的书籍标签
function add_user_read_label(){
    var readlabel_url = "//tj.qirexiaoshuo.com/Comment/ajax_user_read_label";
    var readlabel_data = {uid:uid,bid:bid,cid:cid,label:label};
    AjaxJsonP(readlabel_url,readlabel_data);
}

// 加入和移除书架
function oneadd_userbook_shelf_msg(obj){
    if(is_on_book == 1 || bid<1){
        return false;
    }
    is_on_book = 1;
    var userbookurl = "/Comment/add_user_book_shelf";
    var userbookdata = {bid:bid,cid:cid,sort:sort}
    AjaxJson(userbookurl,userbookdata,function(res){
        is_on_book = 0;
        bh_msg_tips(res.info);
    })
};

function hide_lock_one(){
	$('.read_lock_lay').show();
	$('#bh_lock_one').hide();
}

// 设置显示
function show_seting(){
	$('#bh_seting_lay').show();
}
// 设置隐藏
function hide_seting(){
	$('#bh_seting_lay').hide();
}
// 显示字体
function show_font_lay(){
	$('#bh_font_lay').show();
	hide_seting();
}
// 隐藏字体
function hide_font_lay(){
	$('#bh_font_lay').hide();
}
// 显示背景
function show_back_lay(){
	$('#bh_back_lay').show();
	hide_seting();
}
// 隐藏背景
function hide_back_lay(){
	$('#bh_back_lay').hide();
}
// 显示离线下载
function show_down_lay(){
	if(parseInt(uid)*1 > 0){
        $('#bh_down_lay').show();
		hide_seting();
    }else{
        show_login(); //登陆
    }
}
// 隐藏离线下载
function hide_down_lay(){
	$('#bh_down_lay').hide();
}
// 设置字体
function set_font(size){
	localStorage.setItem("read_font_size",size+'rem')
	set_loca_font_back();
}
// 设置背景
function set_back(back){
	localStorage.setItem("read_back",back)
	set_loca_font_back();
}
// 设置字体和背景
function set_loca_font_back(){
	var read_font_size = localStorage.getItem('read_font_size');
	if(read_font_size){
		$('#read_conent_box').css({"font-size":read_font_size});
		$('#bh_font_lay .col a').removeClass('active');
		read_font_size = read_font_size.replace('0.','');
		read_font_size = read_font_size.replace('rem','');
		$('#read_font_'+read_font_size).addClass('active');
	}
	var read_back = localStorage.getItem('read_back');
	if(read_back){
		$('body').attr('class','');
		$('body').addClass(read_back);
		$('#bh_back_lay .col a').removeClass('active');
		$('#back_'+read_back).addClass('active');
	}
}

// 显示出优惠卷浮动窗口
function coupon_lay(){
	var coupon_fre = localStorage.getItem('qrxs_coupon_fre'); // 关闭付款浮层次数记录
	var qrxs_coupon_use = localStorage.getItem("qrxs_coupon_use");
	coupon_fre++;
	if(parseInt(coupon_fre) >= 3 && qrxs_coupon_use != 1){
		$('#coupon_lay').show();
		ajax_recond_coupon();
		//localStorage.setItem("qrxs_coupon_show",'is_show_coupon'); //  不一直增加
		localStorage.removeItem('qrxs_coupon_show'); 
		return false;
	}
	localStorage.setItem("qrxs_coupon_fre",coupon_fre); //  不一直增加
}

// 记录优惠卷
var iscoupon = 0;
function ajax_recond_coupon(){
	if(iscoupon == 1 ){
        return false;
    }
    iscoupon = 1;
	// 记录5元用户优惠卷
	var usercouponurl = "/BookInfo/record_coupon";
    var usercoupodata = {payment:5}
    AjaxJson(usercouponurl,usercoupodata,function(res){ 
		iscoupon = 0;
		if(res.status == 1){
			$('#coupon_count_down_lay').show(); 
			GetRTimeCoupon(res.data.second);
		}else{
			//bh_msg_tips(res.msg);
		} 
    })
	localStorage.setItem("qrxs_coupon_use",'1');
	localStorage.removeItem('qrxs_coupon_show');
	localStorage.removeItem('qrxs_coupon_tis');
}


// 隐藏优惠卷提醒浮动
function hide_coupon_lay(){
	$('#coupon_lay').hide();
	//var coupon_tis = localStorage.getItem('qrxs_coupon_tis'); // 关闭付款浮层次数记录	
	//coupon_tis++;
	//if(parseInt(coupon_tis) >= 2){
	//	show_prompt_coupon_lay();
	//	localStorage.removeItem('qrxs_coupon_tis');
	//	return false;
	//}
	//localStorage.setItem("qrxs_coupon_tis",coupon_tis);  
}

// 显示优惠卷温馨提示
function show_prompt_coupon_lay(){
	ajax_recond_coupon();
	$('#bh_prompt_coupon_lay').show();	
}

// 隐藏优惠卷温馨提示
function hide_prompt_coupon_lay(){
	$('#coupon_lay').hide();
	$('#bh_prompt_coupon_lay').hide();  	
}

// 显示限时优惠卷
function show_coupon_use_lay(){ 
	$('#bh_coupon_use_lay').show();
	$('#coupon_lay').hide();
	$('#bh_prompt_coupon_lay').hide(); 
}

// 隐藏优惠卷浮曾
function hide_coupon_use_lay(){
	$('#bh_coupon_use_lay').hide();
}

// 显示优惠卷倒计时
function show_coupon_count_down_lay(){
	$('#bh_coupon_use_lay').hide();
	//$('#coupon_count_down_lay').show();
}
// 隐藏优惠卷倒计时
function hide_coupon_count_down_lay(){ 
	$('#coupon_count_down_lay').hide(); 
}

// 倒计时
function GetRTimeCoupon(t){
	//$('#coupon_lay').hide();
	var intDiff = parseInt(t);//倒计时总秒数量
	 
	var coupontime = setInterval(function(){ 
		var day=0,
			hour=0,
			minute=0,
			second=0;//时间默认值        
		if(intDiff > 0){
			day = Math.floor(intDiff / (60 * 60 * 24));
			hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
			minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
			second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
		}
		if (minute <= 9) minute = '0' + minute;
		if (second <= 9) second = '0' + second;
	  
		
		if(day>0){
			var timehtml = "有效期: <span class='num'>"+day+"</span>天<span class='num'>"+hour+"</span><span class='num'>"+minute+"</span><span class='num'>"+second+"</span>";
		}if(hour>0){
			var timehtml = "有效期: <span class='num'>"+hour+"</span>时<span class='num'>"+minute+"</span>分<span class='num'>"+second+"</span>秒";
		}else{
			var timehtml = "有效期: <span class='num'>"+minute+"</span>分<span class='num'>"+second+"</span>秒";
		} 
		var downhtml = minute+':'+second;
		$('#coupon_use_down_box').html(timehtml);
		$('#coupon_count_down_box').html(downhtml); 
		intDiff--;
		if( intDiff < 0){    
			$('#bh_coupon_use_lay').hide();
			$('#coupon_count_down_lay').hide();
			$('#coupon_lay').hide();
			//localStorage.removeItem('qrxs_coupon_use');
            clearInterval(coupontime);    //清除定时器
			
        }  
    }, 1000);
    
}
// 获取章节
function get_charpter_content(){
	AjaxJson('/BookInfo/get_charpter_content',{bid:bid,cid:cid,sign:content_token},function(data){
		var decrypted = CryptoJS.AES.decrypt(data.data,key,{iv:iv,padding:CryptoJS.pad.ZeroPadding});
		decrypted = decrypted.toString(CryptoJS.enc.Utf8);
		$('#read_conent_box').html(decrypted);
		$(".hide_bh_prevnext").removeClass('hide_bh_prevnext');
	});
}

