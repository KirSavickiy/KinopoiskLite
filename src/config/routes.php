<?php 

return [
    "/home" => function() {
        require_once APP_PATH ."/views/pages/home.php";
    },
    "/about"=> function() {
        require_once APP_PATH ."/views/pages/about.php";
    }
];
