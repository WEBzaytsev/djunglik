<?php
/**
 * Custom blocks categories
 *
 * @package adapty
 */

/**
 * Create block categories array
 *
 * @param array $categories - An array of default categories.
 * @return array
 */
function djun_acf_block_category( array $categories ) {
	return array_merge(
		$categories,
		[
			[
				'slug' => 'front-page',
				'title' => esc_html__( 'Front Page', 'djun' ),
			],
		]
	);
}
add_filter( 'block_categories_all', 'djun_acf_block_category', 10, 2 );
