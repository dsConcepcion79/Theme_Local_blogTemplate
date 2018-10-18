<?php
/**
 * Featured Stories module template.
 *
 * @package standard-industries
 */

$headline_button_data = get_sub_field( 'headline_cta_button_link' );
$headline_link_type = $headline_button_data['button_type'];
$headline_button_text = $headline_button_data['button_text'];

if ( 'internal' === $headline_link_type ) {
	$headline_button_link = $headline_button_data['button_internal_url'];
	$headline_button_target = '';
} elseif ( 'external' === $headline_link_type ) {
	$headline_button_link = $headline_button_data['button_external_url'];
	$headline_button_target = '_blank';
}

$cta_button_links = get_sub_field( 'cta_button_links' );
?>
<section class="featured-story">
	<div class="container">
		<?php if ( get_sub_field( 'headline' ) || 'disable' !== $headline_link_type ) : ?>
		<div class="heading-container">

			<?php if ( get_sub_field( 'headline' ) ) : ?>
				<h2><?php the_sub_field( 'headline' ); ?></h2>
			<?php endif; ?>

		</div>
		<?php endif; ?>
		<?php
		$featured_stories = get_sub_field( 'featured_stories' );

		$stories = new WP_Query( array(
			'post_type' => 'post',
			'post__in'	=> $featured_stories,
			'ignore_sticky_posts' => true,
			'orderby' => 'post__in',
		));

		if ( is_array( $featured_stories ) && $stories->have_posts() ) :
			?>

		<div class="article-row">

			<?php
			$i = 1;
			while ( $stories->have_posts() ) :
				$stories->the_post();

				$column_class = ' large';

				?>

			<div class="col<?php echo esc_attr( $column_class ); ?>">

					<div class="img-container">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'full' );
						} ?>
					</div>

					<div class="article-copy">

						<?php
						$terms = get_the_terms( get_the_ID(), 'category' );
						if ( $terms && ! is_wp_error( $terms ) ) :

							$categories = array();

							foreach ( $terms as $term ) {
								$categories[] = $term->name;
							}

						endif;

						if ( ! empty( $categories ) ) : ?>
							<span class="tagline"><?php echo esc_html( implode( ', ', array_slice( $categories, 0, 1 ) ) ); ?></span>
						<?php
						endif; ?>

						<p><?php the_title(); ?></p>
						<a data-section-title="Story<?php echo esc_attr( $i ); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>

			</div>

				<?php
				$i++;
			endwhile; // End of the loop.
			wp_reset_postdata(); // Restore original Post Data.
			?>

		</div>

		<?php
		endif; ?>

	</div>
</section>
