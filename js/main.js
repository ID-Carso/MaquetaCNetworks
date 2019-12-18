import { gradientMenu } from "./scroll/scroll.js";
import { ShowHidePassword } from "./form/form.js";
import { selectCountry } from "./session/session.js";
var programacion_slider;
var tvConcertSlider;
$(document).ready(function() {
  /*Mostrar u ocultar password de registro o login */
  const iconPassword = document.querySelector(".ubicacion4");
  if (iconPassword !== null) {
    iconPassword.addEventListener("click", function() {
      ShowHidePassword(this);
    });
  }

  /*End función Mostrar u ocultar password de registro o login */

  /*Función elegir un país y mostrar la bandera en navbar */
  const numPaises = document.getElementsByClassName("name_paises").length;
  const paises = document.getElementsByClassName("name_paises");
  for (let contador = 0; contador < numPaises; contador++) {
    paises[contador].addEventListener("click", function() {
      selectCountry($(this));
    });
  }

  var sessionSrc = sessionStorage.getItem("src");
  var loginCountry = $(".login-country");
  if (sessionSrc) {
    loginCountry.attr("src", sessionSrc);
  }
  /*End función elegir un país y mostrar la bandera en navbar */

  $(".signup-button").click(function() {
    var usuario, correo, password, expresion;
    const nodatos1 = $(".nodatos");
    const nocorreo1 = $(".nocorreo");

    usuario = document.getElementById("usuario").value;
    correo = document.getElementById("signup-correo").value;

    password = document.getElementById("signup-password").value;
    expresion = /\w+@\w+\.+[a-z]/;

    if (usuario === "" && correo === "" && password === "") {
      nodatos1.css("display", "block");
      return false;
    } else if (!expresion.test(correo)) {
      nocorreo1.css("display", "block");
      return false;
    } else if (expresion.test(correo)) {
      nocorreo1.css("display", "none");
    } else if (password.length < 8) {
      alert("el campo esta vacio");
      return false;
    }
  });

  $(".login-button").click(function() {
    var correo1, password1, expresion1;
    const nodatos = $(".nodatos");
    const nocorreo = $(".nocorreo");
    const borde = $("#correo1");
    correo1 = document.getElementById("login-email").value;
    password1 = document.getElementById("login-password").value;
    expresion1 = /\w+@\w+\.+[a-z]/;

    if (correo1 === "" && password1 === "") {
      nodatos.css("display", "block");
      return false;
    } else if (!expresion1.test(correo1)) {
      nocorreo.css("display", "block");
      borde.css("border-bottom", "solid 2px #ff0007");
      return false;
    } else if (expresion1.test(correo1)) {
      nocorreo.css("display", "none");
      borde.css("border-bottom", "solid 1px #a1a0a0");
    } else if (password1.length < 8) {
      alert("el campo esta vacio");
      return false;
    }
  });
  const inputPassword = $("#login-password");
  const caracteresMin = $(".caracteres-min");
  const listo = $(".listo");
  inputPassword.keyup(function() {
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
  const inputPassword1 = $("#signup-password");
  const caracteresMin1 = $(".caracteres-min");
  const listo1 = $(".listo");
  inputPassword1.keyup(function() {
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
  const inputCorreo = $("#login-email");

  inputCorreo.keyup(function() {
    const CorreoValido = $(".correo-valido");
    const ImagenError = $(".error");
    var email = $("#login-email").val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email)) {
      CorreoValido.css("color", "red");
      ImagenError.css("display", "inline-block");
      ImagenError.attr("src", "images/registro/alerta.svg");
    } else if (filter.test(email)) {
      CorreoValido.css("color", "green");
      ImagenError.css("display", "inline-block");
      ImagenError.attr("src", "images/registro/listo.svg");
    } else if (inputCorreo.val().length == 0) {
      ImagenError.css("display", "none");
      CorreoValido.css("color", "#666262");
    }
  });

  /* FUNCION DEGRADADO - SOLIDO SCROLLBAR*/

  const documentHtml = $(document);
  const navbar = document.querySelector(".menu");
  const parallaxWrapper = $(".wrapper");
  gradientMenu(navbar, documentHtml);

  /* END FUNCION DEGRADADO - SOLIDO SCROLLBAR*/

  var rellax = new Rellax(".rellax");

  var section_slider = $(".section-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',

    responsive: [
      {
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
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: true,
          arrows: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      },

      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      }
    ]
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

    responsive: [
      {
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
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: true,
          arrows: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      },

      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      }
    ]
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

  var sport_slider = $(".sports-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    centerMode: false,
    arrows: true,
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-next" />',

    responsive: [
      {
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
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: true,
          arrows: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      },

      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      }
    ]
  });

  var header_slider = $(".header-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    centerMode: false,
    arrows: false
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
    prevArrow: '<img src="../images/sliders/prev.png" class="arrow-tv-prev" />',
    nextArrow: '<img src="../images/sliders/next.png" class="arrow-tv-next" />',
    responsive: [
      {
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
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-tv-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-tv-next" />'
        }
      },
      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-tv-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-tv-next" />'
        }
      }
    ]
  });

  createProgramacionSlider();

  /*menu responsive*/
  const invisible_button = document.querySelector(".invisible-button");
  const tache_button = document.querySelector(".tache_button");
  const menu = document.querySelector(".menu-responsive");
  const menu_categorias = document.querySelector(".categorias-flecha");
  const hamburguer = document.querySelector(".hamburguer-menu");
  const categorias = $(".categorias-menu");
  const body = $("body");
  const html = $("html");
  const sidebar_content = document.querySelector(".sidebar-content");
  const menuTablet = $(".menu-responsive-tablet");

  menuTablet.click(function() {
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
    menu.addEventListener("click", function(e) {
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
  }

  if (invisible_button) {
    invisible_button.addEventListener("click", function() {
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
      sidebar_content.style.overflow = "hidden";
      sidebar_content.style.height = "0%";
    });
  }
  if (menu_categorias) {
    menu_categorias.addEventListener("click", function(e) {
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

    tache_button.addEventListener("click", function() {
      categorias.css({
        zIndex: "-1",
        opacity: "0"
      });
      html.css({
        position: "initial",
        overflow: "auto",
        height: "100%"
      });
      body.css({
        position: "initial",
        overflowX: "hidden",
        overflowY: "auto",
        "-webkit-overflow-scrolling": "auto",
        height: "100%",
        width: "auto"
      });
      sidebar_content.style.overflow = "hidden";
      sidebar_content.style.height = "0%";
    });
  }

  const video_home = document.querySelector(".circle-video");

  $("body").index(navbar);

  /***  Slider "Ahora en TV"  ****/
  const tvClaroSlider = $("#tv-claro-slider");
  tvConcertSlider = $("#tv-concert-slider");
  const tvCinemaSlider = $("#tv-cinema-slider");
  const tvVisionSlider = $("#tv-vision-slider");
  const tvSportsSlider = $("#tv-sports-slider");
  const programacionSlider = $(".programacion-slider");
  const proClaroSlider = $("#pro-claro-slider");

  $(".tv-content").hide();
  $(".tv-content:first").show();

  $("ul.tv-list li").click(function() {
    $("ul.tv-list li").removeClass("active-navItem");
    $(this).addClass("active-navItem");
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

  $("ul.lista-avatar li").click(function() {
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

  $("ul.pro-list li").on("click", function() {
    $("ul.pro-list li").removeClass("active-proItem");
    $(this).addClass("active-proItem");
    $(".pro-content").hide();

    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    if (activeNav == "pro-concert-channel") {
    } else if (activeNav == "pro-claro-canal") {
    } else if (activeNav == "pro-claro-cinema") {
    } else if (activeNav == "pro-nuestra-vision") {
    } else if (activeNav == "pro-claro-sports") {
    }
  });

  var slides = document.querySelectorAll("#claro-canal .slick-slide");
  var myTag = document.querySelectorAll(".a-poster-text-white");

  /*** Fin Slider "Ahora en TV"  ***/

  /*Dropdown de la página sinópsis.php */

  const dropdownCountry = document.getElementsByClassName(
    "dropdownCountry-content"
  );

  var numCountries = document.getElementsByClassName("dropdownCountry-content")
    .length;
  var i;
  for (i = 0; i < numCountries; i++) {
    dropdownCountry[i].addEventListener("click", function() {
      var dropdownContent = this.nextElementSibling;
      //dropdownContent.classList.toggle("dropdown-active");
      var currentArrow = $(this).children(".dropdownCountry-icon");

      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        currentArrow.css("transform", "rotate(0deg)");
      } else {
        dropdownContent.style.display = "block";
        //dropdownContent.style.animation = "down 0.5s";
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

function createProgramacionSlider() {
  programacion_slider = $(".programacion-slider").slick({
    /**/
    responsive: [
      {
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
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 8,
          slidesToScroll: 8,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 11,
          slidesToScroll: 11,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      },
      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 11,
          slidesToScroll: 11,
          infinite: true,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      },
      {
        breakpoint: 10000,
        settings: {
          slidesToShow: 17,
          slidesToScroll: 17,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: true,
          prevArrow:
            '<img src="../images/sliders/prev.png" class="arrow-prev" />',
          nextArrow:
            '<img src="../images/sliders/next.png" class="arrow-next" />'
        }
      }
    ]
  });
}

function recreateClickCalendar() {
  $("ul.claro-calendar .claro-item").click(function() {
    $("ul.claro-calendar .claro-item").removeClass("claro-active");
    $(this).addClass("claro-active");
    $(".claro-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
  });
  $(".claro-content").hide();
  $(".claro-content:first").show();
  $(".concert-content").hide();
  $(".concert-content:first").show();

  $("ul.concert-calendar .concert-item").click(function() {
    $("ul.concert-calendar .concert-item").removeClass("concert-active");
    $(this).addClass("concert-active");
    $(".concert-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
  });

  $(".cinema-content").hide();
  $(".cinema-content:first").show();

  $("ul.cinema-calendar .cinema-item").click(function() {
    $("ul.cinema-calendar .cinema-item").removeClass("cinema-active");
    $(this).addClass("cinema-active");
    $(".cinema-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
  });

  $(".vision-content").hide();
  $(".vision-content:first").show();

  $("ul.vision-calendar .vision-item").click(function() {
    $("ul.vision-calendar .vision-item").removeClass("vision-active");
    $(this).addClass("vision-active");
    $(".vision-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
  });

  $(".sports-content").hide();
  $(".sports-content:first").show();

  $("ul.sports-calendar .sports-item").click(function() {
    $("ul.sports-calendar .sports-item").removeClass("sports-active");
    $(this).addClass("sports-active");
    $(".sports-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();
  });
}

function resizedw() {
  $(".programacion-slider#pro-claro-slider").slick("refresh");
  $(".programacion-slider#pro-concert-slider").slick("refresh");
  $(".programacion-slider#pro-cinema-slider").slick("refresh");
  $(".programacion-slider#pro-vision-slider").slick("refresh");
  $(".programacion-slider#pro-sports-slider").slick("refresh");
  recreateClickCalendar();
}

var doit;
window.onresize = function() {
  clearTimeout(doit);
  doit = setTimeout(resizedw, 100);
};
