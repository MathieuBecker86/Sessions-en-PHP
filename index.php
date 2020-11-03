<?php
session_start();
require 'inc/data/products.php';
require 'inc/head.php'; ?>

<?php
if (isset($_GET["add-to-cart"])) {
    $_SESSION["add-to-cart"][]  = $_GET["add-to-cart"];
    header("location: cart.php");
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <?php
                        if (isset($_SESSION["loginname"])): ?>
                            <a href="?add-to-cart=<?= $id; ?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                        <?php else: ?>
                            <a href="login.php">Please, Log in to add to cart</a>
                        <?php endif; ?>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
