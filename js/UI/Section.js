import Slider from "./Slider.js";

export default class Section {
  createProgramacionSlider() {
    programacion_slider = $(".programacion-slider").slick({
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
            dots: true
          }
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
              '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
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
              '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
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
              '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
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
              '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }
      ]
    });
  }
  renderHome(json) {
    console.log(json);

    /* Header Home*/
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

    /*Canal Claro Home */
    $(".a-claro-channel-title").text(json.data.block_3_title);
    $(".btn-canal-claro-home").text(json.data.block_3_button1);
    /* Slider Canal Claro Home */
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

    let block3Image = [
      json.data.block_3_image1,
      json.data.block_3_image2,
      json.data.block_3_image3,
      json.data.block_3_image4,
      json.data.block_3_image5
    ];

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
            
                <div class="thumbnail-large">
                    <img src="${block3Image[i].image_vertical}" alt="">
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
            
                <div class="thumbnail-large">
                    <img src="${block3Image[i].image_vertical}" alt="">
                </div>
            
        </div>
    </div> 
        `;
      }
    }
    $(".claro-slider-home").append(programLarge);
    let sliderHome = new Slider();

    /* End slider Canal Claro */
    /* End Canal Claro - Home*/

    /* Concert Channel - Home*/
    let block4Image = [
      json.data.block_4_image1,
      json.data.block_4_image2,
      json.data.block_4_image3,
      json.data.block_4_image4
    ];

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
                  
                        <div class="thumbnail-large">
                            <img src="${block4Image[i].image_horizontal}" alt="">
                        </div>
                   
                </div>
            </div>
            `;
      } else {
        concertHomeVideosMobile += `
            <div class="poster">
                <div class="poster-body">
                    <div class="showtime-container justify-content-end">
                   
                        <button type="button" class="poster-button remove-program" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                    </div>
                   
                        <div class="thumbnail-large">
                            <img src="${block4Image[i].image_horizontal}" alt="">
                        </div>
                    
                </div>
            </div>
            `;
      }
    }

    $(".concert-home-slider").append(concertHomeVideosMobile);

    var concertVideoDesktop1 = "";
    var concertVideoDesktop2 = "";
    var concertVideoDesktop3 = "";
    var concertVideoDesktop4 = "";
    if (arrayFavoritesId.includes(json.data.block_4_image1.chapter_id)) {
      concertVideoDesktop1 = `                                
      <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button remove-program" _id="${json.data.block_4_image1.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
           
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_4_image1.image_horizontal}" alt="">
                </div>
                <div class="a-concert-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${json.data.block_4_image1.subtitle}
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>`;
    } else {
      concertVideoDesktop1 = `                                
        <div class="poster">
          <div class="poster-body">
              <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button add-favorites" _id="${json.data.block_4_image1.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
              </div>
             
              <a href="sinopsis.php" class="text-decoration-none">
                  <div class="thumbnail">
                      <img src="${json.data.block_4_image1.image_horizontal}" alt="">
                  </div>
                  <div class="a-concert-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">${json.data.block_4_image1.subtitle}
                          </p>
                      </div>
                  </div>
              </a>
          </div>
  
      </div>`;
    }

    if (arrayFavoritesId.includes(json.data.block_4_image2.chapter_id)) {
      concertVideoDesktop2 = `                                
        <div class="poster">
          <div class="poster-body">
              <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button remove-program" _id="${json.data.block_4_image2.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
              </div>
             
              <a href="sinopsis.php" class="text-decoration-none">
                  <div class="thumbnail">
                      <img src="${json.data.block_4_image2.image_horizontal}" alt="">
                  </div>
                  <div class="a-concert-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">${json.data.block_4_image2.subtitle}
                          </p>
                      </div>
                  </div>
              </a>
          </div>
  
      </div>`;
    } else {
      concertVideoDesktop2 = `                                
        <div class="poster">
          <div class="poster-body">
              <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button add-favorites" _id="${json.data.block_4_image2.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
              </div>
             
              <a href="sinopsis.php" class="text-decoration-none">
                  <div class="thumbnail">
                      <img src="${json.data.block_4_image2.image_horizontal}" alt="">
                  </div>
                  <div class="a-concert-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">${json.data.block_4_image2.subtitle}
                          </p>
                      </div>
                  </div>
              </a>
          </div>
  
      </div>`;
    }

    if (arrayFavoritesId.includes(json.data.block_4_image3.chapter_id)) {
      concertVideoDesktop3 = `    <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button remove-program" _id="${json.data.block_4_image3.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_4_image3.image_horizontal}" alt="">
                </div>
                <div class="a-concert-rectangle thumbnail-info-title">
                    <p class="a-poster-text-white">${json.data.block_4_image3.subtitle}</p>
                </div>
            </a>
        </div>
    </div>`;
    } else {
      concertVideoDesktop3 = `    <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button add-favorites" _id="${json.data.block_4_image3.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_4_image3.image_horizontal}" alt="">
                </div>
                <div class="a-concert-rectangle thumbnail-info-title">
                    <p class="a-poster-text-white">${json.data.block_4_image3.subtitle}</p>
                </div>
            </a>
        </div>
    </div>`;
    }

    if (arrayFavoritesId.includes(json.data.block_4_image4.chapter_id)) {
      concertVideoDesktop4 = `    
        <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button remove-program" _id="${json.data.block_4_image4.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_4_image4.image_horizontal}" alt="">
                </div>
                <div class="a-concert-rectangle thumbnail-info-title">
                    <p class="a-poster-text-white">${json.data.block_4_image4.subtitle}</p>
                </div>
            </a>
        </div>
    </div>`;
    } else {
      concertVideoDesktop4 = `    
        <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button add-favorites" _id="${json.data.block_4_image4.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_4_image4.image_horizontal}" alt="">
                </div>
                <div class="a-concert-rectangle thumbnail-info-title">
                    <p class="a-poster-text-white">${json.data.block_4_image4.subtitle}</p>
                </div>
            </a>
        </div>
    </div>`;
    }

    let concertVideosDesktop = `                       
    <div class="row poster-pad-b">
    <div class="col poster-pad-r poster-section">
        ${concertVideoDesktop1}
    </div>
    <div class="col poster-pad-l">
        ${concertVideoDesktop2}
    </div>
</div>
<div class="row poster-pad-t">
<div class="col poster-pad-r">
    ${concertVideoDesktop3}
</div>
<div class="col poster-pad-l">
    ${concertVideoDesktop4}
</div>
</div>`;
    $(".concertHome-videos-desktop").html(concertVideosDesktop);
    /* End Concert Channel - Home*/

    /* Claro Cinema - Home*/
    let block5Image = [
      json.data.block_5_image1,
      json.data.block_5_image2,
      json.data.block_5_image3,
      json.data.block_5_image4
    ];

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
                    
                          <div class="thumbnail-large">
                              <img src="${block5Image[i].image_horizontal}" alt="">
                          </div>

                    
                  </div>
              </div>
              `;
      } else {
        cinemaHomeVideosMobile += `
              <div class="poster">
                  <div class="poster-body">
                      <div class="showtime-container justify-content-end">
                 
                          <button type="button" class="poster-button remove-program" _id="${block5Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                      </div>
                     
                          <div class="thumbnail-large">
                              <img src="${block5Image[i].image_horizontal}" alt="">
                          </div>
                    
                  </div>
              </div>
              `;
      }
    }

    $(".cinema-home-slider").append(cinemaHomeVideosMobile);
    $(".cinema-home-slider").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      infinite: true,
      dots: true,
      centerMode: false,
      arrows: true,
      prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
      nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',

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
            dots: true
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: true,
            arrows: false
          }
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
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
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
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
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
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }
      ]
    });

    var cinemaVideoDesktop1 = "";
    var cinemaVideoDesktop2 = "";
    var cinemaVideoDesktop3 = "";
    var cinemaVideoDesktop4 = "";
    if (arrayFavoritesId.includes(json.data.block_5_image1.chapter_id)) {
      cinemaVideoDesktop1 = `                                
      <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button remove-program" _id="${json.data.block_5_image1.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
           
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_5_image1.image_horizontal}" alt="">
                </div>
                <div class="a-cinema-rectangle thumbnail-info-title">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${json.data.block_5_image1.subtitle}
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>`;
    } else {
      cinemaVideoDesktop1 = `                                
        <div class="poster">
          <div class="poster-body">
              <div class="showtime-container">
                  <p class="a-programming-text">14:30 - 16:30</p>
                  <button type="button" class="poster-button add-favorites" _id="${json.data.block_5_image1.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
              </div>
             
              <a href="sinopsis.php" class="text-decoration-none">
                  <div class="thumbnail">
                      <img src="${json.data.block_5_image1.image_horizontal}" alt="">
                  </div>
                  <div class="a-cinema-rectangle thumbnail-info-title">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">${json.data.block_5_image1.subtitle}
                          </p>
                      </div>
                  </div>
              </a>
          </div>
  
      </div>`;
    }

    if (arrayFavoritesId.includes(json.data.block_5_image2.chapter_id)) {
      cinemaVideoDesktop2 = `                                
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button remove-program" _id="${json.data.block_5_image2.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
          </div>
         
          <a href="sinopsis.php" class="text-decoration-none">
              <div class="thumbnail">
                  <img src="${json.data.block_5_image2.image_horizontal}" alt="">
              </div>
              <div class="a-cinema-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">${json.data.block_5_image2.subtitle}
                      </p>
                  </div>
              </div>
          </a>
      </div>

  </div>`;
    } else {
      cinemaVideoDesktop2 = `                                
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button add-favorites" _id="${json.data.block_5_image2.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
         
          <a href="sinopsis.php" class="text-decoration-none">
              <div class="thumbnail">
                  <img src="${json.data.block_5_image2.image_horizontal}" alt="">
              </div>
              <div class="a-cinema-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">${json.data.block_5_image2.subtitle}
                      </p>
                  </div>
              </div>
          </a>
      </div>

  </div>`;
    }

    if (arrayFavoritesId.includes(json.data.block_5_image3.chapter_id)) {
      cinemaVideoDesktop3 = `    <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button remove-program" _id="${json.data.block_5_image3.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_45_image3.image_horizontal}" alt="">
                </div>
                <div class="a-cinema-rectangle thumbnail-info-title">
                    <p class="a-poster-text-white">${json.data.block_5_image3.subtitle}</p>
                </div>
            </a>
        </div>
    </div>`;
    } else {
      cinemaVideoDesktop3 = `    <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button add-favorites" _id="${json.data.block_5_image3.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_5_image3.image_horizontal}" alt="">
                </div>
                <div class="a-cinema-rectangle thumbnail-info-title">
                    <p class="a-poster-text-white">${json.data.block_5_image3.subtitle}</p>
                </div>
            </a>
        </div>
    </div>`;
    }

    if (arrayFavoritesId.includes(json.data.block_5_image4.chapter_id)) {
      cinemaVideoDesktop4 = `    
        <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button remove-program" _id="${json.data.block_5_image4.chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_5_image4.image_horizontal}" alt="">
                </div>
                <div class="a-cinema-rectangle thumbnail-info-title">
                    <p class="a-poster-text-white">${json.data.block_4_image4.subtitle}</p>
                </div>
            </a>
        </div>
    </div>`;
    } else {
      cinemaVideoDesktop4 = `    
        <div class="poster">
        <div class="poster-body">
            <div class="showtime-container">
                <p class="a-programming-text">14:30 - 16:30</p>
                <button type="button" class="poster-button add-favorites" _id="${json.data.block_5_image4.chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
            </div>
            <a href="sinopsis.php" class="text-decoration-none">
                <div class="thumbnail">
                    <img src="${json.data.block_5_image4.image_horizontal}" alt="">
                </div>
            </a>
        </div>
    </div>`;
    }

    let cinemaVideosDesktop = `                       
    <div class="row poster-pad-b">
    <div class="col-6 poster-pad-r poster-section">
        ${cinemaVideoDesktop1}
    </div>
    <div class="col-6 poster-pad-l">
        ${cinemaVideoDesktop2}
    </div>
</div>
<div class="row poster-pad-t">
<div class="col-6 poster-pad-r">
    ${cinemaVideoDesktop3}
</div>
<div class="col-6 poster-pad-l">
    ${cinemaVideoDesktop4}
</div>
</div>`;
    $(".cinema-home-videos-container").html(cinemaVideosDesktop);
    /* End Claro Cinema - Home*/

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
}
