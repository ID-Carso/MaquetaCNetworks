let h;
function previewPage(icon, pageContainer) {
  let prevMobileIcon = $("#prev-mobile");
  let prevTabletIcon = $("#prev-tablet");
  let prevDesktopIcon = $("#prev-desktop");
  h= pageContainer.css("height");
 console.log("la altura"+ h);

  if (icon.is("#prev-mobile")) {
    prevMobileIcon.css("opacity", "1");
    prevTabletIcon.css("opacity", "0.4");
    prevDesktopIcon.css("opacity", "0.4");
    pageContainer.css("width", "375px");
    pageContainer.css("box-shadow","rgba(0, 0, 0, 0.5) -1px -1px 17px 9px");
    if(h = 4300){
      pageContainer.css("max-height", "3450px");
    }else if(h =16250){
      pageContainer.css("max-height", "10600px");
    }
    
  } else if (icon.is("#prev-tablet")) {
    prevMobileIcon.css("opacity", "0.4");
    prevTabletIcon.css("opacity", "1");
    prevDesktopIcon.css("opacity", "0.4");
    pageContainer.css("width", "1024px");
    pageContainer.css("box-shadow","rgba(0, 0, 0, 0.5) -1px -1px 17px 9px");
    if(h = 4300){
      pageContainer.css("max-height", "3980px");
    }else if(h =16250){
      pageContainer.css("max-height", "16000px");
    }
  } else {
    pageContainer.css("width", "92%");
    prevMobileIcon.css("opacity", "0.4");
    prevTabletIcon.css("opacity", "0.4");
    prevDesktopIcon.css("opacity", "1");
    pageContainer.css("box-shadow","rgba(0, 0, 0, 0.5) -1px -1px 17px 9px");
    if(h = 4300){
      pageContainer.css("max-height", "4300px");
    }else if(h =16250){
      pageContainer.css("max-height", "16100px");
    }
  }
}

export { previewPage };
