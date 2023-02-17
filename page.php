<<<<<<< HEAD
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */

get_header();
?>
<div class="site-content">
	<div id="content" class="page-content">
		<div class="travelcations-container">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', 'page' );

					/**
					 *  Output comments wrapper if it's a post, or if comments are open,
					 * or if there's a comment number – and check for password.
					 * */
					if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						?>

						<div class="comments-wrapper section-inner">

							<?php comments_template(); ?>

						</div><!-- .comments-wrapper -->

						<?php
					}

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php
get_footer();
=======
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */

get_header();
?>
<div class="site-content">
	<div id="content" class="page-content">
		<div class="travelcations-container">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', 'page' );

					/**
					 *  Output comments wrapper if it's a post, or if comments are open,
					 * or if there's a comment number – and check for password.
					 * */
					if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						?>

						<div class="comments-wrapper section-inner">

							<?php comments_template(); ?>

						</div><!-- .comments-wrapper -->

						<?php
					}

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php
get_footer();
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
