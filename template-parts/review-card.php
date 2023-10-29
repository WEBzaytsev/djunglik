<?php
/**
 * Review Card Template
 *
 * @package djun
 */

$djun_otzyv_id = $args['review_id'];
$djun_is_modal = $args['is_modal'] ?? false;

$djun_text = get_field( 'tekst', $djun_otzyv_id );
$djun_yandex_url = get_field( 'ssylka_na_yandeks', $djun_otzyv_id );
$djun_max_words = 28;
$djun_words = explode( ' ', $djun_text );
?>

<?php if ( ! $djun_is_modal ) : ?>
<div class="bg-white xl:p-12.5 md:p-8 p-6 rounded-25 h-auto <?php echo esc_attr( is_front_page() || $djun_is_modal ? 'md:mr-8 mr-4' : '' ); ?>">
	<?php endif; ?>
	<div class="flex md:items-center items-start md:gap-x-8 gap-x-4">
		<?php $djun_avatarka = get_field( 'avatarka', $djun_otzyv_id ); ?>
		<?php if ( $djun_avatarka ) : ?>
			<img src="<?php echo esc_url( $djun_avatarka['url'] ); ?>"
				 width="70"
				 height="70"
				 alt="<?php echo esc_attr( $djun_avatarka['alt'] ); ?>"/>
		<?php endif; ?>

		<div class="">
			<p class="font-unbounded md:mb-2.5 mb-3 font-bold <?php echo esc_attr( is_front_page() || $djun_is_modal ? 'xl:text-heading-3-pc md:text-heading-4-pc text-pure-text-base' : 'text-pure-text-pc' ); ?>">
                <?php echo get_the_title($djun_otzyv_id); // phpcs:ignore ?>
			</p>
			<div class="md:flex items-center gap-x-4">
				<div class="flex gap-x-2 items-center md:mb-0 mb-1">
					<?php $djun_otzyv_rating = (int) get_field( 'rejting', $djun_otzyv_id ); ?>
					<?php for ( $djun_k = 1; $djun_k < 6; $djun_k++ ) : ?>
						<svg width="22" height="20" viewBox="0 0 22 20" fill="none"
							 xmlns="http://www.w3.org/2000/svg">
							<path d="M9.72899 1.02493C10.3876 -0.341645 12.3397 -0.341643 12.9983 1.02493L14.7781 4.71791C15.0424 5.26645 15.5659 5.64559 16.171 5.72671L20.2444 6.27283C21.7517 6.47493 22.3549 8.32557 21.2546 9.37225L18.2812 12.2008C17.8395 12.6209 17.6396 13.2344 17.7492 13.833L18.4869 17.8635C18.7598 19.355 17.1806 20.4988 15.842 19.7791L12.2245 17.8342C11.6872 17.5453 11.0401 17.5453 10.5028 17.8342L6.88531 19.7791C5.54668 20.4988 3.96743 19.355 4.24041 17.8635L4.97811 13.833C5.08768 13.2344 4.88772 12.6209 4.44606 12.2008L1.47265 9.37225C0.372349 8.32557 0.975574 6.47493 2.48292 6.27283L6.5563 5.72671C7.16134 5.64559 7.68484 5.26645 7.9492 4.71791L9.72899 1.02493Z"
								  fill="#<?php echo esc_attr( $djun_otzyv_rating >= $djun_k ? 'FD9B28' : '999999' ); ?>"/>
						</svg>
					<?php endfor; ?>
				</div>

				<span class="text-grey-600 text-sm"><?php the_field( 'data', $djun_otzyv_id ); ?></span>
			</div>
		</div>
	</div>

	<?php if ( $djun_is_modal && $djun_yandex_url ) : ?>
		<a href="<?php echo esc_url( $djun_yandex_url ); ?>"
		   target="_blank"
		   class="text-ochre md:text-pure-text-pc text-pure-text-base hover:underline md:mt-8 mt-4 block">
			Читать на Яндекс
		</a>
	<?php endif; ?>

	<p class="xl:mt-8 mt-4 <?php echo esc_attr( $djun_is_modal ? '' : 'line-clamp-3' ); ?>">
		<?php echo esc_html( $djun_text ); ?>
	</p>
	<?php if ( ! is_front_page() && ! $djun_is_modal ) : ?>
		<?php if ( $djun_yandex_url || ( count( $djun_words ) > $djun_max_words ) ) : ?>
			<div class="mt-8 flex w-full items-center justify-between">
				<span class="text-sm border-dashed border-grey-900 border-b text-grey-900 cursor-pointer"
					  data-review-id="<?php echo esc_attr( $djun_otzyv_id ); ?>"
					  data-modal="review">
					<?php echo esc_html( count( $djun_words ) > $djun_max_words ? 'Читать полностью' : '' ); ?>
				</span>
				<?php if ( $djun_yandex_url ) : ?>
					<a href="<?php echo esc_url( $djun_yandex_url ); ?>"
					   target="_blank"
					   class="text-ochre md:text-pure-text-pc text-pure-text-base hover:underline">
						Читать на Яндекс
					</a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php if ( ! $djun_is_modal ) : ?>
</div>
<?php endif; ?>
