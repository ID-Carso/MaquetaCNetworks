import { previewPage } from "./preview/prev.js";
$(document).ready(function() {
  /* Previsualizar contenido en diferentes tamaños */
  const prevImage = $(".a-prev-image");

  prevImage.click(function() {
    let prevContainer = $("iframe");
    previewPage($(this), prevContainer);
  });
});
