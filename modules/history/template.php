<?php
/**
 * History module template.
 *
 * @package standard-industries
 */

?>

<section class="history-container">
	<div class="timeline-container">
		<div class="timeline">
			<?php if ( have_rows( 'timeline_items' ) ) : ?>
			<div class="timeline-item-container">
				<?php while ( have_rows( 'timeline_items' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'is_separator' ) ) : ?>
						</div>
						<div class="timeline-break"></div>
						<div class="timeline-item-container">
					<?php else : ?>
					<div class="timeline-item">
						<span><?php the_sub_field( 'title' ); ?></span>
						<div class="timeline-item-content">
							<?php if ( get_sub_field( 'image' ) ) : ?>
								<div class="img-container">
								<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); ?>
								</div>
							<?php endif; ?>
							<div class="text-container">
								<p><?php the_sub_field( 'text' ); ?></p>
							</div>
						</div>
					</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
