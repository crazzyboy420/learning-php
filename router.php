<?php
$url = parse_url($_SERVER["REQUEST_URI"])["path"];
$routes = require("routes.php");
function abort($code=404){
    http_response_code($code);

    require("view/{$code}.php");
}
function routeToController($url,$route){
    if (array_key_exists($url,$route)){
        require($route[$url]);
    }else{
        abort();
        die();
    }
}
routeToController($url,$routes);