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

/**
 * Display Breadcrumbs.
 *
 * @return void
 */
function djun_breadcrumbs(): void {
	$separator = '<span class="text-grey-600">/</span>';

	echo '<div class="mx-5 mt-12">';
	echo '<div class="max-w-huge mx-auto flex gap-x-4 text-sm">';
	echo '<a class="hover:underline" href="' . esc_url( home_url() ) . '">Главная</a>' . wp_kses_post( $separator );

	if ( is_category() || is_single() ) {
		the_category( $separator );
		if ( is_single() ) {
			echo wp_kses_post( $separator );
			echo '<span class="text-grey-200">' . esc_html( get_the_title() ) . '</span>';
		}
	} elseif ( is_page() ) {
		echo '<span class="text-grey-200">' . esc_html( get_the_title() ) . '</span>';
	}
	echo '</div>';
	echo '</div>';
}

/**
 * Customize Pagination.
 *
 * @param WP_Query|null $query WP_Query for pagination.
 * @return void
 */
function djun_pagination( ?WP_Query $query ): void {
	$djun_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$djun_prev_link = '<svg width="16" height="27" viewBox="0 0 16 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.0001 1.5L2.36376 13.5L14.0001 25.5" class="' . ( $djun_paged > 1 ? 'stroke-grey' : 'stroke-grey-200' ) . '" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>';
	$djun_prev_link = $djun_paged > 1 ? '<a href="' . esc_url( get_previous_posts_page_link() ) . '">' . $djun_prev_link . '</a>' : $djun_prev_link;
	$djun_next_link = '<svg width="16" height="27" viewBox="0 0 16 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 1.5L13.6364 13.5L2 25.5" class="' . ( $djun_paged < $query->max_num_pages ? 'stroke-grey' : 'stroke-grey-200' ) . '" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
</svg>';
	$djun_next_link = $djun_paged < $query->max_num_pages ? '<a href="' . esc_url( get_next_posts_page_link() ) . '">' . $djun_next_link . '</a>' : $djun_next_link;
	$djun_page_links = paginate_links(
		[
			'total' => $query->max_num_pages,
			'type' => 'array',
			'prev_next' => false,
		]
	);

	array_unshift( $djun_page_links, $djun_prev_link );
	$djun_page_links[] = $djun_next_link;
	echo implode( $djun_page_links ); // phpcs:ignore
}
