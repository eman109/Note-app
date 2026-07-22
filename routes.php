<?php

$router=new Router();

$router ->get('/', 'controllers/home.php');

$router->get('/register', 'controllers/auth/register.php');
$router->post('/register', 'controllers/auth/register_store.php');

$router->get('/login', 'controllers/auth/login.php');
$router->post('/login', 'controllers/auth/login_store.php');

$router->post('/logout', 'controllers/auth/logout.php');


$router->get('/notes', 'controllers/notes/index.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');
$router->get('/notes/{id}', 'controllers/notes/show.php');
$router->get('/notes/{id}/edit', 'controllers/notes/edit.php');
$router->patch('/notes/{id}', 'controllers/notes/update.php');
$router->delete('/notes/{id}', 'controllers/notes/destroy.php');

return $router;