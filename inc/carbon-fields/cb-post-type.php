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
	         ->add_tab( __( 'Volumul ciclic' ), array(
		         Field::make( 'rich_text', 'crb_product_volume_ro', __( 'Lista ro', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_product_volume_ru', __( 'Lista ru', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Manevrabilitate', 'bs-invent-gaz' ), array(
		         Field::make( 'rich_text', 'crb_product_manevrabilitate_ro', __( 'Lista ro', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_product_manevrabilitate_ru', __( 'Lista ru', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Interval de corecție TC', 'bs-invent-gaz' ), array(
		         Field::make( 'rich_text', 'crb_product_interval_de_corectie_ro', __( 'Lista ro', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_product_interval_de_corectie_ru', __( 'Lista ru', 'bs-invent-gaz' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Files', 'bs-invent-gaz' ), array(
		         Field::make( 'complex', 'crb_files', __( 'Fields', 'bs-invent-gaz' ) )
		              ->add_fields( array(
			              Field::make( 'file', 'crb_file', __( 'File' ) )
		              ) )
		              ->set_layout( 'tabbed-horizontal' )
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
