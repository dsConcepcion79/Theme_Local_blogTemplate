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
 * @package standard-industries
 */

$left_column = get_field( 'media_page_left_column', 'option' );
$right_column = get_field( 'media_page_right_column', 'option' );

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
						<?php while ( have_posts() ) : the_post(); ?>
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

			<section class="pagination">
				<div class="container">
					<?php wp_pagenavi(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
