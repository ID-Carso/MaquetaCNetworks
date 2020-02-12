<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
</head>

<body>
    <header class="concert-channel-header">
        <div class="hamburguer-menu">
            <div class="text-center sidebar-header">

            </div>
            <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                <a href="home.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
            </div>
            <div class="sidebar-content">
                <a href="claro-canal.php" class="sidebar-link">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Canal Claro</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p active-sidebar-item">Concert
                        Channel</span>
                </div>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <a class="sidebar-link" href="claro-cinema.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro Cinema</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <a class="sidebar-link" href="nuestra-vision.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Nuestra
                            Visión</span>
                    </div>
                </a>
                <a class="sidebar-link" href="claro-sports.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro
                            Sports</span>
                    </div>
                </a>
                <a class="sidebar-link" href="programacion.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Programación</span>
                    </div>
                </a>
                <!--prueba sidebar-->
            </div>
            <button class="invisible-button"></button>
        </div>
        <div class="header">
            <!--Menú para móvil -->
            <?php
            include 'menu-mobile.php';
            ?>
            <!--End menú para móvil-->
            <nav class="menu-tablet">
                <div class="nav-content">
                    <div class="claro-logo">
                        <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />
                        <a href="home.php">
                            <img class="logo" src="./images/home/claro-logo.svg" alt="" />
                        </a>

                    </div>

                    <div class="login">
                        <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
                    </div>
                </div>
            </nav>
            <?php
            include 'menu-desktop.php';
            ?>
            <div class="header-slider">
                <div class="header-slide">
                    <!--<img src="./images/concert-channel/header-image.jpeg" class="rellax" data-rellax="10">-->
                </div>
                <div class="header-slide">
                    <!--<img src="./images/header/glastonbury.jpeg" class="rellax" data-rellax="10">-->
                </div>
                <div class="header-slide"></div>
            </div>
        </div>
    </header>
    <div class="concert-container">
        <section class="today-concert-channel">
            <div>
                <h1 class="today-concert-title">hoy en <span>concert channel</span></h1>
            </div>
            <div class="today-concert-videos-container">
                <div class="section-slider concert-slider today-concert-channel-slider">

                    <!--<div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/01-one-direction.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">ONE DIRECTION</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/02-concert-sessions.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">CONCERT CHANNEL SESSIONS: JUDY BUENDIA</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/03-great-songwriters.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">GREAT SONGWRITERS</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/04-afrobeta.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">AFROBETA</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/05-live-from-abbey-killers.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LIVE ROM ABBEY: THE KILLERS</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/06-rakel.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">CONCERT CHANNEL SESSIONS: RAKEL</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/07-liam-gallagher.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LIAM GALLAGHER</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/08-bang-data.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">BANG DATA</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/09-austin-city.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">AUSTIN CITY</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/10-van-der-graff.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">VAN DER GRAFF</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/11-live-from-abbey.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LIVE FROM ABBEY</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/12-katy-perry.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">KATY PERRY</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/13-megadeth.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">MEGADETH</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/14-a-tiny-audience.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">A TINY AUDIENCE</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/15-yes-1970.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">YES</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/16-on-sessons-uma.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">ON SESSIONS UMA</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/14-a-tiny-audience.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">A TINY AUDIENCEI</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/17-red-hot-chili.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">RED HOT CHILI PEPPERS</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/carrousel/18-a-tiny-natti-nat.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">A TINY NATTI NATASHA</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>-->
                </div>

        </section>
        <section class="next-week-concert">
            <div class="concert-container-header">
                <h1 class="concert-title">próxima semana</h1>
                <h2 class="concert-subtitle">ve un <span>adelanto</span> de la programación</h2>
            </div>
            <div class="week-videos-container">
                <div class="week-videos-mobile">
                    <div class="imperdibles-slider concert-slider">
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                </div>
                                <div class="thumbnail">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">
                                            ¿QUÉ TE HA DADO ESA MUJER?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                </div>
                                <div class="thumbnail">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">
                                            ¿QUÉ TE HA DADO ESA MUJER?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                </div>
                                <div class="thumbnail">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">
                                            ¿QUÉ TE HA DADO ESA MUJER?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                </div>
                                <div class="thumbnail">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">
                                            ¿QUÉ TE HA DADO ESA MUJER?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                </div>
                                <div class="thumbnail">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">
                                            ¿QUÉ TE HA DADO ESA MUJER?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                </div>
                                <div class="thumbnail">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">
                                            ¿QUÉ TE HA DADO ESA MUJER?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Next week videos tablet-->
                <div class="week-videos-tablet">
                    <div class="row poster-pad-b">
                        <div class="col poster-pad-r poster-section">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                    </div>
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">
                                                ¿QUÉ TE HA DADO ESA MUJER?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                    </div>
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">
                                                ¿QUÉ TE HA DADO ESA MUJER?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row poster-pad-t">
                        <div class="col poster-pad-r">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                    </div>
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">
                                                ¿QUÉ TE HA DADO ESA MUJER?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                                    </div>
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">
                                                ¿QUÉ TE HA DADO ESA MUJER?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="concerts">
            <div class="concert-container-header">
                <h1 class="concert-title">conciertos</h1>
                <h2 class="concert-subtitle">ve un <span>adelanto</span> de la programación</h2>
            </div>
            <div class="concerts-videos-container">
                <div class="section-slider concert-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="concert-interviews">
            <div class="concert-container-header">
                <h1 class="concert-title">entrevistas</h1>
                <h2 class="concert-subtitle">ve un <span>adelanto</span> de la programación</h2>
            </div>
            <div class="interviews-videos-container">
                <div class="section-slider concert-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/plus.png" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php
        include 'advertising-section.php'
        ?>
        <div class="">
            <div class="row no-gutters">
                <div class="col-10 mx-auto">
                    <h1 class="footer-title">¡sígue a <br>concert channel!</h1>
                </div>
                <div class="social-media">
                    <div class="col ">
                        <img class="social-icon" src="./images/redes/facebook-icon-green.svg" alt="">
                    </div>
                    <div class="col">
                        <img class="social-icon" src="./images/redes/insta-icon-green.svg" alt="">
                    </div>
                    <div class="col">
                        <img class="social-icon" src="./images/redes/twitter-icon-green.svg" alt="">
                    </div>
                    <div class="col">
                        <img class="social-icon" src="./images/redes/youtube-icon-green.svg" alt="">
                    </div>

                </div>
            </div>
        </div>
        <footer>
            <?php
            include 'footer.php'
            ?>
        </footer>

    </div>


</body>

</html>