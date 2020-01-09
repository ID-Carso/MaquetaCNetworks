<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="shortcut icon" type="image/png" href="./images/favicon/claro-fav.png" />
    <link rel="stylesheet" href="../styles/bootstrap-4.4.1/bootstrap.min.css" />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="../slick-master/slick/slick.css" />
    <link rel="stylesheet" href="../slick-master/slick/slick-theme.css" />
    <script src="../js/lib/jquery-3.4.1.min.js"></script>

    <script src="../slick-master/slick/slick.js"></script>
    <script src="../js/jquery.browser.js"></script>
    <script src="../js/lib/rellax.js"></script>
    <script src="../js/main.js" type="module"></script>
</head>

<body>

    <main>

        <header class="home-header">
            <div class="circle-video">
                <button class="a-text-white-regular a-button-black a-button-edition-video">Cambiar video</button>
                <video preload="yes" playsinline autoplay muted loop class="home-video w-100">
                    <source src="../video/demo.mp4" type="video/mp4" />
                </video>
            </div>

            <div class="header">
                <img src="../images/home/american-horror.jpeg" class="background-home rellax" data-rellax="10">
                <div class="header-details header-detail-margin col-md-7">
                    <h1 class="header-h1">
                        <div class="p-xl-2 border-t-gray border-l-gray border-r-gray border-b-gray position-relative">
                            <span class="header-span">Descubre Claro<br></span>
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        </div>
                        <div class="p-xl-2 border-l-gray border-r-gray border-b-gray position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            Networks
                        </div>

                    </h1>

                </div>
            </div>
        </header>
        <section class="o-tv-section margin-ahora-tv">
            <h2 class="title-tv">
                <div class="d-inline p-xl-2 border-l-gray border-t-gray border-b-gray border-r-gray position-relative">
                    AHORA
                    <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                </div>
                <div class="d-inline p-xl-2 border-t-gray border-b-gray border-r-gray position-relative">
                    <span class="header-span">AL AIRE </span><span class="header-point">•</span>
                    <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                </div>
            </h2>
        </section>
        <section>
            <div class="o-tv-section">

                <div class="row no-gutters">
                    <ul class="tv-list col-md-11">
                        <div class="col-md text-center no-gap border-right position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <li rel="claro-canal" class="active-navItem nav-li">
                                <img class="claro-nav-image" src="../images/home/tv-1.svg" alt="" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <li rel="concert-channel" class="nav-li">
                                <img class="nav-image" src="../images/home/tv-2.svg" alt="" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <li rel="claro-cinema" class="nav-li">
                                <img class="nav-image" src="../images/home/tv-3.svg" alt="" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap border-right position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <li rel="nuestra-vision" class="nav-li">
                                <img class="nav-image" src="../images/home/tv-4.svg" alt="" />
                            </li>
                        </div>
                        <div class="col-md text-center no-gap position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <li rel="claro-sports" class="nav-li">
                                <img class="nav-image" src="../images/home/tv-5.svg" alt="" />
                            </li>
                        </div>

                    </ul>
                </div>
                <div class="tv-videos-container">
                    <div id="claro-canal" class="tv-content">

                        <div class="tv-slider p-xl-3 border-t-gray border-b-gray border-l-gray border-r-gray" id="tv-claro-slider">

                            <div class="poster position-relative">

                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img src="../images/home/plus.png" alt="" class="poster-add"></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-claro-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img src="../images/home/plus.png" alt="" class="poster-add"></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-claro-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-claro-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-claro-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-claro-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-claro-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-claro-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!--Concert channel de "Ahora en tv"-->
                    <div id="concert-channel" class="tv-content position-relative">

                        <div class="tv-slider p-xl-3 border-t-gray border-l-gray border-r-gray border-b-gray" id="tv-concert-slider">

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¡WTF, EL NUEVO GANCHO DE BLITZCRANK LLEGA A
                                                CASA
                                                DE TU PRIMA Y LA ONE SHOTEA! *BUFF Q*</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¡WTF, EL NUEVO GANCHO DE BLITZCRANK LLEGA A
                                                CASA
                                                DE TU PRIMA Y LA ONE SHOTEA! *BUFF Q*</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>



                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-concert-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!--End Concert channel de "Ahora en tv"-->
                    <!--Claro cinema de "Ahora en tv"-->
                    <div id="claro-cinema" class="tv-content position-relative">

                        <div class="tv-slider p-xl-3 border-t-gray border-r-gray border-l-gray border-b-gray" id="tv-cinema-slider">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Claro cinema de "Ahora en tv"-->
                    <!--Nuestra visión de "Ahora en tv"-->
                    <div id="nuestra-vision" class="tv-content position-relative">

                        <div class="tv-slider p-xl-3 border-t-gray border-r-gray border-l-gray border-b-gray" id="tv-vision-slider">

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-vision-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Nuestra visión de "Ahora en tv"-->
                    <!--Claro sports de "Ahora en tv"-->
                    <div id="claro-sports" class="tv-content position-relative">

                        <div class="tv-slider p-xl-3 border-t-gray border-b-gray border-r-gray border-l-gray" id="tv-sports-slider">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Claro sports de "Ahora en tv"-->
                </div>

            </div>
        </section>
        <div class="p-2 a-border-gray o-channels-container position-relative">
            <div class="our-channels">
                <h1 class="our-channels-title">
                    Nuestros Canales
                </h1>
            </div>
        </div>

        <!--Sección de Canal Claro-->
        <div class="o-claro-section">
            <!--Sección Canal Claro mobile-->
            <div class="claro-canal-mobile">
                <div class="m-home-titles">

                    <h1 class="a-claro-channel-title">CANAL CLARO</h1>

                    <h2 class="a-subtitle">
                        LO MEJOR EN SERIES Y <br><span>PELÍCULAS INTERNACIONALES</span>
                    </h2>
                </div>
                <div class="text-center">
                    <button class="btn-red">VER +</button>
                </div>
                <div class="section-slider">

                    <div class="poster">
                        <div class="poster-body">

                            <p class="a-programming-text now-live-text">AHORA EN VIVO</p>


                            <div class="thumbnail-large">
                                <img src="../images/posters/bates-motel.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">BATES MOTEL</p>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/breaking-bad.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">BREAKING BAD</p>

                                </div>
                            </div>

                        </div>

                    </div>




                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/good-doctor.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">THE GOOD DOCTOR</p>
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/harry-potter.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">HARRY POTTER: LA ORDEN DEL FENIX</p>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>

            </div>
            <!--End Sección Canal Claro mobile-->
            <!--Sección Canal Claro tablet-->
            <div class="claro-canal-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header claro-section-header">
                    <div class="m-home-titles">

                        <h1 class="a-claro-channel-title">CANAL CLARO</h1>

                        <h2 class="a-subtitle">
                            LO MEJOR EN SERIES Y <span class="a-claro-channel-subtitle-bold">PELÍCULAS
                                INTERNACIONALES</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <button class="btn-red">VER +</button>
                    </div>
                </div>
                <div class="canal-videos-container">
                    <div class="section-slider">
                        <div class="poster">
                            <div class="poster-body">
                                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>

                                <div class="thumbnail-large">
                                    <img src="../images/posters/bates-motel.jpeg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">BATES MOTEL</p>

                                    </div>

                                </div>

                            </div>
                        </div>



                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img src="../images/posters/plus.png" class="poster-add" alt=""></button>
                                </div>

                                <div class="thumbnail-large">
                                    <img src="../images/posters/breaking-bad.jpeg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">BREAKING BAD</p>

                                    </div>

                                </div>

                            </div>
                        </div>



                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail-large">
                                    <img src="../images/posters/good-doctor.jpeg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">THE GOOD DOCTOR</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail-large">
                                    <img src="../images/posters/harry-potter.jpeg" alt="">

                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">HARRY POTTER: LA ORDEN DEL FENIX</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail-large">
                                    <img src="../images/posters/good-doctor.jpeg" alt="">
                                </div>
                                <div class="a-claro-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">THE GOOD DOCTOR</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                        <div>
                            <img class="concert-footer-img" src="../images/home/tv-1.svg" alt="">
                        </div>
                        <div>
                            <p class="horario-text text-dark">
                                Horario sujetos a cambios
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
                        <div class="position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <h1 class="a-claro-channel-title p-xl-3 mb-xl-1 border-t-gray border-r-gray border-b-gray border-l-gray">CANAL CLARO</h1>
                        </div>


                        <div class="position-relative">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <h2 class="a-subtitle p-xl-3 border-t-gray border-r-gray border-b-gray border-l-gray">
                                LO MEJOR EN SERIES Y <span>PELÍCULAS
                                    INTERNACIONALES</span>
                            </h2>
                        </div>

                    </div>
                    <div class="m-see-more p-xl-3 border-t-gray border-r-gray border-b-gray border-l-gray position-relative">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <button class="btn-red">VER +</button>
                    </div>
                </div>
                <div class="section-slider p-xl-3 border-t-gray border-r-gray border-b-gray border-l-gray ">
                    <div class="poster">
                        <div class="poster-body">
                            <p class="a-programming-text now-live-text">AHORA EN VIVO</p>

                            <div class="thumbnail-large">
                                <img src="../images/posters/bates-motel.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">BATES MOTEL</p>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/breaking-bad.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">BREAKING BAD</p>

                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/good-doctor.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">THE GOOD DOCTOR</p>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/harry-potter.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">HARRY POTTER: LA ORDEN DEL FENIX</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/stranger-things.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">STRANGER THINGS</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/american-horror.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">AMERICAN HORROR STORY</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--<img src="./images/posters/greys-anatomy.jpeg" alt="">-->

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                                <img src="../images/posters/american-horror.jpeg" alt="">

                            </div>
                            <div class="a-claro-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">GREY'S ANATOMY</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer claro-section-footer">
                    <div class="position-relative p-xl-3 border-t-gray border-r-gray border-b-gray border-l-gray ">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <img class="concert-footer-img" src="../images/home/tv-1.svg" alt="">
                    </div>
                    <div class="position-relative p-xl-3 border-t-gray border-b-gray border-l-gray border-r-gray">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <p class="horario-text text-dark">
                            Horario sujetos a cambios
                        </p>
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
                <div class="m-home-titles">

                    <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>


                    <h2 class="a-concert-channel-subtitle">
                        CONCIERTOS, ENTREVISTAS<br><span>Y MUCHO MÁS</span>
                    </h2>

                </div>
                <div class="text-center">
                    <button class="btn-pink">VER +</button>
                </div>
                <div class="section-slider concert-home-slider">

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/coldplay-tour.jpeg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams Tour</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/monkeys-concert.jpeg" alt="">
                            </div>
                            <div class="a-concert-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">Arctic Monkeys</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/boy-pablo-tour.jpeg" alt="">
                            </div>
                            <div class="a-concert-rectangle ">
                                <p class="a-poster-text-white">Boy Pablo: Tour</p>
                            </div>

                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/rammstein-tour.jpeg" alt="">
                            </div>
                            <div class="a-concert-rectangle ">
                                <p class="a-poster-text-white">Rammstein: Tour</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!--End Versión mobile-->
            <!--Versión para tablet-->
            <div class="concert-channel-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">

                        <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>

                        <p class="a-concert-subtitle concert-first-subtitle">Conciertos</p>
                        <p class="a-concert-subtitle concert-second-subtitle">Entrevistas y mucho más</p>
                    </div>
                    <div class="m-see-more">
                        <button class="btn-pink">VER +</button>
                    </div>
                </div>
                <div class="home-concert-videos-container">
                    <div class="section-slider">>
                        <div class="poster">
                            <div class="poster-body">
                                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>

                                <div class="thumbnail">
                                    <img src="../images/posters/coldplay-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">COLDPLAY: A Head Full Of Dreams Tour</p>
                                </div>

                            </div>
                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail">
                                    <img src="../images/posters/monkeys-concert.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">Arctic Monkeys</p>
                                </div>

                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail">
                                    <img src="../images/posters/boy-pablo-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">Boy Pablo: Tour</p>
                                </div>

                            </div>

                        </div>
                        <div class="poster">
                            <div class="psoter-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail">
                                    <img src="../images/posters/rammstein-tour.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">Rammstein: Tour</p>
                                </div>

                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail">
                                    <img src="../images/posters/the-weeknd.jpeg" alt="">
                                </div>
                                <div class="a-concert-rectangle ">
                                    <p class="a-poster-text-white">The Weeknd: Starboy Tour</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
                    <div>
                        <img class="concert-footer-img" src="../images/home/concert-home-img.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-white">
                            Horario sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>

            <!--End Versión tablet-->
            <!--Concert channel desktop-->
            <div class="concert-channel-desktop">
                <div class="d-flex justify-content-between align-items-center home-section-header concert-section-header">
                    <div class="m-home-titles">
                        <div class="mt-xl-6 position-relative p-xl-3 border-t-white border-l-white border-r-white border-b-white">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <h1 class="a-concert-channel-title">CONCERT CHANNEL</h1>
                        </div>

                        <div class="position-relative p-xl-3 border-t-white border-l-white border-r-white border-b-white">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">

                            <h2 class="text-white a-subtitle">Conciertos, entrevistas y mucho más</h2>
                        </div>

                    </div>
                    <div class="m-see-more position-relative p-xl-3 border-t-white border-l-white border-r-white border-b-white">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <button class="btn-pink">
                            <span>VER +</span>
                        </button>
                    </div>
                </div>
                <div class="row no-gutters">

                    <div class="col-md-8 col-xl-6 ml-auto position-relative p-xl-3 border-t-white border-l-white border-r-white border-b-white">
                        <div class="row poster-pad-b">
                            <div class="col poster-pad-r poster-section">
                                <div class="poster">
                                    <div class="poster-body">
                                        <p class="a-programming-text now-live-text">AHORA EN VIVO</p>

                                        <div class="thumbnail">
                                            <img src="../images/posters/coldplay-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Coldplay: A Head Full Of Dreams
                                                    Tour
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
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="../images/posters/monkeys-concert.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-white">Arctic Monkeys</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row poster-pad-t">
                            <div class="col poster-pad-r">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>

                                        <div class="thumbnail">
                                            <img src="../images/posters/boy-pablo-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle thumbnail-info-title">
                                            <p class="a-poster-text-white">Boy Pablo: Tour</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col poster-pad-l">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>

                                        <div class="thumbnail">
                                            <img src="../images/posters/rammstein-tour.jpeg" alt="">
                                        </div>
                                        <div class="a-concert-rectangle thumbnail-info-title">
                                            <p class="a-poster-text-white">Rammstein: Tour</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer concert-section-footer">
                    <div class="p-xl-3 position-relative border-t-white border-r-white border-l-white border-b-white">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <img class="concert-footer-img" src="../images/home/concert-home-img.svg" alt="">
                    </div>
                    <div class="p-xl-3 position-relative border-t-white border-b-white border-l-white border-r-white">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <p class="horario-text text-white">
                            Horario sujetos a cambios
                        </p>
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
                <div class="m-home-titles">

                    <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>


                    <h2 class="a-claro-cinema-subtitle">
                        Las mejores <span>Películas Mexicanas</span>
                    </h2>
                </div>
                <div class="text-center">
                    <button class="btn-red">VER +</button>
                </div>
                <div class="section-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/alla-rancho-peli.jpeg" alt="">
                            </div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">ALLÁ EN EL RANCHO GRANDE</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/maria-candelaria-peli.jpeg" alt="">
                            </div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">MARÍA CANDELERIA</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/flor-silvestre-peli.jpeg" alt="">
                            </div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">FLOR SILVESTRE</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/macario-peli.jpeg" alt="">
                            </div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">MACARIO</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--End Cinema Claro mobile-->
            <!--Cinema claro tablet-->
            <div class="cinema-claro-tablet">
                <img src="../images/home/claro-cinema-background.png" alt="" class="cinema-image">
                <img src="../images/home/texto-claro-cinema.png" alt="" class="cinema-texto-image">
                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header">
                    <div class="m-home-titles">

                        <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>

                        <h2 class="a-subtitle">
                            Las mejores <span>Películas Mexicanas</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <button class="btn-red">VER +</button>
                    </div>
                </div>
                <div class="home-cinema-videos-container">
                    <div class="section-slider">>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail">
                                    <img src="../images/posters/flor-silvestre-peli.jpeg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">ALLÁ EN EL RANCHO GRANDE</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail">
                                    <img src="../images/posters/maria-candelaria-peli.jpeg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">MARÍA CANDELARIA</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail">
                                    <img src="../images/posters/flor-silvestre-peli.jpeg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">FLOR SILVESTRE</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>
                            </div>

                            <div class="thumbnail">
                                <img src="../images/posters/macario-peli.jpeg" alt="">
                            </div>
                            <div class="a-cinema-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">MACARIO</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!--<div class="row no-gutters">
                <div class="col-md-4 col-xl-6">
                </div>
                <div class="col-md-8 col-xl-6">
                    <div class="row poster-pad-b">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster ">
                                <div class="thumbnail">
                                    <img src="./images/posters/alla-rancho-peli.jpeg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">ALLÁ EN EL RANCHO GRANDE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/maria-candelaria-peli.jpeg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">MARÍA CANDELARIA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row poster-pad-t">
                        <div class="col poster-pad-r">
                            <div class="height-second-poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/flor-silvestre-peli.jpeg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">FLOR SILVESTRE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col poster-pad-l">
                            <div class="height-second-poster">
                                <div class="thumbnail">
                                    <img src="./images/posters/macario-peli.jpeg" alt="">
                                </div>
                                <div class="a-cinema-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-black">MACARIO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
                    <div>
                        <img class="concert-footer-img" src="../images/home/cinema-home-img.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horario sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End cinema claro tablet-->
            <!--Cinema claro desktop-->
            <div class="cinema-claro-desktop">
                <div class="black-line"></div>
                <div class="d-flex justify-content-between align-items-center home-section-header cinema-section-header">
                    <div class="m-home-titles mt-xl-6">

                        <div class="position-relative mb-xl-1 border-t-gray border-b-gray border-r-gray border-l-gray">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <h1 class="a-claro-cinema-title">CLARO <span>CINEMA</span></h1>
                        </div>

                        <div class="position-relative p-xl-3 border-t-gray border-b-gray border-r-gray border-l-gray">
                            <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                            <h2 class="a-subtitle">
                                Las mejores <span>Películas Mexicanas</span>
                            </h2>
                        </div>

                    </div>
                    <div class="position-relative m-see-more p-xl-3 border-t-gray border-r-gray border-l-gray border-b-gray">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <button class="btn-red">VER +</button>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-md-4 col-xl-6">
                        <img src="../images/home/claro-cinema-background.png" alt="" class="cinema-image">
                    </div>
                    <div class="col-md-8 col-xl-6 cinema-home-videos-container position-relative p-xl-3 border-t-gray border-l-gray border-b-gray border-r-gray">
                        <img src="./images/pencil.svg" alt="" class="a-pencil-icon d-none d-xl-block">
                        <div class="row poster-pad-b">
                            <div class="col poster-pad-r">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                        <img src="../images/posters/alla-rancho-peli.jpeg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">ALLÁ EN EL RANCHO GRANDE</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col poster-pad-l">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                        <img src="../images/posters/maria-candelaria-peli.jpeg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">MARÍA CANDELARIA</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row poster-pad-t">
                            <div class="col poster-pad-r">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>
                                    <div class="thumbnail">
                                        <img src="../images/posters/flor-silvestre-peli.jpeg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">FLOR SILVESTRE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col poster-pad-l">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail">
                                        <img src="../images/posters/macario-peli.jpeg" alt="">
                                    </div>
                                    <div class="a-cinema-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">MACARIO</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer cinema-section-footer">
                    <div>
                        <img class="concert-footer-img" src="../images/home/cinema-home-img.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horario sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End cinema claro desktop-->
        </div>
        <!--Fin sección de Cinema Claro-->
        <!--Sección de Nuestra visión-->
        <div class="o-vision-section">
            <!--Nuestra visión mobile-->
            <div class="nuestra-vision-mobile">
                <div class="m-home-titles">

                    <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>


                    <h2 class="a-our-vision-subtitle">
                        SIÉNTETE <span>COMO EN CASA</span>
                    </h2>
                </div>
                <div class="text-center">
                    <button class="btn-red">VER +</button>
                </div>
                <div class="section-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>
                        </div>
                        <div class="thumbnail-large"></div>
                        <div class="image"></div>
                        <div class="a-vision-rectangle">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>
                    </div>



                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large">
                            </div>
                            <div class="a-vision-rectangle">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!--End nuestra visión mobile-->
            <!--Nuestra visión tablet-->
            <div class="nuestra-vision-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header vision-section-header">
                    <div class="m-home-titles">

                        <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>

                        <h2 class="a-subtitle">
                            SIÉNTETE <span>COMO EN CASA</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <button class="btn-purple">VER
                            +</button>
                    </div>
                </div>
                <div class="home-vision-videos-container">
                    <div class="section-slider">
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail-large">
                                </div>
                                <div class="a-vision-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail-large"></div>

                                <div class="a-vision-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail-large">
                                </div>
                                <div class="a-vision-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="poster">
                            <div class="poster-body">
                                <div class="showtime-container">
                                    <p class="a-programming-text">14:30 - 16:30</p>
                                    <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                </div>

                                <div class="thumbnail-large">
                                </div>
                                <div class="a-vision-rectangle">
                                    <div class="poster-title-margin">
                                        <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer vision-section-footer">
                    <div>
                        <img class="concert-footer-img" src="../images/home/vision-home-img.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horario sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End Nuestra visión tablet-->
            <!--Nuestra visión desktop-->
            <div class="nuestra-vision-desktop">
                <div>
                    <img src="../images/home/nuestra-vision.png" class="nuestra-vision-image">
                </div>
                <div class="d-flex justify-content-between align-items-center home-section-header vision-section-header">
                    <div class="m-home-titles">

                        <h1 class="a-our-vision-title">NUESTRA VISIÓN</h1>

                        <h2 class="a-subtitle">
                            SIÉNTETE <span>COMO EN CASA</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <button class="btn-purple">VER
                            +</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9">
                        <div class="vision-slider">
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail-large">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail-large">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail-large">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail-large">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail-large">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="poster">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail-large">
                                    </div>
                                    <div class="a-vision-rectangle">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-white">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer vision-section-footer">
                    <div>
                        <img class="concert-footer-img" src="../images/home/vision-home-img.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horario sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End nuestra visión desktop-->
        </div>
        </div>
        <!--End Sección de Nuestra visión-->

        <!--Sección de Claro Sports-->
        <div class="o-sports-section">
            <!--Claro sportis mobile-->
            <div class="claro-sports-mobile">
                <div class="m-home-titles">

                    <h1 class="a-claro-sports-title">claro <span>sports</span></h1>


                    <h2 class="a-claro-sports-subtitle">
                        Las mejor en deportes <span>al instante</span>
                    </h2>
                </div>
                <div class="text-center">
                    <button class="btn-red">VER +</button>
                </div>
                <div class="section-slider">
                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large"></div>
                            <div class="a-sports-rectangle ">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large"></div>
                            <div class="a-sports-rectangle ">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>

                            <div class="thumbnail-large"></div>
                            <div class="a-sports-rectangle ">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="poster">
                        <div class="poster-body">
                            <div class="showtime-container">
                                <p class="a-programming-text">14:30 - 16:30</p>
                                <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                            </div>
                        </div>

                        <div class="thumbnail-large"></div>
                        <div class="a-sports-rectangle ">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <!--End Claro sports mobile-->
            <!--Claro sports tablet-->
            <div class="claro-sports-tablet">
                <div class="d-flex justify-content-between align-items-center home-section-header sports-section-header">
                    <div class="m-home-titles">

                        <h1 class="a-claro-sports-title">claro <span>sports</span></h1>

                        <h2 class="a-subtitle">
                            Las mejor en deportes <span>al instante</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <button class="btn-red">VER +</button>
                    </div>
                </div>
                <div class="home-sports-videos-container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-md-5">
                            <h1 class="poster-title-sport">
                                <span>Vive la </span>intensidad <span>del deporte</span>
                            </h1>
                        </div>
                        <div class="col-md-7">
                            <div class="sports-slider">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>

                                        <div class="thumbnail-large"></div>
                                        <div class="a-sports-rectangle ">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>

                                        <div class="thumbnail-large"></div>
                                        <div class="a-sports-rectangle ">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>

                                        <div class="thumbnail-large"></div>
                                        <div class="a-sports-rectangle ">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>

                                        <div class="thumbnail-large"></div>
                                        <div class="a-sports-rectangle ">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between section-home-footer sports-section-footer">
                    <div>
                        <img class="concert-footer-img" src="../images/home/sports-home-img.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horario sujetos a cambios
                        </p>
                    </div>
                </div>
            </div>
            <!--End Claro sports tablet-->
            <!--Claro sports desktop-->
            <div class="claro-sports-desktop">
                <div class="d-flex justify-content-between align-items-center home-section-header sports-section-header">
                    <div class="m-home-titles">

                        <h1 class="a-claro-sports-title">claro <span>sports</span></h1>

                        <h2 class="a-subtitle">
                            Las mejor en deportes <span>al instante</span>
                        </h2>
                    </div>
                    <div class="m-see-more">
                        <button class="btn-red">VER +</button>
                    </div>
                </div>
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-md-4 col-xl-6">
                        <h1 class="poster-title-sport">
                            <span>Vive la </span>intensidad <span>del deporte</span>
                        </h1>
                    </div>
                    <div class="col-md-8 col-xl-6">
                        <div class="row no-gutters poster-pad-b">
                            <div class="col poster margin-left-11 poster-margin-r">
                                <div class="poster-body">
                                    <div class="showtime-container">
                                        <p class="a-programming-text">14:30 - 16:30</p>
                                        <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                    </div>

                                    <div class="thumbnail-large">
                                    </div>
                                    <div class="a-sports-rectangle thumbnail-info-title">
                                        <div class="poster-title-margin">
                                            <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col poster-margin-l">
                                <div class="poster">
                                    <div class="poster-body">
                                        <div class="showtime-container">
                                            <p class="a-programming-text">14:30 - 16:30</p>
                                            <button type="button" class="poster-button"><img class="poster-add" src="../images/posters/plus.png" alt=""></button>
                                        </div>

                                        <div class="thumbnail-large">
                                        </div>

                                        <div class="a-sports-rectangle thumbnail-info-title">
                                            <div class="poster-title-margin">
                                                <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between section-home-footer">
                    <div>
                        <img class="concert-footer-img" src="../images/home/sports-home-img.svg" alt="">
                    </div>
                    <div>
                        <p class="horario-text text-dark">
                            Horario sujetos a cambios
                        </p>
                    </div>
                </div>

            </div>
            <!--End Claro sports desktop-->
        </div>
        <!--Fin sección de Claro Sports-->
        <!--Sección de anuncio-->
        <?php
        include './advertising.php'
        ?>

        <!--Fin sección de anuncio-->
        <!--Redes sociales-->
        <div class="">
            <div class="row no-gutters">
                <div class="col-12">
                    <h1 class="footer-title">¡síguenos!</h1>
                </div>
                <div class="social-media">
                    <div class="col ">
                        <img class="social-icon" src="../images/home/faceboook-icon.svg" alt="">
                    </div>
                    <div class="col">
                        <img class="social-icon" src="../images/home/instagram-icon.svg" alt="">
                    </div>
                    <div class="col">
                        <img class="social-icon" src="../images/home/twitter-icon.svg" alt="">
                    </div>
                    <div class="col">
                        <img class="social-icon" src="../images/home/youtube-icon.svg" alt="">
                    </div>

                </div>
            </div>
        </div>
        <!--Fin Redes sociales-->
        <?php
        include './footer.php'
        ?>
    </main>
    <script type="text/javascript" src="../js/lib/easyXDM.min.js"></script>
    <script>
        var socket = new easyXDM.Socket({
            onReady: function() {
                socket.postMessage(document.body.offsetHeight)
            }
        });
    </script>
</body>

</html>