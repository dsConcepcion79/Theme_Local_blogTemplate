<?php
/**
 * Full bleed module template.
 *
 * @package standard-industries
 */

$image = get_sub_field( 'image' );
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
?>
<section class="module grid <?php the_sub_field( 'background_color' ); ?>">
	<div class="container">
		<div class="grid-row full-bleed <?php if ( get_sub_field( 'overlay' ) === 'Yes' ) { echo 'white '; } ?> <?php echo esc_attr( $orientation ); ?> <?php echo esc_attr( $overlay ); ?>">
			<div class="fb-img-container">
				<img src="<?php echo esc_url( $image['url'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			</div>
			<div class="caption-container">
				<div class="caption">
					<span><?php the_sub_field( 'headline' ); ?></span>
					<p><?php the_sub_field( 'text' ); ?></p>
					<?php if ( 'disable' !== $link_type ) : ?>
							<a data-section-title="<?php the_sub_field( 'headline' ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" class="link-red" title="<?php echo esc_attr( $button_text ); ?>">
									<?php echo esc_html( $button_text ); ?>
							</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
