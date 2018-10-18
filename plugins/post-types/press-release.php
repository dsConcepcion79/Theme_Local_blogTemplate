<?php
/**
 * Press Release custom post type
 *
 * @package standard-industries
 */

/**
 * Register Custom Post Type.
 */
function register_press_release_post_type() {

	register_taxonomy(
		'pr_tags',
		null,
		array(
			'label' => __( 'Tags' ),
			'rewrite' => array( 'slug' => 'pr_tags' ),
			'hierarchical' => false,
			'publicly_queryable' => true,
		)
	);

	$labels = array(
		'name'                  => _x( 'Press Releases', 'Post Type General Name', 'standard-industries' ),
		'singular_name'         => _x( 'Press Release', 'Post Type Singular Name', 'standard-industries' ),
		'menu_name'             => __( 'Press Releases', 'standard-industries' ),
		'name_admin_bar'        => __( 'Press Releases', 'standard-industries' ),
		'archives'              => __( 'Press Releases Archive', 'standard-industries' ),
		'attributes'            => __( 'Press Releases Attributes', 'standard-industries' ),
		'parent_item_colon'     => __( 'Parent Item:', 'standard-industries' ),
		'all_items'             => __( 'All Press Releases', 'standard-industries' ),
		'add_new_item'          => __( 'Add New Press Release', 'standard-industries' ),
		'add_new'               => __( 'Add New', 'standard-industries' ),
		'new_item'              => __( 'New Press Release', 'standard-industries' ),
		'edit_item'             => __( 'Edit Press Release', 'standard-industries' ),
		'update_item'           => __( 'Update Press Release', 'standard-industries' ),
		'view_item'             => __( 'View Press Release', 'standard-industries' ),
		'view_items'            => __( 'View Press Releases', 'standard-industries' ),
		'search_items'          => __( 'Search Press Releases', 'standard-industries' ),
		'not_found'             => __( 'Not found', 'standard-industries' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'standard-industries' ),
		'featured_image'        => __( 'Featured Image', 'standard-industries' ),
		'set_featured_image'    => __( 'Set featured image', 'standard-industries' ),
		'remove_featured_image' => __( 'Remove featured image', 'standard-industries' ),
		'use_featured_image'    => __( 'Use as featured image', 'standard-industries' ),
		'insert_into_item'      => __( 'Insert into Press Release', 'standard-industries' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Press Release', 'standard-industries' ),
		'items_list'            => __( 'Press Releases list', 'standard-industries' ),
		'items_list_navigation' => __( 'Press Releases list navigation', 'standard-industries' ),
		'filter_items_list'     => __( 'Filter Press Releases list', 'standard-industries' ),
	);
	$rewrite = array(
		'slug'                  => 'press-releases',
		'with_front'            => false,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Press Release', 'standard-industries' ),
		'description'           => __( 'Press Release posts.', 'standard-industries' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'post-formats' ),
		'taxonomies'            => array( 'pr_tags' ),
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
	register_post_type( 'press-release', $args );
}

add_action( 'init', 'register_press_release_post_type', 0 );
