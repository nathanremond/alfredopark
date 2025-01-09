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

       
        <div class="form-section" x-data="{ mail: '', mdp: '' }">
            <h2>Se connecter</h2>
            <form action="login.php" method="POST">
                <label for="mail-login">Mail</label>
                <input type="email" id="mail-login" name="mail" x-model="mail" required>

                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" x-model="mdp" required>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>