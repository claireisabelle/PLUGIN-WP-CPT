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
 * RECIPES POST TYPE
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


/*
 **********************************
 * MEAL TYPE TAXONOMY
 **********************************
 */

// EXEMPLE SIMPLE
// function meal_type_taxonomy(){
// 	register_taxonomy(
// 		'meal_type', // Nom de la taxonomy
// 		'recipe', // Le custom post type auquel la taxonomy se rattage
// 		array(
// 			'label' => __('Meal Type'),
// 			'rewriter' => array('slug' => 'meal'),
// 			'hierarchical' => true // true pour avoir comportement 'catégory' ou false pour 'tag'
// 		)
// 	);
// }

// EXEMPLE AVANCE
function meal_type_taxonomy(){
	$labels = array(
		'name'              => _x( 'Meal Type', 'taxonomy general name' ),
		'singular_name'     => _x( 'Meal Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Meal Type' ),
		'all_items'         => __( 'All Meal Types' ),
		'parent_item'       => __( 'Parent Meal Type' ),
		'parent_item_colon' => __( 'Parent Meal Type:' ),
		'edit_item'         => __( 'Edit Meal Type' ),
		'update_item'       => __( 'Update Meal Type' ),
		'add_new_item'      => __( 'Add Meal Type' ),
		'new_item_name'     => __( 'New Meal Type' ),
		'menu_name'         => __( 'Meal Type' )
	);

	$args = array(
		'hierarchical'      => true, //true like category or false for tag
		'labels'            => $labels, //add the labels
		'show_ui'           => true, // add the default UI to this
		'show_admin_column' => true, //Show the Taxonomy in the admin menu
		'query_var'         => true, //enable or desable the default variable
		'rewrite' => array( 'slug' => 'meal' ) // rewrite default url
		);

	//register the taaxonomy to the recipes
	register_taxonomy( 'meal-type', array( 'recipe' ), $args );
}
add_action('init', 'meal_type_taxonomy');


/*
 **********************************
 * COURSE TAXONOMY
 **********************************
 */

function course_taxonomy(){
	$labels = array(
		'name'              => _x( 'Course', 'taxonomy general name' ),
		'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Course' ),
		'all_items'         => __( 'All Courses' ),
		'parent_item'       => __( 'Parent Course' ),
		'parent_item_colon' => __( 'Parent Course:' ),
		'edit_item'         => __( 'Edit Course' ),
		'update_item'       => __( 'Update Course' ),
		'add_new_item'      => __( 'Add Course' ),
		'new_item_name'     => __( 'New Course' ),
		'menu_name'         => __( 'Course' )
	);

	$args = array(
		'hierarchical'      => true, //true like category or false for tag
		'labels'            => $labels, //add the labels
		'show_ui'           => true, // add the default UI to this
		'show_admin_column' => true, //Show the Taxonomy in the admin menu
		'query_var'         => true, //enable or desable the default variable
		'rewrite' => array( 'slug' => 'course' ) // rewrite default url
		);

	//register the taaxonomy to the recipes
	register_taxonomy( 'course', array( 'recipe' ), $args );
}
add_action('init', 'course_taxonomy');


/*
 **********************************
 * MOOD TAXONOMY
 **********************************
 */

function mood_taxonomy(){
	$labels = array(
		'name'              => _x( 'Mood', 'taxonomy general name' ),
		'singular_name'     => _x( 'Mood', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Mood' ),
		'all_items'         => __( 'All Moods' ),
		'parent_item'       => __( 'Parent Mood' ),
		'parent_item_colon' => __( 'Parent Mood:' ),
		'edit_item'         => __( 'Edit Mood' ),
		'update_item'       => __( 'Update Mood' ),
		'add_new_item'      => __( 'Add Mood' ),
		'new_item_name'     => __( 'New Mood' ),
		'menu_name'         => __( 'Mood' )
	);

	$args = array(
		'hierarchical'      => false, //true like category or false for tag
		'labels'            => $labels, //add the labels
		'show_ui'           => true, // add the default UI to this
		'show_admin_column' => true, //Show the Taxonomy in the admin menu
		'query_var'         => true, //enable or desable the default variable
		'rewrite' => array( 'slug' => 'mood' ) // rewrite default url
		);

	//register the taaxonomy to the recipes
	register_taxonomy( 'mood', array( 'recipe' ), $args );
}
add_action('init', 'mood_taxonomy');



/*
 **********************************
 * EVENT TYPE TAXONOMY
 **********************************
 */

// Register Custom Taxonomy
function type_event_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types of Event', 'Taxonomy General Name', 'gourmet-artist' ),
		'singular_name'              => _x( 'Type of Event', 'Taxonomy Singular Name', 'gourmet-artist' ),
		'menu_name'                  => __( 'Type of Event', 'gourmet-artist' ),
		'all_items'                  => __( 'All Types of Event', 'gourmet-artist' ),
		'parent_item'                => __( 'Parent Item', 'gourmet-artist' ),
		'parent_item_colon'          => __( 'Parent Item:', 'gourmet-artist' ),
		'new_item_name'              => __( 'New Item Name', 'gourmet-artist' ),
		'add_new_item'               => __( 'Add New Item', 'gourmet-artist' ),
		'edit_item'                  => __( 'Edit Item', 'gourmet-artist' ),
		'update_item'                => __( 'Update Item', 'gourmet-artist' ),
		'view_item'                  => __( 'View Item', 'gourmet-artist' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'gourmet-artist' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'gourmet-artist' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'gourmet-artist' ),
		'popular_items'              => __( 'Popular Items', 'gourmet-artist' ),
		'search_items'               => __( 'Search Items', 'gourmet-artist' ),
		'not_found'                  => __( 'Not Found', 'gourmet-artist' ),
		'no_terms'                   => __( 'No items', 'gourmet-artist' ),
		'items_list'                 => __( 'Items list', 'gourmet-artist' ),
		'items_list_navigation'      => __( 'Items list navigation', 'gourmet-artist' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'type_event', array( 'events' ), $args );

}
add_action( 'init', 'type_event_taxonomy', 0 );