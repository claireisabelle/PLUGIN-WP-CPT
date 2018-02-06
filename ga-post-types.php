<?php
/*
Plugin Name: Arroweb Plugin Post Types & Taxonomies
Plugin URI: 
Description: Adds Custom Post Types to site
Version: 1.0
Author: Claire Bourdalé - Arroweb
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
 **********************************
 * RECIPE POST TYPE
 **********************************
 */

function ga_recipe_post_type(){

	// Labels for the Post Type
	$labels = array(
		'name'                => _x( 'Recipes', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Recipe', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Recipes', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Parent Recipe', 'gourmet-artist' ),
		'all_items'           => __( 'All Recipes', 'gourmet-artist' ),
		'view_item'           => __( 'View Recipe', 'gourmet-artist' ),
		'add_new_item'        => __( 'Add New Recipe', 'gourmet-artist' ),
		'add_new'             => __( 'Add New Recipe', 'gourmet-artist' ),
		'edit_item'           => __( 'Edit Recipe', 'gourmet-artist' ),
		'update_item'         => __( 'Update Recipe', 'gourmet-artist' ),
		'search_items'        => __( 'Search Recipe', 'gourmet-artist' ),
		'not_found'           => __( 'No  Recipes Found', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'gourmet-artist' )
	);

	// More Customization
	$args = array(
		'label'		   => __('Recipes', 'gourmet-artist'),
		'description'  => __('Recipes for Gourmet Artistry', 'gourmet-artist'),
		'labels'	   => $labels,
		'supports'	   => array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
		'hierarchical' => false,
		'public'	   => true,
		'show_ui'	   => true,
		'show_in_menus' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position'		=> 5,
		'menu_icon'			=> 'dashicons-admin-page',
		'can_export'		=> true,
		'has_archive'		=> true,
		'exclude_from_search' => false,
		'capability_type' 	=> 'page'
	);

	// Register the post type
	register_post_type('recipe', $args);

}
add_action('init', 'ga_recipe_post_type', 0);


/*
 **********************************
 * EVENTS POST TYPE
 **********************************
 */

function ga_events_post_type(){

	// Labels for the Post Type
	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Events', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Parent Event', 'gourmet-artist' ),
		'all_items'           => __( 'All Events', 'gourmet-artist' ),
		'view_item'           => __( 'View Event', 'gourmet-artist' ),
		'add_new_item'        => __( 'Add New Event', 'gourmet-artist' ),
		'add_new'             => __( 'Add New Event', 'gourmet-artist' ),
		'edit_item'           => __( 'Edit Event', 'gourmet-artist' ),
		'update_item'         => __( 'Update Event', 'gourmet-artist' ),
		'search_items'        => __( 'Search Event', 'gourmet-artist' ),
		'not_found'           => __( 'No Event Found', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'gourmet-artist' )
	);

	// More Customization
	$args = array(
		'label'		   => __('Events', 'gourmet-artist'),
		'description'  => __('Events for Gourmet Artistry', 'gourmet-artist'),
		'labels'	   => $labels,
		'supports'	   => array('title', 'editor'),
		'hierarchical' => false,
		'public'	   => true,
		'show_ui'	   => true,
		'show_in_menus' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position'		=> 6,
		'menu_icon'			=> 'dashicons-calendar-alt',
		'can_export'		=> true,
		'has_archive'		=> true,
		'exclude_from_search' => false,
		'capability_type' 	=> 'page'
	);

	// Register the post type
	register_post_type('events', $args);

}
add_action('init', 'ga_events_post_type', 0);