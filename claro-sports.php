<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <script src="./js/lib/easyXDM.min.js"></script>
  <script type="text/javascript">
    new easyXDM.Socket({
      remote: "marca.php",
      container: "marca-container",
      onMessage: function(message, origin) {
        console.log(message);
        this.container.getElementsByTagName("iframe")[0].setAttribute("scrolling", "no");
        this.container.getElementsByTagName("iframe")[0].style.height = message + "px";

        //this.container.getElementsByTagName("iframe")[0].style.width = "800px";
      }
    });
  </script>
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
        <a href="concert-channel.php" class="sidebar-link">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p ">Concert
              Channel</span>
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
        <a class="sidebar-link" href="nuestra-vision.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Nuestra
              Visión</span>
          </div>
        </a>
        <div class="sidebar-item sidebar-border-bottom">
          <span class="dropdown-p active-sidebar-item">Claro
            Sports</span>
        </div>
        <a class="sidebar-link" href="programacion.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Programación</span>
          </div>
        </a>
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

            <img class="logo" src="./images/home/claro-logo.svg" alt="" />
          </div>

          <div class="login">
            <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
          </div>
        </div>
      </nav>

    </div>
    <?php
    include 'menu-desktop.php';
    ?>
  </header>
  <div id="marca-container">

  </div>



</body>

</html>