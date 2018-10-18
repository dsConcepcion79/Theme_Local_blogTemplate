<?php
/**
 * Lead Story module template.
 *
 * @package standard-industries
 */

$image_id = get_sub_field( 'image' );
$button_data = get_sub_field( 'cta_button_link' );
$link_type = $button_data['button_type'];
if ( 'internal' === $link_type ) {
	$button_link = $button_data['button_internal_url'];
	$button_link_target = '';
} elseif ( 'external' === $link_type ) {
	$button_link = $button_data['button_external_url'];
	$button_link_target = '_blank';
}

$background_image = wp_get_attachment_image_src( $image_id, 'full' );
?>

<section class="lead-story">
	<div class="lead-story-left">
		<div class="img-container">
			<img src="<?php echo esc_attr( $background_image[0] ) ?>" alt="Lead Story Image"/>
		</div>
	</div>
	<div class="lead-story-right">
		<div class="lead-story-right-container">
			<div class="lead-story-text">
				<?php if ( strlen( get_sub_field( 'tag_line' ) ) > 1 ) : ?>
					<span><?php the_sub_field( 'tag_line' ); ?></span>
				<?php endif; ?>
				<h1>
					<?php the_sub_field( 'heading' ); ?>
				</h1>
				<p class="read-more">
					<?php the_sub_field( 'read-more' ); ?>
				</p>
				<a data-section-title="StoryMain" target="<?php echo esc_attr( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" title="<?php the_sub_field( 'read-more' ); ?>"></a>
			</div>
		</div>
	</div>
</section>
