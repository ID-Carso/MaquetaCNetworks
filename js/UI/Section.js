import Slider from "./Slider.js";

export default class Section {
  createProgramacionSlider() {
    programacion_slider = $(".programacion-slider").slick({
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
  renderHome(json) {


    /* Header Home*/
    //$("#slider-header-home").slick("unslick");
    let imagesHeader = [
      json.data.block_1_image_background_1,
      json.data.block_1_image_background_2,
      json.data.block_1_image_background_3,
      json.data.block_1_image_background_4,
      json.data.block_1_image_background_5,
    ];

    let imagesHeaderLength = imagesHeader.length;
    let divImageHeader = "";
    for (let i = 0; i < imagesHeaderLength; i++) {
      divImageHeader += `
      <div class="header-slide">
        <img src="${imagesHeader[i]}" class="rellax" data-rellax="10">
      </div>`;
    }

    $("#slider-header-home").append(divImageHeader);
    $("#slider-header-home").not(".slick-initialized").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      dots: true,
      centerMode: false,
      arrows: false,
    });

    let titleHeader = `<span class="header-span">${json.data.block_1_title} </span>${json.data.block_1_subtitle}`;
    $(".header-h1").html(titleHeader);

    $(".source-video").attr("src", json.data.block_1_video_name);
    let titleTv = `${json.data.block_2_title1} <span class="header-span">${json.data.block_2_title2}</span><span class="header-point">•</span>`;
    $(".title-tv").html(titleTv);


    $(".claro-nav-image").attr("src", json.data.block_2_channel1_icon);
    $(".concert-nav-image").attr("src", json.data.block_2_channel2_icon);
    $(".cinema-nav-image").attr("src", json.data.block_2_channel3_icon);
    $(".nv-nav-image").attr("src", json.data.block_2_channel4_icon);
    $(".sports-nav-image").attr("src", json.data.block_2_channel5_icon);
    /* End Header */

    /*CLARO CANAL HOME */
    $(".claro-image-header").attr("src", json.data.block_3_icon_channel);
    $(".concerthome-image-header").attr("src", json.data.block_4_icon_channel);
    $(".cinemahome-image-header").attr("src", json.data.block_5_icon_channel);

    /* TITLE */
    $(".a-claro-channel-title").text(json.data.block_3_title);

    /* SUBTITLE */
    $(".a-claro-home-subtitle").text(json.data.block_3_subtitle);

    /* BUTTON */
    $(".btn-canal-claro-home").text(json.data.block_3_button1);

    /* SLIDER */
    let favoritesClaroCanalSynopsis = JSON.parse(
      localStorage.getItem("favoritesCanalClaro")
    );
    let favoritesConcertChannelSynopsis = JSON.parse(
      localStorage.getItem("favoritesConcertChannel")
    );
    let favoritesClaroCinemaSynopsis = JSON.parse(
      localStorage.getItem("favoritesClaroCinema")
    );

    let arrayFavoritesId = [];
    if (localStorage.getItem("favoritesCanalClaro")) {
      let favoritesCanalClaroLength = favoritesClaroCanalSynopsis.length;
      for (let i = 0; i < favoritesCanalClaroLength; i++) {
        let favoriteId = favoritesClaroCanalSynopsis[i].chapter_id;
        arrayFavoritesId.push(favoriteId);
      }
    }

    if (localStorage.getItem("favoritesConcertChannel")) {
      let favoritesCanalClaroLength = favoritesConcertChannelSynopsis.length;
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

    let block3Image = [];
    let counter = 1;
    while (true) {
      try {
        if (json.data["block_3_image" + counter]) {
          block3Image[counter - 1] = json.data["block_3_image" + counter];
          counter++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    $(".section-slider").slick("unslick");
    $(".cinema-home-slider").slick("unslick");

    let blockImage3Length = block3Image.length;
    let programLarge = "";
    for (let i = 0; i < blockImage3Length; i++) {
      if (arrayFavoritesId.includes(block3Image[i].chapter_id)) {
        programLarge += `
        <div class="poster">
        <div class="poster-body">
            <div class="showtime-container justify-content-end">
         
                <button type="button" class="poster-button remove-program" _id=${block3Image[i].chapter_id}><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
              <div class="thumbnail-body" _id=${block3Image[i].chapter_id}">
                <div class="thumbnail-large">
                    <img src="${block3Image[i].image_vertical}" alt="">
                </div>
              </div>
        </div>
    </div> 
        `;
      } else {
        programLarge += `
        <div class="poster">
        <div class="poster-body">
            <div class="showtime-container justify-content-end">
                <button type="button" class="poster-button add-favorites" _id=${block3Image[i].chapter_id}><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
            </div>
            <div class="thumbnail-body" _id=${block3Image[i].chapter_id}">
                <div class="thumbnail-large">
                    <img src="${block3Image[i].image_vertical}" alt="">
                </div>
            </div>
        </div>
    </div> 
        `;
      }
    }
    $(".claro-slider-home").append(programLarge);

    //CUADROS DE EDITAR PARA HOME
    let programLargeprev = "";
    for (let i = 0; i < blockImage3Length; i++) {
      if (arrayFavoritesId.includes(block3Image[i].chapter_id)) {
        programLargeprev += `
               

        <div class="poster">

        <div class="poster-body">
            <div class="showtime-container justify-content-end">
         
                <button type="button" class="poster-button remove-program" _id=${block3Image[i].chapter_id}><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
              <div class="thumbnail-body" _id=${block3Image[i].chapter_id}">
                <div class="thumbnail-large">
                    <img src="${block3Image[i].image_vertical}" alt="">
                </div>
              </div>
        </div>
    </div> 
  
        `;
      } else {
        programLargeprev += `
               

              <div class="poster">

        <div class="poster-body">
            <div class="showtime-container justify-content-end">
                <button type="button" class="poster-button add-favorites" _id=${block3Image[i].chapter_id}><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
            </div>
            <div class="thumbnail-body" _id=${block3Image[i].chapter_id}">
                <div class="thumbnail-large">
                    <img src="${block3Image[i].image_vertical}" alt="">
                </div>
            </div>
        </div>
    </div> 
    
        `;
      }
    }
    $(".claro-slider-home-prev").append(programLargeprev);
    //END CUADROS
    let sliderHome = new Slider();

    /* End slider Canal Claro */
    /* End Canal Claro - Home*/

    /* CONCERT CHANNEL HOME*/

    /* SUBTITLE*/
    $(".a-concert-home-subtitle").text(json.data.block_4_subtitle);

    /* BUTTON */
    $(".button-concert-home").text(json.data.block_4_button1);

    /* SLIDER */
    let block4Image = [];
    counter = 1;
    while (true) {
      try {
        if (json.data["block_4_image" + counter]) {
          block4Image[counter - 1] = json.data["block_4_image" + counter];
          counter++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }

    let blockImage4Length = block4Image.length;
    let concertHomeVideosMobile = "";

    for (let i = 0; i < blockImage4Length; i++) {
      if (arrayFavoritesId.includes(block4Image[i].chapter_id)) {
        concertHomeVideosMobile += `
            <div class="poster">
                <div class="poster-body">
                    <div class="showtime-container justify-content-end">
                        <button type="button" class="poster-button remove-program" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
                    </div>
                    <div class="thumbnail-body" _id="${block4Image[i].chapter_id}">
                        <div class="thumbnail-large">
                            <img src="${block4Image[i].image_vertical}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            `;
      } else {
        concertHomeVideosMobile += `
            <div class="poster">
                <div class="poster-body">
                     <div class="showtime-container justify-content-end">
                        <button type="button" class="poster-button add-favorites" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                      </div>
                      <div class="thumbnail-body" _id="${block4Image[i].chapter_id}">
                        <div class="thumbnail-large">
                            <img src="${block4Image[i].image_vertical}" alt="">
                        </div>
                      </div>
                </div>
            </div>
            `;
      }
    }

    $(".concert-home-slider").append(concertHomeVideosMobile);

    //CUADROS DE EDITAR PARA CONCERT-HOME
    let concertHomeVideosMobileprev = "";
    for (let i = 0; i < blockImage4Length; i++) {
      if (arrayFavoritesId.includes(block4Image[i].chapter_id)) {
        concertHomeVideosMobileprev += `
        <div class=" p-3 border-t border-l border-r border-b position-relative">          

        <div class="poster">
        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>

                <div class="poster-body">
                    <div class="showtime-container justify-content-end">
                        <button type="button" class="poster-button remove-program" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
                    </div>
                    <div class="thumbnail-body" _id="${block4Image[i].chapter_id}">
                        <div class="thumbnail-large">
                            <img src="${block4Image[i].image_vertical}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            `;
      } else {
        concertHomeVideosMobileprev += `
        <div class=" p-3 border-t border-l border-r border-b position-relative">          

        <div class="poster">
        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>

                <div class="poster-body">
                     <div class="showtime-container justify-content-end">
                        <button type="button" class="poster-button add-favorites" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                      </div>
                      <div class="thumbnail-body" _id="${block4Image[i].chapter_id}">
                        <div class="thumbnail-large">
                            <img src="${block4Image[i].image_vertical}" alt="">
                        </div>
                      </div>
                </div>
            </div>
            </div>
            `;
      }
    }

    $(".concert-home-slider-prev").append(concertHomeVideosMobileprev);

    //END CUADROS

    /* HOME CLARO CINEMA SECTION*/

    /* TITLE */

    /* SUBTITLE*/
    $(".a-cinema-home-subtitle").text(json.data.block_5_subtitle);

    /* BUTTON */
    $(".button-cinema-home").text(json.data.block_5_button1);

    /* SLIDER*/
    let block5Image = [];
    counter = 1;
    while (true) {
      try {
        if (json.data["block_5_image" + counter]) {
          block5Image[counter - 1] = json.data["block_5_image" + counter];
          counter++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }

    let blockImage5Length = block5Image.length;
    let cinemaHomeVideosMobile = "";

    for (let i = 0; i < blockImage5Length; i++) {
      if (arrayFavoritesId.includes(block5Image[i].chapter_id)) {
        cinemaHomeVideosMobile += `
              <div class="poster">
                  <div class="poster-body">
                      <div class="showtime-container justify-content-end">
                        
                          <button type="button" class="poster-button remove-program" _id="${block5Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
                      </div>
                      <div class="thumbnail-body" _id="${block5Image[i].chapter_id}">
                          <div class="thumbnail-large">
                              <img src="${block5Image[i].image_vertical}" alt="">
                          </div>
                      </div>
                    
                  </div>
              </div>
              `;
      } else {
        cinemaHomeVideosMobile += `
              <div class="poster">
                  <div class="poster-body">
                      <div class="showtime-container justify-content-end">
                 
                          <button type="button" class="poster-button add-favorites" _id="${block5Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                      </div>
                      <div class="thumbnail-body" _id="${block5Image[i].chapter_id}">
                          <div class="thumbnail-large">
                              <img src="${block5Image[i].image_vertical}" alt="">
                          </div>
                      </div>
                  </div>
              </div>
              `;
      }
    }

    $(".cinema-home-slider").append(cinemaHomeVideosMobile);

    //CUADROS PARA EDITAR CINEMA
    let cinemaHomeVideosMobileprev = "";
    for (let i = 0; i < blockImage5Length; i++) {
      if (arrayFavoritesId.includes(block5Image[i].chapter_id)) {
        cinemaHomeVideosMobileprev += `
        <div class=" p-3 border-t border-l border-r border-b position-relative">          

            <div class="poster">
        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>

                  <div class="poster-body">
                      <div class="showtime-container justify-content-end">
                        
                          <button type="button" class="poster-button remove-program" _id="${block5Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
                      </div>
                      <div class="thumbnail-body" _id="${block5Image[i].chapter_id}">
                          <div class="thumbnail-large">
                              <img src="${block5Image[i].image_vertical}" alt="">
                          </div>
                      </div>
                    
                  </div>
              </div>
              </div>
              `;
      } else {
        cinemaHomeVideosMobileprev += `
        <div class=" p-3 border-t border-l border-r border-b position-relative">          

        <div class="poster">
        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>

          
                  <div class="poster-body">
                      <div class="showtime-container justify-content-end">
                 
                          <button type="button" class="poster-button add-favorites" _id="${block5Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                      </div>
                      <div class="thumbnail-body" _id="${block5Image[i].chapter_id}">
                          <div class="thumbnail-large">
                              <img src="${block5Image[i].image_vertical}" alt="">
                          </div>
                      </div>
                  </div>
              </div>
              </div>
              `;
      }
    }

    $(".cinema-home-slider-prev").append(cinemaHomeVideosMobileprev);
    //END DE CUADROS
    $(".cinema-home-slider").slick({
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
          slidesToShow: 1,
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
          slidesToShow: 2,
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
        breakpoint: 10000,
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

    /* Nuestra Visión - Home*/

    /*let nuestraVisionHomeVideos = "";

    for (let i = 0; i < blockImage4Length; i++) {
      if (arrayFavoritesId.includes(block4Image[i].chapter_id)) {
        nuestraVisionHomeVideos += `
            <div class="poster">
                <div class="poster-body">
                    <div class="showtime-container">
                        <p class="a-programming-text">14:30 - 16:30</p>
                        <button type="button" class="poster-button remove-program" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
                    </div>
                    <a href="sinopsis.php" class="text-decoration-none">
                        <div class="thumbnail">
                            <img src="${block4Image[i].image_horizontal}" alt="">
                        </div>
                        <div class="a-concert-rectangle ">
                            <p class="a-poster-text-white">${block4Image[i].subtitle}</p>
                        </div>
                    </a>
                </div>
            </div>
            `;
      } else {
        nuestraVisionHomeVideos += `
            <div class="poster">
                <div class="poster-body">
                    <div class="showtime-container">
                        <p class="a-programming-text">14:30 - 16:30</p>
                        <button type="button" class="poster-button remove-program" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                    </div>
                    <a href="sinopsis.php" class="text-decoration-none">
                        <div class="thumbnail">
                            <img src="${block4Image[i].image_horizontal}" alt="">
                        </div>
                        <div class="a-concert-rectangle ">
                            <p class="a-poster-text-white">${block4Image[i].subtitle}</p>
                        </div>
                    </a>
                </div>
            </div>
            `;
      }
    }*/

    /* End Nuestra Visión - Home */

    sliderHome.createSectionSliderHome();
  }

  renderCanalClaro(json) {
    //obtenemos las iamgenes del carrusel 1
    let data = json.data;
    //Banner
    let slideBanner = "";
    let counterCanalClaro = 1;

    while (true) {
      if (data[`block_1_image_slider_${counterCanalClaro}`]) {
        slideBanner += `        
        <div class="header-slide">
          <img src="${data[`block_1_image_slider_${counterCanalClaro}`]}?v=${new Date().getTime()}" class="rellax" data-rellax="10">
        </div>`;
        counterCanalClaro++
      } else {
        break;
      }
    }
    let headerSlider = $(".header-slider");
    $("#banner-claro-canal").append(slideBanner);
    $("#banner-claro-canal").not(".slick-initialized").slick({
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
    $("#banner-claro-canal-edi").append(slideBanner);
    $("#banner-claro-canal-edi").not(".slick-initialized").slick({
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
    //$("#banner-claro-canal").append(slideBanner);
    try {
      $(".header-slider").slick("unslick");
      $(".header-slider").slick({
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
    } catch (error) {
      $(".header-slider").slick({
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
    }


    //cambiamos el icono del landing
    //BLOQUE 2 Seccion de programacion
    //cambiamos el icono del landing
    $('#icon_canal_claro').attr('src', data.block_2_icon_channel)
    //titulo del bloque 2
    $('.a-today-claro-title').text(data.block_2_title_1)
    $('.a-today-claro-title').append(' <span>' + data.block_2_title_2 + '</span>')
    //cambiando url de programacion
    $('#btn-claro-canal a').attr('href', data.block_2_button_url)
    $('.btn-claro-canal').text(data.block_2_button_title)
    //BLOQUE 3 Seccion de video
    $('.a-next-claro-title').text(data.block_3_title)
    $('.a-next-claro-subtitle').text(data.block_3_subtitle)
    // VIDEO
    $(".promo-video")[0].load()
    $('.promo-video source').attr('src', data.block_3_video_url)
    //BLOQUE 4 carruseles
    $('#carrusel_1_title').text(data.block_4_carrusel_1_title)
    $('#carrusel_1_subtitle').text(data.block_4_carrusel_1_subtitle)
    $('#carrusel_2_title').text(data.block_4_carrusel_2_title)
    $('#carrusel_2_subtitle').text(data.block_4_carrusel_2_subtitle)

    let carrusel1 = [];
    let counter = 1;
    while (true) {
      try {
        if (data["block_4_carrusel_1_image" + counter]) {
          carrusel1[counter - 1] = data["block_4_carrusel_1_image" + counter];
          counter++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    //carrusel 2
    let carrusel2 = [];
    let counter2 = 1;
    while (true) {
      try {
        if (data["block_4_carrusel_2_image" + counter2]) {
          carrusel2[counter2 - 1] = data["block_4_carrusel_2_image" + counter2];
          counter2++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    let slider = new Slider();
    let dontLoseSlider = $("#dontLose-claro-slider");
    let sectionSlider = $(".section-slider");
    let exlusiveContentSlider = $("#exlusiveContentClaroSlider");
    sectionSlider.slick("unslick");



    let programsExlusiveContent = [{
      chapter_id: 1,
      program_title: "DRESS CODE",
      image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/05-DRESS-CODE.jpg",
    },
    {
      chapter_id: 2,
      program_title: "FIT FOR LIFE",
      image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/06-FIT4LIFE.jpg",
    },
    {
      chapter_id: 3,
      program_title: "CONEXIÓN CLARO",
      image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/07-CONEXION.jpg",
    },
    {
      chapter_id: 4,
      program_title: "LA CAJA DE PANDORA",
      image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/08-CAJA-DE-PANDORA.jpg",
    },
    ];

    let programTiensQueVerlo = "";
    let programExlusiveContent = "";

    /*
      Almacenamos los programas en otras variables para dibujar los programas con bordes.
      Esto  para la parevisualización en Backoffice de los landings
    */
    let programTienesQueVerloEdit = "";
    let programExlusiveContentEdit = "";
    carrusel1.forEach((program) => {
      programTiensQueVerlo += `
      <div class="poster" >
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-claro-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.genre}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;
      programTienesQueVerloEdit += `
      <div class="poster p-3 border-l border-r border-b border-t position-relative">
      <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2" style="width:15px"></button>
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-claro-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.genre}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;
    });

    carrusel2.forEach((program) => {
      programExlusiveContent += `
      <div class="poster" >
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-claro-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.title}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;
      programExlusiveContentEdit += `
      <div class="poster border-l p-3 border-r border-t border-b" >
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-claro-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.title}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;
    });

    $("#dontLose-claro-sliderEdit").append(programTiensQueVerlo);
    $("#exlusiveContentClaroSliderEdit").append(programExlusiveContent);
    dontLoseSlider.append(programTiensQueVerlo);
    exlusiveContentSlider.append(programExlusiveContent);
    slider.createSectionSliderHome();
  }
  renderClaroCinema(json) {
    //obtenemos las iamgenes del carrusel 1
    let data = json.data;
    debugger

    //BLOQUE 2 Seccion de programacion
    //cambiamos el icono del landing
    $('#icon_claro_cinema').attr('src', data.block_2_icon_channel)
    //titulo del bloque 2
    $('.a-today-cinema-title').text(data.block_2_title_1)
    $('.a-today-cinema-title').append(' <span>' + data.block_2_title_2 + '</span>')
    //cambiando url de programacion
    $('#btn-claro-cinema a').attr('href', data.block_2_button_url)
    $('.btn-claro-cinema').text(data.block_2_button_title)

    //BLOQUE 3 Seccion de video
    $('#a-cinema-title').text(data.block_3_title_1)
    $('#a-cinema-title').append(' <span>' + data.block_3_title_2 + '</span>')
    $('#a-cinema-subtitle').text(data.block_3_subtitle)

    $(".promo-video")[0].load()
    $('.promo-video source').attr('src', data.block_3_video_url)

    //BLOQUE 4 carruseles
    $('#carrusel_1_title').text(data.block_4_carrusel_1_title_1)
    $('#carrusel_1_title').append(' <span class="recordar-title">' + data.block_4_carrusel_1_title_2 + '</span>')
    $('#carrusel_1_subtitle').text(data.block_4_carrusel_1_subtitle)

    $('#carrusel_2_title').text(data.block_4_carrusel_2_title_1)
    $('#carrusel_2_title').append(' <span class="recordar-title">' + data.block_4_carrusel_2_title_2 + '</span>')
    $('#carrusel_2_subtitle').text(data.block_4_carrusel_2_subtitle)

    let carrusel1 = [];
    let counter = 1;
    while (true) {
      try {
        if (data["block_4_carrusel_1_image" + counter]) {
          carrusel1[counter - 1] = data["block_4_carrusel_1_image" + counter];
          counter++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    //carrusel 2
    let carrusel2 = [];
    let counter2 = 1;
    while (true) {
      try {
        if (data["block_4_carrusel_2_image" + counter2]) {
          carrusel2[counter2 - 1] = data["block_4_carrusel_2_image" + counter2];
          counter2++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    let slider = new Slider();
    let claro_cinema_carrusel_1 = $("#claro_cinema_carrusel_1");
    let sectionSlider = $(".section-slider");
    let claro_cinema_carrusel_2 = $("#claro_cinema_carrusel_2");
    sectionSlider.slick("unslick");


    let Strinfcarrusel1 = "";
    let Strinfcarrusel2 = "";
    /*
      Almacenamos los programas en otras variables para dibujar los programas con bordes.
      Esto  para la parevisualización en Backoffice de los landings
    */
    carrusel1.forEach((program) => {
      Strinfcarrusel1 += `
      <div class="poster" >
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-cinema-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.genre}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;

    });

    carrusel2.forEach((program) => {
      Strinfcarrusel2 += `
      <div class="poster" >
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-cinema-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.title}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;

    });

    claro_cinema_carrusel_1.append(Strinfcarrusel1);
    claro_cinema_carrusel_2.append(Strinfcarrusel2);
    slider.createSectionSliderHome();
  }
  renderConcertChanel(json) {
    //obtenemos las iamgenes del carrusel 1
    let data = json.data;
    //BLOQUE 2 Seccion de programacion
    //cambiamos el icono del landing
    $('#icon_concert_channel').attr('src', data.block_2_icon_channel)
    //titulo del bloque 2
    $('.today-concert-title').text(data.block_2_title_1)
    $('.today-concert-title').append(' <span>' + data.block_2_title_2 + '</span>')
    //cambiando url de programacion
    $('#btn-concert-channel a').attr('href', data.block_2_button_url)
    $('.btn-concert-channel').text(data.block_2_button_title)

    //BLOQUE 3 Seccion de video
    $('#a-next-concert-title').text(data.block_3_title)
    $('#a-next-concert-subtitle').text(data.block_3_subtitle)
    $(".promo-video")[0].load()
    $('.promo-video source').attr('src', data.block_3_video_url)

    //BLOQUE 4 carruseles
    $('#carrusel_1_title').text(data.block_4_carrusel_1_title)
    $('#carrusel_1_subtitle').text(data.block_4_carrusel_1_subtitle)
    $('#carrusel_2_title').text(data.block_4_carrusel_2_title)
    $('#carrusel_2_subtitle').text(data.block_4_carrusel_2_subtitle)
    $('.pencil-carrusel1').attr("chapter_id", data.block_4_carrusel_1_image1.chapter_id);
    let carrusel1 = [];
    let counter = 1;
    while (true) {
      try {
        if (data["block_4_carrusel_1_image" + counter]) {
          carrusel1[counter - 1] = data["block_4_carrusel_1_image" + counter];
          counter++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    //carrusel 2
    let carrusel2 = [];
    let counter2 = 1;
    while (true) {
      try {
        if (data["block_4_carrusel_2_image" + counter2]) {
          carrusel2[counter2 - 1] = data["block_4_carrusel_2_image" + counter2];
          counter2++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    let slider = new Slider();
    let concert_channel_carrusel_1 = $("#concert_channel_carrusel_1");
    let sectionSlider = $(".section-slider");
    let concert_channel_carrusel_2 = $("#concert_channel_carrusel_2");
    sectionSlider.slick("unslick");


    let Strinfcarrusel1 = "";
    let Strinfcarrusel2 = "";

    /*
      Almacenamos los programas en otras variables para dibujar los programas con bordes.
      Esto  para la parevisualización en Backoffice de los landings
    */
    ;
    carrusel1.forEach((program) => {
      Strinfcarrusel1 += `
      <div class="poster" >
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-concert-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.genre}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;

    });

    carrusel2.forEach((program) => {
      Strinfcarrusel2 += `
      <div class="poster" >
        <div class="poster-body">
            <div class="thumbnail-body" _id="${program.chapter_id}">
                <div class="thumbnail">
                    <img src="${program.image_horizontal}" alt="">
                </div>
                <div class="a-concert-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${program.title}</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
      `;

    });
    concert_channel_carrusel_1.append(Strinfcarrusel1);
    concert_channel_carrusel_2.append(Strinfcarrusel2);
    slider.createSectionSliderHome();
  }
  renderProgramation(json) {
    let data = json.data;
    //cambiamos los iconos de los canales

    $('#icon_canal_claro').attr('src', `${data.icon_canal_claro}?v=${new Date().getTime()}`);
    $('#icon_concert_channel').attr('src', `${data.icon_concert_channel}?v=${new Date().getTime()}`)
    $('#icon_claro_cinema').attr('src', `${data.icon_claro_cinema}?v=${new Date().getTime()}`)
    //agregamos el slider
    let banner_images = [];
    let counter = 1;
    while (true) {
      try {
        if (data["image_slider_" + counter]) {
          banner_images[counter - 1] = data["image_slider_" + counter];
          counter++;
        } else {
          break;
        }
      } catch (error) {
        break;
      }
    }
    $("#banner-programming").slick("unslick");
    let imagesHeaderLength = banner_images.length;
    let divImageHeader = "";
    for (let i = 0; i < imagesHeaderLength; i++) {
      divImageHeader += `
      <div class="header-slide">
        <img src="${banner_images[i]}" class="rellax" data-rellax="10">
      </div>`;
    }
    $("#banner-programming").append(divImageHeader);
    $("#banner-programming").not(".slick-initialized").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      dots: true,
      centerMode: false,
      arrows: false,
      autoplay: true
    });
  }

  renderProgramation_edi(json) {
    let data = json.data;
    //cambiamos los iconos de los canales

    $('#icon_canal_claro_edi').attr('src', `${data.icon_canal_claro}?v=${new Date().getTime()}`);
    $('#icon_concert_channel_edi').attr('src', `${data.icon_concert_channel}?v=${new Date().getTime()}`);
    $('#icon_claro_cinema_edi').attr('src', `${data.icon_claro_cinema}?v=${new Date().getTime()}`);

    //agregamos el slider
    let banner_images = [];
    let counter = 1;
    while (true) {
      try {
        if (data["image_slider_" + counter]) {
          banner_images[counter - 1] = data["image_slider_" + counter];
          counter++;
        } else {
          break;

        }
      } catch (error) {
        break;

      }
    }
    //$("#banner-programming-edi").slick("unslick");
    let imagesHeaderLength = banner_images.length;
    let divImageHeader = "";
    for (let i = 0; i < imagesHeaderLength; i++) {
      divImageHeader += `
        <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
            <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                <!--<span class="a-text-bold-warm text-plus mb90 shadow-contrast add-photo">472px X 295px</span>-->
                <img src="${banner_images[i]}?v=${new Date().getTime()}" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
            </label>
        </div>`;
    }


    $("#banner-programming-edi").append(divImageHeader);
    $("#banner-programming-edi").not(".slick-initialized").slick({
      slidesToShow: 1,
      dots: true,
      appendDots: $(".programming-slider-dots"),
      initialSlide: 0,
      infinite: false,
      arrows: false,
      customPaging: function (slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return (
          "<p class='a-text-bold-tealblue slider-pagination-item pag' slide_index=" + (i) + ">" +
          (i + 1) +
          "</p> "
        );
      },
    });

    //para dar click
    const pagination = $(".pag");
    $(".pag").click(function () {
      pagination.removeClass("selteal");
      $(this).addClass("selteal");
    });



  }

}