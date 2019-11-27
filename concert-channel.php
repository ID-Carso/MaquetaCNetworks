<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick-theme.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="slick-master/slick/slick.js"></script>
    <script src="./js/jquery.browser.js"></script>
    <script src="./js/lib/rellax.js"></script>
    <script src="./js/main.js" type="module"></script>
    <title>Document</title>
</head>

<body>
    <header class="concert-channel-header">
        <div class="hamburguer-menu">
            <div class="text-center">
                <a href="home.php"><img src="./images/menu/claro-networks-sidebar.svg" alt="" class="logo-sidebar"></a>
            </div>
            <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                <a href="home.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-item sidebar-border-bottom">
                    <a href="claro-canal.php" class="sidebar-link"><span class="dropdown-p">Canal Claro</span></a>
                </div>
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
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="claro-cinema.php"><span class="dropdown-p">Claro Cinema</span></a>
                </div>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="nuestra-vision.php"><span class="dropdown-p">Nuestra
                            Visión</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="claro-sports.php"><span class="dropdown-p">Claro
                            Sports</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="programacion.php"><span class="dropdown-p">Programación</span></a>
                </div>
                <!--prueba sidebar-->
            </div>
            <button class="invisible-button"></button>
        </div>
        <div class="header">
            <nav class="menu">
                <div class="nav-content">
                    <div class="claro-logo">
                        <img class="menu-responsive" src="./images/home/responsive-menu.svg" alt="" />

                        <a href="home.php"><img class="logo" src="./images/home/claro-logo.png" alt="" /></a>
                    </div>

                    <div class="login">
                        <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                        <a href="index.html" class="login-item"><img class="login-country" alt="" /></a>
                    </div>
                </div>
            </nav>
            <nav class="menu-tablet">
                <div class="nav-content">
                    <div class="claro-logo">
                        <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />
                        <a href="home.php">
                            <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
                        </a>

                    </div>

                    <div class="login">
                        <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                        <a href="index.html" class="login-item"><img src="" alt="" class="login-country" /></a>
                    </div>
                </div>
            </nav>
            <?php
            include 'menu-desktop.php';
            ?>
            <div class="header-slider">
                <div class="header-slide">
                    <img src="./images/concert-channel/header-image.jpeg" class="rellax" data-rellax="10">
                </div>
                <div class="header-slide">
                    <img src="./images/header/glastonbury.jpeg" class="rellax" data-rellax="10">
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
                <div class="section-slider concert-slider">

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
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