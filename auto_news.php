<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="logo_img/shukhratnyc.com8.jpg">
    <title>AUTO NEWS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
    <link rel="stylesheet" href="css/auto_news.css">
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
<div id="svg-container" style="margin-top: 100px; margin-left: 300px">
    <svg viewBox="0 0 520 50">
        <path id="path">
            <animate attributeName="d" from="m0,32 h0" to="m100,32 h1100" dur="10s" begin="0s" repeatCount="indefinite"/>
        </path>
        <text font-size="25" font-weight="bold" font-family="Tahoma" fill="black">
            <textPath xlink:href="#path">Here is news about car's</textPath>
        </text>
    </svg>
</div>
<!--Blogs text section ending-->
<!--You-tube blogs section starting-->
<div class="youtube-container">
    <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="dip_8dmrcaU"></div>
    <div class="youtube-list">
        <div class="change-youtube active" data-youtube="dip_8dmrcaU">
            <img src="https://img.youtube.com/vi/dip_8dmrcaU/mqdefault.jpg" />
            <span>TOP 10 CRAZIEST CONCEPT CARS 2020</span>
        </div>
        <div class="change-youtube" data-youtube="iXAOp2VJZLc">
            <img src="https://img.youtube.com/vi/iXAOp2VJZLc/mqdefault.jpg" />
            <span>New Lincoln Model L100 Concept has a Cinema Floor</span>
        </div>
        <div class="change-youtube" data-youtube="GgriNm5S2WE">
            <img src="https://img.youtube.com/vi/GgriNm5S2WE/mqdefault.jpg" />
            <span>FUTURE IN THE MAKING. Rolls Royce from the Year 2035!</span>
        </div>
    </div>
    <div class="youtube-list">
        <div class="change-youtube" data-youtube="6tUWYXe9qbY">
            <img src="https://img.youtube.com/vi/6tUWYXe9qbY/mqdefault.jpg" />
            <span>FUTURE IN THE MAKING. BMW Vision Next 100</span>
        </div>
        <div class="change-youtube" data-youtube="1SaqSIvon_U">
            <img src="https://img.youtube.com/vi/1SaqSIvon_U/mqdefault.jpg" />
            <span>The Audi Car of the Future - Audi Skysphere</span>
        </div>
        <div class="change-youtube" data-youtube="0OjZaI-aANE">
            <img src="https://img.youtube.com/vi/0OjZaI-aANE/mqdefault.jpg" />
            <span>I Rode In The Driverless Robotaxi Zoox</span>
        </div>
    </div>
</div>
<!--You-tube blogs section ending-->






<!--Blogs section starting-->
    <div class="row row-cols-1 row-cols-md-2 g-12" style="margin-top: 350px; ">
        <div class="col">
            <div class="card">
                <img src="blog_img/img-blog1.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Front-end v back-end development: What you need to know</h5>
                    <p class="card-text">Confused by what front-end and back-end developers do? Here is a guide that tells you the skills you need for both.</p>
                    <a href="https://www.siliconrepublic.com/advice/front-end-vs-back-end-development-skills" class="btn btn-outline-secondary">Details</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="blog_img/img-blog2.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Have U got X and I mixed up? The difference between UX and UI</h5>
                    <p class="card-text">Developers and designers shouldn’t get caught up in how a job title encompasses UX or UI, says Jasaon Kelly of Hays. Rather, they should look to the job specification and match their skills to the software requirements.</p>
                    <a href="https://www.siliconrepublic.com/advice/difference-ux-ui" class="btn btn-outline-secondary">Details</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="blog_img/img-blog3.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Amethyst Care: AI assistant to help older people live at home for longer</h5>
                    <p class="card-text">Based in the SFI Adapt research centre at Trinity, Amethyst Care is led by Rebecca McManus and Prof Vinny Wade.</p>
                    <a href="https://www.siliconrepublic.com/start-ups/amethyst-care-ai-voice-assistant-healthcare-rebecca-mcmanus-vinny-wade-adapt" class="btn btn-outline-secondary">Details</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="blog_img/img-blog4.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">8 great alternatives to ChatGPT for workers</h5>
                    <p class="card-text">ChatGPT is good, but there are a lot of other similar tools workers can use that perhaps aren’t as well known as OpenAI’s beast. Here are just a few.</p>
                    <a href="https://www.siliconrepublic.com/advice/alternatives-chatgpt-for-workers" class="btn btn-outline-secondary">Details</a>
                </div>
            </div>
        </div>
    </div>
<!--Blogs section ending-->

    <div class="container-footer">
        <p style="color: black; text-align: center">shukhratnyc.com</p>
    </div>

<script src="js/auto_news.js"></script>
<script src="js/auto_news2.js"></script>
</body>
</html>
