<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
  
    <input type="hidden" id="actual_landing" value="programation_edi">

</head>

<body>
    <header class="programacion-header">
        <div class="hamburguer-menu  pointer-events-none">
            <div class="text-center sidebar-header pointer-events-none">

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
            <!---Menu Desktop-->
            <nav class="menu-desktop">
                <div class="nav-content">
                    <div class="claro-logo">

                        <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="menu-hamburguesa-tablet" />

                     
                            <img class="logo logo-black" src="./images/home/claro-logo.svg" alt="logo-claro-networks" />
                        
                    </div>

                    <div class="options">
                        <div class="login">
                            <span class="login-item mr-2"><img src="./images/home/user-login.svg" alt="icono-usuario" /></span>
                            <span class="login-item"><img src="images/paises/gmt-icon.svg" alt="icono-gmt" width="32px" /></span>
                        </div>
                    </div>
                </div>
                <div class="claro-navbar claro-navbar-black">
                    <div>
                        <span class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Canal Claro</p>
                        </span>
                    </div>
                    <div>
                        <span class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Concert Channel</p>
                        </span>
                    </div>
                    <div>
                        <span class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Claro Cinema</p>
                        </span>
                    </div>
                    <div>
                        <span class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Nuestra Visión</p>
                        </span>
                    </div>
                    <div>
                        <span class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Claro Sports</p>
                        </span>
                    </div>

                </div>
            </nav>
            <!--dots-->


            <div class="program-image-slider  mx-auto totales" id="banner-programming-edi">
            </div>
            <div class="d-flex position-absolute programming-dots space-do">
                <div class=" d-inline-block position-relative programming-slider-dots align-items-center">
                </div>
                <img src="./images/General/plus.svg" alt="icono-agregar" class="cursor-pointer slider-pagination-add mr-3" style="width:42px" />
            </div>
        </div>

    </header>
    <div class="pro-container">
        <main class="programacion">
            <p class="programacion-main-title  pb-4">Programación</p>
            <div class="o-tv-section programming-container">
                <div class="d-flex justify-content-center">
                    <div class=" p-3 border-t border-l border-r border-b position-relative d-inline-block mx-auto">
                        <img src="./images/General/pencil.svg" alt=" " class="pencil pencil-menu">
                        <div class="row no-gutters col-12">
                            <ul class="d-flex list-progra pl-0">
                                <div class=" text-center no-gap  mr-2">
                                    <li rel="claro-canal-programing-edit" class="navs-li  d-inline-block" style="width: 200px !important;">

                                        <div class=" mx-auto position-relative thumbnail-image-program " id="images-logo">

                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex p-2 m-3 justify-content-center align-items-center h-100 flex-column">
                                                <img class="claro-nav-image cursor-auto thumbnail-image-program" src="" alt="logo-claro-canal" id="icon_canal_claro_edi" />

                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap border-r border-l pr-2 pl-2">
                                    <li rel="concert-channel-programing-edit" class="active-navItems navbar-progra-item-container navs-li d-inline-block" style="width: 200px !important;">
                                        <div class=" mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex p-2 m-3 justify-content-center align-items-center h-100 flex-column">
                                                <img class="claro-nav-image thumbnail-image-program" src="" alt="logo-concert-channel" id="icon_concert_channel_edi" />

                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap  ml-2">
                                    <li rel="claro-cinema-programing-edit" class="navs-li d-inline-block" style="width: 200px !important;">
                                        <div class=" mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex p-2 m-3 justify-content-center align-items-center h-100 flex-column">
                                                <img class="claro-nav-image cursor-auto thumbnail-image-program" src="" alt="logo-claro-cinema" id="icon_claro_cinema_edi" />
                                            </label>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>


                <div id="claro-canal-programing-edit" class="display-none">
                    <div class="no-gutters" id="">
                        <div class="programacion-date-container">
                            <div class="no-gutters">
                                <div class="col-md-11 col-lg-12 mx-auto">
                                    <p class="month"></p>
                                </div>
                            </div>

                            <div class="no-gutters">
                                <ul class="claro-calendar-backoffice col-md-10 mx-auto">
                                    <div class="programacion-slider pro-claro-slider" id="pro-claro-slider">

                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!--Contenido de los días-->
                    <div class="claro-content-edit">
                    </div>
                </div>

                <div id="concert-channel-programing-edit" class="display-block">
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
                    <!--Contenido de los días-->
                    <div class="concert-content-edit">
                    </div>
                </div>

                <div id="claro-cinema-programing-edit" class="display-none">
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
                        <!--Contenido de los días-->
                        <div class="cinema-content-edit">
                        </div>
                    </div>

                </div>
        </main>

        <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
        <script>
            var socketProgramacion = new easyXDM.Socket({
                onReady: function() {
                    var hey = 11000;
                    socketProgramacion.postMessage(hey)
                }
            });
            $('.pro-container').on("click", ".edit-program-pencil", function() {
                let chapterId = $(this).attr("chapter_id");
                let type = "program"
                let data = {
                    chapterId: chapterId,
                    type: type
                }
                var json = JSON.stringify(data);
                socketProgramacion.postMessage(json);

            })
            $('.programacion-header').on("click", ".slider-pagination-item", function() {
                let type = "slider-pagination";
                // let total = parseInt($(".totales").text());
                let data = {
                    id_slide: $(this).attr("slide_index"),
                    totales: $(".totales").val(),
                    type: type

                }
                
                var json = JSON.stringify(data);
                socketProgramacion.postMessage(json);
            })
            $('.schedule-description1').on("click", ".schedule-description1", function() {
                let type = "synopsis";
                let data = {
                    id: 0,
                    type: type
                }
                var json = JSON.stringify(data);
                socketProgramacion.postMessage(json);
            })
            $('.pencil-menu').click(function() {
                let type = "menu-logos";
                let data = {
                    id: 0,
                    type: type
                }
                var json = JSON.stringify(data);
                socketProgramacion.postMessage(json);
            })
        </script>

</body>

</html>