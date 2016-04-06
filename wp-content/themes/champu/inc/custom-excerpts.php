<?php

// the_excerpt function outputs 55 characters of text 

// Longer excerpt

function longer_excerpt($chars) {

	global $post;

	$text = get_the_content();

	$text = $text . " ";
	$text = strip_tags($text);

	if( strlen($text) > $chars )
		$ellipsis = true;

	$text = substr($text,0,$chars);

	$text = substr($text,0,strrpos($text,' '));

	if( $ellipsis == true )
		$text = $text . '<a href="'. get_permalink($post->ID) . '">   Read More >></a>';

	echo $text;
}

// Shorter excerpt

function shorter_excerpt($chars) {

	global $post;

	$text = get_the_content();

	$text = $text . " ";
	$text = strip_tags($text);

	if( strlen($text) > $chars )
		$ellipsis = true;

	$text = substr($text,0,$chars);

	$text = substr($text,0,strrpos($text,' '));

	if( $ellipsis == true )
		$text = $text . '<a href="'. get_permalink($post->ID) . '">   Read More >></a>';

	echo $text;
}


/* 
To add more excerpt lengths, simply copy the code 
from above and change the number of characters, 
below is an example where # equals the number of 
your choice:
$excerpt = substr($excerpt, 0, #);
 
To display the longer excerpt simply paste the 
following snippet in the desired location: 

echo get_longer_excerpt();

*/

?>