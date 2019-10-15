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
    <header>
        <div class="hamburguer-menu">
            <div class="text-center">
                <img src="./images/menu/claro-networks-sidebar.svg" alt="" class="logo-sidebar">
            </div>
            <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                <a href="index.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
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
                    <a class="sidebar-link" href="concert-channel.php"><span class="dropdown-p">Concert
                            Channel</span></a>
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
                    <a class="sidebar-link" href="https://nuestravision.tv/"><span class="dropdown-p">Nuestra
                            Visión</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="https://www.marca.com/claro-mx/"><span class="dropdown-p">Claro
                            Sports</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Programación</span>
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
        </div>
    </header>
    <main>
        <div class="synopsis-content">
            <div class="d-lg-none d-flex justify-content-center pt-5 pb-4">
                <button class="synopsis-button synopsis-add">
                    <p class="mb-0 synopsis-add-text">Añadir</p>
                </button>
                <button class="synopsis-button">
                    <div class="d-flex align-items-center">
                        <p class="synopsis-schedule-text mb-0">Horarios</p><img src="./images/home/clock.svg" alt="">
                    </div>
                </button>
            </div>
            <div class="col-11 mx-auto">
                <h1 class="text-center synopsis-section-title">sinópsis</h1>

                <div class="d-lg-flex align-items-lg-start no-gutters synopsis-body-container">
                    <div class="col-lg-6 mr-lg-4">
                        <img src="./images/sinopsis/images.jpeg" alt="" class="w-100">
                    </div>
                    <div class="col-lg-6 cmb-4">
                        <h1 class="synopsis-title mt-4 mb-4 mt-lg-0 mb-lg-4">Duis aute irure </h1>
                        <p class="synopsis-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                            <br><br>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt
                            mollit anim id est laborum.</p>
                        <div class="d-sm-none d-lg-flex justify-content-lg-end">
                            <button class="synopsis-button synopsis-add">
                                <p class="mb-0 synopsis-add-text">Añadir</p>
                            </button>
                            <button class="synopsis-button">
                                <div class="d-flex align-items-center">
                                    <p class="synopsis-schedule-text mb-0">Horarios</p><img
                                        src="./images/home/clock.svg" alt="">
                                </div>
                            </button>
                        </div>
                    </div>


                </div>

                <div class="mb-4 d-lg-flex no-gutters justify-content-lg-center">
                    <img src="./images/sinopsis/images.jpeg" alt="" class="col-lg-4 mr-lg-2">
                    <img src="./images/sinopsis/images.jpeg" alt="" class="col-lg-4 mr-lg-2 d-none d-lg-block">
                    <img src="./images/sinopsis/images.jpeg" alt="" class="col-lg-4 d-none d-lg-block">
                </div>
                <div class="">

                </div>
                <div class="d-flex justify-content-center synopsis-details-container d-lg-none">
                    <div class="mr-5">
                        <p class="synopsis-text">Estados Unidos</p>
                        <p class="synopsis-text">2013</p>
                        <p class="synopsis-text">Clasificación C</p>
                    </div>
                    <div>
                        <p class="synopsis-text">4 Temporadas</p>
                        <p class="synopsis-text">60 Minutos</p>
                    </div>
                </div>
                <div class="synopsis-schedule-container">
                    <h1 class="synopsis-schedule-title">Horario por regiones</h1>
                </div>
                <div class="no-gutters">
                    <div class="col-11 mx-auto dropdownCountry">

                        <div class="dropdownCountry-content d-flex  align-items-center pb-2 mb-3 no-gutters">
                            <div class="col-2">
                                <img src="./images/paises/colombia.svg" alt="">
                            </div>
                            <div class="col-5">
                                <p class="dropdownCountry-text">Colombia</p>
                            </div>
                            <div class="col-4">
                                <p class="dropdownCountry-text dropdownCountry-schedule">18:00 hrs</p>
                            </div>
                            <div class="col-1">
                                <span class="dropdownCountry-arrow"></span>
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
                            <div class="1">
                                <span class="dropdownCountry-arrow"></span>
                            </div>

                        </div>
                        <div class="dropdownCountry-content d-flex align-items-center pb-2 mb-3 no-gutters">
                            <div class="col-2">
                                <img src="./images/paises/dominican-republic.svg" alt="">
                            </div>
                            <div class="col-5">
                                <p class="dropdownCountry-text">República Dominicana</p>
                            </div>
                            <div class="col-4">
                                <p class="dropdownCountry-text dropdownCountry-schedule">18:00 hrs</p>
                            </div>
                            <div class="col-1">
                                <span class="dropdownCountry-arrow"></span>
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