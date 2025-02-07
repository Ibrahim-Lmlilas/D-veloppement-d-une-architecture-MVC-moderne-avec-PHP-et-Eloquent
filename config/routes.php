<?php

use App\Core\Router;
use App\Controllers\Front\HomeController;
use App\Controllers\AuthController;

// Define routes

$router->addRoute('GET', '/login', AuthController::class, 'showLogin');
$router->addRoute('GET','/signup',AuthController::class, 'showsignup');
// $router->addRoute('GET','/alo',AuthController::class, 'alo');
$router->addRoute('POST', '/login', AuthController::class, 'login');
$router->addRoute('POST', '/signup', AuthController::class, 'signup');
$router->addRoute('GET', '/authentification/logout', AuthController::class, 'logout');
