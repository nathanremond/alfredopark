<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\TicketController;

$controller = new HomeController();
$ticketcontroller = new TicketController();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        $controller->index();
        break;
    case '/billetterie':
        $ticketcontroller->index();
        break;
    case '/create':
        $ticketcontroller->create();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
}