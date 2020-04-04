import Section from "../UI/Section.js";

function getMetaKeys() {
  let data = {
    function: "getMetakeys"
  };
  $.ajax({
    type: "POST",
    data: data,
    url: "../../adapters/section.php",
    success: function(result) {
      let json = JSON.parse(result);
      let sectionUI = new Section();

      sectionUI.renderHome(json);
      sectionUI.renderCanalClaro();
    }
  });
}

export { getMetaKeys };
