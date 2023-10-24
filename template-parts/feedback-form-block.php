<?php
/**
 * Feedback From Section Template.
 *
 * @package djun
 */

?>

<section class="relative bg-white md:pt-14 pt-20 xl:pb-[200px] pb-[360px] px-5">
	<svg class="absolute left-0 w-full top-auto bottom-full"
		 viewBox="0 0 1440 167" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1649.46 182.194C1893.77 308.627 1962.75 483.46 1928.97 655.065C1893.21 836.69 1782.88 1025.64 1463.86 1125.02C1134.3 1227.7 708.693 1219.37 344.318 1148.75C-6.77982 1080.71 -278.043 941.016 -384.708 766.776C-487.311 599.169 -389.998 423.28 -188.966 277.612C10.6839 132.945 309.528 21.7859 669.189 3.11877C1034.93 -15.8641 1399.42 52.7946 1649.46 182.194Z"
			  fill="white"/>
	</svg>

	<div class="absolute z-10 top-auto -bottom-[94px] md:left-[12.22%] left-1/2 md:translate-x-0 -translate-x-[67%]">
		<?php get_template_part( '/vector-images/feedback-form', 'image' ); ?>
	</div>

	<div class="max-w-huge mx-auto relative z-20">
		<div class="md:flex w-full justify-between gap-x-10">
			<div class="md:max-w-[568px] md:mb-0 mb-8">
				<h2 class="xl:text-heading-1-pc md:text-heading-2-pc text-heading-1-mob font-bold font-unbounded mb-7.5">
					<?php the_field( 'feedback_form_zagolovok_bloka', 'option' ); ?>
				</h2>
				<p class="md:text-pure-text-pc text-pure-text-base">
					<?php the_field( 'feedback_form_tekst', 'option' ); ?>
				</p>
			</div>
			<?php get_template_part( '/template-parts/feedback-form' ); ?>
		</div>
	</div>
</section>
