// JavaScript Document

$(function(){
			var num = 0;
			var timer =null;
			var myFn = function()
			{
    			num++;
				if(num > $('ol li').length - 1){ num = 0;}
				$('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');
				$('.banner ul li').eq(num).fadeIn().siblings().hide();
    		}
			timer =setInterval(myFn,2000);
    		$('.banner ol li').mouseover(function(e) {
                $('.banner ul li').eq($(this).index()).fadeIn().siblings().hide();
				$(this).addClass('current').siblings().removeClass('current');
				num = $(this).index();
            });
			$('.banner').mouseover(function(e) {
                clearInterval(timer);
            }).mouseout(function(e) {
				clearInterval(timer);
                timer = setInterval(myFn,2000);
            });;
    	})
