<?php 
require_once "app/controller.php";
require_once "app/model.php";

$requestUrL = $_SERVER['REQUEST_URI'];
$requestUri =substr($requestUrL,14);

$routes = [
    '/' => 'Controller@index',
    '/abouts' => 'Controller@abouts',
    '/test' => 'Controller@test',
    
];

$controllerMethod = $routes[$requestUri] ?? null;

try {

    if ($controllerMethod !== null) {
        list($controllerName, $methodName) = explode('@', $controllerMethod);

        spl_autoload_register(function ($class) {
            include 'app/controller.php';
        });

        // Check if the class and method exist
        if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            $controller = new Controller();
            $controller->notFound();
        }
    } else {
        $controller = new Controller();
        $controller->notFound();
    }
} catch (Exception $e) {
    $controller = new Controller();
    $controller->error505($e->getMessage());
}
