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
        let session = localStorage.setItem("session", 1);
        let id = localStorage.setItem("id", result.data.id);
        let name = localStorage.setItem("name", result.data.name);
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
      console.log(result);
      if (result.data) {
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/home.php";
        localStorage.setItem("session", 1);
        localStorage.setItem("id", result.data.id);
        localStorage.setItem("name", result.data.name);
        console.log(result);
      } else {
        $(".data-incorrect")
          .text(
            "Tu correo o contraseña no coinciden. Por favor, verifica de nuevo"
          )
          .addClass("invalid-email");
      }
    }
  });
}

function signOut() {
  location.reload();
  localStorage.clear();
}

function updateDataUser(id, gender, date, country) {
  let dataUser = {
    function: "updateDataUser",
    id: id,
    gender: gender,
    date: date,
    country: country
  };

  console.log(dataUser);
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      let json = JSON.parse(result);
      console.log(json);
      let gender = localStorage.setItem("gender", json.data.gender);
      let date = json.data.birthday.split("-");
      let day = localStorage.setItem("day", date[2]);
      let month = localStorage.setItem("month", date[1]);
      let year = localStorage.setItem("year", date[0]);
      let birthday = localStorage.setItem("date", json.data.birthday);
      let country = localStorage.setItem("country", json.data.country);

      let modal = $("#mensaje");
      modal.modal("show");
    }
  });
}

function sendEmail(id) {
  let dataUser = {
    function: "sendEmail",
    id: id
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      console.log(result);
      console.log("email enviado");
    }
  });
}

function selectAvatar(id, src) {
  let dataUser = {
    function: "selectAvatar",
    id: id,
    avatar: src
  };

  console.log(src);

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      let json = JSON.parse(result);
      console.log(dataUser);
      localStorage.setItem("avatar", json.data.avatar);
      $("#image-user-container").html(`
      <div class="image-user">
        <img src="${json.data.avatar}" />
      </div>
      `);
      let modal = $("#mensaje");
      modal.modal("show");
    }
  });
}

function registerUser(inputName, inputEmail, inputPassword) {
  let name = inputName.val();
  let email = inputEmail.val();
  let password = inputPassword.val();

  let user = {
    function: "registerUser",
    name: name,
    email: email,
    password: password
  };

  $.ajax({
    type: "POST",
    data: user,
    url: "../../adapters/user.php",
    success: function(result) {
      let json = JSON.parse(result);
      let modal = $("#mensaje");
      console.log(json.data.id);
      modal.modal("show");
      sendEmail(json.data.id);
    }
  });
}

function updateAlerts(configJson) {
  let dataUser = {
    function: "updateAlerts",
    data: configJson
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      console.log(result);
      let modal = $("#mensaje");
      modal.modal("show");
    }
  });
}

export {
  sendUserEmail,
  validateTokenPassword,
  sendNewPassword,
  signIn,
  signOut,
  updateDataUser,
  selectAvatar,
  registerUser,
  updateAlerts
};
