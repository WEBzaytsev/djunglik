<?php
/**
 * Block template file: blocks/front-page/feedback-form/index.php
 *
 * Feedback Form Block Template.
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

$djun_block_slug = 'feedback-form';
$djun_is_admin = is_admin();

$djun_classes = 'relative bg-white md:pt-14 pt-20 xl:pb-[200px] pb-[360px] px-5';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

<?php if ( ! $djun_is_admin ) : ?>
	<svg class="absolute left-0 w-full top-auto bottom-full"
		 viewBox="0 0 1440 167" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1649.46 182.194C1893.77 308.627 1962.75 483.46 1928.97 655.065C1893.21 836.69 1782.88 1025.64 1463.86 1125.02C1134.3 1227.7 708.693 1219.37 344.318 1148.75C-6.77982 1080.71 -278.043 941.016 -384.708 766.776C-487.311 599.169 -389.998 423.28 -188.966 277.612C10.6839 132.945 309.528 21.7859 669.189 3.11877C1034.93 -15.8641 1399.42 52.7946 1649.46 182.194Z"
			  fill="white"/>
	</svg>

	<div class="absolute z-10 top-auto -bottom-[94px] md:left-[12.22%] left-1/2 md:translate-x-0 -translate-x-[67%]">
		<?php get_template_part( '/vector-images/feedback-form', 'image' ); ?>
	</div>
<?php endif; ?>

	<div class="max-w-huge mx-auto relative z-20">
		<div class="md:flex w-full justify-between gap-x-10">
			<div class="md:max-w-[568px] md:mb-0 mb-8">
				<h2 class="xl:text-heading-1-pc md:text-heading-2-pc text-heading-1-mob font-bold font-unbounded mb-7.5">
					<?php the_field( 'zagolovok_bloka' ); ?>
				</h2>
				<p class="md:text-pure-text-pc text-pure-text-base">
					<?php the_field( 'tekst' ); ?>
				</p>
			</div>
			<form class="xl:max-w-[604px] lg:max-w-[550px] max-w-[420px] shrink-0 grow-0 w-full">
				<p class="text-center font-bold font-unbounded xl:text-heading-2-pc md:text-heading-3-pc text-pure-text-pc md:mb-10.5 mb-12">
					<?php the_field( 'zagolovok_formy' ); ?>
				</p>
				<div class="md:mb-6 mb-4">
					<label for="feedback-name"
						   class="md:mb-0.5 mb-1 block text-pure-text-pc font-extrabold">
						Имя
					</label>
					<input type="text"
						   name="feedback-name"
						   id="feedback-name"
						   placeholder="Введите имя"
						   class="rounded-25 block bg-white border border-grey-600 md:py-6 py-4.5 px-7 w-full">
				</div>
				<div class="mb-12">
					<label for="feedback-phone"
						   class="md:mb-0.5 mb-1 block text-pure-text-pc font-extrabold">
						Телефон
					</label>
					<input type="text"
						   name="feedback-phone"
						   id="feedback-phone"
						   placeholder="Введите телефон"
						   class="rounded-25 block bg-white border border-grey-600 py-6 px-7 w-full">
				</div>
				<div class="lg:flex items-center justify-between gap-x-8">
					<button class="bg-red rounded-60 px-16 pt-4 pb-5 text-white font-extrabold text-pure-text-pc md:w-fit w-full lg:mb-0 mb-6">
						Заказать
					</button>
					<p class="text-xs">
						Нажимая на кнопку «Заказать», я даю согласие на обработку моих персональных данных в
						соответствии с
						<a href="#" class="text-[#6496F8] hover:underline">политикой информационной безопасности</a>
					</p>
				</div>
			</form>
		</div>
	</div>

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
