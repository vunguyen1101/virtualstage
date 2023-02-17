<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Travelcations
 */

/* Check Plugin Boostify Tour Active
***************************************************/
if ( ! function_exists( 'travelcations_check_wt' ) ) {
	function travelcations_check_wt() {
		if ( class_exists( 'Boostify_Tour' ) ) {
			return true;
		} else {
			return false;
		}
	}
}

/* Check Debug Script
***************************************************/
if ( ! function_exists( 'travelcations_suffix' ) ) {
	function travelcations_suffix() {
		$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		return $suffix;
	}
}


/* Add site body class
***************************************************/
function travelcations_body_classes( $classes ) {
	$default_layout = get_theme_mod( 'travelcations_default_layout', 'right-sidebar' );
	$sticky         = get_theme_mod( 'stickymenu', false );

	if ( $sticky ) {
		$classes[] = 'has-sticky';
	}

	if ( is_home() || is_singular( 'post' ) || is_search() || is_archive() ) {
		$classes[] = 'ht-page-default';
	}

	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( is_home() || is_search() || is_archive() ) {
		if ( ! is_active_sidebar( 'blog-sidebar' ) || 'no-sidebar' === $default_layout ) {
			$classes[] = 'no-sidebar';
		}
		// Adds class if sidebar is used.

		if ( is_active_sidebar( 'blog-sidebar' ) && 'no-sidebar' !== $default_layout ) {
			array_push( $classes, 'has-sidebar', $default_layout );
		}
	}

	return $classes;
}


/* Custom Post Class
***************************************************/
function travelcations_post_classes( $classes, $class, $post_id ) {
	if ( get_post_type( $post_id ) === 'post' && ! is_single() ) {
		$classes[] = 'boostify-post';
	}
	return $classes;
}


/* ADD PingBack header
***************************************************/
function travelcations_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}



/* Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
***************************************************/
function travelcations_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'rem';
	$args['format']   = 'list';

	return $args;
}


if ( ! function_exists( 'travelcations_entry_footer' ) ) :

	function travelcations_blog_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			$tags_list = get_the_tag_list( ' ' );
			if ( $tags_list ) {
				?>
				<span class="tags-links">
					<?php
						echo esc_html__( 'Tags: ', 'travelcations' );
						echo wp_kses(
							$tags_list,
							array(
								'a' => array(
									'href'  => array(),
									'class' => array(),
								),
							)
						);
					?>
				</span>
				<?php
			}
		}

		travelcations_the_post_navigation();

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			?>
			<span class="comments-link">
			<?php
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'travelcations' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			?>
			</span>
			<?php
		}
	}
endif;

/* Post Thumbnail
***************************************************/
if ( ! function_exists( 'travelcations_post_thumbnail' ) ) :
	function travelcations_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_single() ) :
			?>

			<div class="post-thumbnail">
				<?php
					the_post_thumbnail(
						'travelcations-single',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<div class="blog-entry-thumbnail">
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'full',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>
		</div>
			<?php
		endif; // End is_singular().
	}
endif;

/* CHECK IF ELEMENTOR IS ACTIVE
***************************************************/
if ( ! function_exists( 'travelcations_is_elementor' ) ) :
	function travelcations_is_elementor() {
		return defined( 'ELEMENTOR_VERSION' );
	}
endif;


/* CHECK IF PAGE BUILD WITH ELEMENTOR
***************************************************/
if ( ! function_exists( 'travelcations_elementor_page' ) ) :
	function travelcations_elementor_page( $id ) {
		return get_post_meta( $id, '_elementor_edit_mode', true );
	}
endif;


/* Site Search
***************************************************/
if ( ! function_exists( 'travelcations_site_search' ) ) :

	function travelcations_site_search() {
		?>

		<div class="on-search" id="content-action-search">
			<div class="container">
				<div class="site-search-wrapper" aria-expanded="false" role="form">
					<?php travelcations_form_search(); ?>
					<button class="site-search-close icon-travelcations-delete">
						<span class="screen-reader-text"><?php esc_html_e( 'Close Search', 'travelcations' ); ?></span>
					</button>
				</div><!-- .travelcations-container -->
			</div><!-- .site-search -->
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'travelcations_form_search' ) ) {
	function travelcations_form_search() {
		$post_type = get_theme_mod( 'travelcations_header_seach', 'post' );
		$search    = (int) get_option( 'search_template' );

		if ( 'post' === $post_type ) {
			$input = '<input type="search" class="search-field site-search-field" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder', 'travelcations' ) . '" value="' . get_search_query() . '" name="s"><input type="hidden" name="post_type" value="post">';
			$url   = esc_url( home_url( '/' ) );
		} else {
			$input = '<input type="search" class="search-field site-search-field" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder', 'travelcations' ) . '"  name="key">';
			$url   = get_the_permalink( $search );
		}

		?>
		<form action="<?php echo esc_url( $url ); ?>" class="search-form site-search-form" method="GET">
			<label class="search-label">
				<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'travelcations' ); ?></span>
			</label>
			<div class="form-wrapper">
				<?php
					echo (
						wp_kses(
							/* pagination */
							$input,
							array(
								'input' => array(
									'class'       => array(),
									'type'        => array(),
									'id'          => array(),
									'value'       => array(),
									'placeholder' => array(),
									'name'        => array(),
								),
							)
						)
					);
				?>
				<button type="submit" class="icon-travelcations-search btn-search-submit" ><span class="screen-reader-text"><?php esc_html_e( 'Submit Search', 'travelcations' ); ?></span></button>
				</div>
		</form>
		<?php
	}
}

/*
***********************  Create Living post type
*/
  
function custom_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Livings', 'Post Type General Name', 'travelcations' ),
			'singular_name'       => _x( 'Living', 'Post Type Singular Name', 'travelcations' ),
			'menu_name'           => __( 'Livings', 'travelcations' ),
			'parent_item_colon'   => __( 'Parent Living', 'travelcations' ),
			'all_items'           => __( 'All Livings', 'travelcations' ),
			'view_item'           => __( 'View Living', 'travelcations' ),
			'add_new_item'        => __( 'Add New Living', 'travelcations' ),
			'add_new'             => __( 'Add New', 'travelcations' ),
			'edit_item'           => __( 'Edit Living', 'travelcations' ),
			'update_item'         => __( 'Update Living', 'travelcations' ),
			'search_items'        => __( 'Search Living', 'travelcations' ),
			'not_found'           => __( 'Not Found', 'travelcations' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'travelcations' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'Livings', 'travelcations' ),
			'description'         => __( 'Living news and reviews', 'travelcations' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 2,
			'can_export'          => true,
			'has_archive'         => true,
			'menu_icon'   		  => 'dashicons-building',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type( 'Livings', $args );
	  
}
	  
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'custom_post_type', 0 );




/* Search Icon
***************************************************/
if ( ! function_exists( 'travelcations_site_search_toggle' ) ) :

	function travelcations_site_search_toggle() {
		?>
		<div class="site-search-toggle">
			<button class="site-search-icon search-toggle js-search icon-travelcations-search" aria-expanded="false" >

				<span class="screen-reader-text"><?php esc_html_e( 'Search', 'travelcations' ); ?></span>
			</button>
		</div><!-- .site-search-toggle -->
		<?php
	}
endif;

/* Default Copy Right
***************************************************/
if ( ! function_exists( 'travelcations_copyright' ) ) {
	function travelcations_copyright() {
		$year      = date( 'Y' ); //phpcs:ignore
		$copyright = '&copy; ' . $year . ' <a class="boostify-copyright-info" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>. All Rights Reserved. ';

		return $copyright;
	}
}


/* Default Pagination
***************************************************/
if ( ! function_exists( 'travelcations_the_posts_pagination' ) ) :
	function travelcations_the_posts_pagination() {
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => sprintf(
					'<span><span class="screen-reader-text">%s</span>&#8249;</span>',
					__( 'Previous set of posts', 'travelcations' )
				),
				'next_text' => sprintf(
					wp_kses(
						'<span><span class="screen-reader-text">%s</span>&#8250;</span>',
						array(
							'span' => array( 'class' => array() ),
						)
					),
					__( 'Next set of posts', 'travelcations' )
				),
			)
		);
	}
endif;


/* Default Navigation
***************************************************/
if ( ! function_exists( 'travelcations_the_post_navigation' ) ) {
	function travelcations_the_post_navigation() {
		$next_post = get_next_post();
		$prev_post = get_previous_post();
		$class_flw = ( empty( $prev_post->ID ) || empty( $next_post->ID ) ) ? ' full' : '';

		if ( is_single() ) {
			?>
			<div class="boostify-navigation">
				<div class="boostify-post-navigation boostify-navigation-wrapper">
					<?php if ( ! empty( $prev_post->ID ) ) : ?>
						<div class="prev<?php echo esc_attr( $class_flw ); ?>">
							<?php if ( has_post_thumbnail( $prev_post->ID ) ) { ?>
							<div class="prev-post-thumbnail">
								<a href="<?php echo esc_url( the_permalink( $prev_post->ID ) ); ?> ">
								<?php
									printf(
										wp_kses(
											'%s',
											array(
												'img' => array(
													'src' => array(),
													'class' => array(),
												),
											)
										),
										get_the_post_thumbnail( $prev_post->ID, 'travelcations-nav' )
									);
								?>
								</a>
							</div>
							<?php } ?>

							<div class="info-nav-post">
								<span class="navigation-label">
									<?php echo esc_html__( 'Previous post', 'travelcations' ); ?>
								</span>
								<a href="<?php echo esc_url( the_permalink( $prev_post->ID ) ); ?>">
									<h2 class="post-title"><?php echo esc_html( $prev_post->post_title ); ?></h2>
								</a>
							</div>
						</div>
					<?php endif ?>

					<?php if ( ! empty( $next_post->ID ) ) : ?>
						<div class="next<?php echo esc_attr( $class_flw ); ?>">
							<?php if ( has_post_thumbnail( $next_post->ID ) ) { ?>
							<div class="next-post-thumbnail">
								<a href="<?php echo esc_url( the_permalink( $next_post->ID ) ); ?>">
								<?php
									printf(
										wp_kses(
											'%s',
											array(
												'img' => array(
													'src' => array(),
													'class' => array(),
												),
											)
										),
										get_the_post_thumbnail( $next_post->ID, 'travelcations-nav' )
									);
								?>
								</a>
							</div>
							<?php } ?>
							<div class="info-nav-post">
								<span class="navigation-label">
									<?php echo esc_html__( 'Next post', 'travelcations' ); ?>
								</span>
								<a href="<?php echo esc_url( the_permalink( $next_post->ID ) ); ?>">
									<h2 class="post-title"><?php echo esc_html( $next_post->post_title ); ?></h2>
								</a>
							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
			<?php
		}

	}
}



/* Add Travelcatons Icon Into Elementor
***************************************************/
function travelcations_modify_controls( $controls_registry ) {
	// Get existing icons
	$icons = $controls_registry->get_control( 'icon' )->get_settings( 'options' );
	// Append new icons
	$new_icons = array_merge(
		array(
			'icon-travelcations-menu'        => 'Icon Menu',
			'icon-travelcations-search'      => 'Icon Search',
			'icon-travelcations-instagram'   => 'Icon Instagram',
			'icon-travelcations-issue'       => 'Icon Issue',
			'icon-travelcations-location'    => 'Icon Location',
			'icon-travelcations-map'         => 'Icon Map',
			'icon-travelcations-mouse'       => 'Icon Mouse',
			'icon-travelcations-play'        => 'Icon Play',
			'icon-travelcations-security'    => 'Icon Security',
			'icon-travelcations-star'        => 'Icon Star',
			'icon-travelcations-star-b'      => 'Icon Star Bold',
			'icon-travelcations-suitcase'    => 'Icon Suitcase',
			'icon-travelcations-support'     => 'Icon Support',
			'icon-travelcations-twitter'     => 'Icon Twitter',
			'icon-travelcations-user'        => 'Icon User',
			'icon-travelcations-youtube'     => 'Icon Youtube',
			'icon-travelcations-bookmark'    => 'Icon Bookmark',
			'icon-travelcations-call'        => 'Icon Call',
			'icon-travelcations-certificate' => 'Icon Certificate',
			'icon-travelcations-check'       => 'Icon Check',
			'icon-travelcations-clock'       => 'Icon Clock',
			'icon-travelcations-combine'     => 'Icon Combine',
			'icon-travelcations-comment'     => 'Icon Comment',
			'icon-travelcations-contrast'    => 'Icon Contrast',
			'icon-travelcations-delete'      => 'Icon Delete',
			'icon-travelcations-facebook'    => 'Icon Facebook',
			'icon-travelcations-flag'        => 'Icon Flag',
			'icon-travelcations-global'      => 'Icon Global',
			'icon-travelcations-info'        => 'Icon Info',
		),
		$icons
	);
	// Then we set a new list of icons as the options of the icon control
	$controls_registry->get_control( 'icon' )->set_settings( 'options', $new_icons );
}



/* ADD ICON STYLE IN EDITOR ELEMENTOR MODE
***************************************************/
function travelcations_enqueue_icon() {
	wp_enqueue_style(
		'travelcations-elementor-preview-style',
		TRAVELCATIONS_URI . 'assets/css/travelcations-icon.css',
		array(),
		'1.0'
	);
}


/* Custom Post Excerpt
***************************************************/
if ( ! function_exists( 'travelcations_excerpt' ) ) {
	function travelcations_excerpt( $word = 50 ) {
		if ( str_word_count( get_the_content() ) > $word ) {
			echo esc_html( wp_trim_words( get_the_content( get_the_ID() ), $word, null ) ) . '...';
		} else {
			echo esc_html( wp_trim_words( get_the_content( get_the_ID() ), $word, null ) );
		}
	}
}


/* Custom Comment List
***************************************************/
if ( ! function_exists( 'travelcations_comment_list' ) ) {
	function travelcations_comment_list( $comment, $args, $depth ) {
		$GLOBAL['comment'] = $comment; // phpcs:ignore
		?>

		<div <?php comment_class( 'ht-comment-list' ); ?> id="comment-<?php comment_ID(); ?>">
			<div class="avatar-author">
				<?php
				printf(
					wp_kses(
						'%s',
						array(
							'img' => array(
								'src'   => array(),
								'class' => array(),
							),
						)
					),
					get_avatar( $comment, 72 )
				);
				?>
			</div>
			<div class="comment-content">

				<div class="info-comment">
					<span class="comment-header">
						<p class="author-name"><?php echo esc_html( get_comment_author() ); ?></p>
						<span class="comment-time"><?php echo esc_html( get_comment_date() ); ?></span>
					</span>
					<?php comment_text(); ?>
					<div class="ht-link">
						<a href="<?php echo esc_url( get_edit_comment_link() ); ?>" class="edit fa fa-edit"><?php echo esc_html__( 'Edit', 'travelcations' ); ?></a>
						<?php
							printf(
								'%s',
								get_comment_reply_link( // phpcs:ignore
									array_merge(
										$args,
										array(
											'depth'      => $depth,
											'reply_text' => esc_html__( 'Reply', 'travelcations' ),
											'max_depth'  => $args['max_depth'],
										)
									)
								)
							);
						?>
					</div>
				</div>

			</div>
		</div>

		<?php
	}
}


/* Site Pre Load
***************************************************/
if ( ! function_exists( 'travelcations_site_preload' ) ) {
	function travelcations_site_preload() {
		$preload = get_theme_mod( 'preload', true );
		if ( $preload ) {
			get_template_part( 'template-parts/header/preload-effect' );
		}
	}
}

/* Default sticky menu
***************************************************/
if ( ! function_exists( 'travelcations_sticky_default' ) ) {
	function travelcations_sticky_default() {
		$sticky = get_theme_mod( 'stickymenu', false );
		if ( $sticky ) {
			get_template_part( 'template-parts/header/sticky-menu' );
		}
	}
}

/* Site Scroll Top
***************************************************/
if ( ! function_exists( 'travelcations_scroll_top' ) ) {
	function travelcations_scroll_top() {
		$scroll = get_theme_mod( 'scroll_top', true );
		if ( $scroll ) {
			?>
			<span class="btn-back-to-top fa fa-angle-up"></span>
			<?php
		}
	}
}

/* Site Mobie Menu Default
***************************************************/
if ( ! function_exists( 'travelcations_canvas' ) ) {
	function travelcations_canvas() {
		get_template_part( 'template-parts/footer/off-canvas' );
	}
}


/* Page Header
***************************************************/
if ( ! function_exists( 'travelcations_page_header' ) ) {
	function travelcations_page_header() {
		$image   = '';
		$style   = '';
		$classes = '';
		if ( class_exists( 'ACF' ) ) {
			$hidden_page_header = get_field( 'travelcations_page_header' );
			if ( ! empty( $hidden_page_header ) && 'hidden_page_header' === $hidden_page_header[0] ) {
				return;
			}
		}
		if ( ! is_singular( 'post' ) ) {
			$classes = ' page-header-default';
		}
		?>
		<div class="site-page-header<?php echo esc_attr( $classes ); ?>">
			<div class="page-header-container">
				<div class="container ">
					<div class="page-header-wrapper">
						<div class="page-header-content">
							<h1 class="page-title">
								<?php
								if ( is_home() ) {
									echo esc_html__( 'Blog', 'travelcations' );
								} elseif ( is_search() ) {
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'travelcations' ), '<span>' . get_search_query() . '</span>' );
								} elseif ( is_archive() ) {
									the_archive_title();
								} else {
									the_title();
								}

								?>
							</h1>
							<?php travelcations_breadcrumb(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

/* Page Header Background
***************************************************/
if ( ! function_exists( 'travelcations_pageheader_background' ) ) {
	function travelcations_pageheader_background() {
		$image = '';
		$style = '';
		if ( class_exists( 'ACF' ) ) {
			$image = get_field( 'travelcations_page_header_image' );
		}

		if ( ! empty( $image ) ) {
			?>
			<style type="text/css" id="page-header-inline-css">
				.page-header-default {
					background-image: url("<?php echo esc_url( $image ); ?>") !important;
				}
			</style>
			<?php
		}
	}
}

/* Topbar Template
***************************************************/
if ( ! function_exists( 'travelcations_topbar' ) ) {
	function travelcations_topbar() {
		get_template_part( 'template-parts/header/topbar' );
	}
}

/* Site Body Open
***************************************************/
if ( ! function_exists( 'travelcations_body_open' ) ) {
	function travelcations_body_open() {
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
	}
}

/* Site Breadcrumb
***************************************************/
if ( ! function_exists( 'travelcations_breadcrumb' ) ) {
	function travelcations_breadcrumb() {
		$breadcrumb  = new Travelcations\Breadcrumb();
		$breadcrumbs = $breadcrumb->generate();
		$number      = count( $breadcrumbs );
		?>
		<div class="site-breadcrumb">
			<ul class="breadcrumb-content">
				<li class="breadcrumb-item home">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'travelcations' ); ?></a>
				</li>
				<?php foreach ( $breadcrumbs as $key => $item ) : ?>
					<li class="breadcrumb-item">
					<?php if ( ( $number - 1 ) !== $key ) : ?>
						<a href="<?php echo esc_url( $item[1] ); ?>"><?php echo esc_html( $item[0] ); ?></a>
					<?php else : ?>
						<span class="current"><?php echo esc_html( $item[0] ); ?></span>
					<?php endif ?>

					</li>
				<?php endforeach ?>
			</ul>
		</div>
		<?php
	}
}


/* Header Navigation
***************************************************/
if ( ! function_exists( 'travelcations_header_navigation' ) ) {
	function travelcations_header_navigation() {
		$widget_gui = get_theme_mod( 'widget_gui', false );
		?>
		<div class="site-header--main">
			<?php travelcations_topbar(); ?>
			<div class="header-default-content">
				<div class="container">
					<div class="site-header-container">
						<?php get_template_part( 'template-parts/header/site-branding' ); ?>
						<div class="menu-toggle-container">
							<a href="#" class="menu-toggle js-canvas-toggle" aria-expanded="false">
									<span class="menu-toggle-wrapper icon-travelcations-menu"></span><!-- .menu-toggle-wrapper -->

								<span class="screen-reader-text menu-toggle-text"><?php esc_html_e( 'Menu', 'travelcations' ); ?></span>
							</a><!-- .menu-toggle -->
						</div><!-- .menu-toggle-container -->

						<div class="navigation-actions">

								<?php
								if ( has_nav_menu( 'primary' ) ) {
									?>
									<nav id="site-navigation" class="header-navigation main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'travelcations' ); ?>">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'primary',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
									</nav><!-- #site-navigation -->

									<?php
								} elseif ( is_user_logged_in() ) {
									?>
										<div class="btn-add-menu header-hight">
											<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php echo esc_html__( 'Add menu', 'travelcations' ); ?></a>
										</div>

									<?php
								}
								?>
							<div class="header-actions">
								<ul class="list-action">
									<li class="item-action action-search">
										<?php travelcations_site_search_toggle(); ?>
									</li>
									<?php if ( $widget_gui ) : ?>
										<li class="item-action action-mobie-menu">

											<span class="icon-travelcations-menu btn-show-widget-gui"></span><!-- .menu-toggle-wrapper -->

											<span class="screen-reader-text menu-toggle-text"><?php esc_html_e( 'Menu', 'travelcations' ); ?></span>
											<!-- .menu-toggle -->

										</li>
									<?php endif ?>

								</ul>
							</div>
						</div>
					</div><!-- .site-header-container -->
				</div><!-- .travelcations-container -->
			</div>
		</div>
		<?php
	}
}

/* Ajax load more post
***************************************************/
if ( ! function_exists( 'travelcations_load_more' ) ) {
	function travelcations_load_more() {
		check_ajax_referer( 'travelcations_loadmore' );
		$total_page     = $_POST['total_page'];
		$order          = $_POST['order'];
		$orderby        = $_POST['orderby'];
		$offset         = $_POST['offset'];
		$posts_per_page = $_POST['posts_per_page'];
		$args           = array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => $posts_per_page,
			'offset'              => $offset,
			'paged'               => get_query_var( 'paged' ),
			'ignore_sticky_posts' => 1,
			'order'               => $order,
			'orderby'             => $orderby,
		);
		$posts          = new \WP_Query( $args );

		if ( $posts->have_posts() ) :
			while ( $posts->have_posts() ) :
				$posts->the_post();
				get_template_part( 'template-parts/content/content-grid' );
			endwhile;
			wp_reset_postdata();
		endif;
		die();
	}
}

/* Widget GUI
***************************************************/

if ( ! function_exists( 'travelcations_widget_guide' ) ) {
	function travelcations_widget_guide() {
		if ( function_exists( 'boostify_tour_widget_template' ) && is_active_sidebar( 'gui-sidebar' ) ) {
			boostify_tour_widget_template();
		} else {
			get_template_part( 'template-parts/header/widget-guid' );
		}
	}
}


/* Widget GUI
***************************************************/
if ( ! function_exists( 'travelcations_header_sidebar' ) ) {
	function travelcations_header_sidebar() {
		$header_logo = get_theme_mod( 'logo_template', false );
		?>
		<div class="site-branding">
			<?php
			if ( $header_logo ) {
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
					<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr__( 'Logo template', 'travelcations' ); ?>">
				</a>
				<?php
			} else {
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
					<img src="<?php echo esc_url( TRAVELCATIONS_URI . 'assets/images/logo.png' ); ?>" alt="<?php echo esc_attr__( 'Logo template', 'travelcations' ); ?>">
				</a>
				<?php
			}
			?>
		</div>
		<?php
	}
}


function travelcations_import_files() {
	return array(
		array(
			'import_file_name'             => 'Demo Full',
			'import_file_url'            => 'https://travelcation.boostifythemes.com/demos/travelcations.xml',
			'import_widget_file_url'     => 'https://travelcation.boostifythemes.com/demos/travelcations.wie',
			'import_customizer_file_url' => 'https://travelcation.boostifythemes.com/demos/travelcations.dat',
			'import_preview_image_url'   => 'https://boostifythemes.com/demos/babie/wp-content/uploads/2019/05/s2-2.jpg',
			'import_notice'                => esc_html__( 'Please actived the required plugins before installing the demo. After you import this demo, you will have to setup the slider separately.', 'travelcations' ),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'travelcations_import_files' );

/*
 FUNCTION SETTING AFTER IMPORT DEMO
 */
function travelcations_after_import( $selected_import ) {

	if ( 'Demo Full' === $selected_import['import_file_name'] ) {
		//Set Menu
		$primary = get_term_by('name', 'Menu 1', 'nav_menu');

		set_theme_mod(
			'nav_menu_locations' ,
			array(
				'primary'   => $primary->term_id,
			)
		);

		update_option( 'posts_per_page', 3 );
		update_option( 'permalink_structure', '/%postname%/' );
		//Set Front page
		$font_page = get_page_by_title( 'Home 1');
		$post_page = get_page_by_title( 'blog');
		if ( isset( $font_page->ID ) ) {
			update_option( 'page_on_front', $font_page->ID );
			update_option( 'show_on_front', 'page' );
		}

		// Set post page
		if ( isset( $post_page->ID ) ) {
			update_option( 'page_for_posts', $post_page->ID );
			update_option( 'show_on_front', 'page' );
		}

		// Import Revolution Slider
		if ( class_exists( 'RevSlider' ) ) {
			$slider_array = array(
				get_template_directory() . '/slider/slider-2.zip',
				get_template_directory() . '/slider/slider-home-1.zip',
				get_template_directory() . '/slider/slider-home-2.zip',
			);

			$slider = new RevSlider();

			foreach( $slider_array as $filepath ){
				$slider->importSliderFromPost( true, true, $filepath );
			}
		}

	}

}
add_action( 'pt-ocdi/after_import', 'travelcations_after_import' );

