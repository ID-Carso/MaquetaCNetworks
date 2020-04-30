<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <?php include 'scripts.php';
    include 'styles.php';
    ?>
    <?php include './views/partials/head.php' ?>
</head>

<body class="fondo-BO">
    <div class="login-container">
        <div class="login-form no-gutters">

            <div class="col-sm-12  col-md-6 no-gutters col-lg-4  col-xl-3 shadow1 fondolog-reco">
                <img src="images/registro/group-10.svg" class="ubicacion5" />
                <img src="images/registro/group-12.svg" class="ubicacion3" />

                <div class="row ma-no no-gutters">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="images/registro/group-3.svg" class="form-image-blue" />
                        <a href="home.php">
                            <img src="./images/home/claro-logo.svg" class="ubicacion1" /></a>

                    </div>
                </div>
                <div class="col-10 col-sm-8 col-md-9 col-lg-10 col-xl-10 mx-auto">
                    <div>
                        <h1 class="registro pt-4 mb-5">Restablece tu contraseña</h1>
                    </div>
                    <form method="POST">
                        <div class="row ma-no centro">
                            <div class="col-sm-12 no-gap">
                                <div>
                                    <div class="position-relative">
                                        <input class="insert-data correo"" type=" password" placeholder="Escribe tu contraseña nueva *" id="new-password" />
                                        <img src="images/registro/eye-none.svg" class="icon-eye" />
                                    </div>
                                    <p class="correo-valido" id="error-password-confirm"> 8 caractéres mínimo
                                        <img src="images/registro/alerta.svg" class="error" />
                                    </p>

                                    <p class="correo-valido" id="error-new-password">
                                        <img src="images/registro/alerta.svg" class="error" />
                                    </p>
                                </div>
                                <div>
                                    <div class="position-relative">
                                        <input class="insert-data correo"" type=" password" placeholder="Escribe tu contraseña de nuevo" id="new-confirm-password" />
                                        <img src="images/registro/eye-none.svg" class="icon-eye" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ma-no centro">
                            <div class="col-sm-12 signup-button-container">
                                <button type="button" class="btn-ingresar-reco text-public mt-5 mb-5" id="send-password-button">
                                    ENVIAR
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>