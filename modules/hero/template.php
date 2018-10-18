<?php
/**
 * Hero module template.
 *
 * @package standard-industries
 */

$hero_type = ( get_sub_field( 'hero_type' ) ) ? get_sub_field( 'hero_type' ) : 'default';
$image_id = get_sub_field( 'image' );
$button_data = get_sub_field( 'cta_button_link' );
$link_type = $button_data['button_type'];
$button_text = $button_data['button_text'];
$button_tagline = $button_data['button_tagline'];
if ( 'internal' === $link_type ) {
	$button_link = $button_data['button_internal_url'];
	$button_link_target = '';
} elseif ( 'external' === $link_type ) {
	$button_link = $button_data['button_external_url'];
	$button_link_target = '_blank';
}

if ( 'default' === $hero_type ) : ?>

	<section class="module hero">
		<div class="container <?php echo esc_attr( empty( $image_id ) ? 'no-image' : '' );?>">
			<div class="hero-image">
				<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
			</div>
			<div class="hero-text">
				<h1><?php the_sub_field( 'heading' ); ?></h1>
				<p><?php the_sub_field( 'text' ); ?></p>
			</div>
		</div>
	</section>

<?php elseif ( 'company' === $hero_type ) :

	$logo_image_id = get_sub_field( 'logo_image' );
	$company_color = get_sub_field( 'company_color' );
	?>

	<section class="module company-hero <?php if ( ! get_sub_field( 'company_facts' ) ) : ?> no-stats <?php endif; ?>">
		<div class="container">
			<div class="img-container">
				<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
			</div>
			<div class="company-info-container">
				<div class="company">
					<div class="logo-heading-container">
						<div class="logo-container" style="background-color: <?php echo esc_attr( $company_color ); ?>">
							<div class="box">
							<?php echo wp_get_attachment_image( $logo_image_id, 'full' ); ?>
							</div>
						</div>
						<p><?php the_sub_field( 'heading' ); ?></p>
					</div>
					<div class="company-name">
						<p><?php the_sub_field( 'text' ); ?></p>
						<?php if ( 'disable' !== $link_type ) : ?>
						<a data-section-title="Hero" target="<?php echo esc_attr( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $button_text ); ?>">
							<?php echo esc_attr( $button_text ); ?>
						</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="company-info">
					<div class="blurb">
						<h3 style="color: <?php the_sub_field( 'company_color' ); ?>"><?php the_sub_field( 'company_info_heading' ); ?></h3>
						<p><?php the_sub_field( 'company_info_text' ); ?></p>
						<?php if ( 'disable' !== $link_type ) : ?>
						<a data-section-title="Hero" target="<?php echo esc_attr( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $button_text ); ?>">
							<?php echo esc_attr( $button_text ); ?>
						</a>
						<?php endif; ?>
					</div>

					<?php if ( have_rows( 'company_facts' ) ) : ?>
					<div class="company-facts">
						<ul>

						<?php while ( have_rows( 'company_facts' ) ) : the_row(); ?>
							<li>
								<p style="color: <?php echo esc_attr( $company_color ); ?>"><?php the_sub_field( 'value' ); ?></p>
								<span><?php the_sub_field( 'label' ); ?></span>
							</li>
						<?php
						endwhile; ?>

						</ul>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php elseif ( 'companies' === $hero_type ) : ?>

	<section class="featured-content-logos">
		<div class="container">

			<div class="header-image">
				<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
			</div>

			<div class="company-info">

				<div class="building-future">
				<h2><?php the_sub_field( 'heading' ); ?></h2>
				<p><?php the_sub_field( 'text' ); ?></p>
				</div>
			</div>
			<div class="logos">

				<div class="left section-heading">
						<h3><?php the_sub_field( 'company_info_heading' ); ?></h3>
						<p><?php the_sub_field( 'company_info_text' ); ?></p>
						<?php if ( 'disable' !== $link_type ) : ?>
								<a data-section-title="<?php the_sub_field( 'company_info_heading' ); ?>" target="<?php echo esc_attr( $button_link_target ); ?>" href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $button_text ); ?>">
										<?php echo esc_attr( $button_text ); ?>
								</a>
						<?php endif; ?>
				</div>

				<?php
				$companies_logos = get_sub_field( 'companies_logos' );
				if ( $companies_logos ) : ?>

						<div class="right">
								<ul>

										<?php foreach ( $companies_logos as $logo ) : ?>

												<div class="company" style="background-color: <?php echo esc_attr( $logo['company_color'] ); ?>">
														<a data-section-title="<?php the_sub_field( 'company_info_heading' ); ?>" href="<?php echo esc_url( $logo['link'] ); ?>"><?php echo wp_get_attachment_image( $logo['logo_image'], 'full' ); ?></a>
												</div>

										<?php
										endforeach; ?>

								</ul>
						</div>

				<?php endif; ?>

			</div>
		</div>
	</section>

<?php endif; ?>
