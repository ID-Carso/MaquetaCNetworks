<?php

session_start();


$_SESSION['login'] = 1;
var_dump($_SESSION['login']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'styles.php';
  include './views/partials/head.php'
  ?>
</head>

<body class="fondo-BO">
  <span class="d-flex align-items-center justify-content-between  py-xl-2 texto">
    <span class="  ml-5 "></span>
    <span class="text-light  mr-5 pt-2">Administrador de contenido</span>

  </span>
  <hr class="bg-light mb-1 pt-0 ml-3 mr-3 mt-2 " />
  <div class="login-container ">
    <div class="login-form no-gutters mb-4">
      <div class="col-sm-12 no-gutters col-md-6  no-gutters col-lg-4  col-xl-3 shadow1 fondolog mb-4">
        <img src="../images/registro/group-10.svg" class="ubicacion5" />

        <div class="row ma-no no-gutters">
          <div class="col-sm-12 col-md-12 col-lg-12 no-gutters ">
            <img src="../images/registro/group-3.svg" class="form-image-blue" />
            <a href="home.php">
              <img src="../images/home/claro-logo.svg" class="ubicacion1" /></a>

          </div>
        </div>
        <br />
        <div class="col-10 col-sm-8 col-md-8 col-lg-9 col-xl-9 mx-auto">
          <form method="POST">
            <div class="row ma-no centro">
              <div class="col-sm-12 no-gap">
                <div class="tamaño2">
                  <input class="insert-data input-email" type="text" placeholder="Correo electrónico" id="login-email" />

                  <img src="../images/registro/group-12.svg" class="ubicacion3" />
                  <p class="correo-valido" id="error_email">
                    Correo válido
                    <img src="../images/registro/alerta.svg" class="error" />
                  </p>
                </div>
              </div>
            </div>
            <br />
            <div class="row ma-no centro">
              <div class=" col-sm-12 no-gap">
                <div class="tamaño2 centro">
                  <div class="position-relative">
                    <input class="insert-data input-password" type="password" id="login-password" name="login-password" placeholder="Contraseña" autocomplete="off" />
                    <img src="../images/registro/eye-none.svg" class="icon-eye" />
                  </div>
                  <p class="caracteres-min">
                    8 caractéres mínimo
                    <img src="../images/registro/listo.svg" class="listo" />

                  </p>

                </div>
              </div>
            </div>
            <div class="centro">
              <!-- <a href="Admin-BO.php"> -->
              <button type="button" class="btn-ingresar-reco" id="button-login">
                INGRESAR
              </button>
              <!-- </a> -->
              <p class="nodatos">
                Aún no has ingresado datos
                <img src="../images/registro/alerta.svg" />
              </p>

            </div>
          </form>
          <br />
          <div class="centro">
            <div class="pb-4">
              <a href="Recopassword.php">
                <p class="contra">¿Olvidaste la contraseña?</p>
              </a>
              <hr class="line btn-margin" />

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>