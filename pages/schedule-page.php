<?php
/**
 * Template Name: Расписание занятий
 *
 * @package djun
 */

get_header(); ?>

	<main class="relative overflow-hidden md:mb-[250px] mb-[280px]">
		<?php djun_breadcrumbs(); ?>
		<div class="mx-5 mt-2">
			<div class="max-w-huge mx-auto">
				<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded">
					<?php the_title(); ?>
				</h1>
				<div class="mt-12">
					<?php if ( have_rows( 'raspisanie' ) ) : ?>
						<div class="xl:grid hidden grid-cols-[278px_93px_96px_129px_129px_129px_129px] gap-8 px-8 text-grey-900 mb-3">
							<p class="text-sm">Название курса</p>
							<p class="text-center text-sm">Возраст</p>
							<p class="text-center text-sm">Понедельник</p>
							<p class="text-center text-sm">Вторник</p>
							<p class="text-center text-sm">Среда</p>
							<p class="text-center text-sm">Четверг</p>
							<p class="text-center text-sm">Пятница</p>
						</div>
					<div class="grid gap-4">
						<?php
						while ( have_rows( 'raspisanie' ) ) :
							the_row();
							?>
							<div class="grid xl:grid-cols-[278px_93px_96px_129px_129px_129px_129px] md:grid-cols-[93px_repeat(5,_1fr)] gap-x-8 md:gap-y-2 px-8 py-4 bg-white rounded-25 items-center">
								<p class="text-pure-text-pc font-extrabold xl:col-span-1 col-span-full md:pb-0 pb-4">
									<?php the_sub_field( 'nazvanie_kursa' ); ?>
								</p>
								<div class="xl:hidden md:grid hidden text-grey-900 grid-cols-[93px_repeat(5,_1fr)] gap-x-8 col-span-full">
									<p class="text-center text-sm">Возраст</p>
									<p class="text-center text-sm">Понедельник</p>
									<p class="text-center text-sm">Вторник</p>
									<p class="text-center text-sm">Среда</p>
									<p class="text-center text-sm">Четверг</p>
									<p class="text-center text-sm">Пятница</p>
								</div>
								<p class="md:text-pure-text-pc text-sm md:text-center md:block grid grid-cols-2 md:pb-0 pb-4 md:font-normal font-extrabold">
									<span class="md:hidden block">Возраст</span>
									<?php
									$djun_text = get_sub_field( 'vozrast' ) ?: '—';
									echo esc_html( $djun_text );
									?>
								</p>
								<p class="md:text-pure-text-pc text-sm md:text-center md:block grid grid-cols-2">
									<span class="md:hidden block">Понедельник</span>
									<?php
									$djun_text = get_sub_field( 'ponedelnik' ) ?: '—';
									echo esc_html( $djun_text );
									?>
								</p>
								<p class="md:text-pure-text-pc text-sm md:text-center md:block grid grid-cols-2">
									<span class="md:hidden block">Вторник</span>
									<?php
									$djun_text = get_sub_field( 'vtornik' ) ?: '—';
									echo esc_html( $djun_text );
									?>
								</p>
								<p class="md:text-pure-text-pc text-sm md:text-center md:block grid grid-cols-2">
									<span class="md:hidden block">Среда</span>
									<?php
									$djun_text = get_sub_field( 'sreda' ) ?: '—';
									echo esc_html( $djun_text );
									?>
								</p>
								<p class="md:text-pure-text-pc text-sm md:text-center md:block grid grid-cols-2">
									<span class="md:hidden block">Четверг</span>
									<?php
									$djun_text = get_sub_field( 'chetverg' ) ?: '—';
									echo esc_html( $djun_text );
									?>
								</p>
								<p class="md:text-pure-text-pc text-sm md:text-center md:block grid grid-cols-2">
									<span class="md:hidden block">Пятница</span>
									<?php
									$djun_text = get_sub_field( 'pyatnicza' ) ?: '—';
									echo esc_html( $djun_text );
									?>
								</p>
							</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
