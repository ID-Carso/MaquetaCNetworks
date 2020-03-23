<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
</head>

<body>
    <header class="concert-channel-header">
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
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p active-sidebar-item">Concert
                        Channel</span>
                </div>
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
                <a class="sidebar-link" href="https://nuestravision.tv" target="_blank">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Nuestra
                            Visión</span>
                    </div>
                </a>
                <a class="sidebar-link" href="https://www.marca.com/claro-mx/" target="_blank">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro
                            Sports</span>
                    </div>
                </a>
                <!--<a class="sidebar-link" href="programacion.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Programación</span>
                    </div>
                </a>-->
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
            include './views/partials/menu-desktop-white.php'
            ?>
            <div class="header-slider">
                <div class="header-slide">
                    <img src="" class="concert-image-banner-1 rellax" data-rellax="10">
                </div>
                <div class="header-slide">
                    <!--<img src="./images/header/glastonbury.jpeg" class="rellax" data-rellax="10">-->
                </div>
                <div class="header-slide"></div>
            </div>
        </div>
    </header>
    <div class="concert-container">
        <section class="today-concert-channel">
            <div class="row no-gutters landing-header">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
                    <img src="./images/home/concert-home-img.svg" alt="" class="lading-header-image-concert">
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                    <h1 class="today-concert-title">hoy en <span>concert channel</span></h1>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-right">
                    <a href="programacion.php"><button class="btn-magenta a-text-white-semibold btn-concert-channel">VER PROGRAMACIÓN</button></a>
                </div>
            </div>
            <div class="today-concert-videos-container">
                <div class="section-slider concert-slider today-concert-channel-slider">

                </div>

        </section>
        <section class="next-week-concert">
            <div class="concert-container-header">
                <h1 class="concert-title">próxima semana</h1>
                <h2 class="concert-subtitle">ve un <span>adelanto</span> de la programación</h2>
            </div>
            <div class="week-videos-container">
                <div class="poster">
                    <div class="poster-body">
                        <div class="showtime-container justify-content-end">
                            <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                        </div>
                        <div class="thumbnail">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="concerts">
            <div class="concert-container-header">

                <h1 class="concert-title">conciertos</h1>
                <h2 class="concert-subtitle">ve un <span>adelanto</span> de la programación</h2>
            </div>
            <div class="concerts-videos-container">
                <div class="section-slider concert-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="concert-interviews">
            <div class="concert-container-header">
                <h1 class="concert-title">entrevistas</h1>
                <h2 class="concert-subtitle">ve un <span>adelanto</span> de la programación</h2>
            </div>
            <div class="interviews-videos-container">
                <div class="section-slider concert-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container justify-content-between">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                            </div>
                            <div class="thumbnail">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">
                                        ¿QUÉ TE HA DADO ESA MUJER?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php
        include 'advertising-section.php'
        ?>
        <div class="cconcert-list-links-footer">
            <?php
            include './views/partials/list-links-footer.php';
            ?>
        </div>
        <footer>
            <?php
            include 'footer.php'
            ?>
        </footer>

    </div>
    <?php
    include './views/partials/modal-favorites.php'
    ?>

    <!--Modal de programa al añadir a favoritos-->
    <?php
    include './views/partials/modal-program.php'
    ?>

</body>

</html>