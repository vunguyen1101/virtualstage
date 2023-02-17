<?php
/**
 * Display footer social menu
 *
 * @package Travelcations
 */


$nav = get_theme_mod( 'footer_nav' );
?>
<?php if ( $nav ) : ?>
	<nav class="footer-navigation" role="navigation">

		<div class="menu-footer-menu-container">
			<?php
				printf(
					wp_kses(
					/* pagination */
						'%s',
						array(
							'ul' => array(
								'class' => array(),
							),
							'li' => array(
								'class' => array(),
							),
							'a' => array(
								'class' => array(),
								'href' => array(),
							),
						)
					),
					get_theme_mod( 'footer_nav' )
				);
			?>

		</div>
	</nav><!-- .footer-navigation -->
<?php endif ?>

