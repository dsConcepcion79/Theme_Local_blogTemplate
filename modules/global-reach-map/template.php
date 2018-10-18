<?php
/**
 * Global Reach Map Module template.
 *
 * @package standard-industries
 */

?>
<section class="global-reach-map">
	<div class="container">
		<div class="map-container">
			<div class="map-img-container">
				<img class="bg-map" src="<?php echo esc_url( get_template_directory_uri() ) . '/img/global-reach-bg-map.png' ?>" alt="<?php esc_attr_e( 'Global Reach Map', 'standard-industries' ); ?>" />
			</div>
			<div class="legend">
				<ul>
					<li class="global-reach-gaf">GAF <?php esc_html_e( 'Manufacturing Facilities', 'standard-industries' ); ?></li>
					<li class="global-reach-bmi">BMI <?php esc_html_e( 'Manufacturing Facilities', 'standard-industries' ); ?></li>
					<li class="global-reach-sgi">SGI <?php esc_html_e( 'Manufacturing Facilities', 'standard-industries' ); ?></li>
					<li class="global-reach-siplast">Siplast <?php esc_html_e( 'Manufacturing Facilities', 'standard-industries' ); ?></li>
					<li class="global-reach-products-sold"><?php esc_html_e( 'Where products are sold', 'standard-industries' ); ?></li>
				</ul>
			</div>
		</div>
		<div class="stats">
			<ul>
				<?php while ( have_rows( 'facts' ) ) : the_row(); ?>
				<li>
					<h2 class="count" data-number="<?php the_sub_field( 'title' ); ?>">0</h2>
					<p><?php the_sub_field( 'text' ); ?></p>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</section>
