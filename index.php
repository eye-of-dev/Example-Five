<?php

// Version
define('EXAMPLE', '1.0.0');

// Configuration
if (file_exists('config.php')) {
    require_once('config.php');
}  

// Startup
require_once('startup.php');

// Registry
$registry = new Registry();

// Loader
$loader = new Loader($registry);
$registry->set('load', $loader);

// DataBase
$db = new Database(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$registry->set('db', $db);

// Request
$request = new Request();
$registry->set('request', $request);

$body = new Main($registry);
$body->index();
