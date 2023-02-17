<?php
/**
 * Layout Customizer
 *
 * @package Travelcations
 */

Travelcations_Kirki::add_section(
	'travelcations_layout_section',
	array(
		'title' => esc_html__( 'Layout', 'travelcations' ),
		'panel' => 'travelcations_panel',
	)
);

Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'     => 'radio-image',
		'settings' => 'travelcations_default_layout',
		'label'    => esc_html__( 'Blog Layout', 'travelcations' ),
		'section'  => 'travelcations_layout_section',
		'default'  => 'right-sidebar',
		'choices'  => array(
			'left-sidebar'  => get_template_directory_uri() . '/assets/images/sidebar/left-sidebar.png',
			'no-sidebar'    => get_template_directory_uri() . '/assets/images/sidebar/no-sidebar.png',
			'right-sidebar' => get_template_directory_uri() . '/assets/images/sidebar/right-sidebar.png',
		),
	)
);
