<?php
/**
 * Template Name: 3D тур
 *
 * @package djun
 */

get_header();
?>

	<main class="relative overflow-hidden">
		<?php djun_breadcrumbs(); ?>

		<div class="relative z-10 px-5 md:mt-21 mt-4 md:mb-[190px] mb-[235px]">
			<iframe src="<?php echo esc_url( site_url( '/3dtour?media-index=1' ) ); ?>"
					name="Виртуальный тур"
					width="100%" height="600"
					frameborder="0"
					allow="fullscreen; accelerometer; gyroscope; magnetometer; vr; xr; xr-spatial-tracking; autoplay; camera; microphone"
					allowfullscreen="true"
					webkitallowfullscreen="true"
					mozallowfullscreen="true"
					oallowfullscreen="true"
					msallowfullscreen="true"></iframe>
		</div>
	</main>

<?php
get_footer();

