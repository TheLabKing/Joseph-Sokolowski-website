<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "josok232@gmail";
  $subject = "New message from your website";
  $headers = "From: $email";
  mail($to, $subject, $message, $headers)

  // Redirect to a thank you page or display a success message
  header("Location: thank_you.php");
}

?>