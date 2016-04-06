<?php
/* VR Interactive's Custom Post Type Example

Developed by: VR Interactive Media, LLC
URL: http://www.vrinteractive.net
*/

/*
The following creates a custom post type named 
"Slideshow Images".

A full list of function parameters can be found
here:
http://codex.wordpress.org/Function_Reference/register_post_type

*/

// add the function to the Wordpress init
add_action( 'init', 'create_post_type' );
	// Create the function for the custom type
	
function create_post_type() {
// Create (registering) the custom type 
	
	register_post_type( 'slideshow_images', 	/* (http://codex.wordpress.org/Function_Reference/register_post_type) */
			// Add all the options for this post type
			array (	'label' => 'Slideshow Images',
				'description' => 'These images are displayed on the homepage slideshow',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','thumbnail', 'custom-fields',),
				'taxonomies' => array(),
				'labels' => 
					array (
	  					'name' => 'Slideshow Images', /* This is the Title of the Group */
	  					'singular_name' => 'Slideshow Image', /* This is the individual type */
						'menu_name' => 'Slideshow Images', /* The add new menu item */
						'add_new' => 'Add Slideshow Image', /* Add New Display Title */
						'add_new_item' => 'Add New Slideshow Image',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit Slideshow Image', /* Edit Display Title */
						'new_item' => 'New Slideshow Image', /* New Display Title */
						'view_item' => 'View Slideshow Image', /* View Display Title */
						'search_items' => 'Search Slideshow Image', /* Search Custom Type Title */ 
						'not_found' => 'No Slideshow Image Found', /* This displays if there are no entries yet */ 
						'not_found_in_trash' => 'No Slideshow Image Found in Trash', /* This displays if there is nothing in the trash */
						'parent' => 'Parent Slideshow Image',
						),
				) 
			);
			




	
/* this ads your post categories to your custom post type */
register_taxonomy_for_object_type('category', 'slideshow_images');

/* this ads your post tags to your custom post type */
register_taxonomy_for_object_type('post_tag', 'slideshow_images');

// adds a Custom Post Type Called Homepage Excerpts	
	
	register_post_type( 'homepage_excerpts', 	/* (http://codex.wordpress.org/Function_Reference/register_post_type) */
			// Add all the options for this post type
			array (	'label' => 'Homepage Excerpts',
				'description' => 'These are the excerpts that show up on the homepage',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => true,
				'query_var' => true,
				'supports' => array('title','thumbnail', 'excerpt', 'custom-fields' ),
				'taxonomies' => array(),
				'labels' => 
					array (
	  					'name' => 'Homepage Excerpts', /* This is the Title of the Group */
	  					'singular_name' => 'Homepage Excerpts', /* This is the individual type */
						'menu_name' => 'Homepage Excerpts', /* The add new menu item */
						'add_new' => 'Add Homepage Excerpt', /* Add New Display Title */
						'add_new_item' => 'Add New Homepage Excerpt',
						'edit' => 'Edit', /* Edit Dialog */
						'edit_item' => 'Edit Homepage Excerpt', /* Edit Display Title */
						'new_item' => 'New Homepage Excerpt', /* New Display Title */
						'view_item' => 'View Homepage Excerpt', /* View Display Title */
						'search_items' => 'Search Homepage Excerpts', /* Search Custom Type Title */ 
						'not_found' => 'No Homepage Excerpt Found', /* This displays if there are no entries yet */ 
						'not_found_in_trash' => 'No Homepage Excerpt Found in Trash', /* This displays if there is nothing in the trash */
						'parent' => 'Parent Homepage Excerpt',
						),
				) 
			);
			
}



	
/* this ads your post categories to your custom post type */
register_taxonomy_for_object_type('category', 'homepage_excerpts');

/* this ads your post tags to your custom post type */
register_taxonomy_for_object_type('post_tag', 'homepage_excerpts');	
	
/*
The following creates a custom category named 
"Custom Categories".

A full list of function parameters can be found
here:
http://codex.wordpress.org/Function_Reference/register_taxonomy

*/
?>