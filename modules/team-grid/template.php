<?php
/**
 * Team grid module template.
 *
 * @package standard-industries
 */

$image_id = get_sub_field( 'image' );

?>

<section class="module team-grid">
	<div class="container">
		<?php if ( have_rows( 'featured_members' ) ) : ?>
		<div class="team large">
			<ul>
				<?php while ( have_rows( 'featured_members' ) ) : the_row(); ?>
				<li class="bg-white">
					<?php if ( get_sub_field( 'picture' ) ) : ?>
					<img src="<?php the_sub_field( 'picture' ); ?>" alt="<?php the_sub_field( 'name' ); ?>" />
					<?php endif; ?>
					<div class="name-title">
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<span class="title"><?php the_sub_field( 'title' ); ?></span>
						<span><?php the_sub_field( 'organization' ); ?></span>
					</div>
					<div class="description closed">
						<span class="team-toggle"></span>
						<p><?php the_sub_field( 'description' ); ?></p>
					</div>
				</li>
				<?php endwhile ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
	<div class="hero-image-container">
		<div class="quote">
			<blockquote><?php the_sub_field( 'quote' ); ?></blockquote>
		</div>
		<div class="hero-image">
			<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
		</div>
	</div>
	<div class="container">
		<?php if ( have_rows( 'team_members' ) ) : ?>
		<div class="team small">
			<ul>
				<?php while ( have_rows( 'team_members' ) ) : the_row(); ?>
				<li class="bg-white">
					<div class="left">
						<img class="leg" src="<?php the_sub_field( 'picture' ); ?>" alt="<?php the_sub_field( 'name' ); ?>" />
					</div>
					<div class="name-title right closed">
						<h3><?php the_sub_field( 'name' ); ?></h3>
						<span class="title"><?php the_sub_field( 'title' ); ?>, <?php the_sub_field( 'organization' ); ?></span>
						<div class="description">
							<p><?php the_sub_field( 'description' ); ?></p>
						</div>
						<span class="team-toggle"></span>
					</div>
				</li>
				<?php endwhile ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
</section>
