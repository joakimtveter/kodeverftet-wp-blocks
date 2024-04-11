<?php
/**
* @wordpress-plugin
* Plugin Name:       Kodeverftet Blocks
* Plugin URI:        https://github.com/joakimtveter/kodeverftet-wp-blocks
* Description:       WordPress Blocks for a section based opinionated experience.
* Version:           0.0.1
* Requires at least: 6.0
* Requires PHP:      8.0
* Author:            Joakim Tveter
* Author URI:        https://joakimtveter.no/
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       kodeverftet-blocks
* Domain Path:       /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function kodeverftet_blocks_init() {
    register_block_type( __DIR__ . '/build' );
    register_block_type( __DIR__ . '/build/image-text-section' );
}
add_action( 'init', 'kodeverftet_blocks_init' );