<?php
require_once 'Database.php';

class ContactForm {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function save($name, $surname, $email, $subject, $message) {
        $stmt = $this->conn->prepare("INSERT INTO contact_form (name, surname, email, subject, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $surname, $email, $subject, $message);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
