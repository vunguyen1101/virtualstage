<?php
/**
 * Display footer copyright
 *
 * @package Travelcations
 */
?>

<div class="site-copyright">
	<?php
	// Get the footer copyright text
	$footer_copyright = get_theme_mod( 'travelcations_footer_copyright' );

	if ( $footer_copyright ) {
		// If we have custom footer text, use it
		echo esc_html( $footer_copyright );
	} else {
		// Otherwise, use the default one
		echo wp_kses(
			travelcations_copyright(),
			array(
				'a' => array(
					'href'  => array(),
					'class' => array(),
				),
			)
		);
	}
	?>
</div><!-- .site-copyright -->
