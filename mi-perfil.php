<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi perfil</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="slick-master/slick/slick.js"></script>
    <script src="./js/jquery.browser.js"></script>
    <script src="./js/lib/rellax.js"></script>
    <script src="./js/main.js" type="module"></script>
</head>


<body class="fondo">
    <header class="perfil-header">
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

        <nav class="menu-tablet">
            <div class="nav-content">
                <div class="claro-logo">
                    <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

                    <a href="home.php">
                        <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
                    </a>
                </div>

                <div class="login">
                    <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
                    <a href="index.html" class="login-item"><img class="login-country" alt="" /></a>
                </div>
            </div>
        </nav>
        <?php
        include 'menu-desktop.php';
        ?>

    </header>

    <div class="perfil-container">
        <div class="col-sm-12 no-gutters col-md-4 mx-auto no-gutters col-lg-4 col-xl-3 shadow1 fondolog">
            <img src="images/registro/group-10.svg" class="ubicacion5" />
            <img src="images/config/puntos.svg" class="ubicacionpuntos">

            <div class="row ma-no centro">
                <div class="col-sm-12 no-gap">
                    <div class="centro">
                        <img class="avatar-usuario" src="images/avatar/avatar-blue.svg">

                        <p class="texto-usuario-miperfil"> Eduardo </p>
                    </div>
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="row ma-no centro">
                    <div class="col-sm-12 no-gap">
                        <div class="centro ">
                            <a href="mi-lista.php"> <label class="border-config">
                                    <p class="texto-config"> Mi lista </p>
                                    <img class="flechalink-icon" src="images/config/flecha.svg" />
                                </label>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row ma-no centro">
                    <div class="col-sm-12 no-gap">
                        <div class="centro ">
                            <a href="configuracion.html"> <label class="border-config">
                                    <p class="texto-config"> Configuración </p>
                                    <img class="flechalink-icon" src="images/config/flecha.svg" />
                                </label>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row ma-no centro">
                    <div class="col-sm-12 no-gap">
                        <div class="centro ">
                            <a href="registro.html"><button type="button" class="close-button">
                                    CERRAR SESIÓN
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

</body>

</html>