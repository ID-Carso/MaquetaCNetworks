<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi lista</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="shortcut icon" type="image/png" href="./images/favicon/claro-fav.png" />
    <link rel="stylesheet" href="./styles/bootstrap-4.4.1/bootstrap.min.css" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick-theme.css" />
    <script src="./js/lib/jquery-3.4.1.min.js"></script>
    <script src="slick-master/slick/slick.js"></script>
    <script src="./js/jquery.browser.js"></script>
    <script src="./js/lib/rellax.js"></script>
    <script src="./js/main.js" type="module"></script>
</head>

<body>
    <header class="lista-header">
        <div class="hamburguer-menu">
            <div class="text-center">
                <img src="./images/menu/claro-networks-sidebar.svg" alt="" class="logo-sidebar" />
            </div>
            <div class="sidebar-content">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <a href="home.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a href="claro-canal.php" class="sidebar-link"><span class="dropdown-p">Canal
                            Claro</span></a>
                </div>

                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="concert-channel.php"><span class="dropdown-p">Concert
                            Channel</span></a>
                </div>

                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="claro-cinema.php"><span class="dropdown-p">Claro
                            Cinema</span></a>
                </div>

                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="https://www.nuestravision.com.mx/"><span class="dropdown-p">Nuestra
                            Visión</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="claro-sports.html"><span class="dropdown-p">Claro
                            Sports</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="programacion.php"><span class="dropdown-p">Programación</span></a>
                </div>
            </div>
            <button class="invisible-button"></button>
        </div>

        <div class="categorias-menu">
            <div class="sidebar-content">
                <div class="sidebar-item  ">
                    <a href="home.php" class="sidebar-link">
                        <p class="dropdown-p">TODOS</p>
                    </a>
                </div>
                <div class="sidebar-item">
                    <a href="claro-canal.php" class="sidebar-link">
                        <p class="dropdown-p">PELÍCULAS</p>
                    </a>
                </div>

                <div class="sidebar-item ">
                    <a class="sidebar-link" href="concert-channel.php">
                        <p class="dropdown-p">SERIES</p>
                    </a>
                </div>

                <div class="sidebar-item ">
                    <a class="sidebar-link" href="claro-cinema.php">
                        <p class="dropdown-p">DOCUMENTALES</p>
                    </a>
                </div>

                <div class="sidebar-item ">
                    <a class="sidebar-link" href="https://www.nuestravision.com.mx/">
                        <p class="dropdown-p">CONCIERTOS</p>
                    </a>
                </div>
                <div class="sidebar-item ">
                    <a class="sidebar-link" href="claro-sports.html">
                        <p class="dropdown-p">PROGRAMAS</p>
                    </a>
                </div>
                <div class="sidebar-item ">
                    <a class="sidebar-link" href="programacion.php">
                        <p class="dropdown-p">DEPORTES</p>
                    </a>
                </div>
                <div class="sidebar-item ">
                    <img class="tache_button" src="images/mi-lista/cerrar-categorias.svg">
                </div>
            </div>

        </div>


        <div>
            <nav class="menu-perfil">
                <div class="nav-content">
                    <div class="claro-logo">
                        <img class="menu-responsive" src="./images/home/responsive-menu.svg" alt="" />

                        <img class="logo" src="./images/alertas/claro-networks.svg" alt="" />
                    </div>

                    <div class="login">
                        <a href="home.php" class="login-item"><img src="./images/alertas/btn-home.svg" alt="" /></a>
                        <a href="index.html" class="login-item"><img class="login-country" src="" alt="" /></a>
                    </div>
                </div>
            </nav>
        </div>

        <nav class="menu-tablet">
            <div class="nav-content">
                <div class="claro-logo">
                    <img class="menu-responsive-tablet" src="./images/home/responsive-menu.svg" alt="" />

                    <img class="logo" src="./images/alertas/claro-networks.svg" alt="" />
                </div>

                <div class="login">
                    <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                    <a href="index.html" class="login-item"><img class="login-country" src="" alt="" /></a>
                </div>
            </div>
        </nav>
        <nav class="menu-desktop">
            <div class="nav-content">
                <div class="claro-logo">

                    <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                    <a href="home.php">
                        <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
                    </a>
                </div>

                <div class="login">
                    <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                    <a href="paises.html" class="login-item"><img class="login-country" alt="" /></a>
                </div>
            </div>
            <div class="claro-navbar">
                <div>
                    <a href="claro-canal.php" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Canal Claro</p>
                    </a>
                </div>
                <div>
                    <a href="concert-channel.php" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Concert Channel</p>
                    </a>
                </div>
                <div>
                    <a href="claro-cinema.php" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Claro Cinema</p>
                    </a>
                </div>
                <div>
                    <a href="nuestra-vision.php" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Nuestra Visión</p>
                    </a>
                </div>
                <div>
                    <a href="claro-sports.php" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Claro Sports</p>
                    </a>
                </div>
                <div>
                    <a href="programacion.php" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Programación</p>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="lista-content">
        <img src="images/registro/group-3.svg" class="image-list-blue">
        <img src="images/registro/group-37.svg" class="image-list-points">
        <div class="mi-lista-container col-sm-12 no-gutters col-md-12 no-gutters col-lg-12 mx-auto col-xl-9 shadow1 fondolog">

            <div class=" row ma-no centro">
                <div class="col-sm-12 no-gap">
                    <div class="centro">
                        <p class="my-list-title">Mi lista </p>
                    </div>
                </div>
            </div>
            <div class="row ma-no centro">
                <div class="col-11 mx-auto no-gap border-config d-flex justify-content-between">
                    <div class="centro ">
                        <p class="texto-categorias">CATEGORÍAS <img class="categorias-flecha" src="images/mi-lista/flecha-categorias.svg" alt=""> </p>
                    </div>
                    <div>
                        <p class="name-category">todos</p>
                    </div>
                </div>
            </div>
            <div class="no-gutters">
                <div class="col-11 mx-auto">
                    <div class="claro-list section-list-container">
                        <h1 class="claro-list-title list-title-section">Claro Canal</h1>
                        <div class="list-item-container">
                            <div class="poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="myList-details-container myList-details-mobile">
                                <div class="d-flex info-schedule justify-content-between no-gutters">

                                    <div class="col-6">
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="no-gutters d-flex  align-items-center justify-content-between">
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>

                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-tablet no-gutters">
                                <div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                </div>

                                <div class="d-flex  align-items-center flex-column justify-content-between">
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-desktop">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                    </div>
                                    <div>
                                        <div>
                                            <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <p class="rating-alert">ALERTAS</p>
                                            <label class="switch-alert">
                                                <input type="checkbox">
                                                <span class="slideralert roundalert"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p class="schedule-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="list-item-container">
                            <div class="poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="myList-details-container myList-details-mobile">
                                <div class="d-flex info-schedule justify-content-between no-gutters">

                                    <div class="col-6">
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="no-gutters d-flex justify-content-between">

                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>

                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-tablet no-gutters">
                                <div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                </div>

                                <div class="d-flex  align-items-center flex-column justify-content-between">
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-desktop">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                    </div>
                                    <div>
                                        <div>
                                            <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <p class="rating-alert">ALERTAS</p>
                                            <label class="switch-alert">
                                                <input type="checkbox">
                                                <span class="slideralert roundalert"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p class="schedule-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cinema-list section-list-container">
                        <h1 class="cinema-list-title list-title-section">Claro <span>Cinema</span></h1>
                        <div class="list-item-container">
                            <div class="poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="myList-details-container myList-details-mobile">
                                <div class="d-flex info-schedule justify-content-between no-gutters">

                                    <div class="col-6">
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="no-gutters d-flex justify-content-between">

                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>

                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-tablet no-gutters">
                                <div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                </div>

                                <div class="d-flex  align-items-center flex-column justify-content-between">
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-desktop">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                    </div>
                                    <div>
                                        <div>
                                            <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <p class="rating-alert">ALERTAS</p>
                                            <label class="switch-alert">
                                                <input type="checkbox">
                                                <span class="slideralert roundalert"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p class="schedule-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="list-item-container">
                            <div class="poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="myList-details-container myList-details-mobile">
                                <div class="d-flex info-schedule justify-content-between no-gutters">

                                    <div class="col-6">
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="no-gutters d-flex  align-items-center justify-content-between">

                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>

                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-tablet no-gutters">
                                <div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                </div>

                                <div class="d-flex  align-items-center flex-column justify-content-between">
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-desktop">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                    </div>
                                    <div>
                                        <div>
                                            <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <p class="rating-alert">ALERTAS</p>
                                            <label class="switch-alert">
                                                <input type="checkbox">
                                                <span class="slideralert roundalert"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p class="schedule-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="concert-list section-list-container">
                        <h1 class="concert-list-title list-title-section">Concert Channel</h1>
                        <div class="list-item-container">
                            <div class="poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="myList-details-container myList-details-mobile">
                                <div class="d-flex info-schedule justify-content-between no-gutters">

                                    <div class="col-6">
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="no-gutters d-flex  align-items-center justify-content-between">

                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>

                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-tablet no-gutters">
                                <div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                </div>

                                <div class="d-flex  align-items-center flex-column justify-content-between">
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-desktop">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                    </div>
                                    <div>
                                        <div>
                                            <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <p class="rating-alert">ALERTAS</p>
                                            <label class="switch-alert">
                                                <input type="checkbox">
                                                <span class="slideralert roundalert"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p class="schedule-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="list-item-container">
                            <div class="poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/coldplay-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                    </div>
                                </div>
                            </div>
                            <div class="myList-details-container myList-details-mobile">
                                <div class="d-flex info-schedule align-items-center justify-content-between no-gutters">

                                    <div class="col-6">
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="no-gutters d-flex  align-items-center justify-content-between">

                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>

                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-tablet no-gutters">
                                <div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                </div>

                                <div class="d-flex  align-items-center flex-column justify-content-between">
                                    <div>
                                        <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <p class="rating-alert">ALERTAS</p>
                                        <label class="switch-alert">
                                            <input type="checkbox">
                                            <span class="slideralert roundalert"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="myList-details-container myList-details-desktop">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="rating">Clasificación: A</p>
                                    </div>
                                    <div>
                                        <p class="schedule-days">Lunes a Viernes</p>
                                        <p class="schedule">10:00 - 10:30</p>
                                    </div>
                                    <div>
                                        <div>
                                            <button class="schedule-add" type="button">QUITAR <span><img src="images/mi-lista/menos.svg"></span>
                                            </button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <p class="rating-alert">ALERTAS</p>
                                            <label class="switch-alert">
                                                <input type="checkbox">
                                                <span class="slideralert roundalert"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <p class="schedule-description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>



</body>

</html>