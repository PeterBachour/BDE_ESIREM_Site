<?php

$email_address = $_REQUEST['email'];

$to      = 'nrvbde@gmail.com';
$subject = "Ajouter $email_address.";
$message = "Hello, \n ajouter $email_address à la newsletter. \n Cordialement, \n BDE Website.";

$headers = "From: $email_address" . "\r\n" .
    "Reply-To: $email_address" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('Location: index.html');

?>