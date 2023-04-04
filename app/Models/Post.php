<?php

namespace WaxFramework\App\Models;

use WaxFramework\Database\Eloquent\Model;
use WaxFramework\Database\Eloquent\Relations\HasMany;

class Post extends Model {
	public static function get_table_name():string {
		return 'posts';
	}

	public function meta(): HasMany {
		return $this->hasMany(PostMeta::class, 'post_id', 'ID');
	}
}