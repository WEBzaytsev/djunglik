<?php
/**
 * Post Sidebar Template
 *
 * @package djun
 */

$djun_id = $args['id'] ?? 0;
?>

<div class="lg:sticky relative top-5 w-full">
	<div class="absolute z-10 -top-[103px] -right-[86px] left-auto">
		<?php get_template_part( '/vector-images/post-sidebar', 'leaves', [ 'id' => $djun_id ] ); ?>
	</div>
	<div class="relative bg-white p-6 rounded-25 z-20">
		<p class="mb-4 font-unbounded text-heading-4-pc">Мы в соц. сетях</p>
		<p class="mb-6 text-sm">
			Подписывайтесь, чтобы <br>всегда быть в курсе событий.
		</p>
		<div class="flex items-center w-full justify-between gap-x-2">
			<a href="<?php echo esc_url( get_field( 'ssylka_na_viber', 'option' ) ); ?>">
				<?php get_template_part( '/vector-images/icon', 'wa' ); ?>
			</a>
			<a href="<?php echo esc_url( get_field( 'ssylka_na_telegram', 'option' ) ); ?>">
				<?php get_template_part( '/vector-images/icon', 'tg' ); ?>
			</a>
			<a href="<?php echo esc_url( get_field( 'ssylka_na_vk', 'option' ) ); ?>">
				<?php get_template_part( '/vector-images/icon', 'vk' ); ?>
			</a>
		</div>
	</div>
</div>
