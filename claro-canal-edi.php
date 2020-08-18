<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
</head>

<body>


  <header class="claro-canal-header">
    <div class="hamburguer-menu">
      <div class="text-center sidebar-header">

      </div>

      <div class="sidebar-content">
        <a href="" class="sidebar-link">
          <div class="sidebar-item sidebar-border-bottom sidebar-border-top">

            <span class="dropdown-p">Inicio</span>

          </div>
        </a>
        <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
          <span class="dropdown-p active-sidebar-item">Canal Claro</span>
        </div>


        <!--<div class="dropdown-content">
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
              </div>-->
        <a class="sidebar-link" href="">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Concert Channel</span>
          </div>
        </a>
        <!--<div class="dropdown-content">
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
              </div>-->
        <a class="sidebar-link" href="">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro Cinema</span>
          </div>
        </a>
        <!--<div class="dropdown-content">
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
              </div>-->
        <a class="sidebar-link" href="" target="_blank">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Nuestra
              Visión</span>
          </div>
        </a>
        <a class="sidebar-link" href="" target="_blank">
          <div class=" sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro
              Sports</span>
          </div>
        </a>
        <!--<a class="sidebar-link" href="programacion.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Programación</span>
          </div>
        </a>-->
        <!--prueba sidebar-->
      </div>
      <button class="invisible-button"></button>
    </div>

    <div class="header">
      <div class="alert-user">
      </div>

      <img src="./images/header/curva.svg" alt="" class="header-curve">

      <!--Menú para móvil -->
      <?php
      include 'menu-mobile.php';
      ?>
      <!--End menú para móvil-->
      <div class="menu-tablet-container">
        <?php
        include './views/partials/menu-tablet-white.php';
        ?>
      </div>

      <?php
      include './views/partials/menu-desktop-black.php'
      ?>

      <!--<div class="header-details header-detail-margin col-md-6">
          <div class="m-header-card">
            <p class="a-header-card-title">Series</p>
            <p class="a-header-card-title">Mad Men</p>
            <p class="a-header-card-subtitle">Estreno<br />Lunes 15</p>
            <p class="a-header-card-text">
              Lunes a Jueves<br />21:00 GRS. | Col.
            </p>
          </div>
          <img src="./images/claro-canal/claro-canal-logo.svg" alt="" />
        </div>-->
      <div class="header-slider" id="banner-claro-canal">

      </div>
    </div>

  </header>
  <main class="today">
    <section class="today-canal-claro">
      <div class="today-container">
        <div class="px-3 mb-3 row no-gutters landing-header position-relative border-t border-l border-r border-b">
          <img src="./images/General/pencil.svg" alt="" class="pencil">
          <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
            <img src="./images/home/tv-1.svg" alt="" class="lading-header-image-claro">
          </div>
          <div class="col-12 col-md-5 col-lg-5 col-xl-5">
            <h1 class="a-today-claro-title">hoy en <span>canal claro</span></h1>
          </div>
          <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-righ">
            <button class="btn-claro-canal a-text-white-semibold btn-tomato" id="ver-programacion">VER
              PROGRAMACIÓN</button>
          </div>
        </div>

        <div class="today-videos-container position-relative border-t border-l border-r border-b p-2">
          <img src=" ./images/General/pencil.svg" alt="" class="pencil">
          <div class="section-slider today-claro-slider-prev">
          </div>
    </section>

    <section class="next-week-claro">
      <div class="next-week-container">
        <div
          class="p-2 mb-3 d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">
          <img src=" ./images/General/pencil.svg" alt="" class="pencil">
          <h1 class="p-0 a-next-claro-title">próxima semana</h1>
          <h2 class="a-next-claro-subtitle pb-0 mb-0">
            Ve un <span>adelanto</span> de la programación
          </h2>
        </div>
        <div class="week-claro-video-container">
          <div class=" p-3 border-t border-l border-r border-b position-relative">
            <img src="./images/General/pencil.svg" alt="" class="pencil">
            <video class="promo-video" autoplay muted controls loop>
              <source src="http://www.claronetworks.openofficedospuntocero.info/video/canal-claro-promo.mp4"
                type="video/mp4">
            </video>
          </div>
        </div>

      </div>
    </section>
    <section class="dont-lose-claro">
      <div class="dont-lose-container">
        <div
          class="p-2 mb-3 d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">
          <img src=" ./images/General/pencil.svg" alt="" class="pencil">
          <h1 class="p-0 a-dontLose-claro-title">TIENES QUE VERLO</h1>
          <h2 class="p-0 a-dontLose-claro-subtitle">
            ¡No te lo puedes perder!
          </h2>
        </div>


        <div class="dontLose-video-container">
          <div class="mb-3 position-relative border-t border-l border-r border-b p-2">
            <img src=" ./images/General/pencil.svg" alt="" class="pencil">
            <div class="section-slider" id="dontLose-claro-sliderEdit">
            </div>
          </div>

          <div
            class="p-2 mb-3 d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">

            <h1 class="p-0 a-dontLose-claro-title">Contenido exclusivo</h1>
            <h2 class="p-0 a-dontLose-claro-subtitle">
              Únete y disfruta nuestras producciones propias.
            </h2>
          </div>
          <div class="position-relative border-t border-l border-r border-b p-2">
            <img src=" ./images/General/pencil.svg" alt="" class="pencil">
            <div class="section-slider dontLose-claro-slider" id="exlusiveContentClaroSliderEdit">
            </div>
          </div>

        </div>
      </div>


    </section>
    <?php
    include 'advertising-section.php'
    ?>
    <div class="">
      <div class="row no-gutters">
        <div class="col-12">
          <div class=" d-flex justify-content-center pt-5 ">
            <h1 class="footer-title-claro">¡síguenos!</h1>

          </div>
        </div>
        <div class="social-media">
          <div class="col ">
            <a href="https://www.facebook.com/CanalClaro/" target="_blank">
              <img class="social-icon" src="./images/redes/facebook-icon-red.svg" alt="" />
            </a>
          </div>
          <div class="col">
            <a href="https://www.instagram.com/canalclaro/?hl=es-la" target="_blank">
              <img class="social-icon" src="./images/redes/insta-icon-red.svg" alt="" />
            </a>
          </div>
          <div class="col">
            <a href="https://twitter.com/canalclaro" target="_blank">
              <img class="social-icon" src="./images/redes/twitter-icon-red.svg" alt="" />
            </a>
          </div>
          <div class="col">
            <a href="https://www.youtube.com/user/CanalClaroTV" target="_blank">
              <img class="social-icon" src="./images/redes/youtube-icon-red.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="cclaro-list-links-footer">
      <?php
      include './views/partials/list-links-footer.php';
      ?>
    </div>
  </main>
  <?php
  include 'footer.php'
  ?>

</body>
<?php
include './views/partials/modal-favorites.php'
?>

<!--Modal de programa al añadir a favoritos-->
<?php
include './views/partials/modal-program.php'
?>

<script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
<script>
  var socket = new easyXDM.Socket({
    onReady: function () {

      var hey = 4300;
      console.log(hey);

      socket.postMessage(hey)

    }
  });

  $("#ver-programacion").click(function () {
    let info = {
      id: 5,
      type: "program"
    }
    socket.postMessage(info);
  });
</script>

</html>