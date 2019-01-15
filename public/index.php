<?php

require dirname(__DIR__) . ('/vendor/autoload.php');

use Core\Router;

$router = new Router();

$router->set('/', ['controller' => 'HomeController', 'method' => 'index']);
$router->set('/login', ['controller' => 'AuthController', 'method' => 'index']);

$router->dispatch($_SERVER['REQUEST_URI']);





