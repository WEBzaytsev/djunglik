<?php
/**
 * Block template file: blocks/front-page/news/index.php
 *
 * News Block Template.
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

$djun_block_slug = 'news';
$djun_is_admin = is_admin();

$djun_classes = 'relative z-10 mt-[195px] pb-[280px] px-5';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

<?php if ( ! $djun_is_admin ) : ?>

<?php endif; ?>

	<div class="max-w-[1241px] mx-auto">
		<div class="flex w-full items-center justify-between mb-15.5">
			<h2 class="font-bold xl:text-heading-1-pc text-heading-2-pc font-unbounded">
				<?php the_field( 'zagolovok' ); ?>
			</h2>
			<?php $djun_knopka = get_field( 'knopka' ); ?>
			<?php if ( $djun_knopka ) : ?>
				<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
				   class="border-2 border-grey rounded-60 px-16 pt-4 pb-5 font-extrabold text-pure-text-pc flex items-center justify-center gap-6 w-fit"
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

		<div class="news-slider">
			<div class="">
				<?php if ( have_rows( 'slajder_novostej' ) ) : ?>
					<?php
					while ( have_rows( 'slajder_novostej' ) ) :
						the_row();
						?>
						<?php
						$djun_post_id = get_sub_field( 'post' );
						$djun_post = get_post( $djun_post_id );
						$djun_post_date = get_the_date( 'j F', $djun_post_id );
						$djun_thumbnail = get_the_post_thumbnail_url( $djun_post_id );
						?>
						<?php if ( $djun_post_id ) : ?>
							<div class="bg-white rounded-25 overflow-hidden h-auto mr-8 max-w-[392px]">
								<div class="relative">
									<img src="<?php echo esc_url( $djun_thumbnail ); ?>"
										 class="w-full h-[293px] object-center object-cover"
										 alt="img">
									<span class="bg-green-800 text-white py-4 pl-8 pr-12 font-unbounded font-bold rounded-tr-[70px] absolute top-auto bottom-0 left-0 block w-fit"><?php echo esc_html( $djun_post_date ); ?></span>
								</div>
								<div class="xl:p-8 p-6">
									<a href="<?php echo esc_attr( get_permalink( $djun_post_id ) ); ?>"
									   class="mb-6 text-heading-4-pc font-bold block">
										<?php echo esc_html( get_the_title( $djun_post_id ) ); ?>
									</a>
									<p class="text-pure-text-pc">
										<?php echo esc_html( $djun_post->post_excerpt ); ?>
									</p>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<div class="relative mt-16 w-full flex items-end justify-between">
				<div class="news-slider-pagination flex gap-x-5.5"></div>

				<div class="flex items-center gap-x-12">
					<svg width="22" height="39" class="news-slider-button-prev cursor-pointer" viewBox="0 0 22 39" fill="none"
						 xmlns="http://www.w3.org/2000/svg">
						<path d="M19 3L3 19.5L19 36" stroke="#666666" stroke-width="5" stroke-linecap="round"
							  stroke-linejoin="round"/>
					</svg>

					<svg class="news-slider-button-next cursor-pointer" width="22" height="39" viewBox="0 0 22 39" fill="none"
						 xmlns="http://www.w3.org/2000/svg">
						<path d="M3 3L19 19.5L3 36" stroke="#666666" stroke-width="5" stroke-linecap="round"
							  stroke-linejoin="round"/>
					</svg>
				</div>
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
