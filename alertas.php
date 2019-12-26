<!DOCTYPE html>
<html lang="en">

<head>
        <title>Alertas</title>
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


<body class="fondo">
        <header class="alertas-header">
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

                <nav class="menu-tablet" style="    padding: calc(3% + 4px) calc(8% - 10px) 0px calc(8% - 10px);">
                        <div class="nav-content">
                                <div class="claro-logo">
                                        <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                                        <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
                                </div>

                                <div class="login">
                                        <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                                        <a href="index.html" class="login-item"><img class="login-country" src="" alt="" /></a>
                                </div>
                        </div>

                </nav>
                <?php
                include 'menu-desktop.php';
                ?>

        </header>

        <div class="alertas-container">
                <div class="col-sm-12 mx-auto no-gutters col-md-6 no-gutters col-lg-4 col-xl-3 shadow1 fondolog">
                        <img src="images/registro/group-10.svg" class="ubicacion5" />
                        <img src="images/config/puntos.svg" class="ubicacionpuntos">
                        <br><br><br>
                        <div class="col-10 col-sm-8 col-md-8 col-lg-9 col-xl-9 mx-auto">
                                <div class="row ma-no centro">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro">
                                                        <p class="titulos-configuraciones"> Alertas </p>
                                                </div>
                                        </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="row ma-no centro">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert"> Desactivar todas las alertas </p>
                                                        <label class="switch-alert">
                                                                <input type="checkbox">
                                                                <span class="slideralert roundalert"></span>

                                                        </label>
                                                </div>
                                        </div>
                                </div>
                                <div class="row ma-no centro">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert"> Alertar antes </p>
                                                        <label class="switch-alert">
                                                                <input type="checkbox">
                                                                <span class="slideralert roundalert"></span>

                                                        </label>
                                                </div>
                                        </div>
                                </div>
                                <br>

                                <div class="row ma-no centro">
                                        <div class="w-100">
                                                <div class="centro">

                                                        <form action="" name="formilariotiempo" id="formulariotiempo" class="formulario">
                                                                <div class="tiempo">
                                                                        <input type="radio" name="tiempo" id="quince" checked />
                                                                        <label for="quince" id="quinceestado" class="quince-estilo">

                                                                                15 min antes</label>
                                                                        <input type="radio" name="tiempo" id="treinta" />
                                                                        <label for="treinta" id="treintaestado" class="treinta-estilo">
                                                                                30 min antes
                                                                        </label>
                                                                </div>
                                                        </form>
                                                </div>
                                        </div>
                                </div>
                                <br>

                                <div class="row ma-no centro">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert"> Alertar cuando inicie el contenido </p>
                                                        <label class="switch-alert">
                                                                <input type="checkbox">
                                                                <span class="slideralert roundalert"></span>

                                                        </label>
                                                </div>
                                        </div>
                                </div>
                                <div class="row ma-no centro">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert"> Correo electrónico </p>
                                                        <label class="switch-alert">
                                                                <input type="checkbox">
                                                                <span class="slideralert roundalert"></span>

                                                        </label>
                                                </div>
                                        </div>
                                </div>
                                <div class="row ma-no centro">
                                        <div class="col-sm-12 no-gap pb-5">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert"> Web </p>
                                                        <label class="switch-alert">
                                                                <input type="checkbox">
                                                                <span class="slideralert roundalert"></span>

                                                        </label>
                                                </div>
                                        </div>
                                </div>
                        </div>




                </div>
        </div>

</body>

</html>