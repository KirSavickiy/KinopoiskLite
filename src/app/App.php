<?php
namespace App;

class App
{
    public function run()
    {
        $routes = require_once APP_PATH . "/config/routes.php";
        $url = $_SERVER['REQUEST_URI'];
        if (array_key_exists($url, $routes)) {
            $routes[$url]();
        }

    }

}
