<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
</head>

<body>
    <!--Menú para móvil -->
    <?php
    include 'menu-mobile.php';
    ?>
    <!--End menú para móvil-->
    <div class="hamburguer-menu">
        <div class="text-center sidebar-header">
        </div>
        <div class="sidebar-content">
            <a href="home.php" class="sidebar-link">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <span class="dropdown-p">Inicio</span>
                </div>
            </a>
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
            <a class="sidebar-link" href="concert-channel.php">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Concert
                        Channel</span>
                </div>
            </a>
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
    <main>
        <header class="home-header">
            <div class="alert-user">
            </div>
            <div class="circle-video">
                <video preload="yes" playsinline autoplay muted loop class="home-video">
                    <source src="./video/video.mp4" type="video/mp4" />
                </video>
            </div>

            <div class="header">

                <img src="./images/home/american-horror.jpeg" class="background-home rellax" data-rellax="10">
                <nav class="menu-tablet">
                    <div class="nav-content">
                        <div class="claro-logo">
                            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                            <img class="logo" src="./images/home/claro-logo.svg" alt="" />
                        </div>

                        <div class="login">
                            <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
                        </div>
                    </div>
                </nav>
                <nav class="menu-desktop">
                    <div class="nav-content">
                        <div class="claro-logo">

                            <a href="home.php"><img class="logo" src="./images/home/claro-logo.svg" alt="" /></a>
                        </div>

                        <div class="user-options">
                        </div>
                    </div>
                    <div class="claro-navbar">
                        <div>
                            <a href="claro-canal.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item">Canal Claro</p>
                            </a>
                        </div>
                        <div>
                            <a href="concert-channel.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item">Concert Channel</p>
                            </a>
                        </div>
                        <div>
                            <a href="claro-cinema.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item">Claro Cinema</p>
                            </a>
                        </div>
                        <div>
                            <a href="nuestra-vision.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item">Nuestra Visión</p>
                            </a>
                        </div>
                        <div>
                            <a href="claro-sports.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item">Claro Sports</p>
                            </a>
                        </div>
                        <div>
                            <a href="programacion.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item">Programación</p>
                            </a>
                        </div>
                    </div>
                </nav>

                <div class="header-details header-detail-margin col-md-6">
                    <h1 class="header-h1">
                        <span class="header-span">Descubre<br>Claro<br></span>Networks
                    </h1>

                </div>
            </div>
        </header>
        <section class="o-tv-section margin-ahora-tv">
            <h2 class="title-tv">AHORA <span class="header-span">AL AIRE </span><span class="header-point">•</span></h2>
        </section>
        <section>
            <div class="o-tv-section">

                <div class="row no-gutters">
                    <ul class="tv-list col-md-11">
                        <div class="col-md text-center no-gap border-right">
                            <li rel="claro-canal" class="active-navItem nav-li">
                                <img class="claro-nav-image" src="./images/home/tv-1.svg" alt="" />
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
                <div class="tv-videos-container">
                    <div id="claro-canal" class="tv-content">
                        <div class="tv-slider today-claro-slider" id="tv-claro-slider">
                        </div>
                    </div>
                    <!--Concert channel de "Ahora en tv"-->
                    <div id="concert-channel" class="tv-content">
                        <div class="tv-slider today-concert-channel-slider" id="tv-concert-slider">
                        </div>
                    </div>
                    <!--End Concert channel de "Ahora en tv"-->
                    <!--Claro cinema de "Ahora en tv"-->
                    <div id="claro-cinema" class="tv-content">
                        <div class="tv-slider today-claro-cinema-slider" id="tv-cinema-slider">
                        </div>
                    </div>
                    <!--End Claro cinema de "Ahora en tv"-->
                    <!--Nuestra visión de "Ahora en tv"-->
                    <div id="nuestra-vision" class="tv-content">
                        <div class="tv-slider" id="tv-vision-slider">

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/01-aprende.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">APRENDE</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/02-dress-code.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">DRESS CODE</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/03-barra-infantil.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">BARRA INFANTIL</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/04-pobre-nino.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">POBRE NIÑO RICO</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/05-caja-pandora.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">LA CAJA DE PANDORA: ALEX AGUINAGA</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/06-el-torito.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">EL TORITO</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/07-la-estatua.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">LA ESTATUA DE CARNE</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/08-los-leones-del-ring.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">LOS LEONES DEL RING</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/09-vidas-extraordinarias.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">VIDAS EXTRAORDINARIAS</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/10-titanes-del-ring.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">TITANES DEL RING</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/12-deportes-en-claro.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">DEPORTES EN CLARO</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/nuestra-vision/carousel/13-santo.jpg" alt="">
                                        </div>
                                        <div class="a-vision-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">SANTO CONTRA LA MAFÍA DEL VICIO</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Nuestra visión de "Ahora en tv"-->
                <!--Claro sports de "Ahora en tv"-->
                <div id="claro-sports" class="tv-content">
                    <div class="tv-slider" id="tv-sports-slider">

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">

                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Claro sports de "Ahora en tv"-->
            </div>

            </div>
        </section>
        <div class="our-channels">
            <h1 class="our-channels-title">
                Nuestros Canales
            </h1>
        </div>
        <!--Sección de Canal Claro-->
        <div class="o-claro-section">
            <!--Sección Canal Claro mobile-->
            <div class="claro-canal-mobile">
                <div class="m-home-titles">
                    <a href="claro-canal.php" class="home-title-link">
                        <h1 class="a-claro-channel-title">CANAL CLARO</h1>
                    </a>
                    <h2 class="a-subtitle">
                        LO MEJOR EN SERIES Y <br><span>PELÍCULAS INTERNACIONALES</span>
                    </h2>
                </div>
                <div class="text-center">
                    <a href="claro-canal.php"> <button class="btn-red">VER +</button></a>
                </div>
                <div class="section-slider">

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <!--<p class="a-programming-text now-live-text">AHORA EN VIVO</p>-->

                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/bbc.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">BBC</p>

                                    </div>

                                </div>
                            </a>
                        </div>

                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/caja-de-pandora.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LA CAJA DE PANDORA</p>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>




                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a class="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/indestructibles.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LOS INDESTRUCTIBLES 2</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/saint-seiya.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LOS CABALLEROS DEL ZODIACO</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                </div>

            </div>
            <!--End Sección Canal Claro mobile-->
            <!--Sección Canal Claro tablet-->
            <div class="claro-canal-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header">
                    <div class="m-home-titles">
                        <a href="claro-canal.php" class="home-title-link">
                            <h1 class="a-claro-channel-title">CANAL CLARO</h1>
                        </a>
                        <h2 class="a-subtitle">
                            LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS
                                INTERNACIONALES</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-canal.php"><button class="btn-red">VER +</button></a>
                    </div>
                </div>
                <div class="canal-videos-container">
                    <div class="section-slider">
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <!--<p class="a-programming-text now-live-text">AHORA EN VIVO</p>-->
                                <a href="sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="../images/claro-canal/bbc.jpg" alt="">

                                    </div>
                                    <div class="a-claro-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">BBC</p>

                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img src="./images/posters/heart-outline.svg" class="poster-add" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="../images/claro-canal/caja-de-pandora.jpg" alt="">

                                    </div>
                                    <div class="a-claro-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">LA CAJA DE PANDORA</p>

                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href=" sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="../images/claro-canal/indestructibles.jpg" alt="">

                                    </div>
                                    <div class="a-claro-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">LOS INDESTRUCTIBLES 2</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href=" sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="../images/claro-canal/saint-seiya.jpg" alt="">

                                    </div>
                                    <div class="a-claro-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">LOS CABALLEROS DEL ZODIACO</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail-large">
                                        <!--<img src="../images/posters/good-doctor.jpeg" alt="">-->
                                    </div>
                                    <div class="a-claro-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">THE GOOD DOCTOR</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                        <div>
                            <img class="concert-footer-img" src="./images/home/tv-1.svg" alt="">
                        </div>
                        <div>
                            <p class="horario-text text-dark">
                                Horario sujetos a cambios
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!--End Sección Canal Claro tablet-->
            <!--Sección canal claro desktop-->
            <div class="claro-canal-desktop">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header">
                    <div class="m-home-titles">
                        <a href="claro-canal.php" class="home-title-link">
                            <h1 class="a-claro-channel-title">CANAL CLARO</h1>
                        </a>
                        <h2 class="a-subtitle">
                            LO MEJOR EN SERIES Y <span>PELÍCULAS
                                INTERNACIONALES</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-canal.php"> <button class="btn-red">VER +</button></a>
                    </div>
                </div>
                <div class="section-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <!--<p class="a-programming-text now-live-text">AHORA EN VIVO</p>-->
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/bbc.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">BBC</p>

                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/caja-de-pandora.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LA CAJA DE PANDORA</p>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/indestructibles.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LOS INDESCTRUCTIBLES 2</p>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <img src="../images/claro-canal/saint-seiya.jpg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LOS CABALLEROS DEL ZODIACO</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <!--<img src="./images/posters/stranger-things.jpeg" alt="">-->

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">STRANGER THINGS</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <!--<img src="./images/posters/american-horror.jpeg" alt="">-->

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">AMERICAN HORROR STORY</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--<img src="./images/posters/greys-anatomy.jpeg" alt="">-->

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                    <!--<img src="./images/posters/american-horror.jpeg" alt="">-->

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">GREY'S ANATOMY</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                    <div>
                        <img class="concert-footer-img" src="./images/home/tv-1.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-dark">
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
                    <a href="concert-channel.php" class="home-title-link">
                        <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
                    </a>

                    <h2 class="a-concert-channel-subtitle">
                        CONCIERTOS, ENTREVISTAS<br><span>Y MUCHO MÁS</span>
                    </h2>

                </div>
                <div class="text-center">
                    <a href="concert-channel.php"><button class="btn-pink">VER +</button></a>
                </div>
                <div class="section-slider concert-home-slider">

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/section-home/billie-eillish.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">BILLIE EILLISH</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/section-home/chica-concert.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">CHICA</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/section-home/ed-sheeran.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">ED SHEERAN</p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinpsis.php">
                                <div class="thumbnail">
                                    <img src="./images/concert-channel/section-home/queen.jpg" alt="">
                                </div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">QUEEN</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <!--End Versión mobile-->
            <!--Versión para tablet-->
            <div class="concert-channel-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">
                        <a href="concert-channel.php" class="home-title-link">
                            <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
                        </a>
                        <p class="a-concert-subtitle concert-first-subtitle">Conciertos</p>
                        <p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>
                    </div>
                    <div class="m-see-more">
                        <a href="concert-channel.php"><button class="btn-pink">VER +</button></a>
                    </div>
                </div>
                <div class="home-concert-videos-container">
                    <div class="section-slider">>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <!--<p class="a-programming-text now-live-text">AHORA EN VIVO</p>-->
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <img src="./images/concert-channel/section-home/billie-eillish.jpg" alt="">
                                    </div>
                                    <div class="a-concert-rectangle ">
                                        <p class="a-poster-text-white">BILLIE EILLISH</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <img src="./images/concert-channel/section-home/chica-concert.jpg" alt="">
                                    </div>
                                    <div class="a-concert-rectangle ">
                                        <p class="a-poster-text-white">CHICA</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <img src="./images/concert-channel/section-home/ed-sheeran.jpg" alt="">
                                    </div>
                                    <div class="a-concert-rectangle ">
                                        <p class="a-poster-text-white">ED SHEERAN</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="poster">
                            <div class="psoter-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <img src="./images/concert-channel/section-home/queen.jpg" alt="">
                                    </div>
                                    <div class="a-concert-rectangle ">
                                        <p class="a-poster-text-white">QUEEN</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <!--<img src="./images/posters/the-weeknd.jpeg" alt="">-->
                                    </div>
                                    <div class="a-concert-rectangle ">
                                        <p class="a-poster-text-white">The Weeknd: Starboy Tour</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
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
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">
                        <a href="concert-channel.php" class="home-title-link">
                            <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
                        </a>
                        <h2 class="text-white a-subtitle">Conciertos, entrevistas y mucho más</h2>
                    </div>
                    <div class="m-see-more">
                        <a href="concert-channel.php"><button class="btn-pink">
                                <span>VER +</span>
                            </button></a>
                    </div>
                </div>
                <div class="row no-gutters">

                    <div class="col-md-8 col-xl-6 ml-auto">
                        <div class="row poster-pad-b">
                            <div class="col poster-pad-r poster-section">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <!--<p class="a-programming-text now-live-text">AHORA EN VIVO</p>-->
                                        <a href="sinopsis.php">
                                            <div class="thumbnail">
                                                <img src="./images/concert-channel/section-home/billie-eillish.jpg" alt="">
                                            </div>
                                            <div class="a-concert-rectangle thumbnail-info-title">
                                                <div class="poster-title-margin">
                                                    <p class="a-poster-text-white">BILLIE EILLISH
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col poster-pad-l">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="./images/concert-channel/section-home/chica-concert.jpg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">CHICA</p>
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
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <a href="sinopsis.php">
                                            <div class="thumbnail">
                                                <img src="./images/concert-channel/section-home/ed-sheeran.jpg" alt="">
                                            </div>
                                            <div class="a-concert-rectangle thumbnail-info-title">
                                                <p class="a-poster-text-white">ED SHEERAN</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col poster-pad-l">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <a href="sinopsis.php">
                                            <div class="thumbnail">
                                                <img src="./images/concert-channel/section-home/queen.jpg" alt="">
                                            </div>
                                            <div class="a-concert-rectangle thumbnail-info-title">
                                                <p class="a-poster-text-white">QUEEN</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
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
                    <a href="claro-cinema.php" class="home-title-link">
                        <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
                    </a>

                    <h2 class="a-claro-cinema-subtitle">
                        Las mejores <span>Películas Mexicanas</span>
                    </h2>
                </div>
                <div class="text-center">
                    <a href="claro-cinema.php"><button class="btn-red">VER +</button></a>
                </div>
                <div class="section-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>

                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/claro-cinema/section-home/01-las-imperdibles.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">LAS IMPERDIBLES</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/claro-cinema/section-home/02-picardia-mexicana.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">PICARDÍA MEXICANA</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/claro-cinema/section-home/03-relincha-caballo-rojas.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">RELINCHA CON EL CABALLO ROJAS</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/claro-cinema/section-home/04-sexy-romanticas.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">SEXY ROMANTICAS</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Cinema Claro mobile-->
            <!--Cinema claro tablet-->
            <div class="cinema-claro-tablet">
                <img src="./images/home/claro-cinema-background.png" alt="" class="cinema-image">
                <img src="./images/home/texto-claro-cinema.png" alt="" class="cinema-texto-image">
                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header">
                    <div class="m-home-titles">
                        <a href="claro-cinema.php" class="home-title-link">
                            <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
                        </a>
                        <h2 class="a-subtitle">
                            Las mejores <span>Películas Mexicanas</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-cinema.php"><button class="btn-red">VER +</button></a>
                    </div>
                </div>
                <div class="home-cinema-videos-container">
                    <div class="section-slider">
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <img src="./images/claro-cinema/section-home/01-las-imperdibles.jpg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">LAS IMPERDIBLES</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <img src="./images/claro-cinema/section-home/02-picardia-mexicana.jpg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">PICARDÍA MEXICANA</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail">
                                        <img src="./images/claro-cinema/section-home/03-relincha-caballo-rojas.jpg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">RELINCHA CON EL CABALLO ROJAS</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail">
                                    <img src="./images/claro-cinema/section-home/04-sexy-romanticas.jpg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">SEXY ROMANTICAS</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
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
                <div class="black-line"></div>
                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header">
                    <div class="m-home-titles">
                        <a href="claro-cinema.php" class="home-title-link">
                            <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
                        </a>
                        <h2 class="a-subtitle">
                            Las mejores <span>Películas Mexicanas</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-cinema.php"><button class="btn-red">VER +</button></a>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-md-4 col-xl-6">
                        <img src="./images/home/claro-cinema-background.png" alt="" class="cinema-image">
                    </div>
                    <div class="col-md-8 col-xl-6 cinema-home-videos-container">
                        <div class="row poster-pad-b">
                            <div class="col poster-pad-r">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/claro-cinema/section-home/01-las-imperdibles.jpg" alt="">
                                        </div>
                                        <div class="a-cinema-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">LAS IMPERDIBLES</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col poster-pad-l">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/claro-cinema/section-home/02-picardia-mexicana.jpg" alt="">
                                        </div>
                                        <div class="a-cinema-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">PICARDÍA MEXICANA</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row poster-pad-t">
                            <div class="col poster-pad-r">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <div class="thumbnail">
                                        <img src="./images/claro-cinema/section-home/03-relincha-caballo-rojas.jpg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">RELINCHA CON EL CABALO ROJAS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col poster-pad-l">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail">
                                            <img src="./images/claro-cinema/section-home/04-sexy-romanticas.jpg" alt="">
                                        </div>
                                        <div class="a-cinema-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">SEXY ROMANTICAS</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
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
                    <a href="nuestra-vision.php" class="home-title-link">
                        <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
                    </a>

                    <h2 class="a-our-vision-subtitle">
                        SIÉNTETE <span>COMO EN CASA</span>
                    </h2>
                </div>
                <div class="text-center">
                    <a href="nuestra-vision.php"><button class="btn-red">VER +</button></a>
                </div>
                <div class="section-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                </div>
                                <div class="a-vision-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                        </div>
                        <div class="thumbnail-large"></div>
                        <div class="image"></div>
                        <div class="a-vision-rectangle">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                </div>
                                <div class="a-vision-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large">
                                </div>
                                <div class="a-vision-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            <!--End nuestra visión mobile-->
            <!--Nuestra visión tablet-->
            <div class="nuestra-vision-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header vision-section-header">
                    <div class="m-home-titles">
                        <a href="nuestra-vision.php" class="home-title-link">
                            <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
                        </a>
                        <h2 class="a-subtitle">
                            SIÉNTETE <span>COMO EN CASA</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="nuestra-vision.php"><button class="btn-purple">VER
                                +</button></a>
                    </div>
                </div>
                <div class="home-vision-videos-container">
                    <div class="section-slider">
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="./images/nuestra-vision/section-home/01-liga-femenil.jpg" alt="">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">LIGA FEMENIL</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="./images/nuestra-vision/section-home/02-pedro-infante.jpg" alt="">
                                    </div>

                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">PEDRO INFANTE</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="./images/nuestra-vision/section-home/03-el-club-de-teo.jpg" alt="">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">EL CLUB DE TEO</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                </div>
                                <a href="sinopsis.php">
                                    <div class="thumbnail-large">
                                        <img src="./images/nuestra-vision/section-home/04-remasterizados.jpg" alt="">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">REMASTERIZADOS</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer vision-section-footer">
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
                <div>
                    <img src="./images/home/nuestra-vision.png" class="nuestra-vision-image">
                </div>
                <div class="d-flex justify-content-between align-items-center home-section-header vision-section-header">
                    <div class="m-home-titles">
                        <a href="nuestra-vision.php" class="home-title-link">
                            <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>
                        </a>
                        <h2 class="a-subtitle">
                            SIÉNTETE <span>COMO EN CASA</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="nuestra-vision.php"><button class="btn-purple">VER
                                +</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9">
                        <div class="vision-slider">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail-large">
                                            <img src="./images/nuestra-vision/section-home/01-liga-femenil.jpg" />
                                        </div>
                                        <div class="a-vision-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">LIGA FEMENIL</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail-large">
                                            <img src="./images/nuestra-vision/section-home/02-pedro-infante.jpg" />
                                        </div>
                                        <div class="a-vision-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">PEDRO INFANTE</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail-large">
                                            <img src="./images/nuestra-vision/section-home/03-el-club-de-teo.jpg" />
                                        </div>
                                        <div class="a-vision-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">EL CLUB DE TEO</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail-large">
                                            <img src="./images/nuestra-vision/section-home/04-remasterizados.jpg" />
                                        </div>
                                        <div class="a-vision-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">REMASTERIZADOS</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail-large">
                                        </div>
                                        <div class="a-vision-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail-large">
                                        </div>
                                        <div class="a-vision-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer vision-section-footer">
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
        </div>
        <!--End Sección de Nuestra visión-->

        <!--Sección de Claro Sports-->
        <div class="o-sports-section">
            <!--Claro sportis mobile-->
            <div class="claro-sports-mobile">
                <div class="m-home-titles">
                    <a href="claro-sports.php" class="home-title-link">
                        <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
                    </a>

                    <h2 class="a-claro-sports-subtitle">
                        Las mejor en deportes <span>al instante</span>
                    </h2>
                </div>
                <div class="text-center">
                    <a href="https://www.marca.com/claro-mx/"><button class="btn-red">VER +</button></a>
                </div>
                <div class="section-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large"></div>
                                <div class="a-sports-rectangle ">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large"></div>
                                <div class="a-sports-rectangle ">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <a href="sinopsis.php">
                                <div class="thumbnail-large"></div>
                                <div class="a-sports-rectangle ">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                        </div>
                        <a href="sinopsis.php">
                            <div class="thumbnail-large"></div>
                            <div class="a-sports-rectangle ">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

            </div>
            <!--End Claro sports mobile-->
            <!--Claro sports tablet-->
            <div class="claro-sports-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header sports-section-header">
                    <div class="m-home-titles">
                        <a href="claro-sports.php" class="home-title-link">
                            <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
                        </a>
                        <h2 class="a-subtitle">
                            Las mejor en deportes <span>al instante</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="https://www.marca.com/claro-mx/"><button class="btn-red">VER +</button></a>
                    </div>
                </div>
                <div class="home-sports-videos-container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-md-5">
                            <h1 class="poster-title-sport">
                                <span>Vive la </span>intensidad <span>del deporte</span>
                            </h1>
                        </div>
                        <div class="col-md-7">
                            <div class="sports-slider">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <a href="sinopsis.php">
                                            <div class="thumbnail-large"></div>
                                            <div class="a-sports-rectangle ">
                                                <div class="poster-title-margin">
                                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>


                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <a href="sinopsis.php">
                                            <div class="thumbnail-large"></div>
                                            <div class="a-sports-rectangle ">
                                                <div class="poster-title-margin">
                                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <a href="sinopsis.php">
                                            <div class="thumbnail-large"></div>
                                            <div class="a-sports-rectangle ">
                                                <div class="poster-title-margin">
                                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <a href="sinopsis.php">
                                            <div class="thumbnail-large"></div>
                                            <div class="a-sports-rectangle ">
                                                <div class="poster-title-margin">
                                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer sports-section-footer">
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
                <div class="d-flex justify-content-between align-items-center home-section-header sports-section-header">
                    <div class="m-home-titles">
                        <a href="claro-sports.php" class="home-title-link">
                            <h1 class="a-claro-sports-title">claro <span>sports</span></h1>
                        </a>
                        <h2 class="a-subtitle">
                            Las mejor en deportes <span>al instante</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-sports.php"><button class="btn-red">VER +</button></a>
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
                            <div class="col poster margin-left-11 poster-margin-r">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                    </div>
                                    <a href="sinopsis.php">
                                        <div class="thumbnail-large">
                                        </div>
                                        <div class="a-sports-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="col poster-margin-l">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                                        </div>
                                        <a href="sinopsis.php">
                                            <div class="thumbnail-large">
                                            </div>

                                            <div class="a-sports-rectangle thumbnail-info-title">
                                                <div class="poster-title-margin">
                                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                                </div>
                                            </div>
                                        </a>
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

        <!-- Modal -->
        <?php
        include './views/partials/modal-favorites.php'
        ?>
    </main>
</body>

</html>