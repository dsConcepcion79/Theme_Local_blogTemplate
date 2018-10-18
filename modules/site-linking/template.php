<?php
/**
 * Site linking module template.
 *
 * @package standard-industries
 */

?>
<section class="module site-linking">
	<div class="container">
	<div class="header section-heading">
		<h3><?php esc_html_e( 'More About Us', 'standard-industries' ); ?></h3>
	</div>
	<ul class="list">
	<?php while ( have_rows( 'links' ) ) :
		the_row();

		if ( get_sub_field( 'button_type' ) === 'internal' ) {
			$link_url = get_sub_field( 'button_internal_url' );
			$link_target = '';
		} else {
			$link_url = get_sub_field( 'button_external_url' );
			$link_target = '_blank';
		}
		$image_id = get_sub_field( 'image' );
		$background_image = wp_get_attachment_image_src( $image_id, 'full' );
	?>
		<li style="background-color: <?php the_sub_field( 'color' ); ?>;">
			<img src="<?php echo esc_attr( $background_image[0] ) ?>"/>
			<div class="text-container">
				<div class="text">
					<h3><?php the_sub_field( 'button_text' ); ?></h3>
					<p class="link-red"><?php esc_html_e( 'EXPLORE', 'standard-industries' ); ?></p>
				</div>
				<a data-section-title="MoreAboutUs" target="<?php echo esc_attr( $link_target ); ?>" href="<?php echo esc_url( $link_url ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
			</div>
		</li>
	<?php endwhile; ?>
	</ul>
	</div>
</section>
