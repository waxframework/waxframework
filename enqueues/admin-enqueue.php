<?php

use MyPluginNamespace\WaxFramework\Enqueue\Enqueue;

defined( 'ABSPATH' ) || exit;

Enqueue::script( 'wax-app-script', 'app' );
Enqueue::style( 'wax-app-style', 'app' );
