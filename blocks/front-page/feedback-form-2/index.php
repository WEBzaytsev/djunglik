<?php
/**
 * Block template file: blocks/front-page/feedback-form-2/index.php
 *
 * Feedback Form 2 Block Template.
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

$djun_block_slug = 'feedback-form-2';
$djun_is_admin = is_admin();

$djun_classes  = 'relative z-10 xl:mt-20 md:pt-[140px] pt-20 md:pb-10 pb-0 bg-white px-5 md:mb-[250px] mb-10';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

<?php if ( ! $djun_is_admin ) : ?>
	<svg class="absolute block top-auto bottom-full left-0 w-full h-auto"
		 viewBox="0 0 1440 163" fill="none">
		<path d="M1643.46 182.194C1887.77 308.627 1956.75 483.46 1922.97 655.065C1887.21 836.69 1776.88 1025.64 1457.86 1125.02C1128.3 1227.7 702.693 1219.37 338.318 1148.75C-12.7798 1080.71 -284.043 941.016 -390.708 766.776C-493.311 599.169 -395.998 423.28 -194.966 277.612C4.6839 132.945 303.528 21.7859 663.189 3.11877C1028.93 -15.8641 1393.42 52.7946 1643.46 182.194Z"
			  fill="white"/>
	</svg>

	<svg class="absolute block top-full left-0 w-full h-auto"
		 viewBox="0 0 1440 158" fill="none">
		<path d="M1643.46 -861.806C1887.77 -735.373 1956.75 -560.54 1922.97 -388.935C1887.21 -207.31 1776.88 -18.3646 1457.86 81.0245C1128.3 183.697 702.693 175.367 338.318 104.752C-12.7798 36.7098 -284.043 -102.984 -390.708 -277.224C-493.311 -444.831 -395.998 -620.72 -194.966 -766.388C4.6839 -911.055 303.528 -1022.21 663.189 -1040.88C1028.93 -1059.86 1393.42 -991.205 1643.46 -861.806Z"
			  fill="white"/>
	</svg>
<?php endif; ?>

<div class="max-w-huge mx-auto relative z-20">
	<div class="md:flex xl:gap-x-[160px] lg:gap-x-20 gap-x-6 items-start">
		<div class="lg:max-w-[500px] md:max-w-[50%] relative z-20 order-2 md:mb-0 mb-14.5">
			<h3 class="">
				<?php the_field( '' ); ?>
			</h3>
			<?php
			get_template_part(
				'/template-parts/feedback-form',
				null,
				[
					'is_form_section' => true,
					'form_title' => get_field( 'zagolovok_formi' ),
					'form_id' => '',
				]
			);
			?>
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

<div class="hidden">
	<?php echo do_shortcode( '[contact-form-7 id="0931458" title="Форма с указанием возраста"]' ); ?>
</div>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
