<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfredo's Park</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>

<header>
    <div class="header-container">
        <!-- Logo -->
        <div class="logo">
            <img src="/images/Logo_Alfredo_Prk.png" alt="Logo du site" width="100">
        </div>

        <!-- Menu -->
        <nav class="menu">
            <a href="/">Accueil</a>
            <a href="/billetterie">Billetterie</a>
            <a href="/attractions">Attractions</a>
            <a href="/restaurant">Restaurant</a>
        </nav>

        <!-- Icone à droite -->
        <div class="icon">
            <a href="/user"><img src="/images/utilisateurAlfredo.png" alt="Icône cliquable"></a>
        </div>
</header>
        
    

</body>
</html>