<?php
/**
 * Nav.
 *
 * @package standard-industries
 */

?>
<header>
	<div class="container">
	<div class="mobile-btn">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</div>
	<div class="logo">
		<a href="<?php echo esc_url( home_url() ); ?>">
			<?php echo file_get_contents( get_template_directory() . '/img/si-logo.svg' ); // @codingStandardsIgnoreLine ?>
		</a>
	</div>
	<div class="nav-container">
		<?php wp_nav_menu( array( 'theme_location' => 'top-left', 'menu_class' => 'nav' ) ); ?>

		<div class="mobile-nav-bottom">
			<?php wp_nav_menu( array( 'theme_location' => 'top-right', 'menu_class' => 'nav' ) ); ?>
		</div>
	</div>
	<div class="nav-right">
		<?php wp_nav_menu( array( 'theme_location' => 'top-right', 'menu_class' => 'nav' ) ); ?>
	</div>
	<div class="search-btn">
		<?php echo file_get_contents( get_template_directory() . '/img/icon-search.svg' ); // @codingStandardsIgnoreLine ?>
	</div>
	<div class="search">
		<form class="header-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input class="search-input" type="text" name="s" placeholder="<?php esc_attr_e( 'Type keyword and press search', 'standard-industries' ); ?>" />
			<button type="submit" id="searchsubmit" value="Search" />
				<?php esc_html_e( 'Search', 'standard-industries' ); ?>
				<?php echo file_get_contents( get_template_directory() . '/img/icon-search.svg' ); // @codingStandardsIgnoreLine ?>
			</button>
		</form>
		<div class="search-close"></div>
	</div>
	</div>
</header>
