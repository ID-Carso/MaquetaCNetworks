function validateTokenPassword(tokenPassword) {
  $.ajax({
    type: "GET",
    data: tokenPassword,
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_verify",
    success: function(result) {
      if (result.data) {
        console.log(result.data);
        let user_id = $("#user_id");
        localStorage.setItem("session", 1);
        localStorage.setItem("id", result.data.id);
        localStorage.setItem("name", result.data.name);
        localStorage.setItem("avatar", result.data.avatar);
        user_id.attr("value", result.data.user_id);
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/form-password.php";
      }
    }
  });
}

function showNotification() {
  let id = localStorage.getItem("id");
  let alert = $(".alert-user");

  setInterval(function() {
    let alert = $(".alert-user");
    let date = new Date();
    let day = date.getDate();
    let month = date.getMonth();
    let year = date.getFullYear();
    let hour = date.getHours();
    //let minutes = date.getMinutes();
    let minutes = 30;
    let seconds = date.getSeconds();
    let currentTime = `${hour}:${minutes}`;
    let currentDate = `${year}-${month}-${day}`;

    let dataUser = {
      function: "showNotificaction",
      id: id,
      currentTime: currentTime,
      currentDate: currentDate
    };

    if (minutes == 0 || minutes == 15 || minutes == 30 || minutes == 45) {
      $.ajax({
        type: "POST",
        data: dataUser,
        url: "../../adapters/user.php",
        success: function(result) {
          let json = JSON.parse(result);

          if (json.code == 200) {
            let name = localStorage.getItem("name");
            let length = json.data.length;
            let alertProgram = "";
            for (let i = 0; i < length; i++) {
              alertProgram += `
              <div class="p-3">
              <img src="./images/notifications/close-notification.svg" class="close-notification"/>
                <div class="d-flex align-items-center">
                  <img class="alert-image" src="${json.data[i].image}" />
                  <p class="text-regular alert-user-text pl-3">
                    ${name}: <br />
                    <span class="text-semibold alert-user-text">${json.data[i].title}</span> está por comenzar<br />
                    ¡No te lo pierdas!    
                  </p>
                </div>
              </div>`;
            }
            alert.html(alertProgram);
            if (screen.width >= 320 && screen.width < 768) {
              alert
                .css("transform", "translate(50%, 0%)")
                .css("animation", "showAlertMobile 8s");

              setTimeout(function() {
                alert.css("animation", "none");
              }, 8000);
            } else if (screen.width > 767) {
              alert.css("animation", "showAlert 8s");

              setTimeout(function() {
                alert.css("animation", "none");
              }, 8000);
            }

            $(window).resize(function() {
              if (screen.width >= 320 && screen.width < 768) {
                alert
                  .css("transform", "translate(50%, 0%)")
                  .css("animation", "showAlertMobile 8s");

                setTimeout(function() {
                  alert.css("animation", "none");
                }, 8000);
              } else if (screen.width > 767) {
                alert.css("animation", "showAlert 8s");
                setTimeout(function() {
                  alert.css("animation", "none");
                }, 8000);
              }
            });

            $(".close-notification").click(function() {
              alert.css("animation", "none");
            });
          }
        }
      });
    }
  }, 8000);
}

function hideNotification() {
  let alert = $(".alert-user");
  alert.css("animation", "hideAlert");
}

function sendUserEmail(inputEmail) {
  let email = inputEmail.val();

  let emailUser = {
    email: email
  };

  $.ajax({
    type: "POST",
    data: emailUser,
    beforeSend: function() {
      const loader = `
      <div class="loader">
        <img src="./images/General/loader.gif" class="loader-img" alt="">
      </div>
      `;
      let formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_send",
    success: function(result) {
      if (result.data) {
        location.href = "./email-sent.php";
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
    beforeSend: function() {
      const loader = `
      <div class="loader">
        <img src="./images/General/loader.gif" class="loader-img" alt="">
      </div>
      `;
      let formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_password",
    success: function(result) {
      console.log(result);
      if (result.code == 200) {
        location.href = "./success-password.php";
      }
    }
  });
}

function signIn(email, password) {
  let dataUser = {
    function: "signIn",
    email: email,
    password: password
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    beforeSend: function() {
      const loader = `
      <div class="loader">
        <img src="./images/General/loader.gif" class="loader-img" alt="">
      </div>
      `;
      let formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    success: function(result) {
      let json = JSON.parse(result);
      console.log(json);
      if (json.data) {
        location.href = "./home.php";

        localStorage.setItem("session", 1);

        localStorage.setItem("id", json.data.id);
        localStorage.setItem("name", json.data.name);
        localStorage.setItem("avatar", json.data.avatar);
        localStorage.setItem("gender", json.data.avatar);
        localStorage.setItem("birthday", json.data.avatar);
        localStorage.setItem("src", json.data.country.image);
        if (json.data.birthday) {
          let date = json.data.birthday.split("-");
          localStorage.setItem("day", date[2]);
          localStorage.setItem("month", date[1]);
          localStorage.setItem("year", date[0]);
        }

        localStorage.setItem("alertBeginning", json.data.config.beginning);
        localStorage.setItem("alertMinutes", json.data.config.minutes);
        localStorage.setItem("alertEmail", json.data.config.email);
        localStorage.setItem("alertWeb", json.data.config.web);
        let sections = json.data.favorites;
        sections.forEach(section => {
          if (section.id_section == 1) {
            localStorage.setItem(
              "favoritesCanalClaro",
              JSON.stringify(section.programs)
            );
          } else if (section.id_section == 2) {
            localStorage.setItem(
              "favoritesConcertChannel",
              JSON.stringify(section.programs)
            );
          } else if (section.id_section == 3) {
            localStorage.setItem(
              "favoritesClaroCinema",
              JSON.stringify(section.programs)
            );
          }
        });
      } else {
        let loader = $(".loader");
        loader.remove();
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
  location.href = "/home.php";
  localStorage.removeItem("date");
  localStorage.removeItem("day");
  localStorage.removeItem("month");
  localStorage.removeItem("gender");
  localStorage.removeItem("session");
  localStorage.removeItem("avatar");
  localStorage.removeItem("id");
  localStorage.removeItem("country");
  localStorage.removeItem("name");
  localStorage.removeItem("birthday");
  localStorage.removeItem("year");
  localStorage.removeItem("favoritesCanalClaro");
  localStorage.removeItem("favoritesConcertChannel");
  localStorage.removeItem("favoritesClaroCinema");
}

function updateDataUser(id, gender, date, country) {
  let dataUser = {
    function: "updateDataUser",
    id: id,
    gender: gender,
    date: date,
    country: country
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      let json = JSON.parse(result);

      let gender = localStorage.setItem("gender", json.data.gender);
      let date = json.data.birthday.split("-");
      let day = localStorage.setItem("day", date[2]);
      let month = localStorage.setItem("month", date[1]);
      let year = localStorage.setItem("year", date[0]);
      let birthday = localStorage.setItem("date", json.data.birthday);
      let country = localStorage.setItem("country", json.data.country.name);
      let src = localStorage.setItem("src", json.data.country.image);
      let modal = $("#mensaje");
      modal.modal("show");
      $(".login-country").prop("src", json.data.country.image);
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

function selectAvatar(id, src, idAvatar) {
  let dataUser = {
    function: "selectAvatar",
    id: id,
    avatar: src
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      let json = JSON.parse(result);
      if (json.code == 200) {
        localStorage.setItem("idAvatar", idAvatar);
        console.log(json);
        localStorage.setItem("avatar", json.data.avatar);
        $(".image-user-container").html(`
        <div class="image-user">
          <img src="${json.data.avatar}" />
        </div>
        `);
        let modal = $("#mensaje");
        modal.modal("show");
      }
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
    beforeSend: function() {
      const loader = `
      <div class="loader">
        <img src="./images/General/loader.gif" class="loader-img" alt="">
      </div>
      `;
      let formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    success: function(result) {
      let json = JSON.parse(result);
      console.log(json);
      let loader = $(".loader");

      if (json.code == 201) {
        let modal = $("#mensaje");
        modal.modal("show");
        sendEmail(json.data.id);
        loader.remove();
      } else {
        if (json.code == 422) {
          $(".data-incorrect")
            .text("El email que ingresaste ya está registrado")
            .addClass("invalid-email");
          loader.remove();
        }
      }
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
      let json = JSON.parse(result);
      console.log(json);
      if (json.code == 200) {
        let modal = $("#mensaje");
        modal.modal("show");
        let alertBeginning = localStorage.setItem(
          "alertBeginning",
          json.data.beginning
        );
        let alertWeb = localStorage.setItem("alertWeb", json.data.web);
        let alertEmail = localStorage.setItem("alertEmail", json.data.email);
        let alertMinutes = localStorage.setItem(
          "alertMinutes",
          json.data.minutes
        );

        /*let inputAlertMinutes = $("#alert-minutes-before");
        let inputAlertBeginning = $("#alert-start");
        let inputAlertWeb = $("#alert-web");
        let inputAlertEmail = $("#alert-email");
        let inputAlertsOff = $("#alerts-off");

        if (
          json.data.minutes == 0 &&
          json.data.beginning == 0 &&
          json.data.web == 0 &&
          json.data.email == 0
        ) {
          inputAlertsOff.prop("checked", true);
        } else {
          inputAlertsOff.prop("checked", false);
          if (json.data.minutes == 30) {
            inputAlertMinutes.prop("checked", true);
          } else {
            inputAlertMinutes.prop("checked", false);
          }

          if (json.data.beginning == 1) {
            inputAlertBeginning.prop("checked", true);
          } else {
            inputAlertBeginning.prop("checked", false);
          }

          if (json.data.web == 1) {
            inputAlertWeb.prop("checked", true);
          } else {
            inputAlertWeb.prop("checked", false);
          }

          if (json.data.email == 1) {
            inputAlertEmail.prop("checked", true);
          } else {
            inputAlertEmail.prop("checked", false);
          }
        }*/
      }
    }
  });
}

function addFavorites() {
  $(".poster-button, .programing-button").click(function() {
    let session = localStorage.getItem("session");
    if (session != 1) {
      let modal = $(".modal-favorites");
      modal.modal("show");
    } else {
      if ($(this).hasClass("remove-program")) {
        let id = localStorage.getItem("id");
        let programId = $(this).attr("_id");
        removeFavorites(id, programId, $(this), null);
        return true;
      } else if ($(this).hasClass("add-favorites")) {
        let heartIcon = $(this).children(".poster-add");
        let heartIconGray = $(this).find("path");
        let addButton = $(this);
        let buttonFavorite = $(this);
        let id_program = $(this).attr("_id");
        let id_user = localStorage.getItem("id");
        let dataUser = {
          function: "addFavorites",
          user_id: id_user,
          program_id: id_program
        };

        $.ajax({
          type: "POST",
          data: dataUser,
          url: "../../adapters/user.php",
          success: function(result) {
            let json = JSON.parse(result);
            console.log(json);
            if (json.code == 200) {
              let sections = json.data;
              buttonFavorite.removeClass("add-favorites");
              buttonFavorite.addClass("remove-program");
              if (heartIcon) {
                heartIcon.attr("src", "./images/posters/heart-icon-white.svg");
              }

              if (heartIconGray) {
                addButton.prop("title", "Eliminar de mi lista");
                heartIconGray.addClass("heart-gray-filled");
                heartIconGray.removeClass("heart-gray");
              }

              sections.forEach(section => {
                if (section.id_section == 1) {
                  localStorage.setItem(
                    "favoritesCanalClaro",
                    JSON.stringify(section.programs)
                  );
                } else if (section.id_section == 2) {
                  localStorage.setItem(
                    "favoritesConcertChannel",
                    JSON.stringify(section.programs)
                  );
                } else if (section.id_section == 3) {
                  localStorage.setItem(
                    "favoritesClaroCinema",
                    JSON.stringify(section.programs)
                  );
                }
              });
            }
          }
        });
        return true;
      }
    }
  });
}

function removeFavorites(user_id, program_id, removeButton, itemList) {
  let heartIcon = removeButton.children(".poster-add");
  let heartIconGray = removeButton.find("path");
  let dataUser = {
    function: "removeFavorites",
    user_id: user_id,
    program_id: program_id
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      let json = JSON.parse(result);
      console.log(json);
      let sections = json.data;
      if (itemList) {
        itemList.remove();
      }

      if (removeButton) {
        removeButton.removeClass("remove-program");
        removeButton.addClass("add-favorites");

        heartIcon.attr("src", "./images/posters/heart-outline.svg");
        if (heartIconGray) {
          removeButton.attr("title", "Agregar a mi lista");
          heartIconGray.removeClass("heart-gray-filled");
          heartIconGray.addClass("heart-gray");
        }
      }

      if (sections !== null) {
        sections.forEach(section => {
          if (section.id_section == 1) {
            localStorage.setItem(
              "favoritesCanalClaro",
              JSON.stringify(section.programs)
            );
          } else if (section.id_section == 2) {
            localStorage.setItem(
              "favoritesConcertChannel",
              JSON.stringify(section.programs)
            );
          } else if (section.id_section == 3) {
            localStorage.setItem(
              "favoritesClaroCinema",
              JSON.stringify(section.programs)
            );
          }
        });
      }

      let favoritesCanalClaro = JSON.parse(
        localStorage.getItem("favoritesCanalClaro")
      );
      let favoritesConcertChannel = JSON.parse(
        localStorage.getItem("favoritesConcertChannel")
      );
      let favoritesClaroCinema = JSON.parse(
        localStorage.getItem("favoritesClaroCinema")
      );

      if (favoritesCanalClaro.length == 0) {
        $(".claro-list").remove();
      }
      if (favoritesConcertChannel.length == 0) {
        $(".concert-list ").remove();
      }
      if (favoritesClaroCinema.length == 0) {
        $(".cinema-list").remove();
      }

      if (
        favoritesClaroCinema.length == 0 &&
        favoritesCanalClaro.length == 0 &&
        favoritesConcertChannel.length == 0
      ) {
        let listFavorites = $(".mi-lista-container");
        let myFavorites = `
        <div class="text-center mt-5 pt-md-4 mt-xl-5">
         <img src="./images/mi-lista/favorites.svg" alt="" class="no-favorites-img">
         </div>
        <div class="no-gutters mt-4 mt-xl-5 pt-xl-5">
          <div class="col-12">
              <p class="a-text-warm-grey-bold mb-3 text-center no-favorites-title mb-xl-4">No tienes favoritos guardados todavía</p>
              <p class="a-text-warm-grey-regular text-center no-favorites-subtitle">Explora y descubre más</p>
          </div>
        </div>

            `;
        listFavorites.append(myFavorites);
      }
    }
  });
  return true;
}

function updateAlertProgram(user_id, program_id, active) {
  let dataUser;
  console.log(active);
  if (active == true) {
    dataUser = {
      function: "enableNotification",
      user_id: user_id,
      program_id: program_id
    };
  } else {
    dataUser = {
      function: "disableNotification",
      user_id: user_id,
      program_id: program_id
    };
  }

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function(result) {
      let json = JSON.parse(result);
      console.log(json);
      if (json.code == 200) {
        let sections = json.data;
        sections.forEach(section => {
          if (section.id_section == 1) {
            localStorage.setItem(
              "favoritesCanalClaro",
              JSON.stringify(section.programs)
            );
          } else if (section.id_section == 2) {
            localStorage.setItem(
              "favoritesConcertChannel",
              JSON.stringify(section.programs)
            );
          } else if (section.id_section == 3) {
            localStorage.setItem(
              "favoritesClaroCinema",
              JSON.stringify(section.programs)
            );
          }
        });
      }
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
  updateAlerts,
  addFavorites,
  removeFavorites,
  showNotification,
  hideNotification,
  updateAlertProgram
};
