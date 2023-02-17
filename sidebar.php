<<<<<<< HEAD
<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelcations
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}

$default_layout = get_theme_mod( 'travelcations_default_layout', 'right-sidebar' );
?>
<?php if ( 'no-sidebar' !== $default_layout || is_single() ) : ?>
	<aside id="secondary" class="main-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</aside><!-- #secondary -->
<?php endif ?>
=======
<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelcations
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}

$default_layout = get_theme_mod( 'travelcations_default_layout', 'right-sidebar' );
?>
<?php if ( 'no-sidebar' !== $default_layout || is_single() ) : ?>
	<aside id="secondary" class="main-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</aside><!-- #secondary -->
<?php endif ?>
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
