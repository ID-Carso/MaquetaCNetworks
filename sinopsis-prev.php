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
              
                <a class="sidebar-link" href="concert-channel.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Concert
                            Channel</span>
                    </div>
                </a>
               
                <a class="sidebar-link" href="claro-cinema.php">
                    <div class="sidebar-item sidebar-border-bottom">
                        <span class="dropdown-p">Claro Cinema</span>
                    </div>
                </a>
               
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
            include './views/partials/menu-desktop-black-edi.php'
            ?>
            <!--Banner-->
            <div class="header-slider" id="banner-synopsis-slider">
            </div>
        </div>
    </header>
    <main>
        <div class="synopsis-content">
            <div class="no-gutters">
                <div class="col-11 col-md-12 col-lg-10 mx-auto">
                    <h1 class="synopsis-section-title">sinopsis</h1>

                    <div class="synopsis-body-container no-gutters">
                        <div class="col-md-7 col-lg-6 mx-auto synopsis-main-image">
                            <img class="image-synopsis-prev pb-3 pl-3 pr-3 w-100" src="" alt="imagen-principal-sinopsis"/>
                        </div>
                        <div class="col-md-7 col-lg-6 mx-sm-auto mx-md-auto synopsis-description-container">
                            <div>
                                <h1 class="text-center text-uppercase synopsis-title synopsis-title-prev"></h1>
                                <p class="synopsis-text synopsis-description-prev"></p>
                            </div>

                            <div class="no-gutters mb-4 mb-sm-4 mb-md-0 md-lg-0 mb-xl-0">
                                <div class="synopsis-buttons-tablet-container justify-content-end col-md-12 col-xl-12">
                                    <button class="ml-auto d-flex align-items-center synopsis-button synopsis-add add-favorites">
                                        <p class="synopsis-schedule-text mb-0">añadir</p>
                                        <img src="./images/posters/heart-outline.svg" alt="agregar-a-favoritos" class="synopsis-heart"/>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-gutters">
                        <div class="col-md-10 col-lg-12 mx-auto">
                            <div class="synopsis-images-container no-gutters">
                                <img src="" alt="imagen-1-sinopsis" class="col-md-6 col-lg-4 synopsis-image synopsis-image-1-prev"/>
                                <img src="" alt="imagen-2-sinopsis" class="col-md-6 col-lg-4 synopsis-image synopsis-image-2-prev"/>
                                <img src="" alt="imagen-3-sinopsis" class="col-lg-4 synopsis-image synopsis-image-3-prev"/>
                            </div>
                            <div class="">
                                <div class="synopsis-details-container">
                                    <div class="synopsis-rating-container">
                                        <div class="d-flex align-items-center mr-5">
                                            <span class="a-text-Regular-White text-normal mr-2">Duración: </span>
                                            <p class="a-text-white-monblack text-normal synopsis-detail-text synopsis-duration-edi ml-0 mb-0"></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="a-text-Regular-White text-normal mr-2">Año: </span>
                                            <p class=" a-text-white-monblack text-normal synopsis-year-edi synopsis-detail-text ml-0 mb-0"></p>
                                        </div>
                                    </div>
                                    <div class="synopsis-seasons-container">
                                        <div class="d-flex align-items-center">
                                            <span class="a-text-Regular-White text-normal mr-2">Temporadas: </span>
                                            <p class="a-text-white-monblack text-normal synopsis-detail-text synopsis-seasons-edi ml-0 mb-0"></p>
                                        </div>
                                        <div class="d-flex align-items-center ml-5">
                                            <span class="a-text-Regular-White text-normal mr-2">Clasificación: </span>
                                            <p class="a-text-white-monblack text-normal synopsis-detail-text synopsis-rating-edi ml-0 mb-0"></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="synopsis-schedule-container" id="dropdown-country">
                        <h1 class="synopsis-schedule-title">Horario por regiones</h1>
                    </div>

                </div>
                <div class="dropdown-country-container">
                    <div class="d-flex justify-content-between dropdownCountry mx-auto">
                    </div>
                </div>
                <div class="time-slider-container">
                </div>
                <!--Containers-->

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
        var socketSinopsis = new easyXDM.Socket({
            onReady: function() {
                var hey = 2565;
                socketSinopsis.postMessage(hey)
            },
            onMessage: function(message, origin) {

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
                                            class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" alt="imagen-sinopsis" />
                                            </label>
                                        </div>
                                        `
                            index++

                        } else {
                            break;
                        }
                    }
                    //Slider de sinopsis
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
                        <img src="${countriesImages[property][index]}" alt="bandera-paises-por-region"/>
                        `
                                    break;
                                case 2:

                                    imageCountry += ` 
                        <img src="${countriesImages[property][index]}" alt="bandera-paises-por-region"/>
                        `
                                    break;
                                case 3:

                                    imageCountry += ` 
                        <img src="${countriesImages[property][index]}" alt="bandera-paises-por-region"/>
                        `

                                    break;

                                case 4:
                                    imageCountry += `
                        <div class="col-6 text-center">
                            <img src="${countriesImages[property][index]}" alt="bandera-paises-por-region"/>
                        </div>
                        `
                                    break;
                                case 5:
                                    imageCountry += `
                        <div class="col-4 text-center">
                            <img src="${countriesImages[property][index]}" alt="bandera-paises-por-region"/>
                        </div>
                        `
                                    break;
                                case 6:
                                    imageCountry += `
                        <div class="col-4 text-center">
                            <img src="${countriesImages[property][index]}" alt="bandera-paises-por-region"/>
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
                                if (am.length == 0 && pm.length == 0) {
                                    dayContainer += `
                                    <div class="times-container">
                                        <div class="row h-100 p-2 p-sm-2 p-md-3 p-lg-3 p-xl-3">
                                            <div class="col-12">
                                            <div class="no-schedule-container">
                                                <div>
                                                <img class="no-schedule-image" src="./images/sinopsis/no-synopsis.png" alt="imagen-por-default"/>
                                                <p class="no-schedule-text mt-5 a-text-bold-cool-grey text-center">No hay programación para este día</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>    
                                    </div>
                                    `;
                                } else {
                                    am.forEach((time) => {
                                        timeAm += `
                                            <div class="time-container py-2 py-sm-2 py-md-3 py-lg-3 py-xl-4 text-center mb-2 mb-sm-2 mb-lg-3 mb-xl-4">
                                                <span class="time-begin-text">Inicio: </span>
                                                <span class="time-begin-number">${time}</span>
                                            </div>
                                            `;
                                    });
                                    pm.forEach((time) => {
                                        timePm += `
                                            <div class="time-container py-2 py-sm-2 py-md-3 py-lg-3 py-xl-4 text-center mb-2 mb-sm-2 mb-lg-3 mb-xl-4">
                                                <span class="time-begin-text">Inicio: </span>
                                                <span class="time-begin-number">${time}</span>
                                            </div>
                                            `;
                                    });

                                    dayContainer += `
                                    <div class="times-container">
                                        <div class="row h-100 p-2 p-sm-2 p-md-3 p-lg-3 p-xl-3">
                                            <div class="col-12 d-block d-sm-block d-md-block d-lg-none d-xl-none">
                                            ${timeAm}
                                            ${timePm}
                                            </div>
                                            <div class="col-6 d-none d-sm-none d-md-none d-lg-block d-xl-block text-center">
                                                <h2 class="d-none d-sm-none d-md-none d-lg-block d-xl-block  time-title py-3">AM</h2>
                                                ${timeAm}
                                            </div>
                                            <div class="col-6 d-none d-sm-none d-md-none d-lg-block d-xl-block text-center">
                                                <h2 class="d-none d-sm-none d-md-none d-lg-block d-xl-block time-title py-3">PM</h2>
                                                ${timePm}
                                            </div>
                                        </div>    
                                    </div>
                    `;

                                    timeAm = "";
                                    timePm = "";
                                }
                            });
                        }
                        sliderContainer += `
                        <div class="region-times-container text-center" id="${time}">
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
                    let currentDay = parseInt(data.data.time_regions.actual_day) - 1;
                    $(".region-times-slider").each(function() {
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
                                            customPaging: function(slider, i) {
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
                                            customPaging: function(slider, i) {
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
                                            customPaging: function(slider, i) {
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
                                            customPaging: function(slider, i) {
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
                                            prevArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                                            nextArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
                                            customPaging: function(slider, i) {
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
                    regionCountryContainer.click(function() {
                        regionCountryContainer.removeClass("region-country-container-active");
                        $(this).addClass("region-country-container-active")
                        let rel = $(this).attr("rel");
                       
                        regionTimesContainer.hide();
                        $('#' + rel).show();
                        try {
                            $(".region-times-slider").slick("unslick");
                            $(".region-times-slider").each(function() {
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
                                                    customPaging: function(slider, i) {
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
                                                    customPaging: function(slider, i) {
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
                                                    customPaging: function(slider, i) {
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
                                                    customPaging: function(slider, i) {
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
                                                    prevArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                                                    nextArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
                                                    customPaging: function(slider, i) {
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
                            $(".region-times-slider").each(function() {
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
                                                    customPaging: function(slider, i) {
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
                                                    customPaging: function(slider, i) {
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
                                                    customPaging: function(slider, i) {
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
                                                    customPaging: function(slider, i) {
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
                                                    prevArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                                                    nextArrow: '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
                                                    customPaging: function(slider, i) {
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
    </script>
</body>


</html>