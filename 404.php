<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package standard-industries
 */

get_header(); ?>

<section class="error-404">
	<div class="container">
		<h1><?php esc_html_e( 'Page not found', 'standard-industries' ); ?></h1>
		<p><?php esc_html_e( "We couldn't find the page you were looking for. This is either because:", 'standard-industries' ); ?></p>
		<ul>
			<li><?php esc_html_e( 'There is an error in the URL entered into your web browser. Please check the URL and try again.', 'standard-industries' ); ?></li>
			<li><?php esc_html_e( 'The page you are looking for has been moved or deleted.', 'standard-industries' ); ?></li>
			<li><?php esc_html_e( 'You can return to our homepage by', 'standard-industries' ); ?> <a href="/"><?php esc_html_e( 'clicking here', 'standard-industries' ); ?></a></li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>
