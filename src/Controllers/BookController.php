<?php

namespace App\Controllers;


use App\Models\BookModel;

class BookController{
    private $bookModel;

    public function __construct() {
        $this->bookModel = new BookModel();
    }
    
    public function home() {
        require __DIR__ . '/../Views/home.php';
    }

    public function create_book(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $seats = $_POST['seats'];
            $visit_date = $_POST['visit_date'];
            $id_restaurant = 1;
            $id_user = $_SESSION['user_id'];

            if (!empty($seats) && !empty($visit_date) && !empty($id_restaurant) && !empty($id_user)) {
                $this->bookModel->createBook($seats, $visit_date, $id_restaurant, $id_user);
                $this->home();
            }
        }
    }
}