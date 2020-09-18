<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>

</head>
<style>
    .region-country-container-active {
        box-shadow: 0 0 3px 1px #0097a9, inset 0 1px 3px 0 rgba(101, 100, 100, 0.5) !important;
        background-color: #00353b !important;
    }

    .region-country-container {
        width: 193px;
        height: 160px;
        border-radius: 15px;
        box-shadow: 0 2px 4px 0 #000000, inset 0 1px 3px 0 rgba(101, 100, 100, 0.5);
        background-color: #0f0e0e;
    }

    .region-country-container img,
    .region-country-container-active img {
        width: 38px;
    }

    .time-container {
        border-radius: 3px;
        box-shadow: 0 2px 4px 0 #000000, inset 0 1px 3px 0 rgba(101, 100, 100, 0.5);
        background-color: #0f0e0e;
    }

    .times-container {

        border-radius: 15px;
        box-shadow: 0 0 24px 1px #0097a9, inset 0 1px 3px 0 rgba(101, 100, 100, 0.5);
        background-color: #161616;
    }

    .time-begin-text {
        font-size: 21px;
        color: #a7a8aa;
    }

    .time-begin-number {
        font-size: 21px;
        color: white;
    }
</style>

<body>
    <header class="synopsis-header">
        <div class="hamburguer-menu">
            <div class="text-center sidebar-header">

            </div>
            <div class="sidebar-item sidebar-border-bottom sidebar-border-top">
                <a href="home.php" class="sidebar-link"><span class="dropdown-p">Inicio</span></a>
            </div>
            <div class="sidebar-content">
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
                <a target="_blank" class="sidebar-link" href="https://nuestravision.tv">
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

        <div class="header">

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
            include './views/partials/menu-desktop-black.php'
            ?>
            <!--Banner-->
            <div class="header-slider" id="banner-synopsis-slider">
            </div>
        </div>
    </header>
    <main>
        <div class="synopsis-content">
            <div class="no-gutters">
                <div class="col-11 col-lg-10 mx-auto">
                    <div class="synopsis-buttons-mobile-container">
                        <button class="button-none synopsis-add add-favorites">
                            <img src="./images/posters/heart-outline.svg" alt="" class="synopsis-heart">
                        </button>
                        <a href="sinopsis.php#dropdown-country"> <button class="synopsis-button">
                                <div class="d-flex align-items-center">
                                    <p class="synopsis-schedule-text mb-0">Horarios</p><img src="./images/home/clock.svg" alt="">
                                </div>
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="no-gutters">
                <div class="col-11 col-md-12 col-lg-10 mx-auto">
                    <h1 class="synopsis-section-title">sinopsis</h1>

                    <div class="synopsis-body-container no-gutters">
                        <div class="col-md-7 col-lg-6 mx-auto synopsis-main-image">
                            <img class="image-synopsis-prev pb-3 pl-3 pr-3 w-100" src="" alt="">
                        </div>
                        <div class="col-md-7 col-lg-6 mx-sm-auto mx-md-auto synopsis-description-container">
                            <div>
                                <h1 class="text-center synopsis-title synopsis-title-prev"></h1>
                                <p class="synopsis-text synopsis-description-prev"></p>
                            </div>
                            <div class="no-gutters">
                                <div class="synopsis-buttons-tablet-container col-md-10 col-xl-12">
                                    <button class="button-none synopsis-add add-favorites">
                                        <img src="" alt="" class="synopsis-heart">
                                    </button>
                                    <a href="sinopsis.php#dropdown-country"><button class="synopsis-button">
                                            <div class="d-flex align-items-center">
                                                <p class="synopsis-schedule-text mb-0">Horarios</p><img src="./images/home/clock.svg" alt="">
                                            </div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-gutters">
                        <div class="col-md-10 col-lg-12 mx-auto">
                            <div class="synopsis-images-container no-gutters">
                                <img src="" alt="" class="col-md-6 col-lg-4 synopsis-image synopsis-image-1-prev">
                                <img src="" alt="" class="col-md-6 col-lg-4 synopsis-image synopsis-image-2-prev">
                                <img src="" alt="" class="col-lg-4 synopsis-image synopsis-image-3-prev">
                            </div>
                            <div class="">
                                <div class="synopsis-details-container">
                                    <div class="synopsis-rating-container">
                                        <p class="synopsis-text synopsis-detail-text">Estados Unidos</p>
                                        <p class="synopsis-text synopsis-detail-text synopsis-year-prev">2013</p>
                                        <p class="synopsis-text synopsis-detail-text synopsis-rating-prev">Clasificación
                                            C</p>
                                    </div>
                                    <div class="synopsis-seasons-container">
                                        <p class="synopsis-text synopsis-detail-text synopsis-seasons-prev'">4
                                            Temporadas</p>
                                        <p class="synopsis-text synopsis-detail-text synopsis-duration-prev">60 Minutos
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="synopsis-schedule-container" id="dropdown-country">
                        <h1 class="synopsis-schedule-title">Horario por regiones</h1>
                    </div>
                    <div class="no-gutters">
                        <div class="col-12 d-flex justify-content-between dropdownCountry">
                            <div class="d-flex justify-content-between">
                                <!--1 países-->
                                <div class="region-country-container-active p-4 d-flex justify-content-center">
                                    <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                </div>
                                <!--3 países-->
                                <div class="region-country-container p-4 d-flex justify-content-between">
                                    <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                </div>
                                <!--4 países-->
                                <div class="no-gutters region-country-container d-flex justify-content-center p-4 align-items-center flex-wrap">

                                    <div class="col-6 text-center">
                                        <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                    <div class="col-6 text-center">
                                        <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                    <div class="col-6 text-center">
                                        <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                    <div class="col-6 text-center">
                                        <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                </div>
                                <!--5 países-->
                                <div class="region-country-container d-flex align-items-center flex-wrap">
                                    <div class="col-4 text-center">
                                        <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                    <div class="col-4 text-center">
                                        <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                    <div class="col-4 text-center">
                                        <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                    <div class="col-4 text-center">
                                        <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>
                                    <div class="col-4 text-center">
                                        <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg" alt="">
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!--Containers-->
                <div class="region-times-container" id="region_1">
                    <p>Region 1</p>
                    <div class="d-flex times-container">
                        <div class="col-6">
                            <h2 class="text-center py-3">AM</h2>
                            <div class="time-container py-4 text-center mb-3">
                                <span class="time-begin-text">Inicio: </span>
                                <spa class="time-begin-number">04:00</spa>
                            </div>
                            <div class="time-container py-4 text-center mb-3">
                                <span class="time-begin-text">Inicio: </span>
                                <spa class="time-begin-number">04:00</spa>
                            </div>
                            <div class="time-container py-4 text-center mb-3">
                                <span class="time-begin-text">Inicio: </span>
                                <spa class="time-begin-number">04:00</spa>
                            </div>
                        </div>
                        <div class="col-6">
                            <h2 class="text-center py-3">PM</h2>
                            <div class="time-container py-4 text-center mb-3">
                                <span class="time-begin-text">Inicio: </span>
                                <spa class="time-begin-number">04:00</spa>
                            </div>
                            <div class="time-container py-4 text-center mb-3">
                                <span class="time-begin-text">Inicio: </span>
                                <spa class="time-begin-number">04:00</spa>
                            </div>
                            <div class="time-container py-4 text-center mb-3">
                                <span class="time-begin-text">Inicio: </span>
                                <spa class="time-begin-number">04:00</spa>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="region-times-container" id="region_2">
                    <p>Region 2</p>
                </div>

                <?php
                include 'advertising-section.php'
                ?>
                <div class="cconcert-list-links-footer">
                    <?php
                    include './views/partials/list-links-footer.php';
                    ?>
                </div>
                <?php
                include 'footer.php'
                ?>
            </div>
        </div>
    </main>

    <!--Modal de programa al añadir a favoritos-->
    <?php
    include './views/partials/modal-program.php'
    ?>
    <script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
    <script>
        let c = {
            "region_1": [
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/brazil.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/chile.svg"
            ],
            "region_2": [
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/paraguay.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/dominican-republic.svg"
            ],
            "region_3": [
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/colombia.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/peru.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/panama.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/ecuador.svg"
            ],
            "region_4": [
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/el-salvador.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/honduras.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/nicaragua.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/guatemala.svg",
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/costa-rica.svg"
            ],
            "region_5": [
                "http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/usa.svg"
            ]
        }

        let times = {
            "region_1": [
                []
            ],
            "region_2": [
                [
                    [],
                    [
                        "20:00"
                    ],
                    [],
                    [],
                    [],
                    [
                        "17:30"
                    ],
                    []
                ]
            ],
            "region_3": [
                [
                    [],
                    [
                        "19:00"
                    ],
                    [],
                    [],
                    [],
                    [
                        "16:30"
                    ],
                    []
                ]
            ],
            "region_4": [
                [
                    [],
                    [
                        "0:00"
                    ],
                    [],
                    [],
                    [],
                    [
                        "21:30"
                    ],
                    []
                ]
            ],
            "region_5": [
                [
                    [],
                    [
                        "17:00"
                    ],
                    [],
                    [],
                    [],
                    [
                        "14:30"
                    ],
                    []
                ]
            ]
        }
        let sliderContainer = "";
        let dayContainer = "";
        let timeContainer = "";
        //Región
        let index = 1;
        for (const time in times) {
            let timeRegions = times[time][0];

            if (times[time][0].length == 0) {
                continue;
            }
            sliderContainer = `
            <div class="region-times-container" id="${time}">
                    <p>Region ${index}</p>
            </div>
            `
            index++;

            let timesRegion = times[time][0];
            timesRegion.forEach(timesDay => {
                dayContainer = `
                
                `;
                timesDay.forEach(element => {

                })
            });

        }

        //Países de regiones
        let countryRegion = "";
        //imagen del pais
        let imageCountry = ""
        //iteramos el objeto
        for (const property in c) {
            //Obtenemos el número de países
            let numberCountries = c[property].length;
            //Iteramos los países
            for (let index = 0; index < numberCountries; index++) {
                /*
                Verificamos de nuevo el número de países, esto para dar cierto formato
                a la imagen dependiento cuántos países haya en la región
                */
                switch (numberCountries) {
                    case 1:
                        imageCountry += ` 
                        <img src="${c[property][index]}" alt="">
                        `
                        break;
                    case 2:

                        imageCountry += ` 
                        <img src="${c[property][index]}" alt="">
                        `
                        break;
                    case 3:

                        imageCountry += ` 
                        <img src="${c[property][index]}" alt="">
                        `

                        break;

                    case 4:
                        imageCountry += `
                        <div class="col-6 text-center">
                            <img src="${c[property][index]}" alt="">
                        </div>
                        `
                        break;
                    case 5:

                        imageCountry += `
                        <div class="col-4 text-center">
                            <img src="${c[property][index]}" alt="">
                        </div>
                        `

                        break;
                    case 6:
                        imageCountry += `
                        <div class="col-4 text-center">
                            <img src="${c[property][index]}" alt="">
                        </div>
                        `
                        break;
                    default:
                        break;

                }

            }
            //Sí es la región uno, entonces se tendrá la clase de region-country-container-active
            if (property == "region_1") {
                //Verificamos aquí los países para dar formato al contenedor de las imágenes, 
                //dependiento del número de páises que se encuentre
                switch (numberCountries) {
                    case 1:
                        countryRegion += `
                    <div class="region-country-container-active region-country-container p-4 d-flex justify-content-center" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 2:
                        countryRegion += `
                    <div class="region-country-container-active region-country-container p-4 d-flex justify-content-between" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 3:
                        countryRegion += `
                    <div class="region-country-container-active region-country-container p-4 d-flex justify-content-between" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 4:

                        countryRegion += `
                    <div class="no-gutters region-country-container-active region-country-container d-flex justify-content-center p-4 align-items-center flex-wrap" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 5:
                        countryRegion += `
                    <div class="region-country-container-active region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 6:
                        countryRegion += `
                    <div class="region-country-container-active region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;

                    default:
                        break;
                }
            } else {
                //Verificamos aquí los países para dar formato al contenedor de las imágenes, 
                //dependiento del número de páises que se tenga
                switch (numberCountries) {
                    case 1:
                        countryRegion += `
                    <div class="region-country-container p-4 d-flex justify-content-center" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 2:
                        countryRegion += `
                    <div class="region-country-container p-4 d-flex justify-content-between" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 3:
                        countryRegion += `
                    <div class="region-country-container p-4 d-flex justify-content-between" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 4:

                        countryRegion += `
                    <div class="no-gutters region-country-container d-flex justify-content-center p-4 align-items-center flex-wrap" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 5:
                        countryRegion += `
                    <div class="region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;
                    case 6:
                        countryRegion += `
                    <div class="region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                        ${imageCountry}
                    </div>
                    `
                        break;

                    default:
                        break;
                }
            }
            //Asignamos vacío para limpiar la variable de las imágenes
            imageCountry = "";
        }
        //Insertamos los contenedores de los países de cada región
        let regionTimesContainer = $('.region-times-container');
        regionTimesContainer.hide();
        $('.region-times-container:first').show();
        $('.dropdownCountry').html(countryRegion)
        let regionCountryContainer = $('.region-country-container');
        regionCountryContainer.click(function() {
            regionCountryContainer.removeClass("region-country-container-active");
            $(this).addClass("region-country-container-active")
            let rel = $(this).attr("rel");
            regionTimesContainer.hide();
            $('#' + rel).show();
        })
        //Horarios de cada día
        for (const key in times) {

        }

        var socketSinopsis = new easyXDM.Socket({
            onReady: function() {
                var hey = 2640;
                socketSinopsis.postMessage(hey)
            },
            onMessage: function(message, origin) {
                console.log("message", typeof message);
                let data = JSON.parse(message);
                if (data.code == 200) {

                    let imageSynopsis = data.data.image_synopsis ||
                        "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png";
                    let imageSynopsis1 = data.data.image_synopsis_frame_1 ||
                        "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png"
                    let imageSynopsis2 = data.data.image_synopsis_frame_2 ||
                        "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png"
                    let imageSynopsis3 = data.data.image_synopsis_frame_3 ||
                        "http://back.claronetworks.openofficedospuntocero.info/backoffice/public/images/synopsis/image-synopsis-horizontal.png"

                    $('.synopsis-description-prev').text(data.data.sinopsis)
                    $('.synopsis-title-prev').text(data.data.title)
                    $('.synopsis-rating-prev').text(`Clasificación ${data.data.rating}`)
                    $('.synopsis-duration-prev').text(data.data.duration)
                    $('.synopsis-seasons-prev').text(`${data.data.seasons} Temporadas`)
                    $('.synopsis-year-prev').text(data.data.year)
                    $('.image-synopsis-prev').attr("src", imageSynopsis);
                    $('.synopsis-image-1-prev').attr("src", imageSynopsis1);
                    $('.synopsis-image-2-prev').attr("src", imageSynopsis2);
                    $('.synopsis-image-3-prev').attr("src", imageSynopsis3);

                    //$('.synopsis-country-edi').text()
                    let index = 1;
                    let slide = "";
                    let image = ""
                    while (true) {
                        if (data.data[`image_background_${index}`] !== undefined) {
                            image = data.data[`image_background_${index}`]
                            if (data.data[`image_background_${index}`] == null) {
                                image = "./images/General/image-synopsis-carrusel.jpg"
                            }
                            console.log(image);
                            slide += `
                                        <div class="bor thumbnail-image-program position-relative h-100">
                                            <input type="file" id="image_banner_synopsis_${index}"
                                            class="input-image-program d-none input-banner-synopsis" data-index="1">
                                            <label for="image_banner_synopsis_${index}"
                                            class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                                            <img src="./images/General/camara.svg" alt="add-photo"
                                            class=" cursor-pointer add-photo " />
                                            <span class="a-text-bold-warm text-plus mt-3 banner-text pl-4 pr-4 pt-2 pb-2">1920px X 657px</span>
                                            <img src="${image}"
                                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                                            </label>
                                        </div>
                                        `
                            index++

                        } else {
                            break;
                        }
                    }
                    $("#banner-synopsis-slider").html(slide);
                    try {
                        $("#banner-synopsis-slider").slick("unslick");
                        $("#banner-synopsis-slider").not(".slick-initialized").slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: true,
                            centerMode: false,
                            arrows: false,
                            autoplay: true,
                        });
                    } catch (error) {
                        $("#banner-synopsis-slider").not(".slick-initialized").slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: true,
                            centerMode: false,
                            arrows: false,
                            autoplay: true,
                        });
                    }
                }


            }
        });
    </script>
</body>


</html>