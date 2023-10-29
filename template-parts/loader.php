<?php
/**
 * Loader file.
 *
 * @package djun.
 */

?>
<div class="loader transition-all opacity-0 ease-in-out duration-300 absolute flex items-center justify-center bg-white inset-0 <?php echo isset( $args['active'] ) && $args['active'] ? ' active' : ''; ?>">
	<div class="loadingio-spinner-spinner-wrap">
		<div class="ldio-inner">
			<?php for ( $djun_i = 0; $djun_i < 12; $djun_i++ ) : ?>
				<div class="bg-ochre absolute"></div>
			<?php endfor; ?>
		</div>
	</div>
</div>
