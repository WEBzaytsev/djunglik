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
				<div class="grid gap-x-4.5 gap-y-16 lg:grid-cols-contacts-page">
					<div class="">
						<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded md:mb-16 mb-10">
							<?php the_title(); ?>
						</h1>
						<div class="grid gap-y-8 lg:grid-cols-1 md:grid-cols-2">
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
						<?php $djun_ssylka_na_yandeks_karty = get_field( 'ssylka_na_yandeks_karty', 'option' ); ?>
						<?php if ( $djun_ssylka_na_yandeks_karty ) : ?>
							<a href="<?php echo esc_url( $djun_ssylka_na_yandeks_karty['url'] ); ?>"
							   class="md:mt-12 mt-8 block w-fit text-ochre text-pure-text-pc hover:underline"
							   target="<?php echo esc_attr( $djun_ssylka_na_yandeks_karty['target'] ); ?>">
								<?php echo esc_html( $djun_ssylka_na_yandeks_karty['title'] ); ?>
							</a>
						<?php endif; ?>
					</div>

					<div class="lg:pt-5">
						<?php $djun_karta = get_field( 'karta', 'option' ); ?>
						<?php if ( $djun_karta ) : ?>
							<img src="<?php echo esc_url( $djun_karta['url'] ); ?>"
								 class="rounded-25 sm:h-auto h-[90vh] w-full object-center object-cover"
								 alt="<?php echo esc_attr( $djun_karta['alt'] ); ?>" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-[250px]">
			<?php get_template_part( '/template-parts/feedback-form-block' ); ?>
		</div>
	</main>

<?php
get_footer();
