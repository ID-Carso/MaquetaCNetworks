<!DOCTYPE html>
<html lang="en">

<head>
        <?php include './views/partials/head.php' ?>
</head>


<body class="fondo">
        <header class="alertas-header">
                <div class="hamburguer-menu">
                        <div class="text-center sidebar-header">
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

                                        <img class="logo" src="./images/home/claro-logo.svg" alt="" />
                                </div>

                                <div class="user-options"></div>
                        </div>

                </nav>
                <?php
                include 'menu-desktop.php';
                ?>

        </header>

        <div class="alertas-container no-gutters">
                <div class="col-sm-12 mx-auto no-gutters col-md-6 no-gutters col-lg-4 col-xl-4 alertas-content shadow1 fondolog">
                        <img src="images/registro/group-10.svg" class="ubicacion5" />
                        <img src="images/config/puntos.svg" class="ubicacionpuntos">

                        <div class="col-10 col-sm-8 col-md-8 col-lg-9 col-xl-10 mx-auto pt-5">
                                <div class="row ma-no centro pb-5">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro">
                                                        <p class="titulos-configuraciones"> Alertas </p>
                                                </div>
                                        </div>
                                </div>

                                <div class="row ma-no centro pb-5">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert alert-text"> Desactivar todas las alertas </p>
                                                        <div class="d-flex align-items-center position-absolute alert-switch-container">
                                                                <span class="texto-alert span-alert-left">No</span>
                                                                <label class="switch-alert mr-2 ml-2">
                                                                        <input type="checkbox" class="alert-checkbox" value="1" id="alerts-off">
                                                                        <span class="slideralert roundalert"></span>

                                                                </label>
                                                                <span class="texto-alert span-alert-right">Sí</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <div class="row ma-no centro pb-5">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert alert-text"> Alertar minutos antes </p>
                                                        <div class="d-flex align-items-center position-absolute alert-switch-container">
                                                                <span class="text-center texto-alert span-alert-left"> 15<br> min</span>
                                                                <label class="switch-alert mr-2 ml-2">
                                                                        <input type="checkbox" class="alert-checkbox" value="30" id="alert-minutes-before">
                                                                        <span class="slideralert roundalert"></span>

                                                                </label>
                                                                <span class="text-center texto-alert span-alert-right"> 30<br> min</span>
                                                        </div>

                                                </div>
                                        </div>
                                </div>
                                <!--<div class="row ma-no centro">
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
                                </div>-->


                                <div class="row ma-no centro pb-5">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert alert-text"> Alertar al iniciar </p>
                                                        <div class="position-absolute d-flex align-items-center alert-switch-container">
                                                                <span class="texto-alert span-alert-left">No</span>
                                                                <label class="switch-alert mr-2 ml-2">
                                                                        <input type="checkbox" class="alert-checkbox" value="1" id="alert-start">
                                                                        <span class="slideralert roundalert"></span>

                                                                </label>
                                                                <span class="texto-alert span-alert-right">Sí</span>
                                                        </div>

                                                </div>
                                        </div>
                                </div>
                                <div class="row ma-no centro pb-5">
                                        <div class="col-sm-12 no-gap">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert alert-text"> Alertas por correo </p>
                                                        <div class="position-absolute d-flex align-items-center alert-switch-container">
                                                                <span class="texto-alert span-alert-left">No</span>
                                                                <label class="switch-alert mr-2 ml-2">
                                                                        <input type="checkbox" class="alert-checkbox" value="1" id="alert-email">
                                                                        <span class="slideralert roundalert"></span>

                                                                </label>
                                                                <span class="texto-alert span-alert-right">Sí</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row ma-no centro">
                                        <div class="col-sm-12 no-gap pb-5 mb-5">
                                                <div class="centro d-flex justify-content-between">
                                                        <p class="texto-alert añert-text"> Alertas por web </p>
                                                        <div class="position-absolute d-flex align-items-center alert-switch-container">
                                                                <span class="texto-alert span-alert-left">No</span>
                                                                <label class="switch-alert mr-3 ml-2">
                                                                        <input type="checkbox" class="alert-checkbox" value="1" id="alert-web">
                                                                        <span class="slideralert roundalert"></span>

                                                                </label>
                                                                <span class="texto-alert span-alert-right">Sí</span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="text-center mt-5 pb-5">
                                        <button type="button" class="form-button-primary" id="alert-button">GUARDAR</button>
                                </div>

                        </div>




                </div>
        </div>

</body>

</html>