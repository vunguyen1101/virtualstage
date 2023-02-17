<?php
/**
 * Custom Colors Customizer
 *
 * @package Travelcations
 */

Travelcations_Kirki::add_section(
	'travelcations_colors_section',
	array(
		'title' => esc_html__( 'Colors', 'travelcations' ),
	)
);

/**
 * Primary Color
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'color',
		'settings'  => 'travelcations_heading_color',
		'label'     => esc_html__( 'Heading Color', 'travelcations' ),
		'section'   => 'travelcations_colors_section',
		'default'   => '#1c1c1c',
		'transport' => 'auto',
		'output'    => array(
			// Start color property
			array(
				'property' => 'color',
				'element'  => array(
					'h1',
					'h2',
					'h3',
					'h4',
					'h5',
					'h6',
					'input[type="text"]:focus',
					'input[type="email"]:focus',
					'input[type="url"]:focus',
					'input[type="password"]:focus',
					'input[type="search"]:focus',
					'input[type="number"]:focus',
					'input[type="tel"]:focus',
					'input[type="range"]:focus',
					'input[type="date"]:focus',
					'input[type="month"]:focus',
					'input[type="week"]:focus',
					'input[type="time"]:focus',
					'input[type="datetime"]:focus',
					'input[type="datetime-local"]:focus',
					'input[type="color"]:focus',
					'textarea:focus',
					'.top-bar-content',
					'#sticky-menu-wrapper a',
					'.page-title',
					'strong a',
					'.site-header .main-navigation ul a',
					'#sticky-navigation .main-navigation ul a',
					'.navigation-left-menu #vetical-menu-wrapper a',
					'.menu-social-topbar a',
					'.travelcations-recent-post-detail a',
					'.btn-back-to-top',
					//header Single Post.
					'.single-post .header-default',
					'.single-post .header-default a',
					'.single-post .main-navigation .menu>li>a',
					'.single-post .site-search-icon',
					'.single-post .site-page-header .page-title',
					'.ht-comment-list .author-name',
					'.comment-reply-title',
					'.comment-form .label',
					'.canvas-search-form .search-form .btn-search-submit',

				),
			), // End color property

			array(
				'property' => 'background-color',
				'element'  => array(
					'.button',
					'button',
					'input[type="button"]',
					'input[type="reset"]',
					'input[type="submit"]',
				),
			), // End background-color property
		),
	)
);

/**
 * Secondary Color
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'color',
		'settings'  => 'travelcations_secondary_color',
		'label'     => esc_html__( 'Secondary Color', 'travelcations' ),
		'section'   => 'travelcations_colors_section',
		'default'   => '#e6183f',
		'transport' => 'auto',
		'output'    => array(
			// Start color property
			array(
				'property' => 'color',
				'element'  => array(
					'.list-contact .contact .phone-number a',
					'a:hover:before',
					'.comment-metadata a:hover',
					'.footer-menu li>a:hover',
					'.widget_categories a:hover',
					'.widget_categories li:hover',
					'.widget_archive a:hover',
					'.widget_archive li:hover',
					'.widget_meta a:hover',
					'.widget_nav_menu a:hover',
					'.widget_pages a:hover',
					'.widget_recent_comments a:hover',
					'.widget_recent_entries a:hover',
					'.widget_rss a:hover',
					'.travelcations_widget_recent_entries a:hover',
					'.post-navigation .meta-nav:hover',
					'.blog-entry-meta .entry-meta-item a:hover',
					'.posted-on>a:hover',
					'.author>a:hover',
					'.entry-meta-item>a:hover',
					'.tags-links a:hover',
					'.main-navigation ul#sticky-menu-wrapper li.current_page_item>a',
					'.main-navigation ul#sticky-menu-wrapper li:hover>a',
					'.page-links span',
					'ul.menu > li.current_page_item>a',
					'header.site-header .main-navigation ul > li.current-menu-item>a',
					'.more-link',
					'.single-post .main-navigation .menu>li:hover>a',
					'.comment-form .label .required',
					'#cancel-comment-reply-link',
					'.list-category-post-on a:hover',
					'.single footer.entry-footer .tags-links a:hover',
					'.logged-in-as a:hover',
					'.widget_archive ul li:hover',
				),
			), // End color property

			// Start border-color property
			array(
				'property' => 'border-color',
				'element'  => array(
					'blockquote',
					'.wp-block-quote[style="text-align:right"]',
				),
			), // End border-color property


			// Start border-color property
			array(
				'property' => 'border-color',
				'element'  => array(
					'input[type="text"]:focus',
					'input[type="email"]:focus',
					'input[type="url"]:focus',
					'input[type="password"]:focus',
					'input[type="search"]:focus',
					'input[type="number"]:focus',
					'input[type="tel"]:focus',
					'input[type="range"]:focus',
					'input[type="date"]:focus',
					'input[type="month"]:focus',
					'input[type="week"]:focus',
					'input[type="time"]:focus',
					'input[type="datetime"]:focus',
					'input[type="datetime-local"]:focus',
					'input[type="color"]:focus',
					'textarea:focus',

				),
			), // End border-color property
			// Start background-color property
			array(
				'property' => 'background-color',
				'element'  => array(
					'.button',
					'button',
					'input[type="button"]',
					'input[type="reset"]',
					'input[type="submit"]',
					'.header-top',
					'.header-transparent.header-1 ul.menu > li.current_page_item>a',
					'.header-transparent.header-1 ul.menu li:hover>a',
					'.header-transparent.header-4 ul.menu > li.current-menu-item>a',
					'.header-transparent.header-4 ul.menu li:hover>a',
					'.header-transparent.header-3 ul.menu > li.current-menu-item>a',
					'.header-transparent.header-3 ul.menu li:hover>a',
					'.header-transparent.header-2 ul.menu > li.current-menu-item>a',
					'.header-transparent.header-2 ul.menu li:hover>a',
					'.main-navigation ul a:before',
					'.left-navigation ul a:before',
					'.right-navigation ul a:before',
					'.btn-back-to-top',
					'.more-link:after',
					'.navigation .nav-links .current:hover',
					'.navigation .nav-links .page-numbers:hover',
					'.navigation .nav-links .current.page-numbers',
					'.btn-back-home',
					'.search-results .nav-links .nav-previous a',
					'.search-results .nav-links .nav-next a',
				),
			), // End background-color property

			// Start background-color property with media queries
			array(
				'property'    => 'background-color',
				'media_query' => '@media only screen and (min-width: 62em)',
			), // End background-color property with media queries
		),
	)
);

/**
 * Tertiary Color
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'color',
		'settings'  => 'travelcations_primary_color',
		'label'     => esc_html__( 'Primary Color', 'travelcations' ),
		'section'   => 'travelcations_colors_section',
		'default'   => '#787878',
		'transport' => 'auto',
		'output'    => array(
			// Start color property
			array(
				'property' => 'color',
				'element'  => array(
					'body',
					'input[type="text"]',
					'input[type="email"]',
					'input[type="url"]',
					'input[type="password"]',
					'input[type="search"]',
					'input[type="number"]',
					'input[type="tel"]',
					'input[type="range"]',
					'input[type="date"]',
					'input[type="month"]',
					'input[type="week"]',
					'input[type="time"]',
					'input[type="datetime"]',
					'input[type="datetime-local"]',
					'input[type="color"]',
					'textarea',
					'.comment-metadata a',
					'.footer-menu li>a',
					'.navigation .nav-links .page-numbers',
					'.ht-comment-list .ht-link .edit',
					'.comment-reply-link',
					'.logged-in-as a',
				),
			), // End color property

			// Start border-color property
			array(
				'property' => 'border-color',
				'element'  => array(
					'table td',
					'table th',
				),
			), // End border-color property
		),
	)
);

/**
 * Hidden Color
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'color',
		'settings'  => 'travelcations_special_color',
		'label'     => esc_html__( 'Special Color', 'travelcations' ),
		'section'   => 'travelcations_colors_section',
		'default'   => '#9e9e9e',
		'transport' => 'auto',
		'output'    => array(
			array(
				'property' => 'color',
				'element'  => array(
					'.widget_categories a',
					'.widget_categories li',
					'.widget_archive a',
					'.widget_archive li',
					'.widget_meta a',
					'.widget_nav_menu a',
					'.widget_pages a',
					'.widget_recent_comments a',
					'.widget_recent_entries a',
					'.widget_rss a',
					'.travelcations_widget_recent_entries a',
					'.post-navigation .meta-nav',
					'.blog-entry-meta .entry-meta-item a',
					'span.ht-warderlust-recent-post-on',
					'.blog-entry-meta',
					'.posted-on',
					'.posted-on>a',
					'.blog-post-on',
					'.author>a',
					'.entry-meta-item>a',
					'.single footer.entry-footer .tags-links a',
					'ul li.phone-number a',
					'.travelcations-breadcrumb .breadcrumb-item span',
					'figcaption',
					'.wp-block-quote cite',
					'.list-category-post-on a',
					'.widget-guid .widget-description .widget-description-text',
				),
			), // End color property
		),
	)
);

/**
 * Hidden Color
 */
Travelcations_Kirki::add_field(
	'travelcations',
	array(
		'type'      => 'color',
		'settings'  => 'travelcations_header_color',
		'label'     => esc_html__( 'Color', 'travelcations' ),
		'section'   => 'travelcations_colors_section',
		'default'   => '#ffffff',
		'transport' => 'auto',
		'output'    => array(
			array(
				'property' => 'color',
				'element'  => array(
					'.header-default a',
					'.main-navigation .menu>li>a',
					'.boostify-copyright-info',
					'.site-search-icon',
					'.on-search .site-search-close',
					'.header-list-contact a',
					'.boostify-copyright-info',
				),
			), // End color property
		),
	)
);