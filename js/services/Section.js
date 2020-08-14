import Section from "../UI/Section.js";

function getMetaKeys(landing) {
  let data = {
    function: "getMetakeys",
    landing: landing
  };
  $.ajax({
    type: "POST",
    data: data,
    cache: false,
    url: "./adapters/section.php",
    success: function (result) {
      let json = JSON.parse(result);
      let sectionUI = new Section();

      switch (landing) {
        case 'home':
          sectionUI.renderHome(json);
          break;
        case 'canal_claro':
          sectionUI.renderCanalClaro(json);
          break;
        case 'claro_cinema':
          sectionUI.renderClaroCinema(json);
          break;
        case 'concert_channel':
          sectionUI.renderConcertChanel(json);
          break;

        case 'programation':
          sectionUI.renderProgramation(json);

          break;
        case 'programation_edi':
          sectionUI.renderProgramation_edi(json);

          break;
        default:
          break;
      }
    }
  });
}

export {
  getMetaKeys
};