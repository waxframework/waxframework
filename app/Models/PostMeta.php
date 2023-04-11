<?php

namespace MyPluginNamespace\App\Models;

use MyPluginNamespace\WaxFramework\App;
use MyPluginNamespace\WaxFramework\Database\Eloquent\Model;
use MyPluginNamespace\WaxFramework\Database\Resolver;

class PostMeta extends Model {
    public static function get_table_name():string {
        return 'postmeta';
    }

    public function resolver():Resolver {
        return App::$container->get( Resolver::class );
    }
}