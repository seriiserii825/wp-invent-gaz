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
			->set_width(50),
			Field::make( 'text', 'crb_slider_title_ru', __( 'Slider title ru' ) )
			     ->set_width(50),

			Field::make( 'text', 'crb_slider_text_ro', __( 'Slider text ro' ) )
			     ->set_width(50),
			Field::make( 'text', 'crb_slider_text_ru', __( 'Slider text ru' ) )
			     ->set_width(50),

		) );
}
