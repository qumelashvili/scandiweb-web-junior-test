<?php

namespace app\controllers;

use app\core\Router;

class ProductController
{
    public function index(Router $router)
    {
        $router->renderView('index');
    }
}
