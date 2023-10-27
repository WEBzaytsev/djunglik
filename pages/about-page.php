<?php
/**
 * Template Name: О садике
 *
 * @package djun
 */

get_header();
?>

	<main class="relative overflow-hidden">
		<?php djun_breadcrumbs(); ?>

		<div class="relative z-10 px-5 md:mt-21 mt-4 md:mb-[190px] mb-[235px]">
			<div class="max-w-huge mx-auto relative z-20">
				<div class="md:flex xl:gap-x-[160px] lg:gap-x-20 gap-x-6 items-center">

					<h2 class="text-heading-1-mob font-bold mb-20 font-unbounded md:hidden block">
						<?php the_title(); ?>
					</h2>

					<?php $djun_kartinka = get_field( 'poster_dlya_video' ); ?>
					<?php $djun_video = get_field( 'video' ); ?>
					<?php if ( $djun_kartinka ) : ?>
						<div class="relative z-10 md:mb-0 mb-12.5">
							<div class="absolute z-10 lg:top-auto -top-11.5 left-auto lg:-bottom-5 lg:-right-[94px] -right-[54px]">
								<?php get_template_part( '/vector-images/front-page-second-section', 'img-bg' ); ?>
							</div>

							<svg class="absolute -z-50 opacity-0">
								<defs>
									<clipPath id="mask-path" clipPathUnits="objectBoundingBox">
										<path d="M0.024335 0.340546C-0.0503556 0.533543 0.0561717 0.734753 0.217474 0.867687C0.372411 0.995376 0.586057 1.04757 0.761009 0.947664C0.945049 0.842569 1.03339 0.631268 0.988448 0.427429C0.940594 0.210383 0.778437 0.0223388 0.552507 0.0019788C0.320806 -0.0189013 0.106748 0.127595 0.024335 0.340546Z"
											  fill="white"/>
									</clipPath>
								</defs>
							</svg>

							<?php if ( $djun_video['url'] ) : ?>
								<a href="<?php echo esc_url( $djun_video['url'] ); ?>"
								   data-fslightbox="gallery"
								   class="relative z-20">
									<div class="absolute left-[42.66%] top-[38.84%] z-30">
										<?php get_template_part( '/vector-images/icon', 'play' ); ?>
									</div>
							<?php endif; ?>
									<img src="<?php echo esc_url( $djun_kartinka['url'] ); ?>"
										 class="relative z-20 object-cover object-center"
										 width="<?php echo esc_attr( $djun_kartinka['width'] / 2 ); ?>"
										 height="<?php echo esc_attr( $djun_kartinka['height'] / 2 ); ?>"
										 style="clip-path: url(#mask-path); aspect-ratio: 593/605;"
										 alt="<?php echo esc_attr( $djun_kartinka['alt'] ); ?>"/>
							<?php if ( $djun_video['url'] ) : ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<div class="lg:max-w-md md:max-w-[50%] relative z-20 md:mb-0">
						<h2 class="xl:text-heading-2-pc text-heading-3-pc font-bold mb-8 font-unbounded md:block hidden">
							<?php the_title(); ?>
						</h2>
						<p class="md:text-pure-text-pc text-pure-text-base md:mb-16">
							<?php the_field( 'kratkij_tekst' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<?php if ( have_rows( 'blok_prejmushhestva' ) ) : ?>
			<?php
			while ( have_rows( 'blok_prejmushhestva' ) ) :
				the_row();
				?>
				<div class="relative z-20 mb-[320px]">

					<div class="absolute z-0 md:block hidden -left-20 -top-[190px]">
						<?php get_template_part( '/vector-images/stones-image' ); ?>
					</div>

					<div class="absolute z-0 block md:hidden -left-2 -top-[135px]">
						<?php get_template_part( '/vector-images/stones-with-leave' ); ?>
					</div>

					<svg width="317" height="297"
						 class="absolute z-0 left-auto -right-19.5 -top-50 md:block hidden"
						 viewBox="0 0 317 297" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M229.05 152.817C228.427 140.855 228.917 128.651 225.716 117.105C222.516 105.559 214.635 94.384 203.045 91.3055C191.455 88.2269 177.078 96.7471 177.434 108.721C177.56 113.566 179.266 119.833 175.029 122.155C170.792 124.478 166.5 119.932 164.906 115.658C162.299 108.654 162.611 100.96 162.324 93.509C162.037 86.0582 160.893 78.1887 156.094 72.4096C151.294 66.6306 141.671 64.5063 136.312 69.7109C134.306 71.6543 133.056 74.3894 130.667 75.833C126.657 78.2523 121.271 75.7725 118.323 72.0807C115.375 68.389 114.097 63.7624 111.704 59.7C103.32 45.56 80.4752 43.2828 69.3592 55.5379C58.2432 67.793 62.7908 90.2646 77.7457 97.2635C82.3841 99.4233 87.6516 100.261 91.8554 103.157C96.0592 106.053 98.8051 112.267 95.534 116.252C92.2629 120.237 85.884 118.937 80.987 120.622C72.8517 123.422 70.4358 134.813 74.5928 142.352C78.7498 149.891 87.2249 153.996 95.5447 156.171C103.864 158.346 112.597 159.119 120.556 162.282C123.354 163.385 126.432 165.374 126.481 168.395C126.538 173.224 119.825 174.195 115.221 175.567C104.177 178.883 99.9446 193.744 104.506 204.357C109.067 214.97 119.668 221.754 130.411 226.016C147.728 232.96 166.439 234.765 184.866 236.211C202.717 237.611 221.196 242.005 238.888 242.635C263.776 243.506 245.03 220.215 240.334 207.457C233.868 189.908 230.065 171.491 229.05 152.817Z"
							  fill="url(#paint0_linear_1004_6994)"/>
						<path d="M139.014 189.104C138.261 188.929 138.716 187.787 139.445 188C175.945 198.516 210.555 213.455 242.416 234.056C211.649 206.085 182.484 176.402 155.058 145.148C140.96 139.397 126.279 135.197 111.272 132.622C110.534 132.451 110.652 131.304 111.414 131.437C125.746 133.905 139.785 137.843 153.31 143.187C147.396 136.387 141.543 129.517 135.75 122.579C125.032 109.685 114.633 96.5711 104.555 83.238C104.459 83.1146 104.416 82.958 104.436 82.8028C104.455 82.6476 104.535 82.5065 104.659 82.4105C104.782 82.3144 104.939 82.2714 105.094 82.2908C105.249 82.3102 105.39 82.3904 105.486 82.5139C116.049 96.4583 126.933 110.139 138.136 123.557L135.888 97.4919C135.813 96.7403 136.996 96.5738 137.055 97.3361L139.476 124.938L139.437 125.105C159.289 148.814 180.116 171.652 201.918 193.619C196.309 171.424 192.817 148.746 191.489 125.891C191.441 125.146 192.625 124.98 192.67 125.739C194.026 149.2 197.668 172.474 203.542 195.228C210.097 201.795 216.727 208.287 223.434 214.703C235.466 226.15 247.708 237.302 260.16 248.16C260.734 248.66 260.033 249.598 259.455 249.112C255.572 245.718 251.709 242.299 247.867 238.855C247.756 238.858 247.646 238.833 247.547 238.781C214.205 216.267 177.657 200.19 139.014 189.104Z"
							  fill="url(#paint1_linear_1004_6994)"/>
						<defs>
							<linearGradient id="paint0_linear_1004_6994" x1="246.466" y1="232.152" x2="58.0665"
											y2="59.136" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A7B05"/>
								<stop offset="1" stop-color="#C7DC5E"/>
							</linearGradient>
							<linearGradient id="paint1_linear_1004_6994" x1="261.85" y1="268.081" x2="90.2486"
											y2="70.2412" gradientUnits="userSpaceOnUse">
								<stop stop-color="#192B3E"/>
								<stop offset="1" stop-color="#317A60"/>
							</linearGradient>
						</defs>
					</svg>

					<div class="absolute block -left-12.5 z-30 -bottom-[210px] top-auto">
						<?php get_template_part( '/vector-images/about-page-lion' ); ?>
					</div>

					<div class="absolute top-auto left-auto -right-25 -bottom-[230px] z-30 md:block hidden">
						<?php get_template_part( '/vector-images/front-page-second-section', 'leave' ); ?>
					</div>

					<svg class="w-full h-auto block absolute top-auto bottom-full left-0"
						 viewBox="0 0 1440 111" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1606.46 135.357C1850.77 229.287 1919.75 359.176 1885.97 486.666C1850.21 621.601 1739.88 761.974 1420.86 835.813C1091.3 912.091 665.693 905.902 301.318 853.441C-49.7798 802.89 -321.043 699.108 -427.708 569.659C-530.311 445.14 -432.998 314.467 -231.966 206.246C-32.3161 98.7687 266.528 16.1853 626.189 2.31702C991.934 -11.7859 1356.42 39.2226 1606.46 135.357Z"
							  fill="white"/>
					</svg>

					<svg class="w-full h-auto block absolute top-full left-0"
						 viewBox="0 0 1440 104" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1606.46 -653.643C1850.77 -559.713 1919.75 -429.824 1885.97 -302.334C1850.21 -167.399 1739.88 -27.0262 1420.86 46.8128C1091.3 123.091 665.693 116.902 301.318 64.4406C-49.7798 13.8902 -321.043 -89.8921 -427.708 -219.341C-530.311 -343.86 -432.998 -474.533 -231.966 -582.754C-32.3161 -690.231 266.528 -772.815 626.189 -786.683C991.934 -800.786 1356.42 -749.777 1606.46 -653.643Z"
							  fill="white"/>
					</svg>

					<div class="relative z-20 md:pt-11 pt-[75px] xl:pb-[75px] pb-[255px] bg-white px-5">
						<div class="max-w-huge mx-auto grid xl:grid-cols-[330px_auto] gap-x-21 gap-y-12 items-start">
							<div class="">
								<p class="xl:text-heading-1-pc lg:text-heading-2-pc md:text-heading-3-pc text-heading-1-mob font-bold xl:mb-8 mb-7.5 font-unbounded md:max-w-none max-w-[320px]">
									<?php the_sub_field( 'zagolovok' ); ?>
								</p>
								<p class="md:text-pure-text-pc text-pure-text-base">
									<?php the_sub_field( 'tekst' ); ?>
								</p>
							</div>
							<?php if ( have_rows( 'spisok_prejmushhestv' ) ) : ?>
								<div class="grid md:grid-cols-2 gap-8">
									<?php $djun_items_count = 0; ?>
									<?php
									while ( have_rows( 'spisok_prejmushhestv' ) ) :
										the_row();
										?>
										<p class="pl-8 relative font-unbounded text-heading-4-pc">
											<?php the_sub_field( 'tekst' ); ?>
											<span class="absolute block rounded-full bg-green-800 w-4 h-4 left-0 top-1.5"
												  style="clip-path: url(#mask-path); aspect-ratio: 593/605; transform: rotate(<?php echo esc_attr( $djun_items_count * 10 ); ?>deg);"></span>
										</p>
										<?php $djun_items_count++; ?>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if ( have_rows( 'blok_czennosti' ) ) : ?>
			<?php
			while ( have_rows( 'blok_czennosti' ) ) :
				the_row();
				?>
				<div class="relative z-10 mb-11.5">
					<div class="relative z-20 px-5">
						<div class="max-w-huge mx-auto grid xl:grid-cols-[600px_auto] md:grid-cols-2 items-start gap-x-8 gap-y-20">
							<div class="">
								<p class="xl:text-heading-1-pc lg:text-heading-2-pc md:text-heading-3-pc text-heading-1-mob font-bold md:mb-8 mb-4 font-unbounded">
									<?php the_sub_field( 'zagolovok' ); ?>
								</p>
								<p class="md:text-pure-text-pc text-pure-text-base">
									<?php the_sub_field( 'tekst' ); ?>
								</p>
							</div>
							<div class="">
								<div class="relative lg:w-[509px] sm:w-[381px] ml-auto">
									<svg class="absolute -z-50 opacity-0">
										<defs>
											<clipPath id="mask-path-2" clipPathUnits="objectBoundingBox">
												<path d="M0.844405 0.0883041C0.966236 0.185954 1.00254 0.343767 0.999864 0.495957C0.99711 0.652333 0.958899 0.815301 0.829916 0.911112C0.698256 1.00891 0.51769 1.02095 0.35918 0.971868C0.210629 0.925872 0.105904 0.80672 0.0462419 0.668463C-0.0115675 0.534498 -0.0204191 0.383468 0.049877 0.255104C0.120179 0.126729 0.255017 0.0484114 0.40279 0.0173885C0.556186 -0.0148147 0.723947 -0.00824599 0.844405 0.0883041Z"
													  fill="white"/>
											</clipPath>
										</defs>
									</svg>

									<svg width="209" height="207"
										 class="absolute z-10 -top-11 left-auto -right-9.5 block"
										 viewBox="0 0 209 207" fill="none"
										 xmlns="http://www.w3.org/2000/svg">
										<path d="M142.722 166.4L142.916 166.094C142.175 165.51 141.48 164.871 140.836 164.183C130.501 153.385 126.18 138.316 122.206 123.907C128.093 136.218 138.149 146.056 150.602 151.687C155.556 139.904 158.356 127.114 160.855 114.524C162.024 108.685 163.137 102.843 164.194 96.9962C161.473 95.3516 159.065 93.239 157.082 90.7563C152.249 84.6898 149.872 77.0321 148.314 69.4347C153.965 73.8047 159.763 78.24 166.5 80.5733L167.068 80.7566C170.365 61.3932 173.167 41.9997 175.473 22.5762L174.267 22.8495C161.11 26.1267 147.591 22.9322 134.1 20.0105C133.746 29.7559 134.449 39.5098 136.197 49.1021C129.364 41.9121 126.042 32.2672 122.857 22.9363C122.264 21.2101 121.762 19.4543 121.352 17.676C120.207 17.492 119.069 17.3393 117.95 17.1986C109.131 16.1114 100.197 16.3423 91.4436 17.8835C95.1388 33.2749 103.154 47.2926 114.55 58.2951C104.731 57.695 96.8866 50.2578 89.9669 43.268L75.4771 28.598C73.9212 27.1177 72.5236 25.4802 71.3067 23.7119C59.7338 28.4411 49.1776 35.3448 40.2126 44.0472C48.424 53.6846 59.128 61.4594 69.686 68.8074C57.1242 69.2475 44.5994 67.2432 32.8107 62.9063C30.7992 62.2249 28.8862 61.2834 27.1204 60.1058C26.6683 60.7996 26.2355 61.5055 25.8061 62.2269C18.6386 74.1997 14.367 88.3415 14.9119 102.082L41.8784 111.493C37.233 114.555 32.0844 116.779 26.6683 118.061C23.8193 118.629 20.8898 118.663 18.0292 118.163L18.4251 119.256C25.3963 137.009 44.9823 150.114 63.5947 146.569C63.439 147.48 63.3133 148.379 63.2179 149.266C62.1443 159.135 64.991 169.026 71.147 176.817C77.303 184.607 86.2776 189.676 96.1443 190.935C96.4162 190.972 96.6845 190.993 96.9528 191.014C95.8614 187.034 95.5575 182.88 96.0581 178.782C96.7723 170.536 98.8869 162.469 102.311 154.927C103.059 167.2 107.514 178.955 115.091 188.645C126.381 184.256 136.035 176.485 142.722 166.4Z"
											  fill="url(#paint0_linear_127_7221)"/>
										<path d="M63.4434 159.054C64.6623 167.202 68.5168 174.726 74.42 180.481C80.3232 186.236 87.9517 189.907 96.1442 190.935C96.4161 190.972 96.6844 190.993 96.9527 191.014C95.8613 187.034 95.5575 182.88 96.058 178.782C96.7722 170.536 98.8868 162.469 102.311 154.927C103.059 167.2 107.514 178.955 115.09 188.645C126.38 184.261 136.035 176.495 142.725 166.416L142.919 166.109C142.179 165.526 141.484 164.887 140.84 164.199C130.504 153.4 126.183 138.331 122.21 123.922C128.099 136.227 138.153 146.059 150.602 151.687C155.556 139.904 158.356 127.114 160.855 114.524C162.024 108.685 163.137 102.843 164.194 96.9962C161.473 95.3516 159.065 93.239 157.082 90.7563C152.249 84.6898 149.871 77.032 148.314 69.4347C153.965 73.8047 159.762 78.24 166.5 80.5733L167.068 80.7565C170.365 61.3932 173.167 41.9997 175.473 22.5762L174.267 22.8495C169.38 26.5029 131.401 54.6076 110.071 93.2465C88.7401 131.885 63.5946 146.569 63.5946 146.569L63.4434 159.054Z"
											  fill="url(#paint1_linear_127_7221)"/>
										<defs>
											<linearGradient id="paint0_linear_127_7221" x1="58.8772" y1="52.7453"
															x2="126.383" y2="101.136" gradientUnits="userSpaceOnUse">
												<stop stop-color="#255B51"/>
												<stop offset="1" stop-color="#112B27"/>
											</linearGradient>
											<linearGradient id="paint1_linear_127_7221" x1="94.585" y1="75.8176"
															x2="167.639" y2="133.483" gradientUnits="userSpaceOnUse">
												<stop stop-color="#255B51"/>
												<stop offset="1" stop-color="#112B27"/>
											</linearGradient>
										</defs>
									</svg>

									<svg width="211" height="228"
										 class="absolute z-30 -left-12.5 top-auto -bottom-10.5 md:block hidden"
										 viewBox="0 0 211 228" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M178.273 127.919C191.191 126.538 205.019 123.474 209.208 113.342C207.108 141.834 194.933 166.885 174.18 185.411C160.329 197.727 140.462 207.144 117.352 201.765C109.435 199.926 100.537 195.45 97.341 188.618C94.7912 183.058 96.8929 177.919 99.4399 173.591C107.405 160.117 119.653 149.449 135.149 142.49C141.599 139.565 146.217 134.854 152.912 132.283C160.616 129.426 169.656 128.837 178.273 127.919Z" fill="url(#paint0_linear_1004_7135)"/>
										<path d="M195.658 130.363C188.369 142.168 175.626 150.064 163.814 158.102C151.201 166.681 138.331 174.983 125.204 183.008C117.81 187.52 110.347 191.943 102.814 196.279C102.172 196.631 103.199 197.605 103.823 197.247C117.469 189.421 130.854 181.31 143.977 172.916C156.684 164.761 169.516 156.654 181.316 147.509C187.586 142.928 192.843 137.427 196.939 131.159C197.302 130.594 196.075 129.818 195.729 130.39L195.658 130.363Z" fill="black"/>
										<path d="M47.6029 99.1408C37.5021 88.8016 27.4159 76.4168 28.4539 65.0276C17.4968 90.1182 16.4293 119.538 25.383 149.663C31.3822 169.73 43.6673 191.696 65.2199 203.692C72.6089 207.805 81.9956 210.462 87.5789 207.026C92.0831 204.249 92.7168 198.476 92.5481 193.085C91.9568 176.253 86.5568 158.692 76.8062 141.892C72.6698 134.829 71.0431 127.671 66.6 120.767C61.5721 112.981 54.3393 106.05 47.6029 99.1408Z" fill="url(#paint1_linear_1004_7135)"/>
										<path d="M29.2985 88.1324C30.0814 103.086 37.0373 118.71 43.2482 133.713C49.8787 149.791 56.8583 165.839 64.1869 181.857C68.3644 190.982 72.6844 200.106 77.1467 209.228C77.4948 209.975 78.7815 209.853 78.4269 209.135C70.7718 193.299 63.4539 177.428 56.4733 161.523C49.5549 145.821 42.6352 130.041 36.8173 114.268C33.3969 105.597 31.3188 96.8687 30.6438 88.3396C30.6209 87.6096 29.2578 87.3956 29.2985 88.1324Z" fill="black"/>
										<path d="M111.679 196.561C98.1553 185.811 95.9005 183.144 85.4265 170.386C74.9525 157.629 67.885 142.573 70.069 129.861C71.6389 120.887 77.688 113.542 77.351 103.984C77.1046 95.6784 71.9152 86.9721 69.8855 78.3828C63.1348 50.9527 87.7702 31.3477 83.9664 4.23338C98.5232 33.4285 113.378 64.407 109.231 91.5379C108.051 99.2688 105.298 106.471 105.015 114.482C104.548 128.089 111.214 142.816 116.404 157.126C121.595 171.437 125.3 186.805 119.106 198.094L111.679 196.561Z" fill="url(#paint2_linear_1004_7135)"/>
										<path d="M86.887 119.3C92.6868 111.068 100.673 103.767 103.229 94.145C105.589 85.4182 103.241 75.6756 106.266 67.1498C109.613 57.7296 118.827 51.4525 126.762 44.7963C134.696 38.1402 142.134 29.3824 140.396 19.1816C157.618 44.4558 165.72 73.9215 164.758 102.341C163.796 130.76 153.987 158.114 137.975 181.597C133.084 188.774 127.453 195.773 119.512 200.25C111.571 204.728 100.897 206.341 91.8466 202.419C77.6643 196.264 77.162 177.265 75.6603 165.442C73.5703 148.969 77.512 132.768 86.887 119.3Z" fill="url(#paint3_linear_1004_7135)"/>
										<path d="M97.0524 203.978C92.7879 158.782 121.823 119.871 135.79 78.6424C139.811 67.2311 142.308 55.4063 143.238 43.3659C143.222 43.2217 143.144 43.0829 143.018 42.9743C142.893 42.8656 142.727 42.7942 142.552 42.7728C142.376 42.7514 142.202 42.7814 142.06 42.8574C141.919 42.9334 141.818 43.0505 141.778 43.1878C138.954 87.759 109.212 125.288 98.661 167.973C95.618 179.722 94.5958 191.886 95.623 204.124C95.6934 204.9 97.1242 204.739 97.0524 203.978Z" fill="black"/>
										<defs>
											<linearGradient id="paint0_linear_1004_7135" x1="123.689" y1="134.662" x2="186.587" y2="173.712" gradientUnits="userSpaceOnUse">
												<stop stop-color="#EAE46C"/>
												<stop offset="1" stop-color="#94C133"/>
											</linearGradient>
											<linearGradient id="paint1_linear_1004_7135" x1="76.1394" y1="123.901" x2="7.7662" y2="127.91" gradientUnits="userSpaceOnUse">
												<stop stop-color="#EAE46C"/>
												<stop offset="1" stop-color="#94C133"/>
											</linearGradient>
											<linearGradient id="paint2_linear_1004_7135" x1="28.6383" y1="84.7702" x2="102.555" y2="82.1321" gradientUnits="userSpaceOnUse">
												<stop stop-color="#3A7B05"/>
												<stop offset="1" stop-color="#C7DC5E"/>
											</linearGradient>
											<linearGradient id="paint3_linear_1004_7135" x1="84.4253" y1="227.453" x2="137.819" y2="81.8136" gradientUnits="userSpaceOnUse">
												<stop stop-color="#3A7B05"/>
												<stop offset="1" stop-color="#AABA38"/>
											</linearGradient>
										</defs>
									</svg>

									<div class="bg-ochre relative z-20 lg:pr-13.5 pr-6.5 lg:pt-[150px] pt-[114px]"
										 style="clip-path: url(#mask-path); aspect-ratio: 509/475;">
										<p class="text-white font-unbounded lg:text-heading-2-pc text-heading-3-pc lg:max-w-[360px] max-w-[320px] ml-auto text-center font-bold">
											<?php the_sub_field( 'deviz' ); ?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>

<?php
get_footer( null, [ 'is_leaves' => false ] );
