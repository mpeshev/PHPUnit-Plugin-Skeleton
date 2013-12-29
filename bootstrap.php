<?php

$path = '/home/youruser/path-to/wordpress-core/tests/phpunit/includes/bootstrap.php';

if (file_exists($path)) {
	$GLOBALS['wp_tests_options'] = array(
			'active_plugins' => array('yourplugin/yourplugin.php')
	);
	require_once $path;
} else {
	exit("Couldn't find wordpress-tests/bootstrap.php");
}
