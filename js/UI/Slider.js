import {
  getMonthAndYear,
  getDays,
  getDay,
  getDayName,
  getMonth,
} from "../date/date.js";

export default class Slider {
  deleteSlider(container) {
    container.slick("unslick");
  }

  createSliderBanner() {
    $(".header-slider").not(".slick-initialized").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      dots: true,
      centerMode: false,
      arrows: false,
    });
  }

  createSectionSliderHome() {
    $(".section-slider")
      .not(".slick-initialized")
      .slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow:
          '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda"/>',
        nextArrow:
          '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha"/>',

        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 2000,
              centerMode: false,
              infinite: true,
              arrows: false,
              dots: true,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              centerMode: true,
              arrows: false,
            },
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              centerMode: false,
              arrows: true,
              prevArrow:
                '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda" />',
              nextArrow:
                '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha" />',
            },
          },

          {
            breakpoint: 1900,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
              centerMode: false,
              arrows: true,
              prevArrow:
                '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda" />',
              nextArrow:
                '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha"/>',
            },
          },
        ],
      });
  }

  createProgramacionSlider(container) {
    container.slick({
      /**/
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 7,
            slidesToScroll: 7,
            autoplay: false,
            centerMode: false,
            infinite: true,
            arrows: false,
            dots: true,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 8,
            slidesToScroll: 8,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda"/>',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha"/>',
          },
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 11,
            slidesToScroll: 11,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda"/>',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha"/>',
          },
        },
        {
          breakpoint: 1900,
          settings: {
            slidesToShow: 11,
            slidesToScroll: 11,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda"/>',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha"/>',
          },
        },
        {
          breakpoint: 10000,
          settings: {
            slidesToShow: 17,
            slidesToScroll: 17,
            infinite: false,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha"/>',
          },
        },
      ],
    });
  }

  newCalendar(date, landing) {
    let d = date.split("-");
    //Nuevo calendario
    let currentDate = new Date();
    let lastDate = new Date(parseInt(d[0]), parseInt(d[1]) - 1, parseInt(d[2]));

    let currentDay = currentDate.getUTCDate();
    let lastDay = lastDate.getUTCDate();

    let currentMonth = currentDate.getUTCMonth();
   
    let lastMonth = lastDate.getUTCMonth();

    let currentYear = currentDate.getUTCFullYear();
    let lastYear = lastDate.getUTCFullYear();

    let daysSlider = "";

    for (let year = currentYear; year <= lastYear; year++) {
      for (let month = currentMonth; month <= lastMonth; month++) {
        let days;
        if (month === currentMonth) {
          days = currentDay;
        } else {
          days = 1;
        }

        let numberDays = new Date(year, month - 1, 0).getDate();
        let day;
        for ( day = days; day <= numberDays; day++) {
          if (day === currentDay) {
            daysSlider += `
            <li  class="${landing}-item programing-item ${landing}-active" date="${year}-${
              month + 1
            }-${day}">
              <div class="day">
                  <p class="day-text">${getDayName(month, day)}</p>
                  <p class="day-number">${day}</p>
              </div>
            </li>`;
          } else {
            if (day > lastDay && month === lastMonth) {
              daysSlider += `
              <li class="cursor-auto pointer-events-none  item-no-available">
                <div class="day">
                    <p class="day-text-desactivated">${getDayName(
                      month,
                      day
                    )}</p>
                    <p class="day-number-desactivated">${day}</p>
                </div>
              </li>`;
            } else {
              daysSlider += `
              <li class="${landing}-item programing-item" date="${year}-${
                month + 1
              }-${day}">
                <div class="day">
                    <p class="day-text">${getDayName(month, day)}</p>
                    <p class="day-number">${day}</p>
                </div>
              </li>`;
            } 
          }


          //Días que estarán bloqueados al superar fecha límite de programación
        } if(day > numberDays && lastMonth >= month){
          for ( day = 1; day <= numberDays; day++) {
           
              if (day < lastDay && month === lastMonth) {
                daysSlider += `
                <li class="cursor-auto pointer-events-none  item-no-available">
                  <div class="day">
                      <p class="day-text-desactivated">${getDayName(
                        month,
                        day
                      )}</p>
                      <p class="day-number-desactivated">${day}</p>
                  </div>
                </li>`;
              } else {
                daysSlider += `
                <li class="${landing}-item programing-item" date="${year}-${
                  month + 1
                }-${day}">
                  <div class="day">
                      <p class="day-text">${getDayName(month, day)}</p>
                      <p class="day-number">${day}</p>
                  </div>
                </li>`;
              } 
            
  
            //Días que estarán bloqueados al superar fecha límite de programación
          }
        }
        
      }
    }

    let programmingContainerSlider = $("#pro-" + landing + "-slider");
    programmingContainerSlider.append(daysSlider);
  }

  createDaysSlider(landing,dates) {
    //se tiene la fecha final de programación
    let d = dates.split("-");
    let endDate = new Date(parseInt(d[0]), parseInt(d[1]) - 1, parseInt(d[2]));
    let lastDay = endDate.getUTCDate(); //saca el día de la fecha hata donde hay programacion
    console.log(lastDay);
    let lastMonth = endDate.getUTCMonth()+1; //saca el mes hasta donde hay programacion
    console.log(lastMonth);
    //inicio de variables del calendario
    /*Programación general*/
    let date = new Date();
    $(".month").text(getMonthAndYear(date.getMonth()));

    /* Número de días del mes actual */
    let currentMonthDays = getDays(1);
    console.log(currentMonthDays, "dias actules");
    /* Número de mes actual*/
    let currentMonth = date.getMonth()+1;
console.log(currentMonth, "mes actual");
    /* Número de los días restantes del mes actual */
    let numberLastDays = getDays(1) - getDay();

    /* Condición: si los días restantes del mes actual
      son menores a 15, mostramos los días del siguiente mes
    */


    var totalDaysSlider = 0;
    var containerItemSlider = "";
    var containerItemSliderEdit = ""; //Variable para editar en programación en backoffice
    var daysSlider = "";

    let month = getMonth(1);
    let nextMonth = getMonth(2);

    if (nextMonth < 10) {
      nextMonth = `0${getMonth(2)}`;
    }
    if (month < 10) {
      month = `0${getMonth(1)}`;
    }

    let day = date.getDate();
    if (day < 10) {
      day = `0${date.getDate()}`;
    }

    if (numberLastDays <= 15) {
      /* Número de días por poner en el slider, considerando los días
        restantes del mes actual y los del siguiente mes
      */
      totalDaysSlider = getDays(2) + (getDays(1) - getDay());

      //Días del primer mes
      for (let i = getDay(); i <= getDays(1); i++) {
        //Día actual
        if (i == getDay()) {
          if (i < 10 && i <= lastDay && currentMonth <= lastMonth ) {
            daysSlider += `
            <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item ${landing}-active" date="${date.getFullYear()}-${month}-0${i}">
              <div class="day">
                  <p class="day-text">${getDayName(currentMonth, i)}</p>
                  <p class="day-number">${i}</p>
              </div>
            </li>      
        `;
        console.log("actual, si es menor a 10 y menor o igual a la fecha y menor o igual al mes");
          } else {
            daysSlider += `
            <li  rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item ${landing}-active cursor-auto pointer-events-none  item-no-available" date="${date.getFullYear()}-${month}-${i}">
              <div class="day">
                  <p class="day-text-desactivated">${getDayName(currentMonth, i)}</p>
                  <p class="day-number-desactivated">${i}</p>
              </div>
            </li>      
        `;
        console.log("actual,else, es mayor a 10 y mayor a ");
          }
          if(i < 10 && i >= lastDay && currentMonth <= lastMonth){
            daysSlider += `
            <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item ${landing}-active cursor-auto pointer-events-none  item-no-available" date="${date.getFullYear()}-${month}-0${i}">
              <div class="day">
                  <p class="day-text-desactivated">${getDayName(currentMonth, i)}</p>
                  <p class="day-number-desactivated">${i}</p>
              </div>
            </li>      
        `;
        console.log("actual, menor a 10, mayor a la fecha");
          }else{
            daysSlider += `
            <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item ${landing}-active " date="${date.getFullYear()}-${month}-0${i}">
              <div class="day">
                  <p class="day-text">${getDayName(currentMonth, i)}</p>
                  <p class="day-number">${i}</p>
              </div>
            </li>      
        `;   console.log("actual,else menor a 10, mayor a la");
          }
        } else {
          if (i < 10 && i<= lastDay && currentMonth <= lastMonth) {
            //Días restantes
            daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item" date="${date.getFullYear()}-${month}-0${i}">
            <div class="day">
                <p class="day-text">${getDayName(currentMonth, i)}</p>
                <p class="day-number">${i}</p>
            </div>
          </li>      
          `;   console.log("restantes, menor a 10, menor a la fecha");
          } else {
            //Días restantes
            daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item cursor-auto pointer-events-none  item-no-available" date="${date.getFullYear()}-${month}-${i}">
            <div class="day">
                <p class="day-text-desactivated">${getDayName(currentMonth, i)}</p>
                <p class="day-number-desactivated">${i}</p>
            </div>
          </li>      
          `;console.log("restantes,else mayor a 10, menor a la fecha");
          }
        }
        if(i < 10 && i > lastDay && currentMonth <= lastMonth){
          daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item" date="${date.getFullYear()}-${month}-0${i}">
            <div class="day">
                <p class="day-text">${getDayName(currentMonth, i)}</p>
                <p class="day-number">${i}</p>
            </div>
          </li>      
          `;console.log("restantes, menor a 10, maayor a la fecha");
          } else {
            //Días restantes
            daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item cursor-auto pointer-events-none  item-no-available" date="${date.getFullYear()}-${month}-${i}">
            <div class="day">
                <p class="day-text-desactivated">${getDayName(currentMonth, i)}</p>
                <p class="day-number-desactivated">${i}</p>
            </div>
          </li>      
          `;
          console.log("restantes, else, mayor a 10, mayor a la fecha");
        }
        if(i > 10 && i <= lastDay && currentMonth <= lastMonth){
          daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item" date="${date.getFullYear()}-${month}-0${i}">
            <div class="day">
                <p class="day-text">${getDayName(currentMonth, i)}</p>
                <p class="day-number">${i}</p>
            </div>
          </li>      
          `; console.log("restantes, mayor a 10, menor a la fecha");
          } else {
            //Días restantes
            daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item cursor-auto pointer-events-none  item-no-available" date="${date.getFullYear()}-${month}-${i}">
            <div class="day">
                <p class="day-text-desactivated">${getDayName(currentMonth, i)}</p>
                <p class="day-number-desactivated">${i}</p>
            </div>
          </li>      
          `;console.log("restantes,else menor a 10, menor a la fecha");
          
        }if(i > 10 && i > lastDay && currentMonth <= lastMonth){
          daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item cursor-auto pointer-events-none  item-no-available" date="${date.getFullYear()}-${month}-${i}">
            <div class="day">
                <p class="day-text-desactivated">${getDayName(currentMonth, i)}</p>
                <p class="day-number-desactivated">${i}</p>
            </div>
          </li>      
          `;
          console.log("restantes, mayor a 10, mayor  a la fecha");
        }
        
      }
      //Días del mes siguiente
      for (let i = 1; i <= getDays(2); i++) {
        if (i < 10) {
          daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
            1
          )}" class="${landing}-item programing-item" date="${date.getFullYear()}-${nextMonth}-0${i}">
            <div class="day">
                <p class="day-text">${getDayName(currentMonth + 1, i)}</p>
                <p class="day-number">${i}</p>
            </div>
          </li>      
      `;
        } else {
          daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
            1
          )}" class="${landing}-item programing-item" date="${date.getFullYear()}-${nextMonth}-${i}">
            <div class="day">
                <p class="day-text">${getDayName(currentMonth + 1, i)}</p>
                <p class="day-number">${i}</p>
            </div>
          </li>      
      `;
        }
      }
      let programmingContainerSlider = $("#pro-" + landing + "-slider");
      programmingContainerSlider.append(daysSlider);
    } else {
      //En caso de que al mes le falten más de 15 días para terminar
      totalDaysSlider = currentMonthDays;
      for (let i = getDay(); i <= totalDaysSlider; i++) {
        if (i == getDay()) {
          if (i < 10) {
            //Día actual activo
            daysSlider += `
            <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item ${landing}-active" date="${date.getFullYear()}-${month}-0${i}">
              <div class="day">
                  <p class="day-text">${getDayName(currentMonth, i)}</p>
                  <p class="day-number">${i}</p>
              </div>
            </li>      
        `;
          } else {
            //Día actual activo
            daysSlider += `
          <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item ${landing}-active" date="${date.getFullYear()}-${month}-${i}">
            <div class="day">
                <p class="day-text">${getDayName(currentMonth, i)}</p>
                <p class="day-number">${i}</p>
            </div>
          </li>      
      `;
          }
        } else {
          if (i < 10) {
            //Días siguientes
            daysSlider += `
        <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item" date="${date.getFullYear()}-${month}-0${i}">
          <div class="day">
              <p class="day-text">${getDayName(currentMonth, i)}</p>
              <p class="day-number">${i}</p>
          </div>
        </li>      
        `;
          } else {
            //Días siguientes
            daysSlider += `
        <li rel="${landing}-${i}-${getMonth(
              0
            )}" class="${landing}-item programing-item" date="${date.getFullYear()}-${month}-${i}">
          <div class="day">
              <p class="day-text">${getDayName(currentMonth, i)}</p>
              <p class="day-number">${i}</p>
          </div>
        </li>      
        `;
          }
        }
      }
      let programmingContainerSlider = $("#pro-" + landing + "-slider");
      programmingContainerSlider.html(daysSlider);
    }
  }

  showImageBanner() {
    /* Banner Landing Canal Claro */

    const imagesBannerClaroCinema = [
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-02-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-02-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-03-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-03-B.jpg",
      },
    ];

    let imagesBannerProgramming = [];

    let slideBannerClaroCinema = "";
    let bannerClaroCinema = $("#banner-claro-cinema");

    if (screen.width < 768) {
      $(".claro-image-banner-1").attr("src", "");
      $(".concert-image-banner-1").attr("src", "");
      $(".cinema-image-banner-1").attr("src", "");
    } else if (screen.width >= 768 && screen.width < 1200) {
      imagesBannerProgramming.forEach(function (image) {
        slideBannerProgramming += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10" alt="banner-de-pc-claro-cinema"/>
        </div>`;
      });

      imagesBannerClaroCinema.forEach(function (image) {
        slideBannerClaroCinema += `        
        <div class="header-slide">
          <img src="${image.imageBannerTablet}" class="rellax" data-rellax="10" alt="banner-de-tablet-claro-cinema"/>
        </div>`;
      });

      //bannerClaroCanal.html(slideBanner);
      bannerClaroCinema.html(slideBannerClaroCinema);
    } else if (screen.width >= 1200) {
      imagesBannerProgramming.forEach(function (image) {
        slideBannerProgramming += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10" alt="banner-de-pc-claro-cinema"/>
        </div>`;
      });

      imagesBannerClaroCinema.forEach(function (image) {
        slideBannerClaroCinema += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10" alt="banner-de-pc-claro-cinema"/>
        </div>`;
      });

      //bannerClaroCanal.html(slideBanner);
      bannerClaroCinema.html(slideBannerClaroCinema);
    }

    bannerClaroCinema.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      dots: true,
      centerMode: false,
      arrows: false,
      prevArrow:
        '<img src="../images/sliders/prev.png" class="arrow-prev" alt="flecha-izquierda" />',
      nextArrow:
        '<img src="../images/sliders/next.png" class="arrow-next" alt="flecha-derecha" />',
      autoplay: true,
      autoplaySpeed: 2000,
    });

    //slider claro-canal

    // slider para el de cinema

    const paginationcinema = $(".pag");
    $(".pag").click(function () {
      paginationcinema.removeClass("selteal");
      $(this).addClass("selteal");
    });
    var slideIndexcinema = 3;
    $(".slider-pagination-add").click(function () {
      //Cada vez que se haga click, el contador incrementa
      slideIndexcinema++;
      //Agregamos un slide al slider de programación
      $(".header-slider-cinem").slick(
        "slickAdd",
        ` <div >
<div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
<label for="image_logo${slideIndexcinema}" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
<img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" alt="imagen-default"/>
</label>
</div>
</div>
`
      );
    });

    /*     $(window).resize(function () {
      if (bannerClaroCinema.hasClass("slick-initialized")) {
        bannerClaroCinema.unslick();
      }
      if (bannerConcertChannel.hasClass("slick-initialized")) {
        bannerConcertChannel.unslick();
      }
      if (screen.width < 768) {
        $(".claro-image-banner-1").attr("src", "");
        $(".concert-image-banner-1").attr("src", "");
        $(".cinema-image-banner-1").attr("src", "");
      } else if (screen.width >= 768 && screen.width < 1200) {
        slideBanner = "";
        imagesBannerClaroCanal.forEach(function (image) {
          slideBanner += `        
          <div class="header-slide">
            <img src="${image.imageBannerTablet}" class="rellax" data-rellax="10">
          </div>`;
        });
        slideBannerClaroCinema = "";
        imagesBannerClaroCinema.forEach(function (image) {
          slideBannerClaroCinema += `        
          <div class="header-slide">
            <img src="${image.imageBannerTablet}" class="rellax" data-rellax="10">
          </div>`;
        });
        slideBannerConcertChannel = "";
        imagesBannerConcertChannel.forEach(function (image) {
          slideBannerConcertChannel += `        
          <div class="header-slide">
            <img src="${image.imageBannerTablet}" class="rellax" data-rellax="10">
          </div>`;
        });
        slideBannerProgramming = "";
        imagesBannerProgramming.forEach(function (image) {
          slideBannerProgramming += `        
          <div class="header-slide">
            <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
          </div>`;
        });

        //bannerClaroCanal.html(slideBanner);
        bannerClaroCinema.html(slideBannerClaroCinema);
        bannerConcertChannel.html(slideBannerConcertChannel);

        $(".header-slider").slick();
      } else if (screen.width >= 1200) {
        slideBanner = "";
        imagesBannerClaroCanal.forEach(function (image) {
          slideBanner += `        
          <div class="header-slide">
            <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
          </div>`;
        });
        slideBannerClaroCinema = "";
        imagesBannerClaroCinema.forEach(function (image) {
          slideBannerClaroCinema += `        
          <div class="header-slide">
            <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
          </div>`;
        });
        slideBannerConcertChannel = "";
        imagesBannerConcertChannel.forEach(function (image) {
          slideBannerConcertChannel += `        
          <div class="header-slide">
            <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
          </div>`;
        });
        slideBannerProgramming = "";
        imagesBannerProgramming.forEach(function (image) {
          slideBannerProgramming += `        
          <div class="header-slide">
            <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
          </div>`;
        });
        //bannerClaroCanal.html(slideBanner);
        bannerClaroCinema.html(slideBannerClaroCinema);
        bannerConcertChannel.html(slideBannerConcertChannel);
      }
      bannerClaroCinema.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false,
        prevArrow:
          '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow:
          '<img src="../images/sliders/next.png" class="arrow-next" />',
        autoplay: true,
        autoplaySpeed: 2000,
      });

      bannerConcertChannel.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false,
        prevArrow:
          '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow:
          '<img src="../images/sliders/next.png" class="arrow-next" />',
        autoplay: true,
        autoplaySpeed: 2000,
      });
    }); */
  }
}
