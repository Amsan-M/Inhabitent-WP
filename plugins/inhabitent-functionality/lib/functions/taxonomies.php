<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...



// Register Custom Taxonomy product types
function product_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Products Types', 'Taxonomy General Name', 'Inhabitent' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'Inhabitent' ),
		'menu_name'                  => __( 'Product Types', 'Inhabitent' ),
		'all_items'                  => __( 'All Product Types', 'Inhabitent' ),
		'parent_item'                => __( 'Parent Product Type', 'Inhabitent' ),
		'parent_item_colon'          => __( 'Parent Product Type', 'Inhabitent' ),
		'new_item_name'              => __( 'New Product Type', 'Inhabitent' ),
		'add_new_item'               => __( 'Add Product Type', 'Inhabitent' ),
		'edit_item'                  => __( 'Edit Product Type', 'Inhabitent' ),
		'update_item'                => __( 'Update Product Type', 'Inhabitent' ),
		'view_item'                  => __( 'View Product Type', 'Inhabitent' ),
		'separate_items_with_commas' => __( 'Separate Product Type with commas', 'Inhabitent' ),
		'add_or_remove_items'        => __( 'Add or remove Product Type', 'Inhabitent' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'Inhabitent' ),
		'popular_items'              => __( 'Popular Product Type', 'Inhabitent' ),
		'search_items'               => __( 'Search Product Type', 'Inhabitent' ),
		'not_found'                  => __( 'Not Found', 'Inhabitent' ),
		'no_terms'                   => __( 'No items', 'Inhabitent' ),
		'items_list'                 => __( 'Items list', 'Inhabitent' ),
		'items_list_navigation'      => __( 'Items list navigation', 'Inhabitent' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'products' ), $args );

}
add_action( 'init', 'product_custom_taxonomy', 0 );