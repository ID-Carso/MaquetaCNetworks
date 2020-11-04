import { removeFavorites, updateAlertProgram } from "./services/user/user.js";
$(document).ready(function () {
  let id = localStorage.getItem("id");

  //Renderizar programas
  let genres = JSON.parse(localStorage.getItem("genres"));
  let genreItem = "";
  for (const genre of genres) {
    genreItem += `
      <div class="sidebar-item " genre="${genre.title}">
        <p class="dropdown-p cerrar">${genre.title}</p>
      </div>
      `;
  }
  $("#genre-menu-content").append(`
    ${genreItem}
    <div class="sidebar-item " genre="all">
                    <p class="dropdown-p">Todos</p>
                </div>
    <div class="sidebar-item">
      <img class="tache_button" src="images/mi-lista/cerrar-categorias.svg" alt="icono-cerrar">
    </div>
  `);
  //Filtrar programas
  $(".sidebar-item").click(function () {
    let option = $(this).attr("genre");
    filterPrograms(option, id);
    console.log(option);
    $(".name-category").text(option);
    $("#claro-canal-favorites").html("");
    $("#concert-channel-favorites").html("");
    $("#claro-cinema-favorites").html("");
    //cerrar la ventana de los generos
    const categorias = $(".categorias-menu");
    const body = $("body");
    const html = $("html");
    const sidebar_content = document.querySelector(".sidebar-content");
    categorias.css({
      zIndex: "-1",
      opacity: "0",
    });
    html.css({
      position: "initial",
      overflow: "auto",
      height: "auto",
    });
    body.css({
      position: "initial",
      overflowX: "hidden",
      overflowY: "auto",
      "-webkit-overflow-scrolling": "auto",
      height: "auto",
      width: "auto",
    });
    sidebar_content.style.overflow = "hidden";
    sidebar_content.style.height = "0%";
  });
});

function filterPrograms(option, id) {
  let data = {
    function: "filterPrograms",
    id: id,
    option: option,
  };

  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/user.php",
    success: function (result) {
      // console.log(result);
      let json = JSON.parse(result);
      let program = 0;
      if (json.code == 200) {
        console.log(json);
        if (json.data.favorites == 0) {
          let programsempty = `
          <div class="claro-list section-list-container">
                <h1 class="claro-list-title list-title-section">Sin programas guardados </h1>
                
          </div>        
          `;
          $("#claro-canal-favorites").append(programsempty);
        }
        for (program in json.data.favorites) {
          switch (json.data.favorites[program].channel) {
            case "Claro Cinema":
              console.log("cienma");
              let programsClaroCinemaList = `
              <div class="list-item-container" >
              <div class="poster">
               <div class="thumbnail-body" _id="${json.data.favorites[program].chapter_id}">
                  <div class="thumbnail">
                      <img src="${json.data.favorites[program].image}" alt="image-de-${json.data.favorites[program].program_title}">
                  </div>
                  <div class="a-cinema-rectangle">
                      <div class="poster-title-margin">
                          <p class="a-poster-text-white">${json.data.favorites[program].program_title}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="myList-details-container myList-details-mobile">
                  <div class="d-flex info-schedule justify-content-between no-gutters">
        
                      <div class="col-6">
                          <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                      </div>
                      <div>
                          <button  class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="./images/mi-lista/heart.svg" alt="agregar-a-favoritos">
                          </button>
                      </div>
                  </div>
                  <div class="no-gutters d-flex  align-items-center justify-content-between">
                      <div>
                          <p class="schedule-days">Lunes a Viernes</p>
                          <p class="schedule">${json.data.favorites[program].time}</p>
        
                      </div>
                      <div class="col-6 d-flex align-items-center justify-content-end">
                          <p class="rating-alert">ALERTAS</p>
                          <label class="switch-alert">
                              <input type="checkbox" class="myList-alert" checked>
                              <span class="slideralert roundalert"></span>
                          </label>
                      </div>
        
                  </div>
              </div>
              <div class="myList-details-container myList-details-tablet no-gutters">
                  <div>
                      <div>
                          <p class="schedule-days">Lunes a Viernes</p>
                          <p class="schedule">${json.data.favorites[program].time}</p>
                          <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                      </div>
                  </div>
        
                  <div class="d-flex  align-items-end flex-column justify-content-between">
                      <div>
                          <button class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="images/mi-lista/heart.svg" alt="agregar-a-favoritos">
                          </button>
                      </div>
                      <div class="d-flex align-items-center justify-content-end">
                          <p class="rating-alert">ALERTAS</p>
                          <label class="switch-alert">
                              <input type="checkbox" class="myList-alert" checked>
                              <span class="slideralert roundalert"></span>
                          </label>
                      </div>
        
                  </div>
              </div>
              <div class="myList-details-container myList-details-desktop">
                  <div class="d-flex justify-content-between">
                      <div>
                          <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                      </div>
                      <div>
                          <p class="schedule-days">Lunes a Viernes</p>
                          <p class="schedule">${json.data.favorites[program].time}</p>
                      </div>
                      <div>
                          <div class="text-right mb-3">
                              <button title="Eliminar de mi lista" class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="images/mi-lista/heart.svg" alt="agregar-a-favoritos"/>
                              </button>
                          </div>
                          <div class="d-flex align-items-center justify-content-end">
                              <p class="rating-alert">ALERTAS</p>
                              <label class="switch-alert">
                                  <input type="checkbox" class="myList-alert" checked>
                                  <span class="slideralert roundalert"></span>
                              </label>
                          </div>
        
                      </div>
                  </div>
                  <div>
                      <p class="schedule-description">
                      ${json.data.favorites[program].sinopsis}
                      </p>
                  </div>
              </div>
        
          </div>
              `;

              let programsClaroCinema = `
              <div class="cinema-list section-list-container">
                <h1 class="cinema-list-title list-title-section">Claro <span>Cinema</span></h1>
                  ${programsClaroCinemaList}
              </div>       
          `;
              $("#claro-cinema-favorites").append(programsClaroCinema);
              break;
            case "Concert Channel":
              console.log("concert");
              let programsConcertChannelList = `
                <div class="list-item-container" >
                <div class="poster">
                 <div class="thumbnail-body" _id="${json.data.favorites[program].chapter_id}">
                    <div class="thumbnail">
                        <img src="${json.data.favorites[program].image}" alt="image-de-${json.data.favorites[program].program_title}">
                    </div>
                    <div class="a-concert-rectangle">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${json.data.favorites[program].program_title}</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="myList-details-container myList-details-mobile">
                    <div class="d-flex info-schedule justify-content-between no-gutters">
          
                        <div class="col-6">
                            <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                        </div>
                        <div>
                            <button  class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="./images/mi-lista/heart.svg" alt="agregar-a-favoritos">
                            </button>
                        </div>
                    </div>
                    <div class="no-gutters d-flex  align-items-center justify-content-between">
                        <div>
                            <p class="schedule-days">Lunes a Viernes</p>
                            <p class="schedule">${json.data.favorites[program].time}</p>
          
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            <p class="rating-alert">ALERTAS</p>
                            <label class="switch-alert">
                                <input type="checkbox" class="myList-alert" checked>
                                <span class="slideralert roundalert"></span>
                            </label>
                        </div>
          
                    </div>
                </div>
                <div class="myList-details-container myList-details-tablet no-gutters">
                    <div>
                        <div>
                            <p class="schedule-days">Lunes a Viernes</p>
                            <p class="schedule">${json.data.favorites[program].time}</p>
                            <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                        </div>
                    </div>
          
                    <div class="d-flex  align-items-end flex-column justify-content-between">
                        <div>
                            <button class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="images/mi-lista/heart.svg" alt="agregar-a-favoritos">
                            </button>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <p class="rating-alert">ALERTAS</p>
                            <label class="switch-alert">
                                <input type="checkbox" class="myList-alert" checked>
                                <span class="slideralert roundalert"></span>
                            </label>
                        </div>
          
                    </div>
                </div>
                <div class="myList-details-container myList-details-desktop">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                        </div>
                        <div>
                            <p class="schedule-days">Lunes a Viernes</p>
                            <p class="schedule">${json.data.favorites[program].time}</p>
                        </div>
                        <div>
                            <div class="text-right mb-3">
                                <button title="Eliminar de mi lista" class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="images/mi-lista/heart.svg" alt="agregar-a-favoritos"/>
                                </button>
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                                <p class="rating-alert">ALERTAS</p>
                                <label class="switch-alert">
                                    <input type="checkbox" class="myList-alert" checked>
                                    <span class="slideralert roundalert"></span>
                                </label>
                            </div>
          
                        </div>
                    </div>
                    <div>
                        <p class="schedule-description">
                        ${json.data.favorites[program].sinopsis}
                        </p>
                    </div>
                </div>
          
            </div>
                `;

              let programsConcertChannel = `
                <div class="concert-list section-list-container">
                  <h1 class="concert-list-title list-title-section">Concert Channel</h1>
                  ${programsConcertChannelList}
                </div>       
            `;
              $("#concert-channel-favorites").append(programsConcertChannel);

              break;
            case "Canal Claro":
              console.log("claro");
              let programsCanalClaroList = `
                  <div class="list-item-container" >
                  <div class="poster">
                   <div class="thumbnail-body" _id="${json.data.favorites[program].chapter_id}">
                      <div class="thumbnail">
                          <img src="${json.data.favorites[program].image}" alt="image-de-${json.data.favorites[program].program_title}">
                      </div>
                      <div class="a-claro-rectangle">
                          <div class="poster-title-margin">
                              <p class="a-poster-text-white">${json.data.favorites[program].program_title}</p>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="myList-details-container myList-details-mobile">
                      <div class="d-flex info-schedule justify-content-between no-gutters">
            
                          <div class="col-6">
                              <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                          </div>
                          <div>
                              <button  class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="./images/mi-lista/heart.svg" alt="agregar-a-favoritos">
                              </button>
                          </div>
                      </div>
                      <div class="no-gutters d-flex  align-items-center justify-content-between">
                          <div>
                              <p class="schedule-days">Lunes a Viernes</p>
                              <p class="schedule">${json.data.favorites[program].time}</p>
            
                          </div>
                          <div class="col-6 d-flex align-items-center justify-content-end">
                              <p class="rating-alert">ALERTAS</p>
                              <label class="switch-alert">
                                  <input type="checkbox" class="myList-alert" checked>
                                  <span class="slideralert roundalert"></span>
                              </label>
                          </div>
            
                      </div>
                  </div>
                  <div class="myList-details-container myList-details-tablet no-gutters">
                      <div>
                          <div>
                              <p class="schedule-days">Lunes a Viernes</p>
                              <p class="schedule">${json.data.favorites[program].time}</p>
                              <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                          </div>
                      </div>
            
                      <div class="d-flex  align-items-end flex-column justify-content-between">
                          <div>
                              <button class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="images/mi-lista/heart.svg" alt="agregar-a-favoritos">
                              </button>
                          </div>
                          <div class="d-flex align-items-center justify-content-end">
                              <p class="rating-alert">ALERTAS</p>
                              <label class="switch-alert">
                                  <input type="checkbox" class="myList-alert" checked>
                                  <span class="slideralert roundalert"></span>
                              </label>
                          </div>
            
                      </div>
                  </div>
                  <div class="myList-details-container myList-details-desktop">
                      <div class="d-flex justify-content-between">
                          <div>
                              <p class="rating">Clasificación: ${json.data.favorites[program].rating}</p>
                          </div>
                          <div>
                              <p class="schedule-days">Lunes a Viernes</p>
                              <p class="schedule">${json.data.favorites[program].time}</p>
                          </div>
                          <div>
                              <div class="text-right mb-3">
                                  <button title="Eliminar de mi lista" class="button-none remove-program" _id="${json.data.favorites[program].chapter_id}" type="button"><img src="images/mi-lista/heart.svg" alt="agregar-a-favoritos"/>
                                  </button>
                              </div>
                              <div class="d-flex align-items-center justify-content-end">
                                  <p class="rating-alert">ALERTAS</p>
                                  <label class="switch-alert">
                                      <input type="checkbox" class="myList-alert" checked>
                                      <span class="slideralert roundalert"></span>
                                  </label>
                              </div>
            
                          </div>
                      </div>
                      <div>
                          <p class="schedule-description">
                          ${json.data.favorites[program].sinopsis}
                          </p>
                      </div>
                  </div>
            
              </div>
                  `;

              let programsCanalClaro = `
              <div class="claro-list section-list-container">
                    <h1 class="claro-list-title list-title-section">Claro Canal</h1>
                      ${programsCanalClaroList}
              </div>        
              `;
              $("#claro-canal-favorites").append(programsCanalClaro);

              break;
          }
        }
        let removeButtonProgram = $(".remove-program");

        removeButtonProgram.click(function (e) {
          let id = localStorage.getItem("id");
          let programId = $(this).attr("_id");
          let itemList = $(this).closest(".list-item-container");
          removeFavorites(id, programId, $(this), itemList);
        });
        $(".myList-details-container").click(function (e) {
          if (e.target.classList.contains("myList-alert")) {
            let alert = $(this).find(".myList-alert").is(":checked");

            let program_id = $(this).find(".button-none").attr("_id");
            let user_id = localStorage.getItem("id");
            updateAlertProgram(user_id, program_id, alert);
          }
        });
      }
    },
  });
}
