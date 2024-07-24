<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://sourcepoint.com
 * @since      1.0.0
 *
 * @package    Sourcepoint_Cmp
 * @subpackage Sourcepoint_Cmp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sourcepoint_Cmp
 * @subpackage Sourcepoint_Cmp/includes
 * @author     Atanur Demirci <atanur@sourcepoint.com>
 */
class Sourcepoint_Cmp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sourcepoint-cmp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
