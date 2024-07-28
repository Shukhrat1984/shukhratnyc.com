<!-- ================================================================ -->
<!-- Google search (Menu) starting-->
<?php
$keyword = $_GET['keyword']??null;
if ($keyword){
    header("Location: https://www.google.com/search?q=$keyword");
}
?>
<!-- Google search (Menu) ending-->
<!-- Header (Menu) section starting-->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="background-color: snow; width: 100%; border-radius: 3px; border: 4px solid #BFE2FF;">
    <div class="container-fluid">
        <a class="logo-brand" href="logos.php">
            <img class="logo" style="width: 100px; height: 90px; border-radius: 3px;" src="logo_img/shukhratnyc.com11.jpg" alt="" >
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php" style="font-size: large">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_me.php" style="font-size: large">ABOUT ME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_contact.php" style="font-size: large">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: large">
                        MY HOBBIES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cars.php" style="font-size: large">CARS</a></li>
                        <li><a class="dropdown-item" href="movie.php" style="font-size: large">MOVIES</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="music.php" style="font-size: large">MUSIC</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.php" style="font-size: large; color: gold">BLOGS</a>
                </li>
                <!--------------------------Resume section starting----------------------->
                <li class="nav-item">
                    <a class="nav-link" download="My Resume" href="./img1/resumeio.pdf" style="font-size: large; color: limegreen">RESUME</a>
                </li>
                <!---------------------------Resume section ending------------------------>
            </ul>
            <form class="d-flex" role="search">
                <input name="keyword" class="form-control me-2" type="search" placeholder="Google search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!-- Header (Menu) section ending -->
<!-- ================================================================ -->
<!-- Audio or sound (Menu) section starting-->
<audio id="hover-sound1" src="audio/menu_audio1.mp3"></audio>
<audio id="hover-sound2" src="audio/menu_audio2.mp3"></audio>
<audio id="hover-sound3" src="audio/menu_audio3.mp3"></audio>
<audio id="hover-sound4" src="audio/menu_audio_search.mp3"></audio>
<!-- Audio or sound (Menu) section ending-->
<!-- ================================================================ -->

