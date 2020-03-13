<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <?php include './views/partials/session.php' ?>
</head>

<body class="fondo">
  <header class="avatar-header">
    <?php include('./views/partials/hamburguer-menu.php') ?>
    <?php include('./views/partials/menu-perfil.php') ?>

    <nav class="menu-tablet" style="padding: calc(3% + 4px) calc(8% - 10px) 0px calc(8% - 10px);">
      <div class="nav-content">
        <div class="claro-logo">
          <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

          <a href="home.php"><img class="logo" src="./images/home/claro-logo.svg" /></a>
        </div>

        <div class="login">
          <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
        </div>
      </div>
    </nav>
    <nav class="menu-desktop">
      <div class="nav-content">
        <div class="claro-logo">

          <a href="home.php"><img class="logo" src="./images/logos/claro-networks-white.svg" /></a>
        </div>

        <div class=" user-options">
        </div>
      </div>
      <div class="claro-navbar">
        <div>
          <a href="claro-canal.php" class="navbar-link text-decoration-none">
            <p class="navbar-item">Canal Claro</p>
          </a>
        </div>
        <div>
          <a href="concert-channel.php" class="navbar-link text-decoration-none">
            <p class="navbar-item">Concert Channel</p>
          </a>
        </div>
        <div>
          <a href="claro-cinema.php" class="navbar-link text-decoration-none">
            <p class="navbar-item">Claro Cinema</p>
          </a>
        </div>
        <div>
          <a target="_blank" href="https://nuestravision.tv" class="navbar-link text-decoration-none">
            <p class="navbar-item">Nuestra Visión</p>
          </a>
        </div>
        <div>
          <a target="_blank" href="https://www.marca.com/claro-mx/" class="navbar-link text-decoration-none">
            <p class="navbar-item">Claro Sports</p>
          </a>
        </div>
        <!--<div>
          <a href="programacion.php" class="navbar-link text-decoration-none">
            <p class="navbar-item">Programación</p>
          </a>
        </div>-->
      </div>
    </nav>
  </header>

  <div style="padding-top: 3%">
    <div class="col-sm-12 no-gutters col-md-8 mx-auto no-gutters col-lg-4 col-xl-3 shadow1 fondolog position-relative card-white avatar-container">
      <img src="./images/config/arrow-back-icon.svg" alt="" class="arrow-back">
      <img src="images/registro/group-10.svg" class="ubicacion5" />

      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="centro">
            <p class="titulos-configuraciones">Avatar</p>
          </div>
        </div>
      </div>
      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="tamaño2 centro">
            <p class="texto-sub-avatar">Elige un avatar para tu cuenta</p>
          </div>
        </div>
      </div>

      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="tamaño2 centro">
            <ul class="lista-avatar  ">
              <div class="col-md text-center no-gap">
                <li rel="claro-canal" class="active-navAvatar avatar-item">
                  <img _id="1" src="./images/avatar/avatar-blue1.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="avatar-item">
                  <img _id="2" src="./images/avatar/avatar-gray.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="avatar-item">
                  <img _id="3" src="./images/avatar/avatar-blue3.svg" />
                </li>
              </div>
              <div class="col-md text-center no-gap">
                <li class="avatar-item">
                  <img _id="4" src="./images/avatar/avatar-yellow.svg" />
                </li>
                <br />
                <li class="avatar-item">
                  <img _id="5" src="./images/avatar/avatar-blue2.svg" />
                </li>
                <br />
                <li class="avatar-item">
                  <img _id="6" src="./images/avatar/avatar-gray2.svg" />
                </li>
              </div>
              <div class=" col-md text-center no-gap">
                <li class="avatar-item">
                  <img _id="7" src="./images/avatar/avatar-purple.svg" />
                </li>
                <br />
                <li class="avatar-item">
                  <img _id="8" src="./images/avatar/avatar-red.svg" />
                </li>
                <br />
                <li class="avatar-item">
                  <img _id="9" src="./images/avatar/avatar-black.svg" />
                </li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="tamaño2 centro ">
            <button type="button" class="acept-button" id="avatar-button">
              GUARDAR
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade " id="mensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-estilo">


        <div class="modal-body txtcontenido">
          <img src="./images/datos-adicionales/success.svg" />
          <span class="mensaje">Nuevo avatar guardado exitosamente</span>
        </div>
        <div class="modal-footer" style="border-top:none !important; justify-content: center;">

          <button type="button" class="form-button-primary" id="modal-button" data-dismiss="modal">ENTENDIDO</button>


        </div>

      </div>
    </div>
  </div>
</body>

</html>