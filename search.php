<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Travelcations
 */

get_header();
?>
<div class="site-content">

	<div id="content" class="page-content">
		<div class="container">
			<div class="boostify-primary">
				<section id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content/content', 'search' );

						endwhile;

						the_posts_navigation();

						else :
							get_template_part( 'template-parts/content/content', 'none' );

					endif;
						?>

					</main><!-- #main -->
				</section><!-- #primary -->

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
