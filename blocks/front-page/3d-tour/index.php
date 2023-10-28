<?php
/**
 * Block template file: blocks/front-page/3d-tour/index.php
 *
 * 3d Tour Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or its parent block.
 *
 * @package djun
 */

/**
 * Init custom block
 *
 * @hooked djun_custom_block_start - 10
 */

$djun_block_slug = '3d-tour';
$djun_is_admin = is_admin();

$djun_classes = 'relative z-10 px-5 md:mt-[256px] mt-[145px] md:mb-[170px] mb-[110px]';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

	<div class="max-w-huge mx-auto">
		<div class="flex md:flex-row flex-col gap-y-14 items-center w-full justify-between gap-x-5">
			<?php $djun_kartinka = get_field( 'kartinka' ); ?>
			<?php if ( $djun_kartinka ) : ?>
				<div class="relative md:order-1 order-2">
					<svg class="absolute -z-50 opacity-0">
						<defs>
							<clipPath id="mask-3d-tour-image" clipPathUnits="objectBoundingBox">
								<path d="M0.024335 0.340546C-0.0503556 0.533543 0.0561716 0.734753 0.217474 0.867687C0.372411 0.995376 0.586057 1.04757 0.761009 0.947664C0.945049 0.842569 1.03339 0.631268 0.988448 0.427429C0.940594 0.210383 0.778437 0.0223388 0.552507 0.0019788C0.320806 -0.0189013 0.106748 0.127595 0.024335 0.340546Z"
									  fill="white"/>
							</clipPath>
						</defs>
					</svg>
					<?php if ( ! $djun_is_admin ) : ?>
						<svg width="544" height="518"
							 class="absolute z-10 top-auto lg:bottom-10 bottom-[5.13%] left-auto lg:-right-11 -right-[5.64%] lg:w-auto w-[70%] h-auto"
							 viewBox="0 0 544 518" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M455.961 484.63C520.246 440.335 539.595 345.684 543.313 272.316C547.247 194.664 534.619 111.231 468.308 57.881C399.806 2.76838 301.944 -9.16075 213.93 7.31486C129.123 23.1902 57.7909 72.0824 21.7879 141.466C-12.8443 208.208 -2.32212 285.681 33.928 354.209C69.9288 422.266 130.842 479.832 211.826 500.72C294.181 521.962 390.167 529.964 455.961 484.63Z"
								  fill="#FEE6A6"/>
						</svg>

						<svg width="195" height="218"
							 class="absolute z-10 -top-[1%] left-[2%] lg:w-auto w-[25%] h-auto"
							 viewBox="0 0 195 218" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M29.1934 162.544C65.0313 151.502 81.5137 133.139 108.207 120.236C67.5301 118.084 34.281 153.107 29.4093 161.391C32.1546 146.48 36.7397 131.967 43.0595 118.185C64.4194 109.632 85.3855 108.01 104.629 91.6647C79.5484 88.522 52.1252 107.8 44.0557 116.112C49.7054 104.276 56.7595 93.1643 65.0658 83.0154C84.0244 81.1537 102.437 75.609 119.271 66.6923C101.104 65.086 83.5118 68.9596 69.3503 78.0663C76.2071 70.4012 83.7985 63.4264 92.0158 57.2421L93.9282 58.5533C110.1 60.5828 125.569 57.7664 137.95 50.6158C124.868 47.9302 111.319 48.6007 98.5661 52.5648C103.713 49.0999 109.057 45.9378 114.572 43.0946C117.045 43.8769 125.257 45.3571 125.247 45.3858C139.009 46.8658 151.676 45.4643 164.35 43.272C153.561 39.4354 124.443 40.6825 116.176 42.2248C123.866 38.331 131.841 35.0272 140.032 32.342L140.82 32.7194C150.317 35.1949 160.309 35.0458 169.729 32.2879C178.684 29.8576 186.591 25.8246 194.842 22.1891C171.786 10.8502 154.834 25.2107 138.498 31.6025L138.613 31.6434C131.229 33.9852 124.013 36.8251 117.013 40.1437C124.32 28.6615 132.739 17.9265 142.15 8.0941C135.712 10.6035 129.917 14.5205 125.188 19.5584C120.459 24.5964 116.917 30.6278 114.82 37.2114C114.781 38.4719 114.952 39.73 115.324 40.9347C106.573 45.1893 98.2235 50.2247 90.3772 55.9797C89.1928 56.853 88.0125 57.7602 86.8466 58.6725C89.4791 53.1359 105.541 27.0828 101.8 0.880739C90.6877 16.7031 85.4338 39.0753 86.2934 59.0907C77.415 66.0611 69.3098 73.9635 62.1168 82.6625C63.9623 72.3312 74.4488 36.8839 69.6168 10.5203C66.9268 22.0885 59.067 34.6339 56.5864 46.3413C54.1358 57.5092 56.732 72.4137 60.9393 84.1532C52.9325 94.0797 46.103 104.901 40.5875 116.4C41.6928 87.0824 42.9088 54.633 31.1242 20.4729C19.507 47.0873 35.3827 107.283 39.8573 117.952C33.5597 131.524 28.9304 145.809 26.0708 160.495C25.3177 151.1 25.1681 122.081 21.74 107.059C17.1765 88.9952 13.7685 72.9604 2.78044 55.4436C-4.53287 96.2106 6.81792 131.09 25.6725 162.57C22.5054 179.934 21.4597 197.619 22.5586 215.236C22.6157 215.813 22.8459 216.36 23.2191 216.805C23.5923 217.249 24.091 217.571 24.65 217.727C24.8821 217.77 25.121 217.759 25.348 217.695C25.575 217.63 25.7839 217.513 25.9582 217.354C26.1325 217.195 26.2674 216.997 26.3524 216.777C26.4373 216.557 26.4699 216.32 26.4477 216.085C25.1342 198.193 26.0566 180.207 29.1934 162.544Z"
								  fill="url(#paint0_linear_1030_6572)"/>
							<defs>
								<linearGradient id="paint0_linear_1030_6572" x1="191.516" y1="457.81" x2="169.888"
												y2="168.197" gradientUnits="userSpaceOnUse">
									<stop stop-color="#255B51"/>
									<stop offset="1" stop-color="#112B27"/>
								</linearGradient>
							</defs>
						</svg>

						<svg width="518" height="320"
							 class="absolute z-40 top-auto w-[66.5%] -bottom-[12.45%] left-auto -right-[9.11%] h-auto"
							 viewBox="0 0 518 320" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M283.828 203.738C285.346 190.136 283.948 173.886 290.162 164.385C295.789 155.765 307.209 153.69 311.94 144.175C317.188 133.64 313.43 116.001 311.381 100.074C309.332 84.1456 309.771 67.7537 320.931 64.57C279.784 52.9143 244.155 57.5671 218.937 75.4137C193.719 93.2603 178.632 124.041 173.454 161.924C171.895 173.512 171.261 186.119 175.366 200.841C179.47 215.562 189.018 232.666 201.997 244.162C222.362 262.183 240.393 252.016 252.891 247.442C270.235 241.095 281.096 225.752 283.828 203.738Z"
								  fill="url(#paint0_linear_1030_6579)"/>
							<path d="M188.549 238.816C211.793 228.593 225.95 206.792 237.041 182.604C248.279 158.153 256.834 131.094 269.75 108.315C276.657 95.626 285.495 84.9203 296.112 76.3821C296.671 75.9713 298.026 77.5459 297.452 77.961C277.538 93.3155 265.874 117.919 255.451 143.28C245.266 168.271 236.129 194.378 221.028 214.621C212.832 226.008 202.256 234.737 189.595 240.563C188.891 240.77 187.844 239.105 188.505 238.829L188.549 238.816Z"
								  fill="black"/>
							<path d="M225.023 149.176C242.068 140.034 262.746 144.583 282.097 145.719C301.447 146.855 324.827 141.4 330.976 123.073C334.062 113.823 332.636 101.813 340.641 96.2509C352.337 88.1167 368.586 103.852 381.908 98.9785C391.171 95.5862 394.266 84.2257 400.877 76.8815C409.428 67.3868 423.577 65.2383 436.31 66.2981C449.044 67.3579 461.571 70.9654 474.348 70.6568C487.125 70.3482 500.998 64.8226 506.103 53.0964C501.226 76.2691 496.237 99.8079 485.411 120.831C474.585 141.854 457.057 160.63 434.419 167.557C419.043 172.313 400.173 172.534 390.879 185.661C385.106 193.815 385.045 204.523 384.074 214.474C383.102 224.425 380.154 235.484 371.387 240.288C361.861 245.508 349.86 240.925 339.203 243.317C325.271 246.362 316.789 260.021 305.795 269.112C287.51 284.223 260.562 286.416 238.549 277.597C217.072 269.004 192.146 248.772 193.715 223.717C195.284 198.661 200.447 162.347 225.023 149.176Z"
								  fill="url(#paint1_linear_1030_6579)"/>
							<path d="M279.153 199.187C302.24 197.794 325.41 199.45 348.064 204.113C348.834 204.266 349.115 203.08 348.34 202.914C326.426 198.407 304.029 196.7 281.685 197.831C285.24 196.28 288.822 194.766 292.393 193.27C333.289 176.254 375.639 161.845 413.338 138.095C413.993 137.682 414.589 137.272 415.285 136.846C415.285 136.846 415.285 136.846 415.367 136.82L446.799 131.991C447.575 131.871 447.228 130.699 446.438 130.823C436.855 132.292 427.27 133.751 417.682 135.201C417.784 135.206 417.886 135.184 417.977 135.137C418.068 135.09 418.146 135.021 418.202 134.935C436.813 122.629 453.802 107.905 467.391 90.1217C467.864 89.5088 466.941 88.6652 466.5 89.2834C453.21 106.673 436.887 120.875 418.96 132.909L428.413 107.011C428.68 106.266 427.494 105.985 427.228 106.73L417.252 134.054C398.872 146.183 378.903 156.093 358.809 164.868C341.388 172.454 323.628 179.333 305.985 186.446C326.737 169.106 344.752 148.734 359.423 126.017C359.851 125.357 358.751 124.719 358.339 125.433C343.281 148.744 324.688 169.57 303.226 187.164C303.155 187.216 303.1 187.287 303.066 187.369C303.033 187.451 303.024 187.541 303.039 187.628C280.067 196.932 257.126 206.323 235.631 218.798C214.137 231.273 200.631 244.798 202.631 244.798C202.123 245.392 227.54 224.78 203.519 245.622C231.131 220.298 241.75 215.423 278.777 199.138C278.892 199.2 279.026 199.217 279.153 199.187Z"
								  fill="#002416"/>
							<defs>
								<linearGradient id="paint0_linear_1030_6579" x1="186.524" y1="269.878" x2="306.813"
												y2="143.695" gradientUnits="userSpaceOnUse">
									<stop stop-color="#3A7B05"/>
									<stop offset="1" stop-color="#255B51"/>
								</linearGradient>
								<linearGradient id="paint1_linear_1030_6579" x1="169.509" y1="255.217" x2="497.143"
												y2="101.229" gradientUnits="userSpaceOnUse">
									<stop stop-color="#01A278"/>
									<stop offset="1" stop-color="#055742"/>
								</linearGradient>
							</defs>
						</svg>
					<?php endif; ?>

					<img src="<?php echo esc_url( $djun_kartinka['url'] ); ?>"
						 class="relative z-30 object-cover object-center xl:w-[779px] h-auto lg:w-[585px] w-full"
						 width="<?php echo esc_attr( $djun_kartinka['width'] / 2 ); ?>"
						 height="<?php echo esc_attr( $djun_kartinka['height'] / 2 ); ?>"
						 style="clip-path: url(#mask-3d-tour-image); aspect-ratio: 779/708;"
						 alt="<?php echo esc_attr( $djun_kartinka['alt'] ); ?>"/>
				</div>
			<?php endif; ?>

			<div class="max-w-[340px] w-full shrink-0 grow-0 md:order-2 order-1">
				<h2 class="xl:text-heading-1-pc md:text-heading-2-pc text-heading-1-mob font-bold font-unbounded mb-8">
					<?php the_field( 'zagolovok' ); ?>
				</h2>
				<p class="lg:text-pure-text-pc text-pure-text-base md:mb-16 mb-12">
					<?php the_field( 'tekst' ); ?>
				</p>

				<?php $djun_knopka = get_field( 'knopka' ); ?>
				<?php if ( $djun_knopka ) : ?>
					<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
					   class="bg-ochre duration-300 transition-all hover:bg-ochre-500 rounded-60 px-16 pt-4 pb-5 font-extrabold text-pure-text-pc flex items-center justify-center gap-6 w-full"
					   target="<?php echo esc_attr( $djun_knopka['target'] ); ?>">
						<span><?php echo esc_html( $djun_knopka['title'] ); ?></span>
						<svg width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path id="Line 1"
								  d="M26.7071 8.20711C27.0976 7.81658 27.0976 7.18342 26.7071 6.79289L20.3431 0.428932C19.9526 0.0384078 19.3195 0.0384078 18.9289 0.428932C18.5384 0.819457 18.5384 1.45262 18.9289 1.84315L24.5858 7.5L18.9289 13.1569C18.5384 13.5474 18.5384 14.1805 18.9289 14.5711C19.3195 14.9616 19.9526 14.9616 20.3431 14.5711L26.7071 8.20711ZM0 8.5H26V6.5H0V8.5Z"
								  fill="#333333"/>
						</svg>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );