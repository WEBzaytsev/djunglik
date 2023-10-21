<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Djunglik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'text-grey bg-beige overflow-x-hidden pt-8' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header class="max-w-huge mx-auto">
		<div class="flex items-center w-full justify-between">
			<div class="flex items-center gap-x-16.5">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo esc_url( get_field( 'logotip_dlya_shapki', 'option' )['url'] ); ?>"
						 alt="img">
				</a>
				<nav class="main-navigation">
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'menu-1',
							'menu_id' => 'main-menu',
						]
					);
					?>
				</nav>
			</div>

			<div class="relative">
				<svg width="376" height="395"
					 class="absolute z-10 -bottom-[68px] block top-auto -left-[68px]"
					 viewBox="0 0 376 395" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M351.089 330.563C318.98 377.118 250.408 391.104 197.258 393.774C141.004 396.599 80.568 387.424 41.9418 339.37C2.03951 289.728 -6.57053 218.832 5.39306 155.079C16.9208 93.6482 52.3621 41.9902 102.636 15.9315C150.996 -9.13498 207.115 -1.48754 256.746 24.7947C306.036 50.8961 347.718 95.0412 362.824 153.714C378.184 213.38 383.95 282.916 351.089 330.563Z"
						  fill="#FEE6A6"/>
				</svg>
				<a href="tel:<?php echo esc_attr( get_field( 'telefon', 'option' ) ); ?>"
				   class="block mb-2 font-unbounded hover:underline text-black text-heading-4-pc font-bold relative z-20">
					<?php echo esc_html( get_field( 'telefon', 'option' ) ); ?>
				</a>
				<p class="text-black font-unbounded text-sm relative z-20">
					<?php echo esc_html( get_field( 'rezhim_raboty', 'option' ) ); ?>
				</p>
			</div>
		</div>
	</header>
