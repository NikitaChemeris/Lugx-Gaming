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
                <h3>Update Game</h3>
                <span class="breadcrumb"><a href="#">Home</a> > Update Game</span>
            </div>
        </div>
    </div>
</div>

<!-- ***** Shop Area Starts ***** -->
<div class="section trending">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-4 mb-4">
                <?php
                require_once 'classes/Game.php';

                if (isset($_GET['id'])) {
                    $game_id = $_GET['id'];
                    $game = new Game();
                    $current_game = $game->getGameById($game_id);
                    ?>
                    <form action="functions/update_game_process.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $current_game['ID_game']; ?>">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $current_game['name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" value="<?php echo $current_game['price']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="image_url">Image URL:</label> <!-- it should be 1280 x 720 -->
                            <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo $current_game['image_url']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $current_game['description']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Update Game</button>
                    </form>
                    <?php
                } else {
                    echo "Game ID not provided.";
                }
                ?>
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
