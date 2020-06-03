let h;
function previewPage(icon) {
  let pageContainer = $("iframe");
  let iframeCanalClaro = $("#navbar-prev-canal-claro iframe");
  let iframeProgramacion = $("#navbar-prev-programacion iframe");
  let iframeHome = $("#navbar-prev-home iframe");
  let prevMobileIcon = $("#prev-mobile");
  let prevTabletIcon = $("#prev-tablet");
  let prevDesktopIcon = $("#prev-desktop");
  let h = pageContainer.css("height");
  console.log("la altura" + h);

  //MOBILE
  if (icon.is("#prev-mobile")) {
    prevMobileIcon.css("opacity", "1");
    prevTabletIcon.css("opacity", "0.4");
    prevDesktopIcon.css("opacity", "0.4");
    pageContainer.css("width", "375px");
    pageContainer.css("box-shadow", "rgba(0, 0, 0, 0.5) -1px -1px 17px 9px");
    iframeHome.css("height", "4400px");
    iframeProgramacion.css("height", "8000px");
    iframeCanalClaro.css("height", "3600px");
    /*if ((h = 4300)) {
      pageContainer.css("max-height", "3450px");
    } else if ((h = 16250)) {
      pageContainer.css("max-height", "10600px");
    }*/
  }
  //TABLET
  else if (icon.is("#prev-tablet")) {
    prevMobileIcon.css("opacity", "0.4");
    prevTabletIcon.css("opacity", "1");
    prevDesktopIcon.css("opacity", "0.4");
    pageContainer.css("width", "1024px");
    pageContainer.css("box-shadow", "rgba(0, 0, 0, 0.5) -1px -1px 17px 9px");
    iframeHome.css("height", "5100px");
    iframeProgramacion.css("height", "12000px");
    iframeCanalClaro.css("height", "4300px");
    /*if ((h = 4300)) {
      pageContainer.css("max-height", "3980px");
    } else if ((h = 16250)) {
      pageContainer.css("max-height", "16000px");
    }*/
  }
  //PC
  else {
    pageContainer.css("width", "92%");
    prevMobileIcon.css("opacity", "0.4");
    prevTabletIcon.css("opacity", "0.4");
    prevDesktopIcon.css("opacity", "1");
    pageContainer.css("box-shadow", "rgba(0, 0, 0, 0.5) -1px -1px 17px 9px");
    iframeHome.css("height", "4900px");
    iframeProgramacion.css("height", "12000px");
    iframeCanalClaro.css("height", "4600px");
    /*if ((h = 4300)) {
      pageContainer.css("max-height", "4300px");
    } else if ((h = 16250)) {
      pageContainer.css("max-height", "16100px");
    }*/
  }
}

export { previewPage };
