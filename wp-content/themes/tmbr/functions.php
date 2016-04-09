<?php
get_template_part( 'inc/helpers' );
get_template_part( 'inc/auto-updates' );

add_action('after_setup_theme', 'tmbr_setup');

function tmbr_setup() {

	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');

	}

// JQUERY
add_action('wp_enqueue_scripts', 'tmbr_load_scripts');

function tmbr_load_scripts() {
	wp_enqueue_script('jquery');
	}

// 	REGISTER SIDEBARS
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'id'   => 'main_sidebar',
		'description'   => 'These are widgets for the sidebar that appears on pages.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	}

// CUSTOM MENUS
function register_my_menus() {
	register_nav_menus(
		array(
			'main-navigation' => __( 'Main Navigation' ),
			'footer-menu' => __( 'Footer Menu' ),
		)
	);
	}

add_action( 'init', 'register_my_menus' );


// ADD TMBR LOGO TO LOGIN PAGE
require_once('inc/theme/login-logo.php');
get_template_part( 'inc/load-template' );

//CUSTOM POST TYPE
// require_once('inc/theme/custom-post-type.php');

//DISABLE ADMIN BAR
add_filter('show_admin_bar', '__return_false');



?>