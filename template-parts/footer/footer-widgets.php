<<<<<<< HEAD
<?php
/**
 * Display the footer widget area
 *
 * @package Travelcations
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside class="widget-area footer-widget-area" role="complementary">
	<div class="container">
		<div class="footer-logo">
			<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		</div>
		<div class="footer-widgets">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .footer-widget -->
	</div><!-- .travelcations-container -->
</aside><!-- .footer-widget-area -->
=======
<?php
/**
 * Display the footer widget area
 *
 * @package Travelcations
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside class="widget-area footer-widget-area" role="complementary">
	<div class="container">
		<div class="footer-logo">
			<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		</div>
		<div class="footer-widgets">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .footer-widget -->
	</div><!-- .travelcations-container -->
</aside><!-- .footer-widget-area -->
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
