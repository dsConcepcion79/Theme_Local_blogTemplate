<?php
/**
 * Large image row module template.
 *
 * @package standard-industries
 */

$large_image = get_sub_field( 'large_image' );
$small_image = get_sub_field( 'small_image' );
$orientation = get_sub_field( 'orientation' ) === 'Right' ? 'image-right' : '';
?>
<section class="module grid">
	<div class="container">
		<div class="grid-row large-image <?php echo esc_attr( $orientation ); ?>">
			<div class="cols">
			<div class="col large">
				<div class="img-container">
				<img src="<?php echo esc_url( $large_image['url'] ); ?>" title="<?php echo esc_attr( $large_image['title'] ); ?>" alt="<?php echo esc_attr( $large_image['alt'] ); ?>" />
				</div>
			</div>
			<div class="col small">
				<div class="top">
				<div class="img-container">
					<img src="<?php echo esc_url( $small_image['url'] ); ?>" title="<?php echo esc_attr( $small_image['title'] ); ?>" alt="<?php echo esc_attr( $small_image['alt'] ); ?>" />
				</div>
				</div>
				<div class="bottom">
				<div class="text-box">
					<div class="text-box-copy">
					<span style="color: <?php the_sub_field( 'color' ) ?>;"><?php the_sub_field( 'heading' ); ?></span>
					<p><?php the_sub_field( 'text' ); ?></p>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
