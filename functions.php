<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

require_once __DIR__.'/inc/variables.php';
require_once __DIR__.'/inc/func.php';
require_once __DIR__.'/inc/bs-styles.php';
require_once __DIR__.'/inc/bs-setup.php';
require_once __DIR__.'/inc/bs-widgets.php';
require_once __DIR__.'/inc/bs-post-type.php';
require_once __DIR__.'/inc/bs-post-taxonomy.php';
require_once __DIR__.'/inc/carbon-fields/cb.php';
require_once __DIR__.'/inc/carbon-fields/cb-post-type.php';
require_once __DIR__.'/inc/carbon-fields/cb-post.php';
require_once __DIR__.'/inc/carbon-fields/cb-page.php';




function bs_invent_gaz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bs_invent_gaz_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_invent_gaz_content_width', 0 );

