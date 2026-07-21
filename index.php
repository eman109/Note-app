<?php

define('BASE_PATH', __DIR__);
require BASE_PATH . '/helpers.php';

session_start();

require base_path('core/Router.php');
require base_path('core/Database.php');
$router = require base_path('routes.php');

define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'));

$uri = $_SERVER['REQUEST_URI'];
if (BASE_URL && strpos($uri, BASE_URL) === 0) {
    $uri = substr($uri, strlen(BASE_URL));
}

$router->route($uri, $_SERVER['REQUEST_METHOD']);