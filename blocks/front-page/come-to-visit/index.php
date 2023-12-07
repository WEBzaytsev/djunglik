<?php
/**
 * Block template file: blocks/front-page/come-to-visit/index.php
 *
 * Come To Visit Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or its parent block.
 *
 * @package djun
 */

/**
 * Init custom block
 *
 * @hooked djun_custom_block_start - 10
 */

$djun_block_slug = 'come-to-visit';

$djun_classes  = 'relative z-20 xl:mt-5 md:pt-0 pt-20 md:pb-0 pb-15 bg-white px-5';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

<?php if ( ! $djun_is_admin ) : ?>
	<svg class="absolute block top-auto bottom-full left-0 w-full h-auto"
		 viewBox="0 0 1440 163" fill="none">
		<path d="M1643.46 182.194C1887.77 308.627 1956.75 483.46 1922.97 655.065C1887.21 836.69 1776.88 1025.64 1457.86 1125.02C1128.3 1227.7 702.693 1219.37 338.318 1148.75C-12.7798 1080.71 -284.043 941.016 -390.708 766.776C-493.311 599.169 -395.998 423.28 -194.966 277.612C4.6839 132.945 303.528 21.7859 663.189 3.11877C1028.93 -15.8641 1393.42 52.7946 1643.46 182.194Z"
			  fill="white"/>
	</svg>

	<svg class="absolute block top-full left-0 w-full h-auto"
		 viewBox="0 0 1440 158" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1643.46 -861.806C1887.77 -735.373 1956.75 -560.54 1922.97 -388.935C1887.21 -207.31 1776.88 -18.3646 1457.86 81.0245C1128.3 183.697 702.693 175.367 338.318 104.752C-12.7798 36.7098 -284.043 -102.984 -390.708 -277.224C-493.311 -444.831 -395.998 -620.72 -194.966 -766.388C4.6839 -911.055 303.528 -1022.21 663.189 -1040.88C1028.93 -1059.86 1393.42 -991.205 1643.46 -861.806Z"
			  fill="white"/>
	</svg>
<?php endif; ?>
	<div class="relative z-30 max-w-huge mx-auto">
		<div class="md:flex items-center lg:gap-x-[62px] gap-x-5">
			<div class="lg:max-w-[386px] md:max-w-[50%] shrink-0 grow-0 md:mb-0 mb-13.5">
				<h3 class="font-unbounded xl:text-heading-2-pc md:text-heading-3-pc text-heading-1-mob mb-8 font-bold">
					<?php the_field( 'zagolovok' ); ?>
				</h3>
				<p class="md:text-pure-text-pc text-pure-text-base md:mb-16 mb-12">
					<?php the_field( 'tekst' ); ?>
				</p>
				<?php $djun_knopka = get_field( 'knopka' ); ?>
				<?php if ( $djun_knopka ) : ?>
					<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
					   class="bg-ochre duration-300 transition-all hover:bg-ochre-500 rounded-60 px-16 pt-4 pb-5 font-extrabold text-pure-text-pc flex items-center justify-center gap-6 w-full max-w-[285px]"
					   target="<?php echo esc_attr( $djun_knopka['target'] ); ?>">
						<span><?php echo esc_html( $djun_knopka['title'] ); ?></span>
						<svg width="27" height="15" viewBox="0 0 27 15" fill="none">
							<path id="Line 1"
								  d="M26.7071 8.20711C27.0976 7.81658 27.0976 7.18342 26.7071 6.79289L20.3431 0.428932C19.9526 0.0384078 19.3195 0.0384078 18.9289 0.428932C18.5384 0.819457 18.5384 1.45262 18.9289 1.84315L24.5858 7.5L18.9289 13.1569C18.5384 13.5474 18.5384 14.1805 18.9289 14.5711C19.3195 14.9616 19.9526 14.9616 20.3431 14.5711L26.7071 8.20711ZM0 8.5H26V6.5H0V8.5Z"
								  fill="#333333"/>
						</svg>
					</a>
				<?php endif; ?>
			</div>
			<div class="relative md:ml-0 -ml-6">
				<?php $djun_kartinka = get_field( 'kartinka' ); ?>
				<?php if ( $djun_kartinka ) : ?>
					<div class="relative z-10 order-1">
						<?php if ( ! $djun_is_admin ) : ?>
							<div class="absolute z-10 lg:-top-11.5 -top-5 left-auto lg:-right-6 -right-5 lg:w-auto w-[70%]">
								<?php get_template_part( '/vector-images/front-page-come-to-visit', 'img-bg' ); ?>
							</div>
						<?php endif; ?>

						<img src="<?php echo esc_url( $djun_kartinka['url'] ); ?>"
							 class="relative z-20"
							 width="<?php echo esc_attr( $djun_kartinka['width'] / 2 ); ?>"
							 height="<?php echo esc_attr( $djun_kartinka['height'] / 2 ); ?>"
							 alt="<?php echo esc_attr( $djun_kartinka['alt'] ); ?>"/>

					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php if ( ! $djun_is_admin ) : ?>
	<div class="absolute z-30 left-auto  -right-[125px] -bottom-[300px] top-auto lg:block hidden">
		<?php get_template_part( '/vector-images/front-page-come-to-visit-leaves-right' ); ?>
	</div>
<?php endif; ?>
<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
