<?php

$router=new Router();

$router ->get('/', 'controllers/home.php');

$router->get('/register', 'controllers/auth/register.php');
$router->post('/register', 'controllers/auth/register_store.php');

$router->get('/login', 'controllers/auth/login.php');
$router->post('/login', 'controllers/auth/login_store.php');

$router->post('/logout', 'controllers/auth/logout.php');

return $router;