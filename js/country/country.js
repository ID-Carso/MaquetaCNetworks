function getNameCountry(image) {
  let nameCountry = "";
  switch (image) {
    case "images/paises/usa.svg":
      nameCountry = "usa";
      break;
    case "images/paises/argentina.svg":
      nameCountry = "argentina";
      break;
    case "images/paises/brazil.svg":
      nameCountry = "brazil";
      break;
    case "images/paises/chile.svg":
      nameCountry = "chile";
      break;
    case "images/paises/colombia.svg":
      nameCountry = "colombia";
      break;
    case "images/paises/costa-rica.svg":
      nameCountry = "costa-rica";
      break;
    case "images/paises/ecuador.svg":
      nameCountry = "ecuador";
      break;
    case "images/paises/el-salvador.svg":
      nameCountry = "el-salvador";
      break;
    case "images/paises/guatemala.svg":
      nameCountry = "guatemala";
      break;
    case "images/paises/honduras.svg":
      nameCountry = "honduras";
      break;
    case "images/paises/nicaragua.svg":
      nameCountry = "nicaragua";
      break;
    case "images/paises/panama.svg":
      nameCountry = "panama";
      break;
    case "images/paises/paraguay.svg":
      nameCountry = "paraguay";
      break;
    case "images/paises/puerto-rico.svg":
      nameCountry = "puerto-rico";
      break;
    case "images/paises/peru.svg":
      nameCountry = "peru";
      break;
    case "images/paises/dominican-republic.svg":
      nameCountry = "dominican-republic";
      break;
    case "images/paises/uruguay.svg":
      nameCountry = "uruguay";
      break;

    default:
      break;
  }
  return nameCountry;
}
