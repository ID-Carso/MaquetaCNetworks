function getMonthAndYear() {
  let date = new Date();
  let year = date.getFullYear();
  let month = date.getMonth();

  let months = [
    "ENERO",
    "FEBRERO",
    "MARZO",
    "ABRIL",
    "MAYO",
    "JUNIO",
    "JULIO",
    "AGOSTO",
    "SEPTIEMBRE",
    "OCTUBRE",
    "NOVIEMBRE",
    "DICIEMBRE"
  ];

  return `${months[month]} ${year}`;
}

function getDays() {
  let date = new Date();
  return new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
}

function getDay() {
  let date = new Date();
  return date.getDate();
}

function getDayName(day) {
  let date = new Date();
  let currentDay =
    new Date(date.getFullYear(), date.getMonth(), day).getUTCDay() - 1;
  let days = ["LUN", "MAR", "MIER", "JUE", "VIE", "SAB", "DOM"];
  return days[currentDay];
}

export { getMonthAndYear, getDays, getDay, getDayName };
