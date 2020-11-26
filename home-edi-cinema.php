<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
</head>

<body>
    <!--Menú para móvil -->
    <?php
    include 'menu-mobile.php';
    ?>
    <!--End menú para móvil-->
    <input type="hidden" id="actual_landing" value="home">
    <div class="hamburguer-menu">
        <div class="text-center sidebar-header">
        </div>
        <div class="sidebar-content">
            <a href="" class="sidebar-link">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <span class="dropdown-p">Inicio</span>
                </div>
            </a>
            <a href="" class="sidebar-link">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Canal Claro</span>
                </div>
            </a>
         
            <a class="sidebar-link" href="">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Concert
                        Channel</span>
                </div>
            </a>
           
            <a class="sidebar-link" href="">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Claro Cinema</span>
                </div>

            </a>

           
            <a class="sidebar-link" href="">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Nuestra
                        Visión</span>
                </div>
            </a>
            <a target="_blank" class="sidebar-link" href="">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Claro
                        Sports</span>
                </div>
            </a>
            <!--prueba sidebar-->
        </div>
        <button class="invisible-button"></button>
    </div>
    <main>
        <div class="alert-user">
        </div>
        <header class="home-header-mobile">
            <div class="header-details header-detail-margin">
                <h1 class="header-h1">
                    <span class="header-span"></span>
                </h1>
            </div>
            <div class="header-slider" id="slider-header-home">
            </div>
        </header>
        <header class="home-header">
            <div class="circle-video">
                <video preload="yes" playsinline autoplay muted loop class="home-video">
                    <source src="./video/video.mp4" type="video/mp4" class="source-video" />
                </video>
            </div>
            <div class="header">
                <img src="./images/home/american-horror.jpeg" class="background-home rellax" data-rellax="10" alt="fondo-para-header"/>
                <nav class="menu-tablet">
                    <div class="nav-content">
                        <div class="claro-logo">
                            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="fondo-para-header-tablet" />

                            <img class="logo" src="./images/home/claro-logo.svg" alt="logo-claro-networks" />
                        </div>

                        <div class="login">
                        <a href="index.php" class="login-item"><img  src="images/paises/gmt-icon.svg" alt="banderas-de-paises-por-region"
                                    width="32px"/></a>                        </div>
                    </div>
                </nav>
                <?php
                include './views/partials/menu-desktop-black-edi1.php'
                ?>
                <div class="header-details header-detail-margin col-md-6" style="margin-top: 242px;">
                    <h1 class="header-h1">
                        <span class="header-span">Descubre<br>Claro<br></span>Networks
                    </h1>
                </div>
            </div>
            <div class="d-flex justify-content-center mx-auto ">
                <div class=" d-inline-block   align-items-center mb-5">
                    <p class='a-text-bold-tealblue slider-pagination-item-home mr-2 cursor-pointer'>1 </p>
                </div>
            </div>
        </header>
        <section class="o-tv-section margin-ahora-tv">
            <h2 class="title-tv"></h2>
        </section>
        <section>
            <div class="o-tv-section mb-5 pb-5">
                <div class="row no-gutters">
                    <ul class="tv-list col-md-11">
                        <div class="col-md text-center no-gap border-right">
                            <li rel="claro-canal" class="nav-li">
                                <img class="claro-nav-image" src="" alt="logo-canal-claro" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right">
                            <li rel="concert-channel" class="nav-li">
                                <img class="nav-image concert-nav-image" src="" alt="logo-concert-channel" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap">
                            <li rel="claro-cinema" class="nav-li active-navItem">
                                <img class="nav-image cinema-nav-image" src="" alt="logo-claro-cinema" />
                            </li>
                        </div>
                    </ul>
                </div>
                <!-- CARRUSEL DE PROGRAMACION CLARO CINEMA  -->
                <div class="tv-videos-container slick-none">
                    <div id="claro-cinema" class="tv-content  border-t border-l border-r border-b position-relative p-2">
                        <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-main" type="home-claro-carrousel-main"/>
                        <div class="tv-slider today-claro-cinema-slider pointer-events-none" id="tv-cinema-slider" style="margin-bottom: 0px !important;"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="our-channels">
            <h1 class="our-channels-title">
                Nuestros Canales
            </h1>
        </div>
        <!--Sección de Canal Claro-->
        <div class="o-claro-section">
            <!--Sección Canal Claro mobile-->
            <div class="claro-canal-mobile">
                <div class="m-home-titles text-center">
                    <a href="" class="home-title-link">
                        <img src="" class="claro-image-header" alt="header-claro" >
                    </a>
                    <h2 class="a-subtitle a-claro-home-subtitle"></h2>
                </div>
                <div class="text-center">
                    <a href=""> <button class="btn-red btn-canal-claro-home">VER +</button></a>
                </div>
                <div class="">
                    <div class="section-slider claro-slider-home-prev pointer-events-none">
                    </div>
                </div>

            </div>
            <!--End Sección Canal Claro mobile-->
            <!--Sección Canal Claro tablet-->
            <div class="claro-canal-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header">
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img src="./images/home/tv-1.svg" class="claro-image-header" alt="logo-claro-canal"/>
                        </a>
                        <h2 class="a-subtitle a-claro-home-subtitle">
                            <!--LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS
                                INTERNACIONALES</span>-->

                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href=""><button class="btn-red btn-canal-claro-home">VER +</button></a>
                    </div>
                </div>
                <div class="canal-videos-container">
                    <div class="">
                        <div class="section-slider claro-slider-home-prev pointer-events-none">
                        </div>
                    </div>
                   
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                    <div>

                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End Sección Canal Claro tablet-->
            <!--Sección canal claro desktop-->
            <div class="claro-canal-desktop">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header">
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img src="./images/home/tv-1.svg" class="claro-image-header" alt="logo-claro-canal"/>
                        </a>
                        <h2 class="a-subtitle a-claro-home-subtitle">

                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href=""> <button class="btn-red btn-canal-claro-home"></button></a>
                    </div>
                </div>
                <div class="">
                    <div class="section-slider claro-slider-home-prev pointer-events-none">
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                    <div>

                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End seccción canal claro desktop-->
        </div>
        <!--Fin sección de Canal Claro-->
        <!--Sección de Concert Channel-->
        <div class="o-concert-section">
            <!--Versión para mobile-->
            <div class="concert-channel-mobile">
                <div class="m-home-titles text-center">
                    <a href="" class="home-title-link">
                        <img src="./images/home/concert-home-img.svg" class="concerthome-image-header" alt="logo-concert-channel"/>
                    </a>
                    <h2 class="a-concert-channel-subtitle a-concert-home-subtitle">
                        <!--CONCIERTOS, ENTREVISTAS<br><span>Y MUCHO MÁS</span>-->

                    </h2>
                </div>
                <div class="text-center">
                    <a href=""><button class="btn-pink button-concert-home"></button></a>
                </div>
                <div class="section-slider concert-home-slider pointer-events-none">
                </div>
            </div>

            <!--End Versión mobile-->
            <!--Versión para tablet-->
            <div class="concert-channel-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img src="./images/home/concert-home-img.svg" class="concerthome-image-header" alt="logo-concert-channel"/>
                        </a>
                        <p class="a-concert-subtitle concert-first-subtitle a-concert-home-subtitle"></p>
                        <!--<p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>-->
                    </div>
                    <div class="m-see-more">
                        <a href=""><button class="btn-pink button-concert-home"></button></a>
                    </div>
                </div>
                <div class="home-concert-videos-container">
                    <div class="section-slider concert-home-slider pointer-events-none">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
                    <div>

                    </div>
                    <div>
                        <p class="horario-text text-white">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>

            <!--End Versión tablet-->
            <!--Concert channel desktop-->
            <div class="concert-channel-desktop">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img class="concerthome-image-header" src="./images/home/concert-home-img.svg" alt="logo-concert-channel"/>
                        </a>
                        <h2 class="text-white a-subtitle a-concert-home-subtitle"></h2>
                    </div>
                    <div class="m-see-more">
                        <a href=""><button class="btn-pink button-concert-home">
                                <span></span>
                            </button></a>
                    </div>
                </div>
                <div class="section-slider concert-home-slider pointer-events-none">
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
                    <div>

                    </div>
                    <div>
                        <p class="horario-text text-white">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End Concert channel desktop-->
        </div>
        <!--Fin sección de Concert Channel-->
        <!--Sección de Cinema Claro-->
        <div class="o-cinema-section">
            <!--Cinema claro versión mobile-->
            <div class="cinema-claro-mobile">
                <div class="m-home-titles text-center border-t border-l border-r border-b position-relative p-2">
                    <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-main" type="home-claro-carrousel-main"/>

                    <a href="" class="home-title-link">
                        <img src="./images/home/tv-3.svg" class="cinemahome-image-header" alt="logo-claro-cinema"/>
                    </a>

                    <h2 class="a-claro-cinema-subtitle  a-cinema-home-subtitle">
                        <!--Las mejores <span>Películas Mexicanas</span>-->
                        <!--LOS ÍDOLOS QUE MÉXICO<br><span>LE DIO AL CINE</span>-->
                    </h2>
                </div>
                <div class="text-center">
                    <a href=""><button class="btn-red button-cinema-home">VER +</button></a>
                </div>
                <div class="section-slider cinema-home-slider  border-t border-l border-r border-b position-relative p-2"> <!--check-->
                    <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-home-cinema" type="cinema-home-slider"/>
                </div>
            </div>
            <!--End Cinema Claro mobile-->
            <!--Cinema claro tablet-->
            <div class="cinema-claro-tablet">

                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header  border-t border-l border-r border-b position-relative p-2">
                    <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home" type="cinema-home-header"/>
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img class="cinemahome-image-header" src="./images/home/cinema-home-img.svg" alt="logo-claro-cinema">
                        </a>
                        <h2 class="a-subtitle a-cinema-home-subtitle">
                            LOS ÍDOLOS QUE MÉXICO<span>LE DIO AL CINE</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href=""><button class="btn-red  button-cinema-home">VER +</button></a>
                    </div>
                </div>
                <div class="d-flex no-gutters">
                    <div class="col-md-5 col-lg-4 d-flex align-items-center">
                        <img src="./images/home/claro-cinema-background.png" alt="fondo-de-seccion-de-claro-cinema" class="cinema-image"/>
                    </div>
                    <div class="col-md-7 col-lg-8  border-t border-l border-r border-b position-relative p-2">
                        <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-home-cinema" type="cinema-home-slider"/>
                        <div class="cinema-home-slider pointer-events-none">
                        </div>
                    </div>
                </div>
              
                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
                    <div>

                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End cinema claro tablet-->
            <!--Cinema claro desktop-->
            <div class="cinema-claro-desktop">
                <!--<div class="black-line"></div>-->
                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header  border-t border-l border-r border-b position-relative p-2 mt-2 mb-2">
                    <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home" type="cinema-home-header"/>
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img class="cinemahome-image-header" src="./images/home/cinema-home-img.svg" alt="logo-claro-cinema"/>
                        </a>
                        <h2 class="a-subtitle a-cinema-home-subtitle">
                            <!--LOS ÍDOLOS QUE MÉXICO<span>LE DIO AL CINE</span>-->
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href=""><button class="btn-red button-cinema-home">VER +</button></a>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-4 col-xl-3">
                        <img src="./images/home/claro-cinema-background.png" alt="fondo-de-claro-cinema" class="cinema-image"/>
                    </div>
                    <div class="col-md-8 col-xl-9  border-t border-l border-r border-b position-relative p-2">
                        <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-home-cinema" type="cinema-home-slider"/>
                        <div class="cinema-home-slider pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
                    <div>

                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End cinema claro desktop-->
        </div>
        <!--Fin sección de Cinema Claro-->

        <!--Sección de anuncio-->
        <?php
        // include 'advertising-section.php'
        ?>
        <div class="home-list-links-footer">
            <?php
            // include './views/partials/list-links-footer.php';
            ?>
        </div>



        <!--Fin sección de anuncio-->
        <?php
        //  include 'footer.php'
        ?>

        <!-- Modal -->
        <?php
        include './views/partials/modal-favorites.php'
        ?>

        <!--Modal de programa al añadir a favoritos-->
        <?php
        include './views/partials/modal-program.php'
        ?>
    </main>
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        var socketHome = new easyXDM.Socket({
            onReady: function() {

                var hey = 2700;
            

                socketHome.postMessage(hey)
            }
        });
        $(".home-header").on("click", ".slider-pagination-item-home", function() {
            let type = "slider-pagination";
            let data = {

                type: type
            }
           
            var json = JSON.stringify(data);
            socketHome.postMessage(json);
        });
        $(".tv-content").on("click", ".pencil-carrusel-main", function() {
            let data = {
                type: $(this).attr("type")

            }
            
            var json = JSON.stringify(data);
            socketHome.postMessage(json);
        });
        $(".home-section-header").on("click", ".pencil-header-home", function() {
            let data = {
                type: $(this).attr("type")

            }
           
            var json = JSON.stringify(data);
            socketHome.postMessage(json);
        });
        $(".pencil-carrusel-home-cinema").click(function() {
            let data = {
                type: $(this).attr("type")

            }
          
            var json = JSON.stringify(data);
            socketHome.postMessage(json);
        });
    </script>
</body>

</html>