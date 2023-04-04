<?php

namespace WaxFramework\App\Models;

use WaxFramework\Database\Eloquent\Model;

class UserMeta extends Model {
	public static function get_table_name():string {
		return 'usermeta';
	}
}