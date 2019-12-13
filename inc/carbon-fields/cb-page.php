<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_page_status_options');
function crb_attach_page_status_options()
{
	Container::make('post_meta', __('Fields'))
		->where('post_id', '=', 15)
		->add_tab(__('Image'), array(
			Field::make( 'media_gallery', 'crb_status_gallery', __( 'Media Gallery' ) )
		));
}
