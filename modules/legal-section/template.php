<?php
/**
 * Legal section module template.
 *
 * @package standard-industries
 */

?>

<section class="legal-container">
	<div class="container white">
		<h1><?php the_sub_field( 'headline' ); ?></h1>
		<?php if ( get_sub_field( 'effective_date_text' ) ) : ?>
			<span><?php the_sub_field( 'effective_date_text' ); ?></span>
		<?php endif; ?>
		<div class="legal-section">
			<?php the_sub_field( 'content' ); ?>
		</div>
	</div>
</section>
