<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="concert_channel">

</head>

<body>
    <header class="concert-channel-header">
        <div class="hamburguer-menu">
            <div class="text-center sidebar-header pointer-events-none ">

            </div>
            <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
               <span class="dropdown-p">Inicio</span>
            </div>
            <div class="sidebar-content">
               
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Canal Claro</span>
                    </div>
                
               
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p active-sidebar-item">Concert
                        Channel</span>
                </div>
               
               
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro Cinema</span>
                    </div>
              
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Nuestra
                            Visión</span>
                    </div>
                
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro
                            Sports</span>
                    </div>
               
                    <div class="sidebar-item sidebar-border-bottom ">
                        <span class="dropdown-p logout pointer-events-none">Cerrar Sesión</span>
                    </div>
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
      include './views/partials/menu-desktop-black-edi.php'
      ?>
            <div class="header-slider" id="banner-concert-channel">
            </div>
        </div>
    </header>
    <div class="concert-container">
        <section class="today-concert-channel slick-none">
            <div class="row no-gutters landing-header d-flex justify-content-between pr-cen">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left pt-3 pb-3">
                    <img src="./images/home/concert-home-img.svg" alt="logo-concert-channel" class="lading-header-image-concert"
                        id="icon_concert_channel"/>
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-xl-5 pr-rem-concert pl-rem-concert">
                    <h1 class="today-concert-title">hoy en <span>concert channel</span></h1>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-right"
                    id="btn-concert-channel">
                    <a href="programacion-concert.php"><button
                            class="btn-magenta a-text-white-semibold btn-concert-channel">VER PROGRAMACIÓN</button></a>
                </div>
            </div>
            <div class="today-concert-videos-container">
                <div class="section-slider concert-slider today-concert-channel-slider-prev">

                </div>
</div>

        </section>
        <section class="next-week-concert">
            <div class="concert-container-header">
                <h1 class="concert-title" id="a-next-concert-title"></h1>
                <h2 class="concert-subtitle" id="a-next-concert-subtitle"></h2>
            </div>
            <div class="week-videos-container">
                <video class="promo-video" playsinline autoplay muted controls loop>
                    <source src="http://www.claronetworks.openofficedospuntocero.info/video/concert-channel-promo.mp4"
                        type="video/mp4">
                </video>
            </div>

        </section>
        <section class="concerts">
            <div class="concert-container-header">

                <h1 class="concert-title" id="carrusel_1_title"></h1>
                <h2 class="concert-subtitle" id="carrusel_1_subtitle"></h2>
            </div>
            <div class="concerts-videos-container">
                <div class="section-slider concert-slider" id="concert_channel_carrusel_1"></div>
            </div>

        </section>
        <section class="concert-interviews">
            <div class="concert-container-header">
                <h1 class="concert-title" id="carrusel_2_title"></h1>
                <h2 class="concert-subtitle" id="carrusel_2_subtitle"></h2>
            </div>
            <div class="interviews-videos-container">
                <div class="section-slider concert-slider" id="concert_channel_carrusel_2"></div>
            </div>

        </section>
       
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
        var socket = new easyXDM.Socket({
            onReady: function() {

                var hey = 2180;
              

                socket.postMessage(hey)
            }
        });
    </script>
</body>

</html>