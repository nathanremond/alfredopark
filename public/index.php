<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\UserController;

$homecontroller = new HomeController();
$usercontroller = new UserController();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require __DIR__ . '/../src/Views/includes/header.php';

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

    case '/profile':
        $usercontroller->profile();
        break;

    case '/logout_account':
        $usercontroller->logout_account();
        break;

    default:
        http_response_code(404);
        echo "Page not found";
}

require __DIR__ . '/../src/Views/includes/footer.php';