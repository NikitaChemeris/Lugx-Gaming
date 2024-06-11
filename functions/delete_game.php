<?php
require_once '../classes/Game.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game_id = $_POST['id'];

    $game = new Game();
    $success = $game->deleteGame($game_id);
    if ($success) {
        header("Location: ../shop.php");
        exit();
    } else {
        echo "Error deleting game.";
    }
}
?>
