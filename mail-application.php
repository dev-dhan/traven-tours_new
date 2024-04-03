<?php
$firstname;
$lastname;
$email;
$address;
$jobRole;
$resume;

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['address'])) {
    $address = $_POST['address'];
}
if (isset($_POST['jobRole'])) {
    $jobRole = $_POST['jobRole'];
}
if (isset($_FILES['resume'])) {
    $resume = $_FILES['resume'];
}

$from_email = "noreply@adsvancedmediatech.com"; // Use a proper 'noreply' email address
$recipient_email = "johnpaulnarvasa6@gmail.com, analyn.pagador.ampo@gmail.com, dandrev.oclarit.barrio@gmail.com, roldhan.alcantara.fulo@gmail.com, ADSvanced.Media.Tech@gmail.com";

$tmp_name = $resume['tmp_name'];
$name = $resume['name'];
$size = $resume['size'];
$type = $resume['type'];
$error = $resume['error'];

if ($error > 0) {
    die('Upload error or No files uploaded');
}

$content = file_get_contents($tmp_name); // Simplified file reading

$encoded_content = chunk_split(base64_encode($content));
$boundary = md5("random");

$headers = "From: $from_email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=$boundary\r\n";

$subject = "See and Explore Travel and Tours - Travel Booking";

$body = "--$boundary\r\n";
$body .= "Content-Type: $type; name=\"$name\"\r\n";
$body .= "Content-Disposition: attachment; filename=\"$name\"\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
$body .= $encoded_content;
$body .= "\r\n"; // Separate the attachment from the text part
$body .= "--$boundary\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";
$body .= "<strong>Firstname:</strong> $firstname <br>";
$body .= "<strong>Lastname:</strong> $lastname <br>";
$body .= "<strong>E-mail:</strong> $email <br>";
$body .= "<strong>Job Role:</strong> $jobRole <br>";
$body .= "<strong>Address:</strong> $address <br>";

$sentMailResult = mail($recipient_email, $subject, $body, $headers);

if ($sentMailResult) {
    // echo "<h3>File Sent Successfully.<h3>";
    unlink($tmp_name); // Uncomment this line if you want to delete the file after attachment sent.
} else {
    // die("Sorry, but the email could not be sent. Please go back and try again!");
    die();
}
?>