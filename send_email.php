<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'helloabbydiamond@gmail.com';
    $subject = 'New Contact Form Submission';
    $emailBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $emailBody, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Email failed to send';
    }
}
?>
