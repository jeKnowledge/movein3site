$(document).ready(function() {

	/* ########## SLIDER ############## */
	$(function() {
		var newBg = ['wp-content/themes/movein3Theme/img/slider1.jpg',
		'wp-content/themes/movein3Theme/img/slider2.jpg',
		'wp-content/themes/movein3Theme/img/slider3.jpg'];

		var i = -1;

		var rotateBg = setInterval(function() {
			i++;

			if (i == 3) {
				i = 0;
			}

			$('#slider').css({backgroundImage: 'url(' + newBg[i] + ')'});				

		}, 5000);
	});


	/* ######### BARRAS MENUS ########### */

	$(window).scroll(function(){
		if  ($(window).scrollTop() >= 478){
			$('header').css({display:'block'});
		} else {
			$('header').css({display:'none'});
		}
	});


	/* ######## ANIMAÇÕES IMAGENS ############ */

	/*$(window).bind("load resize scroll",function(e) {
		var y = $(window).scrollTop();

		$(".pageCover1").filter(function() {
			return $(this).offset().top < (y + $(window).height()) &&
			$(this).offset().top + $(this).height() > y;
		}).css('background-position', '0px ' + parseInt(-y / 6) + 'px');

		$(".pageCover2").filter(function() {
			return $(this).offset().top < (y + $(window).height()) &&
			$(this).offset().top + $(this).height() > y;
		}).css('background-position', '0px ' + parseInt(-y / 6) + 'px');

		$(".pageCover3").filter(function() {
			return $(this).offset().top < (y + $(window).height()) &&
			$(this).offset().top + $(this).height() > y;
		}).css('background-position', '0px ' + parseInt(-y / 6) + 'px');
	});*/





	/* ######## EFEITO SCROLL ######### */

$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 2000);
				return false;
			}
		}
	});
});

});