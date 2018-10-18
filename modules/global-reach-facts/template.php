<?php
/**
 * Facts module template.
 *
 * @package standard-industries
 */

$headline_button_data = get_sub_field( 'headline_cta_button_link' );
$headline_link_type = $headline_button_data['button_type'];
$headline_button_text = $headline_button_data['button_text'];

if ( 'internal' === $headline_button_data['button_type'] ) {
	$headline_button_link = $headline_button_data['button_internal_url'];
	$headline_button_target = '';
} elseif ( 'external' === $headline_button_data['button_type'] ) {
	$headline_button_link = $headline_button_data['button_external_url'];
	$headline_button_target = '_blank';
}
?>

<section class="global-reach-facts">
  <div class="container">

	<?php if ( get_sub_field( 'headline' ) || 'disable' !== $headline_link_type ) : ?>
	<div class="header-text section-heading">

		<?php if ( get_sub_field( 'headline' ) ) : ?>
			<h3><?php the_sub_field( 'headline' ); ?></h3>
		<?php endif; ?>

		<?php if ( 'disable' !== $headline_link_type ) : ?>
		<a data-section-title="<?php the_sub_field( 'headline' ); ?>" target="<?php echo esc_attr( $headline_button_target ); ?>" href="<?php echo esc_url( $headline_button_link ); ?>" title="<?php echo esc_attr( $headline_button_text ); ?>">
			<?php echo esc_html( $headline_button_text ); ?>
		</a>
		<?php endif; ?>

	</div>
	<?php endif; ?>

	<?php
	if ( have_rows( 'facts' ) ) : ?>

	<ul class="facts-slider">

		<?php
		$i = 1;
		while ( have_rows( 'facts' ) ) : the_row();
			?>

		<li class="<?php echo esc_attr( ( 1 === $i ) ? 'active' : '' ); ?>">
			<div class="slide-container">
				<span class="slide-count"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
				<p class="slide-number"><?php the_sub_field( 'value' ); ?></p>
				<p class="slide-fact"><?php the_sub_field( 'fact' ); ?></p>
				<p class="slide-text" style="<?php echo esc_attr( ( 1 === $i ) ? 'display: block;' : '' ); ?>"><?php the_sub_field( 'description' ); ?></p>
			</div>
		</li>

			<?php
			$i++;
		endwhile; ?>

	</ul>

	<?php
	endif; ?>

  </div>
</section>
