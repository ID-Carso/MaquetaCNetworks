$(document).ready(function () {
  let parameter = location.search.substring(1).split("=");
  let id = parameter[1];
  let dataProgram = {
    function: "showSynopsis",
    chapter_id: id,
  };

  $.ajax({
    type: "POST",
    data: dataProgram,
    url: "./adapters/program.php",
    success: function (result) {
      let json = JSON.parse(result);
      if (json.code == 200) {
        let programSynopsis = json.data;

        let synopsisButtonFavorite = $(".synopsis-add");

        let favoritesClaroCanalSynopsis = JSON.parse(
          localStorage.getItem("favoritesCanalClaro")
        );
        let favoritesConcertChannelSynopsis = JSON.parse(
          localStorage.getItem("favoritesConcertChannel")
        );
        let favoritesClaroCinemaSynopsis = JSON.parse(
          localStorage.getItem("favoritesClaroCinema")
        );
        if (programSynopsis) {
          $(".synopsis-title").text(programSynopsis.title);
          synopsisButtonFavorite.attr("_id", programSynopsis.chapter_id);
          $(".synopsis-description").text(programSynopsis.sinopsis);
          $(".synopsis-chapter-image").attr(
            "src",
            programSynopsis.image_synopsis
          );
          $(".synopsis-chapter-image-1").attr(
            "src",
            programSynopsis.image_synopsis_frame_1
          );
          $(".synopsis-chapter-image-2").attr(
            "src",
            programSynopsis.image_synopsis_frame_2
          );
          $(".synopsis-chapter-image-3").attr(
            "src",
            programSynopsis.image_synopsis_frame_3
          );

          //Slider header
          let index = 1;
          let slide = "";
          let image = "";
          while (true) {
            if (programSynopsis[`image_background_${index}`] !== undefined) {
              image = programSynopsis[`image_background_${index}`];
              if (programSynopsis[`image_background_${index}`] == null) {
                image = "./images/General/image-synopsis-carrusel.jpg";
              }

              slide += `
              <div class="header-slide">
                  <img src="${image}"
                  class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" alt="imagenes-de-sinopsis" />
              </div>
                      `;
              index++;
            } else {
              break;
            }
          }
          let sliderSynopsis = $(".slider-sinopsis");
          sliderSynopsis.html(slide);
          sliderSynopsis.slick({
            slidesToShow: 1,
            dots: true,
            initialSlide: 0,
            infinite: false,
            arrows: false,
          });

          //year
          let year = programSynopsis.year;
          $(".synopsis-year").text(year);
          ///Rating
          let rating = programSynopsis.rating;
          $(".synopsis-rating").text(rating);
          //Seasons
          let seasons = programSynopsis.seasons;
          $(".synopsis-seasons").text(`${seasons} Temporadas`);
          //Duration
          let duration = programSynopsis.duration;
          $(".synopsis-duration").text(duration);

          //Paises
          let sliderContainer = "";
          let countriesImages = programSynopsis.time_regions.regions.countries;
          //Países de regiones
          let countryRegion = "";
          //imagen del pais
          let imageCountry = "";
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
                              <img src="${countriesImages[property][index]}" alt="paises-por-region"/>
                              `;
                  break;
                case 2:
                  imageCountry += ` 
                              <img src="${countriesImages[property][index]}" alt="paises-por-region"/>
                              `;
                  break;
                case 3:
                  imageCountry += ` 
                              <img src="${countriesImages[property][index]}" alt="paises-por-region"/>
                              `;

                  break;

                case 4:
                  imageCountry += `
                              <div class="col-6 text-center">
                                  <img src="${countriesImages[property][index]}" alt="paises-por-region"/>
                              </div>
                              `;
                  break;
                case 5:
                  imageCountry += `
                              <div class="col-4 text-center">
                                  <img src="${countriesImages[property][index]}" alt="paises-por-region"/>
                              </div>
                              `;
                  break;
                case 6:
                  imageCountry += `
                              <div class="col-4 text-center">
                                  <img src="${countriesImages[property][index]}" alt="paises-por-region"/>
                              </div>
                              `;
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
                                          `;
                  break;
                case 2:
                  countryRegion += `
                                          <div class="region-country-container-active region-country-container p-4 d-flex justify-content-between" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 3:
                  countryRegion += `
                                          <div class="region-country-container-active region-country-container p-4 d-flex justify-content-between" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 4:
                  countryRegion += `
                                          <div class="no-gutters region-country-container-active region-country-container d-flex justify-content-center p-4 align-items-center flex-wrap" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 5:
                  countryRegion += `
                                          <div class="region-country-container-active region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 6:
                  countryRegion += `
                                          <div class="region-country-container-active region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;

                default:
                  break;
              }
            } else {
              /*Verificamos aquí los países para dar formato al contenedor de las imágenes, 
              dependiento del número de páises que se tenga*/
              switch (numberCountries) {
                case 1:
                  countryRegion += `
                                          <div class="region-country-container p-4 d-flex justify-content-center" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 2:
                  countryRegion += `
                                          <div class="region-country-container p-4 d-flex justify-content-between" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 3:
                  countryRegion += `
                                          <div class="region-country-container p-4 d-flex justify-content-between" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 4:
                  countryRegion += `
                                          <div class="no-gutters region-country-container d-flex justify-content-center p-4 align-items-center flex-wrap" rel="${property}">
                                              ${imageCountry}
                                          </div>
                                          `;
                  break;
                case 5:
                  countryRegion += `
                  <div class="region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                      ${imageCountry}
                  </div>
                  `;
                  break;
                case 6:
                  countryRegion += `
                    <div class="region-country-container d-flex align-items-center flex-wrap" rel="${property}">
                        ${imageCountry}
                    </div>
                    `;
                  break;

                default:
                  break;
              }
            }
            //Asignamos vacío para limpiar la variable de las imágenes
            imageCountry = "";
          }
          $(".dropdownCountry").html(countryRegion);

          //Slider para países
          $(".dropdownCountry").slick({
            settings: "unslick",
            responsive: [
              {
                breakpoint: 321,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  autoplay: false,
                  autoplaySpeed: 2000,
                  centerMode: false,
                  infinite: true,
                  arrows: false,
                  dots: false,
                },
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  autoplay: false,
                  autoplaySpeed: 2000,
                  centerMode: false,
                  infinite: true,
                  arrows: false,
                  dots: false,
                },
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false,
                  centerMode: false,
                  arrows: false,
                },
              },
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false,
                  centerMode: false,
                  arrows: false,
                },
              },
              {
                breakpoint: 9999,
                settings: "unslick",
              },
            ],
          });

          let times = programSynopsis.time_regions.regions.times;
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

            let numberDays = timeRegions.length;

            for (let index = 0; index < numberDays; index++) {
              //Regiones
              timeRegions[index].forEach((element, index) => {
                //Horarios en AM
                let am = element.AM;
                //Horarios en PM
                let pm = element.PM;
                if (am.length == 0 && pm.length == 0) {
                  dayContainer += `
                  <div class="times-container">
                    <div class="row h-100 p-2 p-sm-2 p-md-3 p-lg-3 p-xl-3">
                        <div class="col-12">
                          <div class="no-schedule-container">
                            <div>
                              <img class="no-schedule-image" src="./images/sinopsis/no-synopsis.png" alt="imagen-por-default-sin-programacion" />
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
                              `;
            dayContainer = "";
          }

          $(".time-slider-container").html(sliderContainer);
          let currentDay =
            parseInt(programSynopsis.time_regions.actual_day) - 1;
          $(".region-times-slider").each(function () {
            $(this)
              .not(".slick-initialized")
              .slick({
                responsive: [
                  {
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
                    breakpoint: 1900,
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
                      centerPadding: "300px",
                      prevArrow:
                        '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                      nextArrow:
                        '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
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
                      centerPadding: "600px",
                      prevArrow:
                        '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                      nextArrow:
                        '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
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
          let regionTimesContainer = $(".region-times-container");
          regionTimesContainer.hide();
          $(".region-times-container:first").show();

          let regionCountryContainer = $(".region-country-container");
          regionCountryContainer.click(function () {
            regionCountryContainer.removeClass(
              "region-country-container-active"
            );
            $(this).addClass("region-country-container-active");
            let rel = $(this).attr("rel");

            regionTimesContainer.hide();
            $("#" + rel).show();
            try {
              $(".region-times-slider").slick("unslick");
              $(".region-times-slider").each(function () {
                $(this)
                  .not(".slick-initialized")
                  .slick({
                    responsive: [
                      {
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
                        breakpoint: 1900,
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
                          centerPadding: "300px",
                          prevArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                          nextArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
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
                          centerPadding: "600px",
                          prevArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                          nextArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
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
                    responsive: [
                      {
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
                        breakpoint: 1900,
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
                          centerPadding: "300px",
                          prevArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                          nextArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
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
                          centerPadding: "600px",
                          prevArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-prev arrow-white" alt="flecha-izquierda"/>',
                          nextArrow:
                            '<img src="./images/sinopsis/arrow-white.svg" class="time-slider-next arrow-white" alt="flecha-derecha"/>',
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
          });
        }
        let synopsisIdChapter = $(".synopsis-add").attr("_id");

        let arrayFavoritesId = [];
        if (localStorage.getItem("favoritesCanalClaro")) {
          let favoritesCanalClaroLength = favoritesClaroCanalSynopsis.length;
          for (let i = 0; i < favoritesCanalClaroLength; i++) {
            let favoriteId = favoritesClaroCanalSynopsis[i].chapter_id;
            arrayFavoritesId.push(favoriteId);
          }
        }

        if (localStorage.getItem("favoritesConcertChannel")) {
          let favoritesCanalClaroLength =
            favoritesConcertChannelSynopsis.length;
          for (let i = 0; i < favoritesCanalClaroLength; i++) {
            let favoriteId = favoritesConcertChannelSynopsis[i].chapter_id;
            arrayFavoritesId.push(favoriteId);
          }
        }

        if (localStorage.getItem("favoritesClaroCinema")) {
          let favoritesCanalClaroLength = favoritesClaroCinemaSynopsis.length;
          for (let i = 0; i < favoritesCanalClaroLength; i++) {
            let favoriteId = favoritesClaroCinemaSynopsis[i].chapter_id;
            arrayFavoritesId.push(favoriteId);
          }
        }

        if (arrayFavoritesId.includes(parseInt(synopsisIdChapter))) {
          synopsisButtonFavorite
            .children(".synopsis-heart")
            .attr("src", "./images/posters/heart-icon-white.svg");
          synopsisButtonFavorite.removeClass("add-favorites");
          synopsisButtonFavorite.addClass("remove-program");
        } else {
          synopsisButtonFavorite
            .children(".synopsis-heart")
            .attr("src", "./images/posters/heart-outline.svg");
        }
        function showNameCountries(country) {
          let nameCountry = "";
          switch (country) {
            case "usa.svg":
              nameCountry = "USA";
              break;
            case "brazil.svg":
              nameCountry = "Brasil";
              break;
            case "paraguay.svg":
              nameCountry = "Paraguay";
              break;
            case "puerto-rico.svg":
              nameCountry = "Puerto Rico";
              break;
            case "chile.svg":
              nameCountry = "Chile";
              break;
            case "dominican-republic.svg":
              nameCountry = "República Dominicana";
              break;
            case "uruguay.svg":
              nameCountry = "Uruguay";
              break;
            case "argentina.svg":
              nameCountry = "Argentina";
              break;
            case "costa-rica.svg":
              nameCountry = "Costa Rica";
              break;
            case "guatemala.svg":
              nameCountry = "Guatemala";
              break;
            case "honduras.svg":
              nameCountry = "Honduras";
              break;
            case "nicaragua.svg":
              nameCountry = "Nicaragua";
              break;
            case "panama.svg":
              nameCountry = "Panamá";
              break;
            case "colombia.svg":
              nameCountry = "Colombia";
              break;
            case "ecuador.svg":
              nameCountry = "Perú";
              break;
            case "el-salvador.svg":
              nameCountry = "El Salvador";
              break;
            case "peru.svg":
              nameCountry = "Perú";
              break;
            default:
              nameCountry = "??";
              break;
          }
          return nameCountry;
        }
      }
    },
  });
});
