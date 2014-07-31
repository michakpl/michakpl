<?php

	/*	
	Defining constants
	*/

	define('THEMEROOT', get_stylesheet_directory_uri());
	define('IMAGES', THEMEROOT . '/images');

	/*
	Registering menus
	*/

	add_theme_support( 'menus' );

	if (function_exists('register_nav_menu'))
	{
	    register_nav_menu('top_menu', 'Top Menu');
	}

	add_filter( 'got_rewrite', '__return_true' );

	add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');

	function posts_link_attributes_next() {
	    return 'class="previous col-sm-2 col-sm-offset-1"';
	}
	function posts_link_attributes_prev() {
	    return 'class="next col-sm-2 col-sm-offset-6"';
	}

	if (function_exists('register_sidebar'))
	{
		register_sidebar( array(
			'name' => 'Right Sidebar',
			'id' => 'right-sidebar',
			'description' => 'Widgets in this area will be shown on the right-hand side.',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
			));
	}

?>