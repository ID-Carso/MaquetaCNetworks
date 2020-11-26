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
        <div class="text-center sidebar-header pointer-events-none">
        </div>
        <div class="sidebar-content">
          
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <span class="dropdown-p">Inicio</span>
                </div>
            
            
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
                        <span class="dropdown-p ">Cerrar Sesión</span>
                    </div>
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

                <img src="./images/home/american-horror.jpeg" class="background-home rellax" data-rellax="10" alt="header-desktop"/>
                <nav class="menu-tablet">
                    <div class="nav-content">
                        <div class="claro-logo">
                            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="header-tablet" />

                            <img class="logo" src="./images/home/claro-logo.svg"  alt="logo-claro-networks" />
                        </div>

                        <div class="login">
                        <a href="index.php" class="login-item"><img  src="images/paises/gmt-icon.svg" alt="banderas-paises-por-region"
                                    width="32px"/></a>
                        </div>
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

                <div class="row no-gutters border-t border-l border-r border-b position-relative p-3 mb-3 mx-auto col-8">
                    <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-logos-home" type="home-logos"/>
                    <ul class="tv-list col-md-12 mb-0">
                        <div class="col-md text-center no-gap border-right d-flex justify-content-center pr-3">
                            <li rel="claro-canal" class="active-navItems navs-li navbar-progra-item-container thumbnail-image-program p-2"      style="width: 200px !important;">
                                <img class="claro-nav-image claro-nav-image thumbnail-image-program" src="" alt="logo-canal-claro" title="programacion-de-canal-claro" id="icon_canal_claro_edi"/>
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right d-flex justify-content-center pr-3 pl-3">
                            <li rel="concert-channel" class="navs-li p-2"  style="width: 200px !important;">
                                <img class="nav-image concert-nav-image claro-nav-image thumbnail-image-program" src="" alt="logo-concert-channel" title="programacion-de-concert-channel" id="icon_concert_channel_edi"/>
                            </li>
                        </div>
                        <div class="col-md text-center no-gap d-flex justify-content-center pl-3">
                            <li rel="claro-cinema" class="navs-li p-2"  style="width: 200px !important;">
                                <img class="nav-image cinema-nav-image claro-nav-image thumbnail-image-program" src="" alt="logo-claro-cinema" title="programacion-de-claro-cinema"  id="icon_claro_cinema_edi"/>
                            </li>
                        </div>

                    </ul>
                </div>
                <div class="tv-videos-container slick-none">
                    <div id="claro-canal" class="tv-content  border-t border-l border-r border-b position-relative p-2">
                    <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-carrusel-main" type="home-carrousel-main"/>
           
                        <div class="tv-slider today-claro-slider pointer-events-none " id="tv-claro-slider"style="margin-bottom: 0px !important;">
                     
                           
                    </div>
                    <!--Concert channel de "Ahora en tv"-->
                    <div id="concert-channel" class="tv-content contnt-hide slick-none">
                        <div class="tv-slider today-concert-channel-slider" id="tv-concert-slider">
                        </div>
                    </div>
                    <!--End Concert channel de "Ahora en tv"-->
                    <!--Claro cinema de "Ahora en tv"-->
                    <div id="claro-cinema" class="tv-content contnt-hide slick-none">
                        <div class="tv-slider today-claro-cinema-slider" id="tv-cinema-slider">
                        </div>
                    </div>

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
                <div class="m-home-titles text-center  position-relative border-t border-l border-r border-b mb-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-claro" type="claro-home-header"/>
                    <a href="" class="home-title-link">
                        <img src="" class="claro-image-header" alt="logo-claro-networks"/>
                    </a>
                    <h2 class="a-subtitle a-claro-home-subtitle">
                        <!--LO MEJOR EN SERIES Y <br><span>PELÍCULAS INTERNACIONALES</span>-->

                    </h2>
                </div>
                <div class="text-center">
                    <a href=""> <button class="btn-red btn-canal-claro-home">VER +</button></a>
                </div>
                <div class="position-relative border-t border-l border-r border-b p-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-claro" type="claro-home-slider"/>
                <div class="section-slider claro-slider-home-prev">   
                </div>
                </div>

            </div>
            <!--End Sección Canal Claro mobile-->
            <!--Sección Canal Claro tablet-->
            <div class="claro-canal-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header position-relative border-t border-l border-r border-b mb-3">
                <img src="./images/General/pencil.svg" alt="editar-contendio" class="pencil pencil-header-home-claro" type="claro-home-header"/>
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img src="./images/home/tv-1.svg" alt="logo-canal-claro" class="claro-image-header"/>
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
                <div class="position-relative border-t border-l border-r border-b p-4 ">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-claror" type="claro-home-slider"/>
                <div class="section-slider claro-slider-home-prev">   
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
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header p-3 position-relative border-t border-l border-r border-b mb-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-claro" type="claro-home-header"/>
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img src="./images/home/tv-1.svg" class="claro-image-header" alt="logo-canal-claro"/>
                        </a>
                        <h2 class="a-subtitle a-claro-home-subtitle">

                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href=""> <button class="btn-red btn-canal-claro-home"></button></a>
                    </div>
                </div>
                <div class="position-relative border-t border-l border-r border-b p-4">
                <img src="./images/General/pencil.svg" alt="editar-contendio" class="pencil pencil-home-slider-claro" type="claro-home-slider"/>
                <div class="section-slider claro-slider-home-prev">   
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
            <div class="concert-channel-mobile pt-3">
                <div class="m-home-titles text-center position-relative border-t border-l border-r border-b mb-3 p-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-channel" type="channel-home-header"/>
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
                <div class="position-relative border-t border-l border-r border-b p-4">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-channel" type="channel-home-slider"/>
                <div class="section-slider concert-home-slider ">
                </div>
            </div>
                
            </div>

            <!--End Versión mobile-->
            <!--Versión para tablet-->
            <div class="concert-channel-tablet pt-3">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header position-relative border-t border-l border-r border-b mb-3 p-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-channel" type="channel-home-header"/>
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
                <div class="position-relative border-t border-l border-r border-b p-4">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-channel" type="channel-home-slider"/>

                
                <div class="home-concert-videos-container">
                    <div class="section-slider concert-home-slider">
                    </div>
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
            <div class="concert-channel-desktop pt-3">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header position-relative border-t border-l border-r border-b mb-3 p-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-channel" type="channel-home-header"/>
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
                <div class="position-relative border-t border-l border-r border-b p-4">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-channel" type="channel-home-slider"/>
                <div class="section-slider concert-home-slider">
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
            <!--End Concert channel desktop-->
        </div>
        <!--Fin sección de Concert Channel-->
        <!--Sección de Cinema Claro-->
        <div class="o-cinema-section">
            <!--Cinema claro versión mobile-->
            <div class="cinema-claro-mobile pt-3">
                <div class="m-home-titles text-center position-relative border-t border-l border-r border-b mb-3 p-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-cinema" type="cinema-home-header"/>
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
                <div class="position-relative border-t border-l border-r border-b p-4">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-cinema" type="cinema-home-slider"/>
                <div class="section-slider cinema-home-slider">
                </div>
                </div>
               
            </div>
            <!--End Cinema Claro mobile-->
            <!--Cinema claro tablet-->
            <div class="cinema-claro-tablet pt-3">

                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header position-relative border-t border-l border-r border-b mb-3 p-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-cinema" type="cinema-home-header"/>
                    <div class="m-home-titles">
                        <a href="" class="home-title-link">
                            <img class="cinemahome-image-header" src="./images/home/cinema-home-img.svg" alt="logo-claro-cinema"/>
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
                        <img src="./images/home/claro-cinema-background.png" alt="fondo-claro-cinema" class="cinema-image"/>
                    </div>
                    <div class="col-md-7 col-lg-8">
                    <div class="position-relative border-t border-l border-r border-b p-4">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-cinema" type="cinema-home-slider"/>
                <div class="cinema-home-slider">
                        </div>

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
            <div class="cinema-claro-desktop pt-3">
                <!--<div class="black-line"></div>-->
                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header position-relative border-t border-l border-r border-b mb-3 p-3">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-header-home-cinema" type="cinema-home-header"/>
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
                        <img src="./images/home/claro-cinema-background.png" alt="fondo-claro-cinema" class="cinema-image"/>
                    </div>
                    <div class="col-md-8 col-xl-9">
                    <div class="position-relative border-t border-l border-r border-b p-4">
                <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-home-slider-cinema" type="cinema-home-slider"/>
                <div class="cinema-home-slider">
                        </div>

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
          
        var socketHomeprincipal = new easyXDM.Socket({
            onReady: function() {

                var hey = 2700;
               

                socketHomeprincipal.postMessage(hey)
            }
        });
        $(".home-header").on("click", ".slider-pagination-item-home", function () {
            let type = "slider-pagination";
            let data = {

                type: type
            }
          
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });
        $(".o-tv-section").on("click", ".pencil-logos-home", function () {
            let data = {
                type: $(this).attr("type")

            }
           
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });
        $(".tv-videos-container").on("click", ".pencil-carrusel-main", function () {
           
            let data = {
                type: $(this).attr("type")

            }
           
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });
         

         $(".o-claro-section").on("click", ".pencil-header-home-claro", function () {
            let data = {
                type: $(this).attr("type")

            }
            
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });

        $(".o-claro-section").on("click", ".pencil-home-slider-claro", function () {
            let data = {
                type: $(this).attr("type")

            }
           
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });

        $(".o-concert-section").on("click", ".pencil-header-home-channel", function () {
            let data = {
                type: $(this).attr("type")

            }
            
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });

        $(".o-concert-section").on("click", ".pencil-home-slider-channel", function () {
            let data = {
                type: $(this).attr("type")

            }
         
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });

        $(".o-cinema-section").on("click", ".pencil-header-home-cinema", function () {
            let data = {
                type: $(this).attr("type")

            }
            
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });

        $(".o-cinema-section").on("click", ".pencil-home-slider-cinema", function () {
            let data = {
                type: $(this).attr("type")

            }
          
            var json = JSON.stringify(data);
            socketHomeprincipal.postMessage(json);
        });

    
       
       
    </script>
</body>

</html>