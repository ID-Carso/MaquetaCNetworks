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
                <a target="_blank" class="sidebar-link" href="https://nuestravision.tv">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Nuestra
                            Visión</span>
                    </div>
                </a>
                <a target="_blank" class="sidebar-link" href="https://www.marca.com/claro-mx/">
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
        <div class="synopsis-content col-12">
            <div class="no-synopsis-container text-center">
                <img src="./images/sinopsis/helmet.png" alt="" class="helmet-image">
                <h3 class="no-synopsis-title a-text-white-monblack">SINÓPSIS EN <span>CONSTRUCCIÓN</span></h3>
                <p class="no-synopsis-text a-text-white-semibold">La sinópsis de este programa no está disponible aún</p>
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
    </main>

</body>

</html>