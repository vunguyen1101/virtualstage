<?php


/**
 * General
 */

// THEME SETUP
add_action( 'after_setup_theme', 'travelcations_setup' );

// Add body class
add_filter( 'body_class', 'travelcations_body_classes' );

// Add Post Class
add_filter( 'post_class', 'travelcations_post_classes', 30, 3 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 */
add_filter( 'widget_tag_cloud_args', 'travelcations_widget_tag_cloud_args' );

// Add Pingback Header
add_action( 'wp_head', 'travelcations_pingback_header' );


add_action( 'wp_head', 'travelcations_pageheader_background' );

add_action( 'wp_enqueue_scripts', 'travelcations_pageheader_background' );

// Contact Form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );

// Add Icon Elementor
add_action( 'elementor/controls/controls_registered', 'travelcations_modify_controls', 10, 1 );

// ADD ICON STYLE IN EDITOR ELEMENTOR MODE
add_action( 'elementor/editor/wp_head', 'travelcations_enqueue_icon' );

// For default header theme
add_action( 'travelcations_header', 'travelcations_site_preload' );
add_action( 'travelcations_header', 'travelcations_site_search' );
add_action( 'boostify_hf_get_header', 'travelcations_site_preload' );
add_action( 'boostify_hf_get_header', 'travelcations_site_search' );

// For default footer theme
add_action( 'travelcations_footer', 'travelcations_scroll_top' );
add_action( 'travelcations_footer', 'travelcations_canvas' );
add_action( 'travelcations_footer', 'travelcations_widget_guide' );
add_action( 'boostify_hf_get_footer', 'travelcations_scroll_top' );
add_action( 'boostify_hf_footer', 'travelcations_canvas' );
add_action( 'boostify_hf_footer', 'travelcations_widget_guide' );

// Ajax Load More Post
add_action( 'wp_ajax_travelcations_load_more', 'travelcations_load_more' );
add_action( 'wp_ajax_nopriv_travelcations_load_more', 'travelcations_load_more' );
