$(document).ready(function() {
  var home_slider = $(".home-slider").bxSlider({
    controls: false
  });

  /*menu responsive*/
  const invisible_button = document.querySelector(".invisible-button");
  const menu = document.querySelector(".menu-responsive");
  const hamburguer = document.querySelector(".hamburguer-menu");
  const body = document.querySelector("body");
  const sidebar_content = document.querySelector(".sidebar-content");
  menu.addEventListener("click", function(e) {
    hamburguer.style.transform = "translate(0%)";
    invisible_button.style.width = "500px";
    invisible_button.style.left = "100%";
    body.style.overflowY = "hidden";
    sidebar_content.style.overflow = "auto";
    sidebar_content.style.height = "100%";
  });

  invisible_button.addEventListener("click", function() {
    hamburguer.style.transform = "translate(-100%)";
    invisible_button.style.width = "0px";
    invisible_button.style.left = "0%";
    body.style.overflow = "auto";
    sidebar_content.style.overflow = "hidden";
    sidebar_content.style.height = "0%";
  });

  const navbar = document.querySelector(".menu");

  window.addEventListener("scroll", function() {
    var top = this.scrollY;
    var left = this.scrollX;
    if (top > 1) {
      navbar.style.background = "black";
    } else {
      navbar.style.background =
        "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
    }
  });

  /***  Slider "Ahora en TV"  ****/
  $(".tv-content").hide();
  $(".tv-content:first").show();

  $("ul.tv-list li").click(function() {
    $("ul.tv-list li").removeClass("active-navItem");
    $(this).addClass("active-navItem");
    $(".tv-content").hide();
    var activeNav = $(this).attr("rel");
    $("#" + activeNav).fadeIn();

    if (activeNav == "claro-canal") {
      home_slider.reloadSlider();
    }
  });

  /*** Fin Slider "Ahora en TV"  ***/

  lockOrientation =
    screen.lockOrientation ||
    screen.mozLockOrientation ||
    screen.msLockOrientation ||
    screen.orientation.lock;
  lockOrientation("landscape");
});
