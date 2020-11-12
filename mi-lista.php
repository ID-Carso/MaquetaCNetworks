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
    <?php include './views/partials/session.php' ?>
    <script src="./js/favorites.js" type="module"></script>
</head>

<body>
    <header class="lista-header">
        <div class="hamburguer-menu">
            <div class="text-center sidebar-header">
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
                    <a target="_blank" class="sidebar-link" href="https://nuestravision.tv"><span class="dropdown-p">Nuestra
                            Visión</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a target="_blank" class="sidebar-link" href="https://www.marca.com/claro-mx/"><span class="dropdown-p">Claro
                            Sports</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="programacion.php"><span class="dropdown-p">Programación</span></a>
                </div>
                <a class="sidebar-link"  target="_blank">
                    <div class="sidebar-item sidebar-border-bottom ">
                        <span class="dropdown-p logout">Cerrar Sesión</span>
                    </div>
                </a>
               
            </div>
            <button class="invisible-button"></button>
        </div>

        <div class="categorias-menu menu-lista overflow-y">
            <div class="sidebar-content cursor-pointer " id="genre-menu-content">


            </div>

        </div>


        <?php
        include './views/partials/menu-mobile-white.php';
        ?>

        <?php
        include './views/partials/menu-tablet-black.php';
        ?>
        <?php
        include './views/partials/menu-desktop-black.php'
        ?>
    </header>
    <div class="alert-user">
    </div>
    <img src="images/registro/group-3.svg" class="image-list-blue" alt="vector-azul" />
    <div class="lista-content">

        <img src="images/registro/group-37.svg" class="image-list-points" alt="vector-azul" />
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
                        <p class="texto-categorias">CATEGORÍAS <img class="categorias-flecha" src="images/mi-lista/flecha-categorias.svg" alt="icono-flecha" /> </p>
                    </div>
                    <div>
                        <p class="name-category">todos</p>
                    </div>
                </div>
            </div>


            <div class="no-gutters">
                <div class="col-11 mx-auto">
                
                    <div id="claro-canal-favorites">
                    </div>
                    <div id="concert-channel-favorites">
                    </div>
                    <div id="claro-cinema-favorites">
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>