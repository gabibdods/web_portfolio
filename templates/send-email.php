<?php
$to = "someone@example.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From: webmaster@example.com";
mail($to, $subject, $message, $headers);
?>
