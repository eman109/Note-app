<?php

$router=new Router();

$router ->get('/', 'controllers/home.php');

return $router;