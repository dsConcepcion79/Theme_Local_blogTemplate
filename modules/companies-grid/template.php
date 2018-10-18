<?php
/**
 * Companies Grid module template.
 *
 * @package standard-industries
 */

?>

<section class="module company-grid">
	<div class="container">
		<ul>
		<?php while ( have_rows( 'companies' ) ) : the_row(); ?>
			<li>
				<div class="img-container">
					<img src="<?php the_sub_field( 'image' ); ?>" alt="<?php the_sub_field( 'company_name' ); ?>" />
				</div>
				<div class="company">
					<div class="logo-container" style="background-color: <?php the_sub_field( 'company_color' ); ?>">
						<img src="<?php the_sub_field( 'logo' ); ?>" alt="<?php the_sub_field( 'company_name' ); ?>" />
					</div>
					<div class="company-info">
						<p><?php the_sub_field( 'description' ); ?></p>
						<a data-section-title="OurCompanies" href="<?php the_sub_field( 'link' ); ?>" class="link-red"><?php esc_html_e( 'learn more', 'standard-industries' ); ?></a>
					</div>
				</div>
			</li>
		<?php endwhile; ?>
		</ul>
	</div>
</section>
