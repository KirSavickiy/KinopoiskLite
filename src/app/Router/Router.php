<?php

namespace App\Router;

class Router
{
    public function __construct()
    {
        $this->initRoutes();
    }
    public function dispatch(string $uri, string $method): void
    {
        $routes = $this->getRoutes(); 
    }

    private function initRoutes(): void
    {
        $routes = $this->getRoutes();
        foreach ($routes as $route) 
        {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
        dd($routes);

    }
    private function getRoutes(): array{
        return require_once APP_PATH . "/config/routes.php";
    }
}