<?php

defined('ABSPATH') || exit;

/**
 * Plugin Name:       PluginName
 * Description:       This plugin is build with WpCommander framework
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Tested up to:      6.1.1
 * Author:            WpCommander
 * Author URI:        http://github.com/wpcommander
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       pluginFileName
 * Domain Path:       /languages
 */

class WaxFramework
{
	public static function load()
	{
		/**
		 * Fires once activated plugins have loaded.
		 *
		 */
		add_action( 'plugins_loaded', function() : void {
			error_log(__DIR__);
			error_log(__FILE__);
			error_log(trailingslashit(plugin_dir_url(__FILE__)));
		} );
	}
}

WaxFramework::load();