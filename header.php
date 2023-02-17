<<<<<<< HEAD
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

	<div id="page-container" class="page-site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travelcations' ); ?></a>
		<?php travelcations_sticky_default(); ?>
		<header id="masthead" class="site-header">
			<div class="header-default">

				<?php travelcations_header_navigation(); ?>

				<?php travelcations_page_header(); ?>
			</div>
		</header><!-- #masthead -->
=======
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

	<div id="page-container" class="page-site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travelcations' ); ?></a>
		<?php travelcations_sticky_default(); ?>
		<header id="masthead" class="site-header">
			<div class="header-default">

				<?php travelcations_header_navigation(); ?>

				<?php travelcations_page_header(); ?>
			</div>
		</header><!-- #masthead -->
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
