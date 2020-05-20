import { previewPage } from "./preview/prev.js";
import { showContentNav } from "./nav/nav.js";
import { ShowHidePassword } from "./form/form.js";
import { validateEmail } from "./form/form.js";
import { validateNewPassword } from "./form/form.js";
import { validateKeyUpEmail } from "./form/form.js";
import { validatePassword } from "./form/form.js";
import { validateUser } from "./form/form.js";
import { validateToken } from "./form/form.js";

/* Service User */

import { signIn } from "./services/user.js";

$(document).ready(function () {
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
