<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController
{

    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        require __DIR__ . '/../Views/user.php';
    }

    public function profile() { 
        $id_user = $_SESSION['user_id'];
        $tickets = $this->userModel->getTicketByUser($id_user);
        $books = $this->userModel->getBookByUser($id_user);
        require __DIR__ . '/../Views/profile.php';
    }

    public function create_account() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (!empty($lastname) && !empty($firstname) && !empty($email) && !empty($password)) {
                $this->userModel->createUser($lastname, $firstname, $email, $password);
                $this->index();
            }
        }
    }

    public function login_account() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email_login'];
            $password = $_POST['password_login'];

            if (!empty($email) && !empty($password)) {
                $login_user = $this->userModel->SelectUser($email, $password);
                if($login_user){
                    if (session_status() === PHP_SESSION_NONE){
                        session_start();
                    }
                    $_SESSION['user_email'] = $login_user[0]['email'];
                    $_SESSION['user_password'] = $login_user[0]['password'];
                    $_SESSION['user_id'] = $login_user[0]['id_user'];
                    $_SESSION['user_firstname'] = $login_user[0]['firstname'];
                    $this->profile();
                } else {
                    echo "Adresse email ou mot de passe incorrect.";
                }
            } else {
                echo "Veuillez remplir tous les champs.";
            }
        }
    }

    public function logout_account() {
        session_destroy();
        $this->index();
    }    
}