<?php

use WaxFramework\Providers\RouteServiceProvider;
use WaxFramework\App;

/** Load WordPress Bootstrap */
require_once dirname( __DIR__, 3 ) . '/wp-load.php';

$route_service_provider = App::$container->get( RouteServiceProvider::class );

$route_service_provider->ajax_init();