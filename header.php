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
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid" id="menu" style="background-color: snow; width: 100%; border-radius: 3px; border: 4px solid #BFE2FF; margin-top: -8px; padding: 5px ">
        <a class="logo-brand" href="logos.php">
            <img class="logo" src="logo_img/shukhratnyc.com8.jpg" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_me.php">ABOUT ME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_contact.php">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MY HOBBIES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cars.php">CARS</a></li>
                        <li><a class="dropdown-item" href="movie.php">MOVIES</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="music.php">MUSIC</a></li>
                    </ul>
                </li>
                <!--------------------------Resume section starting----------------------->
                <li class="nav-item">
                    <a class="nav-link" download="My Resume" href="./img1/resumeio.pdf">RESUME</a>
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

