<?php
/**
* @wordpress-plugin
* Plugin Name:       Kodeverftet Blocks
* Plugin URI:        https://github.com/joakimtveter/kodeverftet-wp-blocks
* Description:       WordPress Blocks for a section based opinionated experience.
* Version:           0.0.1
* Requires at least: 6.5
* Requires PHP:      8.0
* Author:            Joakim Tveter
* Author URI:        https://joakimtveter.no/
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       kodeverftet-blocks
* Domain Path:       /languages
*/

function kodeverftet_blocks_init() {
    register_block_type( __DIR__ . '/build/cta-section' );
    register_block_type( __DIR__ . '/build/image-text-section' );
    wp_enqueue_style('kodeverftet-blocks', __DIR__ . '/build/kodeverket-blocks.scss', false, null);
}
add_action( 'init', 'kodeverftet_blocks_init' );