<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// Register Custom Post Type

function product_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'Inhabitent' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'Inhabitent' ),
		'menu_name'             => __( 'Products', 'Inhabitent' ),
		'name_admin_bar'        => __( 'Products', 'Inhabitent' ),
		'archives'              => __( 'Products Archives', 'Inhabitent' ),
		'attributes'            => __( 'Product Attributes', 'Inhabitent' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Inhabitent' ),
		'all_items'             => __( 'All Products', 'Inhabitent' ),
		'add_new_item'          => __( 'Add New Product', 'Inhabitent' ),
		'add_new'               => __( 'Add New', 'Inhabitent' ),
		'new_item'              => __( 'New Product', 'Inhabitent' ),
		'edit_item'             => __( 'Edit Item', 'Inhabitent' ),
		'update_item'           => __( 'Update Item', 'Inhabitent' ),
		'view_item'             => __( 'View Item', 'Inhabitent' ),
		'view_items'            => __( 'View Items', 'Inhabitent' ),
		'search_items'          => __( 'Search Item', 'Inhabitent' ),
		'not_found'             => __( 'Not found', 'Inhabitent' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Inhabitent' ),
		'featured_image'        => __( 'Featured Image', 'Inhabitent' ),
		'set_featured_image'    => __( 'Set featured image', 'Inhabitent' ),
		'remove_featured_image' => __( 'Remove featured image', 'Inhabitent' ),
		'use_featured_image'    => __( 'Use as featured image', 'Inhabitent' ),
		'insert_into_item'      => __( 'Insert into item', 'Inhabitent' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Inhabitent' ),
		'items_list'            => __( 'Items list', 'Inhabitent' ),
		'items_list_navigation' => __( 'Items list navigation', 'Inhabitent' ),
		'filter_items_list'     => __( 'Filter items list', 'Inhabitent' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'Inhabitent' ),
		'description'           => __( 'This is a custom post type for our products', 'Inhabitent' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'product_custom_post_type', 0 );

// Register Custom Post Type
function adventures_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'adventures', 'Post Type General Name', 'Inhabitent' ),
		'singular_name'         => _x( 'adventure', 'Post Type Singular Name', 'Inhabitent' ),
		'menu_name'             => __( 'adventures', 'Inhabitent' ),
		'name_admin_bar'        => __( 'adventures', 'Inhabitent' ),
		'archives'              => __( 'adventures', 'Inhabitent' ),
		'attributes'            => __( 'adventure', 'Inhabitent' ),
		'parent_item_colon'     => __( 'adventure', 'Inhabitent' ),
		'all_items'             => __( 'adventure', 'Inhabitent' ),
		'add_new_item'          => __( 'adventure', 'Inhabitent' ),
		'add_new'               => __( 'adventure', 'Inhabitent' ),
		'new_item'              => __( 'adventure', 'Inhabitent' ),
		'edit_item'             => __( 'adventure', 'Inhabitent' ),
		'update_item'           => __( 'adventure', 'Inhabitent' ),
		'view_item'             => __( 'adventure', 'Inhabitent' ),
		'view_items'            => __( 'adventure', 'Inhabitent' ),
		'search_items'          => __( 'adventure', 'Inhabitent' ),
		'not_found'             => __( 'adventure', 'Inhabitent' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Inhabitent' ),
		'featured_image'        => __( 'Featured Image', 'Inhabitent' ),
		'set_featured_image'    => __( 'Set featured image', 'Inhabitent' ),
		'remove_featured_image' => __( 'Remove featured image', 'Inhabitent' ),
		'use_featured_image'    => __( 'Use as featured image', 'Inhabitent' ),
		'insert_into_item'      => __( 'adventure', 'Inhabitent' ),
		'uploaded_to_this_item' => __( 'adventure', 'Inhabitent' ),
		'items_list'            => __( 'adventure', 'Inhabitent' ),
		'items_list_navigation' => __( 'adventure', 'Inhabitent' ),
		'filter_items_list'     => __( 'adventure', 'Inhabitent' ),
	);
	$args = array(
		'label'                 => __( 'adventure', 'Inhabitent' ),
		'description'           => __( 'Post Type Description', 'Inhabitent' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'adventures', $args );

}
add_action( 'init', 'adventures_custom_post_type', 0 );