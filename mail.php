<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fullname = 'Jessica Smith';
    $email = 'info@myitedu.us';
    $message = 'Howdy Partner! This is a test email sent from a contact form on my website.';

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.shukhratnyc.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'info@shukhratnyc.com'; // SMTP username
        $mail->Password = 'Shukhrat!2024'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 465;

        //Recipients
        $mail->setFrom('jon@myitedu.us', 'Jon Toshmatov');
        $mail->addAddress('shukhratnasriddinov1984@gmail.com', 'Shukhrat Nasriddinov'); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = "Name: $fullname<br>Email: $email<br>Message: $message";
        $mail->AltBody = "Name: $fullname\nEmail: $email\nMessage: $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


?>