<?php



// helper function to Die and Dump
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
  }


// helper to detect if the path is valid
function isUrl($path) {
    
    return $_SERVER['REQUEST_URI'] === $path ? true : false;
}


function abort($code = 404)
        {
         
            http_response_code($code);            
            require base_path("views/status/{$code}.php");
            die();

        }


function authorise($condition, $status = Response::FORBIDDEN) {

  if(! $condition){
    abort($status);
  }

}

// helper function to return base path
function base_path($path)
{
    
    return BASE_PATH . $path;
}


// return view path
function view($path, $attributes = [])
{

    // extract the attributes array into key value pairs
    extract($attributes);
    require base_path('views/' . $path);
}