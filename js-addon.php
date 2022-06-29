<?php
/**
 * Plugin Name: Elementor  js Addon
 * Description: learing widgets development..
 * Plugin URI:  https://freelbd.xyz/
 * Version:     1.0.0
 * Author:      alasifur
 * Author URI:  https://freelbd.xyz/
 * Text Domain: js-addon
 * 
 * Elementor tested up to:     3.5.0
 * Elementor Pro tested up to: 3.5.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function js_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
     \Plugin::instance();

}
add_action( 'plugins_loaded', 'js_addon' );