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

$djun_classes = 'relative z-30 md:mt-10 2xl:pb-[140px] md:pt-[78px] pt-10 md:pb-25 pb-[220px] bg-ochre px-5';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

<?php if ( ! $djun_is_admin ) : ?>

	<svg class="absolute top-auto bottom-full left-0 h-auto w-full"
		 viewBox="0 0 1440 111" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1606.46 135.4C1786.67 204.704 1871.48 293.577 1890.02 386.623C1896.62 419.725 1894.83 545.072 1885.97 578.537C1850.21 713.515 1739.88 853.932 1420.86 927.795C1091.3 1004.1 665.693 997.906 301.318 945.428C-49.7798 894.862 -321.043 791.046 -427.708 661.557C-466.317 614.685 -476.618 475.226 -463.737 428.136C-442.387 350.086 -357.35 273.83 -231.966 206.311C-32.3161 98.8001 266.528 16.1905 626.189 2.31776C991.934 -11.7896 1356.42 39.2351 1606.46 135.4Z"
			  fill="#FD9B28"/>
	</svg>

	<div class="absolute top-auto lg:-bottom-[17%] md:-bottom-[8%] -bottom-7.5 md:left-0 -left-[340px] h-auto w-full z-20">
		<?php get_template_part( '/vector-images/front-page-reviews', 'tiger' ); ?>
	</div>
<?php endif; ?>

	<div class="flex max-w-[1241px] mx-auto w-full items-center justify-between md:mb-15.5 mb-8">
		<h2 class="text-white font-bold xl:text-heading-1-pc md:text-heading-2-pc text-heading-1-mob font-unbounded">
			<?php the_field( 'zagolovok' ); ?>
		</h2>
		<?php $djun_knopka = get_field( 'knopka' ); ?>
		<?php if ( $djun_knopka ) : ?>
			<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
			   class="bg-ochre border-2 border-white rounded-60 px-16 pt-4 pb-5 text-white font-extrabold text-pure-text-pc items-center justify-center gap-6 w-fit whitespace-nowrap md:flex hidden transition-all duration-300 hover:bg-white group hover:text-ochre"
			   target="<?php echo esc_attr( $djun_knopka['target'] ); ?>">
				<span><?php echo esc_html( $djun_knopka['title'] ); ?></span>
				<svg width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path id="Line 1"
						  d="M26.7071 8.20711C27.0976 7.81658 27.0976 7.18342 26.7071 6.79289L20.3431 0.428932C19.9526 0.0384078 19.3195 0.0384078 18.9289 0.428932C18.5384 0.819457 18.5384 1.45262 18.9289 1.84315L24.5858 7.5L18.9289 13.1569C18.5384 13.5474 18.5384 14.1805 18.9289 14.5711C19.3195 14.9616 19.9526 14.9616 20.3431 14.5711L26.7071 8.20711ZM0 8.5H26V6.5H0V8.5Z"
						  class="fill-white transition-all duration-300 group-hover:fill-ochre"/>
				</svg>
			</a>
		<?php endif; ?>
	</div>

	<div class="max-w-huge mx-auto relative z-10 md:pb-15 pb-12">
		<?php if ( have_rows( 'spisok_otzyvov' ) ) : ?>
			<div class="reviews-slider">
				<div class="xl:max-w-[710px] md:max-w-[500px] max-w-[300px]">
					<?php
					while ( have_rows( 'spisok_otzyvov' ) ) :
						the_row();
						?>
						<?php $djun_otzyv_id = get_sub_field( 'otzyv' ); ?>
						<?php
						if ( $djun_otzyv_id ) {
							get_template_part( '/template-parts/review', 'card', [ 'review_id' => $djun_otzyv_id ] );
						}
						?>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<div class="relative z-30 max-w-huge mx-auto w-full flex items-end justify-between">
		<div class="reviews-slider-pagination flex gap-x-5.5"></div>

		<div class="md:flex hidden items-center gap-x-12">
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

<?php if ( $djun_knopka ) : ?>
	<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
	   class="bg-ochre border-2 border-white rounded-60 px-16 pt-4 pb-5 text-white font-extrabold text-pure-text-pc items-center justify-center gap-6 w-full max-w-[400px] whitespace-nowrap md:hidden flex mt-12"
	   target="<?php echo esc_attr( $djun_knopka['target'] ); ?>">
		<span><?php echo esc_html( $djun_knopka['title'] ); ?></span>
		<svg width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path id="Line 1"
				  d="M26.7071 8.20711C27.0976 7.81658 27.0976 7.18342 26.7071 6.79289L20.3431 0.428932C19.9526 0.0384078 19.3195 0.0384078 18.9289 0.428932C18.5384 0.819457 18.5384 1.45262 18.9289 1.84315L24.5858 7.5L18.9289 13.1569C18.5384 13.5474 18.5384 14.1805 18.9289 14.5711C19.3195 14.9616 19.9526 14.9616 20.3431 14.5711L26.7071 8.20711ZM0 8.5H26V6.5H0V8.5Z"
				  fill="white"/>
		</svg>
	</a>
<?php endif; ?>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
