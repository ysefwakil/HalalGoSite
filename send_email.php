<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Construct email message
$to = 'info@halalgo.app'; // Replace with your own email address
$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
$message = "Subject: $subject\n\n$message";

// Send email
mail($to, $subject, $message, $headers);

// Redirect user to a thank-you page
header('Location: thankyou.html');
?>
