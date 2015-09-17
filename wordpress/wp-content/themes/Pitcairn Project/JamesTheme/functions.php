<?php
//importing stylesheet
function learninWordpress_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learninWordpress_resources');

//Navigation Menus Registering
register_nav_menus(array(
	'primary'=> __('Primary Menu'),
	'footer' => __('Footer Menu'),
));