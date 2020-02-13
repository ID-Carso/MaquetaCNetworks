<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <script src="./js/lib/easyXDM.min.js"></script>
  <script type="text/javascript">
    new easyXDM.Socket({
      remote: "vision.php",
      container: "vision-container",
      onMessage: function(message, origin) {
        console.log(message);
        this.container.getElementsByTagName("iframe")[0].setAttribute("scrolling", "no");
        this.container.getElementsByTagName("iframe")[0].style.height = message + "px";

        //this.container.getElementsByTagName("iframe")[0].style.width = "800px";
      }
    });
  </script>
  <title>Claro Networks</title>
</head>

<body>
  <header class="marca-header">
    <div class="hamburguer-menu">
      <div class="text-center sidebar-header">

      </div>
      <a href="home.php" class="sidebar-link">
        <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
          <span class="dropdown-p">Inicio</span>
        </div>
      </a>
      <div class="sidebar-content">
        <a href="claro-canal.php" class="sidebar-link">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Canal Claro</span>
          </div>
        </a>
        <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
        <a class="sidebar-link" href="concert-channel.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Concert Channel</span>
          </div>
        </a>
        <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
        <a class="sidebar-link" href="claro-cinema.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro Cinema</span>
          </div>
        </a>
        <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->

        <div class="sidebar-item sidebar-border-bottom">
          <span class="dropdown-p active-sidebar-item">Nuestra
            Visión</span>
        </div>
        <a class="sidebar-link" href="claro-sports.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro
              Sports</span>
          </div>
        </a>
        <a class="sidebar-link" href="programacion.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Programación</span>
          </div>
        </a>

      </div>

      <!--prueba sidebar-->
    </div>
    <button class="invisible-button"></button>
    </div>
    <div class="header">
      <!--Menú para móvil -->
      <?php
      include 'menu-mobile.php';
      ?>
      <!--End menú para móvil-->
      <nav class="menu-tablet">
        <div class="nav-content">
          <div class="claro-logo">
            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

            <a class="home.php">
              <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
            </a>
          </div>

          <div class="login">
            <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
          </div>
        </div>
      </nav>
      <nav class="menu-desktop">
        <div class="nav-content">
          <div class="claro-logo">

            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

            <a href="home.php">
              <img class="logo" src="./images/home/claro-logo.svg" alt="" />
            </a>
          </div>

          <div class="user-options">

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
    </div>
  </header>
  <div id="vision-container"></div>



</body>

</html>