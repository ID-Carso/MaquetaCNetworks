<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <?php include './views/partials/session.php' ?>
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
                    <a class="sidebar-link" href="https://nuestravision.tv"><span class="dropdown-p">Nuestra
                            Visión</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="https://www.marca.com/claro-mx/"><span class="dropdown-p">Claro
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
                    <a href="" class="sidebar-link">
                        <p class="dropdown-p">TODOS</p>
                    </a>
                </div>
                <div class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <p class="dropdown-p">PELÍCULAS</p>
                    </a>
                </div>

                <div class="sidebar-item ">
                    <a class="sidebar-link" href="">
                        <p class="dropdown-p">SERIES</p>
                    </a>
                </div>

                <div class="sidebar-item ">
                    <a class="sidebar-link" href="">
                        <p class="dropdown-p">DOCUMENTALES</p>
                    </a>
                </div>

                <div class="sidebar-item ">
                    <a class="sidebar-link" href="">
                        <p class="dropdown-p">CONCIERTOS</p>
                    </a>
                </div>
                <div class="sidebar-item ">
                    <a class="sidebar-link" href="">
                        <p class="dropdown-p">PROGRAMAS</p>
                    </a>
                </div>
                <div class="sidebar-item ">
                    <a class="sidebar-link" href="">
                        <p class="dropdown-p">DEPORTES</p>
                    </a>
                </div>
                <div class="sidebar-item ">
                    <img class="tache_button" src="images/mi-lista/cerrar-categorias.svg">
                </div>
            </div>

        </div>


        <?php include('./views/partials/menu-perfil.php') ?>

        <nav class="menu-tablet">
            <div class="nav-content">
                <div class="claro-logo">
                    <img class="menu-responsive-tablet" src="./images/home/responsive-menu.svg" alt="" />

                    <a href="home.php"><img class="logo" src="./images/alertas/claro-networks.svg" alt="" /></a>
                </div>

                <div class="login">
                    <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
                </div>
            </div>
        </nav>
        <nav class="menu-desktop">
            <div class="nav-content">
                <div class="claro-logo">

                    <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                    <a href="home.php">
                        <img class="logo" src="./images/home/claro-logo.svg" alt="" />
                    </a>
                </div>

                <div class="user-options"></div>
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
                    <a href="https://nuestravision.tv" class="navbar-link text-decoration-none">
                        <p class="navbar-item">Nuestra Visión</p>
                    </a>
                </div>
                <div>
                    <a href="https://www.marca.com/claro-mx/" class="navbar-link text-decoration-none">
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
    <div class="alert-user">
    </div>
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