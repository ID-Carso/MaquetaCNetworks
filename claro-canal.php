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
      include 'menu-mobile.php';
      ?>
      <!--End menú para móvil-->
      <div class="menu-tablet-container">
        <?php
        include './views/partials/menu-tablet-white.php';
        ?>
      </div>

      <?php
      include './views/partials/menu-desktop-white.php'
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
      <div class="header-slider">
        <div class="header-slide">
          <!--<img src="./images/concert-channel/header-image.jpeg" class="rellax" data-rellax="10">-->
        </div>
        <div class="header-slide">
          <!--<img src="./images/header/glastonbury.jpeg" class="rellax" data-rellax="10">-->
        </div>
        <div class="header-slide"></div>
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
          Ve un <span>adelanto</span> de la programación de DFGHDFHG
        </h2>

        <div class="week-claro-video-container">
          <div class="poster">
            <div class="next-week-thumb">
              <div class="a-next-week-rectangle">
                <div class="poster-title-margin rectangle-content">
                  <p class="a-poster-text-white">
                    ¿QUÉ TE HA DADO ESA MUJER?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
    <section class="dont-lose-claro">
      <div class="dont-lose-container">

        <h1 class="a-dontLose-claro-title">no te pierdas</h1>
        <h2 class="a-dontLose-claro-subtitle">
          ve un <span>adelanto</span> de la programación
        </h2>
        <div class="dontLose-video-container">
          <div class="section-slider dontLose-claro-slider">
            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container justify-content-between">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="claro-thumbnail">
                </div>
                <div class="a-claro-rectangle ">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-white">
                      ¿QUÉ TE HA DADO ESA MUJER?
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container justify-content-between">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="claro-thumbnail">
                </div>
                <div class="a-claro-rectangle ">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-white">
                      ¿QUÉ TE HA DADO ESA MUJER?
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container justify-content-between">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="claro-thumbnail">
                </div>
                <div class="a-claro-rectangle ">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-white">
                      ¿QUÉ TE HA DADO ESA MUJER?
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container justify-content-between">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="claro-thumbnail">
                </div>
                <div class="a-claro-rectangle ">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-white">
                      ¿QUÉ TE HA DADO ESA MUJER?
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container justify-content-between">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="claro-thumbnail">
                </div>
                <div class="a-claro-rectangle ">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-white">
                      ¿QUÉ TE HA DADO ESA MUJER?
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container justify-content-between">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="claro-thumbnail">
                </div>
                <div class="a-claro-rectangle ">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-white">
                      ¿QUÉ TE HA DADO ESA MUJER?
                    </p>
                  </div>
                </div>
              </div>
            </div>


            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container justify-content-between">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="claro-thumbnail">
                </div>
                <div class="a-claro-rectangle ">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-white">
                      ¿QUÉ TE HA DADO ESA MUJER?
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="dontLose-slider-tablet">
            <h1 class="a-dontLose-claro-title">solo por canal claro</h1>
            <h2 class="a-dontLose-claro-subtitle">
              ve un <span>adelanto</span> de la programación
            </h2>

            <div class="section-slider dontLose-claro-slider">
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="claro-thumbnail">
                  </div>
                  <div class="a-claro-rectangle ">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-white">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="claro-thumbnail">
                  </div>
                  <div class="a-claro-rectangle ">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-white">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="claro-thumbnail">
                  </div>
                  <div class="a-claro-rectangle ">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-white">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="claro-thumbnail">
                  </div>
                  <div class="a-claro-rectangle ">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-white">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="claro-thumbnail">
                  </div>
                  <div class="a-claro-rectangle ">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-white">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="claro-thumbnail">
                  </div>
                  <div class="a-claro-rectangle ">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-white">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="claro-thumbnail">
                  </div>
                  <div class="a-claro-rectangle ">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-white">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>


    </section>
    <?php
    include 'advertising-section.php'
    ?>
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

</html>