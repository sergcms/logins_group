$(document).ready(function(){
	// scroll-to
	$("#arrow-down").on("click", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1000);
	});

	// header-slider
	$('.tdlogins').mouseenter(function () {
		$('ul.circle-center li').removeClass('show').removeAttr('style');
		$('.tdlogins-logo').fadeIn( 10, function () {
			$('.tdlogins-logo').addClass('show');
		});
	});

	$('.loginssmak').mouseenter(function () {
		$('ul.circle-center li').removeClass('show').removeAttr('style');
		$('.loginssmak-logo').fadeIn( 10, function () {
			$('.loginssmak-logo').addClass('show');
		});
	});

	$('.stores').mouseenter(function () {
		$('ul.circle-center li').removeClass('show').removeAttr('style');
		$('.shops-logo').fadeIn( 10, function () {
			$('.shops-logo').addClass('show');
		});
	});

	$('.lukasik').mouseenter(function () {
		$('ul.circle-center li').removeClass('show').removeAttr('style');
		$('.lukasik-logo').fadeIn( 10, function () {
			$('.lukasik-logo').addClass('show');
		});
	});

});