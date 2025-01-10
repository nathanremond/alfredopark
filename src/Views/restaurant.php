<?php foreach ($restaurants as $restaurant) { ?>
        <h2><?=$restaurant['name']?></h2>
        <img src="<?=$restaurant['url_picture']?>" alt="image <?=$restaurant['name']?>"></img>
<?php } ?>

<?php foreach ($menus as $menu) { ?>
        <h2><?=$menu['name']?></h2>
        <img src="<?=$menu['url_picture']?>" alt="image <?=$menu['name']?>"></img>
        <p><?=$menu['price']?></p>
<?php } ?>