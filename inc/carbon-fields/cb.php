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
		                                    Field::make( 'text', 'crb_phone_1', __( 'phone_1' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_phone_2', __( 'phone_2' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_phone_3', __( 'phone_3' ) )
		                                         ->set_width( 30 ),
		                                    Field::make( 'text', 'crb_address_ro', __( 'address_ro' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_address_ru', __( 'address_ru' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_facebook', __( 'facebook' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_vk', __( 'vk' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_hours_ro', __( 'hours_ro' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_hours_ru', __( 'hours_ru' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_mail', __( 'mail' ) )
		                                         ->set_width( 50 ),
	                                    ) );

	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Blocks' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Testimonials' ), array(
			Field::make( 'text', 'crb_testimonial_title_ro', __( 'crb_testimonial_title_ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_testimonial_title_ru', __( 'crb_testimonial_title_ru' ) )
			     ->set_width( 50 ),

			Field::make( 'textarea', 'crb_testimonial_text_ro', __( 'crb_testimonial_text_ro' ) )
			     ->set_width( 50 ),
			Field::make( 'textarea', 'crb_testimonial_text_ru', __( 'crb_testimonial_text_ru' ) )
			     ->set_width( 50 ),

			Field::make( 'complex', 'crb_numbers_fields', __( 'Fields' ) )

			     ->add_fields( array(
				     Field::make( 'image', 'crb_testimonials_icon', __( 'crb_testimonials_icon' ) )
				          ->set_value_type( 'url' ),

				     Field::make( 'text', 'crb_testimonials_title_ro', __( 'crb_testimonials_title_ro' ) )
				          ->set_width( 50 ),
				     Field::make( 'text', 'crb_testimonials_title_ru', __( 'crb_testimonials_title_ru' ) )
				          ->set_width( 50 ),

				     Field::make( 'text', 'crb_testimonials_text_ro', __( 'crb_testimonials_text_ro' ) )
				          ->set_width( 50 ),
				     Field::make( 'text', 'crb_testimonials_text_ru', __( 'crb_testimonials_text_ru' ) )
				          ->set_width( 50 ),
			     ) )
			     ->set_layout( 'tabbed-horizontal' )
		) );
	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Translates' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Buttons' ), array(
			Field::make( 'text', 'crb_read_more_ro', __( 'crb_read_more_ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_read_more_ru', __( 'crb_read_more_ru' ) )
			     ->set_width( 50 ),

			Field::make( 'text', 'crb_to_the_main_ro', __( 'crb_to_the_main_ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_to_the_main_ru', __( 'crb_to_the_main_ru' ) )
			     ->set_width( 50 ),

			Field::make( 'text', 'crb_error_ro', __( 'crb_error_ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_error_ru', __( 'crb_error_ru' ) )
			     ->set_width( 50 ),
		) )
	         ->add_tab( __( 'Products block' ), array(
		         Field::make( 'text', 'crb_products_block_subtitle_ro', __( 'crb_products_block_subtitle_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_products_block_subtitle_ru', __( 'crb_products_block_subtitle_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_products_block_title_ro', __( 'crb_products_block_title_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_products_block_title_ru', __( 'crb_products_block_title_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_products_specifications_ro', __( 'crb_products_specifications_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_products_specifications_ru', __( 'crb_products_specifications_ru' ) )
		              ->set_width( 50 ),

	         ) )
	         ->add_tab( __( 'Popup form' ), array(
		         Field::make( 'text', 'crb_popup_subtitle_ro', __( 'crb_popup_subtitle_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_popup_subtitle_ru', __( 'crb_popup_subtitle_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_popup_title_ro', __( 'crb_popup_title_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_popup_title_ru', __( 'crb_popup_title_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_popup_btn_ro', __( 'crb_popup_btn_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_popup_btn_ru', __( 'crb_popup_btn_ru' ) )
		              ->set_width( 50 ),

	         ) )
	         ->add_tab( __( 'Footer' ), array(
		         Field::make( 'textarea', 'crb_footer_text_ro', __( 'crb_footer_text_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_footer_text_ru', __( 'crb_footer_text_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_footer_location_ro', __( 'crb_footer_location_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_footer_location_ru', __( 'crb_footer_location_ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Copyright' ), array(
		         Field::make( 'text', 'crb_copyright_ro', __( 'crb_copyright_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_copyright_ru', __( 'crb_copyright_ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Detalies contacts' ), array(
		         Field::make( 'text', 'crb_detalies_title_ro', __( 'crb_detalies_title_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_detalies_title_ru', __( 'crb_detalies_title_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_detalies_text_ro', __( 'crb_detalies_text_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_detalies_text_ru', __( 'crb_detalies_text_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_form_title_ro', __( 'crb_form_title_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_form_title_ru', __( 'crb_form_title_ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Contra status' ), array(
		         Field::make( 'text', 'crb_status_title_ro', __( 'crb_status_title_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_title_ru', __( 'crb_status_title_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_form_title_ro', __( 'crb_status_form_title_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_form_title_ru', __( 'crb_status_form_title_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_form_placeholder_ro', __( 'crb_status_form_placeholder_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_form_placeholder_ru', __( 'crb_status_form_placeholder_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_company_ro', __( 'crb_status_company_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_company_ru', __( 'crb_status_company_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_name_ro', __( 'crb_status_name_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_name_ru', __( 'crb_status_name_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_contor_ro', __( 'crb_status_contor_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_contor_ru', __( 'crb_status_contor_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_contor_status_ro', __( 'crb_status_contor_status_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_contor_status_ru', __( 'crb_status_contor_status_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_number_ro', __( 'crb_status_number_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_number_ru', __( 'crb_status_number_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_status_ro', __( 'crb_status_status_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_status_ru', __( 'crb_status_status_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_find_ro', __( 'crb_status_find_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_find_ru', __( 'crb_status_find_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_done_ro', __( 'crb_status_done_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_done_ru', __( 'crb_status_done_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_wait_ro', __( 'crb_status_wait_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_wait_ru', __( 'crb_status_wait_ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_status_bad_ro', __( 'crb_status_bad_ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_status_bad_ru', __( 'crb_status_bad_ru' ) )
		              ->set_width( 50 ),

	         ) );

}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../../vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
