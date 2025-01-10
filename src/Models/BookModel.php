<?php
namespace App\Models;

use App\Database\Database;
use PDO;

class BookModel {
     private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function createBook($seats, $book_date ,$id_restaurant , $id_user) {
        $stmt = $this->pdo->prepare("INSERT INTO book (seats, book_date, id_restaurant, id_user) VALUES (:seats, :book_date, :id_restaurant, :id_user)");
        $stmt->execute([
            ':seats' => $seats,
            ':book_date' => $book_date,
            ':id_restaurant' => $id_restaurant,
            ':id_user' => $id_user
        ]);
    }

}

?>
