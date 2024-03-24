<?php

$firstname;
$lastname;
$email;
$message;

if (isset($_POST['fullname'])) {
    $fullname = $_POST['fullname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['message'])) {
    $message = $_POST['message'];
}


$to = "johnpaulnarvasa6@gmail.com, analyn.pagador.ampo@gmail.com, dandrev.oclarit.barrio@gmail.com, roldhan.alcantara.fulo@gmail.com, adsvanced.media.tech@gmail.com";
$subject = "Talent Us - Website Inquiry";

$email_body = "<strong>Firstname:</strong> $fullname <br>";
$email_body .= "<strong>Lastname:</strong> $lastname <br>";
$email_body .= "<strong>E-mail:</strong> $email <br>";
// $email_body .= "<strong>Phone Number:</strong> $number <br>";
$email_body .= "<strong>Message:</strong> $message <br>";

$headers = "From: noreply@adsvancedmediatech.com\r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.    
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

echo 'Your message has been sent. Thank you!';
mail($to, $subject, $email_body, $headers);

?>