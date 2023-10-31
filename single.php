<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Djunglik
 */

$djun_previous_post = get_adjacent_post( false, '', true );
$djun_next_post = get_adjacent_post( false, '', false );
get_header();
?>

	<main class="relative lg:overflow-visible overflow-hidden">
		<?php djun_breadcrumbs(); ?>

		<div class="px-5 mb-[250px]">
			<div class="max-w-huge mx-auto mt-2">
				<div class="lg:grid lg:grid-cols-post lg:max-w-none max-w-[800px] relative gap-8 lg:mb-24 mb-12">
					<div class="relative z-20">
						<h1 class="md:text-heading-1-pc text-heading-1-mob font-bold font-unbounded">
							<?php the_title(); ?>
						</h1>
						<?php $djun_thumbnail = get_the_post_thumbnail_url( $post->ID, 'full' ); ?>
						<img src="<?php echo esc_url( $djun_thumbnail ); ?>"
							 class="w-full h-auto rounded-25 block md:mb-12 mb-8 md:mt-16 mt-10"
							 alt="img">
						<div><?php the_content(); ?></div>
					</div>

					<div class="relative pt-32 lg:block hidden">
						<?php get_template_part( '/template-parts/post', 'sidebar', [ 'id' => 0 ] ); ?>
					</div>
				</div>

				<div class="md:flex items-center w-full justify-between gap-x-8">
					<div class="">
						<?php if ( $djun_previous_post->ID ) : ?>
							<div class="flex lg:gap-x-6 gap-x-4 items-center md:mb-0 mb-4">
								<?php $djun_previous_post_thumbnail = get_the_post_thumbnail_url( $djun_previous_post->ID ); ?>
								<a href="<?php echo esc_url( get_the_permalink( $djun_previous_post->ID ) ); ?>">
									<img src="<?php echo esc_url( $djun_previous_post_thumbnail ); ?>"
										 class="object-cover object-center lg:w-[78px] w-[67px] lg:h-[78px] h-[67px] rounded-25"
										 alt="img">
								</a>
								<div class="">
									<p class="font-unbounded lg:text-pure-text-pc text-sm mb-1">Предыдущая новость</p>
									<a class="font-unbounded lg:text-pure-text-pc text-sm font-bold hover:underline"
									   href="<?php echo esc_url( get_the_permalink( $djun_previous_post->ID ) ); ?>">
										<?php echo esc_html( get_the_title( $djun_previous_post->ID ) ); ?>
									</a>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="">
						<?php if ( $djun_next_post->ID ) : ?>
							<div class="flex lg:gap-x-6 gap-x-4 items-center md:justify-end md:text-right">
								<?php $djun_next_post_thumbnail = get_the_post_thumbnail_url( $djun_next_post->ID ); ?>
								<div class="md:order-1 order-2">
									<p class="font-unbounded lg:text-pure-text-pc text-sm mb-1">Следующая новость</p>
									<a class="font-unbounded lg:text-pure-text-pc text-sm font-bold hover:underline"
									   href="<?php echo esc_url( get_the_permalink( $djun_next_post->ID ) ); ?>">
										<?php echo esc_html( get_the_title( $djun_next_post->ID ) ); ?>
									</a>
								</div>
								<a href="<?php echo esc_url( get_the_permalink( $djun_next_post->ID ) ); ?>"
								   class="md:order-2 order-1">
									<img src="<?php echo esc_url( $djun_next_post_thumbnail ); ?>"
										 class="object-cover object-center lg:w-[78px] w-[67px] lg:h-[78px] h-[67px] rounded-25"
										 alt="img">
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="relative pt-[137px] z-10 max-w-[400px] lg:hidden block">
					<?php get_template_part( '/template-parts/post', 'sidebar', [ 'id' => 1 ] ); ?>
				</div>
			</div>
		</div>

		<div class="md:mt-[250px] mt-[120px]">
			<?php get_template_part( '/template-parts/feedback-form-block' ); ?>
		</div>
	</main>

<?php
get_footer();
