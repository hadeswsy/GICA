// JavaScript Document
$(function(){
	$('.bdxq_cont .title li').click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		$('.bdxq_cont .sh .tab').eq($(this).index()).show().siblings().hide();
	});
		
})






































