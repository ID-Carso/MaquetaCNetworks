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
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',

        responsive: [{
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
              prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
              nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
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
              prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
              nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
            },
          },
        ],
      });
  }

  createProgramacionSlider(container) {
    container.slick({
      /**/
      responsive: [{
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
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
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
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
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
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
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
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
          },
        },
      ],
    });
  }

  createDaysSlider(landing) {
    /*Programación general*/
    let date = new Date();
    $(".month").html(getMonthAndYear(date.getMonth()));

    /* Número de días del mes actual */
    let currentMonthDays = getDays(1);

    /* Número de mes actual*/
    let currentMonth = date.getMonth();


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
      day = `0${getDate()}`;
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
          if (i < 10) {
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
          `;
          } else {
            //Días restantes
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

    const imagesBannerClaroCanal = [{
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-01-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-01-B.jpg",
      },
      {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-02-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-02-B.jpg",
      },
      {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-03-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-03-B.jpg",
      },
    ];
    const imagesBannerClaroCinema = [{
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-B.jpg",
      },
      {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-02-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-02-B.jpg",
      },
      {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-03-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-03-B.jpg",
      },
    ];
    const imagesBannerConcertChannel = [{
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-01-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-01-B.jpg",
      },
      {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-02-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-02-B.jpg",
      },
      {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-03-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-03-B.jpg",
      },
    ];

    let imagesBannerProgramming = [];
    /*
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/pc/CANAL-CLARO-04-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/tablet/CANAL-CLARO-04-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/pc/CANAL-CLARO-05-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/tablet/CANAL-CLARO-05-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/pc/CANAL-CLARO-06-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/tablet/CANAL-CLARO-06-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-04-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-04-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-05-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/tablet/C-CINEMA-05-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-06-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/tablet/C-CINEMA-06-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/pc/CONCERT-04-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/tablet/CONCERT-04-A.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/pc/CONCERT-05-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/tablet/CONCERT-05-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/pc/CONCERT-06-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/tablet/CONCERT-06-B.jpg",
      },
    ];
*/


    let slideBanner = "";
    let slideBannerClaroCinema = "";
    let slideBannerConcertChannel = "";
    let slideBannerProgramming = "";
    let bannerClaroCanal = $("#banner-claro-canal");
    let bannerClaroCinema = $("#banner-claro-cinema");
    let bannerConcertChannel = $("#banner-concert-channel");
    let headerSlider = $(".header-slider");
    //$(".header-slider").slick("unslick");
    if (headerSlider.hasClass("slick-initialized")) {
      headerSlider.unslick();
    }
    if (screen.width < 768) {
      $(".claro-image-banner-1").attr("src", "");
      $(".concert-image-banner-1").attr("src", "");
      $(".cinema-image-banner-1").attr("src", "");
    } else if (screen.width >= 768 && screen.width < 1200) {
      imagesBannerProgramming.forEach(function (image) {
        slideBannerProgramming += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
        </div>`;
      });

      imagesBannerClaroCanal.forEach(function (image) {
        slideBanner += `        
        <div class="header-slide">
          <img src="${image.imageBannerTablet}" class="rellax" data-rellax="10">
        </div>`;
      });
      imagesBannerClaroCinema.forEach(function (image) {
        slideBannerClaroCinema += `        
        <div class="header-slide">
          <img src="${image.imageBannerTablet}" class="rellax" data-rellax="10">
        </div>`;
      });
      imagesBannerConcertChannel.forEach(function (image) {
        slideBannerConcertChannel += `        
        <div class="header-slide">
          <img src="${image.imageBannerTablet}" class="rellax" data-rellax="10">
        </div>`;
      });
      bannerClaroCanal.html(slideBanner);
      bannerClaroCinema.html(slideBannerClaroCinema);
      bannerConcertChannel.html(slideBannerConcertChannel);

    } else if (screen.width >= 1200) {
      if (headerSlider.hasClass("slick-initialized")) {
        headerSlider.unslick();
      }

      imagesBannerProgramming.forEach(function (image) {
        slideBannerProgramming += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
        </div>`;
      });
      imagesBannerClaroCanal.forEach(function (image) {
        slideBanner += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
        </div>`;
      });
      imagesBannerClaroCinema.forEach(function (image) {
        slideBannerClaroCinema += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
        </div>`;
      });
      imagesBannerConcertChannel.forEach(function (image) {
        slideBannerConcertChannel += `        
        <div class="header-slide">
          <img src="${image.imageBannerPC}" class="rellax" data-rellax="10">
        </div>`;
      });

      bannerClaroCanal.html(slideBanner);
      bannerClaroCinema.html(slideBannerClaroCinema);
      bannerConcertChannel.html(slideBannerConcertChannel);

    }

    $(".header-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      dots: true,
      centerMode: false,
      arrows: false,
      prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
      nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
      autoplay: true,
      autoplaySpeed: 2000,
    });
   
//slider para el de cinema
$("#banner-claro-cinema-edi").append(slideBannerClaroCinema);
 $("#banner-claro-cinema-edi").not(".slick-initialized").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: false,
  dots: true,
  appendDots: $(".programming-slider-dots"),
  centerMode: false,
  arrows: false,
  prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
  nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
  customPaging: function (slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return (
      "<p class='a-text-bold-tealblue slider-pagination-item pag ' slide_index=" + (i) + ">" +
      (i + 1) +
      "</p> "
    );
  },
});
 
 //slider concert
$("#banner-concert-channel-edi").append(slideBannerConcertChannel);
 $("#banner-concert-channel-edi").not(".slick-initialized").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: false,
  dots: true,
  appendDots: $(".programming-slider-dots"),
  centerMode: false,
  arrows: false,
  prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
  nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
  customPaging: function (slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return (
      "<p class='a-text-bold-tealblue slider-pagination-item pag ' slide_index=" + (i) + ">" +
      (i + 1) +
      "</p> "
    );
  },
});
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
`
<div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
<label for="image_logo${slideIndexcinema}" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
<img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
</label>
</div>

`
);
});


    
    $(window).resize(function () {
      if (headerSlider.hasClass("slick-initialized")) {
        headerSlider.slick("unslick");
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

        bannerClaroCanal.html(slideBanner);
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
        bannerClaroCanal.html(slideBanner);
        bannerClaroCinema.html(slideBannerClaroCinema);
        bannerConcertChannel.html(slideBannerConcertChannel);
      }
      $(".header-slider").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false,
        prevArrow: '<img src="./images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="./images/sliders/next.png" class="arrow-next" />',
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });
  }
}