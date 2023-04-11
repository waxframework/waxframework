<?php

defined('ABSPATH') || exit;

use MyPluginNamespace\WaxFramework\App;

/**
 * Plugin Name:       PluginName
 * Description:       This plugin is build with Wax framework
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Tested up to:      6.2
 * Author:            SovWare
 * Author URI:        http://github.com/sovware
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       PluginName
 * Domain Path:       /languages
 */

require __DIR__ . '/vendor/vendor-src/autoload.php';
require __DIR__ . '/app/Helpers/helper.php';

class MyPluginName
{
	public static function load()
	{
		$application = App::instance();

		/**
		 * Fires once activated plugins have loaded.
		 *
		 */
		add_action('plugins_loaded', function () use ($application): void {

			do_action('before_load_PluginName');

			$application->load(__FILE__, __DIR__);

			do_action('after_load_PluginName');

		});
	}
}

MyPluginName::load();