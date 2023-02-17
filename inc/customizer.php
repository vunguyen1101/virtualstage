<?php
/**
 * Travelcations Theme Customizer
 *
 * @package Travelcations
 */

/**
 * Add additional Customizer options with Kirki.
 */
require get_template_directory() . '/inc/class-kirki.php';

/**
 * Create theme customizer configuration.
 */
Travelcations_Kirki::add_config(
	'travelcations',
	array(
		'capability'  => 'edit_theme_options',
		'option_type' => 'theme_mod',
	)
);

/**
 * Create theme customizer panel.
 */
Travelcations_Kirki::add_panel(
	'travelcations_panel',
	array(
		'priority' => 3,
		'title'    => esc_html__( 'Travelcations', 'travelcations' ),
	)
);


/**
 * Include theme customizer sections.
 */

$files = glob( TRAVELCATIONS_DIR . 'inc/customizers/*.php' );

foreach ( $files as $file ) {
	if ( file_exists( $file ) ) {
		require $file;
	}
}


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function travelcations_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => function() {
					bloginfo( 'name' );
				},
			)
		);

		$wp_customize->selective_refresh->add_partial(
			'travelcations_footer_copyright',
			array(
				'selector'        => '.site-copyright',
				'render_callback' => function() {
					get_template_part( 'template-parts/footer/footer', 'copyright' );
				},
			)
		);

		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => function() {
					bloginfo( 'description' );
				},
			)
		);
	}
}
add_action( 'customize_register', 'travelcations_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function travelcations_customize_preview_js() {
	wp_enqueue_script(
		'travelcations-customizer',
		TRAVELCATIONS_URI . 'assets/js/customizer.js',
		array( 'customize-preview' ),
		TRAVELCATIONS_VER,
		true
	);
}
add_action( 'customize_preview_init', 'travelcations_customize_preview_js' );
