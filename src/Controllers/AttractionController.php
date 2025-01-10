<?php

namespace App\Controllers;


use App\Models\AttractionModel;

class AttractionController{
    private $attractionModel;

    public function __construct() {
        $this->attractionModel = new AttractionModel();
    }

    public function index() {
        $attractions = $this->attractionModel->getAttractions();
        require __DIR__ . '/../Views/attractionsetrestaurant.php';
    }
    
}