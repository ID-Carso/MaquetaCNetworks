<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <?php include './views/partials/session.php' ?>
</head>

<body class="fondo">
  <div class="alert-user">
  </div>
  <header class="configuracion-header">
    <?php include('./views/partials/hamburguer-menu.php') ?>

    <div>
      <?php
      include './views/partials/menu-mobile-white.php';
      ?>

      <?php
      include './views/partials/menu-tablet-white.php';
      ?>

      <?php
      include './views/partials/menu-desktop-white.php'
      ?>
  </header>
  <div class="configuracion-container py-md-5 py-lg-5 py-xl-5">

    <div class="col-sm-12 no-gutters col-md-6 mx-auto no-gutters col-lg-4 col-xl-3 shadow1 fondolog card-white">
      <img src="./images/config/arrow-back-icon.svg" alt="" class="arrow-back">
      <img src="images/registro/group-10.svg" class="ubicacion5" />
      <img src="images/config/puntos.svg" class="ubicacionpuntos" />
      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="centro">
            <p class="titulos-configuraciones">Configuración</p>
          </div>
        </div>
      </div>
      <div class="col-10 mx-auto col-sm-10 col-md-10 col-lg-10 col-xl-10 options-conf-container">
        <div class="position-relative option-config border-config">
          <a href="alertas.php">
            <p class="texto-config">
              Alertas
              <img class="flechalink-icon" src="images/config/flecha.svg" />
            </p>
          </a>
        </div>
        <div class="position-relative option-config border-config">
          <a href="avatar.php">
            <p class="texto-config">
              Cambiar avatar
              <img class="flechalink-icon" src="images/config/flecha.svg" />
            </p>
          </a>
        </div>
        <div class="position-relative option-config border-config">
          <a href="datos.php">
            <p class="texto-config">
              Datos adicionales
              <img class="flechalink-icon" src="images/config/flecha.svg" />
            </p>
          </a>
        </div>
      </div>
</body>

</html>