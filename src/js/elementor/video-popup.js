<<<<<<< HEAD
( function ( $ ) {
	'use strict';

	/**
	 * @param $scope The widget wrapper element as a jQuery element
	 * @param $ The jQuery alias
	 */
	var WidgetVideoPopup = function ($scope, $) {
		var html5lightbox_options = {
			watermark: "http://html5box.com/images/html5boxlogo.png",
			watermarklink: ""
		};
	};

	$( window ).on(
		'elementor/frontend/init',
		function () {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/boostify-tour-video-popup.default',
				WidgetVideoPopup
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
	var WidgetVideoPopup = function ($scope, $) {
		var html5lightbox_options = {
			watermark: "http://html5box.com/images/html5boxlogo.png",
			watermarklink: ""
		};
	};

	$( window ).on(
		'elementor/frontend/init',
		function () {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/boostify-tour-video-popup.default',
				WidgetVideoPopup
			);
		}
	);
} )( jQuery );
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
