import { gradientMenu, navbarWhite } from "./scroll/scroll.js";
import { ShowHidePassword } from "./form/form.js";
import { selectCountry } from "./session/session.js";
import { validateEmail } from "./form/form.js";
import { validateNewPassword } from "./form/form.js";
import { validateKeyUpEmail } from "./form/form.js";
import { validatePassword } from "./form/form.js";
import { validateUser } from "./form/form.js";
import { registerUser } from "./services/user/user.js";
import { validateToken } from "./form/form.js";

/* User */
import { sendUserEmail } from "./services/user/user.js";
import { sendNewPassword } from "./services/user/user.js";
import { signIn } from "./services/user/user.js";
import { signOut } from "./services/user/user.js";
import { updateDataUser } from "./services/user/user.js";
import { selectAvatar } from "./services/user/user.js";
import { updateAlerts } from "./services/user/user.js";
import { addFavorites } from "./services/user/user.js";
import { removeFavorites } from "./services/user/user.js";
import { showNotification } from "./services/user/user.js";
import { updateAlertProgram } from "./services/user/user.js";
import { getNameCountry } from "./country/country.js";

/* Program */
import { getPrograms, createClickThumbnails } from "./services/Program.js";

/* Date */
import { getMonthAndYear } from "./date/date.js";

/* Slider */
import Slider from "./UI/Slider.js";

/* Section Metakeys*/
import { getMetaKeys } from "./services/Section.js";

import Navbar from "./UI/Navbar.js";

var programacion_slider;
var tvConcertSlider;
let url = location.href;
let url2 =
  "http://www.claronetworks.openofficedospuntocero.info/v1.2/cuenta-confirmada.html";
let arrayUrl = url.split("?");
let data = {
  token: arrayUrl[1],
};
console.log(data);
if (arrayUrl[0] == url2) {
  validateToken(data);
}

let country = localStorage.getItem("country");
let gender = localStorage.getItem("gender");

if (country) {
  $(".SeleccionPaisLista").text(country);
}

if (gender) {
  let iconFemale = $("#women");
  let iconMale = $("#men");
  let genderMale = $("#hombre");
  let genderFemale = $("#mujer");
  if (gender == "F") {
    genderFemale.attr("checked", true);
    genderMale.attr("checked", false);
    iconMale.attr("src", "images/datos-adicionales/masculino-inactivo.svg");
    iconFemale.attr("src", "images/datos-adicionales/femenino-activo.svg");
  } else {
    genderFemale.attr("checked", false);
    genderMale.attr("checked", true);
    iconMale.attr("src", "images/datos-adicionales/masculino-activo.svg");
    iconFemale.attr("src", "images/datos-adicionales/femenino-inactivo.svg");
  }
}

let day = localStorage.getItem("day");
let month = localStorage.getItem("month");
let year = localStorage.getItem("year");

if (day && month && year) {
  $(".SeleccionDiaLista").text(day);
  $(".SeleccionMesLista").text(month);
  $(".SeleccionAñoLista").text(year);
}

$(document).ready(function () {
  let dateUTC = new Date();
  console.log(dateUTC.getUTCHours());

  /* Banner*/
  let sliderBanner = new Slider();
  sliderBanner.showImageBanner();
  /* End Banner */

  /* Navbar */

  /*let navbarWhiteInstance = new Navbar();
  navbarWhiteInstance.renderMenuWhite();*/
  /* End Navbar */

  /* Sinópsis*/

  createClickThumbnails();

  /*End Sinópsis */
  /* Lista de favoritos del usuario*/

  let favoritesCanalClaro = JSON.parse(
    localStorage.getItem("favoritesCanalClaro")
  );
  let favoritesConcertChannel = JSON.parse(
    localStorage.getItem("favoritesConcertChannel")
  );
  let favoritesClaroCinema = JSON.parse(
    localStorage.getItem("favoritesClaroCinema")
  );

  let listFavorites = $(".mi-lista-container");
  let myFavorites;
  if (
    !favoritesCanalClaro &&
    !favoritesConcertChannel &&
    !favoritesClaroCinema
  ) {
    myFavorites = `
    <div class="text-center mt-4">
      <img src="./images/mi-lista/favorites.svg" alt="" class="no-favorites-img">
    </div>
    <div class="no-gutters mt-4">
      <div class="col-12">
          <p class="a-text-warm-grey-bold mb-3 text-center no-favorites-title mb-xl-4">No tienes favoritos guardados todavía</p>
          <p class="a-text-warm-grey-regular text-center no-favorites-subtitle">Explora y descubre más</p>
      </div>
    </div>

        `;
    listFavorites.append(myFavorites);
  } else {
    if (favoritesCanalClaro != null) {
      if (favoritesCanalClaro.length != 0) {
        let programsCanalClaroList = "";
        favoritesCanalClaro.forEach((favorite) => {
          if (favorite.active == 0) {
            programsCanalClaroList += `
            <div class="list-item-container" >
            <div class="poster">
             <div class="thumbnail-body" _id="${favorite.chapter_id}">
                <div class="thumbnail">
                     <img src="./images/home/carrusel-ahora-en-vivo/${favorite.image}" alt="">
                </div>
                <div class="a-claro-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${favorite.program_title}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="myList-details-container myList-details-mobile">
                <div class="d-flex info-schedule justify-content-between no-gutters">
      
                    <div class="col-6">
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button  class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="./images/mi-lista/heart.svg">
                        </button>
                    </div>
                </div>
                <div class="no-gutters d-flex  align-items-center justify-content-between">
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
      
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <p class="rating-alert">ALERTAS</p>
                        <label class="switch-alert">
                            <input type="checkbox" class="myList-alert">
                            <span class="slideralert roundalert"></span>
                        </label>
                    </div>
      
                </div>
            </div>
            <div class="myList-details-container myList-details-tablet no-gutters">
                <div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                </div>
      
                <div class="d-flex  align-items-end flex-column justify-content-between">
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="images/mi-lista/heart.svg">
                        </button>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <p class="rating-alert">ALERTAS</p>
                        <label class="switch-alert">
                            <input type="checkbox" class="myList-alert">
                            <span class="slideralert roundalert"></span>
                        </label>
                    </div>
      
                </div>
            </div>
            <div class="myList-details-container myList-details-desktop">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                    </div>
                    <div>
                        <div class="text-right mb-3">
                            <button title="Eliminar de mi lista" class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="images/mi-lista/heart.svg">
                            </button>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <p class="rating-alert">ALERTAS</p>
                            <label class="switch-alert">
                                <input type="checkbox" class="myList-alert" >
                                <span class="slideralert roundalert"></span>
                            </label>
                        </div>
      
                    </div>
                </div>
                <div>
                    <p class="schedule-description">
                        ${favorite.sinopsis}
                    </p>
                </div>
            </div>
      
        </div>
            `;
          } else {
            programsCanalClaroList += `
            <div class="list-item-container" >
            <div class="poster">
             <div class="thumbnail-body" _id="${favorite.chapter_id}">
                <div class="thumbnail">
                    <img src="./images/home/carrusel-ahora-en-vivo/${favorite.image}" alt="">
                </div>
                <div class="a-claro-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${favorite.program_title}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="myList-details-container myList-details-mobile">
                <div class="d-flex info-schedule justify-content-between no-gutters">
      
                    <div class="col-6">
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button  class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="./images/mi-lista/heart.svg">
                        </button>
                    </div>
                </div>
                <div class="no-gutters d-flex  align-items-center justify-content-between">
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
      
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
                        <p class="schedule">10:00 - 10:30</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                </div>
      
                <div class="d-flex  align-items-end flex-column justify-content-between">
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="images/mi-lista/heart.svg">
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
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                    </div>
                    <div>
                        <div class="text-right mb-3">
                            <button title="Eliminar de mi lista" class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="images/mi-lista/heart.svg">
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
                    ${favorite.sinopsis}
                    </p>
                </div>
            </div>
      
        </div>
            `;
          }
        });
        let programsCanalClaro = `
        <div class="claro-list section-list-container">
              <h1 class="claro-list-title list-title-section">Claro Canal</h1>
                ${programsCanalClaroList}
        </div>        
        `;
        $("#claro-canal-favorites").append(programsCanalClaro);
      }
    }

    if (favoritesConcertChannel != null) {
      if (favoritesConcertChannel.length != 0) {
        /* CONCERT CHANNEL */

        let programsConcertChannelList = "";
        favoritesConcertChannel.forEach((favorite) => {
          if (favorite.active == 0) {
            programsConcertChannelList += `
            <div class="list-item-container" >
            <div class="poster">
              <div class="thumbnail-body" _id="${favorite.chapter_id}">
                <div class="thumbnail">
                    <img src="./images/concert-channel/carrousel/${favorite.image}" alt="">
                </div>
                <div class="a-concert-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${favorite.program_title}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="myList-details-container myList-details-mobile">
                <div class="d-flex info-schedule justify-content-between no-gutters">
      
                    <div class="col-6">
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
                        </button>
                    </div>
                </div>
                <div class="no-gutters d-flex  align-items-center justify-content-between">
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
      
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <p class="rating-alert">ALERTAS</p>
                        <label class="switch-alert">
                            <input type="checkbox" class="myList-alert">
                            <span class="slideralert roundalert"></span>
                        </label>
                    </div>
      
                </div>
            </div>
            <div class="myList-details-container myList-details-tablet no-gutters">
                <div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                </div>
      
                <div class="d-flex  align-items-end flex-column justify-content-between">
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
                        </button>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <p class="rating-alert">ALERTAS</p>
                        <label class="switch-alert">
                            <input type="checkbox" class="myList-alert">
                            <span class="slideralert roundalert"></span>
                        </label>
                    </div>
      
                </div>
            </div>
            <div class="myList-details-container myList-details-desktop">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                    </div>
                    <div>
                        <div class="text-right mb-3">
                            <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
                            </button>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <p class="rating-alert">ALERTAS</p>
                            <label class="switch-alert">
                                <input type="checkbox" class="myList-alert">
                                <span class="slideralert roundalert"></span>
                            </label>
                        </div>
      
                    </div>
                </div>
                <div>
                    <p class="schedule-description">
                    ${favorite.sinopsis}
                    </p>
                </div>
            </div>
      
        </div>
            `;
          } else {
            programsConcertChannelList += `
            <div class="list-item-container" >
            <div class="poster">
             <div class="thumbnail-body" _id="${favorite.chapter_id}">
                <div class="thumbnail">
                    <img src="./images/concert-channel/carrousel/${favorite.image}" alt="">
                </div>
                <div class="a-concert-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${favorite.program_title}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="myList-details-container myList-details-mobile">
                <div class="d-flex info-schedule justify-content-between no-gutters">
      
                    <div class="col-6">
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
                        </button>
                    </div>
                </div>
                <div class="no-gutters d-flex  align-items-center justify-content-between">
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
      
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
                        <p class="schedule">10:00 - 10:30</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                </div>
      
                <div class="d-flex  align-items-end flex-column justify-content-between">
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
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
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                    </div>
                    <div>
                        <div class="text-right mb-3">
                            <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
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
                    ${favorite.sinopsis}
                    </p>
                </div>
            </div>
      
        </div>
            `;
          }
        });

        let programsConcertChannel = `
      <div class="concert-list section-list-container">
        <h1 class="concert-list-title list-title-section">Concert Channel</h1>
        ${programsConcertChannelList}
      </div>
`;
        $("#concert-channel-favorites").append(programsConcertChannel);
      }
    }
    if (favoritesClaroCinema != null) {
      /* CLARO CINEMA */
      if (favoritesClaroCinema.length != 0) {
        let programsClaroCinemaList = "";
        favoritesClaroCinema.forEach((favorite) => {
          if (favorite.active == 0) {
            programsClaroCinemaList += `
            <div class="list-item-container">
            <div class="poster">
              <div class="thumbnail-body" _id="${favorite.chapter_id}">
                <div class="thumbnail">
                    <img src="./images/claro-cinema/carrousel/${favorite.image}" alt="">
                </div>
                <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${favorite.program_title}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="myList-details-container myList-details-mobile">
                <div class="d-flex info-schedule justify-content-between no-gutters">
      
                    <div class="col-6">
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="images/mi-lista/heart.svg">
                        </button>
                    </div>
                </div>
                <div class="no-gutters d-flex  align-items-center justify-content-between">
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
      
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <p class="rating-alert">ALERTAS</p>
                        <label class="switch-alert">
                            <input type="checkbox" class="myList-alert">
                            <span class="slideralert roundalert"></span>
                        </label>
                    </div>
      
                </div>
            </div>
            <div class="myList-details-container myList-details-tablet no-gutters">
                <div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                </div>
      
                <div class="d-flex align-items-end flex-column justify-content-between">
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
                        </button>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <p class="rating-alert">ALERTAS</p>
                        <label class="switch-alert">
                            <input type="checkbox" class="myList-alert">
                            <span class="slideralert roundalert"></span>
                        </label>
                    </div>
      
                </div>
            </div>
            <div class="myList-details-container myList-details-desktop">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                    </div>
                    <div>
                        <div class="text-right mb-3">
                            <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="./images/mi-lista/heart.svg">
                            </button>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <p class="rating-alert">ALERTAS</p>
                            <label class="switch-alert">
                                <input type="checkbox" class="myList-alert">
                                <span class="slideralert roundalert"></span>
                            </label>
                        </div>
      
                    </div>
                </div>
                <div>
                    <p class="schedule-description">
                    ${favorite.sinopsis}
                    </p>
                </div>
            </div>
      
        </div>
            `;
          } else {
            programsClaroCinemaList += `
            <div class="list-item-container">
            <div class="poster">
             <div class="thumbnail-body" _id="${favorite.chapter_id}">
                <div class="thumbnail">
                    <img src="./images/claro-cinema/carrousel/${favorite.image}" alt="">
                </div>
                <div class="a-cinema-rectangle">
                    <div class="poster-title-margin">
                        <p class="a-poster-text-white">${favorite.program_title}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="myList-details-container myList-details-mobile">
                <div class="d-flex info-schedule justify-content-between no-gutters">
      
                    <div class="col-6">
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}" type="button"><img src="images/mi-lista/heart.svg">
                        </button>
                    </div>
                </div>
                <div class="no-gutters d-flex  align-items-center justify-content-between">
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
      
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
                        <p class="schedule">10:00 - 10:30</p>
                        <p class="rating">Clasificación: A</p>
                    </div>
                </div>
      
                <div class="d-flex align-items-end flex-column justify-content-between">
                    <div>
                        <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="images/mi-lista/heart.svg">
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
                        <p class="rating">Clasificación: A</p>
                    </div>
                    <div>
                        <p class="schedule-days">Lunes a Viernes</p>
                        <p class="schedule">10:00 - 10:30</p>
                    </div>
                    <div>
                        <div class="text-right mb-3">
                            <button class="button-none remove-program" _id="${favorite.chapter_id}"  type="button"><img src="./images/mi-lista/heart.svg">
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
                    ${favorite.sinopsis}
                    </p>
                </div>
            </div>
      
        </div>
            `;
          }
        });
        let programsClaroCinema = `
        <div class="cinema-list section-list-container">
          <h1 class="cinema-list-title list-title-section">Claro <span>Cinema</span></h1>
            ${programsClaroCinemaList}
        </div>    
  `;
        $("#claro-cinema-favorites").append(programsClaroCinema);
      }
    }
  }

  let removeButtonProgram = $(".remove-program");

  if (removeButtonProgram) {
    removeButtonProgram.click(function (e) {
      let id = localStorage.getItem("id");
      let programId = $(this).attr("_id");
      let itemList = $(this).closest(".list-item-container");
      removeFavorites(id, programId, $(this), itemList);
    });
  }

  $(".myList-details-container").click(function (e) {
    if (e.target.classList.contains("myList-alert")) {
      let alert = $(this).find(".myList-alert").is(":checked");

      let program_id = $(this).find(".button-none").attr("_id");
      let user_id = localStorage.getItem("id");
      updateAlertProgram(user_id, program_id, alert);
    }
  });

  /* END LISTA DE FAVORITOS DEL USUARIO */

  let saveDataButton = $("#save-data-user");

  saveDataButton.click(function () {
    let day = $(".SeleccionDiaLista").text();
    let month = $(".SeleccionMesLista").text();
    let year = $(".SeleccionAñoLista").text();
    let date = year + "-" + month + "-" + day;
    let genderMale = $("#hombre");
    let genderFemale = $("#mujer");
    var gender;
    if (genderMale.is(":checked")) {
      gender = "M";
    } else if (genderFemale.is(":checked")) {
      gender = "F";
    }
    let id = parseInt(localStorage.getItem("id"));
    let country = $(".SeleccionPaisLista").text();
    updateDataUser(id, gender, date, country);
  });

  $("#avatar-button").click(function () {
    let id = localStorage.getItem("id");
    let avatar = $(".active-navAvatar").children().attr("src");
    let idAvatar = $(".active-navAvatar").children().attr("_id");
    selectAvatar(id, avatar, idAvatar);
  });

  let alertsOff = $("#alerts-off");
  let alertMinutesBefore = $("#alert-minutes-before");
  let alertStart = $("#alert-start");
  let alertEmail = $("#alert-email");
  let alertWeb = $("#alert-web");
  let alerts = [alertMinutesBefore, alertStart, alertEmail, alertWeb];
  alertsOff.click(function () {
    if (alertsOff.is(":checked")) {
      let alertsLength = alerts.length;
      for (i = 0; i < alertsLength; i++) {
        alerts[i].prop({ checked: false, disabled: true });
      }
    } else {
      let alertsLength = alerts.length;
      for (i = 0; i < alertsLength; i++) {
        alerts[i].prop("disabled", false);
      }
    }
  });

  $("#alert-button").click(function () {
    let alertsOffVal = $("#alerts-off:checked").val();
    let alertMinutesBeforeVal = $("#alert-minutes-before:checked").val();
    let alertStartVal = $("#alert-start:checked").val();
    let alertEmailVal = $("#alert-email:checked").val();
    let alertWebVal = $("#alert-web:checked").val();

    if (!alertsOffVal) {
      alertsOffVal = 0;
    }

    if (!alertMinutesBeforeVal) {
      alertMinutesBeforeVal = 15;
    }
    if (!alertStartVal) {
      alertStartVal = 0;
    }

    if (!alertEmailVal) {
      alertEmailVal = 0;
    }

    if (!alertWebVal) {
      alertWebVal = 0;
    }

    let userId = localStorage.getItem("id");

    let configJson = {
      user_id: userId,
      desactivate: alertsOffVal,
      minutes: alertMinutesBeforeVal,
      beginning: alertStartVal,
      email: alertEmailVal,
      web: alertWebVal,
    };

    updateAlerts(configJson);
  });

  /*End Serivce - USER */

  /*Service - Program */

  /*Mostrar u ocultar password de registro o login */
  var iconPassword = document.querySelectorAll(".icon-eye");
  var iconLength = iconPassword.length;

  if (iconPassword !== null) {
    for (let i = 0; i < iconLength; i++) {
      iconPassword[i].addEventListener("click", function () {
        ShowHidePassword(this);
      });
    }
  }

  /*End función Mostrar u ocultar password de registro o login */

  /*Función elegir un país y mostrar la bandera en navbar */
  const numPaises = document.getElementsByClassName("name_paises").length;
  const paises = document.getElementsByClassName("name_paises");
  for (let contador = 0; contador < numPaises; contador++) {
    paises[contador].addEventListener("click", function () {
      selectCountry($(this));
    });
  }

  /*End función elegir un país y mostrar la bandera en navbar */

  $(".signup-button").click(function () {
    let messagePasswordError = $(".caracteres-min");
    let messageErrorEmail = $(".nocorreo");
    let messageErrorUser = $(".nouser");

    let inputUser = $("#usuario");
    let inputEmail = $("#signup-correo");
    let inputPassword = $("#signup-password");
    let modalUsername = $("#modal-username");

    if (
      validateUser(inputUser, messageErrorUser) &&
      validateEmail(inputEmail, messageErrorEmail) &&
      validatePassword(inputPassword, messagePasswordError)
    ) {
      registerUser(inputUser, inputEmail, inputPassword);
      modalUsername.html(inputUser.val());
      return true;
    } else {
      return false;
    }
  });

  $("#login-button").click(function () {
    let inputEmail = $(".input-email");
    let inputPassword = $(".input-password");
    let messageError = $("#error_email");
    let messagePasswordError = $(".caracteres-min");

    if (
      validateEmail(inputEmail, messageError) &&
      validatePassword(inputPassword, messagePasswordError)
    ) {
      let email = inputEmail.val();
      let password = inputPassword.val();
      signIn(email, password);

      return true;
    } else {
      return false;
    }
  });

  var session = localStorage.getItem("session");

  if (session == 1) {
    setTimeout(function () {
      showNotification();
    }, 2000);

    /* Señalar Avatar */
    let idAvatarStorage = localStorage.getItem("idAvatar");
    if (idAvatarStorage) {
      let avatars = $(".avatar-item").children();

      let length = avatars.length;
      avatars.removeClass("active-navAvatar");

      avatars.each(function (index, avatar) {
        let itemAvatar = $(this)
          .closest(".avatar-item")
          .addClass("active-navAvatar");
        itemAvatar.removeClass("active-navAvatar");

        if ($(this).attr("_id") == idAvatarStorage) {
          itemAvatar.addClass("active-navAvatar");
        }
      });
    }

    /*VERIFICAR ALERTAS EN SESIÓN*/
    let alertBeginning = localStorage.getItem("alertBeginning");
    let alertWeb = localStorage.getItem("alertWeb");
    let alertEmail = localStorage.getItem("alertEmail");
    let alertMinutes = localStorage.getItem("alertMinutes");

    let inputAlertMinutes = $("#alert-minutes-before");
    let inputAlertBeginning = $("#alert-start");
    let inputAlertWeb = $("#alert-web");
    let inputAlertEmail = $("#alert-email");
    let inputAlertsOff = $("#alerts-off");

    if (
      alertMinutes == 0 &&
      alertBeginning == 0 &&
      alertWeb == 0 &&
      !alertEmail == 0
    ) {
      inputAlertsOff.prop("checked", true);
    } else {
      inputAlertsOff.prop("checked", false);
      if (alertMinutes == 30) {
        inputAlertMinutes.prop("checked", true);
      } else {
        inputAlertMinutes.prop("checked", false);
      }

      if (alertBeginning == 1) {
        inputAlertBeginning.prop("checked", true);
      } else {
        inputAlertBeginning.prop("checked", false);
      }

      if (alertWeb == 1) {
        inputAlertWeb.prop("checked", true);
      } else {
        inputAlertWeb.prop("checked", false);
      }

      if (alertEmail == 1) {
        inputAlertEmail.prop("checked", true);
      } else {
        inputAlertEmail.prop("checked", false);
      }
    }

    var sidebarContent = $(".sidebar-content");
    var sidebarItem = `                
    <div class="sidebar-item sidebar-border-bottom" id="sidebar-logout">
      <span class="dropdown-p" >Cerrar sesión</span>
    </div>`;
    let userOptions = $(".user-options");
    let sidebarHeader = $(".sidebar-header");
    let userName = localStorage.getItem("name");
    let avatar = `<img src="${localStorage.getItem("avatar")}" />`;

    let menuMobile = `            
      <div class="d-flex align-items-center">
        <div class="image-user image-user-container mr-3">
            ${avatar}
        </div>

        <div class="d-flex flex-column justify-contet-between">
            <p class="a-text-white-bold login-text">${userName}</p>
            <div>
                <a href="mi-lista.php"><img class="mr-3 options-item" src="./images/menu/mi-lista-icon.png" alt="" /></a>
                <a href="configuracion.php"><img class="options-item" src="./images/menu/configuracion-icon.png" alt="" /></a>
            </div>
        </div>
      </div>`;
    let menuIngreso = `
      <div class="menu-ingreso">
      <div class="icon-user position-relative mr-3">
        <div class="tooltip-logout">
          <div class="d-flex">
            <img src="./images/menu/logout.svg" />
            <p class="tooltip-text ml-3">Cerrar Sesión</p>
          </div>
        </div>
        <div class="image-user-container">
          <div class="image-user">
          ${avatar}
          </div>
        </div>
      </div>

      <p class="name-user mr-3">${userName}</p>
      <a href="mi-lista.php"><img class="mr-3 options-item" src="./images/menu/mi-lista-icon.png" alt="" /></a>
      <a href="configuracion.php"><img class="mr-3 options-item" src="./images/menu/configuracion-icon.png" alt="" /></a>
      <a href="index.php" class="login-item options-item"><img class="login-country" src="" alt="" /></a>
      </div>
      `;
    sidebarContent.append(sidebarItem);
    sidebarHeader.html(menuMobile);
    userOptions.html(menuIngreso);
  } else {
    let menuBase = `    
    <div class="login">
      <a href="login.php" class="login-item mr-2"><img src="./images/home/user-login.svg" alt="" /></a>
      <a href="index.php" class="login-item"><img class="login-country" src="" alt="" /></a>
    </div>`;
    let userOptions = $(".user-options");
    let sidebarHeader = $(".sidebar-header");
    let menuBaseMobile = `            
    <div class="d-flex align-items-center">
      <div class="image-user mr-3">
          <a href="login.php"><img src="./images/menu/icon-white-user.svg" alt=""></a>
      </div>

      <div>
          <p class="a-text-white-bold login-text">ingresar</p>
      </div>
    </div>`;

    userOptions.html(menuBase);
    sidebarHeader.html(menuBaseMobile);
  }

  var sessionSrc = localStorage.getItem("src");
  var loginCountry = $(".login-country");
  //!sessionSrc && window.location.pathname !== "/v1.2/"
  if (!sessionSrc && window.location.pathname !== "/") {
    location.href = "/";
  } else {
    loginCountry.attr("src", sessionSrc);
  }

  $(".tooltip-logout").click(function () {
    signOut();
  });

  $(".terms-conditions-button, .arrow-back").click(function () {
    window.history.back();
  });

  loginCountry.attr("src", sessionSrc);

  /* Hacer aparecer el tooltip */

  $(".icon-user").hover(
    function () {
      let tooltipLogout = $(".tooltip-logout");
      /*tooltipLogout.toggle();*/
      tooltipLogout.css("display", "block");
    },
    function () {
      let tooltipLogout = $(".tooltip-logout");
      tooltipLogout.css("display", "none");
    }
  );

  $(document).on("click", function (e) {
    let container = $(".icon-user");
    let tooltipLogout = $(".tooltip-logout");
    let sidebarLogout = $("#sidebar-logout");

    if (sidebarLogout) {
      sidebarLogout.click(function () {
        signOut();
      });
    }

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      tooltipLogout.css("display", "none");
    }
  });

  $(document).on("click", function (e) {
    let container = $("#drop-paises, .cuadro-fecha");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $("#selectPais").prop("checked", false);
      $("#selectDay").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectYear").prop("checked", false);
    }
  });

  const inputPassword = $("#login-password");
  const caracteresMin = $(".caracteres-min");
  const listo = $(".listo");
  inputPassword.keyup(function () {
    if (inputPassword.val().length < 8 && inputPassword.val().length >= 1) {
      caracteresMin.css("color", "red");
      listo.css("display", "none");
    } else if (inputPassword.val().length == 0) {
      caracteresMin.css("color", "#666262");
      listo.css("display", "none");
    } else {
      caracteresMin.css("color", "green");
      listo.css("display", "inline-block");
    }
  });
  /*login*/
  const inputPassword1 = $("#signup-password");
  const caracteresMin1 = $(".caracteres-min");
  const listo1 = $(".listo");
  inputPassword1.keyup(function () {
    if (inputPassword1.val().length < 8 && inputPassword1.val().length >= 1) {
      caracteresMin1.css("color", "red");
      listo1.css("display", "inline-block");
      listo1.attr("src", "images/registro/alerta.svg");
    } else if (inputPassword1.val().length == 0) {
      caracteresMin1.css("color", "#666262");
      listo1.css("display", "none");
    } else {
      caracteresMin1.css("color", "green");
      listo1.css("display", "inline-block");
      listo1.attr("src", "images/registro/listo.svg");
    }
  });

  const inputCorreo = $(".input-email");

  inputCorreo.keyup(function () {
    const correoValido = $(".correo-valido");
    const imagenError = $(".error");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    validateKeyUpEmail(inputCorreo, filter, imagenError, correoValido);
  });

  /* Validar email para reestablecer contraseña*/

  const inputReEmail = $("#re-password-email");
  const messageError = $(".correo-valido");
  $("#reset-email").click(function () {
    if (validateEmail(inputReEmail, messageError)) {
      sendUserEmail(inputReEmail);
      return true;
    } else {
      return false;
    }
  });

  /*Validar nueva contraseña */
  const inputNewPassword = $("#new-password");
  const inputConfirmPassword = $("#new-confirm-password");
  const newPasswordButton = $("#send-password-button");

  newPasswordButton.click(function () {
    if (validateNewPassword(inputNewPassword, inputConfirmPassword)) {
      sendNewPassword(inputNewPassword, inputConfirmPassword);
      return true;
    } else {
      return false;
    }
  });

  /* FUNCION DEGRADADO - SOLIDO SCROLLBAR*/

  const documentHtml = $(document);
  const navbar = document.querySelector(".menu");
  const navbarWhiteElement = document.querySelector(".navbar-white");
  const parallaxWrapper = $(".wrapper");
  gradientMenu(navbar, documentHtml);
  navbarWhite(navbarWhiteElement, documentHtml);

  /* END FUNCION DEGRADADO - SOLIDO SCROLLBAR*/

  var rellax = new Rellax(".rellax");

  $("#selectYear").click(function () {
    if ($(this).is(":checked")) {
      $("#selectPais").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectDay").prop("checked", false);
    }
  });

  $("#selectPais").click(function () {
    if ($(this).is(":checked")) {
      $("#selectYear").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectDay").prop("checked", false);
    }
  });

  $("#selectDay").click(function () {
    if ($(this).is(":checked")) {
      $("#selectPais").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectYear").prop("checked", false);
    }
  });

  $("#selectMonth").click(function () {
    if ($(this).is(":checked")) {
      $("#selectPais").prop("checked", false);
      $("#selectYear").prop("checked", false);
      $("#selectDay").prop("checked", false);
    }
  });

  createCinemaHomeSlider();
  /* Metakeys */
  getMetaKeys();
  /*End Metakeys */

  var section_slider = $(".section-slider")
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

  var vision_slider = $(".vision-slider").slick({
    slidesToShow: 4,
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
    ],
  });

  var imperdibles_slider = $(".imperdibles-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: false,
    infinite: true,
    arrows: false,
    dots: true,
  });

  /*var header_slider = $(".header-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    centerMode: false,
    arrows: false,
  });*/

  var claro_slider = $(".claro-header-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    centerMode: false,
    arrows: false,
  });

  var tv_slider = $(".tv-slider").slick({
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

  /*Programación General Canal Claro */
  let containerSlider = $("#claro-canal-programing");
  let slider = new Slider();
  slider.createDaysSlider("claro", containerSlider);

  /*Programación Concert Channel */
  let containerSliderConcert = $("#concert-channel-programing");
  slider.createDaysSlider("concert", containerSliderConcert);

  /*Programación Claro Cinema */
  let containerSliderCinema = $("#claro-cinema-programing");
  slider.createDaysSlider("cinema", containerSliderCinema);

  /*Programación Nuestra Visión */
  let containerSliderVision = $("#nuestra-vision-programing");
  slider.createDaysSlider("vision", containerSliderVision);

  /*Programación Claro Sports */
  let containerSliderSports = $("#claro-sports-programing");
  slider.createDaysSlider("sports", containerSliderSports);

  createProgramacionSlider();

  let date = new Date();
  let day = date.getDate();
  let month = date.getMonth();
  let year = date.getFullYear();
  let hour = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();
  let currentDate = "2020-2-8";
  let currentTime = `${hour}:${minutes}`;
  getPrograms(currentDate, getNameCountry(sessionSrc));
  /*menu responsive*/
  const invisible_button = document.querySelector(".invisible-button");
  const tache_button = document.querySelector(".tache_button");
  const menu = document.querySelector(".menu-responsive");
  const menu_categorias = document.querySelector(".categorias-flecha");
  const hamburguer = document.querySelector(".hamburguer-menu");
  const categorias = $(".categorias-menu");
  const body = $("body");
  const html = $("html");
  const sidebar_content = document.querySelector(".sidebar-content");
  const menuTablet = $(".menu-responsive-tablet");

  menuTablet.click(function () {
    hamburguer.style.transform = "translate(0%)";
    invisible_button.style.width = "2000px";
    invisible_button.style.left = "100%";
    invisible_button.style.background = "black";
    html.css({
      position: "relative",
      overflow: "hidden",
      height: "100%",
    });
    body.css({
      position: "fixed",
      overflow: "hidden",
      height: "100%",
      width: "100%",
    });
    sidebar_content.style.overflow = "auto";
    sidebar_content.style.height = "100%";
  });

  if (menu) {
    menu.addEventListener("click", function (e) {
      hamburguer.style.transform = "translate(0%)";
      invisible_button.style.width = "2000px";
      invisible_button.style.left = "100%";
      invisible_button.style.background = "black";
      html.css({
        position: "relative",
        overflow: "hidden",
        height: "100%",
      });
      body.css({
        position: "fixed",
        overflow: "hidden",
        height: "100%",
        width: "100%",
      });
      sidebar_content.style.overflowY = "scroll";
      sidebar_content.style.height = "70%";
    });
  }

  if (invisible_button) {
    invisible_button.addEventListener("click", function () {
      hamburguer.style.transform = "translate(-100%)";
      invisible_button.style.width = "0px";
      invisible_button.style.left = "0%";
      invisible_button.style.background = "black";
      html.css({
        position: "static",
        overflow: "visible",
        height: "100%",
      });
      body.css({
        position: "static",
        overflow: "visible",
        height: "100%",
        width: "auto",
      });
      sidebar_content.style.overflowY = "hidden";
      sidebar_content.style.height = "0%";
    });
  }
  if (menu_categorias) {
    menu_categorias.addEventListener("click", function (e) {
      categorias.css({
        zIndex: "10",
        opacity: "1",
      });
      html.css({
        position: "relative",
        overflow: "hidden",
        height: "100%",
      });
      body.css({
        position: "fixed",
        overflow: "hidden",
        height: "100%",
        width: "100%",
      });
      sidebar_content.style.overflow = "auto";
      sidebar_content.style.height = "100%";
    });

    tache_button.addEventListener("click", function () {
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
  }

  const video_home = document.querySelector(".circle-video");

  $("body").index(navbar);

  /***  Slider "Ahora en TV"  ****/
  const tvClaroSlider = $("#tv-claro-slider");
  tvConcertSlider = $("#tv-concert-slider");
  const tvCinemaSlider = $("#tv-cinema-slider");
  const tvVisionSlider = $("#tv-vision-slider");
  const tvSportsSlider = $("#tv-sports-slider");
  const programacionSlider = $(".programacion-slider");
  const proClaroSlider = $("#pro-claro-slider");
  const tvSlider = $(".tv-slider");

  $(".tv-content").hide();
  $(".tv-content:first").show();

  $("ul.tv-list li").click(function () {
    $("ul.tv-list li").removeClass("active-navItem");
    $(this).addClass("active-navItem");
    $(".tv-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    tvSlider.slick("refresh");

    programacion_slider.slick("refresh");
    addFavorites();
    recreateClickCalendar();
    createClickThumbnails();
  });

  $("ul.lista-avatar li").click(function () {
    $("ul.lista-avatar li").removeClass("active-navAvatar");
    $(this).addClass("active-navAvatar");
    $(".tv-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    if (activeNav == "concert-channel") {
      tvConcertSlider.slick("refresh");
    } else if (activeNav == "claro-canal") {
      tvClaroSlider.slick("refresh");
    } else if (activeNav == "claro-cinema") {
      tvCinemaSlider.slick("refresh");
    } else if (activeNav == "nuestra-vision") {
      tvVisionSlider.slick("refresh");
    } else if (activeNav == "claro-sports") {
      tvSportsSlider.slick("refresh");
    }
    programacion_slider.slick("refresh");

    recreateClickCalendar();
  });

  $(".pro-content").hide();
  $(".pro-content:first").show();

  $("ul.pro-list li").on("click", function () {
    $("ul.pro-list li").removeClass("active-proItem");
    $(this).addClass("active-proItem");
    $(".pro-content").hide();

    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    if (activeNav == "pro-concert-channel") {
    } else if (activeNav == "pro-claro-canal") {
    } else if (activeNav == "pro-claro-cinema") {
    } else if (activeNav == "pro-nuestra-vision") {
    } else if (activeNav == "pro-claro-sports") {
    }
  });

  var slides = document.querySelectorAll("#claro-canal .slick-slide");
  var myTag = document.querySelectorAll(".a-poster-text-white");

  /*** Fin Slider "Ahora en TV"  ***/

  /*Dropdown de la página sinópsis.php */

  const dropdownCountry = document.getElementsByClassName(
    "dropdownCountry-content"
  );

  var numCountries = document.getElementsByClassName("dropdownCountry-content")
    .length;
  var i;
  for (i = 0; i < numCountries; i++) {
    dropdownCountry[i].addEventListener("click", function () {
      var dropdownContent = this.nextElementSibling;
      //dropdownContent.classList.toggle("dropdown-active");
      var currentArrow = $(this).children(".dropdownCountry-icon");

      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        currentArrow.css("transform", "rotate(0deg)");
      } else {
        dropdownContent.style.display = "block";
        //dropdownContent.style.animation = "down 0.5s";
        currentArrow.css("transform", "rotate(-180deg)");
      }
    });
  }

  /*** Dropdown del menú ***/
  /*const dropdown = document.getElementsByClassName("sidebar-dropdown");
  console.log(dropdown);

  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("dropdown-active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.animation = "hide-dropdown 0.5s";
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
        dropdownContent.style.animation = "active-dropdown 0.5s";
      }
    });
  }*/

  /*** Fin Dropdown del menú ***/

  recreateClickCalendar();
});

function createCinemaHomeSlider() {
  $(".cinema-home-slider").slick({
    slidesToShow: 1,
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

function createProgramacionSlider() {
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

$(".programing-item").click(function () {
  var activeNav = $(this).attr("rel");
  let stringLength = activeNav.length;
  let month = activeNav.charAt(stringLength - 1);

  $(".month").text(`${getMonthAndYear(month)}`);
});

function createTvSlider() {
  var tv_slider = $(".tv-slider").slick({
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

function recreateClickCalendar() {
  $("ul.claro-calendar .claro-item").click(function () {
    $("ul.claro-calendar .claro-item").removeClass("claro-active");
    $(this).addClass("claro-active");
    $(".claro-content").hide();
    var activeNav = $(this).attr("rel");
    let stringLength = activeNav.length;
    let month = activeNav.charAt(stringLength - 1);

    $(".month").text(`${getMonthAndYear(month)}`);
    $("#" + activeNav).fadeIn();
  });
  $(".claro-content").hide();
  $(".claro-content:first").show();
  $(".concert-content").hide();
  $(".concert-content:first").show();

  $("ul.concert-calendar .concert-item").click(function () {
    $("ul.concert-calendar .concert-item").removeClass("concert-active");
    $(this).addClass("concert-active");
    $(".concert-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    let stringLength = activeNav.length;
    let month = activeNav.charAt(stringLength - 1);

    $(".month").text(`${getMonthAndYear(month)}`);
  });

  $(".cinema-content").hide();
  $(".cinema-content:first").show();

  $("ul.cinema-calendar .cinema-item").click(function () {
    $("ul.cinema-calendar .cinema-item").removeClass("cinema-active");
    $(this).addClass("cinema-active");
    $(".cinema-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    let stringLength = activeNav.length;
    let month = activeNav.charAt(stringLength - 1);

    $(".month").text(`${getMonthAndYear(month)}`);
  });

  $(".vision-content").hide();
  $(".vision-content:first").show();

  $("ul.vision-calendar .vision-item").click(function () {
    $("ul.vision-calendar .vision-item").removeClass("vision-active");
    $(this).addClass("vision-active");
    $(".vision-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    let stringLength = activeNav.length;
    let month = activeNav.charAt(stringLength - 1);

    $(".month").text(`${getMonthAndYear(month)}`);
  });

  $(".sports-content").hide();
  $(".sports-content:first").show();

  $("ul.sports-calendar .sports-item").click(function () {
    $("ul.sports-calendar .sports-item").removeClass("sports-active");
    $(this).addClass("sports-active");
    $(".sports-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    let stringLength = activeNav.length;
    let month = activeNav.charAt(stringLength - 1);

    $(".month").text(`${getMonthAndYear(month)}`);
  });
}

function resizedw() {
  $(".programacion-slider#pro-claro-slider").slick("refresh");
  $(".programacion-slider#pro-concert-slider").slick("refresh");
  $(".programacion-slider#pro-cinema-slider").slick("refresh");
  $(".programacion-slider#pro-vision-slider").slick("refresh");
  $(".programacion-slider#pro-sports-slider").slick("refresh");

  recreateClickCalendar();
  addFavorites();
}

var doit;
window.onresize = function () {
  clearTimeout(doit);
  doit = setTimeout(resizedw, 100);
};
