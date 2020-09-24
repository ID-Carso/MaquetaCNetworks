<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/partials/head.php' ?>

</head>

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
            <div class="header-slider-sinopsis  mx-auto" id="">
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" id="image_programming_1" class="input-image-program d-none image_programming "
                        data-index="1">
                    <label for="image_programming_1"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1000px X 342px</span>
                        <!---->
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 cursor-pointer image-cover prev-image-program h-100 thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" id="image_programming_2" class="input-image-program d-none image_programming "
                        data-index="1">
                    <label for="image_programming_2"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1920px X 657px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" name="image_programming[]" id="image_programming_3"
                        class="input-image-program d-none image_programming " data-index="1">
                    <label for="image_programming_3"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1000px X 342px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
                <div class="bor thumbnail-image-program position-relative " style="height:470px">
                    <input type="file" name="image_programming[]" id="image_programming_3"
                        class="input-image-program d-none image_programming " data-index="1">
                    <label for="image_programming_3"
                        class="h-100 mb-0 d-flex justify-content-center  align-items-center flex-column   load-programming-carousel">
                        <img src="./images/General/camara.svg" alt="add-photo" class=" cursor-pointer add-photo " />
                        <span class="a-text-bold-warm text-plus mt-3">1000px X 342px</span>
                        <img src="./images/General/image-synopsis-carrusel.jpg"
                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                    </label>
                </div>
            </div>
            <div class="d-flex position-absolute programming-dots space-do">
                <div class=" d-inline-block position-relative programming-slider-dots align-items-center">
                </div>

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

                                    <p class="synopsis-schedule-text mb-0">Horarios</p><img
                                        src="./images/home/clock.svg" alt="">

                                </div>
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="no-gutters">
                <div class="col-11 col-md-12 col-lg-10 mx-auto">
                    <h1 class="synopsis-section-title d-flex justify-content-center ml-5">sinopsis</h1>

                    <div class="synopsis-body-container no-gutters">
                        <div
                            class="col-md-7 col-lg-6 mr-2  mb-0 synopsis-main-image border-t border-l border-r border-b position-relative d-inline-block">
                            <img src="./images/General/pencil.svg" alt="" class="pencil pencil-main"
                                type="synopsis-main-image">
                            <!--Imagen principal de sinopsis-->
                            <img src="" alt="" class="p-3 w-100 image-synopsis-edi">
                        </div>
                        <div
                            class="col-md-7 col-lg-6 mx-sm-auto mx-md-auto synopsis-description-container border-t border-l border-r border-b position-relative ">
                            <img src="./images/General/pencil.svg" alt="" class="pencil pencil-description"
                                type="synopsis-description-container">
                            <div>
                                <h1
                                    class="a-text-white-monblack synopsis-title-edi h3 d-flex justify-content-center mt-3">
                                </h1>
                                <p class="a-text-medium-white text-normal synopsis-description-edi pl-3">Texto</p>
                            </div>

                            <div class="no-gutters">

                                <div class="synopsis-buttons-tablet-container pb-3 pr-3 col-md-10 col-xl-12">
                                    <button class="button-none synopsis-add add-favorites">
                                        <img src="" alt="" class="synopsis-heart">
                                    </button>
                                    <a href="sinopsis.php#dropdown-country"><button class="synopsis-button">
                                            <div class="d-flex align-items-center">
                                                <p class="synopsis-schedule-text mb-0">Horarios</p><img
                                                    src="./images/home/clock.svg" alt="">
                                            </div>
                                        </button></a>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="no-gutters">
                        <div class="col-md-10 col-lg-12 mx-auto">
                            <div
                                class="synopsis-images-container no-gutters border-t border-l border-r border-b position-relative p-3">

                                <img src="./images/General/pencil.svg" alt="" class="pencil pencil-images"
                                    type="synopsis-images-container">

                                <!--Image synopsis frame 1-->
                                <img src="" alt=""
                                    class="mr-0 pr-3 synopsis-image-1-edi col-md-6 col-lg-4 synopsis-image">
                                <!--Image synopsis frame 2-->
                                <img src="" alt="" class="pr-3 synopsis-image-2-edi col-md-6 col-lg-4 synopsis-image">
                                <!--Image synopsis frame 3-->
                                <img src="" alt="" class="pr-3 col-lg-4 synopsis-image synopsis-image-3-edi">
                            </div>
                            <div class="">
                                <div
                                    class="synopsis-details-container border-t border-l border-r border-b position-relative p-3">
                                    <img src="./images/General/pencil.svg" alt="" class="pencil pencil-details"
                                        type="synopsis-datails-container">
                                    <div class="synopsis-rating-container">
                                        <p class="synopsis-text synopsis-detail-text synopsis-country-edi">Estados
                                            Unidos</p>
                                        <p class="synopsis-text synopsis-year-edi synopsis-detail-text"></p>
                                        <p class="synopsis-text synopsis-detail-text synopsis-rating-edi"></p>
                                    </div>
                                    <div class="synopsis-seasons-container">
                                        <p class="synopsis-text synopsis-detail-text synopsis-seasons-edi"></p>
                                        <p class="synopsis-text synopsis-detail-text synopsis-duration-edi"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="synopsis-schedule-container" id="dropdown-country">
                        <h1 class="synopsis-schedule-title">Horario por regiones</h1>
                    </div>
                </div>
            </div>
            <div class="dropdown-country-container">
                <div class="d-flex justify-content-between dropdownCountry mx-auto">
                    <div class="d-flex justify-content-between">
                        <!--1 países-->
                        <div class="region-country-container-active p-4 d-flex justify-content-center">
                            <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                alt="">
                        </div>
                        <!--3 países-->
                        <div class="region-country-container p-4 d-flex justify-content-between">
                            <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                alt="">
                            <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                alt="">
                            <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                alt="">
                        </div>
                        <!--4 países-->
                        <div
                            class="no-gutters region-country-container d-flex justify-content-center p-4 align-items-center flex-wrap">

                            <div class="col-6 text-center">
                                <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                            <div class="col-6 text-center">
                                <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                            <div class="col-6 text-center">
                                <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                            <div class="col-6 text-center">
                                <img src="
                                        http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                        </div>
                        <!--5 países-->
                        <div class="region-country-container d-flex align-items-center flex-wrap">
                            <div class="col-4 text-center">
                                <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                            <div class="col-4 text-center">
                                <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                            <div class="col-4 text-center">
                                <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                            <div class="col-4 text-center">
                                <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                            <div class="col-4 text-center">
                                <img src="http:\/\/www.claronetworks.openofficedospuntocero.info\/images\/paises\/argentina.svg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="time-slider-container">
                <div class="region-times-container" id="region_1">
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
            </div>
            <?php
            //include 'advertising-section.php'
            ?>
            <div class="cconcert-list-links-footer">
                <?php
                //  include './views/partials/list-links-footer.php';
                ?>
            </div>
            <?php
            // include 'footer.php'
            ?>
        </div>

    </main>
    <!--Modal de programa al añadir a favoritos-->
    <?php
    include './views/partials/modal-program.php'
    ?>
</body>
<script type="text/javascript" src="./js/lib/easyXDM.min.js"></script>
<script>
    var socketSinopsis = new easyXDM.Socket({
        onReady: function () {
            var hey = 2640;
            socketSinopsis.postMessage(hey)
        },
        onMessage: function (message, origin) {
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

                $('.synopsis-description-edi').text(data.data.sinopsis)
                $('.synopsis-title-edi').text(data.data.title)
                $('.synopsis-rating-edi').text(`Clasificación ${data.data.rating}`)
                $('.synopsis-duration-edi').text(data.data.duration)
                $('.synopsis-seasons-edi').text(`${data.data.seasons} Temporadas`)
                $('.synopsis-year-edi').text(data.data.year)
                $('.image-synopsis-edi').attr("src", imageSynopsis);
                $('.synopsis-image-1-edi').attr("src", imageSynopsis1);
                $('.synopsis-image-2-edi').attr("src", imageSynopsis2);
                $('.synopsis-image-3-edi').attr("src", imageSynopsis3);
                $('.pencil').attr("chapter_id", data.data.chapter_id)
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
                $(".header-slider-sinopsis").html(slide);
                try {
                    $(".header-slider-sinopsis").slick("unslick")
                    $(".header-slider-sinopsis").slick({
                        slidesToShow: 1,
                        dots: true,
                        appendDots: $(".programming-slider-dots"),
                        initialSlide: 0,
                        infinite: false,
                        arrows: false,

                        customPaging: function (slider, i) {
                            var thumb = $(slider.$slides[i]).data();
                            return (
                                " <p class='a-text-bold-tealblue slider-pagination-item pag mr-2 '> " +
                                (i + 1) +
                                "</p> "
                            );
                        },
                    });
                } catch (error) {
                    $(".header-slider-sinopsis").slick({
                        slidesToShow: 1,
                        dots: true,
                        appendDots: $(".programming-slider-dots"),
                        initialSlide: 0,
                        infinite: false,
                        arrows: false,

                        customPaging: function (slider, i) {
                            var thumb = $(slider.$slides[i]).data();
                            return (
                                " <p class='a-text-bold-tealblue slider-pagination-item pag mr-2 '> " +
                                (i + 1) +
                                "</p> "
                            );
                        },
                    });
                }
                //Paises
                let sliderContainer = "";
                let countriesImages = data.data.time_regions.regions.countries;
                //Países de regiones
                let countryRegion = "";
                //imagen del pais
                let imageCountry = ""
                //iteramos el objeto
                for (const property in countriesImages) {
                    //Obtenemos el número de países
                    let numberCountries = countriesImages[property].length;
                    //Iteramos los países
                    for (let index = 0; index < numberCountries; index++) {
                        /*
                        Verificamos de nuevo el número de países, esto para dar cierto formato
                        a la imagen dependiento cuántos países haya en la región
                        */
                        switch (numberCountries) {
                            case 1:
                                imageCountry += ` 
                        <img src="${countriesImages[property][index]}" alt="">
                        `
                                break;
                            case 2:

                                imageCountry += ` 
                        <img src="${countriesImages[property][index]}" alt="">
                        `
                                break;
                            case 3:

                                imageCountry += ` 
                        <img src="${countriesImages[property][index]}" alt="">
                        `

                                break;

                            case 4:
                                imageCountry += `
                        <div class="col-6 text-center">
                            <img src="${countriesImages[property][index]}" alt="">
                        </div>
                        `
                                break;
                            case 5:
                                imageCountry += `
                        <div class="col-4 text-center">
                            <img src="${countriesImages[property][index]}" alt="">
                        </div>
                        `
                                break;
                            case 6:
                                imageCountry += `
                        <div class="col-4 text-center">
                            <img src="${countriesImages[property][index]}" alt="">
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

                let times = data.data.time_regions.regions.times;
                //Broadcast schedule
                let dayContainer = "";
                let timeContainer = "";
                let timeAm = "";
                let timePm = "";
                //Región
                for (const time in times) {
                    let timeRegions = times[time];

                    if (times[time][0].length == 0) {
                        continue;
                    }

                    let numberDays = timeRegions.length

                    for (let index = 0; index < numberDays; index++) {
                        //Regiones
                        timeRegions[index].forEach(element => {

                            //Horarios en AM
                            let am = element.AM;
                            //Horarios en PM
                            let pm = element.PM

                            am.forEach(time => {
                                timeAm += `
                                    <div class="time-container py-4 text-center mb-4">
                                        <span class="time-begin-text">Inicio: </span>
                                        <span class="time-begin-number">${time}</span>
                                    </div>
                                    `
                                console.log(time);
                            })
                            pm.forEach(time => {
                                timePm += `
                                    <div class="time-container py-4 text-center mb-3">
                                        <span class="time-begin-text">Inicio: </span>
                                        <span class="time-begin-number">${time}</span>
                                    </div>
                                    `
                            })

                            dayContainer += `
                                <div class="times-container">
                                    <div class="d-flex">
                                        <div class="col-6 text-center">
                                            <h2 class="time-title py-3">AM</h2>
                                            ${timeAm}
                                        </div>
                                        <div class="col-6 text-center">
                                            <h2 class="time-title py-3">PM</h2>
                                            ${timePm}
                                        </div>
                                    </div>    
                                </div>
                                `;

                            timeAm = "";
                            timePm = "";
                        });
                    }
                    sliderContainer += `
                        <div class="text-center region-times-container" id="${time}">
                            <div class="mt-5 time-slider-dots-container d-inline-block position-relative mb-3 text-center">
                                
                                <div class="d-flex justify-content-center mb-5">
                                    <p class="day-pagination">L</p>
                                    <p class="day-pagination">M</p>
                                    <p class="day-pagination">M</p>
                                    <p class="day-pagination">J</p>
                                    <p class="day-pagination">V</p>
                                    <p class="day-pagination">S</p>
                                    <p class="day-pagination">D</p>
                                </div>
                            </div>
                            <div class="time-slider">
                                <div class="region-times-slider">
                                    ${dayContainer}
                                </div>   
                            </div>

                        </div>
                        `
                    dayContainer = "";
                }

                $('.time-slider-container').html(sliderContainer);
                let currentDay = programSynopsis.time_regions.actual_day;
                let currentDay = parseInt(programSynopsis.time_regions.actual_day) - 1;
                $(".region-times-slider").each(function () {
                    $(this)
                        .not(".slick-initialized")
                        .slick({
                            responsive: [{
                                    breakpoint: 321,
                                    settings: {
                                        slidesToShow: 1,
                                        initialSlide: currentDay,
                                        slidesToScroll: 1,
                                        centerPadding: "30px",
                                        centerMode: true,
                                        infinite: true,
                                        arrows: false,
                                        dots: true,
                                        appendDots: $(this).parent().prev(),
                                        appendArrows: $(this).parent().prev().find("ul"),
                                        customPaging: function (slider, i) {
                                            return `
                                            <div class="pagination-items-container">
                                                <div class="pagination-item"></div>
                                            </div>
                                            `;
                                        },
                                    },
                                },
                                {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 1,
                                        initialSlide: currentDay,
                                        slidesToScroll: 1,
                                        centerMode: true,
                                        centerPadding: "30px",
                                        infinite: true,
                                        arrows: false,
                                        dots: true,
                                        appendDots: $(this).parent().prev(),
                                        customPaging: function (slider, i) {
                                            return `
                                            <div class="pagination-items-container">
                                                <div class="pagination-item"></div>
                                            </div>
                                            `;
                                        },
                                    },
                                },
                                {
                                    breakpoint: 992,
                                    settings: {
                                        infinite: true,
                                        initialSlide: currentDay,
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        dots: true,
                                        appendDots: $(this).parent().prev(),
                                        centerMode: true,
                                        arrows: false,
                                        centerPadding: "120px",
                                        customPaging: function (slider, i) {
                                            return `
                                            <div class="pagination-items-container">
                                                <div class="pagination-item"></div>
                                            </div>
                                            `;
                                        },
                                    },
                                },
                                {
                                    breakpoint: 1200,
                                    settings: {
                                        infinite: true,
                                        slidesToShow: 1,
                                        initialSlide: currentDay,
                                        slidesToScroll: 1,
                                        dots: true,
                                        appendDots: $(this).parent().prev(),
                                        centerMode: true,
                                        arrows: false,
                                        centerPadding: "120px",
                                        customPaging: function (slider, i) {
                                            return `
                                            <div class="pagination-items-container">
                                                <div class="pagination-item"></div>
                                            </div>
                                            `;
                                        },
                                    },
                                },
                                {
                                    breakpoint: 9999,
                                    settings: {
                                        infinite: true,
                                        slidesToShow: 1,
                                        initialSlide: currentDay,
                                        slidesToScroll: 1,
                                        dots: true,
                                        appendDots: $(this).parent().prev(),
                                        appendArrows: $(this).parent().prev(),
                                        centerMode: true,
                                        arrows: true,
                                        centerPadding: "200px",
                                        prevArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white"/>',
                                        nextArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white"/>',
                                        customPaging: function (slider, i) {
                                            return `
                                            <div class="pagination-items-container">
                                                <div class="pagination-item"></div>
                                            </div>
                                            `;
                                        },
                                    },
                                },
                            ],
                        });
                });
                //Insertamos los contenedores de los países de cada región
                let regionTimesContainer = $('.region-times-container');
                regionTimesContainer.hide();
                $('.region-times-container:first').show();
                $('.dropdownCountry').html(countryRegion)
                let regionCountryContainer = $('.region-country-container');
                regionCountryContainer.click(function () {
                    regionCountryContainer.removeClass("region-country-container-active");
                    $(this).addClass("region-country-container-active")
                    let rel = $(this).attr("rel");
                    regionTimesContainer.hide();
                    $('#' + rel).show();
                    try {
                        $(".region-times-slider").slick("unslick");
                        $(".region-times-slider").each(function () {
                            $(this)
                                .not(".slick-initialized")
                                .slick({
                                    responsive: [{
                                            breakpoint: 321,
                                            settings: {
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                centerPadding: "30px",
                                                centerMode: true,
                                                infinite: true,
                                                arrows: false,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                appendArrows: $(this).parent()
                                                    .prev().find("ul"),
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 768,
                                            settings: {
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                centerMode: true,
                                                centerPadding: "30px",
                                                infinite: true,
                                                arrows: false,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 992,
                                            settings: {
                                                infinite: true,
                                                initialSlide: currentDay,
                                                slidesToShow: 1,
                                                slidesToScroll: 1,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                centerMode: true,
                                                arrows: false,
                                                centerPadding: "120px",
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 1200,
                                            settings: {
                                                infinite: true,
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                centerMode: true,
                                                arrows: false,
                                                centerPadding: "120px",
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 9999,
                                            settings: {
                                                infinite: true,
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                appendArrows: $(this).parent()
                                                    .prev(),
                                                centerMode: true,
                                                arrows: true,
                                                centerPadding: "200px",
                                                prevArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white"/>',
                                                nextArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white"/>',
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                    ],
                                });
                        });
                    } catch (error) {
                        $(".region-times-slider").each(function () {
                            $(this)
                                .not(".slick-initialized")
                                .slick({
                                    responsive: [{
                                            breakpoint: 321,
                                            settings: {
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                centerPadding: "30px",
                                                centerMode: true,
                                                infinite: true,
                                                arrows: false,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                appendArrows: $(this).parent()
                                                    .prev().find("ul"),
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 768,
                                            settings: {
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                centerMode: true,
                                                centerPadding: "30px",
                                                infinite: true,
                                                arrows: false,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 992,
                                            settings: {
                                                infinite: true,
                                                initialSlide: currentDay,
                                                slidesToShow: 1,
                                                slidesToScroll: 1,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                centerMode: true,
                                                arrows: false,
                                                centerPadding: "120px",
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 1200,
                                            settings: {
                                                infinite: true,
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                centerMode: true,
                                                arrows: false,
                                                centerPadding: "120px",
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                        {
                                            breakpoint: 9999,
                                            settings: {
                                                infinite: true,
                                                slidesToShow: 1,
                                                initialSlide: currentDay,
                                                slidesToScroll: 1,
                                                dots: true,
                                                appendDots: $(this).parent().prev(),
                                                appendArrows: $(this).parent()
                                                    .prev(),
                                                centerMode: true,
                                                arrows: true,
                                                centerPadding: "200px",
                                                prevArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white"/>',
                                                nextArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white"/>',
                                                customPaging: function (slider, i) {
                                                    return `
                                                    <div class="pagination-items-container">
                                                        <div class="pagination-item"></div>
                                                    </div>
                                                    `;
                                                },
                                            },
                                        },
                                    ],
                                });
                        });
                    }
                })
            }


        }
    });
    $('.synopsis-header').on("click", ".slider-pagination-item", function () {
        let type = "slider-pagination";
        let data = {

            type: type,
            id: $(".pencil").attr("chapter_id")
        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });

    $(".synopsis-main-image").on("click", ".pencil-main", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")

        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-description-container").on("click", ".pencil-description", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")
        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-images-container").on("click", ".pencil-images", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")
        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-details-container").on("click", ".pencil-details", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")

        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
    $(".synopsis-details-container").on("click", ".pencil-details", function () {

        let data = {
            type: $(this).attr("type"),
            id: $(".pencil").attr("chapter_id")

        }

        var json = JSON.stringify(data);
        socketSinopsis.postMessage(json);
    });
</script>

</html>