<?php

namespace WaxFramework\App\Models;

use WaxFramework\Database\Eloquent\Model;
use WaxFramework\Database\Eloquent\Relations\HasMany;
use WaxFramework\Database\Eloquent\Relations\HasOne;

class User extends Model {
	public static function get_table_name():string {
		return 'users';
	}

	public function post(): HasOne {
		return $this->hasOne(Post::class, 'post_author', 'ID');
	}

	public function meta(): HasMany {
		return $this->hasMany(UserMeta::class, 'user_id', 'ID');
	}
}