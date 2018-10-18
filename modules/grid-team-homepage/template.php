<?php
/**
 * Full bleed module template.
 *
 * @package standard-industries
 */

$orientation = get_sub_field( 'orientation' ) === 'Left' ? 'text-left' : 'text-right';
$overlay = get_sub_field( 'overlay' ) === 'Yes' ? 'overlay' : '';
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

$team_images = get_sub_field( 'team_images' );
shuffle( $team_images );
$visible_images = array_slice( $team_images, 0, 4 );
$invisible_images = array_slice( $team_images, 4 )
?>
<section class="module team-homepage">
	<div class="container">
		<div class="section-heading">
			<h3><?php the_sub_field( 'headline' ); ?></h3>
			<p><?php the_sub_field( 'text' ); ?></p>
			<?php if ( 'disable' !== $link_type ) : ?>
				<a data-section-title="<?php the_sub_field( 'headline' ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" class="link-red" title="<?php echo esc_attr( $button_text ); ?>">
					<?php echo esc_html( $button_text ); ?>
				</a>
			<?php endif; ?>
		</div>
		<div class="team-grid-container">
			<div class="box left">
				<div class="box-inner rec inner-left box-img">
					<?php echo wp_get_attachment_image( $visible_images[0]['ID'], 'full' ); ?>
				</div>
				<div class="box-inner square inner-right">
					<div class="top box-img">
						<?php echo wp_get_attachment_image( $visible_images[1]['ID'], 'full' ); ?>
					</div>
					<div class="bottom box-img">
						<?php echo wp_get_attachment_image( $visible_images[2]['ID'], 'full' ); ?>
					</div>
				</div>
			</div>
			<div class="box right square box-img">
				<?php echo wp_get_attachment_image( $visible_images[3]['ID'], 'full' ); ?>
			</div>

			<div id="invisible-images" style="display: none;">
				<?php
				foreach ( $invisible_images as $image ) {
					echo wp_get_attachment_image( $image['ID'], 'full' );
				}
				?>
			</div>
		</div>
	</div>
</section>
