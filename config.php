<?php defined('EXAMPLE') or die('Access denied');

$root_dir = dirname(__FILE__);

define('DIR_ROOT', $root_dir);
define('DIR_CLASSES', $root_dir . '/classes/');
define('DIR_ENGINE', $root_dir . '/engine/');
define('DIR_LIBS', $root_dir . '/libs/');
define('DIR_VIEW', $root_dir . '/view/');
define('DIR_MODELS', $root_dir . '/models/');

define('SITE_ROOT', $_SERVER['SERVER_NAME']);

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'secret');
define('DB_DATABASE', 'test');