$(document).ready(function() {
  $(".home-slider").bxSlider({
    controls: false
  });

  //menu responsive
  const menu = document.querySelector(".menu-responsive");
  console.log(menu);
  const hamburguer = document.querySelector(".hamburguer-menu");
  console.log(hamburguer);
  menu.addEventListener("click", function(e) {
    hamburguer.style.transform = "translate(0%)";
    if (!hamburguer.is(e.target) && hamburguer.has(e.target).length === 0) {
      console.log("hola");
    }
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
