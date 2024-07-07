<?php
$to = 'jontoshmatov@yahoo.com';
$subject = 'SMTP Configuration Test';
$message = 'This is a test email to check SMTP configuration using PHP mail().';
$headers = 'From: your_email@example.com' . "\r\n" .
           'Reply-To: your_email@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Message has been sent successfully';
} else {
    echo 'Message could not be sent';
}
?>

