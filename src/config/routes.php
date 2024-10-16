<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

use App\Router\Route;

return [
    Route::get("/home", function() {
        require_once APP_PATH ."/views/pages/home.php";
    } ), 
    Route::get("/about",function() {
        require_once APP_PATH ."/views/pages/about.php";
    } ), 
];

