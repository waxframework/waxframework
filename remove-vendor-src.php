<?php

function deleteFolder($dir)
{
	if (!is_dir($dir)) {
		return;
	}

	$files = scandir($dir);

	foreach ($files as $file) {
		if ($file == '.' || $file == '..') {
			continue;
		}

		$path = $dir . '/' . $file;

		if (is_dir($path)) {
			deleteFolder($path);
		} else {
			unlink($path);
		}
	}

	rmdir($dir);
}

deleteFolder(__DIR__ . '/vendor-src');
