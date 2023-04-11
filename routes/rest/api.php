<?php

use MyPluginNamespace\App\Http\Controllers\UserController;
use MyPluginNamespace\WaxFramework\Routing\Route;

defined('ABSPATH') || exit;

Route::get('user', [UserController::class, 'index'], ['admin']);