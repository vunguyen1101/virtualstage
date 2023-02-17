<?php
/**
 * Page Header Customizer
 *
 * @package Travelcations
 */

Travelcations_Kirki::add_section(
	'travelcations_page_header',
	array(
		'title' => esc_html__( 'Page Header', 'travelcations' ),
		'panel' => 'travelcations_panel',
	)
);


Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'dimensions',
		'settings'  => 'c_height',
		'label'     => esc_attr__( 'Space', 'travelcations' ),
		'section'   => 'travelcations_page_header',
		'transport' => 'auto',
		'default'   => array(
			'min-height'    => '200px',
			'margin-bottom' => '0px',
		),
		'output'    => array(
			array(
				'element'  => '.page-header',
				'property' => 'min-height',
				'choice'   => 'min-height',
			),
			array(
				'element'  => '.page-header',
				'property' => 'margin-bottom',
				'choice'   => 'margin-bottom',
			),
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
		'settings'  => 'travelcations_background_pageheader',
		'label'     => esc_html__( 'Background Page Header', 'travelcations' ),
		'section'   => 'travelcations_page_header',
		'transport' => 'refresh',
		'default'   => array(
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		),
		'output'    => array(
			array(
				'element' => '.site-page-header',
			),
		),
	)
);

// Add Color Title.
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'color',
		'settings' => 'travelcations_color_page_title',
		'label'    => __( 'Color page title', 'travelcations' ),
		'section'  => 'travelcations_page_header',
		'default'  => '#fff',
		'output'   => array(
			array(
				'property' => 'color',
				'element'  => array(
					'.site-page-header .page-title',
				),
			),
		),
	)
);

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'typography',
		'settings'  => 'travelcations_font_page_title',
		'label'     => esc_html__( 'Page Title Typography', 'travelcations' ),
		'section'   => 'travelcations_page_header',
		'default'   => array(
			'font-family' => 'Playfair Display',
			'variant'     => 'bold',
			'font-size'   => '71.83px',
			'line-height' => '1',
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element' => array(
					'.site-page-header .page-title',
				),
			),
		),
	)
);

// Add Position Title.
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'travelcations_position_page_title',
		'label'     => esc_html__( 'Position page title', 'travelcations' ),
		'section'   => 'travelcations_page_header',
		'default'   => 'center',
		'priority'  => 10,
		'transport' => 'auto',
		'choices'   => array(
			'left'   => esc_html__( 'Left', 'travelcations' ),
			'center' => esc_html__( 'Center', 'travelcations' ),
			'right'  => esc_html__( 'Right', 'travelcations' ),
		),
		'output'    => array(
			array(
				'element'  => '.page-title',
				'property' => 'text-align',
			),
		),
	)
);
