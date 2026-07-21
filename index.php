<?php


define('BASE_PATH', __DIR__);
require BASE_PATH . '/helpers.php';
require base_path('core/Router.php');
require base_path('core/Database.php');

$router = require base_path('routes.php');

$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$uri = $_SERVER['REQUEST_URI'];
if ($basePath && strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

$router->route($uri, $_SERVER['REQUEST_METHOD']);