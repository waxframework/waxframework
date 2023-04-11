<?php

use MyPluginNamespace\App\Http\Controllers\UserController;
use MyPluginNamespace\WaxFramework\Routing\Route;

Route::get( 'user', [UserController::class, 'index'], ['admin'] );