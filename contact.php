<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $article = "NAME: $name
EMAIL: $email
MESSAGE: $message";

  $to = "himanshuisgenius@gmail.com";

  mail($to, 'Message', $article, 'from: noreply@gmail.com');
  header("Location: contact.html");

?>
