import { previewPage } from "./preview/prev.js";
import { showContentNav } from "./nav/nav.js";

//UI
import {
  showPageUsersBO,
  showUserBO,
  showFormCreateUser,
  deleteUserUI,
  showPageUsersFront,
} from "./UI/UI.js";

//Validations
import {
  validateNewPassword,
  validateKeyUpEmail,
  validatePassword,
  validateEmail,
  ShowHidePassword,
} from "./form/form.js";

// import { validateUser } from "./form/form.js";
// import { validateToken } from "./form/form.js";

/* Service User
 */
import {
  signIn,
  signOut,
  registerUser,
  getAllUsersBO,
  getAllUserFront,
} from "./services/user.js";

$(document).ready(function () {
  /* GET ALL USERS FRONT */
  getAllUserFront();

  /* GET ALL USERS BACKOFFICE */
  getAllUsersBO();

  //GET USER BACKOFFICE
  showUserBO();

  /* LOGIN */
  $("#button-login").click(function () {
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
      console.log("errro");
      return false;
    }
  });

  /* SIGNOUT */
  $("#signout-button").click(function () {
    signOut();
  });

  /*REGISTER NEW USER*/
  $(".register-user-button").click(function () {
    let rol = $(".btn-rol-select").attr("id_rol");
    let email = $("#email-user-bo").val();
    let username = $("#name-user-bo").val();
    let password = $("#password-user-bo").val();
    registerUser(username, email, password, rol);
  });

  /* DELETE USER */

  /* 2.- UI  */
  $(".btn-nav").click(function () {
    let rel = $(this).attr("rel");
    console.log(rel);
  });

  /* Show the form to create a new user */
  showFormCreateUser();

  $(".admin-users-section").click(function () {
    showPageUsersBO();
  });

  /* SHOW VIEW USERS FRONT */
  $(".admin-users-front-section").click(function () {
    showPageUsersFront();
  });

  /* Previsualizar contenido en diferentes tamaños */
  const prevImage = $(".a-prev-image");

  prevImage.click(function () {
    let prevContainer = $("iframe");
    previewPage($(this), prevContainer);
  });

  /* Nav de administrador */
  let adminNavItem = $(".admin-item-nav");
  let adminContent = $(".admin-content");
  let activeClass = "active-admin-nav";

  adminContent.hide();
  $(".admin-content:first").show();

  adminNavItem.click(function () {
    showContentNav(adminContent, $(this), adminNavItem, activeClass);
  });
  /* End Navigation*/
  /* END UI */

  /*login*/
  const inputPassword1 = $("#signup-password");
  const caracteresMin1 = $(".caracteres-min");
  const listo1 = $(".listo");
  inputPassword1.keyup(function () {
    if (inputPassword1.val().length < 8 && inputPassword1.val().length >= 1) {
      caracteresMin1.css("color", "red");
      listo1.css("display", "inline-block");
      listo1.attr("src", "../images/registro/alerta.svg");
    } else if (inputPassword1.val().length == 0) {
      caracteresMin1.css("color", "#666262");
      listo1.css("display", "none");
    } else {
      caracteresMin1.css("color", "green");
      listo1.css("display", "inline-block");
      listo1.attr("src", "../images/registro/listo.svg");
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
  var iconPassword = document.querySelectorAll(".icon-eye");
  var iconLength = iconPassword.length;

  if (iconPassword !== null) {
    for (let i = 0; i < iconLength; i++) {
      iconPassword[i].addEventListener("click", function () {
        ShowHidePassword(this);
      });
    }
  }
});
/**para la seleccion de paises */
$(document).on("click", function (e) {
  let container = $("#drop-paises, .cuadro-fecha");
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    $("#selectPais").prop("checked", false);
    $("#selectDay").prop("checked", false);
    $("#selectMonth").prop("checked", false);
    $("#selectYear").prop("checked", false);
  }
});
