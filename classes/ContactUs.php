<?php
require_once('Database.php');
class ContactUs extends Database {
    public function submitContactForm($name, $surname, $email, $subject, $message) {
        try {
            $conn = $this->getConnection();
            $stmt = $conn->prepare("INSERT INTO contact_us (name, surname, email, subject, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $surname);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $subject);
            $stmt->bindParam(5, $message);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
