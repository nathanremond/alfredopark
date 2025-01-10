<h2>Sensations fortes</h2>
<?php foreach ($attractions as $attraction) { 
    if($attraction['id_category'] == 1){ ?>
        <img src="<?=$attraction['url_picture']?>" alt="image <?=$attraction['name']?>"></img>
        <h2><?=$attraction['name']?></h2>
        <p><?=$attraction['infos']?></p>
    <?php } ?>
    
<?php }
?>

<h2>En famille</h2>
<?php foreach ($attractions as $attraction) { 
    if($attraction['id_category'] == 2){ ?>
        <img src="<?=$attraction['url_picture']?>" alt="image <?=$attraction['name']?>"></img>
        <h2><?=$attraction['name']?></h2>
        <p><?=$attraction['infos']?></p>
    <?php }
} ?>