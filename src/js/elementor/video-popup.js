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
