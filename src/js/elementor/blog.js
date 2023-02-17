( function ( $ ) {
	'use strict';

	/**
	 * @param $scope The widget wrapper element as a jQuery element
	 * @param $ The jQuery alias
	 */
	var WidgetBlog = function ($scope, $) {
		var button       = $scope.find( '.btn-load-more' );
		var widget       = $scope.find( '.list-post' );
		var column       = widget.data( 'column' );
		var columnTablet = widget.data( 'column-tablet' );
		var columnMobile = widget.data( 'column-mobile' );
		var totalPage    = parseInt( widget.data( 'total-page' ) );
		var order        = widget.data( 'order' );
		var orderBy      = widget.data( 'order-by' );
		var postsPerPage = parseInt( widget.data( 'offset' ) );
		var offset       = postsPerPage;
		var page         = 1;
		var layout       = $scope.find( '.widget-blog-wrapper' );
		button.on(
			'click',
			function(e) {
				e.preventDefault();
				var btn  = $( this );
				var data = {
					action: 'travelcations_load_more',
					_ajax_nonce: admin.nonce,
					total_page: totalPage,
					order: order,
					orderby: orderBy,
					offset: offset,
					posts_per_page: postsPerPage
				};
				$.ajax(
					{
						type: 'POST',
						url: admin.url,
						data: data,
						beforeSend: function (response) {
							btn.addClass( 'loading' );
						},
						success: function (response) {
							btn.removeClass( 'loading' );
							if ( response ) {
								widget.append( response );
								page++;
								offset = offset + postsPerPage;
								if ( page == totalPage ) {
									btn.remove();
								}
							} else {
								btn.remove();
							}
						},
					}
				);
			}
		);

		if ( layout.hasClass( 'blog-masonry' ) ) {
			$(window).on( 'load', function () {
				var $grid = widget.masonry(
					{
						// options
						itemSelector: '.boostify-grid-item',
						columnWidth: '.boostify-grid-item'
					}
				);
			} );

		}
	};

	$( window ).on(
		'elementor/frontend/init',
		function () {
			elementorFrontend.hooks.addAction(
				'frontend/element_ready/boostify-tour-blog.default',
				WidgetBlog
			);
		}
	);
} )( jQuery );
