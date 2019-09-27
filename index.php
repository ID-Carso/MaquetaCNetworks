<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick-theme.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="slick-master/slick/slick.js"></script>
    <script src="./js/jquery.browser.js"></script>
    <script src="./js/main.js"></script>
</head>

<body>
    <div class="circle-video">
        <video preload="yes" playsinline autoplay muted loop class="home-video">
            <source src="./video/demo.mp4" type="video/mp4" />
        </video>
    </div>
    <header>
        <div class="hamburguer-menu">
            <div class="text-center">
                <img src="./images/menu/claro-networks-sidebar.svg" alt="" class="logo-sidebar">
            </div>
            <div class="sidebar-content">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <a href="claro-canal.php" class="sidebar-link"><span class="dropdown-p">Canal Claro</span></a>
                </div>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="concert-channel.php"><span class="dropdown-p">Concert
                            Channel</span></a>
                </div>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="#"><span class="dropdown-p">Claro Cinema</span></a>
                </div>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="#"><span class="dropdown-p">Nuestra Visión</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="#"><span class="dropdown-p">Claro Sports</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="#"><span class="dropdown-p">Programación</span></a>
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

                        <img class="logo" src="./images/home/claro-logo.png" alt="" />
                    </div>

                    <div class="login">
                        <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                        <a href="paises.html" class="login-item"><img src="./images/home/pais.svg" alt="" /></a>
                    </div>
                </div>
            </nav>
            <nav class="menu-tablet">
                <div class="nav-content">
                    <div class="claro-logo">
                        <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                        <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
                    </div>

                    <div class="login">
                        <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                        <a href="paises.html" class="login-item"><img src="./images/home/pais.svg" alt="" /></a>
                    </div>
                </div>
            </nav>
            <div class="claro-navbar">
                <div>
                    <a href="claro-canal.php" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Canal Claro</p>
                    </a>
                </div>
                <div>
                    <a href="#" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Concert Channel</p>
                    </a>
                </div>
                <div>
                    <a href="#" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Claro Cinema</p>
                    </a>
                </div>
                <div>
                    <a href="#" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Nuestra Visión</p>
                    </a>
                </div>
                <div>
                    <a href="#" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Claro Sports</p>
                    </a>
                </div>
                <div>
                    <a href="#" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Programación</p>
                    </a>
                </div>
            </div>
            <div class="header-details header-detail-margin col-md-6">
                <h1 class="header-h1">
                    Re <span class="header-span">Descubre</span>
                </h1>
                <h1 class="header-h1"><span class="header-span">Claro </span>tv</h1>
            </div>
        </div>
    </header>
    <section class="o-tv-section margin-ahora-tv">
        <h2 class="title-tv">AHORA <span class="header-span">EN TV </span><span class="header-point">•</span></h2>
    </section>
    <section class="margin-bottom-slider">
        <div class="o-tv-section">
            <div class="row no-gutters">
                <ul class="tv-list col-md-11">
                    <div class="col-md text-center no-gap border-right">
                        <li rel="claro-canal" class="active-navItem nav-li">
                            <img class="nav-image" src="./images/home/tv-1.svg" alt="" />
                        </li>
                    </div>
                    <div class="col-md text-center no-gap border-right">
                        <li rel="concert-channel" class="nav-li">
                            <img class="nav-image" src="./images/home/tv-2.svg" alt="" />
                        </li>
                    </div>
                    <div class="col-md text-center no-gap border-right">
                        <li rel="claro-cinema" class="nav-li">
                            <img class="nav-image" src="./images/home/tv-3.svg" alt="" />
                        </li>
                    </div>
                    <div class="col-md text-center no-gap border-right">
                        <li rel="nuestra-vision" class="nav-li">
                            <img class="nav-image" src="./images/home/tv-4.svg" alt="" />
                        </li>
                    </div>
                    <div class="col-md text-center no-gap">
                        <li rel="claro-sports" class="nav-li">
                            <img class="nav-image" src="./images/home/tv-5.svg" alt="" />
                        </li>
                    </div>

                </ul>
            </div>


            <div id="claro-canal" class="tv-content">
                <div class="tv-slider small-poster" id="tv-claro-slider">
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Concert channel de "Ahora en tv"-->
            <div id="concert-channel" class="tv-content">
                <div class="tv-slider small-poster" id="tv-concert-slider">
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¡WTF, EL NUEVO GANCHO DE BLITZCRANK LLEGA A CASA DE TU PRIMA Y LA ONE SHOTEA! *BUFF Q*</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class=" height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Concert channel de "Ahora en tv"-->
            <!--Claro cinema de "Ahora en tv"-->
            <div id="claro-cinema" class="tv-content">
                <div class="tv-slider small-poster" id="tv-cinema-slider">
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Claro cinema de "Ahora en tv"-->
            <!--Nuestra visión de "Ahora en tv"-->
            <div id="nuestra-vision" class="tv-content">
                <div class="tv-slider small-poster" id="tv-vision-slider">
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class=" height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Nuestra visión de "Ahora en tv"-->
            <!--Claro sports de "Ahora en tv"-->
            <div id="claro-sports" class="tv-content">
                <div class="slick-slider small-poster" id="tv-sports-slider">
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap h-100">
                            <div class="height-second-poster h-100">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col columnGap">
                            <div class="height-second-poster">
                                <div class="poster-image-small sport-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Claro sports de "Ahora en tv"-->
        </div>
    </section>
    <!--Sección de Canal Claro-->
    <div class="o-claro-section">
        <!--Sección Canal Claro mobile-->
        <div class="claro-canal-mobile">
            <div class="m-home-titles">
                <h1 class="a-claro-channel-title">CANAL CLARO</h1>
                <h2 class="a-subtitle">
                    LO MEJOR EN SERIES Y
                </h2>
                <h2 class="a-claro-channel-subtitle-bold">
                    PELÍCULAS INTERNACIONALES
                </h2>
            </div>
            <div class="slick-slider">
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image claro-poster-color "></div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image claro-poster-color "></div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image claro-poster-color "></div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image claro-poster-color "></div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-see-more margin-top-50">
               <a href="claro-canal.php"> <button class="btn-red">VER +</button></a>
            </div>
        </div>
        <!--End Sección Canal Claro mobile-->
        <!--Sección Canal Claro tablet-->
        <div class="claro-canal-tablet">
            <div class="d-flex justify-content-between align-items-center margin-bottom-60">
                <div class="m-home-titles">
                    <h1 class="a-claro-channel-title">CANAL CLARO</h1>
                    <h2 class="a-subtitle">
                        LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS
                            INTERNACIONALES</span>
                    </h2>
                </div>
                <div class="m-see-more">
                    <a href="claro-canal.php"><button class="btn-red">VER +</button></a>
                </div>
            </div>
            <div class="slick-slider">
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color"></div>
                            <div class="image"></div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap">
                        <div class="height-second-poster">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap">
                        <div class="height-second-poster">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/claro-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-white">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End Sección Canal Claro tablet-->
        <!--Sección canal claro desktop-->
        <div class="claro-canal-desktop">
            <div class="d-flex justify-content-between align-items-center margin-bottom-60">
                <div class="m-home-titles">
                    <h1 class="a-claro-channel-title">CANAL CLARO</h1>
                    <h2 class="a-subtitle">
                        LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS
                            INTERNACIONALES</span>
                    </h2>
                </div>
                <div class="m-see-more">
                   <a href="claro-canal.php"> <button class="btn-red">VER +</button></a>
                </div>
            </div>
            <div class="row">
                <div class="m-auto col-xl-12">
                    <div class="slick-slider">
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="image"></div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/claro-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-white">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End seccción canal claro desktop-->
    </div>
    <!--Fin sección de Canal Claro-->
    <!--Sección de Concert Channel-->
    <div class="o-concert-section">
        <!--Versión para mobile-->
        <div class="concert-channel-mobile">
            <div class="m-home-titles">
                <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
                <h2 class="a-claro-channel-subtitle-bold">
                    CONCIERTOS, ENTREVISTAS
                </h2>
                <h2 class="a-subtitle">
                    Y MUCHO MÁS
                </h2>
            </div>
            <div class="slick-slider small-poster">
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small concert-poster-color"></div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small concert-poster-color"></div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small concert-poster-color"></div>
                            <div class="a-concert-rectangle ">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small concert-poster-color"></div>
                            <div class="a-concert-rectangle ">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-see-more margin-top-50">
                <a href="concert-channel.php"><button class="btn-pink">VER +</button></a>
            </div>
        </div>

        <!--End Versión mobile-->
        <!--Versión para tablet-->
        <div class="concert-channel-tablet">
            <div class="d-flex justify-content-between align-items-center margin-bottom-75">
                <div class="m-home-titles">
                    <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
                </div>
                <div class="m-see-more">
                    <button class="btn-pink">VER +</button>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <p class="a-concert-subtitle concert-first-subtitle">Conciertos</p>
                    <p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>
                </div>
                <div class="col-md-8">
                    <div class="row poster-pad-b">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster ">
                                <div class="poster-image-small concert-poster-color">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster">
                                <div class="poster-image-small concert-poster-color"></div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row poster-pad-t">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster h-100">
                                <div class="poster-image-small concert-poster-color"></div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster h-100">
                                <div class="poster-image-small concert-poster-color"></div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/concert-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-white">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>

        <!--End Versión tablet-->
        <!--Concert channel desktop-->
        <div class="concert-channel-desktop">
            <div class="d-flex justify-content-between align-items-center margin-bottom-75">
                <div class="m-home-titles">
                    <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
                </div>
                <div class="m-see-more">
                    <button class="btn-pink">
                        <span>VER</span>
                    </button>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 col-xl-6">
                    <p class="a-concert-subtitle concert-first-subtitle">Conciertos</p>
                    <p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>
                </div>
                <div class="col-md-8 col-xl-6">
                    <div class="row poster-pad-b">
                        <div class="col poster-pad-r poster-section">
                            <div class="poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row poster-pad-t">
                        <div class="col poster-pad-r">
                            <div class="poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="poster">
                                <div class="poster-image-small concert-poster-color">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-title">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                                <div class="a-concert-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/concert-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-white">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End Concert channel desktop-->
    </div>
    <!--Fin sección de Concert Channel-->
    <!--Sección de Cinema Claro-->
    <div class="o-cinema-section">
        <!--Cinema claro versión mobile-->
        <div class="cinema-claro-mobile">
            <div class="m-home-titles">
                <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
                <h2 class="a-subtitle">
                    Las mejores <span class="a-subtitle-bold">Películas Mexicanas</span>
                </h2>
            </div>
            <div class="slick-slider">
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image cinema-poster-color"></div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image cinema-poster-color"></div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image cinema-poster-color"></div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image cinema-poster-color"></div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-see-more margin-top-50">
                <button class="btn-red">VER +</button>
            </div>
        </div>
        <!--End Cinema Claro mobile-->
        <!--Cinema claro tablet-->
        <div class="cinema-claro-tablet">
            <div class="d-flex justify-content-between align-items-center margin-bottom-75">
                <div class="m-home-titles">
                    <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
                    <h2 class="a-subtitle">
                        Las mejores <span class="a-subtitle-bold">Películas Mexicanas</span>
                    </h2>
                </div>
                <div class="m-see-more">
                    <button class="btn-red">VER +</button>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-4 col-xl-6">
                </div>
                <div class="col-md-8 col-xl-6">
                    <div class="row poster-pad-b">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster ">
                                <div class="poster-image-small poster-grey"></div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster">
                                <div class="poster-image-small poster-grey"></div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row poster-pad-t">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster">
                                <div class="poster-image-small poster-grey"></div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster">
                                <div class="poster-image-small poster-grey"></div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/cinema-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-dark">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End cinema claro tablet-->
        <!--Cinema claro desktop-->
        <div class="cinema-claro-desktop">
            <div class="d-flex justify-content-between align-items-center margin-bottom-75">
                <div class="m-home-titles">
                    <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
                    <h2 class="a-subtitle">
                        Las mejores <span class="a-subtitle-bold">Películas Mexicanas</span>
                    </h2>
                </div>
                <div class="m-see-more">
                    <button class="btn-red">VER +</button>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-4 col-xl-6">
                </div>
                <div class="col-md-8 col-xl-6">
                    <div class="row poster-pad-b">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster ">
                                <div class="poster-image-small poster-grey">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster">
                                <div class="poster-image-small poster-grey">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row poster-pad-t">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster">
                                <div class="poster-image-small poster-grey">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster">
                                <div class="poster-image-small poster-grey">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-cinema-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/cinema-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-dark">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End cinema claro desktop-->
    </div>
    <!--Fin sección de Cinema Claro-->
    <!--Sección de Nuestra visión-->
    <div class="o-vision-section">
        <!--Nuestra visión mobile-->
        <div class="nuestra-vision-mobile">
            <div class="m-home-titles">
                <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
                <h2 class="a-subtitle">
                    SIÉNTETE <span class="a-subtitle-bold">COMO EN CASA</span>
                </h2>
            </div>

            <div class="slick-slider">

                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color"></div>
                            <div class="image"></div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-see-more margin-top-50">
                <button class="btn-red">VER +</button>
            </div>
        </div>
        <!--End nuestra visión mobile-->
        <!--Nuestra visión tablet-->
        <div class="nuestra-vision-tablet">
            <div class="d-flex justify-content-between align-items-center margin-bottom-60">
                <div class="m-home-titles">
                    <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
                    <h2 class="a-subtitle">
                        SIÉNTETE <span class="a-subtitle-bold">COMO EN CASA</span>
                    </h2>
                </div>
                <div class="m-see-more">
                    <button class="btn-purple">VER +</button>
                </div>
            </div>


            <div class="slick-slider">

                <div class="row no-gutters">
                    <div class="col columnGap">
                        <div class="height-second-poster">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap">
                        <div class="height-second-poster">
                            <div class="poster-image pink-color"></div>
                            <div class="image"></div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image pink-color">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/vision-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-dark">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End Nuestra visión tablet-->
        <!--Nuestra visión desktop-->
        <div class="nuestra-vision-desktop">
            <div class="d-flex justify-content-between align-items-center margin-bottom-60">
                <div class="m-home-titles">
                    <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
                    <h2 class="a-subtitle">
                        SIÉNTETE <span class="a-subtitle-bold">COMO EN CASA</span>
                    </h2>
                </div>
                <div class="m-see-more">
                    <button class="btn-purple">VER +</button>
                </div>
            </div>
            <div class="row">
                <div class="m-auto col-xl-12">
                    <div class="slick-slider">
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="image"></div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="image"></div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="image"></div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col columnGap">
                                <div class="height-second-poster">
                                    <div class="poster-image pink-color">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-image">
                                        <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/vision-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-dark">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End nuestra visión desktop-->
    </div>
    <!--End Sección de Nuestra visión-->

    <!--Sección de Claro Sports-->
    <div class="o-sports-section">
        <!--Claro sportis mobile-->
        <div class="claro-sports-mobile">
            <div class="m-home-titles">
                <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
                <h2 class="a-subtitle">
                    Las mejor en deportes <span class="a-subtitle-bold">al instante</span>
                </h2>
            </div>
            <div class="slick-slider small-poster">
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small sport-poster-color"></div>
                            <div class="a-sports-rectangle ">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small sport-poster-color"></div>
                            <div class="a-sports-rectangle ">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small sport-poster-color"></div>
                            <div class="a-sports-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col columnGap h-100">
                        <div class="height-second-poster h-100">
                            <div class="poster-image-small sport-poster-color"></div>
                            <div class="a-sports-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-see-more margin-top-50">
                <button class="btn-red">VER +</button>
            </div>
        </div>
        <!--End Claro sports mobile-->
        <!--Claro sports tablet-->
        <div class="claro-sports-tablet">
            <div class="d-flex justify-content-between align-items-center margin-bottom-50">
                <div class="m-home-titles">
                    <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
                    <h2 class="a-subtitle">
                        Las mejor en deportes <span class="a-subtitle-bold">al instante</span>
                    </h2>
                </div>
                <div class="m-see-more">
                    <button class="btn-red">VER +</button>
                </div>
            </div>
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-md-4">
                    <h1 class="poster-title-sport">
                        <span>Vive la </span>intensidad <span>del deporte</span>
                    </h1>
                </div>
                <div class="col-md-8">
                    <div class="row no-gutters poster-pad-b">
                        <div class="col margin-left-11 poster-margin-r">

                            <div class=" poster-image poster-grey">
                                <div class="transmission-panel">
                                    <p class="transmission-text text-white">14:50 - 16:50</p>
                                    <div class="transmission-add">
                                        <span class="text-white">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="a-sports-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-margin-l">
                            <div class="height-second-poster">
                                <div class="poster-image poster-grey">
                                    <div class="transmission-panel">
                                        <p class="transmission-text text-white">14:50 - 16:50</p>
                                        <div class="transmission-add">
                                            <span class="text-white">+</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="a-sports-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/sports-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-dark">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>
        </div>
        <!--End Claro sports tablet-->
        <!--Claro sports desktop-->
        <div class="claro-sports-desktop">
            <div class="d-flex justify-content-between align-items-center margin-bottom-50">
                <div class="m-home-titles">
                    <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
                    <h2 class="a-subtitle">
                        Las mejor en deportes <span class="a-subtitle-bold">al instante</span>
                    </h2>
                </div>
                <div class="m-see-more">
                    <button class="btn-red">VER +</button>
                </div>
            </div>
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-md-4 col-xl-6">
                    <h1 class="poster-title-sport">
                        <span>Vive la </span>intensidad <span>del deporte</span>
                    </h1>
                </div>
                <div class="col-md-8 col-xl-6">
                    <div class="row no-gutters poster-pad-b">
                        <div class="col margin-left-11 poster-margin-r">

                            <div class=" poster-image poster-grey">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                </div>
                            </div>
                            <div class="a-sports-rectangle thumbnail-info-title">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                            <div class="a-sports-rectangle thumbnail-info-image">
                                <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                            </div>
                        </div>
                        <div class="col poster-margin-l">
                            <div class="height-second-poster">
                                <div class="poster-image poster-grey">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                    </div>
                                </div>

                                <div class="a-sports-rectangle thumbnail-info-title">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                                <div class="a-sports-rectangle thumbnail-info-image">
                                    <img src="./images/home/clock.svg" alt="" class="showtime-clock">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between section-home-footer">
                <div>
                    <img class="concert-footer-img" src="./images/home/sports-home-img.svg" alt="">
                </div>
                <div>
                    <p class="horario-text text-dark">
                        Horario sujetos a cambios
                    </p>
                </div>
            </div>

        </div>
        <!--End Claro sports desktop-->
    </div>
    <!--Fin sección de Claro Sports-->
    <!--Sección de anuncio-->
    <?php 
            include 'advertising-section.php'
        ?>

    <!--Fin sección de anuncio-->
    <!--Redes sociales-->
    <div class="">
        <div class="row no-gutters">
            <div class="col-12">
                <h1 class="footer-title">¡síguenos!</h1>
            </div>
            <div class="social-media">
                <div class="col ">
                    <img class="social-icon" src="./images/home/faceboook-icon.svg" alt="">
                </div>
                <div class="col">
                    <img class="social-icon" src="./images/home/instagram-icon.svg" alt="">
                </div>
                <div class="col">
                    <img class="social-icon" src="./images/home/twitter-icon.svg" alt="">
                </div>
                <div class="col">
                    <img class="social-icon" src="./images/home/youtube-icon.svg" alt="">
                </div>

            </div>
        </div>
    </div>
    <!--Fin Redes sociales-->
    <?php 
        include 'footer.php'
    ?>
</body>

</html>