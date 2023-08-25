<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["visitor_name"];
    $email = $_POST["visitor_email"];
    $message = $_POST["visitor_msg"];
    $to = "shehryarmalik543@gmail.com";
    $subject = "New Contact Form Submission from Pixelab Solutions";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>