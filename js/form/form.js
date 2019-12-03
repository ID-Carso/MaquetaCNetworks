function ShowHidePassword(iconPassword) {
  let password = iconPassword.previousElementSibling;
  console.log(password);
  if (password.type == "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}

export { ShowHidePassword };
