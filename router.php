<?php

$routes = require 'route.php';
function routeToControllers($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }


}

function abort($code = 404)
{
    http_response_code(404);
    require "views/{$code}.php";

    die();
}


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToControllers($uri, $routes);


?>