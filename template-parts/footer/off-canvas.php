<<<<<<< HEAD
<?php
/**
 * Displays off-canvas menu for mobile devices.
 *
 * @package Travelcations
 */
?>

<div class="off-canvas-container js-canvas" tabindex="-1" aria-hidden="true" id="off-canvas">

	<div class="off-canvas-inner">
		<div class="navigation-inner">

			<div class="canvas-search-form">
				<?php travelcations_form_search(); ?>
			</div>

			<nav id="canvas-navigation" class="navigation-left-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'travelcations' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'vetical-menu-wrapper',
					)
				);
				?>
			</nav><!-- .off-canvas-menu -->

			<div id="site-header-cart" class="site-header-cart cart-vetical">
				<a class="cart-contents" href="<?php echo esc_url( home_url( '/cart' ) ); ?>" title="View your shopping cart">
					<span class="icon-bag"></span>
					<span class="count"></span>
				</a>
			</div>

			<?php
			if ( has_nav_menu( 'social' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'social',
						'menu_id'        => 'social-menu',
					)
				);
			}

			?>

		</div><!-- .off-canvas-inner -->
	</div>
	<div class="close-wrapper">
		<span class="close-canvas"></span>
	</div>

</div><!-- .off-canvas-container -->

=======
<?php
/**
 * Displays off-canvas menu for mobile devices.
 *
 * @package Travelcations
 */
?>

<div class="off-canvas-container js-canvas" tabindex="-1" aria-hidden="true" id="off-canvas">

	<div class="off-canvas-inner">
		<div class="navigation-inner">

			<div class="canvas-search-form">
				<?php travelcations_form_search(); ?>
			</div>

			<nav id="canvas-navigation" class="navigation-left-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'travelcations' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'vetical-menu-wrapper',
					)
				);
				?>
			</nav><!-- .off-canvas-menu -->

			<div id="site-header-cart" class="site-header-cart cart-vetical">
				<a class="cart-contents" href="<?php echo esc_url( home_url( '/cart' ) ); ?>" title="View your shopping cart">
					<span class="icon-bag"></span>
					<span class="count"></span>
				</a>
			</div>

			<?php
			if ( has_nav_menu( 'social' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'social',
						'menu_id'        => 'social-menu',
					)
				);
			}

			?>

		</div><!-- .off-canvas-inner -->
	</div>
	<div class="close-wrapper">
		<span class="close-canvas"></span>
	</div>

</div><!-- .off-canvas-container -->

>>>>>>> 386eaa2a57a9c72af4b0b337b2358f696523109a
