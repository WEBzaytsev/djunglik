<?php
/**
 * Feedback From Template.
 *
 * @package djun
 */

?>
<form class="xl:max-w-[604px] lg:max-w-[550px] max-w-[420px] shrink-0 grow-0 w-full">
	<p class="text-center font-bold font-unbounded xl:text-heading-2-pc md:text-heading-3-pc text-pure-text-pc md:mb-10.5 mb-12">
		<?php the_field( 'feedback_form_zagolovok_formy', 'option' ); ?>
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
