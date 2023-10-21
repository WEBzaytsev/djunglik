<?php
/**
 * Block template file: blocks/front-page/reviews/index.php
 *
 * Reviews Block Template.
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

$djun_block_slug = 'reviews';
$djun_is_admin = is_admin();

$djun_classes = 'relative z-30 mt-10 pt-[78px] pb-25 bg-ochre px-5';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

<?php if ( ! $djun_is_admin ) : ?>

	<svg class="absolute top-auto bottom-full left-0 h-auto w-full"
		 viewBox="0 0 1440 111" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1606.46 135.4C1786.67 204.704 1871.48 293.577 1890.02 386.623C1896.62 419.725 1894.83 545.072 1885.97 578.537C1850.21 713.515 1739.88 853.932 1420.86 927.795C1091.3 1004.1 665.693 997.906 301.318 945.428C-49.7798 894.862 -321.043 791.046 -427.708 661.557C-466.317 614.685 -476.618 475.226 -463.737 428.136C-442.387 350.086 -357.35 273.83 -231.966 206.311C-32.3161 98.8001 266.528 16.1905 626.189 2.31776C991.934 -11.7896 1356.42 39.2351 1606.46 135.4Z"
			  fill="#FD9B28"/>
	</svg>

	<div class="absolute top-auto -bottom-[93px] left-0 h-auto w-full z-20">
		<?php get_template_part( '/vector-images/front-page-reviews', 'tiger' ); ?>
	</div>
<?php endif; ?>

	<div class="flex max-w-[1241px] mx-auto w-full items-center justify-between mb-15.5">
		<h2 class="text-white font-bold xl:text-heading-1-pc text-heading-2-pc font-unbounded">
			<?php the_field( 'zagolovok' ); ?>
		</h2>
		<?php $djun_knopka = get_field( 'knopka' ); ?>
		<?php if ( $djun_knopka ) : ?>
			<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
			   class="bg-ochre border-2 border-white rounded-60 px-16 pt-4 pb-5 text-white font-extrabold text-pure-text-pc flex items-center justify-center gap-6 w-fit"
			   target="<?php echo esc_attr( $djun_knopka['target'] ); ?>">
				<span><?php echo esc_html( $djun_knopka['title'] ); ?></span>
				<svg width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path id="Line 1"
						  d="M26.7071 8.20711C27.0976 7.81658 27.0976 7.18342 26.7071 6.79289L20.3431 0.428932C19.9526 0.0384078 19.3195 0.0384078 18.9289 0.428932C18.5384 0.819457 18.5384 1.45262 18.9289 1.84315L24.5858 7.5L18.9289 13.1569C18.5384 13.5474 18.5384 14.1805 18.9289 14.5711C19.3195 14.9616 19.9526 14.9616 20.3431 14.5711L26.7071 8.20711ZM0 8.5H26V6.5H0V8.5Z"
						  fill="white"/>
				</svg>
			</a>
		<?php endif; ?>
	</div>

	<div class="max-w-huge mx-auto relative z-10 pb-15">
		<?php if ( have_rows( 'spisok_otzyvov' ) ) : ?>
			<div class="reviews-slider">
				<div class="xl:max-w-[710px] max-w-[500px]">
					<?php
					while ( have_rows( 'spisok_otzyvov' ) ) :
						the_row();
						?>
						<?php $djun_otzyv_id = get_sub_field( 'otzyv' ); ?>
						<?php if ( $djun_otzyv_id ) : ?>
							<div class="bg-white xl:p-12.5 p-8 rounded-[25px] mr-8 h-auto">
								<div class="flex items-center gap-x-8">
									<?php $djun_avatarka = get_field( 'avatarka', $djun_otzyv_id ); ?>
									<?php if ( $djun_avatarka ) : ?>
										<img src="<?php echo esc_url( $djun_avatarka['url'] ); ?>"
											 width="70"
											 height="70"
											 alt="<?php echo esc_attr( $djun_avatarka['alt'] ); ?>"/>
									<?php endif; ?>

									<div class="">
										<p class="font-unbounded xl:text-heading-3-pc text-heading-4-pc mb-2.5 font-bold">
											<?php echo get_the_title( $djun_otzyv_id ); // phpcs:ignore ?>
										</p>
										<div class="flex items-center gap-x-4">
											<div class="flex gap-x-2 items-center">
												<?php $djun_otzyv_rating = (int) get_field( 'rejting', $djun_otzyv_id ); ?>
												<?php for ( $djun_k = 1; $djun_k < 6; $djun_k++ ) : ?>
													<svg width="22" height="20" viewBox="0 0 22 20" fill="none"
														 xmlns="http://www.w3.org/2000/svg">
														<path d="M9.72899 1.02493C10.3876 -0.341645 12.3397 -0.341643 12.9983 1.02493L14.7781 4.71791C15.0424 5.26645 15.5659 5.64559 16.171 5.72671L20.2444 6.27283C21.7517 6.47493 22.3549 8.32557 21.2546 9.37225L18.2812 12.2008C17.8395 12.6209 17.6396 13.2344 17.7492 13.833L18.4869 17.8635C18.7598 19.355 17.1806 20.4988 15.842 19.7791L12.2245 17.8342C11.6872 17.5453 11.0401 17.5453 10.5028 17.8342L6.88531 19.7791C5.54668 20.4988 3.96743 19.355 4.24041 17.8635L4.97811 13.833C5.08768 13.2344 4.88772 12.6209 4.44606 12.2008L1.47265 9.37225C0.372349 8.32557 0.975574 6.47493 2.48292 6.27283L6.5563 5.72671C7.16134 5.64559 7.68484 5.26645 7.9492 4.71791L9.72899 1.02493Z"
															  fill="#<?php echo esc_attr( $djun_otzyv_rating >= $djun_k ? 'FD9B28' : '999999' ); ?>"/>
													</svg>
												<?php endfor; ?>
											</div>

											<span class="text-grey-600 text-sm"><?php the_field( 'data', $djun_otzyv_id ); ?></span>
										</div>
									</div>
								</div>
								<p class="xl:mt-8 mt-4">
									<?php
									$djun_text = get_field( 'tekst', $djun_otzyv_id );
									$djun_max_words = 28;
									$djun_words = explode( ' ', $djun_text );

									if ( count( $djun_words ) > $djun_max_words ) {
										$djun_limited_words = array_slice( $djun_words, 0, $djun_max_words );
										$djun_output = implode( ' ', $djun_limited_words ) . ' ...';
										echo esc_html( $djun_output );
									} else {
										echo esc_html( $djun_text );
									}
									?>
								</p>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<div class="relative z-30 max-w-huge mx-auto w-full flex items-end justify-between">
		<div class="reviews-slider-pagination flex gap-x-5.5"></div>

		<div class="flex items-center gap-x-12">
			<svg width="22" height="39" class="reviews-slider-button-prev cursor-pointer" viewBox="0 0 22 39" fill="none"
				 xmlns="http://www.w3.org/2000/svg">
				<path d="M19 3L3 19.5L19 36" stroke="white" stroke-width="5" stroke-linecap="round"
					  stroke-linejoin="round"/>
			</svg>

			<svg class="reviews-slider-button-next cursor-pointer" width="22" height="39" viewBox="0 0 22 39" fill="none"
				 xmlns="http://www.w3.org/2000/svg">
				<path d="M3 3L19 19.5L3 36" stroke="white" stroke-width="5" stroke-linecap="round"
					  stroke-linejoin="round"/>
			</svg>
		</div>
	</div>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
