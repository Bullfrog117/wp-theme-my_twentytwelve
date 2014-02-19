<?php

// In child themes the functions.php is applied before the parent
// theme's functions.php. So we need to wait for the parent theme to add
// it's filter before we can remove it.
add_action( 'after_setup_theme', 'my_child_theme_setup' );

function my_child_theme_setup() {
	// Removes the filter that adds the "singular" class to the body element
	// which centers the content and does not allow for a sidebar
	remove_filter( 'body_class', 'twentytwelve_body_classes' );
}

function custom_excerpt_length( $length ) { 
	// adjusts excerpt length
	return 150;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' ... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Continue reading &rarr;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * my first shortcode ever
 * used to have song titles in my Rock Church blog entries
 * link to the internal lyrics database
*/
function songTitle($atts, $content = null) {
	extract(shortcode_atts(array(
		'title'=>'',
		'lyrics'=>'',
	),$atts));
	if($lyrics == '') { return '<a target="/scripts/newWindow.js" href="http://www.bullfrog117.com/scripts/lyrics.php?song='.esc_attr($title).'&lyrics='.esc_attr($lyrics).'">'.esc_attr($title).'</a>';}
	else { return '<a target="http://www.bullfrog117.com/scripts/newWindow.js" href="http://www.bullfrog117.com/scripts/lyrics.php?song='.esc_attr($title).'&lyrics='.esc_attr($lyrics).'">'.esc_attr($title).' ('.esc_attr($lyrics).')</a>';}
}
add_shortcode("song", "songTitle");

/**
 * Not my code, modified from http://codesnipp.it/css/pure-css-spoiler-tag
 * Many thanks to author Steffen Franzkoch, whose code was one of the
 * first that popped up in a Google search for CSS spoiler tags.
 * Published 11/29/2011
 **/
function spoilerstart($atts, $content = null) {
	return '<h1>Spoiler Alert! (place and hold your mouse over the bar to see)</h1>
<div class="spoiler">
	<div class="view-protection top"></div>
	<p>
	<div style="padding:0px 10px;">';
}
add_shortcode("spoilerstart", "spoilerstart");

function spoilerend($atts, $content = null) {
	return '</div>
	</p>
	<div class="view-protection bottom"></div>
</div>';
}
add_shortcode("spoilerend", "spoilerend");

/**
 * Attempting to write a shortcode that will handle the currently single PHP code I have on the site
 * I mean I see no reason to have a plugin for one post out of thousands that keeps me from using NGG
 **/
function dailyblurb($atts, $content = null) {
	extract(shortcode_atts(array(
		'source'=>'',
		'date'=>'',
	),$atts));
	$source=esc_attr($source);
	$date=esc_attr($date);
	return file_get_contents("http://www.bullfrog117.com/religion/daily-blurb.php?source=".$source."&date=".$date);
}
add_shortcode("dailyblurb", "dailyblurb");

?>
