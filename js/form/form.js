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
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  let warningEmail = $(".correo-valido");

  if (email.length == 0) {
    warningEmail.addClass("invalid-email");
    return false;
  } else if (!filter.test(email)) {
    warningEmail.addClass("invalid-email");
  }
}

export { ShowHidePassword, validateReEmail };
