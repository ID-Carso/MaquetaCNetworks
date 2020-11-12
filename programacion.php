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
            <a href=”http://www.claronetworks.openofficedospuntocero.info/v1.2/programacion.php“ rel=”nofollow”>

 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179528937-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-179528937-1');
</script>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-5S7NP6G"></script>

    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="programation">

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
             
                <a class="sidebar-link" href="concert-channel.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Concert
                            Channel</span>
                </a>
            </div>
           
            <a class="sidebar-link" href="claro-cinema.php">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Claro Cinema</span>
                </div>
            </a>
          
            <a class="sidebar-link" href="https://nuestravision.tv">
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
            <a class="sidebar-link"  target="_blank">
                    <div class="sidebar-item sidebar-border-bottom ">
                        <span class="dropdown-p logout">Cerrar Sesión</span>
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
            include './views/partials/menu-desktop-black.php';
            include './views/partials/menu-canal.php';
            ?>
            <div class="header-slider" id="banner-programming">
            </div>
        </div>
    </header>
    <div class="pro-container">
        <main class="programacion">
            <p class="programacion-main-title">Programación</p>
            <div class="o-tv-section programming-container">
                <div class="row no-gutters">
                    <ul class="tv-list col-md-11">
                        <div class="col-md text-center no-gap border-right">
                            <li rel="claro-canal-programing" class=" active-navItem nav-li mr-3 p-3  justify-content-center" >
                               <div class=" h-image-prog d-flex align-items-center justify-content-center mx-auto">
                                <img class="claro-nav-image " src="" alt="logo-claro-canal" title="programacion-claro-canal" id="icon_canal_claro" />
                                </div>
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right">
                            <li rel="concert-channel-programing" class="nav-li ml-3 mr-3 p-3    justify-content-center" >
                               <div class=" h-image-prog d-flex align-items-center justify-content-center mx-auto">
                                    <img class="nav-image" src="" alt="logo-concert-channel" title="programacion-concert-channel" id="icon_concert_channel" />
                                </div>
                            </li>
                        </div>
                        <div class="col-md text-center no-gap">
                            <li rel="claro-cinema-programing" class="nav-li ml-3 p-3   justify-content-center" >
                               <div class=" h-image-prog d-flex align-items-center justify-content-center mx-auto">
                                 <img class="nav-image" src="" alt="logo-claro-cinema" title="programacion-claro-cinema" id="icon_claro_cinema" />
                               </div>
                            </li>
                        </div>


                    </ul>
                </div>

                <div id="claro-canal-programing" class="tv-content">
                    <div class="no-gutters" id="container-slider-claro">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month"></p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="claro-calendar col-md-10 mx-auto">
                                    <div class="programacion-slider pro-claro-slider" id="pro-claro-slider">

                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!--Programas de canal claro-->
                    <div class="claro-content"></div>
                </div>

                <div id="concert-channel-programing" class="tv-content contnt-hide" >
                    <div class="no-gutters">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month"></p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="concert-calendar col-md-10 mx-auto">
                                    <div class="programacion-slider" id="pro-concert-slider">
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="concert-content"></div>
                </div>
                <!--End Concert channel de "Ahora en tv"-->
                <!--Claro cinema de "Ahora en tv"-->
                <div id="claro-cinema-programing" class="tv-content contnt-hide">
                    <div class="no-gutters">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month"></p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="cinema-calendar col-md-10 mx-auto">
                                    <div class="programacion-slider" id="pro-cinema-slider">

                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="cinema-content"></div>
                </div>

        </main>
        <?php
        include 'advertising-section.php'
        ?>


    </div>
    <div class="programing-list-links-footer">
        <?php
        include './views/partials/list-links-footer.php';
        ?>

    </div>
    <?php
    include 'footer.php'
    ?>
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
            onReady: function () {

                var hey = 4300;
             

                socket.postMessage(hey)
            }
        });
    </script>
</body>

</html>