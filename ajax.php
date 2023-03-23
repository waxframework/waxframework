<?php

use WaxFramework\Providers\RouteServiceProvider;
use WaxFramework\Request\Response;
use WaxFramework\App;

/** Load WordPress Bootstrap */
require_once dirname( __DIR__, 3 ) . '/wp-load.php';

/** Allow for cross-domain requests (from the front end). */
send_origin_headers();

header( 'Content-Type: text/html; charset=' . get_option( 'blog_charset' ) );
header( 'X-Robots-Tag: noindex' );

// Require a valid action parameter.
if ( empty( $_REQUEST['action'] ) || ! is_scalar( $_REQUEST['action'] ) ) {
	Response::set_headers([], 404);
	echo wp_json_encode([
		'code' => 'ajax_no_route',
		'message' => 'No route was found matching the URL and request method.'
	]);
	exit;
}
$route_service_provider = App::$container->get( RouteServiceProvider::class );

$route_service_provider->ajax_init();