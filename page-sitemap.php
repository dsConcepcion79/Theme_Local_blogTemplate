<?php
/**
 *
 * Template Name: Sitemap
 *
 * @package standard-industries
 */

get_header();

$columns = get_field( 'columns' );
?>

<section id="primary" class="sitemap-container">
	<div class="container white">
		<h1><?php the_title(); ?></h1>
		<div class="col-container site-links">
			<?php
			for ( $i = 0; $i <= 2; $i++ ) :
				$column = $columns[ $i ]; ?>
			<div class="col">
				<ul>
					<?php
					foreach ( $column['links'] as $link ) :
						$target = ( 'internal' === $link['button_type'] ) ? '' : '_blank';
						$class = ( $link['bold'] ) ? 'bold' : '';
						$url = ( 'internal' === $link['button_type'] ) ? $link['button_internal_url'] : $link['button_external_url'];
					?>
						<li class="<?php echo esc_attr( $class ); ?>">
							<a target="<?php echo esc_attr( $target ); ?>" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $link['button_text'] ); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php endfor; ?>
		</div>
		<div class="col-container site-content">
			<div class="col stories">
				<p class="heading"><a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>"><?php esc_html_e( 'Our Stories', 'standard-industries' ); ?></a></p>
				<ul>
					<?php
					$stories = new WP_Query(array(
						'post_type' => 'post',
						'post_per_page' => 'post',
						'ignore_sticky_posts' => 1,
					));

					while ( $stories->have_posts() ) : $stories->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col media">
				<p class="heading"><a href="<?php echo esc_url( get_post_type_archive_link( 'press-release' ) ); ?>"><?php esc_html_e( 'Media', 'standard-industries' ); ?></a></p>
				<ul>
					<?php
					$stories = new WP_Query(array(
						'post_type' => 'press-release',
						'post_per_page' => 'post',
						'ignore_sticky_posts' => 1,
					));

					while ( $stories->have_posts() ) : $stories->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col">
				<ul>
					<?php
					$column = $columns[3];
					foreach ( $column['links'] as $link ) :
						$target = ( 'internal' === $link['button_type'] ) ? '' : '_blank';
						$class = ( $link['bold'] ) ? 'bold' : '';
						$url = ( 'internal' === $link['button_type'] ) ? $link['button_internal_url'] : $link['button_external_url'];
					?>
						<li class="<?php echo esc_attr( $class ); ?>">
							<a target="<?php echo esc_attr( $target ); ?>" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $link['button_text'] ); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
