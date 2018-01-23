<?php
require("vendor/autoload.php");

class bootstrap{
    public function __construct(){        
/**
 * URI
 */
$tokens = explode("/", rtrim($_SERVER['REQUEST_URI'], '/'));

if(isset($tokens[2])){
    $controllerName = ucfirst($tokens[2]);
}else{
    $controllerName = "";
}

if(isset($tokens[3])){
    $action = ucfirst($tokens[3]);
}else{
    $action = "error";
}

if(isset($tokens[4])){
    $param = ucfirst($tokens[4]);
}else{
    $param = null;
}



/**
 * Instantiate Controller
 */

$name = "\\App\\Controllers\\" . $controllerName;
$file = "app/Controllers/" . $controllerName.".php";
//print_r($file); die();
if(file_exists($file)){  
    $controller =   (new $name)->$action($param);
}else{
    $name = "\\App\\Helpers\\ErrorHelper";
    $action = "error";
    $controller =   (new $name)->$action();
}

    }
}