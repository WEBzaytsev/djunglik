<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Djunglik
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function djun_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'djun_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function djun_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'djun_pingback_header' );

/**
 * Start custom block
 *
 * @param array       $block The block settings and attributes.
 * @param string      $block_slug Block slug.
 * @param string|null $additional_classes Block css classes.
 * @return void
 */
function djun_custom_block_start( $block, string $block_slug, ?string $additional_classes ) {
	$classes = 'block-' . $block_slug;
	if ( ! empty( $block['className'] ) ) {
		$classes .= ' ' . $block['className'];
	}

	echo sprintf(
		'<section class="%s" id="%s">',
		esc_attr( $classes . ' ' . $additional_classes ),
		esc_attr( $block['id'] ),
	);
}

add_action( 'djun_custom_block_init', 'djun_custom_block_start', 10, 4 );

/**
 * End custom block.
 *
 * @return void
 */
function djun_custom_block_end(): void {

	global $djun_is_first_block_on_page;

	if ( isset( $djun_is_first_block_on_page ) && true === $djun_is_first_block_on_page ) {
		$djun_is_first_block_on_page = false;
	}

	echo '</section>';
}

add_action( 'djun_custom_block_close', 'djun_custom_block_end', 10 );
