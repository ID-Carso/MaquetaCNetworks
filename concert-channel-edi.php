<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <script src="./js/backoffice/main.js?t=<?php echo time(); ?>" defer></script>
    <input type="hidden" id="actual_landing" value="concert_channel">
</head>

<body>
    <header class="concert-channel-header">
        <div class="hamburguer-menu">
            <div class="text-center sidebar-header">

            </div>
            <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                <a href="" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
            </div>
            <div class="sidebar-content">
                <a href="" class="sidebar-link">
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
                <a class="sidebar-link" href="">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro Cinema</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
                <a class="sidebar-link" href="" target="_blank">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Nuestra
                            Visión</span>
                    </div>
                </a>
                <a class="sidebar-link" href="" target="_blank">
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
            <div class="header-slider-cinem" id="banner-concert-channel">
            </div>
            <div class="d-flex position-absolute programming-dots space-do">
                <div class=" d-inline-block position-relative programming-slider-dots align-items-center">
                </div>
                <img src="./images/General/plus.svg" alt="" class="cursor-pointer slider-pagination-add mr-3"
                    style="width:42px">
            </div>

        </div>
    </header>
    <div class="concert-container">
        <section class="today-concert-channel pt-3">
            <div class="row no-gutters mb-3 p-3 landing-header position-relative border-t border-l border-r border-b">
                <img src="./images/General/pencil.svg" alt="" class="pencil pencil-concert"
                    type="header-landing-concert">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
                    <img src="./images/home/concert-home-img.svg" alt="" class="lading-header-image-concert"
                        id="icon_concert_channel">

                </div>
                <div class="col-12 col-md-5 col-lg-5 col-xl-5 ">
                    <h1 class="today-concert-title">hoy en <span>concert channel</span></h1>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-right"
                    id="btn-concert-channel">
                    <a href="">
                        <button class="m-3 btn-magenta a-text-white-semibold btn-concert-channel">VER
                            PROGRAMACIÓN</button>
                    </a>
                </div>
            </div>
            <div class="today-concert-videos-container position-relative border-t border-l border-r border-b">
                <img src="./images/General/pencil.svg" alt="" class="pencil pencil-concert pencil-slider"
                    type="current-programming-concert">
                <div class="section-slider p-3 concert-slider today-concert-slider-edit">
                </div>
        </section>
        <section class="next-week-concert">
            <div
                class="concert-container-header mb-3  d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">
                <img src="./images/General/pencil.svg" alt="" class="pencil pencil-header" type="pencil-header">
                <h1 class="p-2 concert-title" id="a-next-concert-title"></h1>
                <h2 class="p-2 concert-subtitle" id="a-next-concert-subtitle"></h2>

            </div>
            <div class="week-videos-container">
                <div class=" p-3 border-t border-l border-r border-b position-relative">
                    <img src="./images/General/pencil.svg" alt="" class="pencil" type="pencil-video">
                    <video class="promo-video" autoplay muted controls loop>

                        <source
                            src="http://www.claronetworks.openofficedospuntocero.info/video/concert-channel-promo.mp4"
                            type="video/mp4">
                    </video>
                </div>
            </div>

        </section>
        <section class="concerts">
            <div
                class="concert-container-header  p-2 mb-3 d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">
                <h1 class="concert-title" id="carrusel_1_title"></h1>
                <img src="./images/General/pencil.svg" alt="" class="pencil pencil-header1" type="pencil-header1">
                <h2 class="p-2 concert-subtitle" id="carrusel_1_subtitle"></h2>

            </div>
            <div class="concerts-videos-container position-relative border-t border-l border-r border-b p-3">
                <img src="./images/General/pencil.svg" alt="" class="pencil pencil-carrusel1" type="pencil-carrusel1">
                <div class="concerts-videos-container">
                    <div class="section-slider concert-slider" id="concert_channel_carrusel_1"></div>
                </div>
            </div>

        </section>
        <section class="concert-interviews">
            <div
                class="concert-container-header  header2 p-2 mb-3 d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">
                <img src=" ./images/General/pencil.svg" alt="" class="pencil pencil-header2" type="header2">
                <h1 class="concert-title" id="carrusel_2_title"></h1>

                <h2 class="p-2 concert-subtitle" id="carrusel_2_subtitle"></h2>
            </div>
            <div class="interviews-videos-container position-relative border-t border-l border-r border-b p-3">
                <img src=" ./images/General/pencil.svg" alt="" class="pencil pencil-carrusel2" type="pencil-carrusel2">
                <div class="interviews-videos-container">
                    <div class="section-slider concert-slider" id="concert_channel_carrusel_2"></div>
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
                        <a href="" target="_blank">
                            <img class="social-icon" src="./images/redes/facebook-icon-green.svg" alt="">
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="" target="_blank">
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
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socketConcert = new easyXDM.Socket({
            onReady: function () {
                var hey = 3700;
                socketConcert.postMessage(hey)
            }
        });
        $(".concert-container").on("click", ".pencil-concert", function () {

            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);

        });
        $(".today-concert-slider-edit").on("click", ".pencil-slider", function () {

            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);
        });
        $(".week-videos-container").on("click", ".pencil", function () {

            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);
        });


        $(".concert-container-header").on("click", ".pencil-header", function () {
            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);
        });
        $(".concert-container-header").on("click", ".pencil-header1", function () {
            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);
        });
        $(".concert-container-header").on("click", ".pencil-header2", function () {
            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);
        });
        $(".concerts-videos-container").on("click", ".pencil-carrusel1", function () {
            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);
        });
        $(".interviews-videos-container").on("click", ".pencil-carrusel2", function () {

            let data = {
                type: $(this).attr("type")

            }
            console.log(data);
            var json = JSON.stringify(data);
            socketConcert.postMessage(json);
        });
    </script>
</body>


</html>