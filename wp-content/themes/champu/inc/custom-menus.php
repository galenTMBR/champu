<?php

function register_my_menus() {
	register_nav_menus(
		array(
			'top-navigation' => __( 'Top Navigation' ),
			'footer-menu' => __( 'Footer Menu' ),
		)
	);
}
		
add_action( 'init', 'register_my_menus' );

/* 
This function automatically registers custom 
menu support.

Here we have created two custom menus, to 
display a custom menu, paste the following 
snippet into the desired location:

wp_nav_menu( array('theme_location' => 'top-navigation', 'container' => 'div', 'container_id' => 'containerid', 'menu_class' => 'menuclass' ));

theme_location : 			the menu matching the ID, slug, or name given by the menu parameter
container : 				whether to wrap the ul, and what to wrap it with, allowed tags are div and nav, use false for no container
container_class / container_id : 	the class or ID that is applied to the container
menu_class / menu_id : 			the class or ID that is applied to the menu

A full list of this function's parameters 
can be found here: 

http://codex.wordpress.org/Function_Reference/wp_nav_menu

*/

?>