<?php
/**
 * Example Taxonomy
 *
 * PHP version 8
 *
 * @category  CustomTheme
 * @package   CustomTheme
 * @author    Team Maverick <info@nexergroup.com>
 * @copyright 2024 Nexer Group
 * @license   https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0
 * @link      https://nexergroup.com
 */

/**
 * Register Custom Taxonomy
 */
function example_taxonomy() {
	$labels = array(
		'name'              => _x( 'Example Taxonomy', 'taxonomy general name', 'custom_theme' ),
		'singular_name'     => _x( 'Example Taxonomy', 'taxonomy singular name', 'custom_theme' ),
		'search_items'      => __( 'Search Example Taxonomies', 'custom_theme' ),
		'all_items'         => __( 'All Example Taxonomies', 'custom_theme' ),
		'parent_item'       => __( 'Parent Example Taxonomy', 'custom_theme' ),
		'parent_item_colon' => __( 'Parent Example Taxonomy:', 'custom_theme' ),
		'edit_item'         => __( 'Edit Example Taxonomy', 'custom_theme' ),
		'update_item'       => __( 'Update Example Taxonomy', 'custom_theme' ),
		'add_new_item'      => __( 'Add New Example Taxonomy', 'custom_theme' ),
		'new_item_name'     => __( 'New Example Taxonomy Name', 'custom_theme' ),
		'menu_name'         => __( 'Example Taxonomy', 'custom_theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'example-taxonomy' ),
	);

	register_taxonomy( 'example_taxonomy', 'example_post_type', $args );
}
add_action( 'init', 'example_taxonomy' );
