<?php
/**
 * Blog Post custom post type
 *
 * @package standard-industries
 */

/**
 * Register Custom Post Type.
 */
function register_blog_post_type() {

	$labels = array(
		'name'                  => _x( 'Blog Posts', 'Post Type General Name', 'standard-industries' ),
		'singular_name'         => _x( 'Post', 'Post Type Singular Name', 'standard-industries' ),
		'menu_name'             => __( 'Blog Posts', 'standard-industries' ),
		'name_admin_bar'        => __( 'Blog Posts', 'standard-industries' ),
		'archives'              => __( 'Blog Posts Archive', 'standard-industries' ),
		'attributes'            => __( 'Blog Posts Attributes', 'standard-industries' ),
		'parent_item_colon'     => __( 'Parent Item:', 'standard-industries' ),
		'all_items'             => __( 'All Blog Posts', 'standard-industries' ),
		'add_new_item'          => __( 'Add New Blog Post', 'standard-industries' ),
		'add_new'               => __( 'Add New', 'standard-industries' ),
		'new_item'              => __( 'New Blog Post', 'standard-industries' ),
		'edit_item'             => __( 'Edit Blog Post', 'standard-industries' ),
		'update_item'           => __( 'Update Blog Post', 'standard-industries' ),
		'view_item'             => __( 'View Blog Post', 'standard-industries' ),
		'view_items'            => __( 'View Blog Posts', 'standard-industries' ),
		'search_items'          => __( 'Search Blog Posts', 'standard-industries' ),
		'not_found'             => __( 'Not found', 'standard-industries' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'standard-industries' ),
		'featured_image'        => __( 'Featured Image', 'standard-industries' ),
		'set_featured_image'    => __( 'Set featured image', 'standard-industries' ),
		'remove_featured_image' => __( 'Remove featured image', 'standard-industries' ),
		'use_featured_image'    => __( 'Use as featured image', 'standard-industries' ),
		'insert_into_item'      => __( 'Insert into Blog Post', 'standard-industries' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Blog Post', 'standard-industries' ),
		'items_list'            => __( 'Blog Posts list', 'standard-industries' ),
		'items_list_navigation' => __( 'Blog Posts list navigation', 'standard-industries' ),
		'filter_items_list'     => __( 'Filter Blog Posts list', 'standard-industries' ),
	);
	$rewrite = array(
		'slug'                  => 'blog',
		'with_front'            => false,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Blog Post', 'standard-industries' ),
		'description'           => __( 'Blog Posts', 'standard-industries' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'post-formats' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-text',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'blog-posts', $args );

	register_taxonomy(
		'blog_tags',
		'blog-posts',
		array(
			'label' => __( 'Tags' ),
			'rewrite' => array( 'slug' => 'blog_tags' ),
			'hierarchical' => false,
		)
	);
}

add_action( 'init', 'register_blog_post_type', 0 );
