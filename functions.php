<?php

function add_support(){
	$defaults = array (
		'height' => 100,
		'width' => 400,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);

	$args = array(
		'default-text-color' => '000',
		'height'             => 720,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support('custom-header',$args);
}
add_action('after_setup_theme','add_support');

//Para agregar los assets al tema
function add_Assets(){
	//Css
	wp_enqueue_style( 
		'main', 
		get_template_directory_uri().'/assets/css/main.css', 
		'all'
	);
	//Scripts
	wp_enqueue_script( 
		'create-account', 
		get_template_directory_uri().'/assets/js/create-account.js',
		true, false
	);
}
add_action('wp_enqueue_scripts', 'add_Assets');


//Iniciar template con los menus
function init_template(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag');
	register_nav_menus(
			array(
					'main' => 'Menú Principal'
			)
	);
}
add_action('init', 'init_template');

?>