<?php
/**
 * The template for displaying search results pages.
 *
 * @package standard-industries
 */

global $wp_query;
get_header(); ?>

<div id="primary">
	<section class="page-search-results">
		<div class="container">
			<div class="search-header">
				<p><?php esc_html_e( 'You searched for', 'standard-industries' ); ?></p>
				<div class="search-form">
					<form class="search-page-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
						<button type="submit" id="searchsubmit" value="Search" /><?php esc_html_e( 'Search', 'standard-industries' ); ?></button>
					</form>
				</div>
				<p class="result-count"><?php echo esc_html( $wp_query->found_posts ); ?> <?php esc_html_e( 'results', 'standard-industries' ); ?></p>
			</div>
			<div class="search-results">
				<ul>
					<?php while ( have_posts() ) :
						the_post();
						$post_type = get_post_type_object( $post->post_type );
					?>
					<li>
						<span class="result-type"><?php echo esc_html( $post_type->labels->singular_name ); ?></span>
						<p class="result-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<p><?php the_excerpt(); ?></p>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</section>

	<section class="pagination">
		<div class="container">
			<?php wp_pagenavi(); ?>
		</div>
	</section>
</div>

<?php
get_footer();
