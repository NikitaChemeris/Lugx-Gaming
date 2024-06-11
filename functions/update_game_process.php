<?php
require_once '../classes/Game.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];
    $description = $_POST['description'];

    $game = new Game();
    $success = $game->updateGame($id, $name, $price, $image_url, $description);

    if ($success) {
        header("Location: ../shop.php");
        exit();
    } else {
        echo "Error updating game.";
    }
}
?>
