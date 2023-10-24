<?php
/**
 * Teacher Card Template
 *
 * @package djun
 */

$djun_teacher_id = $args['teacher_id'];
?>

<div class="">
	<figure class="max-w-[346px]">
		<?php $djun_foto = get_field( 'foto' ); ?>
		<?php if ( $djun_foto ) : ?>
			<img src="<?php echo esc_url( $djun_foto['url'] ); ?>"
				 class="block md:mb-6 mb-5"
				 alt="<?php echo esc_attr( $djun_foto['alt'] ); ?>" />
		<?php endif; ?>
	</figure>
	<p class="mb-1 font-unbounded font-bold md:text-heading-4-pc text-pure-text-pc">
		<?php echo esc_html( get_the_title( $djun_teacher_id ) ); ?>
	</p>
	<p class="font-extrabold md:text-pure-text-pc text-pure-text-base">
		<?php the_field( 'dolzhnost' ); ?>
	</p>
	<p class="md:mt-6 mt-5 md:text-pure-text-pc text-pure-text-base">
		<?php the_field( 'opisanie' ); ?>
	</p>
</div>
