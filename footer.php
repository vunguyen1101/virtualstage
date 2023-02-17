<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelcations
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">
			<div class="container">
				<div class="site-info-wrapper">
					<?php
					get_template_part( 'template-parts/footer/footer', 'copyright' );
					get_template_part( 'template-parts/footer/footer', 'navigation' );
					?>
				</div><!-- .site-info-wrapper -->
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php
do_action( 'travelcations_footer' );
wp_footer();
?>

</body>
</html>
