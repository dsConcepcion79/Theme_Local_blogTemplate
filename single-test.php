<?php
/**
 * The template for displaying all single posts.\



Not working properly team viewer, it's taking right click even I do not press it.

I can't see save,. w h shortcut ctrl+s not working in your edtor
please save the file is saved

There is issue with single.php file, but my pc was showing good. :) 
Howev

 *
 * @package standard-industries
 */

get_header();
?>

<div id="primary" class="article">
	<?php
	while ( have_posts() ) : the_post();
	?>
		<section class="article-hero">
			<div class="hero-image bg-parallax" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( $post->ID, null ) ); ?>)"></div>
		</section>
		<section class="article-content">
			<div class="container">
				<div class="story-intro">
					Test
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>

			</div>
		</section>


	<?php endwhile; ?>

</div>

<?php
get_footer();
