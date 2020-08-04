parcelRequire = (function (e, r, t, n) {
  var i,
    o = "function" == typeof parcelRequire && parcelRequire,
    u = "function" == typeof require && require;
  function f(t, n) {
    if (!r[t]) {
      if (!e[t]) {
        var i = "function" == typeof parcelRequire && parcelRequire;
        if (!n && i) return i(t, !0);
        if (o) return o(t, !0);
        if (u && "string" == typeof t) return u(t);
        var c = new Error("Cannot find module '" + t + "'");
        throw ((c.code = "MODULE_NOT_FOUND"), c);
      }
      (p.resolve = function (r) {
        return e[t][1][r] || r;
      }),
        (p.cache = {});
      var l = (r[t] = new f.Module(t));
      e[t][0].call(l.exports, p, l, l.exports, this);
    }
    return r[t].exports;
    function p(e) {
      return f(p.resolve(e));
    }
  }
  (f.isParcelRequire = !0),
    (f.Module = function (e) {
      (this.id = e), (this.bundle = f), (this.exports = {});
    }),
    (f.modules = e),
    (f.cache = r),
    (f.parent = o),
    (f.register = function (r, t) {
      e[r] = [
        function (e, r) {
          r.exports = t;
        },
        {},
      ];
    });
  for (var c = 0; c < t.length; c++)
    try {
      f(t[c]);
    } catch (e) {
      i || (i = e);
    }
  if (t.length) {
    var l = f(t[t.length - 1]);
    "object" == typeof exports && "undefined" != typeof module
      ? (module.exports = l)
      : "function" == typeof define && define.amd
      ? define(function () {
          return l;
        })
      : n && (this[n] = l);
  }
  if (((parcelRequire = f), i)) throw i;
  return f;
})(
  {
    tyVZ: [
      function (require, module, exports) {
        "use strict";
        function o(o, t) {
          t.on("scroll ontouchmove ontouchstart ontouchend", function () {
            var e = t.scrollTop();
            o &&
              (e <= 0
                ? ((o.style.background =
                    "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))"),
                  (o.style.position = "absolute"))
                : e > 0 && e <= 100
                ? ((o.style.background =
                    "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))"),
                  (o.style.position = "fixed"))
                : e >= 101 &&
                  ((o.style.background = "black"),
                  (o.style.position = "fixed")));
          });
        }
        function t(o, t) {
          t.on("scroll ontouchmove ontouchstart ontouchend", function () {
            var e = t.scrollTop();
            o &&
              (e <= 0
                ? ((o.style.background = "transparent"),
                  (o.style.position = "absolute"))
                : e > 0 && e <= 100
                ? ((o.style.background = "transparent"),
                  (o.style.position = "fixed"))
                : e >= 101 &&
                  ((o.style.background = "white"),
                  (o.style.position = "fixed")));
          });
        }
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.gradientMenu = o),
          (exports.navbarWhite = t);
      },
      {},
    ],
    zpZz: [
      function (require, module, exports) {
        "use strict";
        function e(e) {
          var a = e.previousElementSibling;
          "password" == a.type
            ? ((a.type = "text"),
              e.setAttribute("src", "images/registro/eye.svg"))
            : ((a.type = "password"),
              e.setAttribute("src", "images/registro/eye-none.svg"));
        }
        function a(e, a) {
          var s = e.val();
          return 0 == s.length
            ? (a
                .addClass("invalid-email d-block")
                .text("Debes ingresar un correo electrónico"),
              !1)
            : !!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(
                s
              ) ||
                (a
                  .addClass("invalid-email d-block")
                  .text("El correo electrónico no tiene un formato válido"),
                console.log("error"),
                !1);
        }
        function s(e, a, s, t) {
          var r = e.val();
          a.test(r)
            ? a.test(r)
              ? (t.css("color", "green"),
                s.css("display", "inline-block"),
                s.attr("src", "images/registro/listo.svg"))
              : 0 == inputCorreo.val().length &&
                (ImagenError.css("display", "none"), t.css("color", "#666262"))
            : (t.css("color", "red"),
              s.css("display", "inline-block"),
              s.attr("src", "images/registro/alerta.svg"));
        }
        function t(e, a) {
          var s = e.val(),
            t = a.val(),
            r = $("#error-new-password"),
            o = $("#error-password-confirm");
          return 0 == s.length
            ? (r
                .addClass("invalid-email")
                .text("Debes ingresar una nueva contraseña"),
              !1)
            : s.length < 8
            ? (r
                .addClass("invalid-email")
                .text("La contraseña debe tener mínimo 8 caracteres"),
              !1)
            : 0 == t
            ? (o
                .addClass("invalid-email")
                .text("Debes ingresar de nuevo la contraseña"),
              !1)
            : s === t ||
              (o
                .addClass("invalid-email")
                .text("Las contraseñas deben de coincidir"),
              console.log("Sigo aquí"),
              !1);
        }
        function r(e, a) {
          var s = e.val();
          return "" === s
            ? (a
                .addClass("invalid-email")
                .text("Debes ingresar una contraseña"),
              e.addClass("input-border-red"),
              !1)
            : !(s.length < 8) ||
                (a
                  .addClass("invalid-email")
                  .text("La contraseña debe tener al menos 8 caractéres"),
                e.addClass("input-border-red"),
                !1);
        }
        function o(e, a) {
          if (0 == e.val().length) {
            return (
              a
                .addClass("invalid-email")
                .html(
                  '\n    <img\n    src="images/registro/alerta.svg">\n    Debes ingresar un nombre\n    '
                ),
              !1
            );
          }
          return !0;
        }
        function n(e) {
          console.log(e),
            $.ajax({
              type: "POST",
              data: e,
              url:
                "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/verify",
              success: function (e) {
                if ((console.log("succes", e), null != e.data)) {
                  localStorage.setItem("session", 1),
                    localStorage.setItem("id", e.data[0].id),
                    localStorage.setItem("name", e.data[0].name),
                    localStorage.setItem("avatar", e.data[0].avatar);
                  var a = e.data[0].name;
                  $("#cuenta-confirmada-name-user").html(a);
                }
              },
            });
        }
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.ShowHidePassword = e),
          (exports.validateEmail = a),
          (exports.validateNewPassword = t),
          (exports.validateKeyUpEmail = s),
          (exports.validatePassword = r),
          (exports.validateUser = o),
          (exports.validateToken = n);
      },
      {},
    ],
    rgOU: [
      function (require, module, exports) {
        "use strict";
        function e(e) {
          var o = e.children(".Icon_paises").attr("src");
          "undefined" != typeof Storage
            ? localStorage.setItem("src", o)
            : console.warn("Tu navegador no sporta Session Storage");
        }
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.selectCountry = e);
      },
      {},
    ],
    zXmF: [
      function (require, module, exports) {
        "use strict";
        function e(e) {
          $.ajax({
            type: "GET",
            data: e,
            url:
              "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_verify",
            success: function (e) {
              if (e.data) {
                console.log(e.data);
                var a = $("#user_id");
                localStorage.setItem("session", 1),
                  localStorage.setItem("id", e.data.id),
                  localStorage.setItem("name", e.data.name),
                  localStorage.setItem("avatar", e.data.avatar),
                  a.attr("value", e.data.user_id),
                  (location.href =
                    "http://www.claronetworks.openofficedospuntocero.info/form-password.php");
              }
            },
          });
        }
        function a() {
          var e = localStorage.getItem("id");
          $(".alert-user");
          setInterval(function () {
            var a = $(".alert-user"),
              t = new Date(),
              o = t.getDate(),
              r = t.getMonth(),
              s = t.getFullYear(),
              n = t.getHours(),
              i = (t.getSeconds(), "".concat(n, ":").concat(30)),
              l = "".concat(s, "-").concat(r, "-").concat(o),
              c = {
                function: "showNotificaction",
                id: e,
                currentTime: i,
                currentDate: l,
              };
            $.ajax({
              type: "POST",
              data: c,
              url: "../../adapters/user.php",
              success: function (e) {
                var t = JSON.parse(e);
                if (200 == t.code) {
                  for (
                    var o = localStorage.getItem("name"),
                      r = t.data.length,
                      s = "",
                      n = 0;
                    n < r;
                    n++
                  )
                    s += '\n              <div class="p-3">\n              <img src="./images/notifications/close-notification.svg" class="close-notification"/>\n                <div class="d-flex align-items-center">\n                  <img class="alert-image" src="'
                      .concat(
                        t.data[n].image,
                        '" />\n                  <p class="text-regular alert-user-text pl-3">\n                    '
                      )
                      .concat(
                        o,
                        ': <br />\n                    <span class="text-semibold alert-user-text">'
                      )
                      .concat(
                        t.data[n].title,
                        "</span> está por comenzar<br />\n                    ¡No te lo pierdas!    \n                  </p>\n                </div>\n              </div>"
                      );
                  a.html(s),
                    screen.width >= 320 && screen.width < 768
                      ? (a
                          .css("transform", "translate(50%, 0%)")
                          .css("animation", "showAlertMobile 8s"),
                        setTimeout(function () {
                          a.css("animation", "none");
                        }, 8e3))
                      : screen.width > 767 &&
                        (a.css("animation", "showAlert 8s"),
                        setTimeout(function () {
                          a.css("animation", "none");
                        }, 8e3)),
                    $(window).resize(function () {
                      screen.width >= 320 && screen.width < 768
                        ? (a
                            .css("transform", "translate(50%, 0%)")
                            .css("animation", "showAlertMobile 8s"),
                          setTimeout(function () {
                            a.css("animation", "none");
                          }, 8e3))
                        : screen.width > 767 &&
                          (a.css("animation", "showAlert 8s"),
                          setTimeout(function () {
                            a.css("animation", "none");
                          }, 8e3));
                    }),
                    $(".close-notification").click(function () {
                      a.css("animation", "none");
                    });
                }
              },
            });
          }, 8e3);
        }
        function t() {
          $(".alert-user").css("animation", "hideAlert");
        }
        function o(e) {
          var a = { email: e.val() };
          $.ajax({
            type: "POST",
            data: a,
            beforeSend: function () {
              $(".formContainer").prepend(
                '\n      <div class="loader">\n        <img src="./images/General/loader.gif" class="loader-img" alt="">\n      </div>\n      '
              );
            },
            url:
              "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_send",
            success: function (e) {
              e.data && (location.href = "./email-sent.php");
            },
          });
        }
        function r(e, a) {
          var t = e.val(),
            o = a.val(),
            r =
              ($("#user_id").val(),
              { token: location.href.split("?")[1], password: t, confirm: o });
          $.ajax({
            type: "POST",
            data: r,
            beforeSend: function () {
              $(".formContainer").prepend(
                '\n      <div class="loader">\n        <img src="./images/General/loader.gif" class="loader-img" alt="">\n      </div>\n      '
              );
            },
            url:
              "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_password",
            success: function (e) {
              console.log(e),
                200 == e.code && (location.href = "./success-password.php");
            },
          });
        }
        function s(e, a) {
          var t = { function: "signIn", email: e, password: a };
          $.ajax({
            type: "POST",
            data: t,
            url: "../../adapters/user.php",
            beforeSend: function () {
              $(".formContainer").prepend(
                '\n      <div class="loader">\n        <img src="./images/General/loader.gif" class="loader-img" alt="">\n      </div>\n      '
              );
            },
            success: function (e) {
              var a = JSON.parse(e);
              if ((console.log(a), a.data)) {
                if (
                  ((location.href = "./home.php"),
                  localStorage.setItem("session", 1),
                  localStorage.setItem("id", a.data.id),
                  localStorage.setItem("name", a.data.name),
                  localStorage.setItem("avatar", a.data.avatar),
                  localStorage.setItem("gender", a.data.avatar),
                  localStorage.setItem("birthday", a.data.avatar),
                  localStorage.setItem("src", a.data.country.image),
                  a.data.birthday)
                ) {
                  var t = a.data.birthday.split("-");
                  localStorage.setItem("day", t[2]),
                    localStorage.setItem("month", t[1]),
                    localStorage.setItem("year", t[0]);
                }
                localStorage.setItem("alertBeginning", a.data.config.beginning),
                  localStorage.setItem("alertMinutes", a.data.config.minutes),
                  localStorage.setItem("alertEmail", a.data.config.email),
                  localStorage.setItem("alertWeb", a.data.config.web),
                  a.data.favorites.forEach(function (e) {
                    1 == e.id_section
                      ? localStorage.setItem(
                          "favoritesCanalClaro",
                          JSON.stringify(e.programs)
                        )
                      : 2 == e.id_section
                      ? localStorage.setItem(
                          "favoritesConcertChannel",
                          JSON.stringify(e.programs)
                        )
                      : 3 == e.id_section &&
                        localStorage.setItem(
                          "favoritesClaroCinema",
                          JSON.stringify(e.programs)
                        );
                  });
              } else {
                $(".loader").remove(),
                  $(".data-incorrect")
                    .text(
                      "Tu correo o contraseña no coinciden. Por favor, verifica de nuevo"
                    )
                    .addClass("invalid-email");
              }
            },
          });
        }
        function n() {
          location.reload(),
            (location.href = "/home.php"),
            localStorage.removeItem("date"),
            localStorage.removeItem("day"),
            localStorage.removeItem("month"),
            localStorage.removeItem("gender"),
            localStorage.removeItem("session"),
            localStorage.removeItem("avatar"),
            localStorage.removeItem("id"),
            localStorage.removeItem("country"),
            localStorage.removeItem("name"),
            localStorage.removeItem("birthday"),
            localStorage.removeItem("year"),
            localStorage.removeItem("favoritesCanalClaro"),
            localStorage.removeItem("favoritesConcertChannel"),
            localStorage.removeItem("favoritesClaroCinema");
        }
        function i(e, a, t, o) {
          var r = {
            function: "updateDataUser",
            id: e,
            gender: a,
            date: t,
            country: o,
          };
          console.log(r),
            $.ajax({
              type: "POST",
              data: r,
              url: "../../adapters/user.php",
              success: function (e) {
                var a = JSON.parse(e);
                console.log(e);
                localStorage.setItem("gender", a.data.gender);
                var t = a.data.birthday.split("-");
                localStorage.setItem("day", t[2]),
                  localStorage.setItem("month", t[1]),
                  localStorage.setItem("year", t[0]),
                  localStorage.setItem("date", a.data.birthday),
                  localStorage.setItem("country", a.data.country.name),
                  localStorage.setItem("src", a.data.country.image);
                $("#mensaje").modal("show"),
                  $(".login-country").prop("src", a.data.country.image);
              },
            });
        }
        function l(e) {
          var a = { function: "sendEmail", id: e };
          $.ajax({
            type: "POST",
            data: a,
            url: "../../adapters/user.php",
            success: function (e) {
              console.log(e), console.log("email enviado");
            },
          });
        }
        function c(e, a, t) {
          var o = { function: "selectAvatar", id: e, avatar: a };
          $.ajax({
            type: "POST",
            data: o,
            url: "../../adapters/user.php",
            success: function (e) {
              var a = JSON.parse(e);
              200 == a.code &&
                (localStorage.setItem("idAvatar", t),
                console.log(a),
                localStorage.setItem("avatar", a.data.avatar),
                $(".image-user-container").html(
                  '\n        <div class="image-user">\n          <img src="'.concat(
                    a.data.avatar,
                    '" />\n        </div>\n        '
                  )
                ),
                $("#mensaje").modal("show"));
            },
          });
        }
        function d(e, a, t) {
          var o = {
            function: "registerUser",
            name: e.val(),
            email: a.val(),
            password: t.val(),
            version: "1.2",
          };
          $.ajax({
            type: "POST",
            data: o,
            url: "../../adapters/user.php",
            beforeSend: function () {
              $(".formContainer").prepend(
                '\n      <div class="loader">\n        <img src="./images/General/loader.gif" class="loader-img" alt="">\n      </div>\n      '
              );
            },
            success: function (e) {
              var a = JSON.parse(e);
              console.log(a);
              var t = $(".loader");
              201 == a.code
                ? ($("#mensaje").modal("show"), l(a.data.id), t.remove())
                : 422 == a.code &&
                  ($(".data-incorrect")
                    .text("El email que ingresaste ya está registrado")
                    .addClass("invalid-email"),
                  t.remove());
            },
          });
        }
        function m(e) {
          var a = { function: "updateAlerts", data: e };
          $.ajax({
            type: "POST",
            data: a,
            url: "../../adapters/user.php",
            success: function (e) {
              var a = JSON.parse(e);
              if ((console.log(a), 200 == a.code)) {
                $("#mensaje").modal("show");
                localStorage.setItem("alertBeginning", a.data.beginning),
                  localStorage.setItem("alertWeb", a.data.web),
                  localStorage.setItem("alertEmail", a.data.email),
                  localStorage.setItem("alertMinutes", a.data.minutes);
              }
            },
          });
        }
        function g() {
          $(".poster-button, .programing-button, .synopsis-add").click(
            function () {
              if (1 != localStorage.getItem("session")) {
                $(".modal-favorites").modal("show");
              } else {
                if ($(this).hasClass("remove-program"))
                  return (
                    p(
                      localStorage.getItem("id"),
                      $(this).attr("_id"),
                      $(this),
                      null
                    ),
                    !0
                  );
                if ($(this).hasClass("add-favorites")) {
                  var e = $(this).children(".poster-add"),
                    a = $(this).children(".synopsis-heart"),
                    t = $(this).find("path"),
                    o = $(this),
                    r = $(this),
                    s = $(this).attr("_id"),
                    n = {
                      function: "addFavorites",
                      user_id: localStorage.getItem("id"),
                      chapter_id: s,
                    };
                  return (
                    $.ajax({
                      type: "POST",
                      data: n,
                      url: "../../adapters/user.php",
                      success: function (s) {
                        var n = JSON.parse(s);
                        if ((console.log(n), 200 == n.code)) {
                          var i = n.data.fav_list;
                          r.removeClass("add-favorites"),
                            r.addClass("remove-program"),
                            e &&
                              e.attr(
                                "src",
                                "./images/posters/heart-icon-white.svg"
                              ),
                            t &&
                              (o.prop("title", "Eliminar de mi lista"),
                              t.addClass("heart-gray-filled"),
                              t.removeClass("heart-gray")),
                            a &&
                              a.attr(
                                "src",
                                "./images/posters/heart-icon-white.svg"
                              );
                          var l = localStorage.getItem("name"),
                            c = "".concat(n.data.last_added.program_title);
                          $("#modal-username-program").text("".concat(l, ":")),
                            $("#modal-name-program").text(c),
                            $(".modal-image-program").attr(
                              "src",
                              n.data.last_added.image
                            ),
                            $(".modal-program").modal("show"),
                            i.forEach(function (e) {
                              1 == e.id_section
                                ? localStorage.setItem(
                                    "favoritesCanalClaro",
                                    JSON.stringify(e.programs)
                                  )
                                : 2 == e.id_section
                                ? (console.log("Concert Channel"),
                                  localStorage.setItem(
                                    "favoritesConcertChannel",
                                    JSON.stringify(e.programs)
                                  ))
                                : 3 == e.id_section &&
                                  localStorage.setItem(
                                    "favoritesClaroCinema",
                                    JSON.stringify(e.programs)
                                  );
                            });
                        }
                      },
                    }),
                    !0
                  );
                }
              }
            }
          );
        }
        function p(e, a, t, o) {
          console.log(e, a);
          var r = t.children(".poster-add"),
            s = t.find("path"),
            n = { function: "removeFavorites", user_id: e, chapter_id: a };
          return (
            $.ajax({
              type: "POST",
              data: n,
              url: "../../adapters/user.php",
              success: function (e) {
                var a = JSON.parse(e);
                console.log(a);
                var n = a.data;
                o && o.remove(),
                  t &&
                    (t.removeClass("remove-program"),
                    t.addClass("add-favorites"),
                    r.attr("src", "./images/posters/heart-outline.svg"),
                    s &&
                      (t.attr("title", "Agregar a mi lista"),
                      s.removeClass("heart-gray-filled"),
                      s.addClass("heart-gray"))),
                  null !== n &&
                    n.forEach(function (e) {
                      1 == e.id_section
                        ? localStorage.setItem(
                            "favoritesCanalClaro",
                            JSON.stringify(e.programs)
                          )
                        : 2 == e.id_section
                        ? localStorage.setItem(
                            "favoritesConcertChannel",
                            JSON.stringify(e.programs)
                          )
                        : 3 == e.id_section &&
                          localStorage.setItem(
                            "favoritesClaroCinema",
                            JSON.stringify(e.programs)
                          );
                    });
                var i = JSON.parse(localStorage.getItem("favoritesCanalClaro")),
                  l = JSON.parse(
                    localStorage.getItem("favoritesConcertChannel")
                  ),
                  c = JSON.parse(localStorage.getItem("favoritesClaroCinema"));
                if (
                  (0 == i.length && $(".claro-list").remove(),
                  0 == l.length && $(".concert-list ").remove(),
                  0 == c.length && $(".cinema-list").remove(),
                  0 == c.length && 0 == i.length && 0 == l.length)
                ) {
                  $(".mi-lista-container").append(
                    '\n        <div class="text-center mt-5 pt-md-4 mt-xl-5">\n         <img src="./images/mi-lista/favorites.svg" alt="" class="no-favorites-img">\n         </div>\n        <div class="no-gutters mt-4 mt-xl-5 pt-xl-5">\n          <div class="col-12">\n              <p class="a-text-warm-grey-bold mb-3 text-center no-favorites-title mb-xl-4">No tienes favoritos guardados todavía</p>\n              <p class="a-text-warm-grey-regular text-center no-favorites-subtitle">Explora y descubre más</p>\n          </div>\n        </div>\n\n            '
                  );
                }
              },
            }),
            !0
          );
        }
        function f(e, a, t) {
          var o;
          (o =
            1 == t
              ? { function: "enableNotification", user_id: e, chapter_id: a }
              : { function: "disableNotification", user_id: e, chapter_id: a }),
            $.ajax({
              type: "POST",
              data: o,
              url: "../../adapters/user.php",
              success: function (e) {
                var a = JSON.parse(e);
                (console.log(a), 200 == a.code) &&
                  a.data.forEach(function (e) {
                    1 == e.id_section
                      ? localStorage.setItem(
                          "favoritesCanalClaro",
                          JSON.stringify(e.programs)
                        )
                      : 2 == e.id_section
                      ? localStorage.setItem(
                          "favoritesConcertChannel",
                          JSON.stringify(e.programs)
                        )
                      : 3 == e.id_section &&
                        localStorage.setItem(
                          "favoritesClaroCinema",
                          JSON.stringify(e.programs)
                        );
                  });
              },
            });
        }
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.sendUserEmail = o),
          (exports.validateTokenPassword = e),
          (exports.sendNewPassword = r),
          (exports.signIn = s),
          (exports.signOut = n),
          (exports.updateDataUser = i),
          (exports.selectAvatar = c),
          (exports.registerUser = d),
          (exports.updateAlerts = m),
          (exports.addFavorites = g),
          (exports.removeFavorites = p),
          (exports.showNotification = a),
          (exports.hideNotification = t),
          (exports.updateAlertProgram = f);
      },
      {},
    ],
    pgM4: [
      function (require, module, exports) {
        "use strict";
        function a(a) {
          var e = a.split("/"),
            r = "";
          switch (e[e.length - 1]) {
            case "usa.svg":
              r = "usa";
              break;
            case "argentina.svg":
              r = "argentina";
              break;
            case "brazil.svg":
              r = "brazil";
              break;
            case "chile.svg":
              r = "chile";
              break;
            case "colombia.svg":
              r = "colombia";
              break;
            case "costa-rica.svg":
              r = "costa-rica";
              break;
            case "ecuador.svg":
              r = "ecuador";
              break;
            case "el-salvador.svg":
              r = "el-salvador";
              break;
            case "guatemala.svg":
              r = "guatemala";
              break;
            case "honduras.svg":
              r = "honduras";
              break;
            case "nicaragua.svg":
              r = "nicaragua";
              break;
            case "panama.svg":
              r = "panama";
              break;
            case "paraguay.svg":
              r = "paraguay";
              break;
            case "puerto-rico.svg":
              r = "puerto-rico";
              break;
            case "peru.svg":
              r = "peru";
              break;
            case "dominican-republic.svg":
              r = "dominican-republic";
              break;
            case "uruguay.svg":
              r = "uruguay";
          }
          return r;
        }
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.getNameCountry = a);
      },
      {},
    ],
    tbj9: [
      function (require, module, exports) {
        "use strict";
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.getPrograms = s),
          (exports.createClickThumbnails = n);
        var t = require("./user/user.js");
        function n() {
          $(".thumbnail-body, .poster-live, .thumbnail-prog").click(
            function () {
              var t = $(this).attr("_id"),
                n = $(this).attr("_id"),
                i = $(this).find(".button-none").attr("_id"),
                e = $(this).attr("_id");
              a(t || n || i || e);
            }
          );
        }
        function i(t) {
          t.slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: !0,
            dots: !0,
            centerMode: !1,
            arrows: !0,
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />',
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  autoplay: !1,
                  autoplaySpeed: 2e3,
                  centerMode: !0,
                  infinite: !0,
                  arrows: !1,
                  dots: !0,
                },
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !1,
                },
              },
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
              {
                breakpoint: 1900,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
            ],
          });
        }
        function e(t) {
          t.slick("unslick");
        }
        function s(s, a) {
          var c = { function: "getPrograms", date: s, country: a },
            l = $(".today-claro-slider"),
            d = $(".today-concert-channel-slider"),
            r = $(".today-claro-cinema-slider"),
            o = $("#tv-vision-slider"),
            p = $("#tv-sports-slider"),
            v = $(".today-claro-slider-prev"),
            h = $(".today-concert-channel-slider-prev"),
            m = $(".today-claro-cinema-slider-prev"),
            g = $("#tv-vision-slider-prev"),
            b = $("#tv-sports-slider-prev"),
            u = $(".claro-content"),
            w = $(".claro-content-edit"),
            _ = $(".concert-content"),
            f = $(".cinema-content");
          $.ajax({
            type: "POST",
            data: c,
            url: "./adapters/program.php",
            success: function (s) {
              var a = JSON.parse(s);
              console.log(a);
              var c = a.data[0].programing[0].programs,
                x = a.data[1].programing[0].programs,
                y = a.data[2].programing[0].programs,
                C = [],
                A = JSON.parse(localStorage.getItem("favoritesCanalClaro"));
              if (localStorage.getItem("favoritesCanalClaro"))
                for (var k = A.length, E = 0; E < k; E++) {
                  var O = A[E].chapter_id;
                  C.push(O);
                }
              var S = [],
                j = JSON.parse(localStorage.getItem("favoritesConcertChannel"));
              if (localStorage.getItem("favoritesConcertChannel"))
                for (var V = j.length, I = 0; I < V; I++) {
                  var N = j[I].chapter_id;
                  S.push(N);
                }
              var M = [],
                G = JSON.parse(localStorage.getItem("favoritesClaroCinema"));
              if (localStorage.getItem("favoritesClaroCinema"))
                for (var T = G.length, R = 0; R < T; R++) {
                  var H = G[R].chapter_id;
                  M.push(H);
                }
              e(l), e(d), e(r), e(o), e(p), e(v), e(h), e(m), e(g), e(b);
              var z = "";
              c.forEach(function (t, n) {
                var i;
                (i =
                  0 == n
                    ? C.includes(t.chapter_id)
                      ? '\n                <div class="poster">\n                  <div class="poster-body">\n                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                      <div class="thumbnail-body" _id="'
                          .concat(
                            t.chapter_id,
                            '">\n                          <div class="thumbnail">\n                              <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                              </div>\n                          </div>\n                        </div>\n                  </div>\n              </div>\n                "
                          )
                      : '\n                <div class="poster" >\n                  <div class="poster-body">\n                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                      <div class="thumbnail-body" _id="'
                          .concat(
                            t.chapter_id,
                            '">\n                          <div class="thumbnail">\n                              <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n                "
                          )
                    : C.includes(t.chapter_id)
                    ? '\n                <div class="poster">\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-between">\n                          <p class="a-programming-text">'
                        .concat(
                          t.time,
                          '</p>\n                          <button type="button" class="poster-button remove-program" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>\n                      </div>\n\n                      <div class="thumbnail-body" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                          <div class="thumbnail">\n                              <img src="'
                        )
                        .concat(
                          t.image,
                          '" alt="">\n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                        )
                        .concat(
                          t.chapter_title,
                          "</p>\n                              </div>\n                          </div>\n                     </div>\n\n                  </div>\n              </div>\n                "
                        )
                    : '\n                <div class="poster" >\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-between">\n                          <p class="a-programming-text">'
                        .concat(
                          t.time,
                          '</p>\n                          <button type="button" class="poster-button add-favorites" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>\n                      </div>\n\n                      <div class="thumbnail-body" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                          <div class="thumbnail">\n                              <img src="'
                        )
                        .concat(
                          t.image,
                          '" alt="">\n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                        )
                        .concat(
                          t.chapter_title,
                          "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n                "
                        )),
                  l.append(i),
                  C.includes(t.chapter_id)
                    ? ((z += '\n          <div class="p-3 border-t border-r border-l border-b position-relative mb-3">\n          <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="'
                        .concat(
                          t.chapter_id,
                          '">\n<div class="schedule-container col-12 p-5 mx-auto mt-0">\n  <p class="schedule-title  a-text-plus a-text-black-brown-two">\n      \n  '
                        )
                        .concat(
                          t.chapter_title,
                          '\n     \n  </p>\n<div class="schedule-item-body">\n  <div class="schedule-poster">\n     <div class="poster">\n          <div class="thumbnail-edit" _id="'
                        )
                        .concat(t.chapter_id, '">\n          <img src="')
                        .concat(
                          t.image,
                          '" alt="">\n          </div>\n      </div>\n  </div>\n  <div class="schedule-details">\n      <div class="schedule-details-header">\n          <div>\n              <p class="schedule a-text-black-brown-two">\n                  \n              '
                        )
                        .concat(
                          t.time,
                          ' hrs.\n                  \n              </p>\n              <p class="rating"> \n                \n                      Clasificación: A\n                 \n              </p>\n          </div>\n          <div>\n          <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">\n          <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n              <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n          </svg>\n          </button>\n          </div>\n      </div>\n      <div>\n      <span class="schedule-description s1" id="synopsis-edi">     '
                        )
                        .concat(
                          t.sinopsis,
                          '    </span>\n      <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>\n</div>\n  </div>\n</div>\n</div>\n</div> '
                        )),
                      (i = '\n            <div class="schedule-container">\n            <p class="schedule-title">'
                        .concat(
                          t.chapter_title,
                          '</p>\n            <div class="schedule-item-body">\n                <div class="schedule-poster">\n                    <div class="poster">\n                        <div class="thumbnail-prog" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                            <img src="'
                        )
                        .concat(
                          t.image,
                          '" alt="">\n                        </div>\n                    </div>\n                </div>\n\n                <div class="schedule-details">\n                    <div class="schedule-details-header">\n                        <div>\n                            <p class="schedule">'
                        )
                        .concat(
                          t.time,
                          ' hrs.</p>\n                            <p class="rating">Clasificación: A</p>\n                        </div>\n                        <div>\n                        <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n                            <path class="heart-gray-filled" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n                        </svg>\n                        </button>\n                        </div>\n                    </div>\n                    <p class="schedule-description">\n                        '
                        )
                        .concat(
                          t.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n\n        </div>\n            "
                        )))
                    : ((z += '\n          <div class="p-3 border-t border-r border-l border-b position-relative mb-3">\n          <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="'
                        .concat(
                          t.chapter_id,
                          '">\n        <div class="schedule-container col-12 p-5 mx-auto mt-0">\n        <p class="schedule-title  a-text-plus a-text-black-brown-two"> \n      \n  '
                        )
                        .concat(
                          t.chapter_title,
                          '\n     \n  </p>\n<div class="schedule-item-body">\n  <div class="schedule-poster">\n     <div class="poster">\n          <div class="thumbnail-edit" _id="'
                        )
                        .concat(t.chapter_id, '">\n          <img src="')
                        .concat(
                          t.image,
                          '" alt="">\n          </div>\n      </div>\n  </div>\n  <div class="schedule-details">\n      <div class="schedule-details-header">\n          <div>\n              <p class="schedule a-text-black-brown-two">\n                  \n              '
                        )
                        .concat(
                          t.time,
                          ' hrs.\n                  \n              </p>\n              <p class="rating"> \n                \n                      Clasificación: A\n                 \n              </p>\n          </div>\n          <div>\n          <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">\n          <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n              <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n          </svg>\n          </button>\n          </div>\n      </div>\n      <div>\n      <span class="schedule-description s1" id="synopsis-edi">     '
                        )
                        .concat(
                          t.sinopsis,
                          '    </span>\n    <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>\n</div>\n  </div>\n</div>\n</div>\n</div> '
                        )),
                      (i = '\n            <div class="schedule-container">\n            <p class="schedule-title">'
                        .concat(
                          t.chapter_title,
                          '</p>\n            <div class="schedule-item-body">\n                <div class="schedule-poster">\n                   <div class="poster">\n                        <div class="thumbnail-prog" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                            <img src="'
                        )
                        .concat(
                          t.image,
                          '" alt="">\n                        </div>\n                    </div>\n                </div>\n                <div class="schedule-details">\n                    <div class="schedule-details-header">\n                        <div>\n                            <p class="schedule">'
                        )
                        .concat(
                          t.time,
                          ' hrs.</p>\n                            <p class="rating">Clasificación: A</p>\n                        </div>\n                        <div>\n                        <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n                            <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n                        </svg>\n                        </button>\n                        </div>\n                    </div>\n                    <p class="schedule-description">\n                    '
                        )
                        .concat(
                          t.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n        </div>\n            "
                        ))),
                  u.append(i);
              }),
                w.html(z);
              var B,
                J,
                P = $(".s1").text();
              if ((console.log(P), P.length > 339)) {
                var q = P.substr(0, 339) + ".";
                $(".s1").text(q), console.log("hola2"), console.log(q);
              } else $(".s1").text(P), console.log(P);
              c.forEach(function (t, n) {
                var i;
                (i =
                  0 == n
                    ? C.includes(t.chapter_id)
                      ? '\n         <div class=" p-3 border-t border-l border-r border-b position-relative">          \n           <div class="poster">\n           <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n                  <div class="poster-body">\n                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                      <div class="thumbnail-body" _id="'
                          .concat(
                            t.chapter_id,
                            '">\n                          <div class="thumbnail">                       \n                              <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">                             \n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                              </div>\n                          </div>\n                        </div>\n                  </div>\n              </div>\n        </div>\n                "
                          )
                      : '\n         \n            <div>\n              <div class=" p-3 border-t border-l border-r border-b position-relative">        \n                <div class="poster" >\n                <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n                  <div class="poster-body">\n                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                      <div class="thumbnail-body" _id="'
                          .concat(
                            t.chapter_id,
                            '">\n                          <div class="thumbnail">\n                       \n                              <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                             \n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n         </div>\n                "
                          )
                    : C.includes(t.chapter_id)
                    ? '\n            <div class=" p-3 border-t border-l border-r border-b position-relative">   \n                <div class="poster">\n                <button class="d-flex align-items-center justify-content-center pencil-black  a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-between">\n                          <p class="a-programming-text">'
                        .concat(
                          t.time,
                          '</p>\n                          <button type="button" class="poster-button remove-program" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '"><img src="../images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>\n                      </div>\n\n                      <div class="thumbnail-body" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                          <div class="thumbnail">\n                         \n                              <img src="'
                        )
                        .concat(
                          t.image,
                          '" alt="">\n                             \n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                        )
                        .concat(
                          t.chapter_title,
                          "</p>\n                              </div>\n                          </div>\n                     </div>\n\n                  </div>\n              </div>\n              </div>\n                "
                        )
                    : '\n            <div class=" p-3 border-t border-l border-r border-b position-relative">   \n                <div class="poster" >\n                <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-between">\n                          <p class="a-programming-text">'
                        .concat(
                          t.time,
                          '</p>\n                          <button type="button" class="poster-button add-favorites" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '"><img src="../images/posters/heart-outline.svg" alt="" class="poster-add"></button>\n                      </div>\n\n                      <div class="thumbnail-body" _id="'
                        )
                        .concat(
                          t.chapter_id,
                          '">\n                          <div class="thumbnail">\n                        \n                              <img src="'
                        )
                        .concat(
                          t.image,
                          '" alt="">\n                              \n                          </div>\n                          <div class="a-claro-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                        )
                        .concat(
                          t.chapter_title,
                          "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n              </div>\n                "
                        )),
                  v.append(i);
              }),
                x.forEach(function (t, n) {
                  (B =
                    0 == n
                      ? S.includes(t.chapter_id)
                        ? '\n              <div class="poster">\n              <div class="poster-body">\n                  <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                  <div class="thumbnail-body" _id="'
                            .concat(
                              t.chapter_id,
                              '">\n                      <div class="thumbnail">\n                          <img src="'
                            )
                            .concat(
                              t.image,
                              '" alt="">\n                      </div>\n                      <div class="a-concert-rectangle thumbnail-info-title">\n                          <div class="poster-title-margin">\n                              <p class="a-poster-text-white">'
                            )
                            .concat(
                              t.chapter_title,
                              "</p>\n                          </div>\n                      </div>\n                  </div>\n              </div>\n          </div>\n              "
                            )
                        : '\n            <div class="poster">\n            <div class="poster-body">\n                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                <div class="thumbnail-body" _id="'
                            .concat(
                              t.chapter_id,
                              '">\n                    <div class="thumbnail">\n                        <img src="'
                            )
                            .concat(
                              t.image,
                              '" alt="">\n                    </div>\n                    <div class="a-concert-rectangle thumbnail-info-title">\n                        <div class="poster-title-margin">\n                            <p class="a-poster-text-white">'
                            )
                            .concat(
                              t.chapter_title,
                              "</p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n            "
                            )
                      : S.includes(t.chapter_id)
                      ? '\n                <div class="poster" >\n                <div class="poster-body">\n                    <div class="showtime-container justify-content-between">\n                        <p class="a-programming-text">'
                          .concat(
                            t.time,
                            '</p>\n                        <button type="button" class="poster-button remove-program" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>\n                    </div>\n\n                    <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                        <div class="thumbnail">\n                            <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                        </div>\n                        <div class="a-concert-rectangle thumbnail-info-title">\n                            <div class="poster-title-margin">\n                                <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n                "
                          )
                      : '\n            <div class="poster" >\n            <div class="poster-body">\n                <div class="showtime-container justify-content-between">\n                    <p class="a-programming-text">'
                          .concat(
                            t.time,
                            '</p>\n                    <button type="button" class="poster-button add-favorites" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>\n                </div>\n\n                <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                    <div class="thumbnail">\n                        <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                    </div>\n                    <div class="a-concert-rectangle thumbnail-info-title">\n                        <div class="poster-title-margin">\n                            <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                        </div>\n                    </div>\n               </div>\n            </div>\n        </div>\n            "
                          )),
                    d.append(B),
                    (B = S.includes(t.chapter_id)
                      ? '\n            <div class="schedule-container">\n            <p class="schedule-title">'
                          .concat(
                            t.chapter_title,
                            '</p>\n            <div class="schedule-item-body">\n                <div class="schedule-poster">\n                    <div class="poster">\n                        <div class="thumbnail-prog" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                            <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                        </div>\n                    </div>\n                </div>\n\n                <div class="schedule-details">\n                    <div class="schedule-details-header">\n                        <div>\n                            <p class="schedule">'
                          )
                          .concat(
                            t.time,
                            ' hrs.</p>\n                            <p class="rating">Clasificación: A</p>\n                        </div>\n                        <div>\n                            <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n                                <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n                            </svg>\n                            </button>\n                        </div>\n                    </div>\n                    <p class="schedule-description">\n                        '
                          )
                          .concat(
                            t.sinopsis,
                            "\n                    </p>\n                </div>\n            </div>\n        </div>\n            "
                          )
                      : '\n            <div class="schedule-container">\n            <p class="schedule-title">'
                          .concat(
                            t.chapter_title,
                            '</p>\n            <div class="schedule-item-body">\n                <div class="schedule-poster">\n                    <div class="poster">\n                        <div class="thumbnail-prog" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                            <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                        </div>\n                    </div>\n                </div>\n\n                <div class="schedule-details">\n                    <div class="schedule-details-header">\n                        <div>\n                            <p class="schedule">'
                          )
                          .concat(
                            t.time,
                            ' hrs.</p>\n                            <p class="rating">Clasificación: A</p>\n                        </div>\n                        <div>\n                            <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n                                <path class="heart-gray" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n                            </svg>\n                            </button>\n                        </div>\n                    </div>\n                    <p class="schedule-description">\n                        '
                          )
                          .concat(
                            t.sinopsis,
                            "\n                    </p>\n                </div>\n            </div>\n\n        </div>\n            "
                          )),
                    _.append(B);
                }),
                x.forEach(function (t, n) {
                  var i;
                  (i =
                    0 == n
                      ? S.includes(t.chapter_id)
                        ? '\n            <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n              <div class="poster">\n              <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n              <div class="poster-body">\n              <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n                  <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                  <div class="thumbnail-body" _id="'
                            .concat(
                              t.chapter_id,
                              '">\n                      <div class="thumbnail">\n                     \n                          <img src="'
                            )
                            .concat(
                              t.image,
                              '" alt="">\n                          \n                      </div>\n                      <div class="a-concert-rectangle thumbnail-info-title">\n                          <div class="poster-title-margin">\n                              <p class="a-poster-text-white">'
                            )
                            .concat(
                              t.chapter_title,
                              "</p>\n                          </div>\n                      </div>\n                  </div>\n              </div>\n          </div>\n          </div>\n              "
                            )
                        : '\n            <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n            <div class="poster">\n            <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n            <div class="poster-body">\n\n                <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                <div class="thumbnail-body" _id="'
                            .concat(
                              t.chapter_id,
                              '">\n                    <div class="thumbnail">\n                   \n                        <img src="'
                            )
                            .concat(
                              t.image,
                              '" alt="">\n                        \n                    </div>\n                    <div class="a-concert-rectangle thumbnail-info-title">\n                        <div class="poster-title-margin">\n                            <p class="a-poster-text-white">'
                            )
                            .concat(
                              t.chapter_title,
                              "</p>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n        </div>\n            "
                            )
                      : S.includes(t.chapter_id)
                      ? '\n            <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n                <div class="poster" >\n                <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n                <div class="poster-body">\n                    <div class="showtime-container justify-content-between">\n                        <p class="a-programming-text">'
                          .concat(
                            t.time,
                            '</p>\n                        <button type="button" class="poster-button remove-program" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>\n                    </div>\n\n                    <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                        <div class="thumbnail">\n                      \n                            <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                            \n                        </div>\n                        <div class="a-concert-rectangle thumbnail-info-title">\n                            <div class="poster-title-margin">\n                                <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n            </div>\n                "
                          )
                      : '\n            <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n            <div class="poster" >\n            <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n            <div class="poster-body">\n                <div class="showtime-container justify-content-between">\n                    <p class="a-programming-text">'
                          .concat(
                            t.time,
                            '</p>\n                    <button type="button" class="poster-button add-favorites" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>\n                </div>\n\n                <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                    <div class="thumbnail">\n                 \n                        <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                        \n                    </div>\n                    <div class="a-concert-rectangle thumbnail-info-title">\n                        <div class="poster-title-margin">\n                            <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                        </div>\n                    </div>\n               </div>\n            </div>\n        </div>\n        </div>\n            "
                          )),
                    h.append(i);
                }),
                y.forEach(function (t, n) {
                  (J =
                    0 == n
                      ? (M.includes(t.chapter_id),
                        '\n                <div class="poster-live">\n                  <div class="poster-body">\n\n                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                      <div class="thumbnail-body" _id="'
                          .concat(
                            t.chapter_id,
                            '">\n                          <div class="thumbnail">\n                              <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                          </div>\n                          <div class="a-cinema-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n                "
                          ))
                      : M.includes(t.chapter_id)
                      ? '\n            <div class="poster" >\n                <div class="poster-body">\n                    <div class="showtime-container justify-content-between">\n                        <p class="a-programming-text">'
                          .concat(
                            t.time,
                            '</p>\n                        <button type="button" class="poster-button remove-program" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '"><img src="./images/posters/heart-icon-white.svg" alt="" class="poster-add"></button>\n                    </div>\n\n                    <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                        <div class="thumbnail">\n                            <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                        </div>\n                        <div class="a-cinenam-rectangle thumbnail-info-title">\n                            <div class="poster-title-margin">\n                                <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n                "
                          )
                      : '\n                <div class="poster" >\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-between">\n                          <p class="a-programming-text">'
                          .concat(
                            t.time,
                            '</p>\n                          <button type="button" class="poster-button add-favorites" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>\n                      </div>\n\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                          <div class="thumbnail">\n                              <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                          </div>\n                          <div class="a-cinema-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n                "
                          )),
                    r.append(J),
                    (J = M.includes(t.chapter_id)
                      ? '\n            <div class="schedule-container">\n                <p class="schedule-title">'
                          .concat(
                            t.chapter_title,
                            '</p>\n            <div class="schedule-item-body">\n                <div class="schedule-poster">\n                        <div class="thumbnail-prog" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                            <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                        </div>\n                    </div>\n                </div>\n\n                <div class="schedule-details">\n                    <div class="schedule-details-header">\n                        <div>\n                            <p class="schedule">'
                          )
                          .concat(
                            t.time,
                            ' hrs.</p>\n                            <p class="rating">Clasificación: A</p>\n                        </div>\n                        <div>\n                        <button title="Eliminar de mi lista" class="button-none programing-button remove-program" type="button" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                        <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n                            <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n                        </svg>\n                        </button>\n                        </div>\n                    </div>\n                    <p class="schedule-description">\n                    '
                          )
                          .concat(
                            t.sinopsis,
                            "\n                    </p>\n                </div>\n            </div>\n\n        </div>\n            "
                          )
                      : '\n          <div class="schedule-container">\n          <p class="schedule-title">'
                          .concat(
                            t.chapter_title,
                            '</p>\n          <div class="schedule-item-body">\n              <div class="schedule-poster">\n                  <div class="poster">\n                      <div class="thumbnail-prog" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                          <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                      </div>\n                  </div>\n              </div>\n\n              <div class="schedule-details">\n                  <div class="schedule-details-header">\n                      <div>\n                          <p class="schedule">'
                          )
                          .concat(
                            t.time,
                            ' hrs.</p>\n                          <p class="rating">Clasificación: A</p>\n                      </div>\n                      <div>\n                          <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                          <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n                              <path class="heart-gray" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n                          </svg>\n                          </button>\n                      </div>\n                  </div>\n                  <p class="schedule-description">\n                      '
                          )
                          .concat(
                            t.sinopsis,
                            "\n                  </p>\n              </div>\n          </div>\n\n      </div>\n            "
                          )),
                    f.append(J);
                }),
                y.forEach(function (t, n) {
                  var i;
                  (i =
                    0 == n
                      ? M.includes(t.chapter_id)
                        ? '\n            \n            <div class=" p-3 border-t border-l border-r border-b position-relative">          \n            <div class="poster-live">\n            <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n           \n                  <div class="poster-body">\n\n                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                      <div class="thumbnail-body" _id="'
                            .concat(
                              t.chapter_id,
                              '">\n                          <div class="thumbnail">\n                         \n                              <img src="'
                            )
                            .concat(
                              t.image,
                              '" alt="">\n                              \n                          </div>\n                          <div class="a-cinema-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                            )
                            .concat(
                              t.chapter_title,
                              "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n              </div>\n                "
                            )
                        : '\n            <div class=" p-3 border-t border-l border-r border-b position-relative">          \n            <div class="poster-live">\n            <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n           \n                  <div class="poster-body">\n\n                      <p class="a-programming-text now-live-text">AHORA EN VIVO</p>\n                      <div class="thumbnail-body" _id="'
                            .concat(
                              t.chapter_id,
                              '">\n                          <div class="thumbnail">\n                         \n                              <img src="'
                            )
                            .concat(
                              t.image,
                              '" alt="">\n                              \n                          </div>\n                          <div class="a-cinema-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                            )
                            .concat(
                              t.chapter_title,
                              "</p>\n                              </div>\n                          </div>\n                        </div>\n\n                  </div>\n              </div>\n              </div>\n                "
                            )
                      : M.includes(t.chapter_id)
                      ? '\n            <div class="schedule-container">\n            <div class="col-9 p-3 border-t border-l border-r border-b position-relative mb-2">\n            <img src="../images/pencil.svg" alt="" class="pencil">\n            <p class="schedule-title mb-0">'
                          .concat(
                            t.chapter_title,
                            '</p>\n            </div>\n            <div class="schedule-item-body">\n                <div class="schedule-poster">\n                    <div class="poster">\n                        <div class="thumbnail-prog" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                            <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                        </div>\n                    </div>\n                </div>\n                \n                <div class="schedule-details">\n                    <div class="schedule-details-header">\n                        <div>\n                        <div class="p-2 border-t border-l border-r border-b position-relative mb-2">\n                        <img src="../images/pencil.svg" alt="" class="pencil">\n                            <p class="schedule">'
                          )
                          .concat(
                            t.time,
                            ' hrs.</p>\n                            </div>\n                            <div class="p-2 border-t border-l border-r border-b position-relative mb-2">\n                            <img src="../images/pencil.svg" alt="" class="pencil">\n                            <p class="rating mb-0">Clasificación: A</p>\n                            </div>\n                        </div>\n                        <div>\n                            <button title="Eliminar de mi lista" class="button-none remove-program programing-button" type="button" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                            <svg  xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">\n                                <path class="heart-gray-filled" fill="none" fill-rule="evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z"/>\n                            </svg>\n                            </button>\n                        </div>\n                    </div>\n                    <div class="p-3 border-t border-l border-r border-b position-relative mb-2">\n                    <img src="../images/pencil.svg" alt="" class="pencil">\n                    <p class="schedule-description">\n                        '
                          )
                          .concat(
                            t.sinopsis,
                            "\n                    </p>\n                    </div>\n                </div>\n            </div>\n\n        </div>\n                "
                          )
                      : '\n            <div class=" p-3 border-t border-l border-r border-b position-relative mb-2">          \n\n                <div class="poster" >\n                <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-between">\n                          <p class="a-programming-text">'
                          .concat(
                            t.time,
                            '</p>\n                          <button type="button" class="poster-button add-favorites" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '"><img src="./images/posters/heart-outline.svg" alt="" class="poster-add"></button>\n                      </div>\n\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            t.chapter_id,
                            '">\n                          <div class="thumbnail">\n                        \n                              <img src="'
                          )
                          .concat(
                            t.image,
                            '" alt="">\n                              \n                          </div>\n                          <div class="a-cinema-rectangle thumbnail-info-title">\n                              <div class="poster-title-margin">\n                                  <p class="a-poster-text-white">'
                          )
                          .concat(
                            t.chapter_title,
                            "</p>\n                              </div>\n                          </div>\n                    </div>\n                  </div>\n              </div>\n              </div>\n                "
                          )),
                    m.append(i);
                });
              i(l), i(v), i(d), i(h), i(r), i(m), (0, t.addFavorites)(), n();
            },
          }),
            n();
        }
        function a(t) {
          var n = { function: "showSynopsis", chapter_id: t };
          console.log(n.chapter_id),
            $.ajax({
              type: "POST",
              data: n,
              url: "./adapters/program.php",
              success: function (t) {
                var n = JSON.parse(t);
                if ((console.log(n), 200 == n.code))
                  localStorage.setItem("synopsis", JSON.stringify(n.data)),
                    (location.href = "./sinopsis.php");
                else {
                  $(".synopsis-content")
                    .addClass("col-12")
                    .html(
                      '\n            <div class="no-synopsis-container text-center">\n                <img src="./images/sinopsis/helmet.png" alt="" class="helmet-image">\n                <h3 class="no-synopsis-title a-text-white-monblack">SINÓPSIS EN <span>CONSTRUCCIÓN</span></h3>\n                <p class="no-synopsis-text a-text-white-semibold">La sinópsis de este programa no está disponible aún</p>\n            </div>\n          '
                    );
                }
              },
            });
        }
      },
      { "./user/user.js": "zXmF" },
    ],
    HUQt: [
      function (require, module, exports) {
        "use strict";
        function e(e) {
          var t = new Date().getFullYear();
          return ""
            .concat(
              [
                "ENERO",
                "FEBRERO",
                "MARZO",
                "ABRIL",
                "MAYO",
                "JUNIO",
                "JULIO",
                "AGOSTO",
                "SEPTIEMBRE",
                "OCTUBRE",
                "NOVIEMBRE",
                "DICIEMBRE",
              ][e],
              " "
            )
            .concat(t);
        }
        function t(e) {
          return new Date().getMonth() + e;
        }
        function n(e) {
          var t = new Date();
          return new Date(t.getFullYear(), t.getMonth() + e, 0).getDate();
        }
        function r() {
          return new Date().getDate();
        }
        function a(e, t) {
          var n = new Date();
          return ["DOM", "LUN", "MAR", "MIER", "JUE", "VIE", "SAB"][
            new Date(n.getFullYear(), e, t).getUTCDay()
          ];
        }
        function o() {
          return new Date().getFullYear();
        }
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.getMonthAndYear = e),
          (exports.getDays = n),
          (exports.getDay = r),
          (exports.getDayName = a),
          (exports.getMonth = t),
          (exports.getYear = o);
      },
      {},
    ],
    x0dL: [
      function (require, module, exports) {
        "use strict";
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.default = void 0);
        var e = require("../date/date.js");
        function n(e, n) {
          if (!(e instanceof n))
            throw new TypeError("Cannot call a class as a function");
        }
        function a(e, n) {
          for (var a = 0; a < n.length; a++) {
            var o = n[a];
            (o.enumerable = o.enumerable || !1),
              (o.configurable = !0),
              "value" in o && (o.writable = !0),
              Object.defineProperty(e, o.key, o);
          }
        }
        function o(e, n, o) {
          return n && a(e.prototype, n), o && a(e, o), e;
        }
        var r = (function () {
          function a() {
            n(this, a);
          }
          return (
            o(a, [
              {
                key: "deleteSlider",
                value: function (e) {
                  e.slick("unslick");
                },
              },
              {
                key: "createSliderBanner",
                value: function () {
                  $(".header-slider")
                    .not(".slick-initialized")
                    .slick({
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      infinite: !1,
                      dots: !0,
                      centerMode: !1,
                      arrows: !1,
                    });
                },
              },
              {
                key: "createSectionSliderHome",
                value: function () {
                  $(".section-slider")
                    .not(".slick-initialized")
                    .slick({
                      slidesToShow: 5,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                      responsive: [
                        {
                          breakpoint: 768,
                          settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: !1,
                            autoplaySpeed: 2e3,
                            centerMode: !1,
                            infinite: !0,
                            arrows: !1,
                            dots: !0,
                          },
                        },
                        {
                          breakpoint: 992,
                          settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: !0,
                            dots: !0,
                            centerMode: !0,
                            arrows: !1,
                          },
                        },
                        {
                          breakpoint: 1200,
                          settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: !0,
                            dots: !0,
                            centerMode: !1,
                            arrows: !0,
                            prevArrow:
                              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                            nextArrow:
                              '<img src="../images/sliders/next.png" class="arrow-next" />',
                          },
                        },
                        {
                          breakpoint: 1900,
                          settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: !0,
                            dots: !0,
                            centerMode: !1,
                            arrows: !0,
                            prevArrow:
                              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                            nextArrow:
                              '<img src="../images/sliders/next.png" class="arrow-next" />',
                          },
                        },
                      ],
                    });
                },
              },
              {
                key: "createProgramacionSlider",
                value: function (e) {
                  e.slick({
                    responsive: [
                      {
                        breakpoint: 767,
                        settings: {
                          slidesToShow: 7,
                          slidesToScroll: 7,
                          autoplay: !1,
                          centerMode: !1,
                          infinite: !0,
                          arrows: !1,
                          dots: !0,
                        },
                      },
                      {
                        breakpoint: 992,
                        settings: {
                          slidesToShow: 8,
                          slidesToScroll: 8,
                          infinite: !0,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                      {
                        breakpoint: 1200,
                        settings: {
                          slidesToShow: 11,
                          slidesToScroll: 11,
                          infinite: !0,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                      {
                        breakpoint: 1900,
                        settings: {
                          slidesToShow: 11,
                          slidesToScroll: 11,
                          infinite: !0,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                      {
                        breakpoint: 1e4,
                        settings: {
                          slidesToShow: 17,
                          slidesToScroll: 17,
                          infinite: !1,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                    ],
                  });
                },
              },
              {
                key: "createDaysSlider",
                value: function (n, a, o) {
                  var r = new Date();
                  $(".month").html((0, e.getMonthAndYear)(r.getMonth()));
                  var c = (0, e.getDays)(1),
                    t = r.getMonth(),
                    i = ((0, e.getDays)(2), 0),
                    s = "",
                    l = "",
                    d = "";
                  if ((0, e.getDays)(1) - (0, e.getDay)() <= 15) {
                    i =
                      (0, e.getDays)(2) + ((0, e.getDays)(1) - (0, e.getDay)());
                    for (var p = (0, e.getDay)(); p <= (0, e.getDays)(1); p++)
                      p == (0, e.getDay)()
                        ? ((d += '\n            <li rel="'
                            .concat(n, "-")
                            .concat(p, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, "-item programing-item ")
                            .concat(
                              n,
                              '-active">\n              <div class="day">\n                  <p class="day-text">'
                            )
                            .concat(
                              (0, e.getDayName)(t, p),
                              '</p>\n                  <p class="day-number">'
                            )
                            .concat(
                              p,
                              "</p>\n              </div>\n            </li>      \n        "
                            )),
                          (s += '\n        <div id="'
                            .concat(n, "-")
                            .concat(p, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, '-content"></div>\n        ')),
                          (l += '\n        <div id="'
                            .concat(n, "-")
                            .concat(p, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, '-content-edit"></div>\n      ')))
                        : ((d += '\n        <li rel="'
                            .concat(n, "-")
                            .concat(p, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(
                              n,
                              '-item programing-item">\n          <div class="day">\n              <p class="day-text">'
                            )
                            .concat(
                              (0, e.getDayName)(t, p),
                              '</p>\n              <p class="day-number">'
                            )
                            .concat(
                              p,
                              "</p>\n          </div>\n        </li>      \n        "
                            )),
                          (s += '\n        <div id="'
                            .concat(n, "-")
                            .concat(p, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, '-content"></div>\n        ')));
                    for (var g = 1; g <= (0, e.getDays)(2); g++)
                      (d += '\n      <li rel="'
                        .concat(n, "-")
                        .concat(g, "-")
                        .concat((0, e.getMonth)(1), '" class="')
                        .concat(
                          n,
                          '-item programing-item">\n        <div class="day">\n            <p class="day-text">'
                        )
                        .concat(
                          (0, e.getDayName)(t + 1, g),
                          '</p>\n            <p class="day-number">'
                        )
                        .concat(
                          g,
                          "</p>\n        </div>\n      </li>      \n  "
                        )),
                        (s += '\n        <div id="'
                          .concat(n, "-")
                          .concat(g, "-")
                          .concat((0, e.getMonth)(1), '" class="')
                          .concat(n, '-content"></div>        \n        ')),
                        (l += '\n        <div id="'
                          .concat(n, "-")
                          .concat(g, "-")
                          .concat((0, e.getMonth)(0), '" class="')
                          .concat(n, '-content-edit"></div>\n        '));
                    $("#pro-" + n + "-slider").append(d),
                      a.append(s),
                      o.append(l);
                  } else {
                    i = c;
                    for (var m = (0, e.getDay)(); m <= i; m++)
                      m == (0, e.getDay)()
                        ? ((d += '\n            <li rel="'
                            .concat(n, "-")
                            .concat(m, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, "-item programing-item ")
                            .concat(
                              n,
                              '-active">\n              <div class="day">\n                  <p class="day-text">'
                            )
                            .concat(
                              (0, e.getDayName)(t, m),
                              '</p>\n                  <p class="day-number">'
                            )
                            .concat(
                              m,
                              "</p>\n              </div>\n            </li>      \n        "
                            )),
                          (s += '\n        <div id="'
                            .concat(n, "-")
                            .concat(m, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, '-content"></div>\n        ')),
                          (l += '\n        <div id="'
                            .concat(n, "-")
                            .concat(m, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, '-content-edit"></div>\n        ')))
                        : ((d += '\n        <li rel="'
                            .concat(n, "-")
                            .concat(m, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(
                              n,
                              '-item programing-item">\n          <div class="day">\n              <p class="day-text">'
                            )
                            .concat(
                              (0, e.getDayName)(t, m),
                              '</p>\n              <p class="day-number">'
                            )
                            .concat(
                              m,
                              "</p>\n          </div>\n        </li>      \n        "
                            )),
                          (s += '\n        <div id="'
                            .concat(n, "-")
                            .concat(m, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, '-content"></div>\n        ')),
                          (l += '\n        <div id="'
                            .concat(n, "-")
                            .concat(m, "-")
                            .concat((0, e.getMonth)(0), '" class="')
                            .concat(n, '-content-edit"></div>\n        ')));
                    $("#pro-" + n + "-slider").html(d),
                      a.append(s),
                      o.append(l);
                  }
                },
              },
              {
                key: "showImageBanner",
                value: function () {
                  var e = [
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-01-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-01-B.jpg",
                      },
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-02-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-02-B.jpg",
                      },
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/pc/CANAL-CLARO-03-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-canal/banner/tablet/CANAL-CLARO-03-B.jpg",
                      },
                    ],
                    n = [
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-01-B.jpg",
                      },
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-02-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-02-B.jpg",
                      },
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/pc/C-CINEMA-03-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/claro-cinema/banner/tablet/C-CINEMA-03-B.jpg",
                      },
                    ],
                    a = [
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-01-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-01-B.jpg",
                      },
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-02-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-02-B.jpg",
                      },
                      {
                        imageBannerPC:
                          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/pc/CONCERT-03-A.jpg",
                        imageBannerTablet:
                          "http://www.claronetworks.openofficedospuntocero.info/images/concert-channel/banner/tablet/CONCERT-03-B.jpg",
                      },
                    ],
                    o = [
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
                    ],
                    r = "",
                    c = "",
                    t = "",
                    i = "",
                    s = $("#banner-claro-canal"),
                    l = $("#banner-claro-cinema"),
                    d = $("#banner-concert-channel"),
                    p = $("#banner-programming"),
                    g = $(".header-slider");
                  g.hasClass("slick-initialized") && g.unslick(),
                    screen.width < 768
                      ? ($(".claro-image-banner-1").attr("src", ""),
                        $(".concert-image-banner-1").attr("src", ""),
                        $(".cinema-image-banner-1").attr("src", ""))
                      : screen.width >= 768 && screen.width < 1200
                      ? (o.forEach(function (e) {
                          i += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerPC,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        e.forEach(function (e) {
                          r += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerTablet,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        n.forEach(function (e) {
                          c += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerTablet,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        a.forEach(function (e) {
                          t += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerTablet,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        s.html(r),
                        l.html(c),
                        d.html(t),
                        p.html(i))
                      : screen.width >= 1200 &&
                        (g.hasClass("slick-initialized") && g.unslick(),
                        o.forEach(function (e) {
                          i += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerPC,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        e.forEach(function (e) {
                          r += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerPC,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        n.forEach(function (e) {
                          c += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerPC,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        a.forEach(function (e) {
                          t += '        \n        <div class="header-slide">\n          <img src="'.concat(
                            e.imageBannerPC,
                            '" class="rellax" data-rellax="10">\n        </div>'
                          );
                        }),
                        s.html(r),
                        l.html(c),
                        d.html(t),
                        p.html(i)),
                    $(".header-slider")
                      .not(".slick-initialized")
                      .slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: !1,
                        dots: !0,
                        centerMode: !1,
                        arrows: !1,
                        prevArrow:
                          '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                        nextArrow:
                          '<img src="../images/sliders/next.png" class="arrow-next" />',
                        autoplay: !0,
                        autoplaySpeed: 2e3,
                      }),
                    $(window).resize(function () {
                      g.hasClass("slick-initialized") && g.slick("unslick"),
                        screen.width < 768
                          ? ($(".claro-image-banner-1").attr("src", ""),
                            $(".concert-image-banner-1").attr("src", ""),
                            $(".cinema-image-banner-1").attr("src", ""))
                          : screen.width >= 768 && screen.width < 1200
                          ? ((r = ""),
                            e.forEach(function (e) {
                              r += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerTablet,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            (c = ""),
                            n.forEach(function (e) {
                              c += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerTablet,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            (t = ""),
                            a.forEach(function (e) {
                              t += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerTablet,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            (i = ""),
                            o.forEach(function (e) {
                              i += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerPC,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            s.html(r),
                            l.html(c),
                            d.html(t),
                            p.html(i),
                            $(".headr-slider").slick())
                          : screen.width >= 1200 &&
                            ((r = ""),
                            e.forEach(function (e) {
                              r += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerPC,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            (c = ""),
                            n.forEach(function (e) {
                              c += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerPC,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            (t = ""),
                            a.forEach(function (e) {
                              t += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerPC,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            (i = ""),
                            o.forEach(function (e) {
                              i += '        \n          <div class="header-slide">\n            <img src="'.concat(
                                e.imageBannerPC,
                                '" class="rellax" data-rellax="10">\n          </div>'
                              );
                            }),
                            s.html(r),
                            l.html(c),
                            d.html(t),
                            p.html(i)),
                        $(".header-slider")
                          .not(".slick-initialized")
                          .slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: !1,
                            dots: !0,
                            centerMode: !1,
                            arrows: !1,
                            prevArrow:
                              '<img src="./images/sliders/prev.png" class="arrow-prev" />',
                            nextArrow:
                              '<img src="./images/sliders/next.png" class="arrow-next" />',
                            autoplay: !0,
                            autoplaySpeed: 2e3,
                          });
                    });
                },
              },
            ]),
            a
          );
        })();
        exports.default = r;
      },
      { "../date/date.js": "HUQt" },
    ],
    qg4i: [
      function (require, module, exports) {
        "use strict";
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.default = void 0);
        var e = t(require("./Slider.js"));
        function t(e) {
          return e && e.__esModule ? e : { default: e };
        }
        function a(e, t) {
          if (!(e instanceof t))
            throw new TypeError("Cannot call a class as a function");
        }
        function i(e, t) {
          for (var a = 0; a < t.length; a++) {
            var i = t[a];
            (i.enumerable = i.enumerable || !1),
              (i.configurable = !0),
              "value" in i && (i.writable = !0),
              Object.defineProperty(e, i.key, i);
          }
        }
        function n(e, t, a) {
          return t && i(e.prototype, t), a && i(e, a), e;
        }
        var s = (function () {
          function t() {
            a(this, t);
          }
          return (
            n(t, [
              {
                key: "createProgramacionSlider",
                value: function () {
                  programacion_slider = $(".programacion-slider").slick({
                    responsive: [
                      {
                        breakpoint: 767,
                        settings: {
                          slidesToShow: 7,
                          slidesToScroll: 7,
                          autoplay: !1,
                          centerMode: !1,
                          infinite: !0,
                          arrows: !1,
                          dots: !0,
                        },
                      },
                      {
                        breakpoint: 992,
                        settings: {
                          slidesToShow: 8,
                          slidesToScroll: 8,
                          infinite: !0,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                      {
                        breakpoint: 1200,
                        settings: {
                          slidesToShow: 11,
                          slidesToScroll: 11,
                          infinite: !0,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                      {
                        breakpoint: 1900,
                        settings: {
                          slidesToShow: 11,
                          slidesToScroll: 11,
                          infinite: !0,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                      {
                        breakpoint: 1e4,
                        settings: {
                          slidesToShow: 17,
                          slidesToScroll: 17,
                          infinite: !1,
                          dots: !0,
                          centerMode: !1,
                          arrows: !0,
                          prevArrow:
                            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                          nextArrow:
                            '<img src="../images/sliders/next.png" class="arrow-next" />',
                        },
                      },
                    ],
                  });
                },
              },
              {
                key: "renderHome",
                value: function (t) {
                  console.log(t), $("#slider-header-home").slick("unslick");
                  for (
                    var a = [
                        t.data.block_1_image_background_1,
                        t.data.block_1_image_background_2,
                        t.data.block_1_image_background_3,
                        t.data.block_1_image_background_4,
                        t.data.block_1_image_background_5,
                      ],
                      i = a.length,
                      n = "",
                      s = 0;
                    s < i;
                    s++
                  )
                    n += '\n      <div class="header-slide">\n        <img src="'.concat(
                      a[s],
                      '" class="rellax" data-rellax="10">\n      </div>'
                    );
                  $("#slider-header-home").append(n),
                    $("#slider-header-home")
                      .not(".slick-initialized")
                      .slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: !1,
                        dots: !0,
                        centerMode: !1,
                        arrows: !1,
                      });
                  var r = '<span class="header-span">'
                    .concat(t.data.block_1_title, " </span>")
                    .concat(t.data.block_1_subtitle);
                  $(".header-h1").html(r),
                    $(".source-video").attr("src", t.data.block_1_video_name);
                  var o = ""
                    .concat(
                      t.data.block_2_title1,
                      ' <span class="header-span">'
                    )
                    .concat(
                      t.data.block_2_title2,
                      '</span><span class="header-point">•</span>'
                    );
                  $(".title-tv").html(o),
                    $(".claro-nav-image").attr(
                      "src",
                      t.data.block_2_channel1_icon
                    ),
                    $(".concert-nav-image").attr(
                      "src",
                      t.data.block_2_channel2_icon
                    ),
                    $(".cinema-nav-image").attr(
                      "src",
                      t.data.block_2_channel3_icon
                    ),
                    $(".nv-nav-image").attr(
                      "src",
                      t.data.block_2_channel4_icon
                    ),
                    $(".sports-nav-image").attr(
                      "src",
                      t.data.block_2_channel5_icon
                    ),
                    $(".a-claro-channel-title").text(t.data.block_3_title),
                    $(".a-claro-home-subtitle").text(t.data.block_3_subtitle),
                    $(".btn-canal-claro-home").text(t.data.block_3_button1);
                  var c = JSON.parse(
                      localStorage.getItem("favoritesCanalClaro")
                    ),
                    l = JSON.parse(
                      localStorage.getItem("favoritesConcertChannel")
                    ),
                    d = JSON.parse(
                      localStorage.getItem("favoritesClaroCinema")
                    ),
                    p = [];
                  if (localStorage.getItem("favoritesCanalClaro"))
                    for (var v = c.length, g = 0; g < v; g++) {
                      var m = c[g].chapter_id;
                      p.push(m);
                    }
                  if (localStorage.getItem("favoritesConcertChannel"))
                    for (var b = l.length, h = 0; h < b; h++) {
                      var u = l[h].chapter_id;
                      p.push(u);
                    }
                  if (localStorage.getItem("favoritesClaroCinema"))
                    for (var _ = d.length, w = 0; w < _; w++) {
                      var f = d[w].chapter_id;
                      p.push(f);
                    }
                  var k = [
                    t.data.block_3_image1,
                    t.data.block_3_image2,
                    t.data.block_3_image3,
                    t.data.block_3_image4,
                    t.data.block_3_image5,
                  ];
                  $(".section-slider").slick("unslick"),
                    $(".cinema-home-slider").slick("unslick");
                  for (var y = k.length, x = "", S = 0; S < y; S++)
                    p.includes(k[S].chapter_id)
                      ? (x += '\n        <div class="poster">\n        <div class="poster-body">\n            <div class="showtime-container justify-content-end">\n         \n                <button type="button" class="poster-button remove-program" _id='
                          .concat(
                            k[S].chapter_id,
                            '><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>\n            </div>\n              <div class="thumbnail-body" _id='
                          )
                          .concat(
                            k[S].chapter_id,
                            '">\n                <div class="thumbnail-large">\n                    <img src="'
                          )
                          .concat(
                            k[S].image_vertical,
                            '" alt="">\n                </div>\n              </div>\n        </div>\n    </div> \n        '
                          ))
                      : (x += '\n        <div class="poster">\n        <div class="poster-body">\n            <div class="showtime-container justify-content-end">\n                <button type="button" class="poster-button add-favorites" _id='
                          .concat(
                            k[S].chapter_id,
                            '><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>\n            </div>\n            <div class="thumbnail-body" _id='
                          )
                          .concat(
                            k[S].chapter_id,
                            '">\n                <div class="thumbnail-large">\n                    <img src="'
                          )
                          .concat(
                            k[S].image_vertical,
                            '" alt="">\n                </div>\n            </div>\n        </div>\n    </div> \n        '
                          ));
                  $(".claro-slider-home").append(x);
                  for (var A = "", j = 0; j < y; j++)
                    p.includes(k[j].chapter_id)
                      ? (A += '\n        <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n        <div class="poster">\n        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n        <div class="poster-body">\n            <div class="showtime-container justify-content-end">\n         \n                <button type="button" class="poster-button remove-program" _id='
                          .concat(
                            k[j].chapter_id,
                            '><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>\n            </div>\n              <div class="thumbnail-body" _id='
                          )
                          .concat(
                            k[j].chapter_id,
                            '">\n                <div class="thumbnail-large">\n                    <img src="'
                          )
                          .concat(
                            k[j].image_vertical,
                            '" alt="">\n                </div>\n              </div>\n        </div>\n    </div> \n    </div>\n        '
                          ))
                      : (A += '\n        <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n              <div class="poster">\n              <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n        <div class="poster-body">\n            <div class="showtime-container justify-content-end">\n                <button type="button" class="poster-button add-favorites" _id='
                          .concat(
                            k[j].chapter_id,
                            '><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>\n            </div>\n            <div class="thumbnail-body" _id='
                          )
                          .concat(
                            k[j].chapter_id,
                            '">\n                <div class="thumbnail-large">\n                    <img src="'
                          )
                          .concat(
                            k[j].image_vertical,
                            '" alt="">\n                </div>\n            </div>\n        </div>\n    </div> \n    </div>\n        '
                          ));
                  $(".claro-slider-home-prev").append(A);
                  var C = new e.default();
                  $(".a-concert-home-subtitle").text(t.data.block_4_subtitle),
                    $(".button-concert-home").text(t.data.block_4_button1);
                  for (
                    var T = [
                        t.data.block_4_image1,
                        t.data.block_4_image2,
                        t.data.block_4_image3,
                        t.data.block_4_image4,
                      ],
                      E = T.length,
                      I = "",
                      M = 0;
                    M < E;
                    M++
                  )
                    p.includes(T[M].chapter_id)
                      ? (I += '\n            <div class="poster">\n                <div class="poster-body">\n                    <div class="showtime-container justify-content-end">\n                        <button type="button" class="poster-button remove-program" _id="'
                          .concat(
                            T[M].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>\n                    </div>\n                    <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            T[M].chapter_id,
                            '">\n                        <div class="thumbnail-large">\n                            <img src="'
                          )
                          .concat(
                            T[M].image_vertical,
                            '" alt="">\n                        </div>\n                    </div>\n                </div>\n            </div>\n            '
                          ))
                      : (I += '\n            <div class="poster">\n                <div class="poster-body">\n                     <div class="showtime-container justify-content-end">\n                        <button type="button" class="poster-button add-favorites" _id="'
                          .concat(
                            T[M].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>\n                      </div>\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            T[M].chapter_id,
                            '">\n                        <div class="thumbnail-large">\n                            <img src="'
                          )
                          .concat(
                            T[M].image_vertical,
                            '" alt="">\n                        </div>\n                      </div>\n                </div>\n            </div>\n            '
                          ));
                  $(".concert-home-slider").append(I);
                  for (var O = "", D = 0; D < E; D++)
                    p.includes(T[D].chapter_id)
                      ? (O += '\n        <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n        <div class="poster">\n        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n                <div class="poster-body">\n                    <div class="showtime-container justify-content-end">\n                        <button type="button" class="poster-button remove-program" _id="'
                          .concat(
                            T[D].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>\n                    </div>\n                    <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            T[D].chapter_id,
                            '">\n                        <div class="thumbnail-large">\n                            <img src="'
                          )
                          .concat(
                            T[D].image_vertical,
                            '" alt="">\n                        </div>\n                    </div>\n                </div>\n            </div>\n            </div>\n            '
                          ))
                      : (O += '\n        <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n        <div class="poster">\n        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n                <div class="poster-body">\n                     <div class="showtime-container justify-content-end">\n                        <button type="button" class="poster-button add-favorites" _id="'
                          .concat(
                            T[D].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>\n                      </div>\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            T[D].chapter_id,
                            '">\n                        <div class="thumbnail-large">\n                            <img src="'
                          )
                          .concat(
                            T[D].image_vertical,
                            '" alt="">\n                        </div>\n                      </div>\n                </div>\n            </div>\n            </div>\n            '
                          ));
                  $(".concert-home-slider-prev").append(O),
                    $(".a-cinema-home-subtitle").text(t.data.block_5_subtitle),
                    $(".button-cinema-home").text(t.data.block_5_button1);
                  for (
                    var N = [
                        t.data.block_5_image1,
                        t.data.block_5_image2,
                        t.data.block_5_image3,
                        t.data.block_5_image4,
                      ],
                      L = N.length,
                      z = "",
                      R = 0;
                    R < L;
                    R++
                  )
                    p.includes(N[R].chapter_id)
                      ? (z += '\n              <div class="poster">\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-end">\n                        \n                          <button type="button" class="poster-button remove-program" _id="'
                          .concat(
                            N[R].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>\n                      </div>\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            N[R].chapter_id,
                            '">\n                          <div class="thumbnail-large">\n                              <img src="'
                          )
                          .concat(
                            N[R].image_vertical,
                            '" alt="">\n                          </div>\n                      </div>\n                    \n                  </div>\n              </div>\n              '
                          ))
                      : (z += '\n              <div class="poster">\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-end">\n                 \n                          <button type="button" class="poster-button add-favorites" _id="'
                          .concat(
                            N[R].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>\n                      </div>\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            N[R].chapter_id,
                            '">\n                          <div class="thumbnail-large">\n                              <img src="'
                          )
                          .concat(
                            N[R].image_vertical,
                            '" alt="">\n                          </div>\n                      </div>\n                  </div>\n              </div>\n              '
                          ));
                  $(".cinema-home-slider").append(z);
                  for (var G = "", J = 0; J < L; J++)
                    p.includes(N[J].chapter_id)
                      ? (G += '\n        <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n            <div class="poster">\n        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-end">\n                        \n                          <button type="button" class="poster-button remove-program" _id="'
                          .concat(
                            N[J].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-icon-white.svg" alt=""></button>\n                      </div>\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            N[J].chapter_id,
                            '">\n                          <div class="thumbnail-large">\n                              <img src="'
                          )
                          .concat(
                            N[J].image_vertical,
                            '" alt="">\n                          </div>\n                      </div>\n                    \n                  </div>\n              </div>\n              </div>\n              '
                          ))
                      : (G += '\n        <div class=" p-3 border-t border-l border-r border-b position-relative">          \n\n        <div class="poster">\n        <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2"style="width:15px"></button>\n\n          \n                  <div class="poster-body">\n                      <div class="showtime-container justify-content-end">\n                 \n                          <button type="button" class="poster-button add-favorites" _id="'
                          .concat(
                            N[J].chapter_id,
                            '"><img class="poster-add" src="./images/posters/heart-outline.svg" alt=""></button>\n                      </div>\n                      <div class="thumbnail-body" _id="'
                          )
                          .concat(
                            N[J].chapter_id,
                            '">\n                          <div class="thumbnail-large">\n                              <img src="'
                          )
                          .concat(
                            N[J].image_vertical,
                            '" alt="">\n                          </div>\n                      </div>\n                  </div>\n              </div>\n              </div>\n              '
                          ));
                  $(".cinema-home-slider-prev").append(G),
                    $(".cinema-home-slider").slick({
                      slidesToShow: 5,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                      responsive: [
                        {
                          breakpoint: 768,
                          settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: !1,
                            autoplaySpeed: 2e3,
                            centerMode: !1,
                            infinite: !0,
                            arrows: !1,
                            dots: !0,
                          },
                        },
                        {
                          breakpoint: 992,
                          settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: !0,
                            dots: !0,
                            centerMode: !0,
                            arrows: !1,
                          },
                        },
                        {
                          breakpoint: 1200,
                          settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: !0,
                            dots: !0,
                            centerMode: !1,
                            arrows: !0,
                            prevArrow:
                              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                            nextArrow:
                              '<img src="../images/sliders/next.png" class="arrow-next" />',
                          },
                        },
                        {
                          breakpoint: 1900,
                          settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: !0,
                            dots: !0,
                            centerMode: !1,
                            arrows: !0,
                            prevArrow:
                              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                            nextArrow:
                              '<img src="../images/sliders/next.png" class="arrow-next" />',
                          },
                        },
                        {
                          breakpoint: 1e4,
                          settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: !0,
                            dots: !0,
                            centerMode: !1,
                            arrows: !0,
                            prevArrow:
                              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                            nextArrow:
                              '<img src="../images/sliders/next.png" class="arrow-next" />',
                          },
                        },
                      ],
                    }),
                    C.createSectionSliderHome();
                },
              },
              {
                key: "renderCanalClaro",
                value: function () {
                  var t = new e.default(),
                    a = $("#dontLose-claro-slider"),
                    i = $(".section-slider"),
                    n = $("#exlusiveContentClaroSlider");
                  i.slick("unslick");
                  var s = "",
                    r = "",
                    o = "",
                    c = "";
                  [
                    {
                      chapter_id: 1,
                      program_title: "JOBS",
                      genre: "Película",
                      image:
                        "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/01-JOBS.jpg",
                    },
                    {
                      chapter_id: 2,
                      program_title: "DA VINCI",
                      genre: "Documental",
                      image:
                        "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/02%20DAVINCI.jpg",
                    },
                    {
                      chapter_id: 3,
                      program_title: "EL DANDY",
                      genre: "Serie",
                      image:
                        "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/03%20EL-DANDY.jpg",
                    },
                    {
                      chapter_id: 4,
                      program_title: "MARVEL",
                      genre: "Anime",
                      image:
                        "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/04-MARVEL.jpg",
                    },
                  ].forEach(function (e) {
                    (s += '\n      <div class="poster" >\n        <div class="poster-body">\n            <div class="thumbnail-body" _id="'
                      .concat(
                        e.chapter_id,
                        '">\n                <div class="thumbnail">\n                    <img src="'
                      )
                      .concat(
                        e.image,
                        '" alt="">\n                </div>\n                <div class="a-claro-rectangle thumbnail-info-title">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                      )
                      .concat(
                        e.genre,
                        "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      "
                      )),
                      (o += '\n      <div class="poster p-3 border-l border-r border-b border-t position-relative">\n      <button class="d-flex align-items-center justify-content-center pencil-black a-text-regular-white pl-2"> Editar <img src="./images/General/edit-white.svg" alt="" class="ml-2" style="width:15px"></button>\n        <div class="poster-body">\n            <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                    <img src="'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-claro-rectangle thumbnail-info-title">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.genre,
                          "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      "
                        ));
                  }),
                    [
                      {
                        chapter_id: 1,
                        program_title: "DRESS CODE",
                        image:
                          "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/05-DRESS-CODE.jpg",
                      },
                      {
                        chapter_id: 2,
                        program_title: "FIT FOR LIFE",
                        image:
                          "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/06-FIT4LIFE.jpg",
                      },
                      {
                        chapter_id: 3,
                        program_title: "CONEXIÓN CLARO",
                        image:
                          "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/07-CONEXION.jpg",
                      },
                      {
                        chapter_id: 4,
                        program_title: "LA CAJA DE PANDORA",
                        image:
                          "http://www.claronetworks.openofficedospuntocero.info/v1.2/images/claro-canal/images-horizontal/08-CAJA-DE-PANDORA.jpg",
                      },
                    ].forEach(function (e) {
                      (r += '\n      <div class="poster" >\n        <div class="poster-body">\n            <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                    <img src="'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-claro-rectangle thumbnail-info-title">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.program_title,
                          "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      "
                        )),
                        (c += '\n      <div class="poster border-l p-3 border-r border-t border-b" >\n        <div class="poster-body">\n            <div class="thumbnail-body" _id="'
                          .concat(
                            e.chapter_id,
                            '">\n                <div class="thumbnail">\n                    <img src="'
                          )
                          .concat(
                            e.image,
                            '" alt="">\n                </div>\n                <div class="a-claro-rectangle thumbnail-info-title">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                          )
                          .concat(
                            e.program_title,
                            "</p>\n                    </div>\n                </div>\n          </div>\n        </div>\n      </div>\n      "
                          ));
                    }),
                    $("#dontLose-claro-sliderEdit").append(o),
                    $("#exlusiveContentClaroSliderEdit").append(c),
                    a.append(s),
                    n.append(r),
                    t.createSectionSliderHome();
                },
              },
            ]),
            t
          );
        })();
        exports.default = s;
      },
      { "./Slider.js": "x0dL" },
    ],
    PJIa: [
      function (require, module, exports) {
        "use strict";
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.getMetaKeys = r);
        var e = t(require("../UI/Section.js"));
        function t(e) {
          return e && e.__esModule ? e : { default: e };
        }
        function r() {
          $.ajax({
            type: "POST",
            data: { function: "getMetakeys" },
            url: "./adapters/section.php",
            success: function (t) {
              var r = JSON.parse(t),
                a = new e.default();
              a.renderHome(r), a.renderCanalClaro();
            },
          });
        }
      },
      { "../UI/Section.js": "qg4i" },
    ],
    jfQw: [
      function (require, module, exports) {
        "use strict";
        function n(n, a) {
          if (!(n instanceof a))
            throw new TypeError("Cannot call a class as a function");
        }
        function a(n, a) {
          for (var e = 0; e < a.length; e++) {
            var s = a[e];
            (s.enumerable = s.enumerable || !1),
              (s.configurable = !0),
              "value" in s && (s.writable = !0),
              Object.defineProperty(n, s.key, s);
          }
        }
        function e(n, e, s) {
          return e && a(n.prototype, e), s && a(n, s), n;
        }
        Object.defineProperty(exports, "__esModule", { value: !0 }),
          (exports.default = void 0);
        var s = (function () {
          function a() {
            n(this, a);
          }
          return (
            e(a, [
              {
                key: "renderMenuWhite",
                value: function () {
                  var n = $("#menu-white"),
                    a =
                      '\n        <nav class="navbar-white">\n            <div class="nav-content">\n                <div class="claro-logo">\n                    <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />\n                    <div class="d-flex justify-content-center">\n                        <a href="home.php">\n                            <img class="logo" src="../images/home/claro-logo.svg" alt="" />\n                        </a>\n                    </div>\n                </div>\n        \n                <div class="login">\n                    <a href="index.php" class="login-item"><img class="login-country" alt="" /></a>\n                </div>\n            </div>\n        </nav>\n        ';
                  $(window).width() < 768
                    ? (n.html(a), console.log("Menu Móvil"))
                    : $(window).width() < 1200
                    ? (n.html(
                        '\n    <nav class="navbar-white">\n        <div class="nav-content">\n            <div class="nav-logo">\n                <img class="menu-responsive-tablet" src="../images/aboutus/hamburger-about-us.svg" alt="" />\n                <a href="home.php">\n                    <img class="logo" src="../images/home/claro-logo.svg" alt="" />\n                </a>\n\n            </div>\n\n            <div class="nav-country-image">\n                <a href="index.php" class="login-item"><img src="" class="login-country" alt="" /></a>\n            </div>\n        </div>\n    </nav>\n    '
                      ),
                      console.log("Menu Tablet"))
                    : $(window).width() >= 1200 &&
                      (n.html(
                        '    \n    <nav class="menu-desktop">\n    <div class="nav-content">\n        <div class="claro-logo">\n\n            <a href="home.php"><img class="logo" src="./images/home/claro-logo.svg" alt="" /></a>\n        </div>\n\n        <div class="user-options">\n        </div>\n    </div>\n    <div class="claro-navbar">\n        <div>\n            <a href="claro-canal.php" class="navbar-link text-decoration-none">\n                <p class="navbar-item-black text-semibold">Canal Claro</p>\n            </a>\n        </div>\n        <div>\n            <a href="concert-channel.php" class="navbar-link text-decoration-none">\n                <p class="navbar-item-black text-semibold">Concert Channel</p>\n            </a>\n        </div>\n        <div>\n            <a href="claro-cinema.php" class="navbar-link text-decoration-none">\n                <p class="navbar-item-black text-semibold">Claro Cinema</p>\n            </a>\n        </div>\n        <div>\n            <a href="https://nuestravision.tv" class="navbar-link text-decoration-none">\n                <p class="navbar-item-black text-semibold">Nuestra Visión</p>\n            </a>\n        </div>\n        <div>\n            <a href="https://www.marca.com/claro-mx/" class="navbar-link text-decoration-none">\n                <p class="navbar-item-black text-semibold">Claro Sports</p>\n            </a>\n        </div>\n        <div>\n            <a href="programacion.php" class="navbar-link text-decoration-none">\n                <p class="navbar-item-black text-semibold">Programación</p>\n            </a>\n        </div>\n    </div>\n</nav>'
                      ),
                      console.log("Menu Desktop")),
                    $(window).resize(function () {
                      var e = localStorage.getItem("src");
                      a = '\n        <nav class="navbar-white">\n            <div class="nav-content">\n                <div class="claro-logo">\n                    <img class="menu-responsive" src="../images/aboutus/hamburger-about-us.svg" alt="" />\n                    <div class="d-flex justify-content-center">\n                        <a href="home.php">\n                            <img class="logo" src="../images/home/claro-logo.svg" alt="" />\n                        </a>\n                    </div>\n                </div>\n        \n                <div class="login">\n                    <a href="index.php" class="login-item"><img src="'.concat(
                        e,
                        '" class="login-country" alt="" /></a>\n                </div>\n            </div>\n        </nav>\n        '
                      );
                      var s = '\n        <nav class="navbar-white">\n            <div class="nav-content">\n                <div class="nav-logo">\n                    <img class="menu-responsive-tablet" src="../images/aboutus/hamburger-about-us.svg" alt="" />\n                    <a href="home.php">\n                        <img class="logo" src="../images/home/claro-logo.svg" alt="" />\n                    </a>\n    \n                </div>\n    \n                <div class="nav-country-image">\n                    <a href="index.php" class="login-item"><img src="'.concat(
                        e,
                        '" class="login-country" alt="" /></a>\n                </div>\n            </div>\n        </nav>\n        '
                      );
                      n.html(""),
                        $(window).width() < 768
                          ? (n.html(a), console.log("Menu Móvil"))
                          : $(window).width() < 1200
                          ? (n.html(s), console.log("Menu Tablet"))
                          : $(window).width() >= 1200 &&
                            (n.html(
                              '    \n      <nav class="menu-desktop">\n      <div class="nav-content">\n          <div class="claro-logo">\n  \n              <a href="home.php"><img class="logo" src="./images/home/claro-logo.svg" alt="" /></a>\n          </div>\n  \n          <div class="user-options">\n          </div>\n      </div>\n      <div class="claro-navbar">\n          <div>\n              <a href="claro-canal.php" class="navbar-link text-decoration-none">\n                  <p class="navbar-item-black text-semibold">Canal Claro</p>\n              </a>\n          </div>\n          <div>\n              <a href="concert-channel.php" class="navbar-link text-decoration-none">\n                  <p class="navbar-item-black text-semibold">Concert Channel</p>\n              </a>\n          </div>\n          <div>\n              <a href="claro-cinema.php" class="navbar-link text-decoration-none">\n                  <p class="navbar-item-black text-semibold">Claro Cinema</p>\n              </a>\n          </div>\n          <div>\n              <a href="https://nuestravision.tv" class="navbar-link text-decoration-none">\n                  <p class="navbar-item-black text-semibold">Nuestra Visión</p>\n              </a>\n          </div>\n          <div>\n              <a href="https://www.marca.com/claro-mx/" class="navbar-link text-decoration-none">\n                  <p class="navbar-item-black text-semibold">Claro Sports</p>\n              </a>\n          </div>\n          <div>\n              <a href="programacion.php" class="navbar-link text-decoration-none">\n                  <p class="navbar-item-black text-semibold">Programación</p>\n              </a>\n          </div>\n      </div>\n  </nav>'
                            ),
                            console.log("Menu Desktop"));
                    });
                },
              },
            ]),
            a
          );
        })();
        exports.default = s;
      },
      {},
    ],
    epB2: [
      function (require, module, exports) {
        "use strict";
        var e,
          s,
          n = require("./scroll/scroll.js"),
          t = require("./form/form.js"),
          i = require("./session/session.js"),
          a = require("./services/user/user.js"),
          r = require("./country/country.js"),
          l = require("./services/Program.js"),
          c = require("./date/date.js"),
          o = p(require("./UI/Slider.js")),
          d = require("./services/Section.js"),
          v = p(require("./UI/Navbar.js"));
        function p(e) {
          return e && e.__esModule ? e : { default: e };
        }
        var m = location.href,
          g =
            "http://www.claronetworks.openofficedospuntocero.info/v1.2/cuenta-confirmada.html",
          u = m.split("?"),
          h = { token: u[1] };
        console.log(h), u[0] == g && (0, t.validateToken)(h);
        var f = localStorage.getItem("country"),
          b = localStorage.getItem("gender");
        if ((f && $(".SeleccionPaisLista").text(f), b)) {
          var w = $("#women"),
            y = $("#men"),
            x = $("#hombre"),
            k = $("#mujer");
          "F" == b
            ? (k.attr("checked", !0),
              x.attr("checked", !1),
              y.attr("src", "images/datos-adicionales/masculino-inactivo.svg"),
              w.attr("src", "images/datos-adicionales/femenino-activo.svg"))
            : (k.attr("checked", !1),
              x.attr("checked", !0),
              y.attr("src", "images/datos-adicionales/masculino-activo.svg"),
              w.attr("src", "images/datos-adicionales/femenino-inactivo.svg"));
        }
        var S,
          A = localStorage.getItem("day"),
          L = localStorage.getItem("month"),
          T = localStorage.getItem("year");
        function _() {
          $(".cinema-home-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: !0,
            dots: !0,
            centerMode: !1,
            arrows: !0,
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />',
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  autoplay: !1,
                  autoplaySpeed: 2e3,
                  centerMode: !1,
                  infinite: !0,
                  arrows: !1,
                  dots: !0,
                },
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !0,
                  arrows: !1,
                },
              },
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
              {
                breakpoint: 1900,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
            ],
          });
        }
        function C() {
          e = $(".programacion-slider").slick({
            responsive: [
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 7,
                  slidesToScroll: 7,
                  autoplay: !1,
                  centerMode: !1,
                  infinite: !0,
                  arrows: !1,
                  dots: !0,
                },
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 8,
                  slidesToScroll: 8,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 11,
                  slidesToScroll: 11,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
              {
                breakpoint: 1900,
                settings: {
                  slidesToShow: 11,
                  slidesToScroll: 11,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
              {
                breakpoint: 1e4,
                settings: {
                  slidesToShow: 17,
                  slidesToScroll: 17,
                  infinite: !1,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
            ],
          });
        }
        function j() {
          $(".tv-slider").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: !0,
            dots: !0,
            centerMode: !1,
            arrows: !0,
            prevArrow:
              '<img src="../images/sliders/prev.png" class="arrow-prev" />',
            nextArrow:
              '<img src="../images/sliders/next.png" class="arrow-next" />',
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  autoplay: !1,
                  autoplaySpeed: 2e3,
                  centerMode: !0,
                  infinite: !0,
                  arrows: !1,
                  dots: !0,
                },
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !1,
                },
              },
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
              {
                breakpoint: 1900,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  infinite: !0,
                  dots: !0,
                  centerMode: !1,
                  arrows: !0,
                  prevArrow:
                    '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                  nextArrow:
                    '<img src="../images/sliders/next.png" class="arrow-next" />',
                },
              },
            ],
          });
        }
        function M() {
          $("ul.claro-calendar .claro-item").click(function () {
            $("ul.claro-calendar .claro-item").removeClass("claro-active"),
              $(this).addClass("claro-active"),
              $(".claro-content").hide(),
              $(".claro-content-edit").hide();
            var e = $(this).attr("rel"),
              s = e.length,
              n = e.charAt(s - 1);
            $(".month").text("".concat((0, c.getMonthAndYear)(n))),
              $("#" + e).fadeIn();
          }),
            $(".claro-content-edit").hide(),
            $(".claro-content-edit:first").show(),
            $(".claro-content").hide(),
            $(".claro-content:first").show(),
            $(".concert-content").hide(),
            $(".concert-content:first").show(),
            $("ul.concert-calendar .concert-item").click(function () {
              $("ul.concert-calendar .concert-item").removeClass(
                "concert-active"
              ),
                $(this).addClass("concert-active"),
                $(".concert-content").hide();
              var e = $(this).attr("rel");
              $("#" + e).fadeIn();
              var s = e.length,
                n = e.charAt(s - 1);
              $(".month").text("".concat((0, c.getMonthAndYear)(n)));
            }),
            $(".cinema-content").hide(),
            $(".cinema-content:first").show(),
            $("ul.cinema-calendar .cinema-item").click(function () {
              $("ul.cinema-calendar .cinema-item").removeClass("cinema-active"),
                $(this).addClass("cinema-active"),
                $(".cinema-content").hide();
              var e = $(this).attr("rel");
              $("#" + e).fadeIn();
              var s = e.length,
                n = e.charAt(s - 1);
              $(".month").text("".concat((0, c.getMonthAndYear)(n)));
            }),
            $(".vision-content").hide(),
            $(".vision-content:first").show(),
            $("ul.vision-calendar .vision-item").click(function () {
              $("ul.vision-calendar .vision-item").removeClass("vision-active"),
                $(this).addClass("vision-active"),
                $(".vision-content").hide();
              var e = $(this).attr("rel");
              $("#" + e).fadeIn();
              var s = e.length,
                n = e.charAt(s - 1);
              $(".month").text("".concat((0, c.getMonthAndYear)(n)));
            }),
            $(".sports-content").hide(),
            $(".sports-content:first").show(),
            $("ul.sports-calendar .sports-item").click(function () {
              $("ul.sports-calendar .sports-item").removeClass("sports-active"),
                $(this).addClass("sports-active"),
                $(".sports-content").hide();
              var e = $(this).attr("rel");
              $("#" + e).fadeIn();
              var s = e.length,
                n = e.charAt(s - 1);
              $(".month").text("".concat((0, c.getMonthAndYear)(n)));
            });
        }
        function E() {
          $(".programacion-slider#pro-claro-slider").slick("refresh"),
            $(".programacion-slider#pro-concert-slider").slick("refresh"),
            $(".programacion-slider#pro-cinema-slider").slick("refresh"),
            $(".programacion-slider#pro-vision-slider").slick("refresh"),
            $(".programacion-slider#pro-sports-slider").slick("refresh"),
            M(),
            (0, a.addFavorites)();
        }
        A &&
          L &&
          T &&
          ($(".SeleccionDiaLista").text(A),
          $(".SeleccionMesLista").text(L),
          $(".SeleccionAñoLista").text(T)),
          $(document).ready(function () {
            var c = new Date();
            console.log(c.getUTCHours()),
              new o.default().showImageBanner(),
              (0, l.createClickThumbnails)();
            var v = JSON.parse(localStorage.getItem("favoritesCanalClaro")),
              p = JSON.parse(localStorage.getItem("favoritesConcertChannel")),
              m = JSON.parse(localStorage.getItem("favoritesClaroCinema")),
              g = $(".mi-lista-container");
            if (v || p || m) {
              if (null != v && 0 != v.length) {
                var u = "";
                v.forEach(function (e) {
                  0 == e.active
                    ? (u += '\n            <div class="list-item-container" >\n            <div class="poster">\n             <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                     <img src="./images/home/carrusel-ahora-en-vivo/'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-claro-rectangle">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.program_title,
                          '</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class="myList-details-container myList-details-mobile">\n                <div class="d-flex info-schedule justify-content-between no-gutters">\n      \n                    <div class="col-6">\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <button  class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="./images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                </div>\n                <div class="no-gutters d-flex  align-items-center justify-content-between">\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class="col-6 d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert">\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-tablet no-gutters">\n                <div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                </div>\n      \n                <div class="d-flex  align-items-end flex-column justify-content-between">\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                    <div class="d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert">\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-desktop">\n                <div class="d-flex justify-content-between">\n                    <div>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class="text-right mb-3">\n                            <button title="Eliminar de mi lista" class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="images/mi-lista/heart.svg">\n                            </button>\n                        </div>\n                        <div class="d-flex align-items-center justify-content-end">\n                            <p class="rating-alert">ALERTAS</p>\n                            <label class="switch-alert">\n                                <input type="checkbox" class="myList-alert" >\n                                <span class="slideralert roundalert"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class="schedule-description">\n                        '
                        )
                        .concat(
                          e.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            "
                        ))
                    : (u += '\n            <div class="list-item-container" >\n            <div class="poster">\n             <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                    <img src="./images/home/carrusel-ahora-en-vivo/'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-claro-rectangle">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.program_title,
                          '</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class="myList-details-container myList-details-mobile">\n                <div class="d-flex info-schedule justify-content-between no-gutters">\n      \n                    <div class="col-6">\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <button  class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="./images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                </div>\n                <div class="no-gutters d-flex  align-items-center justify-content-between">\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class="col-6 d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert" checked>\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-tablet no-gutters">\n                <div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                </div>\n      \n                <div class="d-flex  align-items-end flex-column justify-content-between">\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                    <div class="d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert" checked>\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-desktop">\n                <div class="d-flex justify-content-between">\n                    <div>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class="text-right mb-3">\n                            <button title="Eliminar de mi lista" class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="images/mi-lista/heart.svg">\n                            </button>\n                        </div>\n                        <div class="d-flex align-items-center justify-content-end">\n                            <p class="rating-alert">ALERTAS</p>\n                            <label class="switch-alert">\n                                <input type="checkbox" class="myList-alert" checked>\n                                <span class="slideralert roundalert"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class="schedule-description">\n                    '
                        )
                        .concat(
                          e.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            "
                        ));
                });
                var h = '\n        <div class="claro-list section-list-container">\n              <h1 class="claro-list-title list-title-section">Claro Canal</h1>\n                '.concat(
                  u,
                  "\n        </div>        \n        "
                );
                $("#claro-canal-favorites").append(h);
              }
              if (null != p && 0 != p.length) {
                var f = "";
                p.forEach(function (e) {
                  0 == e.active
                    ? (f += '\n            <div class="list-item-container" >\n            <div class="poster">\n              <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                    <img src="./images/concert-channel/carrousel/'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-concert-rectangle">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.program_title,
                          '</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class="myList-details-container myList-details-mobile">\n                <div class="d-flex info-schedule justify-content-between no-gutters">\n      \n                    <div class="col-6">\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                </div>\n                <div class="no-gutters d-flex  align-items-center justify-content-between">\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class="col-6 d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert">\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-tablet no-gutters">\n                <div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                </div>\n      \n                <div class="d-flex  align-items-end flex-column justify-content-between">\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                    <div class="d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert">\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-desktop">\n                <div class="d-flex justify-content-between">\n                    <div>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class="text-right mb-3">\n                            <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                            </button>\n                        </div>\n                        <div class="d-flex align-items-center justify-content-end">\n                            <p class="rating-alert">ALERTAS</p>\n                            <label class="switch-alert">\n                                <input type="checkbox" class="myList-alert">\n                                <span class="slideralert roundalert"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class="schedule-description">\n                    '
                        )
                        .concat(
                          e.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            "
                        ))
                    : (f += '\n            <div class="list-item-container" >\n            <div class="poster">\n             <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                    <img src="./images/concert-channel/carrousel/'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-concert-rectangle">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.program_title,
                          '</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class="myList-details-container myList-details-mobile">\n                <div class="d-flex info-schedule justify-content-between no-gutters">\n      \n                    <div class="col-6">\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                </div>\n                <div class="no-gutters d-flex  align-items-center justify-content-between">\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class="col-6 d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert" checked>\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-tablet no-gutters">\n                <div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                </div>\n      \n                <div class="d-flex  align-items-end flex-column justify-content-between">\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                    <div class="d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert" checked>\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-desktop">\n                <div class="d-flex justify-content-between">\n                    <div>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class="text-right mb-3">\n                            <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                            </button>\n                        </div>\n                        <div class="d-flex align-items-center justify-content-end">\n                            <p class="rating-alert">ALERTAS</p>\n                            <label class="switch-alert">\n                                <input type="checkbox" class="myList-alert" checked>\n                                <span class="slideralert roundalert"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class="schedule-description">\n                    '
                        )
                        .concat(
                          e.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            "
                        ));
                });
                var b = '\n      <div class="concert-list section-list-container">\n        <h1 class="concert-list-title list-title-section">Concert Channel</h1>\n        '.concat(
                  f,
                  "\n      </div>\n"
                );
                $("#concert-channel-favorites").append(b);
              }
              if (null != m && 0 != m.length) {
                var w = "";
                m.forEach(function (e) {
                  0 == e.active
                    ? (w += '\n            <div class="list-item-container">\n            <div class="poster">\n              <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                    <img src="./images/claro-cinema/carrousel/'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-cinema-rectangle">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.program_title,
                          '</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class="myList-details-container myList-details-mobile">\n                <div class="d-flex info-schedule justify-content-between no-gutters">\n      \n                    <div class="col-6">\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                </div>\n                <div class="no-gutters d-flex  align-items-center justify-content-between">\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class="col-6 d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert">\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-tablet no-gutters">\n                <div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                </div>\n      \n                <div class="d-flex align-items-end flex-column justify-content-between">\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                    <div class="d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert">\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-desktop">\n                <div class="d-flex justify-content-between">\n                    <div>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class="text-right mb-3">\n                            <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="./images/mi-lista/heart.svg">\n                            </button>\n                        </div>\n                        <div class="d-flex align-items-center justify-content-end">\n                            <p class="rating-alert">ALERTAS</p>\n                            <label class="switch-alert">\n                                <input type="checkbox" class="myList-alert">\n                                <span class="slideralert roundalert"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class="schedule-description">\n                    '
                        )
                        .concat(
                          e.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            "
                        ))
                    : (w += '\n            <div class="list-item-container">\n            <div class="poster">\n             <div class="thumbnail-body" _id="'
                        .concat(
                          e.chapter_id,
                          '">\n                <div class="thumbnail">\n                    <img src="./images/claro-cinema/carrousel/'
                        )
                        .concat(
                          e.image,
                          '" alt="">\n                </div>\n                <div class="a-cinema-rectangle">\n                    <div class="poster-title-margin">\n                        <p class="a-poster-text-white">'
                        )
                        .concat(
                          e.program_title,
                          '</p>\n                    </div>\n                </div>\n              </div>\n            </div>\n            <div class="myList-details-container myList-details-mobile">\n                <div class="d-flex info-schedule justify-content-between no-gutters">\n      \n                    <div class="col-6">\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '" type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                </div>\n                <div class="no-gutters d-flex  align-items-center justify-content-between">\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n      \n                    </div>\n                    <div class="col-6 d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert" checked>\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-tablet no-gutters">\n                <div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                </div>\n      \n                <div class="d-flex align-items-end flex-column justify-content-between">\n                    <div>\n                        <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="images/mi-lista/heart.svg">\n                        </button>\n                    </div>\n                    <div class="d-flex align-items-center justify-content-end">\n                        <p class="rating-alert">ALERTAS</p>\n                        <label class="switch-alert">\n                            <input type="checkbox" class="myList-alert" checked>\n                            <span class="slideralert roundalert"></span>\n                        </label>\n                    </div>\n      \n                </div>\n            </div>\n            <div class="myList-details-container myList-details-desktop">\n                <div class="d-flex justify-content-between">\n                    <div>\n                        <p class="rating">Clasificación: A</p>\n                    </div>\n                    <div>\n                        <p class="schedule-days">Lunes a Viernes</p>\n                        <p class="schedule">10:00 - 10:30</p>\n                    </div>\n                    <div>\n                        <div class="text-right mb-3">\n                            <button class="button-none remove-program" _id="'
                        )
                        .concat(
                          e.chapter_id,
                          '"  type="button"><img src="./images/mi-lista/heart.svg">\n                            </button>\n                        </div>\n                        <div class="d-flex align-items-center justify-content-end">\n                            <p class="rating-alert">ALERTAS</p>\n                            <label class="switch-alert">\n                                <input type="checkbox" class="myList-alert" checked>\n                                <span class="slideralert roundalert"></span>\n                            </label>\n                        </div>\n      \n                    </div>\n                </div>\n                <div>\n                    <p class="schedule-description">\n                    '
                        )
                        .concat(
                          e.sinopsis,
                          "\n                    </p>\n                </div>\n            </div>\n      \n        </div>\n            "
                        ));
                });
                var y = '\n        <div class="cinema-list section-list-container">\n          <h1 class="cinema-list-title list-title-section">Claro <span>Cinema</span></h1>\n            '.concat(
                  w,
                  "\n        </div>    \n  "
                );
                $("#claro-cinema-favorites").append(y);
              }
            } else '\n    <div class="text-center mt-4">\n      <img src="./images/mi-lista/favorites.svg" alt="" class="no-favorites-img">\n    </div>\n    <div class="no-gutters mt-4">\n      <div class="col-12">\n          <p class="a-text-warm-grey-bold mb-3 text-center no-favorites-title mb-xl-4">No tienes favoritos guardados todavía</p>\n          <p class="a-text-warm-grey-regular text-center no-favorites-subtitle">Explora y descubre más</p>\n      </div>\n    </div>\n\n        ', g.append('\n    <div class="text-center mt-4">\n      <img src="./images/mi-lista/favorites.svg" alt="" class="no-favorites-img">\n    </div>\n    <div class="no-gutters mt-4">\n      <div class="col-12">\n          <p class="a-text-warm-grey-bold mb-3 text-center no-favorites-title mb-xl-4">No tienes favoritos guardados todavía</p>\n          <p class="a-text-warm-grey-regular text-center no-favorites-subtitle">Explora y descubre más</p>\n      </div>\n    </div>\n\n        ');
            var x = $(".remove-program");
            x &&
              x.click(function (e) {
                var s = localStorage.getItem("id"),
                  n = $(this).attr("_id"),
                  t = $(this).closest(".list-item-container");
                (0, a.removeFavorites)(s, n, $(this), t);
              }),
              $(".myList-details-container").click(function (e) {
                if (e.target.classList.contains("myList-alert")) {
                  var s = $(this).find(".myList-alert").is(":checked"),
                    n = $(this).find(".button-none").attr("_id"),
                    t = localStorage.getItem("id");
                  (0, a.updateAlertProgram)(t, n, s);
                }
              }),
              $("#save-data-user").click(function () {
                var e,
                  s = $(".SeleccionDiaLista").text(),
                  n = $(".SeleccionMesLista").text(),
                  t = $(".SeleccionAñoLista").text() + "-" + n + "-" + s,
                  i = $("#hombre"),
                  r = $("#mujer");
                i.is(":checked") ? (e = "M") : r.is(":checked") && (e = "F");
                var l = parseInt(localStorage.getItem("id")),
                  c = $(".SeleccionPaisLista").text();
                (0, a.updateDataUser)(l, e, t, c);
              }),
              $("#avatar-button").click(function () {
                var e = localStorage.getItem("id"),
                  s = $(".active-navAvatar").children().attr("src"),
                  n = $(".active-navAvatar").children().attr("_id");
                (0, a.selectAvatar)(e, s, n);
              });
            var k = $("#alerts-off"),
              S = [
                $("#alert-minutes-before"),
                $("#alert-start"),
                $("#alert-email"),
                $("#alert-web"),
              ];
            k.click(function () {
              if (k.is(":checked")) {
                var e = S.length;
                for (Ue = 0; Ue < e; Ue++)
                  S[Ue].prop({ checked: !1, disabled: !0 });
              } else {
                var s = S.length;
                for (Ue = 0; Ue < s; Ue++) S[Ue].prop("disabled", !1);
              }
            }),
              $("#alert-button").click(function () {
                var e = $("#alerts-off:checked").val(),
                  s = $("#alert-minutes-before:checked").val(),
                  n = $("#alert-start:checked").val(),
                  t = $("#alert-email:checked").val(),
                  i = $("#alert-web:checked").val();
                e || (e = 0),
                  s || (s = 15),
                  n || (n = 0),
                  t || (t = 0),
                  i || (i = 0);
                var r = {
                  user_id: localStorage.getItem("id"),
                  desactivate: e,
                  minutes: s,
                  beginning: n,
                  email: t,
                  web: i,
                };
                (0, a.updateAlerts)(r);
              });
            var A = document.querySelectorAll(".icon-eye"),
              L = A.length;
            if (null !== A)
              for (var T = 0; T < L; T++)
                A[T].addEventListener("click", function () {
                  (0, t.ShowHidePassword)(this);
                });
            for (
              var j = document.getElementsByClassName("name_paises").length,
                E = document.getElementsByClassName("name_paises"),
                I = 0;
              I < j;
              I++
            )
              E[I].addEventListener("click", function () {
                (0, i.selectCountry)($(this));
              });
            if (
              ($(".signup-button").click(function () {
                var e = $(".caracteres-min"),
                  s = $(".nocorreo"),
                  n = $(".nouser"),
                  i = $("#usuario"),
                  r = $("#signup-correo"),
                  l = $("#signup-password"),
                  c = $("#modal-username");
                return (
                  !!(
                    (0, t.validateUser)(i, n) &&
                    (0, t.validateEmail)(r, s) &&
                    (0, t.validatePassword)(l, e)
                  ) && ((0, a.registerUser)(i, r, l), c.html(i.val()), !0)
                );
              }),
              $("#login-button").click(function () {
                var e = $(".input-email"),
                  s = $(".input-password"),
                  n = $("#error_email"),
                  i = $(".caracteres-min");
                if (
                  (0, t.validateEmail)(e, n) &&
                  (0, t.validatePassword)(s, i)
                ) {
                  var r = e.val(),
                    l = s.val();
                  return (0, a.signIn)(r, l), !0;
                }
                return !1;
              }),
              1 == localStorage.getItem("session"))
            ) {
              setTimeout(function () {
                (0, a.showNotification)();
              }, 2e3);
              var q = localStorage.getItem("idAvatar");
              if (q) {
                var R = $(".avatar-item").children();
                R.length;
                R.removeClass("active-navAvatar"),
                  R.each(function (e, s) {
                    var n = $(this)
                      .closest(".avatar-item")
                      .addClass("active-navAvatar");
                    n.removeClass("active-navAvatar"),
                      $(this).attr("_id") == q &&
                        n.addClass("active-navAvatar");
                  });
              }
              var V = localStorage.getItem("alertBeginning"),
                D = localStorage.getItem("alertWeb"),
                P = localStorage.getItem("alertEmail"),
                Y = localStorage.getItem("alertMinutes"),
                N = $("#alert-minutes-before"),
                U = $("#alert-start"),
                z = $("#alert-web"),
                B = $("#alert-email"),
                F = $("#alerts-off");
              0 == Y && 0 == V && 0 == D && 0 == !P
                ? F.prop("checked", !0)
                : (F.prop("checked", !1),
                  30 == Y ? N.prop("checked", !0) : N.prop("checked", !1),
                  1 == V ? U.prop("checked", !0) : U.prop("checked", !1),
                  1 == D ? z.prop("checked", !0) : z.prop("checked", !1),
                  1 == P ? B.prop("checked", !0) : B.prop("checked", !1));
              var O = $(".sidebar-content"),
                H = $(".user-options"),
                J = $(".sidebar-header"),
                Z = localStorage.getItem("name"),
                K = '<img src="'.concat(localStorage.getItem("avatar"), '" />'),
                W = '            \n      <div class="d-flex align-items-center">\n        <div class="image-user image-user-container mr-3">\n            '
                  .concat(
                    K,
                    '\n        </div>\n\n        <div class="d-flex flex-column justify-contet-between">\n            <p class="a-text-white-bold login-text">'
                  )
                  .concat(
                    Z,
                    '</p>\n            <div>\n                <a href="mi-lista.php"><img class="mr-3 options-item" src="./images/menu/mi-lista-icon.png" alt="" /></a>\n                <a href="configuracion.php"><img class="options-item" src="./images/menu/configuracion-icon.png" alt="" /></a>\n            </div>\n        </div>\n      </div>'
                  ),
                G = '\n      <div class="menu-ingreso">\n      <div class="icon-user position-relative mr-3">\n        <div class="tooltip-logout">\n          <div class="d-flex">\n            <img src="./images/menu/logout.svg" />\n            <p class="tooltip-text ml-3">Cerrar Sesión</p>\n          </div>\n        </div>\n        <div class="image-user-container">\n          <div class="image-user">\n          '
                  .concat(
                    K,
                    '\n          </div>\n        </div>\n      </div>\n\n      <p class="name-user mr-3">'
                  )
                  .concat(
                    Z,
                    '</p>\n      <a href="mi-lista.php"><img class="mr-3 options-item" src="./images/menu/mi-lista-icon.png" alt="" /></a>\n      <a href="configuracion.php"><img class="mr-3 options-item" src="./images/menu/configuracion-icon.png" alt="" /></a>\n      <a href="index.php" class="login-item options-item"><img class="login-country" src="" alt="" /></a>\n      </div>\n      '
                  );
              O.append(
                '                \n    <div class="sidebar-item sidebar-border-bottom" id="sidebar-logout">\n      <span class="dropdown-p" >Cerrar sesión</span>\n    </div>'
              ),
                J.html(W),
                H.html(G);
            } else {
              var X = $(".user-options"),
                Q = $(".sidebar-header");
              X.html(
                '    \n    <div class="login">\n      <a href="login.php" class="login-item mr-2"><img src="./images/home/user-login.svg" alt="" /></a>\n      <a href="index.php" class="login-item"><img class="login-country" src="" alt="" /></a>\n    </div>'
              ),
                Q.html(
                  '            \n    <div class="d-flex align-items-center">\n      <div class="image-user mr-3">\n          <a href="login.php"><img src="./images/menu/icon-white-user.svg" alt=""></a>\n      </div>\n\n      <div>\n          <p class="a-text-white-bold login-text">ingresar</p>\n      </div>\n    </div>'
                );
            }
            var ee = localStorage.getItem("src"),
              se = $(".login-country");
            $(".tooltip-logout").click(function () {
              (0, a.signOut)();
            }),
              $(".terms-conditions-button, .arrow-back").click(function () {
                window.history.back();
              }),
              se.attr("src", ee),
              $(".icon-user").hover(
                function () {
                  $(".tooltip-logout").css("display", "block");
                },
                function () {
                  $(".tooltip-logout").css("display", "none");
                }
              ),
              $(document).on("click", function (e) {
                var s = $(".icon-user"),
                  n = $(".tooltip-logout"),
                  t = $("#sidebar-logout");
                t &&
                  t.click(function () {
                    (0, a.signOut)();
                  }),
                  s.is(e.target) ||
                    0 !== s.has(e.target).length ||
                    n.css("display", "none");
              }),
              $(document).on("click", function (e) {
                var s = $("#drop-paises, .cuadro-fecha");
                s.is(e.target) ||
                  0 !== s.has(e.target).length ||
                  ($("#selectPais").prop("checked", !1),
                  $("#selectDay").prop("checked", !1),
                  $("#selectMonth").prop("checked", !1),
                  $("#selectYear").prop("checked", !1));
              });
            var ne = $("#login-password"),
              te = $(".caracteres-min"),
              ie = $(".listo");
            ne.keyup(function () {
              ne.val().length < 8 && ne.val().length >= 1
                ? (te.css("color", "red"), ie.css("display", "none"))
                : 0 == ne.val().length
                ? (te.css("color", "#666262"), ie.css("display", "none"))
                : (te.css("color", "green"), ie.css("display", "inline-block"));
            });
            var ae = $("#signup-password"),
              re = $(".caracteres-min"),
              le = $(".listo");
            ae.keyup(function () {
              ae.val().length < 8 && ae.val().length >= 1
                ? (re.css("color", "red"),
                  le.css("display", "inline-block"),
                  le.attr("src", "images/registro/alerta.svg"))
                : 0 == ae.val().length
                ? (re.css("color", "#666262"), le.css("display", "none"))
                : (re.css("color", "green"),
                  le.css("display", "inline-block"),
                  le.attr("src", "images/registro/listo.svg"));
            });
            var ce = $(".input-email");
            ce.keyup(function () {
              var e = $(".correo-valido"),
                s = $(".error");
              (0,
              t.validateKeyUpEmail)(ce, /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/, s, e);
            });
            var oe = $("#re-password-email"),
              de = $(".correo-valido");
            $("#reset-email").click(function () {
              return (
                !!(0, t.validateEmail)(oe, de) && ((0, a.sendUserEmail)(oe), !0)
              );
            });
            var ve = $("#new-password"),
              pe = $("#new-confirm-password");
            $("#send-password-button").click(function () {
              return (
                !!(0, t.validateNewPassword)(ve, pe) &&
                ((0, a.sendNewPassword)(ve, pe), !0)
              );
            });
            var me = $(document),
              ge = document.querySelector(".menu"),
              ue = document.querySelector(".navbar-white");
            $(".wrapper");
            (0, n.gradientMenu)(ge, me), (0, n.navbarWhite)(ue, me);
            new Rellax(".rellax");
            $("#selectYear").click(function () {
              $(this).is(":checked") &&
                ($("#selectPais").prop("checked", !1),
                $("#selectMonth").prop("checked", !1),
                $("#selectDay").prop("checked", !1));
            }),
              $("#selectPais").click(function () {
                $(this).is(":checked") &&
                  ($("#selectYear").prop("checked", !1),
                  $("#selectMonth").prop("checked", !1),
                  $("#selectDay").prop("checked", !1));
              }),
              $("#selectDay").click(function () {
                $(this).is(":checked") &&
                  ($("#selectPais").prop("checked", !1),
                  $("#selectMonth").prop("checked", !1),
                  $("#selectYear").prop("checked", !1));
              }),
              $("#selectMonth").click(function () {
                $(this).is(":checked") &&
                  ($("#selectPais").prop("checked", !1),
                  $("#selectYear").prop("checked", !1),
                  $("#selectDay").prop("checked", !1));
              }),
              _(),
              (0, d.getMetaKeys)();
            $(".section-slider")
              .not(".slick-initialized")
              .slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: !0,
                dots: !0,
                centerMode: !1,
                arrows: !0,
                prevArrow:
                  '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                nextArrow:
                  '<img src="../images/sliders/next.png" class="arrow-next" />',
                responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: !1,
                      autoplaySpeed: 2e3,
                      centerMode: !1,
                      infinite: !0,
                      arrows: !1,
                      dots: !0,
                    },
                  },
                  {
                    breakpoint: 992,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !0,
                      arrows: !1,
                    },
                  },
                  {
                    breakpoint: 1200,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                    },
                  },
                  {
                    breakpoint: 1900,
                    settings: {
                      slidesToShow: 4,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                    },
                  },
                ],
              }),
              $(".vision-slider").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: !0,
                dots: !0,
                centerMode: !1,
                arrows: !0,
                prevArrow:
                  '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                nextArrow:
                  '<img src="../images/sliders/next.png" class="arrow-next" />',
                responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: !1,
                      autoplaySpeed: 2e3,
                      centerMode: !1,
                      infinite: !0,
                      arrows: !1,
                      dots: !0,
                    },
                  },
                  {
                    breakpoint: 992,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !0,
                      arrows: !1,
                    },
                  },
                  {
                    breakpoint: 1200,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                    },
                  },
                  {
                    breakpoint: 1900,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                    },
                  },
                ],
              }),
              $(".imperdibles-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: !1,
                autoplaySpeed: 2e3,
                centerMode: !1,
                infinite: !0,
                arrows: !1,
                dots: !0,
              }),
              $(".claro-header-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !1,
                dots: !0,
                centerMode: !1,
                arrows: !1,
              }),
              $(".tv-slider").slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: !0,
                dots: !0,
                centerMode: !1,
                arrows: !0,
                prevArrow:
                  '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                nextArrow:
                  '<img src="../images/sliders/next.png" class="arrow-next" />',
                responsive: [
                  {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: !1,
                      autoplaySpeed: 2e3,
                      centerMode: !0,
                      infinite: !0,
                      arrows: !1,
                      dots: !0,
                    },
                  },
                  {
                    breakpoint: 992,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !1,
                    },
                  },
                  {
                    breakpoint: 1200,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                    },
                  },
                  {
                    breakpoint: 1900,
                    settings: {
                      slidesToShow: 4,
                      slidesToScroll: 1,
                      infinite: !0,
                      dots: !0,
                      centerMode: !1,
                      arrows: !0,
                      prevArrow:
                        '<img src="../images/sliders/prev.png" class="arrow-prev" />',
                      nextArrow:
                        '<img src="../images/sliders/next.png" class="arrow-next" />',
                    },
                  },
                ],
              });
            var he = $("#claro-canal-programing"),
              fe = new o.default();
            fe.createDaysSlider("claro", he, $("#claro-canal-programing-edit"));
            var be = $("#concert-channel-programing");
            fe.createDaysSlider(
              "concert",
              be,
              $("#concert-channel-programing-edit")
            );
            var we = $("#claro-cinema-programing");
            fe.createDaysSlider(
              "cinema",
              we,
              $("#claro-cinema-programing-edit")
            ),
              C();
            var ye = new Date(),
              $e = ye.getDate(),
              xe = ye.getMonth() + 1,
              ke = ye.getFullYear(),
              Se = ye.getHours(),
              Ae = ye.getMinutes();
            ye.getSeconds();
            $e < 10 && ($e = "0" + ye.getDate()),
              xe < 10 && (xe = "0" + (ye.getMonth() + 1));
            var Le = "".concat(ke, "-").concat(xe, "-").concat($e);
            "".concat(Se, ":").concat(Ae);
            (0, l.getPrograms)(Le, (0, r.getNameCountry)(ee));
            var Te = document.querySelector(".invisible-button"),
              _e = document.querySelector(".tache_button"),
              Ce = document.querySelector(".menu-responsive"),
              je = document.querySelector(".categorias-flecha"),
              Me = document.querySelector(".hamburguer-menu"),
              Ee = $(".categorias-menu"),
              Ie = $("body"),
              qe = $("html"),
              Re = document.querySelector(".sidebar-content");
            $(".menu-responsive-tablet").click(function () {
              (Me.style.transform = "translate(0%)"),
                (Te.style.width = "2000px"),
                (Te.style.left = "100%"),
                (Te.style.background = "black"),
                qe.css({
                  position: "relative",
                  overflow: "hidden",
                  height: "100%",
                }),
                Ie.css({
                  position: "fixed",
                  overflow: "hidden",
                  height: "100%",
                  width: "100%",
                }),
                (Re.style.overflow = "auto"),
                (Re.style.height = "100%");
            }),
              Ce &&
                Ce.addEventListener("click", function (e) {
                  (Me.style.transform = "translate(0%)"),
                    (Te.style.width = "2000px"),
                    (Te.style.left = "100%"),
                    (Te.style.background = "black"),
                    qe.css({
                      position: "relative",
                      overflow: "hidden",
                      height: "100%",
                    }),
                    Ie.css({
                      position: "fixed",
                      overflow: "hidden",
                      height: "100%",
                      width: "100%",
                    }),
                    (Re.style.overflowY = "scroll"),
                    (Re.style.height = "70%");
                }),
              Te &&
                Te.addEventListener("click", function () {
                  (Me.style.transform = "translate(-100%)"),
                    (Te.style.width = "0px"),
                    (Te.style.left = "0%"),
                    (Te.style.background = "black"),
                    qe.css({
                      position: "static",
                      overflow: "visible",
                      height: "100%",
                    }),
                    Ie.css({
                      position: "static",
                      overflow: "visible",
                      height: "100%",
                      width: "auto",
                    }),
                    (Re.style.overflowY = "hidden"),
                    (Re.style.height = "0%");
                }),
              je &&
                (je.addEventListener("click", function (e) {
                  Ee.css({ zIndex: "10", opacity: "1" }),
                    qe.css({
                      position: "relative",
                      overflow: "hidden",
                      height: "100%",
                    }),
                    Ie.css({
                      position: "fixed",
                      overflow: "hidden",
                      height: "100%",
                      width: "100%",
                    }),
                    (Re.style.overflow = "auto"),
                    (Re.style.height = "100%");
                }),
                _e.addEventListener("click", function () {
                  Ee.css({ zIndex: "-1", opacity: "0" }),
                    qe.css({
                      position: "initial",
                      overflow: "auto",
                      height: "auto",
                    }),
                    Ie.css({
                      position: "initial",
                      overflowX: "hidden",
                      overflowY: "auto",
                      "-webkit-overflow-scrolling": "auto",
                      height: "auto",
                      width: "auto",
                    }),
                    (Re.style.overflow = "hidden"),
                    (Re.style.height = "0%");
                }));
            document.querySelector(".circle-video");
            $("body").index(ge);
            var Ve = $("#tv-claro-slider");
            s = $("#tv-concert-slider");
            var De = $("#tv-cinema-slider"),
              Pe = $("#tv-vision-slider"),
              Ye = $("#tv-sports-slider"),
              Ne =
                ($(".programacion-slider"),
                $("#pro-claro-slider"),
                $(".tv-slider"));
            $(".tv-content").hide(),
              $(".tv-content:first").show(),
              $("ul.tv-list li").click(function () {
                $("ul.tv-list li").removeClass("active-navItem"),
                  $(this).addClass("active-navItem"),
                  $(".tv-content").hide();
                var s = $(this).attr("rel");
                $("#" + s).fadeIn(),
                  Ne.slick("refresh"),
                  e.slick("refresh"),
                  (0, a.addFavorites)(),
                  M(),
                  (0, l.createClickThumbnails)();
              }),
              $("ul.lista-avatar li").click(function () {
                $("ul.lista-avatar li").removeClass("active-navAvatar"),
                  $(this).addClass("active-navAvatar"),
                  $(".tv-content").hide();
                var n = $(this).attr("rel");
                $("#" + n).fadeIn(),
                  "concert-channel" == n
                    ? s.slick("refresh")
                    : "claro-canal" == n
                    ? Ve.slick("refresh")
                    : "claro-cinema" == n
                    ? De.slick("refresh")
                    : "nuestra-vision" == n
                    ? Pe.slick("refresh")
                    : "claro-sports" == n && Ye.slick("refresh"),
                  e.slick("refresh"),
                  M();
              }),
              $(".pro-content").hide(),
              $(".pro-content:first").show(),
              $("ul.pro-list li").on("click", function () {
                $("ul.pro-list li").removeClass("active-proItem"),
                  $(this).addClass("active-proItem"),
                  $(".pro-content").hide();
                var e = $(this).attr("rel");
                $("#" + e).fadeIn();
              });
            document.querySelectorAll("#claro-canal .slick-slide"),
              document.querySelectorAll(".a-poster-text-white");
            var Ue,
              ze = document.getElementsByClassName("dropdownCountry-content"),
              Be = document.getElementsByClassName("dropdownCountry-content")
                .length;
            for (Ue = 0; Ue < Be; Ue++)
              ze[Ue].addEventListener("click", function () {
                var e = this.nextElementSibling,
                  s = $(this).children(".dropdownCountry-icon");
                "block" === e.style.display
                  ? ((e.style.display = "none"),
                    s.css("transform", "rotate(0deg)"))
                  : ((e.style.display = "block"),
                    s.css("transform", "rotate(-180deg)"));
              });
            M();
          }),
          $(".programing-item").click(function () {
            var e = $(this).attr("rel"),
              s = e.length,
              n = e.charAt(s - 1);
            $(".month").text("".concat((0, c.getMonthAndYear)(n)));
          }),
          (window.onresize = function () {
            clearTimeout(S), (S = setTimeout(E, 100));
          }),
          $(".program-image-slider").slick({
            slidesToShow: 1,
            dots: !0,
            appendDots: $(".programming-slider-dots"),
            initialSlide: 0,
            infinite: !1,
            arrows: !1,
            customPaging: function (e, s) {
              $(e.$slides[s]).data();
              return (
                " <p class='a-text-bold-tealblue slider-pagination-item pag '> " +
                (s + 1) +
                "</p> "
              );
            },
          });
        var I = $(".pag");
        $(".pag").click(function () {
          I.removeClass("selteal"), $(this).addClass("selteal");
        });
        var q = 4;
        $(".slider-pagination-add").click(function () {
          q++,
            $(".program-image-slider").slick(
              "slickAdd",
              '\n  <div class="bor thumbnail-image-program position-relative h-100 mx-auto" style="width:100%;">\n  <label for="image_logo'.concat(
                q,
                '" class="h-100 mb-0 d-flex justify-content-center align-items-center flex-column">\n  <img src="./images/General/image-synopsis-carrusel.jpg" class="w-100 h-100 cursor-pointer image-cover prev-image-program thumbnail-image-program" />\n  </label>\n</div>\n\n  '
              )
            );
        });
      },
      {
        "./scroll/scroll.js": "tyVZ",
        "./form/form.js": "zpZz",
        "./session/session.js": "rgOU",
        "./services/user/user.js": "zXmF",
        "./country/country.js": "pgM4",
        "./services/Program.js": "tbj9",
        "./date/date.js": "HUQt",
        "./UI/Slider.js": "x0dL",
        "./services/Section.js": "PJIa",
        "./UI/Navbar.js": "jfQw",
      },
    ],
  },
  {},
  ["epB2"],
  null
);
//# sourceMappingURL=/main.js.map
