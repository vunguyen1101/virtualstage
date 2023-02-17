<<<<<<< HEAD
( function ( $ ) {
	'use strict';

	/**
	 * @param $scope The widget wrapper element as a jQuery element
	 * @param $ The jQuery alias
	 */
	var WidgetBlogSlider = function ($scope, $) {
		var widget       = $scope.find( '.list-post' );
		var slide = $scope.find( '.widget-blog-slider-wrapper' );
		var column       = parseInt( widget.data( 'column' ) );
		var columnTablet = parseInt( widget.data( 'column-tablet' ) );
		var columnMobile = parseInt( widget.data( 'column-mobile' ) );
		var scroll       = parseInt( widget.data( 'scroll' ) );
		var scrollTablet = parseInt( widget.data( 'scroll-tablet' ) );
		var scrollMobile = parseInt( widget.data( 'scroll-mobile' ) );
		console.log( columnMobile );

		var slider = new Swiper(
			slide,
			{
				slidesPerView: columnMobile,
				slidesPerGroup: scrollMobile,
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
				speed: 1000,
				spaceBetween: 30,
				breakpoints: {
					640: {
						slidesPerView: columnMobile,
						slidesPerGroup: scrollMobile,
					},
					768: {
						slidesPerView: columnTablet,
						slidesPerGroup: scrollTablet,
					},
					1024: {
						slidesPerView: column,
						slidesPerGroup: scroll,
					},
				}
			}
		);

	};

	$( window ).on(
		'elementor/frontend/init',
		function () {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/boostify-tour-blog-slider.default',
				WidgetBlogSlider
			);
		}
	);
} )( jQuery );
=======
( function ( $ ) {
	'use strict';

	/**
	 * @param $scope The widget wrapper element as a jQuery element
	 * @param $ The jQuery alias
	 */
	var WidgetBlogSlider = function ($scope, $) {
		var widget       = $scope.find( '.list-post' );
		var slide = $scope.find( '.widget-blog-slider-wrapper' );
		var column       = parseInt( widget.data( 'column' ) );
		var columnTablet = parseInt( widget.data( 'column-tablet' ) );
		var columnMobile = parseInt( widget.data( 'column-mobile' ) );
		var scroll       = parseInt( widget.data( 'scroll' ) );
		var scrollTablet = parseInt( widget.data( 'scroll-tablet' ) );
		var scrollMobile = parseInt( widget.data( 'scroll-mobile' ) );
		console.log( columnMobile );

		var slider = new Swiper(
			slide,
			{
				slidesPerView: columnMobile,
				slidesPerGroup: scrollMobile,
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
				speed: 1000,
				spaceBetween: 30,
				breakpoints: {
					640: {
						slidesPerView: columnMobile,
						slidesPerGroup: scrollMobile,
					},
					768: {
						slidesPerView: columnTablet,
						slidesPerGroup: scrollTablet,
					},
					1024: {
						slidesPerView: column,
						slidesPerGroup: scroll,
					},
				}
			}
		);

	};

	$( window ).on(
		'elementor/frontend/init',
		function () {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/boostify-tour-blog-slider.default',
				WidgetBlogSlider
			);
		}
	);
} )( jQuery );
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
