<?php foreach ($restaurants as $restaurant) { ?>
        <h2><?=$restaurant['name']?></h2>
        <img src="<?=$restaurant['url_picture']?>" alt="image <?=$restaurant['name']?>"></img>
<?php } ?>

<?php foreach ($menus as $menu) { ?>
        <h2><?=$menu['name']?></h2>
        <img src="<?=$menu['url_picture']?>" alt="image <?=$menu['name']?>"></img>
        <p><?=$menu['price']?></p>
<?php } ?>

<h2>Reservation</h2>
<form action="/create_book" method="post">
    <label for="seats">Nombre de places :</label>
    <input type="number" id="seats" name="seats" min="0">
    <label for="visit_date">Date et heure de réservation :</label>
    <input type="datetime-local" id="visit_date" name="visit_date" required>
    <button type="submit">Reserver</button>
</form>
