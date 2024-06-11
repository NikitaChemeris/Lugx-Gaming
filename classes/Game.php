<?php
require_once 'Database.php';

class Game {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAllGames() {
        $sql = "SELECT * FROM games";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getGameById($id) {
        $sql = "SELECT * FROM games WHERE ID_game = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function createGame($name, $price, $image_url, $description) {
        $sql = "INSERT INTO games (name, price, image_url, description) VALUES (:name, :price, :image_url, :description)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image_url', $image_url);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }


    public function updateGame($id, $name, $price, $image_url, $description) {
        $sql = "UPDATE games SET name = :name, price = :price, image_url = :image_url, description = :description WHERE ID_game = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image_url', $image_url);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function deleteGame($id) {
        $sql = "DELETE FROM games WHERE ID_game = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
