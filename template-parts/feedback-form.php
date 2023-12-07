<?php
/**
 * Feedback From Template.
 *
 * @package djun
 */

$djun_is_modal = $args['is_modal'] ?? false;
$djun_form_id = $args['form_id'];
$djun_is_form_section = $args['is_form_section'] ?? false;
$djun_prefix = '';
if ( $djun_is_modal ) {
	$djun_prefix = 'modal-';
} elseif ( $djun_is_form_section ) {
	$djun_prefix = 'section-';
}

$djun_form_title = $args['form_title'] ?: get_field( 'feedback_form_zagolovok_formy', 'option' );
?>
<form class="xl:max-w-[604px] lg:max-w-[550px] max-w-[420px] shrink-0 grow-0 w-full relative"
	  data-form="djun-feedback"
	  method="post">
	<?php wp_nonce_field(); ?>
	<input type="hidden" name="_wpcf7" value="<?php echo esc_attr( $djun_form_id ); ?>">
	<p class="text-center font-bold font-unbounded xl:text-heading-2-pc md:text-heading-3-pc text-pure-text-pc md:mb-10.5 mb-12">
		<?php echo esc_html( $djun_form_title ); ?>
	</p>
	<div class="md:mb-6 mb-4">
		<label for="<?php echo esc_attr( $djun_prefix ); ?>feedback-name"
			   class="md:mb-0.5 mb-1 block text-pure-text-pc font-extrabold">
			Имя
		</label>
		<input type="text"
			   name="<?php echo esc_attr( $djun_prefix ); ?>feedback-name"
			   id="<?php echo esc_attr( $djun_prefix ); ?>feedback-name"
			   placeholder="Введите имя"
			   class="rounded-25 block bg-white border border-grey-600 md:py-6 py-4.5 px-7 w-full">
	</div>
	<div class="<?php echo esc_attr( $djun_is_form_section ? 'md:mb-6 mb-4' : '' ); ?>">
		<label for="<?php echo esc_attr( $djun_prefix ); ?>feedback-phone"
			   class="md:mb-0.5 mb-1 block text-pure-text-pc font-extrabold">
			Телефон
		</label>
		<input type="tel"
			   name="<?php echo esc_attr( $djun_prefix ); ?>feedback-phone"
			   id="<?php echo esc_attr( $djun_prefix ); ?>feedback-phone"
			   placeholder="Введите телефон"
			   class="rounded-25 block bg-white border border-grey-600 py-6 px-7 w-full">
	</div>
	<?php if ( $djun_is_form_section ) : ?>
		<div class="relative">
			<label for="<?php echo esc_attr( $djun_prefix ); ?>feedback-age"
				   class="md:mb-0.5 mb-1 block text-pure-text-pc font-extrabold">
				Возраст ребенка
			</label>
			<input type="text"
				   name="<?php echo esc_attr( $djun_prefix ); ?>feedback-age"
				   id="<?php echo esc_attr( $djun_prefix ); ?>feedback-age"
				   placeholder="Возраст ребенка"
				   value="1"
				   class="rounded-25 block bg-white border border-grey-600 py-6 px-7 w-full">
			<div class="absolute z-30 left-6 right-6 h-1 top-auto -bottom-0.5">
				<div class="relative h-full bg-ochre age-range transition-all duration-300 w-full max-w-[20%]">
					<span class="block absolute w-4.5 h-4.5 rounded-full bg-ochre left-full -translate-x-1/2 -translate-y-1/2 top-1/2 age-range-circle select-none cursor-pointer"></span>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<p class="mt-5 font-medium hidden form-status"></p>

	<div class="lg:flex items-center justify-between gap-x-8 mt-12">
		<button class="bg-red hover:bg-red-500 transition-all duration-300 rounded-60 px-16 pt-4 pb-5 text-white font-extrabold text-pure-text-pc md:w-fit w-full lg:mb-0 mb-6">
			Заказать
		</button>
		<p class="text-xs">
			Нажимая на кнопку «Заказать», я даю согласие на обработку моих персональных данных в
			соответствии с
			<a href="#" class="text-[#6496F8] hover:underline">политикой информационной безопасности</a>
		</p>
	</div>
	<?php get_template_part( '/template-parts/loader', null, [ 'active' => 0 ] ); ?>
</form>
