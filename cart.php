<?php
session_start();
require 'inc/data/products.php';
require 'inc/head.php'; ?>

<?php if(isset($_SESSION['add-to-cart'])) : ?>
    <section class="cookies container-fluid">
    <div class="row">
    <?php foreach ($_SESSION["add-to-cart"] as $id): ?>
        <figure class="thumbnail text-center">
            <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $catalog[$id]['name']; ?>" class="img-responsive">
            <figcaption class="caption">
                <h3><?= $catalog[$id]['name']; ?></h3>
                <p><?= $catalog[$id]['description']; ?></p>
            </figcaption>
        </figure>
    <?php endforeach; ?>
<?php else: ?>
    <span>Empty basket </span>
<?php endif ?>
    </div>
    </section>

<?php require 'inc/foot.php'; ?>