<?php

namespace app\core;

class Router
{
    private array $getRoutes = [];
    private array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $url = $_SERVER['PATH_INFO'] ?? '/';

        if ($method === 'get') {
            $fn = $this->getRoutes[$url] ?? null;
        } else {
            $fn = $this->postRoutes[$url] ?? null;
        }

        if (!$fn) {
            echo 'Page Not Found';
            exit;
        }
        echo call_user_func($fn, $this);
    }

    public function renderView()
    {
        include __DIR__ . "/../views/products/$view.php";
    }
}
