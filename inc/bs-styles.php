<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function bs_invent_gaz_scripts() {
	wp_enqueue_style( 'bs-invent-gaz-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-invent-gaz-css-style', get_template_directory_uri().'/assets/libs/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'bs-invent-gaz-magnific-css', get_template_directory_uri().'/assets/css/my.css' );

	// Регистрация jQuery
	add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
	function jquery_script_method() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		wp_enqueue_script( 'jquery' );
	}

	wp_enqueue_script( 'bs-invent-gaz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bs-invent-gaz-slick', get_template_directory_uri() . '/assets/libs/slick/slick/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-invent-gaz-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-invent-gaz-magnific-js', get_template_directory_uri() . '/assets/libs/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'bs-invent-gaz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'bs_invent_gaz_scripts' );
