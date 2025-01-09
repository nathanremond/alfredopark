<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\UserController;

$homecontroller = new HomeController();
$usercontroller = new UserController();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        $homecontroller->index();
        break;

    case '/user':
        $usercontroller->index();
        break;
    
    case '/create_account':
        $usercontroller->create_account();
        break;

    case '/login_account':
        $usercontroller->login_account();
        break;

    default:
        http_response_code(404);
        echo "Page not found";
}