<?php

namespace App\Router;

class Router
{
    public function dispatch(string $uri): void
    {
        $routes = $this->getRoutes(); 


        foreach ($routes as $route) {
            if ($route->getUri() === $uri) {
                $route->execute(); 
                return;
            }
        }
    

        echo "404 Not Found";
    }

    private function getRoutes(): array{
        return require_once APP_PATH . "/config/routes.php";
    }
}