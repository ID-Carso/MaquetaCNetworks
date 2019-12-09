function ShowHidePassword(iconPassword) {
  let password = iconPassword.previousElementSibling;
  if (password.type == "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}

export { ShowHidePassword };
