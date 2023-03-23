<?php

use WaxFramework\App\Http\Controllers\UserController;

use WaxFramework\Routing\Ajax;

Ajax::get('user/{id}', [UserController::class, 'index'], ['admin']);
