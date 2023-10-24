<?php
/**
 * Template Name: Педагоги
 *
 * @package djun
 */

$djun_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$djun_teachers_count = get_field( 'reviews_count' ) ?? 6;
$djun_args = [
	'status' => 'published',
	'post_type' => 'teachers',
	'posts_per_page' => $djun_teachers_count,
	'paged' => $djun_paged,
];
$djun_query = new WP_Query( $djun_args );

get_header();
?>

	<main class="relative mb-[200px]">
		<?php djun_breadcrumbs(); ?>

		<div class="px-5 mt-2">
			<div class="max-w-huge mx-auto">
				<div class="xl:flex gap-x-3 md:mb-27.5 mb-15">
					<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded xl:mb-0 md:mb-8 mb-5">
						<?php the_field( 'zagolovok_straniczy' ); ?>
					</h1>
					<p class="text-pure-text-pc xl:max-w-[700px] shrink-0 grow-0">
						<?php the_field( 'tekst' ); ?>
					</p>
				</div>

				<?php if ( $djun_query->have_posts() ) : ?>
					<div class="grid lg:grid-cols-3 md:grid-cols-2 items-start gap-y-10 gap-x-16">
						<?php
						while ( $djun_query->have_posts() ) {
							$djun_query->the_post();
							get_template_part( '/template-parts/teacher', 'card', [ 'teacher_id' => $post->ID ] );
						}
						?>
						<?php if ( $djun_query->max_num_pages > 1 ) : ?>
							<div class="col-span-full flex justify-center pt-8 pagination">
								<?php djun_pagination( $djun_query ); ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</main>

<?php
get_footer();
