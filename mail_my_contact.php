<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $sender_name = $_POST['name'];
    $sender_email = $_POST['email'];
    $sender_phone = $_POST['phone'];
    $sender_address = $_POST['address'];
    $message = $_POST['note'];

    // Укажите вашу электронную почту здесь
    $to_email = "shukhratnasriddinov1984@gmail.com";

    // Формируем тему письма
    $subject = "Message from $sender_name";

    // Формируем текст письма
    $email_body = "Name: $sender_name\n";
    $email_body .= "Email: $sender_email\n";
    $email_body .= "Phone: $sender_phone\n";
    $email_body .= "Address: $sender_address\n\n";
    $email_body .= "Message:\n$message\n";

    // Устанавливаем дополнительные заголовки
    $headers = "From: $sender_email";

    // Отправляем письмо
    if (mail($to_email, $subject, $email_body, $headers)) {
        echo "<p>Thank you for contacting us. Your message has been sent successfully.</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}
?>



