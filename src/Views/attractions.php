<div class="body">
    <!-- Sensations fortes -->
    <div class="row">
        <h2>Sensations fortes</h2>
        <div class="item-container">
            <?php foreach ($attractions as $attraction): ?>
                <?php if ($attraction['id_category'] == 1): ?>
                    <div class="item">
                        <img src="<?= htmlspecialchars($attraction['url_picture']) ?>" alt="Image <?= htmlspecialchars($attraction['name']) ?>">
                        <h3><?= htmlspecialchars($attraction['name']) ?></h3>
                        <p><?= htmlspecialchars($attraction['infos']) ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- En famille -->
    <div class="row">
        <h2>En famille</h2>
        <div class="item-container">
            <?php foreach ($attractions as $attraction): ?>
                <?php if ($attraction['id_category'] == 2): ?>
                    <div class="item">
                        <img src="<?= htmlspecialchars($attraction['url_picture']) ?>" alt="Image <?= htmlspecialchars($attraction['name']) ?>">
                        <h3><?= htmlspecialchars($attraction['name']) ?></h3>
                        <p><?= htmlspecialchars($attraction['infos']) ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
