<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="about">

</head>

<body class="fondo">
    <header class="avatar-header">
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
                    <a target="_blank" class="sidebar-link" href="https://www.nuestravision.com.mx/"><span class="dropdown-p">Nuestra
                            Visión</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a target="_blank" class="sidebar-link" href="https://www.marca.com/claro-mx/"><span class="dropdown-p">Claro
                            Sports</span></a>
                </div>
                <div class="sidebar-item sidebar-border-bottom">
                    <a class="sidebar-link" href="programacion.php"><span class="dropdown-p">Programación</span></a>
                </div>
            </div>
            <button class="invisible-button"></button>
        </div>

        <?php
        include './views/partials/menu-mobile-white.php';
        ?>

        <?php
        include './views/partials/menu-tablet-white.php';
        ?>

        <?php
        include './views/partials/menu-desktop-white.php';
        ?>
    </header>

    <div class="terminos-container">
        <div class="col-sm-12 no-gutters col-md-8 no-gutters col-lg-10 col-xl-10 shadow1 fondolog mx-auto">
            <img src="images/registro/group-10.svg" alt="vector-rosa" class="ubicacion5" />
            <br /><br /><br />
            <div class="row ma-no centro">
                <div class="col-sm-12 no-gap">
                    <div class="aviso-header">
                        <p class="titulos-configuraciones" id="terms_title">Términos y condiciones</p>
                    </div>
                </div>
            </div>

            <div class="row ma-no">
                <div class="col-sm-12 no-gap">
                    <div class="tamaño-aviso-terminos ">
                    <p id="terms_text"> </p>
                    </div>
                </div>
            </div>


            <br>
            <div class="row ma-no centro">
                <div class="col-sm-12 no-gap">
                    <div class="tamaño2 centro ">
                        <button type="button" class="form-button-outline terms-conditions-button">
                            CERRAR
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>