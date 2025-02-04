<?php
require '../helpers.php';

$routes = [
    '/Project/Public/' => 'Controllers/home.php',
    '/Project/Public/Listings' => 'Controllers/Listings/index.php',
    '/Project/Public/Listings/Create' => 'Controllers/Listings/create.php',
    '404' => 'Controllers/Error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];


if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
} else {
    require(basePath($routes['404']));
}
