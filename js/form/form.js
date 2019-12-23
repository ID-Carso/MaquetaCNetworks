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

export { ShowHidePassword, validateReEmail };
