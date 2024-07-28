<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="logo_img/shukhratnyc.com8.jpg">
    <title>BLOGS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css/blogs.css">
</head>
<body>
<!--ANIMATED TRANSITION BETWEEN PAGES section starting-->
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
<!--ANIMATED TRANSITION BETWEEN PAGES section starting-->
<!--Menu section starting-->
    <div class="container-header">
        <div class="container-menu">
            <ul class="navmenu_2">
                <li class="slide1"></li>
                <li class="slide2"></li>
                <li><a class="active" href="blogs.php">BLOGS</a></li>
                <li><a href="it.php">IT</a></li>
                <li><a href="auto_news.php">AUTO NEWS</a></li>
                <li><a href="fashion.php">FASHION</a></li>
                <li><a href="travel.php">TRAVEL</a></li>
                <li><a href="index.php">HOME</a></li>
            </ul>
        </div>
    </div>
<!--Menu section ending-->
<!--Blogs text section starting-->
    <div id="svg-container" style="margin-top: 310px; margin-left: 300px">
        <svg viewBox="0 0 520 50">
            <path id="path">
                <animate attributeName="d" from="m0,32 h0" to="m100,32 h1100" dur="10s" begin="0s" repeatCount="indefinite"/>
            </path>
            <text font-size="25" font-weight="bold" font-family="Tahoma" fill="black">
                <textPath xlink:href="#path">HERE I PRESENT MY BLOGS</textPath>
            </text>
        </svg>
    </div>
<!--Blogs text section ending-->
<!--Block menu with background change section starting-->
    <div class="container-menu">
        <ul class="block-menu">
            <li>
                <a href="it.php">
                    <div class="name">Information Technologies (Hi-Tech)</div>
                    <div class="arrow">
                        <svg viewBox="0 0 60 60"><polyline points="29.8,2.6 57.3,30 29.8,57.5 "/></svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="auto_news.php">
                    <div class="name">Auto News (World Car's)</div>
                    <div class="arrow">
                        <svg viewBox="0 0 60 60"><polyline points="29.8,2.6 57.3,30 29.8,57.5 "/></svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="fashion.php">
                    <div class="name">Fashion (Style)</div>
                    <div class="arrow">
                        <svg viewBox="0 0 60 60"><polyline points="29.8,2.6 57.3,30 29.8,57.5 "/></svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="travel.php">
                    <div class="name">Travel (The Journey)</div>
                    <div class="arrow">
                        <svg viewBox="0 0 60 60"><polyline points="29.8,2.6 57.3,30 29.8,57.5 "/></svg>
                    </div>
                </a>
            </li>
            <li>
                <a href="#link">
                    <div class="name">Енот</div>
                    <div class="arrow">
                        <svg viewBox="0 0 60 60"><polyline points="29.8,2.6 57.3,30 29.8,57.5 "/></svg>
                    </div>
                </a>
            </li>
            <div class="block-menu-wall"></div>
        </ul>
    </div>
<!--Block menu with background change section ending-->




    <div class="container-footer">
        <p style="color: black; text-align: center">shukhratnyc.com</p>
    </div>

<script src="js/blogs.js"></script>
</body>
</html>
