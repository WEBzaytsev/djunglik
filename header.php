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

<body <?php body_class( 'text-grey bg-beige overflow-x-hidden md:pt-8 pt-6.5' ); ?>>
<?php wp_body_open(); ?>
<div class="fixed w-full bg-ochre z-20 bottom-0 top-25 left-0 transition-all duration-300 -translate-x-[120vw] mob-menu overflow-y-scroll pb-5"
	 id="mob-menu">
	<div class="px-5 py-15 h-full flex flex-col justify-between gap-10">
		<nav class="mob-main-navigation">
			<?php
			wp_nav_menu(
				[
					'theme_location' => 'menu-1',
					'menu_id' => 'main-menu',
				]
			);
			?>
		</nav>
		<div class="pb-10">
			<a href="tel:<?php echo esc_attr( get_field( 'telefon', 'option' ) ); ?>"
			   class="block mb-2 font-unbounded text-heading-4-pc font-bold">
				<?php echo esc_html( get_field( 'telefon', 'option' ) ); ?>
			</a>
			<p class="font-unbounded text-sm mb-8">
				<?php echo esc_html( get_field( 'rezhim_raboty', 'option' ) ); ?>
			</p>
			<a href="#"
			   class="bg-red block rounded-60 px-5 pt-4 pb-5 text-white font-extrabold text-pure-text-pc text-center w-full max-w-[400px] whitespace-nowrap">
				Забронировать визит
			</a>
		</div>
	</div>
</div>
<div id="page" class="relative z-10">

	<header class="px-5 relative">
		<div class="absolute z-10 -top-10 -bottom-1 w-full bg-ochre left-0 transition-all duration-300 mob-menu-header-bg -translate-x-[120vw]"
			 id="mob-menu-header-bg"></div>

		<div class="max-w-huge mx-auto flex items-center w-full justify-between relative z-20">

			<div class="mob-menu-button md:hidden block" id="mob-menu-button">
				<svg width="24" height="23" viewBox="0 0 24 23" fill="none"
					 class="mob-menu-button-show">
					<path d="M0 1.5C0 0.671573 0.671573 0 1.5 0H22.5C23.3284 0 24 0.671573 24 1.5C24 2.32843 23.3284 3 22.5 3H1.5C0.671573 3 0 2.32843 0 1.5Z"
						  fill="#333333"/>
					<path d="M0 11.5C0 10.6716 0.671573 10 1.5 10H22.5C23.3284 10 24 10.6716 24 11.5C24 12.3284 23.3284 13 22.5 13H1.5C0.671573 13 0 12.3284 0 11.5Z"
						  fill="#333333"/>
					<path d="M1.5 20C0.671573 20 0 20.6716 0 21.5C0 22.3284 0.671573 23 1.5 23H22.5C23.3284 23 24 22.3284 24 21.5C24 20.6716 23.3284 20 22.5 20H1.5Z"
						  fill="#333333"/>
				</svg>

				<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
					 class="mob-menu-button-hide hidden">
					<path d="M2.8641 23.9975C2.05865 24.8029 0.930823 24.981 0.345037 24.3952C-0.24075 23.8094 -0.062672 22.6816 0.742784 21.8761L9.89098 12.7279L0.742784 3.57974C-0.062672 2.77429 -0.24075 1.64646 0.345037 1.06068C0.930823 0.474889 2.05865 0.652966 2.8641 1.45842L12.0123 10.6066L21.1605 1.45842C21.966 0.652965 23.0938 0.474887 23.6796 1.06067C24.2653 1.64646 24.0873 2.77429 23.2818 3.57974L14.1336 12.7279L23.2818 21.8761C24.0873 22.6816 24.2653 23.8094 23.6796 24.3952C23.0938 24.981 21.966 24.8029 21.1605 23.9975L12.0123 14.8493L2.8641 23.9975Z"
						  fill="#333333"/>
				</svg>
			</div>

			<div class="flex items-center xl:gap-x-16.5 gap-x-6">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo esc_url( get_field( 'logotip_dlya_shapki', 'option' )['url'] ); ?>"
						 class="xl:w-auto w-[174px]"
						 alt="img">
				</a>
				<nav class="main-navigation md:block hidden">
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
					 class="absolute z-10 -bottom-[68px] top-auto -left-[68px] lg:block hidden"
					 viewBox="0 0 376 395" fill="none">
					<path d="M351.089 330.563C318.98 377.118 250.408 391.104 197.258 393.774C141.004 396.599 80.568 387.424 41.9418 339.37C2.03951 289.728 -6.57053 218.832 5.39306 155.079C16.9208 93.6482 52.3621 41.9902 102.636 15.9315C150.996 -9.13498 207.115 -1.48754 256.746 24.7947C306.036 50.8961 347.718 95.0412 362.824 153.714C378.184 213.38 383.95 282.916 351.089 330.563Z"
						  fill="#FEE6A6"/>
				</svg>
				<a href="tel:<?php echo esc_attr( get_field( 'telefon', 'option' ) ); ?>"
				   class="block xl:mb-2 font-unbounded hover:underline text-black xl:text-heading-4-pc text-pure-text-pc font-bold relative z-20">
					<span class="lg:block hidden">
						<?php echo esc_html( get_field( 'telefon', 'option' ) ); ?>
					</span>
					<svg width="29" height="29"
						 class="lg:hidden block"
						 viewBox="0 0 29 29" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd"
							  d="M6.19417 1.36176C6.77903 0.867656 7.6466 0.881175 8.21528 1.39325L14.6604 7.19687C14.9673 7.47321 15.1461 7.86103 15.1554 8.27035C15.1646 8.67967 15.0035 9.07493 14.7094 9.36443L12.3273 11.7093C12.1305 11.9074 12.0203 12.1736 12.0203 12.4508C12.0203 12.728 12.1305 12.9942 12.3273 13.1924L16.0177 16.8251C16.0183 16.8257 16.0189 16.8263 16.0196 16.8269C16.2212 17.0228 16.4932 17.1327 16.7766 17.1327C17.0601 17.1327 17.332 17.0228 17.5337 16.8269C17.5344 16.8263 17.535 16.8257 17.5356 16.8251L19.9181 14.4799C20.512 13.8952 21.4747 13.8939 22.0703 14.477L28.5507 20.821C28.8414 21.1056 29.0034 21.4936 28.9999 21.8972C28.9965 22.3009 28.8279 22.6861 28.5324 22.9659L25.1302 26.1862C23.0352 28.2445 19.8373 28.3602 16.8048 27.4793C13.7037 26.5784 10.3671 24.5476 7.46414 21.6591C4.56886 18.7782 2.49572 15.4863 1.55841 12.434C0.641419 9.44788 0.716106 6.28189 2.82935 4.20987C2.85605 4.18369 2.88372 4.1585 2.91232 4.13434L6.19417 1.36176ZM4.94522 6.37055C4.04117 7.29213 3.69915 9.03645 4.47591 11.5659C5.24231 14.0617 7.01222 16.9435 9.63088 19.5491C12.2418 22.147 15.1472 23.8696 17.6675 24.6018C20.2504 25.3521 22.0465 24.9824 22.9832 24.0567C22.9909 24.0491 22.9987 24.0415 23.0066 24.0341L25.2965 21.8666L20.9986 17.6591L19.6862 18.951L19.6817 18.9554C18.909 19.7097 17.8649 20.1329 16.7766 20.1329C15.6884 20.1329 14.6443 19.7097 13.8716 18.9554L13.867 18.951L10.1592 15.3011C9.3987 14.5413 8.97243 13.5175 8.97243 12.4508C8.97243 11.3842 9.39873 10.3603 10.1592 9.60052L10.1672 9.59259L11.4276 8.35197L7.15445 4.50414L4.94522 6.37055Z"
							  fill="#333333"/>
					</svg>
				</a>
				<p class="text-black font-unbounded text-sm relative z-20 lg:block hidden">
					<?php echo esc_html( get_field( 'rezhim_raboty', 'option' ) ); ?>
				</p>
			</div>
		</div>
	</header>
