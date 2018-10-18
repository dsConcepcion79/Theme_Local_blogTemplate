<?php
/**
 * Work Callout module template.
 *
 * @package standard-industries
 */

?>
<section class="module work-callout">
	<div class="container">
		<div class="img-text-container" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( get_sub_field( 'background_image' ), 'full' ) )?>);">
			<div class="text-container">
				<h2><?php the_sub_field( 'headline' ); ?></h2>
				<?php the_sub_field( 'description' ); ?>

				<?php
				if ( have_rows( 'work_callouts' ) ) : ?>
				<ul class="links-container">

					<?php
					while ( have_rows( 'work_callouts' ) ) : the_row();
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
							<a data-section-title="WorkCallout" target="<?php echo esc_attr( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $button_text ); ?>">
								<?php echo esc_attr( $button_text ); ?>
							</a>
						</li>

					<?php
					endwhile; ?>

				</ul>
				<?php
				endif; ?>
			</div>
		</div>
	</div>
</section>
