<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'ahmedbesns@gmail.com';
$subject = 'New message from your website';
$headers = "From: $email\r\nReply-To: $email\r\n";

mail($to, $subject, $message, $headers);

header('Location: thank-you.html');
?>
