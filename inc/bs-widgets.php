<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function bs_invent_gaz_widgets_init() {
	register_sidebar( array(
		'name'          => 'Language',
		'id'            => 'language',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'bs_invent_gaz_widgets_init' );
