<?php

session_start();

if($_SESSION["country"] != 1){
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    	<!--metadato de indexación-->

<link rel=”canonical” href=”http://www.claronetworks.openofficedospuntocero.info/v1.2/concert-channel.php”/>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179528937-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-179528937-1');
</script>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-5S7NP6G"></script>

    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="concert_channel">
    <!--Parte de Rich Snippets-->
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "author": "Claro Networks",
  "contentRating": "Everyone",
  "image": "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/home/concert-home-img.svg",
  "name": "Concert Channel",
  "description": "La música es el idioma universal, los conciertos se convierten en una hermandad de fanáticos, y Concert Channel te lleva a la primera fila de los mejores. En este canal podrás encontrar ejecuciones virtuosas, eventos emblemáticos, festivales que no te puedes perder e incluso, podrás descubrir a tus nuevos ídolos. Súbele el volumen a la música para disfrutar los eventos como si estuvieras en vivo."
}
</script>

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
              
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p active-sidebar-item">Concert
                        Channel</span>
                </div>
               
                <a class="sidebar-link" href="claro-cinema.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro Cinema</span>
                    </div>
                </a>
               
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
            //menu nuevo y el anterior
            include './views/partials/menu-desktop-black.php';
            include './views/partials/menu-canal.php';
            ?>
            <div class="header-slider" id="banner-concert-channel">
            </div>
        </div>
    </header>
    <div class="concert-container">
        <section class="today-concert-channel">
            <div class="row no-gutters landing-header">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
                <div class="h-image d-flex align-items-center">
                    <img src="./images/home/concert-home-img.svg" alt="logo-concert-channel" class="lading-header-image-concert object-cover"
                        id="icon_concert_channel"/>
                </div>   
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                    <h1 class="today-concert-title">hoy en <span>concert channel</span></h1>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-right"
                    id="btn-concert-channel">
                    <a href="programacion-concert.php"><button
                            class="btn-magenta a-text-white-semibold btn-concert-channel" >VER PROGRAMACIÓN</button></a>
                </div>
            </div>
            <div class="today-concert-videos-container">
                <div class="section-slider concert-slider today-concert-channel-slider">

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
        <?php
        include 'advertising-section.php'
        ?>
        <div class="">
            <div class="row no-gutters">
                <div class="col-10 mx-auto">
                    <h1 class="footer-title" id="redes_concert_channel_title">¡síguenos!</h1>
                </div>
            </div>
            <div class="social-media">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="social-item">
                        <a href="https://www.facebook.com/concertchannel/" target="_blank"
                            id="facebook_concert_channel_url">
                            <img class="social-icon" src="./images/redes/facebook-icon-green.svg" alt="icono-facebook"
                                id="facebook_concert_channel_icon"/>
                        </a>
                    </div>
                    <div class="social-item">
                        <a href="https://twitter.com/Concert_Channel" target="_blank" id="twitter_concert_channel_url">
                            <img class="social-icon" src="./images/redes/twitter-icon-green.svg" alt="icono-twitter"
                                id="twitter_concert_channel_icon"/>
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
        var socket = new easyXDM.Socket({
            onReady: function() {

                var hey = 2180;
                console.log(hey);

                socket.postMessage(hey)
            }
        });
    </script>

</body>

</html>