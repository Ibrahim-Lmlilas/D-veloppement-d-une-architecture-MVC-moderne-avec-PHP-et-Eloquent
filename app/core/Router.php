<?php

namespace App\Core;

class Router
{
    protected $routes = [];

    public function addRoute($method, $path, $controller, $action)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }


    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($method === $route['method'] && $uri === $route['path']) {
                $controller = new $route['controller'];
                $action = $route['action'];
                $controller->$action();
                return;
            }
        }
    }
}
