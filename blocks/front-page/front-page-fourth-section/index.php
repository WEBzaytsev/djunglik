<?php
/**
 * Block template file: blocks/front-page/front-page-fourth-section/index.php
 *
 * Front Page Fourth Section Block Template.
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

$djun_block_slug = 'front-page-fourth-section';
$djun_is_admin = is_admin();

$djun_classes = 'relative z-20 -mt-[157px] pt-[180px] pb-[253px]';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>
<?php if ( ! $djun_is_admin ) : ?>
	<svg class="absolute z-10 w-full h-full top-0 left-1/2 -translate-x-1/2"
		 viewBox="0 0 1440 1202" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1643.46 182.194C1887.77 308.627 1956.75 483.46 1922.97 655.065C1887.21 836.69 1776.88 1025.64 1457.86 1125.02C1128.3 1227.7 702.693 1219.37 338.318 1148.75C-12.7798 1080.71 -284.043 941.016 -390.708 766.776C-493.311 599.169 -395.998 423.28 -194.966 277.612C4.6839 132.945 303.528 21.7859 663.189 3.11877C1028.93 -15.8641 1393.42 52.7946 1643.46 182.194Z"
			  fill="white"/>
	</svg>
<?php endif; ?>

	<div class="relative z-30 max-w-huge mx-auto">
		<div class="flex items-center gap-x-[62px]">
			<div class="max-w-[386px] shrink-0 grow-0">
				<h3 class="font-unbounded text-heading-2-pc mb-8 font-bold">
					<?php the_field( 'zagolovok' ); ?>
				</h3>
				<p class="text-pure-text-pc">
					<?php the_field( 'tekst' ); ?>
				</p>
			</div>
			<div class="relative">
				<?php $djun_video_url = get_field( 'ssylka_na_video' ); ?>

				<a href="<?php echo esc_url( $djun_video_url ); ?>"
				   class="">
					<?php $djun_poster_k_video = get_field( 'poster_k_video' ); ?>
					<?php if ( $djun_poster_k_video ) : ?>
						<img src="<?php echo esc_url( $djun_poster_k_video['url'] ); ?>"
							 width="<?php echo esc_attr( $djun_poster_k_video['width'] / 2 ); ?>"
							 height="<?php echo esc_attr( $djun_poster_k_video['height'] / 2 ); ?>"
							 class="relative z-20"
							 alt="<?php echo esc_attr( $djun_poster_k_video['alt'] ); ?>"/>
					<?php endif; ?>
				</a>

				<?php if ( ! $djun_is_admin ) : ?>
					<span class="absolute font-badscript text-[24px] leading-[175%] -left-[240px] top-auto bottom-4">Нажмите кнопочку Play</span>

					<svg width="164" height="66" viewBox="0 0 164 66" fill="none" xmlns="http://www.w3.org/2000/svg"
						 class="absolute block -left-[96px] top-auto -bottom-[70px]">
						<path d="M160.364 11.5227C160.147 11.0149 159.559 10.7795 159.052 10.9968L150.777 14.5377C150.27 14.755 150.034 15.3428 150.251 15.8505C150.469 16.3583 151.057 16.5937 151.564 16.3764L158.919 13.2289L162.067 20.5837C162.284 21.0915 162.872 21.3269 163.379 21.1096C163.887 20.8923 164.123 20.3046 163.905 19.7968L160.364 11.5227ZM158.517 11.5443C141.676 53.5837 93.9433 74.011 51.9038 57.1698L51.1601 59.0263C94.2249 76.2783 143.121 55.3528 160.373 12.288L158.517 11.5443ZM51.9038 57.1698C26.4698 46.9808 8.94589 25.4856 2.80009 0.780324L0.859244 1.26314C7.15351 26.5653 25.1042 48.5883 51.1601 59.0263L51.9038 57.1698Z"
							  fill="#666666"/>
					</svg>

					<div class="absolute left-[228px] top-2 z-10">
						<?php get_template_part( '/vector-images/front-page-fourth-section-poster-bg' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php if ( ! $djun_is_admin ) : ?>
	<div class="absolute z-30 -left-[104px] -bottom-[121px] top-auto">
		<?php get_template_part( '/vector-images/front-page-fourth-section-leaves-left' ); ?>
	</div>
	<div class="absolute z-30 left-auto right-0 top-auto bottom-0">
		<?php get_template_part( '/vector-images/front-page-fourth-section-lion' ); ?>
	</div>
<?php endif; ?>
<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
