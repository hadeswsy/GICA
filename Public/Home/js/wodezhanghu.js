// JavaScript Document
$(function(){
	//alert($('.zh_cont_out .zh_cont .zh_cont_l ul li').length);
	$('.zh_cont_out .zh_cont .zh_cont_l ul li').each(function(index,element){
		$(element).click(function(){
			//alert(1);
			$(element).addClass('current').siblings().removeClass('current');;
			$('.zh_cont_out .zh_cont .zh_cont_r .tab').eq($(element).index()).show().siblings().hide();
		
		});	
	})	
})































