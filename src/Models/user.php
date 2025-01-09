<?php

namespace App\Models;

use App\Database\Database;

class User {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function createUser($lastname, $firstname, $email, $password) {
        $stmt = $this->pdo->prepare('INSERT INTO users (lastname, firstname, email, password) VALUES (?,?,?,?)');
        return $stmt->execute([$lastname, $firstname, $email, $password]);
    }
}