
<div class="user-section">
    <h1>Bonjour <?php echo $_SESSION['user_firstname'] ?></h1>
</div>

<div class="tickets-section">
    <h2>Tickets achetés</h2>
    <div class="tickets-container">
        <?php foreach ($tickets as $ticket) { ?>
            <div class="ticket-item">
                <?php if ($ticket['id_ticket'] == 1) { ?>
                    <p><strong>Ticket enfant</strong></p>
                    <p>Date de visite : <?=$ticket['visit_date']?></p>
                <?php } elseif ($ticket['id_ticket'] == 2) { ?>
                    <p><strong>Ticket adulte</strong></p>
                    <p>Date de visite : <?=$ticket['visit_date']?></p>
                <?php } elseif ($ticket['id_ticket'] == 3) { ?>
                    <p><strong>Pass Alfredo</strong></p>
                    <p>Date de visite : <?=$ticket['visit_date']?></p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>

<div class="reservations-section1">
    <h2>Réservations au Alfredo's Pizza</h2>
    <div class="reservations-container1">
        <?php foreach ($books as $book) { ?>
            <div class="reservation-item1">
                <p><strong>Nombre de personnes :</strong> <?=$book['seats']?></p>
                <p><strong>Date et heure :</strong> <?=$book['book_date']?></p>
            </div>
        <?php } ?>
    </div>
</div>

<div class="logout-section">
    <form action="/logout_account" method="post">
        <button type="submit" class="logout-button">Déconnexion</button>
    </form>
</div>
