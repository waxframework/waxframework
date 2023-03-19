<?php

defined('ABSPATH') || exit;

use WaxFramework\App;

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

require_once __DIR__ . '/vendor/vendor-src/autoload.php';
require_once __DIR__ . '/vendor-src/autoload.php';

class WaxFramework
{
	public static function load()
	{
		$application = App::instance();

		/**
		 * Fires once activated plugins have loaded.
		 *
		 */
		add_action('plugins_loaded', function () use ($application): void {
			$application->load(__FILE__, __DIR__);
		});
	}
}

WaxFramework::load();