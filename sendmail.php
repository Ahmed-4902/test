<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'ahmedbesns@gmail.com';
$subject = 'New message from your website';
$headers = "From: $email\r\nReply-To: $email\r\n";

if (mail($to, $subject, $message, $headers)) {
  $response = array('success' => true);
} else {
  $response = array('success' => false);
}

header('Content-Type: application/json');
echo json_encode($response);
?>
