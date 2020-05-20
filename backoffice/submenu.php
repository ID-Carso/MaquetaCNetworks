<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include 'scripts.php';
    include
        'styles.php';
    ?>

</head>

<body>
    <main>

        <div id="menu">
            <!--  <div class="float-right mr-5 margin-top-por">
                    
                    <div>
                        <img src="./images/mobile.svg" class="a-prev-image ml-3 mr-3" alt="mobile" id="prev-mobile">
                        <img src="./images/tablet.svg" class="a-prev-image" alt="tablet" id="prev-tablet">
                        <img src="./images/pc.svg" class="a-prev-image ml-3" alt="pc" id="prev-desktop">
                    </div>
                    <p class="a-text-black-semibold a-prev-title prev">PREVISUALIZAR</p>
    </div>-->
            <nav class="d-flex col-xl-11 navbar-expand-sm justify-content-center mb-5" id="option">
                <div class="navbar-progra d-flex align-items-center justify-content-center mt-5">
                    <img src="./images/arrow-gray.svg" alt="flecha" class="arrow-progra arrow-progra-left">
                    <!--<span class="p-3 arrow arrow-left">
            < </span>-->
                    <div class="navbar-progra-item navbar-progra-item-border navbar-progra-active navbar-canal-claro" navbar-index="1" rel="navbar-prev-canal-claro">
                        <div class="navbar-progra-item-container ml-3 mr-3">
                            <p class="py-2 px-3 mb-0 a-text-regular-blacktwo">CANAL CLARO</p>

                        </div>

                    </div>

                    <div class="navbar-progra-item navbar-progra-item-border  navbar-sinopsis" navbar-index="2" rel="navbar-prev-sinopsis">
                        <div class="navbar-progra-item-container ml-3 mr-3">
                            <p class="a-text-regular-blacktwo py-2 px-3 mb-0">SINÓPSIS</p>
                        </div>

                    </div>


                    <div class="navbar-progra-item navbar-progra-item-border  navbar-programacion" navbar-index="3" rel="navbar-prev-programacion">
                        <div class="navbar-progra-item-container ml-3 mr-3">
                            <p class="a-text-regular-blacktwo py-2 px-3 mb-0">PROGRAMACIÓN</p>
                        </div>

                    </div>


                    <div class="navbar-progra-item navbar-home" navbar-index="4" rel="navbar-prev-home">
                        <div class="navbar-progra-item-container ml-3 mr-3">
                            <p class="a-text-regular-blacktwo py-2 px-3 mb-0">HOME</p>
                        </div>

                    </div>

                    <img src="./images/arrow-gray.svg" alt="flecha" class="arrow-progra arrow-progra-right">
                    <!--<span class="p-3 arrow arrow-right">><span>-->
                </div>

            </nav>
            <div class="navbar-progra-content" id="navbar-prev-canal-claro">
            <?php include './prev/views/partials/head.php' ?>
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
      include './prev/menu-mobile.php';
      ?>
      <!--End menú para móvil-->
      <div class="menu-tablet-container">
        <?php
        include './prev/views/partials/menu-tablet-white.php';
        ?>
      </div>

      <?php
      include './prev/views/partials/menu-desktop-black.php'
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
        <div class="row no-gutters landing-header">
          <div class="col-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-left text-lg-left text-xl-left">
            <img src="./images/home/tv-1.svg" alt="" class="lading-header-image-claro">
          </div>
          <div class="col-12 col-md-5 col-lg-5 col-xl-5">
            <h1 class="a-today-claro-title">hoy en <span>canal claro</span></h1>
          </div>
          <div class="col-12 col-md-4 col-lg-4 col-xl-4 text-center text-md-right text-lg-right text-xl-righ">
            <a href="programacion.php"><button class="btn-claro-canal a-text-white-semibold btn-tomato">VER PROGRAMACIÓN</button></a>
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
          <video class="promo-video" autoplay muted controls loop>
            <source src="http://www.claronetworks.openofficedospuntocero.info/video/canal-claro-promo.mp4" type="video/mp4">
          </video>
          <!--<div class="poster">
            <div class="next-week-thumb">
              <div class="a-next-week-rectangle">
                <div class="poster-title-margin rectangle-content">
                  <p class="a-poster-text-white">
                    ¿QUÉ TE HA DADO ESA MUJER?
                  </p>
                </div>
              </div>
            </div>
          </div>-->
        </div>


      </div>
    </section>
    <section class="dont-lose-claro">
      <div class="dont-lose-container">

        <h1 class="a-dontLose-claro-title">TIENES QUE VERLO</h1>
        <h2 class="a-dontLose-claro-subtitle">
          <!-- ve un <span>adelanto</span> de la programación -->
          ¡No te lo puedes perder!
        </h2>
        <div class="dontLose-video-container">
          <div class="section-slider" id="dontLose-claro-slider">
          </div>
          <div>
            <h1 class="a-dontLose-claro-title">Contenido exclusivo</h1>
            <h2 class="a-dontLose-claro-subtitle">
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
            </div>
            <div class="navbar-progra-content" id="navbar-prev-sinopsis">
            <div id="prev-sinopsis">
            <div class="float-left ml-5">
                <div><input type="radio" id="1" value="" disabled /> <label for="1" class="a-btn-check"></label><span class=" ml-2 a-text-grey">Guardar cambios</span>
                    <input type="radio" id="2" value="" disabled /> <label for="2" class="ml-5 a-btn-check"></label><span class=" ml-2 a-text-grey">No guardar cambios</span>
                </div>
            </div>
            <div class="clearfix"></div>
                          <div class="mx-auto shadow mt-5  mb-5 content-table">
                    <div class="contenedor-fila">
                        <div class="contenedor-columna centro program titletable">
                            <span class="a-text-white-regular a-text-prev">Programa</span>
                        </div>
                        <div class="contenedor-columna centro channel titletable">
                            <span class="a-text-white-regular a-text-prev">Canal</span>
                        </div>
                        <div class="contenedor-columna centro channel titletable">
                            <span class="a-text-white-regular a-text-prev">Acciones</span>
                        </div>
                        <div class="contenedor-columna centro channel  titletable">
                            <span class="a-text-white-regular a-text-prev">Revisión</span>
                        </div>
                    </div>
                    <div class="contenedor-fila">
                        <div class="contenedor-columna">
                            <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                        </div>
                        <div class="contenedor-columna centro">
                            <span class="a-text-medium-black text-normal ">Canal Claro</span>
                        </div>
                        <div class="contenedor-columna centro">
                            <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi "></input>
                        </div>
                        <div class="contenedor-columna centro ">
                            <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                <input type="checkbox">
                                <span class="checkmark1"></span>
                            </label>
                        </div>
                    </div>
                    <div class="contenedor-fila">
                        <div class="contenedor-columna">
                            <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                        </div>
                        <div class="contenedor-columna centro">
                            <span class="a-text-medium-black  text-normal ">Canal Claro</span>
                        </div>
                        <div class="contenedor-columna centro">
                            <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi "></input>
                        </div>
                        <div class="contenedor-columna centro ">
                            <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                <input type="checkbox">
                                <span class="checkmark1"></span>
                            </label>
                        </div>
                    </div>
                    <div class="contenedor-fila">
                        <div class="contenedor-columna">
                            <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                        </div>
                        <div class="contenedor-columna centro ">
                            <span class="a-text-medium-black text-normal ">Canal Claro</span>
                        </div>
                        <div class="contenedor-columna centro ">
                            <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi"></input>
                        </div>
                        <div class="contenedor-columna centro">
                            <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                <input type="checkbox">
                                <span class="checkmark1"></span>
                            </label>
                        </div>
                    </div>
                    <div class="contenedor-fila">
                        <div class="contenedor-columna">
                            <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                        </div>
                        <div class="contenedor-columna centro ">
                            <span class="a-text-medium-black text-normal ">Canal Claro</span>
                        </div>
                        <div class="contenedor-columna centro">
                            <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi"></input>
                        </div>
                        <div class="contenedor-columna centro">
                            <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                <input type="checkbox">
                                <span class="checkmark1"></span>
                            </label>
                        </div>
                    </div>
                    <div class="contenedor-fila">
                        <div class="contenedor-columna">
                            <span class="a-text-medium-black text-normal pd-5">Mad Men</span>
                        </div>
                        <div class="contenedor-columna centro ">
                            <span class="a-text-medium-black text-normal ">Canal Claro</span>
                        </div>
                        <div class="contenedor-columna centro">
                            <input type="image" src="./images/lapiz-acti.svg" alt="" class=" btn-focus edi"></input>
                        </div>
                        <div class="contenedor-columna centro">
                            <label class=" d-inline-block mr-4 pl-4 mb-5 mt-3 checksquare">
                                <input type="checkbox">
                                <span class="checkmark1"></span>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            <div class="navbar-progra-content" id="navbar-prev-programacion">
                <p>Programación</p>
            </div>
            <div class="navbar-progra-content" id="navbar-prev-home">
                <p>Home</p>
            </div>

        </div>

    </main>

</body>

</html>