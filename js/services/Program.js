import {
    addFavorites
} from "./user/user.js";

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
        responsive: [{
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

function destroySlider(container) {
    container.slick("unslick");
}

function getPrograms(date, country) {
    let dataProgram = {
        function: "getPrograms",
        date,
        country,
    };

    //NORMAL
    let nowSliderCanalClaro = $(".today-claro-slider");
    let nowSliderConcertChannel = $(".today-concert-channel-slider");
    let nowSliderClaroCinema = $(".today-claro-cinema-slider");
    let nowSliderNuestraVision = $("#tv-vision-slider");
    let nowSliderClaroSports = $("#tv-sports-slider");

    //CON CUADROS PARA EDITAR
    let nowSliderCanalClaroprev = $(".today-claro-slider-prev");
    let nowSliderConcertChannelprev = $(".today-concert-channel-slider-prev");
    let nowSliderClaroCinemaprev = $(".today-claro-cinema-slider-prev");
    let nowSliderNuestraVisionprev = $("#tv-vision-slider-prev");
    let nowSliderClaroSportsprev = $("#tv-sports-slider-prev");

    let claroCotentProgramacionGeneral = $(".claro-content");
    let claroContentProgramacinGeneralEdit = $(".claro-content-edit");
    let concertContentProgramacionGeneral = $(".concert-content");
    let cinemaContentProgramacionGeneral = $(".cinema-content");

    $.ajax({
        type: "POST",
        data: dataProgram,
        url: "./adapters/program.php",
        success: function (result) {
            let json = JSON.parse(result);
            /* SLIDER "AHORA EN VIVO CANAL CLARO*/

            let programingCanalClaro = json.data[0].programing[0].programs;
            let programingConcertChannel = json.data[1].programing[0].programs;
            let programingClaroCinema = json.data[2].programing[0].programs;

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

            //DESTROYSLIDER DE EDIT
            destroySlider(nowSliderCanalClaroprev);
            destroySlider(nowSliderConcertChannelprev);
            destroySlider(nowSliderClaroCinemaprev);
            destroySlider(nowSliderNuestraVisionprev);
            destroySlider(nowSliderClaroSportsprev);
            let programCanalClaroEdit = "";
            programingCanalClaro.forEach((program, index) => {
                let programCanalClaro;
                if (index == 0) {
                    if (arrayCanalClaro.includes(program.chapter_id)) {
                        programCanalClaro = `
                <div class="poster">
                  <div class="poster-body">
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                              <img src="${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                        </div>
                  </div>
              </div>
                `;
                    } else {
                        programCanalClaro = `
                <div class="poster" >
                  <div class="poster-body">
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                              <img src="${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
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
                    if (arrayCanalClaro.includes(program.chapter_id)) {
                        programCanalClaro = `
                <div class="poster">
                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button remove-program" _id="${program.chapter_id}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                              <img src="${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                     </div>

                  </div>
              </div>
                `;
                    } else {
                        programCanalClaro = `
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                              <img src="${program.image}" alt="">
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
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
                    //para calculo de caracteres en sinopsis de programación general-edit

                    programCanalClaroEdit += `
          <div class="p-3 border-t border-r border-l border-b position-relative mb-3">
          <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="${program.chapter_id}">
<div class="schedule-container col-12 p-5 mx-auto mt-0">
  <p class="schedule-title  a-text-plus a-text-black-brown-two">
      
  ${program.chapter_title}
     
  </p>
<div class="schedule-item-body">
  <div class="schedule-poster">
     <div class="poster">
          <div class="thumbnail-edit" _id="${program.chapter_id}">
          <img src="${program.image}" alt="">
          </div>
      </div>
  </div>
  <div class="schedule-details">
      <div class="schedule-details-header">
          <div>
              <p class="schedule a-text-black-brown-two">
                  
              ${program.time} hrs.
                  
              </p>
              <p class="rating"> 
                
                      Clasificación: A
                 
              </p>
          </div>
          <div>
          <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">
          <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
              <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
          </svg>
          </button>
          </div>
      </div>
      <div>
      <span class="schedule-description s1" id="synopsis-edi">     ${program.sinopsis}    </span>
      <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
</div>
  </div>
</div>
</div>
</div> `;

                    programCanalClaro = `
            <div class="schedule-container">
            <p class="schedule-title">${program.chapter_title}</p>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="${program.image}" alt="">
                        </div>
                    </div>
                </div>

                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                            <p class="schedule">${program.time} hrs.</p>
                            <p class="rating">Clasificación: A</p>
                        </div>
                        <div>
                        <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="${program.chapter_id}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                            <path class="heart-gray-filled" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                        </svg>
                        </button>
                        </div>
                    </div>
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
                </div>
            </div>

        </div>
            `;
                } else {
                    //VARIABLE PARA EDITAR DESDE PROGRAMACIÓN GENERAL EN BACKOFFICE
                    programCanalClaroEdit += `
          <div class="p-3 border-t border-r border-l border-b position-relative mb-3">
          <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="${program.chapter_id}">
        <div class="schedule-container col-12 p-5 mx-auto mt-0">
        <p class="schedule-title  a-text-plus a-text-black-brown-two"> 
      
  ${program.chapter_title}
     
  </p>
<div class="schedule-item-body">
  <div class="schedule-poster">
     <div class="poster">
          <div class="thumbnail-edit" _id="${program.chapter_id}">
          <img src="${program.image}" alt="" class="w-100">
          </div>
      </div>
  </div>
  <div class="schedule-details">
      <div class="schedule-details-header">
          <div>
              <p class="schedule a-text-black-brown-two">
                  
              ${program.time} hrs.
                  
              </p>
              <p class="rating"> 
                
                      Clasificación: A
                 
              </p>
          </div>
          <div>
          <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">
          <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
              <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
          </svg>
          </button>
          </div>
      </div>
      <div>
      <span class="schedule-description s1" id="synopsis-edi">     ${program.sinopsis}    </span>
    <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
</div>
  </div>
</div>
</div>
</div> `;

                    programCanalClaro = `
            <div class="schedule-container">
            <p class="schedule-title">${program.chapter_title}</p>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                   <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="${program.image}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                            <p class="schedule">${program.time} hrs.</p>
                            <p class="rating">Clasificación: A</p>
                        </div>
                        <div>
                        <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                            <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                        </svg>
                        </button>
                        </div>
                    </div>
                    <p class="schedule-description">
                    ${program.sinopsis}
                    </p>
                </div>
            </div>
        </div>
            `;
                }
                claroCotentProgramacionGeneral.append(programCanalClaro);

                /* END PROGRAMACIÓN GENERAL - CANAL CLARO*/
            });

            //claroContentProgramacinGeneralEdit.html(programCanalClaroEdit);

            //CUADROS DE EDITAR DE LANDING
            //cuadros de editar
            let keyValue = $(".s1").text();

            if (keyValue.length > 339) {
                let text = keyValue.substr(0, 339) + ".";
                $(".s1").text(text);
            } else {
                $(".s1").text(keyValue);
            }
            programingCanalClaro.forEach((program, index) => {
                let programCanalClaro;
                if (index == 0) {
                    if (arrayCanalClaro.includes(program.chapter_id)) {
                        programCanalClaro = `
           <div class="poster">
                  <div class="poster-body">
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">                       
                              <img src="${program.image}" alt="">                             
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                        </div>
                  </div>
              </div>
        
                `;
                    } else {
                        programCanalClaro = `
         
            <div>
                <div class="poster" >
                  <div class="poster-body">
                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                       
                              <img src="${program.image}" alt="">
                             
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
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
                    if (arrayCanalClaro.includes(program.chapter_id)) {
                        programCanalClaro = `
    
                <div class="poster">

                <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button remove-program" _id="${program.chapter_id}"><img src="../images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                         
                              <img src="${program.image}" alt="">
                             
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                     </div>

                  </div>
              </div>
              
                `;
                    } else {
                        programCanalClaro = `
              
                <div class="poster" >

                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="../images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                        
                              <img src="${program.image}" alt="">
                              
                          </div>
                          <div class="a-claro-rectangle thumbnail-info-title">
                              <div class="poster-title-margin">
                                  <p class="a-poster-text-white">${program.chapter_title}</p>
                              </div>
                          </div>
                        </div>

                  </div>
              </div>
             
                `;
                    }
                }
                nowSliderCanalClaroprev.append(programCanalClaro);
            });
            //END DE CUADROS

            let programConcertChannel;
            programingConcertChannel.forEach((program, index) => {
                if (index == 0) {
                    if (arrayConcertChannel.includes(program.chapter_id)) {
                        programConcertChannel = `
              <div class="poster">
              <div class="poster-body">
                  <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                  <div class="thumbnail-body" _id="${program.chapter_id}">
                      <div class="thumbnail">
                          <img src="${program.image}" alt="">
                      </div>
                      <div class="a-concert-rectangle thumbnail-info-title">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-white">${program.chapter_title}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
              `;
                    } else {
                        programConcertChannel = `
            <div class="poster">
            <div class="poster-body">
                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <div class="thumbnail-body" _id="${program.chapter_id}">
                    <div class="thumbnail">
                        <img src="${program.image}" alt="">
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
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
                    if (arrayConcertChannel.includes(program.chapter_id)) {
                        programConcertChannel = `
                <div class="poster" >
                <div class="poster-body">
                    <div class="showtime-container justify-content-between">
                        <p class="a-programming-text">${program.time}</p>
                        <button type="button" class="poster-button remove-program" _id="${program.chapter_id}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                    </div>

                    <div class="thumbnail-body" _id="${program.chapter_id}">
                        <div class="thumbnail">
                            <img src="${program.image}" alt="">
                        </div>
                        <div class="a-concert-rectangle thumbnail-info-title">
                            <div class="poster-title-margin">
                                <p class="a-poster-text-white">${program.chapter_title}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                `;
                    } else {
                        programConcertChannel = `
            <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container justify-content-between">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                </div>

                <div class="thumbnail-body" _id="${program.chapter_id}">
                    <div class="thumbnail">
                        <img src="${program.image}" alt="">
                    </div>
                    <div class="a-concert-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.chapter_title}</p>
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
            <p class="schedule-title">${program.chapter_title}</p>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="${program.image}" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                            <p class="schedule">${program.time} hrs.</p>
                            <p class="rating">Clasificación: A</p>
                        </div>
                        <div>
                            <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="${program.chapter_id}">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
                </div>
            </div>
        </div>
            `;
                } else {
                    programConcertChannel = `
            <div class="schedule-container">
            <p class="schedule-title">${program.chapter_title}</p>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="${program.image}" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                            <p class="schedule">${program.time} hrs.</p>
                            <p class="rating">Clasificación: A</p>
                        </div>
                        <div>
                            <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                <path class="heart-gray" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
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
                              <img src="${program.image}" alt="">
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
                              <img src="${program.image}" alt="">
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
            <div class="poster" >
                <div class="poster-body">
                    <div class="showtime-container justify-content-between">
                        <p class="a-programming-text">${program.time}</p>
                        <button type="button" class="poster-button remove-program" _id="${program.chapter_id}"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>
                    </div>

                    <div class="thumbnail-body" _id="${program.chapter_id}">
                        <div class="thumbnail">
                            <img src="${program.image}" alt="">
                        </div>
                        <div class="a-cinenam-rectangle thumbnail-info-title">
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
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                              <img src="${program.image}" alt="">
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
                }
                nowSliderClaroCinema.append(programClaroCinema);

                /* PROGRAMACIÓN GENERAL - CLARO CINEMA*/
                if (arrayClaroCinema.includes(program.chapter_id)) {
                    programClaroCinema = `
            <div class="schedule-container">
                <p class="schedule-title">${program.chapter_title}</p>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="${program.image}" alt=" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                            <p class="schedule">${program.time} hrs.</p>
                            <p class="rating">Clasificación: A</p>
                        </div>
                        <div>
                        <button title="Eliminar de mi lista" class="button-none programing-button remove-program" type="button" _id="${program.chapter_id}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                            <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                        </svg>
                        </button>
                        </div>
                    </div>
                    <p class="schedule-description">
                    ${program.sinopsis}
                    </p>
                </div>
            </div>

        </div>
            `;
                } else {
                    programClaroCinema = `
          <div class="schedule-container">
          <p class="schedule-title">${program.chapter_title}</p>
          <div class="schedule-item-body">
              <div class="schedule-poster">
                  <div class="poster">
                      <div class="thumbnail-prog" _id="${program.chapter_id}">
                          <img src="${program.image}" alt="" class="w-100">
                      </div>
                  </div>
              </div>

              <div class="schedule-details">
                  <div class="schedule-details-header">
                      <div>
                          <p class="schedule">${program.time} hrs.</p>
                          <p class="rating">Clasificación: A</p>
                      </div>
                      <div>
                          <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                          <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                              <path class="heart-gray" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                          </svg>
                          </button>
                      </div>
                  </div>
                  <p class="schedule-description">
                      ${program.sinopsis}
                  </p>
              </div>
          </div>

      </div>
            `;
                }

                cinemaContentProgramacionGeneral.append(programClaroCinema);
                /* END PROGRAMACIÓN GENERAL - CLARO CINEMA*/
            });
            //CUADROS DE EDICION CLAROCINEMA
            //cuadros para editar

            programingClaroCinema.forEach((program, index) => {
                let programClaroCinema;
                if (index == 0) {
                    if (arrayClaroCinema.includes(program.chapter_id)) {
                        programClaroCinema = `
            
                  
            <div class="poster-live">
           
                  <div class="poster-body">

                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                         
                              <img src="${program.image}" alt="">
                              
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
                         
                              <img src="${program.image}" alt="">
                              
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
           
            <p class="schedule-title mb-0">${program.chapter_title}</p>
            </div>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-prog" _id="${program.chapter_id}">
                            <img src="${program.image}" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                        
                            <p class="schedule">${program.time} hrs.</p>
                           
                            
                            <p class="rating mb-0">Clasificación: A</p>
                            
                        </div>
                        <div>
                            <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="${program.chapter_id}">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                            </svg>
                            </button>
                        </div>
                    </div>
                  
                    <p class="schedule-description">
                        ${program.sinopsis}
                    </p>
                    
                </div>
            </div>

        </div>
                `;
                    } else {
                        programClaroCinema = `
            
                <div class="poster" >
                  <div class="poster-body">
                      <div class="showtime-container justify-content-between">
                          <p class="a-programming-text">${program.time}</p>
                          <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                      </div>

                      <div class="thumbnail-body" _id="${program.chapter_id}">
                          <div class="thumbnail">
                        
                              <img src="${program.image}" alt="">
                              
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
                }
                nowSliderClaroCinemaprev.append(programClaroCinema);

                /* END PROGRAMACIÓN GENERAL - CLARO CINEMA cuadros de editar*/
            });
            //END CUADROS DE EDICION

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


            createTvSlider(nowSliderCanalClaro);
            createTvSlider(nowSliderCanalClaroprev);

            createTvSlider(nowSliderConcertChannel);
            createTvSlider(nowSliderConcertChannelprev);

            createTvSlider(nowSliderClaroCinema);
            createTvSlider(nowSliderClaroCinemaprev);
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

    $.ajax({
        type: "POST",
        data: dataUser,
        url: "./adapters/program.php",
        success: function (result) {
            let json = JSON.parse(result);
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

function getProgramming(date) {

    let data = {
        function: "getProgramming",
        date,
        country: "gmt"
    }
    $.ajax({
        type: "POST",
        data: data,
        cache: false,
        url: "./adapters/program.php",
        beforeSend: function () {
            $("body").append(`
                <div class="loader-container">
                    <img src="./images/general/loader.gif"" class="loader-icon"/>
                </div>
            `);
        },
        success: function (result) {
            let data = JSON.parse(result);
            console.log(data);
            $('.loader-container').remove();
            if (data.code == 200) {

                //Programas de canal claro
                let programmingCanalClaro = data.data[0].programing[0].programs;
                //Programas de concert channel
                let programmingConcertChannel = data.data[1].programing[0].programs;
                //Programas de claro cinema
                let programmingClaroCinema = data.data[2].programing[0].programs;
                let programCanalClaroEdit = "";
                let programCanalClaro = "";
                let programConcertChannel = "";
                let programConcertChannelEdit = "";
                let programClaroCinema = "";
                let programClaroCinemaEdit = "";
                //Iteramos el arreglo de programas de canal claro
                programmingCanalClaro.forEach(program => {

                    programCanalClaro += `
                    <div class="schedule-container">
                    <p class="schedule-title">${program.chapter_title}</p>
                    <div class="schedule-item-body">
                        <div class="schedule-poster">
                            <div class="poster">
                                <div class="thumbnail-prog" _id="${program.chapter_id}">
                                    <img src="${program.image}" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="schedule-details">
                            <div class="schedule-details-header">
                                <div>
                                    <p class="schedule">${program.time} hrs.</p>
                                    <p class="rating">Clasificación: A</p>
                                </div>
                                <div>
                                <button title="Eliminar de mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                    <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                                </svg>
                                </button>
                                </div>
                            </div>
                            <p class="schedule-description">
                                ${program.sinopsis}
                            </p>
                        </div>
                    </div>
    
                </div>
             
                    `;

                    //Truncar el texto
                    let synopsis = program.sinopsis;
                    /*                     if (program.sinopsis) {
                                            if (program.sinopsis.length > 150) {
                                                synopsis = program.sinopsis.substr(0, 150) + "...";
                                            }
                                        } */

                    //Programas para la pantalla de editar programación en backoffice
                    programCanalClaroEdit += `
                    <div class="p-3 border-t border-r border-l border-b position-relative mb-3">
                    <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="${program.chapter_id}">
                    <div class="schedule-container col-12 p-5 mx-auto mt-0">
                        <p class="schedule-title  a-text-plus a-text-black-brown-two">
                            ${program.chapter_title}
                        </p>
                        <div class="schedule-item-body">
                            <div class="schedule-poster">
                                <div class="poster">
                                    <div class="thumbnail-edit" _id="${program.chapter_id}">
                                        <img src="${program.image}" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-details">
                                <div class="schedule-details-header">
                                    <div>
                                        <p class="schedule a-text-black-brown-two">
                                            ${program.time} hrs.
                                        </p>
                                        <p class="rating">
                                            Clasificación: A
                                        </p>
                                    </div>
                                    <div>
                                        <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                                <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <span class="schedule-description s1" id="synopsis-edi">${synopsis}</span>
                                    <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                    `;
                });
                programmingConcertChannel.forEach(program => {
                    programConcertChannel += `
                    <div class="schedule-container">
                    <p class="schedule-title">${program.chapter_title}</p>
                    <div class="schedule-item-body">
                        <div class="schedule-poster">
                            <div class="poster">
                                <div class="thumbnail-prog" _id="${program.chapter_id}">
                                    <img src="${program.image}" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="schedule-details">
                            <div class="schedule-details-header">
                                <div>
                                    <p class="schedule">${program.time} hrs.</p>
                                    <p class="rating">Clasificación: A</p>
                                </div>
                                <div>
                                <button title="Eliminar de mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                    <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                                </svg>
                                </button>
                                </div>
                            </div>
                            <p class="schedule-description">
                                ${program.sinopsis}
                            </p>
                        </div>
                    </div>
    
                </div>
             
                    `;

                    //Truncar el texto
                    let synopsis = program.sinopsis;
                    /*                     if (program.sinopsis) {
                                            if (program.sinopsis.length > 150) {
                                                synopsis = program.sinopsis.substr(0, 150) + "...";
                                            }
                                        } */
                    //Programas para la pantalla de editar programación en backoffice
                    programConcertChannelEdit += `
                    <div class="p-3 border-t border-r border-l border-b position-relative mb-3">
                    <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="${program.chapter_id}">
                    <div class="schedule-container col-12 p-5 mx-auto mt-0">
                        <p class="schedule-title  a-text-plus a-text-black-brown-two">
                            ${program.chapter_title}
                        </p>
                        <div class="schedule-item-body">
                            <div class="schedule-poster">
                                <div class="poster">
                                    <div class="thumbnail-edit" _id="${program.chapter_id}">
                                        <img src="${program.image}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-details">
                                <div class="schedule-details-header">
                                    <div>
                                        <p class="schedule a-text-black-brown-two">
                                            ${program.time} hrs.
                                        </p>
                                        <p class="rating">
                                            Clasificación: A
                                        </p>
                                    </div>
                                    <div>
                                        <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                                <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <span class="schedule-description s1" id="synopsis-edi">${synopsis}</span>
                                    <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                    `;
                });
                programmingClaroCinema.forEach(program => {

                    programClaroCinema += `
                    <div class="schedule-container">
                    <p class="schedule-title">${program.chapter_title}</p>
                    <div class="schedule-item-body">
                        <div class="schedule-poster">
                            <div class="poster">
                                <div class="thumbnail-prog" _id="${program.chapter_id}">
                                    <img src="${program.image}" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="schedule-details">
                            <div class="schedule-details-header">
                                <div>
                                    <p class="schedule">${program.time} hrs.</p>
                                    <p class="rating">Clasificación: A</p>
                                </div>
                                <div>
                                <button title="Eliminar de mi lista" class="button-none add-favorites programing-button" type="button" _id="${program.chapter_id}">
                                <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                    <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>
                                </svg>
                                </button>
                                </div>
                            </div>
                            <p class="schedule-description">
                                ${program.sinopsis}
                            </p>
                        </div>
                    </div>
    
                </div>
             
                    `;

                    //Truncar el texto
                    let synopsis = program.sinopsis;
                    /*                     if (program.sinopsis) {
                                            if (program.sinopsis.length > 150) {
                                                synopsis = program.sinopsis.substr(0, 150) + "...";
                                            }
                                        } */
                    //Programas para la pantalla de editar programación en backoffice
                    programClaroCinemaEdit += `
                    <div class="p-3 border-t border-r border-l border-b position-relative mb-3">
                    <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="${program.chapter_id}">
                    <div class="schedule-container col-12 p-5 mx-auto mt-0">
                        <p class="schedule-title  a-text-plus a-text-black-brown-two">
                            ${program.chapter_title}
                        </p>
                        <div class="schedule-item-body">
                            <div class="schedule-poster">
                                <div class="poster">
                                    <div class="thumbnail-edit" _id="${program.chapter_id}">
                                        <img src="${program.image}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-details">
                                <div class="schedule-details-header">
                                    <div>
                                        <p class="schedule a-text-black-brown-two">
                                            ${program.time} hrs.
                                        </p>
                                        <p class="rating">
                                            Clasificación: A
                                        </p>
                                    </div>
                                    <div>
                                        <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                                <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <span class="schedule-description s1" id="synopsis-edi">${synopsis}</span>
                                    <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                    `;
                });

                //Insertar programas para edición en backoffice
                $('.claro-content-edit').html(programCanalClaroEdit);
                //Insertar programas en página
                $('.claro-content').html(programCanalClaro);
                //Insertar programas en página
                $('.concert-content').html(programConcertChannel);
                $('.concert-content-edit').html(programConcertChannelEdit);
                $('.cinema-content').html(programClaroCinema);
                $('.cinema-content-edit').html(programClaroCinemaEdit);
            }
        },
    })
}

export {
    getPrograms,
    createClickThumbnails,
    getProgramming
};