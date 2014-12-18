// JavaScript Document

$(function(){
	
	/*----------------------tab------------------------------*/
	$('.xszy_cont_out .xszy_cont .xszy_cont_l li').each(function(index,element)
	{
		$(element).click(function(){
			//alert(1);
			$('.xszy_cont_out .xszy_cont .xszy_cont_r .tab').eq($(this).index()).show().siblings().hide();
		});	
	});
	
	
	/*-------------------------注册与登录----------------------------*/
	/*$('.xszy_cont .xszy_cont_r .tab .xszy_cont_r_zc h4').click(function(){
		$('.xszy_cont .xszy_cont_r .tab .xszy_cont_r_zc ul').toggle();
		$('.xszy_cont .xszy_cont_r .tab .xszy_cont_r_dl ul').hide();
	});
	
	$('.xszy_cont .xszy_cont_r .tab .xszy_cont_r_dl h4').click(function(){
		$('.xszy_cont .xszy_cont_r .tab .xszy_cont_r_dl ul').toggle();
		$('.xszy_cont .xszy_cont_r .tab .xszy_cont_r_zc ul').hide();
	});*/
	
	$('.xszy_cont .xszy_cont_r .tab .xszy_cont_r_cont h4').each(function(index,element){
		$(element).click(function(){
			$(this).next().toggle().parent().siblings().children('ul').hide();
			//$(this).parent().siblings().children('ul').hide();
		})
	})
	
		
})








































