<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Template Name: News Center
 *
 * @package standard-industries
 */

$left_column = get_field( 'media_page_left_column', 'option' );
$right_column = get_field( 'media_page_right_column', 'option' );

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="media-hero">
				<div class="container">
					<div class="img-container">
						<img src="<?php echo esc_html( get_stylesheet_directory_uri() ) . '/img/hero-media.jpg'; ?>" />
					</div>
					<div class="text-container">
						<div class="left">
							<h1><?php echo esc_html( $left_column['headline'] ); ?></h1>
							<p><?php echo esc_html( $left_column['text'] ); ?></p>

							<ul class="social">
								<?php if ( get_field( 'facebook_url', 'option' )  ) : ?>
								<li class="facebook"><a href="<?php the_field( 'facebook_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-facebook.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
								<?php if ( get_field( 'twitter_url', 'option' )  ) : ?>
								<li class="twitter"><a href="<?php the_field( 'twitter_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-twitter.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
								<?php if ( get_field( 'linkedin_url', 'option' )  ) : ?>
								<li class="linkedin"><a href="<?php the_field( 'linkedin_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-linkedin.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
							</ul>

						</div>
						<div class="right">
							<p class="headline"><?php echo esc_html( $right_column['headline'] ); ?></p>
							<p class="subline"><?php echo esc_html( $right_column['text'] ); ?></p>
							<?php if ( ! empty( $right_column['cta_text'] ) ) : ?>
								<div class="download">
									<a href="<?php echo esc_html( $right_column['media_kit_file'] ); ?>" target="_blank">
										<p class="download">
											<?php echo file_get_contents( get_template_directory() . '/img/icon-download.svg' ); // @codingStandardsIgnoreLine ?>
											<?php echo esc_html( $right_column['cta_text'] ); ?>
										</p>
									</a>
								</div>
							<?php endif; ?>

							<div class="contact">
								<?php echo $right_column['extra_content']; // @codingStandardsIgnoreLine ?>
							</div>

							<ul class="social">
								<?php if ( get_field( 'facebook_url', 'option' )  ) : ?>
								<li class="facebook"><a href="<?php the_field( 'facebook_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-facebook.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
								<?php if ( get_field( 'twitter_url', 'option' )  ) : ?>
								<li class="twitter"><a href="<?php the_field( 'twitter_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-twitter.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
								<?php if ( get_field( 'linkedin_url', 'option' )  ) : ?>
								<li class="linkedin"><a href="<?php the_field( 'linkedin_url', 'option' ); ?>"><?php echo file_get_contents( get_template_directory() . '/img/icon-linkedin.svg' ); // @codingStandardsIgnoreLine ?></a></li>
								<?php endif; ?>
							</ul>

						</div>
					</div>
				</div>
			</section>

			<section class="press-releases press-releases-container">
				<div class="container">
					<div class="news-filter">
						<select onchange="document.location.href=this.options[this.selectedIndex].value;">
							<option>Filter</option>
							<option value="<?php echo esc_url( home_url() ); ?>/press-releases/">All</option>
							<optgroup label="Date">
								<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1, 'post_type' => 'press-release' ) ); ?>
							</optgroup>
							<optgroup label="Tag">
								<?php
								$terms = get_terms( 'pr_tags', array(
									'hide_empty' => false,
								));

								foreach ( $terms as $term ) : ?>
								<option value="<?php echo esc_url( home_url() ); ?>/press-releases/?pr_tags=<?php echo esc_html( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></option>
								<?php endforeach; ?>
							</optgroup>
						</select>
					</div>

					<h2>Press Releases</h2>

					<ul>
						<?php
						$press_releases_query = new WP_Query(array(
							'post_type' => 'press-release',
							'posts_per_page' => 9,
						));
						while ( $press_releases_query->have_posts() ) : $press_releases_query->the_post(); ?>
						<li>
							<span><?php the_time( 'F j, Y' ); ?></span>
							<a href="<?php the_permalink(); ?>">
								<p><?php the_title(); ?></p>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</section>

			<section class="pagination media-see-all">
				<div class="container">
					<p align="center"><a class="btn red" href="/press-releases/">See All Press Releases</a></p>
				</div>
			</section>

			<?php
			$blog_query = new WP_Query(array(
				'post_type' => 'blog-posts',
				'posts_per_page' => 9,
			));

			if ( $blog_query-> have_posts() ) :
			?>
			<section class="press-releases press-releases-container">
				<div class="container">
					<div class="news-filter">
						<select onchange="document.location.href=this.options[this.selectedIndex].value;">
							<option>Filter</option>
							<option value="<?php echo esc_url( home_url() ); ?>/blog/">All</option>
							<optgroup label="Date">
								<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1, 'post_type' => 'blog-posts' ) ); ?>
							</optgroup>
							<optgroup label="Tag">
								<?php
								$terms = get_terms( 'blog_tags', array(
									'hide_empty' => false,
								));

								foreach ( $terms as $term ) : ?>
								<option value="<?php echo esc_url( home_url() ); ?>/blog/?blog_tags=<?php echo esc_html( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></option>
								<?php endforeach; ?>
							</optgroup>
						</select>
					</div>

					<h2>Blog Posts</h2>
					<ul>
						<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
						<li>
							<span><?php the_time( 'F j, Y' ); ?></span>
							<a href="<?php the_permalink(); ?>">
								<p><?php the_title(); ?></p>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</section>

			<section class="pagination media-see-all">
				<div class="container">
					<p align="center"><a class="btn red" href="/blog/">See All Blog Posts</a></p>
				</div>
			</section>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
