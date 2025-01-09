<?php
session_start();
if(!isset($_SESSION['user_email'])){
    header('Location: /user');
    exit;
}
?>

<h1>Bonjour <?php echo $_SESSION['user_firstname'] ?></h1>

<form action="/logout_account" method="post">
    <button type="submit">Déconnexion</button>
</form>
