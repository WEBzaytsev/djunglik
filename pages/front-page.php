<?php
/**
 * Template Name: Главная
 *
 * @package djun
 */

get_header(); ?>

	<main class="relative overflow-hidden">
		<?php
		the_content();
		get_template_part( '/template-parts/feedback-form-block' );
		?>
	</main>

<?php
get_footer();
