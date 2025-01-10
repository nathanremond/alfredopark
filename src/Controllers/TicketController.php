<?php

namespace App\Controllers;


use App\Models\TicketModel;

class TicketController{
    private $ticketModel;

    public function __construct() {
        $this->ticketModel = new TicketModel();
    }

    public function index() {
        require __DIR__ . '/../Views/billetterie.php';
    }
    
    public function home() {
        require __DIR__ . '/../Views/home.php';
    }

    public function createTicket(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $child = $_POST['quantities']['child'] ?? '';
            $adult = $_POST['quantities']['adult'] ?? '';
            $pass = $_POST['quantities']['pass'] ?? '';
            $visit_date = $_POST['visit_date'];
            $id_user = $_SESSION['user_id'];

            if (!empty($visit_date)) {
                for($i = 0; $i < $child; $i++){
                    $this->ticketModel->createTicketsBuy($id_user, 1, $visit_date);
                }
                for($i = 0; $i < $adult; $i++){
                    $this->ticketModel->createTicketsBuy($id_user, 2, $visit_date);
                }
                for($i = 0; $i < $pass; $i++){
                    $this->ticketModel->createTicketsBuy($id_user, 3, $visit_date);
                }
                $this->home();
            }
        }
    }
}