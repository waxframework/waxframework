<?php

defined( 'ABSPATH' ) || exit;

use MyPluginNamespace\WaxFramework\App;
use MyPluginNamespace\DI\Container;

function my_plugin_hook():App {
    return App::$instance;
}

function my_plugin_hook_config( string $config_key ) {
    return my_plugin_hook()::$config->get( $config_key );
}

function my_plugin_hook_app_config( string $config_key ) {
    return my_plugin_hook_config( "app.{$config_key}" );
}

function my_plugin_hook_version() {
    return my_plugin_hook_app_config( 'version' );
}

function my_plugin_hook_container():Container {
    return my_plugin_hook()::$container;
}

function my_plugin_hook_singleton( string $class ) {
    return my_plugin_hook_container()->get( $class );
}

function my_plugin_hook_url( string $url = '' ) {
    return my_plugin_hook()->get_url( $url );
}

function my_plugin_hook_dir( string $dir = '' ) {
    return my_plugin_hook()->get_dir( $dir );
}

function my_plugin_hook_render( string $content ) {
    //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo $content;
}