<style>
    #success-message-content {
        justify-content: space-between;
        flex: 1;
        display: flex;
    }

    #x-btn {
        cursor: pointer;
    }

    #success-message {
        background-color: #dcffbc;
        color: #005d00;
        padding: 10px 15px;
        border-radius: 5px;
        width: 70%;
        margin: auto;
    }
</style>

<div class="form-con">
    <form id="myForm">
        <h2>INQUIRE NOW</h2>
        <p>Will respond as soon as we recieve your message</p>
        <input placeholder="Full Name" type="text" id="fname" name="fullname" required><br>
        <input placeholder="Email" type="email" id="email" name="email" required> <br>
        <textarea placeholder="Message" name="message" id="message" cols="30" rows="10" required></textarea> <br>
        <button type="submit" id="submit">Email Us</button>
        <div id="success-message" style="display:none;">
            <div class="alert alert-success d-flex" id="success-message-content">
                <i>Your message was successfully sent!</i>
                <span id="x-btn">X</span>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        const form = document.getElementById("myForm");
        const successMessage = document.getElementById("success-message");
        const buttonClose = document.querySelector("#x-btn");
        buttonClose.addEventListener("click", function () {
            successMessage.style.display = "none";
        });

        $('#myForm').submit(function (e) {
            e.preventDefault(); // prevent the form from submitting normally

            // get the form data
            var formData = $(this).serialize();
            // send the form data to the PHP script using AJAX
            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: formData,
                success: function (response) {
                    // display a success message to the user
                    // alert('Your message has been sent!');
                    form.reset();
                    successMessage.style.display = "flex";
                },
                error: function (error) {
                    // display an error message to the user
                    alert('An error occurred: ' + error.statusText);
                }
            });
        });
    });
</script>

<?php

$name;
$email;
$message;

if (isset($_POST['fullname'])) {
    $name = $_POST['fullname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['message'])) {
    $message = $_POST['message'];
}


$to = "johnpaulnarvasa6@gmail.com, analyn.pagador.ampo@gmail.com, dandrev.oclarit.barrio@gmail.com, roldhan.alcantara.fulo@gmail.com, adsvanced.media.tech@gmail.com";
$subject = "adsvancedmediatech - Website Inquiry";

$email_body = "<strong>Name:</strong> $name <br>";
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