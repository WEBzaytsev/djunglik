<?php
/**
 * Post Card Template
 *
 * @package djun
 */

$djun_otzyv_id = $args['post_id'];

$djun_post = get_post( $djun_otzyv_id );
$djun_post_date = get_the_date( 'j F', $djun_otzyv_id );
$djun_thumbnail = get_the_post_thumbnail_url( $djun_otzyv_id );
?>

<div class="bg-white group rounded-25 overflow-hidden h-auto <?php echo esc_attr( is_front_page() ? 'md:max-w-[392px] max-w-[300px] md:mr-8 mr-4' : '' ); ?>">
	<a href="<?php echo esc_attr( get_permalink( $djun_otzyv_id ) ); ?>"
	   class="relative h-[293px] overflow-hidden block">
		<img src="<?php echo esc_url( $djun_thumbnail ); ?>"
			 class="w-full h-full object-center object-cover group-hover:scale-[1.05] transition-all duration-300"
			 alt="img">
		<span class="bg-green-800 text-white py-4 md:pl-8 pl-6 pr-12 font-unbounded font-bold rounded-tr-[70px] absolute top-auto bottom-0 left-0 block w-fit"><?php echo esc_html( $djun_post_date ); ?></span>
	</a>
	<div class="xl:p-8 p-6">
		<a href="<?php echo esc_attr( get_permalink( $djun_otzyv_id ) ); ?>"
		   class="md:mb-6 mb-4 md:text-heading-4-pc text-pure-text-base font-bold block font-unbounded hover:underline">
			<?php echo esc_html( get_the_title( $djun_otzyv_id ) ); ?>
		</a>
		<p class="md:text-pure-text-pc text-sm">
			<?php echo esc_html( $djun_post->post_excerpt ); ?>
		</p>
	</div>
</div>
