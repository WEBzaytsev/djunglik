<?php
/**
 * Block template file: blocks/front-page/front-page-first-section/index.php
 *
 * Front Page First Section Block Template.
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

$djun_block_slug = 'front-page-first-section';
$djun_is_admin = is_admin();

$djun_classes = 'relative lg:pt-[140px] pt-9.5 xl:pb-[207px] lg:pb-[127px] md:pb-22 z-10 px-5';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

<?php if ( ! $djun_is_admin ) : ?>
	<div class="absolute z-10 -left-[100px] -bottom-[205px] top-auto lg:block hidden">
		<?php get_template_part( '/vector-images/front-page-first-section', 'leaves' ); ?>
	</div>
<?php endif; ?>

	<div class="max-w-huge mx-auto relative z-30">

		<div class="max-w-[568px] relative z-20 md:pb-0 pb-[390px]">
			<h1 class="md:mb-6 mb-4 font-bold xl:text-heading-1-pc md:text-heading-2-pc text-heading-1-mob font-unbounded">
				<?php the_field( 'zagolovok' ); ?>
			</h1>
			<p class="md:mb-8 mb-6 font-extrabold md:text-heading-3-pc text-pure-text-pc">
				<?php the_field( 'podzagolovok' ); ?>
			</p>
			<p class="md:text-pure-text-pc text-pure-text-base md:mb-16 mb-8">
				<?php the_field( 'tekst' ); ?>
			</p>

			<a href="#"
			   data-modal="form"
			   class="bg-red rounded-60 md:px-16 px-5 pt-4 pb-5 text-white font-extrabold text-pure-text-pc flex items-center justify-center gap-6 md:w-fit w-full md:max-w-none max-w-[320px] whitespace-nowrap">
				<span><?php the_field( 'tekst_knopki' ); ?></span>
				<svg width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path id="Line 1"
						  d="M26.7071 8.20711C27.0976 7.81658 27.0976 7.18342 26.7071 6.79289L20.3431 0.428932C19.9526 0.0384078 19.3195 0.0384078 18.9289 0.428932C18.5384 0.819457 18.5384 1.45262 18.9289 1.84315L24.5858 7.5L18.9289 13.1569C18.5384 13.5474 18.5384 14.1805 18.9289 14.5711C19.3195 14.9616 19.9526 14.9616 20.3431 14.5711L26.7071 8.20711ZM0 8.5H26V6.5H0V8.5Z"
						  fill="white"/>
				</svg>
			</a>
		</div>

		<?php if ( ! $djun_is_admin ) : ?>
			<div class="absolute z-10 md:-right-[152px] md:left-auto left-1/2 md:translate-x-0 -translate-x-1/2 xl:-bottom-[311px] lg:-bottom-[230px] md:-bottom-[170px] -bottom-[110px] top-auto">
				<?php get_template_part( '/vector-images/front-page-first-section', 'main-img' ); ?>
			</div>
		<?php endif; ?>

	</div>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
