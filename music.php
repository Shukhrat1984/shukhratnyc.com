<?php
// Получение значения параметра source
$source = isset($_GET['source']) ? $_GET['source'] : '';

// Использование значения source
if ($source === 'index') {
    // Ваш код для связи с index.php
    echo '';
} else {
    // Если параметр source не определен или имеет другое значение
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
    <title>MUSIC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/music.css">
</head>
<body>
<!-- Header link starting-->
<?php include "navbar.php" ?>
<!-- Header link ending -->
<div class="container-fluid">
    <!--I LIKE THESE MOVIES text section starting-->
    <svg viewBox="0 0 520 50" style="margin-top: 100px; margin-left: 50px">
        <path id="path">
            <animate attributeName="d" from="m90,32 h0" to="m100,32 h1100" dur="10s" begin="0s" repeatCount="indefinite"/>
        </path>
        <text font-size="25" font-weight="bold" font-family="Tahoma" fill="#337AB7">
            <textPath xlink:href="#path">I LISTEN THESE SONGS</textPath>
        </text>
    </svg>
    <!--I LIKE THESE MOVIES text section ending-->
    <!--Carousel-3d section starting-->
    <div class="carousel-3d" data-gap="30">
        <figure>
            <div style="text-align: center"><a href="#any"><img src="./music_img/adele.jpg" alt=""/></a></div>
            <div style="text-align: center"><a href="#any"><img src="./music_img/eminem.webp" alt=""/></a></div>
            <div style="text-align: center"><a href="#any"><img src="./music_img/lana_del_rey.jpg" alt=""/></a></div>
            <div style="text-align: center"><a href="#any"><img src="./music_img/backstreet_boys.jpg" alt=""/></a></div>
            <div style="text-align: center"><a href="#any"><img src="./music_img/spice_girls.jpg" alt=""/></a></div>
            <div style="text-align: center"><a href="#any"><img src="./music_img/hans_zimmer.jpg" alt=""/></a></div>
            <div style="text-align: center"><a href="#any"><img src="./music_img/linkin_park.jpg" alt=""/></a></div>
        </figure>
        <nav>
            <button class="nav prev">Back</button>
            <button class="nav next">Next</button>
        </nav>
    </div>
    <!--Carousel-3d section ending-->
    <!--Hexagonal photos section starting-->
    <div class="hexagon-photo">
        <div class="hexagon hex-big"></div>
        <div class="hexagon hex-big"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon hex-small"></div>
        <div class="hexagon hex-small"></div>
        <div class="hexagon hex-small"></div>
        <div class="hexagon hex-small"></div>
    </div>
    <!--Hexagonal photos section ending-->
    <!--Pulsing Flower section starting-->
    <div class="flower">
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
        <div class="x"></div>
    </div>
    <!--Pulsing Flower section ending-->
</div>
<script src="js/music.js"></script>
</body>
</html>