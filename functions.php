<?php
/**
 * Destination_pages_client functions and definitions
 *
 * @package standard-industries
 */

/**
 * Set the content width based on the theme's design and stylesheet
 Fixed bug issues with un ordered list not populating. Fixed and updated theme to match WP core plug in rules.
 Fixed pages and post not updating on gutenberg editor.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}


add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );





// Remove Yoast SEO version in HTML.
add_action( 'wpseo_hide_version', '__return_true' );

// Custom post types.
include_once( 'plugins/post-types/press-release.php' );
include_once( 'plugins/post-types/blog-post.php' );

// Theme settings.
include_once( 'plugins/theme-settings.php' );

// Categories Fields.
include_once( 'plugins/category-fields.php' );

// Contact us page fields.
include_once( 'plugins/contact-us-fields.php' );

// Sitemap page fields.
include_once( 'plugins/sitemap-fields.php' );

/**
 * Enqueue stylesheets.
 */
function si_dest_styles() {
	wp_enqueue_style( 'si-theme-styles', get_stylesheet_directory_uri() . '/theme.css' );
}
add_action( 'wp_enqueue_scripts', 'si_dest_styles' );

/**
 * Enqueue admin styles.
 */
function si_admin_styles() {
	wp_enqueue_style( 'si-admin-styles', get_stylesheet_directory_uri() . '/admin/admin.css' );
	wp_enqueue_script( 'si-admin-js', get_stylesheet_directory_uri() . '/admin/admin.js' );
}
add_action( 'admin_enqueue_scripts', 'si_admin_styles', 10 );

/**
 * Gutenberg blocks.
 */
function rain_gutenberg_blocks() {
	// Read more.
	wp_enqueue_script( 'rain-read-more', get_stylesheet_directory_uri() . '/plugins/gutenberg/read-more/index.js', array( 'wp-blocks', 'wp-element' ) );

	// Youtube vidoe with cover.
	wp_enqueue_script( 'rain-youtube-video', get_stylesheet_directory_uri() . '/plugins/gutenberg/youtube-embed/index.js', array( 'wp-blocks', 'wp-element' ) );
	wp_enqueue_style(
		'rain-youtube-video-style',
		get_stylesheet_directory_uri() . '/plugins/gutenberg/youtube-embed/style.css',
		array( 'wp-edit-blocks' )
	);
}

add_action( 'enqueue_block_editor_assets', 'rain_gutenberg_blocks' );

/**
 * Make gutenberg edit the main one.
 *
 * @param string $link    The edit link.
 * @param int    $post_id Post ID.
 * @param string $context The link context. If set to 'display' then ampersands
 *                        are encoded.
 */
//function rain_post_edit_link( $link, $post_id, $context ) {
//	$post_type = get_post_type( $post_id );
//
//	if ( in_array( $post_type, array( 'post', 'press-release', 'blog-posts' ), true ) ) {
//		$link = admin_url( 'admin.php?page=gutenberg&post_id=' . $post_id );
//	}

//	return $link;
//}

//add_filter( 'get_edit_post_link', 'rain_post_edit_link', 10, 3 );

/**
 * Make gutenberg add new default link.
 *
 * @param string $url The current url.
 * @param string $path The path.
 */
/**function rain_add_new_post_url( $url, $path ) {
	if ( 'post-new.php' === $path ) {
		$url = get_site_url( $blog_id, 'wp-admin/', $scheme ) . 'admin.php?page=gutenberg';
	}

	if ( 'post-new.php?post_type=press-release' === $path ) {
		$url = get_site_url( $blog_id, 'wp-admin/', $scheme ) . 'admin.php?page=gutenberg&post_type=press-release';
	}

	if ( 'post-new.php?post_type=blog-posts' === $path ) {
		$url = get_site_url( $blog_id, 'wp-admin/', $scheme ) . 'admin.php?page=gutenberg&post_type=blog-posts';
	}

	return $url;
}

add_filter( 'admin_url', 'rain_add_new_post_url', 10, 2 );


/**
 * Replaces default add new links for gutenberg.
 */
/**function rain_add_new_default_links() {
	global $menu;
	global $submenu;

	$submenu['edit.php'][10][2] = 'admin.php?page=gutenberg';
	$submenu['edit.php?post_type=press-release'][10][2] = 'admin.php?page=gutenberg&post_type=press-release';
	$submenu['edit.php?post_type=blog-posts'][10][2] = 'admin.php?page=gutenberg&post_type=blog-posts';

	unset( $submenu['gutenberg'] );

	$gutenberg_key = array_search( 'Gutenberg', array_combine( array_keys( $menu ), array_column( $menu, 0 ) ), true );

	unset( $menu[ $gutenberg_key ] );
}

add_action( 'admin_menu', 'rain_add_new_default_links', 999 );
**/
// Modules.
include_once( 'plugins/modules/class-modules.php' );

$modules = Rain\Modules::get_instance();
$modules->add_module_section( 'page_modules', 'page' );
$modules->load_modules( get_stylesheet_directory() . '/modules/' );

/**
 * Enqueue scripts.
 */
function si_dest_scripts() {
	if ( ( 'wp-login.php' !== $GLOBALS['pagenow'] ) && ( ! is_admin() ) ) {

		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', '//code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1', true );
		wp_enqueue_script( 'jquery' );

		wp_register_script( 'libs', get_stylesheet_directory_uri() . '/js/libs.min.js', array(), filemtime( get_stylesheet_directory() . '/js/libs.min.js' ), true );
		wp_enqueue_script( 'libs' );

		wp_register_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js', array(), '1.20.2', true );
		wp_enqueue_script( 'gsap' );

		wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/main.min.js', array(), filemtime( get_stylesheet_directory() . '/js/main.min.js' ), true );
		wp_enqueue_script( 'main' );

		wp_localize_script( 'main', 'mainAjax', array( 'ajaxUrl' => admin_url( 'admin-ajax.php' ) ) );
	}
}
add_action( 'wp_enqueue_scripts', 'si_dest_scripts' );

/**
 * Load theme styles.
 */
function si_styles() {
	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css', [], null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'si_styles' );

/**
 * Register menus.
 */
function register_menu() {
	register_nav_menu( 'top-left', __( 'Top Left', 'standard-industries' ) );
	register_nav_menu( 'top-right', __( 'Top Right', 'standard-industries' ) );
	register_nav_menu( 'footer-left', __( 'Footer Left', 'standard-industries' ) );
	register_nav_menu( 'footer-center', __( 'Footer Center', 'standard-industries' ) );
	register_nav_menu( 'footer-right', __( 'Footer Right', 'standard-industries' ) );
	register_nav_menu( 'footer-legal', __( 'Footer Legal', 'standard-industries' ) );
	register_nav_menu( 'footer-mobile', __( 'Footer Mobile', 'standard-industries' ) );
}

add_action( 'init', 'register_menu' );

/**
 * Checks if there are more posts in the current loop.
 */
function more_posts() {
	global $wp_query;
	return $wp_query->current_post + 1 < $wp_query->post_count;
}

/**
 * Disable sticky posts in main queries. We'll only query them manually.
 */
add_filter( 'pre_get_posts', function( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		$query->set( 'ignore_sticky_posts', 1 );
	}
});

/**
 * Load all posts on "posts" archive.
 *
 * @param WP_Query $query The WP_Query object.
 */
function posts_posts_per_page( $query ) {
	if ( ! is_admin() && (int) get_option( 'page_for_posts' ) === $query->queried_object_id ) {
		$query->set( 'posts_per_page', '-1' );
	}
}

add_action( 'pre_get_posts', 'posts_posts_per_page' );

/**
 * Update post type labels.
 */
function update_post_labels() {
	$post_object = get_post_type_object( 'post' );

	$post_object->labels->name               = 'Stories';
	$post_object->labels->singular_name      = 'Story';
	$post_object->labels->add_new            = 'Add new';
	$post_object->labels->add_new_item       = 'Add new Story';
	$post_object->labels->all_items          = 'All Stories';
	$post_object->labels->edit_item          = 'Edit Story';
	$post_object->labels->name_admin_bar     = 'Story';
	$post_object->labels->menu_name          = 'Stories';
	$post_object->labels->new_item           = 'New Story';
	$post_object->labels->not_found          = 'No stories found';
	$post_object->labels->not_found_in_trash = 'No stories found in trash';
	$post_object->labels->search_items       = 'Search stories';
	$post_object->labels->view_item          = 'View Story';
}

add_action( 'wp_loaded', 'update_post_labels', 20 );

/**
 * Retrievs the current <title> tag value, without Yoast SEO filters applied.
 */
function get_page_title() {
	if ( class_exists( 'WPSEO_Frontend' ) ) {
		$wpseo_front = WPSEO_Frontend::get_instance();

		remove_filter( 'pre_get_document_title', array( $wpseo_front, 'title' ), 15 );
		remove_filter( 'wp_title', array( $wpseo_front, 'title' ), 15 );
	}

	$title = wp_title( '', false );

	if ( class_exists( 'WPSEO_Frontend' ) ) {
		add_filter( 'pre_get_document_title', array( $wpseo_front, 'title' ), 15 );
		add_filter( 'wp_title', array( $wpseo_front, 'title' ), 15 );
	}

	return trim( $title );
}



