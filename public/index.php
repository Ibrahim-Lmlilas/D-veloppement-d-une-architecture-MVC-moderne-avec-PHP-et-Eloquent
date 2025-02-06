<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require __DIR__ . '/../vendor/autoload.php';


// if (file_exists(__DIR__ . '/../.env')) {
//     $env = parse_ini_file(__DIR__ . '/../.env', true);
//     foreach ($env as $key => $value) {
//         $_ENV[$key] = $value;
//     }
// }

use App\Core\Database;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

new Database();

use App\Core\Session;

Session::start();

use App\Core\Router;

$router = new Router();
require __DIR__ . '/../config/routes.php';

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
