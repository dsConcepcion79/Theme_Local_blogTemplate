<?php
/**
 * Work Links module template.
 *
 * @package standard-industries
 */

?>

<section class="module work-links">
	<div class="container">
		<div class="left">
			<h3>Work With Us</h3>
			<p>To join Standard Industries, search our open jobs and apply on our companies’ sites.</p>
		</div>
		<div class="right">
			<div class="si-jobs">
				<div class="si-logo color-logo">
					<?php echo file_get_contents( get_template_directory() . '/img/si-logo.svg' ); // @codingStandardsIgnoreLine ?>
				</div>
				<?php if ( get_sub_field( 'si_jobs_cta' ) ) : ?>
				<div class="link-container">
					<a href="<?php the_sub_field( 'si_jobs_url' ); ?>" class="link-red" target="_blank"><?php the_sub_field( 'si_jobs_cta' ); ?></a>
				</div>
				<?php endif; ?>
			</div>
			<?php if ( have_rows( 'work_links' ) ) : ?>
			<ul>

				<?php
				while ( have_rows( 'work_links' ) ) : the_row();
					$logo_image_id = get_sub_field( 'logo_image' );
					$button_data = get_sub_field( 'cta_button_link' );
					$link_type = $button_data['button_type'];
					$button_text = $button_data['button_text'];
					$button_tagline = $button_data['button_tagline'];
					if ( 'internal' === $link_type ) {
						$button_link = $button_data['button_internal_url'];
						$button_link_target = '';
					} elseif ( 'external' === $link_type ) {
						$button_link = $button_data['button_external_url'];
						$button_link_target = '_blank';
					}
					?>
					<li>
						<div class="logo-container" style="background-color: <?php the_sub_field( 'company_color' ); ?>"> <!-- Each item will have a specified bg color. -->
							<?php echo wp_get_attachment_image( $logo_image_id, 'small' ); ?>
						</div>
						<div class="link-container">
							<a href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $button_text ); ?>"
							   class="link-red" target="<?php echo esc_attr( $button_link_target ); ?>"><?php echo esc_attr( $button_text ); ?></a>
						</div>
					</li>

				<?php
				endwhile; ?>

			</ul>
			<?php
				endif; ?>

		</div>
	</div>
</section>
