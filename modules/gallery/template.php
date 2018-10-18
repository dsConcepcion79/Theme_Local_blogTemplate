<?php
/**
 * Gallery module template.
 *
 * @package standard-industries
 */

$gallery_images = get_sub_field( 'gallery_images' );

if ( $gallery_images ) :
	?>

<div class="module company-gallery">
  <ul class="images">

	<?php foreach ( $gallery_images as $image ) : ?>

		<li>
			<?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
		</li>

	<?php
	endforeach; ?>

  </ul>
</div>

<?php
endif; ?>
