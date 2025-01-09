<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        require __DIR__ . '/../Views/user.php';
    }

    public function create_account() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (!empty($lastname) || !empty($firstname) || !empty($email) || !empty($password)) {
                $this->userModel->createUser($lastname, $firstname, $email, $password);
                header('Location: /inscription');
                exit;
            }
        }
    }

    public function login_account() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email_login'];
            $password = $_POST['password_login'];

            if (!empty($email) || !empty($password)) {
                $login_user = $this->userModel->SelectUser($email, $password);
                if($login_user){
                    session_start();
                    $_SESSION['user_email'] = $login_user['email'];
                    $_SESSION['user_password'] = $login_user['password'];
                    $_SESSION['user_id'] = $login_user['id_user'];
                    $_SESSION['user_firstname'] = $login_user['firstname'];
                    header('Location: /user');
                    exit;
                } else {
                    echo "Adresse email ou mot de passe incorrect.";
                }
            } else {
                echo "Veuillez remplir tous les champs.";
            }
        }
    } 
}