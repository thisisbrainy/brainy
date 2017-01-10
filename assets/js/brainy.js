/* DOM Ready stuff */
$(function() {

	$('.header-search a').on('click', function() {

		if($('.header-search form').hasClass('hidden')) {

			$('.header-search form').removeClass('hidden');

		} else {

			$('.header-search form').submit();

		}

	});

});
