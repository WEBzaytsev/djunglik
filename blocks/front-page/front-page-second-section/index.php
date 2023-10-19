<?php
/**
 * Block template file: blocks/front-page/front-page-second-section/index.php
 *
 * Front Page Second Section Block Template.
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

$djun_block_slug = 'front-page-second-section';
$djun_is_admin = is_admin();

$djun_classes = 'relative z-20 -mt-[112px] pt-[155px] pb-[153px]';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>
<?php if ( ! $djun_is_admin ) : ?>
	<svg viewBox="0 0 1440 893" fill="none" xmlns="http://www.w3.org/2000/svg"
		 class="absolute z-10 w-full h-full top-0 left-1/2 -translate-x-1/2">
		<path d="M1606.46 135.357C1850.77 229.287 1919.75 359.176 1885.97 486.666C1850.21 621.601 1739.88 761.974 1420.86 835.813C1091.3 912.091 665.693 905.902 301.318 853.441C-49.7798 802.89 -321.043 699.108 -427.708 569.659C-530.311 445.14 -432.998 314.467 -231.966 206.246C-32.3161 98.7687 266.528 16.1853 626.189 2.31702C991.934 -11.7859 1356.42 39.2226 1606.46 135.357Z"
			  fill="white"/>
	</svg>

	<div class="absolute z-30 top-auto left-auto -right-[90px] -bottom-[80px]">
		<?php get_template_part( '/vector-images/front-page-second-section', 'leave' ); ?>
	</div>
<?php endif; ?>


	<div class="max-w-huge mx-auto relative z-20">
		<div class="flex gap-x-[160px]">
			<?php $djun_kartinka = get_field( 'kartinka' ); ?>
			<?php if ( $djun_kartinka ) : ?>
				<div class="relative">
					<?php if ( ! $djun_is_admin ) : ?>
						<div class="absolute z-10 top-auto left-auto -bottom-5 -right-[94px]">
							<?php get_template_part( '/vector-images/front-page-second-section', 'img-bg' ); ?>
						</div>
						<div class="absolute z-30 top-auto -left-7.5 -bottom-5">
							<?php get_template_part( '/vector-images/front-page-second-section', 'img-leaves' ); ?>
						</div>
					<?php endif; ?>

					<img src="<?php echo esc_url( $djun_kartinka['url'] ); ?>"
						 class="relative z-20"
						 width="<?php echo esc_attr( $djun_kartinka['width'] / 2 ); ?>"
						 height="<?php echo esc_attr( $djun_kartinka['height'] / 2 ); ?>"
						 alt="<?php echo esc_attr( $djun_kartinka['alt'] ); ?>"/>

				</div>
			<?php endif; ?>
			<div class="pt-12 max-w-md">
				<h2 class="text-heading-2-pc font-bold mb-8 font-unbounded">
					<?php the_field( 'zagolovok' ); ?>
				</h2>
				<p class="text-pure-text-pc mb-16">
					<?php the_field( 'tekst' ); ?>
				</p>
				<a href="#"
				   class="bg-ochre rounded-60 px-16 pt-4 pb-5 font-extrabold text-pure-text-pc flex items-center justify-center gap-6 w-fit">
					<span><?php the_field( 'tekst_knopki' ); ?></span>
					<svg width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path id="Line 1"
							  d="M26.7071 8.20711C27.0976 7.81658 27.0976 7.18342 26.7071 6.79289L20.3431 0.428932C19.9526 0.0384078 19.3195 0.0384078 18.9289 0.428932C18.5384 0.819457 18.5384 1.45262 18.9289 1.84315L24.5858 7.5L18.9289 13.1569C18.5384 13.5474 18.5384 14.1805 18.9289 14.5711C19.3195 14.9616 19.9526 14.9616 20.3431 14.5711L26.7071 8.20711ZM0 8.5H26V6.5H0V8.5Z"
							  fill="#333333"/>
					</svg>
				</a>
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
