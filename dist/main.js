// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles
parcelRequire = (function (modules, cache, entry, globalName) {
  // Save the require from previous bundle to this closure if any
  var previousRequire = typeof parcelRequire === 'function' && parcelRequire;
  var nodeRequire = typeof require === 'function' && require;

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire = typeof parcelRequire === 'function' && parcelRequire;
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error('Cannot find module \'' + name + '\'');
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;
      localRequire.cache = {};

      var module = cache[name] = new newRequire.Module(name);

      modules[name][0].call(module.exports, localRequire, module, module.exports, this);
    }

    return cache[name].exports;

    function localRequire(x){
      return newRequire(localRequire.resolve(x));
    }

    function resolve(x){
      return modules[name][1][x] || x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [function (require, module) {
      module.exports = exports;
    }, {}];
  };

  var error;
  for (var i = 0; i < entry.length; i++) {
    try {
      newRequire(entry[i]);
    } catch (e) {
      // Save first error but execute all entries
      if (!error) {
        error = e;
      }
    }
  }

  if (entry.length) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(entry[entry.length - 1]);

    // CommonJS
    if (typeof exports === "object" && typeof module !== "undefined") {
      module.exports = mainExports;

    // RequireJS
    } else if (typeof define === "function" && define.amd) {
     define(function () {
       return mainExports;
     });

    // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }

  // Override the current require with this new one
  parcelRequire = newRequire;

  if (error) {
    // throw error from earlier, _after updating parcelRequire_
    throw error;
  }

  return newRequire;
})({"scroll/scroll.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.gradientMenu = gradientMenu;
exports.navbarWhite = navbarWhite;

function gradientMenu(navbar, elementTarget) {
  elementTarget.on("scroll ontouchmove ontouchstart ontouchend", function () {
    var posicionScroll = elementTarget.scrollTop();

    if (navbar) {
      if (posicionScroll <= 0) {
        navbar.style.background = "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
        navbar.style.position = "absolute";
      } else if (posicionScroll > 0 && posicionScroll <= 100) {
        navbar.style.background = "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
        navbar.style.position = "fixed";
      } else if (posicionScroll >= 101) {
        navbar.style.background = "black";
        navbar.style.position = "fixed";
      }
    }
  });
}

function navbarWhite(navbar, elementTarget) {
  elementTarget.on("scroll ontouchmove ontouchstart ontouchend", function () {
    var posicionScroll = elementTarget.scrollTop();

    if (navbar) {
      if (posicionScroll <= 0) {
        navbar.style.background = "transparent";
        navbar.style.position = "absolute";
      } else if (posicionScroll > 0 && posicionScroll <= 100) {
        navbar.style.background = "transparent";
        navbar.style.position = "fixed";
      } else if (posicionScroll >= 101) {
        navbar.style.background = "white";
        navbar.style.position = "fixed";
      }
    }
  });
}
},{}],"form/form.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.ShowHidePassword = ShowHidePassword;
exports.validateEmail = validateEmail;
exports.validateNewPassword = validateNewPassword;
exports.validateKeyUpEmail = validateKeyUpEmail;
exports.validatePassword = validatePassword;
exports.validateUser = validateUser;
exports.validateToken = validateToken;

function ShowHidePassword(iconPassword) {
  var password = iconPassword.previousElementSibling;

  if (password.type == "password") {
    password.type = "text";
    iconPassword.setAttribute("src", "images/registro/eye.svg");
  } else {
    password.type = "password";
    iconPassword.setAttribute("src", "images/registro/eye-none.svg");
  }
}

function validateEmail(inputEmail, messageError) {
  var email = inputEmail.val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (email.length == 0) {
    messageError.addClass("invalid-email d-block").text("Debes ingresar un correo electrónico");
    return false;
  } else if (!filter.test(email)) {
    messageError.addClass("invalid-email d-block").text("El correo electrónico no tiene un formato válido");
    console.log("error");
    return false;
  } else {
    return true;
  }
}

function validateKeyUpEmail(inputEmail, filter, imageError, emailWarning) {
  var email = inputEmail.val();

  if (!filter.test(email)) {
    emailWarning.css("color", "red");
    imageError.css("display", "inline-block");
    imageError.attr("src", "images/registro/alerta.svg");
  } else if (filter.test(email)) {
    emailWarning.css("color", "green");
    imageError.css("display", "inline-block");
    imageError.attr("src", "images/registro/listo.svg");
  } else if (inputCorreo.val().length == 0) {
    ImagenError.css("display", "none");
    emailWarning.css("color", "#666262");
  }
}

function validateNewPassword(inputPassword, inputPasswordConfirm) {
  var password = inputPassword.val();
  var passwordConfirm = inputPasswordConfirm.val();
  var warningPassword = $("#error-new-password");
  var warningPasswordConfirm = $("#error-password-confirm");

  if (password.length == 0) {
    warningPassword.addClass("invalid-email").text("Debes ingresar una nueva contraseña");
    return false;
  } else if (password.length < 8) {
    warningPassword.addClass("invalid-email").text("La contraseña debe tener mínimo 8 caracteres");
    return false;
  } else if (passwordConfirm == 0) {
    warningPasswordConfirm.addClass("invalid-email").text("Debes ingresar de nuevo la contraseña");
    return false;
  } else if (password !== passwordConfirm) {
    warningPasswordConfirm.addClass("invalid-email").text("Las contraseñas deben de coincidir");
    console.log("Sigo aquí");
    return false;
  } else {
    return true;
  }
}

function validatePassword(inputPassword, messageError) {
  var password = inputPassword.val();

  if (password === "") {
    messageError.addClass("invalid-email").text("Debes ingresar una contraseña");
    inputPassword.addClass("input-border-red");
    return false;
  } else if (password.length < 8) {
    messageError.addClass("invalid-email").text("La contraseña debe tener al menos 8 caractéres");
    inputPassword.addClass("input-border-red");
    return false;
  } else {
    return true;
  }
}

function validateUser(inputUser, messageError) {
  var user = inputUser.val();

  if (user.length == 0) {
    var message = "\n    <img\n    src=\"images/registro/alerta.svg\">\n    Debes ingresar un nombre\n    ";
    messageError.addClass("invalid-email").html(message);
    return false;
  } else {
    return true;
  }
}
/*$.ajax({
  type: "POST",
  data: user,
  dataType: "JSON",

  url: "../../adapters/user.php",
  success: function(result) {
    console.log(result);
  }
});*/


function validateToken(token) {
  console.log(token);
  $.ajax({
    type: "POST",
    data: token,
    url: "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/verify",
    success: function success(result) {
      console.log("succes", result);

      if (result.data != null) {
        localStorage.setItem("session", 1);
        localStorage.setItem("id", result.data[0].id);
        localStorage.setItem("name", result.data[0].name);
        localStorage.setItem("avatar", result.data[0].avatar);
        var name = result.data[0].name;
        var nameUser = $("#cuenta-confirmada-name-user");
        nameUser.html(name);
      }
    }
  });
}
},{}],"session/session.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.selectCountry = selectCountry;

function selectCountry(country) {
  var countryFlag = country.children(".Icon_paises").attr("src");

  if (typeof Storage !== "undefined") {
    localStorage.setItem("src", countryFlag);
  } else {
    console.warn("Tu navegador no sporta Session Storage");
  }
}
},{}],"services/user/user.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.sendUserEmail = sendUserEmail;
exports.validateTokenPassword = validateTokenPassword;
exports.sendNewPassword = sendNewPassword;
exports.signIn = signIn;
exports.signOut = signOut;
exports.updateDataUser = updateDataUser;
exports.selectAvatar = selectAvatar;
exports.registerUser = registerUser;
exports.updateAlerts = updateAlerts;
exports.addFavorites = addFavorites;
exports.removeFavorites = removeFavorites;
exports.showNotification = showNotification;
exports.hideNotification = hideNotification;
exports.updateAlertProgram = updateAlertProgram;

function validateTokenPassword(tokenPassword) {
  $.ajax({
    type: "GET",
    data: tokenPassword,
    url: "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_verify",
    success: function success(result) {
      if (result.data) {
        console.log(result.data);
        var user_id = $("#user_id");
        localStorage.setItem("session", 1);
        localStorage.setItem("id", result.data.id);
        localStorage.setItem("name", result.data.name);
        localStorage.setItem("avatar", result.data.avatar);
        user_id.attr("value", result.data.user_id);
        location.href = "http://www.claronetworks.openofficedospuntocero.info/form-password.php";
      }
    }
  });
}

function showNotification() {
  var id = localStorage.getItem("id");
  var alert = $(".alert-user");
  setInterval(function () {
    var alert = $(".alert-user");
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var year = date.getFullYear();
    var hour = date.getHours(); //let minutes = date.getMinutes();

    var minutes = 30;
    var seconds = date.getSeconds();
    var currentTime = "".concat(hour, ":").concat(minutes);
    var currentDate = "".concat(year, "-").concat(month, "-").concat(day);
    var dataUser = {
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
        success: function success(result) {
          var json = JSON.parse(result);

          if (json.code == 200) {
            var name = localStorage.getItem("name");
            var length = json.data.length;
            var alertProgram = "";

            for (var i = 0; i < length; i++) {
              alertProgram += "\n              <div class=\"p-3\">\n              <img src=\"./images/notifications/close-notification.svg\" class=\"close-notification\"/>\n                <div class=\"d-flex align-items-center\">\n                  <img class=\"alert-image\" src=\"".concat(json.data[i].image, "\" />\n                  <p class=\"text-regular alert-user-text pl-3\">\n                    ").concat(name, ": <br />\n                    <span class=\"text-semibold alert-user-text\">").concat(json.data[i].title, "</span> est\xE1 por comenzar<br />\n                    \xA1No te lo pierdas!    \n                  </p>\n                </div>\n              </div>");
            }

            alert.html(alertProgram);

            if (screen.width >= 320 && screen.width < 768) {
              alert.css("transform", "translate(50%, 0%)").css("animation", "showAlertMobile 8s");
              setTimeout(function () {
                alert.css("animation", "none");
              }, 8000);
            } else if (screen.width > 767) {
              alert.css("animation", "showAlert 8s");
              setTimeout(function () {
                alert.css("animation", "none");
              }, 8000);
            }

            $(window).resize(function () {
              if (screen.width >= 320 && screen.width < 768) {
                alert.css("transform", "translate(50%, 0%)").css("animation", "showAlertMobile 8s");
                setTimeout(function () {
                  alert.css("animation", "none");
                }, 8000);
              } else if (screen.width > 767) {
                alert.css("animation", "showAlert 8s");
                setTimeout(function () {
                  alert.css("animation", "none");
                }, 8000);
              }
            });
            $(".close-notification").click(function () {
              alert.css("animation", "none");
            });
          }
        }
      });
    }
  }, 8000);
}

function hideNotification() {
  var alert = $(".alert-user");
  alert.css("animation", "hideAlert");
}

function sendUserEmail(inputEmail) {
  var email = inputEmail.val();
  var emailUser = {
    email: email
  };
  $.ajax({
    type: "POST",
    data: emailUser,
    beforeSend: function beforeSend() {
      var loader = "\n      <div class=\"loader\">\n        <img src=\"./images/General/loader.gif\" class=\"loader-img\" alt=\"\">\n      </div>\n      ";
      var formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    url: "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_send",
    success: function success(result) {
      if (result.data) {
        location.href = "./email-sent.php";
      }
    }
  });
}

function sendNewPassword(inputPassword, secondInputPassword) {
  var newPassowrd = inputPassword.val();
  var confirmedNewPassowrd = secondInputPassword.val();
  var user_id = $("#user_id").val();
  var url = location.href;
  var arrayUrl = url.split("?");
  var token = arrayUrl[1];
  var info_user = {
    token: token,
    password: newPassowrd,
    confirm: confirmedNewPassowrd
  };
  $.ajax({
    type: "POST",
    data: info_user,
    beforeSend: function beforeSend() {
      var loader = "\n      <div class=\"loader\">\n        <img src=\"./images/General/loader.gif\" class=\"loader-img\" alt=\"\">\n      </div>\n      ";
      var formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    url: "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_password",
    success: function success(result) {
      console.log(result);

      if (result.code == 200) {
        location.href = "./success-password.php";
      }
    }
  });
}

function signIn(email, password) {
  var dataUser = {
    function: "signIn",
    email: email,
    password: password
  };
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    beforeSend: function beforeSend() {
      var loader = "\n      <div class=\"loader\">\n        <img src=\"./images/General/loader.gif\" class=\"loader-img\" alt=\"\">\n      </div>\n      ";
      var formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    success: function success(result) {
      var json = JSON.parse(result);
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
          var date = json.data.birthday.split("-");
          localStorage.setItem("day", date[2]);
          localStorage.setItem("month", date[1]);
          localStorage.setItem("year", date[0]);
        }

        localStorage.setItem("alertBeginning", json.data.config.beginning);
        localStorage.setItem("alertMinutes", json.data.config.minutes);
        localStorage.setItem("alertEmail", json.data.config.email);
        localStorage.setItem("alertWeb", json.data.config.web);
        var sections = json.data.favorites;
        sections.forEach(function (section) {
          if (section.id_section == 1) {
            localStorage.setItem("favoritesCanalClaro", JSON.stringify(section.programs));
          } else if (section.id_section == 2) {
            localStorage.setItem("favoritesConcertChannel", JSON.stringify(section.programs));
          } else if (section.id_section == 3) {
            localStorage.setItem("favoritesClaroCinema", JSON.stringify(section.programs));
          }
        });
      } else {
        var loader = $(".loader");
        loader.remove();
        $(".data-incorrect").text("Tu correo o contraseña no coinciden. Por favor, verifica de nuevo").addClass("invalid-email");
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
  var dataUser = {
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
    success: function success(result) {
      var json = JSON.parse(result);
      console.log(result);
      var gender = localStorage.setItem("gender", json.data.gender);
      var date = json.data.birthday.split("-");
      var day = localStorage.setItem("day", date[2]);
      var month = localStorage.setItem("month", date[1]);
      var year = localStorage.setItem("year", date[0]);
      var birthday = localStorage.setItem("date", json.data.birthday);
      var country = localStorage.setItem("country", json.data.country.name);
      var src = localStorage.setItem("src", json.data.country.image);
      var modal = $("#mensaje");
      modal.modal("show");
      $(".login-country").prop("src", json.data.country.image);
    }
  });
}

function sendEmail(id) {
  var dataUser = {
    function: "sendEmail",
    id: id
  };
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function success(result) {
      console.log(result);
      console.log("email enviado");
    }
  });
}

function selectAvatar(id, src, idAvatar) {
  var dataUser = {
    function: "selectAvatar",
    id: id,
    avatar: src
  };
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function success(result) {
      var json = JSON.parse(result);

      if (json.code == 200) {
        localStorage.setItem("idAvatar", idAvatar);
        console.log(json);
        localStorage.setItem("avatar", json.data.avatar);
        $(".image-user-container").html("\n        <div class=\"image-user\">\n          <img src=\"".concat(json.data.avatar, "\" />\n        </div>\n        "));
        var modal = $("#mensaje");
        modal.modal("show");
      }
    }
  });
}

function registerUser(inputName, inputEmail, inputPassword) {
  var name = inputName.val();
  var email = inputEmail.val();
  var password = inputPassword.val();
  var user = {
    function: "registerUser",
    name: name,
    email: email,
    password: password,
    version: "1.2"
  };
  $.ajax({
    type: "POST",
    data: user,
    url: "../../adapters/user.php",
    beforeSend: function beforeSend() {
      var loader = "\n      <div class=\"loader\">\n        <img src=\"./images/General/loader.gif\" class=\"loader-img\" alt=\"\">\n      </div>\n      ";
      var formContainer = $(".formContainer");
      formContainer.prepend(loader);
    },
    success: function success(result) {
      var json = JSON.parse(result);
      console.log(json);
      var loader = $(".loader");

      if (json.code == 201) {
        var modal = $("#mensaje");
        modal.modal("show");
        sendEmail(json.data.id);
        loader.remove();
      } else {
        if (json.code == 422) {
          $(".data-incorrect").text("El email que ingresaste ya está registrado").addClass("invalid-email");
          loader.remove();
        }
      }
    }
  });
}

function updateAlerts(configJson) {
  var dataUser = {
    function: "updateAlerts",
    data: configJson
  };
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function success(result) {
      var json = JSON.parse(result);
      console.log(json);

      if (json.code == 200) {
        var modal = $("#mensaje");
        modal.modal("show");
        var alertBeginning = localStorage.setItem("alertBeginning", json.data.beginning);
        var alertWeb = localStorage.setItem("alertWeb", json.data.web);
        var alertEmail = localStorage.setItem("alertEmail", json.data.email);
        var alertMinutes = localStorage.setItem("alertMinutes", json.data.minutes);
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
  $(".poster-button, .programing-button, .synopsis-add").click(function () {
    var session = localStorage.getItem("session");

    if (session != 1) {
      var modal = $(".modal-favorites");
      modal.modal("show");
    } else {
      if ($(this).hasClass("remove-program")) {
        var id = localStorage.getItem("id");
        var programId = $(this).attr("_id");
        removeFavorites(id, programId, $(this), null);
        return true;
      } else if ($(this).hasClass("add-favorites")) {
        var heartIcon = $(this).children(".poster-add");
        var heartIconSynopsis = $(this).children(".synopsis-heart");
        var heartIconGray = $(this).find("path");
        var addButton = $(this);
        var buttonFavorite = $(this);
        var id_program = $(this).attr("_id");
        var id_user = localStorage.getItem("id");
        var dataUser = {
          function: "addFavorites",
          user_id: id_user,
          chapter_id: id_program
        };
        $.ajax({
          type: "POST",
          data: dataUser,
          url: "../../adapters/user.php",
          success: function success(result) {
            var json = JSON.parse(result);
            console.log(json);

            if (json.code == 200) {
              var sections = json.data["fav_list"];
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

              if (heartIconSynopsis) {
                heartIconSynopsis.attr("src", "./images/posters/heart-icon-white.svg");
              }

              var nameUser = localStorage.getItem("name");
              var nameProgram = "".concat(json.data.last_added.program_title);
              $("#modal-username-program").text("".concat(nameUser, ":"));
              $("#modal-name-program").text(nameProgram);
              $(".modal-image-program").attr("src", json.data.last_added.image);
              $(".modal-program").modal("show");
              sections.forEach(function (section) {
                if (section.id_section == 1) {
                  localStorage.setItem("favoritesCanalClaro", JSON.stringify(section.programs));
                } else if (section.id_section == 2) {
                  console.log("Concert Channel");
                  localStorage.setItem("favoritesConcertChannel", JSON.stringify(section.programs));
                } else if (section.id_section == 3) {
                  localStorage.setItem("favoritesClaroCinema", JSON.stringify(section.programs));
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
  console.log(user_id, program_id);
  var heartIcon = removeButton.children(".poster-add");
  var heartIconGray = removeButton.find("path");
  var dataUser = {
    function: "removeFavorites",
    user_id: user_id,
    chapter_id: program_id
  };
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function success(result) {
      var json = JSON.parse(result);
      console.log(json);
      var sections = json.data;

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
        sections.forEach(function (section) {
          if (section.id_section == 1) {
            localStorage.setItem("favoritesCanalClaro", JSON.stringify(section.programs));
          } else if (section.id_section == 2) {
            localStorage.setItem("favoritesConcertChannel", JSON.stringify(section.programs));
          } else if (section.id_section == 3) {
            localStorage.setItem("favoritesClaroCinema", JSON.stringify(section.programs));
          }
        });
      }

      var favoritesCanalClaro = JSON.parse(localStorage.getItem("favoritesCanalClaro"));
      var favoritesConcertChannel = JSON.parse(localStorage.getItem("favoritesConcertChannel"));
      var favoritesClaroCinema = JSON.parse(localStorage.getItem("favoritesClaroCinema"));

      if (favoritesCanalClaro.length == 0) {
        $(".claro-list").remove();
      }

      if (favoritesConcertChannel.length == 0) {
        $(".concert-list ").remove();
      }

      if (favoritesClaroCinema.length == 0) {
        $(".cinema-list").remove();
      }

      if (favoritesClaroCinema.length == 0 && favoritesCanalClaro.length == 0 && favoritesConcertChannel.length == 0) {
        var listFavorites = $(".mi-lista-container");
        var myFavorites = "\n        <div class=\"text-center mt-5 pt-md-4 mt-xl-5\">\n         <img src=\"./images/mi-lista/favorites.svg\" alt=\"\" class=\"no-favorites-img\">\n         </div>\n        <div class=\"no-gutters mt-4 mt-xl-5 pt-xl-5\">\n          <div class=\"col-12\">\n              <p class=\"a-text-warm-grey-bold mb-3 text-center no-favorites-title mb-xl-4\">No tienes favoritos guardados todav\xEDa</p>\n              <p class=\"a-text-warm-grey-regular text-center no-favorites-subtitle\">Explora y descubre m\xE1s</p>\n          </div>\n        </div>\n\n            ";
        listFavorites.append(myFavorites);
      }
    }
  });
  return true;
}

function updateAlertProgram(user_id, program_id, active) {
  var dataUser;

  if (active == true) {
    dataUser = {
      function: "enableNotification",
      user_id: user_id,
      chapter_id: program_id
    };
  } else {
    dataUser = {
      function: "disableNotification",
      user_id: user_id,
      chapter_id: program_id
    };
  }

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/user.php",
    success: function success(result) {
      var json = JSON.parse(result);
      console.log(json);

      if (json.code == 200) {
        var sections = json.data;
        sections.forEach(function (section) {
          if (section.id_section == 1) {
            localStorage.setItem("favoritesCanalClaro", JSON.stringify(section.programs));
          } else if (section.id_section == 2) {
            localStorage.setItem("favoritesConcertChannel", JSON.stringify(section.programs));
          } else if (section.id_section == 3) {
            localStorage.setItem("favoritesClaroCinema", JSON.stringify(section.programs));
          }
        });
      }
    }
  });
}
},{}],"country/country.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.getNameCountry = getNameCountry;

function getNameCountry(image) {
  var url = image.split("/");
  var imageCountry = url[url.length - 1];
  var nameCountry = "";

  switch (imageCountry) {
    case "usa.svg":
      nameCountry = "usa";
      break;

    case "argentina.svg":
      nameCountry = "argentina";
      break;

    case "brazil.svg":
      nameCountry = "brazil";
      break;

    case "chile.svg":
      nameCountry = "chile";
      break;

    case "colombia.svg":
      nameCountry = "colombia";
      break;

    case "costa-rica.svg":
      nameCountry = "costa-rica";
      break;

    case "ecuador.svg":
      nameCountry = "ecuador";
      break;

    case "el-salvador.svg":
      nameCountry = "el-salvador";
      break;

    case "guatemala.svg":
      nameCountry = "guatemala";
      break;

    case "honduras.svg":
      nameCountry = "honduras";
      break;

    case "nicaragua.svg":
      nameCountry = "nicaragua";
      break;

    case "panama.svg":
      nameCountry = "panama";
      break;

    case "paraguay.svg":
      nameCountry = "paraguay";
      break;

    case "puerto-rico.svg":
      nameCountry = "puerto-rico";
      break;

    case "peru.svg":
      nameCountry = "peru";
      break;

    case "dominican-republic.svg":
      nameCountry = "dominican-republic";
      break;

    case "uruguay.svg":
      nameCountry = "uruguay";
      break;

    default:
      break;
  }

  return nameCountry;
}
},{}],"services/Program.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.getPrograms = getPrograms;
exports.createClickThumbnails = createClickThumbnails;

var _user = require("./user/user.js");

function createClickThumbnails() {
  $(".thumbnail-body, .poster-live, .thumbnail-prog").click(function () {
    var thumbnailId = $(this).attr("_id");
    var posterLiveId = $(this).attr("_id");
    var listItemButton = $(this).find(".button-none").attr("_id");
    var thumbnailProgId = $(this).attr("_id");

    if (thumbnailId) {
      showSynopsis(thumbnailId);
    } else if (posterLiveId) {
      showSynopsis(posterLiveId);
    } else if (listItemButton) {
      showSynopsis(listItemButton);
    } else {
      showSynopsis(thumbnailProgId);
    }
  });
}

function createTvSlider(container) {
  container.slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: true,
        infinite: true,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: false
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1900,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }]
  });
}

function destroySlider(container) {
  container.slick("unslick");
}

function getPrograms(date, country) {
  var dataProgram = {
    function: "getPrograms",
    date: date,
    country: country
  }; //NORMAL

  var nowSliderCanalClaro = $(".today-claro-slider");
  var nowSliderConcertChannel = $(".today-concert-channel-slider");
  var nowSliderClaroCinema = $(".today-claro-cinema-slider");
  var nowSliderNuestraVision = $("#tv-vision-slider");
  var nowSliderClaroSports = $("#tv-sports-slider"); //CON CUADROS PARA EDITAR

  var nowSliderCanalClaroprev = $(".today-claro-slider-prev");
  var nowSliderConcertChannelprev = $(".today-concert-channel-slider-prev");
  var nowSliderClaroCinemaprev = $(".today-claro-cinema-slider-prev");
  var nowSliderNuestraVisionprev = $("#tv-vision-slider-prev");
  var nowSliderClaroSportsprev = $("#tv-sports-slider-prev");
  var claroCotentProgramacionGeneral = $(".claro-content");
  var claroContentProgramacinGeneralEdit = $(".claro-content-edit");
  var concertContentProgramacionGeneral = $(".concert-content");
  var cinemaContentProgramacionGeneral = $(".cinema-content");
  $.ajax({
    type: "POST",
    data: dataProgram,
    url: "./adapters/program.php",
    success: function success(result) {
      var json = JSON.parse(result);
      /* SLIDER "AHORA EN VIVO CANAL CLARO*/

      var programingCanalClaro = json.data[0].programing[0].programs;
      var programingConcertChannel = json.data[1].programing[0].programs;
      var programingClaroCinema = json.data[2].programing[0].programs;
      var arrayCanalClaro = [];
      var favoritesClaroCanal = JSON.parse(localStorage.getItem("favoritesCanalClaro"));

      if (localStorage.getItem("favoritesCanalClaro")) {
        var favoritesCanalClaroLength = favoritesClaroCanal.length;

        for (var i = 0; i < favoritesCanalClaroLength; i++) {
          var favoriteId = favoritesClaroCanal[i].chapter_id;
          arrayCanalClaro.push(favoriteId);
        }
      }

      var arrayConcertChannel = [];
      var favoritesConcertChannel = JSON.parse(localStorage.getItem("favoritesConcertChannel"));

      if (localStorage.getItem("favoritesConcertChannel")) {
        var favoritesConcertChannelLength = favoritesConcertChannel.length;

        for (var _i = 0; _i < favoritesConcertChannelLength; _i++) {
          var _favoriteId = favoritesConcertChannel[_i].chapter_id;
          arrayConcertChannel.push(_favoriteId);
        }
      }

      var arrayClaroCinema = [];
      var favoritesClaroCinema = JSON.parse(localStorage.getItem("favoritesClaroCinema"));

      if (localStorage.getItem("favoritesClaroCinema")) {
        var favoritesClaroCinemaLength = favoritesClaroCinema.length;

        for (var _i2 = 0; _i2 < favoritesClaroCinemaLength; _i2++) {
          var _favoriteId2 = favoritesClaroCinema[_i2].chapter_id;
          arrayClaroCinema.push(_favoriteId2);
        }
      }

      destroySlider(nowSliderCanalClaro);
      destroySlider(nowSliderConcertChannel);
      destroySlider(nowSliderClaroCinema);
      destroySlider(nowSliderNuestraVision);
      destroySlider(nowSliderClaroSports); //DESTROYSLIDER DE EDIT

      destroySlider(nowSliderCanalClaroprev);
      destroySlider(nowSliderConcertChannelprev);
      destroySlider(nowSliderClaroCinemaprev);
      destroySlider(nowSliderNuestraVisionprev);
      destroySlider(nowSliderClaroSportsprev);
      var programCanalClaroEdit = "";
      programingCanalClaro.forEach(function (program, index) {
        var programCanalClaro;

        if (index == 0) {
          if (arrayCanalClaro.includes(program.chapter_id)) {
            programCanalClaro = "\n                <div class=\"poster\">\n                  <div class=\"poster-body\">\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n                  </div>\n              </div>\n                ");
          } else {
            programCanalClaro = "\n                <div class=\"poster\" >\n                  <div class=\"poster-body\">\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n                ");
          }
        } else {
          if (arrayCanalClaro.includes(program.chapter_id)) {
            programCanalClaro = "\n                <div class=\"poster\">\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-between\">\n                          <p class=\"a-programming-text\">".concat(program.time, "</p>\n                          <button type=\"button\" class=\"poster-button remove-program\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-icon-white.svg\" alt=\"\" class=\"poster-add\"></button>\n                      </div>\n\n                      <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                     </div>\n\n                  </div>\n              </div>\n                ");
          } else {
            programCanalClaro = "\n                <div class=\"poster\" >\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-between\">\n                          <p class=\"a-programming-text\">".concat(program.time, "</p>\n                          <button type=\"button\" class=\"poster-button add-favorites\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-outline.svg\" alt=\"\" class=\"poster-add\"></button>\n                      </div>\n\n                      <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n                ");
          }
        }

        nowSliderCanalClaro.append(programCanalClaro);
        /* PROGRAMACIÓN GENERAL*/

        /* CANAL CLARO*/

        if (arrayCanalClaro.includes(program.chapter_id)) {
          //para calculo de caracteres en sinopsis de programación general-edit
          programCanalClaroEdit += "\n          <div class=\"p-3 border-t border-r border-l border-b position-relative mb-3\">\n          <img src=\"./images/General/pencil.svg\" alt=\"\" class=\"pencil edit-program-pencil\" chapter_id=\"".concat(program.chapter_id, "\">\n<div class=\"schedule-container col-12 p-5 mx-auto mt-0\">\n  <p class=\"schedule-title  a-text-plus a-text-black-brown-two\">\n      \n  ").concat(program.chapter_title, "\n     \n  </p>\n<div class=\"schedule-item-body\">\n  <div class=\"schedule-poster\">\n     <div class=\"poster\">\n          <div class=\"thumbnail-edit\" _id=\"").concat(program.chapter_id, "\">\n          <img src=\"").concat(program.image, "\" alt=\"\">\n          </div>\n      </div>\n  </div>\n  <div class=\"schedule-details\">\n      <div class=\"schedule-details-header\">\n          <div>\n              <p class=\"schedule a-text-black-brown-two\">\n                  \n              ").concat(program.time, " hrs.\n                  \n              </p>\n              <p class=\"rating\"> \n                \n                      Clasificaci\xF3n: A\n                 \n              </p>\n          </div>\n          <div>\n          <button title=\"Agregar a mi lista\" class=\"button-none add-favorites programing-button\" type=\"button\" _id=\"\">\n          <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n              <path class=\"heart-gray\" fill=\"none\" fill-rule=\" evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n          </svg>\n          </button>\n          </div>\n      </div>\n      <div>\n      <span class=\"schedule-description s1\" id=\"synopsis-edi\">     ").concat(program.sinopsis, "    </span>\n      <span class=\"text-normal cursor-pointer a-text-bold-tealblue\"> Ver m\xE1s...</span>\n</div>\n  </div>\n</div>\n</div>\n</div> ");
          programCanalClaro = "\n            <div class=\"schedule-container\">\n            <p class=\"schedule-title\">".concat(program.chapter_title, "</p>\n            <div class=\"schedule-item-body\">\n                <div class=\"schedule-poster\">\n                    <div class=\"poster\">\n                        <div class=\"thumbnail-prog\" _id=\"").concat(program.chapter_id, "\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"schedule-details\">\n                    <div class=\"schedule-details-header\">\n                        <div>\n                            <p class=\"schedule\">").concat(program.time, " hrs.</p>\n                            <p class=\"rating\">Clasificaci\xF3n: A</p>\n                        </div>\n                        <div>\n                        <button title=\"Eliminar de mi lista\" class=\"button-none remove-program programing-button\" type=\"button\" _id=\"").concat(program.chapter_id, "\">\n                        <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n                            <path class=\"heart-gray-filled\" fill=\"none\" fill-rule=\" evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n                        </svg>\n                        </button>\n                        </div>\n                    </div>\n                    <p class=\"schedule-description\">\n                        ").concat(program.sinopsis, "\n                    </p>\n                </div>\n            </div>\n\n        </div>\n            ");
        } else {
          //VARIABLE PARA EDITAR DESDE PROGRAMACIÓN GENERAL EN BACKOFFICE
          programCanalClaroEdit += "\n          <div class=\"p-3 border-t border-r border-l border-b position-relative mb-3\">\n          <img src=\"./images/General/pencil.svg\" alt=\"\" class=\"pencil edit-program-pencil\" chapter_id=\"".concat(program.chapter_id, "\">\n        <div class=\"schedule-container col-12 p-5 mx-auto mt-0\">\n        <p class=\"schedule-title  a-text-plus a-text-black-brown-two\"> \n      \n  ").concat(program.chapter_title, "\n     \n  </p>\n<div class=\"schedule-item-body\">\n  <div class=\"schedule-poster\">\n     <div class=\"poster\">\n          <div class=\"thumbnail-edit\" _id=\"").concat(program.chapter_id, "\">\n          <img src=\"").concat(program.image, "\" alt=\"\">\n          </div>\n      </div>\n  </div>\n  <div class=\"schedule-details\">\n      <div class=\"schedule-details-header\">\n          <div>\n              <p class=\"schedule a-text-black-brown-two\">\n                  \n              ").concat(program.time, " hrs.\n                  \n              </p>\n              <p class=\"rating\"> \n                \n                      Clasificaci\xF3n: A\n                 \n              </p>\n          </div>\n          <div>\n          <button title=\"Agregar a mi lista\" class=\"button-none add-favorites programing-button\" type=\"button\" _id=\"\">\n          <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n              <path class=\"heart-gray\" fill=\"none\" fill-rule=\" evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n          </svg>\n          </button>\n          </div>\n      </div>\n      <div>\n      <span class=\"schedule-description s1\" id=\"synopsis-edi\">     ").concat(program.sinopsis, "    </span>\n    <span class=\"text-normal cursor-pointer a-text-bold-tealblue\"> Ver m\xE1s...</span>\n</div>\n  </div>\n</div>\n</div>\n</div> ");
          programCanalClaro = "\n            <div class=\"schedule-container\">\n            <p class=\"schedule-title\">".concat(program.chapter_title, "</p>\n            <div class=\"schedule-item-body\">\n                <div class=\"schedule-poster\">\n                   <div class=\"poster\">\n                        <div class=\"thumbnail-prog\" _id=\"").concat(program.chapter_id, "\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"schedule-details\">\n                    <div class=\"schedule-details-header\">\n                        <div>\n                            <p class=\"schedule\">").concat(program.time, " hrs.</p>\n                            <p class=\"rating\">Clasificaci\xF3n: A</p>\n                        </div>\n                        <div>\n                        <button title=\"Agregar a mi lista\" class=\"button-none add-favorites programing-button\" type=\"button\" _id=\"").concat(program.chapter_id, "\">\n                        <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n                            <path class=\"heart-gray\" fill=\"none\" fill-rule=\" evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n                        </svg>\n                        </button>\n                        </div>\n                    </div>\n                    <p class=\"schedule-description\">\n                    ").concat(program.sinopsis, "\n                    </p>\n                </div>\n            </div>\n        </div>\n            ");
        }

        claroCotentProgramacionGeneral.append(programCanalClaro);
        /* END PROGRAMACIÓN GENERAL - CANAL CLARO*/
      }); //claroContentProgramacinGeneralEdit.html(programCanalClaroEdit);
      //CUADROS DE EDITAR DE LANDING
      //cuadros de editar

      var keyValue = $(".s1").text();

      if (keyValue.length > 339) {
        var text = keyValue.substr(0, 339) + ".";
        $(".s1").text(text);
      } else {
        $(".s1").text(keyValue);
      }

      programingCanalClaro.forEach(function (program, index) {
        var programCanalClaro;

        if (index == 0) {
          if (arrayCanalClaro.includes(program.chapter_id)) {
            programCanalClaro = "\n         <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n           <div class=\"poster\">\n           <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n                  <div class=\"poster-body\">\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">                       \n                              <img src=\"").concat(program.image, "\" alt=\"\">                             \n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n                  </div>\n              </div>\n        </div>\n                ");
          } else {
            programCanalClaro = "\n         \n            <div>\n              <div class=\" p-3 border-t border-l border-r border-b position-relative\">        \n                <div class=\"poster\" >\n                <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n                  <div class=\"poster-body\">\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                       \n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                             \n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n         </div>\n                ");
          }
        } else {
          if (arrayCanalClaro.includes(program.chapter_id)) {
            programCanalClaro = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">   \n                <div class=\"poster\">\n                <button class=\"d-flex align-items-center justify-content-center pencil-black  a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-between\">\n                          <p class=\"a-programming-text\">".concat(program.time, "</p>\n                          <button type=\"button\" class=\"poster-button remove-program\" _id=\"").concat(program.chapter_id, "\"><img src=\"../images/posters/heart-icon-white.svg\" alt=\"\" class=\"poster-add\"></button>\n                      </div>\n\n                      <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                         \n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                             \n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                     </div>\n\n                  </div>\n              </div>\n              </div>\n                ");
          } else {
            programCanalClaro = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">   \n                <div class=\"poster\" >\n                <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-between\">\n                          <p class=\"a-programming-text\">".concat(program.time, "</p>\n                          <button type=\"button\" class=\"poster-button add-favorites\" _id=\"").concat(program.chapter_id, "\"><img src=\"../images/posters/heart-outline.svg\" alt=\"\" class=\"poster-add\"></button>\n                      </div>\n\n                      <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                        \n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                              \n                          </div>\n                          <div class=\"a-claro-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n              </div>\n                ");
          }
        }

        nowSliderCanalClaroprev.append(programCanalClaro);
      }); //END DE CUADROS

      var programConcertChannel;
      programingConcertChannel.forEach(function (program, index) {
        if (index == 0) {
          if (arrayConcertChannel.includes(program.chapter_id)) {
            programConcertChannel = "\n              <div class=\"poster\">\n              <div class=\"poster-body\">\n                  <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                  <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                      <div class=\"thumbnail\">\n                          <img src=\"").concat(program.image, "\" alt=\"\">\n                      </div>\n                      <div class=\"a-concert-rectangle thumbnail-info-title\">\n                          <div class=\"poster-title-margin\">\n                              <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                          </div>\n                      </div>\n                  </div>\n              </div>\n          </div>\n              ");
          } else {
            programConcertChannel = "\n            <div class=\"poster\">\n            <div class=\"poster-body\">\n                <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                    <div class=\"thumbnail\">\n                        <img src=\"").concat(program.image, "\" alt=\"\">\n                    </div>\n                    <div class=\"a-concert-rectangle thumbnail-info-title\">\n                        <div class=\"poster-title-margin\">\n                            <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n            ");
          }
        } else {
          if (arrayConcertChannel.includes(program.chapter_id)) {
            programConcertChannel = "\n                <div class=\"poster\" >\n                <div class=\"poster-body\">\n                    <div class=\"showtime-container justify-content-between\">\n                        <p class=\"a-programming-text\">".concat(program.time, "</p>\n                        <button type=\"button\" class=\"poster-button remove-program\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-icon-white.svg\" alt=\"\" class=\"poster-add\"></button>\n                    </div>\n\n                    <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                        <div class=\"thumbnail\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                        <div class=\"a-concert-rectangle thumbnail-info-title\">\n                            <div class=\"poster-title-margin\">\n                                <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n                ");
          } else {
            programConcertChannel = "\n            <div class=\"poster\" >\n            <div class=\"poster-body\">\n                <div class=\"showtime-container justify-content-between\">\n                    <p class=\"a-programming-text\">".concat(program.time, "</p>\n                    <button type=\"button\" class=\"poster-button add-favorites\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-outline.svg\" alt=\"\" class=\"poster-add\"></button>\n                </div>\n\n                <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                    <div class=\"thumbnail\">\n                        <img src=\"").concat(program.image, "\" alt=\"\">\n                    </div>\n                    <div class=\"a-concert-rectangle thumbnail-info-title\">\n                        <div class=\"poster-title-margin\">\n                            <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                        </div>\n                    </div>\n               </div>\n            </div>\n        </div>\n            ");
          }
        }

        nowSliderConcertChannel.append(programConcertChannel);
        /* PROGRAMACIÓN GENERAL - CONCERT CHANNEL*/

        if (arrayConcertChannel.includes(program.chapter_id)) {
          programConcertChannel = "\n            <div class=\"schedule-container\">\n            <p class=\"schedule-title\">".concat(program.chapter_title, "</p>\n            <div class=\"schedule-item-body\">\n                <div class=\"schedule-poster\">\n                    <div class=\"poster\">\n                        <div class=\"thumbnail-prog\" _id=\"").concat(program.chapter_id, "\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"schedule-details\">\n                    <div class=\"schedule-details-header\">\n                        <div>\n                            <p class=\"schedule\">").concat(program.time, " hrs.</p>\n                            <p class=\"rating\">Clasificaci\xF3n: A</p>\n                        </div>\n                        <div>\n                            <button title=\"Eliminar de mi lista\" class=\"button-none remove-program programing-button\" type=\"button\" _id=\"").concat(program.chapter_id, "\">\n                            <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n                                <path class=\"heart-gray-filled\" fill=\"none\" fill-rule=\"evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n                            </svg>\n                            </button>\n                        </div>\n                    </div>\n                    <p class=\"schedule-description\">\n                        ").concat(program.sinopsis, "\n                    </p>\n                </div>\n            </div>\n        </div>\n            ");
        } else {
          programConcertChannel = "\n            <div class=\"schedule-container\">\n            <p class=\"schedule-title\">".concat(program.chapter_title, "</p>\n            <div class=\"schedule-item-body\">\n                <div class=\"schedule-poster\">\n                    <div class=\"poster\">\n                        <div class=\"thumbnail-prog\" _id=\"").concat(program.chapter_id, "\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"schedule-details\">\n                    <div class=\"schedule-details-header\">\n                        <div>\n                            <p class=\"schedule\">").concat(program.time, " hrs.</p>\n                            <p class=\"rating\">Clasificaci\xF3n: A</p>\n                        </div>\n                        <div>\n                            <button title=\"Agregar a mi lista\" class=\"button-none add-favorites programing-button\" type=\"button\" _id=\"").concat(program.chapter_id, "\">\n                            <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n                                <path class=\"heart-gray\" fill=\"none\" fill-rule=\"evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n                            </svg>\n                            </button>\n                        </div>\n                    </div>\n                    <p class=\"schedule-description\">\n                        ").concat(program.sinopsis, "\n                    </p>\n                </div>\n            </div>\n\n        </div>\n            ");
        }

        concertContentProgramacionGeneral.append(programConcertChannel);
        /* END PROGRAMACIÓN GENERAL - CONCERT CHANNEL*/
      }); //CUADROS PARA EDITAR CONCERT-CHANNEL
      //cuadros de editar

      programingConcertChannel.forEach(function (program, index) {
        var programConcertChannel;

        if (index == 0) {
          if (arrayConcertChannel.includes(program.chapter_id)) {
            programConcertChannel = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n              <div class=\"poster\">\n              <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n              <div class=\"poster-body\">\n              <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n                  <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                  <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                      <div class=\"thumbnail\">\n                     \n                          <img src=\"").concat(program.image, "\" alt=\"\">\n                          \n                      </div>\n                      <div class=\"a-concert-rectangle thumbnail-info-title\">\n                          <div class=\"poster-title-margin\">\n                              <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                          </div>\n                      </div>\n                  </div>\n              </div>\n          </div>\n          </div>\n              ");
          } else {
            programConcertChannel = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n            <div class=\"poster\">\n            <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n            <div class=\"poster-body\">\n\n                <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                    <div class=\"thumbnail\">\n                   \n                        <img src=\"").concat(program.image, "\" alt=\"\">\n                        \n                    </div>\n                    <div class=\"a-concert-rectangle thumbnail-info-title\">\n                        <div class=\"poster-title-margin\">\n                            <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n        </div>\n            ");
          }
        } else {
          if (arrayConcertChannel.includes(program.chapter_id)) {
            programConcertChannel = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n                <div class=\"poster\" >\n                <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n                <div class=\"poster-body\">\n                    <div class=\"showtime-container justify-content-between\">\n                        <p class=\"a-programming-text\">".concat(program.time, "</p>\n                        <button type=\"button\" class=\"poster-button remove-program\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-icon-white.svg\" alt=\"\" class=\"poster-add\"></button>\n                    </div>\n\n                    <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                        <div class=\"thumbnail\">\n                      \n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                            \n                        </div>\n                        <div class=\"a-concert-rectangle thumbnail-info-title\">\n                            <div class=\"poster-title-margin\">\n                                <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n            </div>\n                ");
          } else {
            programConcertChannel = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n            <div class=\"poster\" >\n            <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n            <div class=\"poster-body\">\n                <div class=\"showtime-container justify-content-between\">\n                    <p class=\"a-programming-text\">".concat(program.time, "</p>\n                    <button type=\"button\" class=\"poster-button add-favorites\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-outline.svg\" alt=\"\" class=\"poster-add\"></button>\n                </div>\n\n                <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                    <div class=\"thumbnail\">\n                 \n                        <img src=\"").concat(program.image, "\" alt=\"\">\n                        \n                    </div>\n                    <div class=\"a-concert-rectangle thumbnail-info-title\">\n                        <div class=\"poster-title-margin\">\n                            <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                        </div>\n                    </div>\n               </div>\n            </div>\n        </div>\n        </div>\n            ");
          }
        }

        nowSliderConcertChannelprev.append(programConcertChannel);
        /* END PROGRAMACIÓN GENERAL - CONCERT CHANNEL cuadros de editar*/
      }); //END DE CUADROS

      var programClaroCinema;
      programingClaroCinema.forEach(function (program, index) {
        if (index == 0) {
          if (arrayClaroCinema.includes(program.chapter_id)) {
            programClaroCinema = "\n                <div class=\"poster-live\">\n                  <div class=\"poster-body\">\n\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                          </div>\n                          <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n                ");
          } else {
            programClaroCinema = "\n                <div class=\"poster-live\">\n                  <div class=\"poster-body\">\n\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                          </div>\n                          <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n                ");
          }
        } else {
          if (arrayClaroCinema.includes(program.chapter_id)) {
            programClaroCinema = "\n            <div class=\"poster\" >\n                <div class=\"poster-body\">\n                    <div class=\"showtime-container justify-content-between\">\n                        <p class=\"a-programming-text\">".concat(program.time, "</p>\n                        <button type=\"button\" class=\"poster-button remove-program\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-icon-white.svg\" alt=\"\" class=\"poster-add\"></button>\n                    </div>\n\n                    <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                        <div class=\"thumbnail\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                        <div class=\"a-cinenam-rectangle thumbnail-info-title\">\n                            <div class=\"poster-title-margin\">\n                                <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n                ");
          } else {
            programClaroCinema = "\n                <div class=\"poster\" >\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-between\">\n                          <p class=\"a-programming-text\">".concat(program.time, "</p>\n                          <button type=\"button\" class=\"poster-button add-favorites\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-outline.svg\" alt=\"\" class=\"poster-add\"></button>\n                      </div>\n\n                      <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                          </div>\n                          <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n                ");
          }
        }

        nowSliderClaroCinema.append(programClaroCinema);
        /* PROGRAMACIÓN GENERAL - CLARO CINEMA*/

        if (arrayClaroCinema.includes(program.chapter_id)) {
          programClaroCinema = "\n            <div class=\"schedule-container\">\n                <p class=\"schedule-title\">".concat(program.chapter_title, "</p>\n            <div class=\"schedule-item-body\">\n                <div class=\"schedule-poster\">\n                        <div class=\"thumbnail-prog\" _id=\"").concat(program.chapter_id, "\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"schedule-details\">\n                    <div class=\"schedule-details-header\">\n                        <div>\n                            <p class=\"schedule\">").concat(program.time, " hrs.</p>\n                            <p class=\"rating\">Clasificaci\xF3n: A</p>\n                        </div>\n                        <div>\n                        <button title=\"Eliminar de mi lista\" class=\"button-none programing-button remove-program\" type=\"button\" _id=\"").concat(program.chapter_id, "\">\n                        <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n                            <path class=\"heart-gray-filled\" fill=\"none\" fill-rule=\"evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n                        </svg>\n                        </button>\n                        </div>\n                    </div>\n                    <p class=\"schedule-description\">\n                    ").concat(program.sinopsis, "\n                    </p>\n                </div>\n            </div>\n\n        </div>\n            ");
        } else {
          programClaroCinema = "\n          <div class=\"schedule-container\">\n          <p class=\"schedule-title\">".concat(program.chapter_title, "</p>\n          <div class=\"schedule-item-body\">\n              <div class=\"schedule-poster\">\n                  <div class=\"poster\">\n                      <div class=\"thumbnail-prog\" _id=\"").concat(program.chapter_id, "\">\n                          <img src=\"").concat(program.image, "\" alt=\"\">\n                      </div>\n                  </div>\n              </div>\n\n              <div class=\"schedule-details\">\n                  <div class=\"schedule-details-header\">\n                      <div>\n                          <p class=\"schedule\">").concat(program.time, " hrs.</p>\n                          <p class=\"rating\">Clasificaci\xF3n: A</p>\n                      </div>\n                      <div>\n                          <button title=\"Agregar a mi lista\" class=\"button-none add-favorites programing-button\" type=\"button\" _id=\"").concat(program.chapter_id, "\">\n                          <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n                              <path class=\"heart-gray\" fill=\"none\" fill-rule=\"evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n                          </svg>\n                          </button>\n                      </div>\n                  </div>\n                  <p class=\"schedule-description\">\n                      ").concat(program.sinopsis, "\n                  </p>\n              </div>\n          </div>\n\n      </div>\n            ");
        }

        cinemaContentProgramacionGeneral.append(programClaroCinema);
        /* END PROGRAMACIÓN GENERAL - CLARO CINEMA*/
      }); //CUADROS DE EDICION CLAROCINEMA
      //cuadros para editar

      programingClaroCinema.forEach(function (program, index) {
        var programClaroCinema;

        if (index == 0) {
          if (arrayClaroCinema.includes(program.chapter_id)) {
            programClaroCinema = "\n            \n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n            <div class=\"poster-live\">\n            <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n           \n                  <div class=\"poster-body\">\n\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                         \n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                              \n                          </div>\n                          <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n              </div>\n                ");
          } else {
            programClaroCinema = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n            <div class=\"poster-live\">\n            <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n           \n                  <div class=\"poster-body\">\n\n                      <p class=\"a-programming-text now-live-text\">AHORA EN VIVO</p>\n                      <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                         \n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                              \n                          </div>\n                          <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n              </div>\n                ");
          }
        } else {
          if (arrayClaroCinema.includes(program.chapter_id)) {
            programClaroCinema = "\n            <div class=\"schedule-container\">\n            <div class=\"col-9 p-3 border-t border-l border-r border-b position-relative mb-2\">\n            <img src=\"../images/pencil.svg\" alt=\"\" class=\"pencil\">\n            <p class=\"schedule-title mb-0\">".concat(program.chapter_title, "</p>\n            </div>\n            <div class=\"schedule-item-body\">\n                <div class=\"schedule-poster\">\n                    <div class=\"poster\">\n                        <div class=\"thumbnail-prog\" _id=\"").concat(program.chapter_id, "\">\n                            <img src=\"").concat(program.image, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n                \n                <div class=\"schedule-details\">\n                    <div class=\"schedule-details-header\">\n                        <div>\n                        <div class=\"p-2 border-t border-l border-r border-b position-relative mb-2\">\n                        <img src=\"../images/pencil.svg\" alt=\"\" class=\"pencil\">\n                            <p class=\"schedule\">").concat(program.time, " hrs.</p>\n                            </div>\n                            <div class=\"p-2 border-t border-l border-r border-b position-relative mb-2\">\n                            <img src=\"../images/pencil.svg\" alt=\"\" class=\"pencil\">\n                            <p class=\"rating mb-0\">Clasificaci\xF3n: A</p>\n                            </div>\n                        </div>\n                        <div>\n                            <button title=\"Eliminar de mi lista\" class=\"button-none remove-program programing-button\" type=\"button\" _id=\"").concat(program.chapter_id, "\">\n                            <svg  xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"44\" viewBox=\"0 0 48 44\">\n                                <path class=\"heart-gray-filled\" fill=\"none\" fill-rule=\"evenodd\" stroke=\"#7A7777\" stroke-width=\"3\" d=\"M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z\"/>\n                            </svg>\n                            </button>\n                        </div>\n                    </div>\n                    <div class=\"p-3 border-t border-l border-r border-b position-relative mb-2\">\n                    <img src=\"../images/pencil.svg\" alt=\"\" class=\"pencil\">\n                    <p class=\"schedule-description\">\n                        ").concat(program.sinopsis, "\n                    </p>\n                    </div>\n                </div>\n            </div>\n\n        </div>\n                ");
          } else {
            programClaroCinema = "\n            <div class=\" p-3 border-t border-l border-r border-b position-relative mb-2\">          \n\n                <div class=\"poster\" >\n                <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-between\">\n                          <p class=\"a-programming-text\">".concat(program.time, "</p>\n                          <button type=\"button\" class=\"poster-button add-favorites\" _id=\"").concat(program.chapter_id, "\"><img src=\"./images/posters/heart-outline.svg\" alt=\"\" class=\"poster-add\"></button>\n                      </div>\n\n                      <div class=\"thumbnail-body\" _id=\"").concat(program.chapter_id, "\">\n                          <div class=\"thumbnail\">\n                        \n                              <img src=\"").concat(program.image, "\" alt=\"\">\n                              \n                          </div>\n                          <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                              <div class=\"poster-title-margin\">\n                                  <p class=\"a-poster-text-white\">").concat(program.chapter_title, "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n              </div>\n                ");
          }
        }

        nowSliderClaroCinemaprev.append(programClaroCinema);
        /* END PROGRAMACIÓN GENERAL - CLARO CINEMA cuadros de editar*/
      }); //END CUADROS DE EDICION

      var programNuestraVision = "\n      <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/01-aprende.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">APRENDE</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n  </div>\n\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container justify-content-between\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/02-dress-code.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">DRESS CODE</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n  </div>\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container justify-content-between\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/03-barra-infantil.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">BARRA INFANTIL</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n  </div>\n\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container justify-content-between\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/04-pobre-nino.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">POBRE NI\xD1O RICO</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n  </div>\n\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/05-caja-pandora.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">LA CAJA DE PANDORA: ALEX AGUINAGA</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n  </div>\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/06-el-torito.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">EL TORITO</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n  </div>\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/07-la-estatua.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">LA ESTATUA DE CARNE</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n\n  </div>\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/08-los-leones-del-ring.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">LOS LEONES DEL RING</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n\n  </div>\n\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/09-vidas-extraordinarias.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">VIDAS EXTRAORDINARIAS</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n\n  </div>\n\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/10-titanes-del-ring.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">TITANES DEL RING</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n\n  </div>\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/12-deportes-en-claro.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">DEPORTES EN CLARO</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n\n  </div>\n  <div class=\"poster\">\n      <div class=\"poster-body\">\n          <div class=\"showtime-container\">\n              <p class=\"a-programming-text\">14:30 - 16:30</p>\n              <button type=\"button\" class=\"poster-button\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n          </div>\n          <a href=\"sinopsis.php\">\n              <div class=\"thumbnail\">\n                  <img src=\"./images/nuestra-vision/carousel/13-santo.jpg\" alt=\"\">\n              </div>\n              <div class=\"a-vision-rectangle thumbnail-info-title\">\n                  <div class=\"poster-title-margin\">\n                      <p class=\"a-poster-text-white\">SANTO CONTRA LA MAF\xCDA DEL VICIO</p>\n                  </div>\n              </div>\n          </a>\n      </div>\n  </div>\n      ";
      /*programingNuestraVision.forEach((program, index) => {
        if (index == 0) {
          programNuestraVision = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button add-favorites" _id="${program.chapter_id}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>
                <a href="sinopsis.php" class="text-decoration-none">
                    <div class="thumbnail">
                        <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-vision-rectangle thumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.chapter_title}</p>
                        </div>
                    </div>
                </a>
             </div>
        </div>
          `;
        } else {
          programNuestraVision = `
          <div class="poster" >
            <div class="poster-body">
                <div class="showtime-container">
                    <p class="a-programming-text">${program.time}</p>
                    <button type="button" class="poster-button" _id="${program.chapter_id}"><img src="./images/home/plus.png" alt="" class="poster-add"></button>
                </div>
                 <a href="sinopsis.php" class="text-decoration-none">
                    <div class="thumbnail">
                        <img src="./images/claro-cinema/carrousel/${program.image}" alt="">
                    </div>
                    <div class="a-vision-rectanglethumbnail-info-title">
                        <div class="poster-title-margin">
                            <p class="a-poster-text-white">${program.chapter_title}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
          `;
        }
        nowSliderNuestraVision.append(programNuestraVision);
      });*/

      /*let programClaroSports = `
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
               </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      <div class="poster">
      <div class="poster-body">
          <div class="showtime-container">
              <p class="a-programming-text">14:30 - 16:30</p>
              <button type="button" class="poster-button"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
          </div>
          <a href="sinopsis.php">
              <div class="thumbnail">
              </div>
              <div class="a-sports-rectangle thumbnail-info-title">
                  <div class="poster-title-margin">
                      <p class="a-poster-text-black">¿QUÉ TE HA DADO ESA MUJER?</p>
                  </div>
              </div>
          </a>
      </div>
      </div>
      `;*/

      createTvSlider(nowSliderCanalClaro);
      createTvSlider(nowSliderCanalClaroprev);
      createTvSlider(nowSliderConcertChannel);
      createTvSlider(nowSliderConcertChannelprev);
      createTvSlider(nowSliderClaroCinema);
      createTvSlider(nowSliderClaroCinemaprev); //createTvSlider(nowSliderNuestraVision);

      (0, _user.addFavorites)();
      /* END SLIDER "AHORA EN VIVO CANAL CLARO*/

      /*  PROGRAMACIÓN GENERAL */

      /* END PROGRMACIÓN GENERAL*/

      createClickThumbnails();
    }
  });
  createClickThumbnails();
}

function showSynopsis(id) {
  var dataUser = {
    function: "showSynopsis",
    chapter_id: id
  };
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "./adapters/program.php",
    success: function success(result) {
      var json = JSON.parse(result);

      if (json.code == 200) {
        localStorage.setItem("synopsis", JSON.stringify(json.data));
        location.href = "./sinopsis.php";
      } else {
        var noSynopsis = "\n            <div class=\"no-synopsis-container text-center\">\n                <img src=\"./images/sinopsis/helmet.png\" alt=\"\" class=\"helmet-image\">\n                <h3 class=\"no-synopsis-title a-text-white-monblack\">SIN\xD3PSIS EN <span>CONSTRUCCI\xD3N</span></h3>\n                <p class=\"no-synopsis-text a-text-white-semibold\">La sin\xF3psis de este programa no est\xE1 disponible a\xFAn</p>\n            </div>\n          ";
        $(".synopsis-content").addClass("col-12").html(noSynopsis);
      }
    }
  });
}
},{"./user/user.js":"services/user/user.js"}],"date/date.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.getMonthAndYear = getMonthAndYear;
exports.getDays = getDays;
exports.getDay = getDay;
exports.getDayName = getDayName;
exports.getMonth = getMonth;
exports.getYear = getYear;

function getMonthAndYear(month) {
  var date = new Date();
  var year = date.getFullYear();
  var months = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
  return "".concat(months[month], " ").concat(year);
}

function getMonth(idMonth) {
  var date = new Date();
  var month = date.getMonth() + idMonth;
  return month;
}

function getDays(month) {
  var date = new Date();
  return new Date(date.getFullYear(), date.getMonth() + month, 0).getDate();
}

function getDay() {
  var date = new Date();
  return date.getDate();
}

function getDayName(month, day) {
  var date = new Date();
  var currentDay = new Date(date.getFullYear(), month, day).getUTCDay();
  var days = ["DOM", "LUN", "MAR", "MIER", "JUE", "VIE", "SAB"];
  return days[currentDay];
}

function getYear() {
  var date = new Date();
  return date.getFullYear();
}
},{}],"UI/Slider.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _date = require("../date/date.js");

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Slider = /*#__PURE__*/function () {
  function Slider() {
    _classCallCheck(this, Slider);
  }

  _createClass(Slider, [{
    key: "deleteSlider",
    value: function deleteSlider(container) {
      container.slick("unslick");
    }
  }, {
    key: "createSliderBanner",
    value: function createSliderBanner() {
      $(".header-slider").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false
      });
    }
  }, {
    key: "createSectionSliderHome",
    value: function createSectionSliderHome() {
      $(".section-slider").not(".slick-initialized").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            centerMode: false,
            infinite: true,
            arrows: false,
            dots: true
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: true,
            arrows: false
          }
        }, {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 1900,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }]
      });
    }
  }, {
    key: "createProgramacionSlider",
    value: function createProgramacionSlider(container) {
      container.slick({
        /**/
        responsive: [{
          breakpoint: 767,
          settings: {
            slidesToShow: 7,
            slidesToScroll: 7,
            autoplay: false,
            centerMode: false,
            infinite: true,
            arrows: false,
            dots: true
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 8,
            slidesToScroll: 8,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 1200,
          settings: {
            slidesToShow: 11,
            slidesToScroll: 11,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 1900,
          settings: {
            slidesToShow: 11,
            slidesToScroll: 11,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 10000,
          settings: {
            slidesToShow: 17,
            slidesToScroll: 17,
            infinite: false,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }]
      });
    }
  }, {
    key: "createDaysSlider",
    value: function createDaysSlider(landing, containerSlider, containerSliderEdit) {
      /*Programación general*/
      var date = new Date();
      $(".month").html((0, _date.getMonthAndYear)(date.getMonth()));
      /* Número de días del mes actual */

      var currentMonthDays = (0, _date.getDays)(1);
      /* Número de mes actual*/

      var currentMonth = date.getMonth();
      /* Mes Siguiente*/

      var nextMonth = (0, _date.getDays)(2);
      /* Número de los días restantes del mes actual */

      var numberLastDays = (0, _date.getDays)(1) - (0, _date.getDay)();
      /* Condición: si los días restantes del mes actual
        son menores a 15, mostramos los días del siguiente mes
      */

      var totalDaysSlider = 0;
      var containerItemSlider = "";
      var containerItemSliderEdit = ""; //Variable para editar en programación en backoffice

      var daysSlider = "";

      if (numberLastDays <= 15) {
        /* Número de días por poner en el slider, considerando los días
          restantes del mes actual y los del siguiente mes
        */
        totalDaysSlider = (0, _date.getDays)(2) + ((0, _date.getDays)(1) - (0, _date.getDay)()); //Días del primer mes

        for (var i = (0, _date.getDay)(); i <= (0, _date.getDays)(1); i++) {
          //Día actual
          if (i == (0, _date.getDay)()) {
            daysSlider += "\n            <li rel=\"".concat(landing, "-").concat(i, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-item programing-item ").concat(landing, "-active\">\n              <div class=\"day\">\n                  <p class=\"day-text\">").concat((0, _date.getDayName)(currentMonth, i), "</p>\n                  <p class=\"day-number\">").concat(i, "</p>\n              </div>\n            </li>      \n        ");
            containerItemSlider += "\n        <div id=\"".concat(landing, "-").concat(i, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content\"></div>\n        ");
            containerItemSliderEdit += "\n        <div id=\"".concat(landing, "-").concat(i, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content-edit\"></div>\n      ");
          } else {
            //Días restantes
            daysSlider += "\n        <li rel=\"".concat(landing, "-").concat(i, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-item programing-item\">\n          <div class=\"day\">\n              <p class=\"day-text\">").concat((0, _date.getDayName)(currentMonth, i), "</p>\n              <p class=\"day-number\">").concat(i, "</p>\n          </div>\n        </li>      \n        ");
            containerItemSlider += "\n        <div id=\"".concat(landing, "-").concat(i, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content\"></div>\n        ");
          }
        } //Días del mes siguiente


        for (var _i = 1; _i <= (0, _date.getDays)(2); _i++) {
          daysSlider += "\n      <li rel=\"".concat(landing, "-").concat(_i, "-").concat((0, _date.getMonth)(1), "\" class=\"").concat(landing, "-item programing-item\">\n        <div class=\"day\">\n            <p class=\"day-text\">").concat((0, _date.getDayName)(currentMonth + 1, _i), "</p>\n            <p class=\"day-number\">").concat(_i, "</p>\n        </div>\n      </li>      \n  ");
          containerItemSlider += "\n        <div id=\"".concat(landing, "-").concat(_i, "-").concat((0, _date.getMonth)(1), "\" class=\"").concat(landing, "-content\"></div>        \n        ");
          containerItemSliderEdit += "\n        <div id=\"".concat(landing, "-").concat(_i, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content-edit\"></div>\n        ");
        }

        var programmingContainerSlider = $("#pro-" + landing + "-slider");
        programmingContainerSlider.append(daysSlider);
        containerSlider.append(containerItemSlider);
        containerSliderEdit.append(containerItemSliderEdit);
      } else {
        //En caso de que al mes le falten más de 15 días para terminar
        totalDaysSlider = currentMonthDays;

        for (var _i2 = (0, _date.getDay)(); _i2 <= totalDaysSlider; _i2++) {
          if (_i2 == (0, _date.getDay)()) {
            //Día actual activo
            daysSlider += "\n            <li rel=\"".concat(landing, "-").concat(_i2, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-item programing-item ").concat(landing, "-active\">\n              <div class=\"day\">\n                  <p class=\"day-text\">").concat((0, _date.getDayName)(currentMonth, _i2), "</p>\n                  <p class=\"day-number\">").concat(_i2, "</p>\n              </div>\n            </li>      \n        ");
            containerItemSlider += "\n        <div id=\"".concat(landing, "-").concat(_i2, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content\"></div>\n        ");
            containerItemSliderEdit += "\n        <div id=\"".concat(landing, "-").concat(_i2, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content-edit\"></div>\n        ");
          } else {
            //Días siguientes
            daysSlider += "\n        <li rel=\"".concat(landing, "-").concat(_i2, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-item programing-item\">\n          <div class=\"day\">\n              <p class=\"day-text\">").concat((0, _date.getDayName)(currentMonth, _i2), "</p>\n              <p class=\"day-number\">").concat(_i2, "</p>\n          </div>\n        </li>      \n        ");
            containerItemSlider += "\n        <div id=\"".concat(landing, "-").concat(_i2, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content\"></div>\n        ");
            containerItemSliderEdit += "\n        <div id=\"".concat(landing, "-").concat(_i2, "-").concat((0, _date.getMonth)(0), "\" class=\"").concat(landing, "-content-edit\"></div>\n        ");
          }
        }

        var _programmingContainerSlider = $("#pro-" + landing + "-slider");

        _programmingContainerSlider.html(daysSlider);

        containerSlider.append(containerItemSlider);
        containerSliderEdit.append(containerItemSliderEdit);
      }
    }
  }, {
    key: "showImageBanner",
    value: function showImageBanner() {
      /* Banner Landing Canal Claro */
      var imagesBannerClaroCanal = [{
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-01-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-01-B.jpg"
      }, {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-02-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-02-B.jpg"
      }, {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-03-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-03-B.jpg"
      }];
      var imagesBannerClaroCinema = [{
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-B.jpg"
      }, {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-02-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-02-B.jpg"
      }, {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-03-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-03-B.jpg"
      }];
      var imagesBannerConcertChannel = [{
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-01-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-01-B.jpg"
      }, {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-02-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-02-B.jpg"
      }, {
        imageBannerPC: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-03-A.jpg",
        imageBannerTablet: "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-03-B.jpg"
      }];
      var imagesBannerProgramming = [];
      /*
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/pc/CANAL-CLARO-04-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/tablet/CANAL-CLARO-04-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/pc/CANAL-CLARO-05-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/tablet/CANAL-CLARO-05-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/pc/CANAL-CLARO-06-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/canal-claro/tablet/CANAL-CLARO-06-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-04-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-04-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-05-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/tablet/C-CINEMA-05-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/pc/C-CINEMA-06-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/claro-cinema/tablet/C-CINEMA-06-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/pc/CONCERT-04-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/tablet/CONCERT-04-A.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/pc/CONCERT-05-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/tablet/CONCERT-05-B.jpg",
      },
      {
        imageBannerPC:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/pc/CONCERT-06-A.jpg",
        imageBannerTablet:
          "http://www.claronetworks.openofficedospuntocero.info/images/programacion/banner/concert-channel/tablet/CONCERT-06-B.jpg",
      },
      ];
      */

      var slideBanner = "";
      var slideBannerClaroCinema = "";
      var slideBannerConcertChannel = "";
      var slideBannerProgramming = "";
      var bannerClaroCanal = $("#banner-claro-canal");
      var bannerClaroCinema = $("#banner-claro-cinema");
      var bannerConcertChannel = $("#banner-concert-channel");
      var bannerProgramming = $("#banner-programming");
      var headerSlider = $(".header-slider"); //$(".header-slider").slick("unslick");

      if (headerSlider.hasClass("slick-initialized")) {
        headerSlider.unslick();
      }

      if (screen.width < 768) {
        $(".claro-image-banner-1").attr("src", "");
        $(".concert-image-banner-1").attr("src", "");
        $(".cinema-image-banner-1").attr("src", "");
      } else if (screen.width >= 768 && screen.width < 1200) {
        imagesBannerProgramming.forEach(function (image) {
          slideBannerProgramming += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        imagesBannerClaroCanal.forEach(function (image) {
          slideBanner += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerTablet, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        imagesBannerClaroCinema.forEach(function (image) {
          slideBannerClaroCinema += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerTablet, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        imagesBannerConcertChannel.forEach(function (image) {
          slideBannerConcertChannel += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerTablet, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        bannerClaroCanal.html(slideBanner);
        bannerClaroCinema.html(slideBannerClaroCinema);
        bannerConcertChannel.html(slideBannerConcertChannel);
        bannerProgramming.html(slideBannerProgramming);
      } else if (screen.width >= 1200) {
        if (headerSlider.hasClass("slick-initialized")) {
          headerSlider.unslick();
        }

        imagesBannerProgramming.forEach(function (image) {
          slideBannerProgramming += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        imagesBannerClaroCanal.forEach(function (image) {
          slideBanner += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        imagesBannerClaroCinema.forEach(function (image) {
          slideBannerClaroCinema += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        imagesBannerConcertChannel.forEach(function (image) {
          slideBannerConcertChannel += "        \n        <div class=\"header-slide\">\n          <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n        </div>");
        });
        bannerClaroCanal.html(slideBanner);
        bannerClaroCinema.html(slideBannerClaroCinema);
        bannerConcertChannel.html(slideBannerConcertChannel);
        bannerProgramming.html(slideBannerProgramming);
      }

      $(".header-slider").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
        autoplay: true,
        autoplaySpeed: 2000
      });
      $(window).resize(function () {
        if (headerSlider.hasClass("slick-initialized")) {
          headerSlider.slick("unslick");
        }

        if (screen.width < 768) {
          $(".claro-image-banner-1").attr("src", "");
          $(".concert-image-banner-1").attr("src", "");
          $(".cinema-image-banner-1").attr("src", "");
        } else if (screen.width >= 768 && screen.width < 1200) {
          slideBanner = "";
          imagesBannerClaroCanal.forEach(function (image) {
            slideBanner += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerTablet, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          slideBannerClaroCinema = "";
          imagesBannerClaroCinema.forEach(function (image) {
            slideBannerClaroCinema += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerTablet, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          slideBannerConcertChannel = "";
          imagesBannerConcertChannel.forEach(function (image) {
            slideBannerConcertChannel += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerTablet, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          slideBannerProgramming = "";
          imagesBannerProgramming.forEach(function (image) {
            slideBannerProgramming += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          bannerClaroCanal.html(slideBanner);
          bannerClaroCinema.html(slideBannerClaroCinema);
          bannerConcertChannel.html(slideBannerConcertChannel);
          bannerProgramming.html(slideBannerProgramming);
          $(".headr-slider").slick();
        } else if (screen.width >= 1200) {
          slideBanner = "";
          imagesBannerClaroCanal.forEach(function (image) {
            slideBanner += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          slideBannerClaroCinema = "";
          imagesBannerClaroCinema.forEach(function (image) {
            slideBannerClaroCinema += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          slideBannerConcertChannel = "";
          imagesBannerConcertChannel.forEach(function (image) {
            slideBannerConcertChannel += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          slideBannerProgramming = "";
          imagesBannerProgramming.forEach(function (image) {
            slideBannerProgramming += "        \n          <div class=\"header-slide\">\n            <img src=\"".concat(image.imageBannerPC, "\" class=\"rellax\" data-rellax=\"10\">\n          </div>");
          });
          bannerClaroCanal.html(slideBanner);
          bannerClaroCinema.html(slideBannerClaroCinema);
          bannerConcertChannel.html(slideBannerConcertChannel);
          bannerProgramming.html(slideBannerProgramming);
        }

        $(".header-slider").not(".slick-initialized").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false,
          prevArrow: '<img src="./images/sliders/prev.png" class="arrow-prev" />',
          nextArrow: '<img src="./images/sliders/next.png" class="arrow-next" />',
          autoplay: true,
          autoplaySpeed: 2000
        });
      });
    }
  }]);

  return Slider;
}();

exports.default = Slider;
},{"../date/date.js":"date/date.js"}],"UI/Section.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _Slider = _interopRequireDefault(require("./Slider.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Section = /*#__PURE__*/function () {
  function Section() {
    _classCallCheck(this, Section);
  }

  _createClass(Section, [{
    key: "createProgramacionSlider",
    value: function createProgramacionSlider() {
      programacion_slider = $(".programacion-slider").slick({
        /**/
        responsive: [{
          breakpoint: 767,
          settings: {
            slidesToShow: 7,
            slidesToScroll: 7,
            autoplay: false,
            centerMode: false,
            infinite: true,
            arrows: false,
            dots: true
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 8,
            slidesToScroll: 8,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 1200,
          settings: {
            slidesToShow: 11,
            slidesToScroll: 11,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 1900,
          settings: {
            slidesToShow: 11,
            slidesToScroll: 11,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 10000,
          settings: {
            slidesToShow: 17,
            slidesToScroll: 17,
            infinite: false,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }]
      });
    }
  }, {
    key: "renderHome",
    value: function renderHome(json) {
      console.log(json);
      /* Header Home*/

      $("#slider-header-home").slick("unslick");
      var imagesHeader = [json.data.block_1_image_background_1, json.data.block_1_image_background_2, json.data.block_1_image_background_3, json.data.block_1_image_background_4, json.data.block_1_image_background_5];
      var imagesHeaderLength = imagesHeader.length;
      var divImageHeader = "";

      for (var i = 0; i < imagesHeaderLength; i++) {
        divImageHeader += "\n      <div class=\"header-slide\">\n        <img src=\"".concat(imagesHeader[i], "\" class=\"rellax\" data-rellax=\"10\">\n      </div>");
      }

      $("#slider-header-home").append(divImageHeader);
      $("#slider-header-home").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false
      });
      var titleHeader = "<span class=\"header-span\">".concat(json.data.block_1_title, " </span>").concat(json.data.block_1_subtitle);
      $(".header-h1").html(titleHeader);
      $(".source-video").attr("src", json.data.block_1_video_name);
      var titleTv = "".concat(json.data.block_2_title1, " <span class=\"header-span\">").concat(json.data.block_2_title2, "</span><span class=\"header-point\">\u2022</span>");
      $(".title-tv").html(titleTv);
      $(".claro-nav-image").attr("src", json.data.block_2_channel1_icon);
      $(".concert-nav-image").attr("src", json.data.block_2_channel2_icon);
      $(".cinema-nav-image").attr("src", json.data.block_2_channel3_icon);
      $(".nv-nav-image").attr("src", json.data.block_2_channel4_icon);
      $(".sports-nav-image").attr("src", json.data.block_2_channel5_icon);
      /* End Header */

      /*CLARO CANAL HOME */

      /* TITLE */

      $(".a-claro-channel-title").text(json.data.block_3_title);
      /* SUBTITLE */

      $(".a-claro-home-subtitle").text(json.data.block_3_subtitle);
      /* BUTTON */

      $(".btn-canal-claro-home").text(json.data.block_3_button1);
      /* SLIDER */

      var favoritesClaroCanalSynopsis = JSON.parse(localStorage.getItem("favoritesCanalClaro"));
      var favoritesConcertChannelSynopsis = JSON.parse(localStorage.getItem("favoritesConcertChannel"));
      var favoritesClaroCinemaSynopsis = JSON.parse(localStorage.getItem("favoritesClaroCinema"));
      var arrayFavoritesId = [];

      if (localStorage.getItem("favoritesCanalClaro")) {
        var favoritesCanalClaroLength = favoritesClaroCanalSynopsis.length;

        for (var _i = 0; _i < favoritesCanalClaroLength; _i++) {
          var favoriteId = favoritesClaroCanalSynopsis[_i].chapter_id;
          arrayFavoritesId.push(favoriteId);
        }
      }

      if (localStorage.getItem("favoritesConcertChannel")) {
        var _favoritesCanalClaroLength = favoritesConcertChannelSynopsis.length;

        for (var _i2 = 0; _i2 < _favoritesCanalClaroLength; _i2++) {
          var _favoriteId = favoritesConcertChannelSynopsis[_i2].chapter_id;
          arrayFavoritesId.push(_favoriteId);
        }
      }

      if (localStorage.getItem("favoritesClaroCinema")) {
        var _favoritesCanalClaroLength2 = favoritesClaroCinemaSynopsis.length;

        for (var _i3 = 0; _i3 < _favoritesCanalClaroLength2; _i3++) {
          var _favoriteId2 = favoritesClaroCinemaSynopsis[_i3].chapter_id;
          arrayFavoritesId.push(_favoriteId2);
        }
      }

      var block3Image = [json.data.block_3_image1, json.data.block_3_image2, json.data.block_3_image3, json.data.block_3_image4, json.data.block_3_image5];
      $(".section-slider").slick("unslick");
      $(".cinema-home-slider").slick("unslick");
      var blockImage3Length = block3Image.length;
      var programLarge = "";

      for (var _i4 = 0; _i4 < blockImage3Length; _i4++) {
        if (arrayFavoritesId.includes(block3Image[_i4].chapter_id)) {
          programLarge += "\n        <div class=\"poster\">\n        <div class=\"poster-body\">\n            <div class=\"showtime-container justify-content-end\">\n         \n                <button type=\"button\" class=\"poster-button remove-program\" _id=".concat(block3Image[_i4].chapter_id, "><img class=\"poster-add\" src=\"./images/posters/heart-icon-white.svg\" alt=\"\"></button>\n            </div>\n              <div class=\"thumbnail-body\" _id=").concat(block3Image[_i4].chapter_id, "\">\n                <div class=\"thumbnail-large\">\n                    <img src=\"").concat(block3Image[_i4].image_vertical, "\" alt=\"\">\n                </div>\n              </div>\n        </div>\n    </div> \n        ");
        } else {
          programLarge += "\n        <div class=\"poster\">\n        <div class=\"poster-body\">\n            <div class=\"showtime-container justify-content-end\">\n                <button type=\"button\" class=\"poster-button add-favorites\" _id=".concat(block3Image[_i4].chapter_id, "><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n            </div>\n            <div class=\"thumbnail-body\" _id=").concat(block3Image[_i4].chapter_id, "\">\n                <div class=\"thumbnail-large\">\n                    <img src=\"").concat(block3Image[_i4].image_vertical, "\" alt=\"\">\n                </div>\n            </div>\n        </div>\n    </div> \n        ");
        }
      }

      $(".claro-slider-home").append(programLarge); //CUADROS DE EDITAR PARA HOME

      var programLargeprev = "";

      for (var _i5 = 0; _i5 < blockImage3Length; _i5++) {
        if (arrayFavoritesId.includes(block3Image[_i5].chapter_id)) {
          programLargeprev += "\n        <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n        <div class=\"poster\">\n        <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n        <div class=\"poster-body\">\n            <div class=\"showtime-container justify-content-end\">\n         \n                <button type=\"button\" class=\"poster-button remove-program\" _id=".concat(block3Image[_i5].chapter_id, "><img class=\"poster-add\" src=\"./images/posters/heart-icon-white.svg\" alt=\"\"></button>\n            </div>\n              <div class=\"thumbnail-body\" _id=").concat(block3Image[_i5].chapter_id, "\">\n                <div class=\"thumbnail-large\">\n                    <img src=\"").concat(block3Image[_i5].image_vertical, "\" alt=\"\">\n                </div>\n              </div>\n        </div>\n    </div> \n    </div>\n        ");
        } else {
          programLargeprev += "\n        <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n              <div class=\"poster\">\n              <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n        <div class=\"poster-body\">\n            <div class=\"showtime-container justify-content-end\">\n                <button type=\"button\" class=\"poster-button add-favorites\" _id=".concat(block3Image[_i5].chapter_id, "><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n            </div>\n            <div class=\"thumbnail-body\" _id=").concat(block3Image[_i5].chapter_id, "\">\n                <div class=\"thumbnail-large\">\n                    <img src=\"").concat(block3Image[_i5].image_vertical, "\" alt=\"\">\n                </div>\n            </div>\n        </div>\n    </div> \n    </div>\n        ");
        }
      }

      $(".claro-slider-home-prev").append(programLargeprev); //END CUADROS

      var sliderHome = new _Slider.default();
      /* End slider Canal Claro */

      /* End Canal Claro - Home*/

      /* CONCERT CHANNEL HOME*/

      /* SUBTITLE*/

      $(".a-concert-home-subtitle").text(json.data.block_4_subtitle);
      /* BUTTON */

      $(".button-concert-home").text(json.data.block_4_button1);
      /* SLIDER */

      var block4Image = [json.data.block_4_image1, json.data.block_4_image2, json.data.block_4_image3, json.data.block_4_image4];
      var blockImage4Length = block4Image.length;
      var concertHomeVideosMobile = "";

      for (var _i6 = 0; _i6 < blockImage4Length; _i6++) {
        if (arrayFavoritesId.includes(block4Image[_i6].chapter_id)) {
          concertHomeVideosMobile += "\n            <div class=\"poster\">\n                <div class=\"poster-body\">\n                    <div class=\"showtime-container justify-content-end\">\n                        <button type=\"button\" class=\"poster-button remove-program\" _id=\"".concat(block4Image[_i6].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-icon-white.svg\" alt=\"\"></button>\n                    </div>\n                    <div class=\"thumbnail-body\" _id=\"").concat(block4Image[_i6].chapter_id, "\">\n                        <div class=\"thumbnail-large\">\n                            <img src=\"").concat(block4Image[_i6].image_vertical, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n            </div>\n            ");
        } else {
          concertHomeVideosMobile += "\n            <div class=\"poster\">\n                <div class=\"poster-body\">\n                     <div class=\"showtime-container justify-content-end\">\n                        <button type=\"button\" class=\"poster-button add-favorites\" _id=\"".concat(block4Image[_i6].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n                      </div>\n                      <div class=\"thumbnail-body\" _id=\"").concat(block4Image[_i6].chapter_id, "\">\n                        <div class=\"thumbnail-large\">\n                            <img src=\"").concat(block4Image[_i6].image_vertical, "\" alt=\"\">\n                        </div>\n                      </div>\n                </div>\n            </div>\n            ");
        }
      }

      $(".concert-home-slider").append(concertHomeVideosMobile); //CUADROS DE EDITAR PARA CONCERT-HOME

      var concertHomeVideosMobileprev = "";

      for (var _i7 = 0; _i7 < blockImage4Length; _i7++) {
        if (arrayFavoritesId.includes(block4Image[_i7].chapter_id)) {
          concertHomeVideosMobileprev += "\n        <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n        <div class=\"poster\">\n        <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n                <div class=\"poster-body\">\n                    <div class=\"showtime-container justify-content-end\">\n                        <button type=\"button\" class=\"poster-button remove-program\" _id=\"".concat(block4Image[_i7].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-icon-white.svg\" alt=\"\"></button>\n                    </div>\n                    <div class=\"thumbnail-body\" _id=\"").concat(block4Image[_i7].chapter_id, "\">\n                        <div class=\"thumbnail-large\">\n                            <img src=\"").concat(block4Image[_i7].image_vertical, "\" alt=\"\">\n                        </div>\n                    </div>\n                </div>\n            </div>\n            </div>\n            ");
        } else {
          concertHomeVideosMobileprev += "\n        <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n        <div class=\"poster\">\n        <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n                <div class=\"poster-body\">\n                     <div class=\"showtime-container justify-content-end\">\n                        <button type=\"button\" class=\"poster-button add-favorites\" _id=\"".concat(block4Image[_i7].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n                      </div>\n                      <div class=\"thumbnail-body\" _id=\"").concat(block4Image[_i7].chapter_id, "\">\n                        <div class=\"thumbnail-large\">\n                            <img src=\"").concat(block4Image[_i7].image_vertical, "\" alt=\"\">\n                        </div>\n                      </div>\n                </div>\n            </div>\n            </div>\n            ");
        }
      }

      $(".concert-home-slider-prev").append(concertHomeVideosMobileprev); //END CUADROS

      /* HOME CLARO CINEMA SECTION*/

      /* TITLE */

      /* SUBTITLE*/

      $(".a-cinema-home-subtitle").text(json.data.block_5_subtitle);
      /* BUTTON */

      $(".button-cinema-home").text(json.data.block_5_button1);
      /* SLIDER*/

      var block5Image = [json.data.block_5_image1, json.data.block_5_image2, json.data.block_5_image3, json.data.block_5_image4];
      var blockImage5Length = block5Image.length;
      var cinemaHomeVideosMobile = "";

      for (var _i8 = 0; _i8 < blockImage5Length; _i8++) {
        if (arrayFavoritesId.includes(block5Image[_i8].chapter_id)) {
          cinemaHomeVideosMobile += "\n              <div class=\"poster\">\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-end\">\n                        \n                          <button type=\"button\" class=\"poster-button remove-program\" _id=\"".concat(block5Image[_i8].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-icon-white.svg\" alt=\"\"></button>\n                      </div>\n                      <div class=\"thumbnail-body\" _id=\"").concat(block5Image[_i8].chapter_id, "\">\n                          <div class=\"thumbnail-large\">\n                              <img src=\"").concat(block5Image[_i8].image_vertical, "\" alt=\"\">\n                          </div>\n                      </div>\n                    \n                  </div>\n              </div>\n              ");
        } else {
          cinemaHomeVideosMobile += "\n              <div class=\"poster\">\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-end\">\n                 \n                          <button type=\"button\" class=\"poster-button add-favorites\" _id=\"".concat(block5Image[_i8].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n                      </div>\n                      <div class=\"thumbnail-body\" _id=\"").concat(block5Image[_i8].chapter_id, "\">\n                          <div class=\"thumbnail-large\">\n                              <img src=\"").concat(block5Image[_i8].image_vertical, "\" alt=\"\">\n                          </div>\n                      </div>\n                  </div>\n              </div>\n              ");
        }
      }

      $(".cinema-home-slider").append(cinemaHomeVideosMobile); //CUADROS PARA EDITAR CINEMA

      var cinemaHomeVideosMobileprev = "";

      for (var _i9 = 0; _i9 < blockImage5Length; _i9++) {
        if (arrayFavoritesId.includes(block5Image[_i9].chapter_id)) {
          cinemaHomeVideosMobileprev += "\n        <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n            <div class=\"poster\">\n        <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-end\">\n                        \n                          <button type=\"button\" class=\"poster-button remove-program\" _id=\"".concat(block5Image[_i9].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-icon-white.svg\" alt=\"\"></button>\n                      </div>\n                      <div class=\"thumbnail-body\" _id=\"").concat(block5Image[_i9].chapter_id, "\">\n                          <div class=\"thumbnail-large\">\n                              <img src=\"").concat(block5Image[_i9].image_vertical, "\" alt=\"\">\n                          </div>\n                      </div>\n                    \n                  </div>\n              </div>\n              </div>\n              ");
        } else {
          cinemaHomeVideosMobileprev += "\n        <div class=\" p-3 border-t border-l border-r border-b position-relative\">          \n\n        <div class=\"poster\">\n        <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\"style=\"width:15px\"></button>\n\n          \n                  <div class=\"poster-body\">\n                      <div class=\"showtime-container justify-content-end\">\n                 \n                          <button type=\"button\" class=\"poster-button add-favorites\" _id=\"".concat(block5Image[_i9].chapter_id, "\"><img class=\"poster-add\" src=\"./images/posters/heart-outline.svg\" alt=\"\"></button>\n                      </div>\n                      <div class=\"thumbnail-body\" _id=\"").concat(block5Image[_i9].chapter_id, "\">\n                          <div class=\"thumbnail-large\">\n                              <img src=\"").concat(block5Image[_i9].image_vertical, "\" alt=\"\">\n                          </div>\n                      </div>\n                  </div>\n              </div>\n              </div>\n              ");
        }
      }

      $(".cinema-home-slider-prev").append(cinemaHomeVideosMobileprev); //END DE CUADROS

      $(".cinema-home-slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            centerMode: false,
            infinite: true,
            arrows: false,
            dots: true
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: true,
            arrows: false
          }
        }, {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 1900,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }, {
          breakpoint: 10000,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: false,
            arrows: true,
            prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
          }
        }]
      });
      /* Nuestra Visión - Home*/

      /*let nuestraVisionHomeVideos = "";
       for (let i = 0; i < blockImage4Length; i++) {
        if (arrayFavoritesId.includes(block4Image[i].chapter_id)) {
          nuestraVisionHomeVideos += `
              <div class="poster">
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">14:30 - 16:30</p>
                          <button type="button" class="poster-button remove-program" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>
                      </div>
                      <a href="sinopsis.php" class="text-decoration-none">
                          <div class="thumbnail">
                              <img src="${block4Image[i].image_horizontal}" alt="">
                          </div>
                          <div class="a-concert-rectangle ">
                              <p class="a-poster-text-white">${block4Image[i].subtitle}</p>
                          </div>
                      </a>
                  </div>
              </div>
              `;
        } else {
          nuestraVisionHomeVideos += `
              <div class="poster">
                  <div class="poster-body">
                      <div class="showtime-container">
                          <p class="a-programming-text">14:30 - 16:30</p>
                          <button type="button" class="poster-button remove-program" _id="${block4Image[i].chapter_id}"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>
                      </div>
                      <a href="sinopsis.php" class="text-decoration-none">
                          <div class="thumbnail">
                              <img src="${block4Image[i].image_horizontal}" alt="">
                          </div>
                          <div class="a-concert-rectangle ">
                              <p class="a-poster-text-white">${block4Image[i].subtitle}</p>
                          </div>
                      </a>
                  </div>
              </div>
              `;
        }
      }*/

      /* End Nuestra Visión - Home */

      sliderHome.createSectionSliderHome();
    }
  }, {
    key: "renderCanalClaro",
    value: function renderCanalClaro(json) {
      //obtenemos las iamgenes del carrusel 1
      var data = json.data;
      var carrusel1 = [];
      var counter = 1;

      while (true) {
        try {
          if (data["block_4_carrusel_1_image" + counter]) {
            carrusel1[counter - 1] = data["block_4_carrusel_1_image" + counter];
            counter++;
          } else {
            break;
          }
        } catch (error) {
          break;
        }
      } //carrusel 2


      var carrusel2 = [];
      var counter2 = 1;

      while (true) {
        try {
          if (data["block_4_carrusel_2_image" + counter2]) {
            carrusel2[counter2 - 1] = data["block_4_carrusel_2_image" + counter2];
            counter2++;
          } else {
            break;
          }
        } catch (error) {
          break;
        }
      }

      var slider = new _Slider.default();
      var dontLoseSlider = $("#dontLose-claro-slider");
      var sectionSlider = $(".section-slider");
      var exlusiveContentSlider = $("#exlusiveContentClaroSlider");
      sectionSlider.slick("unslick");
      var programsExlusiveContent = [{
        chapter_id: 1,
        program_title: "DRESS CODE",
        image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/05-DRESS-CODE.jpg"
      }, {
        chapter_id: 2,
        program_title: "FIT FOR LIFE",
        image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/06-FIT4LIFE.jpg"
      }, {
        chapter_id: 3,
        program_title: "CONEXIÓN CLARO",
        image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/07-CONEXION.jpg"
      }, {
        chapter_id: 4,
        program_title: "LA CAJA DE PANDORA",
        image: "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/08-CAJA-DE-PANDORA.jpg"
      }];
      var programTiensQueVerlo = "";
      var programExlusiveContent = "";
      /*
        Almacenamos los programas en otras variables para dibujar los programas con bordes.
        Esto  para la parevisualización en Backoffice de los landings
      */

      var programTienesQueVerloEdit = "";
      var programExlusiveContentEdit = "";
      carrusel1.forEach(function (program) {
        programTiensQueVerlo += "\n      <div class=\"poster\" >\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-claro-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.genre, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
        programTienesQueVerloEdit += "\n      <div class=\"poster p-3 border-l border-r border-b border-t position-relative\">\n      <button class=\"d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2\"> Editar <img src=\"./images/General/edit-white.svg\" alt=\"\" class=\"ml-2\" style=\"width:15px\"></button>\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-claro-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.genre, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
      });
      carrusel2.forEach(function (program) {
        programExlusiveContent += "\n      <div class=\"poster\" >\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-claro-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.title, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
        programExlusiveContentEdit += "\n      <div class=\"poster border-l p-3 border-r border-t border-b\" >\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-claro-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.title, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
      });
      $("#dontLose-claro-sliderEdit").append(programTienesQueVerloEdit);
      $("#exlusiveContentClaroSliderEdit").append(programExlusiveContentEdit);
      dontLoseSlider.append(programTiensQueVerlo);
      exlusiveContentSlider.append(programExlusiveContent);
      slider.createSectionSliderHome();
    }
  }, {
    key: "renderClaroCinema",
    value: function renderClaroCinema(json) {
      //obtenemos las iamgenes del carrusel 1
      var data = json.data;
      var carrusel1 = [];
      var counter = 1;

      while (true) {
        try {
          if (data["block_4_carrusel_1_image" + counter]) {
            carrusel1[counter - 1] = data["block_4_carrusel_1_image" + counter];
            counter++;
          } else {
            break;
          }
        } catch (error) {
          break;
        }
      } //carrusel 2


      var carrusel2 = [];
      var counter2 = 1;

      while (true) {
        try {
          if (data["block_4_carrusel_2_image" + counter2]) {
            carrusel2[counter2 - 1] = data["block_4_carrusel_2_image" + counter2];
            counter2++;
          } else {
            break;
          }
        } catch (error) {
          break;
        }
      }

      var slider = new _Slider.default();
      var claro_cinema_carrusel_1 = $("#claro_cinema_carrusel_1");
      var sectionSlider = $(".section-slider");
      var claro_cinema_carrusel_2 = $("#claro_cinema_carrusel_2");
      sectionSlider.slick("unslick");
      var Strinfcarrusel1 = "";
      var Strinfcarrusel2 = "";
      /*
        Almacenamos los programas en otras variables para dibujar los programas con bordes.
        Esto  para la parevisualización en Backoffice de los landings
      */

      ;
      carrusel1.forEach(function (program) {
        Strinfcarrusel1 += "\n      <div class=\"poster\" >\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.genre, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
      });
      carrusel2.forEach(function (program) {
        Strinfcarrusel2 += "\n      <div class=\"poster\" >\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-cinema-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.title, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
      });
      claro_cinema_carrusel_1.append(Strinfcarrusel1);
      claro_cinema_carrusel_2.append(Strinfcarrusel2);
      slider.createSectionSliderHome();
    }
  }, {
    key: "renderConcertChanel",
    value: function renderConcertChanel(json) {
      //obtenemos las iamgenes del carrusel 1
      var data = json.data;
      var carrusel1 = [];
      var counter = 1;

      while (true) {
        try {
          if (data["block_4_carrusel_1_image" + counter]) {
            carrusel1[counter - 1] = data["block_4_carrusel_1_image" + counter];
            counter++;
          } else {
            break;
          }
        } catch (error) {
          break;
        }
      } //carrusel 2


      var carrusel2 = [];
      var counter2 = 1;

      while (true) {
        try {
          if (data["block_4_carrusel_2_image" + counter2]) {
            carrusel2[counter2 - 1] = data["block_4_carrusel_2_image" + counter2];
            counter2++;
          } else {
            break;
          }
        } catch (error) {
          break;
        }
      }

      var slider = new _Slider.default();
      var concert_channel_carrusel_1 = $("#concert_channel_carrusel_1");
      var sectionSlider = $(".section-slider");
      var concert_channel_carrusel_2 = $("#concert_channel_carrusel_2");
      sectionSlider.slick("unslick");
      var Strinfcarrusel1 = "";
      var Strinfcarrusel2 = "";
      /*
        Almacenamos los programas en otras variables para dibujar los programas con bordes.
        Esto  para la parevisualización en Backoffice de los landings
      */

      ;
      carrusel1.forEach(function (program) {
        Strinfcarrusel1 += "\n      <div class=\"poster\" >\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-concert-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.genre, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
      });
      carrusel2.forEach(function (program) {
        Strinfcarrusel2 += "\n      <div class=\"poster\" >\n        <div class=\"poster-body\">\n            <div class=\"thumbnail-body\" _id=\"".concat(program.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"").concat(program.image_horizontal, "\" alt=\"\">\n                </div>\n                <div class=\"a-concert-rectangle thumbnail-info-title\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(program.title, "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      ");
      });
      concert_channel_carrusel_1.append(Strinfcarrusel1);
      concert_channel_carrusel_2.append(Strinfcarrusel2);
      slider.createSectionSliderHome();
    }
  }, {
    key: "renderProgramation",
    value: function renderProgramation(json) {
      var data = json.data; //cambiamos los iconos de los canales

      $('#icon_canal_claro').attr('src', data.icon_canal_claro);
      $('#icon_concert_channel').attr('src', data.icon_concert_channel);
      $('#icon_claro_cinema').attr('src', data.icon_claro_cinema); //agregamos el slider

      var banner_images = [];
      var counter = 1;

      while (true) {
        try {
          if (data["image_slider_" + counter]) {
            banner_images[counter - 1] = data["image_slider_" + counter];
            counter++;
          } else {
            break;
          }
        } catch (error) {
          break;
        }
      }

      $("#banner-programming").slick("unslick");
      var imagesHeaderLength = banner_images.length;
      var divImageHeader = "";

      for (var i = 0; i < imagesHeaderLength; i++) {
        divImageHeader += "\n      <div class=\"header-slide\">\n        <img src=\"".concat(banner_images[i], "\" class=\"rellax\" data-rellax=\"10\">\n      </div>");
      }

      $("#banner-programming").append(divImageHeader);
      $("#banner-programming").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false,
        autoplay: true
      });
    }
  }, {
    key: "renderProgramation_edi",
    value: function renderProgramation_edi(json) {
      var data = json.data; //cambiamos los iconos de los canales

      $('#icon_canal_claro_edi').attr('src', data.icon_canal_claro);
      $('#icon_concert_channel_edi').attr('src', data.icon_concert_channel);
      $('#icon_claro_cinema_edi').attr('src', data.icon_claro_cinema); //agregamos el slider

      /**
      let banner_images=[];
      let counter=1;
      while(true){
        try {
          if(data["image_slider_"+counter]){
            banner_images[counter-1]=data["image_slider_"+counter];
            counter++;
          }else{
            break;
            
          }
        } catch (error) {
          break;
         
        }
      }
      $("#banner-programming-edi").slick("unslick");
      
       let imagesHeaderLength = banner_images.length;
      let divImageHeader = "";
      for (let i = 0; i < imagesHeaderLength; i++) {
        divImageHeader += `
                  <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">
                      <label for="image_logo" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">
                          <!--   <span class="a-text-bold-warm text-plus mb90 shadow-contrast add-photo">472px X 295px</span>-->
                          <img src="${banner_images[i]}" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />
                      </label>
                  </div>`;
      }
       $("#banner-programming-edi").append(divImageHeader);
      $("#banner-programming-edi").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: false,
        autoplay:true
      });
      */
    }
  }]);

  return Section;
}();

exports.default = Section;
},{"./Slider.js":"UI/Slider.js"}],"services/Section.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.getMetaKeys = getMetaKeys;

var _Section = _interopRequireDefault(require("../UI/Section.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function getMetaKeys(landing) {
  var data = {
    function: "getMetakeys",
    landing: landing
  };
  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/section.php",
    success: function success(result) {
      var json = JSON.parse(result);
      var sectionUI = new _Section.default();
      console.log(json);

      switch (landing) {
        case 'home':
          sectionUI.renderHome(json);
          break;

        case 'canal_claro':
          sectionUI.renderCanalClaro(json);
          break;

        case 'claro_cinema':
          sectionUI.renderClaroCinema(json);
          break;

        case 'concert_channel':
          sectionUI.renderConcertChanel(json);
          break;

        case 'programation':
          sectionUI.renderProgramation(json);
          break;

        case 'programation_edi':
          sectionUI.renderProgramation_edi(json);
          break;

        default:
          break;
      }
    }
  });
}
},{"../UI/Section.js":"UI/Section.js"}],"UI/Navbar.js":[function(require,module,exports) {
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Navbar = /*#__PURE__*/function () {
  function Navbar() {
    _classCallCheck(this, Navbar);
  }

  _createClass(Navbar, [{
    key: "renderMenuWhite",
    value: function renderMenuWhite() {
      var menuWhite = $("#menu-white");
      var menuMobileWhite = "\n        <nav class=\"navbar-white\">\n            <div class=\"nav-content\">\n                <div class=\"claro-logo\">\n                    <img class=\"menu-responsive\" src=\"../images/aboutus/hamburger-about-us.svg\" alt=\"\" />\n                    <div class=\"d-flex justify-content-center\">\n                        <a href=\"home.php\">\n                            <img class=\"logo\" src=\"../images/home/claro-logo.svg\" alt=\"\" />\n                        </a>\n                    </div>\n                </div>\n        \n                <div class=\"login\">\n                    <a href=\"index.php\" class=\"login-item\"><img class=\"login-country\" alt=\"\" /></a>\n                </div>\n            </div>\n        </nav>\n        ";
      var menuTabletWhite = "\n    <nav class=\"navbar-white\">\n        <div class=\"nav-content\">\n            <div class=\"nav-logo\">\n                <img class=\"menu-responsive-tablet\" src=\"../images/aboutus/hamburger-about-us.svg\" alt=\"\" />\n                <a href=\"home.php\">\n                    <img class=\"logo\" src=\"../images/home/claro-logo.svg\" alt=\"\" />\n                </a>\n\n            </div>\n\n            <div class=\"nav-country-image\">\n                <a href=\"index.php\" class=\"login-item\"><img src=\"\" class=\"login-country\" alt=\"\" /></a>\n            </div>\n        </div>\n    </nav>\n    ";
      var menuDesktopWhite = "    \n    <nav class=\"menu-desktop\">\n    <div class=\"nav-content\">\n        <div class=\"claro-logo\">\n\n            <a href=\"home.php\"><img class=\"logo\" src=\"./images/home/claro-logo.svg\" alt=\"\" /></a>\n        </div>\n\n        <div class=\"user-options\">\n        </div>\n    </div>\n    <div class=\"claro-navbar\">\n        <div>\n            <a href=\"claro-canal.php\" class=\"navbar-link text-decoration-none\">\n                <p class=\"navbar-item-black text-semibold\">Canal Claro</p>\n            </a>\n        </div>\n        <div>\n            <a href=\"concert-channel.php\" class=\"navbar-link text-decoration-none\">\n                <p class=\"navbar-item-black text-semibold\">Concert Channel</p>\n            </a>\n        </div>\n        <div>\n            <a href=\"claro-cinema.php\" class=\"navbar-link text-decoration-none\">\n                <p class=\"navbar-item-black text-semibold\">Claro Cinema</p>\n            </a>\n        </div>\n        <div>\n            <a href=\"https://nuestravision.tv\" class=\"navbar-link text-decoration-none\">\n                <p class=\"navbar-item-black text-semibold\">Nuestra Visi\xF3n</p>\n            </a>\n        </div>\n        <div>\n            <a href=\"https://www.marca.com/claro-mx/\" class=\"navbar-link text-decoration-none\">\n                <p class=\"navbar-item-black text-semibold\">Claro Sports</p>\n            </a>\n        </div>\n        <div>\n            <a href=\"programacion.php\" class=\"navbar-link text-decoration-none\">\n                <p class=\"navbar-item-black text-semibold\">Programaci\xF3n</p>\n            </a>\n        </div>\n    </div>\n</nav>";

      if ($(window).width() < 768) {
        menuWhite.html(menuMobileWhite);
        console.log("Menu Móvil");
      } else if ($(window).width() < 1200) {
        menuWhite.html(menuTabletWhite);
        console.log("Menu Tablet");
      } else if ($(window).width() >= 1200) {
        menuWhite.html(menuDesktopWhite);
        console.log("Menu Desktop");
      }

      $(window).resize(function () {
        var countryFlag = localStorage.getItem("src");
        menuMobileWhite = "\n        <nav class=\"navbar-white\">\n            <div class=\"nav-content\">\n                <div class=\"claro-logo\">\n                    <img class=\"menu-responsive\" src=\"../images/aboutus/hamburger-about-us.svg\" alt=\"\" />\n                    <div class=\"d-flex justify-content-center\">\n                        <a href=\"home.php\">\n                            <img class=\"logo\" src=\"../images/home/claro-logo.svg\" alt=\"\" />\n                        </a>\n                    </div>\n                </div>\n        \n                <div class=\"login\">\n                    <a href=\"index.php\" class=\"login-item\"><img src=\"".concat(countryFlag, "\" class=\"login-country\" alt=\"\" /></a>\n                </div>\n            </div>\n        </nav>\n        ");
        var menuTabletWhite = "\n        <nav class=\"navbar-white\">\n            <div class=\"nav-content\">\n                <div class=\"nav-logo\">\n                    <img class=\"menu-responsive-tablet\" src=\"../images/aboutus/hamburger-about-us.svg\" alt=\"\" />\n                    <a href=\"home.php\">\n                        <img class=\"logo\" src=\"../images/home/claro-logo.svg\" alt=\"\" />\n                    </a>\n    \n                </div>\n    \n                <div class=\"nav-country-image\">\n                    <a href=\"index.php\" class=\"login-item\"><img src=\"".concat(countryFlag, "\" class=\"login-country\" alt=\"\" /></a>\n                </div>\n            </div>\n        </nav>\n        ");
        var menuDesktopWhite = "    \n      <nav class=\"menu-desktop\">\n      <div class=\"nav-content\">\n          <div class=\"claro-logo\">\n  \n              <a href=\"home.php\"><img class=\"logo\" src=\"./images/home/claro-logo.svg\" alt=\"\" /></a>\n          </div>\n  \n          <div class=\"user-options\">\n          </div>\n      </div>\n      <div class=\"claro-navbar\">\n          <div>\n              <a href=\"claro-canal.php\" class=\"navbar-link text-decoration-none\">\n                  <p class=\"navbar-item-black text-semibold\">Canal Claro</p>\n              </a>\n          </div>\n          <div>\n              <a href=\"concert-channel.php\" class=\"navbar-link text-decoration-none\">\n                  <p class=\"navbar-item-black text-semibold\">Concert Channel</p>\n              </a>\n          </div>\n          <div>\n              <a href=\"claro-cinema.php\" class=\"navbar-link text-decoration-none\">\n                  <p class=\"navbar-item-black text-semibold\">Claro Cinema</p>\n              </a>\n          </div>\n          <div>\n              <a href=\"https://nuestravision.tv\" class=\"navbar-link text-decoration-none\">\n                  <p class=\"navbar-item-black text-semibold\">Nuestra Visi\xF3n</p>\n              </a>\n          </div>\n          <div>\n              <a href=\"https://www.marca.com/claro-mx/\" class=\"navbar-link text-decoration-none\">\n                  <p class=\"navbar-item-black text-semibold\">Claro Sports</p>\n              </a>\n          </div>\n          <div>\n              <a href=\"programacion.php\" class=\"navbar-link text-decoration-none\">\n                  <p class=\"navbar-item-black text-semibold\">Programaci\xF3n</p>\n              </a>\n          </div>\n      </div>\n  </nav>";
        menuWhite.html("");

        if ($(window).width() < 768) {
          menuWhite.html(menuMobileWhite);
          console.log("Menu Móvil");
        } else if ($(window).width() < 1200) {
          menuWhite.html(menuTabletWhite);
          console.log("Menu Tablet");
        } else if ($(window).width() >= 1200) {
          menuWhite.html(menuDesktopWhite);
          console.log("Menu Desktop");
        }
      });
    }
  }]);

  return Navbar;
}();

exports.default = Navbar;
},{}],"main.js":[function(require,module,exports) {
"use strict";

var _scroll = require("./scroll/scroll.js");

var _form = require("./form/form.js");

var _session = require("./session/session.js");

var _user = require("./services/user/user.js");

var _country = require("./country/country.js");

var _Program = require("./services/Program.js");

var _date = require("./date/date.js");

var _Slider = _interopRequireDefault(require("./UI/Slider.js"));

var _Section = require("./services/Section.js");

var _Navbar = _interopRequireDefault(require("./UI/Navbar.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/* User */

/* Program */

/* Date */

/* Slider */

/* Section Metakeys*/
var programacion_slider;
var tvConcertSlider;
var url = location.href;
var url2 = "http://www.claronetworks.openofficedospuntocero.info/v1.2/cuenta-confirmada.html";
var arrayUrl = url.split("?");
var data = {
  token: arrayUrl[1]
};
console.log(data);

if (arrayUrl[0] == url2) {
  (0, _form.validateToken)(data);
}

var country = localStorage.getItem("country");
var gender = localStorage.getItem("gender");

if (country) {
  $(".SeleccionPaisLista").text(country);
}

if (gender) {
  var iconFemale = $("#women");
  var iconMale = $("#men");
  var genderMale = $("#hombre");
  var genderFemale = $("#mujer");

  if (gender == "F") {
    genderFemale.attr("checked", true);
    genderMale.attr("checked", false);
    iconMale.attr("src", "images/datos-adicionales/masculino-inactivo.svg");
    iconFemale.attr("src", "images/datos-adicionales/femenino-activo.svg");
  } else {
    genderFemale.attr("checked", false);
    genderMale.attr("checked", true);
    iconMale.attr("src", "images/datos-adicionales/masculino-activo.svg");
    iconFemale.attr("src", "images/datos-adicionales/femenino-inactivo.svg");
  }
}

var day = localStorage.getItem("day");
var month = localStorage.getItem("month");
var year = localStorage.getItem("year");

if (day && month && year) {
  $(".SeleccionDiaLista").text(day);
  $(".SeleccionMesLista").text(month);
  $(".SeleccionAñoLista").text(year);
}

$(document).ready(function () {
  var dateUTC = new Date();
  console.log(dateUTC.getUTCHours());
  /* Banner*/

  var sliderBanner = new _Slider.default();
  sliderBanner.showImageBanner();
  /* End Banner */

  /* Navbar */

  /*let navbarWhiteInstance = new Navbar();
  navbarWhiteInstance.renderMenuWhite();*/

  /* End Navbar */

  /* Sinópsis*/

  (0, _Program.createClickThumbnails)();
  /*End Sinópsis */

  /* Lista de favoritos del usuario*/

  var favoritesCanalClaro = JSON.parse(localStorage.getItem("favoritesCanalClaro"));
  var favoritesConcertChannel = JSON.parse(localStorage.getItem("favoritesConcertChannel"));
  var favoritesClaroCinema = JSON.parse(localStorage.getItem("favoritesClaroCinema"));
  var listFavorites = $(".mi-lista-container");
  var myFavorites;

  if (!favoritesCanalClaro && !favoritesConcertChannel && !favoritesClaroCinema) {
    myFavorites = "\n    <div class=\"text-center mt-4\">\n      <img src=\"./images/mi-lista/favorites.svg\" alt=\"\" class=\"no-favorites-img\">\n    </div>\n    <div class=\"no-gutters mt-4\">\n      <div class=\"col-12\">\n          <p class=\"a-text-warm-grey-bold mb-3 text-center no-favorites-title mb-xl-4\">No tienes favoritos guardados todav\xEDa</p>\n          <p class=\"a-text-warm-grey-regular text-center no-favorites-subtitle\">Explora y descubre m\xE1s</p>\n      </div>\n    </div>\n\n        ";
    listFavorites.append(myFavorites);
  } else {
    if (favoritesCanalClaro != null) {
      if (favoritesCanalClaro.length != 0) {
        var programsCanalClaroList = "";
        favoritesCanalClaro.forEach(function (favorite) {
          if (favorite.active == 0) {
            programsCanalClaroList += "\n            <div class=\"list-item-container\" >\n            <div class=\"poster\">\n             <div class=\"thumbnail-body\" _id=\"".concat(favorite.chapter_id, "\">\n                <div class=\"thumbnail\">\n                     <img src=\"./images/home/carrusel-ahora-en-vivo/").concat(favorite.image, "\" alt=\"\">\n                </div>\n                <div class=\"a-claro-rectangle\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(favorite.program_title, "</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class=\"myList-details-container myList-details-mobile\">\n                <div class=\"d-flex info-schedule justify-content-between no-gutters\">\n      \n                    <div class=\"col-6\">\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <button  class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"./images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                </div>\n                <div class=\"no-gutters d-flex  align-items-center justify-content-between\">\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class=\"col-6 d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\">\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-tablet no-gutters\">\n                <div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                </div>\n      \n                <div class=\"d-flex  align-items-end flex-column justify-content-between\">\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\">\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-desktop\">\n                <div class=\"d-flex justify-content-between\">\n                    <div>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class=\"text-right mb-3\">\n                            <button title=\"Eliminar de mi lista\" class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                            </button>\n                        </div>\n                        <div class=\"d-flex align-items-center justify-content-end\">\n                            <p class=\"rating-alert\">ALERTAS</p>\n                            <label class=\"switch-alert\">\n                                <input type=\"checkbox\" class=\"myList-alert\" >\n                                <span class=\"slideralert roundalert\"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class=\"schedule-description\">\n                        ").concat(favorite.sinopsis, "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            ");
          } else {
            programsCanalClaroList += "\n            <div class=\"list-item-container\" >\n            <div class=\"poster\">\n             <div class=\"thumbnail-body\" _id=\"".concat(favorite.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"./images/home/carrusel-ahora-en-vivo/").concat(favorite.image, "\" alt=\"\">\n                </div>\n                <div class=\"a-claro-rectangle\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(favorite.program_title, "</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class=\"myList-details-container myList-details-mobile\">\n                <div class=\"d-flex info-schedule justify-content-between no-gutters\">\n      \n                    <div class=\"col-6\">\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <button  class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"./images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                </div>\n                <div class=\"no-gutters d-flex  align-items-center justify-content-between\">\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class=\"col-6 d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\" checked>\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-tablet no-gutters\">\n                <div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                </div>\n      \n                <div class=\"d-flex  align-items-end flex-column justify-content-between\">\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\" checked>\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-desktop\">\n                <div class=\"d-flex justify-content-between\">\n                    <div>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class=\"text-right mb-3\">\n                            <button title=\"Eliminar de mi lista\" class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                            </button>\n                        </div>\n                        <div class=\"d-flex align-items-center justify-content-end\">\n                            <p class=\"rating-alert\">ALERTAS</p>\n                            <label class=\"switch-alert\">\n                                <input type=\"checkbox\" class=\"myList-alert\" checked>\n                                <span class=\"slideralert roundalert\"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class=\"schedule-description\">\n                    ").concat(favorite.sinopsis, "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            ");
          }
        });
        var programsCanalClaro = "\n        <div class=\"claro-list section-list-container\">\n              <h1 class=\"claro-list-title list-title-section\">Claro Canal</h1>\n                ".concat(programsCanalClaroList, "\n        </div>        \n        ");
        $("#claro-canal-favorites").append(programsCanalClaro);
      }
    }

    if (favoritesConcertChannel != null) {
      if (favoritesConcertChannel.length != 0) {
        /* CONCERT CHANNEL */
        var programsConcertChannelList = "";
        favoritesConcertChannel.forEach(function (favorite) {
          if (favorite.active == 0) {
            programsConcertChannelList += "\n            <div class=\"list-item-container\" >\n            <div class=\"poster\">\n              <div class=\"thumbnail-body\" _id=\"".concat(favorite.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"./images/concert-channel/carrousel/").concat(favorite.image, "\" alt=\"\">\n                </div>\n                <div class=\"a-concert-rectangle\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(favorite.program_title, "</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class=\"myList-details-container myList-details-mobile\">\n                <div class=\"d-flex info-schedule justify-content-between no-gutters\">\n      \n                    <div class=\"col-6\">\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                </div>\n                <div class=\"no-gutters d-flex  align-items-center justify-content-between\">\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class=\"col-6 d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\">\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-tablet no-gutters\">\n                <div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                </div>\n      \n                <div class=\"d-flex  align-items-end flex-column justify-content-between\">\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\">\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-desktop\">\n                <div class=\"d-flex justify-content-between\">\n                    <div>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class=\"text-right mb-3\">\n                            <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                            </button>\n                        </div>\n                        <div class=\"d-flex align-items-center justify-content-end\">\n                            <p class=\"rating-alert\">ALERTAS</p>\n                            <label class=\"switch-alert\">\n                                <input type=\"checkbox\" class=\"myList-alert\">\n                                <span class=\"slideralert roundalert\"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class=\"schedule-description\">\n                    ").concat(favorite.sinopsis, "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            ");
          } else {
            programsConcertChannelList += "\n            <div class=\"list-item-container\" >\n            <div class=\"poster\">\n             <div class=\"thumbnail-body\" _id=\"".concat(favorite.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"./images/concert-channel/carrousel/").concat(favorite.image, "\" alt=\"\">\n                </div>\n                <div class=\"a-concert-rectangle\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(favorite.program_title, "</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class=\"myList-details-container myList-details-mobile\">\n                <div class=\"d-flex info-schedule justify-content-between no-gutters\">\n      \n                    <div class=\"col-6\">\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                </div>\n                <div class=\"no-gutters d-flex  align-items-center justify-content-between\">\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class=\"col-6 d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\" checked>\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-tablet no-gutters\">\n                <div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                </div>\n      \n                <div class=\"d-flex  align-items-end flex-column justify-content-between\">\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\" checked>\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-desktop\">\n                <div class=\"d-flex justify-content-between\">\n                    <div>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class=\"text-right mb-3\">\n                            <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                            </button>\n                        </div>\n                        <div class=\"d-flex align-items-center justify-content-end\">\n                            <p class=\"rating-alert\">ALERTAS</p>\n                            <label class=\"switch-alert\">\n                                <input type=\"checkbox\" class=\"myList-alert\" checked>\n                                <span class=\"slideralert roundalert\"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class=\"schedule-description\">\n                    ").concat(favorite.sinopsis, "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            ");
          }
        });
        var programsConcertChannel = "\n      <div class=\"concert-list section-list-container\">\n        <h1 class=\"concert-list-title list-title-section\">Concert Channel</h1>\n        ".concat(programsConcertChannelList, "\n      </div>\n");
        $("#concert-channel-favorites").append(programsConcertChannel);
      }
    }

    if (favoritesClaroCinema != null) {
      /* CLARO CINEMA */
      if (favoritesClaroCinema.length != 0) {
        var programsClaroCinemaList = "";
        favoritesClaroCinema.forEach(function (favorite) {
          if (favorite.active == 0) {
            programsClaroCinemaList += "\n            <div class=\"list-item-container\">\n            <div class=\"poster\">\n              <div class=\"thumbnail-body\" _id=\"".concat(favorite.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"./images/claro-cinema/carrousel/").concat(favorite.image, "\" alt=\"\">\n                </div>\n                <div class=\"a-cinema-rectangle\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(favorite.program_title, "</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class=\"myList-details-container myList-details-mobile\">\n                <div class=\"d-flex info-schedule justify-content-between no-gutters\">\n      \n                    <div class=\"col-6\">\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                </div>\n                <div class=\"no-gutters d-flex  align-items-center justify-content-between\">\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class=\"col-6 d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\">\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-tablet no-gutters\">\n                <div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                </div>\n      \n                <div class=\"d-flex align-items-end flex-column justify-content-between\">\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\">\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-desktop\">\n                <div class=\"d-flex justify-content-between\">\n                    <div>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class=\"text-right mb-3\">\n                            <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"./images/mi-lista/heart.svg\">\n                            </button>\n                        </div>\n                        <div class=\"d-flex align-items-center justify-content-end\">\n                            <p class=\"rating-alert\">ALERTAS</p>\n                            <label class=\"switch-alert\">\n                                <input type=\"checkbox\" class=\"myList-alert\">\n                                <span class=\"slideralert roundalert\"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class=\"schedule-description\">\n                    ").concat(favorite.sinopsis, "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            ");
          } else {
            programsClaroCinemaList += "\n            <div class=\"list-item-container\">\n            <div class=\"poster\">\n             <div class=\"thumbnail-body\" _id=\"".concat(favorite.chapter_id, "\">\n                <div class=\"thumbnail\">\n                    <img src=\"./images/claro-cinema/carrousel/").concat(favorite.image, "\" alt=\"\">\n                </div>\n                <div class=\"a-cinema-rectangle\">\n                    <div class=\"poster-title-margin\">\n                        <p class=\"a-poster-text-white\">").concat(favorite.program_title, "</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class=\"myList-details-container myList-details-mobile\">\n                <div class=\"d-flex info-schedule justify-content-between no-gutters\">\n      \n                    <div class=\"col-6\">\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\" type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                </div>\n                <div class=\"no-gutters d-flex  align-items-center justify-content-between\">\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class=\"col-6 d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\" checked>\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-tablet no-gutters\">\n                <div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                </div>\n      \n                <div class=\"d-flex align-items-end flex-column justify-content-between\">\n                    <div>\n                        <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"images/mi-lista/heart.svg\">\n                        </button>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-end\">\n                        <p class=\"rating-alert\">ALERTAS</p>\n                        <label class=\"switch-alert\">\n                            <input type=\"checkbox\" class=\"myList-alert\" checked>\n                            <span class=\"slideralert roundalert\"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class=\"myList-details-container myList-details-desktop\">\n                <div class=\"d-flex justify-content-between\">\n                    <div>\n                        <p class=\"rating\">Clasificaci\xF3n: A</p>\n                    </div>\n                    <div>\n                        <p class=\"schedule-days\">Lunes a Viernes</p>\n                        <p class=\"schedule\">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class=\"text-right mb-3\">\n                            <button class=\"button-none remove-program\" _id=\"").concat(favorite.chapter_id, "\"  type=\"button\"><img src=\"./images/mi-lista/heart.svg\">\n                            </button>\n                        </div>\n                        <div class=\"d-flex align-items-center justify-content-end\">\n                            <p class=\"rating-alert\">ALERTAS</p>\n                            <label class=\"switch-alert\">\n                                <input type=\"checkbox\" class=\"myList-alert\" checked>\n                                <span class=\"slideralert roundalert\"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class=\"schedule-description\">\n                    ").concat(favorite.sinopsis, "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            ");
          }
        });
        var programsClaroCinema = "\n        <div class=\"cinema-list section-list-container\">\n          <h1 class=\"cinema-list-title list-title-section\">Claro <span>Cinema</span></h1>\n            ".concat(programsClaroCinemaList, "\n        </div>    \n  ");
        $("#claro-cinema-favorites").append(programsClaroCinema);
      }
    }
  }

  var removeButtonProgram = $(".remove-program");

  if (removeButtonProgram) {
    removeButtonProgram.click(function (e) {
      var id = localStorage.getItem("id");
      var programId = $(this).attr("_id");
      var itemList = $(this).closest(".list-item-container");
      (0, _user.removeFavorites)(id, programId, $(this), itemList);
    });
  }

  $(".myList-details-container").click(function (e) {
    if (e.target.classList.contains("myList-alert")) {
      var alert = $(this).find(".myList-alert").is(":checked");
      var program_id = $(this).find(".button-none").attr("_id");
      var user_id = localStorage.getItem("id");
      (0, _user.updateAlertProgram)(user_id, program_id, alert);
    }
  });
  /* END LISTA DE FAVORITOS DEL USUARIO */

  var saveDataButton = $("#save-data-user");
  saveDataButton.click(function () {
    var day = $(".SeleccionDiaLista").text();
    var month = $(".SeleccionMesLista").text();
    var year = $(".SeleccionAñoLista").text();
    var date = year + "-" + month + "-" + day;
    var genderMale = $("#hombre");
    var genderFemale = $("#mujer");
    var gender;

    if (genderMale.is(":checked")) {
      gender = "M";
    } else if (genderFemale.is(":checked")) {
      gender = "F";
    }

    var id = parseInt(localStorage.getItem("id"));
    var country = $(".SeleccionPaisLista").text();
    (0, _user.updateDataUser)(id, gender, date, country);
  });
  $("#avatar-button").click(function () {
    var id = localStorage.getItem("id");
    var avatar = $(".active-navAvatar").children().attr("src");
    var idAvatar = $(".active-navAvatar").children().attr("_id");
    (0, _user.selectAvatar)(id, avatar, idAvatar);
  });
  var alertsOff = $("#alerts-off");
  var alertMinutesBefore = $("#alert-minutes-before");
  var alertStart = $("#alert-start");
  var alertEmail = $("#alert-email");
  var alertWeb = $("#alert-web");
  var alerts = [alertMinutesBefore, alertStart, alertEmail, alertWeb];
  alertsOff.click(function () {
    if (alertsOff.is(":checked")) {
      var alertsLength = alerts.length;

      for (i = 0; i < alertsLength; i++) {
        alerts[i].prop({
          checked: false,
          disabled: true
        });
      }
    } else {
      var _alertsLength = alerts.length;

      for (i = 0; i < _alertsLength; i++) {
        alerts[i].prop("disabled", false);
      }
    }
  });
  $("#alert-button").click(function () {
    var alertsOffVal = $("#alerts-off:checked").val();
    var alertMinutesBeforeVal = $("#alert-minutes-before:checked").val();
    var alertStartVal = $("#alert-start:checked").val();
    var alertEmailVal = $("#alert-email:checked").val();
    var alertWebVal = $("#alert-web:checked").val();

    if (!alertsOffVal) {
      alertsOffVal = 0;
    }

    if (!alertMinutesBeforeVal) {
      alertMinutesBeforeVal = 15;
    }

    if (!alertStartVal) {
      alertStartVal = 0;
    }

    if (!alertEmailVal) {
      alertEmailVal = 0;
    }

    if (!alertWebVal) {
      alertWebVal = 0;
    }

    var userId = localStorage.getItem("id");
    var configJson = {
      user_id: userId,
      desactivate: alertsOffVal,
      minutes: alertMinutesBeforeVal,
      beginning: alertStartVal,
      email: alertEmailVal,
      web: alertWebVal
    };
    (0, _user.updateAlerts)(configJson);
  });
  /*End Serivce - USER */

  /*Service - Program */

  /*Mostrar u ocultar password de registro o login */

  var iconPassword = document.querySelectorAll(".icon-eye");
  var iconLength = iconPassword.length;

  if (iconPassword !== null) {
    for (var _i = 0; _i < iconLength; _i++) {
      iconPassword[_i].addEventListener("click", function () {
        (0, _form.ShowHidePassword)(this);
      });
    }
  }
  /*End función Mostrar u ocultar password de registro o login */

  /*Función elegir un país y mostrar la bandera en navbar */


  var numPaises = document.getElementsByClassName("name_paises").length;
  var paises = document.getElementsByClassName("name_paises");

  for (var contador = 0; contador < numPaises; contador++) {
    paises[contador].addEventListener("click", function () {
      (0, _session.selectCountry)($(this));
    });
  }
  /*End función elegir un país y mostrar la bandera en navbar */


  $(".signup-button").click(function () {
    var messagePasswordError = $(".caracteres-min");
    var messageErrorEmail = $(".nocorreo");
    var messageErrorUser = $(".nouser");
    var inputUser = $("#usuario");
    var inputEmail = $("#signup-correo");
    var inputPassword = $("#signup-password");
    var modalUsername = $("#modal-username");

    if ((0, _form.validateUser)(inputUser, messageErrorUser) && (0, _form.validateEmail)(inputEmail, messageErrorEmail) && (0, _form.validatePassword)(inputPassword, messagePasswordError)) {
      (0, _user.registerUser)(inputUser, inputEmail, inputPassword);
      modalUsername.html(inputUser.val());
      return true;
    } else {
      return false;
    }
  });
  $("#login-button").click(function () {
    var inputEmail = $(".input-email");
    var inputPassword = $(".input-password");
    var messageError = $("#error_email");
    var messagePasswordError = $(".caracteres-min");

    if ((0, _form.validateEmail)(inputEmail, messageError) && (0, _form.validatePassword)(inputPassword, messagePasswordError)) {
      var email = inputEmail.val();
      var password = inputPassword.val();
      (0, _user.signIn)(email, password);
      return true;
    } else {
      return false;
    }
  });
  var session = localStorage.getItem("session");

  if (session == 1) {
    setTimeout(function () {
      (0, _user.showNotification)();
    }, 2000);
    /* Señalar Avatar */

    var idAvatarStorage = localStorage.getItem("idAvatar");

    if (idAvatarStorage) {
      var avatars = $(".avatar-item").children();
      var length = avatars.length;
      avatars.removeClass("active-navAvatar");
      avatars.each(function (index, avatar) {
        var itemAvatar = $(this).closest(".avatar-item").addClass("active-navAvatar");
        itemAvatar.removeClass("active-navAvatar");

        if ($(this).attr("_id") == idAvatarStorage) {
          itemAvatar.addClass("active-navAvatar");
        }
      });
    }
    /*VERIFICAR ALERTAS EN SESIÓN*/


    var alertBeginning = localStorage.getItem("alertBeginning");

    var _alertWeb = localStorage.getItem("alertWeb");

    var _alertEmail = localStorage.getItem("alertEmail");

    var alertMinutes = localStorage.getItem("alertMinutes");
    var inputAlertMinutes = $("#alert-minutes-before");
    var inputAlertBeginning = $("#alert-start");
    var inputAlertWeb = $("#alert-web");
    var inputAlertEmail = $("#alert-email");
    var inputAlertsOff = $("#alerts-off");

    if (alertMinutes == 0 && alertBeginning == 0 && _alertWeb == 0 && !_alertEmail == 0) {
      inputAlertsOff.prop("checked", true);
    } else {
      inputAlertsOff.prop("checked", false);

      if (alertMinutes == 30) {
        inputAlertMinutes.prop("checked", true);
      } else {
        inputAlertMinutes.prop("checked", false);
      }

      if (alertBeginning == 1) {
        inputAlertBeginning.prop("checked", true);
      } else {
        inputAlertBeginning.prop("checked", false);
      }

      if (_alertWeb == 1) {
        inputAlertWeb.prop("checked", true);
      } else {
        inputAlertWeb.prop("checked", false);
      }

      if (_alertEmail == 1) {
        inputAlertEmail.prop("checked", true);
      } else {
        inputAlertEmail.prop("checked", false);
      }
    }

    var sidebarContent = $(".sidebar-content");
    var sidebarItem = "                \n    <div class=\"sidebar-item sidebar-border-bottom\" id=\"sidebar-logout\">\n      <span class=\"dropdown-p\" >Cerrar sesi\xF3n</span>\n    </div>";
    var userOptions = $(".user-options");
    var sidebarHeader = $(".sidebar-header");
    var userName = localStorage.getItem("name");
    var avatar = "<img src=\"".concat(localStorage.getItem("avatar"), "\" />");
    var menuMobile = "            \n      <div class=\"d-flex align-items-center\">\n        <div class=\"image-user image-user-container mr-3\">\n            ".concat(avatar, "\n        </div>\n\n        <div class=\"d-flex flex-column justify-contet-between\">\n            <p class=\"a-text-white-bold login-text\">").concat(userName, "</p>\n            <div>\n                <a href=\"mi-lista.php\"><img class=\"mr-3 options-item\" src=\"./images/menu/mi-lista-icon.png\" alt=\"\" /></a>\n                <a href=\"configuracion.php\"><img class=\"options-item\" src=\"./images/menu/configuracion-icon.png\" alt=\"\" /></a>\n            </div>\n        </div>\n      </div>");
    var menuIngreso = "\n      <div class=\"menu-ingreso\">\n      <div class=\"icon-user position-relative mr-3\">\n        <div class=\"tooltip-logout\">\n          <div class=\"d-flex\">\n            <img src=\"./images/menu/logout.svg\" />\n            <p class=\"tooltip-text ml-3\">Cerrar Sesi\xF3n</p>\n          </div>\n        </div>\n        <div class=\"image-user-container\">\n          <div class=\"image-user\">\n          ".concat(avatar, "\n          </div>\n        </div>\n      </div>\n\n      <p class=\"name-user mr-3\">").concat(userName, "</p>\n      <a href=\"mi-lista.php\"><img class=\"mr-3 options-item\" src=\"./images/menu/mi-lista-icon.png\" alt=\"\" /></a>\n      <a href=\"configuracion.php\"><img class=\"mr-3 options-item\" src=\"./images/menu/configuracion-icon.png\" alt=\"\" /></a>\n      <a href=\"index.php\" class=\"login-item options-item\"><img class=\"login-country\" src=\"\" alt=\"\" /></a>\n      </div>\n      ");
    sidebarContent.append(sidebarItem);
    sidebarHeader.html(menuMobile);
    userOptions.html(menuIngreso);
  } else {
    var menuBase = "    \n    <div class=\"login\">\n      <a href=\"login.php\" class=\"login-item mr-2\"><img src=\"./images/home/user-login.svg\" alt=\"\" /></a>\n      <a href=\"index.php\" class=\"login-item\"><img class=\"login-country\" src=\"\" alt=\"\" /></a>\n    </div>";

    var _userOptions = $(".user-options");

    var _sidebarHeader = $(".sidebar-header");

    var menuBaseMobile = "            \n    <div class=\"d-flex align-items-center\">\n      <div class=\"image-user mr-3\">\n          <a href=\"login.php\"><img src=\"./images/menu/icon-white-user.svg\" alt=\"\"></a>\n      </div>\n\n      <div>\n          <p class=\"a-text-white-bold login-text\">ingresar</p>\n      </div>\n    </div>";

    _userOptions.html(menuBase);

    _sidebarHeader.html(menuBaseMobile);
  }

  var sessionSrc = localStorage.getItem("src");
  var loginCountry = $(".login-country"); //!sessionSrc && window.location.pathname !== "/v1.2/"

  /*if (!sessionSrc && window.location.pathname !== "/v1.2/") {
    location.href = "/v1.2/";
  } else {
    loginCountry.attr("src", sessionSrc);
  }*/

  $(".tooltip-logout").click(function () {
    (0, _user.signOut)();
  });
  $(".terms-conditions-button, .arrow-back").click(function () {
    window.history.back();
  });
  loginCountry.attr("src", sessionSrc);
  /* Hacer aparecer el tooltip */

  $(".icon-user").hover(function () {
    var tooltipLogout = $(".tooltip-logout");
    /*tooltipLogout.toggle();*/

    tooltipLogout.css("display", "block");
  }, function () {
    var tooltipLogout = $(".tooltip-logout");
    tooltipLogout.css("display", "none");
  });
  $(document).on("click", function (e) {
    var container = $(".icon-user");
    var tooltipLogout = $(".tooltip-logout");
    var sidebarLogout = $("#sidebar-logout");

    if (sidebarLogout) {
      sidebarLogout.click(function () {
        (0, _user.signOut)();
      });
    }

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      tooltipLogout.css("display", "none");
    }
  });
  $(document).on("click", function (e) {
    var container = $("#drop-paises, .cuadro-fecha");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $("#selectPais").prop("checked", false);
      $("#selectDay").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectYear").prop("checked", false);
    }
  });
  var inputPassword = $("#login-password");
  var caracteresMin = $(".caracteres-min");
  var listo = $(".listo");
  inputPassword.keyup(function () {
    if (inputPassword.val().length < 8 && inputPassword.val().length >= 1) {
      caracteresMin.css("color", "red");
      listo.css("display", "none");
    } else if (inputPassword.val().length == 0) {
      caracteresMin.css("color", "#666262");
      listo.css("display", "none");
    } else {
      caracteresMin.css("color", "green");
      listo.css("display", "inline-block");
    }
  });
  /*login*/

  var inputPassword1 = $("#signup-password");
  var caracteresMin1 = $(".caracteres-min");
  var listo1 = $(".listo");
  inputPassword1.keyup(function () {
    if (inputPassword1.val().length < 8 && inputPassword1.val().length >= 1) {
      caracteresMin1.css("color", "red");
      listo1.css("display", "inline-block");
      listo1.attr("src", "images/registro/alerta.svg");
    } else if (inputPassword1.val().length == 0) {
      caracteresMin1.css("color", "#666262");
      listo1.css("display", "none");
    } else {
      caracteresMin1.css("color", "green");
      listo1.css("display", "inline-block");
      listo1.attr("src", "images/registro/listo.svg");
    }
  });
  var inputCorreo = $(".input-email");
  inputCorreo.keyup(function () {
    var correoValido = $(".correo-valido");
    var imagenError = $(".error");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    (0, _form.validateKeyUpEmail)(inputCorreo, filter, imagenError, correoValido);
  });
  /* Validar email para reestablecer contraseña*/

  var inputReEmail = $("#re-password-email");
  var messageError = $(".correo-valido");
  $("#reset-email").click(function () {
    if ((0, _form.validateEmail)(inputReEmail, messageError)) {
      (0, _user.sendUserEmail)(inputReEmail);
      return true;
    } else {
      return false;
    }
  });
  /*Validar nueva contraseña */

  var inputNewPassword = $("#new-password");
  var inputConfirmPassword = $("#new-confirm-password");
  var newPasswordButton = $("#send-password-button");
  newPasswordButton.click(function () {
    if ((0, _form.validateNewPassword)(inputNewPassword, inputConfirmPassword)) {
      (0, _user.sendNewPassword)(inputNewPassword, inputConfirmPassword);
      return true;
    } else {
      return false;
    }
  });
  /* FUNCION DEGRADADO - SOLIDO SCROLLBAR*/

  var documentHtml = $(document);
  var navbar = document.querySelector(".menu");
  var navbarWhiteElement = document.querySelector(".navbar-white");
  var parallaxWrapper = $(".wrapper");
  (0, _scroll.gradientMenu)(navbar, documentHtml);
  (0, _scroll.navbarWhite)(navbarWhiteElement, documentHtml);
  /* END FUNCION DEGRADADO - SOLIDO SCROLLBAR*/

  var rellax = new Rellax(".rellax");
  $("#selectYear").click(function () {
    if ($(this).is(":checked")) {
      $("#selectPais").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectDay").prop("checked", false);
    }
  });
  $("#selectPais").click(function () {
    if ($(this).is(":checked")) {
      $("#selectYear").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectDay").prop("checked", false);
    }
  });
  $("#selectDay").click(function () {
    if ($(this).is(":checked")) {
      $("#selectPais").prop("checked", false);
      $("#selectMonth").prop("checked", false);
      $("#selectYear").prop("checked", false);
    }
  });
  $("#selectMonth").click(function () {
    if ($(this).is(":checked")) {
      $("#selectPais").prop("checked", false);
      $("#selectYear").prop("checked", false);
      $("#selectDay").prop("checked", false);
    }
  });
  createCinemaHomeSlider();
  /* Metakeys */

  var actual_landing = $('#actual_landing').val();
  console.log("estas en: " + actual_landing);
  (0, _Section.getMetaKeys)(actual_landing);
  /*End Metakeys */

  var section_slider = $(".section-slider").not(".slick-initialized").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: false,
        infinite: true,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: true,
        arrows: false
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1900,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }]
  });
  var vision_slider = $(".vision-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: false,
        infinite: true,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: true,
        arrows: false
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }]
  });
  var imperdibles_slider = $(".imperdibles-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: false,
    infinite: true,
    arrows: false,
    dots: true
  });
  var claro_slider = $(".claro-header-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    centerMode: false,
    arrows: false
  });
  var tv_slider = $(".tv-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: true,
        infinite: true,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: false
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1900,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }]
  });
  /*Programación General Canal Claro */

  var containerSlider = $("#claro-canal-programing");
  var slider = new _Slider.default();
  slider.createDaysSlider("claro", containerSlider, $("#claro-canal-programing-edit"));
  /*Programación Concert Channel */

  var containerSliderConcert = $("#concert-channel-programing");
  slider.createDaysSlider("concert", containerSliderConcert, $("#concert-channel-programing-edit"));
  /*Programación Claro Cinema */

  var containerSliderCinema = $("#claro-cinema-programing");
  slider.createDaysSlider("cinema", containerSliderCinema, $("#claro-cinema-programing-edit"));
  createProgramacionSlider();
  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth() + 1;
  var year = date.getFullYear();
  var hour = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  if (day < 10) {
    day = "0" + date.getDate();
  }

  if (month < 10) {
    month = "0" + (date.getMonth() + 1);
  }

  var currentDate = "".concat(year, "-").concat(month, "-").concat(day);
  var currentTime = "".concat(hour, ":").concat(minutes);
  (0, _Program.getPrograms)(currentDate, (0, _country.getNameCountry)(sessionSrc));
  /*menu responsive*/

  var invisible_button = document.querySelector(".invisible-button");
  var tache_button = document.querySelector(".tache_button");
  var menu = document.querySelector(".menu-responsive");
  var menu_categorias = document.querySelector(".categorias-flecha");
  var hamburguer = document.querySelector(".hamburguer-menu");
  var categorias = $(".categorias-menu");
  var body = $("body");
  var html = $("html");
  var sidebar_content = document.querySelector(".sidebar-content");
  var menuTablet = $(".menu-responsive-tablet");
  menuTablet.click(function () {
    hamburguer.style.transform = "translate(0%)";
    invisible_button.style.width = "2000px";
    invisible_button.style.left = "100%";
    invisible_button.style.background = "black";
    html.css({
      position: "relative",
      overflow: "hidden",
      height: "100%"
    });
    body.css({
      position: "fixed",
      overflow: "hidden",
      height: "100%",
      width: "100%"
    });
    sidebar_content.style.overflow = "auto";
    sidebar_content.style.height = "100%";
  });

  if (menu) {
    menu.addEventListener("click", function (e) {
      hamburguer.style.transform = "translate(0%)";
      invisible_button.style.width = "2000px";
      invisible_button.style.left = "100%";
      invisible_button.style.background = "black";
      html.css({
        position: "relative",
        overflow: "hidden",
        height: "100%"
      });
      body.css({
        position: "fixed",
        overflow: "hidden",
        height: "100%",
        width: "100%"
      });
      sidebar_content.style.overflowY = "scroll";
      sidebar_content.style.height = "70%";
    });
  }

  if (invisible_button) {
    invisible_button.addEventListener("click", function () {
      hamburguer.style.transform = "translate(-100%)";
      invisible_button.style.width = "0px";
      invisible_button.style.left = "0%";
      invisible_button.style.background = "black";
      html.css({
        position: "static",
        overflow: "visible",
        height: "100%"
      });
      body.css({
        position: "static",
        overflow: "visible",
        height: "100%",
        width: "auto"
      });
      sidebar_content.style.overflowY = "hidden";
      sidebar_content.style.height = "0%";
    });
  }

  if (menu_categorias) {
    menu_categorias.addEventListener("click", function (e) {
      categorias.css({
        zIndex: "10",
        opacity: "1"
      });
      html.css({
        position: "relative",
        overflow: "hidden",
        height: "100%"
      });
      body.css({
        position: "fixed",
        overflow: "hidden",
        height: "100%",
        width: "100%"
      });
      sidebar_content.style.overflow = "auto";
      sidebar_content.style.height = "100%";
    });
    tache_button.addEventListener("click", function () {
      categorias.css({
        zIndex: "-1",
        opacity: "0"
      });
      html.css({
        position: "initial",
        overflow: "auto",
        height: "auto"
      });
      body.css({
        position: "initial",
        overflowX: "hidden",
        overflowY: "auto",
        "-webkit-overflow-scrolling": "auto",
        height: "auto",
        width: "auto"
      });
      sidebar_content.style.overflow = "hidden";
      sidebar_content.style.height = "0%";
    });
  }

  var video_home = document.querySelector(".circle-video");
  $("body").index(navbar);
  /***  Slider "Ahora en TV"  ****/

  var tvClaroSlider = $("#tv-claro-slider");
  tvConcertSlider = $("#tv-concert-slider");
  var tvCinemaSlider = $("#tv-cinema-slider");
  var tvVisionSlider = $("#tv-vision-slider");
  var tvSportsSlider = $("#tv-sports-slider");
  var programacionSlider = $(".programacion-slider");
  var proClaroSlider = $("#pro-claro-slider");
  var tvSlider = $(".tv-slider");
  $(".tv-content").hide();
  $(".tv-content:first").show();
  $("ul.list-progra li").click(function () {
    $("ul.list-progra li").removeClass("navbar-progra-item-container active-navItems  ");
    $(this).addClass("navbar-progra-item-container active-navItems navs-li ");
  });
  $("ul.tv-list li").click(function () {
    $("ul.tv-list li").removeClass("active-navItem");
    $(this).addClass("active-navItem");
    $(".tv-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    tvSlider.slick("refresh");
    programacion_slider.slick("refresh");
    (0, _user.addFavorites)();
    recreateClickCalendar();
    (0, _Program.createClickThumbnails)();
  });
  $("ul.lista-avatar li").click(function () {
    $("ul.lista-avatar li").removeClass("active-navAvatar");
    $(this).addClass("active-navAvatar");
    $(".tv-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    if (activeNav == "concert-channel") {
      tvConcertSlider.slick("refresh");
    } else if (activeNav == "claro-canal") {
      tvClaroSlider.slick("refresh");
    } else if (activeNav == "claro-cinema") {
      tvCinemaSlider.slick("refresh");
    } else if (activeNav == "nuestra-vision") {
      tvVisionSlider.slick("refresh");
    } else if (activeNav == "claro-sports") {
      tvSportsSlider.slick("refresh");
    }

    programacion_slider.slick("refresh");
    recreateClickCalendar();
  });
  $(".pro-content").hide();
  $(".pro-content:first").show();
  $("ul.pro-list li").on("click", function () {
    $("ul.pro-list li").removeClass("active-proItem");
    $(this).addClass("active-proItem");
    $(".pro-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    if (activeNav == "pro-concert-channel") {} else if (activeNav == "pro-claro-canal") {} else if (activeNav == "pro-claro-cinema") {} else if (activeNav == "pro-nuestra-vision") {} else if (activeNav == "pro-claro-sports") {}
  });
  var slides = document.querySelectorAll("#claro-canal .slick-slide");
  var myTag = document.querySelectorAll(".a-poster-text-white");
  /*** Fin Slider "Ahora en TV"  ***/

  /*Dropdown de la página sinópsis.php */

  var dropdownCountry = document.getElementsByClassName("dropdownCountry-content");
  var numCountries = document.getElementsByClassName("dropdownCountry-content").length;
  var i;

  for (i = 0; i < numCountries; i++) {
    dropdownCountry[i].addEventListener("click", function () {
      var dropdownContent = this.nextElementSibling; //dropdownContent.classList.toggle("dropdown-active");

      var currentArrow = $(this).children(".dropdownCountry-icon");

      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        currentArrow.css("transform", "rotate(0deg)");
      } else {
        dropdownContent.style.display = "block"; //dropdownContent.style.animation = "down 0.5s";

        currentArrow.css("transform", "rotate(-180deg)");
      }
    });
  }
  /*** Dropdown del menú ***/

  /*const dropdown = document.getElementsByClassName("sidebar-dropdown");
  console.log(dropdown);
   var i;
   for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("dropdown-active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.animation = "hide-dropdown 0.5s";
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
        dropdownContent.style.animation = "active-dropdown 0.5s";
      }
    });
  }*/

  /*** Fin Dropdown del menú ***/


  recreateClickCalendar();
});

function createCinemaHomeSlider() {
  $(".cinema-home-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: false,
        infinite: true,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: true,
        arrows: false
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1900,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }]
  });
}

function createProgramacionSlider() {
  programacion_slider = $(".programacion-slider").slick({
    /**/
    responsive: [{
      breakpoint: 767,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 7,
        autoplay: false,
        centerMode: false,
        infinite: true,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 8,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 11,
        slidesToScroll: 11,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1900,
      settings: {
        slidesToShow: 11,
        slidesToScroll: 11,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 10000,
      settings: {
        slidesToShow: 17,
        slidesToScroll: 17,
        infinite: false,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }]
  });
} //Modificar el anchor de la url


$(".programing-item").click(function () {
  var activeNav = $(this).attr("rel");
  var stringLength = activeNav.length;
  var month = activeNav.charAt(stringLength - 1);
  $(".month").text("".concat((0, _date.getMonthAndYear)(month)));
});

function createTvSlider() {
  var tv_slider = $(".tv-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: true,
        infinite: true,
        arrows: false,
        dots: true
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: false
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }, {
      breakpoint: 1900,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode: false,
        arrows: true,
        prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
        nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />'
      }
    }]
  });
}

function recreateClickCalendar() {
  $("ul.claro-calendar .claro-item").click(function () {
    $("ul.claro-calendar .claro-item").removeClass("claro-active");
    $(this).addClass("claro-active");
    $(".claro-content").hide(); //Editar

    $(".claro-content-edit").hide();
    var activeNav = $(this).attr("rel");
    var stringLength = activeNav.length;
    var month = activeNav.charAt(stringLength - 1);
    $(".month").text("".concat((0, _date.getMonthAndYear)(month)));
    $("#" + activeNav).fadeIn();
  }); //Programación editar

  $(".claro-content-edit").hide();
  $(".claro-content-edit:first").show(); //Normal

  $(".claro-content").hide();
  $(".claro-content:first").show();
  $(".concert-content").hide();
  $(".concert-content:first").show();
  $("ul.concert-calendar .concert-item").click(function () {
    $("ul.concert-calendar .concert-item").removeClass("concert-active");
    $(this).addClass("concert-active");
    $(".concert-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    var stringLength = activeNav.length;
    var month = activeNav.charAt(stringLength - 1);
    $(".month").text("".concat((0, _date.getMonthAndYear)(month)));
  });
  $(".cinema-content").hide();
  $(".cinema-content:first").show();
  $("ul.cinema-calendar .cinema-item").click(function () {
    $("ul.cinema-calendar .cinema-item").removeClass("cinema-active");
    $(this).addClass("cinema-active");
    $(".cinema-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    var stringLength = activeNav.length;
    var month = activeNav.charAt(stringLength - 1);
    $(".month").text("".concat((0, _date.getMonthAndYear)(month)));
  });
  $(".vision-content").hide();
  $(".vision-content:first").show();
  $("ul.vision-calendar .vision-item").click(function () {
    $("ul.vision-calendar .vision-item").removeClass("vision-active");
    $(this).addClass("vision-active");
    $(".vision-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    var stringLength = activeNav.length;
    var month = activeNav.charAt(stringLength - 1);
    $(".month").text("".concat((0, _date.getMonthAndYear)(month)));
  });
  $(".sports-content").hide();
  $(".sports-content:first").show();
  $("ul.sports-calendar .sports-item").click(function () {
    $("ul.sports-calendar .sports-item").removeClass("sports-active");
    $(this).addClass("sports-active");
    $(".sports-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
    var stringLength = activeNav.length;
    var month = activeNav.charAt(stringLength - 1);
    $(".month").text("".concat((0, _date.getMonthAndYear)(month)));
  });
}

function resizedw() {
  $(".programacion-slider#pro-claro-slider").slick("refresh");
  $(".programacion-slider#pro-concert-slider").slick("refresh");
  $(".programacion-slider#pro-cinema-slider").slick("refresh");
  $(".programacion-slider#pro-vision-slider").slick("refresh");
  $(".programacion-slider#pro-sports-slider").slick("refresh");
  recreateClickCalendar();
  (0, _user.addFavorites)();
}

var doit;

window.onresize = function () {
  clearTimeout(doit);
  doit = setTimeout(resizedw, 100);
}; //para slider de programacion en editable


$(".program-image-slider").slick({
  slidesToShow: 1,
  dots: true,
  appendDots: $(".programming-slider-dots"),
  initialSlide: 0,
  infinite: false,
  arrows: false,
  customPaging: function customPaging(slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return " <p class='a-text-bold-tealblue slider-pagination-item pag '> " + (i + 1) + "</p> ";
  }
}); //para dar click

var pagination = $(".pag");
$(".pag").click(function () {
  pagination.removeClass("selteal");
  $(this).addClass("selteal");
});
var slideIndex = 4;
$(".slider-pagination-add").click(function () {
  //Cada vez que se haga click, el contador incrementa
  slideIndex++; //Agregamos un slide al slider de programación

  $(".program-image-slider").slick("slickAdd", "\n  <div class=\"bor thumbnail-image-program position-relative h-100 mx-auto\" style=\"width:100%;\">\n  <label for=\"image_logo".concat(slideIndex, "\" class=\"h-100 mb-0 d-flex justify-content-center align-items-center flex-column\">\n  <img src=\"./images/General/image-synopsis-carrusel.jpg\" class=\"w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program\" />\n  </label>\n</div>\n\n  "));
});
},{"./scroll/scroll.js":"scroll/scroll.js","./form/form.js":"form/form.js","./session/session.js":"session/session.js","./services/user/user.js":"services/user/user.js","./country/country.js":"country/country.js","./services/Program.js":"services/Program.js","./date/date.js":"date/date.js","./UI/Slider.js":"UI/Slider.js","./services/Section.js":"services/Section.js","./UI/Navbar.js":"UI/Navbar.js"}],"../node_modules/parcel-bundler/src/builtins/hmr-runtime.js":[function(require,module,exports) {
var global = arguments[3];
var OVERLAY_ID = '__parcel__error__overlay__';
var OldModule = module.bundle.Module;

function Module(moduleName) {
  OldModule.call(this, moduleName);
  this.hot = {
    data: module.bundle.hotData,
    _acceptCallbacks: [],
    _disposeCallbacks: [],
    accept: function (fn) {
      this._acceptCallbacks.push(fn || function () {});
    },
    dispose: function (fn) {
      this._disposeCallbacks.push(fn);
    }
  };
  module.bundle.hotData = null;
}

module.bundle.Module = Module;
var checkedAssets, assetsToAccept;
var parent = module.bundle.parent;

if ((!parent || !parent.isParcelRequire) && typeof WebSocket !== 'undefined') {
  var hostname = "" || location.hostname;
  var protocol = location.protocol === 'https:' ? 'wss' : 'ws';
  var ws = new WebSocket(protocol + '://' + hostname + ':' + "49386" + '/');

  ws.onmessage = function (event) {
    checkedAssets = {};
    assetsToAccept = [];
    var data = JSON.parse(event.data);

    if (data.type === 'update') {
      var handled = false;
      data.assets.forEach(function (asset) {
        if (!asset.isNew) {
          var didAccept = hmrAcceptCheck(global.parcelRequire, asset.id);

          if (didAccept) {
            handled = true;
          }
        }
      }); // Enable HMR for CSS by default.

      handled = handled || data.assets.every(function (asset) {
        return asset.type === 'css' && asset.generated.js;
      });

      if (handled) {
        console.clear();
        data.assets.forEach(function (asset) {
          hmrApply(global.parcelRequire, asset);
        });
        assetsToAccept.forEach(function (v) {
          hmrAcceptRun(v[0], v[1]);
        });
      } else if (location.reload) {
        // `location` global exists in a web worker context but lacks `.reload()` function.
        location.reload();
      }
    }

    if (data.type === 'reload') {
      ws.close();

      ws.onclose = function () {
        location.reload();
      };
    }

    if (data.type === 'error-resolved') {
      console.log('[parcel] ✨ Error resolved');
      removeErrorOverlay();
    }

    if (data.type === 'error') {
      console.error('[parcel] 🚨  ' + data.error.message + '\n' + data.error.stack);
      removeErrorOverlay();
      var overlay = createErrorOverlay(data);
      document.body.appendChild(overlay);
    }
  };
}

function removeErrorOverlay() {
  var overlay = document.getElementById(OVERLAY_ID);

  if (overlay) {
    overlay.remove();
  }
}

function createErrorOverlay(data) {
  var overlay = document.createElement('div');
  overlay.id = OVERLAY_ID; // html encode message and stack trace

  var message = document.createElement('div');
  var stackTrace = document.createElement('pre');
  message.innerText = data.error.message;
  stackTrace.innerText = data.error.stack;
  overlay.innerHTML = '<div style="background: black; font-size: 16px; color: white; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; padding: 30px; opacity: 0.85; font-family: Menlo, Consolas, monospace; z-index: 9999;">' + '<span style="background: red; padding: 2px 4px; border-radius: 2px;">ERROR</span>' + '<span style="top: 2px; margin-left: 5px; position: relative;">🚨</span>' + '<div style="font-size: 18px; font-weight: bold; margin-top: 20px;">' + message.innerHTML + '</div>' + '<pre>' + stackTrace.innerHTML + '</pre>' + '</div>';
  return overlay;
}

function getParents(bundle, id) {
  var modules = bundle.modules;

  if (!modules) {
    return [];
  }

  var parents = [];
  var k, d, dep;

  for (k in modules) {
    for (d in modules[k][1]) {
      dep = modules[k][1][d];

      if (dep === id || Array.isArray(dep) && dep[dep.length - 1] === id) {
        parents.push(k);
      }
    }
  }

  if (bundle.parent) {
    parents = parents.concat(getParents(bundle.parent, id));
  }

  return parents;
}

function hmrApply(bundle, asset) {
  var modules = bundle.modules;

  if (!modules) {
    return;
  }

  if (modules[asset.id] || !bundle.parent) {
    var fn = new Function('require', 'module', 'exports', asset.generated.js);
    asset.isNew = !modules[asset.id];
    modules[asset.id] = [fn, asset.deps];
  } else if (bundle.parent) {
    hmrApply(bundle.parent, asset);
  }
}

function hmrAcceptCheck(bundle, id) {
  var modules = bundle.modules;

  if (!modules) {
    return;
  }

  if (!modules[id] && bundle.parent) {
    return hmrAcceptCheck(bundle.parent, id);
  }

  if (checkedAssets[id]) {
    return;
  }

  checkedAssets[id] = true;
  var cached = bundle.cache[id];
  assetsToAccept.push([bundle, id]);

  if (cached && cached.hot && cached.hot._acceptCallbacks.length) {
    return true;
  }

  return getParents(global.parcelRequire, id).some(function (id) {
    return hmrAcceptCheck(global.parcelRequire, id);
  });
}

function hmrAcceptRun(bundle, id) {
  var cached = bundle.cache[id];
  bundle.hotData = {};

  if (cached) {
    cached.hot.data = bundle.hotData;
  }

  if (cached && cached.hot && cached.hot._disposeCallbacks.length) {
    cached.hot._disposeCallbacks.forEach(function (cb) {
      cb(bundle.hotData);
    });
  }

  delete bundle.cache[id];
  bundle(id);
  cached = bundle.cache[id];

  if (cached && cached.hot && cached.hot._acceptCallbacks.length) {
    cached.hot._acceptCallbacks.forEach(function (cb) {
      cb();
    });

    return true;
  }
}
},{}]},{},["../node_modules/parcel-bundler/src/builtins/hmr-runtime.js","main.js"], null)
//# sourceMappingURL=/main.js.map