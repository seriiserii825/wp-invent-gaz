<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

require_once __DIR__.'/inc/func.php';
require_once __DIR__.'/inc/bs-styles.php';
require_once __DIR__.'/inc/bs-setup.php';
require_once __DIR__.'/inc/bs-widgets.php';
require_once __DIR__.'/inc/bs-post-type.php';
require_once __DIR__.'/inc/carbon-fields/cb.php';
require_once __DIR__.'/inc/carbon-fields/cb-post-type.php';
require_once __DIR__.'/inc/carbon-fields/cb-post.php';




function bs_invent_gaz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bs_invent_gaz_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_invent_gaz_content_width', 0 );



///**
// * Implement the Custom Header feature.
// */
//require get_template_directory() . '/inc/custom-header.php';
//
///**
// * Custom template tags for this theme.
// */
//require get_template_directory() . '/inc/template-tags.php';
//
///**
// * Functions which enhance the theme by hooking into WordPress.
// */
//require get_template_directory() . '/inc/template-functions.php';
//
///**
// * Customizer additions.
// */
//require get_template_directory() . '/inc/customizer.php';
//
///**
// * Load Jetpack compatibility file.
// */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}
//
