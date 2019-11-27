<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./slick-master/slick/slick.css" />
  <link rel="stylesheet" href="./slick-master/slick/slick-theme.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="slick-master/slick/slick.js"></script>
  <script src="./js/jquery.browser.js"></script>
  <script src="./js/lib/rellax.js"></script>
  <script src="./js/main.js" type="module"></script>
  <title>Document</title>
</head>

<body class="claro-cinema-content">
  <header class="claro-cinema-header">
    <div class="hamburguer-menu">
      <div class="text-center">
        <a href="home.php"><img src="./images/menu/claro-networks-sidebar.svg" alt="" class="logo-sidebar" /></a>
      </div>
      <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
        <a href="home.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
      </div>
      <div class="sidebar-content">
        <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
          <a href="claro-canal.php" class="sidebar-link"><span class="dropdown-p">Canal Claro</span></a>
        </div>
        <!--<div class="dropdown-content">
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
                <p class="dropdown-p">ebñrkjg</p>
              </div>-->
        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="concert-channel.php"><span class="dropdown-p">Concert Channel</span></a>
        </div>
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
        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="nuestra-vision.php"><span class="dropdown-p">Nuestra
              Visión</span></a>
        </div>
        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="claro-sports.php"><span class="dropdown-p">Claro
              Sports</span></a>
        </div>
        <div class="sidebar-item sidebar-border-bottom">
          <a class="sidebar-link" href="programacion.php"><span class="dropdown-p">Programación</span></a>
        </div>
        <!--prueba sidebar-->
      </div>
      <button class="invisible-button"></button>
    </div>

    <div class="header">
      <img src="./images/header/yellow-curve.png" alt="" class="header-curve">
      <nav class="menu">
        <div class="nav-content">
          <div class="claro-logo">
            <img class="menu-responsive" src="./images/home/responsive-menu.svg" alt="" />

            <a href="home.php"><img class="logo" src="./images/home/claro-logo.png" alt="" /></a>
          </div>

          <div class="login">
            <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
            <a href="index.html" class="login-item"><img src="" alt="" class="login-country" /></a>
          </div>
        </div>
      </nav>
      <nav class="menu-tablet">
        <div class="nav-content">
          <div class="claro-logo">
            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />

            <a href="home.php">
              <img class="logo" src="./images/home/claro-networks-black.svg" alt="" />
            </a>
          </div>

          <div class="login">
            <a href="login.html" class="login-item"><img src="./images/home/user-login.svg" alt="" /></a>
            <a href="index.html" class="login-item"><img class="login-country" alt="" /></a>
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
          <img src="./images/concert-channel/header-image.jpeg" class="rellax" data-rellax="10">
        </div>
        <div class="header-slide">
          <img src="./images/header/glastonbury.jpeg" class="rellax" data-rellax="10">
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
            <div class="section-slider cinema-slider">
              <div class="poster">
                <div class="poster-body">
                  <div class="showtime-container">
                    <p class="a-programming-text">14:30 - 16:30</p>
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
                        ¿QUÉ TE HA DADO ESA MUJER?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                    <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                  </div>
                  <div class="thumbnail">
                  </div>
                  <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                      <p class="a-poster-text-black">
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
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-black">
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
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-black">
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
                    <div class="showtime-container">
                      <p class="a-programming-text">14:30 - 16:30</p>
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-black">
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
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-black">
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
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-black">
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
                      <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                    </div>
                    <div class="thumbnail">
                    </div>
                    <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                        <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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
                  <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/poster-add.svg" alt=""></button>
                </div>
                <div class="thumbnail">
                </div>
                <div class="a-cinema-rectangle">
                  <div class="poster-title-margin">
                    <p class="a-poster-text-black">
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

</body>

</html>