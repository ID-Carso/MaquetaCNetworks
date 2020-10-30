function selectCountry(country) {
  var countryFlag = country.children(".Icon_paises").attr("src");
  if (countryFlag === undefined) {
    countryFlag = "images/paises/dominican-republic.svg";
  }
  if (typeof Storage !== "undefined") {
    localStorage.setItem("src", countryFlag);
  } else {
    console.warn("Tu navegador no sporta Session Storage");
  }
}

export { selectCountry };
