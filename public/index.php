<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AttractionController;
use App\Controllers\HomeController;
use App\Controllers\RestaurantController;
use App\Controllers\UserController;
use App\Controllers\TicketController;

$homecontroller = new HomeController();
$usercontroller = new UserController();
$ticketcontroller = new TicketController();
$attractioncontroller = new AttractionController();
$restaurantcontroller = new RestaurantController();

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

    case '/billetterie':
        $ticketcontroller->index();
        break;
    
    case '/create_ticket_buy':
        $ticketcontroller->createTicketBuy();
        break;

    case '/attractions':
        $attractioncontroller->index();
        break;

    case '/restaurant':
        $restaurantcontroller->index();
        break;
    
    default:
        http_response_code(404);
        echo "Page not found";
}

require __DIR__ . '/../src/Views/includes/footer.php';