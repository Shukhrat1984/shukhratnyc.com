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
    <title>MOVIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/movie.css">
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
            <textPath xlink:href="#path">I LIKE THESE MOVIES</textPath>
        </text>
    </svg>
    <!--I LIKE THESE MOVIES text section ending-->
    <!--Movies img & card information section starting-->
    <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top: -10px">
        <div class="col">
            <div class="card">
                <img src="./movies_img/mizantrop.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">To Catch a Killer</h5>
                    <p class="card-text">To Catch a Killer is a 2023 American crime thriller film directed by Damián Szifron and written by Szifron and Jonathan Wakeham. It stars Shailene Woodley, Ben Mendelsohn, Jovan Adepo and Ralph Ineson. In the film, a talented but troubled young Baltimore cop is recruited by the FBI to help profile and track down a murderer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./movies_img/edge_of_tomorrow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Edge of Tomorrow</h5>
                    <p class="card-text">Edge of Tomorrow is a 2014 American science fiction action film directed by Doug Liman and written by Christopher McQuarrie and the writing team of Jez and John-Henry Butterworth, loosely based on the Japanese novel All You Need Is Kill by Hiroshi Sakurazaka. Starring Tom Cruise and Emily Blunt, the film takes place in a future where most of Europe is occupied by an alien race. Major William Cage (Cruise), a public relations officer with limited combat experience, is forced by his superiors to join a landing operation against the aliens, only to find himself experiencing a time loop as he tries to find a way to defeat the invaders.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./movies_img/stalk.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Stalk</h5>
                    <p class="card-text">“Stalk,” Simon Bouisson’s timely French show tackling cyber spying and bullying, has lured a flurry of top TV channels across the world.
                        After being humiliated by other fellow students, computer genius Lucas alias Lux decides to hack their phones and computers and learn all their secrets in order to carry out his plan of revenge.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./movies_img/gangs_of_london.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gangs of London</h5>
                    <p class="card-text">Gangs of London is a British action thriller crime television series created by Gareth Evans and Matt Flannery. Based on the 2006 video game, serving as the fourth installment in The Getaway franchise created by Brendan McNamara and Katie Ellwood, Gangs of London follows the struggles between rival gangs and other criminal organisations in present-day London.
                        The series has received generally positive reviews from critics, who praised its performances, narrative and action sequences, though some criticism was aimed at its excessive violence.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./movies_img/the_god_father.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Godfather</h5>
                    <p class="card-text">The Godfather is a 1972 American epic gangster film directed by Francis Ford Coppola, who co-wrote the screenplay with Mario Puzo, based on Puzo's best-selling 1969 novel of the same title. The film stars an ensemble cast including Marlon Brando, Al Pacino, James Caan, Richard Castellano, Robert Duvall, Sterling Hayden, John Marley, Richard Conte, and Diane Keaton. It is the first installment in The Godfather trilogy, chronicling the Corleone family under patriarch Vito Corleone (Brando) from 1945 to 1955. It focuses on the transformation of his youngest son, Michael Corleone (Pacino), from reluctant family outsider to ruthless mafia boss.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./movies_img/great_gatsby2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Great Gatsby</h5>
                    <p class="card-text">The Great Gatsby is a 2013 American historical romantic drama film based on the 1925 novel of the same name by F. Scott Fitzgerald. The film was co-written and directed by Baz Luhrmann and stars an ensemble cast consisting of Leonardo DiCaprio, Tobey Maguire, Carey Mulligan, Joel Edgerton, Isla Fisher, Jason Clarke, and Elizabeth Debicki. Filming took place from September to December 2011 in Australia, with a $105 million net production budget. The film follows the life and times of millionaire Jay Gatsby (DiCaprio) and his neighbor Nick Carraway (Maguire) who recounts his interactions with Gatsby amid the riotous parties of the Jazz Age on Long Island in New York.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./movies_img/jamesbond007.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">James Bond 007</h5>
                    <p class="card-text">Daniel Wroughton Craig CMG is an English actor. He gained international fame by playing the fictional secret agent James Bond for five installments in the film series, from Casino Royale up to No Time to Die.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./movies_img/john-wick.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">John Wick</h5>
                    <p class="card-text">John Wick is an American neo-noir action film series and media franchise created by Derek Kolstad. It centers around the titular character portrayed by actor Keanu Reeves. Wick is a legendary hitman who is reluctantly drawn back into the criminal underworld after retiring.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Movies img & card information section ending-->
    <!--Cube preload section starting-->
    <div class="preloader-4">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--Cube preload section ending-->
</div>
<script src="js/movie.js"></script>
</body>
</html>