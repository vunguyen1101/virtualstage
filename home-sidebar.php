<<<<<<< HEAD
<?php
/**
* Template Name: Page Header Sidebar
*
* @package WordPress
* @subpackage travelcation
* @since Travelcation 1.0
*/
$contact = get_theme_mod( 'header_contact', false );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
		travelcations_body_open();
		do_action( 'travelcations_header' );
	?>
	<div id="page-container" class="page-site">
		<div class="page-left-header">
			<div class="header-sidebar">
				<div class="header-wrapper">
					<?php travelcations_header_sidebar(); ?>
					<div class="header-actions">
						<ul class="list-action">
							<li class="item-action action-search">
								<div class="site-search-toggle">
									<button class="site-search-icon search-toggle js-search icon-travelcations-search" aria-expanded="false">

										<span class="screen-reader-text"><?php echo esc_html__( 'Search', 'travelcations' ) ?></span>
									</button>
								</div><!-- .site-search-toggle -->
							</li>
							<li class="item-action action-mobie-menu">

								<span class="icon-travelcations-menu menu-toggle-container"></span><!-- .menu-toggle-wrapper -->

								<span class="screen-reader-text menu-toggle-text"><?php echo esc_html__( 'Menu', 'travelcations' ) ?></span>
								<!-- .menu-toggle -->

							</li>
						</ul>
					</div>
					<div class="header-list-contact">
						<?php if ( ! $contact ) : ?>
							<ul class="social-contact">
								<li class="social-item"><a href="#" class="social-item icon-travelcations-instagram"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-twitter"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-facebook"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-youtube"></a></li>
							</ul>
							<?php
							else :
								echo wp_kses(
									$contact,
									array(
										'ul' => array(
											'class' => array(),
										),
										'li' => array(
											'class' => array(),
										),
									)
								);
							endif;
							?>
					</div>
				</div>
			</div>
			<div class="site-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php
do_action( 'travelcations_footer' );
wp_footer();
?>
</body>
=======
<?php
/**
* Template Name: Page Header Sidebar
*
* @package WordPress
* @subpackage travelcation
* @since Travelcation 1.0
*/
$contact = get_theme_mod( 'header_contact', false );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
		travelcations_body_open();
		do_action( 'travelcations_header' );
	?>
	<div id="page-container" class="page-site">
		<div class="page-left-header">
			<div class="header-sidebar">
				<div class="header-wrapper">
					<?php travelcations_header_sidebar(); ?>
					<div class="header-actions">
						<ul class="list-action">
							<li class="item-action action-search">
								<div class="site-search-toggle">
									<button class="site-search-icon search-toggle js-search icon-travelcations-search" aria-expanded="false">

										<span class="screen-reader-text"><?php echo esc_html__( 'Search', 'travelcations' ) ?></span>
									</button>
								</div><!-- .site-search-toggle -->
							</li>
							<li class="item-action action-mobie-menu">

								<span class="icon-travelcations-menu menu-toggle-container"></span><!-- .menu-toggle-wrapper -->

								<span class="screen-reader-text menu-toggle-text"><?php echo esc_html__( 'Menu', 'travelcations' ) ?></span>
								<!-- .menu-toggle -->

							</li>
						</ul>
					</div>
					<div class="header-list-contact">
						<?php if ( ! $contact ) : ?>
							<ul class="social-contact">
								<li class="social-item"><a href="#" class="social-item icon-travelcations-instagram"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-twitter"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-facebook"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-youtube"></a></li>
							</ul>
							<?php
							else :
								echo wp_kses(
									$contact,
									array(
										'ul' => array(
											'class' => array(),
										),
										'li' => array(
											'class' => array(),
										),
									)
								);
							endif;
							?>
					</div>
				</div>
			</div>
			<div class="site-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php
do_action( 'travelcations_footer' );
wp_footer();
?>
</body>
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
</html>