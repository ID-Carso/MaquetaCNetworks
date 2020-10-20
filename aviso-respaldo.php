<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>
    <input type="hidden" id="actual_landing" value="about">

</head>

<body class="fondo">
    <header class="avatar-header">
        <?php include('./views/partials/hamburguer-menu.php') ?>

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

    <div class="aviso-container">
        <div class="col-sm-12 no-gutters col-md-10 no-gutters col-lg-10 col-xl-10 shadow1 fondolog">
            <img src="images/registro/group-10.svg" class="ubicacion5" alt="vector-rosa" />
            <br /><br /><br />
            <div class="row ma-no centro">
                <div class="col-sm-12 no-gap">
                    <div class="aviso-header">
                        <p class="title-aviso text-semibold" id="about_title">Aviso de privacidad</p>
                    </div>
                </div>
            </div>
            <div class="row ma-no">
                <div class="col-sm-12 no-gap">
                    <div class="tamaño-aviso-terminos">
                        <p id="about_text"></p>
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