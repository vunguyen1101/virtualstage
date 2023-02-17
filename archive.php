<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */

get_header();
?>
<div class="site-content">

	<div id="content" class="page-content">
		<div class="container">
			<div class="boostify-primary">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php if ( have_posts() ) : ?>


						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content/content' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content/content', 'none' );

					endif;
					?>

					</main><!-- #main -->
				</div><!-- #primary -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
