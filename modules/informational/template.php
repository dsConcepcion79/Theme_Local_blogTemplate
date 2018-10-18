<?php
/**
 * Informational module template.
 *
 * @package standard-industries
 */

?>
<section class="module grid">
	<div class="container">
		<div class="grid-row informational">
			<div class="cols">
				<div class="col text">
					<div class="text-box">
						<div class="text-box-copy">
							<span><?php the_sub_field( 'headline' ); ?></span>
							<p><?php the_sub_field( 'text' ); ?></p>
						</div>
					</div>
				</div>
				<div class="col image">
					<div class="top">
						<div class="img-container">
							<?php echo wp_get_attachment_image( get_sub_field( 'top_image' ), 'full' ); ?>
						</div>
					</div>
					<div class="bottom">
						<div class="img-container">
							<?php echo wp_get_attachment_image( get_sub_field( 'bottom_image' ), 'full' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
