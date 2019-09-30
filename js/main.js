$(document).ready(function () {
  $(".ubicacion4").click(function () {
    var tipo = document.getElementById("password");
    if (tipo.type == "password") {
      tipo.type = "text";
    } else {
      tipo.type = "password";
    }
  });

  $(".singup-button").click(function () {
    var usuario, correo, password, expresion;
    const nodatos1 = $(".nodatos");
    const nocorreo1 = $(".nocorreo");

    usuario = document.getElementById("usuario").value;
    correo = document.getElementById("correo").value;
    password = document.getElementById("password").value;
    expresion = /\w+@\w+\.+[a-z]/;


    if (usuario === "" && correo === "" && password === "") {
      nodatos1.css("display", "block");
      return false;
    } else if (usuario != "" && correo != "" && password != "") {
      nodatos1.css("display", "none");

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

  $(".login-button").click(function () {
    var correo1, password1, expresion1;
    const nodatos = $(".nodatos");
    const nocorreo = $(".nocorreo");
    const borde = $("#correo1");
    correo1 = document.getElementById("correo1").value;
    password1 = document.getElementById("password1").value;
    expresion1 = /\w+@\w+\.+[a-z]/;

    if (correo1 === "" && password1 === "") {
      nodatos.css("display", "block");
      return false;
    } else if (correo1 != "" && password1 != "") {
      nodatos.css("display", "none");

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
  const inputPassword = $("#password");
  const caracteresMin = $(".caracteres-min");
  const listo = $(".listo");
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

    /*login*/
  });
  const inputPassword1 = $("#password1");
  const caracteresMin1 = $(".caracteres-min");
  const listo1 = $(".listo");
  inputPassword1.keyup(function () {
    if (inputPassword1.val().length < 8 && inputPassword1.val().length >= 1) {
      caracteresMin1.css("color", "red");
      listo1.css("display", "none");
    } else if (inputPassword1.val().length == 0) {
      caracteresMin1.css("color", "#666262");
      listo1.css("display", "none");
    } else {
      caracteresMin1.css("color", "green");
      listo1.css("display", "inline-block");
    }
  });



  function validaUsuario(warning, usuario) {
    if (usuario.value.length == 0) {
      let message = "Aún no se han ingresado datos";
      warning.innerHTML = message;
      return false;
    }
  }

  /* FUNCION DEGRADADO - SOLIDO SCROLLBAR*/
  $(document).on("scroll ontouchmove ontouchstart ontouchend", function () {
    var posicionScroll = $(document).scrollTop();
    if (posicionScroll <= 0) {
      navbar.style.background =
        "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
      navbar.style.position = "absolute";
    } else if (posicionScroll > 0 && posicionScroll <= 100) {
      navbar.style.background =
        "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
      navbar.style.position = "fixed";
    } else if (posicionScroll >= 101) {
      navbar.style.background = "black";
      navbar.style.position = "fixed";
    }
  });

  var slick_slider = $(".slick-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    centerMode: false,
    arrows: false,
    responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          centerMode: true,
          infinite: false,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 2000,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false
        }
      }
    ]
  });

  var header_slider = $(".concert-header-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    dots: true,
    centerMode: false,
    arrows: false
  });

  var tv_slider = $(".tv-slider").slick({
    /*slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: true,
    infinite: false,
    arrows: false,
    dots: true,*/
    responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          centerMode: true,
          infinite: false,
          arrows: false,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false
        }
      },
      {
        breakpoint: 2000,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
          centerMode: false,
          arrows: false
        }
      }
    ]
  });

  /*menu responsive*/
  const invisible_button = document.querySelector(".invisible-button");
  const menu = document.querySelector(".menu-responsive");
  const hamburguer = document.querySelector(".hamburguer-menu");
  const body = $("body");
  const html = $("html");
  const sidebar_content = document.querySelector(".sidebar-content");
  const menuTablet = $(".menu-tablet");
  $(window).resize(function () {
    console.log(menu);
  });

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
    sidebar_content.style.overflow = "auto";
    sidebar_content.style.height = "100%";
  });

  invisible_button.addEventListener("click", function () {
    hamburguer.style.transform = "translate(-100%)";
    invisible_button.style.width = "0px";
    invisible_button.style.left = "0%";
    invisible_button.style.background = "black";
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

  const navbar = document.querySelector(".menu");
  const video_home = document.querySelector(".circle-video");
  console.log(video_home);

  $("body").index(navbar);

  /***  Slider "Ahora en TV"  ****/
  const tvClaroSlider = $("#tv-claro-slider");
  const tvConcertSlider = $("#tv-concert-slider");
  const tvCinemaSlider = $("#tv-cinema-slider");
  const tvVisionSlider = $("#tv-vision-slider");
  const tvSportsSlider = $("#tv-sports-slider");

  $(".tv-content").hide();
  $(".tv-content:first").show();

  $("ul.tv-list li").click(function () {
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
  });

  var myTag = document.querySelectorAll(".a-poster-text-white");

  /*** Fin Slider "Ahora en TV"  ***/

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

  /*inputs.keyup(function(){
    if(validaUsuario(input-usuario) && validaPassword(input-password) && validaEmail(input-email)){
        flecha.css("display", "block");
    }
  });

  signup-botton.click(function(){

    if(!validaUsuario()){
      modal.html("oihgiohiohoihoih");
    }else if(!validaPassword()){

    }

  });

  function validaUsuario(inputUsuario) {
    if (usuario.length > 10) {
      return true;
    } else {
      return false;
    }
  }

  function validaPassword() {
    if (true) {
      return true;
    } else {
      return false;
    }
  }

  function validaEmail() {
    if (true) {
      return true;
    } else {
      return false;
    }
  }*/
});