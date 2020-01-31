<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
</head>

<body>
    <header class="programacion-header">
        <div class="hamburguer-menu">
            <div class="text-center sidebar-header">

            </div>
            <a href="home.php" class="sidebar-link">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <span class="dropdown-p">Inicio</span>
                </div>
            </a>
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
                </a>
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
            <div class="sidebar-item sidebar-border-bottom">
                <span class="dropdown-p active-sidebar-item">Programación</span>
            </div>
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
                        <a href="login.php" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                        <a href="paises.php" class="login-item"><img class="login-country" alt="" /></a>
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
    <div class="pro-container">
        <main class="programacion">
            <p class="programacion-main-title">Programación</p>
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

                <div id="claro-canal" class="tv-content">
                    <div class="no-gutters">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month">Octubre 2019</p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="claro-calendar col-md-10 mx-auto">
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
                    </div>


                    <div id="claro-01" class="claro-content">
                        <div class="no-gutters">
                            <div class="">

                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="claro-02" class="claro-content">
                        <div class="no-gutters">
                            <div class="">
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="concert-channel" class="tv-content">
                    <div class="no-gutters">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month">Octubre 2019</p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="concert-calendar col-md-10 mx-auto">
                                    <div class="programacion-slider" id="pro-claro-slider">
                                        <li rel="concert-01" class="concert-item concert-active">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">01</p>
                                            </div>
                                        </li>
                                        <li rel="concert-02" class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">02</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">03</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">04</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">05</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">06</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">07</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">08</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">09</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">10</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">11</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">12</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">13</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">14</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">15</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">DON</p>
                                                <p class="day-number">16</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">17</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">18</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MIER/p>
                                                    <p class="day-number">19</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">20</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">21</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">22</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">23</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">24</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">25</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">26</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">27</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">28</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">29</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">30</p>
                                            </div>
                                        </li>
                                        <li class="concert-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">31</p>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>


                    <div id="concert-01" class="concert-content">
                        <div class="no-gutters">
                            <div class="">
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="concert-02" class="concert-content">
                        <div class="no-gutters">
                            <div class="">
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month">Octubre 2019</p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="cinema-calendar col-md-10 mx-auto">
                                    <div class="programacion-slider" id="pro-cinema-slider">
                                        <li rel="cinema-01" class="cinema-item cinema-active">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">01</p>
                                            </div>
                                        </li>
                                        <li rel="cinema-02" class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">02</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">03</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">04</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">05</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">06</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">07</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">08</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">09</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">10</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">11</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">12</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">13</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">14</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">15</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">DON</p>
                                                <p class="day-number">16</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">17</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">18</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MIER/p>
                                                    <p class="day-number">19</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">20</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">21</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">22</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">23</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">24</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">25</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">26</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">27</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">28</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">29</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">30</p>
                                            </div>
                                        </li>
                                        <li class="cinema-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">31</p>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div id="cinema-01" class="cinema-content">
                        <div class="no-gutters">
                            <div class="">
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="cinema-02" class="cinema-content">
                        <div class="no-gutters">
                            <div class="">
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month">Octubre 2019</p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="vision-calendar col-md-10 mx-auto">
                                    <div class="programacion-slider" id="pro-cinema-slider">
                                        <li rel="vision-01" class="vision-item vision-active">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">01</p>
                                            </div>
                                        </li>
                                        <li rel="vision-02" class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">02</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">03</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">04</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">05</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">06</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">07</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">08</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">09</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">10</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">11</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">12</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">13</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">14</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">15</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">DON</p>
                                                <p class="day-number">16</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">17</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">18</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MIER/p>
                                                    <p class="day-number">19</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">20</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">21</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">22</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">23</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">24</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MAR</p>
                                                <p class="day-number">25</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">MIER</p>
                                                <p class="day-number">26</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">JUE</p>
                                                <p class="day-number">27</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">VIE</p>
                                                <p class="day-number">28</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">SAB</p>
                                                <p class="day-number">29</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">DOM</p>
                                                <p class="day-number">30</p>
                                            </div>
                                        </li>
                                        <li class="vision-item">
                                            <div class="day">
                                                <p class="day-text">LUN</p>
                                                <p class="day-number">31</p>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div id="vision-01" class="vision-content">
                        <div class="no-gutters">
                            <div class="">
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vision-02" class="vision-content">
                        <div class="no-gutters">
                            <div class="">
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="schedule-container">
                                    <p class="schedule-title">Coldplay</p>
                                    <div class="schedule-item-body">
                                        <div class="schedule-poster">
                                            <div class="poster">
                                                <div class="thumbnail-prog">
                                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="schedule-details">
                                            <div class="schedule-details-header">
                                                <div>
                                                    <p class="schedule">10:00 - 10:30 pm</p>
                                                    <p class="rating">Clasificación: A</p>
                                                </div>
                                                <div>
                                                    <button class="schedule-add" type="button">
                                                        <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua.
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
                        <div class="no-gutters">
                            <div class="programacion-date-container">
                                <div class="no-gutters">
                                    <div class="col-md-11 col-lg-12 mx-auto">
                                        <p class="month">Octubre 2019</p>
                                    </div>
                                </div>

                                <div class="no-gutters">
                                    <ul class="sports-calendar col-md-10 mx-auto">
                                        <div class="programacion-slider" id="pro-cinema-slider">
                                            <li rel="sports-01" class="sports-item sports-active">
                                                <div class="day">
                                                    <p class="day-text">MAR</p>
                                                    <p class="day-number">01</p>
                                                </div>
                                            </li>
                                            <li rel="sports-02" class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MIER</p>
                                                    <p class="day-number">02</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">JUE</p>
                                                    <p class="day-number">03</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">VIE</p>
                                                    <p class="day-number">04</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">SAB</p>
                                                    <p class="day-number">05</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">DOM</p>
                                                    <p class="day-number">06</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">LUN</p>
                                                    <p class="day-number">07</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MAR</p>
                                                    <p class="day-number">08</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MIER</p>
                                                    <p class="day-number">09</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">JUE</p>
                                                    <p class="day-number">10</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">VIE</p>
                                                    <p class="day-number">11</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MIER</p>
                                                    <p class="day-number">12</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">JUE</p>
                                                    <p class="day-number">13</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">VIE</p>
                                                    <p class="day-number">14</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">SAB</p>
                                                    <p class="day-number">15</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">DON</p>
                                                    <p class="day-number">16</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">LUN</p>
                                                    <p class="day-number">17</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MAR</p>
                                                    <p class="day-number">18</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MIER/p>
                                                        <p class="day-number">19</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">JUE</p>
                                                    <p class="day-number">20</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">VIE</p>
                                                    <p class="day-number">21</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">SAB</p>
                                                    <p class="day-number">22</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">DOM</p>
                                                    <p class="day-number">23</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">LUN</p>
                                                    <p class="day-number">24</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MAR</p>
                                                    <p class="day-number">25</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">MIER</p>
                                                    <p class="day-number">26</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">JUE</p>
                                                    <p class="day-number">27</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">VIE</p>
                                                    <p class="day-number">28</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">SAB</p>
                                                    <p class="day-number">29</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">DOM</p>
                                                    <p class="day-number">30</p>
                                                </div>
                                            </li>
                                            <li class="sports-item">
                                                <div class="day">
                                                    <p class="day-text">LUN</p>
                                                    <p class="day-number">31</p>
                                                </div>
                                            </li>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div id="sports-01" class="sports-content">
                            <div class="no-gutters">
                                <div class="">
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="sports-02" class="sports-content">
                            <div class="no-gutters">
                                <div class="">
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="schedule-container">
                                        <p class="schedule-title">Coldplay</p>
                                        <div class="schedule-item-body">
                                            <div class="schedule-poster">
                                                <div class="poster">
                                                    <div class="thumbnail-prog">
                                                        <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-details">
                                                <div class="schedule-details-header">
                                                    <div>
                                                        <p class="schedule">10:00 - 10:30 pm</p>
                                                        <p class="rating">Clasificación: A</p>
                                                    </div>
                                                    <div>
                                                        <button class="schedule-add" type="button">
                                                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="schedule-description">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua.
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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

    </div>
    <?php
    include 'footer.php'
    ?>
</body>

</html>