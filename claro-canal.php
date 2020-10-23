<?php

session_start();

if($_SESSION["country"] != 1){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
      	<!--metadato de indexación-->
<link rel=”canonical” href=”http://www.claronetworks.openofficedospuntocero.info/v1.2/claro-canal.php”/>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179528937-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-179528937-1');
</script>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-5S7NP6G"></script>

  <?php include './views/partials/head.php' ?>
  <input type="hidden" id="actual_landing" value="canal_claro">
 <!--Parte de Rich Snippets-->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "author": "Claro Networks",
  "contentRating": "Everyone",
  "image": "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/home/tv-1.svg",
  "name": "Claro Canal",
  "description": "Entérate de nuestra programación y las distintas opciones que Claro TV tiene para ti.",
  "dateModified": 2020
}
</script>

</head>

<body>
  <header class="claro-canal-header">
    <div class="hamburguer-menu">
      <div class="text-center sidebar-header">

      </div>

      <div class="sidebar-content">
        <a href="home.php" class="sidebar-link">
          <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
            <span class="dropdown-p">Inicio</span>
          </div>
        </a>
        <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
          <span class="dropdown-p active-sidebar-item">Canal Claro</span>
        </div>
        <a class="sidebar-link" href="concert-channel.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Concert Channel</span>
          </div>
        </a>
      
        <a class="sidebar-link" href="claro-cinema.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro Cinema</span>
          </div>
        </a>
      
        <a class="sidebar-link" href="https://nuestravision.tv" target="_blank">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Nuestra
              Visión</span>
          </div>
        </a>
        <a class="sidebar-link" href="https://www.marca.com/claro-mx/" target="_blank">
          <div class=" sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro
              Sports</span>
          </div>
        </a>
     
      </div>
      <button class="invisible-button"></button>
    </div>

    <div class="header">
      <div class="alert-user">
      </div>
      <img src="./images/header/curva.svg" alt="header" class="header-curve"/>

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
      include './views/partials/menu-canal.php'
      ?>
      <div class="header-slider" id="banner-claro-canal">

      </div>
    </div>

  </header>
  <main class="today">
    <section class="today-canal-claro">
      <div class="today-container">
        <div class="row no-gutters landing-header">
          <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
            <img src="" id="icon_canal_claro" alt="icono-canal-claro" class="lading-header-image-claro"/>
          </div>
          <div class="col-12 col-md-5 col-lg-5 col-xl-5">
            <h1 class="a-today-claro-title">hoy en <span>canal claro</span></h1>
          </div>
          <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-righ"
            id="btn-claro-canal">
            <a href="programacion.php"><button class="btn-claro-canal a-text-white-semibold btn-tomato">VER
                PROGRAMACIÓN</button></a>
          </div>
        </div>

        <div class="today-videos-container">
          <div class="section-slider today-claro-slider">
          </div>
    </section>

    <section class="next-week-claro">
      <div class="next-week-container">


        <h1 class="a-next-claro-title">próxima semana</h1>
        <h2 class="a-next-claro-subtitle">
          Ve un <span>adelanto</span> de la programación
        </h2>

        <div class="week-claro-video-container">
          <video class="promo-video" playsinline autoplay muted controls loop>
            <source src="http://www.claronetworks.openofficedospuntocero.info/video/canal-claro-promo.mp4"
              type="video/mp4">
          </video>
       
        </div>


      </div>
    </section>
    <section class="dont-lose-claro">
      <div class="dont-lose-container">

        <h1 class="a-dontLose-claro-title" id="carrusel_1_title">TIENES QUE VERLO</h1>
        <h2 class="a-dontLose-claro-subtitle" id="carrusel_1_subtitle">
          <!-- ve un <span>adelanto</span> de la programación -->
          ¡No te lo puedes perder!
        </h2>
        <div class="dontLose-video-container">
          <div class="section-slider" id="dontLose-claro-slider">
          </div>
          <div>
            <h1 class="a-dontLose-claro-title" id="carrusel_2_title">Contenido exclusivo</h1>
            <h2 class="a-dontLose-claro-subtitle" id="carrusel_2_subtitle">
              <!-- ve un <span>adelanto</span> de la programación -->
              Únete y disfruta nuestras producciones propias.
            </h2>

            <div class="section-slider dontLose-claro-slider" id="exlusiveContentClaroSlider">
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
          <h1 class="footer-title-claro">¡síguenos!</h1>
        </div>
        <div class="social-media">
          <div class="col ">
            <a href="https://www.facebook.com/CanalClaro/" target="_blank">
              <img class="social-icon" src="./images/redes/facebook-icon-red.svg" alt="icono-facebook" />
            </a>
          </div>
          <div class="col">
            <a href="https://www.instagram.com/canalclaro/?hl=es-la" target="_blank">
              <img class="social-icon" src="./images/redes/insta-icon-red.svg" alt="icono-insta" />
            </a>
          </div>
          <div class="col">
            <a href="https://twitter.com/canalclaro" target="_blank">
              <img class="social-icon" src="./images/redes/twitter-icon-red.svg" alt="icono-twitter" />
            </a>
          </div>
          <div class="col">
            <a href="https://www.youtube.com/user/CanalClaroTV" target="_blank">
              <img class="social-icon" src="./images/redes/youtube-icon-red.svg" alt="icono-youtube" />
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

      var hey = 3500;
      console.log(hey);

      socket.postMessage(hey)
    }
  });
</script>

</html>