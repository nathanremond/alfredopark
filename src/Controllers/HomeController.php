<?php

namespace App\Controllers;

class HomeController
{

    public function __construct() {
        
    }

    public function index() {
        require __DIR__ . '/../Views/home.php';
    }
}