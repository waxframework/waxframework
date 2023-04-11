<?php

use MyPluginNamespace\App\Http\Middleware\EnsureIsUserAdmin;
use MyPluginNamespace\App\Providers\MenuServiceProvider;

return [
	'version' => '1.0.0',

	'rest_api' => [
		'namespace' => 'MyPluginApiNamespace',
		'versions' => []
	],

	'ajax_api' => [
		'namespace' => 'MyPluginApiNamespace',
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