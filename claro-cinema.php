<?php

session_start();

if ($_SESSION["country"] != 1) {
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
      	<!--metadato de indexación-->

<link rel=”canonical” href=”http://www.claronetworks.openofficedospuntocero.info/v1.2/claro-cinema.php”/>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179528937-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-179528937-1');
  </script>
  <script src="https://www.googleoptimize.com/optimize.js?id=OPT-5S7NP6G"></script>

  <?php include './views/partials/head.php' ?>
  <input type="hidden" id="actual_landing" value="claro_cinema">
 <!--Parte de Rich Snippets-->
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "author": "Claro Networks",
  "contentRating": "Mature",
  "image": "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/home/cinema-home-img.svg",
  "name": "Claro Cinema",
  "description": "México es un país fantástico, encantador, lleno de historias, leyendas, ocurrencias, y sucesos peculiares. Obviamente, su cine tenía que reflejar todo esto y más. En Claro Cinema te encontrarás con íconos que marcaron época: la trilogía de Ismael Rodríguez, el inigualable lenguaje de René Cardona; las inolvidables actuaciones de Pedro Infante, María Félix, Miroslava, entre otros; la peculiar galantería de Mauricio Garcés o la, todavía mayor, de Alfonso Zayas. Con una mirada única a las películas que hicieron época, descubrirás que el cine mexicano está más vivo que nunca."
}
</script>
</head>

<body class="claro-cinema-content">
  <header class="claro-cinema-header">
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
          <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
            <span class="dropdown-p">Canal Claro</span>
          </div>

        </a>
      
        <a class="sidebar-link" href="concert-channel.php">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Concert Channel</span>
          </div>
        </a>
   
        <div class="sidebar-item sidebar-border-bottom">
          <span class="dropdown-p active-sidebar-item">Claro Cinema</span>
        </div>
      
        <a class="sidebar-link" href="https://nuestravision.tv" target="_blank">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Nuestra
              Visión</span>
          </div>
        </a>
        <a class="sidebar-link" href="https://www.marca.com/claro-mx/" target="_blank">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro
              Sports</span>
          </div>
        </a>
     
        <!--prueba sidebar-->
      </div>
      <button class="invisible-button"></button>
    </div>

    <div class="header">
      <div class="alert-user">
      </div>
      <img src="./images/header/yellow-curve.png" alt="header" class="header-curve"/>
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
      <div>
        <?php
        //menu nuevo y anterior
        include './views/partials/menu-desktop-black.php';
            include './views/partials/menu-canal.php';
        ?>
      </div>

      
      <div class="header-slider" id="banner-claro-cinema">
      </div>
    </div>

  </header>
  <main>
    <div class="claro-cinema-container">
      <section class="today-claro-cinema">
        <div class="row no-gutters landing-header">
          <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
          <div class="h-image d-flex align-items-center">
             <img src="./images/home/cinema-home-img.svg" alt="logo-claro-cinema" class="lading-header-image-cinema object-cover" id="icon_claro_cinema"/>
          </div>
          </div>
          <div class="col-12 col-md-5 col-lg-5 col-xl-5">
            <h1 class="a-today-cinema-title">hoy en <span>claro cinema</span></h1>
          </div>
          <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-righ">
            <a href="programacion-cinema.php"><button class="btn-teal-blue a-text-white-semibold btn-claro-cinema">VER
                PROGRAMACIÓN</button>
            </a>
          </div>
        </div>

        <div class="no-gutters">
          <div class="today-cinema-videos-container">
            <div class="section-slider cinema-slider today-claro-cinema-slider">
            </div>
          </div>
        </div>
      </section>
      <section class="imperdibles">
        <div class="header-title-section">
          <h1 class="a-cinema-title">las <span>imperdibles</span></h1>
          <h2 class="a-cinema-subtitle">
            ve un <span>adelanto</span> de la programación
          </h2>
        </div>
        <div class="imperdibles-video-container">
          <video class="promo-video" playsinline autoplay muted controls loop>
            <source src="http://www.claronetworks.openofficedospuntocero.info/video/claro-cinema-promo.mp4" type="video/mp4">
          </video>
        </div>

      </section>
      <section class="recordar">
        <div class="header-title-section">
          <div class="">
            <h1 class="a-cinema-title ">
              recordar es volver <span class="recordar-title">a vivir</span>
            </h1>
            <h2 class="a-cinema-subtitle">
              <!-- ve un <span>adelanto</span> de la programación -->
              ¿Cómo ligaban antes del Tinder? Revive una época fascinante
            </h2>
          </div>
        </div>
        <div class="recordar-container-videos">
          <div class="section-slider cinema-slider" id="claro_cinema_carrusel_1">
          </div>
        </div>

      </section>
      <section class="only-claro-cinema">
        <div class="header-title-section">
          <div>
            <h1 class="a-cinema-title"> sexy <span>románticas</span></h1>
            <h2 class="a-cinema-subtitle">
              <!-- ve un <span>adelanto</span> de la programación -->
              Películas para subir la temperatura
            </h2>
          </div>
        </div>
        <div class="only-videos-container mb-xl-5">
          <div class="section-slider cinema-slider" id="claro_cinema_carrusel_2">
          </div>
        </div>

      </section>
      <section>
        <?php
        include 'advertising-section.php';
        ?>
        <div class="ccinema-list-links-footer">
          <?php
          include './views/partials/list-links-footer.php';
          ?>
        </div>
      </section>
      <footer>
        <?php
        include 'footer.php';
        ?>
      </footer>
    </div>

  </main>
  <?php
  include './views/partials/modal-favorites.php'
  ?>

  <!--Modal de programa al añadir a favoritos-->
  <?php
  include './views/partials/modal-program.php'
  ?>

</body>

</html>