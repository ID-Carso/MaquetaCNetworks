<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
</head>

<body>
    <header class="claro-canal-header">
        <div class="hamburguer-menu">
        </div>

        <div class="header">
            <div class="alert-user">
            </div>
            <img src="./images/header/curva.svg" alt="" class="header-curve">
            <div class="header-slider" id="banner-claro-canal">
            </div>
        </div>
    </header>
    <main class="today">
        <section class="today-canal-claro">
            <div class="today-container">
                <div class="row no-gutters landing-header">
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
                        <img src="./images/home/tv-1.svg" alt="" class="lading-header-image-claro">
                    </div>
                    <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                        <h1 class="a-today-claro-title">hoy en <span>canal claro</span></h1>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-righ">
                        <button class="btn-claro-canal a-text-white-semibold btn-tomato">VER PROGRAMACIÓN</button>
                    </div>
                </div>

                <div class="today-videos-container">
                    <div class="section-slider today-claro-slider">
                    </div>
        </section>

        <section class="next-week-claro">
            <div class="next-week-container">


                <h1 class="a-next-claro-title">próxima semana</h1>
                <h2 class="a-next-claro-subtitle">
                    Ve un <span>adelanto</span> de la programación
                </h2>

                <div class="week-claro-video-container">
                    <video class="promo-video" playsinline autoplay muted controls loop>
                        <source src="http://www.claronetworks.openofficedospuntocero.info/video/canal-claro-promo.mp4" type="video/mp4">
                    </video>
                </div>


            </div>
        </section>
        <section class="dont-lose-claro">
            <div class="dont-lose-container">

                <h1 class="a-dontLose-claro-title">TIENES QUE VERLO</h1>
                <h2 class="a-dontLose-claro-subtitle"> ¡No te lo puedes perder! </h2>
                <div class="dontLose-video-container">
                    <div class="section-slider" id="dontLose-claro-slider">
                    </div>
                    <div>
                        <h1 class="a-dontLose-claro-title">Contenido exclusivo</h1>
                        <h2 class="a-dontLose-claro-subtitle">
                            Únete y disfruta nuestras producciones propias.
                        </h2>

                        <div class="section-slider dontLose-claro-slider" id="exlusiveContentClaroSlider">
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
                <div class="col-12">
                    <h1 class="footer-title-claro">¡síguenos!</h1>
                </div>
                <div class="social-media">
                    <div class="col ">
                        <img class="social-icon" src="./images/redes/facebook-icon-red.svg" alt="" />
                    </div>
                    <div class="col">
                        <img class="social-icon" src="./images/redes/insta-icon-red.svg" alt="" />
                    </div>
                    <div class="col">

                        <img class="social-icon" src="./images/redes/twitter-icon-red.svg" alt="" />
                    </div>
                    <div class="col">
                        <img class="social-icon" src="./images/redes/youtube-icon-red.svg" alt="" />

                    </div>
                </div>
            </div>
        </div>
        <div class="cclaro-list-links-footer">
            <?php
            include './views/partials/list-links-footer.php';
            ?>
        </div>
    </main>
    <?php
    include 'footer.php'
    ?>
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socket = new easyXDM.Socket({
            onReady: function() {

                var hey = 4300;
                console.log(hey);

                socket.postMessage(hey)
            }
        });
    </script>
</body>
<?php
include './views/partials/modal-favorites.php'
?>

<!--Modal de programa al añadir a favoritos-->
<?php
include './views/partials/modal-program.php'
?>

</html>