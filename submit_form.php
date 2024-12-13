<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $qualification = htmlspecialchars($_POST['qualification']);
    $message = htmlspecialchars($_POST['message']);

    // You can customize this to save data in a database or send an email
    echo "Thank you, $name! $email! $phone!
    Your application has been received.";
}
?>
