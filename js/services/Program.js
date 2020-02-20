import { addFavorites } from "./user/user.js";

function createTvSlider(container) {
  container.slick({
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
          centerMode: true,
          infinite: true,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: false
        }
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
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
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
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      }
    ]
  });
}

function destroySlider(container) {
  container.slick("unslick");
}

function getPrograms(date, time) {
  let dataProgram = {
    function: "getPrograms",
    date,
    time
  };

  let nowSliderCanalClaro = $(".today-claro-slider");
  let nowSliderConcertChannel = $(".today-concert-channel-slider");
  let nowSliderClaroCinema = $(".today-claro-cinema-slider");
  let nowSliderNuestraVision = $("#tv-vision-slider");
  let claroCotentProgramacionGeneral = $(".claro-content");
  let concertContentProgramacionGeneral = $(".concert-content");
  let cinemaContentProgramacionGeneral = $(".cinema-content");

  $.ajax({
    type: "POST",
    data: dataProgram,
    url: "../../adapters/program.php",
    success: function(result) {
      let json = JSON.parse(result);

      /* SLIDER "AHORA EN VIVO CANAL CLARO*/
      let programingCanalClaro = json.data[0].programing[0].programs;
      let programingConcertChannel = json.data[1].programing[0].programs;
      let programingClaroCinema = json.data[2].programing[0].programs;
      let programingNuestraVision = json.data[3].programing[0].programs;

      let arrayCanalClaro = [];
      let favoritesClaroCanal = JSON.parse(
        localStorage.getItem("favoritesCanalClaro")
      );
      if (localStorage.getItem("favoritesCanalClaro")) {
        let favoritesCanalClaroLength = favoritesClaroCanal.length;
        for (let i = 0; i < favoritesCanalClaroLength; i++) {
          let favoriteId = favoritesClaroCanal[i].id;
          arrayCanalClaro.push(favoriteId);
        }
      }

      let arrayConcertChannel = [];
      let favoritesConcertChannel = JSON.parse(
        localStorage.getItem("favoritesConcertChannel")
      );
      if (localStorage.getItem("favoritesConcertChannel")) {
        let favoritesConcertChannelLength = favoritesConcertChannel.length;
        for (let i = 0; i < favoritesConcertChannelLength; i++) {
          let favoriteId = favoritesConcertChannel[i].id;
          arrayConcertChannel.push(favoriteId);
        }
      }

      let arrayClaroCinema = [];
      let favoritesClaroCinema = JSON.parse(
        localStorage.getItem("favoritesClaroCinema")
      );
      if (localStorage.getItem("favoritesClaroCinema")) {
        let favoritesClaroCinemaLength = favoritesClaroCinema.length;
        for (let i = 0; i < favoritesClaroCinemaLength; i++) {
          let favoriteId = favoritesClaroCinema[i].id;
          arrayClaroCinema.push(favoriteId);
        }
      }

      destroySlider(nowSliderCanalClaro);
      destroySlider(nowSliderConcertChannel);
      destroySlider(nowSliderClaroCinema);
      destroySlider(nowSliderNuestraVision);

      programingCanalClaro.forEach((program, index) => {
        let programCanalClaro;
        if (index == 0) {
          if (arrayCanalClaro.includes(program.id_program)) {
            programCanalClaro = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button remove-program" _id="${program.id_program}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                      </div>
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
                `;
          } else {
            programCanalClaro = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.id_program}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
                `;
          }
        } else {
          if (arrayCanalClaro.includes(program.id_program)) {
            programCanalClaro = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button remove-program" _id="${program.id_program}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                      </div>
                      
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
      
                  </div>
              </div>
                `;
          } else {
            programCanalClaro = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.id_program}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>
                      
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
      
                  </div>
              </div>
                `;
          }
        }
        nowSliderCanalClaro.append(programCanalClaro);

        /* PROGRAMACIÓN GENERAL*/
        /* CANAL CLARO*/
        programCanalClaro = `
        <div class="schedule-container">
        <p class="schedule-title">${program.title}</p>
        <div class="schedule-item-body">
            <div class="schedule-poster">
                <div class="poster">
                    <div class="thumbnail-prog">
                        <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                    </div>
                </div>
            </div>

            <div class="schedule-details">
                <div class="schedule-details-header">
                    <div>
                        <p class="schedule">${program.time}</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button class="schedule-add" type="button" _id="${program.id_program}>
                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                        </button>
                    </div>
                </div>
                <p class="schedule-description">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>

    </div>
        `;
        claroCotentProgramacionGeneral.append(programCanalClaro);

        /* END PROGRAMACIÓN GENERAL - CANAL CLARO*/
      });

      let programConcertChannel;
      programingConcertChannel.forEach((program, index) => {
        if (index == 0) {
          if (arrayConcertChannel.includes(program.id_program)) {
            programConcertChannel = `
              <div class="poster" >
              <div class="poster-body">
                  <div class="showtime-container">
                      <p class="a-programming-text">${program.time}</p>
                      <button type="button" class="poster-button remove-program" _id="${program.id_program}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                  </div>
                  <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                  <a href="sinopsis.php">
                      <div class="thumbnail">
                          <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                      </div>
                      <div class="a-concert-rectangle thumbnail-info-title">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-white">${program.title}</p>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
              `;
          } else {
            programConcertChannel = `
            <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button add-favorites" _id="${program.id_program}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                </div>
                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
            `;
          }
        } else {
          if (arrayConcertChannel.includes(program.id_program)) {
            programConcertChannel = `
                <div class="poster" >
                <div class="poster-body">
                    <div class="showtime-container">
                        <p class="a-programming-text">${program.time}</p>
                        <button type="button" class="poster-button remove-program" _id="${program.id_program}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                    </div>
                
                    <a href="sinopsis.php">
                        <div class="thumbnail">
                            <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                        </div>
                        <div class="a-concert-rectangle thumbnail-info-title">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">${program.title}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
                `;
          } else {
            programConcertChannel = `
            <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button add-favorites" _id="${program.id_program}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                </div>
                
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
            `;
          }
        }
        nowSliderConcertChannel.append(programConcertChannel);

        /* PROGRAMACIÓN GENERAL - CONCERT CHANNEL*/
        programConcertChannel = `
        <div class="schedule-container">
        <p class="schedule-title">${program.title}</p>
        <div class="schedule-item-body">
            <div class="schedule-poster">
                <div class="poster">
                    <div class="thumbnail-prog">
                        <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                    </div>
                </div>
            </div>

            <div class="schedule-details">
                <div class="schedule-details-header">
                    <div>
                        <p class="schedule">${program.time}</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button class="schedule-add" type="button" _id="${program.id_program}>
                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                        </button>
                    </div>
                </div>
                <p class="schedule-description">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>

    </div>
        `;
        concertContentProgramacionGeneral.append(programConcertChannel);

        /* END PROGRAMACIÓN GENERAL - CONCERT CHANNEL*/
      });

      let programClaroCinema;
      programingClaroCinema.forEach((program, index) => {
        if (index == 0) {
          if (arrayClaroCinema.includes(program.id_program)) {
            programClaroCinema = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button remove-program" _id="${program.id_program}"><img src="./images/posters/heart-white-icon.svg" alt="" class="poster-add"></button>
                      </div>
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                          </div>
                          <div class="a-cinema-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
      
                  </div>
              </div>
                `;
          } else {
            programClaroCinema = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.id_program}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                          </div>
                          <div class="a-cinema-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
      
                  </div>
              </div>
                `;
          }
        } else {
          if (arrayClaroCinema.includes(program.id_program)) {
            programClaroCinema = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button remove-program" _id="${program.id_program}"><img src="./images/posters/heart-white-icon.svg" alt="" class="poster-add"></button>
                      </div>
                      
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                          </div>
                          <div class="a-cinema-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
      
                  </div>
              </div>
                `;
          } else {
            programClaroCinema = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.id_program}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>
                      
                      <a href="sinopsis.php">
                          <div class="thumbnail">
                              <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                          </div>
                          <div class="a-cinema-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.title}</p>
                              </div>
                          </div>
                      </a>
      
                  </div>
              </div>
                `;
          }
        }
        nowSliderClaroCinema.append(programClaroCinema);

        /* PROGRAMACIÓN GENERAL - CLARO CINEMA*/
        programClaroCinema = `
        <div class="schedule-container">
        <p class="schedule-title">${program.title}</p>
        <div class="schedule-item-body">
            <div class="schedule-poster">
                <div class="poster">
                    <div class="thumbnail-prog">
                        <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                    </div>
                </div>
            </div>

            <div class="schedule-details">
                <div class="schedule-details-header">
                    <div>
                        <p class="schedule">${program.time}</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button class="schedule-add" type="button" _id="${program.id_program}>
                            <p class="schedule-add-text">añadir a mi lista</p> <img src="./images/programacion/plus.svg" class="schedule-add-icon" />
                        </button>
                    </div>
                </div>
                <p class="schedule-description">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>

    </div>
        `;

        cinemaContentProgramacionGeneral.append(programClaroCinema);
        /* END PROGRAMACIÓN GENERAL - CLARO CINEMA*/
      });

      let programNuestraVision;
      programingNuestraVision.forEach((program, index) => {
        if (index == 0) {
          programNuestraVision = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button add-favorites" _id="${program.id_program}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-vision-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
          `;
        } else {
          programNuestraVision = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button" _id="${program.id_program}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                
                <a href="sinopsis.php">
                    <div class="thumbnail">
                        <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-vision-rectanglethumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.title}</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
          `;
        }
        nowSliderNuestraVision.append(programNuestraVision);
      });

      createTvSlider(nowSliderCanalClaro);
      createTvSlider(nowSliderConcertChannel);
      createTvSlider(nowSliderClaroCinema);
      createTvSlider(nowSliderNuestraVision);
      addFavorites();
      /* END SLIDER "AHORA EN VIVO CANAL CLARO*/

      /*  PROGRAMACIÓN GENERAL */

      /* END PROGRMACIÓN GENERAL*/
    }
  });
}

export { getPrograms };
