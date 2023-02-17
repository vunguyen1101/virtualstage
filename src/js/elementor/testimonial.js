<<<<<<< HEAD
(function ($) {
	'use strict';

	/**
	 * @param $scope The widget wrapper element as a jQuery element
	 * @param $ The jQuery alias
	 */
	var WidgetTestimonial = function ($scope, $) {
		var test   = $scope.find( '.widget-testimonial--wrapper' );
		var swiper = new Swiper(
			test,
			{
				slidesPerView: 1,
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				autoplay: {
					delay: 5000,
					disableOnInteraction: false,
				},
				loop: true,
				loopFillGroupWithBlank: true,
				speed: 1000
			}
		);

	};

	$( window ).on(
		'elementor/frontend/init',
		function () {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/boostify-tour-testimonial.default',
				WidgetTestimonial
			);
		}
	);
} )( jQuery );
=======
(function ($) {
	'use strict';

	/**
	 * @param $scope The widget wrapper element as a jQuery element
	 * @param $ The jQuery alias
	 */
	var WidgetTestimonial = function ($scope, $) {
		var test   = $scope.find( '.widget-testimonial--wrapper' );
		var swiper = new Swiper(
			test,
			{
				slidesPerView: 1,
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				autoplay: {
					delay: 5000,
					disableOnInteraction: false,
				},
				loop: true,
				loopFillGroupWithBlank: true,
				speed: 1000
			}
		);

	};

	$( window ).on(
		'elementor/frontend/init',
		function () {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/boostify-tour-testimonial.default',
				WidgetTestimonial
			);
		}
	);
} )( jQuery );
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
