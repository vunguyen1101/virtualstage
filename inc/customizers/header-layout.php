<?php
/**
 * Header Contact Customizer
 *
 * @package Travelcations
 */


Travelcations_Kirki::add_section(
	'travelcations_header_layout1',
	array(
		'title' => esc_html__( 'Header', 'travelcations' ),
		'panel' => 'travelcations_panel',
	)
);


Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'editor',
		'settings'    => 'phone-default',
		'label'       => esc_html__( 'Mobile', 'travelcations' ),
		'description' => esc_html__( 'Enter Mobie.', 'travelcations' ),
		'section'     => 'travelcations_header_layout1',
		'transport'   => 'auto',
	)
);


Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'editor',
		'settings'  => 'header_contact',
		'label'     => esc_html__( 'Contact', 'travelcations' ),
		'section'   => 'travelcations_header_layout1',
		'default'   => '',
		'transport' => 'postMessage',
	)
);
