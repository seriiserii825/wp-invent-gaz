<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_single_post_options' );
function crb_attach_single_post_options() {
	Container::make( 'post_meta', __( 'Single post' ) )
	         ->where( 'post_id', '=', 8 )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_single_post_subtitle_ro', __( 'Subtitle ro' ) )
		              ->set_width(50),
		         Field::make( 'text', 'crb_single_post_subtitle_ru', __( 'Subtitle ru' ) )
		              ->set_width(50),

		         Field::make( 'text', 'crb_single_post_title_ro', __( 'Title ro' ) )
		              ->set_width(50),
		         Field::make( 'text', 'crb_single_post_title_ru', __( 'Title ru' ) )
		              ->set_width(50),

		         Field::make( 'rich_text', 'crb_single_post_text_ro', __( 'Text ro' ) )
		              ->set_width(50),
		         Field::make( 'rich_text', 'crb_single_post_text_ru', __( 'Text ru' ) )
		              ->set_width(50),

		         Field::make( 'media_gallery', 'crb_single_post_gallery', __( 'Media Gallery' ) )
	         ) );
}
