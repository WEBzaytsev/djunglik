<?php
/**
 * Create custom post types functions
 *
 * @package djun
 */

/**
 * Create Review post type
 *
 * @return void
 */
function djun_review_post_type(): void {
	$labels = [
		'name'               => 'Отзывы',
		'singular_name'      => 'Отзыв',
		'add_new'            => 'Добавить отзыв',
		'add_new_item'       => 'Добавить новый отзыв',
		'edit_item'          => 'Редактировать отзыв',
		'new_item'           => 'Новый отзыв',
		'view_item'          => 'Смотреть отзыв',
		'search_items'       => 'Искать отзывы',
		'not_found'          => 'отзывов не найдено',
		'not_found_in_trash' => 'Не найдено в корзине',
		'parent_item_colon'  => 'dashicons-book-alt',
		'menu_name'          => 'Отзывы',
	];
	$args   = [
		'labels'        => $labels,
		'has_archive'   => true,
		// 'taxonomies'    => array( 'integrations_cat' ),
		'public'        => true,
		'hierarchical'  => true,
		'menu_position' => 6,
		'menu_icon'   => 'dashicons-editor-code',
		'show_in_rest'  => true,
		'show_in_nav_menus' => true,
		'supports'      => [
			'title',
			// 'editor',
			// 'excerpt',
					'custom-fields',
			// 'thumbnail',
					'page-attributes',
	// 'comments',
		],
	];
	register_post_type( 'reviews', $args );
}

/**
 * Create Review post type
 *
 * @return void
 */
function djun_teachers_post_type(): void {
	$labels = [
		'name'               => 'Педагоги',
		'singular_name'      => 'Педагог',
		'add_new'            => 'Добавить педагога',
		'add_new_item'       => 'Добавить нового педагога',
		'edit_item'          => 'Редактировать педагога',
		'new_item'           => 'Новый педагог',
		'view_item'          => 'Смотреть педагога',
		'search_items'       => 'Искать педагога',
		'not_found'          => 'Педагогов не найдено',
		'not_found_in_trash' => 'Не найдено в корзине',
		'parent_item_colon'  => 'dashicons-book-alt',
		'menu_name'          => 'Педагоги',
	];
	$args   = [
		'labels'        => $labels,
		'has_archive'   => true,
		// 'taxonomies'    => array( 'integrations_cat' ),
		'public'        => true,
		'hierarchical'  => true,
		'menu_position' => 6,
		'menu_icon'   => 'dashicons-editor-code',
		'show_in_rest'  => true,
		'show_in_nav_menus' => true,
		'supports'      => [
			'title',
			// 'editor',
			// 'excerpt',
			'custom-fields',
			// 'thumbnail',
			'page-attributes',
			// 'comments',
		],
	];
	register_post_type( 'teachers', $args );
}
