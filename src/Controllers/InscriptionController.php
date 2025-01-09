<?php

namespace App\Controllers;

use App\Models\User;

class InscriptionController
{

    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        require __DIR__ . '/../Views/inscription.php';
    }

    public function create_account() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (!empty($lastname) && !empty($firstname) && !empty($email) && !empty($password)) {
                $this->userModel->createUser($lastname, $firstname, $email, $password);
                header('Location: /inscription');
                exit;
            }
        }
    }

    
}