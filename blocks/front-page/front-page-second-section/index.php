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

$djun_classes = 'relative z-20 md:pt-11 pt-[75px] md:pb-[222px] md:mb-16 pb-25 px-5';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>
	<div class="max-w-huge mx-auto relative z-20">
		<div class="md:flex xl:gap-x-[160px] lg:gap-x-20 gap-x-6 items-start">
			<div class="md:pt-12 lg:max-w-md md:max-w-[50%] relative z-20 order-2 md:mb-0 mb-14.5">
				<h2 class="xl:text-heading-2-pc md:text-heading-3-pc text-heading-4-pc font-bold mb-8 font-unbounded">
					<?php the_field( 'zagolovok' ); ?>
				</h2>
				<p class="md:text-pure-text-pc text-pure-text-base md:mb-16 mb-12">
					<?php the_field( 'tekst' ); ?>
				</p>
				<?php $djun_knopka = get_field( 'knopka' ); ?>
				<?php if ( $djun_knopka ) : ?>
					<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
					   class="bg-ochre duration-300 transition-all hover:bg-ochre-500 rounded-60 px-16 pt-4 pb-5 font-extrabold text-pure-text-pc flex items-center justify-center gap-6 w-fit"
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

			<?php $djun_kartinka = get_field( 'kartinka' ); ?>
			<?php if ( $djun_kartinka ) : ?>
				<div class="relative z-10 order-1">
					<?php if ( ! $djun_is_admin ) : ?>
						<div class="absolute z-10 lg:top-auto -top-11.5 left-auto lg:-bottom-5 lg:-right-[94px] -right-[54px]">
							<?php get_template_part( '/vector-images/front-page-second-section', 'img-bg' ); ?>
						</div>
						<div class="absolute z-30 top-auto lg:-left-7.5 left-0 lg:-bottom-5 -bottom-8">
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
		</div>
	</div>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
