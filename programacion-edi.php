<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
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
            <?php
            include './views/partials/menu-desktop-black-edi.php'
            ?>
            <div class="program-image-slider mt-3 col-12 mx-auto">
                <!--base-->
                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:90%;">
                    <input type="file" name="image_background_1" id="image_logo" class="input-image-program d-none">
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo" />
                        <span class="a-text-bold-warm text-plus mb90 shadow-contrast add-photo">472px X 295px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:90%;">
                    <input type="file" name="image_background_1" id="image_logo" class="input-image-program d-none">
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo" />
                        <span class="a-text-bold-warm text-plus mb90 shadow-contrast add-photo">472px X 295px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:90%;">
                    <input type="file" name="image_background_1" id="image_logo" class="input-image-program d-none">
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo" />
                        <span class="a-text-bold-warm text-plus  mb90 shadow-contrast add-photo">472px X 295px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:90%;">
                    <input type="file" name="image_background_1" id="image_logo" class="input-image-program d-none">
                    <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo" />
                        <span class="a-text-bold-warm text-plus  mb90 shadow-contrast add-photo">472px X 295px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
            </div>
        </div>
    </header>
    <div class="pro-container">
        <main class="programacion">
            <p class="programacion-main-title">Programación</p>
            <div class="o-tv-section programming-container">
                <div class="d-flex justify-content-center">
                    <div class=" p-3 border-t border-l border-r border-b position-relative d-inline-block mx-auto">
                        <img src="./images/General/pencil.svg" alt="" class="pencil">
                        <div class="row no-gutters col-12">
                            <ul class="tv-list  ">
                                <div class=" text-center no-gap  mr-2">
                                    <li class="active-navItem d-inline-block">
                                        <!-- <img class="claro-nav-image" src="./images/home/tv-1.svg" alt="" />-->
                                        <div class="bor mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex justify-content-center align-items-center h-100 flex-column">
                                                <img src="./images/General/image-synopsis-horizontal.png" class="thumbnail-image-program" style="width:92%" />

                                                <!--    <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap border-r border-l">
                                    <li rel="concert-channel-programing" class="nav-li d-inline-block">
                                        <!--  <img class="nav-image" src="./images/home/tv-2.svg" alt="" />-->
                                        <div class="bor mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex justify-content-center align-items-center h-100 flex-column">
                                                <img src="./images/General/image-synopsis-horizontal.png" class="thumbnail-image-program" />

                                                <!--    <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap border-r">
                                    <li rel="claro-cinema-programing" class="nav-li d-inline-block">
                                        <!--   <img class="nav-image" src="./images/home/tv-3.svg" alt="" />-->
                                        <div class="bor mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex justify-content-center align-items-center h-100 flex-column">
                                                <img src="./images/General/image-synopsis-horizontal.png" class="thumbnail-image-program" />

                                                <!--      <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap border-r">
                                    <li rel="claro-cinema-programing" class="nav-li d-inline-block">
                                        <!--   <img class="nav-image" src="./images/home/tv-3.svg" alt="" />-->
                                        <div class="bor mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex justify-content-center align-items-center h-100 flex-column">
                                                <img src="./images/General/image-synopsis-horizontal.png" class="thumbnail-image-program" />

                                                <!--   <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
                                            </label>
                                        </div>
                                    </li>
                                </div>
                                <div class=" text-center no-gap">
                                    <li rel="claro-cinema-programing" class="nav-li d-inline-block">
                                        <!--   <img class="nav-image" src="./images/home/tv-3.svg" alt="" />-->
                                        <div class="bor mx-auto position-relative thumbnail-image-program" id="images-logo">
                                            <input type="file" name="image-to-logo" id="imagelogo" class="input-image-program d-none">
                                            <!--class to update image-->
                                            <label for="imagelogo" class="mb-0 cursor-pointer d-flex justify-content-center align-items-center h-100 flex-column">
                                                <img src="./images/General/image-synopsis-horizontal.png" class="thumbnail-image-program" />

                                                <!--    <span class="a-text-bold-warm text-plus mt-5 mb-5 shadow-contrast">472px X 295px</span>-->
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
            var socket = new easyXDM.Socket({
                onReady: function() {

                    var hey = 11000;
                    console.log(hey);

                    socket.postMessage(hey)
                }
            });
        </script>
</body>

</html>