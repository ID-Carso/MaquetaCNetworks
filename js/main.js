$(document).ready(function() {
  var home_slider = $(".home-slider").bxSlider({
    controls: false,
    captions: true
  });

  var slick_slider = $(".slick-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: true,
    infinite: false,
    arrows: false,
    dots: true
  });

  $(".prueba-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: false,
    infinite: false,
    arrows: false,
    dots: true
  });

  /*menu responsive*/
  const invisible_button = document.querySelector(".invisible-button");
  const menu = document.querySelector(".menu-responsive");
  const hamburguer = document.querySelector(".hamburguer-menu");
  const body = $("body");
  const sidebar_content = document.querySelector(".sidebar-content");
  menu.addEventListener("click", function(e) {
    hamburguer.style.transform = "translate(0%)";
    invisible_button.style.width = "2000px";
    invisible_button.style.left = "100%";
    invisible_button.style.background = "black";
    body.css({
      "overflow-y": "hidden",
      "-webkit-overflow-scrolling": "hidden"
    });
    sidebar_content.style.overflow = "auto";
    sidebar_content.style.height = "100%";
  });

  invisible_button.addEventListener("click", function() {
    hamburguer.style.transform = "translate(-100%)";
    invisible_button.style.width = "0px";
    invisible_button.style.left = "0%";
    invisible_button.style.background = "black";
    body.css({
      "overflow-y": "auto",
      "-webkit-overflow-scrolling": "auto"
    });
    sidebar_content.style.overflow = "hidden";
    sidebar_content.style.height = "0%";
  });

  const navbar = document.querySelector(".menu");
  const video_home = document.querySelector(".circulo");
  console.log(video_home);

  if (window.matchMedia("(max-width: 767px)").matches) {
    /*Base*/

    /*Atoms*/
    video_home.style.display = "none";

    /*End Atoms */

    /* Molecules */
    window.addEventListener("scroll", function() {
      var top = this.scrollY;
      var left = this.scrollX;
      if (top > 5) {
        navbar.style.background = "black";
      } else {
        navbar.style.background =
          "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
      }
    });

    /*Organismos */
  } else if (
    window.matchMedia("(min-width: 768px) and (max-width: 1023px)").matches
  ) {
    /*Atoms*/
    const logo = document.querySelector(".logo");
    const menu_responsive = document.querySelector(".menu-responsive");

    logo.setAttribute("src", "./images/home/claro-networks-black.svg");

    menu_responsive.setAttribute(
      "src",
      "./images/home/menu-responsive-black.svg"
    );

    /*End Atoms */

    /* Molecules */
  }

  /***  Slider "Ahora en TV"  ****/
  const tvClaroSlider = $("#tv-claro-slider");
  const tvConcertSlider = $("#tv-concert-slider");
  const tvCinemaSlider = $("#tv-cinema-slider");
  const tvVisionSlider = $("#tv-vision-slider");
  const tvSportsSlider = $("#tv-sports-slider");
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
  });

  /*** Fin Slider "Ahora en TV"  ***/

  /*** Dropdwon del menú ***/
  const dropdown = document.getElementsByClassName("sidebar-dropdown");
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
  }
});
