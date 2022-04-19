<?php
// php -S localhost:8000 -t C:\Users\UTFPR\Desktop\bp\public
require_once __DIR__.'/../vendor/autoload.php';
$routes = require __DIR__.'/../config/configRoutes.php';

$path = $_SERVER['PATH_INFO'];
if($path == null){
    $path = '/home';
}
if(!array_key_exists($path, $routes)){
   http_response_code(400);
  exit();
}

$controllerClass = $routes[$path];
/** @var  \bp\source\Controller\InterfaceRequisitionController $controller */
$controller = new $controllerClass();
$controller->ProcessRequisiton();
