<<<<<<< HEAD
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Travelcations
 */

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

	<div id="page404-container" class="page-site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travelcations' ); ?></a>
		<?php travelcations_sticky_default(); ?>
		<header id="masthead" class="site-header">
			<div class="header-default">
				<div class="site-header--main">
					<?php
						travelcations_header_navigation();
					?>
				</div>
			</div>
		</header><!-- #masthead -->
		<div id="primary" class="page404">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<div class="text-404">
						<h1 class="title-404"><?php echo esc_html( '404' ); ?></h1>
						<div class="404-content">
							<span class="notice">
								<?php echo esc_html__( 'Oops something went wrong!', 'travelcations' ); ?>
								<span class="try"><?php echo esc_html__( 'We could not find the page you requested.', 'travelcations' ); ?></span>
							</span>
						</div>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-back-home">
							<?php echo esc_html__( 'Go to Homepage', 'travelcations' ); ?>
						</a>

					</div>
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div>

<?php get_footer(); ?>
=======
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Travelcations
 */

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

	<div id="page404-container" class="page-site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travelcations' ); ?></a>
		<?php travelcations_sticky_default(); ?>
		<header id="masthead" class="site-header">
			<div class="header-default">
				<div class="site-header--main">
					<?php
						travelcations_header_navigation();
					?>
				</div>
			</div>
		</header><!-- #masthead -->
		<div id="primary" class="page404">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<div class="text-404">
						<h1 class="title-404"><?php echo esc_html( '404' ); ?></h1>
						<div class="404-content">
							<span class="notice">
								<?php echo esc_html__( 'Oops something went wrong!', 'travelcations' ); ?>
								<span class="try"><?php echo esc_html__( 'We could not find the page you requested.', 'travelcations' ); ?></span>
							</span>
						</div>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-back-home">
							<?php echo esc_html__( 'Go to Homepage', 'travelcations' ); ?>
						</a>

					</div>
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div>

<?php get_footer(); ?>
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
