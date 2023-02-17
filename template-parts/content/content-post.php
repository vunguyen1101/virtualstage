
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */
?>
<?php travelcations_post_thumbnail(); ?>
<div class="container">
	<div class="boostify-single-post no-sidebar">
		<!-- <div id="primary" class="content-area"> -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
				<div class="blog-detail">

					<div class="blog-detail-head">
						<header class="blog-header">

							<div class="list-category-post-on">
								<?php
								echo wp_kses(
									get_the_category_list(),
									array(
										'a'    => array(
											'href'  => array(),
											'class' => array(),
											'id'    => array(),
										),
										'span' => array(
											'class' => array(),
										),
									)
								);
								?>
							</div>

						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php
							the_content(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'travelcations' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								)
							);

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travelcations' ),
									'after'  => '</div>',
								)
							);
							?>
						</div><!-- .entry-content -->
					</div>

					<div class="blog-detail-footer">
						<footer class="entry-footer">

								<?php travelcations_blog_footer(); ?>

						</footer><!-- .entry-footer -->
					</div>
				</div>
				<?php
				if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
					?>

					<div class="comments-wrapper section-inner">
							<?php comments_template(); ?>
					</div><!-- .comments-wrapper -->

					<?php
				}
				?>
			</article><!-- #post-<?php the_ID(); ?> -->
		<!-- </div> -->

	</div>
</div>
