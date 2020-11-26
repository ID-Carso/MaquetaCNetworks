<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="programation">

</head>

<body>
    <header class="programacion-header">
        <div class="hamburguer-menu pointer-events-none">
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
                        <span class="dropdown-p">Concert
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

        <div class="header pointer-events-none">
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
                            <li rel="claro-canal-programing" class=" nav-li  pointer-events-none cursor-none">
                                <img class="claro-nav-image" src="" alt="logo-claro-canal" id="icon_canal_claro" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right">
                            <li rel="concert-channel-programing" class="navbar-progra-item-container active-navItem nav-li mr-3 ml-3 p-3">
                                <img class="nav-image" src="" alt="logo-concert-channel" id="icon_concert_channel" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap">
                            <li rel="claro-cinema-programing" class="nav-li  pointer-events-none cursor-none">
                                <img class="nav-image" src="" alt="logo-claro-cinema" id="icon_claro_cinema" />
                            </li>
                        </div>


                    </ul>
                </div>

                <div id="claro-canal-programing" class="tv-content contnt-hide">
                    <div class="no-gutters" id="container-slider-claro">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month"></p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="claro-calendar-backoffie col-md-10 mx-auto">
                                    <div class="programacion-slider pro-claro-slider" id="pro-claro-slider">

                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!--Programas de canal claro-->
                    <div class="claro-content-prev"></div>
                </div>

                <div id="concert-channel-programing" class="tv-content ">
                    <div class="no-gutters">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month"></p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="concert-calendar-backoffice col-md-10 mx-auto">
                                    <div class="programacion-slider" id="pro-concert-slider">
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="concert-content-prev"></div>
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
                                <ul class="cinema-calendar-backoffice col-md-10 mx-auto">
                                    <div class="programacion-slider" id="pro-cinema-slider">

                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="cinema-content-prev"></div>
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
            onReady: function() {

                var hey = 4300;
             

                socket.postMessage(hey)
            }
        });
    </script>
</body>

</html>