<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php travelcations_post_thumbnail(); ?>

	<div class="blog-detail">
		<header class="blog-header">

			<?php
			if ( is_sticky() && is_home() && ! is_paged() ) {
				printf( '<span class="sticky-post ion-pin">%s</span>', esc_html_x( 'Sticky Post', 'post', 'travelcations' ) );
			}

			?>
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

			<?php

			if ( is_home() || is_archive() || is_search() ) {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

			if ( 'post' === get_post_type() ) :
				?>
				<div class="blog-entry-meta<?php echo esc_attr( ( is_single() ? ' single-blog-meta' : '' ) ); ?>">
					<?php

					if ( is_sticky() && is_single() ) {
						printf( '<span class="sticky-post ion-pin">%s</span>', esc_html_x( 'Sticky Post', 'post', 'travelcations' ) );
					}

					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_single() ) : ?>
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

			<footer class="entry-footer">
				<?php travelcations_blog_footer(); ?>
			</footer><!-- .entry-footer -->

		<?php else : ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>

		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
