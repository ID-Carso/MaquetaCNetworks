<?php

session_start();

if($_SESSION["country"] != 1){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <link rel="preload" href="./images/General/loader.gif" as="image">
        <?php include './views/partials/head.php' ?>
        <?php include './views/partials/session-start.php' ?>

</head>

<body class="fondo">

        <div class="signup-container">
                <div class="login-form no-gutters">
                        <div
                                class="col-sm-12 no-gutters col-md-6 no-gutters col-lg-4 col-xl-3 shadow1 fondolog formContainer">
                                <img src="./images/config/arrow-back-icon.svg" alt="flecha-regresar" class="arrow-back"/>
                                <img src="images/registro/group-10.svg" class="ubicacion6" alt="vector-rosa"/>
                                <div class="row ma-no no-gutters">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                <img src="images/registro/group-3.svg" class="form-image-blue" alt="vector-azul"/>
                                                <a href="home.php"> <img src="./images/home/claro-logo.svg"
                                                                class="ubicacion1" alt="logo-claro-networks" /></a>
                                                <img src="images/registro/group-37.svg" class="ubicacion" alt="vector-rosa">
                                        </div>
                                </div>
                                <div class="col-9 col-sm-10 col-md-8 col-lg-10 col-xl-9 mx-auto">
                                        <div class="row ma-no">
                                                <div class="mt-5">
                                                        <p class="registro">REGÍSTRATE</p>
                                                </div>
                                        </div>
                                        <br>
                                        <form method="POST">
                                                <div class="row ma-no centro">
                                                        <div class="col-sm-12 no-gap">
                                                                <div>
                                                                        <input class="insert-data" type="text"
                                                                                id="usuario" name="usuario"
                                                                                placeholder="Nombre de usuario">
                                                                        <p class="nouser">
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row ma-no centro">
                                                        <div class="col-sm-12 no-gap">
                                                                <div class="centro">
                                                                        <input class="insert-data input-email"
                                                                                type="email" id="signup-correo"
                                                                                name="correo"
                                                                                placeholder="Correo electrónico">
                                                                        <p class="correo-valido" id="error_email">
                                                                                Correo válido
                                                                                <img src="images/registro/alerta.svg"
                                                                                        class="error" alt="icono-alerta"/>
                                                                        </p>

                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row ma-no centro">
                                                        <div class=" col-sm-12 no-gap">
                                                                <div class="centro">
                                                                        <div class="position-relative">
                                                                                <input class="insert-data"
                                                                                        type="password"
                                                                                        id="signup-password"
                                                                                        name="signup-password"
                                                                                        placeholder="Contraseña">
                                                                                <img src="images/registro/eye-none.svg"
                                                                                        class="ubicacion4 icon-eye" alt="icono-ver-contraseña" />
                                                                        </div>


                                                                        <p class="caracteres-min">8 caractéres mínimo
                                                                                <img src="images/registro/listo.svg"
                                                                                        class="listo" alt="icono-listo"/>
                                                                        </p>

                                                                </div>
                                                        </div>
                                                </div>

                                                <p class="nodatos"> Aún no has ingresado datos <img
                                                                src="images/registro/alerta.svg" alt="icono-alerta"/>
                                                </p>
                                                <p class="data-incorrect"></p>


                                                <footer class="txtcontenido">

                                                        <span class="aviso-priv">Al continuar aceptas los</span>
                                                        <a href="terminos.php">
                                                                <p class="aviso-priv-blue espacio-bottom">Términos y
                                                                        condiciones
                                                        </a> <span class="aviso-priv">así como el </span> <a
                                                                href="aviso.php">
                                                                <span class=" aviso-priv-blue">Aviso de</span>

                                                                <span class="aviso-priv-blue">privacidad</span> </a></p>
                                                </footer>
                                                <br>
                                                <div>
                                                        <div>
                                                                <button type="button"
                                                                        class="signup-button form-button-primary"
                                                                        data-target="#mensaje">SIGUIENTE</button>
                                                        </div>
                                                </div>
                                        </form>
                                </div>


                                <br>
                                <!-- Modal -->
                                <div class="modal fade " id="mensaje" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content modal-estilo">
                                                        <div class="modal-header"
                                                                style="border-bottom: none !important; justify-content: center; ">
                                                                <p class="hola">HOLA, <span class="usuario"
                                                                                id="modal-username">EDUARDO</span> </p>
                                                        </div>


                                                        <div class="modal-body txtcontenido">
                                                                <span class="mensaje">Nos da mucho gusto que</span>
                                                                <span class="mensaje">quieras conectarte con</span>
                                                                <span class="mensaje">nosotros.</span>
                                                                <br>
                                                                <span class="enviamos">Te hemos enviado un correo para
                                                                </span>
                                                                <span class="confirma">confirmar tu registro.</span>
                                                                <br>
                                                                <span class="mensaje">¡Revísalo, confirma y</span>
                                                                <span class="mensaje">comenzamos! </span>
                                                        </div>
                                                        <div class="modal-footer"
                                                                style="border-top:none !important; justify-content: center;">

                                                                <button type="button" class="form-button-primary"
                                                                        id="modal-button"
                                                                        data-dismiss="modal">ENTENDIDO</button>


                                                        </div>

                                                </div>
                                        </div>
                                </div>


                        </div>
                </div>


        </div>
</body>

</html>