<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Djunglik
 */

$djun_is_leaves = $args['is_leaves'] ?? true;
?>

<div class="relative">
	<footer class="bg-green-800 relative md:pb-[85px] pb-[116px] z-50">

		<svg class="absolute left-0 w-full top-auto bottom-full z-20"
			 viewBox="0 0 1440 71" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1617.46 84.4016C1797.67 127.602 1882.48 183.001 1901.02 241.001C1907.62 261.636 1905.83 339.771 1896.97 360.631C1861.21 444.77 1750.88 532.299 1431.86 578.341C1102.3 625.904 676.693 622.045 312.318 589.333C-38.7797 557.812 -310.043 493.099 -416.708 412.382C-455.317 383.164 -465.618 296.232 -452.737 266.879C-431.387 218.226 -346.35 170.692 -220.966 128.604C-21.3161 61.587 277.528 10.0923 637.189 1.44478C1002.93 -7.34907 1367.42 24.4572 1617.46 84.4016Z"
				  fill="#046E52"/>
		</svg>

		<?php if ( $djun_is_leaves ) : ?>
			<div class="absolute z-10 -left-[134px] -top-[195px] md:block hidden">
				<?php get_template_part( '/vector-images/footer-leaves', 'left' ); ?>
			</div>

			<div class="absolute z-10 left-auto -right-[55px] -top-[196px] md:block hidden">
				<?php get_template_part( '/vector-images/footer-leaves', 'right' ); ?>
			</div>
		<?php endif; ?>

		<div class="relative z-30 text-white bg-green-800 md:pt-10 pt-16.5 px-5">
			<div class="max-w-huge mx-auto">
				<div class="grid md:grid-cols-3 gap-x-3">
					<div class="md:mb-0 mb-12">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
						   class="block md:mb-7.5 mb-6"
						   rel="home">
							<img src="<?php echo esc_url( get_field( 'logotip_dlya_futera', 'option' )['url'] ); ?>"
								 alt="img">
						</a>
						<p class="text-sm">
							<?php the_field( 'adres', 'option' ); ?>
						</p>
					</div>
					<nav class="footer-navigation md:mb-0 mb-16">
						<?php
						wp_nav_menu(
							[
								'theme_location' => 'menu-footer',
								'menu_id' => 'footer-menu',
							]
						);
						?>
					</nav>
					<div class="">
						<div class="md:mx-auto md:max-w-[220px] w-full grid gap-4">
							<a href="tel:<?php echo esc_attr( get_field( 'telefon', 'option' ) ); ?>"
							   class="block font-unbounded hover:underline text-heading-4-pc font-bold">
								<?php echo esc_html( get_field( 'telefon', 'option' ) ); ?>
							</a>
							<p class="font-unbounded text-sm">
								<?php echo esc_html( get_field( 'rezhim_raboty', 'option' ) ); ?>
							</p>
							<a href="https://mailto:<?php echo esc_attr( get_field( 'email', 'option' ) ); ?>"
							   class="font-unbounded text-sm hover:underline">
								<?php echo esc_html( get_field( 'email', 'option' ) ); ?>
							</a>

							<div class="flex items-center gap-x-6 mt-5">
								<a href="<?php echo esc_url( get_field( 'ssylka_na_viber', 'option' ) ); ?>">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<path d="M3.8568 19.8577L4.75122 20.3049L5.02786 19.7516L4.65632 19.257L3.8568 19.8577ZM6.14218 22.1431L6.74282 21.3435L6.24825 20.972L5.69497 21.2486L6.14218 22.1431ZM1.57141 24.4284L0.676984 23.9812C0.48449 24.3662 0.559944 24.8312 0.864304 25.1355C1.16866 25.4399 1.63364 25.5154 2.01862 25.3229L1.57141 24.4284ZM8.42855 8.42844L7.82855 7.62844C7.57675 7.8173 7.42855 8.11369 7.42855 8.42844H8.42855ZM17.5714 17.5713V18.5713C17.8664 18.5713 18.1463 18.4411 18.3363 18.2154L17.5714 17.5713ZM9.13879 7.89577L8.53879 7.09577L9.13879 7.89577ZM10.9585 8.6683L9.96626 8.79234V8.79234L10.9585 8.6683ZM11.2164 10.731L12.2086 10.6069V10.6069L11.2164 10.731ZM10.8905 11.6808L10.1834 10.9737L10.8905 11.6808ZM18.078 16.9697L17.3131 16.3255V16.3255L18.078 16.9697ZM17.3693 15.1027L17.5141 14.1132L17.3693 15.1027ZM15.2821 14.7973L15.4269 13.8078L15.2821 14.7973ZM14.3085 15.1199L15.0156 15.8271L15.0156 15.8271L14.3085 15.1199ZM0.571425 12.9999C0.571425 15.797 1.49662 18.3809 3.05727 20.4583L4.65632 19.257C3.34694 17.5141 2.57143 15.349 2.57143 12.9999H0.571425ZM13 0.571289C6.13589 0.571289 0.571425 6.13575 0.571425 12.9999H2.57143C2.57143 7.24032 7.24046 2.57129 13 2.57129V0.571289ZM25.4286 12.9999C25.4286 6.13575 19.8641 0.571289 13 0.571289V2.57129C18.7595 2.57129 23.4286 7.24032 23.4286 12.9999H25.4286ZM13 25.4284C19.8641 25.4284 25.4286 19.864 25.4286 12.9999H23.4286C23.4286 18.7594 18.7595 23.4284 13 23.4284V25.4284ZM5.54155 22.9426C7.61898 24.5032 10.2029 25.4284 13 25.4284V23.4284C10.6509 23.4284 8.48578 22.6529 6.74282 21.3435L5.54155 22.9426ZM2.01862 25.3229L6.5894 23.0375L5.69497 21.2486L1.1242 23.534L2.01862 25.3229ZM2.96237 19.4104L0.676984 23.9812L2.46584 24.8757L4.75122 20.3049L2.96237 19.4104ZM7.42855 8.42844V9.5713H9.42855V8.42844H7.42855ZM16.4286 18.5713H17.5714V16.5713H16.4286V18.5713ZM7.42855 9.5713C7.42855 14.5419 11.458 18.5713 16.4286 18.5713V16.5713C12.5626 16.5713 9.42855 13.4373 9.42855 9.5713H7.42855ZM9.02855 9.22844L9.73879 8.69577L8.53879 7.09577L7.82855 7.62844L9.02855 9.22844ZM9.96626 8.79234L10.2241 10.855L12.2086 10.6069L11.9508 8.54427L9.96626 8.79234ZM10.1834 10.9737L8.8643 12.2928L10.2785 13.707L11.5976 12.3879L10.1834 10.9737ZM10.2241 10.855C10.2296 10.8987 10.2145 10.9425 10.1834 10.9737L11.5976 12.3879C12.0651 11.9203 12.2907 11.2631 12.2086 10.6069L10.2241 10.855ZM9.73879 8.69577C9.82654 8.62996 9.95265 8.68349 9.96626 8.79234L11.9508 8.54427C11.7467 6.91164 9.85506 6.10857 8.53879 7.09577L9.73879 8.69577ZM18.3363 18.2154L18.843 17.6138L17.3131 16.3255L16.8065 16.9272L18.3363 18.2154ZM17.5141 14.1132L15.4269 13.8078L15.1373 15.7867L17.2245 16.0922L17.5141 14.1132ZM13.6014 14.4128L12.2929 15.7213L13.7071 17.1356L15.0156 15.8271L13.6014 14.4128ZM15.4269 13.8078C14.757 13.7098 14.0801 13.9341 13.6014 14.4128L15.0156 15.8271C15.0475 15.7951 15.0926 15.7802 15.1373 15.7867L15.4269 13.8078ZM18.843 17.6138C19.9246 16.3294 19.1757 14.3564 17.5141 14.1132L17.2245 16.0922C17.3353 16.1084 17.3852 16.2399 17.3131 16.3255L18.843 17.6138Z"
											  fill="white"/>
									</svg>
								</a>
								<a href="<?php echo esc_url( get_field( 'ssylka_na_telegram', 'option' ) ); ?>">
									<svg width="26" height="24" viewBox="0 0 26 24" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<path d="M24.4284 3.28564L1.57129 11.4489L8.1019 14.7142L17.8978 8.1836L11.3672 16.3469L21.1631 22.8775L24.4284 3.28564Z"
											  stroke="white" stroke-width="2" stroke-linejoin="round"/>
									</svg>
								</a>
								<a href="<?php echo esc_url( get_field( 'ssylka_na_vk', 'option' ) ); ?>">
									<svg width="28" height="20" viewBox="0 0 28 20" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd"
											  d="M0.285567 1.18701C0.473667 0.994956 0.731173 0.886719 1 0.886719H5.44971C5.99433 0.886719 6.43881 1.32255 6.44951 1.86707C6.56342 7.66352 8.62639 10.4866 10.4746 11.6189V1.88672C10.4746 1.33443 10.9223 0.886719 11.4746 0.886719H15.6647C16.2169 0.886719 16.6647 1.33443 16.6647 1.88672V6.98607C17.3225 6.68422 18.0036 6.18444 18.6461 5.50782C19.6474 4.45317 20.4644 3.05992 20.8732 1.61457C20.995 1.18399 21.388 0.886719 21.8355 0.886719H26.0254C26.321 0.886719 26.6015 1.01748 26.7915 1.24389C26.9815 1.47031 27.0616 1.76918 27.0103 2.06027C26.394 5.55705 24.212 8.2819 22.2036 9.88895C24.3342 11.291 26.8672 13.8509 27.9643 17.8455C28.0469 18.1463 27.9844 18.4685 27.7952 18.7166C27.6061 18.9647 27.312 19.1103 27 19.1103H22.3878C21.9533 19.1103 21.5685 18.8297 21.4357 18.416C20.6634 16.0107 18.9273 14.1536 16.6647 13.5153V18.1103C16.6647 18.6626 16.2169 19.1103 15.6647 19.1103H15.1611C10.4745 19.1103 6.69252 17.4937 4.071 14.4514C1.46945 11.4324 0.1089 7.12432 0.000217228 1.90755C-0.00538215 1.63878 0.0974677 1.37907 0.285567 1.18701ZM2.03876 2.88672C2.28662 7.31166 3.53574 10.7665 5.58608 13.1459C7.68454 15.5811 10.712 16.9949 14.6647 17.1036V12.3127C14.6647 12.0303 14.7841 11.761 14.9935 11.5714C15.2028 11.3819 15.4826 11.2897 15.7637 11.3176C19.2387 11.6634 21.8654 14.0488 23.09 17.1103H25.6134C24.2398 13.643 21.592 11.6724 19.9008 10.8796C19.5636 10.7216 19.3422 10.3892 19.3262 10.0171C19.3102 9.64499 19.5023 9.29484 19.8248 9.10844C21.5081 8.13527 23.8151 5.89589 24.7545 2.88672H22.563C22.0203 4.38479 21.1437 5.782 20.0964 6.88493C18.8942 8.15111 17.3742 9.1233 15.7716 9.29572C15.4894 9.32609 15.2076 9.2351 14.9964 9.04543C14.7853 8.85577 14.6647 8.5853 14.6647 8.30146V2.88672H12.4746V13.1247C12.4746 13.4326 12.3327 13.7234 12.09 13.9129C11.8473 14.1024 11.5308 14.1695 11.2321 14.0948C8.18366 13.3327 4.89955 9.93315 4.48788 2.88672H2.03876Z"
											  fill="white"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="grid md:grid-cols-3 gap-x-3 gap-y-2 md:mt-10.5 mt-15">
					<p class="text-xs">
						<?php echo esc_html( '&copy;&nbsp;' . gmdate( 'Y' ) . '&nbsp;' . get_field( 'copyright_text', 'option' ) ); ?>
					</p>
					<a href="#" class="text-xs hover:underline">Политикой информационной безопасности</a>
					<div class="md:mx-auto md:max-w-[220px] w-full">
						<a href="#" class="text-xs hover:underline">Пользовательское соглашение</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
</div>

<div id="modal"
	 class="modal fixed top-0 left-0 bottom-0 right-0 -z-50 bg-grey/30 opacity-0 invisible transition-all duration-300 md:block flex items-end">
	<div class="modal-inner bg-white xl:w-1/2 lg:w-[60%] md:w-[70%] w-full md:rounded-tl-50 rounded-tl-25 md:rounded-bl-50 md:rounded-tr-0 rounded-tr-25 md:h-full h-[70vh] relative md:ml-auto md:px-16 px-5 md:pt-16 pt-10 md:pb-16 pb-7.5 transition-all duration-300 md:translate-x-[100vw] md:translate-y-0 translate-y-[100vh]">
		<div id="hide-modal-cross"
			 class="absolute z-10 cursor-pointer w-5 h-5 top-8 left-auto right-8 group md:block hidden">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					  d="M10 12.2222L17.7778 20L20 17.7778L12.2222 10L20 2.22222L17.7778 0L10 7.77778L2.22222 0L0 2.22222L7.77778 10L0 17.7778L2.22222 20L10 12.2222Z"
					  class="fill-black/60 group-hover:fill-black"/>
			</svg>
		</div>
		<div class="absolute md:hidden block w-17.5 h-1 bg-grey-600 z-10 top-5 left-1/2 -translate-x-1/2 rounded-full"></div>
		<div id="modal-content" class="max-h-full overflow-y-auto">
			<!-- todo: set loader -->
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
