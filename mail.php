<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['adress']); // Corrected the field name
    $message = htmlspecialchars($_POST['note']);

    // Email recipient
    $to = 'shukhratnasriddinov1984@gmail.com';
    // Email subject
    $subject = 'Contact Form Submission';
    // Email body content
    $email_body = "
        <html>
        <head>
            <title>Contact Form Submission</title>
        </head>
        <body>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Address:</strong> $address</p>
            <p><strong>Message:</strong> $message</p>
        </body>
        </html>
    ";
    // Headers for the email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        $msg = 'Message has been sent successfully';
	header("Location: thankyou.php?msg=$msg");
	exit;
    } else {
        echo 'Message could not be sent';
	$msg = 'Message could not be sent';
        header("Location: thankyou.php?msg=$msg");
    }
} else {
    echo 'Invalid request method';
}
?>

