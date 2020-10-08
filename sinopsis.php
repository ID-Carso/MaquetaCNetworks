<?php

session_start();

if ($_SESSION["country"] != 1) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <script src="./js/synopsis.js?t=<?php echo time(); ?>"></script>
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
            <div class="header-slider slider-sinopsis">
                <div class="header-slide">
                    <!--<img src="./images/concert-channel/header-image.jpeg" alt="">-->
                </div>
                <div class="header-slide">
                    <!--<img src="./images/header/glastonbury.jpeg" alt="">-->
                </div>
                <div class="header-slide"></div>
            </div>
        </div>
    </header>
    <main>
        <div class="synopsis-content">
            <div class="no-gutters">
                <div class="col-11 col-md-12 col-lg-10 col-xl-9 mx-auto">
                    <h1 class="synopsis-section-title">sinopsis</h1>

                    <div class="synopsis-body-container no-gutters">
                        <div class="col-md-10 col-lg-6 mx-auto mx-sm-auto mx-md-auto mr-lg-3 mr-xl-3 synopsis-main-image">
                            <img src="" alt="" class="w-100 synopsis-chapter-image">
                        </div>
                        <div class="col-md-10 col-lg-6 mx-sm-auto mx-md-auto synopsis-description-container d-flex flex-column justify-content-between">
                            <div>
                                <h1 class="text-center text-uppercase synopsis-title"></h1>
                                <p class="synopsis-text synopsis-description mb-4 mb-sm-4 mb-md-0 md-lg-0 mb-xl-0"></p>
                            </div>

                            <div class="no-gutters mb-4 mb-sm-4 mb-md-0 md-lg-0 mb-xl-0">

                                <div class="synopsis-buttons-tablet-container justify-content-end col-md-12 col-xl-12">
                                    <button class="ml-auto d-flex align-items-center synopsis-button synopsis-add add-favorites">
                                        <p class="synopsis-schedule-text mb-0">añadir</p>
                                        <img src="" alt="" class="synopsis-heart">
                                    </button>
                                </div>

                            </div>


                        </div>


                    </div>
                    <div class="no-gutters">
                        <div class="col-md-10 col-lg-12 mx-auto">
                            <div class="synopsis-images-container no-gutters">
                                <img src="" alt="" class="col-md-6 col-lg-4 synopsis-image synopsis-chapter-image-1">
                                <img src="" alt="" class="col-md-6 col-lg-4 synopsis-image synopsis-chapter-image-2">
                                <img src="" alt="" class="col-lg-4 synopsis-image synopsis-chapter-image-3">
                            </div>
                            <div class="d-flex justify-content-between mt-4 mb-5">
                                <div class="d-flex align-items-center">
                                    <span class="a-text-Regular-White text-normal mr-2">Duración: </span>
                                    <p class="a-text-white-monblack text-normal synopsis-detail-text synopsis-duration-edi ml-0 mb-0"></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="a-text-Regular-White text-normal mr-2">Año: </span>
                                    <p class=" a-text-white-monblack text-normal synopsis-year-edi synopsis-detail-text ml-0 mb-0"></p>
                                </div>


                                <div class="d-flex align-items-center">
                                    <span class="a-text-Regular-White text-normal mr-2">Temporadas: </span>
                                    <p class="a-text-white-monblack text-normal synopsis-detail-text synopsis-seasons-edi ml-0 mb-0"></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="a-text-Regular-White text-normal mr-2">Clasificación: </span>
                                    <p class="a-text-white-monblack text-normal synopsis-detail-text synopsis-rating-edi ml-0 mb-0"></p>
                                </div>


                            </div>
                        </div>
                    </div>




                    <div class="synopsis-schedule-container" id="dropdown-country">
                        <h1 class="synopsis-schedule-title">Horario por regiones</h1>
                    </div>


                </div>
                <div class="dropdown-country-container">
                    <div class="d-flex justify-content-between dropdownCountry mx-auto">
                    </div>
                </div>
                <div class="time-slider-container mb-5">
                </div>
            </div>

            <?php
            include 'advertising-section.php'
            ?>
            <div class="cconcert-list-links-footer">
                <?php
                include './views/partials/list-links-footer.php';
                ?>
            </div>
            <?php
            include 'footer.php'
            ?>
        </div>
        </div>
    </main>
    <!--Modal de programa al añadir a favoritos-->
    <?php
    include './views/partials/modal-program.php'
    ?>
</body>

</html>