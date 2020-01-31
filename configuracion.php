<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
</head>

<body class="fondo">
  <header class="configuracion-header">
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

            <img class="logo" src="./images/alertas/claro-networks.svg" alt="" />
          </div>

          <div class="login">
            <a href="home.php" class="login-item"><img src="./images/alertas/btn-home.svg" alt="" /></a>
            <a href="index.php" class="login-item"><img class="login-country" src="" alt="" /></a>
          </div>
        </div>
      </nav>
    </div>

    <nav class="menu-tablet" style="    padding: calc(3% + 4px) calc(8% - 10px) 0px calc(8% - 10px);">
      <div class="nav-content">
        <div class="claro-logo">
          <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

          <img class="logo" src="./images/home/claro-logo.svg" alt="" />
        </div>

        <div class="login">
          <a href="login.php" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
          <a href="index.php" class="login-item"><img class="login-country" src="" alt="" /></a>
        </div>
      </div>
    </nav>
    <?php
    include 'menu-desktop.php';
    ?>
  </header>
  <div class="configuracion-container py-5">

    <div class="col-sm-12 no-gutters col-md-6 mx-auto no-gutters col-lg-4 col-xl-3 shadow1 fondolog">

      <img src="images/registro/group-10.svg" class="ubicacion5" />
      <img src="images/config/puntos.svg" class="ubicacionpuntos" />
      <div class="row ma-no centro">
        <div class="col-sm-12 no-gap">
          <div class="centro">
            <p class="titulos-configuraciones py-5">Configuración</p>
          </div>
        </div>
      </div>
      <div class="col-10 mx-auto col-sm-8 col-md-8 col-lg-8 col-xl-10">
        <div class="row ma-no centro">
          <div class="col-sm-12 no-gap">
            <div class="tamaño2 centro ">
              <a href="alertas.php">
                <label class="border-config">
                  <p class="texto-config">
                    Alertas
                    <img class="flechalink-icon" src="images/config/flecha.svg" />
                  </p>
                </label>
              </a>
            </div>
          </div>
        </div>
        <br />
        <div class="row ma-no centro">
          <div class="col-sm-12 no-gap">
            <div class="tamaño2 centro ">
              <a href="avatar.php">
                <label class="border-config">
                  <p class="texto-config">
                    Cambiar avatar
                    <img class="flechalink-icon" src="images/config/flecha.svg" />
                  </p>
                </label>
              </a>
            </div>
          </div>
        </div>
        <br />
        <div class="row ma-no centro">
          <div class="col-sm-12 no-gap pb-5">
            <div class="tamaño2 centro ">
              <a href="datos.php">
                <label class="border-config">
                  <p class="texto-config">
                    Datos adicionales
                    <img class="flechalink-icon" src="images/config/flecha.svg" />
                  </p>
                </label>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>