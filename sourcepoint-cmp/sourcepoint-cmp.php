<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sourcepoint.com
 * @since             1.0.0
 * @package           Sourcepoint_Cmp
 *
 * @wordpress-plugin
 * Plugin Name:       Sourcepoint CMP
 * Plugin URI:        https://www.sourcepoint.com
 * Description:       Sourcepoint CMP implementation
 * Version:           1.0.0
 * Author:            Atanur Demirci
 * Author URI:        https://sourcepoint.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sourcepoint-cmp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SOURCEPOINT_CMP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sourcepoint-cmp-activator.php
 */
function activate_sourcepoint_cmp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sourcepoint-cmp-activator.php';
	Sourcepoint_Cmp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sourcepoint-cmp-deactivator.php
 */
function deactivate_sourcepoint_cmp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sourcepoint-cmp-deactivator.php';
	Sourcepoint_Cmp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sourcepoint_cmp' );
register_deactivation_hook( __FILE__, 'deactivate_sourcepoint_cmp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sourcepoint-cmp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sourcepoint_cmp() {

	$plugin = new Sourcepoint_Cmp();
	$plugin->run();

}
run_sourcepoint_cmp();
