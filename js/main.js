$(document).ready(function() {
  $(".home-slider").bxSlider({
    controls: false
  });

  //menu responsive
  const invisible_button = document.querySelector(".invisible-button");
  const menu = document.querySelector(".menu-responsive");
  console.log(menu);
  const hamburguer = document.querySelector(".hamburguer-menu");
  console.log(hamburguer);
  menu.addEventListener("click", function(e) {
    hamburguer.style.transform = "translate(0%)";
    invisible_button.style.width = "500px";
  });

  invisible_button.addEventListener("click", function() {
    hamburguer.style.transform = "translate(-100%)";
    invisible_button.style.width = "0px";
    invisible_button.style.left = "100%";
  });

  //Hola :)

  const navbar = document.querySelector(".menu");
  console.log(navbar);
  //var nav_offset = navbar.offset();
  const body = document.querySelector("body");
  window.addEventListener("scroll", function() {
    var top = this.scrollY;
    var left = this.scrollX;
    console.log(top);
    if (top > 1) {
      navbar.style.background = "black";
    } else {
      navbar.style.background =
        "linear-gradient(to bottom, #000000, rgba(0, 0, 0, 0))";
    }
  });
});
