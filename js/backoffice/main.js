$(document).ready(function () {
  let date = new Date();
  let day = date.getDate();
  let month = date.getMonth() + 1;
  let year = date.getFullYear();
  let hour = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();

  //Si el número de día es menor a 10, le agregamos un cero para tener el formato DD
  if (day < 10) {
    day = "0" + date.getDate();
  }
  //Si el número del mes es menor a 10, le agregamos un cero para tener el formato MM
  if (month < 10) {
    month = "0" + (date.getMonth() + 1);
  }

  //Fecha actual en formato YYYY-MM-DD
  let currentDate = `${year}-${month}-${day}`;
  //Hora actual en HH:MM
  let currentTime = `${hour}:${minutes}`;
  //Traer programas del día actual en GTM
  let data = {
    date: currentDate,
    function: "getProgramsGMT",
  };

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
  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/program.php",
    success: function (result) {
      createClickThumbnails();
      let json = JSON.parse(result);
      console.log(json);
      let sliderCanalClarLandingedi = $(".today-claro-slider-edi");
      let sliderCanalClarLandingPrev = $(".today-claro-slider-prev");
      let sliderConcertChannelLanding = $(".today-concert-slider-edit");
      let sliderConcertChannelLandingPrev = $(
        ".today-concert-channel-slider-prev"
      );
      let sliderClaroCinemaLandingPrev = $(".today-claro-cinema-slider-prev");
      //Contenedor para insertar todos los programas
      let claroCotentProgramacionGeneralEdit = $(".claro-content-edit");
      //Programación de los diferentes landings
      let programingCanalClaro = json.data[0].programing[0].programs;
      let programingConcertChannel = json.data[1].programing[0].programs;
      let programingClaroCinema = json.data[2].programing[0].programs;
      let programLandingCanalClaro = "";
      let programLandingConcertChannel = "";
      let programLandingClaroCinema = "";
      let programCanalClaroEdit = "";
      let programConcertChannelEdit = "";
      let programClaroCinemaEdit = "";

      sliderCanalClarLandingedi.slick("unslick");
      sliderCanalClarLandingPrev.slick("unslick");
      sliderConcertChannelLanding.slick("unslick");
      sliderConcertChannelLandingPrev.slick("unslick");
      sliderClaroCinemaLandingPrev.slick("unslick");
      //Canal claro GMT
      programingCanalClaro.forEach((program, index) => {
        //Landing de canal claro
        if (index == 0) {
          programLandingCanalClaro += `
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
          programLandingCanalClaro += `
                <div class="poster">
                    <div class="poster-body">
                        <div class="showtime-container justify-content-between">
                            <p class="a-programming-text">${program.time}</p>
                            <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>
                        </div>
                        <a  href="./sinopsis.php?id=${program.chapter_id}">
                            <div class="thumbnail">
                                <img src="${program.image}" alt="">
                            </div>
                            <div class="a-claro-rectangle thumbnail-info-title">
                                <div class="poster-title-margin">
                                    <p class="a-poster-text-white">${program.chapter_title}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                    `;
        }
        //Programación general
        /*         let synopsis = "";
        if (program.sinopsis.length > 150) {
          synopsis = program.sinopsis.substr(0, 150) + "...";
        } else {
          synopsis = program.sinopsis;
        } */
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
                            <img src="${program.image}" alt="${program.chapter_title}" class="w-100">
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
                        <span class="schedule-description s1" id="synopsis-edi">${program.sinopsis}</span>
                        <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        `;
      });
      programingConcertChannel.forEach((program, index) => {
        //Landing de concert channel
        if (index == 0) {
          programLandingConcertChannel += `
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
          //Landing de concert channel
          programLandingConcertChannel += `
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

        //Programación concert channel
        /*         let synopsis = "";
        if (program.sinopsis.length > 150) {
          synopsis = program.sinopsis.substr(0, 150) + "...";
        } else {
          synopsis = program.sinopsis;
        } */
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
                            <img src="${program.image}" alt="${program.chapter_title}" class="w-100">
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
                        <span class="schedule-description s1" id="synopsis-edi">${program.sinopsis}</span>
                        <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        `;
      });
      programingClaroCinema.forEach((program, index) => {
        if (index == 0) {
          programLandingClaroCinema += `
                <div class="poster">
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
          programLandingClaroCinema += `
                <div class="poster">
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

        /*         let synopsis = "";
        if (program.sinopsis.length > 150) {
          synopsis = program.sinopsis.substr(0, 150) + "...";
        } else {
          synopsis = program.sinopsis;
        } */
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
                            <img src="${program.image}" alt=${program.chapter_title}" class="w-100">
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
                        <span class="schedule-description s1" id="synopsis-edi">${program.sinopsis}</span>
                        <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        `;
      });

      //Insertamos todos los programas
     // claroCotentProgramacionGeneralEdit.html(programCanalClaroEdit);
      $(".concert-content-edit").html(programConcertChannelEdit);
//$(".cinema-content-edit").html(programClaroCinemaEdit);
      sliderCanalClarLandingedi.html(programLandingCanalClaro);
      sliderCanalClarLandingPrev.html(programLandingCanalClaro);
      sliderConcertChannelLanding.html(programLandingConcertChannel);
      sliderConcertChannelLandingPrev.html(programLandingConcertChannel);
      sliderClaroCinemaLandingPrev.html(programLandingClaroCinema);
      createTvSlider(sliderCanalClarLandingedi);
      createTvSlider(sliderConcertChannelLanding);
      createTvSlider(sliderCanalClarLandingPrev);
      createTvSlider(sliderConcertChannelLandingPrev);
      createTvSlider(sliderClaroCinemaLandingPrev);
    },
  });

  function createClickThumbnails() {
    $(".thumbnail-body, .poster-live, .thumbnail-prog").click(function () {
      console.log("Sinopsus");
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

  //Traer sinopsis
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
});
