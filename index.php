<?php
/**
 *
 * Template Name: Our Stories
 *
 * @package standard-industries
 */

$modules = Rain\Modules::get_instance();

$should_display_posts = true;

get_header(); ?>

<div id="primary">
	<div class="our-stories">
		<?php
		if ( $wp_query->query_vars['paged'] <= 1 ) :
			$sticky = get_option( 'sticky_posts' );
			$sticky_query = new WP_Query( 'p=' . $sticky[0] );

			if ( $sticky_query->have_posts() ) : while ( $sticky_query->have_posts() ) : $sticky_query->the_post();
					$categories = get_the_terms( get_the_ID(), 'category' );
			?>
				<section class="module top-story-container">
					<div class="container">
					<div class="top-story">
						<div class="top-story-left">
						<div class="img-container">
							<?php the_post_thumbnail( 'full' ); ?>
						</div>
						</div>
						<div class="top-story-right">
							<div class="top-story-right-container">
								<div class="top-story-text">
									<span><?php echo esc_html( $categories[0]->cat_name ); ?></span>
									<h1><?php the_title(); ?></h1>
									<p><?php esc_html_e( 'Read the Story', 'standard-industries' ); ?></p>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							</div>
						</div>
					</div>
					</div>
				</section>
				<?php endwhile;
			endif;
		endif; ?>

		<section class="article-type columns">
			<div class="container">
				<div class="article-row">
				<?php
				$section_count = 0;
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						$section_count++;
						$categories = get_the_category();
					?>
					<div class="col">
					<div class="img-container">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
					<div class="article-copy">
						<span><?php echo esc_html( $categories[0]->cat_name ); ?></span>
						<p><?php the_title(); ?></p>
					</div>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<?php

					if ( $wp_query->current_post + 1 === $wp_query->post_count && $wp_query->post_count > 0 ) {
						$should_display_posts = false;
					}
					if ( 3 === $section_count ) {
						echo '</div><div class="article-row">';
					}

					if ( 6 === $section_count ) {
						break;
					}

					endwhile;
				endif;
				?>
			</div>
			</div>
		</section>

		<?php if ( $should_display_posts ) : ?>
		<section class="article-type tertiary">
			<div class="container fade-container">
			<div class="article-row">
				<?php
				$count = 0;
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						$count++;
						$categories = get_the_category();
					?>
					<div class="col">
						<div class="img-container">
							<?php the_post_thumbnail( 'full' ); ?>
						</div>
						<div class="article-copy">
							<div class="copy-container">
								<span class="tagline"><?php echo esc_html( $categories[0]->cat_name ); ?></span>
								<p><?php the_title(); ?></p>
							</div>
						</div>

						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<?php
					if ( 2 === $count && more_posts() ) {
						$count = 0;
						echo '</div><div class="article-row">';
					}
					?>
					<?php endwhile;
				endif; ?>
			</div>
			</div>
		</section>
		<?php endif; ?>

		<?php $modules->render_modules( get_option( 'page_for_posts' ) ); ?>

	</div>
</div>

<?php
get_footer();
