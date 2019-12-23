function ShowHidePassword(iconPassword) {
  let password = iconPassword.previousElementSibling;
  if (password.type == "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}

function validateReEmail(inputEmail) {
  let email = inputEmail.val();
  let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  let warningEmail = $(".correo-valido");
  let imageError = $(".error");

  if (email.length == 0) {
    warningEmail
      .addClass("invalid-email")
      .text("Debes ingresar un correo electrónico");
    return false;
  } else if (!filter.test(email)) {
    warningEmail
      .addClass("invalid-email")
      .text("El correo electrónico no es correcto");
    console.log("error");
    return false;
  } else {
    return true;
  }
}

function validateNewPassword(inputPassword, inputPasswordConfirm) {
  let password = inputPassword.val();
  let passwordConfirm = inputPasswordConfirm.val();
  let warningPassword = $("#error-new-password");
  let warningPasswordConfirm = $("#error-password-confirm");
  if (password.length == 0) {
    warningPassword
      .addClass("invalid-email")
      .text("Debes ingresar una nueva contraseña");
    return false;
  } else if (password.length < 8) {
    warningPassword
      .addClass("invalid-email")
      .text("La contraseña debe tener mínimo 8 caracteres");
    return false;
  } else if (passwordConfirm == 0) {
    warningPasswordConfirm
      .addClass("invalid-email")
      .text("Debes ingresar de nuevo la contraseña");
    return false;
  } else if (password !== passwordConfirm) {
    warningPasswordConfirm
      .addClass("invalid-email")
      .text("Las contraseñas deben de coincidir");
    console.log("Sigo aquí");

    return false;
  } else {
    return true;
  }
}

export { ShowHidePassword, validateReEmail, validateNewPassword };
