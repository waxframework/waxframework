<?php

defined( 'ABSPATH' ) || exit;

use MyPluginNamespace\WaxFramework\App;

/**
 * Plugin Name:       MyPluginName
 * Description:       This plugin is build with Wax framework
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Tested up to:      6.2
 * Author:            SovWare
 * Author URI:        http://github.com/sovware
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       MyPluginTextDomain
 * Domain Path:       /languages
 */

require_once __DIR__ . '/vendor/vendor-src/autoload.php';
require_once __DIR__ . '/app/Helpers/helper.php';

class MyPluginClass
{
    public static function load() {
        $application = App::instance();

        /**
         * Fires once activated plugins have loaded.
         *
         */
        add_action(
            'plugins_loaded', function () use ( $application ): void {

                do_action( 'before_load_my_plugin_hook' );

                $application->load( __FILE__, __DIR__ );

                error_log( print_r( my_plugin_hook_config( 'app' ), true ) );
                do_action( 'after_load_my_plugin_hook' );
            }
        );
    }
}

MyPluginClass::load();