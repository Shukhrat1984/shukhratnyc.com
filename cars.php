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
    <title>CARS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.4/p5.min.js" integrity="sha512-d6sc8kbZEtA2LwB9m/ck0FhvyUwVfdmvTeyJRprmj7Wg9wRFtHDIpr6qk4g/y3Ix3O9I6KHIv6SGu9f7RaP1Gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/cars.css">
</head>
<body>
<!-- Header link starting-->
<?php include "navbar.php" ?>
<!-- Header link ending -->
<div class="container-fluid">
    <!--I LOVE CARS text section starting-->
    <div class="block-figure-2">
        <div class="figure-1"></div>
        <div class="figure-2"></div>
        <div class="figure-txt">
            <h3>I Love Cars</h3>
            <p>Since childhood, I have been fascinated by cars.
                This interest has turned into a real hobby that brings me immense joy.
                I love exploring new models, reading about the latest technologies in the automotive industry,
                and learning how different systems and mechanisms work.
                This hobby not only allows me to relax and enjoy myself but also helps me develop technical
                problem-solving skills and critical thinking. Cars are not just a means of transportation for me;
                they are a source of inspiration and continuous learning.</p>
        </div>
    </div>
    <!--I LOVE CARS text section ending-->
    <!--Car's section starting-->
    <div class="tabs3d">
        <div class="tabs3d-control"></div>
        <div class="tabs3d-stage">
            <div class="spinner spinner-left">
                <div class="spinner-face" data-bg="#2b4356" data-menu="AUDI">
                    <!--Атрибут data-bg - цвет фона вкладки и ее пункта меню.-->
                    <!--Атрибут data-menu - заголовок пункта меню-->
                    <!--Предзагрузка картинок нужна для того, чтобы при смене вкладок,
                    следующая фотография поворачивалась, а не появлялась после того,
                    как будет загружена.-->
                    <div class="content">
                        <div class="content-left" style="background-image: url('./cars/audi-skysphere.jpg');">
                            <!--background-image: url('../svg/inner_shadow.svg');
                             Относительный путь к файлу inner_shadow.svg -->
                            <div class="content-title">
                                <div>AUDI</div>
                                <p>Model: Skysphere</p>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="content-main">
                                <p>Highlights from the World Premiere of the Audi skysphere concept.
                                    The Audi skysphere concept is a fascinating symbiosis of design
                                    and experience, and it was shaped by virtual as well as physical
                                    interaction between the designers and developers in Ingolstadt
                                    and the Audi Design Loft in Malibu, California.
                                    Now, the "Celebration of Progress," brings both worlds together.
                                    Experience how Hildegard Wortmann, Member of the Board of Management,
                                    Henrik Wenders, Head of Brand AUDI AG and Gael Buzyn, Senior Director
                                    of the Audi Design Loft in Malibu, presented the first of three
                                    new concept cars of the brand.</p>
                                <p class="content-autor">Shukhrat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spinner-face" data-bg="brown" data-menu="LEXUS">
                    <div class="content">
                        <div class="content-left" style="background-image: url('./cars/lexus.jpg');">
                            <div class="content-title">
                                <div>LEXUS</div>
                                <p>Model: LC 500</p>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="content-main">
                                <p>Experience the most personal LC of all, the Bespoke Build. While every LC model is
                                    generously equipped, these striking vehicles offer the greatest luxury of all:
                                    choice. Make your coupe or your convertible your own, outfitting it with the
                                    individual features you desire—like 21-inch forged alloy wheels with Matte Black
                                    finish, Dark Smoked Chrome–finished exterior accents, bold interior options and
                                    more. Your LC will be custom-made to your specialized selections with exclusive
                                    Bespoke badging, plus a Certificate of Authenticity that leaves no doubt: Personal
                                    luxury has never been so personal.</p>
                                <p class="content-autor">Shukhrat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spinner-face" data-bg="#353f60" data-menu="Mercedes-Benz">
                    <div class="content">
                        <div class="content-left" style="background-image: url('./cars/mercedes-gle63.jpg');">
                            <div class="content-title">
                                <div>Mercedes-Benz</div>
                                <p>Model: GLE-Class Coupe</p>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="content-main">
                                <p>The GLE 63 S AMG Coupe is for the buyer who wants more of everything from their
                                    everyday drive. It's lush with power, looks like it wants to steal your lunch money,
                                    and has a wonderfully luxurious interior. That said, despite being both fast and
                                    technically capable, the GLE experience doesn't quite come together as cohesively
                                    as we'd expect for such a lofty as-tested price. We expected a more refined driving
                                    experience than the one we got and were left waiting for the AMG charm that never
                                    materialized. If you absolutely must have the quickest, most expensive version
                                    of the GLE then this AMG is the only one that will fit that bill.
                                    But if you can stomach not having everything not turned up to 11, there are
                                    plenty of more well-rounded Mercedes SUVs we'd sooner recommend.</p>
                                <p class="content-autor">Shukhrat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spinner-face" data-bg="red" data-menu="BMW">
                    <div class="content">
                        <div class="content-left" style="background-image: url('./cars/bmw8.jpg');">
                            <div class="content-title">
                                <div>BMW</div>
                                <p>Model: 8-Series Gran Coupe</p>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="content-main">
                                <p>BMW didn't invent the four-door coupe body style, but its 2024 8-series Gran Coupe
                                    is one of the best-looking examples we can think of. Its flowing lines and dramatic
                                    fastback roofline cut an elegant silhouette whether it's cruising or parked.
                                    Both are quick, dispatching the big sedan to 60 mph in 4.7 and 3.0 seconds,
                                    respectively. The downside of the 8-series' dramatic exterior styling, though, is a
                                    rear seat that's tight for tall passengers—but that's true of its rivals as well.</p>
                                <p class="content-autor">Shukhrat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spinner-face" data-bg="orange" data-menu="LAMBORGHINI">
                    <div class="content">
                        <div class="content-left" style="background-image: url('./cars/lamborghini-Urus.jpg');">
                            <div class="content-title">
                                <div>lamborghini</div>
                                <p>Model: Urus</p>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="content-main">
                                <p>The soul of a super sports car and the functionality of an SUV: Lamborghini Urus
                                    is the first Super Sport Utility Vehicle in the world. With extreme proportions,
                                    breathtaking design, extraordinary driving dynamics and heart-pounding performance,
                                    Urus represents freedom in its quintessential state.</p>
                                <p class="content-autor">Shukhrat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spinner-face" data-bg="grey" data-menu="AUDI A7">
                    <div class="content">
                        <div class="content-left" style="background-image: url('./cars/audi-a7.jpg');">
                            <div class="content-title">
                                <div>AUDI</div>
                                <p>Model: A7 Quattro</p>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="content-main">
                                <p>The Audi A7's sleek elegance makes this sedan-like coupe-ish hatchback a looker.
                                    Behind the big hexagonal grille sits a turbocharged 335-hp V-6 bolted to a
                                    dual-clutch automatic that sends power to Audi's Quattro all-wheel-drive system.
                                    With plenty of low-end grunt, the A7 has enough oomph to easily hurry;
                                    its rewardingly crisp handling is complemented by a reasonably smooth ride too.
                                    Inside, the A7 boasts impeccable build quality, and the trim that unifies its
                                    leather surfaces and digital interfaces is an elegant mix of materials.</p>
                                <p class="content-autor">Shukhrat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spinner-face" data-bg="#2b4395" data-menu="ASTON MARTIN">
                    <div class="content">
                        <div class="content-left" style="background-image: url('./cars/aston-martin-dbs.jpg');">
                            <div class="content-title">
                                <div>ASTON MARTIN</div>
                                <p>Model: DBS V12</p>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="content-main">
                                <p>DBS entered production in 2007 after a global reveal event at the Pebble Beach
                                    Concours d'Elegance. As the new flagship for the Aston Martin model range,
                                    DBS was designed to represent a synthesis of raw power, race-bred technology
                                    and design excellence. A SPECIAL OWNER Before entering production DBS appeared
                                    as James Bond's car of choice in 'Casino Royale', Daniel Craig's debut in the role
                                    released in 2006. The car featured in one of the film's most memorable moments,
                                    rolling seven times and setting a new world record. DBS also appeared in the
                                    opening sequence of 'Quantum of Solace' the fallow up film released in 2008.</p>
                                <p class="content-autor">Shukhrat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Пред загрузка картинок  -->
    <div style="height: 0; width: 0; overflow: hidden">
        <img src="image-1.jpg">
        <img src="image-n.jpg">
    </div>
    <!--Car's section ending-->
    <!--THE SOUNDS OF CARS text section starting-->
    <div class="block-figure-4">
        <div class="triangle-1"></div>
        <div class="triangle-2"></div>
        <div class="triangle-txt">
            <h3>The Sounds of Cars</h3>
            <p>One of the most fascinating aspects of my car hobby is the sounds they make.
                Each car has a unique sound from its engine, exhaust system, and other mechanical parts.
                These sounds are like music to my ears.</p>
        </div>
    </div>
    <!--THE SOUNDS OF CARS text section ending-->
<script src="js/cars.js"></script>
</body>
</html>