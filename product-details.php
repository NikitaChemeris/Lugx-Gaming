<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "parts/head.php" ?>
    <title>Product Details</title>
</head>
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
                <h3>Product Details</h3>
                <span class="breadcrumb"><a href="#">Home</a> > <a href="#">Shop</a> > Product Details</span>
            </div>
        </div>
    </div>
</div>

<!-- ***** Product Details Start ***** -->
<div class="single-product section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image">
                    <!-- Display game image here -->
                    <?php
                    require_once 'classes/Game.php';

                    // Check if game ID is provided in URL
                    if (isset($_GET['game_id'])) {
                        $game_id = $_GET['game_id'];
                        $game = new Game();
                        $current_game = $game->getGameById($game_id);

                        if ($current_game) {
                            echo '<img src="' . $current_game['image_url'] . '" alt="Game Image">';
                        } else {
                            echo '<img src="assets/images/default-game.jpg" alt="Default Game Image">';
                        }
                    } else {
                        echo '<img src="assets/images/default-game.jpg" alt="Default Game Image">';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <?php
                // Check if $current_game is set
                if (isset($current_game)) {
                    echo '<h4>' . $current_game['name'] . '</h4>';
                    echo '<span class="price">$' . $current_game['price'] . '</span>';
                    echo '<p>' . $current_game['description'] . '</p>';
                } else {
                    echo '<h4>Game Not Found</h4>';
                }
                ?>
                <form id="qty" action="index.php" onsubmit="showConfirmation()">
                    <button type="submit"><i class="fa fa-shopping-bag"></i>BUY</button>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="sep"></div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Product Details End ***** -->

<?php require "parts/footer.php"?>
<!-- Scripts -->
<script>
    function showConfirmation() {
        alert("A receipt of payment is expected at the your email");
    }
</script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
