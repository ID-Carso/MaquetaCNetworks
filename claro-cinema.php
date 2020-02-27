<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './views/partials/head.php' ?>
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
        <div class="sidebar-item sidebar-border-bottom">
          <span class="dropdown-p active-sidebar-item">Claro Cinema</span>
        </div>
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
        <!--prueba sidebar-->
      </div>
      <button class="invisible-button"></button>
    </div>

    <div class="header">
      <div class="alert-user">
      </div>
      <img src="./images/header/yellow-curve.png" alt="" class="header-curve">
      <!--Menú para móvil -->
      <?php
      include 'menu-mobile.php';
      ?>
      <!--End menú para móvil-->
      <nav class="menu-tablet">
        <div class="nav-content">
          <div class="claro-logo">
            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

            <a href="home.php">
              <img class="logo" src="./images/home/claro-logo.svg" alt="" />
            </a>
          </div>

          <div class="login">
            <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
          </div>
        </div>
      </nav>
      <?php
      include 'menu-desktop.php';
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
  <main>
    <div class="claro-cinema-container">
      <section class="today-claro-cinema">
        <h1 class="a-today-cinema-title">hoy en <span>claro cinema</span></h1>
        <div class="no-gutters">
          <div class="today-cinema-videos-container">
            <div class="section-slider cinema-slider today-claro-cinema-slider">
              <!--<div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/01-encapuchados.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">ENCAPUCHADOS</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>

              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/02-muneca-reina.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">MUÑECA REINA</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/03-la-nina-de-mis-ojos.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">LA NIÑA DE MIS OJOS</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/04-chanoc.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">CHANOC</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/05-palabra-de-cine.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">PALABRA DE CINEA</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/06-culpa-hombres.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">LA CULPA DE LOS HOMBRES</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/07-cuando-se-quiere-se-quiere.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">CUANDO SE QUIERE, SE QUIERE</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/08-el-superflaco.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">EL SUPERFLACO</p>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <a href="sinopsis.php">
                    <div class="thumbnail">
                      <img src="./images/claro-cinema/carrousel/09-el-detective.jpg" alt="">
                    </div>
                    <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">EL DETECTIVE</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>-->
            </div>
          </div>
        </div>


      </section>
      <section class="imperdibles">
        <div class="header-title-section">
          <div class="">
            <h1 class="a-cinema-title">las <span>imperdibles</span></h1>
            <h2 class="a-cinema-subtitle">
              ve un <span>adelanto</span> de la programación
            </h2>
          </div>
        </div>
        <div class="imperdibles-video-container">
          <div class="imperdibles-videos-mobile">
            <div class="imperdibles-slider cinema-slider">
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
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
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
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
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
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
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
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


          <!--Imperdibles: videos para tablet-->
          <div class="imperdibles-videos-tablet">
            <div class="row">
              <div class="col poster-pad-r poster-section">
                <div class="poster">
                  <div class="poster-body">
                    <div class="showtime-container">
                      <p class="a-programming-text">14:30 - 16:30</p>
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">
                          ¿QUÉ TE HA DADO ESA MUJER?
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col poster-pad-l">
                <div class="poster">
                  <div class="poster-body">
                    <div class="showtime-container">
                      <p class="a-programming-text">14:30 - 16:30</p>
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
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

          <div class="imperdibles-videos-desktop">
            <div class="row">
              <div class="col poster-pad-r poster-pad-b poster-section">
                <div class="poster">
                  <div class="poster-body">

                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">
                          ¿QUÉ TE HA DADO ESA MUJER?
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col poster-pad-l poster-pad-b">
                <div class="poster">
                  <div class="poster-body">
                    <div class="showtime-container">
                      <p class="a-programming-text">14:30 - 16:30</p>
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
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
            <div class="row">
              <div class="col poster-pad-r poster-pad-t poster-section">
                <div class="poster">
                  <div class="poster-body">
                    <div class="showtime-container">
                      <p class="a-programming-text">14:30 - 16:30</p>
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-white">
                          ¿QUÉ TE HA DADO ESA MUJER?
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col poster-pad-l poster-pad-t">
                <div class="poster">
                  <div class="poster-body">
                    <div class="showtime-container">
                      <p class="a-programming-text">14:30 - 16:30</p>
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
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
      <section class="recordar">
        <div class="header-title-section">
          <div class="">
            <h1 class="a-cinema-title ">
              recordar es volver <span class="recordar-title">a vivir</span>
            </h1>
            <h2 class="a-cinema-subtitle">
              ve un <span>adelanto</span> de la programación
            </h2>
          </div>
        </div>
        <div class="recordar-container-videos">
          <div class="section-slider cinema-slider">
            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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

      </section>
      <section class="only-claro-cinema">
        <div class="header-title-section">
          <div>
            <h1 class="a-cinema-title"> solo por <span>claro cinema</span></h1>
            <h2 class="a-cinema-subtitle">
              ve un <span>adelanto</span> de la programación
            </h2>
          </div>
        </div>
        <div class="only-videos-container">
          <div class="section-slider cinema-slider">
            <div class="poster">
              <div class="poster-body">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class=" thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
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

      </section>
      <section>
        <?php
        include 'advertising-section.php';
        ?>
        <div class="">
          <div class="row no-gutters">
            <div class="col-12">
              <h1 class="footer-title-claro">¡síguenos!</h1>
            </div>
            <div class="social-media">
              <div class="col ">
                <img class="social-icon" src="./images/redes/facebook-icon-red.svg" alt="" />
              </div>
              <div class="col">
                <img class="social-icon" src="./images/redes/insta-icon-red.svg" alt="" />
              </div>
              <div class="col">
                <img class="social-icon" src="./images/redes/twitter-icon-red.svg" alt="" />
              </div>
              <div class="col">
                <img class="social-icon" src="./images/redes/youtube-icon-red.svg" alt="" />
              </div>
            </div>
          </div>
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
</body>

</html>