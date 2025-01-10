<div class="body">      
        <div class="restaurants-section">
                <h2>Restaurants</h2>
                <div class="restaurants-container">
                        <?php foreach ($restaurants as $restaurant) { ?>
                        <div class="restaurant-item">
                                <h3><?=$restaurant['name']?></h3>
                                <img src="<?=$restaurant['url_picture']?>" alt="image <?=$restaurant['name']?>" />
                        </div>
                        <?php } ?>
                </div>
        </div>

        <div class="menus-section">
                <h2>Menus</h2>
                <div class="menus-container">
                        <?php foreach ($menus as $menu) { ?>
                        <div class="menu-item">
                                <h3><?=$menu['name']?></h3>
                                <img src="<?=$menu['url_picture']?>" alt="image <?=$menu['name']?>" />
                                <p>Prix : <?=$menu['price']?>€</p>
                        </div>
                        <?php } ?>
                </div>
        </div>

        <div class="reservation-section">
                <h2>Réservation</h2>
                <form action="/create_book" method="post" class="reservation-form">
                        <div class="form-group">
                        <label for="seats">Nombre de places :</label>
                        <input type="number" id="seats" name="seats" min="0" required>
                        </div>
                        <div class="form-group">
                        <label for="visit_date">Date et heure de réservation :</label>
                        <input type="datetime-local" id="visit_date" name="visit_date" required>
                        </div>
                        <button type="submit" class="reservation-button">Réserver</button>
                </form>
        </div>
</div>