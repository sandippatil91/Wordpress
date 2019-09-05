<?php

function websitestyle(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','websitestyle');


// Regitster nav menu

register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
));


function get_top_ancestores(){
	global $post;
	if($post->post_parent){
		$ancest = array_reverse(get_post_ancestors($post->ID));
		return $ancest[0];
	}
	return $post->ID;
}

//Custom excerpt length

function custom_excerpt_length(){
	return 25;
}
add_filter('excerpt_length','custom_excerpt_length');

add_theme_support( 'post-thumbnails' );
add_image_size('small-image',180,120,true);
add_image_size('banner_image',1200,210,array('center','top'));


function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

?>
