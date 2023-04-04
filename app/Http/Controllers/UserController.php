<?php

namespace WaxFramework\App\Http\Controllers;

use WaxFramework\Database\Query\JoinClause;
use WaxFramework\Routing\Response;
use WaxFramework\App\Models\User;
use WaxFramework\App\Models\Post;
use WaxFramework\Database\Resolver;
use WaxFramework\Database\Query\Builder;

class UserController extends Controller
{
	public function index() {
		$resolver = new Resolver;

		// list($posts, $users) = $resolver->table('posts', 'users');

		// $post = Post::query()->select(1)->where("{$posts}.ID", "{$users}.ID");
		
		// new \wpdb
		$users = User::query()
		->with('post.meta', function(Builder $query) {
			// $query->where('name', 'alamin');
		})
		->with('meta', function(Builder $query) {
			// $query->where('name', 'alamin');
		})
		->get();

		return Response::send(compact('users'));
	}
}