<?php
require_once 'classes/Game.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $game = new Game();
    if ($game->createGame($name, $price, $description)) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Error creating game.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Game</title>
</head>
<body>
<h1>Create Game</h1>
<form method="post">
    Name: <input type="text" name="name"><br>
    Price: <input type="text" name="price"><br>
    Description: <textarea name="description"></textarea><br>
    <input type="submit" value="Create">
</form>
</body>
</html>
