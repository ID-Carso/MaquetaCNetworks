let country = localStorage.getItem("country");
let gender = localStorage.getItem("gender");

if(country){
  $('.SeleccionPaisLista').text(country);
}

if(gender){
  let iconFemale = $('#women');
  let iconMale = $('#men');
  let genderMale = $('#hombre');
  let genderFemale = $('#mujer');
  if(gender == "F"){
    genderFemale.attr("checked", true);
    genderMale.attr("checked", false);
    iconMale.attr("src", "images/datos-adicionales/masculino-inactivo.svg");
    iconFemale.attr("src", "images/datos-adicionales/femenino-activo.svg");
  }else{
    genderFemale.attr("checked", false);
    genderMale.attr("checked", true);
    iconMale.attr("src", "images/datos-adicionales/masculino-activo.svg");
    iconFemale.attr("src", "images/datos-adicionales/femenino-inactivo.svg");
  }
}