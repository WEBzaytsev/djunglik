<?php
/**
 * Create new acf block.
 *
 * @package djun
 */

// Prompt the user for the block space.
$djun_block_space = strtolower( readline( 'Enter the block space: ' ) );
$djun_block_space = trim( preg_replace( '/[\s_]+/', '-', $djun_block_space ), '-' );
$djun_space_dir = "blocks/{$djun_block_space}/";
if ( ! is_dir( $djun_space_dir ) ) {
	mkdir( $djun_space_dir, 0755, true );
}

// Prompt the user for the block name.
$djun_block_name = strtolower( readline( 'Enter the block name: ' ) );
$djun_block_name_slug = trim( preg_replace( '/[\s_]+/', '-', $djun_block_name ), '-' );
$djun_block_name = ucwords( str_replace( [ '-', '_' ], ' ', $djun_block_name ) );

// Prompt for block description.
$djun_block_description = trim( readline( 'Enter block description: ' ) );
if ( empty( $djun_block_description ) ) {
	$djun_block_description = $djun_block_name;
}

// Prompt for block category.
$djun_block_category = trim( readline( 'Enter block category: ' ) );
if ( empty( $djun_block_category ) ) {
	$djun_block_category = 'other';
}

// Prompt for block keywords.
$djun_block_keywords_str = trim( readline( 'Enter block keywords (comma separated): ' ) );
$djun_block_keywords = [ $djun_block_name ];
if ( ! empty( $djun_block_keywords_str ) ) {
	$djun_block_keywords = array_merge( $djun_block_keywords, array_map( 'trim', explode( ',', $djun_block_keywords_str ) ) );
}
$djun_block_keywords = array_map( 'strtolower', $djun_block_keywords );

// Create block directory.
$djun_block_dir = $djun_space_dir . $djun_block_name_slug . '/';
if ( ! is_dir( $djun_block_dir ) ) {
	mkdir( $djun_block_dir, 0755, true );
}

$djun_index_content = djun_create_block_index_file( $djun_block_name, $djun_block_name_slug, $djun_block_dir );
$djun_block_json_content = djun_create_block_json_file( $djun_block_name, $djun_block_name_slug, $djun_block_description, $djun_block_category, $djun_block_keywords );

file_put_contents( $djun_block_dir . 'index.php', $djun_index_content );
file_put_contents( $djun_block_dir . 'block.json', $djun_block_json_content );

exec( 'composer blocks:register' );

// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
echo "Block created successfully at {$djun_block_dir} \n";

/**
 * Create index.php for new block
 *
 * @param string $block_name block name.
 * @param string $block_slug block slug.
 * @param string $block_path block path.
 * @return string
 */
function djun_create_block_index_file( string $block_name, string $block_slug, string $block_path ): string {
	return "<?php\n/**
 * Block template file: {$block_path}index.php
 *
 * {$block_name} Block Template.
 *
 * @param   array \$block The block settings and attributes.
 * @param   string \$content The block inner HTML (empty).
 * @param   bool \$is_preview True during backend preview render.
 * @param   int \$post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array \$context The context provided to the block by the post or its parent block.
 *
 * @package djun
 */

/**
 * Init custom block
 *
 * @hooked djun_custom_block_start - 10
 */

\$djun_block_slug = '{$block_slug}';

\$djun_classes  = '';
do_action( 'djun_custom_block_init', \$block, \$djun_block_slug, \$djun_classes );
?>

<!-- content -->

<?php

/**
 * End of the custom block
 *
 * @hooked djun_custom_block_end - 10
 */

do_action( 'djun_custom_block_close' );
";
}

/**
 * Create block.json for new block
 *
 * @param string $block_name block name.
 * @param string $block_slug block slug.
 * @param string $description block description.
 * @param string $category block category.
 * @param array  $keywords block keywords.
 * @return false|string
 */
function djun_create_block_json_file( string $block_name, string $block_slug, string $description, string $category, array $keywords ) {
	$keywords = $keywords ? array_map( 'strtolower', $keywords ) : [ $block_name ];
	$json = [
		'name' => "acf/{$block_slug}",
		'title' => $block_name,
		'description' => $description ?: $block_name,
		'category' => $category,
		'icon' => 'align-left',
		'apiVersion' => 2,
		'keywords' => $keywords,
		'acf' => [
			'mode' => 'preview',
			'renderTemplate' => 'index.php',
		],
	];
	return json_encode( $json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
}
