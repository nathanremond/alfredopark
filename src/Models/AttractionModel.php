<?php
namespace App\Models;

use App\Database\Database;
use PDO;

class AttractionModel {
     private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getAttractions() {
        $stmt = $this->pdo->prepare('SELECT * FROM attraction ORDER BY id_category');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
