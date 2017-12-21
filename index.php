<?php
require("vendor/autoload.php");
/**
 * URI
 */
$tokens = explode("/", rtrim($_SERVER['REQUEST_URI'], '/'));
$controllerName = ucfirst($tokens[2]) ?? "null";
$action = ucfirst($tokens[3]) ?? "null";
$param = ucfirst($tokens[3]) ?? "null";

/**
 * Instantiate Controller
 */

$name = "\\App\\Controllers\\" . $controllerName;
if($name){  
    $controller =   (new $name)->$action($param);
}else{
    $name = "\\App\\Helpers\\ErrorHelper";
    $controller =   (new $name)->$action();
}


