<?php


$fname = $_REQUEST['Prenom'];
$lname = $_REQUEST['Nom'];
$numero = $_REQUEST['Numero'];
$comm = $_REQUEST['comm'];
$pizza = $_REQUEST['Pizza'];
$flamme = $_REQUEST['Flammekueche'];
$croque = $_REQUEST['Croque-Monsieur'];
$email_address = 'kfetsuki@gmail.com';


$to      = 'kfetsuki@gmail.com';
$subject = "La commande de $lname $fname.";

$message = "Hello, \n La commande de $lname $fname ($numero) est: \n\n $pizza   $flamme     $croque. \n\n Les commentaires sont: $comm .";

$headers = "From: $email_address" . "\r\n" .
    "Reply-To: $email_address" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
header('Location: done.html');

?>