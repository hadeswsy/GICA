// JavaScript Document
$(function(){
	//alert('ok');
	$('.zh_cont_out .zh_cont .zh_cont_r .tab .aqset_tabH li').each(function(index,element){
		//alert(2);
		$(element).click(function(){
			//alert(1);
			$(element).addClass('cur').siblings().removeClass('cur');
			$('.zh_cont_out .zh_cont .zh_cont_r .tab .aqset_tabC_out .aqset_tabC').eq($(element).index()).show().siblings().hide();
		})
	
	})

})



















































