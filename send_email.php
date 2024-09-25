<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = "ogolinbrian@gmail.com";
    $subject = "New Contact Us Message";
    $body = "You have received a new message from the contact form on your website.\n\n" .
            "First Name: $firstName\n" .
            "Last Name: $lastName\n" .
            "Email: $email\n" .
            "Phone: $phone\n\n" .
            "Message:\n$message";

    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Message delivery failed.";
    }
}
?>
