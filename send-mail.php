<?php
if(isset($_POST['submit'])) {
  $to = "recipient@example.com";
  $subject = $_POST['subject'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $headers = "From: $name <$email>";

  if(mail($to, $subject, $message, $headers)) {
    echo "Your message has been sent successfully.";
  } else {
    echo "There was a problem sending your message. Please try again.";
  }
}
?>
