<?php
/**
 * travelcations functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Travelcations
 */

define( 'TRAVELCATIONS_VER', wp_get_theme()->get( 'Version' ) );
define( 'TRAVELCATIONS_DIR', get_template_directory() . '/' );
define( 'TRAVELCATIONS_URI', get_template_directory_uri() . '/' );


/**
 * Setup theme default and add theme support
 */
require TRAVELCATIONS_DIR . 'inc/init.php';

/**
 * Custom template tags for this theme.
 */
require TRAVELCATIONS_DIR . 'inc/class-breadcrumb.php';

/**
 * Custom template tags for this theme.
 */
require TRAVELCATIONS_DIR . 'inc/template-functions.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require TRAVELCATIONS_DIR . 'inc/template-hook.php';

/**
 * Customizer additions.
 */
require TRAVELCATIONS_DIR . 'inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require TRAVELCATIONS_DIR . 'inc/jetpack.php';
}

/**
 * Load TGMPA.
 */
require TRAVELCATIONS_DIR . 'inc/tgmpa/plugins.php';


/**
 * Load Elementor compatibility file.
 */
if ( travelcations_is_elementor() ) {
	require TRAVELCATIONS_DIR . 'inc/class-elementor.php';
}

/**
 * Load style end script .
 */
require TRAVELCATIONS_DIR . 'inc/static.php';
