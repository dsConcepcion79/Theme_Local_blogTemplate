<?php
/**
 * Vertical image callout template.
 *
 * @package standard-industries
 */

$first_column_size = get_sub_field( 'first_column_size' );
$other_column_size = ( 'small' === $first_column_size ) ? 'large' : 'small' ;

if ( have_rows( 'columns' ) ) :
?>
<section class="module grid">
	<div class="container">
		<div class="grid-row vertical-image-callout">
			<div class="cols">
			<?php
			$i = 1;
			while ( have_rows( 'columns' ) ) : the_row();
				$column_type = get_sub_field( 'column_type' );
				$column_image_id = get_sub_field( 'column_image' );

				if ( 'default' === $column_type || 'wcta' === $column_type ) {
					if ( 1 === $i ) {
						$column_class  = 'col ' . $first_column_size;
					} else {
						$column_class  = 'col ' . $other_column_size;
					}
				} elseif ( 'image' === $column_type || 'text' === $column_type ) {
					$column_class  = 'col ' . $column_type;
				}
				?>

				<div class="<?php echo esc_attr( $column_class ); ?>">

					<?php
					if ( 'default' === $column_type ) :
						?>

						<div class="top">
							<div class="img-container">
								<?php echo wp_get_attachment_image( $column_image_id, 'full' ); ?>
							</div>
						</div>
						<div class="bottom">
							<div class="text-box">
								<div class="text-box-copy">
								<span style="color: <?php the_sub_field( 'color' ); ?>"><?php the_sub_field( 'column_headline' ); ?></span>
								<p><?php the_sub_field( 'column_text' ); ?></p>
								</div>
							</div>
						</div>

					<?php
					elseif ( 'wcta' === $column_type || 'text' === $column_type ) :

						if ( 'wcta' === $column_type ) : ?>

							<div class="top has-caption">
								<div class="img-container">
									<?php echo wp_get_attachment_image( $column_image_id, 'full' ); ?>
								</div>
								<?php if ( get_sub_field( 'column_headline' ) || get_sub_field( 'column_text' ) ) : ?>
								<div class="caption">
									<span class="tagline"><?php the_sub_field( 'column_headline' ); ?></span>
									<p><?php the_sub_field( 'column_text' ); ?></p>
								</div>
								<?php endif; ?>
							</div>

						<?php
						elseif ( 'text' === $column_type ) :
							$column_headline = get_sub_field( 'column_headline' );
							?>

							<?php
							if ( get_sub_field( 'cta_button_links' ) ) {
								echo '<div class="top">';
							} ?>

								<div class="text-box">
									<div class="text-box-copy">
										<span style="color: <?php the_sub_field( 'color' ); ?>"><?php the_sub_field( 'column_headline' ); ?></span>
										<p><?php the_sub_field( 'column_text' ); ?></p>
									</div>
								</div>
							<?php
							if ( get_sub_field( 'cta_button_links' ) ) {
								echo '</div>';
							} ?>

						<?php
						endif; ?>


						<?php
						if ( have_rows( 'cta_button_links' ) ) : ?>

							<div class="bottom">

								<?php
								$i = 1;
								while ( have_rows( 'cta_button_links' ) ) : the_row();
									$cta_or_image = get_sub_field( 'cta_or_image' );
									$cta_class = ( 1 === $i ) ? 'left' : 'right';
									$cta_class = $cta_class . ' ' . $cta_or_image;
									?>

									<div class="<?php echo esc_attr( $cta_class ); ?>">
									<?php
									if ( 'cta' === $cta_or_image && 'disable' !== $link_type ) :
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
										$background_id = get_sub_field( 'background_image' );
										?>

										<?php echo wp_get_attachment_image( $background_id, 'full' ); ?>
										<div class="cta-info">
											<p class="title"><?php echo ( $button_text ); // @codingStandardsIgnoreLine ?></p>
											<p class="link link-red">Explore</p>
										</div>
										<a data-section-title="<?php echo esc_attr( $column_headline ); ?>" target="<?php echo esc_url( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $button_text ); ?>"><?php echo esc_attr( $button_text ); ?></a>

									<?php elseif ( 'image' === $cta_or_image ) :

										$small_image_id = get_sub_field( 'small_image' ); ?>

										<div class="img-container">
											<?php echo wp_get_attachment_image( $small_image_id, 'full' ); ?>
										</div>

									<?php
									endif; ?>
									</div>

									<?php
									$i++;
								endwhile; ?>

							</div>

						<?php
						endif; ?>

					<?php
					elseif ( 'image' === $column_type ) : ?>

						<div class="img-container">
							<?php echo wp_get_attachment_image( $column_image_id, 'full' ); ?>
						</div>

					<?php
					endif; ?>

				</div>

				<?php
				$i++;
			endwhile; ?>

			</div>
		</div>
	</div>
</section>
<?php
endif;

