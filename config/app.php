<?php

use WaxFramework\App\Http\Middleware\EnsureIsUserAdmin;
use WaxFramework\App\Providers\MenuServiceProvider;

return [
	'version' => '1.0.0',

	'rest_api' => [
		'namespace' => 'myplugin',
		'versions' => []
	],

	'ajax_api' => [
		'namespace' => 'myplugin',
		'versions' => []
	],

	'providers' => [],

	'admin_providers' => [
		MenuServiceProvider::class
	],

	'middleware' => [
		'admin' => EnsureIsUserAdmin::class
	]
];