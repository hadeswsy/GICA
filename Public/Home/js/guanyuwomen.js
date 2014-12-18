// JavaScript Document


//---------关于我们
$(function(){
	$('.about_cont_out .about_cont .about_cont_l ul li').each(function(index,element){
		$(element).click(function(){
			$(element).addClass('about_cont_l_cur').siblings().removeClass('about_cont_l_cur');
			$('.about_cont_out .about_cont .about_cont_r .about_tab').eq($(element).index()).show().siblings().hide();
		});
	})
		
})








































