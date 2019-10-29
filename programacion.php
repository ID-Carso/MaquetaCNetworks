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
                    <span class="dropdown-p active-sidebar-item">Programación</span>
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
    <div class="pro-container">
        <main class="programacion">
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
                    <div class="no-gutters">
                        <div class="col-11 mx-auto">
                            <p class="month">Octubre 2019</p>
                            <ul class="claro-calendar">
                                <div class="programacion-slider" id="pro-claro-slider">
                                    <li rel="claro-01" class="claro-item claro-active">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">01</p>
                                        </div>
                                    </li>
                                    <li rel="claro-02" class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">02</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">03</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">04</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">05</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">06</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">07</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">08</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">09</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">10</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">11</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">12</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">13</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">14</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">15</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">DON</p>
                                            <p class="day-number">16</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">17</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">18</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MIER/p>
                                                <p class="day-number">19</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">20</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">21</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">22</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">23</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">24</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">25</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">26</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">27</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">28</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">29</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">30</p>
                                        </div>
                                    </li>
                                    <li class="claro-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">31</p>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>


                    <div id="claro-01" class="claro-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">

                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="claro-02" class="claro-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch-alert">
                                                    <input type="checkbox">
                                                    <span class="slideralert roundalert"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="concert-channel" class="tv-content">

                    <div class="no-gutters">
                        <div class="col-11 mx-auto">
                            <ul class="concert-calendar">
                                <p class="month">Febrero 2019</p>
                                <div class="programacion-slider" id="pro-concert-slider">
                                    <li rel="concert-01" class="concert-active concert-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">01</p>
                                        </div>
                                    </li>
                                    <li rel="concert-02" class="concert-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">02</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">03</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">04</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">05</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">06</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">07</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">08</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">09</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">10</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">11</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">12</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">13</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">14</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">15</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">16</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">17</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">18</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">19</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">20</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">21</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">22</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">23</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">24</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">25</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">26</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">27</p>
                                        </div>
                                    </li>
                                    <li class="concert-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">28</p>
                                        </div>
                                    </li>

                                </div>
                            </ul>
                        </div>
                    </div>


                    <div id="concert-01" class="concert-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="concert-02" class="concert-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Concert channel de "Ahora en tv"-->
                <!--Claro cinema de "Ahora en tv"-->
                <div id="claro-cinema" class="tv-content">
                    <div class="no-gutters">
                        <div class="col-11 mx-auto">
                            <ul class="cinema-calendar">
                                <p class="month">Junio 2019</p>
                                <div class="programacion-slider" id="pro-concert-slider">
                                    <li rel="cinema-01" class="cinema-active cinema-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">01</p>
                                        </div>
                                    </li>
                                    <li rel="cinema-02" class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">02</p>
                                        </div>
                                    </li>
                                    <li class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">03</p>
                                        </div>
                                    </li>
                                    <li class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">04</p>
                                        </div>
                                    </li>
                                    <li class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">05</p>
                                        </div>
                                    </li>
                                    <li class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">06</p>
                                        </div>
                                    </li>
                                    <li class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">07</p>
                                        </div>
                                    </li>
                                    <li class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">08</p>
                                        </div>
                                    </li>
                                    <li class="cinema-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">09</p>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div id="cinema-01" class="cinema-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="cinema-02" class="cinema-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--End Claro cinema de "Ahora en tv"-->
                <!--Nuestra visión de "Ahora en tv"-->
                <div id="nuestra-vision" class="tv-content">
                    <div class="no-gutters">
                        <div class="col-11 mx-auto">
                            <ul class="vision-calendar">
                                <p class="month">Junio 2019</p>
                                <div class="programacion-slider" id="pro-concert-slider">
                                    <li rel="vision-01" class="vision-active vision-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">01</p>
                                        </div>
                                    </li>
                                    <li rel="vision-02" class="vision-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">02</p>
                                        </div>
                                    </li>
                                    <li class="vision-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">03</p>
                                        </div>
                                    </li>
                                    <li class="vision-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">04</p>
                                        </div>
                                    </li>
                                    <li class="vision-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">05</p>
                                        </div>
                                    </li>
                                    <li class="vision-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">06</p>
                                        </div>
                                    </li>
                                    <li class="vision-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">07</p>
                                        </div>
                                    </li>
                                    <li class="vision-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">08</p>
                                        </div>
                                    </li>
                                    <li class="vision-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">09</p>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div id="vision-01" class="vision-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vision-02" class="vision-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Nuestra visión de "Ahora en tv"-->
                <!--Claro sports de "Ahora en tv"-->
                <div id="claro-sports" class="tv-content">
                    <div class="no-gutters">
                        <div class="col-11 mx-auto">
                            <ul class="sports-calendar">
                                <p class="month">Junio 2019</p>
                                <div class="programacion-slider" id="pro-concert-slider">
                                    <li rel="sports-01" class="sports-active sports-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">01</p>
                                        </div>
                                    </li>
                                    <li rel="sports-02" class="sports-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">02</p>
                                        </div>
                                    </li>
                                    <li class="sports-item">
                                        <div class="day">
                                            <p class="day-text">MIER</p>
                                            <p class="day-number">03</p>
                                        </div>
                                    </li>
                                    <li class="sports-item">
                                        <div class="day">
                                            <p class="day-text">JUE</p>
                                            <p class="day-number">04</p>
                                        </div>
                                    </li>
                                    <li class="sports-item">
                                        <div class="day">
                                            <p class="day-text">VIE</p>
                                            <p class="day-number">05</p>
                                        </div>
                                    </li>
                                    <li class="sports-item">
                                        <div class="day">
                                            <p class="day-text">SAB</p>
                                            <p class="day-number">06</p>
                                        </div>
                                    </li>
                                    <li class="sports-item">
                                        <div class="day">
                                            <p class="day-text">DOM</p>
                                            <p class="day-number">07</p>
                                        </div>
                                    </li>
                                    <li class="sports-item">
                                        <div class="day">
                                            <p class="day-text">LUN</p>
                                            <p class="day-number">08</p>
                                        </div>
                                    </li>
                                    <li class="sports-item">
                                        <div class="day">
                                            <p class="day-text">MAR</p>
                                            <p class="day-number">09</p>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div id="sports-01" class="sports-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sports-02" class="sports-content">
                        <div class="no-gutters">
                            <div class="col-10 mx-auto">
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-container">
                                    <div class="poster">
                                        <div class="thumbnail">
                                            <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-details">
                                        <div class="d-flex info-schedule align-items-center justify-content-between">
                                            <div>
                                                <p class="schedule">10:00 - 10:30 pm</p>
                                                <p class="schedule-days">Lunes a Viernes</p>
                                            </div>
                                            <div>
                                                <button class="schedule-add" type="button">añadir <span>+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="no-gutters d-flex rating-container align-items-center justify-content-between">

                                            <div class="col-6">
                                                <p class="rating">Clasificación: A</p>
                                            </div>
                                            <div class="col-6 d-flex align-items-center justify-content-between">
                                                <p class="rating-alert">ALERTAS</p>
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Claro sports de "Ahora en tv"-->
            </div>
        </main>
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
        <?php 
                    include 'footer.php'
                ?>
    </div>

</body>

</html>