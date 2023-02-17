<?php
/**
 * Enqueue scripts and styles.
 */
function travelcations_scripts() {

	
	wp_enqueue_style(
		'travelcations-style',
		get_stylesheet_uri(),
		array(),
		TRAVELCATIONS_VER
	);
	wp_enqueue_style(
		'templateupdateCss',
		TRAVELCATIONS_URI . 'assets/css/templateupdateCss.css',
		array(),
		TRAVELCATIONS_VER
	);
	wp_enqueue_style(
		'swiper',
		TRAVELCATIONS_URI . 'assets/css/swiper.min.css',
		array(),
		TRAVELCATIONS_VER
	);

	wp_enqueue_script(
		'travelcations-custom-js',
		TRAVELCATIONS_URI . 'assets/js/custom' . travelcations_suffix() . '.js',
		array( 'jquery' ),
		TRAVELCATIONS_VER,
		true
	);

	wp_enqueue_script(
		'travelcations-navigation',
		TRAVELCATIONS_URI . 'assets/js/navigation' . travelcations_suffix() . '.js',
		array( 'jquery' ),
		TRAVELCATIONS_VER,
		true
	);

	// SLICK LIBRARY
	wp_enqueue_script(
		'slick',
		TRAVELCATIONS_URI . 'assets/js/slick.min.js',
		array( 'jquery' ),
		TRAVELCATIONS_VER,
		true
	);

	wp_enqueue_script(
		'skip-link-focus-fix',
		TRAVELCATIONS_URI . 'assets/js/skip-link-focus-fix' . travelcations_suffix() . '.js',
		array( 'jquery' ),
		TRAVELCATIONS_VER,
		true
	);

	// html5lightbox Library
	wp_register_script(
		'html5lightboxjs',
		TRAVELCATIONS_URI . 'assets/js/html5lightbox/html5lightbox.js',
		array( 'jquery' ),
		TRAVELCATIONS_VER,
		true
	);

	// Swiper Library
	wp_register_script(
		'swiper',
		TRAVELCATIONS_URI . 'assets/js/swiper.min.js',
		array( 'jquery' ),
		TRAVELCATIONS_VER,
		true
	);

	wp_enqueue_script( 'comment-reply' );

}
add_action( 'wp_enqueue_scripts', 'travelcations_scripts' );


function travelcations_scripts_in_preview_mode() {

	wp_enqueue_script(
		'travelcation-elementor-preview',
		TRAVELCATIONS_URI . 'assets/js/elementor/preview' . travelcations_suffix() . '.js',
		array(
			'jquery',
			'masonry',
		),
		TRAVELCATIONS_VER,
		true
	);
}

add_action( 'elementor/preview/enqueue_scripts', 'travelcations_scripts_in_preview_mode' );
