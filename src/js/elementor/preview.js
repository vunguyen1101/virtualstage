<<<<<<< HEAD
'use strict';

var onElementorLoaded = function onElementorLoaded( callback ) {
	if ( undefined === window.elementorFrontend || undefined === window.elementorFrontend.hooks ) {
		setTimeout( 
			function () {
				return onElementorLoaded( callback );
			}
		);

		return;
	}

	callback();
};

jQuery( document ).ready(
	function ( $ ) {

		function masonryBlog() {
			var layout = $( '.widget-blog-wrapper' );
			layout.each(
				function (index) {
					var item = $( this );
					if ( item.hasClass( 'blog-masonry' ) ) {
						var list = item.find( '.list-post' );
						var $grid  = list.masonry(
							{
								// options
								itemSelector: '.boostify-grid-item',
								columnWidth: '.boostify-grid-item'
							}
						);
					}
				}
			);
		}

		onElementorLoaded(
			function () {
				elementorFrontend.hooks.addAction(
					'frontend/element_ready/global',
					function () {
						masonryBlog();
					}
				);
			}
		);
	}
);
=======
'use strict';

var onElementorLoaded = function onElementorLoaded( callback ) {
	if ( undefined === window.elementorFrontend || undefined === window.elementorFrontend.hooks ) {
		setTimeout( 
			function () {
				return onElementorLoaded( callback );
			}
		);

		return;
	}

	callback();
};

jQuery( document ).ready(
	function ( $ ) {

		function masonryBlog() {
			var layout = $( '.widget-blog-wrapper' );
			layout.each(
				function (index) {
					var item = $( this );
					if ( item.hasClass( 'blog-masonry' ) ) {
						var list = item.find( '.list-post' );
						var $grid  = list.masonry(
							{
								// options
								itemSelector: '.boostify-grid-item',
								columnWidth: '.boostify-grid-item'
							}
						);
					}
				}
			);
		}

		onElementorLoaded(
			function () {
				elementorFrontend.hooks.addAction(
					'frontend/element_ready/global',
					function () {
						masonryBlog();
					}
				);
			}
		);
	}
);
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
