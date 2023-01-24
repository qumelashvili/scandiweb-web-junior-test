<?php

require_once __DIR__ . "/../vendor/autoload.php";


use app\core\Router;
use app\controllers\ProductController;

$route = new Router;

$route->get('/', [new ProductController, 'index']);
$router->get('/add-product', [new ProductController(), 'create']);
$router->post('/add-product', [new ProductController(), 'create']);

$route->resolve();
