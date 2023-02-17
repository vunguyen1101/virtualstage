<?php

/**
 * Preload Effect
 *
 * @package Travelcations
 */

Travelcations_Kirki::add_section(
	'travelcations_general',
	array(
		'title' => esc_html__( 'General Settings', 'travelcations' ),
		'panel' => 'travelcations_panel',
	)
);


/**
 * Color Page Header
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'color',
		'settings'  => 'travelcations_page_header_color',
		'label'     => esc_html__( 'Page Header Color', 'travelcations' ),
		'section'   => 'travelcations_general',
		'default'   => '#000000',
		'transport' => 'auto',
		'output'    => array(
			// Start color property
			array(
				'property' => 'color',
				'element'  => array(
					'.page-header .page-title',
				),
			), // End color property
		),
	)
);

/**
 * Top Bar
 */

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'switch',
		'settings' => 'topbar',
		'label'    => esc_html__( 'Topbar', 'travelcations' ),
		'section'  => 'travelcations_general',
		'default'  => '0',
		'priority' => 10,
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'travelcations' ),
			'off' => esc_html__( 'Disable', 'travelcations' ),
		),
	)
);

/**
 * Widget Gui
 */

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'switch',
		'settings' => 'widget_gui',
		'label'    => esc_html__( 'Widget Gui', 'travelcations' ),
		'section'  => 'travelcations_general',
		'default'  => '0',
		'priority' => 10,
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'travelcations' ),
			'off' => esc_html__( 'Disable', 'travelcations' ),
		),
	)
);

/**
 * Sticky menu
 */

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'switch',
		'settings' => 'stickymenu',
		'label'    => esc_html__( 'Sticky Menu', 'travelcations' ),
		'section'  => 'travelcations_general',
		'default'  => '0',
		'priority' => 10,
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'travelcations' ),
			'off' => esc_html__( 'Disable', 'travelcations' ),
		),
	)
);


// Setting Search Header
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'select',
		'settings'    => 'travelcations_header_seach',
		'label'       => esc_html__( 'Search Header For: ', 'travelcations' ),
		'description' => esc_html__( 'Please Select Post Type', 'travelcations' ),
		'section'     => 'travelcations_general',
		'default'     => 'post',
		'choices'     => array(
			'post' => esc_html__( 'Post', 'travelcations' ),
			'tour' => esc_html__( 'Tour', 'travelcations' ),
		),
		'transport'   => 'auto',
	)
);

/**
 * Pre Load
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'switch',
		'settings' => 'preload',
		'label'    => esc_html__( 'Preload Effect', 'travelcations' ),
		'section'  => 'travelcations_general',
		'default'  => '1',
		'priority' => 10,
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'travelcations' ),
			'off' => esc_html__( 'Disable', 'travelcations' ),
		),
	)
);


/**
 * 404 Page
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'textarea',
		'settings'    => 'travelcations_page_404_text',
		'label'       => esc_html__( 'Page 404 Text', 'travelcations' ),
		'description' => esc_html__( 'Replace the default page 404 text by entering your own.', 'travelcations' ),
		'section'     => 'travelcations_general',
		'default'     => '',
		'transport'   => 'auto',
	)
);


/**
 * Set Logo Single Post
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'image',
		'settings' => 'logo_single',
		'label'    => esc_html__( 'Logo Single Post', 'travelcations' ),
		'section'  => 'title_tagline',
		'priority' => 8,
		'default'  => '',
	)
);


/**
 * Set Logo Single Post
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'image',
		'settings' => 'logo_template',
		'label'    => esc_html__( 'Logo Template Page Header Sidebar', 'travelcations' ),
		'section'  => 'title_tagline',
		'priority' => 8,
		'default'  => '',
	)
);