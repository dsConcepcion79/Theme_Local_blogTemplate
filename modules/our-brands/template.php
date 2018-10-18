<?php
/**
 * Our Brands module template.
 *
 * @package standard-industries
 */

$brands_images = get_sub_field( 'brands_images' );

if ( $brands_images ) :
	?>

<section class="module our-brands <?php the_sub_field( 'background_color' ); ?>">
	<div class="container">
		<?php
		if ( get_sub_field( 'headline' ) ||
			get_sub_field( 'description' ) ) : ?>

			<div class="heading-container">
				<h2><?php the_sub_field( 'headline' ); ?></h2>
				<?php the_sub_field( 'description' ); ?>
			</div>

		<?php
		endif; ?>

		<ul class="brand-list">

		<?php foreach ( $brands_images as $image ) : ?>

			<li>
				<?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
			</li>

		<?php
		endforeach; ?>

		</ul>
  </div>
</section>

<?php
endif; ?>
