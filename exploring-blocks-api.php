<?php
/**
 * Plugin Name: Exploring Blocks API
 * Plugin URI: https://github.com/SidetrackStudio/exploring-blocks-api
 * Author: pbrocks
 * Author URI: https://pbrocks.sidetrack.studio
 * Description: Exploring the Blocks API creates a basic WP Block and uses PHP to deliver a shortcode with properties.
 * Version: 1.9
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: exploring-blocks-api
 * Domain Path: /languages
 */

defined( 'ABSPATH' ) || die( 'Nothing to see here, folks!' );

/**
 * [load_exploring_blocks_api_textdomain] Tie in to GlotPress to handle translations.
 *
 * @return null
 */
function load_exploring_blocks_api_textdomain() {
	load_plugin_textdomain( 'exploring-blocks-api', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'load_exploring_blocks_api_textdomain' );
