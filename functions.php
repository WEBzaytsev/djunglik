<?php
/**
 * Djunglik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Djunglik
 */

if ( ! defined( 'DJUNGLIK_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DJUNGLIK_VERSION', '1.0.05' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function djun_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Djunglik, use a find and replace
		* to change 'djun' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'djun', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		[
			'menu-1' => esc_html__( 'main-menu', 'djun' ),
			'menu-footer' => esc_html__( 'footer-menu', 'djun' ),
		]
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'djun_custom_background_args',
			[
				'default-color' => 'ffffff',
				'default-image' => '',
			]
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		[
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		]
	);
}
add_action( 'after_setup_theme', 'djun_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function djun_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'djun_content_width', 640 );
}
add_action( 'after_setup_theme', 'djun_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function djun_widgets_init() {
	register_sidebar(
		[
			'name'          => esc_html__( 'Sidebar', 'djun' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'djun' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}
add_action( 'widgets_init', 'djun_widgets_init' );

/**
 * Get ajax url
 *
 * @return string
 */
function djun_get_ajax_url():string {
	return get_template_directory_uri() . '/front-ajaxs.php';
}

/**
 * Enqueue scripts and styles.
 */
function djun_scripts() {
	$ajax_url = djun_get_ajax_url();

	$adapty_options = [
		'ajax_url' => $ajax_url,
		'home_url' => get_home_url(),
	];

	wp_dequeue_style( 'select2' );
	wp_dequeue_script( 'select2' );
	wp_deregister_script( 'select2' );
	wp_dequeue_script( 'jquery' );
	wp_deregister_script( 'jquery' );

	wp_enqueue_style( 'djun-style', get_stylesheet_uri(), [], DJUNGLIK_VERSION );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/css/style.min.css', [], DJUNGLIK_VERSION );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/dist/js/app.min.js', [], DJUNGLIK_VERSION, true );

	wp_localize_script( 'main-script', 'options', $adapty_options );
}
add_action( 'wp_enqueue_scripts', 'djun_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * ACF json save filter.
 *
 * @param string $path Path.
 *
 * @return string
 */
function djun_acf_json_save_point( string $path ): string {
	return get_stylesheet_directory() . '/acf-json';
}

add_filter( 'acf/settings/save_json', 'djun_acf_json_save_point' );

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		[
			'page_title' => 'Основные настройки',
			'menu_title' => 'Основные настройки',
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false,
		]
	);

	acf_add_options_page(
		[
			'page_title' => 'Форма обратной связи',
			'menu_title' => 'Форма обратной связи',
			'menu_slug' => 'feedback-form',
			'capability' => 'edit_posts',
			'redirect' => false,
		]
	);
}

if ( file_exists( __DIR__ . '/acf-blocks.php' ) ) {

	require get_template_directory() . '/acf-blocks.php';

	if ( function_exists( 'register_acf_blocks' ) ) {
		add_action( 'init', 'register_acf_blocks', 5 );
	}
}

/**
 * Register custom GB-block category
 * see https://support.advancedcustomfields.com/forums/topic/register-custom-gb-block-category/
 * see https://www.advancedcustomfields.com/resources/acf_register_block_type/
 */

require get_template_directory() . '/inc/gb-block-category.php';

/**
 * Create custom post types
 */

require get_template_directory() . '/inc/custom-post-type.php';

add_action( 'init', 'djun_review_post_type' );
