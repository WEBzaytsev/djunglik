<?php
/**
 * Generate acf-blocks.php
 *
 * @package djun
 */

$djun_blocks_dir = __DIR__ . '/blocks';

$djun_directories = array_filter( glob( $djun_blocks_dir . '/*' ), 'is_dir' );

$djun_acf_blocks_file = __DIR__ . '/acf-blocks.php';

$djun_register_acf_blocks_function = '<?php' . PHP_EOL . 'function register_acf_blocks() {';
foreach ( $djun_directories as $djun_directory ) {
	$djun_directory_name = basename( $djun_directory );

	$djun_subdirectories = array_filter( glob( $djun_directory . '/*' ), 'is_dir' );

	if ( empty( $djun_subdirectories ) ) {
		continue;
	}

	foreach ( $djun_subdirectories as $djun_subdirectory ) {
		$djun_subdirectory_name = basename( $djun_subdirectory );
		$djun_block_json_path = $djun_subdirectory . '/block.json';

		if ( ! file_exists( $djun_block_json_path ) ) {
			continue;
		}

		$djun_register_block_type = 'register_block_type( __DIR__ . \'/blocks/' . $djun_directory_name . '/' . $djun_subdirectory_name . '\' );';

		$djun_register_acf_blocks_function .= PHP_EOL . '    ' . $djun_register_block_type;
	}
}
$djun_register_acf_blocks_function .= PHP_EOL . '}';

file_put_contents( $djun_acf_blocks_file, $djun_register_acf_blocks_function );
