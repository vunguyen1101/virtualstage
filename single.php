<<<<<<< HEAD
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Travelcations
 */

get_header();

?>
<div class="site-content">
	<div id="content" class="page-content single-post-content">
		<div class="boostify-primary-single">
			<?php if ( ! is_singular( 'post' ) ) : ?>
				<div id="primary" class="content-area">

			<?php endif ?>

				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', get_post_type() );
					/**
					 *  Output comments wrapper if it's a post, or if comments are open,
					 * or if there's a comment number – and check for password.
					 * */

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			<?php if ( ! is_singular( 'post' ) ) : ?>
				</div><!-- #primary -->
				<?php get_sidebar(); ?>
			<?php endif ?>

		</div>
	</div>

</div>
<?php
get_footer();

=======
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Travelcations
 */

get_header();

?>
<div class="site-content">
	<div id="content" class="page-content single-post-content">
		<div class="boostify-primary-single">
			<?php if ( ! is_singular( 'post' ) ) : ?>
				<div id="primary" class="content-area">

			<?php endif ?>

				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', get_post_type() );
					/**
					 *  Output comments wrapper if it's a post, or if comments are open,
					 * or if there's a comment number – and check for password.
					 * */

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			<?php if ( ! is_singular( 'post' ) ) : ?>
				</div><!-- #primary -->
				<?php get_sidebar(); ?>
			<?php endif ?>

		</div>
	</div>

</div>
<?php
get_footer();

>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
