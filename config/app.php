<?php

defined('ABSPATH') || exit;

use WaxFramework\App\Providers\MenuServiceProvider;

return [
	'version' => '1.0.0',

	'rest_api' => [
		'namespace' => 'waxframework',
		'versions' => []
	],

	'ajax_api' => [
		'namespace' => 'waxframework',
		'versions' => []
	],

	'providers' => [],

	'admin_providers' => [
		MenuServiceProvider::class
	]
];