<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;

$controller = new HomeController();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
}