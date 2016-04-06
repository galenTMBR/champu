<?php
get_template_part( 'inc/helpers' );
get_template_part( 'inc/auto-updates' );

/****************** REMOVE AUTOMATIC PARAGRAPH TAGS TO POSTS/PAGES ***********************/

//remove_filter('the_content','wpautop');

/************************* ADD SUPPORT FOR FEATURED IMAGES *******************************/

	add_theme_support( 'post-thumbnails' );

/********** REMOVE UPDATE ALERT FROM DASHBOARD SO CLIENTS DON"T TRY TO UPDATE ***********/

	if (!current_user_can('edit_users')) {
	  	add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
	  	add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
	}

/********** REMOVE AUTOMATIC PARAGRAPH TAGS OUT OF WORDPRESS ***********/
/*
remove_filter('the_content','wpautop');

//decide when you want to apply the auto paragraph

add_filter('the_content','my_custom_formatting');

function my_custom_formatting($content){
if(get_post_type()=='my_custom_post') //if it does not work, you may want to pass the current post object to get_post_type
    return $content;//no autop
else
 return wpautop($content);
*/
/******************** DISABLE DEFAULT DASHBOARD WIDGETS *************************/

	function disable_default_dashboard_widgets() {

		remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
		remove_meta_box('dashboard_primary', 'dashboard', 'core');
		remove_meta_box('dashboard_secondary', 'dashboard', 'core');
	}

	add_action('admin_menu', 'disable_default_dashboard_widgets');


/************************ ADD SUPPORT FOR WORDPRESS FUNCTIONS ****************************/

	require_once('inc/custom-login-logo.php'); // CUSTOM LOGIN LOGO
	require_once('inc/custom-post-type.php'); // CUSTOM POST TYPE
	require_once('inc/custom-taxonomies.php'); // CUSTOM TAXONOMIES
	require_once('inc/register-sidebars.php'); // REGISTER SIDEBARS
	require_once('inc/custom-menus.php'); // CREATE CUSTOM MENUS
	require_once('inc/custom-excerpts.php'); // CUSTOM EXCERPTS



	add_filter('show_admin_bar', '__return_false');
?>