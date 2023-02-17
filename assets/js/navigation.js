/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
'use strict';

/**
 * Off-canvas menu
 */
(function ($) {
	'use strict';
	var offCanvasToggle   = $( '.menu-toggle-container' );
	var offCanvas         = $( '.js-canvas' );
	var closeOffCanvasBtn = $( '.close-canvas' );
	var main              = $( '#site-navigation' );
	var sub               = main.find( '.sub-menu' );
	sub.each(
		function (index) {
			$( this ).wrap( '<div class="boostify-menu-child">' );
		}
	);

	var toggleOffCanvas = function (e) {
		offCanvas.attr( 'tabindex', '0' );
		e.preventDefault();

		var _this = $( e.currentTarget );

		offCanvas.toggleClass( 'is-opened' );
		offCanvas.attr( 'aria-hidden', ! offCanvas.hasClass( 'is-opened' ) );
		_this.attr( 'aria-expanded', offCanvas.hasClass( 'is-opened' ) );
		$( 'body' ).addClass( 'canvas-open' );
		$( '#overlayer' ).css( 'display', 'block' );
	};

	var closeOffCanvas = function () {
		$( 'body' ).removeClass( 'canvas-open' );
		$( '#overlayer' ).css( 'display', 'none' );
		offCanvas.removeClass( 'is-opened' );
		offCanvasToggle.attr( 'aria-expanded', 'false' );
	};

	// Toggle off-canvas
	offCanvasToggle.on(
		'click',
		toggleOffCanvas
	);

	$( closeOffCanvasBtn ).on(
		'click',
		closeOffCanvas
	);

	$( '#overlayer' ).on(
		'click',
		closeOffCanvas
	);

	// Close off-canvas when hit `ESC` button
	$( document ).on(
		'keyup',
		function (e) {
			if (e.keyCode === 27) {
				closeOffCanvas();
			}
		}
	);

	// For theme Check
	$( '.sub-menu .menu-item-has-children' ).on(
		'hover',
		function () {
			var width   = $( this ).offset().left,
			windowWidth = $( window ).width(),
			range       = windowWidth - width;
			if ( range < 400 ) {
				$( this ).find( '.sub-menu' ).css(
					{
						"left" : 'auto',
						"top": "100%",
						"right": "50%"
					}
				);
				$( this ).find( '.boostify-menu-child' ).css(
					{
						"left" : 'auto',
						"top": "100%",
						"right": "50%"
					}
				);
			}
		}
	);


	$( '.site-search-close' ).on(
		'click',
		function () {
			$( '#content-action-search' ).removeClass( 'search-show' );
		}
	);

	// Close Search form when hit `ESC` button
	$( document ).on(
		'keyup',
		function (e) {
			if (e.keyCode === 27) {
				$( '#content-action-search' ).removeClass( 'search-show' );
			}
		}
	);
} )( jQuery );
