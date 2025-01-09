<?php
include 'session.php';

$user_firstname = getUserFirstname();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription / Connexion</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>
<body>
    <h1>Vous êtes connecté <?php echo $_SESSION['user_firstname'] ?></h1>
    <div class="container">
       
        <div class="form-section" x-data="{ lastname: '', firstname: '', email: '', password: '' }">
            <h2>Créez un compte</h2>
            <form action="/create_account" method="POST">
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname" x-model="lastname" required>

                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" x-model="firstname" required>

                <label for="email">Mail</label>
                <input type="email" id="email" name="email" x-model="email" required>

                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" x-model="password" required>

                <button type="submit">S'inscrire</button>
            </form>
        </div>

       
        <div class="form-section" x-data="{ email_login: '', password_login: '' }">
            <h2>Se connecter</h2>
            <form action="/login_account" method="POST">
                <label for="email_login">Mail</label>
                <input type="email" id="email_login" name="email_login" x-model="email_login" required>

                <label for="password_login">Mot de passe</label>
                <input type="password" id="password_login" name="password_login" x-model="password_login" required>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>