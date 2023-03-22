<?php

use WaxFramework\App\Http\Controllers\UserController;

use WaxFramework\Request\Route\Ajax;

Ajax::get('user', [UserController::class, 'index']);
