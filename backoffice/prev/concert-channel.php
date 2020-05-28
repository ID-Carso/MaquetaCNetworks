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
                <a class="sidebar-link" href="https://nuestravision.tv" target="_blank">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Nuestra
                            Visión</span>
                    </div>
                </a>
                <a class="sidebar-link" href="https://www.marca.com/claro-mx/" target="_blank">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro
                            Sports</span>
                    </div>
                </a>
                <!--<a class="sidebar-link" href="programacion.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Programación</span>
                    </div>
                </a>-->
                <!--prueba sidebar-->
            </div>
            <button class="invisible-button"></button>
        </div>
        <div class="header">
            <div class="alert-user">
            </div>
            <!--Menú para móvil -->
            <?php
            include 'menu-mobile.php';
            ?>
            <!--End menú para móvil-->
            <div class="menu-tablet-container">
                <?php
                include './views/partials/menu-tablet-white.php';
                ?>
            </div>
            <?php
            include './views/partials/menu-desktop-black.php'
            ?>
            <div class="header-slider" id="banner-concert-channel">
            </div>
        </div>
    </header>
    <div class="concert-container">
        <section class="today-concert-channel">
            <div class="row no-gutters landing-header">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
                    <img src="./images/home/concert-home-img.svg" alt="" class="lading-header-image-concert">
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                    <h1 class="today-concert-title">hoy en <span>concert channel</span></h1>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-right">
                    <a href="programacion.php"><button class="btn-magenta a-text-white-semibold btn-concert-channel">VER PROGRAMACIÓN</button></a>
                </div>
            </div>
            <div class="today-concert-videos-container">
                <div class="section-slider concert-slider today-concert-channel-slider">

                </div>

        </section>
        <section class="next-week-concert">
            <div class="concert-container-header">
                <h1 class="concert-title">próxima semana</h1>
                <h2 class="concert-subtitle">ve un <span>adelanto</span> de la programación</h2>
            </div>
            <div class="week-videos-container">
                <video class="promo-video" autoplay muted controls loop>
                    <source src="http://www.claronetworks.openofficedospuntocero.info/video/concert-channel-promo.mp4" type="video/mp4">
                </video>
                <!--<div class="poster">
                    <div class="poster-body">
                        <div class="showtime-container justify-content-end">
                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                        </div>
                        <div class="thumbnail">
                        </div>
                    </div>
                </div>-->
            </div>

        </section>
        <section class="concerts">
            <div class="concert-container-header">

                <h1 class="concert-title">imprescindibles</h1>
                <h2 class="concert-subtitle">Los artistas que sonarán esta semana</h2>
            </div>
            <div class="concerts-videos-container">
                <div class="section-slider concert-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/01-LIVE-FROM-ABBEY.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        LIVE FROM ABBEY ROAD
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/02-QUEEN.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        QUEEN
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/07-SEPULTURA.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        SEPULTURA
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/05-DOORS.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        THE DOORS
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
                <h1 class="concert-title">Por si te lo perdiste</h1>
                <h2 class="concert-subtitle">Conoce algunas de nuestras leyendas</h2>
            </div>
            <div class="interviews-videos-container">
                <div class="section-slider concert-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/04-RED-HOT-CHILI.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        RED HOT CHILI PEPPERS
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/08-BILLIE-EILISH.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        BILLIE EILISH
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/06-RIANNA.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        RIHANNA
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-end">

                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                                <img src="http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/section-landing/03-BEYONCE.jpg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        BEYONCÉ
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
            </div>
            <div class="social-media">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="social-item">
                        <a href="https://www.facebook.com/concertchannel/" target="_blank">
                            <img class="social-icon" src="./images/redes/facebook-icon-green.svg" alt="">
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="https://twitter.com/Concert_Channel" target="_blank">
                            <img class="social-icon" src="./images/redes/twitter-icon-green.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cconcert-list-links-footer">
            <?php
            include './views/partials/list-links-footer.php';
            ?>
        </div>
        <footer>
            <?php
            include 'footer.php'
            ?>
        </footer>

    </div>
    <?php
    include './views/partials/modal-favorites.php'
    ?>

    <!--Modal de programa al añadir a favoritos-->
    <?php
    include './views/partials/modal-program.php'
    ?>

</body>

</html>