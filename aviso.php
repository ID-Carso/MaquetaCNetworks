<?php

session_start();

if($_SESSION["country"] != 1){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="about">

    <script>
        (function() {$('body').addClass('invisible'); setTimeout(function(){$('body').removeClass('invisible')}, 1000);})();
    </script>
</head>

<body class="bg-bubble">

    <!-- <body class="bg-dark"> -->
    <header>
        <div class="container-fluid">
            <!-- RESPONSIVE -->
            <div class="row">
                <div class="hamburguer-menu">
                    <div class="text-center sidebar-header"></div>
                    <div class="sidebar-content">
                        <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                            <a href="home.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
                        </div>
                        <div class="sidebar-item sidebar-border-bottom">
                            <a href="claro-canal.php" class="sidebar-link"><span class="dropdown-p">CanalClaro</span></a>
                        </div>
                        <div class="sidebar-item sidebar-border-bottom">
                            <a class="sidebar-link" href="concert-channel.php"><span class="dropdown-p">ConcertChannel</span></a>
                        </div>
                        <div class="sidebar-item sidebar-border-bottom">
                            <a class="sidebar-link" href="claro-cinema.php"><span class="dropdown-p">ClaroCinema</span></a>
                        </div>
                        <div class="sidebar-item sidebar-border-bottom">
                            <a target="_blank" class="sidebar-link" href="https://www.nuestravision.com.mx/"><span class="dropdown-p">NuestraVisión</span></a>
                        </div>
                        <div class="sidebar-item sidebar-border-bottom">
                            <a target="_blank" class="sidebar-link" href="https://www.marca.com/claro-mx/"><span class="dropdown-p">ClaroSports</span></a>
                        </div>
                        <div class="sidebar-item sidebar-border-bottom">
                            <a class="sidebar-link" href="programacion.php"><span class="dropdown-p">Programación</span></a>
                        </div>
                    </div>
                    <button class="invisible-button"></button>
                </div>
            </div>
            <div class="row">
                <!-- MENU -->
                <div class="col-12 pr-xl-5 mt-4">
                    <nav class="mx-xl-4 mt-xl-0">
                        <div class="navbar mr-xl-4">
                            <div>
                                <!-- munu tablet -->
                                <img class="menu-responsive-tablet d-none d-md-inline-block d-xl-none" src="./images/home/menu-responsive-black.svg" alt="" />
                                <!-- logo -->
                                <a href="home.php">
                                    <img class="logo logo-black d-none d-md-inline-block" src="./images/home/claro-logo.svg" alt="" />
                                </a>
                            </div>
                            <!-- logo movile -->
                            <a href="home.php">
                                <img class="d-md-none" src="./images/home/claro-logo.svg" alt="" style="width: 120px;" />
                            </a>
                            <!-- user desktop -->
                            <div class="d-none d-xl-block user-options"></div>
                            <!-- munu movile -->
                            <a href="home.php">
                                <img class="menu-responsive d-block d-md-none" src="./images/home/menu-responsive-black.svg" alt="" />
                            </a>
                        </div>
                        <!-- SUBMENU -->
                        <div class="claro-navbar-black claro-navbar">
                            <a href="claro-canal.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item-black text-semibold">Canal Claro</p>
                            </a>
                            <a href="concert-channel.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item-black text-semibold">Concert Channel</p>
                            </a>
                            <a href="claro-cinema.php" class="navbar-link text-decoration-none">
                                <p class="navbar-item-black text-semibold">Claro Cinema</p>
                            </a>
                            <a target="_blank" href="https://nuestravision.tv" class="navbar-link text-decoration-none">
                                <p class="navbar-item-black text-semibold">Nuestra Visión</p>
                            </a>
                            <a href="https://www.marca.com/claro-mx/" target="_blank" class="navbar-link text-decoration-none">
                                <p class="navbar-item-black text-semibold">Claro Sports</p>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid my-xl-5">
        <div class="row">
            <div class="col-12 col-md-11 mx-auto my-md-5 my-4">

                <div class="container-terminos mt-xl-5  mx-auto px-md-5 px-4 position-relative">
                    <img src="./images/General/close-back.png" class="pencil back-close" type="back-close" width="40px">
                    <!-- TITULO -->
                    <h4 id="about_title"></h4>
                    <!-- TEXTO -->
                    <textarea id="about_text" class="mt-5 terms_text px-xl-5" disabled></textarea>
                    <!-- BTN -->
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 text-center">
                                <button style="width: 200px;border: solid 2px #069cb0;color: #069cb0;border-radius: 20px;height: 54px;font-size: 18px;" type="button" class="back-close form-button-outline">CERRAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".back-close").click(function() {
            window.history.back();
        });
    </script>
    

    <!-- <script>
        $('.back-close').click(function(){
            window.location = "footer-edition.php";
        })
    </script> -->
    

</body>

</html>