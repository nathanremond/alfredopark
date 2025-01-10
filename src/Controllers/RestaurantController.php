<?php

namespace App\Controllers;


use App\Models\RestaurantModel;
use App\Models\MenuModel;

class RestaurantController{
    private $restaurantModel;
    private $menuModel;

    public function __construct() {
        $this->restaurantModel = new RestaurantModel();
        $this->menuModel = new MenuModel();
    }

    public function index() {
        $restaurants = $this->restaurantModel->getRestaurant();
        $menus = $this->menuModel->getMenu();
        require __DIR__ . '/../Views/restaurant.php';
    }
    
}