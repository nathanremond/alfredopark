<?php
namespace App\Models;

use App\Database\Database;
use PDO;

class TicketModel {
     private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function createTicketsBuy($id_user, $id_ticket, $visit_date) {
        $stmt = $this->pdo->prepare("INSERT INTO ticket_buy (id_user, id_ticket, visit_date) VALUES (:id_user, :id_ticket, :visit_date)");
        $stmt->execute([
            ':id_user' => $id_user,
            ':id_ticket' => $id_ticket,
            ':visit_date' => $visit_date
        ]);
    }

}

?>
