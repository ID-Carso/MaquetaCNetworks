<!DOCTYPE html>
<html lang="en">

<head>
 
    <?php include './views/partials/head.php' ?>

</head>

<body>
    <!--Menú para móvil -->
    <?php
    include 'menu-mobile.php';
    ?>
    <!--End menú para móvil-->
    <div class="hamburguer-menu">
        <div class="text-center sidebar-header">
        </div>
        <div class="sidebar-content">
            <a href="home.php" class="sidebar-link">
                <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                    <span class="dropdown-p">Inicio</span>
                </div>
            </a>
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
                    <span class="dropdown-p">Concert
                        Channel</span>
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
            <a class="sidebar-link" href="https://nuestravision.tv">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Nuestra
                        Visión</span>
                </div>
            </a>
            <a target="_blank" class="sidebar-link" href="https://www.marca.com/claro-mx/">
                <div class="sidebar-item sidebar-border-bottom">
                    <span class="dropdown-p">Claro
                        Sports</span>
                </div>
            </a>
            <!--prueba sidebar-->
        </div>
        <button class="invisible-button"></button>
    </div>
    <main>
        <div class="alert-user">
        </div>
        <header class="home-header-mobile">
            <div class="header-details header-detail-margin">
                <h1 class="header-h1">
                    <span class="header-span"></span>
                </h1>
            </div>
            <div class="header-slider" id="slider-header-home">

            </div>
        </header>
        <header class="home-header">

            <div class="circle-video">
                <video preload="yes" playsinline autoplay muted loop class="home-video">
                    <div class=" border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                              <source src="./video/video.mp4" type="video/mp4" class="source-video" />
                     </div>
                </video>
            </div>

            <div class="header">

                <img src="./images/home/american-horror.jpeg" class="background-home rellax" data-rellax="10">
                <nav class="menu-tablet">
                    <div class="nav-content">
                        <div class="claro-logo">
                            <img class="menu-responsive-tablet" src="./images/home/menu-responsive-black.svg" alt="" />
                            <div class=" border-t border-l border-r border-b position-relative mb-2">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <img class="logo" src="./images/home/claro-logo.svg" alt="" />
                            </div>
                        </div>

                        <div class="login">
                            <a href="index.php" class="login-item"><img class="login-country" alt="" src="images/paises/ecuador.svg"></a>
                        </div>
                    </div>
                </nav>
                <?php
                include './views/partials/menu-desktop-black.php'
                ?>

                <div class="header-details header-detail-margin col-md-6">
                    <h1 class="header-h1">
                    <div class="p-3 border-t border-l border-r border-b position-relative mb-2"style="width: 120%;">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <span class="header-span">Descubre<br>Claro</div> <div class=" border-t border-l border-r border-b position-relative"style="width: 130%;">
                             <img src="../images/pencil.svg" alt="" class="pencil"></span>Networks</div>
                    </h1>
                </div>
            </div>
        </header>
        <section class="o-tv-section margin-ahora-tv">
            <h2 class="title-tv"></h2>
        </section>
        <section>
            <div class="o-tv-section">

                <div class="row no-gutters">
                    <ul class="tv-list col-md-11">
                        <div class="col-md text-center no-gap border-right">
                            <li rel="claro-canal" class="active-navItem nav-li">
                            <div class=" position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                                <img class="claro-nav-image" src="" alt="" />
                            </div>
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right">
                            <li rel="concert-channel" class="nav-li">
                            <div class=" position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                                <img class="nav-image concert-nav-image" src="" alt="" />
                            </div>
                            </li>
                        </div>
                        <div class="col-md text-center no-gap">
                            <li rel="claro-cinema" class="nav-li">
                            <div class=" position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                                <img class="nav-image cinema-nav-image" src="" alt="" />
                            </div>
                            </li>
                        </div>

                    </ul>
                </div>
                <div class="tv-videos-container">
                    <div id="claro-canal" class="tv-content">
                        <div class="tv-slider today-claro-slider" id="tv-claro-slider">
                        </div>
                    </div>
                    <!--Concert channel de "Ahora en tv"-->
                    <div id="concert-channel" class="tv-content">
                        <div class="tv-slider today-concert-channel-slider" id="tv-concert-slider">
                        </div>
                    </div>
                    <!--End Concert channel de "Ahora en tv"-->
                    <!--Claro cinema de "Ahora en tv"-->
                    <div id="claro-cinema" class="tv-content">
                        <div class="tv-slider today-claro-cinema-slider" id="tv-cinema-slider">
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </section>
        <div class="our-channels">
            <h1 class="our-channels-title">
                Nuestros Canales
            </h1>
        </div>
        <!--Sección de Canal Claro-->
        <div class="o-claro-section">
            <!--Sección Canal Claro mobile-->
            <div class="claro-canal-mobile">
                <div class="m-home-titles text-center">
                    <a href="claro-canal.php" class="home-title-link">
                    <div class=" border-t border-l border-r border-b position-relative mb-2">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <img src="./images/home/tv-1.svg" class="claro-image-header">
                    </div>
                    </a>
                    <h2 class="a-subtitle a-claro-home-subtitle">
                        <!--LO MEJOR EN SERIES Y <br><span>PELÍCULAS INTERNACIONALES</span>-->

                    </h2>
                </div>
                <div class="text-center">
                    <a href="claro-canal.php"> 
                    <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <button class="btn-red btn-canal-claro-home">VER +</button>
                    </div>
                    </a>
                </div>
                <div class="section-slider claro-slider-home">
                </div>

            </div>
            <!--End Sección Canal Claro mobile-->
            <!--Sección Canal Claro tablet-->
            <div class="claro-canal-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header">
                    <div class="m-home-titles">
                        <a href="claro-canal.php" class="home-title-link">
                        <div class="border-t border-l border-r border-b position-relative mb-2">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <img src="./images/home/tv-1.svg" class="claro-image-header">
                        </div>
                        </a>
                        <h2 class="a-subtitle a-claro-home-subtitle">
                            <!--LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS
                                INTERNACIONALES</span>-->

                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-canal.php">
                        <div class="p-3 bborder-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <button class="btn-red btn-canal-claro-home">VER +</button>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="canal-videos-container">
                    <div class="section-slider claro-slider-home">
                    </div>
                    <!--<div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                        <div>
                            <img class="concert-footer-img" src="./images/home/tv-1.svg" alt="">
                        </div>
                        <div>
                            <p class="horario-text text-dark">
                                Horario sujetos a cambios
                            </p>
                        </div>
                    </div>-->
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                    <div>

                    </div>
                    <div>
                    <div class="border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            <!--End Sección Canal Claro tablet-->
            <!--Sección canal claro desktop-->
            <div class="claro-canal-desktop">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header">
                    <div class="m-home-titles">
                        <a href="claro-canal.php" class="home-title-link">
                        <div class="border-t border-l border-r border-b position-relative mb-2">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <img src="./images/home/tv-1.svg" class="claro-image-header">
                        </div>
                        </a>
                        <div class=" border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <h2 class="a-subtitle a-claro-home-subtitle">

                        </h2>
                        </div>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-canal.php"> 
                        <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <button class="btn-red btn-canal-claro-home"></button>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="section-slider claro-slider-home">
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                    <div>

                    </div>
                    <div>
                    <div class=" border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            <!--End seccción canal claro desktop-->
        </div>
        <!--Fin sección de Canal Claro-->
        <!--Sección de Concert Channel-->
        <div class="o-concert-section">
            <!--Versión para mobile-->
            <div class="concert-channel-mobile">
                <div class="m-home-titles text-center">
                    <a href="concert-channel.php" class="home-title-link">
                    <div class="p-3 border-t border-l border-r border-b position-relative mb-2">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <img src="./images/home/concert-home-img.svg" class="concerthome-image-header">
                        </div>
                    </a>
                    <h2 class="a-concert-channel-subtitle a-concert-home-subtitle">
                        <!--CONCIERTOS, ENTREVISTAS<br><span>Y MUCHO MÁS</span>-->

                    </h2>
                </div>
                <div class="text-center">
                    <a href="concert-channel.php">
                    <div class="p-3 border-t border-l border-r border-b position-relative ">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <button class="btn-pink button-concert-home"></button>
                    </div>
                    </a>
                        
                </div>
                <div class="section-slider concert-home-slider">
                </div>
            </div>

            <!--End Versión mobile-->
            <!--Versión para tablet-->
            <div class="concert-channel-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">
                        <a href="concert-channel.php" class="home-title-link">
                        <div class="p-3 border-t border-l border-r border-b position-relative mb-2 mt-1">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <img src="./images/home/concert-home-img.svg" class="concerthome-image-header">
                        </div>
                        </a>
                        <p class="a-concert-subtitle concert-first-subtitle a-concert-home-subtitle"></p>
                        <!--<p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>-->
                    </div>
                    <div class="m-see-more">
                        <a href="concert-channel.php">
                        <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <button class="btn-pink button-concert-home"></button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="home-concert-videos-container">
                    <div class="section-slider concert-home-slider">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
                    <div>

                    </div>
                    <div>
                    <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <p class="horario-text text-white">
                            Horarios sujetos a cambios
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--End Versión tablet-->
            <!--Concert channel desktop-->
            <div class="concert-channel-desktop">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">
                        <a href="concert-channel.php" class="home-title-link">
                        <div class="col-5 border-t border-l border-r border-b position-relative mb-2 mt-1">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <img class="concerthome-image-header" src="./images/home/concert-home-img.svg" alt="">  
                        </div>
                        </a>
                        <div class=" border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <h2 class="text-white a-subtitle a-concert-home-subtitle"></h2>
                        </div>
                    </div>
                    <div class="m-see-more">
                        <a href="concert-channel.php">
                        <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <button class="btn-pink button-concert-home">
                                <span></span>
                            </button>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="section-slider concert-home-slider">
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
                    <div>

                    </div>
                    <div>
                    <div class=" border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <p class="horario-text text-white">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            <!--End Concert channel desktop-->
        </div>
        <!--Fin sección de Concert Channel-->
        <!--Sección de Cinema Claro-->
        <div class="o-cinema-section">
            <!--Cinema claro versión mobile-->
            <div class="cinema-claro-mobile">
                <div class="m-home-titles text-center">
                    <a href="claro-cinema.php" class="home-title-link">
                    <div class="p-3 border-t border-l border-r border-b position-relative mb-2 mt-1">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <img src="./images/home/tv-3.svg" class="cinemahome-image-header">
                        </div>
                    </a>

                    <h2 class="a-claro-cinema-subtitle  a-cinema-home-subtitle">
                        <!--Las mejores <span>Películas Mexicanas</span>-->
                        <!--LOS ÍDOLOS QUE MÉXICO<br><span>LE DIO AL CINE</span>-->
                    </h2>
                </div>
                <div class="text-center">
                    <a href="claro-cinema.php">
                    <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <button class="btn-red button-cinema-home">VER +</button>
                        </div>
                    </a>
                </div>
                <div class="section-slider cinema-home-slider">
                </div>
            </div>
            <!--End Cinema Claro mobile-->
            <!--Cinema claro tablet-->
            <div class="cinema-claro-tablet">

                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header">
                    <div class="m-home-titles">
                        <a href="claro-cinema.php" class="home-title-link">
                        <div class="p-3 border-t border-l border-r border-b position-relative mb-2 mt-1">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <img class="cinemahome-image-header" src="./images/home/cinema-home-img.svg" alt="">
                        </div>
                        </a>
                        <h2 class="a-subtitle a-cinema-home-subtitle">
                            LOS ÍDOLOS QUE MÉXICO<span>LE DIO AL CINE</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-cinema.php">
                        <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <button class="btn-red  button-cinema-home">VER +</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-flex no-gutters">
                    <div class="col-md-5 col-lg-4 d-flex align-items-center">
                    <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <img src="./images/home/claro-cinema-background.png" alt="" class="cinema-image">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="cinema-home-slider">
                        </div>
                    </div>
                </div>
                <!--<div class="row no-gutters">
                    <div class="col-5">
                        <img src="./images/home/claro-cinema-background.png" alt="" class="cinema-image">
                    </div>
                    <div class="col-7">
                        <div class="home-cinema-videos-container">
                            <div class="cinema-home-slider">
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
                    <div>

                    </div>
                    <div>
                    <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            <!--End cinema claro tablet-->
            <!--Cinema claro desktop-->
            <div class="cinema-claro-desktop">
                <!--<div class="black-line"></div>-->
                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header">
                    <div class="m-home-titles">
                        <a href="claro-cinema.php" class="home-title-link">
                        <div class="col-5 border-t border-l border-r border-b position-relative mb-2 mt-1">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <img class="cinemahome-image-header" src="./images/home/cinema-home-img.svg" alt="">
                        </div>
                        </a>
                        <div class=" border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <h2 class="a-subtitle a-cinema-home-subtitle">
                            <!--LOS ÍDOLOS QUE MÉXICO<span>LE DIO AL CINE</span>-->
                        </h2>
                        </div>
                    </div>
                    <div class="m-see-more">
                        <a href="claro-cinema.php">
                        <div class="p-3 border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                            <button class="btn-red button-cinema-home">VER +</button>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-4 col-xl-3">
                    <div class=" border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <img src="./images/home/claro-cinema-background.png" alt="" class="cinema-image">
                    </div>
                    </div>
                    <div class="col-md-8 col-xl-9">
                        <div class="cinema-home-slider">
                        </div>
                    </div>
                </div>

                <!--<div class="row no-gutters">
                    <div class="col-md-4 col-xl-6">
                        <img src="./images/home/claro-cinema-background.png" alt="" class="cinema-image">
                    </div>
                    <div class="col-md-8 col-xl-6 cinema-home-videos-container">
                    </div>
                </div>-->
                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
                    <div>

                    </div>
                    <div>
                    <div class="border-t border-l border-r border-b position-relative">
                             <img src="../images/pencil.svg" alt="" class="pencil">
                        <p class="horario-text text-dark">
                            Horarios sujetos a cambios
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            <!--End cinema claro desktop-->
        </div>
        <!--Fin sección de Cinema Claro-->

        <!--Sección de anuncio-->
        <?php
        include 'advertising-section.php'
        ?>
        <div class="home-list-links-footer">
            <?php
            include './views/partials/list-links-footer.php';
            ?>
        </div>



        <!--Fin sección de anuncio-->
        <?php
        include 'footer.php'
        ?>

        <!-- Modal -->
        <?php
        include './views/partials/modal-favorites.php'
        ?>

        <!--Modal de programa al añadir a favoritos-->
        <?php
        include './views/partials/modal-program.php'
        ?>
    </main>
    <script type="text/javascript" src="../js/lib/easyXDM.min.js"></script>
  <script>
    var socket= new easyXDM.Socket({
      onReady: function() {
        socket.postMessage(document.body.offsetHeight)
      }
    });
  </script>
</body>

</html>