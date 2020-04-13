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
          '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow:
          '<img src="../images/sliders/next.png" class="arrow-next" />',

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
                '<img src="../images/sliders/prev.png" class="arrow-prev" />',
              nextArrow:
                '<img src="../images/sliders/next.png" class="arrow-next" />',
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
                '<img src="../images/sliders/prev.png" class="arrow-prev" />',
              nextArrow:
                '<img src="../images/sliders/next.png" class="arrow-next" />',
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
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />',
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
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />',
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
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />',
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
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />',
          },
        },
      ],
    });
  }

  createDaysSlider(landing, containerSlider) {
    /*Programación general*/
    let date = new Date();
    $(".month").html(getMonthAndYear(date.getMonth()));

    /* Número de días del mes actual */
    let currentMonthDays = getDays(1);

    /* Número de mes actual*/
    let currentMonth = date.getMonth();

    /* Mes Siguiente*/
    let nextMonth = getDays(2);

    /* Número de los días restantes del mes actual */
    let numberLastDays = getDays(1) - getDay();

    /* Condición: si los días restantes del mes actual
      son menores a 15, mostramos los días del siguiente mes
    */

    var totalDaysSlider = 0;
    var containerItemSlider = "";
    var daysSlider = "";
    if (numberLastDays <= 15) {
      /* Número de días por poner en el slider, considerando los días
        restantes del mes actual y los del siguiente mes
      */
      totalDaysSlider = getDays(2) + (getDays(1) - getDay());
      for (let i = getDay(); i <= getDays(1); i++) {
        if (i == getDay()) {
          daysSlider += `
            <li rel="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-item programing-item ${landing}-active">
              <div class="day">
                  <p class="day-text">${getDayName(currentMonth, i)}</p>
                  <p class="day-number">${i}</p>
              </div>
            </li>      
        `;
          containerItemSlider += `
        <div id="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-content"></div>
        `;
        } else {
          daysSlider += `
        <li rel="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-item programing-item">
          <div class="day">
              <p class="day-text">${getDayName(currentMonth, i)}</p>
              <p class="day-number">${i}</p>
          </div>
        </li>      
        `;
          containerItemSlider += `
        <div id="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-content"></div>
        `;
        }
      }

      for (let i = 1; i <= getDays(2); i++) {
        daysSlider += `
      <li rel="${landing}-${i}-${getMonth(
          1
        )}" class="${landing}-item programing-item">
        <div class="day">
            <p class="day-text">${getDayName(currentMonth + 1, i)}</p>
            <p class="day-number">${i}</p>
        </div>
      </li>      
  `;
        containerItemSlider += `
  <div id="${landing}-${i}-${getMonth(1)}" class="${landing}-content"></div>
  `;
      }

      let programmingContainerSlider = $("#pro-" + landing + "-slider");
      programmingContainerSlider.append(daysSlider);
      containerSlider.append(containerItemSlider);
    } else {
      totalDaysSlider = currentMonthDays;
      for (let i = getDay(); i <= totalDaysSlider; i++) {
        if (i == getDay()) {
          daysSlider += `
            <li rel="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-item programing-item ${landing}-active">
              <div class="day">
                  <p class="day-text">${getDayName(currentMonth, i)}</p>
                  <p class="day-number">${i}</p>
              </div>
            </li>      
        `;
          containerItemSlider += `
        <div id="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-content"></div>
        `;
        } else {
          daysSlider += `
        <li rel="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-item programing-item">
          <div class="day">
              <p class="day-text">${getDayName(currentMonth, i)}</p>
              <p class="day-number">${i}</p>
          </div>
        </li>      
        `;
          containerItemSlider += `
        <div id="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-content"></div>
        `;
        }
      }
      let programmingContainerSlider = $("#pro-" + landing + "-slider");
      programmingContainerSlider.html(daysSlider);
      containerSlider.append(containerItemSlider);
    }
  }

  showImageBanner() {
    /* Banner Landing Canal Claro */

    const imagesBannerClaroCanal = [
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-01-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-01-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-02-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-02-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-03-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-03-B.jpg",
      },
    ];
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
    const imagesBannerConcertChannel = [
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-01-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-01-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-02-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-02-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-03-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-03-B.jpg",
      },
    ];

    let slideBanner = "";
    let slideBannerClaroCinema = "";
    let slideBannerConcertChannel = "";
    let bannerClaroCanal = $("#banner-claro-canal");
    let bannerClaroCinema = $("#banner-claro-cinema");
    let bannerConcertChannel = $("#banner-concert-channel");
    if (screen.width < 768) {
      $(".claro-image-banner-1").attr("src", "");
      $(".concert-image-banner-1").attr("src", "");
      $(".cinema-image-banner-1").attr("src", "");
    } else if (screen.width >= 768 && screen.width < 1200) {
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
    $(window).resize(function () {
      if (screen.width < 768) {
        $(".claro-image-banner-1").attr("src", "");
        $(".concert-image-banner-1").attr("src", "");
        $(".cinema-image-banner-1").attr("src", "");
      } else if (screen.width >= 768 && screen.width < 1200) {
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
    });
  }
}
