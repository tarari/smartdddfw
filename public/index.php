<?php

require_once __DIR__ . '/../vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

use Http\Router;

$router = new Router();
$response = $router->dispatch($method, $uri);

echo $response;