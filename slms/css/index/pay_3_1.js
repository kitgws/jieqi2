/**
 * 支付相关
 * @Author wzb 2017/4/11.
 */
var loginurl = 'no';
//显示登陆弹窗
function show_login(){
    if(loginurl != 'no'){
        window.location.href = loginurl;
    }else{
        $('.bh_wxlogin_lay').show();
    }
}
function hide_login() {
    $(".bh_wxlogin_lay").hide();
}
// 显示充值书币浮层
var uid = 0;
function show_recharge_box(){
    if(parseInt(uid)*1 > 0){
        $(".bh_recharge_box").show();
    }else{
        show_login(); //显示登陆
    }
}
// 隐藏充值书币浮层
function hide_recharge_box(){
    $(".bh_recharge_box").hide();
}
function switchCoins(obj, money) {
    $(".bh_recharge_box a").removeClass('active');
    $(obj).addClass('active');
    $("#coinmoney").val(money);
}
function switchVip(obj, money) {
    $(".bh_recharge_vip_box a").removeClass('active');
    $(obj).addClass('active');
    $("#vipmoney").val(money);
}
// 显示选择支付方式(书币)
function show_choice_pay(){
    $(".choice_pay_box").show();
    hide_recharge_box();
}
// 隐藏选择支付方式(书币)
function hide_choice_pay(){
    $(".choice_pay_box").hide();
}
// 优惠卷显示选择支付方式(书币)
function show_coupon_choice_pay(){
    $("#pay_typeproid").val(4);
    $(".choice_pay_box").show();
    hide_recharge_box();
}

// 解锁短篇小说全本（现金）
function show_shore_book_cash(){
    $("#pay_typeproid").val(5);
    $(".choice_pay_box").show();
    hide_recharge_box();
}


var bid = 0;
var paytitle = '打赏';
var payfee = 0
// 支付宝支付
var payzfb_url = "/Wapay/wap_alipay";
function apiPay_zfb_fun(pro_id){
	if(!pro_id){
		var pro_id = $('#pay_typeproid').val();
		if(parseInt(pro_id) < 1){
			pro_id = 2;
		}
	}
    // pro_id  1购买VIP  2购买书币  3打赏
    if(pro_id == 1){
        paytitle = '购买VIP';
        payfee = $("#vipmoney").val();
    }
    if(pro_id == 2){
        paytitle = '购买书币';
        payfee = $("#coinmoney").val();
    }
    if(pro_id == 3){
        paytitle = '打赏';
        payfee = $("#dasmoney").val();
    }
	if(pro_id == 4){
        paytitle = '优惠券';
        payfee = $("#coupinmoney").val();
    }
	if(pro_id == 5){
        paytitle = '整本购买';
        payfee = $("#shorebookpay").val();
    }
    payfee = parseFloat(payfee)+0;
    if(payfee < 0.01 || isNaN(payfee)){
        bh_msg_tips(paytitle+'金额不能小于0.01元');
        return false;
    }
    window.location.href = payzfb_url +'?fee='+payfee+'&product_id='+pro_id+'&product_name='+paytitle+'&bid='+bid+'&callback='+encodeURI(window.location.href);
}

// 微信支付
var paywx_url = "/WxTongyiHref/pay";
function apiPay_wx_fun(pro_id){
    // pro_id  1购买VIP  2购买书币  3打赏
    if(pro_id == 1){
        paytitle = '购买VIP';
        payfee = $("#vipmoney").val();
    }
    if(pro_id == 2){
        paytitle = '购买书币';
        payfee = $("#coinmoney").val();
    }
    if(pro_id == 3){
        paytitle = '打赏';
        payfee = $("#dasmoney").val();
    }
	if(pro_id == 4){
        paytitle = '优惠券';
        payfee = $("#coupinmoney").val();
    }
	if(pro_id == 5){
        paytitle = '整本购买';
        payfee = $("#shorebookpay").val();
    }
    payfee = parseFloat(payfee)+0;
    if(payfee < 0.01 || isNaN(payfee)){
        bh_msg_tips(paytitle+'金额不能小于0.01元');
        return false;
    }
    window.location.href = paywx_url +'?fee='+payfee+'&product_id='+pro_id+'&product_name='+paytitle+'&bid='+bid+'&callback='+encodeURI(window.location.href);
}


// 主域名下单独使用微信支付
var paywx_zhuurl = "http://w.qirexiaoshuo.com/WxTongyi/pay";
function apiPay_wx_zhufun(pro_id){
    // pro_id  1购买VIP  2购买书币  3打赏
    if(pro_id == 1){
        paytitle = '购买VIP';
        payfee = $("#vipmoney").val();
    }
    if(pro_id == 2){
        paytitle = '购买书币';
        payfee = $("#coinmoney").val();
    }
    if(pro_id == 3){
        paytitle = '打赏';
        payfee = $("#dasmoney").val();
    }
	if(pro_id == 4){
        paytitle = '优惠券';
        payfee = $("#coupinmoney").val();
    }
	if(pro_id == 5){
        paytitle = '整本购买';
        payfee = $("#shorebookpay").val();
    }
    payfee = parseFloat(payfee)+0;
    if(payfee < 0.01 || isNaN(payfee)){
        bh_msg_tips(paytitle+'金额不能小于0.01元');
        return false;
    }
    window.location.href = paywx_zhuurl +'?fee='+payfee+'&product_id='+pro_id+'&product_name='+paytitle+'&bid='+bid+'&callback='+encodeURI(window.location.href);
}

// 显示打赏
function bh_show_das_fun(){
    $("#dasmoney").val(1.88);
    $('.bh_dashang').show();
    $("#bh_dashang_box li ").eq(0).find("a").addClass("active");
    $("body").css({"overflow":"hidden"});
    window.scrollTo(0,0);
}
// 隐藏打赏
function bh_hide_das_fun(){
    $('.bh_dashang').hide();
    $("body").css({"overflow":"auto"});
    window.scrollTo(0,0);
}

// 选择打赏金额
$(function(){
    $('#bh_dashang_box li a').click(function(){
        $('#bh_dashang_box li a').removeClass("active");
        $(this).addClass("active");
        $("#dasmoney").val($(this).attr('get_money'));
    });
    // 输入打赏
    $("#dasmoney").click(function () {
        $('#bh_dashang_box li a').removeClass("active");
        $("#dasmoney").val("");
    });
})

// 显示vip到期时间
function showVipLayer(){
    $(".bh_vip_daoqi").show();
}
// 隐藏vip到期时间
function hideVipLayer(){
    $(".bh_vip_daoqi").hide();
}
// 显示购买vip浮层
function show_pay_vip(){
    if(parseInt(uid)*1 > 0){
        $(".bh_vip_pay").show();
    }else{
        show_login(); //显示登陆
    }
}
// 隐藏购买vip浮层
function hide_pay_vip(){
    $(".bh_vip_pay").hide();
}
// 显示选择支付方式(vip)
function show_vip_choice_pay(){
    $(".vip_choice_pay_box").show();
    hide_pay_vip();
}
// 隐藏选择支付方式(vip)
function hide_vip_choice_pay(){
    $(".vip_choice_pay_box").hide();
}