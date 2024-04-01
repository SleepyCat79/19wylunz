<?php
if($_POST) {
    $email = "hoavochi1@gmail.com";
    $message = $_POST['user-message'];

    // Enter your email address
    $toEmail = "hoavochi1@gmail.com";
    $mailHeaders = "From: " . $email;
    $message = "New message received: " . $message;

    if(mail($toEmail, "Message", $message, $mailHeaders)) {
        print "<p class='success'>Message sent successfully.</p>";
    } else {
        print "<p class='Error'>Problem in sending message.</p>";
    }
}
?>