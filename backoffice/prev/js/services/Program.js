import { addFavorites } from "./user/user.js";

function createClickThumbnails() {
  $(".thumbnail-body, .poster-live, .thumbnail-prog").click(function () {
    let thumbnailId = $(this).attr("_id");
    let posterLiveId = $(this).attr("_id");
    let listItemButton = $(this).find(".button-none").attr("_id");

    let thumbnailProgId = $(this).attr("_id");

    if (thumbnailId) {
      showSynopsis(thumbnailId);
    } else if (posterLiveId) {
      showSynopsis(posterLiveId);
    } else if (listItemButton) {
      showSynopsis(listItemButton);
    } else {
      showSynopsis(thumbnailProgId);
    }
  });
}

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
          centerMode: false,
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

function destroySlider(container) {
  container.slick("unslick");
}

function getPrograms(date, country) {
  let dataProgram = {
    function: "getPrograms",
    date,
    country,
  };

  let nowSliderCanalClaro = $(".today-claro-slider");
  let nowSliderConcertChannel = $(".today-concert-channel-slider");
  let nowSliderClaroCinema = $(".today-claro-cinema-slider");
  let nowSliderNuestraVision = $("#tv-vision-slider");
  let nowSliderClaroSports = $("#tv-sports-slider");
  let claroCotentProgramacionGeneral = $(".claro-content");
  let concertContentProgramacionGeneral = $(".concert-content");
  let cinemaContentProgramacionGeneral = $(".cinema-content");

  $.ajax({
    type: "POST",
    data: dataProgram,
    url: "./adapters/program.php",
    success: function (result) {
      let json = JSON.parse(result);
      console.log(json);
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
          let favoriteId = favoritesClaroCanal[i].chapter_id;
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
          let favoriteId = favoritesConcertChannel[i].chapter_id;
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
          let favoriteId = favoritesClaroCinema[i].chapter_id;
          arrayClaroCinema.push(favoriteId);
        }
      }

      destroySlider(nowSliderCanalClaro);
      destroySlider(nowSliderConcertChannel);
      destroySlider(nowSliderClaroCinema);
      destroySlider(nowSliderNuestraVision);
      destroySlider(nowSliderClaroSports);

      programingCanalClaro.forEach((program, index) => {
        let programCanalClaro;
        if (index == 0) {
          if (arrayCanalClaro.includes(program.chapter_id)) {
            programCanalClaro = `
         <div class=" p-3 border-top border-left border-right border-bottom position-relative">          
           <div class="poster">
           <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>
                  <div class="poster-body">
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">                       
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">                             
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                        </div>
                  </div>
              </div>
        </div>
                `;
          } else {
            programCanalClaro = `
         
            <div>
              <div class=" p-3 border-top border-left border-right border-bottom position-relative">        
                <div class="poster" >
                <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>
                  <div class="poster-body">
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                       
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                             
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                    </div>
                  </div>
              </div>
         </div>
                `;
          }
        } else {
          if (arrayCanalClaro.includes(program.chapter_id)) {
            programCanalClaro = `
            <div class=" p-3 border-top border-left border-right border-bottom position-relative">   
                <div class="poster">
                <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>
                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button remove-program" _id="${program.chapter_id}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                         
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                             
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                     </div>

                  </div>
              </div>
              </div>
                `;
          } else {
            programCanalClaro = `
            <div class=" p-3 border-top border-left border-right border-bottom position-relative">   
                <div class="poster" >
                <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>

                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                        
                              <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                              
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                        </div>

                  </div>
              </div>
              </div>
                `;
          }
        }
        nowSliderCanalClaro.append(programCanalClaro);

        /* PROGRAMACIÓN GENERAL*/
        /* CANAL CLARO*/
        if (arrayCanalClaro.includes(program.chapter_id)) {
          programCanalClaro = `
            <div class="schedule-container">
            <div class="col-9 p-3 border-top border-left border-right border-bottom position-relative">
            <img src="../images/pencil.svg" alt="" class="pencil">
            <p class="schedule-title mb-0">${program.chapter_title}</p>
            </div>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                        </div>
                    </div>
                </div>
            

                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                        <div class="p-2 border-top border-left border-right border-bottom position-relative">
                        <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="schedule">${program.time} hrs.</p>
                            </div>
                            <div class="p-2 border-top border-left border-right border-bottom position-relative">
                            <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="rating mb-0">Clasificación: A</p>
                            </div>
                        </div>
                        <div>
                        <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="${program.chapter_id}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                            <path class="heart-gray-filled" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                        </svg>
                        </button>
                        </div>
                    </div>
                    <div class="p-3 border-top border-left border-right border-bottom position-relative">
                    <img src="../images/pencil.svg" alt="" class="pencil">
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
                    </div>
                </div>
            </div>

        </div>
            `;
        } else {
          programCanalClaro = `
            <div class="schedule-container">
            <div class=" col-9 p-3 border-top border-left border-right border-bottom position-relative">
            <img src="../images/pencil.svg" alt="" class="pencil">
            <p class="schedule-title mb-0">${program.chapter_title}</p>
            </div>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                   <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="./images/home/carrusel-ahora-en-vivo/${program.image}" alt="">
                        </div>
                    </div>
                </div>
            

                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                        <div class="p-2 border-top border-left border-right border-bottom position-relative">
                        <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="schedule">${program.time} hrs.</p>
                            </div>
                            <div class="p-2 border-top border-left border-right border-bottom position-relative">
                            <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="rating mb-0">Clasificación: A</p>
                            </div>
                        </div>
                        <div>
                        <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                            <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                        </svg>
                        </button>
                        </div>
                    </div>
                    <div class="p-3 border-top border-left border-right border-bottom position-relative">
                    <img src="../images/pencil.svg" alt="" class="pencil">
                    <p class="schedule-description">
                    ${program.sinopsis}
                    </p>
                    </div>
                </div>
            </div>
        </div>
            `;
        }

        claroCotentProgramacionGeneral.append(programCanalClaro);

        /* END PROGRAMACIÓN GENERAL - CANAL CLARO*/
      });

      let programConcertChannel;
      programingConcertChannel.forEach((program, index) => {
        if (index == 0) {
          if (arrayConcertChannel.includes(program.chapter_id)) {
            programConcertChannel = `
            <div class=" p-3 border-top border-left border-right border-bottom position-relative">          

              <div class="poster">
              <div class="poster-body">
              <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>

                  <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                  <div class="thumbnail-body" _id="${program.chapter_id}">
                      <div class="thumbnail">
                     
                          <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                          
                      </div>
                      <div class="a-concert-rectangle thumbnail-info-title">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-white">${program.chapter_title}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
              `;
          } else {
            programConcertChannel = `
            <div class=" p-3 border-top border-left border-right border-bottom position-relative">          

            <div class="poster">
            <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>

            <div class="poster-body">

                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <div class="thumbnail-body" _id="${program.chapter_id}">
                    <div class="thumbnail">
                   
                        <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                        
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.chapter_title}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            `;
          }
        } else {
          if (arrayConcertChannel.includes(program.chapter_id)) {
            programConcertChannel = `
            <div class=" p-3 border-top border-left border-right border-bottom position-relative">          

                <div class="poster" >
                <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>

                <div class="poster-body">
                    <div class="showtime-container justify-content-between">
                        <p class="a-programming-text">${program.time}</p>
                        <button type="button" class="poster-button remove-program" _id="${program.chapter_id}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                    </div>

                    <div class="thumbnail-body" _id="${program.chapter_id}">
                        <div class="thumbnail">
                      
                            <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                            
                        </div>
                        <div class="a-concert-rectangle thumbnail-info-title">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">${program.chapter_title}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                `;
          } else {
            programConcertChannel = `
            <div class=" p-3 border-top border-left border-right border-bottom position-relative">          

            <div class="poster" >
            <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>

            <div class="poster-body">
                <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                </div>

                <div class="thumbnail-body" _id="${program.chapter_id}">
                    <div class="thumbnail">
                 
                        <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                        
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.chapter_title}</p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        </div>
            `;
          }
        }
        nowSliderConcertChannel.append(programConcertChannel);

        /* PROGRAMACIÓN GENERAL - CONCERT CHANNEL*/
        if (arrayConcertChannel.includes(program.chapter_id)) {
          programConcertChannel = `
            <div class="schedule-container">
            <div class="col-9 p-3 border-top border-left border-right border-bottom position-relative">
            <img src="../images/pencil.svg" alt="" class="pencil">
            <p class="schedule-title mb-0">${program.chapter_title}</p>
            </div>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                        </div>
                    </div>
                </div>
           
                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                        <div class="p-2 border-top border-left border-right border-bottom position-relative">
                        <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="schedule">${program.time} hrs.</p>
                            </div>
                            <div class="p-2 border-top border-left border-right border-bottom position-relative">
                            <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="rating mb-0">Clasificación: A</p>
                            </div>
                        </div>
                        <div>
                            <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="${program.chapter_id}">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-3 border-top border-left border-right border-bottom position-relative">
                    <img src="../images/pencil.svg" alt="" class="pencil">
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
                    </div>
                </div>
            </div>

        </div>
            `;
        } else {
          programConcertChannel = `
            <div class="schedule-container">
            <div class="col-9 p-3 border-top border-left border-right border-bottom position-relative">
            <img src="../images/pencil.svg" alt="" class="pencil">
            <p class="schedule-title mb-0">${program.chapter_title}</p>
            </div>
            <div class="schedule-item-body">

            <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="./images/concert-channel/carrousel/${program.image}" alt="">
                        </div>
                    </div>
                </div>
                

                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                        <div class="p-2 border-top border-left border-right border-bottom position-relative">
                        <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="schedule">${program.time} hrs.</p>
                            </div>
                            <div class="p-2 border-top border-left border-right border-bottom position-relative">
                            <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="rating mb-0">Clasificación: A</p>
                            </div>
                        </div>
                        <div>
                            <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                <path class="heart-gray" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-3 border-top border-left border-right border-bottom position-relative">
                    <img src="../images/pencil.svg" alt="" class="pencil">
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
                    </div>
                </div>
            </div>

        </div>
            `;
        }

        concertContentProgramacionGeneral.append(programConcertChannel);

        /* END PROGRAMACIÓN GENERAL - CONCERT CHANNEL*/
      });

      let programClaroCinema;
      programingClaroCinema.forEach((program, index) => {
        if (index == 0) {
          if (arrayClaroCinema.includes(program.chapter_id)) {
            programClaroCinema = `
                <div class="poster-live">
                  <div class="poster-body">

                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                         
                              <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                              
                          </div>
                          <div class="a-cinema-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                        </div>

                  </div>
              </div>
                `;
          } else {
            programClaroCinema = `
                <div class="poster-live">
                  <div class="poster-body">

                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                         
                              <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                              
                          </div>
                          <div class="a-cinema-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                        </div>

                  </div>
              </div>
                `;
          }
        } else {
          if (arrayClaroCinema.includes(program.chapter_id)) {
            programClaroCinema = `
            <div class="schedule-container">
            <div class="col-9 p-3 border-top border-left border-right border-bottom position-relative">
            <img src="../images/pencil.svg" alt="" class="pencil">
            <p class="schedule-title mb-0">${program.chapter_title}</p>
            </div>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                        <div class="p-2 border-top border-left border-right border-bottom position-relative">
                        <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="schedule">${program.time} hrs.</p>
                            </div>
                            <div class="p-2 border-top border-left border-right border-bottom position-relative">
                            <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="rating mb-0">Clasificación: A</p>
                            </div>
                        </div>
                        <div>
                            <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="${program.chapter_id}">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-3 border-top border-left border-right border-bottom position-relative">
                    <img src="../images/pencil.svg" alt="" class="pencil">
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
                    </div>
                </div>
            </div>

        </div>
                `;
          } else {
            programClaroCinema = `
            <div class=" p-3 border-top border-left border-right border-bottom position-relative">          

                <div class="poster" >
                <button class="d-flex align-items-center justify-content-center pencil-black a-text-white-monblack pl-4"> Editar <img src="../images/pencil.svg" alt="" class="ml-2"style="width:26px"></button>

                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                        
                              <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                              
                          </div>
                          <div class="a-cinema-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                    </div>
                  </div>
              </div>
              </div>
                `;
          }
        }
        nowSliderClaroCinema.append(programClaroCinema);

        /* PROGRAMACIÓN GENERAL - CLARO CINEMA*/
        if (arrayClaroCinema.includes(program.chapter_id)) {
          programClaroCinema = `
            <div class="schedule-container">
            <div class="col-9 p-3 border-top border-left border-right border-bottom position-relative">
            <img src="../images/pencil.svg" alt="" class="pencil">
                <p class="schedule-title mb-0">${program.chapter_title}</p>
                </div>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                        </div>
                    </div>
                </div>
                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                        <div class="p-2 border-top border-left border-right border-bottom position-relative">
                        <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="schedule">${program.time} hrs.</p>
                            </div>
                            <div class="p-2 border-top border-left border-right border-bottom position-relative">
                            <img src="../images/pencil.svg" alt="" class="pencil">
                            <p class="rating mb-0">Clasificación: A</p>
                            </div>
                        </div>
                        <div>
                        <button title="Eliminar de mi lista" class="button-none programing-button remove-program" type="button" _id="${program.chapter_id}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                            <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                        </svg>
                        </button>
                        </div>
                    </div>
                    <div class="p-3 border-top border-left border-right border-bottom position-relative">
                    <img src="../images/pencil.svg" alt="" class="pencil">
                    <p class="schedule-description">
                    ${program.sinopsis}
                    </p>
                    </div>
                </div>
            </div>

        </div>
            `;
        } else {
          programClaroCinema = `
          <div class="schedule-container">
          <div class="col-9 p-3 border-top border-left border-right border-bottom position-relative">
          <img src="../images/pencil.svg" alt="" class="pencil">
          <p class="schedule-title mb-0">${program.chapter_title}</p>
          </div>
          <div class="schedule-item-body">
              <div class="schedule-poster">
                  <div class="poster">
                      <div class="thumbnail-prog" _id="${program.chapter_id}">
                          <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                      </div>
                  </div>
              </div>
            
              <div class="schedule-details">
                  <div class="schedule-details-header">
                      <div>
                      <div class="p-2 border-top border-left border-right border-bottom position-relative">
                      <img src="../images/pencil.svg" alt="" class="pencil">
                          <p class="schedule">${program.time} hrs.</p>
                          </div>
                          <div class="p-2 border-top border-left border-right border-bottom position-relative">
                          <img src="../images/pencil.svg" alt="" class="pencil">
                          <p class="rating mb-0">Clasificación: A</p>
                          </div>
                      </div>
                      <div>
                          <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                          <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                              <path class="heart-gray" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                          </svg>
                          </button>
                      </div>
                  </div>
                  <div class="p-3 border-top border-left border-right border-bottom position-relative">
                  <img src="../images/pencil.svg" alt="" class="pencil">
                  <p class="schedule-description">
                      ${program.sinopsis}
                  </p>
                  </div>
              </div>
          </div>

      </div>
            `;
        }

        cinemaContentProgramacionGeneral.append(programClaroCinema);
        /* END PROGRAMACIÓN GENERAL - CLARO CINEMA*/
      });

      let programNuestraVision = `
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/01-aprende.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">APRENDE</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container justify-content-between">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/02-dress-code.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">DRESS CODE</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container justify-content-between">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/03-barra-infantil.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">BARRA INFANTIL</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container justify-content-between">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/04-pobre-nino.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">POBRE NIÑO RICO</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/05-caja-pandora.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">LA CAJA DE PANDORA: ALEX AGUINAGA</p>
                  </div>
              </div>
          </a>
      </div>

  </div>
  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/06-el-torito.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">EL TORITO</p>
                  </div>
              </div>
          </a>
      </div>

  </div>
  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/07-la-estatua.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">LA ESTATUA DE CARNE</p>
                  </div>
              </div>
          </a>
      </div>

  </div>
  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/08-los-leones-del-ring.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">LOS LEONES DEL RING</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/09-vidas-extraordinarias.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">VIDAS EXTRAORDINARIAS</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/10-titanes-del-ring.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">TITANES DEL RING</p>
                  </div>
              </div>
          </a>
      </div>

  </div>
  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/12-deportes-en-claro.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">DEPORTES EN CLARO</p>
                  </div>
              </div>
          </a>
      </div>

  </div>
  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
                  <img src="./images/nuestra-vision/carousel/13-santo.jpg" alt="">
              </div>
              <div class="a-vision-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-white">SANTO CONTRA LA MAFÍA DEL VICIO</p>
                  </div>
              </div>
          </a>
      </div>

  </div>
      `;
      /*programingNuestraVision.forEach((program, index) => {
        if (index == 0) {
          programNuestraVision = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <a href="sinopsis.php" class="text-decoration-none">
                    <div class="thumbnail">
                        <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-vision-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.chapter_title}</p>
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
                    <button type="button" class="poster-button" _id="${program.chapter_id}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>

                <a href="sinopsis.php" class="text-decoration-none">
                    <div class="thumbnail">
                        <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-vision-rectanglethumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.chapter_title}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
          `;
        }
        nowSliderNuestraVision.append(programNuestraVision);
      });*/

      /*let programClaroSports = `
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">

              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>

  </div>
      `;*/
      createTvSlider(nowSliderCanalClaro);
      createTvSlider(nowSliderConcertChannel);
      createTvSlider(nowSliderClaroCinema);
      //createTvSlider(nowSliderNuestraVision);
      addFavorites();
      /* END SLIDER "AHORA EN VIVO CANAL CLARO*/

      /*  PROGRAMACIÓN GENERAL */

      /* END PROGRMACIÓN GENERAL*/
      createClickThumbnails();
    },
  });
  createClickThumbnails();
}

function showSynopsis(id) {
  let dataUser = {
    function: "showSynopsis",
    chapter_id: id,
  };
  console.log(dataUser.chapter_id);
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "./adapters/program.php",
    success: function (result) {
      let json = JSON.parse(result);
      console.log(json);
      if (json.code == 200) {
        localStorage.setItem("synopsis", JSON.stringify(json.data));
        location.href = "./sinopsis.php";
      } else {
        let noSynopsis = `
            <div class="no-synopsis-container text-center">
                <img src="./images/sinopsis/helmet.png" alt="" class="helmet-image">
                <h3 class="no-synopsis-title a-text-white-monblack">SINÓPSIS EN <span>CONSTRUCCIÓN</span></h3>
                <p class="no-synopsis-text a-text-white-semibold">La sinópsis de este programa no está disponible aún</p>
            </div>
          `;
        $(".synopsis-content").addClass("col-12").html(noSynopsis);
      }
    },
  });
}

export { getPrograms, createClickThumbnails };
