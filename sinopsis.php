<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>

</head>

<body>
    <header class="synopsis-header">
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
                <a href="programacion.php">
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
                    <!--<img src="./images/concert-channel/header-image.jpeg" alt="">-->
                </div>
                <div class="header-slide">
                    <!--<img src="./images/header/glastonbury.jpeg" alt="">-->
                </div>
                <div class="header-slide"></div>
            </div>
        </div>
    </header>
    <main>
        <div class="synopsis-content">
            <div class="no-gutters">
                <div class="col-11 col-lg-10 mx-auto">
                    <div class="synopsis-buttons-mobile-container">
                        <button class="button-none synopsis-add add-favorites">
                            <img src="./images/posters/heart-outline.svg" alt="" class="synopsis-heart">
                        </button>
                        <a href="sinopsis.php#dropdown-country"> <button class="synopsis-button">
                                <div class="d-flex align-items-center">

                                    <p class="synopsis-schedule-text mb-0">Horarios</p><img src="./images/home/clock.svg" alt="">

                                </div>
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="no-gutters">
                <div class="col-11 col-md-12 col-lg-10 mx-auto">
                    <h1 class="synopsis-section-title">sinópsis</h1>

                    <div class="synopsis-body-container no-gutters">
                        <div class="col-md-7 col-lg-6 mx-auto synopsis-main-image">
                            <img src="./images/sinopsis/images.jpeg" alt="" class="w-100">
                        </div>
                        <div class="col-md-7 col-lg-6 mx-sm-auto mx-md-auto synopsis-description-container">
                            <div>
                                <h1 class="synopsis-title"></h1>
                                <p class="synopsis-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.
                                    <br><br>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat
                                    nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit anim id est laborum.</p>
                            </div>

                            <div class="no-gutters">

                                <div class="synopsis-buttons-tablet-container col-md-10 col-xl-12">
                                    <button class="button-none synopsis-add add-favorites">
                                        <img src="" alt="" class="synopsis-heart">
                                    </button>
                                    <a href="sinopsis.php#dropdown-country"><button class="synopsis-button">
                                            <div class="d-flex align-items-center">
                                                <p class="synopsis-schedule-text mb-0">Horarios</p><img src="./images/home/clock.svg" alt="">
                                            </div>
                                        </button></a>
                                </div>

                            </div>


                        </div>


                    </div>
                    <div class="no-gutters">
                        <div class="col-md-10 col-lg-12 mx-auto">
                            <div class="synopsis-images-container no-gutters">
                                <img src="./images/sinopsis/images.jpeg" alt="" class="col-md-6 col-lg-4 synopsis-image">
                                <img src="./images/sinopsis/images.jpeg" alt="" class="col-md-6 col-lg-4 synopsis-image">
                                <img src="./images/sinopsis/images.jpeg" alt="" class="col-lg-4 synopsis-image">
                            </div>
                            <div class="">
                                <div class="synopsis-details-container">
                                    <div class="synopsis-rating-container">
                                        <p class="synopsis-text synopsis-detail-text">Estados Unidos</p>
                                        <p class="synopsis-text synopsis-detail-text">2013</p>
                                        <p class="synopsis-text synopsis-detail-text">Clasificación C</p>
                                    </div>
                                    <div class="synopsis-seasons-container">
                                        <p class="synopsis-text synopsis-detail-text">4 Temporadas</p>
                                        <p class="synopsis-text synopsis-detail-text">60 Minutos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="synopsis-schedule-container" id="dropdown-country">
                        <h1 class="synopsis-schedule-title">Horario por regiones</h1>
                    </div>
                    <div class="no-gutters">

                        <div class="col-11 mx-auto dropdownCountry">

                            <div class="dropdownCountry-content d-flex  align-items-center pb-3 mb-3 no-gutters ">
                                <div class="col-2">
                                    <img src="./images/paises/colombia.svg" alt="">
                                </div>
                                <div class="col-5">
                                    <p class="dropdownCountry-text">Colombia</p>
                                </div>
                                <div class="col-4">
                                    <p class="dropdownCountry-text dropdownCountry-schedule">18:00 hrs</p>
                                </div>
                                <div class="col-1 text-center dropdownCountry-icon">
                                    <span class="dropdownCountry-arrow"></span>
                                </div>

                            </div>
                            <div class="dropdownCountries pb-3 mb-3">
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>



                            </div>
                            <div class="dropdownCountry-content d-flex  align-items-center pb-2 mb-3 no-gutters">
                                <div class="col-2">
                                    <img src="./images/paises/costa-rica.svg" alt="">
                                </div>

                                <div class="col-5">
                                    <p class="dropdownCountry-text">Costa Rica</p>
                                </div>
                                <div class="col-4">
                                    <p class="dropdownCountry-text dropdownCountry-schedule">18:00 hrs</p>
                                </div>
                                <div class="col-1 text-center dropdownCountry-icon">
                                    <span class="dropdownCountry-arrow"></span>
                                </div>
                            </div>
                            <div class="dropdownCountries pb-3 mb-3 ">
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>

                            </div>
                            <div class="dropdownCountry-content d-flex align-items-center pb-3 mb-3 no-gutters">
                                <div class="col-2">
                                    <img src="./images/paises/dominican-republic.svg" alt="">
                                </div>
                                <div class="col-5">
                                    <p class="dropdownCountry-text">República Dominicana</p>
                                </div>
                                <div class="col-4">
                                    <p class="dropdownCountry-text dropdownCountry-schedule">18:00 hrs</p>
                                </div>
                                <div class="col-1 text-center dropdownCountry-icon">
                                    <span class="dropdownCountry-arrow"></span>
                                </div>
                            </div>
                            <div class="dropdownCountries pb-3 mb-3 ">
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>
                                <div class="dropdownCountries-content no-gutters">
                                    <div class="col-2">
                                        <img src="./images/paises/dominican-republic.svg" alt="">
                                    </div>
                                    <div class="col-5">
                                        <p class="dropdownCountry-text">República Dominicana</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php
            include 'advertising-section.php'
            ?>
            <div class="">
                <div class="row no-gutters">
                    <div class="col-12">
                        <h1 class="footer-title">¡síguenos!</h1>
                    </div>
                    <div class="social-media">
                        <div class="col ">
                            <img class="social-icon" src="./images/redes/facebook-icon-red.svg" alt="">
                        </div>
                        <div class="col">
                            <img class="social-icon" src="./images/redes/insta-icon-red.svg" alt="">
                        </div>
                        <div class="col">
                            <img class="social-icon" src="./images/redes/twitter-icon-red.svg" alt="">
                        </div>
                        <div class="col">
                            <img class="social-icon" src="./images/redes/youtube-icon-red.svg" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <?php
            include 'footer.php'
            ?>
        </div>
        </div>
    </main>

</body>

</html>