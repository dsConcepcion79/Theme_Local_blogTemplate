<?php
/**
 * The template for displaying all single posts. 


mouse too much disturbing, not working properly as remotely

please fix the category fromcode or stack overflow, or I am trying again

gutenburg is fixed, are you sure? yes it looks good. 
 *
 * @package standard-industries
 */

get_header();
?>

<div id="primary" class="article">
	<?php
	while ( have_posts() ) : the_post();
		$categories = get_the_category();
		$prev_post = get_previous_post(); // @codingStandardsIgnoreLine

		if ( empty( $prev_post ) ) {
			$prev_post = get_next_post(); // @codingStandardsIgnoreLine
		}

		$prev_post_categories = get_the_category( $prev_post->ID );


		var_dump($categories);
	?>

		<section class="article-hero">
			<div class="hero-image bg-parallax" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( $post->ID, null ) ); ?>)"></div>
		</section>
		<section class="article-content">
			<div class="container">
				<div class="story-intro">
					<span class="category" style="color: <?php // the_field( 'color', $categories[0] ); ?>;"><?php 	// echo esc_html( $categories[0]->cat_name ); ?></span>
					<h1><?php the_title(); 
$id = get_the_ID();
$categories = get_the_category($id);
echo $categories;

					?></h1>
					<?php the_excerpt(); ?>
				</div>

				<hr>
				<div class="article-text">
					<div class="share">
						<p>Share</p>
						<ul>
							<li class="facebook"><a class="social-share" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-facebook.svg' ); // @codingStandardsIgnoreLine ?></a></li>
							<li class="twitter"><a class="social-share" target="_blank" href="https://twitter.com/home?status=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-twitter.svg' ); // @codingStandardsIgnoreLine ?></a></li>
							<li class="linkedin"><a class="social-share" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>&summary=&source="><?php echo file_get_contents( get_template_directory() . '/img/icon-linkedin.svg' ); // @codingStandardsIgnoreLine ?></a></li>
							<li class="mail"><a target="_blank" href="mailto:?&subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-mail.svg' ); // @codingStandardsIgnoreLine ?></a></li>
						</ul>
					</div>

					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<section class="lead-story read-more">
			<div class="lead-story-left">
				<div class="img-container">
					<?php echo get_the_post_thumbnail( $prev_post ); ?>
				</div>
			</div>
			<div class="lead-story-right" style="background-color: <?php the_field( 'color', $prev_post_categories[0] ); ?>;">
				<div class="lead-story-right-container">
					<div class="lead-story-text">
						<span><?php esc_html_e( 'Read Next', 'standard-industries' ); ?></span>
						<h1><?php echo esc_html( $prev_post->post_title ); ?></h1>
						<p class="read-more">Read More</p>
						<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo esc_html( $prev_post->post_title ); ?></a>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; ?>

	<!-- Gallery Modal -->
	<div class="article-gallery">
		<div class="overlay"></div>
		<div class="gallery-container">
			<div class="images" id="gallery"></div>
		</div>
	</div>

	<div class="thumbnail-container" style="display: none;">
		<?php echo file_get_contents( get_template_directory() . '/img/icon-gallery.svg' ); // @codingStandardsIgnoreLine ?>
		<p><?php _e( 'Open Gallery', 'standard-industries' ); ?></p>
	</div>

	<div class="play-icon-container" style="display: none;">
		<?php echo file_get_contents( get_template_directory() . '/img/icon-play.svg' ); // @codingStandardsIgnoreLine ?>
	</div>
</div>

<?php
get_footer();
