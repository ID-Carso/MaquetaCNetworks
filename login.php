<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preload" href="./images/General/loader.gif" as="image">
  <?php include './views/partials/head.php' ?>
  <?php include './views/partials/session-start.php' ?>
</head>

<body class="fondo">
  <div class="login-container">
    <div class="login-form no-gutters">
      <div class="col-sm-12 no-gutters col-md-6  no-gutters col-lg-4  col-xl-3 shadow1 fondolog formContainer">
        <img src="images/registro/group-10.svg" class="ubicacion5" />
        <div class="row ma-no no-gutters">
          <div class="col-sm-12 col-md-12 col-lg-12 no-gutters ">
            <img src="images/registro/group-3.svg" class="form-image-blue" />
            <a href="home.php">
              <img src="./images/home/claro-logo.svg" class="ubicacion1" /></a>
            <img src="images/registro/group-37.svg" class="ubicacion" />
          </div>
        </div>
        <br />
        <div class="col-10 col-sm-8 col-md-8 col-lg-9 col-xl-9 mx-auto">
          <form method="POST">
            <div class="row ma-no centro">
              <div class="col-sm-12 no-gap">
                <div class="tamaño2">
                  <input class="insert-data input-email" type="text" placeholder="Correo electrónico" id="login-email" />

                  <img src="images/registro/group-12.svg" class="ubicacion3" />
                  <p class="correo-valido" id="error_email">
                    Correo válido
                    <img src="images/registro/alerta.svg" class="error" />
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
                    <img src="images/registro/eye-none.svg" class="icon-eye" />
                  </div>
                  <p class="caracteres-min">
                    8 caractéres mínimo
                    <img src="images/registro/listo.svg" class="listo" />
                  </p>


                </div>
              </div>
            </div>
            <br />
            <p class="data-incorrect"></p>
            <div class="row ma-no centro margin-top-por">
              <!--<div class="col-sm-12 d-flex  justify-content-center align-items-center">
                <input type="checkbox" id="cuenta" />
                <label for="cuenta">Recordar cuenta</label>
              </div>-->
            </div>

            <div class="row ma-no centro">
              <div class="col-sm-12">

                <button type="button" class="login-button form-button-primary" id="login-button">
                  INICIA SESIÓN
                </button>
                <p class="nodatos">
                  Aún no has ingresado datos
                  <img src="images/registro/alerta.svg" />
                </p>
              </div>
            </div>
          </form>
          <br />
          <div class="row ma-no centro">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <a href="re-password.php">
                <p class="contra">¿Olvidaste la contraseña?</p>
              </a>
              <hr class="log" />
              <p class="nocuenta">¿No tienes cuenta?</p>
            </div>
          </div>

          <div class="row ma-no centro">
            <div class="col-sm-12 signup-button-container">
              <a href="registro.php">
                <button type="button" class="signup-button form-button-outline">
                  REGÍSTRATE
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>