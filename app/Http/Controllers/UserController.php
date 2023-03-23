<?php

namespace WaxFramework\App\Http\Controllers;

use WaxFramework\Routing\Response;

class UserController extends Controller
{
	public function index() {
		return Response::send(['ID' => 1, 'name' => 'Md Al Amin']);
	}
}