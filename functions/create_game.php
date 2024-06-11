<?php
require_once '../classes/Game.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game_image = $_POST['game_image'];
    $game_name = $_POST['game_name'];
    $game_price = $_POST['game_price'];
    $game_description = $_POST['game_description'];

    $game = new Game();
    $success = $game->createGame($game_name, $game_price, $game_image, $game_description);
    if ($success) {
        header("Location: ../shop.php");
        exit;
    } else {
        echo "Error adding game.";
    }
} else {
    echo "Invalid request method.";
}
?>
