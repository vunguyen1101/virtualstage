<<<<<<< HEAD
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php travelcations_post_thumbnail(); ?>

	<div class="entry-page">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travelcations' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
=======
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php travelcations_post_thumbnail(); ?>

	<div class="entry-page">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travelcations' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
