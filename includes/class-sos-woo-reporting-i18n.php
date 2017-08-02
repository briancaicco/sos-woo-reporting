<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       This plugin pulls custom transaction data from the woocommerce plugin
 * @since      1.0.0
 *
 * @package    Sos_Woo_Reporting
 * @subpackage Sos_Woo_Reporting/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sos_Woo_Reporting
 * @subpackage Sos_Woo_Reporting/includes
 * @author     SOS Development Team <briancaicco@gmail.com>
 */
class Sos_Woo_Reporting_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sos-woo-reporting',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
