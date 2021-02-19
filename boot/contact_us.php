<?php

$email_address = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$message = $_REQUEST['message'];

$to      = 'nrvbde@gmail.com';
$text = "$message \n\n Cordialement, \n $fname $lname.";

$headers = "From: $email_address" . "\r\n" .
    "Reply-To: $email_address" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $text, $headers);
header('Location: contact_us.html');

?>