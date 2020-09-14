<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>

</head>

<body>
    <header class="synopsis-header">
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
                <!--<div class="dropdown-content">
                      <p class="dropdown-p">ebñrkjg</p>
                      <p class="dropdown-p">ebñrkjg</p>
                      <p class="dropdown-p">ebñrkjg</p>
                    </div>-->
                <a class="sidebar-link" href="concert-channel.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Concert
                            Channel</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
                      <p class="dropdown-p">ebñrkjg</p>
                      <p class="dropdown-p">ebñrkjg</p>
                      <p class="dropdown-p">ebñrkjg</p>
                    </div>-->
                <a class="sidebar-link" href="claro-cinema.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro Cinema</span>
                    </div>
                </a>
                <!--<div class="dropdown-content">
                      <p class="dropdown-p">ebñrkjg</p>
                      <p class="dropdown-p">ebñrkjg</p>
                      <p class="dropdown-p">ebñrkjg</p>
                    </div>-->
                <a target="_blank" class="sidebar-link" href="https://nuestravision.tv">
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
                <!--prueba sidebar-->
            </div>
            <button class="invisible-button"></button>
        </div>

        <div class="header">

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
            include './views/partials/menu-desktop-black.php'
            ?>
            <div class="header-slider-sinopsis  mx-auto" id="">
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" id="image_programming_1" class="input-image-program d-none image_programming "
                        data-index="1">
                    <label for="image_programming_1"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1000px X 342px</span>
                        <!---->
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 cursor-pointer image-cover prev-image-program h-100 thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" id="image_programming_2" class="input-image-program d-none image_programming "
                        data-index="1">
                    <label for="image_programming_2"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1920px X 657px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" name="image_programming[]" id="image_programming_3"
                        class="input-image-program d-none image_programming " data-index="1">
                    <label for="image_programming_3"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1000px X 342px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" name="image_programming[]" id="image_programming_3"
                        class="input-image-program d-none image_programming " data-index="1">
                    <label for="image_programming_3"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1000px X 342px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
            </div>
            <div class="d-flex position-absolute programming-dots space-do">
                <div class=" d-inline-block position-relative programming-slider-dots align-items-center">
                </div>

            </div>
        </div>

    </header>
    <main>
        <div class="synopsis-content">
            <div class="no-gutters">
                <div class="col-11 col-lg-10 mx-auto">
                    <div class="synopsis-buttons-mobile-container">
                        <button class="button-none synopsis-add add-favorites">
                            <img src="./images/posters/heart-outline.svg" alt="" class="synopsis-heart">
                        </button>
                        <a href="sinopsis.php#dropdown-country"> <button class="synopsis-button">
                                <div class="d-flex align-items-center">

                                    <p class="synopsis-schedule-text mb-0">Horarios</p><img
                                        src="./images/home/clock.svg" alt="">

                                </div>
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="no-gutters">
                <div class="col-11 col-md-12 col-lg-10 mx-auto">
                    <h1 class="synopsis-section-title d-flex justify-content-center ml-5">sinopsis</h1>

                    <div class="synopsis-body-container no-gutters">
                        <div
                            class="col-md-7 col-lg-6 mr-2  mb-0 synopsis-main-image border-t border-l border-r border-b position-relative d-inline-block">
                            <img src="./images/General/pencil.svg" alt="" class="pencil pencil-main"
                                type="synopsis-main-image">
                            <!--Imagen principal de sinopsis-->
                            <img src="" alt="" class="p-3 w-100 image-synopsis-edi">
                        </div>
                        <div
                            class="col-md-7 col-lg-6 mx-sm-auto mx-md-auto synopsis-description-container border-t border-l border-r border-b position-relative ">
                            <img src="./images/General/pencil.svg" alt="" class="pencil pencil-description"
                                type="synopsis-description-container">
                            <div>
                                <h1
                                    class="a-text-white-monblack synopsis-title-edi h3 d-flex justify-content-center mt-3">
                                </h1>
                                <p class="a-text-medium-white text-normal synopsis-description-edi pl-3">Texto</p>
                            </div>

                            <div class="no-gutters">

                                <div class="synopsis-buttons-tablet-container pb-3 pr-3 col-md-10 col-xl-12">
                                    <button class="button-none synopsis-add add-favorites">
                                        <img src="" alt="" class="synopsis-heart">
                                    </button>
                                    <a href="sinopsis.php#dropdown-country"><button class="synopsis-button">
                                            <div class="d-flex align-items-center">
                                                <p class="synopsis-schedule-text mb-0">Horarios</p><img
                                                    src="./images/home/clock.svg" alt="">
                                            </div>
                                        </button></a>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="no-gutters">
                        <div class="col-md-10 col-lg-12 mx-auto">
                            <div
                                class="synopsis-images-container no-gutters border-t border-l border-r border-b position-relative p-3">

                                <img src="./images/General/pencil.svg" alt="" class="pencil pencil-images"
                                    type="synopsis-images-container">

                                <!--Image synopsis frame 1-->
                                <img src="" alt=""
                                    class="mr-0 pr-3 synopsis-image-1-edi col-md-6 col-lg-4 synopsis-image">
                                <!--Image synopsis frame 2-->
                                <img src="" alt="" class="pr-3 synopsis-image-2-edi col-md-6 col-lg-4 synopsis-image">
                                <!--Image synopsis frame 3-->
                                <img src="" alt="" class="pr-3 col-lg-4 synopsis-image synopsis-image-3-edi">
                            </div>
                            <div class="">
                                <div
                                    class="synopsis-details-container border-t border-l border-r border-b position-relative p-3">
                                    <img src="./images/General/pencil.svg" alt="" class="pencil pencil-details"
                                        type="synopsis-datails-container">
                                    <div class="synopsis-rating-container">
                                        <p class="synopsis-text synopsis-detail-text synopsis-country-edi">Estados
                                            Unidos</p>
                                        <p class="synopsis-text synopsis-year-edi synopsis-detail-text"></p>
                                        <p class="synopsis-text synopsis-detail-text synopsis-rating-edi"></p>
                                    </div>
                                    <div class="synopsis-seasons-container">
                                        <p class="synopsis-text synopsis-detail-text synopsis-seasons-edi"></p>
                                        <p class="synopsis-text synopsis-detail-text synopsis-duration-edi"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="synopsis-schedule-container" id="dropdown-country">
                        <h1 class="synopsis-schedule-title mt-5 pb-2">Horario por regiones</h1>
                        <div class="mx-auto shadow mt-3 col-10 p-0  content-table pb-5">
                            <div class="contenedor-fila">
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold h3 mr-3">Países</span>
                                    <img src="./images/General/gmt.svg" alt="gmt" class="mb-2">
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold h3 ml-3">Hora</span>
                                    <img src="./images/General/reloj.svg" alt="time" class="mb-2 ml-2">
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold h3 ml-3">L</span>
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold h3 ml-3">M</span>
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold  h3 ml-3">M</span>
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold  h3 ml-3">J</span>
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold  h3 ml-3">V</span>
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold  h3 ml-3">S</span>
                                </div>
                                <div class="contenedor-columna centro ">
                                    <span class="a-text-white-semibold  h3 ml-3">D</span>
                                </div>
                            </div>
                            <div class="contenedor-fila ">
                                <div class="contenedor-columna container-width-colum">
                                    <div class="container-paises mb-3">
                                        <div class="pt-3">
                                            <img src="./images/paises/chile.svg" alt="chile" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Chile</span>
                                        </div>
                                        <div class="pt-3">
                                            <img src="./images/paises/paraguay.svg" alt="paraguay" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Paraguay</span>
                                        </div>
                                        <div class="pt-3">
                                            <img src="./images/paises/dominican-republic.svg" alt="dominican-republic"
                                                class="mt-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3">República <br /><span
                                                    class="a-text-white-semibold text-normal ml-5 pl-3">Dominicana</span>
                                            </span>

                                        </div>

                                    </div>
                                </div>
                                <div class="contenedor-columna pl-4" style="width: 161px;">
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">12:00</p>

                                    </div>
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">12:30</p>

                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>


                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>

                                </div>
                            </div>
                            <div class="contenedor-fila ">
                                <div class="contenedor-columna  container-width-colum">
                                    <div class="container-paises mb-3">
                                        <div class="pt-3 pb-2">
                                            <img src="./images/paises/colombia.svg" alt="colombia" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Colombia</span>
                                        </div>
                                        <div class="pb-2">
                                            <img src="./images/paises/peru.svg" alt="peru" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Perú</span>
                                        </div>
                                        <div class="pb-2">
                                            <img src="./images/paises/panama.svg" alt="panama" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Panamá</span>
                                        </div>
                                        <div class="pb-2">
                                            <img src="./images/paises/ecuador.svg" alt="ecuador" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Ecuador</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="contenedor-columna pl-4" style="width: 161px;">
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">11:00</p>

                                    </div>
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">11:30</p>

                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3 ">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>


                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>

                                </div>
                            </div>
                            <div class="contenedor-fila">
                                <div class="contenedor-columna " style="width: 201px;">
                                    <div class="container-paises mb-3">
                                        <div class="pt-2">
                                            <img src="./images/paises/el-salvador.svg" alt="el-salvador"
                                                class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> El Salvador</span>
                                        </div>
                                        <div class="">
                                            <img src="./images/paises/honduras.svg" alt="honduras" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Honduras</span>
                                        </div>
                                        <div class="">
                                            <img src="./images/paises/nicaragua.svg" alt="nicaragua" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Nicaruagua</span>
                                        </div>
                                        <div class="">
                                            <img src="./images/paises/guatemala.svg" alt="guatemala" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Guatemala</span>
                                        </div>
                                        <div class="pb-3">
                                            <img src="./images/paises/costa-rica.svg" alt="costa-rica"
                                                class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Costa Rica</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="contenedor-columna pl-4" style="width: 161px;">
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">10:00</p>

                                    </div>
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">10:30</p>

                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>


                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>

                                </div>
                            </div>
                            <div class="contenedor-fila">
                                <div class="contenedor-columna " style="width: 201px;">
                                    <div class="container-paises mb-3">
                                        <div class="pt-3">
                                            <img src="./images/paises/argentina.svg" alt="argentina" class="mb-2 ml-3">
                                            <span class="a-text-white-semibold text-normal ml-3"> Argentina</span>
                                        </div>


                                    </div>
                                </div>
                                <div class="contenedor-columna pl-4" style="width: 161px;">
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">1:00</p>

                                    </div>
                                    <div class="container-hora d-inline-block mb-3">
                                        <p class="text-normal a-text-bold-cool-grey m-0  mt-3 centro">Inicio</p>
                                        <p class="a-text-white-bold text-normal centro ">1:30</p>

                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>
                                    <div class="container-days-inac mb-3">
                                    </div>

                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3 ">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>


                                </div>
                                <div class="contenedor-columna pl-4" style=" width: 59px;">
                                    <div class="container-days-inac mb-3">
                                    </div>
                                    <div class="container-days d-flex justify-content-center align-items-center mb-3 ">
                                        <img src="./images/General/selector.svg" alt="selector" class="centro">
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- <div class="no-gutters">

                        <div class="col-11 mx-auto dropdownCountry">
                        </div>
                    </div>-->

                </div>
            </div>

            <?php
            //include 'advertising-section.php'
            ?>
            <div class="cconcert-list-links-footer">
                <?php
                //  include './views/partials/list-links-footer.php';
                ?>
            </div>
            <?php
            // include 'footer.php'
            ?>
        </div>
        </div>
    </main>
    <!--Modal de programa al añadir a favoritos-->
    <?php
    include './views/partials/modal-program.php'
    ?>
</body>
<script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
<script>
    var socketSinopsis = new easyXDM.Socket({
        onReady: function () {
            var hey = 2640;
            socketSinopsis.postMessage(hey)
        },
        onMessage: function (message, origin) {
            console.log("message", typeof message);
            let data = JSON.parse(message);
            if (data.code == 200) {

                let imageSynopsis = data.data.image_synopsis ||
                    "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png";
                let imageSynopsis1 = data.data.image_synopsis_frame_1 ||
                    "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png"
                let imageSynopsis2 = data.data.image_synopsis_frame_2 ||
                    "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png"
                let imageSynopsis3 = data.data.image_synopsis_frame_3 ||
                    "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png"

                $('.synopsis-description-edi').text(data.data.sinopsis)
                $('.synopsis-title-edi').text(data.data.title)
                $('.synopsis-rating-edi').text(`Clasificación ${data.data.rating}`)
                $('.synopsis-duration-edi').text(data.data.duration)
                $('.synopsis-seasons-edi').text(`${data.data.seasons} Temporadas`)
                $('.synopsis-year-edi').text(data.data.year)
                $('.image-synopsis-edi').attr("src", imageSynopsis);
                $('.synopsis-image-1-edi').attr("src", imageSynopsis1);
                $('.synopsis-image-2-edi').attr("src", imageSynopsis2);
                $('.synopsis-image-3-edi').attr("src", imageSynopsis3);
                $('.pencil').attr("chapter_id", data.data.chapter_id)
                //$('.synopsis-country-edi').text()
                let index = 1;
                let slide = "";
                let image = ""
                while (true) {
                    if (data.data[`image_background_${index}`] !== undefined) {
                        image = data.data[`image_background_${index}`]
                        if (data.data[`image_background_${index}`] == null) {
                            image = "./images/General/image-synopsis-carrusel.jpg"
                        }
                        console.log(image);
                        slide += `
                                        <div class="bor thumbnail-image-program position-relative h-100">
                                            <input type="file" id="image_banner_synopsis_${index}"
                                            class="input-image-program d-none input-banner-synopsis" data-index="1">
                                            <label for="image_banner_synopsis_${index}"
                                            class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                                            <img src="./images/General/camara.svg" alt="add-photo"
                                            class=" cursor-pointer add-photo " />
                                            <span class="a-text-bold-warm text-plus mt-3 banner-text pl-4 pr-4 pt-2 pb-2">1920px X 657px</span>
                                            <img src="${image}"
                                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                                            </label>
                                        </div>
                                        `
                        index++

                    } else {
                        break;
                    }
                }
                $(".header-slider-sinopsis").html(slide);
                try {
                    $(".header-slider-sinopsis").slick("unslickk")
                    $(".header-slider-sinopsis").slick({
                        slidesToShow: 1,
                        dots: true,
                        appendDots: $(".programming-slider-dots"),
                        initialSlide: 0,
                        infinite: false,
                        arrows: false,

                        customPaging: function (slider, i) {
                            var thumb = $(slider.$slides[i]).data();
                            return (
                                " <p class='a-text-bold-tealblue slider-pagination-item pag mr-2 '> " +
                                (i + 1) +
                                "</p> "
                            );
                        },
                    });
                } catch (error) {
                    $(".header-slider-sinopsis").slick({
                        slidesToShow: 1,
                        dots: true,
                        appendDots: $(".programming-slider-dots"),
                        initialSlide: 0,
                        infinite: false,
                        arrows: false,

                        customPaging: function (slider, i) {
                            var thumb = $(slider.$slides[i]).data();
                            return (
                                " <p class='a-text-bold-tealblue slider-pagination-item pag mr-2 '> " +
                                (i + 1) +
                                "</p> "
                            );
                        },
                    });
                }
            }


        }
    });
    $('.synopsis-header').on("click", ".slider-pagination-item", function () {
        let type = "slider-pagination";
        let data = {

            type: type,
            id: $(".pencil").attr("chapter_id")
        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });

    $(".synopsis-main-image").on("click", ".pencil-main", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")

        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-description-container").on("click", ".pencil-description", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")
        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-images-container").on("click", ".pencil-images", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")
        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-details-container").on("click", ".pencil-details", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")

        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-details-container").on("click", ".pencil-details", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")

        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
</script>

</html>