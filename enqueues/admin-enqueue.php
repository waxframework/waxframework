<?php

use MyPluginNamespace\WaxFramework\Enqueue\Enqueue;

defined( 'ABSPATH' ) || exit;

Enqueue::script( 'wax-app-script', 'build/js/app' );
Enqueue::style( 'wax-app-style', 'build/css/app' );
