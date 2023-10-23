<?php
/**
 * Block template file: blocks/front-page/front-page-third-section/index.php
 *
 * Front Page Third Section Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or its parent block.
 *
 * @package djun
 */

/**
 * Init custom block
 *
 * @hooked djun_custom_block_start - 10
 */

$djun_block_slug = 'front-page-third-section';
$djun_is_admin = is_admin();

// todo : fix styles
$djun_classes = 'relative z-10 xl:mt-[247px] mt-[150px] pb-[255px] px-5 lg:block hidden';
do_action( 'djun_custom_block_init', $block, $djun_block_slug, $djun_classes );
?>

	<div class="max-w-[1060px] mx-auto relative z-10">
		<h2 class="xl:text-heading-1-pc text-heading-2-pc text-center mb-11.5 font-bold font-unbounded">
			<?php the_field( 'zagolovok' ); ?>
		</h2>

		<?php if ( have_rows( 'spisok' ) ) : ?>
			<div class="grid grid-cols-2 text-white gap-y-[211px] gap-x-[248px] relative pt-[148px]">
				<?php $djun_item_count = 0; ?>
				<?php
				while ( have_rows( 'spisok' ) ) :
					the_row();
					?>
					<?php
					$djun_item_bg_color = get_sub_field( 'czvet_fona' );
					$djun_item_title = get_sub_field( 'zagolovok' );
					$djun_item_text = get_sub_field( 'tekst' );
					$djun_item_z_index = 'z-40';
					$djun_item_bg = '<svg width="691" height="659" viewBox="0 0 691 659" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M88.8436 124.428C21.6116 201.608 -15.2672 302.083 6.03143 400.911C27.2212 499.233 102.927 575.834 195.786 620.653C287.445 664.892 393.759 673.159 487.543 633.311C582.713 592.875 653.667 512.371 679.806 414.999C706.158 316.83 685.583 212.047 622.334 131.179C558.937 50.1219 460.267 1.35493 355.245 0.0257607C251.523 -1.28693 155.711 47.6665 88.8436 124.428Z" fill="' . $djun_item_bg_color . '"/>
</svg>';
					switch ( $djun_item_count ) {
						case 1:
							$djun_item_bg = '<svg width="727" height="665" viewBox="0 0 727 665" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M315.761 660.946C201.839 649.103 92.0009 606.396 36.2663 519.07C-18.8549 432.705 -3.8597 325.068 40.2566 229.281C83.5804 135.215 159.659 51.863 267.089 17.897C375.042 -16.2346 492.132 2.34682 582.713 57.7725C669.989 111.175 712.006 201.171 722.819 296.753C734.226 397.578 724.989 507.82 642.026 582.047C557.254 657.892 431.227 672.951 315.761 660.946Z" fill="' . $djun_item_bg_color . '"/>
</svg>';
							$djun_item_z_index = 'z-30';
							break;
						case 2:
							$djun_item_bg = '<svg width="712" height="664" viewBox="0 0 712 664" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M601.216 58.6339C687.96 123.474 713.811 228.261 711.903 329.316C709.942 433.149 682.736 541.36 590.9 604.978C497.158 669.917 368.595 677.909 255.736 645.321C149.968 614.779 75.4034 535.662 32.9242 443.859C-8.23608 354.907 -14.5384 254.623 35.5124 169.389C85.5673 84.1484 181.572 32.1451 286.786 11.546C396.004 -9.83695 515.45 -5.47534 601.216 58.6339Z" fill="' . $djun_item_bg_color . '"/>
</svg>';
							$djun_item_z_index = 'z-20';
							break;
						case 3:
							$djun_item_bg = '<svg width="665" height="703" viewBox="0 0 665 703" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M315.355 3.84527C420.821 -14.2234 521.987 33.3324 592.049 106.677C657.14 174.816 671.504 271.144 662.397 367.141C652.907 467.172 625.943 571.354 542.021 634.016C452.641 700.753 335.378 717.533 232.117 688.417C128.281 659.139 43.3646 585.017 11.6464 484.467C-18.7631 388.066 19.6999 284.849 76.4722 195.006C133.137 105.333 210.722 21.7714 315.355 3.84527Z" fill="' . $djun_item_bg_color . '"/>
</svg>';
							$djun_item_z_index = 'z-10';
							break;
					}
					?>

					<div class="relative <?php echo esc_attr( $djun_item_z_index ); ?> ">
						<?php if ( ! $djun_is_admin ) : ?>
							<div class="absolute z-20 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                <?php echo $djun_item_bg; // phpcs:ignore ?>
							</div>
						<?php endif; ?>
						<div class="relative z-30 max-w-[400px]">
							<p class="mb-6 font-bold xl:text-heading-2-pc text-heading-3-pc font-unbounded">
								<?php echo esc_html( $djun_item_title ); ?>
							</p>
							<p class="text-pure-text-pc">
								<?php echo esc_html( $djun_item_text ); ?>
							</p>
						</div>
					</div>
					<?php $djun_item_count++; ?>
				<?php endwhile; ?>
				<?php if ( ! $djun_is_admin ) : ?>
					<div class="absolute z-50 left-[355px] top-auto bottom-[138px]">
						<?php get_template_part( '/vector-images/monkey' ); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

<?php if ( ! $djun_is_admin ) : ?>
	<div class="absolute z-20 top-auto -left-[150px] -bottom-[203px]">
		<?php get_template_part( '/vector-images/front-page-third-section-leaves', 'left' ); ?>
	</div>
	<div class="absolute z-20 top-auto left-auto -right-[94px] -bottom-[130px]">
		<?php get_template_part( '/vector-images/front-page-third-section-leaves', 'right' ); ?>
	</div>
<?php endif; ?>
<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
