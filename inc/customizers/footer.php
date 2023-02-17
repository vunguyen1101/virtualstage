<?php
/**
 * Footer Customizer
 *
 * @package Travelcations
 */

Travelcations_Kirki::add_section(
	'travelcations_footer_section',
	array(
		'title' => esc_html__( 'Footer', 'travelcations' ),
		'panel' => 'travelcations_panel',
	)
);

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'textarea',
		'settings'    => 'travelcations_footer_copyright',
		'label'       => esc_html__( 'Footer Copyright', 'travelcations' ),
		'description' => esc_html__( 'Replace the default footer copyright by entering your own.', 'travelcations' ),
		'section'     => 'travelcations_footer_section',
		'default'     => '',
		'transport'   => 'postMessage',
	)
);

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'editor',
		'settings'  => 'footer_nav',
		'label'     => esc_html__( 'Footer Navigation', 'travelcations' ),
		'section'   => 'travelcations_footer_section',
		'default'   => '',
		'transport' => 'postMessage',
	)
);

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'switch',
		'settings' => 'scroll_top',
		'label'    => esc_html__( 'Button Back to Top', 'travelcations' ),
		'section'  => 'travelcations_footer_section',
		'default'  => '1',
		'priority' => 10,
		'choices'  => [
			'on'  => esc_html__( 'Enable', 'travelcations' ),
			'off' => esc_html__( 'Disable', 'travelcations' ),
		],
	)
);

/**
 * Background Page Header
 */
Travelcations_Kirki::add_field(
	'travelcations',
	[
		'type'      => 'background',
		'settings'  => 'travelcations_background_footer',
		'label'     => esc_html__( 'Background Footer', 'travelcations' ),
		'transport' => 'refresh',
		'section'   => 'travelcations_footer_section',
		'default'   => [
			'background-color'      => '#1a1a1a',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'output'    => [
			[
				'element' => '.site-footer .site-info',
			],
		],
	]
);


/**
 * Background Color Copy right
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'color',
		'settings'  => 'travelcations_copy_right_color',
		'label'     => esc_html__( 'Copy Right Color', 'travelcations' ),
		'section'   => 'travelcations_colors_section',
		'default'   => '#9e9e9e',
		'transport' => 'auto',
		'output'    => array(
			// Start color property
			array(
				'property' => 'color',
				'element'  => array(
					'.site-copyright',
					'.footer-menu li a',
				),
			), // End color property
		),
	)
);


/**
 * Background Page Header
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'background',
		'settings'  => 'travelcations_background_footer',
		'label'     => esc_html__( 'Background Footer', 'travelcations' ),
		'section'   => 'travelcations_footer_section',
		'default'   => array(
			'background-color'      => '#1a1a1a',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		),
		'transport' => 'refresh',
		'output'    => array(
			array(
				'element' => '.site-footer .site-info',
			),
		),
	)
);
