<?php

	// CUSTOM TAXONOMIES
    register_taxonomy( 'custom_cat', 
    	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Custom Categories' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Custom Category' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Custom Categories' ), /* search title for taxomony */
    			'all_items' => __( 'All Custom Categories' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Category' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Category:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Custom Category' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Custom Category' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Custom Category' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Category Name' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'custom_tag', 
    	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Custom Tags' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Custom Tag' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Custom Tags' ), /* search title for taxomony */
    			'all_items' => __( 'All Custom Tags' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Tag' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Tag:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Custom Tag' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Custom Tag' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Custom Tag' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Tag Name' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
	

?>