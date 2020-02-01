<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
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
          <a href="claro-canal.php" class="sidebar-link"><span class="dropdown-p">Canal Claro</span></a>
        </div>

        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="concert-channel.php"><span class="dropdown-p">Concert Channel</span></a>
        </div>

        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="claro-cinema.php"><span class="dropdown-p">Claro Cinema</span></a>
        </div>

        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="https://www.nuestravision.com.mx/"><span class="dropdown-p">Nuestra
              Visión</span></a>
        </div>
        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="claro-sports.html"><span class="dropdown-p">Claro Sports</span></a>
        </div>
        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="programacion.php"><span class="dropdown-p">Programación</span></a>
        </div>
      </div>
      <button class="invisible-button"></button>
    </div>

    <div>
      <nav class="menu-perfil">
        <div class="nav-content">
          <div class="claro-logo">
            <img class="menu-responsive" src="./images/home/responsive-menu.svg" alt="" />

            <img class="logo" src="./images/alertas/claro-networks.svg" />
          </div>

          <div class="login">
            <a href="home.php" class="login-item"><img src="./images/alertas/btn-home.svg" /></a>
            <a href="index.html" class="login-item"><img class="login-country" src="" /></a>
          </div>
        </div>
      </nav>
    </div>

    <nav class="menu-tablet" style="padding: calc(3% + 4px) calc(8% - 10px) 0px calc(8% - 10px);">
      <div class="nav-content">
        <div class="claro-logo">
          <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

          <img class="logo" src="./images/home/claro-logo.svg" />
        </div>

        <div class="user-options"></div>
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
          <a href="nuestra-vision.php" class="navbar-link text-decoration-none">
            <p class="navbar-item">Nuestra Visión</p>
          </a>
        </div>
        <div>
          <a href="claro-sports.php" class="navbar-link text-decoration-none">
            <p class="navbar-item">Claro Sports</p>
          </a>
        </div>
        <div>
          <a href="programacion.php" class="navbar-link text-decoration-none">
            <p class="navbar-item">Programación</p>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <div style="padding-top: 3%">
    <div class="col-sm-12 no-gutters col-md-8 offset-md-2 no-gutters col-lg-4 offset-lg-4 col-xl-3 shadow1 fondolog">
      <img src="images/registro/group-10.svg" class="ubicacion5" />
      <br /><br /><br />
      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="tamaño2 centro">
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
                <li rel="claro-canal" class="active-navAvatar">
                  <img src="./images/avatar/avatar-blue1.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="">
                  <img src="./images/avatar/avatar-gray.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="">
                  <img src="./images/avatar/avatar-blue3.svg" />
                </li>
              </div>
              <div class="col-md text-center no-gap">
                <li rel="concert-channel" class="">
                  <img src="./images/avatar/avatar-yellow.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="">
                  <img src="./images/avatar/avatar-blue2.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="">
                  <img src="./images/avatar/avatar-gray2.svg" />
                </li>
              </div>
              <div class=" col-md text-center no-gap">
                <li rel="claro-cinema" class="">
                  <img src="./images/avatar/avatar-purple.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="">
                  <img src="./images/avatar/avatar-red.svg" />
                </li>
                <br />
                <li rel="claro-canal" class="">
                  <img src="./images/avatar/avatar-black.svg" />
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
              OK
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