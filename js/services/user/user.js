function validateTokenPassword(tokenPassword) {
  $.ajax({
    type: "GET",
    data: tokenPassword,
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_verify",
    success: function(result) {
      console.log("succes", result);
      if (result.data) {
        let user_id = $("#user_id");
        user_id.attr("value", result.data.user_id);
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/form-password.php";
      }
    }
  });
}

function sendUserEmail(inputEmail) {
  let email = inputEmail.val();

  let emailUser = {
    email: email
  };

  $.ajax({
    type: "POST",
    data: emailUser,
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_send",
    success: function(result) {
      console.log("succes", result);
      if (result.data) {
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/email-sent.php";
      }
    }
  });
}

function sendNewPassword(inputPassword, secondInputPassword) {
  let newPassowrd = inputPassword.val();
  let confirmedNewPassowrd = secondInputPassword.val();
  let user_id = $("#user_id").val();
  let url = location.href;
  let arrayUrl = url.split("?");
  let token = arrayUrl[1];

  let info_user = {
    token: token,
    password: newPassowrd,
    confirm: confirmedNewPassowrd
  };

  $.ajax({
    type: "POST",
    data: info_user,
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_password",
    success: function(result) {
      console.log("succes", result);
      if (result.code == 200) {
        console.log("succes", result);
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/success-password.php";
      }
    }
  });
}

function signIn(email, password) {
  $.ajax({
    type: "GET",
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/login/" +
      email +
      "&" +
      password +
      "",

    success: function(result) {
      if (result.data) {
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/home.php";
        localStorage.setItem("session", 1);
        localStorage.setItem("name", result.data.name);
        console.log(result);
      } else {
        $(".data-incorrect")
          .text(
            "Tu correo o contraseña no coinciden. Por favor verifica de nuevo"
          )
          .addClass("invalid-email");
      }
    }
  });
}

function signOut() {
  location.reload();
  localStorage.removeItem("name");
  localStorage.setItem("session", 0);
}

function updateDataUser(gender, date, country) {
  let dataUser = {
    function: "updateDataUser",
    gender: gender,
    date: date,
    country: country
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      location.reload();
      let json = JSON.parse(result);
      localStorage.setItem("gender", json.data.gender);
      localStorage.setItem("date", json.data.date);
      localStorage.setItem("country", json.data.country);
    }
  });
}

export {
  sendUserEmail,
  validateTokenPassword,
  sendNewPassword,
  signIn,
  signOut
};
