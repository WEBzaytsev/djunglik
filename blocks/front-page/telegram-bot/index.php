<?php
/**
 * Block template file: blocks/front-page/telegram-bot/index.php
 *
 * Telegram Bot Block Template.
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

$djun_block_slug = 'telegram-bot';
$djun_is_admin = is_admin();

$djun_classes  = 'relative z-30 xl:mt-5 md:pt-[100px] pt-20 md:pb-10 pb-0 bg-white px-5 mb-[250px]';
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
		<div class="md:flex items-center lg:gap-x-[62px] gap-x-5 relative z-20">
			<div class="lg:max-w-[416px] md:max-w-[50%] shrink-0 grow-0 md:mb-0 mb-13.5">
				<h3 class="font-unbounded xl:text-heading-2-pc md:text-heading-3-pc text-heading-1-mob mb-8 font-bold">
					<?php the_field( 'zagolovok' ); ?>
				</h3>
				<p class="md:text-pure-text-pc text-pure-text-base md:mb-16 mb-12">
					<?php the_field( 'tekst' ); ?>
				</p>
				<?php $djun_knopka = get_field( 'knopka' ); ?>
				<?php if ( $djun_knopka ) : ?>
					<a href="<?php echo esc_url( $djun_knopka['url'] ); ?>"
					   class="bg-[#28A4FD] duration-300 transition-all hover:bg-white border-2 border-[#28A4FD] rounded-60 px-16 pt-4 pb-5 font-extrabold text-pure-text-pc flex items-center justify-center gap-6 w-full group max-w-[350px]"
					   target="<?php echo esc_attr( $djun_knopka['target'] ); ?>">
						<span class="text-white group-hover:text-[#28A4FD] duration-300 transition-all"><?php echo esc_html( $djun_knopka['title'] ); ?></span>
						<svg width="26" height="25" viewBox="0 0 26 25" fill="none">
							<path d="M24.4285 3.78564L1.57135 11.9489L8.10196 15.2142L17.8979 8.6836L11.3673 16.8469L21.1632 23.3775L24.4285 3.78564Z"
								  stroke-width="2" stroke-linejoin="round"
								  class="stroke-white group-hover:stroke-[#28A4FD] duration-300 transition-all"/>
						</svg>
					</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="md:absolute z-10 md:w-[66.5%] w-[75%] md:mx-0 mx-auto -top-24.5 left-auto -right-[8.33%]">
			<?php get_template_part( '/vector-images/tg-bot-section-img' ); ?>
		</div>
	</div>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
