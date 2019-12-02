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

add_action( 'carbon_fields_register_fields', 'crb_attach_product_options' );
function crb_attach_product_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'product' )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_product_type_ro', __( 'Tip contor ro' ) )
		              ->set_width(50),
		         Field::make( 'text', 'crb_product_type_ru', __( 'Tip contor ru' ) )
		              ->set_width(50),

		         Field::make( 'text', 'crb_minimum_measured_ro', __( 'Cheltuiala minimă măsurată ro' ) )
		              ->set_width(50),
		         Field::make( 'text', 'crb_minimum_measured_ru', __( 'Cheltuiala minimă măsurată ru' ) )
		              ->set_width(50),

		         Field::make( 'text', 'crb_maximum_flow', __( 'Fluxul măsurat maxim' ) ),
		         Field::make( 'text', 'crb_maximum_pressure', __( 'Presiunea maximă de lucru' ) ),
		         Field::make( 'text', 'crb_diametre', __( 'Diametrul nominal' ) ),
		         Field::make( 'text', 'crb_center_distance', __( 'Distanța de centru' ) ),
		         Field::make( 'text', 'crb_interaction_interval', __( 'Interval de interacțiune' ) ),
		         Field::make( 'text', 'crb_duration', __( 'Durata de viață' ) ),
		         Field::make( 'text', 'crb_dimensions', __( 'Dimensiuni' ) ),
	         ) );
}
