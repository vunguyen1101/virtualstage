<?php
/**
 * Custom Fonts Customizer
 *
 * @package Travelcations
 */

Travelcations_Kirki::add_section(
	'travelcations_fonts_section',
	array(
		'title' => esc_html__( 'Typography', 'travelcations' ),
	)
);

/**
 * Body Font
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_body',
		'label'       => esc_html__( 'Body', 'travelcations' ),
		'description' => esc_html__( "Main font for the content. Set the font size in 'px' or 'rem'.", 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-family' => 'Poppins',
			'variant'     => 'regular',
			'font-size'   => '16px',
			'line-height' => '1.5',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array(
					'body',
					'button',
					'input',
					'select',
					'optgroup',
					'textarea',
					'.main-navigation',
					'.pagination .nav-links',
					'.list-category-post-on',
					'.more-link',
					'.breadcrumb-item',
					'.single .entry-content h6',
					'.wt-destination-main-content h3',
				),
			),
		),
	)
);

/**
 * Body Font SemiBold
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_special',
		'label'       => esc_html__( 'Body SemiBold', 'travelcations' ),
		'description' => esc_html__( "Main font for the content. Set the font size in 'px' or 'rem'.", 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-family' => 'Poppins',
			'variant'     => '600',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array(
					'.list-category-post-on',
					'.more-link',
					'.breadcrumb-item',
					'.site-header .main-navigation ul a',
					'.single .entry-content h6',
					'.comment-form .label',
					'.comment-form .submit',
					'.title-404',
					'.btn-back-home',
					'.site-header .main-navigation ul a',
					'.blog .list-category-post-on, .search .list-category-post-on, .archive .list-category-post-on',
				),
			),
		),
	)
);

/**
 * Headings Font
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_heading',
		'label'       => esc_html__( 'Headings', 'travelcations' ),
		'description' => esc_html__( "Headings in the content (h1, h2, h3, h4, h5, h6). Set the font size in 'px' or 'rem'.", 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-family' => 'Playfair Display',
			'variant'     => '700',
			'line-height' => '1.5',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => array(
					'h1',
					'h2',
					'h3',
					'h4',
					'h5',
					'h6',
					'.link-more',
					'.tags-links-title',
					'.post-title',
					'.comment-author',
					'.comment-reply',
					'.site-title',
					'.editor-post-title__input',
					'.not-found-button',
					'.search-submit',
					'.comment-reply-title',
				),
			),
		),
	)
);

/**
 * Heading Level 1
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_h1',
		'label'       => esc_html__( 'H1', 'travelcations' ),
		'description' => esc_html__( 'Set the font size.', 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-size' => '30px',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => 'h1',
			),
		),
	)
);

/**
 * Heading Level 2
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_h2',
		'label'       => esc_html__( 'H2', 'travelcations' ),
		'description' => esc_html__( 'Set the font size', 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-size' => '24px',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => 'h2',
			),
		),
	)
);

/**
 * Heading Level 3
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_h3',
		'label'       => esc_html__( 'H3', 'travelcations' ),
		'description' => esc_html__( "Set the font size'.", 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-size' => '20px',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => 'h3',
			),
		),
	)
);

/**
 * Heading Level 4
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_h4',
		'label'       => esc_html__( 'H4', 'travelcations' ),
		'description' => esc_html__( 'Set the font size.', 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-size' => '18px',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => 'h4',
			),
		),
	)
);

/**
 * Heading Level 5
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_h5',
		'label'       => esc_html__( 'H5', 'travelcations' ),
		'description' => esc_html__( 'Set the font size.', 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-size' => '16px',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => 'h5',
			),
		),
	)
);

/**
 * Heading Level 6
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'        => 'typography',
		'settings'    => 'travelcations_font_h6',
		'label'       => esc_html__( 'H6', 'travelcations' ),
		'description' => esc_html__( 'Set the font size.', 'travelcations' ),
		'section'     => 'travelcations_fonts_section',
		'default'     => array(
			'font-size' => '14px',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => 'h6',
			),
		),
	)
);
