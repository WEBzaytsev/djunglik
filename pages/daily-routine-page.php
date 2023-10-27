<?php
/**
 * Template Name: Режим дня
 *
 * @package djun
 */

get_header(); ?>

	<main class="relative overflow-hidden md:mb-[335px] mb-[280px]">
		<?php djun_breadcrumbs(); ?>
		<div class="mx-5 mt-2">
			<div class="max-w-huge mx-auto">
				<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded">
					<?php the_title(); ?>
				</h1>

				<?php if ( have_rows( 'rezhim_dnya' ) ) : ?>
					<div class="md:mt-12 mt-10 grid gap-y-4">
						<div class="md:grid hidden grid-cols-[135px_auto] gap-x-16 px-8">
							<p class="text-sm text-grey-900">
								Время
							</p>
							<p class="text-sm text-grey-900">
								Вид деятельности
							</p>
						</div>
						<?php
						while ( have_rows( 'rezhim_dnya' ) ) :
							the_row();
							?>
							<div class="grid md:grid-cols-[135px_auto] bg-white rounded-25 py-4 px-8 gap-x-16">
								<p class="font-extrabold text-pure-text-pc md:mb-0 mb-1">
									<?php the_sub_field( 'vremya' ); ?>
								</p>
								<p class="text-pure-text-pc">
									<?php the_sub_field( 'vid_deyatelnosti' ); ?>
								</p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</main>

<?php
get_footer();
