<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package standard-industries
 */

?>

	<footer>
	<div class="container">
		<div class="logo-container">
			<div class="logo">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/img/si-logo-alt.png' ?>" alt="<?php esc_attr_e( 'Standard Industries Logo', 'standard-industries' ); ?>" />
			</div>
		</div>
		<div class="footer-col-container">
			<div class="footer-left">
				<div class="cols">
					<div class="desktop-col-container">
						<div class="col desktop">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-left', 'menu_class' => 'nav' ) ); ?>
						</div>
						<div class="col desktop">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-center', 'menu_class' => 'nav' ) ); ?>
						</div>
						<div class="col desktop">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-right', 'menu_class' => 'nav' ) ); ?>
							<div class="social">
								<ul>
									<?php if ( get_field( 'facebook_url', 'option' )  ) : ?>
									<li class="facebook"><a href="<?php the_field( 'facebook_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-facebook.svg' ); // @codingStandardsIgnoreLine ?></a></li>
									<?php endif; ?>
									<?php if ( get_field( 'twitter_url', 'option' )  ) : ?>
									<li class="twitter"><a href="<?php the_field( 'twitter_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-twitter.svg' ); // @codingStandardsIgnoreLine ?></a></li>
									<?php endif; ?>
									<?php if ( get_field( 'linkedin_url', 'option' )  ) : ?>
									<li class="linkedin"><a href="<?php the_field( 'linkedin_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-linkedin.svg' ); // @codingStandardsIgnoreLine ?></a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col mobile">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-mobile', 'menu_class' => 'nav' ) ); ?>
						<div class="social">
							<ul>
								<?php if ( get_field( 'facebook_url', 'option' )  ) : ?>
								<li class="facebook"><a href="<?php the_field( 'facebook_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-facebook.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
								<?php if ( get_field( 'instagram_url', 'option' )  ) : ?>
								<li class="instagram"><a href="<?php the_field( 'instagram_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-instagram.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
								<?php if ( get_field( 'linkedin_url', 'option' )  ) : ?>
								<li class="linkedin"><a href="<?php the_field( 'linkedin_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-linkedin.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="legal">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-legal', 'menu_class' => 'nav' ) ); ?>
					<p class="disclaimer"><?php the_field( 'disclaimer', 'option' ); ?></p>
				</div>
			</div>
			<div class="footer-right">
				<div class="locations">
				<?php while ( have_rows( 'locations', 'option' ) ) : the_row(); ?>
					<div class="location">
						<h3 class="loc-name"><?php the_sub_field( 'title' ); ?></h3>
						<p class="street"><?php the_sub_field( 'street' ); ?></p>
						<p class="city"><?php the_sub_field( 'city' ); ?></p>
						<p class="phone"><?php the_sub_field( 'phone' ); ?></p>
						<p class="email"><a href="mailto:<?php the_sub_field( 'e-mail' ); ?>"><?php the_sub_field( 'e-mail' ); ?></a></p>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	</footer>

	</div> <!-- /.wrapper -->

	<?php wp_footer(); ?>

</body>
</html>
