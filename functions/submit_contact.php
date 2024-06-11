<?php
require_once('../classes/ContactUs.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $contactUs = new ContactUs();

    if ($contactUs->submitContactForm($name, $surname, $email, $subject, $message)) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "An error has occurred. Please try again..";
    }
} else {
    header("Location: ../contact.php");
    exit();
}
?>
