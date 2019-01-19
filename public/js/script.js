$(document).ready(function(){
	// scroll-to
	$("#arrow-down").on("click", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1000);
	});

	// show logo in center circle
	$('.firm-wrapper').mouseenter(function () {

		let logo = '.'+this.classList[0] + '-logo';

		$('ul.circle-center li').removeClass('show').removeAttr('style');

		$(logo).fadeIn( 10, function () {
			$(logo).addClass('show');
		});
	});

});