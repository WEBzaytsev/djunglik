<?php
/**
 * Template Name: Контакты
 *
 * @package djun
 */

get_header();
?>

	<main class="relative overflow-hidden">
		<?php djun_breadcrumbs(); ?>

		<div class="px-5 mt-2">
			<div class="max-w-huge mx-auto">
				<div class="grid gap-x-4.5 grid-cols-contacts-page">
					<div class="">
						<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded mb-16">
							<?php the_title(); ?>
						</h1>
						<div class="grid gap-y-8">
							<div class="grid grid-cols-[48px_auto] items-center gap-x-6">
								<?php get_template_part( '/vector-images/icon', 'phone' ); ?>
								<div class="">
									<p class="font-unbounded font-bold text-pure-text-pc mb-1">Телефон</p>
									<a href="tel:<?php echo esc_attr( get_field( 'telefon', 'option' ) ); ?>"
									   class="text-pure-text-pc hover:underline">
										<?php echo esc_html( get_field( 'telefon', 'option' ) ); ?>
									</a>
								</div>
							</div>
							<div class="grid grid-cols-[48px_auto] items-center gap-x-6">
								<?php get_template_part( '/vector-images/icon', 'email' ); ?>
								<div class="">
									<p class="font-unbounded font-bold text-pure-text-pc mb-1">Email</p>
									<a href="https://mailto:<?php echo esc_attr( get_field( 'email', 'option' ) ); ?>"
									   class="text-pure-text-pc hover:underline">
										<?php echo esc_html( get_field( 'email', 'option' ) ); ?>
									</a>
								</div>
							</div>
							<div class="grid grid-cols-[48px_auto] items-center gap-x-6">
								<?php get_template_part( '/vector-images/icon', 'schedule' ); ?>
								<div class="">
									<p class="font-unbounded font-bold text-pure-text-pc mb-1">Режим работы</p>
									<p class="text-pure-text-pc">
										<?php echo esc_html( get_field( 'rezhim_raboty', 'option' ) ); ?>
									</p>
								</div>
							</div>
							<div class="grid grid-cols-[48px_auto] items-center gap-x-6">
								<?php get_template_part( '/vector-images/icon', 'address' ); ?>
								<div class="">
									<p class="font-unbounded font-bold text-pure-text-pc mb-1">Адрес</p>
									<p class="text-pure-text-pc">
										<?php echo wp_kses_post( get_field( 'adres', 'option' ) ); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="md:mt-[250px] mt-[120px]">
			<?php get_template_part( '/template-parts/feedback-form-block' ); ?>
		</div>
	</main>

<?php
get_footer();
