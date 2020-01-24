<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
</head>

<body class="fondo">
  <div class="login-container">
    <div class="login-form">
      <div class="col-sm-12 no-gutters col-md-6 no-gutters col-lg-4  col-xl-3 shadow1 fondolog">
        <img src="images/registro/group-10.svg" class="ubicacion5" />
        <img src="images/registro/group-12.svg" class="ubicacion3" />

        <div class="row ma-no ">
          <div class="col-sm-12 col-md-12 col-lg-12 no-gutters ">
            <img src="images/registro/group-3.svg" class="form-image-blue" />
            <a href="home.php">
              <img src="images/registro/group-24.svg" class="ubicacion1" /></a>
            <img src="images/registro/group-37.svg" class="ubicacion" />
          </div>
        </div>
        <div class="col-10 col-sm-8 col-md-8 col-lg-9 col-xl-9 mx-auto">
          <div>
            <h1 class="re-password-title mt-5 mb-3">Recupera tu contraseña</h1>
            <p class="re-password-text mb-5">
              ingresa tu correo electrónico
            </p>
          </div>
          <form method="POST">
            <div class="row ma-no centro">
              <div class="col-sm-12 no-gap">
                <div class="tamaño2">
                  <input class="input-email insert-data" type="email" placeholder="Correo electrónico"
                    id="re-password-email" />
                  <p class="correo-valido" id="error_email">
                    Correo válido
                    <img src="images/registro/alerta.svg" class="error" />
                  </p>
                </div>
              </div>
            </div>

            <div class="row ma-no centro">
              <div class="col-sm-12 signup-button-container">
                <button type="button" class="form-button-outline re-password-button" id="reset-email">
                  RECUPERAR
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