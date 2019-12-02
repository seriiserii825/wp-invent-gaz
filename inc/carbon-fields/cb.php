<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$basic_options_container = Container::make( 'theme_options', __( 'Carbon Fields' ) )
	                                    ->add_tab( __( 'Contacts' ), array(
		                                    Field::make( 'text', 'crb_gmail', __( 'gmail' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_facebook', __( 'facebook' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_twitter', __( 'twitter' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_linkedin', __( 'linkedin' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_link', __( 'link' ) )
		                                         ->set_width( 30 ),
	                                    ) );

	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Blocks' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Testimonials' ), array(
			Field::make('complex', 'crb_numbers_fields', __('Fields'))
			     ->add_fields(array(
				     Field::make( 'image', 'crb_testimonials_icon', __( 'crb_testimonials_icon' ) )
				          ->set_value_type('url'),

				     Field::make( 'text', 'crb_testimonials_title_ro', __( 'crb_testimonials_title_ro' ) )
				          ->set_width( 50 ),
				     Field::make( 'text', 'crb_testimonials_title_ru', __( 'crb_testimonials_title_ru' ) )
				          ->set_width( 50 ),

				     Field::make( 'text', 'crb_testimonials_text_ro', __( 'crb_testimonials_text_ro' ) )
				          ->set_width( 50 ),
				     Field::make( 'text', 'crb_testimonials_text_ru', __( 'crb_testimonials_text_ru' ) )
				          ->set_width( 50 ),
			     ))
			     ->set_layout('tabbed-horizontal')
		) );
	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Translates' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Buttons' ), array(
			Field::make( 'text', 'crb_read_more_ro', __( 'crb_read_more_ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_read_more_ru', __( 'crb_read_more_ru' ) )
			     ->set_width( 50 ),
		) );

}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../../vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
