<?php
/**
 * Displays header site branding
 */

$single = get_theme_mod( 'logo_single', false );
?>

<div class="site-branding">
	<?php
	if ( has_custom_logo() ) :
		if ( ! is_singular( 'post' ) ) {
			the_custom_logo();
			if ( is_front_page() && ! is_paged() ) :
				?>
				<span class="site-title screen-reader-text"><?php bloginfo( 'name' ); ?></span>
				<?php
			endif;
		} else {
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
				<img src="<?php echo esc_url( $single ); ?>" alt="<?php echo esc_attr__( 'Logo Single', 'travelcations' ); ?>">
			</a>
			<?php
		}

	else :

		if ( is_front_page() && is_home() ) :
			?>
			<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$travelcations_description = get_bloginfo( 'description', 'display' );
		if ( $travelcations_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo esc_html( $travelcations_description ); /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>

	<?php endif; ?><!-- end has_custom_logo() check -->
</div><!-- .site-branding -->
