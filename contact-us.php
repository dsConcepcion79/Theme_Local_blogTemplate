<?php
/**
 *
 * Template Name: Contact Us
 *
 * @package standard-industries
 */

get_header();

while ( have_posts() ) : the_post();
	$left_column = get_field( 'left_column' );
	$right_column = get_field( 'right_column' );
?>
<div id="primary">
	<section class="contact-form">
		<div class="container white">
			<h1 class="heading"><?php the_title(); ?></h1>
			<div class="contact-info-container">
				<div class="questions-container">
					<p><?php echo $right_column['main_text']; // @codingStandardsIgnoreLine ?></p>

					<div class="inquiry">
						<?php echo $right_column['contact_text']; // @codingStandardsIgnoreLine ?>
					</div>

					<ul class="social">
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
				<div class="form-container">

					<?php echo do_shortcode( '[contact-form-7 id="'. $right_column['contact_form_7_id'] .'" title="Contact Us"]' ); // @codingStandardsIgnoreLine ?>

					<!-- Show after form submission. -->
					<div class="thank-you">
						<?php echo $left_column['thank_you_text']; // @codingStandardsIgnoreLine ?>
						<div class="company-list-container">
							<?php foreach ( $left_column['company_groups'] as $group ) : ?>
							<div class="company-list">
								<span><?php echo $group['title']; // @codingStandardsIgnoreLine ?></span>
								<ul>
									<?php foreach ( $group['companies'] as $company ) : ?>
									<li>
										<a href="<?php echo esc_url( $company['link'] ); ?>">
											<?php echo wp_get_attachment_image( $company['logo'], 'full' ); // @codingStandardsIgnoreLine ?>
										</a>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-locations">
		<div class="container">
			<h2><?php esc_html_e( 'Our Locations', 'standard-industries' ); ?></h2>
			<ul>
				<?php while ( have_rows( 'locations', 'option' ) ) : the_row(); ?>
				<li>
					<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); // @codingStandardsIgnoreLine ?>
					<div class="text-container">
						<span><?php the_sub_field( 'title' ); ?></span>
						<p><?php the_sub_field( 'street' ); ?></p>
						<p><?php the_sub_field( 'city' ); ?></p>
						<p><a href="tel:<?php the_sub_field( 'phone' ); ?>"><?php the_sub_field( 'phone' ); ?></a></p>
						<p><a href="mailto:<?php the_sub_field( 'e-mail' ); ?>"><?php the_sub_field( 'e-mail' ); ?></a></p>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>
</div>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
	jQuery('div[role="form"]').hide();
	jQuery('.thank-you').fadeIn();
}, false );
</script>

<?php
endwhile;

get_footer();
