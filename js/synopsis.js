$(document).ready(function() {
  let programSynopsis = JSON.parse(localStorage.getItem("synopsis"));

  let synopsisButtonFavorite = $(".synopsis-add");

  let favoritesClaroCanalSynopsis = JSON.parse(
    localStorage.getItem("favoritesCanalClaro")
  );
  let favoritesConcertChannelSynopsis = JSON.parse(
    localStorage.getItem("favoritesConcertChannel")
  );
  let favoritesClaroCinemaSynopsis = JSON.parse(
    localStorage.getItem("favoritesClaroCinema")
  );
  if (programSynopsis) {
    console.log("Sinópsis");
    $(".synopsis-title").text(programSynopsis.title);
    synopsisButtonFavorite.attr("_id", programSynopsis.chapter_id);
    $(".synopsis-description").text(programSynopsis.sinopsis);
    let dropdownElement = "";
    let dropdownCountryElement = "";
    let dropdownCountries = "";
    let programmingLength = Object.values(programSynopsis.programing).length;
    console.log(programSynopsis.programing);
    for (let i = 0; i < programmingLength; i++) {
      let horario = Object.values(programSynopsis.programing)[i].horario;
      let country = Object.values(programSynopsis.programing)[i].paises;
      dropdownCountryElement = "";
      for (let elemento in country) {
        if (elemento == 0) {
          dropdownElement = `                         
            <div class="dropdownCountry-content d-flex  align-items-center pb-2 mb-3 no-gutters">
              <div class="col-2">
                  <img src="http://www.claronetworks.openofficedospuntocero.info/images/paises/${
                    country[elemento]
                  }" alt="">
              </div>
    
              <div class="col-5">
                  <p class="dropdownCountry-text">${showNameCountries(
                    country[elemento]
                  )}</p>
              </div>
              <div class="col-4">
                  <p class="dropdownCountry-text dropdownCountry-schedule">${horario} hrs</p>
              </div>
              <div class="col-1 text-center dropdownCountry-icon">
                  <span class="dropdownCountry-arrow"></span>
              </div>
            </div>`;
        } else {
          dropdownCountryElement += `
            <div class="dropdownCountries-content no-gutters">
              <div class="col-2">
                  <img src="http://www.claronetworks.openofficedospuntocero.info/images/paises/${
                    country[elemento]
                  }" alt="">
              </div>
              <div class="col-5">
                  <p class="dropdownCountry-text">${showNameCountries(
                    country[elemento]
                  )}</p>
              </div>
              </div>
            `;
        }
        dropdownCountries = `
          <div class="dropdownCountries pb-3 mb-3">
          ${dropdownCountryElement}
          </div>
          `;
      }

      $(".dropdownCountry").append(`${dropdownElement}${dropdownCountries}`);
    }
  }

  let synopsisIdChapter = $(".synopsis-add").attr("_id");

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

  if (arrayFavoritesId.includes(parseInt(synopsisIdChapter))) {
    synopsisButtonFavorite
      .children(".synopsis-heart")
      .attr("src", "./images/posters/heart-icon-white.svg");
    synopsisButtonFavorite.removeClass("add-favorites");
    synopsisButtonFavorite.addClass("remove-program");
  } else {
    synopsisButtonFavorite
      .children(".synopsis-heart")
      .attr("src", "./images/posters/heart-outline.svg");
  }
});

function showNameCountries(country) {
  let nameCountry = "";
  switch (country) {
    case "usa.svg":
      nameCountry = "USA";
      break;
    case "brazil.svg":
      nameCountry = "Brasil";
      break;
    case "paraguay.svg":
      nameCountry = "Paraguay";
      break;
    case "puerto-rico.svg":
      nameCountry = "Puerto Rico";
      break;
    case "chile.svg":
      nameCountry = "Chile";
      break;
    case "dominican-republic.svg":
      nameCountry = "República Dominicana";
      break;
    case "uruguay.svg":
      nameCountry = "Uruguay";
      break;
    case "argentina.svg":
      nameCountry = "Argentina";
      break;
    case "costa-rica.svg":
      nameCountry = "Costa Rica";
      break;
    case "guatemala.svg":
      nameCountry = "Guatemala";
      break;
    case "honduras.svg":
      nameCountry = "Honduras";
      break;
    case "nicaragua.svg":
      nameCountry = "Nicaragua";
      break;
    case "panama.svg":
      nameCountry = "Panamá";
      break;
    case "colombia.svg":
      nameCountry = "Colombia";
      break;
    case "ecuador.svg":
      nameCountry = "Perú";
      break;
    case "el-salvador.svg":
      nameCountry = "El Salvador";
      break;
    case "peru.svg":
      nameCountry = "Perú";
      break;
    default:
      nameCountry = "??";
      break;
  }
  return nameCountry;
}
