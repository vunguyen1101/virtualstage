<<<<<<< HEAD
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'swiper-slide' ); ?>>
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

			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="link-more">
			<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="more-link">
				<?php echo esc_html__( 'Continue reading', 'travelcations' ); ?>
			</a>
		</div>

	</div>


</article><!-- #post-<?php the_ID(); ?> -->
=======
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travelcations
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'swiper-slide' ); ?>>
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

			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="link-more">
			<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="more-link">
				<?php echo esc_html__( 'Continue reading', 'travelcations' ); ?>
			</a>
		</div>

	</div>


</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
