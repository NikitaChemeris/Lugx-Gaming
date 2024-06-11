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
                <h3>Create a New Game</h3>
                <span class="breadcrumb"><a href="#">Home</a> > Create a New Game</span>
            </div>
        </div>
    </div>
</div>

<!-- ***** Shop Area Starts ***** -->
<div class="section trending">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-4 mb-4">
                <form action="functions/create_game.php" method="post">
                    <div class="form-group">
                        <label for="game_image">Game Image URL:</label>
                        <input type="text" class="form-control" id="game_image" name="game_image" required>
                    </div>
                    <div class="form-group">
                        <label for="game_name">Game Name:</label>
                        <input type="text" class="form-control" id="game_name" name="game_name" required>
                    </div>
                    <div class="form-group">
                        <label for="game_price">Game Price:</label>
                        <input type="number" class="form-control" id="game_price" name="game_price" required>
                    </div>
                    <div class="form-group">
                        <label for="game_description">Game Description:</label>
                        <textarea class="form-control" id="game_description" name="game_description" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg mt-2">Create</button>
                </form>
            </div>
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
