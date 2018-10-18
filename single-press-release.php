<?php
/**
 * The template for displaying all single posts.
 *
 * @package standard-industries
 */

get_header();
?>

<?php
while ( have_posts() ) : the_post();
	?>

<div id="primary" class="press-release">

	<section class="press-post">
		<div class="container">
			<?php the_post_thumbnail( 'full' ); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</section>

	<section class="more-press-releases">
		<div class="container">
			<div class="heading-container">
				<h2><?php esc_html_e( 'More Press Releases', 'standard-industries' ); ?></h2>
			</div>
			<?php
			$more_press = new WP_Query( array(
				'post_type' 		=> 'press-release',
				'posts_per_page'	=> 6,
				'post__not_in' => array( $post->ID ),
			));

			if ( $more_press->have_posts() ) :
			?>

			<ul>

				<?php
				while ( $more_press->have_posts() ) :
					$more_press->the_post(); ?>

				<li>
					<span><?php the_time( 'F j, Y' ); ?></span>
					<a href="<?php the_permalink(); ?>">
						<p><?php the_title(); ?></p>
					</a>
				</li>

				<?php
				endwhile; // End of the loop.
				wp_reset_postdata(); // Restore original Post Data.
				?>

			</ul>

			<?php
			endif; ?>

		</div>
	</section>

</div>
<?php endwhile; ?>

	<!-- Gallery Modal -->
	<div class="article-gallery">
		<div class="overlay"></div>
		<div class="gallery-container">
			<div class="images" id="gallery"></div>
		</div>
	</div>

	<div class="thumbnail-container" style="display: none">
		<?php echo file_get_contents( get_template_directory() . '/img/icon-gallery.svg' ); // @codingStandardsIgnoreLine ?>
		<p><?php _e( 'Open Gallery', 'standard-industries' ); ?></p>
	</div>

<?php
get_footer();
