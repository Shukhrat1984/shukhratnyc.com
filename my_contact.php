<?php
$source = isset($_GET['source']) ? $_GET['source'] : '';

if ($source === 'index') {
    echo '';
} else {
    echo '';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="logo_img/shukhratnyc.com8.jpg">
    <title>CONTACT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css/my_contact.css">
</head>
<body>
<div class="header">
    <header><?php include "header.php" ?></header>
</div>
<!--My Contact Phone, Email, Address section starting-->
<div class="grid-container">
    <div class="grid-item">
        <i class="fas fa-phone"></i>
        <h2>Phone number</h2>
        <p>+1(929)317-6886</p>
    </div>
    <div class="grid-item">
        <i class="fas fa-envelope"></i>
        <h2>Email address</h2>
        <p>shukhratnasriddinov1984@gmail.com</p>
    </div>
    <div class="grid-item">
        <i class="fas fa-map-marker-alt"></i>
        <h2>Address</h2>
        <p>1865 Burnett Street, Brooklyn, NY, 11229</p>
    </div>
</div>
<!--My Contact Phone, Email, Address section ending-->
<!--Social-icons section starting-->
<ul class="social-icons-3">
    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
    <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
</ul>
<!--Social-icons section ending-->
<!--Sender Contact Form section starting-->
<div class="container">
    <h2>Sender Contact Form</h2>
    <form action="mail.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required placeholder="Your name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Your email@ddress.com">

        <label for="phone">Phone number:</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone number +1(123)456-7890">

        <label for="adress">Address:</label>
        <input type="text" id="adress" name="adress" placeholder="Your address">

        <label for="note">Message:</label>
        <textarea id="note" name="note" rows="4" placeholder="Your message"></textarea>

        <input class="button" type="submit" value="Submit">
    </form>
</div>
<!--Sender Contact Form section ending-->

<script src="js/my_contact.js"></script>
</body>
</html>

