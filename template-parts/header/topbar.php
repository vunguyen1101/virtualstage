<?php
/**
 * Template Top Bar
 *
 * @package Travelcations
 */
$topbar  = get_theme_mod( 'topbar', false );
$phone   = get_theme_mod( 'phone-default', '+1-342-567-8998' );
$contact = get_theme_mod( 'header_contact' );
if ( $topbar ) :


?>
<div class="topbar-default" id="master-topbar">
	<div class="topbar--wrapper">
		<div class="container">
			<div class="topbar-main-content">
				<div class="topbar-left">
					<div class="header-list-contact">
						<span class="social-label"><?php echo esc_html__( 'Follow us:', 'travelcations' ); ?></span>
						<?php if ( ! $contact ) : ?>
							<ul class="social-contact">
								<li class="social-item"><a href="#" class="social-item icon-travelcations-instagram"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-twitter"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-facebook"></a></li>
								<li class="social-item"><a href="#" class="social-item icon-travelcations-youtube"></a></li>
							</ul>
							<?php
							else :
								echo wp_kses(
									$contact,
									array(
										'ul' => array(
											'class' => array(),
										),
										'li' => array(
											'class' => array(),
										),
									)
								);
							endif;
							?>
					</div>
					<div class="header-list-contact">
						<ul class="header-contact">
							<li class="header-contact-item icon-travelcations-call phone">
								<a href="tel:<?php echo esc_attr( $phone ); ?> ">
									<?php echo esc_html( $phone ); ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="topbar-right">
					<ul class="header-contact">
						<li class="header-contact-item icon-travelcations-global">
							<a href="#" class="item">
								<?php echo esc_html__( 'English', 'travelcations' ); ?>
							</a>
						</li>
						<li class="header-contact-item icon-travelcations-user">
							<a href="tel:<?php echo esc_attr( $phone ); ?>" class="item">
								<?php echo esc_html__( 'Login', 'travelcations' ); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
endif;
