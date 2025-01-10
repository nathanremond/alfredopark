<?php
namespace App\Models;

use App\Database\Database;
use PDO;

class MenuModel {
     private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getMenu() {
        $stmt = $this->pdo->prepare('SELECT * FROM menu');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
