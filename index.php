<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="logo_img/shukhratnyc.com8.jpg">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<!-- Header link starting-->
<?php include "navbar.php" ?>
<!-- Header link ending -->

<div class="container-fluid">
    <!--Bubble-container1 section starting-->
    <div class="bubble-container1">
        <div class="bubbles" data-bubble-hue="220" data-bubble-count="100">
            <!-- data-bubble-hue - Цвет в градусах HSL (таблица цветов).-->
            <!-- data-bubble-count - Количество пузырей.-->
            <div class="bubble-content1">
                <h1>Hello, welcome to my website.<br>I Am Shukhrat, Web Developer.</h1>
                <p>I'm ready for innovations and challenging solutions.<br>
                    My advantage lies in the unique blend of creative thinking and technical craftsmanship.<br>
                    I create functional and stylish websites that help clients achieve their goals.
                </p>
            </div>
        </div>
    </div>
    <!--Bubble-container1 section ending-->
    <!--Vertical accordion for images section starting-->
    <div class="panel-container">
        <div class="panel active">
            <img class="img_shukhrat1" src="img1/shukhrat_manhattan.jpg" alt="Image 1">
            <div>I'm in Manhattan</div>
        </div>
        <div class="panel">
            <img class="img_shukhrat1" src="img1/shukhrat11.jpg" alt="Image 2">
            <div>I'm driving</div>
        </div>
        <div class="panel">
            <img class="img_shukhrat1" src="img1/shukhrat14.jpg" alt="Image 3">
            <div>I'm in Brooklyn</div>
        </div>
        <div class="panel">
            <img class="img_shukhrat1" src="img1/shukhrat13.jpg" alt="Image 4">
            <div>We are going to the holiday</div>
        </div>
        <div class="panel">
            <img class="img_shukhrat1" src="img1/shukhrat10.jpg" alt="Image 5">
            <div>I'm coding</div>
        </div>
    </div>
    <!--Vertical accordion for images section ending-->
    <!--Big text SHUKHRAT section starting-->
    <svg class="a-stroke" viewBox="0 0 500 70">
        <symbol id="s-text">
            <text x="50%" y="90%">SHUKHRAT</text>
        </symbol>
        <use class="text" xlink:href="#s-text"></use>
        <use class="text" xlink:href="#s-text"></use>
        <use class="text" xlink:href="#s-text"></use>
        <use class="text" xlink:href="#s-text"></use>
        <use class="text" xlink:href="#s-text"></use>
    </svg>
    <!--Big text SHUKHRAT section ending-->
    <!--Four images section starting-->
    <section class="hero-section">
        <div class="card-grid">
            <a class="card" href="#">
                <div class="card-background" style="background-image: url(./img1/shukhrat1.jpg);"></div>
                <div class="card-content">
                    <h3 class="card-heading">Voyage</h3>
                    <p class="card-category">$15.860.63</p>
                </div>
            </a>

            <a class="card" href="#">
                <div class="card-background" style="background-image: url(./img1/shukhrat2.jpg);"></div>
                <div class="card-content">
                    <h3 class="card-heading">Meeting</h3>
                    <p class="card-category">$10.050</p>
                </div>
            </a>

            <a class="card" href="#">
                <div class="card-background" style="background-image: url(./img1/shukhrat3.jpg);"></div>
                <div class="card-content">
                    <h3 class="card-heading">Weekend</h3>
                    <p class="card-category">$950.95</p>
                </div>
            </a>

            <a class="card" href="#">
                <!-- <div class="card-background" style="background-image: url(img1.png);"></div> -->
                <div class="card-background" style="background-image: url(./img1/shukhrat4.jpg);"></div>
                <div class="card-content">
                    <h3 class="card-heading">Vacation</h3>
                    <p class="card-category">$3550.48</p>
                </div>
            </a>
        </div>
    </section>
    <!--Four images section ending-->
    <!-- Container style for grid with percentages section starting-->
    <div class="container">
        <div class="wpo-about-funfact">
            <div class="grid">
                <div class="grid-inner-javascript">
                    <h3><span class="odometer" data-count="90">00</span>%</h3>
                    <p>JavaScript</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-sql">
                    <h3><span class="odometer" data-count="88">00</span>%</h3>
                    <p>SQL</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-css">
                    <h3><span class="odometer" data-count="92">00</span>%</h3>
                    <p>CSS</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-html">
                    <h3><span class="odometer" data-count="93">00</span>%</h3>
                    <p>HTML</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-php">
                    <h3><span class="odometer" data-count="90">00</span>%</h3>
                    <p>PHP</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-laravel">
                    <h3><span class="odometer" data-count="85">00</span>%</h3>
                    <p>LARAVEL</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-wordpress">
                    <h3><span class="odometer" data-count="92">00</span>%</h3>
                    <p>WordPress</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-bootstrap">
                    <h3><span class="odometer" data-count="91">00</span>%</h3>
                    <p>Bootstrap</p>
                </div>
            </div>
            <div class="grid">
                <div class="grid-inner-jquery">
                    <h3><span class="odometer" data-count="89">00</span>%</h3>
                    <p>JQuery</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Container style for grid with percentages section ending-->
    <!--Bubble-container2 section starting-->
    <div class="bubble-container2">
        <div id="bubble2" data-bubble-hue="290" data-bubble-count="100">
            <!-- data-bubble-hue - Цвет в градусах HSL (таблица цветов).-->
            <!-- data-bubble-count - Количество пузырей.-->
            <div class="bubble-content2">
                <h1>My Advantage</h1>
                <p>Experienced Web Developer adept in all stages of advanced web development.<br>
                    Knowledgeable in user interface, testing, and debugging processes.<br>
                    Bringing forth expertise in design, installation, testing and maintenance of
                    web systems.<br>Equipped with a diverse and promising skill-set.<br>
                    Proficient in an assortment of technologies, including HTML, CSS,
                    JavaScript, JQuery, PHP, Linux and SQL Server.<br>
                    Able to effectively self-manage during independent projects, as well
                    as collaborate in a team setting.</p>
            </div>
        </div>
    </div>
    <!--Bubble-container2 section ending-->
    <!--"container-center" Globe World, Preloader-Ring section starting-->
    <div class="container-center">
        <!--Globe World container-->
        <div class="globe-container">
            <div class="globe">
                <div class="globe-sphere"></div>
                <div class="globe-outer-shadow"></div>
                <div class="globe-worldmap">
                    <div class="globe-worldmap-back"></div>
                    <div class="globe-worldmap-front"></div>
                </div>
                <div class="globe-inner-shadow"></div>
            </div>
        </div>
        <!--Preloader-Ring container-->
        <div class="preloader">
            <div class="preloader-ring">
                <div class="preloader-sector">S</div>
                <div class="preloader-sector">H</div>
                <div class="preloader-sector">U</div>
                <div class="preloader-sector">K</div>
                <div class="preloader-sector">H</div>
                <div class="preloader-sector">R</div>
                <div class="preloader-sector">A</div>
                <div class="preloader-sector">T</div>
                <div class="preloader-sector">N</div>
                <div class="preloader-sector">Y</div>
                <div class="preloader-sector">C</div>
                <div class="preloader-sector">.</div>
                <div class="preloader-sector">C</div>
                <div class="preloader-sector">O</div>
                <div class="preloader-sector">M</div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
            </div>
            <div class="preloader-ring">
                <div class="preloader-sector"></div>
                <div class="preloader-sector">P</div>
                <div class="preloader-sector">R</div>
                <div class="preloader-sector">O</div>
                <div class="preloader-sector">G</div>
                <div class="preloader-sector">R</div>
                <div class="preloader-sector">A</div>
                <div class="preloader-sector">M</div>
                <div class="preloader-sector">M</div>
                <div class="preloader-sector">E</div>
                <div class="preloader-sector">R</div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector">W</div>
                <div class="preloader-sector">E</div>
                <div class="preloader-sector">B</div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector">D</div>
                <div class="preloader-sector">E</div>
                <div class="preloader-sector">V</div>
                <div class="preloader-sector">E</div>
                <div class="preloader-sector">L</div>
                <div class="preloader-sector">O</div>
                <div class="preloader-sector">P</div>
                <div class="preloader-sector">E</div>
                <div class="preloader-sector">R</div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
                <div class="preloader-sector"></div>
            </div>
        </div>
    </div>
    <!--"container-center" Globe World, Preloader-Ring section ending-->
    <!--About social media section starting-->
    <div class="contact-container">
        <div class="contact">
            <div>Write me and subscribe</div>
            <span class="close-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
            <ul>
                <li>
                    <a href="https://www.linkedin.com/in/shukhratnyc/" rel="nofollow" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="#" rel="nofollow" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="tel:+19293176886">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
                <li>
                    <a href="tel:+19293176886">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <button class="contact-btn">CONTACT</button>
    <!--About social media section ending-->

</div>
<script src="js/index.js"></script>
</body>
</html>