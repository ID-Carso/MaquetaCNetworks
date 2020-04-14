function previewPage(icon, pageContainer) {
  let prevMobileIcon = $("#prev-mobile");
  let prevTabletIcon = $("#prev-tablet");
  let prevDesktopIcon = $("#prev-desktop");

  if (icon.is("#prev-mobile")) {
    prevMobileIcon.css("opacity", "1");
    prevTabletIcon.css("opacity", "0.4");
    prevDesktopIcon.css("opacity", "0.4");
    pageContainer.css("width", "375px");
  } else if (icon.is("#prev-tablet")) {
    prevMobileIcon.css("opacity", "0.4");
    prevTabletIcon.css("opacity", "1");
    prevDesktopIcon.css("opacity", "0.4");
    pageContainer.css("width", "1024px");
  } else {
    pageContainer.css("width", "100%");
    prevMobileIcon.css("opacity", "0.4");
    prevTabletIcon.css("opacity", "0.4");
    prevDesktopIcon.css("opacity", "1");
  }
}

export { previewPage };
