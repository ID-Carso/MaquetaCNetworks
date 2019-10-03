<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta
      names="apple-mobile-web-app-status-bar-style"
      content="black-translucent"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick.css" />
    <link rel="stylesheet" href="./slick-master/slick/slick-theme.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="slick-master/slick/slick.js"></script>
    <script src="./js/jquery.browser.js"></script>
    <script src="./js/main.js"></script>
  </head>
  <body>
    <header class="claro-canal-header">
      <div class="hamburguer-menu">
        <div class="text-center">
          <a href="index.php"><img
            src="./images/menu/claro-networks-sidebar.svg"
            alt=""
            class="logo-sidebar"
          /></a>
        </div>
        <div class="sidebar-content">
        <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
              <a href="index.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
          </div>
          <div class="sidebar-item sidebar-border-bottom">
             <span class="dropdown-p active-sidebar-item">Canal Claro</span>  
          </div>
          <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
          <div class="sidebar-item sidebar-border-bottom">
            <a class="sidebar-link" href="concert-channel.php"
              ><span class="dropdown-p"
                >Concert Channel</span
              ></a
            >
          </div>
          <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
          <div class="sidebar-item sidebar-border-bottom">
            <a class="sidebar-link" href="claro-cinema.php"
              ><span class="dropdown-p">Claro Cinema</span></a
            >
          </div>
          <!--<div class="dropdown-content">
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
              <p class="dropdown-p">ebñrkjg</p>
            </div>-->
          <div class="sidebar-item sidebar-border-bottom">
            <a class="sidebar-link" href="#"
              ><span class="dropdown-p">Nuestra Visión</span></a
            >
          </div>
          <div class="sidebar-item sidebar-border-bottom">
            <a class="sidebar-link" href="#"
              ><span class="dropdown-p">Claro Sports</span></a
            >
          </div>
          <div class="sidebar-item sidebar-border-bottom">
            <a class="sidebar-link" href="#"
              ><span class="dropdown-p">Programación</span></a
            >
          </div>
          <!--prueba sidebar-->
        </div>
        <button class="invisible-button"></button>
      </div>

      <div class="header">
        <nav class="menu">
          <div class="nav-content">
            <div class="claro-logo">
              <img
                class="menu-responsive"
                src="./images/home/responsive-menu.svg"
                alt=""
              />

              <a href="index.php"><img class="logo" src="./images/home/claro-logo.png" alt="" /></a>
            </div>

            <div class="login">
              <a href="login.html" class="login-item"
                ><img src="./images/home/user-login.svg" alt=""
              /></a>
              <a href="paises.html" class="login-item"
                ><img src="./images/home/pais.svg" alt=""
              /></a>
            </div>
          </div>
        </nav>
        <div class="claro-navbar">
          <div>
            <a href="#" class="navbar-link text-decoration-none">
              <p class="navbar-item">Canal Claro</p>
            </a>
          </div>
          <div>
            <a href="#" class="navbar-link text-decoration-none">
              <p class="navbar-item">Concert Channel</p>
            </a>
          </div>
          <div>
            <a href="#" class="navbar-link text-decoration-none">
              <p class="navbar-item">Claro Cinema</p>
            </a>
          </div>
          <div>
            <a href="#" class="navbar-link text-decoration-none">
              <p class="navbar-item">Nuestra Visión</p>
            </a>
          </div>
          <div>
            <a href="#" class="navbar-link text-decoration-none">
              <p class="navbar-item">Claro Sports</p>
            </a>
          </div>
          <div>
            <a href="#" class="navbar-link text-decoration-none">
              <p class="navbar-item">Programación</p>
            </a>
          </div>
        </div>
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
      </div>
    </header>
    <main class="today">
      <section class="today-canal-claro">
        <div class="col-12">
          <h1 class="a-today-claro-title">hoy en <span>canal claro</span></h1>
        </div>
        
        <div class="slick-slider small-poster" id="today-claro-slider">
          <div class="row no-gutters">
            <div class="col columnGap">
              <div class="claro-thumbnail">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                </div>
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
          <div class="row no-gutters">
            <div class="col columnGap">
              <div class="claro-thumbnail">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                </div>
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
          <div class="row no-gutters">
            <div class="col columnGap">
              <div class="claro-thumbnail">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                </div>
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
      </section>
      <section class="next-week-claro">
        <div class="col-12">
          <h1 class="a-next-claro-title">próxima semana</h1>
          <h2 class="a-next-claro-subtitle">
            Ve un <span>adelanto</span> de la programación de DFGHDFHG
          </h2>
        </div>

        <div class="slick-slider small-poster" id="next-week-slider">
          <div class="row no-gutters">
            <div class="col columnGap">
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
          <div class="row no-gutters">
            <div class="col columnGap">
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
          <div class="row no-gutters">
            <div class="col columnGap">
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
        <div class="col-12">
          <h1 class="a-dontLose-claro-title">no te pierdas</h1>
          <h2 class="a-dontLose-claro-subtitle">
            ve un <span>adelanto</span> de la programación
          </h2>
        </div>
        <div class="slick-slider small-poster" id="dontLose-claro-slider">
          <div class="row no-gutters">
            <div class="col columnGap">
              <div class="claro-thumbnail">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                </div>
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
          <div class="row no-gutters">
            <div class="col columnGap">
              <div class="claro-thumbnail">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                </div>
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
          <div class="row no-gutters">
            <div class="col columnGap">
              <div class="claro-thumbnail">
                <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                </div>
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
      </section>
      <?php 
        include 'advertising-section.php'
      ?>
      <section>
        <div class="">
          <div class="row no-gutters">
            <div class="col-12">
              <h1 class="footer-title-claro">¡síguenos!</h1>
            </div>
            <div class="social-media">
              <div class="col ">
                <img
                  class="social-icon"
                  src="./images/redes/facebook-icon-red.svg"
                  alt=""
                />
              </div>
              <div class="col">
                <img
                  class="social-icon"
                  src="./images/redes/insta-icon-red.svg"
                  alt=""
                />
              </div>
              <div class="col">
                <img
                  class="social-icon"
                  src="./images/redes/twitter-icon-red.svg"
                  alt=""
                />
              </div>
              <div class="col">
                <img
                  class="social-icon"
                  src="./images/redes/youtube-icon-red.svg"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php 
        include 'footer.php'
    ?>
  </body>
</html>
