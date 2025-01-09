<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\InscriptionController;

$homecontroller = new HomeController();
$inscriptioncontroller = new InscriptionController();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        $homecontroller->index();
        break;

    case '/inscription':
        $inscriptioncontroller->index();
        break;
    
    case '/create_account':
        $inscriptioncontroller->create_account();
        break;

    default:
        http_response_code(404);
        echo "Page not found";
}