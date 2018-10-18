<?php
/**
 * Project row module template.
 *
 * @package standard-industries
 */

$large_image_id = get_sub_field( 'large_image' );
?>
<section class="module grid <?php the_sub_field( 'background_color' ); ?>">
	<div class="container">
		<?php
		if ( get_sub_field( 'headline' )
		|| get_sub_field( 'description' ) ) :?>
		<div class="heading-container">

			<?php
			if ( get_sub_field( 'headline' ) ) {
				echo '<h2>' . esc_html( get_sub_field( 'headline' ) ) . '</h2>';
			}

			if ( get_sub_field( 'description' ) ) {
				the_sub_field( 'description' );
			}
			?>
		</div>
		<?php endif; ?>

		<div class="grid-row project">
		  <div class="cols">
			<div class="col image">
			  <div class="img-container">
				<?php echo wp_get_attachment_image( $large_image_id, 'full' ); ?>
			  </div>
			</div>
			<div class="col text">
			  <div class="text-box">
				<div class="text-box-copy">
				  <span class="<?php the_sub_field( 'heading_class' ); ?>" style="color: <?php the_sub_field( 'company_color' ); ?>"><?php the_sub_field( 'heading' ); ?></span>
				  <p><?php the_sub_field( 'text' ); ?></p>
				</div>
			  </div>
			</div>
		  </div>
		</div>

	</div>
</section>
