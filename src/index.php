<?php 
use App\App;

require_once __DIR__ ."/vendor/autoload.php";
define("APP_PATH", __DIR__);


$app =  new App;
$app->run();
