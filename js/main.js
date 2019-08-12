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
});
