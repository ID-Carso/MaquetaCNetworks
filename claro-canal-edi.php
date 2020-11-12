<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
  <input type="hidden" id="actual_landing" value="canal_claro">
</head>

<!-- <body style="overflow: hidden;"> -->
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

        <a class="sidebar-link" href="">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Concert Channel</span>
          </div>
        </a>
 
        <a class="sidebar-link" href="">
          <div class="sidebar-item sidebar-border-bottom">
            <span class="dropdown-p">Claro Cinema</span>
          </div>
        </a>
   
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
  
      </div>
      <button class="invisible-button"></button>
    </div>

    <div class="header">
      <div class="alert-user">
      </div>

      <img src="./images/header/curva.svg" alt="header" class="header-curve">

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
      include './views/partials/menu-desktop-black-edi.php'
      ?>

      <div class="header-slider-cinem mx-auto" id="banner-claro-canal-edi">

      </div>

      <div class="d-flex position-absolute programming-dots space-do">
        <div class=" d-inline-block position-relative programming-slider-dots align-items-center">
        </div>
        <img src="./images/General/plus.svg" alt="icono-de-agregar" class="cursor-pointer slider-pagination-add mr-3"
          style="width:42px"/>
      </div>

    </div>

  </header>
  <main class="today">
    <section class="today-canal-claro">
      <div class="today-container">
        <div class="px-3 mb-3 row no-gutters landing-header position-relative border-t border-l border-r border-b">

          <img id="claro-canal-edi-header" src="./images/General/pencil.svg" alt=" " class="pencil"/>

          <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
            <img src="" id="icon_canal_claro" alt="logo-canal-claro" class="lading-header-image-claro"/>
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
          <img id="claro-canal-edi-programacion" src=" ./images/General/pencil.svg" alt=" " class="pencil"/>
          <div class="section-slider today-claro-slider-prev">
          </div>
    </section> 

    <section class="next-week-claro">
      <div class="next-week-container">
        <div
          class="p-2 mb-3 d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">
          <img id="claro-canal-edi-title" src=" ./images/General/pencil.svg" alt=" " class="pencil"/>
          <h1 class="p-0 a-next-claro-title">próxima semana</h1>
          <h2 class="a-next-claro-subtitle pb-0 mb-0">
            Ve un <span>adelanto</span> de la programación
          </h2>
        </div>
        <div class="week-claro-video-container">
          <div class=" p-3 border-t border-l border-r border-b position-relative">
            <img id="claro-canal-edi-promo" src="./images/General/pencil.svg" alt=" " class="pencil"/>
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
          <img id="claro-canal-edi-carrusel-title" src=" ./images/General/pencil.svg" alt=" " class="pencil"/>
          <h1 class="p-0 a-dontLose-claro-title" id="carrusel_1_title">TIENES QUE VERLO</h1>
          <h2 class="p-0 a-dontLose-claro-subtitle" id="carrusel_1_subtitle">
            ¡No te lo puedes perder!
          </h2>
        </div>


        <div class="dontLose-video-container">
          <div class="mb-3 position-relative border-t border-l border-r border-b p-2">
            <img id="claro-canal-edi-carrusel1" src=" ./images/General/pencil.svg" alt=" " class="pencil"/>
            <div class="section-slider" id="dontLose-claro-slider">
            <!-- <div class="section-slider" id="dontLose-claro-sliderEdit"> -->
            </div>
          </div>

          <div
            class="p-2 mb-3 d-xl-inline-block d-lg-inline-block d-md-inline-block d-block position-relative border-t border-l border-r border-b">
            <img id="claro-canal-edi-carrusel-title2" src=" ./images/General/pencil.svg" alt=" " class="pencil"/>
            <h1 class="p-0 a-dontLose-claro-title" id="carrusel_2_title">Contenido exclusivo</h1>
            <h2 class="p-0 a-dontLose-claro-subtitle" id="carrusel_2_subtitle">
              Únete y disfruta nuestras producciones propias.
            </h2>
          </div>
          <div class="position-relative border-t border-l border-r border-b p-2">
            <img id="claro-canal-edi-carrusel2" src=" ./images/General/pencil.svg" alt=" " class="pencil"/>
            <div class="section-slider dontLose-claro-slider" id="exlusiveContentClaroSlider">
            <!-- <div class="section-slider dontLose-claro-slider" id="exlusiveContentClaroSliderEdit"> -->
            </div>
          </div>

        </div>
      </div>


    </section>

    </div>
  </main>


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
  var socketClaro = new easyXDM.Socket({
    onReady: function () {
      var hey = 2500;
      socketClaro.postMessage(hey)
    }
  });

  $("#claro-canal-edi-header").click(function () {
    let type = "claro-header";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);

    socketClaro.postMessage(json);
  });

  $("#claro-canal-edi-programacion").click(function () {
    let type = "claro-programacion";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);

    socketClaro.postMessage(json);
  });

  $("#claro-canal-edi-title").click(function () {
    let type = "claro-title";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);

    socketClaro.postMessage(json);
  });

  $("#claro-canal-edi-promo").click(function () {
    let type = "claro-promo";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);

    socketClaro.postMessage(json);
  });

  $("#claro-canal-edi-carrusel-title").click(function () {
    let type = "claro-carrusel-title";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);
    socketClaro.postMessage(json);
  });

  $("#claro-canal-edi-carrusel-title2").click(function () {
    let type = "claro-carrusel-title2";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);
    socketClaro.postMessage(json);
  });

  $("#claro-canal-edi-carrusel1").click(function () {
    let type = "claro-carrusel1";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);
    socketClaro.postMessage(json);
  });

  $("#claro-canal-edi-carrusel2").click(function () {
    let type = "claro-carrusel2";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);
    socketClaro.postMessage(json);
  });

  $("#ver-programacion").click(function () {
    let type = "btn-redirect-header";
    let data = {
      type: type
    }
    var json = JSON.stringify(data);
    socketClaro.postMessage(json);
  });
  $('.claro-canal-header').on("click", ".slider-pagination-item", function () {
    let type = "slider-pagination";
    let data = {

      type: type
    }
  
    var json = JSON.stringify(data);
    socketClaro.postMessage(json);
  });
</script>

</html>