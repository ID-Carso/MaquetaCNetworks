import { previewPage } from "./preview/prev.js";
import { showContentNav } from "./nav/nav.js";
$(document).ready(function() {
  /* Previsualizar contenido en diferentes tamaños */
  const prevImage = $(".a-prev-image");

  prevImage.click(function() {
    let prevContainer = $("iframe");
    previewPage($(this), prevContainer);
  });

  /* Nav de administrador */
  let adminNavItem = $(".admin-item-nav");
  let adminContent = $(".admin-content");
  let activeClass = "active-admin-nav";

  adminContent.hide();
  $(".admin-content:first").show();

  adminNavItem.click(function() {
    showContentNav(adminContent, $(this), adminNavItem, activeClass);
  });
  /* End Navigation*/
});
