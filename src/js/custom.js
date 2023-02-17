<<<<<<< HEAD
( function( $ ) {
	'use strict';
	var headerSite   = $( '.site-header--main' );
	var headerHeight = headerSite.height();
	$( '.site-page-header' ).css( 'padding-top', headerHeight + 'px' );
	$( window ).resize(
		function() {
			var headerHeight = headerSite.height();
			$( '.site-page-header' ).css( 'padding-top', headerHeight + 'px' );
		}
	);
	/**
	 * Top search form functions.
	 */
	var searchContainer = $( '.site-search' );

	$( document ).on(
		'click',
		'.site-search-toggle .js-search',
		function () {
			$( '#content-action-search' ).addClass( 'search-show' );
		}
	);

	$( '.site-search-close' ).on(
		'click',
		function () {
			$( '#content-action-search' ).removeClass( 'search-show' );
		}
	);

	/* SCROLL TOP */
	$( window ).scroll(
		function() {
			if ( $( window ).scrollTop() > 100 ) {
				$( '.btn-back-to-top' ).removeClass( 'btn-hidden' );
				$( '.btn-back-to-top' ).addClass( 'btn-show' );
			} else {
				$( '.btn-back-to-top' ).removeClass( 'btn-show' );
				$( '.btn-back-to-top' ).addClass( 'btn-hidden' );
			}
		}
	);

	$( '.btn-back-to-top' ).on(
		'click',
		function() {
			$( 'html, body' ).animate( { scrollTop: 0 }, 500 );
		}
	);

	$( document ).on(
		'click',
		'.off-canvas-container ul >.menu-item-has-children>a',
		function (e) {
			e.preventDefault();
			var item   = $( this ).siblings( 'ul.sub-menu' );
			var active = item.hasClass( 'active' );
			if ( active ) {
				item.removeClass( 'active' );
				item.slideUp( 200 );
			} else {
				item.addClass( 'active' );
				item.slideDown( 200 );
			}
		}
	);

	/* STICKY MENU */
	var header = $( '#masthead' );
	if ( header.length > 0 ) {
		var top         = header.offset().top;
		var headerHight = header.height();
		$( window ).scroll(
			function() {
				if ( $( window ).scrollTop() > ( top + headerHight ) ) {
					$( '#sticky-menu' ).addClass( 'show-sticky' );
				} else {
					$( '#sticky-menu' ).removeClass( 'show-sticky' );
				}
			}
		);
	};

	/* Loader */
	$( window ).load(
		function() {
			$( ".loader_boostify" ).fadeOut( "slow" );
			$( "#overlayer" ).fadeOut( "slow" );
		}
	);

	$( document ).on(
		'click',
		'.btn-show-widget-gui',
		function(e) {
			$( 'body' ).addClass( 'show-widget-gui' );
			$( "#overlayer" ).css( 'display', 'block' );
		}
	);

	$( '#overlayer' ).on(
		'click',
		function(e) {
			closeGui();
		}
	);

	// Close Search form when hit `ESC` button
	$( document ).on(
		'keyup',
		function(e) {
			if ( e.keyCode === 27 ) {
				closeGui();
			}
		}
	);

	function closeGui() {
		$( 'body' ).removeClass( 'show-widget-gui' );
		$( "#overlayer" ).css( 'display', 'none' );
	}


} )( jQuery );
=======
( function( $ ) {
	'use strict';
	var headerSite   = $( '.site-header--main' );
	var headerHeight = headerSite.height();
	$( '.site-page-header' ).css( 'padding-top', headerHeight + 'px' );
	$( window ).resize(
		function() {
			var headerHeight = headerSite.height();
			$( '.site-page-header' ).css( 'padding-top', headerHeight + 'px' );
		}
	);
	/**
	 * Top search form functions.
	 */
	var searchContainer = $( '.site-search' );

	$( document ).on(
		'click',
		'.site-search-toggle .js-search',
		function () {
			$( '#content-action-search' ).addClass( 'search-show' );
		}
	);

	$( '.site-search-close' ).on(
		'click',
		function () {
			$( '#content-action-search' ).removeClass( 'search-show' );
		}
	);

	/* SCROLL TOP */
	$( window ).scroll(
		function() {
			if ( $( window ).scrollTop() > 100 ) {
				$( '.btn-back-to-top' ).removeClass( 'btn-hidden' );
				$( '.btn-back-to-top' ).addClass( 'btn-show' );
			} else {
				$( '.btn-back-to-top' ).removeClass( 'btn-show' );
				$( '.btn-back-to-top' ).addClass( 'btn-hidden' );
			}
		}
	);

	$( '.btn-back-to-top' ).on(
		'click',
		function() {
			$( 'html, body' ).animate( { scrollTop: 0 }, 500 );
		}
	);

	$( document ).on(
		'click',
		'.off-canvas-container ul >.menu-item-has-children>a',
		function (e) {
			e.preventDefault();
			var item   = $( this ).siblings( 'ul.sub-menu' );
			var active = item.hasClass( 'active' );
			if ( active ) {
				item.removeClass( 'active' );
				item.slideUp( 200 );
			} else {
				item.addClass( 'active' );
				item.slideDown( 200 );
			}
		}
	);

	/* STICKY MENU */
	var header = $( '#masthead' );
	if ( header.length > 0 ) {
		var top         = header.offset().top;
		var headerHight = header.height();
		$( window ).scroll(
			function() {
				if ( $( window ).scrollTop() > ( top + headerHight ) ) {
					$( '#sticky-menu' ).addClass( 'show-sticky' );
				} else {
					$( '#sticky-menu' ).removeClass( 'show-sticky' );
				}
			}
		);
	};

	/* Loader */
	$( window ).load(
		function() {
			$( ".loader_boostify" ).fadeOut( "slow" );
			$( "#overlayer" ).fadeOut( "slow" );
		}
	);

	$( document ).on(
		'click',
		'.btn-show-widget-gui',
		function(e) {
			$( 'body' ).addClass( 'show-widget-gui' );
			$( "#overlayer" ).css( 'display', 'block' );
		}
	);

	$( '#overlayer' ).on(
		'click',
		function(e) {
			closeGui();
		}
	);

	// Close Search form when hit `ESC` button
	$( document ).on(
		'keyup',
		function(e) {
			if ( e.keyCode === 27 ) {
				closeGui();
			}
		}
	);

	function closeGui() {
		$( 'body' ).removeClass( 'show-widget-gui' );
		$( "#overlayer" ).css( 'display', 'none' );
	}


} )( jQuery );
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
