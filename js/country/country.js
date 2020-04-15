function getNameCountry(image) {
  let url = image.split("/");
  let imageCountry = url[url.length - 1];
  let nameCountry = "";
  switch (imageCountry) {
    case "usa.svg":
      nameCountry = "usa";
      break;
    case "argentina.svg":
      nameCountry = "argentina";
      break;
    case "brazil.svg":
      nameCountry = "brazil";
      break;
    case "chile.svg":
      nameCountry = "chile";
      break;
    case "colombia.svg":
      nameCountry = "colombia";
      break;
    case "costa-rica.svg":
      nameCountry = "costa-rica";
      break;
    case "ecuador.svg":
      nameCountry = "ecuador";
      break;
    case "el-salvador.svg":
      nameCountry = "el-salvador";
      break;
    case "guatemala.svg":
      nameCountry = "guatemala";
      break;
    case "honduras.svg":
      nameCountry = "honduras";
      break;
    case "nicaragua.svg":
      nameCountry = "nicaragua";
      break;
    case "panama.svg":
      nameCountry = "panama";
      break;
    case "paraguay.svg":
      nameCountry = "paraguay";
      break;
    case "puerto-rico.svg":
      nameCountry = "puerto-rico";
      break;
    case "peru.svg":
      nameCountry = "peru";
      break;
    case "dominican-republic.svg":
      nameCountry = "dominican-republic";
      break;
    case "uruguay.svg":
      nameCountry = "uruguay";
      break;

    default:
      break;
  }
  return nameCountry;
}

export { getNameCountry };
