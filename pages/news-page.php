<?php
/**
 * Template Name: Новости
 *
 * @package djun
 */

$djun_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$djun_reviews_count = get_field( 'news_count' ) ?? 12;
$djun_args = [
	'status' => 'published',
	'post_type' => 'post',
	'posts_per_page' => $djun_reviews_count,
	'paged' => $djun_paged,
];
$djun_query = new WP_Query( $djun_args );

get_header(); ?>

	<main class="relative overflow-hidden">
		<?php djun_breadcrumbs(); ?>
		<div class="mx-5 mt-2">
			<div class="max-w-huge mx-auto">
				<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded">
					<?php the_title(); ?>
				</h1>

				<?php if ( $djun_query->have_posts() ) : ?>
					<div class="grid lg:grid-cols-3 md:grid-cols-2 items-start gap-8 md:mt-16 mt-8">
						<?php
						while ( $djun_query->have_posts() ) {
							$djun_query->the_post();
							get_template_part( '/template-parts/post', 'card', [ 'post_id' => $post->ID ] );
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
		<div class="mt-[250px]">
			<?php get_template_part( '/template-parts/feedback-form-block' ); ?>
		</div>
	</main>

<?php
get_footer();
