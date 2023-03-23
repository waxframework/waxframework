<?php

use WaxFramework\App\Http\Controllers\UserController;
use WaxFramework\Routing\Route;

defined('ABSPATH') || exit;

Route::get('user', [UserController::class, 'index'], ['admin']);