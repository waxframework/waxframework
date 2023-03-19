<?php

defined('ABSPATH') || exit;

use WaxFramework\App\Providers\MenuServiceProvider;

return [
	'version' => '1.0.0',

	'api-namespace' => '{{plugin-api-namespace}}',

	'providers' => [],

	'admin_providers' => [
		MenuServiceProvider::class
	]
];