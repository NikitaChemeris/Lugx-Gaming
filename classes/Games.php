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

    public function createGame($name, $price, $description) {
        $sql = "INSERT INTO games (name, price, description) VALUES (:name, :price, :description)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function updateGame($id, $name, $price, $description) {
        $sql = "UPDATE games SET name = :name, price = :price, description = :description WHERE ID_game = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
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
