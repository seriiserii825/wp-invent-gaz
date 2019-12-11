<?php

if (!defined('ABSPATH')) exit;

// хук для регистрации
add_action('init', 'create_taxonomy');
function create_taxonomy()
{
	
	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('type', ['product'], [
		'label' => '', // определяется параметром $labels->name
		'labels' => [
			'name' => 'Type',
			'singular_name' => 'Genre',
			'search_items' => 'Search Type',
			'all_items' => 'All Type',
			'view_item ' => 'View Genre',
			'parent_item' => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item' => 'Edit Type',
			'update_item' => 'Update Type',
			'add_new_item' => 'Add New Type',
			'new_item_name' => 'New Type Name',
			'menu_name' => 'Type',
		],
		'description' => '', // описание таксономии
		'public' => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical' => false,
		
		'rewrite' => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities' => array(),
		'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest' => null, // добавить в REST API
		'rest_base' => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	]);

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('type', ['product'], [
		'label' => '', // определяется параметром $labels->name
		'labels' => [
			'name' => 'Type',
			'singular_name' => 'Genre',
			'search_items' => 'Search Type',
			'all_items' => 'All Type',
			'view_item ' => 'View Genre',
			'parent_item' => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item' => 'Edit Type',
			'update_item' => 'Update Type',
			'add_new_item' => 'Add New Type',
			'new_item_name' => 'New Type Name',
			'menu_name' => 'Type',
		],
		'description' => '', // описание таксономии
		'public' => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical' => true,

		'rewrite' => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities' => array(),
		'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest' => null, // добавить в REST API
		'rest_base' => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	]);

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('control', ['laborator'], [
		'label' => '', // определяется параметром $labels->name
		'labels' => [
			'name' => 'Control',
			'singular_name' => 'Control',
			'search_items' => 'Search Type',
			'all_items' => 'All Type',
			'view_item ' => 'View Control',
			'parent_item' => 'Parent Control',
			'parent_item_colon' => 'Parent Control:',
			'edit_item' => 'Edit Type',
			'update_item' => 'Update Type',
			'add_new_item' => 'Add New Type',
			'new_item_name' => 'New Type Name',
			'menu_name' => 'Control',
		],
		'description' => '', // описание таксономии
		'public' => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical' => true,

		'rewrite' => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities' => array(),
		'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest' => null, // добавить в REST API
		'rest_base' => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	]);
}
