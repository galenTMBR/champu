<?php

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar 1',
		'id'   => 'sidebar1',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
	
	/*
	
	register_sidebar(array(
		'name' => 'Sidebar 2',
		'id'   => 'sidebar2',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
	
	*/
}

?>