<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <script src="./js/backoffice/main.js?t=<?php echo time(); ?>" defer></script>
</head>

<body>
    <header class="programacion-header">
        <div class="hamburguer-menu">
            <div class="text-center sidebar-header">

            </div>
            <a href="" class="sidebar-link">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <span class="dropdown-p">Inicio</span>
                </div>
            </a>
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
                <a class="sidebar-link" href="">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Concert
                            Channel</span>
                </a>
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
            <!--<div class="sidebar-item sidebar-border-bottom">
                <span class="dropdown-p active-sidebar-item">Programación</span>
            </div>-->
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
            <!---Menu Desktop-->
            <nav class="menu-desktop">
                <div class="nav-content">
                    <div class="claro-logo">

                        <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                        <a href="home.php">
                            <img class="logo logo-black" src="./images/home/claro-logo.svg" alt="" />
                        </a>
                    </div>

                    <div class="options">
                        <div class="login">
                            <a href="login.php" class="login-item mr-2"><img src="./images/home/user-login.svg" alt=""></a>
                            <a href="index.php" class="login-item"><img src="images/paises/gmt-icon.svg" alt="" width="32px"></a>
                        </div>
                    </div>
                </div>
                <div class="claro-navbar claro-navbar-black">
                    <div>
                        <a href="claro-canal.php" class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Canal Claro</p>
                        </a>
                    </div>
                    <div>
                        <a href="concert-channel.php" class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Concert Channel</p>
                        </a>
                    </div>
                    <div>
                        <a href="claro-cinema.php" class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Claro Cinema</p>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" href="https://nuestravision.tv" class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Nuestra Visión</p>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.marca.com/claro-mx/" target="_blank" class="navbar-link text-decoration-none">
                            <p class="navbar-item-black text-semibold">Claro Sports</p>
                        </a>
                    </div>
                    <!-- <div>
      <a href="programacion.php" class="navbar-link text-decoration-none">
        <p class="navbar-item">Programación</p>
      </a>
    </div>-->
                </div>
            </nav>
            <!--dots-->


            <div class="program-image-slider  mx-auto">
                <!--base-->

                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
                    <!--  <input type="file" name="image_background_1" id="image_logo" class="input-image-program d-none">-->
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <!-- <span class="a-text-bold-warm text-plus mb90 shadow-contrast add-photo">472px X 295px</span>-->
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <!--   <span class="a-text-bold-warm text-plus mb90 shadow-contrast add-photo">472px X 295px</span>-->
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <!--   <span class="a-text-bold-warm text-plus  mb90 shadow-contrast add-photo">472px X 295px</span>-->
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>

            </div>
            <div class="d-inline-block position-absolute programming-dots space-do">
                <div class=" d-inline-block position-relative programming-slider-dots align-items-center">
                </div>
                <img src="./images/General/plus.svg" alt="" class="cursor-pointer slider-pagination-add mr-3" style="width:42px">


            </div>
        </div>

    </header>
    <div class="pro-container">
        <main class="programacion">
            <p class="programacion-main-title  pb-4">Programación</p>
            <div class="o-tv-section programming-container">
                <div class="d-flex justify-content-center">
                    <div class=" p-3 border-t border-l border-r border-b position-relative d-inline-block mx-auto">
                        <img src="./images/General/pencil.svg" alt="" class="pencil pencil-menu">
                        <div class="row no-gutters col-12">
                            <ul class="d-flex list-progra pl-0">
                                <div class=" text-center no-gap  mr-2">
                                    <li class="navbar-progra-item-container active-navItems navs-li  d-inline-block" style="width: 200px !important;">
                                        <!-- <img class="claro-nav-image" src="./images/home/tv-1.svg" alt="" />-->
                                        <div class=" mx-auto position-relative thumbnail-image-program " id="images-logo">
                                            <!-- <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">-->
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex p-2 m-3 justify-content-center align-items-center h-100 flex-column">
                                                <img class="claro-nav-image thumbnail-image-program" src="./images/home/tv-1.svg" alt="" />
                                                <!--    <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap border-r border-l pr-2 pl-2">
                                    <li rel="concert-channel-programing" class="navs-li d-inline-block" style="width: 200px !important;">
                                        <!--  <img class="nav-image" src="./images/home/tv-2.svg" alt="" />-->
                                        <div class=" mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <!--  <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">-->
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex p-2 m-3 justify-content-center align-items-center h-100 flex-column">
                                                <img class="nav-image thumbnail-image-program" src="./images/home/tv-2.svg" alt="" />

                                                <!--    <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap  ml-2">
                                    <li rel="claro-cinema-programing" class="navs-li d-inline-block" style="width: 200px !important;">
                                        <!--   <img class="nav-image" src="./images/home/tv-3.svg" alt="" />-->
                                        <div class=" mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <!--  <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">-->
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex p-2 m-3 justify-content-center align-items-center h-100 flex-column">
                                                <img class=" nav-image thumbnail-image-program" src="./images/home/tv-3.svg" alt="" />
                                                <!--      <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
                                            </label>
                                        </div>
                                    </li>
                                </div>



                            </ul>
                        </div>
                    </div>
                </div>

                <div id="claro-canal-programing-edit" class="tv-content">
                    <div class="no-gutters" id="">
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
                </div>

                <div id="concert-channel-programing-edit" class="tv-content">
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

                </div>
                <!--End Concert channel de "Ahora en tv"-->
                <!--Claro cinema de "Ahora en tv"-->
                <div id="claro-cinema-programing-edit" class="tv-content">
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

                </div>
        </main>
        <!--  <?php
                //  include 'advertising-section.php'
                ?>


    </div>
    <div class="programing-list-links-footer">
        <?php
        //   include './views/partials/list-links-footer.php';
        ?>

    </div>
    <?php
    // include 'footer.php'
    ?>
    <?php
    // include './views/partials/modal-favorites.php'
    ?>
    <?php
    //   include './views/partials/modal-program.php'
    ?>-->
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
                let data = {
                    id: 0,
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