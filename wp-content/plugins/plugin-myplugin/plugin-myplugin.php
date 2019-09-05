<?php

/*

Plugin Name: My Plugin
Description: This is my first custom plugin
Version: 1.0 
Author: Sandip Patil
*/


if(!defined('WPINC')){
	die();
}



if(!function_exists('wp_my_plugin_function')){
	function wp_my_plugin_function(){

	}
}

if(!function_exists('wp_plugin_scripts')){
	function wp_plugin_scripts(){
		wp_enqueue_style('myplugin-css', WPAC_PLUGIN_DIR .'public/css/main.css');
		wp_enqueue_script('myplugin-js', WPAC_PLUGIN_DIR .'public/js/main.js');
	}
	add_action('wp_enqueue_scripts','wp_plugin_scripts');
}
function setting_page_html(){

}

function myplugin_activate() {
    add_menu_page('myplugin like system','Myplugin Setting','manage_options', 'myplugin-setting','setting_page_html','
			dashicons-universal-access',30);
}
add_action( 'admin_menu', 'myplugin_activate' );

?>