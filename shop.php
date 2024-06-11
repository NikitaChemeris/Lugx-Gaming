<!DOCTYPE html>
<html lang="en">

<?php require "parts/head.php" ?>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->

<?php require "parts/header.php" ?>

<!-- ***** Header Area End ***** -->

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Our Shop</h3>
                <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
            </div>
        </div>
    </div>
</div>

<!-- ***** Shop Area Starts ***** -->
<div class="section trending">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="new_game.php" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="row trending-box">
            <?php
            require_once 'classes/Game.php';

            $game = new Game();

            $games = $game->getAllGames();

            foreach ($games as $single_game) {
                ?>
                <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 <?php echo strtolower($single_game['category']); ?>">
                    <div class="item">
                        <div class="thumb">
                            <a href="product-details.php"><img src="<?php echo $single_game['image_url']; ?>" alt=""></a>
                            <span class="price"><em>$<?php echo $single_game['price']; ?></em></span>
                        </div>
                        <div class="down-content">
                            <span class="category"><?php echo $single_game['category']; ?></span>
                            <h4><?php echo $single_game['name']; ?></h4>
                            <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- ***** Shop Area Ends ***** -->

<?php require "parts/footer.php"?>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
