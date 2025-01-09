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

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ticket = $_POST['id_ticket'] ?? '';
            $visit_date = $_POST['visit_date'];
            var_dump($ticket);
            var_dump($visit_date);

            if (!empty($ticket) && !empty($visit_date)) {
                $this->ticketModel->createTicket($ticket, $visit_date);
                
                header('Location: /');
                exit;
            }
        }
    }   
}