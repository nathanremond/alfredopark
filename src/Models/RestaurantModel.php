<?php
namespace App\Models;

use App\Database\Database;
use PDO;

class RestaurantModel {
     private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getRestaurant() {
        $stmt = $this->pdo->prepare('SELECT * FROM restaurant');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
