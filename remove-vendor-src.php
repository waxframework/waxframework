<?php

function delete_folder( $dir ) {
    if ( ! is_dir( $dir ) ) {
        return;
    }

    $files = scandir( $dir );

    foreach ( $files as $file ) {
        if ( $file == '.' || $file == '..' ) {
            continue;
        }

        $path = $dir . '/' . $file;

        if ( is_dir( $path ) ) {
            delete_folder( $path );
        } else {
            unlink( $path );
        }
    }

    rmdir( $dir );
}

delete_folder( __DIR__ . '/vendor-src' );
