<h1>Bonjour <?php echo $_SESSION['user_firstname'] ?></h1>

<h2>Tickets achetés</h2>

<?php
foreach ($tickets as $ticket) {
    if ($ticket['id_ticket'] == 1) { ?>
        <p>Ticket enfant</p>
        <p><?=$ticket['visit_date']?></p>
    <?php }
    if ($ticket['id_ticket'] == 2) { ?>
        <p>Ticket adulte</p>
        <p><?=$ticket['visit_date']?></p>
    <?php }
    if ($ticket['id_ticket'] == 3) { ?>
        <p>Pass Alfredo</p>
        <p><?=$ticket['visit_date']?></p>
    <?php }
}
?>

<h2>Réservations au Alfredo's Pizza</h2>

<?php
foreach ($books as $book) { ?>
    <p>Nombres de personnes: <?=$book['seats']?></p>
    <p>Date et heure de la réservation: <?=$book['book_date']?></p>
<?php }
?>


<form action="/logout_account" method="post">
    <button type="submit">Déconnexion</button>
</form>
