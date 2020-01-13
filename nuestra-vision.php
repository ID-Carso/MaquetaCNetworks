<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <link rel="shortcut icon" type="image/png" href="./images/favicon/claro-fav.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./slick-master/slick/slick.css" />
  <link rel="stylesheet" href="./slick-master/slick/slick-theme.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="slick-master/slick/slick.js"></script>
  <script src="./js/jquery.browser.js"></script>
  <script src="./js/lib/rellax.js"></script>
  <script src="./js/lib/easyXDM.min.js"></script>
  <script src="./js/main.js" type="module"></script>
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
            <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
            <a href="index.html" class="login-item"><img src="" alt="" class="login-country" /></a>
          </div>
        </div>
      </nav>
      <?php
      include 'menu-desktop.php';
      ?>
    </div>
  </header>
  <div id="vision-container"></div>



</body>

</html>