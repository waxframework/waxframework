<?php

use WaxFramework\App\Http\Controllers\UserController;
use WaxFramework\Request\Route\Route;

defined('ABSPATH') || exit;

Route::get('user', [UserController::class, 'index']);