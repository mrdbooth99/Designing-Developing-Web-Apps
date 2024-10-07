<?php


    const BASE_PATH = __DIR__.'/../';
    require BASE_PATH.'Core/functions.php';



    // autoload classes using PHP spl_autoload_register
    spl_autoload_register(function ($class) {
        
        $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

        require base_path("{$class}.php");
    });


   $router = new \Core\Router();
   $routes = require base_path('routes.php');    

    // get the supplied URI
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];  


    //$method = $_SERVER['REQUEST_METHOD'];

    // determine if we have method
    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

   
    $router->route($uri, $method);
