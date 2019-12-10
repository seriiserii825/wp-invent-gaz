<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_slider_options' );
function crb_attach_slider_options() {
	Container::make( 'post_meta', __( 'Slider' ) )
	         ->where( 'post_type', '=', 'slider' )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_slider_title_ro', __( 'Slider title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_slider_title_ru', __( 'Slider title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_slider_text_ro', __( 'Slider text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_slider_text_ru', __( 'Slider text ru' ) )
		              ->set_width( 50 ),

	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_product_options' );
function crb_attach_product_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'product' )
	         ->add_tab( __( 'Product info' ), array(
		         Field::make( 'rich_text', 'crb_product_full_text_ro', __( 'Text ro', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_product_full_text_ru', __( 'Text ru', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Files', 'bs-invent-gaz' ), array(
		         Field::make( 'complex', 'crb_files', __( 'Fields', 'bs-invent-gaz' ) )
		              ->add_fields( array(
			              Field::make( 'file', 'crb_file', __( 'File' ) )
		              ) )
		              ->set_layout( 'tabbed-horizontal' )
	         ) )
	         ->add_tab( __( 'Gallery', 'bs-invent-gaz' ), array(
		         Field::make( 'media_gallery', 'crb_product_gallery', __( 'Media Gallery' ) )
		              ->set_duplicates_allowed( false )
	         ) );
}


add_action( 'carbon_fields_register_fields', 'crb_attach_contor_options' );
function crb_attach_contor_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'contor' )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_beneficiar', 'crb_beneficiar ' ),
		         Field::make( 'text', 'crb_contor_status', 'crb_contor_status ' ),
	         ) );
}
