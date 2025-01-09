<?php
namespace App\Models;

use App\Database\Database;
use PDO;

class TicketModel {
     private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function createTicket($name, $price) {
        $stmt = $this->pdo->prepare("INSERT INTO ticket (name, price) VALUES (:name, :price)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function createTicketsBuy($id_user, $id_ticket, $visit_date) {
        $stmt = $this->pdo->prepare("INSERT INTO tickets_buy (id_user, id_ticket, visit_date) VALUES (:id_user, :id_ticket, :visit_date)");
        $stmt->execute([
            ':id_user' => ['id_user'],
            ':id_ticket' => ['id_ticket'],
            ':visit_date' => ['visit_date']
        ]);
    }

}

?>
